

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.titles.users_title','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('titles.users_title'); ?>
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
        <?php if(auth()->user()->admin == 'true'): ?>
            <div class="dashboard-div-form container">
                <?php if(session()->has('success-user-deleted')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session()->get('success-user-deleted')); ?>

                    </div>
                <?php endif; ?>
        <!-- <?php if(auth()->user()->admin == 'true' || auth()->user()->admin == 'TRUE'): ?>
            <a class="" href="<?php echo e(route('register')); ?>">Create Users</a>
        <?php endif; ?> -->
                <table>
                    <thead>
                        <tr>
                            <?php if(auth()->user()->admin == 'true' || auth()->user()->admin == 'TRUE'): ?>
                                <th class="text-center">ID</th>
                            <?php endif; ?>
                            <th class="text-center">Name</th>
                            <th class="text-center">Email</th>
                            <?php if(auth()->user()->admin == 'true' || auth()->user()->admin == 'TRUE'): ?>
                                <th class="text-center">Action</th>
                            <?php endif; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="text-center"><?php echo e($user->id); ?></td>
                                <td class="text-center"><a class="text-capitalize" href="<?php echo e(route('custom.show', $user)); ?>"><?php echo e(Str::before($user->first_name, ' ' , $user->last_name)); ?></a></td>
                                <td class="text-center"><?php echo e($user->email); ?></td>
                                <?php if(auth()->user()->admin == 'true' || auth()->user()->admin == 'TRUE'): ?>
                                    <?php if($user->id !== 15): ?>
                                        <td class="text-center">
                                            <form method="POST" action="<?php echo e(route('users.destroy', $user->id)); ?>" style="display:inline;">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <input class="btn btn-danger" type="submit" value="Delete" onclick="return confirm('Are you sure you want to delete this user?');"/>
                                            </form>
                                        </td>
                                    <?php else: ?>
                                        <td class="text-center">
                                            <button class="btn btn-danger" onclick="alert('This User Cannot Be Deleted')">Delete</button>
                                        </td>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <br>
                </form>   
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                </script>
            </div>
        <?php else: ?> 

        <!-- 404 Error Text -->
        <style>
            .noselect {
                user-select: none;
            }

            .margin {
                margin-top: 8rem
            }
        </style>
        <div class="text-center noselect margin">
            <div class="error mx-auto" data-text="404">404 error</div>
            <p class="lead  mb-5 text-gray-800">
                <img 
                height="150"
                src="assets/img/locked.gif" 
                alt="Locked access"
                title="Locked access">
            </p>
            <p class="text-gray-500 mb-0">You do not have permission to see this page...</p>
            <a href="<?php echo e(route('profile-index')); ?>">&larr; Back</a>
        </div>    
        <?php endif; ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>


















<?php echo $__env->make('pages.profile_page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Blog-Management-System\resources\views/dashboard/users/users.blade.php ENDPATH**/ ?>