<!DOCTYPE html>
<html>
<head>
	<title></title>
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
</head>
<body>
	<div>
	<form id="start" action="<?php echo base_url('lsessController/user_login_process'); ?>" method="POST" >

		 <div class="form-group">
            <input type="text" class="form-control" name="Userid" placeholder="Userid" value="<?php echo !empty($user['phone'])?$user['phone']:''; ?>">
        </div>

			 <div class="form-group">
            <input type="submit" name="regisSubmit" class="btn-primary" value="Submit"/>
        </div>
		</form>

	</div>
</body>
</html>