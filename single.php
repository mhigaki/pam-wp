<?php get_header(); ?>

<?php get_template_part( 'template-parts/content/blog', 'banner' ); ?>       
<div class="blog-body content-area"> 
  <div class="container"> 
    <div class="row"> 
      <div class="col-lg-8 col-md-12"> 
        <!-- Blog box start -->               
        <?php if ( have_posts() ) : ?><?php while ( have_posts() ) : the_post(); ?><?php get_template_part( 'template-parts/content/content-single-post' ); ?><?php endwhile; ?><?php endif; ?>               
        <!-- Blog box end -->               

        <!-- Comments start -->               

        <!-- Comments end -->               
      </div>             
      <div class="col-lg-4 col-md-12"> 
        <?php get_sidebar( 'right' ); ?>               
      </div>             
    </div>           
  </div>         
</div>       


<?php get_footer(); ?>