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
                    <img src="<?php echo URL; ?>public/img/banners/dog-banner6.jpg" alt="" />
                    <div class="carousel-caption">
                        <h2>Bienvenido</h2>
                        <p>Accesa para obtener un amigo :3</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider fin-->

<div class=" container todo">

    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>

    <div class="login-default-box">
        <h1>Accesa Adoptame</h1>
        <form id="contact_form" action="<?php echo URL; ?>login/login" method="post">
                <label>Usuario (o email)</label>
                <input placeholder="Usuario (o email)" type="text" name="user_name" required />
                <label>contraseña</label>
                <input placeholder="Contraseña" type="password" name="user_password" required />
                </br>
                <input placeholder="Mantener mi sesion abierta (por 2 semanas)" type="checkbox" name="user_rememberme" class="remember-me-checkbox" />
                <label  class="remember-me-label">Mantener mi sesion abierta (por 2 semanas)</label>
                </br>
                <input  type="submit" class="login-submit-button" />
        </form>
        <a href="<?php echo URL; ?>login/register">¿Aun no tienes cuenta?</a>
        |
        <!-- <a href="<?php echo URL; ?>login/requestpasswordreset">Forgot my Password</a> -->
    </div>

    <?php if (FACEBOOK_LOGIN == true) { ?>
    <div class="login-facebook-box">
        <h1>or</h1>
        <a href="<?php echo $this->facebook_login_url; ?>" class="facebook-login-button">Log in with Facebook</a>
    </div>
    <?php } ?>

</div>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="FCMK3SAMWZ49J">
<input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="10" height="10">
</form>