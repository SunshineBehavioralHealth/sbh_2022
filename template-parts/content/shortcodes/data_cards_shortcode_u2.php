<?php

$data_cards = get_field('data_cards_shortcode_2', 'option');

if (!empty($data_cards)) :
?>
    <section class="data_cards_shortcode_section">
        <div class="data_cards_shortcode_container">
            <?php foreach ($data_cards as $card) : ?>
                <div class="data_cards_indv_card">
                    <h5><?= $card['top_headline'] ?></h5>
                    <h5><?= $card['bottom_headline'] ?></h5>
                    <p><?= $card['paragraph'] ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
<?php endif; ?>