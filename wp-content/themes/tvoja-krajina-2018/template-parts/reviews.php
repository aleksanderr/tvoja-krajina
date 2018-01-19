<?php 
$args = array(
	'numberposts' => -1,
	'post_type' => 'participant-reviews',
	'post-status' => 'publish',
);
$posts = get_posts($args);
?>

<?php if ($posts) { ?>
<section class="reviews">
	<svg class="skewed-bg reviews__bg">
		<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#skewed-bg"></use>
	</svg>
	<h2 class="title reviews__title">Задоволені учасники</h2>
	<div class="reviews-slider">
		<div class="reviews-slider__items" data-reviews-slider>
			<?php 
			foreach ($posts as $post) {
				setup_postdata($post);
				?>
				<article class="review">
					<div class="review__container">
						<div class="review__avatar" data-bg-src="<?php the_post_thumbnail_url('medium
						'); ?>" data-bg-size="cover" data-bg-pos="center"></div>
						<div class="review__author"><?php the_title(); ?></div>
						<div class="review__text">
							<?php the_content(); ?>
						</div>
						<?php 
						$initial_city = types_render_field('review-initial-city');
						$final_city = types_render_field('review-final-city');
						?>
						<?php if ( $initial_city && $final_city ) { ?>
						<div class="review-path">
							<svg class="icon-slider-pointer review-path__icon">
								<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-slider-pointer"></use>
							</svg>
							<div class="review-path__items">
								<span class="review-path__item"><?php echo $initial_city; ?></span>
								<svg class="icon-path-arrow review-path__arrow">
									<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-path-arrow"></use>
								</svg>
								<span class="review-path__item"><?php echo $final_city; ?></span>
							</div>
						</div>
						<?php }; ?>
					</div>
				</article>
				<?php 
			}; 
			wp_reset_postdata();?>
		</div>
		<button class="reviews-slider__arrow reviews-slider__arrow_left" data-reviews-prev>
			<svg class="icon-slider-arrow">
				<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-slider-arrow"></use>
			</svg>
		</button>
		<button class="reviews-slider__arrow reviews-slider__arrow_right" data-reviews-next>
			<svg class="icon-slider-arrow">
				<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-slider-arrow"></use>
			</svg>
		</button>
	</div>
	<button class="button button_orange button_with-plus">
		<a href="#"></a>
		<span class="button__label">Приєднатися</span>
		<span class="button__icon">
			<svg class="icon-plus">
				<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-plus"></use>
			</svg>
		</span>
	</button>
</section>
<?php }; ?>