<?php 
session_start();
$uname=$_SESSION['user'];
$conn = mysqli_connect("localhost:3307", "root", "", "channels");

$id = $_GET['id'];

$query = "SELECT * FROM packs WHERE pack_id ='".$id."'";

function filterTable($query)
{
    $connect = mysqli_connect("localhost:3307", "root", "", "channels");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}
$search_result = filterTable($query); 

while($row = mysqli_fetch_array($search_result)):
    $name = $row['pack_name'];
    $chlist = $row['ch_list'];
    $pricee = $row['price'];
endwhile;

$check=mysqli_query($conn,"select * from mypacks where pack_id='$id'");
$checkrows=mysqli_num_rows($check);


if($checkrows>0) {
  echo "Channel already added";
} else { 
        $INSERT = "INSERT IGNORE Into mypacks (pack_id, pack_name, ch_list, price, user) values(?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($INSERT);
        $stmt->bind_param("issis", $id, $name, $chlist, $pricee, $uname);
        $stmt->execute();
        echo '<script language="javascript">';
        echo 'alert("Package added successfully")';
        echo '</script>';
}
$conn->close();

?>