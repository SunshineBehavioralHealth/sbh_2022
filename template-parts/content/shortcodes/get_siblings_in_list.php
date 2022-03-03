<?php

$child_args = array(
    'post_parent' => $post->post_parent,
    'post_type'   => 'page',
    'post_status' => 'publish',
    'orderby' => 'title',
    'order' => 'ASC'
);

$childrenPages = get_children( $child_args );


?>
<section class="get-other-children-in-table relative">
    <div class="relative">
        <h2 class="color-secondary text-center"><?= get_field('get_children_from_page--headline') ?></h2>
        <div class="get-other-children-in-table--container m-r-20">
            <ul class="flex flex-wrap space-around">
                <?php foreach ($childrenPages as $page) : ?>
                    <?php if (!empty($page)) : ?>
                        <li class="m-5 flex justify-center align-center"><a class="color-secondary text-center flex justify-center align-center" href="<?= get_permalink($page->ID) ?>"><?= $page->post_title ?></a></li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill-opacity="1" d="M0,96L48,117.3C96,139,192,181,288,213.3C384,245,480,267,576,266.7C672,267,768,245,864,229.3C960,213,1056,203,1152,213.3C1248,224,1344,256,1392,272L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </div>
</section>