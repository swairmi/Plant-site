<?php
/*
Template Name:this is first page
*/
?>
<?php get_header();?>





<!------------------------TOP TITLES---------------------------->
<div class="container">
<section class="section_four">

<?php
	if(get_field('the_top_title'))
	{
		echo '<h2 class="section_four_main">' . get_field('the_top_title') . '</h2>';
	}
?>
<?php 
	if(get_field('top_title_desc'))
	{
		echo '<p class="section_four_main_desc">' . get_field('top_title_desc') . '</p>';
	}
?>

				<hr class="section_four_underline" style="margin-left: 43%;">
				<br>


			<div class="row" id="the_search_boxes">
				<div class="col-md-6">
					<input class="all_services" type="text" placeholder="All Services">
				</div>

				<div class="col-md-6">
					<input class="best_selling" type="text" placeholder="Best Selling">
				</div>
			</div>
<!---------------------------------------------------->






<!-------------------------THE 6 CUBES--------------------------->
<div class="container-fluid">
		<div class="row" id="theproduct_row">

<?php 
	if( have_rows('directional_boxes_repeater') );
	while( have_rows('directional_boxes_repeater') ) : the_row();

		$CUBE_IMAGE = get_sub_field('cube_image');
		$CUBE_TITLE = get_sub_field('cube_title');
		$CUBE_SYMBOL = get_sub_field('cube_symbol');
?>

<!----->
		<div class="col-md-2" id="product_one">
			<div class="scene">
				<div class="cube" id="thatguy">
					<div id="cube_sides" class="cube_face_front">
<?php 
	$CUBE_IMAGE = get_sub_field('cube_image');
	if( $CUBE_IMAGE ){
	$size = 'large';
	$thumb = $CUBE_IMAGE['sizes'][ $size ];}
?>
						<img class="cube_pictures" src="<?php echo $thumb ?>" alt="<?php echo $alt; ?>" />
					</div>
					<div id="cube_sides" class="cube_face_bottom">
						<p class="nav_cube"><?php echo $CUBE_TITLE; ?></p>
						<i class="fas fa-5x"><?php echo $CUBE_SYMBOL; ?></i>


					</div>

					<div id="cube_sides" class="cube_face_left"></div>
					<div id="cube_sides" class="cube_face_back"></div>
					<div id="cube_sides" class="cube_face_right"></div>
					<div id="cube_sides" class="cube-face_top"></div>
				</div>
			</div>

		</div>
	<!----->
<?php
	endwhile;

?>


		</div>
	</div>
</div>
</div>

</section>
<!---------------------------------------------------->



<!---------------------------------------------------->
<div class="container-fluid">
	<div class="page_seperator"><?php 
$image = get_field( 'page_seperator' );
if ( !empty( $image ) ) { ?>
    <div class="page_seperator" style="background-image:url('<?php echo $image['url']; ?>');">
<?php }
?></div>
</div>



<!---------------------------------------------------->





<!--------------------FIRST SERVICE----------------------------->
<?php 
	if( have_rows('product_picture_repeater'));
		while( have_rows('product_picture_repeater') ) : the_row();

			$SERVICE_PICTURE = get_sub_field('service_picture');
			$SERVICE_PICTURE_DESC = get_sub_field('service_picture_desc');
			$DATE_TITLE = get_sub_field('date_title');
			$DATE_ONE = get_sub_field('date_one');
			$DATE_TWO = get_sub_field('date_two');
			$DATE_THREE = get_sub_field('date_three');
			$DATE_FOUR = get_sub_field('date_four');
?>
<?php
			endwhile;
		?>
<?php 
	if( have_rows('service_list_repeater'));
		while( have_rows('service_list_repeater') ) : the_row();
			
			$PRODUCT_BRAND_NAME = get_sub_field('product_brand_name');
			$PRODUCT_NAME = get_sub_field('product_name');
			$PRODUCT_PRICE = get_sub_field('product_price');
			$PRODUCT_DESC = get_sub_field('product_desc');
			$PRODUCT_FINE_PRINT = get_sub_field('product_fine_print');
?>

<?php
	if( have_rows('product_list_sub_repeater'));
		while( have_rows('product_list_sub_repeater') ) : the_row();

			$LIST_TITLE = get_sub_field('list_title');
			$LIST_ITEM_ONE = get_sub_field('list_item_one');
			$LIST_ITEM_TWO = get_sub_field('list_item_two');
			$LIST_ITEM_THREE = get_sub_field('list_item_three');
			$LIST_ITEM_FOUR = get_sub_field('list_item_four');
?>


<div class="container">
	<div class="service_one_whole">
		<div class="row">
			<div class="col-md-5" style="margin-top:3%;">

		<!----->
			<div class="service_one_cube">
				<div class="scene_two">
					<div class="cube_two" id="thisguy">
						<div id="cube_sides_two" class="cube_face_front_two">


<?php 
	$SERVICE_PICTURE = get_sub_field('service_picture');
	if( $SERVICE_PICTURE ){
	$url = $SERVICE_PICTURE['url'];
	$title = $SERVICE_PICTURE['title'];
	$alt = $SERVICE_PICTURE['alt'];
	$caption = $SERVICE_PICTURE['caption'];
	$size = 'large';
	$thumb = $SERVICE_PICTURE['sizes'][ $size ];}
?>
						<img class="cube_pictures_two" src="<?php echo $thumb ?>" alt="<?php echo $alt; ?>" />
							<small style="color: grey;">^ Hover above to see available dates ^</small>
						</div>
						<div id="cube_sides_two" class="cube_face_bottom_two"></div>
						<div id="cube_sides_two" class="cube_face_left_two service_one_sideface">
							<h3 class="section_four_title"><?php echo $DATE_TITLE; ?></h3>
						<div id="selector_box_serviceONE_mover">
								<button id="cube_date_change" class="cube_dates" style="padding:0;"><b><?php echo $DATE_ONE; ?></b></button>
								<button id="cube_date_change" class="cube_dates" style="padding:0;"><b><?php echo $DATE_TWO; ?></b></button>
								<button id="cube_date_change" class="cube_dates" style="padding:0;"><b><?php echo $DATE_THREE; ?></b></button>
								<button id="cube_date_change" class="cube_dates" style="padding:0;"><b><?php echo $DATE_FOUR; ?></b></button>
						</div>
						</div>
						<div id="cube_sides_two" class="cube_face_back_two"></div>
						<div id="cube_sides_two" class="cube_face_right_two"></div>
						<div id="cube_sides_two" class="cube-face_top_two"></div>
					</div>
				</div>
			</div>
		<!----->
</div>

	<div class="col-md-7">
		<b><?php echo $PRODUCT_BRAND_NAME; ?></b>
			<h3><?php echo $PRODUCT_NAME; ?></h3>
				<b class="service_price" ><?php echo $PRODUCT_PRICE; ?></b>
			<br>
				<p style="color:grey;"><?php echo $PRODUCT_DESC; ?></p>
					<b><?php echo $LIST_TITLE; ?></p>
						<ul>
							<li><p><?php echo $LIST_ITEM_ONE; ?></p></li>
							<li><p><?php echo $LIST_ITEM_TWO; ?></p></li>
							<li><p><?php echo $LIST_ITEM_THREE; ?></p></li>
							<li><p><?php echo $LIST_ITEM_FOUR; ?></p></li>
						</ul>
						<small style="color:darkgrey;" ><?php echo $PRODUCT_FINE_PRINT; ?></small>

			<div class="container" id="letter_picker">
				<div class="row">
					<div class="col-md-8">
						<div class="counter" id="center_counter">
							<div class="counter_container">
								<input class="counter_down" id="downcount" type="button" value="-" onclick="countdown_two();">
								<input class="inputcounter" id="countguy_two" type="text" value="0">
								<input class="counter_up" id="upcount" type="button" value="+" onclick="countup_two();">
							</div>
						</div>
					</div>
					<div class="col-md-4"><button id="cart_change" class="add_tocart" style="padding:0;">ADD TO CART</button></div>
				</div>

				<p class="social_media">Share on this: 
					<a class="twitter_social" href="https://twitter.com/?lang=en-gb"><i class="fab fa-twitter"></i></a>
					<a class="facebook_social" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
					<a class="youtube_social" href="https://www.youtube.com/?gl=GB&hl=en-GB"><i class="fab fa-youtube"></i></a>
					<a class="pinterest_social" href="https://www.pinterest.co.uk/"><i class="fab fa-pinterest"></i></a>
					<a class="instagram_social" href="https://www.instagram.com/?hl=en"><i class="fab fa-instagram"></i></a></p>

			</div>
	</div>
	 

		</div>
		
	</div>
		


<?php
			endwhile;
		?>
</div>
<?php
			endwhile;
		?>

<!--------------------FIRST SERVICE----------------------------->





<!---------------------------------------------------->
<!---------------------------------------------------->





<!---------------------------------------------------->
<!---------------------------------------------------->






<!---------------------------------------------------->
<!---------------------------------------------------->







<!---------------------------------------------------->
<!---------------------------------------------------->








<!---------------------------------------------------->
<!---------------------------------------------------->









<!----------------------------------------------------
<div class="container">
			<?php
			if( have_rows('main_top_title_repeater') ):
		    while ( have_rows('main_top_title_repeater') ) : the_row();

			$MAINTITLE = get_sub_field( 'the_title' );
			$MAINTITLE_DESC = get_sub_field( 'the_sub_title' );
		?>

<section class="section_four">
		<h class="section_four_main"><?php echo $MAINTITLE; ?></h2>
			<p class="section_four_main_desc" ><?php echo $MAINTITLE_DESC; ?></p>
				<hr class="section_four_underline">
				<br>
			<div class="row" id="the_search_boxes">
				<div class="col-md-6">
					<input class="all_services" type="text" placeholder="All Services">
				</div>

				<div class="col-md-6">
					<input class="best_selling" type="text" placeholder="Best Selling">
				</div>


		 <?php
			endwhile;
			else :
			endif;
		?>
			</div>
<!---------------------------------------------------->







<!---------------------------------------------------->
<!---------------------------------------------------->
<?php get_footer();