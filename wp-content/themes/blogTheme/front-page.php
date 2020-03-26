<?php get_header(); ?>


<?php
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
                <a href="<?php the_permalink() ?>" class="card-link">Voir plus</a>
            </div>

        </div>
    <?php
    endwhile;
}
?>

<?php get_footer(); ?>