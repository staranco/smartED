<div id="formPopup" class="mfp-hide popup">
    <nav class="popup__tabs clearfix">
        <div class="popup__tab"><a href="#" class="active" data-rel="login">Log In</a></div>
        <div class="popup__tab"><a href="#" data-rel="register">Register</a></div>
    </nav><!--end of nav-->

    <div class="popup__main">
        <div class="popup__content active" id="login">
            <form id="form__login" class="form form__login" action="../envio/envio.php" method="POST">
                <div id="form__error" class="form__error">
                    <i class="icon"><img src="img/ico_alert.png"></i>Wrong Username or password
                </div><!--end of error-->

                <label for="form__login_name" class="form__label" id="form__login_name_label">Name</label>
                <input type="text" class="form__input error" name="form__login_name" id="form__login_name_input" maxlength="29" required="">

                <label for="form__login_password" class="form__label" id="form__login_password_label">Password</label>
                <input type="text" class="form__input" name="form__login_password" id="form__login_password" maxlength="29" required="">
            </form>

            <a href="courses.php" class="button button__securitas"><span class="uppercase">Log In</span></a>
        </div><!--end of login--> 
        <div class="popup__content" id="register">
            <form id="form__register" class="form form__register" action="../envio/envio.php" method="POST">
                <div id="form__error" class="form__error">
                    <i class="icon"><img src="img/ico_alert.png"></i>Please fill in all the fields highlighted in red
                </div><!--end of error-->

                <label for="form__register_name" class="form__label" id="form__register_name_label">Name</label>
                <input type="text" class="form__input error" name="form__register_name" id="form__register_name_input" maxlength="29" required="">

                <label for="form__register_password" class="form__label" id="form__register_email_label">Email</label>
                <input type="email" class="form__input" name="form__register_email" id="form__register_email" maxlength="29" required="">
            </form>

            <p class="form__message"><small>By clicking on the button you accept our <a href="#" class="link">privacy policy</a></small></p>

            <a href="courses.php" class="button button__securitas"><span class="uppercase">Register</span></a>
        </div><!--end of register-->  
    </div><!--end of main-->   
</div><!--end of footer-->
