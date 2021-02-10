<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >

    <link rel="profile" href="https://gmpg.org/xfn/11">

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">

    <?php wp_head(); ?>

</head>

<?php
    // remove after deply to PROD
    ob_start(null, 0, PHP_OUTPUT_HANDLER_REMOVABLE);
?>

<body <?php body_class(); ?>>

<?php
wp_body_open();
?>

<header id="site-header header" class="header-footer-group header" role="banner">

    <div class="header-mob">
        <div class="container">
            <div class="header-mob-wrap">
                <div class="header-mob__left">
                    <button class="menu-toggle"><span></span><i class="screen-reader-text">Меню</i></button>
                </div>
                <div class="header-mob__center">
                    <div class="logo-mob">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 156 12.05" width="156" height="12"><defs><style>.a{fill:#FFF}</style></defs><path class="a" d="M5,.27C7.2.27,8.89,1,8.89,3.46a2.81,2.81,0,0,1-2,2.79c1.61.34,1.68,1.44,1.74,2.83.05.92.05,2.08.66,2.7H7.58A6.41,6.41,0,0,1,7.2,9.24C7.1,7.3,6.6,6.8,4.53,6.8h-3v5H0V.27ZM1.51,5.59H4.36c1.48,0,3-.15,3-2,0-1.71-1.25-2-2.6-2H1.51Z"></path><path class="a" d="M31,5.93c0,3.37-1.85,6.12-5.49,6.12s-5.5-2.81-5.5-6.15c0-3.59,2.15-5.9,5.48-5.9C29.09,0,31,2.5,31,5.93ZM21.57,6c0,2.87,1.56,4.73,4,4.73s4-1.87,4-4.73-1.56-4.69-4-4.69C22.82,1.32,21.57,3.55,21.57,6Z"></path><path class="a" d="M50.22,11.78h-7.6V.27h1.52V10.45h6.08Z"></path><path class="a" d="M68.85,11.78h-7.6V.27h1.51V10.45h6.09Z"></path><path class="a" d="M91.19,12.05c-3.27,0-5.31-2.33-5.31-6,0-3.3,1.9-6,5.42-6,2.26,0,4.53,1.26,4.75,3.72H94.54a3.1,3.1,0,0,0-3.27-2.41c-2.72,0-3.86,2.28-3.86,4.7,0,2.93,1.46,4.72,3.84,4.72,2,0,3.14-1.16,3.39-3.31h1.51A4.66,4.66,0,0,1,91.19,12.05Z"></path><path class="a" d="M115.58,11.77H108V.27h1.51V10.45h6.09Z"></path><path class="a" d="M127.81.27V7.53c0,2.21.88,3.23,3.09,3.23S134,9.64,134,7.53V.27h1.53V7.12c0,3.23-1.14,4.9-4.62,4.9-3.32,0-4.62-1.56-4.62-4.74v-7Z"></path><path class="a" d="M151.83.27c1.9,0,3.66.76,3.66,2.88a2.58,2.58,0,0,1-1.7,2.47A2.74,2.74,0,0,1,156,8.53c0,2.65-2.16,3.24-4.35,3.24h-4.72V.27ZM148.42,5.2h2.72c1.29,0,2.83-.1,2.83-1.83s-1.34-1.81-2.69-1.81h-2.86Zm0,5.3h3c1.53,0,3-.1,3-2.12s-1.75-2-3.28-2h-2.77Z"></path></svg>
                    </div>
                </div>
                <div class="header-mob__right">
                    <button type="button" class="btn-small btn-popup-phones"><i class="icons icon-phone icon-phone--w"></i> <i class="screen-reader-text">Посмотреть телефоны</i></button>
                    <a href="/my-account/" class="btn-small"><i class="icons icon-user icon-user-w"></i> <i class="screen-reader-text">Вход/Регистрация</i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="header-top">
        <div class="container">
            <div class="header-top__left">
                <?php
                    wp_nav_menu([
                        'menu' => 'main_menu'
                    ]);
                ?>
            </div>

            <div class="header-top__right">
                <div class="menu-account-container">
                    <ul id="menu-account" class="menu-account menu">
                        <li id="menu-item-106" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-106"><a href="https://roll-club.kh.ua/my-account/">Вход / Регистрация</a></li>
                    </ul>
                </div>
                <div class="social-icons">
                    <a href="https://www.youtube.com/c/RollClubFood" class="yb-icon" target="_blank">
                        <svg width="20" height="16" viewBox="0 0 24 18" version="1.1" xmlns="http://www.w3.org/2000/svg"><g stroke="none" stroke-width="1" fill-rule="evenodd" fill="currentColor"><path d="M23.057,3.052 C22.7181271,1.80726423 21.7457358,0.834872857 20.501,0.496 C18.731,0.014 12.475,0 11.768,0 C11.06,0 4.808,0.014 3.043,0.478 C3.038,0.478 3.038,0.478 3.033,0.483 C1.79220946,0.838874889 0.825185656,1.81347132 0.479,3.057 L0.479,3.061 C0.005,4.85 0,8.357 0,8.504 C0,8.651 0.005,12.177 0.478,13.956 C0.816077934,15.2024189 1.79092258,16.1753595 3.038,16.511 C4.822,16.994 11.06,17.008 11.768,17.008 C12.475,17.008 18.727,16.994 20.492,16.53 L20.497,16.53 C21.7433799,16.1925358 22.7175872,15.2198507 23.057,13.974 L23.057,13.969 C23.526,12.191 23.5350309,8.711 23.5350309,8.527 C23.5350309,8.347 23.545,4.84 23.057,3.052 Z M21.768,8.52290473 C21.768,9.51330233 21.6934708,12.3857704 21.3510396,13.7469107 C21.1826792,14.3912841 20.6999524,14.8946744 20.0820296,15.0702416 C18.7727336,15.4273308 13.638279,15.504 11.7730358,15.504 C9.91081398,15.504 4.78643086,15.4220795 3.4620276,15.0502866 C2.8411469,14.8766654 2.35486234,14.3731615 2.18395327,13.7269557 C1.7720286,12.1095514 1.768,8.53865866 1.768,8.504 C1.768,7.51465266 1.84152201,4.64218455 2.18395327,3.279994 C2.35751562,2.63333065 2.83882245,2.12586202 3.45699184,1.93775844 C4.77233075,1.58066917 9.90275677,1.504 11.768,1.504 C13.6332432,1.504 18.7676979,1.58592048 20.0769939,1.95771343 C20.697066,2.13128511 21.1821384,2.635122 21.3510396,3.28104426 L21.3510396,3.28524531 C21.707571,4.64218455 21.7720286,7.52410503 21.7669928,8.52290473 L21.768,8.52290473 Z"></path><path d="M8.738,3.668 L8.738,13.335 L17.104,8.5 L8.738,3.67 L8.738,3.668 Z M10.002,6.5047147 L14.002,8.50410735 L10.002,10.5035 L10.002,6.5035 L10.002,6.5047147 Z"></path></g></svg>
                    </a>
                    <a href="https://www.facebook.com/RollClub.Kharkiv" class="fb-icon" target="_blank">
                        <svg width="13" height="21" viewBox="0 0 20 36" version="1.1" xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-width="2" fill="none" fill-rule="evenodd"><path d="M14.691613,6.4290473 L17.9730577,6.4290473 L17.9730577,1.18256292 C17.4079956,1.11166449 15.4609144,0.950531674 13.1938582,0.950531674 C8.46231465,0.950531674 5.22171789,3.68334417 5.22171789,8.70424261 L5.22171789,13.3255317 L0,13.3255317 L0,19.190766 L5.22171789,19.190766 L5.22171789,33.9505317 L11.6212157,33.9505317 L11.6212157,19.190766 L16.6318863,19.190766 L17.4284196,13.3255317 L11.6212157,13.3255317 L11.6212157,9.28432074 C11.6212157,7.58920355 12.118198,6.4290473 14.691613,6.4290473 Z"></path></svg>
                    </a>
                    <a href="https://www.instagram.com/roll_club/" class="ins-icon" target="_blank">
                        <svg width="20" height="20" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="none" fill-rule="evenodd"><g transform="translate(1.000000, 1.000000)" stroke="currentColor" stroke-width="2"><path d="M26.1290323,7.20930113 C26.1290323,7.47586417 25.9797766,7.70967742 25.7127828,7.70967742 L21.841192,7.70967742 C21.5741982,7.70967742 21.2903226,7.47586417 21.2903226,7.20930113 L21.2903226,3.33765231 C21.2903226,3.07108927 21.5741982,2.87096774 21.841192,2.87096774 L25.7127828,2.87096774 C25.9797766,2.87096774 26.1290323,3.07108927 26.1290323,3.33765231 L26.1290323,7.20930113 Z"></path><path d="M23.6403516,0 L6.43986328,0 C2.91919922,0 0,2.92291413 0,6.53295266 L0,23.4391958 C0,27.0492343 2.91919922,30 6.43986328,30 L23.640293,30 C27.1610742,30 30,27.0492343 30,23.4391958 L30,6.53295266 C30,2.92291413 27.1610742,0 23.6403516,0 Z"></path><line x1="0.3125" y1="11" x2="29.6941482" y2="11" stroke-linecap="square"></line><path d="M15.0019352,11.612903 C19.0052784,11.612903 22.2619355,14.8698086 22.2619355,18.8729032 C22.2619355,22.8759979 19.0053405,26.1329035 15.0019352,26.1329035 C10.99853,26.1329035 7.741935,22.8759979 7.741935,18.8729032 C7.741935,14.8698086 10.99853,11.612903 15.0019352,11.612903 Z"></path><path d="M14.9769351,14.612903 C12.6415922,14.612903 10.741935,16.5126109 10.741935,18.8479031 C10.741935,21.1832461 12.6416429,23.0829033 14.9769351,23.0829033 C17.3122781,23.0829033 19.2119353,21.1831954 19.2119353,18.8479031 C19.2119353,16.5126109 17.3122781,14.612903 14.9769351,14.612903 Z"></path><line x1="5" y1="0.322580645" x2="5" y2="7.53570315" stroke-linecap="square"></line><line x1="8" y1="0.322580645" x2="8" y2="7.53570315" stroke-linecap="square"></line><line x1="11" y1="0.322580645" x2="11" y2="7.53570315" stroke-linecap="square"></line></g></svg>
                    </a>
            </div>
        </div>
        </div>
    </div>

    <div class="header-middle">
        <div class="container">
            <div class="header-middle-wrap">
                <div class="info-header">
                    <div class="textwidget">
                        <div class="worktime"><i class="icons icon-clock-arrows"></i><span>Круглосуточно.<br> Перерыв: с 6-00 до 10-00</span>
                        </div>
                        <div class="header-phones">
                            <i class="icons icon-phone"></i>
                            <ul class="header-phones__list"><li><a href="tel:+380577802877" aria-hidden="true">+38 (057) 7802877</a></li><li><a href="tel:+380984868877" aria-hidden="true">+38 (098) 4868877</a></li><li><a href="tel:+380994538877" aria-hidden="true">+38 (099) 4538877</a></li><li><a href="tel:+380934198877" aria-hidden="true">+38 (093) 4198877</a></li></ul>
                        </div>
                    </div>
                </div>
                <div class="logo-wrap">
                    <div class="logo">
                        
                            <img src="<?php echo THEME_PATH . '/img/food-court-logo_main.png'; ?>" alt="Food-Court">
                        
                    </div>
                </div>
                <div class="block-right-header">
                    <div class="cart-header">
                        <div class="lpd-shopping-cart">
                            <div class="lpd-shopping-cart-wrap"> <a href="https://roll-club.kh.ua/cart/" class="cart-total"><strong>Корзина</strong>	0 шт. - <span class="amount">0,00&nbsp;грн.</span></a> <button class="cart-button"> <span class="cart-button-total">Корзина &nbsp;&nbsp; 0,00 грн</span> <span class="cart-icon"><span class="icon"></span><span class="count">0</span></span> </button>
                                <div class="cart-dropdown">
                                    <div class="lpd-shopping-cart-list">
                                        <p class="empty">Корзина пуста.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-bottom">
        <div class="container">
            <div class="header-main-menu">
                <ul id="menu-main-menu" class="menu">
                    <li id="menu-item-364273" class="menu-icon-menulist menu-icon menu-item menu-item-type-post_type menu-item-object-page menu-item-364273"><a href="https://roll-club.kh.ua/menu-restaurant/">Ресторан</a></li>
                    <li id="menu-item-31" class="menu-icon-rolly menu-icon menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-31"><a href="https://roll-club.kh.ua/tovar-category/rolly/">Роллы</a></li>
                    <li id="menu-item-269636" class="menu-icon-premium menu-icon menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-269636"><a href="https://roll-club.kh.ua/tovar-category/premium/">Премиум</a></li><li id="menu-item-28" class="menu-icon-nabory menu-icon menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-28"><a href="https://roll-club.kh.ua/tovar-category/nabory/">Сеты</a></li><li id="menu-item-288119" class="menu-item-sale menu-icon-aktsiya menu-icon menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-288119"><a href="https://roll-club.kh.ua/tovar-category/aktsiya/">Скидки</a></li><li id="menu-item-130301" class="menu-icon-pizza menu-icon menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-130301"><a href="https://roll-club.kh.ua/tovar-category/pizza/">Пицца</a></li><li id="menu-item-34" class="menu-icon-sushi menu-icon menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-34"><a href="https://roll-club.kh.ua/tovar-category/sushi/">Суши</a></li><li id="menu-item-302254" class="menu-icon-pizza menu-icon menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-302254"><a href="https://roll-club.kh.ua/tovar-category/city-pizza/">City pizza</a></li><li id="menu-item-269653" class="menu-icon-shaurma menu-icon menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-269653"><a href="https://roll-club.kh.ua/tovar-category/shaurma/">Шаурма</a></li><li id="menu-item-20968" class="menu-icon-burger menu-icon menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-20968"><a href="https://roll-club.kh.ua/tovar-category/burger/">Бургеры</a></li><li id="menu-item-968" class="menu-icon-eda-v-korobjchkah menu-icon menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-968"><a href="https://roll-club.kh.ua/tovar-category/eda-v-korobjchkah/">Лапша</a></li><li id="menu-item-27" class="menu-icon-goryachie-blyuda menu-icon menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-27"><a href="https://roll-club.kh.ua/tovar-category/goryachie-blyuda/">Супы</a></li><li id="menu-item-32" class="menu-icon-salaty menu-icon menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-32"><a href="https://roll-club.kh.ua/tovar-category/salaty/">Салаты</a></li><li id="menu-item-6545" class="menu-icon-deserty menu-icon menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-6545"><a href="https://roll-club.kh.ua/tovar-category/deserty/">Десерты</a></li><li id="menu-item-269648" class="menu-icon-napitki menu-icon menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-269648"><a href="https://roll-club.kh.ua/tovar-category/napitki/">Напитки</a></li>
                    <li id="menu-item-269649" class="menu-icon-sousy menu-icon menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-269649"><a href="https://roll-club.kh.ua/tovar-category/sousy/">Соусы</a></li>
                </ul>
            </div>
        </div>
    </div>

</header><!-- #site-header -->

<?php
