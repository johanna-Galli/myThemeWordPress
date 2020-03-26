<?php get_header(); ?>

<h4>index</h4>
<?php
/* grafikart */
/*
$args = array(
    'post_type'         => 'post',
    'posts_per_page'    => 10
);
$the_query = new WP_Query($args);

// The Loop
if ($the_query->have_posts()) {
?>
    <div class="row">
        <?php
        while ($the_query->have_posts()) {
            $the_query->the_post();
        ?>
            <div class="col-sm-4">
                <div class="card">
                    <?php get_the_post_thumbnail('post-thumbnail', ['class' => 'card-img-top', 'alt' => '', 'style' => 'height: auto;']) ?>
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?php the_category(); ?></h6>
                        <a href="<?php get_the_permalink() ?>" class="card-link">Voir plus</a>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
<?php
}
*/
/* openclassroom */

if (have_posts()) {
    while (have_posts()) :
    ?>
        <div class="text-center">
            <div class="article-container">
                <h3><?php the_title(); ?></h3>
                <?php the_post(); ?>
                <?php the_content(); ?>
                <?php comments_template(); ?>
                <?php comment_form(); ?>
                <a href="<?php get_the_permalink() ?>" class="card-link">Voir plus</a>
            </div>

        </div>
    <?php
    endwhile;
}
?>
<?php get_footer(); ?>