<div class="row y-gap-20 pt-40">
    <div class="col-auto">
        <?php
            $excludedNames = [
                'detox and wellness',
                'masai mara balloon safari',
                'masai culture experience',
                'wildebeest migration',
            ];
        ?>

        <h2 class="">
            <?php if(in_array(strtolower($translation->name), $excludedNames)): ?>
                <?php echo e(__("What to know about :text", ['text' => $translation->name])); ?>

            <?php else: ?>
                <?php echo e(__("What to know before visiting :text", ['text' => $translation->name])); ?>

            <?php endif; ?>
        </h2>
    </div>
    <p class="text-15 text-dark-1">
        <?php echo clean($translation->content); ?>

    </p>
</div>

<?php /**PATH /home/libertye/public_html/themes/GoTrip/Location/Views/frontend/layouts/details/location-overview.blade.php ENDPATH**/ ?>