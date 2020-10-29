<?php

include "connection.php";



    $uname=$_POST["txtuname"];
    $vcame=$_POST["txtvc"];
    $session=$_POST["txtseson"];
    $locality=$_POST["txtloc"];
    $city=$_POST["txtcity"];
    $state=$_POST["txtopt"];
    $phone=$_POST["txtpho"];
    $fax=$_POST["txtfax"];
    $email=$_POST["txtmail"];
    $website=$_POST["txtweb"];

    $insertQ="insert into unidb ( NameOfUniversity,NameofVC,Session,Locality,City,State,PhoneNo,FAXNo,Email,Website ) values('$uname','$vcame','$session','$locality','$city','$state','$phone','$fax','$email','$website')";

   $res= mysqli_query($conn,$insertQ);

   if($res){
       ?>
       <script>
           alert("data inserted poroerly")

   </script>
   <?php
}else{
    ?>
    <script>
        alert("data not inserted poroerly")

</script>
<?php
}






?>