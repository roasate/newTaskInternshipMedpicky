

<html>
<!-- <?php
// if (isset($this->session->userdata['logged_in'])) {
// header("location:http://localhost/new_task/lsessController");
// }
?> -->
<head>
<title>Registration Form</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="main">
<div id="login">
<h2>Registration Form</h2>
<hr/>
<?php
echo "<div class='error_msg'>";
echo validation_errors();
echo "</div>";
echo form_open('lsessController/user_login_process');

echo form_label('userid: ');
echo"<br/>";
echo form_input('userid');
echo"<br/>";
echo"<br/>";
echo form_submit('submit', 'Sign Up');
echo form_close();
?>

</div>
</div>
</body>
</html>

