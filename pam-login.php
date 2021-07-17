<?php
/*
 Template Name: login
 Template Post Type: page
*/
?>
<?php get_header(); ?>

<div class="contact-section overview-bgi">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <!-- Form content box start -->
        <div class="form-content-box">
          <!-- Logo -->
          <a href="<?php echo esc_url( get_bloginfo( 'wpurl' ) ); ?>"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logos/white-logo.png" class="cm-logo" alt="black-logo"> </a>
          <!-- details -->
          <div class="details">
            <!-- Name -->
            <h3><?php _e( 'Faça login em sua conta', 'pam' ); ?></h3>
            <!-- Form start -->
            <form method="GET" id="loginform-pam"><?php wp_login_form( array(
                                        'redirect' => 'site_url/login',
                                        'form_id' => 'loginform-pam',
                                        'label_username' => __( 'Username or Email Address', 'pam' ),
                                        'label_password' => __( 'Password', 'pam' ),
                                        'label_remember' => __( 'Remember', 'pam' ),
                                        'label_log_in' => __( 'Log In', 'pam' ),
                                        'id_username' => 'user_login',
                                        'id_password' => 'user_pass',
                                        'id_remember' => 'rememberme',
                                        'id_submit' => 'wp-submit',
                                        'remember' => true,
                                        'value_remember' => true
                                  )); ?></form>
            <!-- Form end -->
          </div>
          <!-- Footer -->
          <div class="footer">
            <span><?php _e( 'Não tem conta?', 'pam' ); ?> <?php wp_register(); ?></span>
          </div>
        </div>
        <!-- Form content box end -->
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>