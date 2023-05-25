<!DOCTYPE html>
<html lang="en">
<head>
<title>Searched Product List </title>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
}

h1 {
    background-color: #4CAF50;
    color: white;
    padding: 20px;
    margin-bottom: 30px;
    text-align: center;
}

table {
    border-collapse: collapse;
    width: 80%;
    margin: 0 auto;
    margin-bottom: 30px;
}

table th, table td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: center;
}

table th {
    background-color: #4CAF50;
    color: white;
}

table tr:nth-child(even) {
    background-color: #f2f2f2;
}

button {
    display: inline-block;
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    font-size: 16px;
    margin: 10px 2px;
    cursor: pointer;
    border-radius: 5px;
    border: none;
    outline: none;
}

button:hover {
    background-color: #45a049;
}
</style>
</head>
<body>
<h1> Searched Product Details </h1>
<?php
$servername="localhost";
$username="id20593688_bhargav8089";
$password="Sig5+aiFRUnvTDCU";
$dbname="id20593688_websqlbhargav";
$mysqli = new mysqli($servername, $username, $password, $dbname);

if(isset($_POST['pname']))
{
$pname=$_POST['pname'];
}
else
{
$pname='';
}

if(isset($_POST['city']))
{
$city=$_POST['city'];
}
else
{
$city='';
}

if(isset($_POST['minq']))
{
$minq=$_POST['minq'];
}
else
{
$minq='';
}

if(isset($_POST['maxq']))
{
$maxq=$_POST['maxq'];
}
else
{
$maxq='';
}

if(isset($_POST['minp']))
{
$minp=$_POST['minp'];
}
else
{
$minp='';
}

if(isset($_POST['maxp']))
{
$maxp=$_POST['maxp'];
}
else
{
$maxp='';
}
$sql="SELECT * FROM products WHERE
      (pname LIKE '%$pname%') AND
      (city LIKE '%$city%')   AND
      (quantity >= IF('$minq' = '',0,'$minq')) AND
	(quantity <= IF('$maxq' = '',quantity,'$maxq')) AND
      (price >= IF('$minp' = '',0,'$minp')) AND
	(price <= IF('$maxp' = '',price,'$maxp'))";
$result = $mysqli->query($sql);
if($result->num_rows>0)
{
echo"<table><tr><th>ID</th><th>Name</th><th>City</th><th>Quantity</th><th>Price</th>";
while($row=$result->fetch_assoc())
{
echo "<tr><td>" . $row["pid"] . "</td><td>" . $row["pname"] . "</td><td>" . $row["city"] ."</td><td>" . $row["quantity"] ."</td><td>" . $row["price"] . "</td></tr>";
}
echo "</table>";
}
else
{
echo " There are no products under the current search please go back home and look for the list of  available products or try for another search.";
}
$mysqli->close();
?>
<br>
<button onclick="location.href='productsearch.html'"> Perform Another Search </button>
<button onclick="location.href='index.html'"> Home</button>
</body>
</html>

