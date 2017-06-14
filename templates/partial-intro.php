<section class="Home-intro island">
    <div class="container">
        <h1><?php the_title(); ?></h1>
        <?php while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
        </div>
    </div>
</section>