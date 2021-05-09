<?php
include "perfect_function.php";


$result = count_site_forms(forms);
echo $result;
// echo json_encode($result);


// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "spupregistrar";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// } 

// $sql = "SELECT COUNT(*) FROM `forms` WHERE `school` = 'site'";  //This is where I specify what data to query
// $result = mysqli_query($conn, $sql);

// $data = array();
// while($enr = mysqli_fetch_assoc($result)){
//     $a = array($enr['COUNT(*)']);
//     array_push($data, $a);
// }

// echo json_encode($data);


// $data = array([count_site_forms(forms)]);
// // replace $data by your code to select in DB
// echo json_encode($data);


?>
<script>
// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ["SASTE", "SNAHS", "SITE", "SBAHM"],
    datasets: [{
      data: [1, 2, 6, 4],
      backgroundColor: ['#007bff', '#dc3545', '#FF69B4', '#28a745'],
    }],
  },
});
</script>