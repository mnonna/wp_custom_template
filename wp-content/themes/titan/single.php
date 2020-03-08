<?php 
    get_header();
?>
    
    <div class="titan-blog-header">
    <img src="<?php echo get_template_directory_uri();?> /img/computer-768696_1920.jpg"/>
      <span>tiT@n BLOG</span>
    </div>

    <div class="single-post-container">
      <div class="single-post-wrapper">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
            ?>
            <div class="single-post-title">
                <p>
                    <?php the_title(); ?>
                    <small> ,napisany przez <?php the_author(); ?>. Dnia: <?php the_date(); ?></small>
                </p>
            </div>
            <div class="single-post-thumbnail">
                <?php the_post_thumbnail(); ?>
            </div>
            <div class="single-post-content">
                <p>
                    <?php the_content(); ?>
                </p>
            </div>
            <?php endwhile;?>
        <?php endif; ?> 

        <?php $postID = get_queried_object_id();
          $comments = get_comments(array(
            'post_id' => $postID,
          ));

          $add_comment = array($fields = array('author' => '<div class="add_comm_author"></div>'));

          echo comment_form($add_comment,$postID);
        ?>

        <div class="single-post-comments-container">
          <h2>Post skomentowali...</h2>
          <?php foreach($comments as $comment){?>
            <div class="single-post-comment-wrapper">
            <div class="user-thumbnail">
              <img src="<?php echo get_template_directory_uri(); ?>/img/blank-profile-picture-973460_1280.png" />
              <div class="user-data">
                <strong>Użytkownik:</strong><br />
                <small><?php echo $comment->comment_author; ?></small>
                <small>Dnia: <?php echo $comment->comment_date; ?></small>
              </div>
            </div>
            <div class="single-post-comment-text">
              <span><?php echo $comment->comment_content; ?></span>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>

<?php get_footer();?>