<?php
/**
 * Шаблон подвала (footer.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
	<footer class="footer">
        <div class="fw-container">
            <div class="fw-row">
                <div class="footer__title">Идеальные лицо и тело в твоих руках!</div>
                <div class="footer__phone">+7 499 130-9193</div>
                <div class="footer__nav">
                    <?php $args = array( // опции для вывода нижнего меню, чтобы они работали, меню должно быть создано в админке
                        'theme_location' => 'top', // идентификатор меню, определен в register_nav_menus() в function.php
                        'container'=> false, // обертка списка, false - это ничего
                        'menu_class' => 'nav nav-pills bottom-menu', // класс для ul
                        'menu_id' => 'bottom-nav', // id для ul
                        'fallback_cb' => false
                    );
                    wp_nav_menu($args); // выводим нижние меню
                    ?>
                </div>
                <div class="footer__nav-further">
                    <?php $args = array( // опции для вывода нижнего меню, чтобы они работали, меню должно быть создано в админке
                        'theme_location' => 'top_further', // идентификатор меню, определен в register_nav_menus() в function.php
                        'container'=> false, // обертка списка, false - это ничего
                        'menu_class' => 'nav nav-pills bottom-menu', // класс для ul
                        'menu_id' => 'bottom-nav', // id для ul
                        'fallback_cb' => false
                    );
                    wp_nav_menu($args); // выводим нижние меню
                    ?>
                </div>

                <ul class="footer__social">
                    <li>
                        <a href="http://vk.com/tverskaya_20" target="_blank">
                            <svg viewBox="0 0 22 22" class="groups_icon" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><g><path d="M14.365 15.837l-1.35-1.71a.95.95 0 0 0-.18-.174l-.048-.027-.02.045-.308 1.38-.053.284c-.088.293-.278.594-.666.67l-.237.01H9.94c-2.782 0-5.294-3.96-7.052-8.896l-.012-.047c-.06-.297-.09-.624.055-.89.17-.305.488-.402.823-.413l2.403.017c.153 0 .28.1.323.24.543 1.778 1.206 2.864 2.02 4.1l.02.04c.088.188.273.136.366-.01l.06-.173V7.493c0-.41-.187-.468-.64-.532a.34.34 0 0 1-.275-.44c.22-.692.936-1.045 1.93-1.045l.918-.022c.74 0 1.413.318 1.413 1.266v3.666l.067.034c.12.044.36.052.552-.25.832-1.175 1.793-2.58 1.93-3.313a.32.32 0 0 1 .024-.085c.17-.357.634-.61.82-.666a.49.49 0 0 1 .14-.024h2.505l.152.003c.06.006.12.02.176.04.15.054.255.152.326.264.136.22.117.47.13.57a.29.29 0 0 1 0 .103c-.234 1.47-1.923 3.116-2.633 4.185-.183.25-.185.437-.015.645l2.356 2.95c.273.387.256.812-.033 1.115-.187.2-.462.31-.75.342l-.273.01H15.26l.043-.005c-.33.043-.585-.093-.777-.286l-.16-.193v.01zm.893-.2h2.52c.266.017.444-.065.515-.14.025-.024.06-.065.025-.154l-.05-.095-2.332-2.917c-.4-.485-.335-1.02-.015-1.46.676-1.015 2.127-2.47 2.468-3.667L18.434 7l-.01-.13-.018-.1H15.87l-.082.035a1.3 1.3 0 0 0-.238.173l-.068.085-.085.3c-.29.813-1.014 1.896-1.634 2.78l-.297.42-.19.233c-.5.487-1.24.398-1.543-.008a.61.61 0 0 1-.122-.36V6.72c0-.438-.197-.586-.722-.586l-.918.02c-.44 0-.742.075-.945.184l-.11.072.078.028c.336.15.634.442.634 1.054l-.002 2.833c-.065.884-1.145 1.272-1.63.586l-.064-.11c-.72-1.1-1.35-2.116-1.876-3.605l-.14-.43-2.156-.015c-.22.006-.232.065-.23.06-.013.024-.03.092-.014.245l.026.162.335.905c1.755 4.547 3.978 7.514 6.064 7.514h1.577c.215.013.26-.226.272-.388l.007-.05.315-1.405.008-.034a.86.86 0 0 1 .214-.356.616.616 0 0 1 .516-.168c.268.036.502.227.694.46l1.367 1.73c.143.202.235.222.305.21h.044z"></path><path d="M0 19.773V1.987C0 .897.897 0 1.987 0h17.786c1.09 0 1.986.897 1.987 1.987v17.786c0 1.09-.897 1.986-1.987 1.987H1.987A1.998 1.998 0 0 1 0 19.773zm21.08 0V1.987c0-.717-.59-1.306-1.307-1.307H1.987C1.27.68.68 1.27.68 1.987v17.786c0 .72.587 1.307 1.307 1.307h17.786c.717 0 1.306-.59 1.307-1.307z"></path></g></svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/profile.php?id=100008583428717" target="_blank">
                            <svg viewBox="0 0 22 22" class="groups_icon" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><g><path d="M10.134 21.32v-8.442h-1.53a.342.342 0 0 1-.34-.34V10.01c0-.224.17-.335.34-.336h1.53v-1.36c0-.716.008-2.006.68-2.83.68-.837 1.618-1.4 3.17-1.4 2.39 0 3.42.32 3.457.333a.34.34 0 0 1 .236.384l-.468 2.59a.34.34 0 0 1-.422.27c.002 0-.74-.2-1.42-.2-.414 0-1.04.09-1.04.584v1.633h2.644a.34.34 0 0 1 .337.34v.028l-.208 2.53a.34.34 0 0 1-.34.31h-2.44v8.442a.34.34 0 0 1-.34.34h-3.505a.342.342 0 0 1-.34-.34v-.003zm3.506-.34v-8.442a.34.34 0 0 1 .34-.34h2.465l.152-1.848H13.98a.342.342 0 0 1-.34-.34V8.038c0-.474.24-.812.59-1.012.327-.187.74-.25 1.132-.25.387 0 .786.057 1.088.113l.148.024.346-1.92-.108-.022c-.476-.087-1.398-.21-2.852-.21-1.343 0-2.09.47-2.64 1.15-.494.604-.528 1.626-.528 2.4v1.7c0 .186-.154.34-.34.34h-1.53V12.2h1.53a.34.34 0 0 1 .34.34v8.44h2.826-.002z"></path><path d="M0 19.773V1.987C0 .897.897 0 1.987 0h17.786a2 2 0 0 1 1.988 1.987v17.786a2 2 0 0 1-1.984 1.988H1.986A2 2 0 0 1 0 19.777zm21.08 0V1.987c0-.716-.59-1.306-1.307-1.307H1.987C1.27.68.68 1.27.68 1.987v17.786c0 .72.587 1.308 1.307 1.308h17.786c.717 0 1.307-.59 1.308-1.304z"></path></g></svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/beautyfit.ru/" target="_blank">
                            <svg viewBox="0 0 22 22" class="groups_icon" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><g><path d="M0 19.77V1.986C0 .896.897 0 1.987 0H19.77c1.09 0 1.985.897 1.986 1.987V19.77c0 1.09-.897 1.985-1.987 1.986H1.985A1.998 1.998 0 0 1 0 19.77zm21.076 0V1.986c0-.717-.59-1.306-1.307-1.307H1.985C1.27.68.68 1.27.68 1.986V19.77c0 .72.586 1.306 1.307 1.306H19.77c.716 0 1.305-.59 1.306-1.307z"></path><path d="M3.4 15.74V6.016a2.635 2.635 0 0 1 2.62-2.622h9.723a2.636 2.636 0 0 1 2.622 2.622v9.722a2.634 2.634 0 0 1-2.62 2.618H6.02a2.634 2.634 0 0 1-2.623-2.62zm14.285 0V6.016c0-1.065-.876-1.94-1.94-1.942H6.02c-.044 0-.087.002-.128.005h.225v4.08h-.68V4.162a1.948 1.948 0 0 0-1.36 1.853v2.14h13.597v.68H4.08v6.902a1.953 1.953 0 0 0 1.94 1.94h9.723c1.065 0 1.94-.877 1.942-1.942zM7.477 12.92a3.42 3.42 0 0 1 3.4-3.402 3.42 3.42 0 0 1 3.404 3.402 3.418 3.418 0 0 1-3.4 3.327A3.418 3.418 0 0 1 7.48 12.92zm6.124 0a2.736 2.736 0 0 0-2.72-2.656A2.735 2.735 0 0 0 8.16 12.92a2.735 2.735 0 0 0 2.722 2.673c1.475 0 2.696-1.2 2.722-2.675zm-4.755-.004c0-1.117.918-2.035 2.035-2.036 1.093.03 1.976.94 1.976 2.035a2.044 2.044 0 0 1-1.977 2.035 2.044 2.044 0 0 1-2.033-2.036l-.004.002zm3.39 0c0-.748-.61-1.357-1.355-1.357s-1.357.61-1.357 1.354a1.357 1.357 0 0 0 2.713 0h-.004zM6.798 8.158v-4.08h.68v4.08H6.8zm1.358 0v-4.08h.68v4.08h-.68zM13.6 6.12a1.366 1.366 0 0 1 1.353-1.363c.75 0 1.355.616 1.355 1.365v.006c0 .744-.61 1.357-1.355 1.36A1.365 1.365 0 0 1 13.6 6.123zm2.028 0a.685.685 0 0 0-.675-.683.684.684 0 0 0 0 1.37.683.683 0 0 0 .675-.685z"></path></g></svg>
                        </a>
                    </li>
                </ul>

                <div class="footer__copy">
                    © 2015 Центр Косметологии и Эстетики
                </div>

            </div>
        </div>



        <div hidden>

            <?php $social_fb = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('social_fb') : '';
            if( !empty( $social_fb ) ) : ?>
                <a class="footer__social" href="<?php echo $social_fb ?>">
                    FaceBook
                </a>
            <?php endif ?>

            <?php $social_inst = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('social_inst') : '';
            if( !empty( $social_inst ) ) : ?>
                <a class="footer__social" href="<?php echo $social_inst ?>">
                    Instagram
                </a>
            <?php endif ?>

            <?php $social_tw = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('social_tw') : '';
            if( !empty( $social_tw ) ) : ?>
                <a class="footer__social" href="<?php echo $social_tw ?>">
                    Twitter
                </a>
            <?php endif ?>

            <?php $social_vk = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('social_vk') : '';
            if( !empty( $social_vk ) ) : ?>
                <a class="footer__social" href="<?php echo $social_vk ?>">
                    VK
                </a>
            <?php endif ?>


            <?php $args = array( // опции для вывода нижнего меню, чтобы они работали, меню должно быть создано в админке
                'theme_location' => 'bottom', // идентификатор меню, определен в register_nav_menus() в function.php
                'container'=> false, // обертка списка, false - это ничего
                'menu_class' => 'nav nav-pills bottom-menu', // класс для ul
                'menu_id' => 'bottom-nav', // id для ul
                'fallback_cb' => false
            );
            wp_nav_menu($args); // выводим нижние меню
            ?>
        </div>

	</footer>
<?php wp_footer(); // необходимо для работы плагинов и функционала  ?>
</body>
</html>