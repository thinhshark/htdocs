<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bs2woo
 */

?>

	 <?php 
   $logo = get_theme_mod('custom_logo');
   $logo_up_len = wp_get_attachment_image_src($logo,'full');
   
 ?>
 
  <footer class="foot  wow fadeInUpBig">
  	<div class="container">
  		<div class="row">
  			<div class="col-sm-3 cot1">
  				<h3 class="tdfoot text-xs-center text-sm-left">Quick Link</h3>
  				<div class="row">
  					<div class="col-xs-6">
  						 <?php  dynamic_sidebar( 'quick_link_footer' ); ?>
  					</div>
  					<div class="col-xs-6">
  						 <?php  dynamic_sidebar( 'quick_link_footer_so2' ); ?>
  					</div>
  				</div>
  			</div>
  			<div class="col-sm-4 push-sm-1 cot2">
  				<div class="logo text-xs-center">
  					<img src="<?php echo $logo_up_len[0];  ?>" alt="">
  				</div>
  				<div class="mangxh">
  					 <?php  dynamic_sidebar( 'thong_tin_mang_xa_hoi' ); ?>
  				</div>
  				<div class="thethanhtoan">
           <?php  dynamic_sidebar( 'thong_tin_the_thanh_toan' ); ?>

  				</div>
  				<div class="copyright">
  				  
  				</div>
  			</div>
  			<div class="col-sm-3 push-sm-1 cot3">
  				<div class="bando">

           <?php  dynamic_sidebar( 'location' ); ?>

  			 
  				</div>
  				
  			</div>
  		</div>
  	</div>
  </footer>

<?php wp_footer(); ?>

</body>
</html>
