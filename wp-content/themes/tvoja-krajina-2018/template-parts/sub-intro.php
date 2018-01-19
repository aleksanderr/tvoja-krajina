<?php 
if (defined( 'FW' )) {
	$primary_text = fw_get_db_customizer_option('about-primary-text'); 
	$additional_text = fw_get_db_customizer_option('about-additional-text'); 
}
?>

<section class="sub-intro" id="sub-intro">
	<svg class="sub-intro__pointer sub-intro__pointer_1">
		<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-float-pointer-1"></use>
	</svg>
	<svg class="sub-intro__pointer sub-intro__pointer_2">
		<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-float-pointer-2"></use>
	</svg>
	<svg class="sub-intro__pointer sub-intro__pointer_3">
		<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-float-pointer-3"></use>
	</svg>
	<svg class="sub-intro__pointer sub-intro__pointer_4">
		<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-float-pointer-4"></use>
	</svg>
	<svg class="sub-intro__pointer sub-intro__pointer_5">
		<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-float-pointer-5"></use>
	</svg>
	<div class="wrapper">
		<div class="sub-intro__container">
			<div class="sub-intro__text sub-intro__text_main">
				<?php 
				if ($primary_text) : echo $primary_text;
				else :
					?>				
					Ми не звертаємо уваги на те, що знаходиться поруч, і дуже багато <strong>емоцій</strong> і <strong>нових вражень</strong> залишається за кадром
				<?php endif; ?>
			</div>
			<div class="sub-intro__text sub-intro__text_simple">
				<?php 
				if ($additional_text) : echo $additional_text;
				else :
					?>	
					Не прогав можливiсть! Подорожуй, знайомся, вивчай нові місця, знаходь нових друзів і ми допоможемо в цьому!
				<?php endif; ?>
			</div>
			<button class="button button_orange button_with-plus sub-intro__button">
				<a href="#"></a>
				<span class="button__label">Взяти участь</span>
				<span class="button__icon">
					<svg class="icon-plus">
						<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-plus"></use>
					</svg>
				</span>
			</button>
		</div>
	</div>
</section>