<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
{
    return [
        'title' => 'required|string|min:2|min:2',
        'short_description' => 'required|string|max:255',
        'content' => 'required|string',
        'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ];
}
}
