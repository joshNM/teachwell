<section class="Home-intro island">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-7">
                <?php while(have_posts()) : the_post(); ?>
                <?php the_content(); ?>
                <a href="" class="Button Button--primary Button--large">About us</a>
                <?php endwhile; ?>
            </div>
            <div class="col-sm-12 col-md-5">
                <?php the_field('intro_sidebar'); ?>
            </div>
        </div>
    </div>
</section>