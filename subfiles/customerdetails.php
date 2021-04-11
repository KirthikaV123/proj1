<?php
   include_once "includes\dbh.php";
?>
<html>
<head>
<title>Customer Details</title>
</head>
<body>
   <table border="2">
      <tr>
         <th>Name</th>
         <th>Email ID</th>
         <th>Current Balance</th>
      </tr>
  <?php
    $sql="SELECT*FROM customer";
    $result=mysqli_query($conn,$sql);
    $total=mysqli_num_rows($result);

    if($total >0)
    {
      while($row=mysqli_fetch_assoc($result)){
        echo "
        <tr>
        <td>".$row["Name"]."</td>
        <td>".$row["Email ID"]."</td>
        <td>".$row["Current Balance"]."</td>
        </tr>";}
    }
    $conn->close();
  ?>
  </table>
</body>
</html>