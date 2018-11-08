<?php
/**
 * Страница 404 ошибки (404.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // Подключаем header.php ?>
<section>
	<div class="fw-container">
		<div class="fw-row">
			<div class="fw-<?php content_class_by_sidebar(); // функция подставит класс в зависимости от того есть ли сайдбар, лежит в functions.php ?>">
				<h1>Ой, это 404!</h1>
				<p></p>
			</div>
			<?php get_sidebar(); // подключаем sidebar.php ?>
		</div>
	</div>
</section>
<?php get_footer(); // подключаем footer.php ?>