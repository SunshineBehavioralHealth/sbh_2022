<?php

/**
 * The template for displaying all pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package sunshine_behavioral_health
 */

namespace WP_Rig\WP_Rig;

get_header();

sunshine_behavioral_health()->print_styles('sunshine_behavioral_health-content');

//TOC
get_template_part('template-parts/javascript/tableOfContents');
get_template_part('template-parts/javascript/navigationJs');

?>

<main id="primary" class="">
	<?php get_template_part('template-parts/heros/desktop_and_mobile_hero_full_width'); ?>
	<div class="page_grid">
		<div class="page_wrapper">
			<!-- Covid Notice -->
			<?php get_template_part('template-parts/content/mobileCovidNotice'); ?>

			<!-- Medical Review -->
			<section class="editor_and_review_section hide_on_desktop">
				<?php get_template_part('template-parts/content/mobile_author_and_medical_review'); ?>
			</section>

			<!-- Page Content -->
			<section class="page_content list_styling ipad_width_restriction">
				<?php get_template_part('template-parts/content/googleTranslate'); ?>
				<?php echo get_field('content') ?>
			</section>

			<!-- Sources -->
			<?php get_template_part('template-parts/content/sources'); ?>

			<!-- Disclosure -->
			<?php get_template_part('template-parts/content/pageDisclaimer'); ?>

			<?php get_template_part('template-parts/content/phoneTreatmentCta'); ?>
		</div>
		<?php get_sidebar(); ?>
	</div>
</main>

<?php
get_footer();
