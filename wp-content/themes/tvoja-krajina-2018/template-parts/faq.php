<?php 
$args = array(
	'numberposts' => -1,
	'post_type' => 'faq',
	'post-status' => 'publish',
);
$posts = get_posts($args);
?>

<?php if ($posts) { ?>
<section class="faq" id="faq">
	<div class="wrapper">
		<div class="faq__panel">
			<h2 class="title faq__title">Часті запитання</h2>
			<button class="button button_blue button_with-icon faq__button faq__button_desktop" data-popup-open="question">
				<span class="button__label">Поставити своє питання</span>
				<span class="button__icon">
					<svg class="icon-button-answer">
						<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-button-answer"></use>
					</svg>
				</span>
			</button>	
		</div>
		<div class="faq__items">
			<ul class="faq__questions">
				<?php 
				$i = 1;
				foreach ($posts as $post) {
					setup_postdata($post);
					if ($i <= 9) $number = 0 . $i;
					else $number = $i;
					?>
					<li class="faq-question" data-faq-open="<?php echo $i; ?>">
						<span class="faq-question__number"><?php echo $number; ?></span>
						<div class="faq-question__title"><?php the_title(); ?></div>
					</li>
					<?php $i++;
				}; 
				wp_reset_postdata();?>
			</ul>
			<ul class="faq__answers">
				<?php 
				$i = 1;
				foreach ($posts as $post) {
					setup_postdata($post);
					?>
					<li class="faq__answer" data-faq-answer="<?php echo $i; ?>">
						<span class="faq__quotation faq__quotation_left">&#171;</span>
						<?php 
						$content = get_the_content();
						echo wp_strip_all_tags($content);
						?>
						<span class="faq__quotation faq__quotation_right">&#187;</span>
					</li>
					<?php $i++;
				}; 
				wp_reset_postdata();?>
				<button class="faq__close" data-faq-close>
					<svg class="icon-close">
						<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-close"></use>
					</svg>
				</button>
			</ul>
		</div>
		<button class="button button_blue faq__button faq__button_mobile" data-popup-open="question">
			<span class="button__label">Поставити своє питання</span>
			<span class="button__icon">
				<svg class="icon-button-answer">
					<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-button-answer"></use>
				</svg>
			</span>
		</button>
	</div>
</section>
<?php }; ?>