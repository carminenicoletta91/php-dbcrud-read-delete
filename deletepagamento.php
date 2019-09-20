<?php
header('Content-type: application/json');
$servername = 'localhost';
$username ='root';
$password = '';
$dbname = 'hotel';

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn -> connect_error){
  var_dump('error');
  die();
}
$id=$_GET['id'];
$query = "
DELETE
FROM pagamenti
WHERE id =".$id."
";
$res =$conn ->query($query);


echo json_encode($res);

$conn->close();
?>
