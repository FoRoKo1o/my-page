<?php $__env->startSection('content'); ?>
  <?php echo $__env->make('partials.page-header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

  <div class="mt-8 flex justify-center">
    <?php echo get_the_posts_navigation(); ?>

  </div>

  <?php if (isset($component)) { $__componentOriginal498d286430457c063a7e5ad001b6d8a1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal498d286430457c063a7e5ad001b6d8a1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.latestPosts','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('latestPosts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal498d286430457c063a7e5ad001b6d8a1)): ?>
<?php $attributes = $__attributesOriginal498d286430457c063a7e5ad001b6d8a1; ?>
<?php unset($__attributesOriginal498d286430457c063a7e5ad001b6d8a1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal498d286430457c063a7e5ad001b6d8a1)): ?>
<?php $component = $__componentOriginal498d286430457c063a7e5ad001b6d8a1; ?>
<?php unset($__componentOriginal498d286430457c063a7e5ad001b6d8a1); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/toor/projekty/szablon/my-page/web/app/themes/my-theme/resources/views/index.blade.php ENDPATH**/ ?>