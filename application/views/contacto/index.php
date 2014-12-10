<div id="home_carousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#home_carousel" data-slide-to="0" class="active"></li>
                <li data-target="#home_carousel" data-slide-to="1"></li>
            </ol>
            
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="<?php echo URL; ?>public/img/p-reg.jpg" alt="" />
                    <div class="carousel-caption">
                        <h2>Comentarios<h2>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider fin-->
<form name="frmContacto" method="post" action="sendbymail.php">
<table width="500px">
<tr>
<td>
<label for="first_name">Nombre: *</label>
</td>
<td>
<input type="text" name="first_name" maxlength="50" size="25">
</td>
</tr>
<tr>
<td valign="top"">
<label for="last_name">Apellido: *</label>
</td>
<td>
<input type="text" name="last_name" maxlength="50" size="25">
</td>
</tr>
<tr>
<td>
<label for="email">Dirección de E-mail: *</label>
</td>
<td>
<input type="text" name="email" maxlength="80" size="35">
</td>
</tr>
<tr>
<tr>
<td>
<label for="comments">Comentarios: *</label>
</td>
<td>
<textarea name="comments" maxlength="500" cols="30" rows="5"></textarea>
</td>
</tr>
<tr>
<td colspan="2" style="text-align:right">
<input type="submit" value="Enviar">
</td>
</tr>
</table>
</form>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="FCMK3SAMWZ49J">
<input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="10" height="10">
</form>