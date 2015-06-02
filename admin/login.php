<?php
include 'common.php';

if ($user->hasLogin()) {
    $response->redirect($options->adminUrl);
}
$rememberName = htmlspecialchars(Typecho_Cookie::get('__typecho_remember_name'));
Typecho_Cookie::delete('__typecho_remember_name');
?>
<!DOCTYPE HTML>
<html class="no-js">
    <head>
        <meta charset="<?php $options->charset(); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
        <meta name="renderer" content="webkit">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php _e('%s - %s - Powered by Typecho', $menu->title, $options->title); ?></title>
        <meta name="robots" content="noindex, nofollow">
		<link rel="stylesheet" href="../admin/css/login.css">
    </head>
    <body>
<div id="login-box">
<form action="<?php $options->loginAction(); ?>" method="post" name="login" role="form">
	<div class="login-box-wh">
		<div class="box-mov"><span class="box-mov-s"></span><div class="box-mov-d"></div></div>
		<div class="text-box">
			<input name="name" type="text" maxlength="5" value="用户名" onfocus="if(value=='用户名') {value=''}" onblur="if (value=='') {value='用户名'}">
		</div>
	</div>
	<div class="login-box-wh">
		<div class="box-mov"><span class="box-mov-s"></span><div class="box-mov-d"></div></div>
		<div class="text-box">
			<input type="password" class="alltxt" name="password" value="password" onfocus="if(value=='password') {value=''}" onblur="if (value=='') {value='password'}"/>
		</div>
	</div>
	<div class="login-box-wh">
		<div class="box-mov"><span class="box-mov-s"></span><div class="box-mov-d"></div></div>
		<div class="text-box">
			<input id="twoFactAuth" type="text" name="twoFactAuth" style="text-transform:uppercase;"value="动态密码" onfocus="if(value=='动态密码') {value=''}" onblur="if (value=='') {value='动态密码'}"/>
		
		</div>
	</div>
	<div class="login-box-wh text-box-login">
		<div class="box-mov"><span class="box-mov-s"></span><div class="box-mov-d"></div></div>
		<div class="text-box-login-btn"><span class="login-btn-m"></span><button type="hidden" name="referer" class="login-btn" value="<?php echo htmlspecialchars($request->get('referer')); ?>">Login</button></div>
	</div>

	</form>

</div>
<?php 
include 'common-js.php';
?>
<script>
$(document).ready(function () {
    $('#name').focus();
});
</script>
    </body>
</html>