<div id="cookiesPolicy" class="mfp-hide popup">
    <nav class="popup__tabs clearfix">
        <div class="popup__tab"><a href="#" class="active" data-rel="login">Log In</a></div>
        <div class="popup__tab"><a href="#" data-rel="register">Register</a></div>
    </nav><!--end of nav-->

    <div class="popup__main">
        <div class="popup__content active" id="login">
            <form id="form__login" class="form__login" action="../envio/envio.php" method="POST">
                <div id="form__error" class="form__error">
                    <i class="icon"><img src="img/ico_alert.png"></i>Por favor, rellena los campos marcados en rojo
                </div><!--end of error-->

                <label for="form__login_name" class="form__label" id="form__login_name_label">Nombre</label>
                <input type="text" class="form__input error" name="form__login_name" id="form__login_name_input" maxlength="29" required="">

                <label for="form__login_password" class="form__label" id="form__login_password_label">Password</label>
                <input type="text" class="form__input" name="form__login_password" id="form__login_password" maxlength="29" required="">
            </form>

            <p><small>By clicking on the button you accept our <a href="#" class="link">privacy policy</a></small></p>

            <a href="#" class="button button__securitas"><span class="uppercase">Log In</span></a>
        </div><!--end of login--> 
        <div class="popup__content" id="register">register</div><!--end of register-->  
    </div><!--end of main-->   
</div><!--end of footer-->
