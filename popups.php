<div id="formPopup" class="mfp-hide popup">
    <nav class="popup__tabs clearfix">
        <div class="popup__tab"><a href="#" class="active" data-rel="login">Log In</a></div>
        <div class="popup__tab"><a href="#" data-rel="register">Register</a></div>
    </nav><!--end of nav-->

    <div class="popup__main">
        <div class="popup__content active" id="login">
            <form id="popupform__login" class="popupform popupform__login" action="../envio/envio.php" method="POST">
                <div id="popupform__error" class="popupform__error">
                    <i class="icon"><img src="img/ico_alert.png"></i>Wrong Username or password
                </div><!--end of error-->

                <label for="popupform__login_name" class="popupform__label" id="popupform__login_name_label">Name</label>
                <input type="text" class="popupform__input error" name="popupform__login_name" id="popupform__login_name_input" maxlength="29" required="">

                <label for="popupform__login_password" class="popupform__label" id="popupform__login_password_label">Password</label>
                <input type="password" class="popupform__input" name="popupform__login_password" id="popupform__login_password" maxlength="29" required="">
            </form>

            <a href="courses.php" class="button button__securitas"><span class="uppercase">Log In</span></a>
        </div><!--end of login--> 
        <div class="popup__content" id="register">
            <form id="popupform__register" class="popupform popupform__register" action="../envio/envio.php" method="POST">
                <div id="popupform__error" class="popupform__error">
                    <i class="icon"><img src="img/ico_alert.png"></i>Please fill in all the fields highlighted in red
                </div><!--end of error-->

                <label for="popupform__register_name" class="popupform__label" id="popupform__register_name_label">Name</label>
                <input type="text" class="popupform__input error" name="popupform__register_name" id="popupform__register_name_input" maxlength="29" required="">

                <label for="popupform__register_password" class="popupform__label" id="popupform__register_email_label">Email</label>
                <input type="email" class="popupform__input" name="popupform__register_email" id="popupform__register_email" maxlength="29" required="">
            </form>

            <p class="popupform__message"><small>By clicking on the button you accept our <a href="#" class="link">privacy policy</a></small></p>

            <a href="courses.php" class="button button__securitas"><span class="uppercase">Register</span></a>
        </div><!--end of register-->  
    </div><!--end of main-->   
</div><!--end of formPopup-->

<div id="avatarPopup" class="mfp-hide popup">
    <div class="popup__main">
        <form action="/file-upload" id="my-awesome-dropzone" class="dropzone popup__dropzone">
        </form><!--end of popup__drag_dropzone--> 
        <p class="dropzone_text">Drop your profile picture here<br><i class="icon ion-images"></i>
        <br>- or -<br>
        <span class="underline">Select an image from your computer</span></p>

        <div id="dropzone__template" style="display: none;">
            <div class="template__container">
                <div class="thumbnail__photo">
                    <img data-dz-thumbnail/>
                    <span>Preview</span>
                </div>
                
                <div class="template__buttons">                
                    <a href="#"><span class="uppercase">Set picture</span></a>
                    <a href="#"><span class="uppercase">Cancel</span></a>
                </div>
            </div>
        </div>
    </div><!--end of main-->  
</div><!--end of avatarPopup-->
