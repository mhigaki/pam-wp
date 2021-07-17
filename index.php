<?php
/*
 The template for displaying: Main File
 */
?>
<?php get_header(); ?>

<?php get_template_part( 'template-parts/content/content-area', 'banner' ); ?>
<div class="bg-grea d-xl-none search-area-2 search-section">
  <div class="container">
    <div class="search-section-area">
      <div class="search-area-inner">
        <div class="search-contents">
          <form method="GET">
            <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                <div class="form-group">
                  <select class="selectpicker search-fields" name="area">
                    <option><?php _e( 'Area', 'pam' ); ?></option>
                    <option><?php _e( '3000', 'pam' ); ?></option>
                    <option><?php _e( '2600', 'pam' ); ?></option>
                    <option><?php _e( '2200', 'pam' ); ?></option>
                    <option><?php _e( '1800', 'pam' ); ?></option>
                  </select>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                <div class="form-group">
                  <select class="selectpicker search-fields" name="property-status">
                    <option><?php _e( 'Property Status', 'pam' ); ?></option>
                    <option><?php _e( 'For Sale', 'pam' ); ?></option>
                    <option><?php _e( 'For Rent', 'pam' ); ?></option>
                  </select>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                <div class="form-group">
                  <select class="selectpicker search-fields" name="property-types">
                    <option><?php _e( 'Property Types', 'pam' ); ?></option>
                    <option><?php _e( 'Apartments', 'pam' ); ?></option>
                    <option><?php _e( 'Houses', 'pam' ); ?></option>
                    <option><?php _e( 'Commercial', 'pam' ); ?></option>
                    <option><?php _e( 'Garages', 'pam' ); ?></option>
                  </select>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                <div class="form-group">
                  <select class="selectpicker search-fields" name="location">
                    <option><?php _e( 'Location', 'pam' ); ?></option>
                    <option><?php _e( 'United States', 'pam' ); ?></option>
                    <option><?php _e( 'United Kingdom', 'pam' ); ?></option>
                    <option><?php _e( 'American Samoa', 'pam' ); ?></option>
                    <option><?php _e( 'Belgium', 'pam' ); ?></option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                <div class="form-group">
                  <select class="selectpicker search-fields" name="max-area">
                    <option><?php _e( 'Max Area (Sq Ff)', 'pam' ); ?></option>
                    <option><?php _e( '2400', 'pam' ); ?></option>
                    <option><?php _e( '2800', 'pam' ); ?></option>
                    <option><?php _e( '3200', 'pam' ); ?></option>
                    <option><?php _e( '3600', 'pam' ); ?></option>
                    <option><?php _e( '4000', 'pam' ); ?></option>
                  </select>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                <div class="form-group">
                  <select class="selectpicker search-fields" name="min-area">
                    <option><?php _e( 'Min Area (Sq Ff)', 'pam' ); ?></option>
                    <option><?php _e( '2400', 'pam' ); ?></option>
                    <option><?php _e( '2800', 'pam' ); ?></option>
                    <option><?php _e( '3200', 'pam' ); ?></option>
                    <option><?php _e( '3600', 'pam' ); ?></option>
                    <option><?php _e( '4000', 'pam' ); ?></option>
                  </select>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                <div class="range-slider">
                  <div data-min="0" data-max="150000" data-unit="USD" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                  <div class="clearfix"></div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                <div class="form-group">
                  <button class="search-button"><?php _e( 'Search', 'pam' ); ?></button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php if ( get_theme_mod( 'display_pam_sc_features' ) ) : ?><?php get_template_part( 'template-parts/content/content-area', 'featured' ); ?><?php endif; ?>
<?php if ( get_theme_mod( 'display_pam_sc_services' ) ) : ?><?php get_template_part( 'template-parts/content/content-area', 'services-2' ); ?><?php endif; ?>
<?php if ( get_theme_mod( 'display_pam_sc_categories' ) ) : ?><?php get_template_part( 'template-parts/content/content-area', 'categories' ); ?><?php endif; ?>

<?php if ( get_theme_mod( 'display_pam_sc_team' ) ) : ?><?php get_template_part( 'template-parts/content/content-area', 'team-2' ); ?><?php endif; ?>
<?php if ( get_theme_mod( 'display_pam_sc_testemonials' ) ) : ?><?php get_template_part( 'template-parts/content/content-area', 'testemonial-3' ); ?><?php endif; ?>
<?php if ( get_theme_mod( 'display_pam_sc_blog' ) ) : ?><?php get_template_part( 'template-parts/content/content-area', 'blog' ); ?><?php endif; ?>
<?php if ( get_theme_mod( 'display_pam_sc_partners' ) ) : ?><?php get_template_part( 'template-parts/content/content-area', 'partners' ); ?><?php endif; ?>


<?php get_footer(); ?>