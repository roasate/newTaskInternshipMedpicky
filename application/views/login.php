<!DOCTYPE html>
<html>
<head>
<?php
if (isset($this->session->userdata['logged_in'])) {

header("location: http://localhost/new_task/BLog/click");
}
?>
	<title></title>
</head>
<style type="text/css">
	/* Bordered form */
	form {
		border: 3px solid #f1f1f1;
	}

	/* Full-width inputs */
	input[type=text], input[type=password] {
		width: 100%;
		padding: 12px 20px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		box-sizing: border-box;
	}

	/* Set a style for all buttons */


	/* Change styles for span and cancel button on extra small screens */
	@media screen and (max-width: 300px) {
		span.psw {
			display: block;
			float: none;
		}
		.cancelbtn {
			width: 100%;
		}
	}
</style>
<body>
<form id='start' action="<?php echo base_url('blog/save'); ?>" method="POST" >

		<div class="container">
			<label><b>User Id</b></label>
			<input type="text" placeholder="Enter Username" >

			<label><b>Password</b></label>
			<input type="password" placeholder="Enter Password" >

			<input type="submit" name="start" value="Submit" />
		</div>

	</form>


</body>
</html>




