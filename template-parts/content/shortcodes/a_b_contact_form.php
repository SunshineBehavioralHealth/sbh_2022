<?php

$standardContactFormID = '[gravityform id="' . get_field('standard_contact_form_id', 'option') . '" title="false" description="false"]';
?>


<section class="a-b-test a-b-test--contact-form contact_cta_section contact_form_shortcode_section shortcode_section">
    <div class="contact_form_cta_container contact_form_shortcode_container">
        <h4 class="contact_form_cta_headline">Take The First Step Towards Recovery</h4>
        <p>Talk to a Intake Coordinator</p>

        <div class="contact_form_cta_form_container contact_form_shortcode_cta_form_container">
            <?= do_shortcode($standardContactFormID); ?>
        </div>
    </div>
</section>