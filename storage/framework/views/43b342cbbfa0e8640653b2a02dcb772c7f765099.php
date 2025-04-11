<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a style="margin-left: 5px; padding: 5px" class="navbar-brand" href="<?php echo e(route('homepage')); ?>">
        <img style="height: 40px; width: 40px;" src="<?php echo e('/assets/img/vclogo.png'); ?>" alt="logo">
    </a>
</div>
<div class="navbar-header" style="padding-top: 1rem">
    <a style="font-size: 2rem; font-weight: 800; color: #000" href="<?php echo e(route('homepage')); ?>">Voctech Blog</a>
</div>

<ul class="nav navbar-top-links navbar-right">
    <!-- /.dropdown -->
    <li class="dropdown">
        <a class="dropdown-toggle prof-round" data-toggle="dropdown" href="#">
            <i class="fa fa-user fa-fw"></i>
            <?php if(Auth::check()): ?>
                <span style="text-transform: capitalize;"><?php echo e(explode(' ', Auth::user()->first_name)[0] . ' ' . substr(Auth::user()->last_name, 0, 1) . '.'); ?></span>
            <?php endif; ?>
            <i class="fa fa-caret-down ml-5"></i>
        </a>
        <?php if(Auth::check()): ?>
            <?php $user = Auth::user(); ?>
            <ul class="dropdown-menu dropdown-user prof-round">
                <li>
                    <a href="<?php echo e(route('users.show', $user->id)); ?>"><i class="fa fa-user fa-fw"></i> Profile</a>
                </li>
                <li>
                    <a href="<?php echo e(route('user.settings')); ?>"><i class="fa fa-gear fa-fw"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="<?php echo e(url('/logout')); ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
        <?php endif; ?>
        <!-- /.dropdown-user -->
    </li>
    <!-- /.dropdown -->
<!-- /.navbar-header -->
</ul>
<?php /**PATH C:\wamp64\www\Blog-Management-System\resources\views/layouts/includes/admin_top_nav.blade.php ENDPATH**/ ?>