

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.titles.analytics_title','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('titles.analytics_title'); ?>
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
			<div style="margin: 80px">
				<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"    integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ=="crossorigin="anonymous" referrerpolicy="no-referrer"></script>
				<div class="col-sm-7">
					<canvas id="myChart"></canvas>
				</div>
				<script>
					const ctx = document.getElementById('myChart').getContext('2d');
					const myChart = new Chart(ctx, {
						type: 'bar',
						data: {
							labels: ['User Registered', 'Blogs Posted'],
							datasets: [{
								label: 'Analytics',
								data: [<?php echo e($usersCount); ?>, <?php echo e($postsCount); ?>],
								backgroundColor: [
									'rgba(32, 255, 73, 0.2)',
									'rgba(54, 162, 235, 0.2)',
									'rgba(255, 206, 86, 0.2)',
									'rgba(75, 192, 192, 0.2)',
									'rgba(153, 102, 255, 0.2)',
									'rgba(255, 159, 64, 0.2)'
								],
								borderColor: [
									'rgb(45, 241, 31)',
									'rgba(54, 162, 235, 1)',
									'rgba(255, 206, 86, 1)',
									'rgba(75, 192, 192, 1)',
									'rgba(153, 102, 255, 1)',
									'rgba(255, 159, 64, 1)'
								],
								borderWidth: 1
							}]
						},
						options: {
							scales: {
								y: {
									beginAtZero: true
								}
							}
						}
					});
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
				<img height="150" src="assets/img/locked.gif" alt="Locked access" title="Locked access">
			</p>
			<p class="text-gray-500 mb-0">You do not have permission to see this page...</p>
			<a href="<?php echo e(route('profile-index')); ?>">&larr; Back</a>
		</div>
		<?php endif; ?>
	<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.profile_page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Blog-Management-System\resources\views/dashboard/analytics/analytics.blade.php ENDPATH**/ ?>