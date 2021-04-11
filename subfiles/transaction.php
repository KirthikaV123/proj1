<?php
   include_once "includes\dbh.php";
?>
<html>
<head>
<title>Transaction</title>
</head>
<body>
   <table border="2" >
      <tr>
         <th>Name</th>
         
      </tr>
       
  <?php
    $sql="SELECT*FROM customer";
    $result=mysqli_query($conn,$sql);
    $total=mysqli_num_rows($result);

    if($total >0)
    {
      while($row=mysqli_fetch_assoc($result)){
        echo "<tr><td>".$row["Name"]."</td></tr>";}
    }
    $conn->close();
  ?>
   <tr>
        <th>Transfer</th>
        <td>
            <ol>
                 <a href="https://localhost/sendmoney1.php"><button type="button" >SEND MONEY</button></a>
            </ol>
        </td>
    </tr>
  </table>
</body>
</html>