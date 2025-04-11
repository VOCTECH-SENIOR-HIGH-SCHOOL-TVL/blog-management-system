<!DOCTYPE html>

<html lang="en">

<head>

    <!-- Default meta data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#fff">

    <!-- Meta info -->
    <meta name="author" content="Justine Alvarez">
    <!-- Website Description -->
    <meta name="description" content="#">
    <meta name="keywords" content="Voctech Blog, technology, innovation, education, digital skills, online learning, career development, tech trends">

    <!-- Website Title -->
    <title>Dashboard | Blog</title>

    
    <link rel="icon" type="image/x-icon" href="<?php echo e('/assets/img/vclogo.png'); ?>" />
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo e(asset('css/libs.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('styles/dashboard_custom.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="<?php echo e(asset('css/dashboard_custom.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('css/guest.css')); ?>" rel="stylesheet" />

    
    <?php if (isset($component)) { $__componentOriginalac09df57349bd019565ada4b240c9ec027a8956f = $component; } ?>
<?php $component = App\View\Components\Head\TinymceConfig::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('head.tinymce-config'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Head\TinymceConfig::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalac09df57349bd019565ada4b240c9ec027a8956f)): ?>
<?php $component = $__componentOriginalac09df57349bd019565ada4b240c9ec027a8956f; ?>
<?php unset($__componentOriginalac09df57349bd019565ada4b240c9ec027a8956f); ?>
<?php endif; ?>
  
</head>

<body id="admin-page">
<?php if(auth()->check()): ?>
    <div id="wrapper">

        <!-- Navigation -->
        <?php echo $__env->make('layouts.includes.admin_nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
        
    </div>
    <!-- /#wrapper -->
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <?php echo $__env->yieldContent('content'); ?>
                    <br><br>
                    <?php echo $__env->yieldContent('scripts'); ?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
        <?php echo $__env->yieldContent('error'); ?>
    </div>
<?php else: ?>
    <div class="container-center">
        <div class="g-card">
            <p class="text-center-1">You cannot access this page<br>You are a guest!</p>
            <br>
            <a class="login-1" style="margin-right: 10px;" href="<?php echo e(route('login')); ?>">Login</a>
            <a class="home-1" style="margin-right: 10px;" href="<?php echo e(route('homepage')); ?>">Home</a>
            <a class="signup-1" href="<?php echo e(route('register')); ?>">Sign Up</a>
        </div>
    </div>
<?php endif; ?>
<!-- pagination -->
<?php echo $__env->yieldContent('pagination'); ?> 

<!-- jQuery -->
<script src="<?php echo e(asset('js/app2.js')); ?>"></script>
<script src="<?php echo e(asset('js/libs.js')); ?>"></script>


<script src="https://kit.fontawesome.com/2824446f9a.js" crossorigin="anonymous"></script>

<!-- Custom Scripts -->
<script src="<?php echo e(asset('js/scripts/scroll_to_top.js')); ?>"></script>
<script src="<?php echo e(asset('js/scripts/scroll_indicator.js')); ?>"></script>
<script src="<?php echo e(asset('js/scripts/sweet_alert.js')); ?>"></script>

</body>
</html>
<?php /**PATH C:\wamp64\www\Blog-Management-System\resources\views/pages/profile_page.blade.php ENDPATH**/ ?>