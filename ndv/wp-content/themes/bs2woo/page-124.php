<?php  get_header(); ?>





 <div class="slidehome wow fadeIn">
 			<div id="slidetrangchu" class="carousel slide" data-ride="carousel" data-interval="0">
 				 
 				<div class="carousel-inner" role="listbox">

		<?php 
			// TEST DU LIEU 
		 	$lay_du_lieu = new WP_Query(array('post_type'=>'slide_quang_cao'));
		 	$dem_so_slide = 0 ; 
		 	while($lay_du_lieu->have_posts())
		 	{
		 		$lay_du_lieu->the_post();
		 		$dem_so_slide++ ;  
		 		$anhslide = get_field('anh_slide_qc');
		 		$ndslide = get_field('noi_dung_quang_cao');
		 		$tennut = get_field("tieu_de_nut_slide_qc");
		 		$linknut = get_field("link_cua_slide_qc");

		 	?>
						<div class="carousel-item <?php if($dem_so_slide == 1) {echo "active";} ?>">
		 						<div class="motslide container">
		 							<img src="<?php echo $anhslide['url']; ?>" alt="" class="anhsl img-fluid" >
		 							<div class="container2">
		 								<div class="row"> 									
		 									<div class="col-sm-7 push-sm-5">
		 										<h2> <?php the_title(); ?></h2>
		 										<div class="desc">
												<?php  echo $ndslide ?>
		 										</div>

 										<?php if($tennut=='') {
 												// ko lam gi het
 											}
 											else {
 												?>
													<a href="<?php echo $linknut; ?>" class="nutslide btn btn-outline-secondary"> 
													<?php  echo $tennut;  ?>
		 										 <i class="fa fa-long-arrow-right"></i> </a>
 											<?php
 											}
 										 ?>
		 										
		 									</div>
		 								</div>
		 							</div>
		 						</div> <!-- het motslide -->

		 				</div>

		<?php  
		 	} 
		 	wp_reset_query(); // cat dut tac dung cua vong lap tai day 
		 ?>

		 					
 					 
 					 
 				</div>
 				<a class="left carousel-control" href="#slidetrangchu" role="button" data-slide="prev">
 				 	
 					<span class="sr-only">Previous</span>
 				</a>
 				<a class="right carousel-control" href="#slidetrangchu" role="button" data-slide="next">
 					 
 					<span class="sr-only">Next</span>
 				</a>
 			</div>
 </div>  <!-- HET SLIDEHOME -->


 <?php 
 $td1 = get_field('tieu_de_dich_vu_1');
 $link1 = get_field('link_dich_vu_1');
 $anh1 = get_field('up_load_anh_dich_vu_1');

 $td2 = get_field('tieu_de_dich_vu_2');
 $link2 = get_field('link_dich_vu_so_1');
 $anh2 = get_field('up_load_anh_dich_vu_2');

 $td3 = get_field('tieu_de_dich_vu_3');
 $link3 = get_field('link_dich_vụ_3');
 $anh3 = get_field('up_load_anh_dich_vu_3');



  ?>
 <div class="badichvu wow bounceInUp">
 	<div class="container">
 		<div class="row">
 			<div class="col-sm-4">
 				<div class="divdichvu" style="background-image:url(<?php echo $anh1; ?>)">
 					<h2><a href="<?php echo $link1;  ?>"> <?php echo $td1;   ?></a></h2>
 				</div>
 			</div>
 			
			<div class="col-sm-4">
 				<div class="divdichvu" style="background-image:url(<?php echo $anh2; ?>)">
 					<h2><a href="<?php echo $link2;  ?>"> <?php echo $td2;   ?></a></h2>
 				</div>
 			</div>
 			
		<div class="col-sm-4">
 				<div class="divdichvu" style="background-image:url(<?php echo $anh3; ?>)">
 					<h2><a href="<?php echo $link3;  ?>"> <?php echo $td3;   ?></a></h2>
 				</div>
 			</div>
 			

 		</div>
 	</div>
 </div>  <!-- HET BADICHVU -->

<?php 
	$tieudeto= get_field('tiêu_đề_khối_sản_phẩm_nổi_bật');
	$trichdan= get_field('mô_tả_khối_sản_phẩm_nổi_bật');
	
	$td1= get_field('tiêu_khối_1');
	$link1= get_field('link_khối_1');
	$nut1= get_field('tiêu_đề_nut_1');
	$anh1= get_field('ảnh');

 	$td2= get_field('tiêu_đề_khối_2');
	$link2= get_field('link_khối_2');
	$nut2= get_field('tiêu_đề_nut_2');
	$anh2= get_field('tiêu_đề_khối_2');
 
 	$td3= get_field('tiêu_đề_3');
	$link3= get_field('link');
	$nut3= get_field('tên_nut');
	$anh3= get_field('ảnh_3');
 
 	$td4= get_field('tiêu_đề');
	$link4= get_field('link4');
	$nut4= get_field('tên_nut');
	$anh4= get_field('anhso4');
 
 ?>
 <div class="spnoibat">
 	<div class="container">
 		<div class="row">
 			<div class="col-sm-8 push-sm-2 text-xs-center wow fadeInDownBig">
 				<h2 class="kieuchuto"><?php  echo $tieudeto; ?></h2>
 				<p class="mota"> <?php echo $trichdan; ?></p>
 			</div>
 		</div>
 		<div class="row gutter10">
 			<div class="col-sm-6">
 				<a href="" class="kngan wow fadeInDownBig" style="background-image:url(<?php echo $anh1;  ?>)">
 					<h4><?php  echo $td1; ?></h4>
 					<b class="view"><?php echo $nut1; ?> <i class="fa fa-long-arrow-right"></i></b>
 				</a>
				<a href="" class="kngan kdai wow fadeInDownBig" style="background-image:url(<?php echo $anh2;  ?>)">
 					<h4><?php  echo $td2; ?></h4>
 					<b class="view"><?php echo $nut2; ?> <i class="fa fa-long-arrow-right"></i></b>
 				</a>

 			</div>
 			<div class="col-sm-6">
 				
 				<a href="" class="kngan kdai wow fadeInDownBig" style="background-image:url(<?php echo $anh3;  ?>)">
 					<h4><?php  echo $td3; ?></h4>
 					<b class="view"><?php echo $nut3; ?> <i class="fa fa-long-arrow-right"></i></b>
 				</a>
 				<a href="" class="kngan wow fadeInDownBig" style="background-image:url(<?php echo $anh4;  ?>)">
  					<h4><?php  echo $td4; ?></h4>
 					<b class="view"><?php echo $nut4; ?> <i class="fa fa-long-arrow-right"></i></b>
 				</a>

 			</div>
 		</div>
 	</div>
 </div> <!-- HET SAN PHAM NOI BAT  -->


<?php 
	$b1 = get_field('tieu_de_khoi_qc_2');
	$b2 = get_field('mô_tả_khối_quảng_cao');
	$b3 = get_field('ảnh_khoi_qc_2');
	$b4 = get_field('tên_nutqc2');
	$b5 = get_field('linkqc2');
 ?>
 <div class="quangcao1home  wow fadeInUpBig" style="background-image:url(<?php echo $b3; ?>)">
 	<div class="container">
 		<div class="row">
 			<div class="col-sm-12">
 				<div class="qchome text-xs-center">
 					<h2><?php  echo $b1 ;  ?></h2>
 					<p><?php  echo $b2 ;  ?></p>
 					<a href="<?php  echo $b5 ;  ?>" class="nutslide btn btn-outline-secondary"> <?php  echo $b4 ;  ?> <i class="fa fa-long-arrow-right"></i> </a>
 				</div>
 			</div>
 		</div>
 	</div>
 </div> <!--  HET QUANG CAO TRANG HOME -->

<?php 
	$c1 = get_field('tiêu_đề_to_4_tab_sản_phẩm');
	$c2 = get_field('trich_dẫn_cho_tiêu_đề_4_tab_sản_phẩm');
	$c3 = get_field('tiêu_đề_tab_số_1');
	$c4 = get_field('tiêu_đề_tab_số_2');
	$c5 = get_field('tiêu_đề_của_tab_số_3');
	$c6 = get_field('tiêu_đề_tab_số_4');
	$c7 = get_field('số_lượng_sản_phẩm_trong_mỗi_tab');
	$c8 = get_field('danh_mục_của_tab_sô_3');
	$c9 = get_field('danh_mục_của_tab_sô_4');
	$c10 = get_field('tên_nut_dưới_4_tab');
	$c11 = get_field('link_của_nut__4_tab');
 ?>

 
 <div class="sanphamhome">
 	<div class="container">
 		<div class="row">
 			<div class="col-sm-8 push-sm-2  wow fadeInDownBig">
 				<div class="text-xs-center">
	 				<h2 class="kieuchuto"><?php echo $c1;  ?></h2>
	 				<p class="mota"><?php  echo $c2;  ?></p>
 				</div>
 			</div>
 		</div>
 	</div>

 	<div class="tabsanpham  wow fadeInDownBig">
 		<div class="tren">
 			<ul class="tdtab">
 				<li><b> <?php  echo $c3 ?> </b></li>
 				<li><b class="active">  <?php  echo $c4 ?> </b></li>
 				<li><b>  <?php  echo $c5 ?> </b></li>
 				<li><b>  <?php  echo $c6 ?>  </b></li>
 			</ul>
 		</div> <!-- HET TREN -->
 		<div class="duoi">
 		<div class="container">
 			<ul class="ndtab">
 				<li>
 					<div class="divsanpham ">
 						<div class="row">
 							 <?php echo do_shortcode('[featured_products per_page="'.$c7.'" ]') ?>

 						</div>  <!-- het row -->
 					</div>
 				</li>

 				<li>
 					<div class="divsanpham  xuathien">
						<div class="row">
 							  <?php echo do_shortcode('[recent_products per_page="'.$c7.'" ]') ?>


 							 


 						</div>  <!-- het row -->
 					</div>
 				</li>

 				<li>
 					<div class="divsanpham ">
 						<div class="row">
 							  <?php echo do_shortcode('[product_category  per_page="'.$c7.'"  category="'.$c8.'"]') ?>			 


 						</div>  <!-- het row -->
 					</div>
 				</li>

 				<li>
 					<div class="divsanpham ">
 						<div class="row">
 							  <?php echo do_shortcode('[product_category  per_page="'.$c7.'"  category="'.$c9.'"]') ?>			 



 							 


 						</div>  <!-- het row -->
 					</div>
 				</li>


 			</ul>

 		</div> <!-- HET CONTAINER -->
 		</div> <!-- HET DUOI -->
 	</div><!-- het tab san pham   -->
 	<div class="divnutviewall">
 		<a href="<?php echo $c11;  ?>" class="nutslide btn btn-outline-secondary"> <?php  echo $c10;  ?> <i class="fa fa-long-arrow-right"></i> </a>
 	</div>
 	
 </div>  <!-- HET SANPHAM HOME  -->



<?php 
	$e1  = get_field('tiêu_đề_khối_cảm_nhận');
 ?>
 

 <div class="commentkhachhang mt-100-vien  wow fadeInDownBig">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 push-sm-2">
 				<div class="text-xs-center">
	 				<h2 class="kieuchuto"><?php echo $e1 ;  ?></h2>
	 				 
 				</div>
 			</div>
			</div>
		</div>

			<div id="slidecamnhan" class="carousel slide" data-ride="carousel">
	 				 
	 				<div class="carousel-inner" role="listbox">

	 				<?php 
						// TEST DU LIEU 
					 	$du_lieu_cam_nhan_kh = new WP_Query(array('post_type'=>'cam_nhan_nguoi_dung'));
					 	$dem_so_slide = 0 ; 
					 	while($du_lieu_cam_nhan_kh->have_posts())
					 	{
					 		$du_lieu_cam_nhan_kh->the_post();
					 		$dem_so_slide++ ;  
					 		$d1 = get_field('ảnh_avatar_người_dùng');
					 		$d2 = get_field('nghề_nghiệp_người_dùng');
			  
					 	?>
	 					<div class="carousel-item <?php if($dem_so_slide == 1) {echo "active" ;} ?>">
	 						<div class="motslidecn text-xs-center">
	 							<img src="<?php echo $d1;  ?>" alt="" class="anhava">
	 							<div class="caunx"><?php  the_content(); ?> </div>
	 							<h4 class="tentg"> <?php  the_title(); ?></h4>
	 							<p class="nghe"><?php echo $d2;  ?></p>
	 						</div>  <!-- HET 1 SLIDE CN -->
	 					</div>
						<?php 


 	}
						 ?>

	 					 
	 				</div>
	 				<a class="left carousel-control" href="#slidecamnhan" role="button" data-slide="prev">
	 					 
	 					<span class="sr-only">Previous</span>
	 				</a>
	 				<a class="right carousel-control" href="#slidecamnhan" role="button" data-slide="next">
	 				 
	 					<span class="sr-only">Next</span>
	 				</a>
	 			</div> 	

 </div>   <!-- HET PHAN COMMENT KHACH HANG -->
 <?php wp_reset_query(); // de phan sau ko bi loi  ?>


<?php 
	$f1 = get_field('tiêu_đề_khối_tin_tức_trang_chủ');
	$f2 = get_field('trich_dẫn_cho_khối_tin_trang_chủ');
	 
 ?>
 <div class="tinhome mt-100-vien">
	<div class="container">
		<div class="row">
 			<div class="col-sm-8 push-sm-2  wow fadeInDownBig">
 				<div class="text-xs-center">
	 				<h2 class="kieuchuto"><?php echo $f1;  ?></h2>
	 				<p class="mota"> <?php echo $f2;  ?></p>
 				</div>
 			</div>
 		</div>
 		<div class="row  wow fadeInDownBig">
		<?php 
			// TEST DU LIEU 
		 	$tin = new WP_Query(array('post_type'=>'post','posts_per_page'=>2));
		 	$dem_so_slide = 0 ; 
		 	while($tin->have_posts())
		 	{
		 		$tin->the_post();
		 		$dem_so_slide++ ;  
		 		
  				$idbaiviet = get_the_ID(); 
		 	?>



 			<div class="col-sm-6">
 				<a href="" class="anhtin">
 					 <?php the_post_thumbnail(); ?>
 					<div class="ngaythang">
 						<b><?php echo get_the_date('d',$idbaiviet) ;?></b>
 						<i><?php echo get_the_date('M',$idbaiviet) ;?></i>
 					</div>
 				</a>
 				<div class="ndtin">
 					<a href="" class="td1tin"><?php the_title(); ?></a>
 					<p> <?php the_excerpt(); ?></p>
 					<a href="<?php the_permalink(); ?>" class="rm">READ MORE <i class="fa fa-long-arrow-right"></i></a>
 				</div>
 			</div>
 		<?php
		}
		 ?>		


 		</div>
	</div>
</div> <!-- HET TIN HOME -->
 
<?php  wp_reset_query();  ?>


<div class="nhanemail  wow fadeInDownBig">
	<div class="container">
		<div class="row">
			<div class="col-xs-10 push-xs-1 text-xs-center">
				<h2>SUBSCRIBE to our newsletters</h2>
				<p>Be the First to know about our Fresh Arrivals and much more!</p>
				<div class="form">
					 <?php 
					 echo do_shortcode('[ninja_form id=3]') ;
					 ?>
				</div>
			</div>
		</div>
	</div>
</div>  <!-- HET KHOI NHAN EMAIL -->
 
<?php  get_footer(); ?>
