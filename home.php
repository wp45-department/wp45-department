<?php
/* Template Name: PageHOME */
get_header();
?>
<section class="home-banner-section">
<div class="home-details">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="home-banner-text">
				<h3>
					<span><?php the_field('banner_title_home_first');?></span><?php the_field('banner_title_home_sec');?>
				</h3>
				<p>
					<?php the_field('banner_subtitle_line');?>
				</p>
				<button class="shop-now-button">
					<a href="<?php the_field('banner_button_link_home');?>"><?php the_field('banner_button_text_home');?></a>
				</button>
			</div>
				</div>
			<div class="col">
				<div class="banner-image-details">
					<div class="banner-top-details">
							<p>
								UP TO
							</p>
							<h3>
								<?php the_field('up_to_off_banner_home');?>
							</h3>
						     <div class="banner-info">
								 <span>%</span>
							<h2>OFF</h2>
						</div>
						</div>
					<div class="banner-image">
						<img src="<?php the_field('banner_background_image_home');?>"/>
							<div class="banner-cart-details">
							<img src="https://projectspace.in/work/project/wherewear/wp-content/uploads/2022/06/cart-2.png"/>
						</div>
						<div class="banner-user-details">
							<div class="banner-reach">
								<img src="https://projectspace.in/work/project/wherewear/wp-content/uploads/2022/06/Group-13.png"/>
								<h3>
									Reach
								</h3>
							</div>
							<h2>
								<?php the_field('reach_count_banner_home');?>
							</h2>
							<h6>
								<span><?php the_field('reach_percentage_banner_home');?></span>
								vs last <?php the_field('reach_day_banner_home');?>
							</h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	
</section>

<section class="promotion-design-section">
    <div class="promotion-details">
		<div class="promotion-container">
				<div class="promotion-1-col">
					<div class="promotion-1-details">
						<div class="promotion-1-image">
							<img src="<?php the_field('second_sec_left_image_home');?>"/>
						</div>
						<div class="promotion-1-text">
							<p>
								<?php the_field('second_sec_right_text_home');?>
							</p>
							<h3>
								<?php the_field('second_sec_right_sec_text_home');?>
							</h3>
							<button class="see-all-button">
								<a href="<?php the_field('second_sec_right_button_link_home');?>"><?php the_field('second_sec_right_button_text_home');?></a>
							</button>
						</div>
					</div>
				</div>
                <div class="promotion-2-col">
                    <div class="promotion-2-details">
                            <div class="promotion-1-text">
                        <p>
                            <?php the_field('second_sec_left_text_home');?>
                        </p>
                        <h3>
                            <?php the_field('second_sec_left_sec_text_home');?>
                        </h3>
                        <button class="see-all-button">
                            <a href="<?php the_field('second_sec_left_button_link_home');?>"><?php the_field('second_sec_left_button_text_home');?></a>
                        </button>
                    </div>
                    <div class="promotion-1-image">
                        <img src="<?php the_field('second_sec_right_image_home');?>"/>
                    </div>
                
                </div>
            </div>
			</div>
	</div>
</section>

<section class="free-shippping">
	<div class="free-shipping-details">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="shipping-icons-details">
						<div class="shipping-icon-background">
							<div class="shipping-icons-image">
								<img src="https://projectspace.in/work/project/wherewear/wp-content/uploads/2022/06/Group-66.png"/>
							</div>
						</div>
						<div class="shipping-icons-text">
							<h3>
								<?php the_field('first_circle_heading_home');?>
							</h3>
							<p>
								<?php the_field('first_circle_subheading_home');?>
							</p>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="shipping-icons-details-2">
							<div class="shipping-icon-background-2">
							<div class="shipping-icons-image">
								<img src="https://projectspace.in/work/project/wherewear/wp-content/uploads/2022/06/Group-67.png"/>
							</div>
						</div>
						<div class="shipping-icons-text">
							<h3>
								<?php the_field('sec_circle_heading_home');?>
							</h3>
							<p>
								<?php the_field('sec_circle_subheading_home');?>
							</p>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="shipping-icons-details-3">
							<div class="shipping-icon-background-3">
							<div class="shipping-icons-image">
								<img src="https://projectspace.in/work/project/wherewear/wp-content/uploads/2022/06/Group-71.png"/>
							</div>
						</div>
						<div class="shipping-icons-text">
							<h3>
								<?php the_field('third_circle_heading_home');?>
							</h3>
							<p>
								<?php the_field('third_circle_subheading_home');?>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
	</div>

</section>

<section class="Plungue-cross-section">
	<div class="plungue-cross-details">
		<div class="plungue-background-image">
			<div class="container">
				<div class="row">
					<div class="col-1">
						<div class="plungue-left-details">
							<div class="plungue-left-background">
								<div class="plungue-clothes">
									<img src="<?php the_field('single_proudct_image_home');?>"/>
								</div>
							</div>
						</div>
						
					</div>
					<div class="col-2">
						<div class="plungue-right-details">
							<div class="plungue-right-text">
								<h3>
									<?php the_field('single_product_titlee_home');?>
								</h3>
								<p>
									<?php the_field('single_product_description_home');?>
								</p>
								<a href="">
									<?php the_field('single_product_price_home');?> <img src="https://projectspace.in/work/project/wherewear/wp-content/uploads/2022/06/Group-46.png"/>
								</a>
							</div>
							<div class="plungue-right-buttons">
								<a class="plungue-buy-now" href="<?php the_field('single_product_buy_now_button_link');?>"><?php the_field('single_product_buy_now_button_text');?></a>
								<a class="plungue-view-all" href="<?php the_field('single_product_view_all_product_button_link');?>"><?php the_field('single_product_view_all_product_button_text');?></a>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>

</section>

<section class="New-arrivals-section">
	<div class="new-arrivals-details">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="new-arrivals-heading">
					<h3>
						<span>NEW</span> ARRIVALS
					</h3>
						<div class="new-arrivals-heading-line"> </div>
						<?php echo do_shortcode('[products]');  ?>
						</div>
				</div>
			</div>
			 <div class="new-arrivals-row">

		</div> 
	</div>

</section>

<section class="summer-collection-section">
	<div class="summer-collection-details">
		<div class="summer-collection-background">
			<div class="summer-background-image">				
			</div>
		</div>	
			<div class="summer-image-box">
			  <div class="summer-image">
				<a href=""> <img src="<?php the_field('summer_section_image_home');?>"/> </a>
				  <div class= "summer-collection-content">
				<div class="collection-heading">
					<h3>
						<?php the_field('summer_section_title_home');?>
					</h3>
					<p>
						<?php the_field('summer_section_subline_home');?>
					</p>
					<button class="collection-see-btn">
						<a href="<?php the_field('summer_section_button_link_home');?>"><?php the_field('summer_section_button_text_home');?></a>
					</button>
				  </div>
			   </div>
			</div>
			
			</div>
	</div>

</section>
<section class="Latest-blog-section">
<div class="latest-blog-details">
	<div class="latest-blog-container">
		<div class="latest-blog-heading">
			<h3>
				<span>LATEST </span>FROM BLOG
			</h3>
			<div class="new-arrivals-heading-line"> 
			</div>
		</div>
		<div class="latest-card-design">
			<?php 
$args = array( 
        'post_type' => 'post', 
        'posts_per_page' => 10
         );

$the_query = new WP_Query( $args ); 
?>

<?php if ( $the_query->have_posts() ) : ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<div class="latest-design-gallery">
				<div class="latest-design-image">
					<a href="">
					<!-- <img src="https://projectspace.in/work/project/wherewear/wp-content/uploads/2022/06/image-4.png"/> -->
					<?php echo get_the_post_thumbnail(); ?>
					</a>
					<a href="" class="img-date-text">
						<h3>
							<?php echo get_the_date(); ?>
						</h3>
					</a>
				</div>
				<div class="latest-design-content">
					<h5>
						<?php the_title(); ?>
					</h5>
					<p>
						<?php the_content(); ?>
					</p>
					<a href="<?php the_permalink(); ?>">Learn More</a>
				</div>
			</div>
			<?php endwhile;
wp_reset_postdata(); 
endif; ?>
					<!-- <div class="latest-design-gallery">
				<div class="latest-design-image">
					<a href="">
					<img src="https://projectspace.in/work/project/wherewear/wp-content/uploads/2022/06/image-6.png"/>
					</a>
					<a href="" class="img-date-text">
						<h3>
							26 july, 2021
						</h3>
					</a>
				</div>
				<div class="latest-design-content">
					<h5>
						Lorem ipsum dolor sit amet,consect etuer adipiscing elit.
					</h5>
					<p>
						Lorem ipsum dolor sit amet, consect etuer adipiscing elit. Aenean comm odo ligula eget dolor. Aenean massa....
					</p>
					<a href="">Learn More</a>
				</div>
			</div>
			
					<div class="latest-design-gallery">
				<div class="latest-design-image">
					<a href="">
					<img src="https://projectspace.in/work/project/wherewear/wp-content/uploads/2022/06/image-5.png"/>
					</a>
					<a href="" class="img-date-text">
						<h3>
							26 july, 2021
						</h3>
					</a>
				</div>
				<div class="latest-design-content">
					<h5>
						Lorem ipsum dolor sit amet,consect etuer adipiscing elit.
					</h5>
					<p>
						Lorem ipsum dolor sit amet, consect etuer adipiscing elit. Aenean comm odo ligula eget dolor. Aenean massa....
					</p>
					<a href="">Learn More</a>
				</div>
			</div> -->
		</div>
	</div>
	
	</div>
</section>
<div class="cust-post-type-news">
<?php

$wpnew=array(
'post_type'=>'news',
'post_status'=>'publish'
);
$newsquery=new Wp_Query($wpnew);
while($newsquery->have_posts()){
	$newsquery->the_post();
?>
<div class="cust-news-data">
</div>
<?php
}
?>
</div>

<?php the_title(); ?>
<?php echo get_the_date(); ?>
<?php the_content(); ?>
<?php get_footer(); ?>