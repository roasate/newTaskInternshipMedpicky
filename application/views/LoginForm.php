<html>

<?php
if (isset($this->session->userdata['logged_in'])) {

header("location: http://localhost/codeigniter/index.php/LsessController/user_login_process");
}
?>

<head>

		<title>Login Form</title>

</head>

<body>

<?php
if (isset($logout_message))
{
	echo "<div class='message'>";
	echo $logout_message;
	echo "</div>";
}
?>

<?php
if (isset($message_display))
{
	echo "<div class='message'>";
	echo $message_display;
	echo "</div>";
}
?>

<h2>Login Form</h2>
<br/>

<?php echo form_open('LsessController/user_login_process'); ?>

	<?php
	echo "<div class='error_msg'>";
	if (isset($error_message))
	{
		echo $error_message;
	}
	echo validation_errors();
	echo "</div>";
	?>

	<label>UserName :</label>
	<input type="text" name="username" id="name" placeholder="username"/><br /><br />
	<label>Password :</label>
	<input type="password" name="password" id="password" placeholder="**********"/><br/><br />
	<?php 
	echo form_label('userid: ');
echo"<br/>";
echo form_input('userid');
echo"<br/>";
 ?>
	<input type="submit" value=" Login " name="submit"/><br /><br />

<?php echo form_close(); ?>

</body>
</html>

