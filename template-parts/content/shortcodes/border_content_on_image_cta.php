<section class="border-content-on-image-cta <?= !empty(get_field('border_content_on_image_cta--float-on-desktop')) ? 'float-right-desktop-only' : ''; ?>">
    <div class="border-content-on-image-cta--wrapper">
        <div class="top relative flex justify-center align-center">
            <img class="" src="<?= get_field('border_content_on_image_cta--image')['url'] ?>" alt="">
            <div class="top--content absolute">
                <div class="top--content--border-content">
                    <p><?= get_field('border_content_on_image_cta--border-content') ?></p>
                </div>
                <div class="top--content--below-border-content  flex flex-column justify-center align-center">
                    <?= get_field('border_content_on_image_cta--below-border-content') ?>
                </div>
            </div>
        </div>
        <div class="bottom p-10 color-white flex justify-center align-center">
            <a class="text-center" href="<?= get_field('border_content_on_image_cta--link')['url'] ?>" target="<?= get_field('border_content_on_image_cta--link')['target'] ?>"><?= get_field('border_content_on_image_cta--link')['title'] ?></a>
        </div>
    </div>

</section>