<section class="content-with-border">
    <div class="content-with-border--container p-t-10 p-b-10 p-r-30 p-l-30" style="border: 2px solid <?= !empty(get_field('content_with_border--border-color')) ? get_field('content_with_border--border-color') : '#000'; ?>">
        <?= get_field('content_with_border--content') ?>
    </div>
</section>