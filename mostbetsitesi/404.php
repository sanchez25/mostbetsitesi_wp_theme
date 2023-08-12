<?php get_header('error'); ?>

  <div class="not-found-block">
    <div class="page-error" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/error-block.jpg);">
      <div class="page-error-content">
        <h1>SAYFA BULUNAMADI</h1>
        <img src="<?php echo get_template_directory_uri() ?>/images/error-logo.png" alt="404">
        <a href="/" class="page-error-link">Baştan başlamak</a>
      </div>
    </div>
  </div>

<?php get_footer('error'); ?>
