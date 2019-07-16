<?php
/*
Template Name:this is second page
*/
?>
<?php get_header();?>




<!--------------------SECOND SECTION - MAIN CONTENT------------------------>
<section class="first_section">
	<div class="container">
		<div class="row">

			<?php
				if( have_rows('first_section') );
				while( have_rows('first_section') ) : the_row();

					$TOP_TITLE  = get_sub_field('top_title');
					$TOP_DESC = get_sub_field('top_desc');
					$TOP_DESC_TWO = get_sub_field('top_desc_two');
					$TOP_PICTURE_ONE = get_sub_field('top_picture_one');
					$TOP_PICTURE_TWO = get_sub_field('top_picture_two');
			?>






			<div class="col-md-4">
				<h2 class="main_section_title"><?php echo $TOP_TITLE; ?></h2>
				<hr>
				<p class="first_section_desc"><?php echo $TOP_DESC; ?></p>

				<p class="first_section_desc"><?php echo $TOP_DESC_TWO; ?></p>
			</div>
			<div class="col-md-4">
<?php 
	$TOP_PICTURE_ONE = get_sub_field('top_picture_one');
	if( $TOP_PICTURE_ONE ){
	$url = $TOP_PICTURE_ONE['url'];
	$title = $TOP_PICTURE_ONE['title'];
	$alt = $TOP_PICTURE_ONE['alt'];
	$caption = $TOP_PICTURE_ONE['caption'];
	$size = 'large';
	$thumb = $TOP_PICTURE_ONE['sizes'][ $size ];}
?>
				<img class="thewoman" id="thewoman_picture" src="<?php echo $thumb ?>" alt="<?php echo $alt; ?>">
			</div>
			<div class="col-md-4">
<?php 
	$TOP_PICTURE_TWO = get_sub_field('top_picture_two');
	if( $TOP_PICTURE_TWO ){
	$url = $TOP_PICTURE_TWO['url'];
	$title = $TOP_PICTURE_TWO['title'];
	$alt = $TOP_PICTURE_TWO['alt'];
	$caption = $TOP_PICTURE_TWO['caption'];
	$size = 'large';
	$thumb = $TOP_PICTURE_TWO['sizes'][ $size ];}
?>
				<img class="theman" id="theman_picture" src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>">
			</div>
			
<?php
	endwhile;
?>
		</div>
	</div>
</section>
<!-------------------------------------------->




<!--------------------THIRD SECTION - "OUR MISSION..."------------------------>
<section class="second_section">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<img class="cactus_banner" src="cactus_banner.jpg">
				<svg version="1.1" viewbox="0 0 100 100" preserveAspectRatio="none">
					<polygon fill="white" points="60,100,0 0,1000000 100,0"></polygon>
				</svg>
			</div>

			<div class="col-md-6" id="cactus_banner_content">
				<h2>Our Mission</h2>
				<p class="our_mission_desc">To make a rainforest-inspired creations that convey life and growth,</p>
				<p class="our_mission_desc">while improving the lives of thse around us.</p>
			</div>
	</div>
</div>
</section>
<!-------------------------------------------->






<!--------------------THIRD SECTION - PRODUCT EXAMPLES------------------------>
<section class="third_section">
	<div class="container">
		<div class="row">
			<div class="col-md-4"><img class="product_exam_one" src="prod_example_one.jpg"></div>
			<div class="col-md-4"><img class="product_exam_two" src="prod_example_two.jpg"></div>
			<div class="col-md-4"><img class="product_exam_three" src="prod_example_three.jpg"></div>
		</div>
	</div>
</section>
<!-------------------------------------------->




<!--------------------FOURTH SECTION - "HANDMADE WITH LOVE....."------------------------>
<section class="fourth_section">
	<div class="container">
		<h3>Handmade With Love</h3>
			<hr>
			<div class="row">

				<div class="col-md-6">
					<img class="footer_sale_one" src="footer_for_sale_two.jpg">

					</div>


				<div class="col-md-6">
					<img class="footer_sale_two" src="footer_for_sale_one.jpg">
						<div class="row">
							<div class="col-md-4"><button class="foot_option_one">Grey</button></div>

							<div class="col-md-4"><button class="foot_option_two">Green</button></div>

							<div class="col-md-4"><button class="foot_option_three">Black</button></div>
						</div>
				</div>

			</div>
	</div>
</section>
<!-------------------------------------------->




<!--------------------FITH SECTION - MAP/LOCATION------------------------>
<section class="fith_section">
	<div class="container-fluid">
		<div class="row" id="map_content">
			<div class="col-md-3">
				<h4>Visit the Greenhouse</h4>
						<p><b>Mon - Fri:</b>  7:00am - 5:00pm</p>
						<p><b>Sat - Sun:</b>  8:00am - 5:00pm</p>
						<p>Kid and pets are welcome, but please ensure that no one eats the plants!</p>
						<button>DIRECTIONS</button>
					</div>
			<div class="col-md-9">
				<img class="themap" src="the|_map_shot.png">
			</div>
		</div>
	</div>
</section>
<!-------------------------------------------->







<!---------------------------------------------------->
<!---------------------------------------------------->
<?php get_footer();