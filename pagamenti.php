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
$query = "
SELECT *
FROM pagamenti
WHERE id >= 100
";
$res =$conn ->query($query);
if($res && $res -> num_rows > 0){
  while ($row = $res -> fetch_assoc()) {
  $pagamenti[]=$row;
  }
}
echo json_encode($pagamenti);

$conn->close();
?>
