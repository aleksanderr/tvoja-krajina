<?php 
if (defined( 'FW' )) {
	$title = fw_get_db_customizer_option('it-is-title'); 
	$label1 = fw_get_db_customizer_option('it-is-label-1'); 
	$label2 = fw_get_db_customizer_option('it-is-label-2'); 
	$label3 = fw_get_db_customizer_option('it-is-label-3'); 
}
?>

<section class="it-is" id="it-is">
	<div class="wrapper">
		<div class="it-is__container">
			<div class="it-is__part it-is__part_left">
				<h2 class="title it-is__title">
					<?php 
					if ($title) : echo $title;
					else :
						?>	
						Твоя країна — це:
					<?php endif; ?>
				</h2>
				<div class="it-is__list">

					<div class="it-is__item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/it-is-1.png" alt="" class="it-is__icon">
						<div class="it-is__label">
							<?php 
							if ($label1) : echo $label1;
							else :
								?>
								Кілька днів у новому місті  з насиченою програмою
							<?php endif; ?>
						</div>
					</div>
					<div class="it-is__item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/it-is-2.png" alt="" class="it-is__icon">
						<div class="it-is__label">
							<?php 
							if ($label2) : echo $label2;
							else :
								?>
								Безкоштовне проживання  та харчування (частково)
							<?php endif; ?>
						</div>
					</div>
					<div class="it-is__item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/it-is-3.png" alt="" class="it-is__icon">
						<div class="it-is__label">
							<?php 
							if ($label3) : echo $label3;
							else :
								?>
								Спілкування з новими  друзями з усієї країни
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="it-is__part it-is__part_right">
				<div class="visits">
					<div class="visits__panel">
						<div class="visits__types">
							<button class="visit-type visit-type_blue visit-type_active" data-visits-type="future">
								<span class="visit-type__label">Майбутнi вiзити</span>
								<span class="visit-type__count">25</span>
							</button>
							<button class="visit-type visit-type_orange" data-visits-type="past">
								<span class="visit-type__label">Минулi</span>
								<span class="visit-type__count">325</span>
							</button>
						</div>
						<div class="visits__switchers">
							<button class="visits__switcher" data-visits-view-switcher="list">
								<svg class="icon-switcher-list">
									<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-switcher-list"></use>
								</svg>
							</button>
							<button class="visits__switcher visits__switcher_active" data-visits-view-switcher="map">
								<svg class="icon-switcher-map">
									<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-switcher-map"></use>
								</svg>
							</button>								
						</div>
					</div>
					<div class="visits__view" data-visits-view="map">
						<div class="visits__map">
							<img src="pic/map-placeholder.png" alt="">
						</div>
					</div>	
					<div class="visits__view visits__view_active" data-visits-view="list">
						<div class="visits__list" data-visits-list="past" id="list">
							<article class="visit">
								<div class="visit__info">
									<div class="visit__part">
										<svg class="icon-list-pointer visit__icon">
											<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-list-pointer"></use>
										</svg>
									</div>
									<div class="visit__part">
										<div class="visit__title">
											Вiзит до Александрiї 
											<br>
											20 — 23 листопада
										</div>
									</div>
									<div class="visit__part">
										<div class="visit__label">Органiзатор</div>
										<div class="visit__organizer">Команда «Веселi хлопцi та дiвчата»</div>
									</div>
								</div>																		
								<button class="button button_orange button_with-plus visit__take-part">
									<span class="button__label">Взяти участь</span>
									<span class="button__icon">
										<svg class="icon-plus">
											<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-plus"></use>
										</svg>
									</span>
								</button>
							</article>
							<article class="visit">
								<div class="visit__info">
									<div class="visit__part">
										<svg class="icon-list-pointer visit__icon">
											<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-list-pointer"></use>
										</svg>
									</div>
									<div class="visit__part">
										<div class="visit__title">
											Вiзит до Александрiї 
											<br>
											20 — 23 листопада
										</div>
									</div>
									<div class="visit__part">
										<div class="visit__label">Органiзатор</div>
										<div class="visit__organizer">Команда «Веселi хлопцi та дiвчата»</div>
									</div>
								</div>																		
								<button class="button button_orange button_with-plus visit__take-part">
									<span class="button__label">Взяти участь</span>
									<span class="button__icon">
										<svg class="icon-plus">
											<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-plus"></use>
										</svg>
									</span>
								</button>
							</article>
							<article class="visit">
								<div class="visit__info">
									<div class="visit__part">
										<svg class="icon-list-pointer visit__icon">
											<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-list-pointer"></use>
										</svg>
									</div>
									<div class="visit__part">
										<div class="visit__title">
											Вiзит до Александрiї 
											<br>
											20 — 23 листопада
										</div>
									</div>
									<div class="visit__part">
										<div class="visit__label">Органiзатор</div>
										<div class="visit__organizer">Команда «Веселi хлопцi та дiвчата»</div>
									</div>
								</div>																		
								<button class="button button_orange button_with-plus visit__take-part">
									<span class="button__label">Взяти участь</span>
									<span class="button__icon">
										<svg class="icon-plus">
											<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-plus"></use>
										</svg>
									</span>
								</button>
							</article>
							<article class="visit">
								<div class="visit__info">
									<div class="visit__part">
										<svg class="icon-list-pointer visit__icon">
											<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-list-pointer"></use>
										</svg>
									</div>
									<div class="visit__part">
										<div class="visit__title">
											Вiзит до Александрiї 
											<br>
											20 — 23 листопада
										</div>
									</div>
									<div class="visit__part">
										<div class="visit__label">Органiзатор</div>
										<div class="visit__organizer">Команда «Веселi хлопцi та дiвчата»</div>
									</div>
								</div>																		
								<button class="button button_orange button_with-plus visit__take-part">
									<span class="button__label">Взяти участь</span>
									<span class="button__icon">
										<svg class="icon-plus">
											<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-plus"></use>
										</svg>
									</span>
								</button>
							</article>
							<article class="visit">
								<div class="visit__info">
									<div class="visit__part">
										<svg class="icon-list-pointer visit__icon">
											<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-list-pointer"></use>
										</svg>
									</div>
									<div class="visit__part">
										<div class="visit__title">
											Вiзит до Александрiї 
											<br>
											20 — 23 листопада
										</div>
									</div>
									<div class="visit__part">
										<div class="visit__label">Органiзатор</div>
										<div class="visit__organizer">Команда «Веселi хлопцi та дiвчата»</div>
									</div>
								</div>																		
								<button class="button button_orange button_with-plus visit__take-part">
									<span class="button__label">Взяти участь</span>
									<span class="button__icon">
										<svg class="icon-plus">
											<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-plus"></use>
										</svg>
									</span>
								</button>
							</article>
							<article class="visit">
								<div class="visit__info">
									<div class="visit__part">
										<svg class="icon-list-pointer visit__icon">
											<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-list-pointer"></use>
										</svg>
									</div>
									<div class="visit__part">
										<div class="visit__title">
											Вiзит до Александрiї 
											<br>
											20 — 23 листопада
										</div>
									</div>
									<div class="visit__part">
										<div class="visit__label">Органiзатор</div>
										<div class="visit__organizer">Команда «Веселi хлопцi та дiвчата»</div>
									</div>
								</div>																		
								<button class="button button_orange button_with-plus visit__take-part">
									<span class="button__label">Взяти участь</span>
									<span class="button__icon">
										<svg class="icon-plus">
											<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-plus"></use>
										</svg>
									</span>
								</button>
							</article>
							<article class="visit">
								<div class="visit__info">
									<div class="visit__part">
										<svg class="icon-list-pointer visit__icon">
											<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-list-pointer"></use>
										</svg>
									</div>
									<div class="visit__part">
										<div class="visit__title">
											Вiзит до Александрiї 
											<br>
											20 — 23 листопада
										</div>
									</div>
									<div class="visit__part">
										<div class="visit__label">Органiзатор</div>
										<div class="visit__organizer">Команда «Веселi хлопцi та дiвчата»</div>
									</div>
								</div>																		
								<button class="button button_orange button_with-plus visit__take-part">
									<span class="button__label">Взяти участь</span>
									<span class="button__icon">
										<svg class="icon-plus">
											<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-plus"></use>
										</svg>
									</span>
								</button>
							</article>
							<article class="visit">
								<div class="visit__info">
									<div class="visit__part">
										<svg class="icon-list-pointer visit__icon">
											<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-list-pointer"></use>
										</svg>
									</div>
									<div class="visit__part">
										<div class="visit__title">
											Вiзит до Александрiї 
											<br>
											20 — 23 листопада
										</div>
									</div>
									<div class="visit__part">
										<div class="visit__label">Органiзатор</div>
										<div class="visit__organizer">Команда «Веселi хлопцi та дiвчата»</div>
									</div>
								</div>																		
								<button class="button button_orange button_with-plus visit__take-part">
									<span class="button__label">Взяти участь</span>
									<span class="button__icon">
										<svg class="icon-plus">
											<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-plus"></use>
										</svg>
									</span>
								</button>
							</article>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>
</section>