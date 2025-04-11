<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li></li>
            <li>
                <a href="<?php echo e(route('profile-index')); ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-image fa-fw"></i>Posts<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo e(route('posts.index')); ?>">My Posts</a>
                    </li>
                </ul>
            </li>
            <?php if(auth()->check() && auth()->user()->admin == 'true'): ?>
                <li>
                    <a href="#"><i class="fa fa-users fa-fw"></i> Users<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?php echo e(route('users.index')); ?>">All Users</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart fa-fw"></i>Analytics<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?php echo e(route('analytics.index')); ?>">Show Analytics</a>
                        </li>
                    </ul>
                </li>
            <?php endif; ?>
            <li>
                <?php if(Auth::check()): ?>
                    <?php $user = Auth::user(); ?>
                    <a href="#"><i class="fa fa-user fa-fw"></i>Profile<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?php echo e(route('users.show', $user->id)); ?>">Profile</a>
                            <a href="<?php echo e(route('user.settings')); ?>">Profile Settings</a>
                        </li>
                    </ul>
                <?php endif; ?>
            </li>   
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>

<?php /**PATH C:\wamp64\www\Blog-Management-System\resources\views/layouts/includes/admin_side_nav.blade.php ENDPATH**/ ?>