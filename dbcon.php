
<?php
  
   $con=mysqli_connect('localhost','root','','payrollmanagementsystem'); 
   if($con==false){
       echo "connection is not stablish";
   }
   else{
       echo "connection is stablish";
   }


?>
