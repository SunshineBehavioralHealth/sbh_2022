<?php
$orange_outline_boxes = get_field('orange_outline_boxes_u1', 'option');

if (!empty($orange_outline_boxes)) :
?>
    <section class="orange_outline_boxes_shortcode_section">
        <div class="orange_outline_boxes_shortcode_container">
            <h3><?= $orange_outline_boxes['headline'] ?></h3>
            <div class="orange_outline_boxes_shortcode_repeater_container">
                <?php foreach ($orange_outline_boxes['boxes'] as $box) : ?>
                    <a href="<?= $box['link']['url'] ?>" target="<?= $box['link']['target'] ?>">
                        <h4><?= $box['link']['title'] ?></h4>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>