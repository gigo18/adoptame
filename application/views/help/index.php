<div class="content">
    <h1>Help</h1>

    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>

    <p>
        This box (everything between header and footer) is the content of views/help/index.php,
        so it's the help/index view. It's rendered by the index-method within the help-controller
        (in controllers/help.php). You can easily create a sub-page by putting a method into the
        controller and a view into the view folder. So, if you want to create something like
        a FAQ section within "Help", then put
        <span style="font-weight: bold;">function faq() { $this->view->render('help/faq'); }</span>
        into controllers/help.php and create an according view in views/help/, named "faq.php".
        Now you can use that by simply navigation to "help/faq" in your app: If your app is on
        http://localhost/myapp/ then this section is now on http://localhost/myapp/help/faq !
        Try it out...
    </p>
</div>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="FCMK3SAMWZ49J">
<input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="10" height="10">
</form>
