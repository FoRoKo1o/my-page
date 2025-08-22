<div>

  <?php
    $posts_displayed = 0;
    $max_posts = 3;
  ?>

  <?php if(!have_posts()): ?>
    <?php if (isset($component)) { $__componentOriginal5194778a3a7b899dcee5619d0610f5cf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5194778a3a7b899dcee5619d0610f5cf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.alert','data' => ['type' => 'warning','class' => 'mb-6']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'warning','class' => 'mb-6']); ?>
      <?php echo __('Sorry, no results were found.', 'sage'); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5194778a3a7b899dcee5619d0610f5cf)): ?>
<?php $attributes = $__attributesOriginal5194778a3a7b899dcee5619d0610f5cf; ?>
<?php unset($__attributesOriginal5194778a3a7b899dcee5619d0610f5cf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5194778a3a7b899dcee5619d0610f5cf)): ?>
<?php $component = $__componentOriginal5194778a3a7b899dcee5619d0610f5cf; ?>
<?php unset($__componentOriginal5194778a3a7b899dcee5619d0610f5cf); ?>
<?php endif; ?>

    <div class="mb-8">
      <?php echo get_search_form(false); ?>

    </div>
  <?php endif; ?>

  <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
    <?php while(have_posts() && $posts_displayed < $max_posts): ?> 
      <?php (the_post()); ?>
      <article class="bg-white shadow rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-200">
        <?php echo $__env->first(['partials.content-' . get_post_type(), 'partials.content'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
      </article>
      <?php ($posts_displayed++); ?>
    <?php endwhile; ?>
  </div>

  <div class="mt-8 flex justify-center">
    <?php echo get_the_posts_navigation(); ?>

  </div>
</div><?php /**PATH /home/toor/projekty/szablon/my-page/web/app/themes/my-theme/resources/views/components/latestPosts.blade.php ENDPATH**/ ?>