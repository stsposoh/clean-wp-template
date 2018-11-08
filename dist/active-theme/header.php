<?php
/**
 * @package WordPress
 * @subpackage Custom_Theme
 * @since 1.0
 * @version 1.0
 */
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" 
      xmlns:fb="http://ogp.me/ns/fb#" 
	  xmlns:og="http://ogp.me/ns#" 
	  xmlns:og="http://ogp.me/ns#"
	  lang="ru">
	  
<head>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel='stylesheet' id='font-awesome-css'  href='/wp-content/plugins/unyson/framework/static/libs/font-awesome/css/font-awesome.min.css' type='text/css' media='all' />
        <?php
          $favicon = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('favicon') : '';
          if( !empty( $favicon ) ) :
        ?>
        <link rel="icon" type="image/png" href="<?php echo $favicon['url'] ?>">
        <?php endif ?>
        <?php /* Все скрипты и стили подключаются в functions.php */ ?>
          <!--[if lt IE 9]>
          <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
          <![endif]-->

        <!-- для шаринга в соц сетях -->
        <!--Open Graph Facebook-->
        <?php if (have_posts()):while(have_posts()):the_post(); endwhile; endif;?>  
        <!-- постоянные значения -->  
        <!-- <meta property="fb:admins" content="" /> -->

        <!-- если это статья -->  
        <?php if (is_single()) { ?>
        <!-- vk -->
        <link rel="image_src" href="<?php if (function_exists('wp_get_attachment_thumb_url')) {echo 
        wp_get_attachment_thumb_url(get_post_thumbnail_id($post->ID)); } ?>" />
        <meta name="title" content="<?php single_post_title(''); ?>">
        <!-- facebook -->
        <meta property="og:image:width" content="150">
        <meta property="og:image:height" content="150">
        <meta property="og:locale" content="ru_RU">  
        <meta property="og:site_name" content="Согреем дом">
        <meta property="og:url" content="<?php the_permalink(); ?>"/>  
        <meta property="og:title" content="<?php single_post_title(''); ?>" />  
        <meta property="og:description" 
                content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>" />  
        <meta property="og:type" content="article" />  
        <meta property="og:image" content="<?php if (function_exists('wp_get_attachment_thumb_url')) {echo 
        wp_get_attachment_thumb_url(get_post_thumbnail_id($post->ID)); } ?>" />
        <!-- twitter -->
        <meta name="twitter:card" content="summary_large_image"/>
        <meta name="twitter:title" content="<?php single_post_title(''); ?>" />
        <meta name="twitter:description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>" />
        <meta name="twitter:url" content="<?php the_permalink(); ?>" />
        <meta name="twitter:image" content="<?php if (function_exists('wp_get_attachment_thumb_url')) {echo 
        wp_get_attachment_thumb_url(get_post_thumbnail_id($post->ID)); } ?>" />

        <!-- если это любая другая страница -->  
        <?php } else { ?>  
        <!-- vk -->
        <?php $logo_img = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('logo_img') : '';
        if( !empty( $logo_img ) ) : ?>
        <link rel="image_src" href="<?php echo $logo_img['url'] ?>" />
        <?php endif ?>
        <meta name="title" content="<?php bloginfo('name'); ?>">
        <!-- facebook -->
        <meta property="og:image:width" content="150">
        <meta property="og:image:height" content="150">
        <meta property="og:locale" content="ru_RU">  
        <meta property="og:site_name" content="Согреем дом">
        <meta property="og:title" content="<?php bloginfo('name'); ?>" />  
        <meta property="og:description" 
                content="<?php bloginfo('description'); ?>" />  
        <meta property="og:type" content="website" />  
        <meta property="og:image" content="<?php echo $logo_img['url'] ?>" /> 
        <!-- twitter -->
        <meta name="twitter:card" content="summary_large_image"/>
        <meta name="twitter:title" content="<?php bloginfo('name'); ?>" />
        <meta name="twitter:description" content="<?php bloginfo('description'); ?>" />
        <meta name="twitter:image" content="<?php echo $logo_img['url'] ?>" />
        
        <?php } ?> 
        <!-- для шаринга в соц сетях__________end--> 

        <?php wp_head(); ?>

        <title></title>
    </head>

    <body <?php body_class(); ?>>
        <header class="header">
            <div class="header__top">
                <div class="fw-container">
                    <div class="fw-row">
                        <div class="fw-col-xs-12 fw-col-sm-4 fw-col-md-4 fw-col-lg-3">
                            <span class="icon-text">
                                <span class="fw-icon">
                                    <i class="fa fa-phone"></i>
                                </span>
                                <span class="icon-text__content">
                                    <?php $tel = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('tel') : ''; ?>
                                    <a href="tel:<?php echo $tel ?>">
                                        <?php echo $tel ?>
                                    </a>
                                </span>
                            </span>
                        </div>
                        <div class="fw-col-xs-12 fw-col-sm-4 fw-col-md-4 fw-col-lg-3">
                            <span class="icon-text">
                                <span class="fw-icon">
                                    <i class="fa fa-envelope-o"></i>
                                </span>
                                <span class="icon-text__content">
                                    <?php $email = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('email') : ''; ?>
                                    <a href="mailto:<?php echo $email ?>">
                                        <?php echo $email ?>
                                    </a>
                                </span>
                            </span>
                        </div>
                        <div class="fw-col-xs-12 fw-col-sm-4 fw-col-md-4 fw-col-lg-6">
                            <span class="icon-text">
                                <span class="fw-icon">
                                    <i class="fa fa-clock-o"></i>
                                </span>
                                <span class="icon-text__content">
                                    <?php $schedule = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('schedule') : ''; ?>
                                    <?php echo $schedule ?>
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header__main">
                <div class="fw-container">
                    <div class="fw-row">
                        <div class="fw-col-xs-7 fw-col-sm-3 fw-col-md-3 fw-col-lg-2">
                            <div class="header__main-logo">
                                <?php if( !empty( $logo_img ) ) : ?>
                                <a href="/" class="logo">
                                    <img class="logo__img" src="<?php echo $logo_img['url'] ?>">
                                </a>
                                <?php endif ?>
                            </div> 
                        </div>
                        <div class="fw-col-xs-12 fw-col-sm-5 fw-col-md-6 fw-col-lg-8 hidden-xs hidden-sm">
                            <div class="header__main-menu">
                                <!--menu-->
                                <?php $args = array( // опции для вывода нижнего меню, чтобы они работали, меню должно быть создано в админке
                                    'theme_location' => 'top', // идентификатор меню, определен в register_nav_menus() в function.php
                                    'container'=> false, // обертка списка, false - это ничего
                                    'menu_class' => 'menu', // класс для ul
                                    'menu_id' => 'top-nav', // id для ul
                                    'fallback_cb' => false
                                );
                                wp_nav_menu($args); // выводим нижние меню
                                ?>
                            </div>
                        </div>
                        <div class="fw-col-xs-2 fw-col-sm-7 fw-col-md-3 fw-col-lg-2 hidden-md hidden-lg">    
                            <div class="header__mob-menu-btn">
                                <a href="#" class="toggle-mnu"><span></span></a>
                            </div> 
                        </div>
                        <div class="fw-col-xs-3 fw-col-sm-2 fw-col-md-3 fw-col-lg-2">    
                            <div class="header__search">
                                <i class="fa fa-search" aria-hidden="true" title="Поиск"></i>
                                <div class="header__search-hidder"></div>
                                <div class="header__search-field-wrap">
                                    <?php get_search_form(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>