<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Display</title>
<style>
    body{
        background: pink;
        }
    table{
            background-color: white;

        }
    .update, .delete{
        background-color: green;
        color: white;
        border: 0;
        outline: none;
        border-radius: 10px;
        height: 25px;
        weight: 80px;
        font-weight: bold;
        cursor: pointer;

    }
    .delete{
        background-color: red;
         
    }
</style>
</head>


<?php
include("connection.php");

$query = "SELECT * FROM form";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

if($total != 0)
{
?>
<h2 align="center"><mark>Displaying All Records</mark></h2>
<center><table border ="1" ceilspacing="7" width="100%">
    <tr>
        <th width="5%">ID</th>
        <th width="15%">First Name</th>
        <th width="10%">Last Name</th>
        <th width="5%">Gender</th>
        <th width="20%">Email</th>
        <th width="10%">Phone</th>
        <th width="15%">Address</th>
        <th width="20%">Operations</th>
    </tr>


<?php
 while($result = mysqli_fetch_assoc($data))
 {
    
  echo "<tr>
          <td>"."$result[id]"."</td>
          <td>"."$result[fname]"."</td>
          <td>"."$result[lname]"."</td>
          <td>"."$result[gender]"."</td>
          <td>"."$result[email]"."</td>
          <td>"."$result[phone]"."</td>
          <td>"."$result[address]"."</td>
          <td><a href ='update_design.php?id=$result[id]'><input type='submit' value='Update' class='update'></a>
          <a href ='delete.php?id=$result[id]'><input type='submit' value='Delete' class='delete' onclick = 'return checkdelete()'></a></td>
        </tr>
        ";


    // echo "$result[fname]"." "."$result[lname]"." "."$result[gender]"." "."$result[email]"." "."$result[phone]"." "."$result[address]"."<br>";

 }  
}
else{
    echo "<script> alert('No Record Found')</script>";
}

?>
</table>
</center>

<script>
   function checkdelete(){

     return confirm('Are you sure you want to delete this data ?');
   }
</script>