<?php
 include_once "includes/dbh2.php";
?>
<DOCTYPE html>
<head><tutle></title>
<style>
table{
    <colour:white;
    border-radius:20px;
}
</style>
</head>
<body>
<form action="" method="POST" border="2px">
  Name<input type ="text" name="Name"placeholder="Enter Name">
 <br>
  Amount<input type ="numbers" name="Amount"placeholder="Enter Amount">
 <br>
 <button type="transfer" name="Transfer" align="center">Transfer</button>
 <br>
</form>
<?php
    if(isset($_POST['Transfer']))
    {
         $name=$_POST['Name'];
         $amount=$_POST['Amount'];
         $result=mysqli_query($conn,"INSERT INTO money transfer VALUES('$name','$amount')");
         if($result)
          {
              echo "Transaction Successful,Have a good day!";
          }
         else
         {
              echo "Transaction failed";
         }
    }
?>
</body>
</html>