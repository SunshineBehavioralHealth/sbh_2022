<?php
get_template_part('template-parts/javascript/authorMedicalReviewJs');

$author_user = get_field("editor_user");
$author_meta_data = get_user_meta($author_user['ID']);
$author_avatar = get_field('profile_thumbnail', 'user_' . $author_user['ID']);

$medical_review_user = get_field("medical_review_user");
$medical_reviewer_meta_data = get_user_meta($medical_review_user['ID']);
$medical_reviewer_avatar = get_field('profile_thumbnail', 'user_' . $medical_review_user['ID']);
$medical_review_bio =  $medical_reviewer_meta_data['description'][0];
$medical_review_date = get_field('clinically_reviewed_date');
?>

<div class="mobile-author-and-review">
    <div class="medical_review_spacer"></div>
    <div class="row">
        <?php if (!empty($author_user)) : ?>
            <div class="mobile-author-and-review--author col col-xs-6">
                <div class="flex">
                    <div class="flex align-center justify-center m-r-10">
                        <img class="mobile-author-and-review--avatar avatar" src="<?= $author_avatar['url'] ?>" alt="" loading="lazy">
                    </div>
                    <div class="mobile-author-and-review--author--content">
                        <div class="mobile-author-and-review--author--edited">
                            <p class="mobile-author-and-review--date-title">Last Edited:</p>
                            <p class="mobile-author-and-review--date"><?= the_modified_date('m/d/Y') ?></p>
                        </div>
                        <div class="mobile-author-and-review--author--name">
                            <p class="mobile-author-and-review--job-title">Author:</p>
                            <a href="/contributors#<?= $author_meta_data['first_name'][0] . '_' . $author_meta_data['last_name'][0] ?>">
                                <p class="mobile-author-and-review--name"><?php echo $author_user['display_name'] ?></p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php if (!empty($medical_review_user)) : ?>
            <div class="mobile-author-and-review--review relative col col-xs-6">
                <div class="mobile-author-and-review--review--content flex">
                    <div class="flex align-center justify-center">
                        <img class="mobile-author-and-review--avatar avatar m-r-10" src="<?= $medical_reviewer_avatar['url'] ?>" alt="" loading="lazy">
                    </div>
                    <div class="">

                        <p class="mobile-author-and-review--date-title no-wrap">Clinically Reviewed:</p>
                        <p class="mobile-author-and-review--date no-wrap"><?= $medical_review_date ?></p>


                        <p class="mobile-author-and-review--job-title no-wrap">Medical Reviewer:</p>
                        <a href="/contributors#<?php echo $medical_reviewer_meta_data['first_name'][0] . '_' . $medical_reviewer_meta_data['last_name'][0] ?>">
                            <p class="mobile-author-and-review--name no-wrap"><?php echo $medical_review_user['display_name'] ?></p>
                        </a>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
    <div class="medical_review_spacer"></div>
</div>