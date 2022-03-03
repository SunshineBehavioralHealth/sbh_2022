<?php

$insuranceFormID = '[gravityform id="' . get_field('insurance_form_id', 'option') . '" title="false" description="false"]';
?>


<section class="a-b-test a-b-test--insurance-form contact_cta_section contact_form_shortcode_section shortcode_section">
    <div class="contact_form_cta_container contact_form_shortcode_container">
        <h4 class="contact_form_cta_headline">Verify Your Insurnace</h4>
        <div class="contact_form_cta_form_container contact_form_shortcode_cta_form_container">
            <?= do_shortcode($insuranceFormID); ?>
        </div>
    </div>
</section>