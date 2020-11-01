<?php

include "connection.php";

$ids=$_GET["id"];

$deleteQ="delete from unidb where PhoneNo=$ids";

mysqli_query($conn,$deleteQ);

header("location:info.php");


?>