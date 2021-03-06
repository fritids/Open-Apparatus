

<?php get_header();?>


<!-- Page content
    ================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->
<div class="row page-title">
  <div class="container">
    <h1><?php echo get_the_title(); ?></h1>
    <div class="breadcrumbs"><?php the_breadcrumb(); ?></div>
  </div>
</div>
<div class="container blog">
  <div class="row">

    <div class="span8">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



    <div class="blog-list">

            <?php if ( has_post_thumbnail() ) { ?>
              <div class="blog-pdate green-bg"><?php the_time('M'); ?><br /><?php the_time('d'); ?></div>
              <div class="blog-thumb-wrapper"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('category-thumb');  ?></a></div>

              <?php }else{?>

              <div class="blog-pdate-noimg green-bg"><?php the_time('M'); ?><br /><?php the_time('d'); ?></div>

              <?php } ?>




            <h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h2>

            <p> <?php the_excerpt(); ?></p>

            <div class="clear"></div>
            <div class="blog-pinfo-wrapper">
                <div class="post-pinfo"><?php _e("By", 'funding'); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>" rel="tooltip" data-original-title="<?php _e("View all posts by", 'funding');?> <?php echo get_the_author(); ?>"><?php echo get_the_author(); ?></a> | <a rel="tooltip" title="<?php comments_number( 'No comments', 'One comment', '% comments' ); ?> in this post" href="<?php echo the_permalink(); ?>#comments"> <?php comments_number( 'No comments', 'One comment', '% comments' ); ?></a></div>
                <a class="button-green button-small" href="<?php the_permalink(); ?>"><?php _e("Read more", 'funding'); ?></a>
                <div class="clear"></div>
            </div>
        </div>
        <!-- /.blog-post -->


        <?php endwhile; endif; ?>
        <div class="clear"></div>
    </div>
    <!-- /.span8 -->


    <div class="span4 ">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer widgets') ) : ?>
                <?php dynamic_sidebar('two'); ?>
           <?php endif; ?>
    </div>
    <!-- /.span4 -->

  </div>
  <!-- /.row -->
</div>
<!-- /.container -->


<?php get_footer(); ?>



</body>
</html>