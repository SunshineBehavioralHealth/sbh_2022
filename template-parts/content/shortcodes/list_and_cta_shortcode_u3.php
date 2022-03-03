<?php
$list_and_cta = get_field('list_and_cta_shortcode_u3', 'option');

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
                    <?php foreach ($list_and_cta['list'] as $list_item) : ?>
                        <div class="list_and_cta_list_element">
                            <img src="<?= $list_item['image']['url'] ?>" alt="" loading="lazy">
                            <p><?= $list_item['text'] ?></p>
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