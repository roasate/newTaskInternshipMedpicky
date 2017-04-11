<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php
if (isset($this->session->userdata['logged_in']))
{
	$username = ($this->session->userdata['logged_in']['username']);
	$email = ($this->session->userdata['logged_in']['email']);
}
else
{
	header("location: index");
}
?>
</head>
<style type="text/css">
	<style type="text/css">
		form {
			/* Just to center the form on the page */
			margin: 0 auto;
			width: 400px;
			/* To see the outline of the form */
			padding: 1em;
			border: 1px solid #CCC;
			border-radius: 1em;
		}
		.button {
			/* To position the buttons to the same position of the text fields */
			padding-left: 90px; /* same size as the label elements */
		}

		button {
  /* This extra margin represent roughly the same space as the space
  between the labels and their text fields */
  margin-left: .5em;
}


form div + div {
	margin-top: 1em;
}
</style>
<body>
<form id='start' action="<?php echo base_url('blog/index'); ?>" method="POST">
		<div>
			<H1>Login Successful</H1>
			<input type="submit" name="start" value="Submit" />	</div>
		</form>
	</body>
	</html>