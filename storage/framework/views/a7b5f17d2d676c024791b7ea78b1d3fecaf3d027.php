<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Voctech | Post Blog</title>
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo e(asset('css/styles.css')); ?>" rel="stylesheet" />
        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet" />
        <link rel="icon" type="image/x-icon" href="<?php echo e('../assets/img/vclogo.png'); ?>" />
        </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                
                
                <a class="navbar-brand" href="<?php echo e(route('homepage')); ?>">
                    <img src="../assets/img/vclogo.png" alt="" style="width: 50px; height: 50px;">Voctech Blog
                </a>

                
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.search_bar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('search_bar'); ?>
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

                <button class="navbar-toggler nav-obj" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                 
                    
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navbar_menu','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('navbar_menu'); ?>
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

                </div>
            </div>
        </nav>
        <!-- Page Header-->

        <header class="masthead" style="background: linear-gradient(360deg, #b4e1f7, #049be5); padding-bottom: 3rem;">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <center>
                            <h2 class="text-capitalize text-light"><?php echo e(Str::words($post->user->first_name, 1) . ' ' . $post->user->last_name); ?>'s Post</h2>
                            <span class="subheading text-light">A good blog is like a good conversation—let's get started!</span>     
                        </center>
                    </div>
                </div>
            </div>
        </header>
        <!-- Post Content-->
        <article class="mt-4 mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7 bordered" style="padding: 30px;">
                        <div class="profile-card">
                            <div class="profile-container">
                                <img class="profile-image" src="<?php echo e($post->user->picture); ?>" />
                            </div>
                            <div class="profile-info">
                                <p class="user-name"><b><a class="text-dark" style="text-decoration: none;" href="<?php echo e(route('custom.show', $post->user)); ?>"><?php echo e(Str::words($post->user->first_name, 1) . ' ' . $post->user->last_name); ?></a></b></p>
                                <p class="post-date"><?php echo e(\Carbon\Carbon::parse($post->published_at)->diffForHumans()); ?> <i class="fa fa-globe fa-fw"></i></p>
                            </div>
                        </div>
                        <h2 class="post-title-2 mt-2"><?php echo e($post->title); ?></h2>
                        <p class="post-text-2"><b><?php echo e($post->short_description); ?></b></p>
                        <img class="post-image-2"

                        <?php if($post->picture == true): ?>

                        src="<?php echo e($post->picture); ?>"

                        <?php else: ?> 

                        src="<?php echo e($post->random); ?>"
                            
                        <?php endif; ?>

                        alt="<?php echo e($post->title); ?>"
                        title="<?php echo e($post->title); ?>">
                        <span class="post-text-2"><?php echo $post->content; ?></span>
                        <hr>
                        <span style="cursor: pointer" id="like-btn" data-post-id="<?php echo e($post->id); ?>" data-liked="<?php echo e($post->likes->contains('user_id', auth()->id())); ?>">
                            <i class="fa fa-heart" aria-hidden="true" id="like-icon" style="color: <?php echo e($post->likes->contains('user_id', auth()->id()) ? 'red' : 'black'); ?>;"></i>
                            <span id="like-count" style="font-size: 15px;"><?php echo e($post->likes->count()); ?></span>
                        </span> 
                    </div>
                </div>
            </div>
        </article>
        
        <!-- Footer-->
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('footer'); ?>
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

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?php echo e(asset('js/scripts.js')); ?>"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>

            $(document).on('click', '#like-btn', function() {
            var postId = $(this).data('post-id');
            var isLiked = $(this).data('liked'); // Check if the post is already liked

                if (isLiked) {
                    // If already liked, send an AJAX request to unlike
                    $.ajax({
                        url: '/unlike',
                        method: 'POST',
                        data: {
                            post_id: postId,
                            _token: '<?php echo e(csrf_token()); ?>' // Include CSRF token
                        },
                        success: function(response) {
                            if (response.success) {
                                $('#like-count').text(response.like_count); // Update the like count
                                $('#like-btn').data('liked', false); // Update the liked
                                $('#like-icon').css('color', 'black'); // Change to white heart
                            } else {
                                alert(response.message); // Show error message
                            }
                        },
                        error: function(xhr) {
                            console.error(xhr.responseText); // Log the error response
                            alert('An error occurred while processing your request.'); // Show a generic error message
                        }
                    });
                } else {
                    // If not liked, send an AJAX request to like
                    $.ajax({
                        url: '/like',
                        method: 'POST',
                        data: {
                            post_id: postId,
                            _token: '<?php echo e(csrf_token()); ?>' // Include CSRF token
                        },
                        success: function(response) {
                            if (response.success) {
                                $('#like-count').text(response.like_count); // Update the like count
                                $('#like-btn').data('liked', true); // Update the liked state
                                $('#like-icon').css('color', 'red'); // Change to red heart
                            } else {
                                alert(response.message); // Show error message
                            }
                        },
                        error: function(xhr) {
                            console.error(xhr.responseText); // Log the error response
                            alert('An error occurred while processing your request.'); // Show a generic error message
                        }
                    });
                }
            });
        </script>
    </body>
</html>
<?php /**PATH C:\wamp64\www\Blog-Management-System\resources\views/pages/post_page.blade.php ENDPATH**/ ?>