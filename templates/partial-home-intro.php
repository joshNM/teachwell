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
                <h2>What is it?</h2>
                <ul>
                    <li><i class="fa fa-check" aria-hidden="true"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit</li>
                </ul>
            </div>
        </div>
    </div>
</section>