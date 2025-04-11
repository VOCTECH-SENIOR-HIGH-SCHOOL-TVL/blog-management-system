<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PostRequest;
use App\Models\User;
use App\Models\Post;
use App\Models\Like;

class PostController extends Controller
{

    public function index()
    {

        $posts = Post::paginate(4);
        $auth_user = auth()->user();

        $user = auth()->user();

        return view('dashboard.posts.posts', compact(
            'posts',
            'auth_user',
            'user',
        ));
        
    }

    public function createblog() {
        return view('pages.create_blog');
    }

    public function store(PostRequest $request)
    {
        $input = $request->all();
        $user = Auth::user();   

        $input['published_at'] = now();

        if ($file = $request->file('picture')) {

            $name = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('storage/images'), $name);
            $input['picture'] = $name; 
        } else {

            $input['picture'] = 'no-picture.png';
        
        }

        if ($user) {
            $user->posts()->create($input);
            session()->flash('success', 'Blog post successfully published!!');
        } else {
            session()->flash('failure', 'Blog posting failed!');
        }

        return to_route('homepage')->withFragment('#blog-published');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $posts = Post::where('title', 'LIKE', "%{$query}%")
                    ->orWhere('content', 'LIKE', "%{$query}%")
                    ->paginate(4); 

        return view('layouts.homepage', compact('posts'));
    }

    public function like(Request $request)
    {

        $request->validate([
            'post_id' => 'required|exists:posts,id', 
        ]);
    
        try {

            $like = Like::updateOrCreate(
                ['post_id' => $request->post_id, 'user_id' => auth()->id()],
                ['like' => true]
            );
    
            $like_count = Like::where('post_id', $request->post_id)->count();
            return response()->json(['success' => true, 'like_count' => $like_count]);
        } catch (\Exception $e) {

            \Log::error('Error liking post: ' . $e->getMessage());
            return response()->json(['success' => false, 'message' => 'An error occurred while liking the post.'], 500);
        }
    }

    public function unlike(Request $request)
    {

        $request->validate([
            'post_id' => 'required|exists:posts,id',
        ]);

        try {

            $like = Like::where('post_id', $request->post_id)
                        ->where('user_id', auth()->id())
                        ->first();

            if ($like) {

                $like->delete();
            }

            $like_count = Like::where('post_id', $request->post_id)->count();
            return response()->json(['success' => true, 'like_count' => $like_count]);
        } catch (\Exception $e) {

            \Log::error('Error unliking post: ' . $e->getMessage());
            return response()->json(['success' => false, 'message' => 'An error occurred while unliking the post.'], 500);
        }
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view('dashboard.posts.posts_edit', compact(
            'post',
        ));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'required|string|max:255',
            'content' => 'required|string', 
            'picture' => 'nullable|image|max:2048', 
        ]);

        $post = Post::findOrFail($id);

        $post->title = $request->input('title');
        $post->short_description = $request->input('short_description'); 
        $post->content = $request->input('content'); 

        if ($file = $request->file('picture')) {

            if ($post->picture && $post->picture !== 'no-picture.png') {

                $trashPath = 'trash/' . basename($post->picture);
                Storage::disk('public')->move($post->picture, $trashPath);
            }

            $name = time() . '_' . $file->getClientOriginalName();
            
            $file->move(public_path('storage/images'), $name);
            
            $post->picture = $name; 

        } else {

            $post->picture = $post->picture ?: 'no-picture.png';

        }

        $post->save();

        return redirect()->route('posts.index')->with('success-edit-post', 'Post updated successfully.');
    }

    public function destroy($id)
    {

        $post = Post::findOrFail($id);

        $post->likes()->delete();

        if ($post->picture && $post->picture !== 'images/no-picture.png') {

            $imagePath = 'images/' . $post->picture;
            Storage::disk('public')->delete($imagePath);
        }

        $post->delete();

        session()->flash('delete-post', 'The post has been successfully deleted...');

        return redirect()->route('posts.index')->with('success-delete-post', 'Post deleted successfully.');
    }

}
