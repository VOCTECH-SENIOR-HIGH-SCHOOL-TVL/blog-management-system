

<?php $__env->startSection('content'); ?>
  <?php if(Auth::check()): ?>
    <div class="container my-5">
      <div class="profile-card2">
        <div class="profile-header2">
          <h3 class="text-capitalize"><?php echo e($user->first_name . ' ' . $user->last_name); ?></h3>
        </div>
        <hr class="hr">
        <div class="profile-body2">
          <img src="<?php echo e($user->picture ? asset($user->picture) : asset('images/default-avatar.png')); ?>" alt="User  Picture" class="profile-picture2">
          <h5><u><?php echo e($user->email); ?></u></h5>
          <div class="card2">
            <div class="card-body2">
              <p class="about2"><?php echo e($user->about ?? 'about me'); ?></p>
            </div>
          </div>
        </div>
        <div class="profile-footer2">
        <?php if(auth()->check() && auth()->user()->id === $user->id): ?>
          <a href="<?php echo e(route('user.settings')); ?>" class="edit-prof">Edit Profile</a>
        <?php endif; ?>
      </div>
    </div>
  <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.profile_page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Blog-Management-System\resources\views/dashboard/users/users_card.blade.php ENDPATH**/ ?>