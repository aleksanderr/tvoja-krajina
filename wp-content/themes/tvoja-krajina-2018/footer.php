<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tvoja-krajina
 */

?>

<!-- FOOTER -->
<footer class="footer" id="contacts">
	<div class="footer__bg">
		<svg class="skewed-bg">
			<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#skewed-bg"></use>
		</svg>
	</div>
	<div class="wrapper">
		<div class="contact-form footer__contact-form">
			<div class="title contact-form__title">Є питання? Оперативно вiдповiмо!</div>
			<form action="" method="GET">
				<label for="" class="contact-form__field">
					<span class="contact-form__text contact-form__label">Ваше питання</span>
					<textarea name="question" rows="1" data-min-rows='1' class="autoExpand contact-form__text contact-form__textarea" data-textarea></textarea>
				</label>
				<input type="text" name="name" class="contact-form__text contact-form__field contact-form__input" placeholder="Ваше iм’я">
				<input type="text" name="email" class="contact-form__text contact-form__field contact-form__input" placeholder="Пошта">
				<button class="button button_blue contact-form__submit">
					<span class="button__label">Відправити</span>
				</button>
			</form>
		</div>
		<div class="footer__body">
			<div class="footer__main">
				<div class="footer__part">
					<span class="footer__label">Написати:</span>
					<a href="mailto:hello@tvoyakraina.com" class="footer__link">hello@tvoyakraina.com</a>
				</div>
				<div class="footer__part">
					<span class="footer__label">Подзвонити:</span>
					<a href="tel:+380684581452" class="footer__link">068 458 14 52</a>
				</div>
				<div class="footer__part footer__copyright">
					<span>&copy; Твоя країна, 2018</span>
					<br>
					<span>Розроблено у <a href="https://demch.co/" target="_blank" class="footer__dev">demch.co</a></span>
				</div>
			</div>
			<a href="#" class="logo footer__logo">
				<?php the_custom_logo(); ?>
			</a>
		</div>
	</div>
</footer>
<!-- /FOOTER -->

<?php load_template_part('popups'); ?>

<?php wp_footer(); ?>

</body>
</html>
