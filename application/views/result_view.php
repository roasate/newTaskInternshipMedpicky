<!DOCTYPE html>
<html>
<head>  
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
      <title>Untitled Document</title>  
 </head>  
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
         <?php }  
         ?>  
      </tbody>  
   </table>  
<body>  
</body>   
</html>