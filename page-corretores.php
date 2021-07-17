<?php
/*
 The template for displaying: Page Corretores
 */
?>
<?php get_header(); ?>

<?php get_template_part( 'template-parts/header/banner-corretor' ); ?>       
<div class="our-team-2 content-area"> 
  <div class="container"> 
    <!-- Main title -->           
    <div class="main-title"> 
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?> 
    </div>           
    <?php
                  $corretor_query_args = array(
                    'post_type' => 'corretor',
                    'posts_per_page' => 6,
                    'order' => 'ASC',
                    'orderby' => 'date'
                  )
              ?><?php $corretor_query = new WP_Query( $corretor_query_args ); ?><?php if ( $corretor_query->have_posts() ) : ?><div class="row"> 
      <?php while ( $corretor_query->have_posts() ) : $corretor_query->the_post(); ?><?php PG_Helper::rememberShownPost(); ?><div <?php post_class( 'col-xl-4 col-lg-4 col-md-6 col-sm-6' ); ?> id="post-<?php the_ID(); ?>"> 
        <div class="team-2"> 
          <div class="team-photo"> 
            <a href="<?php echo esc_url( get_permalink() ); ?>"> <?php echo PG_Image::getPostImage( null, 'agent', array(
                                                'class' => 'img-fluid',
                                                'loading' => 'lazy'
                                          ), null, null ) ?> </a> 
          </div>                 
          <div class="team-details"> 
            <h6><b><?php _e( 'CRECI:', 'pam' ); ?> </b><?php if ( get_field( 'creci_numero' ) ) : ?><span><?php echo get_field( 'creci_numero' ); ?></span><?php endif; ?></h6> 
            <h5><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h5> 
            <?php the_content(); ?> 
            <ul class="social-list clearfix"> 
              <?php if ( get_field( 'facebook' ) ) : ?><li>
                <a href="<?php echo get_field( 'facebook' ); ?>" class="facebook"><i class="fa fa-facebook"></i></a>
              </li><?php endif; ?>                     
              <?php if ( get_field( 'twitter' ) ) : ?><li>
                <a href="<?php echo get_field( 'twitter' ); ?>" class="twitter"><i class="fa fa-twitter"></i></a>
              </li><?php endif; ?>                     
              <?php if ( get_field( 'instagram' ) ) : ?><li>
                <a href="<?php echo get_field( 'instagram' ); ?>" class="instagram"><i class="fa fa-instagram"></i></a>
              </li><?php endif; ?>                     
              <?php if ( get_field( 'linkedin' ) ) : ?><li>
                <?php if ( get_field( 'linkedin' ) ) : ?><a href="<?php echo get_field( 'field2' ); ?>" class="linkedin"><i class="fa fa-linkedin"></i></a><?php endif; ?>
              </li><?php endif; ?>                     
            </ul>                   
          </div>                 
        </div>               
      </div><?php endwhile; ?><?php wp_reset_postdata(); ?>





    </div><?php else : ?><p><?php _e( 'Sorry, no posts matched your criteria.', 'pam' ); ?></p><?php endif; ?>           
  </div>         
</div>       


<?php get_footer(); ?>