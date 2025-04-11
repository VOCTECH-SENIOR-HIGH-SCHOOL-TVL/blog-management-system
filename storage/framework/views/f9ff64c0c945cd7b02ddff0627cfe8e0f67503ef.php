

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.titles.profile_settings_title','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('titles.profile_settings_title'); ?>
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
    <?php if(auth()->user()): ?>
        <div class="container">
            <div class="row justify-content-center">
                <?php if(session()->has('success-profile')): ?>
                    <div class="alert alert-success text-center">
                        <?php echo e(session()->get('success-profile')); ?>

                    </div>
                <?php endif; ?>
                <?php if(session()->has('failed-profile')): ?>
                    <div class="alert alert-danger">
                        <?php echo e(session()->get('failed-profile')); ?>

                    </div>
                <?php endif; ?>
                <div class="container">
                    <div class="row mt-4">
                        <div class="cardw3" style="text-align: left;">
                            <form method="POST" class="form-group" style="padding: 20px;" action="<?php echo e(route('user.update', $user->id)); ?>" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PATCH'); ?>
                                <div class="form-group">
                                    <img style="border-radius: 5px;" height="150" src="<?php echo e($user->picture ? $user->picture : "https://thumbs.dreamstime.com/b/    no-image-available-icon-flat-vector-no-image-available-icon-flat-vector-illustration-132482953.jpg"); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="first_name" class="text-label mb-2">First Name</label>
                                    <input type="text" name="first_name" class="form-control text-capitalize" value="<?php echo e(old('first_name', $user->first_name)); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="last_name" class="text-label mb-2">Last Name</label>
                                    <input type="text" name="last_name" class="form-control text-capitalize" value="<?php echo e(old('last_name', $user->last_name)); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="text-label mb-2">Email address</label>
                                    <input type="email" name="email" class="form-control" value="<?php echo e(old('email', $user->email)); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="picture" class="text-label mb-2">Update Profile Picture</label>
                                    <input type="file" name="picture" class="">
                                </div>
                                <div class="form-group">
                                    <label for="about" class="text-label mb-2">About</label>
                                    <textarea name="about" class="form-control" rows="3" id="myeditorinstance"><?php echo e(old('about', $user->about)); ?></textarea>            
                                </div>
                                <div class="form-group">
                                    <label for="password" class="text-label mb-2">Password</label>
                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span style="color: red;  font-size: 12px;">required</span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    <input type="password" name="password" class="form-control">
                                </div>
                                <div class="row align-right">
                                    <div class="btn btn-group" style="margin-top: 20px;">
                                        <button type="submit" class="btn btn-primary button-hover">Save</button>
                                    </div>    
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.profile_page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Blog-Management-System\resources\views/dashboard/users/users_settings.blade.php ENDPATH**/ ?>