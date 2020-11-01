<?php
session_start();

include "connection.php";

$new=$_SESSION["phno"];

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

$updateQ="UPDATE unidb SET NameOfUniversity='$uname',NameofVC='$vcame',Session='$session',Locality='$locality',City='$city',State='$state',PhoneNo=$phone,FAXNo='$fax',Email='$email',Website='$website' WHERE PhoneNo=$new ";

$res= mysqli_query($conn,$updateQ);



if($res){
    ?>
    <script>
        alert("data updated successfully")
        <?php header("location:info.php"); ?>

</script>
<?php
}else{
 ?>
 <script>
     alert("error")

</script>



<?php
}






?>