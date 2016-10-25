<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/application.css">

        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <div class="sidearea">

            <ul class="sidearea__list" id="menu_user">

                <li class="sidearea__item sidearea__item_top">
                    <a href="#" class="sidearea__link_close"><i class="icon ion-arrow-left-c"></i></a>

                    <p class="sidearea__text">
                        <span class="sidearea__text_title"><strong>Jane Doe</strong></span>
                        <span class="sidearea__text_small">Cross Sales</span>
                    </p>

                    <a href="#avatarPopup"  class="sidearea__avatar popup__link">
                        <div class="avatar__overlay"></div>
                        <span style="background-image: url(img/user-img.jpg)"></span>
                    </a>
                </li>
                <li class="sidearea__item">
                    <div class="sidearea__form">
                        <span class="sidearea__text_small uppercase">Personal data</span>
                        
                        <form id="sidearea__dataform" class="dataform sidearea__dataform" action="" method="POST">
                            <label for="sidearea__dataform_name" class="sidearea__label uppercase">Name</label>
                            <input type="text" class="sidearea__input error" name="sidearea__dataform_name" id="sidearea__dataform_name_input" maxlength="20" required="">

                            <label for="sidearea__dataform_email" class="sidearea__label uppercase">Email</label>
                            <input type="email" class="sidearea__input blocked" name="sidearea__dataform_email" id="sidearea__dataform_email_input" maxlength="20" required="" value="email@email.com" disabled>
                        </form>
                    </div>

                    <div class="sidearea__form">
                        <span class="sidearea__text_small uppercase">Change Password</span>
                        
                        <form id="sidearea__pwdform" class="editform sidearea__pwdform" action="" method="POST">
                            <label for="sidearea__pwdform_name" class="sidearea__label uppercase">New password</label>
                            <input type="password" class="sidearea__input" name="sidearea__pwdform_name" id="sidearea__pwdform_name_input" maxlength="20" required="">

                            <label for="sidearea__pwdform_email" class="sidearea__label uppercase">Repeat password</label>
                            <input type="password" class="sidearea__input" name="sidearea__pwdform_email" id="sidearea__pwdform_email_input" maxlength="20" required="">
                        </form>
                    </div>
                    <a href="#" class="button button__securitas uppercase"><strong>Save</strong></a>
                </li>
            </ul>

            <ul class="sidearea__list" id="menu_notifications">
                <li class="sidearea__item  sidearea__item_top">
                    <a href="#" class="sidearea__link_close"><i class="icon ion-arrow-left-c"></i></a>

                    <p class="sidearea__text">
                        <span class="sidearea__text_title"><strong><span>999</span> New notifications</strong></span>
                        <a href="#" class="sidearea__text_link">Mark all as read</a>
                    </p>
                </li>
                <li class="sidearea__item">
                    <a href="#" class="sidearea__link">Course title #1 <span class="sidearea__link_description">Dummy text helps peoplelorem ipsum dolor</span></a>
                </li>
                <li class="sidearea__item">
                    <a href="#" class="sidearea__link">Course title #2<span class="sidearea__link_description">Dummy text helps peoplelorem ipsum dolor</span></a>
                </li>
                <li class="sidearea__item">
                    <a href="#" class="sidearea__link">Course title #3<span class="sidearea__link_description">Is a trusted friend of designers. Dummy text helps people get...</span></a>
                </li>
                <li class="sidearea__item">
                    <a href="#" class="sidearea__link">Course title #4<span class="sidearea__link_description">Dummy text helps peoplelorem ipsum dolor</span></a>
                </li>
            </ul>
        </div><!--end of sidearea-->

        <div class="overlay"></div><!--end of overlay-->

        <header class="header">
            <div class="container header__container clearfix">
                <div class="header__logo"><a href="index.php" title="Securitas Direct"></a></div><!--end of header__logo-->

                <nav class="header__menu">
                    <ul class="menu__list">
                        <li class="menu__item menu__item_logged user">
                            <a href="#"  data-rel="menu_user" class="menu__link" title="Usuario"><span class="usercircle" style="background-image: url(img/user-img.jpg)"></span></a>
                        </li><!--end of navigation__item-->
                        <li class="menu__item menu__item_logged">
                            <a href="#"  data-rel="menu_notifications" class="menu__link" title="Notificaciones">
                                <span class="notifications">
                                    <i class="icon ion-android-notifications"></i>
                                    <span class="notifications__bullet"><div class="notifications__number"><span>+9</span></div></span>
                                </span>
                            </a>
                        </li><!--end of navigation__item-->
                        <li class="menu__item menu__item_home">
                            <a href="#formPopup"  class="menu__link popup__link" title="Login">Log in</a>
                        </li><!--end of navigation__item-->
                        <li class="menu__item menu__item_home">
                            <a href="#formPopup" class="menu__link popup__link" title="Registro">Register</a>
                        </li><!--end of navigation__item-->
                    </ul><!--end of navigation__list-->
                </nav><!--end of header__navigation-->
            </div><!--end of header__container-->
        </header><!--end of header-->

        <div class="main">


