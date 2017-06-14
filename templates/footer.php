<footer class="Footer island">
  <div class="container">
    <div class="row">
        <div class="col-md-6">
             <a href="<?php echo home_url(); ?>"><img class="Footer__logo" src="<?php $logoArray = get_field('footer_logo', 'option'); echo $logoArray['url']; ?>" alt="<?php echo $logoArray['alt'] ?>" title="<?php echo $logoArray['title'] ?>" ></a>
        </div>
        <div class="col-md-6">
            <?php dynamic_sidebar('sidebar-footer'); ?>
        </div>
    </div>
  </div>
</footer>
