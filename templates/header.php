<header class="Header">
    <div class="Header__login-details">
        <div class="container">
            <ul>
                <li><a href="<?php the_permalink(70) ?>">Register</a></li>
                <li><a href="<?php the_permalink(70) ?>">Login <i class="fa fa-user" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
    <nav class="Header__nav">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a href="<?php echo home_url(); ?>"><img class="Header__logo" src="<?php $logoArray = get_field('header_logo', 'option'); echo $logoArray['url']; ?>" alt="<?php echo $logoArray['alt'] ?>" title="<?php echo $logoArray['title'] ?>" ></a>
                </div>
                <div class="col-md-8">
                      <?php
                      if (has_nav_menu('primary_navigation')) :
                        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
                      endif;
                      ?>
                </div>
            </div>
        </div>
    </nav>
</header>

