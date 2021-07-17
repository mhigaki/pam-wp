<?php
/*
 Template Name: Sobre a Empresa
 Template Post Type: page
*/
?>
<?php get_header(); ?>

<div class="sub-banner"> 
  <div class="container"> 
    <div class="page-name"> 
      <h1><?php wp_title( '' ); ?></h1> 
    </div>           
  </div>         
  <div class="page-info"> 
    <div class="container"> 
      <div class="row"> 
        <div class="col-md-4"> 
          <div class="breadcrumb-area"> 
            <?php $breadcrumbs = PG_Helper::getBreadcrumbs( 'parents', true, 'Home'); ?><?php if( !empty( $breadcrumbs ) ) : ?><ul cms-breadcrumbs-home cms-breadcrumbs-separator="span" cms-breadcrumbs-last-item="> li:nth-of-type(2)" cms-breadcrumbs-last-item-name="> li:nth-of-type(2)"> 
              <li><?php for( $breadcrumbs_i = 0; $breadcrumbs_i < count( $breadcrumbs ) - 1; $breadcrumbs_i++) : ?><?php $breadcrumb = $breadcrumbs[ $breadcrumbs_i ]; ?><a href="<?php echo esc_url( $breadcrumb[ 'link' ] ); ?>"><?php echo $breadcrumb[ 'name' ]; ?></a><?php if( $breadcrumbs_i < count( $breadcrumbs ) - 1 ) : ?><span>/</span><?php endif; ?><?php endfor; ?></li>                     
              <?php $breadcrumb = $breadcrumbs[ count( $breadcrumbs ) - 1 ]; ?><li><?php echo $breadcrumb[ 'name' ]; ?></li>                     
            </ul><?php endif; ?>                   
          </div>                 
        </div>               
        <div class="col-md-8"> 
          <div class="contact-info"> 
            <ul> 
              <li> 
                <i class="fa fa-phone"></i> 
              </li>                     
              <li> 
                <a href="contact.html" class="btn btn-md button-theme"><?php _e( 'Contate-nos', 'pam' ); ?></a> 
              </li>                     
            </ul>                   
          </div>                 
        </div>               
      </div>             
    </div>           
  </div>         
</div>       
<div class="about-real-estate"> 
  <div class="container"> 
    <div class="row"> 
      <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12"> 
        <div class="about-slider-box simple-slider"> 
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> 
            <?php
                                  $sliders_query_args = array(
                                    'post_type' => 'sliders',
                                    'post_status' => 'publish',
                                    'nopaging' => true,
                                    'posts_per_page' => 3
                                  )
                              ?><?php $sliders_query = new WP_Query( $sliders_query_args ); ?><?php if ( $sliders_query->have_posts() ) : ?><div class="carousel-inner"> 
              <?php $sliders_query_item_number = 0; ?><?php while ( $sliders_query->have_posts() ) : $sliders_query->the_post(); ?><div class="carousel-item<?php if( $sliders_query_item_number == 0) echo ' active'; ?>"> 
                <?php echo PG_Image::getPostImage( null, 'large', array(
                                                    'class' => 'd-block w-100'
                                              ), 'both', null ) ?> 
              </div><?php $sliders_query_item_number++; ?><?php endwhile; ?><?php wp_reset_postdata(); ?>                     


            </div><?php endif; ?>                   
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"> <span class="slider-mover-left slider-btn-l" aria-hidden="true"> <i class="fa fa-long-arrow-left"></i> </span> </a> 
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"> <span class="slider-mover-right slider-btn-r " aria-hidden="true"> <i class="fa fa-long-arrow-right"></i> </span> </a> 
          </div>                 
          <div class="Properties-info"> 
            <ul> 
              <li> 
                <i class="flaticon-furniture"></i> 
                <h4><?php _e( 'Bed', 'pam' ); ?></h4> 
                <p><?php _e( '3', 'pam' ); ?></p> 
              </li>                     
              <li> 
                <i class="flaticon-holidays"></i> 
                <h4><?php _e( 'Beds', 'pam' ); ?></h4> 
                <p><?php _e( '2', 'pam' ); ?></p> 
              </li>                     
              <li> 
                <i class="flaticon-square"></i> 
                <h4><?php _e( 'SQ.FT', 'pam' ); ?></h4> 
                <p><?php _e( '3500', 'pam' ); ?></p> 
              </li>                     
              <li> 
                <i class="flaticon-window"></i> 
                <h4><?php _e( 'Garage', 'pam' ); ?></h4> 
                <p><?php _e( '1', 'pam' ); ?></p> 
              </li>                     
              <li> 
                <i class="flaticon-window"></i> 
                <h4><?php _e( 'Balcony', 'pam' ); ?></h4> 
                <p><?php _e( '1', 'pam' ); ?></p> 
              </li>                     
            </ul>                   
          </div>                 
        </div>               
      </div>             
      <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12"> 
        <div class="about-text"> 
          <h3><?php the_title( '<span>', '</span>' ); ?></h3> 
          <?php the_content(); ?> 


        </div>               
      </div>             
    </div>           
  </div>         
</div>       
<?php get_template_part( 'template-parts/content/content-area', 'services' ); ?>       
<?php get_template_part( 'template-parts/content/content-area', 'team-2' ); ?>       


<?php get_footer(); ?>