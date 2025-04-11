

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.titles.posts_title','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('titles.posts_title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

<?php $__env->startSection('content'); ?>
    <?php if(Auth::check()): ?>
        <?php if(session()->has('success-edit-post')): ?>
            <div style="margin-top: 30px;" class="alert alert-success">
                <?php echo e(session()->get('success-edit-post')); ?>

            </div>
        <?php endif; ?>
        <?php if(session()->has('success-delete-post')): ?>
            <div style="margin-top: 30px;" class="alert alert-danger">
                <?php echo e(session()->get('success-delete-post')); ?>

            </div>
        <?php endif; ?>
        <?php if(auth()->user()->admin == 'true' || auth()->user()->admin == 'TRUE'): ?>
            <div class="container">
                <?php if(count($posts) > 0): ?>
                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-xs-12 col-md-3">
                            <div class="color-block-wrapper">
                                <div class="color-block color-block-lblue">
                                    <span style="font-size: 1.7rem;">#<?php echo e($post->id); ?></span>
                                    <br>
                                    <!-- <hr style="margin:5px 0px;"> -->
                                    <b class="post-title-2 text-capitalize" style="font-size: 1.5rem;">
                                        <?php echo e(Str::limit($post->title, 15)); ?>

                                    </b>
                                    <div class="color-block-text">
                                        <p class="post-text-2" style="font-size: 10px;">
                                            <?php echo e(Str::limit($post->short_description, 30)); ?>

                                        </p>
                                    </div>
                                    <a href="<?php echo e(route('post.index', $post->slug)); ?>">
                                        <img class="post-image-2" style="height: 150px; max-width: 200px;"
                                    
                                        <?php if($post->picture == '/storage/images/no-picture'): ?>

                                            src="<?php echo e($post->random); ?>" 

                                        <?php else: ?> 

                                            src="<?php echo e($post->picture); ?>" 

                                        <?php endif; ?>

                                        alt="<?php echo e($post->title); ?>"
                                        title="<?php echo e($post->title); ?>">
                                    </a>
                                    <p class="post-date" style="color: #fff; margin-top: 10px; font-size: 12px; text-align: center;">Posted: <?php echo e(\Carbon\Carbon::parse($post->published_at)->diffForHumans()); ?></p>
                                    <p class="post-date" style="color: #fff; margin-top: 10px; font-size: 12px; text-align: center;">Likes: <?php echo e($post->likes->count()); ?></p>
                                </div>
                                <div style="margin: 20px;" class="text-center">
                                    <?php if($post->user_id == auth()->user()->id): ?>
                                        <a href="<?php echo e(route('post.edit', $post->id)); ?>" class="btn btn-success btn-group">Edit post</a>
                                    <?php endif; ?>
                                    <form action="<?php echo e(route('post.delete', $post->id)); ?>" method="POST" style="display: inline;">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger btn-group" onclick="confirm('Do you really want to delete this post?')">Delete post</button>
                                    </form>
                                    <a style="margin-top: 20px;" href="<?php echo e(route('post.index', $post->slug)); ?>" class="btn btn-primary btn-group-justified">Show post</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?> 
                    <div class="dashboard-div">
                        <h3>There are no posts at the moment.</h3>
                    </div>
                <?php endif; ?>
        <?php else: ?> 
            <?php if(count($auth_user->posts) > 0): ?>
                <?php $__currentLoopData = $auth_user->posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xs-12 col-md-3">
                        <div class="color-block-wrapper" style="padding-bottomfff: 1rem;">
                            <div class="color-block color-block-lblue">
                                <span style="font-size: 1.7rem; text-align: center;">#<?php echo e($post->id); ?></span>
                                <br>
                                <b class="post-title-2 text-capitalize" style="font-size: 2rem;">
                                    <?php echo e(Str::limit($post->title, 10)); ?>

                                </b>
                                <div class="color-block-text">
                                    <p class="post-text-2" style="font-size: 10px;">
                                        <?php echo e(Str::limit($post->short_description, 30)); ?>

                                    </p>
                                </div>
                                <a href="<?php echo e(route('post.index', $post->slug)); ?>">
                                    <img class="post-image-2" style="height: 150px; max-width: 200px;"
                                        
                                    <?php if($post->picture == '/storage/images/no-picture'): ?>

                                        src="<?php echo e($post->random); ?>" 

                                    <?php else: ?> 

                                        src="<?php echo e($post->picture); ?>" 

                                    <?php endif; ?>

                                    alt="<?php echo e($post->title); ?>"
                                    title="<?php echo e($post->title); ?>">
                                </a>                        
                                <p class="post-date" style="color: #fff; margin-top: 10px; font-size: 12px; text-align: center;">Posted: <?php echo e(\Carbon\Carbon::parse($post->published_at)->diffForHumans()); ?></p>
                                <p class="post-date" style="color: #fff; margin-top: 10px; font-size: 12px; text-align: center;">Likes: <?php echo e($post->likes->count()); ?></p>
                            </div>
                            <div style="margin: 20px;" class="text-center">
                                <?php if($post->user_id == auth()->user()->id): ?>
                                    <a href="<?php echo e(route('post.edit', $post->id)); ?>" class="btn btn-success btn-group">Edit post</a>
                                <?php endif; ?>
                                <?php if($post->user_id == auth()->user()->id): ?>
                                    <form action="<?php echo e(route('post.delete', $post->id)); ?>" method="POST" style="display: inline;">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger btn-group" onclick="confirm('Do you really want to delete this post?')">Delete post</button>
                                    </form>
                                <?php endif; ?>
                                <a style="margin-top: 20px;" href="<?php echo e(route('post.index', $post->slug)); ?>" class="btn btn-primary btn-group-justified">Show post</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <div class="dashboard-div">
                    <h3>There's no any posts at the moment...</h3>
                </div>
            <?php endif; ?>
            </div> 
        <?php endif; ?>
    <?php endif; ?>    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pagination'); ?>

    <div class="row">
        <center><?php echo e($posts->links('pagination::bootstrap-5')); ?></center>
    </div> 
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.profile_page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Blog-Management-System\resources\views/dashboard/posts/posts.blade.php ENDPATH**/ ?>