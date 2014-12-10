<!-- Slider -->
        <div id="home_carousel_banners" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#home_carousel" data-slide-to="0" class="active"></li>
                <li data-target="#home_carousel" data-slide-to="1"></li>
            </ol>
            
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="<?php echo URL; ?>public/img/banners/dog-banner7.jpg" alt="" />
                    <div class="carousel-caption">
                        <h2>Registro</h2>
                        <p>Registrate para obtener un amigo :3</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider fin-->

<div class="container">

    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>

    
        <!-- register form -->
        <div class="todo">
        <div style=" font-family:Verdana, Geneva, sans-serif; font-size:24px;" align="center">Registrate en Adoptame</div><br clear="all" />
        <form class="formulario-cuadro" method="post" action="<?php echo URL; ?>login/register_action" name="registerform">
            <center>
            <!-- the user name input field uses a HTML5 pattern check -->
            <div class="campo-formulario">
            <label for="login_input_username">
            <div class="clear"></div>
            <input type="text" placeholder="Nombre" data-constraints="@Required @JustLetters" id="login_input_username"  pattern="[a-zA-Z0-9]{2,64}" name="user_name" required />
            </label>
            </div>
            
            <!-- the email input field uses a HTML5 email type check -->
            <div class="campo-formulario">
            <label for="login_input_email">
                
                <input placeholder="E-mail:" data-constraints="@Required @Email" id="login_input_email" type="email" name="user_email" required />
            </label>
            </div>
            
            <div class="campo-formulario">
            <label for="login_input_password_new">
                <div class="clear"></div>
                 <input placeholder="Contraseña (min. 6 caracteres!)"id="login_input_password_new" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" />
               
            </label>
            </div>
            <div class="campo-formulario">
            <label for="login_input_password_repeat">
                <div class="clear"></div>
                <input placeholder="Repita Contraseña" id="login_input_password_repeat" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />

            </label>
            </div>
           
            <!-- show the captcha by calling the login/showCaptcha-method in the src attribute of the img tag -->
            <!-- to avoid weird with-slash-without-slash issues: simply always use the URL constant here -->
           <!-- <img id="captcha" src="<?php //echo URL; ?>login/showCaptcha" /> -->
           <!--  <span style="display: block; font-size: 11px; color: #999; margin-bottom: 10px"> -->
                <!-- quick & dirty captcha reloader 
                <a href="#" onclick="document.getElementById('captcha').src = '&<?php //echo URL; ?>login/showCaptcha?' + Math.random(); return false">[ Reload Captcha ]</a>
            </span>
            <label>
                Please enter these characters
                <span style="display: block; font-size: 11px; color: #999;">
                    Please note: This captcha will be generated when the img tag requests the captcha-generation
                    (and a real image) from YOURURL/login/showcaptcha. As this is a client-side triggered request, the
                    $_SESSION["captcha"] dump in the footer will not show the captcha characters. The captcha generation
                    happens AFTER the rendering of the footer.
                </span>
            </label>
            <input type="text" name="captcha" required /> -->
            <input type="submit"  name="register" value="Registrar" />

        </form>
    </center>
    </div>


    <?php if (FACEBOOK_LOGIN == true) { ?>
        <div class="register-facebook-box">
            <h1>or</h1>
            <a href="<?php echo $this->facebook_register_url; ?>" class="facebook-login-button">Register with Facebook</a>
        </div>
    <?php } ?>

</div>
</div>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="FCMK3SAMWZ49J">
<input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="10" height="10">
</form>