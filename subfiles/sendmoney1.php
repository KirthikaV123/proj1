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
  Name<input type ="text" name="Name"placeholder="Name">
 <br>
  Amount<input type ="numbers" name="Amount"placeholder="Amount">
 <br>
 <button type="Transfer" name="Transfer" align="center">Transfer</button>
 <br>
</form>
<?php
    if(isset($_POST['Transfer']))
    {
         $name=$_POST['Name'];
         $amount=$_POST['Amount'];
         $result=mysqli_query($conn,"INSERT INTO record VALUES('$name','$amount')");
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