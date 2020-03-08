<?php get_header();?>
<div class="contact-main-container">
      <div class="background-video-wrapper">
        <video
          class="contact-video"
          autoplay
          muted
          loop
          id="contact-background-video"
        >
          <source src="<?php echo get_template_directory_uri();?>/video/impala.mp4" />
        </video>
      </div>

      <div class="contact-form-wrapper">
        <p>Skontaktuj się z nami za pomocą formularza :)</p>
        <?php echo do_shortcode("[Form id='1']"); ?>
      </div>
</div>
<?php get_footer();?>