<?php 
if (defined( 'FW' )) {
	$number1 = fw_get_db_customizer_option('statistics-number-1'); 
	$label1 = fw_get_db_customizer_option('statistics-label-1'); 
	$number2 = fw_get_db_customizer_option('statistics-number-2'); 
	$label2 = fw_get_db_customizer_option('statistics-label-2'); 
	$number3 = fw_get_db_customizer_option('statistics-number-3'); 
	$label3 = fw_get_db_customizer_option('statistics-label-3'); 
}
?>

<section class="statistics">
	<div class="wrapper">
		<div class="statistics__container">
			<?php if ($number1 && $label1) : ?>	
				<div class="statistics__item">
					<div class="statistics__number">
						<span><?php echo $number1; ?></span>
						<svg class="icon-bus statistics__icon">
							<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-bus"></use>
						</svg>
					</div>
					<div class="statistics__label"><?php echo $label1; ?></div>
				</div>
			<?php endif; ?>
			<?php if ($number2 && $label2) : ?>	
				<div class="statistics__item">
					<div class="statistics__number">
						<span><?php echo $number2; ?></span>
						<svg class="icon-bag statistics__icon">
							<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-bag"></use>
						</svg>
					</div>
					<div class="statistics__label"><?php echo $label2; ?></div>
				</div>
			<?php endif; ?>
			<?php if ($number3 && $label3) : ?>	
				<div class="statistics__item">
					<div class="statistics__number">
						<span><?php echo $number3; ?></span>
						<svg class="icon-pointer statistics__icon">
							<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-pointer"></use>
						</svg>
					</div>
					<div class="statistics__label"><?php echo $label3; ?></div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>	