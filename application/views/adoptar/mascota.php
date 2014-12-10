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
                    <img src="<?php echo URL; ?>public/img/banners/dog-banner4.jpg" alt="" />
                    <div class="carousel-caption">
                        <h2></h2>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider fin-->

<!-- Services -->
        <div class="container">
            <div class="row adoption-single">
                <div class="col-md-6">
                    <!-- Slider -->
                    <div id="adoption" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="<?php echo URL; ?>public/img/adoption-1.jpg" alt="Dog adoption page" />
                            </div>
                            <div class="item">
                                <img src="<?php echo URL; ?>public/img/adoption-2.jpg" alt="Dog adoption page" />
                            </div>
                            <div class="item">
                                <img src="<?php echo URL; ?>public/img/adoption-3.jpg" alt="Dog adoption page" />
                            </div>
                        </div>
                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#adoption" data-slide-to="0" class="active"><img src="<?php echo URL; ?>public/img/adoption-1.jpg" alt="Dog adoption page" /></li>
                            <li data-target="#adoption" data-slide-to="1"><img src="<?php echo URL; ?>public/img/adoption-2.jpg" alt="Dog adoption page" /></li>
                            <li data-target="#adoption" data-slide-to="2"><img src="<?php echo URL; ?>public/img/adoption-3.jpg" alt="Dog adoption page" /></li>
                        </ul>

                    </div>
                    <!-- Slider end -->
                </div>
                <div class="col-md-6">
                    
                    <h2><?php echo htmlentities($this->nombre->nombre_mascota); ?></h2>
                    <p><?php echo htmlentities($this->descripcion->mensaje_mascota); ?></p>
                    <ol>
                        <li><span>Edad</span><?php echo htmlentities($this->edad->edad_mascota); ?></li>
                        <li><span>Tamaño</span><?php echo htmlentities($this->tamano->tamano_raza); ?></li>
                        <li><span>Raza</span><?php echo htmlentities($this->raza->nombre_raza); ?></li>
                        <li><span>Sexo</span><?php echo htmlentities($this->sexo->sexo_animal); ?></li>
                        <li><span>Referencia - ID </span><?php echo htmlentities($this->refer->id_registro); ?></li>
                    </ol>
                    <div class="social-share">
                        <p>Comparte con tus amigos:</p>
                        <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                        <a href="http://www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark"  data-pin-color="red" class="pinterest-button"><img src="http://assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_20.png" /></a>
                        <!-- Please call pinit.js only once per page -->
                        <script type="text/javascript" async src="//assets.pinterest.com/js/pinit.js"></script>
                        <div id="fb-root"></div>
                        <script>(function(d, s, id) {
                          var js, fjs = d.getElementsByTagName(s)[0];
                          if (d.getElementById(id)) return;
                          js = d.createElement(s); js.id = id;
                          js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&appId=221051044761693&version=v2.0";
                          fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>
                            <div class="fb-share-button" data-href="http://adoptme.esy.es"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Adoption -->
        <div class="container">
            <div class="row">
                <div class="col-md-12 centered">
                    <h3>Aun hay amigos esperando una familia</span></h3>
                    <p>En Adoptame queremos ver familias y mascotas felices</p>
                </div>
            </div>
            <div class="row adoption">
                <div class="col-md-4">
                    <a href="#" title="Cheesy"><img src="<?php echo URL; ?>public/img/dog-77.png" alt="King Cheesy" /></a>
                    <div class="title">
                        <h5>
                            <span data-hover="Cheesy">Cheesy</span>
                        </h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <a href="#" title="Poncho"><img src="<?php echo URL; ?>public/img/dog-8.png" alt="Poncho" /></a>
                    <div class="title">
                        <h5>
                            <span data-hover="Poncho">Poncho</span>
                        </h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <a href="#" title="Sparky"><img src="<?php echo URL; ?>public/img/dog-9.png" alt="Sparky" /></a>
                    <div class="title">
                        <h5>
                            <span data-hover="Bosco">Bosco</span>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- Adoption end -->
</div>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="FCMK3SAMWZ49J">
<input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="10" height="10">
</form>