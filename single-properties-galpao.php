<?php
/*
 Template Name: galpao
 Template Post Type: properties
*/
?>
<?php get_header(); ?>

      <div class="sub-banner">
        <div class="container">
          <div class="page-name">
            <h1><?php _e( 'Properties Detail', 'pam' ); ?></h1>
          </div>
        </div>
        <div class="page-info">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <div class="breadcrumb-area">
                  <ul>
                    <li>
                      <a href="index-2.html"><?php _e( 'Index', 'pam' ); ?></a>
                    </li>
                    <li>
                      <span>/</span><?php _e( 'Properties Detail', 'pam' ); ?>
                    </li>
                  </ul>
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
      <div class="properties-details-page content-area">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-12">
              <div id="propertiesDetailsSlider" class="carousel properties-details-sliders slide mb-40">
                <div class="heading-properties">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="pull-left">
                        <h3><?php _e( 'Beautiful Single Home', 'pam' ); ?></h3>
                        <p><i class="fa fa-map-marker"></i> <?php _e( '20/F Green Road, Dhanmondi, Dhaka', 'pam' ); ?></p>
                      </div>
                      <div class="p-r">
                        <h3><?php _e( '$420,00', 'pam' ); ?></h3>
                        <p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- main slider carousel items -->
                <div class="carousel-inner">
                  <div class="active item carousel-item" data-slide-number="0">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/properties/properties-1.jpg" class="img-fluid" alt="slider-properties">
                  </div>
                  <div class="item carousel-item" data-slide-number="1">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/properties/properties-2.jpg" class="img-fluid" alt="slider-properties">
                  </div>
                  <div class="item carousel-item" data-slide-number="2">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/properties/properties-3.jpg" class="img-fluid" alt="slider-properties">
                  </div>
                  <div class="item carousel-item" data-slide-number="4">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/properties/properties-4.jpg" class="img-fluid" alt="slider-properties">
                  </div>
                  <div class="item carousel-item" data-slide-number="5">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/properties/properties-5.jpg" class="img-fluid" alt="slider-properties">
                  </div>
                </div>
                <!-- main slider carousel nav controls -->
                <ul class="carousel-indicators smail-properties list-inline nav nav-justified">
                  <li class="list-inline-item active">
                    <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#propertiesDetailsSlider"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/properties/properties-1.jpg" class="img-fluid" alt="properties-small"> </a>
                  </li>
                  <li class="list-inline-item">
                    <a id="carousel-selector-1" data-slide-to="1" data-target="#propertiesDetailsSlider"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/properties/properties-2.jpg" class="img-fluid" alt="properties-small"> </a>
                  </li>
                  <li class="list-inline-item">
                    <a id="carousel-selector-2" data-slide-to="2" data-target="#propertiesDetailsSlider"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/properties/properties-3.jpg" class="img-fluid" alt="properties-small"> </a>
                  </li>
                  <li class="list-inline-item">
                    <a id="carousel-selector-3" data-slide-to="3" data-target="#propertiesDetailsSlider"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/properties/properties-4.jpg" class="img-fluid" alt="properties-small"> </a>
                  </li>
                  <li class="list-inline-item">
                    <a id="carousel-selector-4" data-slide-to="4" data-target="#propertiesDetailsSlider"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/properties/properties-5.jpg" class="img-fluid" alt="properties-small"> </a>
                  </li>
                </ul>
                <!-- main slider carousel items -->
                <!-- Heading properties start -->
                <div class="heading-properties">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="pull-left">
                        <h3><?php _e( 'Modern Family Home', 'pam' ); ?></h3>
                        <p><i class="fa fa-map-marker"></i> <?php _e( '123 Kathal St. Tampa City,', 'pam' ); ?></p>
                      </div>
                      <div class="pull-right">
                        <h3><span class="text-right"><?php _e( '$420,00', 'pam' ); ?></span></h3>
                        <h5><?php _e( 'Per Night', 'pam' ); ?></h5>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Heading properties end -->
              </div>
              <!-- Property meta start -->
              <div class="property-meta mb-40">
                <ul>
                  <li>
                    <i class="flaticon-furniture"></i>
                    <p><?php _e( '3 Beds', 'pam' ); ?></p>
                  </li>
                  <li>
                    <i class="flaticon-holidays"></i>
                    <p><?php _e( '1 Beths', 'pam' ); ?></p>
                  </li>
                  <li>
                    <i class="flaticon-square"></i>
                    <p><?php _e( '3,034 Sq Ft', 'pam' ); ?></p>
                  </li>
                  <li>
                    <i class="flaticon-vehicle"></i>
                    <p><?php _e( '1 Garages', 'pam' ); ?></p>
                  </li>
                </ul>
              </div>
              <!-- Property meta end -->
              <!-- Advanced search start -->
              <div class="widget-2 advanced-search-2 d-lg-none d-xl-none">
                <h3 class="sidebar-title"><?php _e( 'Advanced Search', 'pam' ); ?></h3>
                <form method="GET">
                  <div class="form-group">
                    <select class="selectpicker search-fields" name="all-status">
                      <option><?php _e( 'All Status', 'pam' ); ?></option>
                      <option><?php _e( 'For Sale', 'pam' ); ?></option>
                      <option><?php _e( 'For Rent', 'pam' ); ?></option>
                    </select>
                  </div>
                  <div class="form-group">
                    <select class="selectpicker search-fields" name="all-type">
                      <option><?php _e( 'All Type', 'pam' ); ?></option>
                      <option><?php _e( 'Apartments', 'pam' ); ?></option>
                      <option><?php _e( 'Houses', 'pam' ); ?></option>
                      <option><?php _e( 'Commercial', 'pam' ); ?></option>
                      <option><?php _e( 'Garages', 'pam' ); ?></option>
                    </select>
                  </div>
                  <div class="form-group">
                    <select class="selectpicker search-fields" name="commercial">
                      <option><?php _e( 'Commercial', 'pam' ); ?></option>
                      <option><?php _e( 'Residential', 'pam' ); ?></option>
                      <option><?php _e( 'Land', 'pam' ); ?></option>
                      <option><?php _e( 'Hotels', 'pam' ); ?></option>
                    </select>
                  </div>
                  <div class="form-group">
                    <select class="selectpicker search-fields" name="location">
                      <option><?php _e( 'location', 'pam' ); ?></option>
                      <option><?php _e( 'New York', 'pam' ); ?></option>
                      <option><?php _e( 'Bangladesh', 'pam' ); ?></option>
                      <option><?php _e( 'India', 'pam' ); ?></option>
                      <option><?php _e( 'Canada', 'pam' ); ?></option>
                    </select>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <select class="selectpicker search-fields" name="bedrooms">
                          <option><?php _e( 'Bedrooms', 'pam' ); ?></option>
                          <option><?php _e( '1', 'pam' ); ?></option>
                          <option><?php _e( '2', 'pam' ); ?></option>
                          <option><?php _e( '3', 'pam' ); ?></option>
                          <option><?php _e( '4', 'pam' ); ?></option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <select class="selectpicker search-fields" name="bathroom">
                          <option><?php _e( 'Bathroom', 'pam' ); ?></option>
                          <option><?php _e( '1', 'pam' ); ?></option>
                          <option><?php _e( '2', 'pam' ); ?></option>
                          <option><?php _e( '3', 'pam' ); ?></option>
                          <option><?php _e( '4', 'pam' ); ?></option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <select class="selectpicker search-fields" name="balcony">
                          <option><?php _e( 'Balcony', 'pam' ); ?></option>
                          <option><?php _e( '1', 'pam' ); ?></option>
                          <option><?php _e( '2', 'pam' ); ?></option>
                          <option><?php _e( '3', 'pam' ); ?></option>
                          <option><?php _e( '4', 'pam' ); ?></option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <select class="selectpicker search-fields" name="garage">
                          <option><?php _e( 'Garage', 'pam' ); ?></option>
                          <option><?php _e( '1', 'pam' ); ?></option>
                          <option><?php _e( '2', 'pam' ); ?></option>
                          <option><?php _e( '3', 'pam' ); ?></option>
                          <option><?php _e( '4', 'pam' ); ?></option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="range-slider">
                    <label><?php _e( 'Area', 'pam' ); ?></label>
                    <div data-min="0" data-max="10000" data-min-name="min_area" data-max-name="max_area" data-unit="Sq ft" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="range-slider">
                    <label><?php _e( 'Price', 'pam' ); ?></label>
                    <div data-min="0" data-max="150000" data-min-name="min_price" data-max-name="max_price" data-unit="USD" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="form-group mb-0">
                    <button class="search-button"><?php _e( 'Search', 'pam' ); ?></button>
                  </div>
                </form>
              </div>
              <!-- Advanced search end -->
              <!-- Properties description start -->
              <div class="properties-description mb-40">
                <h3 class="heading-2">
                        <?php _e( 'Description', 'pam' ); ?> </h3>
                <?php the_content(); ?>
              </div>
              <!-- Properties description end -->
              <!-- Properties condition start -->
              <div class="properties-condition mb-40">
                <h3 class="heading-2">
                        <?php _e( 'Condition', 'pam' ); ?> </h3>
                <div class="row">
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <ul class="condition">
                      <li>
                        <i class="flaticon-furniture"></i><?php _e( '2 Bedroom', 'pam' ); ?>
                      </li>
                      <li>
                        <i class="flaticon-holidays"></i><?php _e( 'Bathroom', 'pam' ); ?>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <ul class="condition">
                      <li>
                        <i class="flaticon-square"></i><?php _e( '4800 sq ft', 'pam' ); ?>
                      </li>
                      <li>
                        <i class="flaticon-monitor"></i><?php _e( 'TV Lounge', 'pam' ); ?>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <ul class="condition">
                      <li>
                        <i class="flaticon-vehicle"></i><?php _e( '1 Garage', 'pam' ); ?>
                      </li>
                      <li>
                        <i class="flaticon-window"></i><?php _e( 'Balcony', 'pam' ); ?>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- Properties condition end -->
              <!-- Properties amenities start -->
              <div class="properties-amenities mb-40">
                <h3 class="heading-2">
                        <?php _e( 'Features', 'pam' ); ?> </h3>
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <ul class="amenities">
                      <li>
                        <i class="flaticon-technology"></i><?php _e( 'Air conditioning', 'pam' ); ?>
                      </li>
                      <li>
                        <i class="flaticon-window"></i><?php _e( 'Balcony', 'pam' ); ?>
                      </li>
                      <li>
                        <i class="flaticon-beach"></i><?php _e( 'Pool', 'pam' ); ?>
                      </li>
                      <li>
                        <i class="flaticon-holidays-1"></i><?php _e( 'Room service', 'pam' ); ?>
                      </li>
                      <li>
                        <i class="flaticon-people-2"></i><?php _e( 'Gym', 'pam' ); ?>
                      </li>
                    </ul>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <ul class="amenities">
                      <li>
                        <i class="flaticon-connection"></i><?php _e( 'Wifi', 'pam' ); ?>
                      </li>
                      <li>
                        <i class="flaticon-vehicle"></i><?php _e( 'Parking', 'pam' ); ?>
                      </li>
                      <li>
                        <i class="flaticon-furniture"></i><?php _e( 'Double Bed', 'pam' ); ?>
                      </li>
                      <li>
                        <i class="flaticon-comedy"></i><?php _e( 'Home Theater', 'pam' ); ?>
                      </li>
                      <li>
                        <i class="flaticon-technology-3"></i><?php _e( 'Electric', 'pam' ); ?>
                      </li>
                    </ul>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <ul class="amenities">
                      <li>
                        <i class="flaticon-technology-1"></i><?php _e( 'Telephone', 'pam' ); ?>
                      </li>
                      <li>
                        <i class="flaticon-people-3"></i><?php _e( 'Jacuzzi', 'pam' ); ?>
                      </li>
                      <li>
                        <i class="flaticon-clock"></i><?php _e( 'Alarm', 'pam' ); ?>
                      </li>
                      <li>
                        <i class="flaticon-vehicle"></i><?php _e( 'Garage', 'pam' ); ?>
                      </li>
                      <li>
                        <i class="flaticon-lock"></i><?php _e( 'Security', 'pam' ); ?>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- Properties amenities end -->
              <!-- Floor plans start -->
              <div class="floor-plans mb-50">
                <h3 class="heading-2"><?php _e( 'Floor Plans', 'pam' ); ?></h3>
                <table>
                  <tbody>
                    <tr>
                      <td><strong><?php _e( 'Size', 'pam' ); ?></strong></td>
                      <td><strong><?php _e( 'Rooms', 'pam' ); ?></strong></td>
                      <td><strong><?php _e( 'Bathrooms', 'pam' ); ?></strong></td>
                      <td><strong><?php _e( 'Garage', 'pam' ); ?></strong></td>
                    </tr>
                    <tr>
                      <td><?php _e( '1600', 'pam' ); ?></td>
                      <td><?php _e( '3', 'pam' ); ?></td>
                      <td><?php _e( '2', 'pam' ); ?></td>
                      <td><?php _e( '1', 'pam' ); ?></td>
                    </tr>
                  </tbody>
                </table>
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/floor-plans.png" alt="floor-plans" class="img-fluid">
              </div>
              <!-- Floor plans end -->
              <!-- Inside properties start -->
              <div class="inside-properties mb-50">
                <h3 class="heading-2">
                        <?php _e( 'Property Video', 'pam' ); ?> </h3>
                <iframe src="https://www.youtube.com/embed/5e0LxrLSzok" allowfullscreen=""></iframe>
              </div>
              <!-- Inside properties end -->
              <!-- Location start -->
              <div class="location mb-50">
                <div class="map">
                  <h3 class="heading-2"><?php _e( 'Property Location', 'pam' ); ?></h3>
                  <div id="map" class="contact-map"></div>
                </div>
              </div>
              <!-- Location end -->
            </div>
            <div class="col-lg-4 col-md-12">
              <div class="sidebar-left">
                <!-- Advanced search start -->
                <div class="widget search-area advanced-search d-none d-xl-block d-lg-block">
                  <h3 class="sidebar-title"><?php _e( 'Advanced Search', 'pam' ); ?></h3>
                  <form method="GET">
                    <div class="form-group">
                      <select class="selectpicker search-fields" name="all-status">
                        <option><?php _e( 'All Status', 'pam' ); ?></option>
                        <option><?php _e( 'For Sale', 'pam' ); ?></option>
                        <option><?php _e( 'For Rent', 'pam' ); ?></option>
                      </select>
                    </div>
                    <div class="form-group">
                      <select class="selectpicker search-fields" name="all-type">
                        <option><?php _e( 'All Type', 'pam' ); ?></option>
                        <option><?php _e( 'Apartments', 'pam' ); ?></option>
                        <option><?php _e( 'Houses', 'pam' ); ?></option>
                        <option><?php _e( 'Commercial', 'pam' ); ?></option>
                        <option><?php _e( 'Garages', 'pam' ); ?></option>
                      </select>
                    </div>
                    <div class="form-group">
                      <select class="selectpicker search-fields" name="commercial">
                        <option><?php _e( 'Commercial', 'pam' ); ?></option>
                        <option><?php _e( 'Residential', 'pam' ); ?></option>
                        <option><?php _e( 'Land', 'pam' ); ?></option>
                        <option><?php _e( 'Hotels', 'pam' ); ?></option>
                      </select>
                    </div>
                    <div class="form-group">
                      <select class="selectpicker search-fields" name="location">
                        <option><?php _e( 'location', 'pam' ); ?></option>
                        <option><?php _e( 'New York', 'pam' ); ?></option>
                        <option><?php _e( 'Bangladesh', 'pam' ); ?></option>
                        <option><?php _e( 'India', 'pam' ); ?></option>
                        <option><?php _e( 'Canada', 'pam' ); ?></option>
                      </select>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <select class="selectpicker search-fields" name="bedrooms">
                            <option><?php _e( 'Bedrooms', 'pam' ); ?></option>
                            <option><?php _e( '1', 'pam' ); ?></option>
                            <option><?php _e( '2', 'pam' ); ?></option>
                            <option><?php _e( '3', 'pam' ); ?></option>
                            <option><?php _e( '4', 'pam' ); ?></option>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <select class="selectpicker search-fields" name="bathroom">
                            <option><?php _e( 'Bathroom', 'pam' ); ?></option>
                            <option><?php _e( '1', 'pam' ); ?></option>
                            <option><?php _e( '2', 'pam' ); ?></option>
                            <option><?php _e( '3', 'pam' ); ?></option>
                            <option><?php _e( '4', 'pam' ); ?></option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <select class="selectpicker search-fields" name="balcony">
                            <option><?php _e( 'Balcony', 'pam' ); ?></option>
                            <option><?php _e( '1', 'pam' ); ?></option>
                            <option><?php _e( '2', 'pam' ); ?></option>
                            <option><?php _e( '3', 'pam' ); ?></option>
                            <option><?php _e( '4', 'pam' ); ?></option>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <select class="selectpicker search-fields" name="garage">
                            <option><?php _e( 'Garage', 'pam' ); ?></option>
                            <option><?php _e( '1', 'pam' ); ?></option>
                            <option><?php _e( '2', 'pam' ); ?></option>
                            <option><?php _e( '3', 'pam' ); ?></option>
                            <option><?php _e( '4', 'pam' ); ?></option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="range-slider">
                      <label><?php _e( 'Area', 'pam' ); ?></label>
                      <div data-min="0" data-max="10000" data-min-name="min_area" data-max-name="max_area" data-unit="Sq ft" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                      <div class="clearfix"></div>
                    </div>
                    <div class="range-slider">
                      <label><?php _e( 'Price', 'pam' ); ?></label>
                      <div data-min="0" data-max="150000" data-min-name="min_price" data-max-name="max_price" data-unit="USD" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                      <div class="clearfix"></div>
                    </div>
                    <a class="show-more-options" data-toggle="collapse" data-target="#options-content"> <i class="fa fa-plus-circle"></i> <?php _e( 'Show More Options', 'pam' ); ?> </a>
                    <div id="options-content" class="collapse">
                      <label class="margin-t-10"><?php _e( 'Features', 'pam' ); ?></label>
                      <div class="checkbox checkbox-theme checkbox-circle">
                        <input id="checkbox1" type="checkbox">
                        <label for="checkbox1">
                          <?php _e( 'Free Parking', 'pam' ); ?>
</label>
                      </div>
                      <div class="checkbox checkbox-theme checkbox-circle">
                        <input id="checkbox2" type="checkbox">
                        <label for="checkbox2">
                          <?php _e( 'Air Condition', 'pam' ); ?>
</label>
                      </div>
                      <div class="checkbox checkbox-theme checkbox-circle">
                        <input id="checkbox3" type="checkbox">
                        <label for="checkbox3">
                          <?php _e( 'Places to seat', 'pam' ); ?>
</label>
                      </div>
                      <div class="checkbox checkbox-theme checkbox-circle">
                        <input id="checkbox4" type="checkbox">
                        <label for="checkbox4">
                          <?php _e( 'Swimming Pool', 'pam' ); ?>
</label>
                      </div>
                      <div class="checkbox checkbox-theme checkbox-circle">
                        <input id="checkbox5" type="checkbox">
                        <label for="checkbox5">
                          <?php _e( 'Laundry Room', 'pam' ); ?>
</label>
                      </div>
                      <div class="checkbox checkbox-theme checkbox-circle">
                        <input id="checkbox6" type="checkbox">
                        <label for="checkbox6">
                          <?php _e( 'Window Covering', 'pam' ); ?>
</label>
                      </div>
                      <div class="checkbox checkbox-theme checkbox-circle">
                        <input id="checkbox7" type="checkbox">
                        <label for="checkbox7">
                          <?php _e( 'Central Heating', 'pam' ); ?>
</label>
                      </div>
                      <div class="checkbox checkbox-theme checkbox-circle">
                        <input id="checkbox8" type="checkbox">
                        <label for="checkbox8">
                          <?php _e( 'Alarm', 'pam' ); ?>
</label>
                      </div>
                    </div>
                    <div class="form-group mb-0">
                      <button class="search-button"><?php _e( 'Search', 'pam' ); ?></button>
                    </div>
                  </form>
                </div>
                <!-- Posts by category start -->
                <div class="posts-by-category widget">
                  <h3 class="sidebar-title"><?php _e( 'Category', 'pam' ); ?></h3>
                  <ul class="list-unstyled list-cat">
                    <li>
                      <a href="#"><?php _e( 'Single Family', 'pam' ); ?> <span><?php _e( '(45)', 'pam' ); ?></span></a>
                    </li>
                    <li>
                      <a href="#"><?php _e( 'Apartment', 'pam' ); ?> <span><?php _e( '(21)', 'pam' ); ?></span> </a>
                    </li>
                    <li>
                      <a href="#"><?php _e( 'Condo', 'pam' ); ?> <span><?php _e( '(23)', 'pam' ); ?></span></a>
                    </li>
                    <li>
                      <a href="#"><?php _e( 'Multi Family', 'pam' ); ?> <span><?php _e( '(19)', 'pam' ); ?></span></a>
                    </li>
                    <li>
                      <a href="#"><?php _e( 'Villa', 'pam' ); ?> <span><?php _e( '(19)', 'pam' ); ?></span></a> 
                    </li>
                    <li>
                      <a href="#"><?php _e( 'Other', 'pam' ); ?> <span><?php _e( '(22)', 'pam' ); ?> </span></a>
                    </li>
                  </ul>
                </div>
                <!-- Social media box start -->
                <div class="social-media-box widget clearfix">
                  <h3 class="sidebar-title"><?php _e( 'Social Media', 'pam' ); ?></h3>
                  <ul class="social-list">
                    <li>
                      <a href="#" class="facebook-bg"> <i class="fa fa-facebook"></i> </a>
                    </li>
                    <li>
                      <a href="#" class="twitter-bg"> <i class="fa fa-twitter"></i> </a>
                    </li>
                    <li>
                      <a href="#" class="google-bg"> <i class="fa fa-google"></i> </a>
                    </li>
                    <li>
                      <a href="#" class="linkedin-bg"> <i class="fa fa-linkedin"></i> </a>
                    </li>
                    <li>
                      <a href="#" class="pinterest-bg"> <i class="fa fa-pinterest"></i> </a>
                    </li>
                  </ul>
                </div>
                <!-- Team 5 start -->
                <div class="team-5 widget">
                  <h3 class="sidebar-title"><?php _e( 'Contact Agent', 'pam' ); ?></h3>
                  <div class="media">
                    <a href="agent-detail.html"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/avatar/avatar-1.jpg" alt="avatar"> </a>
                    <div class="media-body align-self-center">
                      <h5> <a href="properties-details.html"><?php _e( 'John Antony', 'pam' ); ?></a> </h5>
                      <p><i class="flaticon-technology-1"></i><a href="agent-detail.html"><?php _e( '1-8X0-666-8X88', 'pam' ); ?></a></p>
                      <p><i class="flaticon-envelope"></i><a href="tel:info@themevessel.com"><?php _e( 'info@themevessel.com', 'pam' ); ?></a></p>
                    </div>
                  </div>
                  <div class="media mb-0">
                    <a href="agent-detail.html"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/avatar/avatar-2.jpg" alt="avatar"> </a>
                    <div class="media-body align-self-center">
                      <h5> <a href="properties-details.html"><?php _e( 'Karen Paran', 'pam' ); ?></a> </h5>
                      <p><i class="flaticon-technology-1"></i><a href="agent-detail.html"><?php _e( '1-8X0-666-8X88', 'pam' ); ?></a></p>
                      <p><i class="flaticon-envelope"></i><a href="tel:info@themevessel.com"><?php _e( 'info@themevessel.com', 'pam' ); ?></a></p>
                    </div>
                  </div>
                </div>
                <!-- Financing calculator start -->
                <div class="contact-1 financing-calculator widget">
                  <h5 class="sidebar-title"><?php _e( 'Mortgage Calculator', 'pam' ); ?></h5>
                  <form action="<?php echo esc_url( get_template_directory_uri() ); ?>/#" method="GET" enctype="multipart/form-data">
                    <div class="form-group">
                      <label class="form-label"><?php _e( 'Property Price', 'pam' ); ?></label>
                      <input type="text" class="form-control" placeholder="$24.400">
                    </div>
                    <div class="form-group">
                      <label class="form-label"><?php _e( 'Interest Rate (%)', 'pam' ); ?></label>
                      <input type="text" class="form-control" placeholder="12%">
                    </div>
                    <div class="form-group">
                      <label class="form-label"><?php _e( 'Period In Months', 'pam' ); ?></label>
                      <input type="text" class="form-control" placeholder="6 Months">
                    </div>
                    <div class="form-group">
                      <label class="form-label"><?php _e( 'Down PaymenT', 'pam' ); ?></label>
                      <input type="text" class="form-control" placeholder="$32,300">
                    </div>
                    <div class="form-group mb-0">
                      <button type="submit" class="btn button-theme btn-md btn-block"><?php _e( 'Cauculate', 'pam' ); ?></button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <h3 class="heading-2"><?php _e( 'Similar Properties', 'pam' ); ?></h3>
          <!-- Similar Properties start -->
          <div class="row similar-properties">
            <div class="container-fluid">
              <div class="slick-slider-area">
                <div class="row slick-carousel" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                  <div class="slick-slide-item">
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
                                <img class="d-block w-100" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/properties/properties-2.jpg" alt="properties">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block w-100" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/properties/properties-2.jpg" alt="properties">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block w-100" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/properties/properties-2.jpg" alt="properties">
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
                  <div class="slick-slide-item">
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
                          </div> <img class="d-block w-100" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/properties/properties-5.jpg" alt="properties"> </a>
                      </div>
                      <div class="detail">
                        <h1 class="title"> <a href="properties-details.html"><?php _e( 'Relaxing Apartment', 'pam' ); ?></a> </h1>
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
                  <div class="slick-slide-item">
                    <div class="property-box">
                      <div class="property-thumbnail">
                        <a href="properties-details.html" class="property-img"> <div class="listing-time opening"><?php _e( 'For Sale', 'pam' ); ?></div> <div class="price-ratings-box">
                            <p class="price">
                                                <?php _e( '$178,000', 'pam' ); ?> </p>
                            <div class="ratings">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star-o"></i>
                            </div>
                          </div> <img class="d-block w-100" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/properties/properties-6.jpg" alt="properties"> </a>
                      </div>
                      <div class="detail">
                        <h1 class="title"> <a href="properties-details.html"><?php _e( 'Park Avenue', 'pam' ); ?></a> </h1>
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
                  <div class="slick-slide-item">
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
                          </div> <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                              <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                              <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                              <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img class="d-block w-100" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/properties/properties-4.jpg" alt="properties">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block w-100" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/properties/properties-4.jpg" alt="properties">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block w-100" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/properties/properties-4.jpg" alt="properties">
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
                  <div class="slick-slide-item">
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
                          </div> <img class="d-block w-100" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/properties/properties-1.jpg" alt="properties"> </a>
                      </div>
                      <div class="detail">
                        <h1 class="title"> <a href="properties-details.html"><?php _e( 'Relaxing Apartment', 'pam' ); ?></a> </h1>
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
                  <div class="slick-slide-item">
                    <div class="property-box">
                      <div class="property-thumbnail">
                        <a href="properties-details.html" class="property-img"> <div class="listing-time opening"><?php _e( 'For Sale', 'pam' ); ?></div> <div class="price-ratings-box">
                            <p class="price">
                                                <?php _e( '$178,000', 'pam' ); ?> </p>
                            <div class="ratings">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star-o"></i>
                            </div>
                          </div> <img class="d-block w-100" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/properties/properties-3.jpg" alt="properties"> </a>
                      </div>
                      <div class="detail">
                        <h1 class="title"> <a href="properties-details.html"><?php _e( 'Park Avenue', 'pam' ); ?></a> </h1>
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
                <div class="slick-prev slick-arrow-buton">
                  <i class="fa fa-angle-left"></i>
                </div>
                <div class="slick-next slick-arrow-buton">
                  <i class="fa fa-angle-right"></i>
                </div>
              </div>
            </div>
          </div>
          <!-- Similar Properties end -->
        </div>
      </div>
    

<?php get_footer(); ?>