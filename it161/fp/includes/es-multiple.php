<?php
/**
 * multiple.php is a postback application designed to provide a 
 * contact form for users to email our clients.  
 * 
 * multiple.php provides a larger form with more elements to provide 
 * a richer example form.
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 2 2019/10/13
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @todo none
 */

#--------------END CONFIG AREA ------------------------#
?>

<!-- START HTML FORM -->
<div class="form-boundry">
<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
<div class="name-box">
    <label>
    Tu Nombre:<br /><input  type="text" name="Name" required="required" placeholder="Nobre completo (necesario)" title="Name is required" tabindex="10" size="35" autofocus />
    </label>
</div>
<div class="email-box">
    <label >
    Tu Correo Electrónico:<br /><input  type="email" name="Email" required="required" placeholder="Correo Electrónico (necesario)" title="A valid email is required" tabindex="20" size="35" />
    </label>
</div>
<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
<div class="hear-box">
    <label>
        ¿Cómo Escuchastes De Karen?:<br />
        <select name="How_Did_You_Hear_About_Us?" required="required" title="How You Heard is required" tabindex="30">
            <option value="">Elige Como Escuchaste</option>
            <option value="Social Media">Social Media</option>
            <option value="Web">Internet</option>
            <option value="Un Amigo">Un Amigo</option>
            <option value="Un Tio">Un Tío</option>
            <option value="Otro">Otro</option>
        </select>
    </label>         
</div>

  
<div>
    <div class="comment-box">
    <label> 
¿Que Servicio Te Interesa?<br /><textarea name="Comments" cols="36" rows="4" placeholder="¡Escribe lo que piensas aqui!" tabindex="60"></textarea>
    </label>
        </div>
</div>
    <div id="phoneCaptcha" class="g-recaptcha" data-sitekey="<?=$siteKey;?>" data-size="compact"></div>
<div>
    <div class="button">
    <input type="submit" value="enviar" />
    </div>
</div>
</form>
</div>
<!-- END HTML FORM -->
