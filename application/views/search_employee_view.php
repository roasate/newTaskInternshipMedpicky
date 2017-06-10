<!DOCTYPE html>
<html>
<head>
	<title>Search your employee</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/style.css'); ?>">
</head>
<body>
	<header>
		<u>
			<h1>Enter the details below</h1>
		</u>
		<br>
	</header>
	<section>
		<?php echo validation_errors(); ?>
		<form action="<?php echo base_url('/SearchEmployeeController/search'); ?>" method='post'>
			<label>User Name <span>*</span>  :</label>
			<input type="text" name="user_name" placeholder="User Name">
	
			<label>Email <span>*</span> :</label>
			<input type="text" name="email" placeholder="Email">

			<label>Date Of Birth<span>*</span>  :</label>
			<input type="Date" name="dob" placeholder="Date of Birth">
			<br>
			<br>
			<br>	
			<label>Registeration Date<span>*</span>  :</label>
			<input type="Date" name="registration_date" placeholder="Registeration Date">

			<label>Category <span>*</span>  :</label>
			<input type="text" name="category" placeholder="Category">

			<label>User Id <span>*</span>  :</label>
			<input type="text" name="user_id" placeholder="User Id">
			<br>
			<br>
			<br>
			<div id='div'><input id = "submit" type="submit" name="Search" value="Search" )></div>
		</form>		
	</section>
	 <table border="1">  
      <tbody>  
         <tr>  
            <td>User Name</td>  
            <td>Email</td>  
            <td>Date of Birth</td>  
            <td>Date of Registration</td>  
            <td>User Id</td>  
            <td>Category</td>  
         </tr>  
         <?php 
          if (count($data)>0){
         	foreach ($data as $row)  
         	{  
	           	?><tr>  
	            <td><?php echo $row->user_name;?></td>  
	            <td><?php echo $row->email;?></td>
	            <td><?php echo $row->date_of_birth;?></td>  
	            <td><?php echo $row->date_of_registration;?></td>
	            <td><?php echo $row->user_id;?></td>  
	            <td><?php echo $row->category;?></td>                          
	            </tr>  
         <?php }}  
         ?>  
      </tbody>  
   </table>  
</body>
</html>