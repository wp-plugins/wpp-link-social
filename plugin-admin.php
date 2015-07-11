<?php
if(!(Plugin_Name)) exit;

function wppwls_admin()
{
if(!is_admin())
{
	return false;
}	
	
	
global $wpdb;
$facebook=$wpdb->get_var('select facebook from wpp_link_social limit 1');
$twitter=$wpdb->get_var('select twitter from wpp_link_social limit 1');
$gplus=$wpdb->get_var('select googleplus from wpp_link_social limit 1');
$email=$wpdb->get_var('select email from wpp_link_social limit 1');
$facebook=esc_url($facebook);
$twitter=esc_url($twitter);
$gplus=esc_url($gplus);
$email=esc_url($email);


?>
<div class='wrap'>
<h1><?php _e('Wpp Link Social Admin Menu') ?></h1>
<hr>
<?
if(isset($_GET['success']) && $_GET['success']==true)
{
?>
<br>
<div class='updated'><p><?php _e('You have successfully Updated your settings !!') ;?></p></div>
<?	
}
?>

<?
if(isset($_GET['error']) && $_GET['error']==1)
{
?>
<br>
<div class='error'><p><?php _e('Please Enter Correct Facebook URL') ;?></p></div>
<?	
}
?>
<?
if(isset($_GET['error']) && $_GET['error']==2)
{
?>
<br>
<div class='error'><p><?php _e('Please Enter Correct Twitter URL') ;?></p></div>
<?	
}
?>
<?
if(isset($_GET['error']) && $_GET['error']==3)
{
?>
<br>
<div class='error'><p><?php _e('Please Enter Correct Google Plus URL') ;?></p></div>
<?	
}
?>
<?
if(isset($_GET['error']) && $_GET['error']==4)
{
?>
<br>
<div class='error'><p><?php _e('Please Enter Correct Email URL') ;?></p></div>
<?	
}
?>





<br>

<form action="admin-post.php"  method='post'>
 <input type="hidden" name="action" value="wppwls_process">
 <ul style='font-size:16px;'>
<li><label><?php _e('Facebook Link') ?>:</label>
<br>
<input type='text' name='facebook' style='width:50%'  value="<?php _e($facebook); ?>">
<br>
<li><label><?php _e('Twitter Link') ?>:</label>
<br>
<input type='text' name='twitter' style='width:50%'  value="<?php _e($twitter); ?>">
<br>
<li><label><?php _e('Google Plus Link') ?>:</label>
<br>
<input type='text' name='googleplus' style='width:50%'  value="<?php _e($gplus); ?>">
<br>
<li><label><?php _e('Email Link') ?>:</label>
<br>
<input type='text' name='email' style='width:50%'  value="<?php _e($email); ?>">
<br>
<br>
<li><input class='button-primary' type='Submit' name='submit' value='Submit' >
</ul>
</form>
</div>
<?php
}
?>
