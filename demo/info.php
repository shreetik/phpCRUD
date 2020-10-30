

<html>
<head>
<style>

table{
   
   border-bottom:1px solid  #4CAF50 ;
    border-collapse: collapse;
    padding: 10px;
    width:;
    height:300px;
    text-align: center;
}
.tbl{

position:absolute;
top:50%;
left:50%;
transform:translateX(-50%) translateY(-50%);
}


th {
  background-color: #4CAF50;
  color: white;
}
td,th{
    background-color:;
    padding: 15px;
   
}
tr:hover {background-color:#f5f5f5;}
tr:nth-child(even) {background-color: #f2f2f2;}

.fa-edit{
    color: #38944f;
}
.fa-trash{
    color: red;
}
#colo{
    background-color: #f2f2f2;
    color: #4CAF50;
   
}

h1{
    margin-top: 20px;
}
</style>

</head>
<body>
<div style="overflow-x:auto;">
    <div class="tbl">
<table >
<tr>
    <th colspan="12" id="colo"><h1> University Profile</h1></th>
</tr>
<tr>
<th>NameOfUniversity</th>
<th>NameofVC</th>
<th>Session</th>
<th>Locality</th>
<th>City</th>
<th>State</th>
<th>PhoneNO</th>
<th>FAXNO</th>
<th>Email</th>
<th>Website</th>
<th colspan="2">Operations</th>

</tr>

<?php
include "links.php";
include "connection.php";

$selectQuery="select * from unidb";

$query=mysqli_query($conn,$selectQuery);

$nums=mysqli_num_rows($query);

while($res=mysqli_fetch_array($query)){
   ?>
   <tr>
    <td><?php echo $res["NameOfUniversity"];?> </td>
    <td><?php echo $res["NameofVC"];?> </td>
    <td><?php echo $res["Session"];?> </td>
    <td><?php echo $res["Locality"];?> </td>
    <td><?php echo $res["City"];?> </td>
    <td><?php echo $res["State"];?> </td>
    <td><?php echo $res["PhoneNo"];?> </td>
    <td><?php echo $res["FAXNo"];?> </td>
    <td><?php echo $res["Email"];?> </td>
    <td><?php echo $res["Website"];?> </td> 
    <td><a href="update.php?id=<?php echo $res["PhoneNo"];?>"><i class="fa fa-edit"></i></a></td>
    <td><i class="fa fa-trash"></i></td>

 <?php    
}

?>
  
</tr>

</table>
</div>
</div>
</body>





</html>