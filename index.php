<?php
if(isset($_POST['submit'])){
  $conn= mysqli_connect('localhost','root','','adscategory');
  $adname= $_POST['adname'];
  $price= $_POST['price'];
  $minprice= $_POST['minprice'];
  $date= $_POST['date'];
  $category= $_POST['category'];
 $sql = "INSERT INTO info1(adname,price,minprice,date)VALUES
('$adname','$price','$minprice','$date')";
$query= mysqli_query($conn,$sql);
if($query){
$sql2= "INSERT INTO info2 (category) VALUES('$category')";
$result= mysqli_query($conn, $sql2);
echo'the ad is submitted';
}else{
    echo'there is error in the ad';
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form check</title>
</head>
<body>
    <form autocomplete="off" action="index.php" method="post">
        <div><input type="text" name="adname" placeholder="adname"></div>
        <div><input type="text" name="price" placeholder="price"></div>
        <div><input type="text" name="minprice" placeholder="minprice"></div>
        <div><input type="text" name="date" placeholder="date"></div>
        <div> <input textarea cols="40" rows="5" name="category" placeholder="any category"></div>
        <div><input type="submit" name="submit" value="submit"></div>
    </form>
</body>
</html>
