<!-- Slider -->
        <div id="home_carousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#home_carousel" data-slide-to="0" class="active"></li>
                <li data-target="#home_carousel" data-slide-to="1"></li>
            </ol>
            
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="<?php echo URL; ?>public/img/2.jpg" alt="" />
                    <div class="carousel-caption">
                        <h2>Ruffo</h2>
                        <p>Soy Jugueton y me encanta jugar con el agua :D</p>
                        <form method="get" action="#">
                            <button type="submit" class="btn btn-lg btn-default">Conoceme</button>
                            </form>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo URL; ?>public/img/3.jpg" alt="" />
                    <div class="carousel-caption">
                        <h2>Pancho</h2>
                        <p>Hola me gustaria ser parte de tu familia, me encanta jugar con los niños y la pelota.</p>
                        <form method="get" action="#">
                            <button type="submit" class="btn btn-lg btn-default">Conoceme</button>
                        </form>
                    </div>
                </div>
            </div>
            
            <!-- Controles -->
            <a class="left carousel-control" href="#home_carousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#home_carousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
        <!-- Slider fin-->
<div class="content">
    <h1>Bienvenido</h1>

    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>

    <h3>Haz iniciado sesión</h3>

    ¡Enhorabuena! Ahora puedes ingresar a las opciones de Adopción.
    <br/><br/>
    Nosotros te contactaremos realizando un proceso de adopción o dar en adopción a una mascota
</div>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="FCMK3SAMWZ49J">
<input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="10" height="10">
</form>