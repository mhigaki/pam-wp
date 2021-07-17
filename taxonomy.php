<?php get_header(); ?>

<div class="sub-banner">
  <div class="container">
    <div class="page-name">
      <h1><?php wp_title(); ?></h1>
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
<?php if ( is_post_type_archive( 'properties' ) ) : ?><div class="properties-section content-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-12">
        <!-- Option bar start -->
        <div class="option-bar d-none d-xl-block d-lg-block d-md-block d-sm-block">
          <div class="row">
            <div class="col-lg-6 col-md-5 col-sm-5 col-xs-2">
              <div class="sorting-options">
                <span><?php _e( 'View as:', 'pam' ); ?></span>
                <a href="properties-list-rightside.html" class="change-view-btn"><i class="fa fa-th-list"></i></a>
                <a href="properties-grid-rightside.html" class="change-view-btn active-view-btn"><i class="fa fa-th-large"></i></a>
              </div>
            </div>
            <div class="col-lg-6 col-md-7 col-sm-7 col-xs-10 cod-pad">
              <div class="sorting-options2">
                <span><?php _e( 'Order by:', 'pam' ); ?></span>
                <select class="sorting">
                  <option><?php _e( 'Price High to Low', 'pam' ); ?></option>
                  <option><?php _e( 'Price: Low to High', 'pam' ); ?></option>
                  <option><?php _e( 'Newest Properties', 'pam' ); ?></option>
                  <option><?php _e( 'Oldest Properties', 'pam' ); ?></option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <!-- Option bar end -->
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 wow fadeInUp delay-03s">
            <div class="property-box">
              <div class="property-thumbnail">
                <a href="properties-details.html" class="property-img"> <div class="listing-badges">
                    <span class="featured"><?php _e( 'Featured', 'pam' ); ?></span>
                  </div> <div class="price-ratings-box">
                    <p class="price">
                                      <?php _e( '$178,000', 'pam' ); ?> </p>
                    <div class="ratings">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-o"></i>
                    </div>
                  </div> <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/properties/properties-1.jpg" alt="properties">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/properties/properties-1.jpg" alt="properties">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/properties/properties-1.jpg" alt="properties">
                      </div>
                    </div>
                  </div> </a>
              </div>
              <div class="detail">
                <h1 class="title"> <a href="properties-details.html"><?php _e( 'Modern Family Home', 'pam' ); ?></a> </h1>
                <div class="location">
                  <a href="properties-details.html"> <i class="fa fa-map-marker"></i><?php _e( '123 Kathal St. Tampa City,', 'pam' ); ?> </a>
                </div>
                <ul class="facilities-list clearfix">
                  <li>
                    <i class="flaticon-furniture"></i> <?php _e( '3 Bedrooms', 'pam' ); ?>
                  </li>
                  <li>
                    <i class="flaticon-holidays"></i> <?php _e( '2 Bathrooms', 'pam' ); ?>
                  </li>
                  <li>
                    <i class="flaticon-square"></i> <?php _e( 'Sq Ft:3400', 'pam' ); ?>
                  </li>
                  <li>
                    <i class="flaticon-vehicle"></i> <?php _e( '1 Garage', 'pam' ); ?>
                  </li>
                </ul>
              </div>
              <div class="footer clearfix">
                <div class="pull-left days">
                  <p><i class="flaticon-time"></i> <?php _e( '5 Days ago', 'pam' ); ?></p>
                </div>
                <ul class="pull-right">
                  <li>
                    <a href="#"><i class="flaticon-favorite"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="flaticon-multimedia"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>











        </div>
        <!-- Page navigation start -->
        <?php get_template_part( 'template-parts/navigation/pagination-box' ); ?>
        <!-- Page navigation end-->
      </div>
      <div class="col-lg-4 col-md-12">
        <?php get_sidebar( 'properties' ); ?>
      </div>
    </div>
  </div>
</div><?php endif; ?>


<?php get_footer(); ?>