<?php 
session_start();
$uname=$_SESSION['user'];
$conn = mysqli_connect("localhost:3307", "root", "", "channels");

$id = $_GET['id'];

$query = "SELECT * FROM television WHERE ch_num ='".$id."'";

function filterTable($query)
{
    $connect = mysqli_connect("localhost:3307", "root", "", "channels");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}
$search_result = filterTable($query); 

while($row = mysqli_fetch_array($search_result)):
    $name = $row['ch_name'];
    $langg = $row['lang'];
    $typee = $row['type'];
    $pricee = $row['price'];
endwhile;

$check=mysqli_query($conn,"select * from mytelevision where ch_num='$id'");
$checkrows=mysqli_num_rows($check);


if($checkrows>0) {
  echo "Channel already added";
} else { 
        $INSERT = "INSERT IGNORE Into mytelevision (ch_num, ch_name, lang, type, price, user) values(?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($INSERT);
        $stmt->bind_param("isssis", $id, $name, $langg, $typee, $pricee, $uname);
        $stmt->execute();
        echo '<script language="javascript">';
        echo 'alert("New channel added successfully")';
        echo '</script>';
}
$conn->close();

?>