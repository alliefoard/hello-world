<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 <?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package anissa
 */





?>
</div>
<!-- #content -->



<h3>    Fill Out To Contact Allie </h3>

<form name="Contact Allie" method="POST" 
onsubmit="return" action="mailto:alliefoard@gmail.com" enctype="multipart/form-data">
Your Name <input value="Name" type="text" name="Name"/><br/><br/>
Company <input value="Company" type="text" name="Company"/><br/><br/>
Position <input value="Position" type="text" name="Position"/><br/><br/>
Email <input value="Email" type="text" name="Email"/><br/><br/>
<input type="Submit" value="Email Me!"/>
</form>


<?php

//form components
$name=$_POST["Name"];
$company=$_POST["Company"];
$position=$_POST["Position"];
$email=$_POST["Email"];

?>

</div>
<!-- .wrap  -->
<footer id="colophon" class="site-footer wrap" role="contentinfo">
  <?php if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) ) : ?>
  <div class="footer-widgets clear">
    <div class="widget-area">
      <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
      <?php dynamic_sidebar( 'footer-1' ); ?>
      <?php endif; ?>
    </div>
    <!-- .widget-area -->
    
    <div class="widget-area">
      <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
      <?php dynamic_sidebar( 'footer-2' ); ?>
      <?php endif; ?>
    </div>
    <!-- .widget-area -->
    
    <div class="widget-area">
      <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
      <?php dynamic_sidebar( 'footer-3' ); ?>
      <?php endif; ?>
    </div>
    <!-- .widget-area --> 
    
  </div>
  <!-- .footer-widgets -->
  
  <?php endif; ?>
  <div class="site-info"> <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'anissa' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'anissa' ), 'WordPress' ); ?></a> <span class="sep"> | </span> <?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'anissa' ), 'Anissa', '<a href="https://alienwp.com/" rel="designer">AlienWP</a>' ); ?> </div>
  <!-- .site-info --> 
</footer>
<!-- #colophon -->
</div>
<!-- #page -->


<?php wp_footer(); ?>
</body></html>