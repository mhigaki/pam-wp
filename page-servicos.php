<?php
/*
 Template Name: Pagina de Serviços
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
                <i class="fa fa-phone"></i> <?php _e( '+1-8X0-666-8X88', 'pam' ); ?>
              </li>
              <li>
                <a href="contact.html" class="btn btn-md button-theme"><?php _e( 'Contact us', 'pam' ); ?></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="content-area services-3">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="service-text">
          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>

          <a class="btn btn-md btn-outline-2" href="#"><?php _e( 'Saiba Mais', 'pam' ); ?></a>
        </div>
      </div>
      <div class="col-lg-8">
        <?php
                          $servicos_query_args = array(
                            'post_type' => 'servicos',
                            'post_status' => 'publish',
                            'posts_per_page' => 6,
                            'order' => 'ASC',
                            'orderby' => 'rand',
                            'cache_results' => false
                          )
                      ?><?php $servicos_query = new WP_Query( $servicos_query_args ); ?><?php if ( $servicos_query->have_posts() ) : ?><div class="row">
          <?php while ( $servicos_query->have_posts() ) : $servicos_query->the_post(); ?><div <?php post_class( 'col-md-4 col-sm-6 col-6' ); ?> id="post-<?php the_ID(); ?>">
            <div class="service-info-2">
              <i class="<?php echo get_field( 'icon_services' ); ?>"></i>
              <h3><?php the_title(); ?></h3>
              <?php the_content(); ?>
            </div>
          </div><?php endwhile; ?><?php wp_reset_postdata(); ?>





        </div><?php endif; ?>
      </div>
    </div>
  </div>
</div>
<div class="counters overview-bgi">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-6 wow fadeInLeft delay-04s">
        <div class="media counter-box">
          <div class="media-left">
            <i class="flaticon-tag"></i>
          </div>
          <div class="media-body">
            <h1 class="counter"><?php _e( '967', 'pam' ); ?></h1>
            <p><?php _e( 'Listings For Sale', 'pam' ); ?></p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 wow fadeInLeft delay-04s">
        <div class="media counter-box">
          <div class="media-left">
            <i class="flaticon-business"></i>
          </div>
          <div class="media-body">
            <h1 class="counter"><?php _e( '1276', 'pam' ); ?></h1>
            <p><?php _e( 'Listings For Rent', 'pam' ); ?></p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 wow fadeInRight delay-04s">
        <div class="media counter-box">
          <div class="media-left">
            <i class="flaticon-people"></i>
          </div>
          <div class="media-body">
            <h1 class="counter"><?php _e( '396', 'pam' ); ?></h1>
            <p><?php _e( 'Agents', 'pam' ); ?></p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 wow fadeInRight delay-04s">
        <div class="media counter-box">
          <div class="media-left">
            <i class="flaticon-people-1"></i>
          </div>
          <div class="media-body">
            <h1 class="counter"><?php _e( '177', 'pam' ); ?></h1>
            <p><?php _e( 'Brokers', 'pam' ); ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="testimonial-3">
  <div class="container">
    <div class="main-title">
      <h1><?php _e( 'Our Testimonial', 'pam' ); ?></h1>
    </div>
    <div class="slick-slider-area">
      <div class="row slick-carousel" data-slick='{"slidesToShow": 2, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
        <div class="slick-slide-item">
          <div class="testimonial-inner">
            <div class="content-box">
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-full"></i>
              </div>
              <p><?php _e( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever', 'pam' ); ?></p>
            </div>
            <div class="media">
              <a href="#"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/avatar/avatar-2.jpg" alt="testimonial-avatar" class="img-fluid"> </a>
              <div class="media-body align-self-center">
                <h5>
                              <?php _e( 'Eliane Perei', 'pam' ); ?> </h5>
                <h6><?php _e( 'Web Developer', 'pam' ); ?></h6>
              </div>
            </div>
          </div>
        </div>
        <div class="slick-slide-item">
          <div class="testimonial-inner">
            <div class="content-box">
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-full"></i>
              </div>
              <p><?php _e( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever', 'pam' ); ?></p>
            </div>
            <div class="media">
              <a href="#"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/avatar/avatar-3.jpg" alt="testimonial-avatar" class="img-fluid"> </a>
              <div class="media-body align-self-center">
                <h5>
                              <?php _e( 'Maria Blank', 'pam' ); ?> </h5>
                <h6><?php _e( 'Office Manager', 'pam' ); ?></h6>
              </div>
            </div>
          </div>
        </div>
        <div class="slick-slide-item">
          <div class="testimonial-inner">
            <div class="content-box">
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-full"></i>
              </div>
              <p><?php _e( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever', 'pam' ); ?></p>
            </div>
            <div class="media">
              <a href="#"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/avatar/avatar-4.jpg" alt="testimonial-avatar" class="img-fluid"> </a>
              <div class="media-body align-self-center">
                <h5>
                              <?php _e( 'Karen Paran', 'pam' ); ?> </h5>
                <h6><?php _e( 'Support Manager', 'pam' ); ?></h6>
              </div>
            </div>
          </div>
        </div>
        <div class="slick-slide-item">
          <div class="testimonial-inner">
            <div class="content-box">
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-full"></i>
              </div>
              <p><?php _e( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever', 'pam' ); ?></p>
            </div>
            <div class="media">
              <a href="#"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/avatar/avatar-1.jpg" alt="testimonial-avatar" class="img-fluid"> </a>
              <div class="media-body align-self-center">
                <h5>
                              <?php _e( 'John Pitarshon', 'pam' ); ?> </h5>
                <h6><?php _e( 'Creative Director', 'pam' ); ?></h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>