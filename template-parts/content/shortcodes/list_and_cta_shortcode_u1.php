<?php
$list_and_cta = get_field('list_and_cta_shortcode_u1', 'option');

if (!empty($list_and_cta)) :
?>
    <section class="list_and_cta_section list_and_cta_dynamic_shortcode">
        <div class="list_and_cta_container">
            <div class="list_and_cta_top">
                <h5><?= $list_and_cta['headline'] ?></h5>
                <p><?= $list_and_cta['subheadline'] ?></p>
            </div>
            <div class="list_and_cta_bottom">
                <div class="list_and_cta_list_wrapper">
                    <?php foreach ($list_and_cta['list'] as $item) : ?>
                        <div class="list_and_cta_list_element">
                            <img src="<?= $item['image']['url'] ?>" alt="" loading="lazy">
                            <p><?= $item['text'] ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="list_and_cta_bottom_cta_wrapper">
                    <a href="<?= $list_and_cta['link']['url'] ?>" target="<?= $list_and_cta['link']['target'] ?>"><?= $list_and_cta['link']['title'] ?></a>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>