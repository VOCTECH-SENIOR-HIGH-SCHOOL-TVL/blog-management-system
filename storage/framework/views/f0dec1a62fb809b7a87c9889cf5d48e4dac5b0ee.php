<div class="nav ms-auto py-4 py-lg-0">
    <a class="nav-link px-lg-3 py-3 py-lg-4" href="<?php echo e(route('homepage')); ?>">Home</a>
    <a class="nav-link px-lg-3 py-3 py-lg-4" href="<?php echo e(route('about-me')); ?>">About</a>
    <a class="nav-link px-lg-3 py-3 py-lg-4" href="<?php echo e(route('contact-me')); ?>">Contact</a>
    <?php if(auth()->user()): ?>
        <a class="nav-link px-lg-3 py-3 py-lg-4" href="<?php echo e(route('createblog')); ?>"><i class="fa fa-plus fa-fw"></i>Create</a>
    <?php endif; ?>
    
</div>
    <?php if(!auth()->user()): ?>
        <div class="nav ms-auto py-4 py-lg-0 gap-2">
            <a class="signup-btn" href="<?php echo e(route('register')); ?>">Sign up</a>
            <a class="login-btn" href="<?php echo e(route('login')); ?>">Log in</a>
        </div>
    <?php endif; ?>
</div>
<?php if(Auth::check()): ?>
    <div class="nav-bar">
        <div class="user-details">
            <!-- <i class="fa fa-user fa-fw text-light-1"></i> -->
            <img class="profile-image" src="<?php echo e(Auth::user()->picture); ?>" alt="Profile Picture" />
            <i  class="fa fa-circle" style="height: 20px; width: 20px; margin-left: -18px; margin-top: 28px"></i>
            <i class="fa fa-caret-down ml-5 text-light-1" style="height: 13px; width: 10px; color: white; margin-left: -15px; margin-top: 28px"></i>
            <div class="user-dropdown">                
                <a href="<?php echo e(route('profile-index')); ?>">
                    <i class="fa fa-user fa-fw"></i>
                    <span class="text-capitalize">
                    <?php echo e(explode(' ', Auth::user()->first_name)[0] . ' ' . substr(Auth::user()->last_name, 0, 1) . '.'); ?>

                    </span>
                </a>
                <a href="<?php echo e(route('user.settings')); ?>">
                    <i class="fa fa-gear fa-fw"></i>Settings
                </a>
                <hr class="m-0">
                <a href="<?php echo e(route('logout')); ?>">
                    <i class="fa fa-sign-out fa-fw"></i>Logout
                </a>
            </div>
        </div>
    </div>
<?php endif; ?>
    <script type="text/javascript">

        // Toggle dropdown menu
        document.querySelector('.user-details').addEventListener('click', function(){
                this.classList.toggle('active');
            });
            //Close dropdowwn if user click outside
            document.addEventListener('click', function(e){
                const userDetails = document.querySelector('.user-details');
                if( !userDetails.contains(e.target) ){
                    userDetails.classList.remove('active');
                }
            });
            
        // function logout() {
        //     if (confirm("Are you sure you want to logout?")) {
                
        //         const form = document.createElement('form');
        //         form.method = 'POST';
        //         form.action = '<?php echo e(route("logout")); ?>';

        //         const csrfToken = document.createElement('input');
        //         csrfToken.type = 'hidden';
        //         csrfToken.name = '_token';
        //         csrfToken.value = '<?php echo e(csrf_token()); ?>'; 

        //         form.appendChild(csrfToken);
        //         document.body.appendChild(form);
        //         form.submit(); 
        //     }
        // }
    </script><?php /**PATH C:\wamp64\www\Blog-Management-System\resources\views/components/navbar_menu.blade.php ENDPATH**/ ?>