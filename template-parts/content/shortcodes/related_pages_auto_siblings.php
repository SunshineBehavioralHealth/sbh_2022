<?php 

$child_args = array(
    'post_parent' => $post->post_parent,
    'post_type'   => 'page',
    'post_status' => 'publish',
    'orderby' => 'title',
    'order' => 'ASC'
);

$sibling_pages = get_children( $child_args );

if (!empty($sibling_pages)) : ?>
    <section class="related_pages_section related_pages_section_nonsidebar related_pages_sidebar_auto m-b-35">
        <div class="related_pages_headline">
            <h4><?php echo get_field('related_pages_title') ?></h4>
            <p><?php echo get_field('related_pages_subheadline') ?></p>
        </div>
        <div class="related_pages_wrapper">
            <?php
            if (have_rows('related_pages')) :
                while (have_rows('related_pages')) : the_row();
            ?>
                    <div class="related_pages_element">
                        <a href="<?php echo get_sub_field('link') ?>"><?php echo get_sub_field('text') ?></a>
                    </div>
            <?php
                endwhile;
            endif;
            ?>
            <?php foreach ($sibling_pages as $page) : ?>
                <div class="related_pages_element">
                    <a class="color-secondary text-center" href="<?= get_permalink($page->ID) ?>"><?= $page->post_title ?></a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <?php else :  ?>
        <h2>related pages auto siblings else</h2>
<?php endif; ?>