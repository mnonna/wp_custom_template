<?php get_header();?>
    <div class="titan-blog-header">
      <img src="<?php echo get_template_directory_uri();?> /img/computer-768696_1920.jpg"/>
      <span>tiT@n BLOG</span>
    </div>

    <div class="blog-header-text">
        <div class="header-text-wrapper">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
            ?>
            <p>
                <?php the_content(); ?>
            </p>

            <?php endwhile;?>
        <?php endif; ?> 
        </div>
    </div>

    <div class="blog-recent-posts-container">
      <div class="blog-recent-posts">
        <div class="blog-posts-header">
          <div class="posts-header">
            <h2>Co ciekawego u nas</h2>
            <img src="<?php echo get_template_directory_uri();?> /img/detective-1424831_1280.png";/>
          </div>
        </div>
        <div class="blog-recent-posts-wrapper">
        <?php
        $args = array(
            'post_type' => 'post'
        );

        $post_query = new WP_Query($args);

        if($post_query->have_posts() ) {
            while($post_query->have_posts() ) {
                $post_query->the_post();
                ?>
                <div class="titan-single-post-container">
                    <div class="post-thumbnail">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="post-content">
                        <a href=<?php echo the_permalink(); ?>><h3><?php the_title(); ?></h3></a>
                        <div class="post-text">
                            <p>
                                <?php the_content(); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php
                }
            }
        ?>
        </div>
      </div>
    </div>
<?php get_footer();?>