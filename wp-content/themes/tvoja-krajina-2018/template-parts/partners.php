<?php 
$args = array(
	'numberposts' => -1,
	'post_type' => 'partners',
	'post-status' => 'publish',
);
$posts = get_posts($args);
?>

<?php if ($posts) { ?>
<section class="partners">
	<h2 class="title partners__title">Партнери</h2>
	<div class="partners__list">
		<div  id="marquee">
			<?php 
			foreach ($posts as $post) {
				setup_postdata($post);
				?>
				<div class="partners__item" data-bg-src="<?php the_post_thumbnail_url('medium'); ?>" data-bg-pos="center"></div>
				<?php 
			}; 
			wp_reset_postdata();
			?>
		</div>
	</div>
	<button class="button button_blue button_with-icon partners__button" data-popup-open="partner">
		<span class="button__label">Стати партнером</span>
		<span class="button__icon">
			<svg class="icon-button-heart">
				<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-button-heart"></use>
			</svg>
		</span>
	</button>
</section>
<?php }; ?>