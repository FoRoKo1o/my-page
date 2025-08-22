<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['variant' => 'default']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['variant' => 'default']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<?php
$classes = match($variant) {
    'primary' => 'btn bg-green-500 text-white',
    'secondary' => 'btn bg-gray-300 text-black',
    default => 'btn bg-blue-500 text-white',
};
?>

<button <?php echo e($attributes->merge(['class' => $classes . ' px-4 py-2 rounded-full hover:opacity-90'])); ?>>
    <?php echo e($slot); ?>

</button>
<?php /**PATH /home/toor/projekty/szablon/my-page/web/app/themes/my-theme/resources/views/components/button.blade.php ENDPATH**/ ?>