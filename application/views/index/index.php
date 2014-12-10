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
        <!-- Incia Servicios -->
        <div class="container">
            <div class="row">
                <div class="col-md-4 col3">
                    <a href="#" title="Dog boarding kennels" class="roundal" id="kennel"></a>
                    <h3>Centros de Adopción</h3>
                    <p>Ubica centros de Adopción de Playa del Carmen en tu colonia</p>
                    <form method="get" action="#">
                        <button type="submit" class="btn btn-default btn-green">Entrar</button>
                    </form>
                </div>
                <div class="col-md-4 col3">
                    <a href="#" title="Doggy grooming" class="roundal" id="grooming"></a>
                    <h3>Enfermedades</h3>
                    <p>Informate sobre enfermedades que atentan con la vida de tu mascota</p>
                    <form method="get" action="<?php echo URL; ?>informacion/enfermedades">
                        <button type="submit" class="btn btn-default btn-green">Entrar</button>
                    </form>
                </div>
                <div class="col-md-4 col3">
                    <a href="#" title="Adoption centre" class="roundal" id="adoption"></a>
                    <h3>Centro de Adopción</h3>
                    <p>¿Quieres un amigo en tu hogar? Checa la lista de adopción</p>
                    <form method="get" action="#">
                        <button type="submit" class="btn btn-default btn-green">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- temina servicios -->
        
        <!-- Info pagina inicia -->
        <div class="purchase">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <p><strong>Adopta.</strong>Me es un servicio que se encarga de realizar adopciones.<br />
                        <span>*Unicamente en Playa del Carmen, Quintana Roo, México.</span></p>
                    </div>
                    <div class="col-md-3 purchase-button">
                        <form method="get" action="#">
                            <button type="submit" class="btn btn-default btn-green">¿Quienes Somos?</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="FCMK3SAMWZ49J">
<input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="10" height="10">
</form>

        <!-- Info pagina termina-->