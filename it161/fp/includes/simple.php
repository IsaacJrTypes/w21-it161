<?php
/**
 * simple.php is a postback application designed to provide a 
 * contact form for users to email our clients.  
 * 
 * simple.php provides a typical feedback form for a website
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
			<div class="namebox">
				<label>
					Name:<br /><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="44" autofocus />
				</label>
			</div>
			<div class="emailbox">	
				<label>
					Email:<br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" />
				</label>
			</div>
			<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
			<div class="commentbox">	
				<label>
					Comments:<br /><textarea name="Comments" cols="36" rows="4" placeholder="Your voice are important to us!" tabindex="30"></textarea>
				</label>
			</div>	
			<div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div> 
			<div class="button">
				<input type="submit" value="submit" />
			</div>  
		</form>
    </div>
	<!-- END HTML FORM -->
