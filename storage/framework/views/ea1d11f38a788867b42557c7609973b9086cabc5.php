

<?php $__env->startSection('content'); ?>

  <style>
  
    @media only screen and (max-width: 1200px) {  
        .potd {
        width: 250px;
        height: auto;
      }
    }

    .dash-box {
      background-color: #f8f9fa;
      border-radius: 10px;
      padding: 10px;
      margin: 20px;
    }
    .h3-1 {
      font-size: 3rem;
      letter-spacing: 5px;
      text-align: center;
    }
    .img-container {
      display: flex;
      justify-content: space-between;
    }
    .img-m3 {
      padding: 10px;
      border-radius: 15px;
      transform: scale(0.8);
      transition: transform 0.5s ease;
    }
    .img-m3:hover {
      transform: scale(0.9);
    }
    .pht {
      background-color: #f8f9fa;
      border-radius: 10px;
      text-align: center;
      padding: 50px;
      margin: 0;
    }
  </style>
  <?php if(Auth::check()): ?>
    <div class="dash-box">
      <div class="dash-box">
        <h3 class="h3-1 text text-capitalize" style="font-family: Fantasy;">Welcome back, <?php echo e(Str::words(auth()->user()->first_name, 1)); ?>!</h3>
      </div>
    </div>
    <br>
    <div class="img-container pht">
      <a href="/posts"><img class="img-m3" src="https://cdn-icons-png.flaticon.com/128/10473/10473279.png"/></a>
      <?php if(auth()->user()->admin == 'true'): ?>
        <a href="/users"><img class="img-m3" src="https://cdn-icons-png.flaticon.com/128/694/694642.png"/></a>
        <a href="/analytics"><img class="img-m3" src="https://cdn-icons-png.flaticon.com/128/993/993762.png"/></a>
      <?php else: ?>
        <a href="<?php echo e(route('users.show', $user->id)); ?>"><img class="img-m3" src="https://cdn-icons-png.flaticon.com/128/1144/1144760.png"/></a>
      <?php endif; ?>
    </div>
  <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.profile_page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Blog-Management-System\resources\views/layouts/includes/profile_page_content_section.blade.php ENDPATH**/ ?>