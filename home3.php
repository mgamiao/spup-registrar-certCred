<?php 
    include "header.php";
    $sasteForms = count_saste_forms();
    $sastePendingForms = count_saste_pending_forms();
    $sasteInProcessForms = count_saste_inProcess_forms();
    $sasteArchivedForms = count_saste_archived_forms();

    $snahsForms = count_snahs_forms();
    $snahsPendingForms = count_snahs_pending_forms();
    $snahsInProcessForms = count_snahs_inProcess_forms();
    $snahsArchivedForms = count_snahs_archived_forms();

    $siteForms = count_site_forms();
    $sitePendingForms = count_site_pending_forms();
    $siteInProcessForms = count_site_inProcess_forms();
    $siteArchivedForms = count_site_archived_forms();

    $sbahmForms = count_sbahm_forms();
    $sbahmPendingForms = count_sbahm_pending_forms();
    $sbahmInProcessForms = count_sbahm_inProcess_forms();
    $sbahmArchivedForms = count_sbahm_archived_forms();

    $totalForms = count_total_forms();
    $pendingForms = count_pending_forms();
    $inProcessForms = count_inProcess_forms();
    $archivedForms = count_archived_forms();
?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">HOMEPAGE</h1>
  
</div>

<!-- start saste stats -->
<div class="row">

    <div class="col-lg-3" >
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <h6 class="m-0 font-weight-bold text-primary">SASTE Requested Forms</h6>
            </div>
            <div class="card-body">
                <?php echo "<h4 style='text-align:center;'>".$sasteForms."</h4>" ?>
            </div>
        </div>
    </div>

    <div class="col-lg-3" >
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <h6 class="m-0 font-weight-bold text-primary">SASTE Pending Forms</h6>
            </div>
            <div class="card-body">
                <?php echo "<h4 style='text-align:center;'>".$sastePendingForms."</h4>" ?>
            </div>
        </div>
    </div>

    <div class="col-lg-3" >
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <h6 class="m-0 font-weight-bold text-primary">SASTE In Process Forms</h6>
            </div>
            <div class="card-body">
                <?php echo "<h4 style='text-align:center;'>".$sasteInProcessForms."</h4>" ?>
            </div>
        </div>
    </div>

    <div class="col-lg-3" >
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <h6 class="m-0 font-weight-bold text-primary">SASTE Completed Forms</h6>
            </div>
            <div class="card-body">
                <?php echo "<h4 style='text-align:center;'>".$sasteArchivedForms."</h4>" ?>
            </div>
        </div>
    </div>

</div>
<!-- end saste stats-->

<!-- start snahs stats -->
<div class="row">

    <div class="col-lg-3" >
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <h6 class="m-0 font-weight-bold text-primary">SNAHS Requested Forms</h6>
            </div>
            <div class="card-body">
                <?php echo "<h4 style='text-align:center;'>".$snahsForms."</h4>" ?>
            </div>
        </div>
    </div>

    <div class="col-lg-3" >
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <h6 class="m-0 font-weight-bold text-primary">SNAHS Pending Forms</h6>
            </div>
            <div class="card-body">
                <?php echo "<h4 style='text-align:center;'>".$snahsPendingForms."</h4>" ?>
            </div>
        </div>
    </div>

    <div class="col-lg-3" >
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <h6 class="m-0 font-weight-bold text-primary">SNAHS In Process Forms</h6>
            </div>
            <div class="card-body">
                <?php echo "<h4 style='text-align:center;'>".$snahsInProcessForms."</h4>" ?>
            </div>
        </div>
    </div>

    <div class="col-lg-3" >
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <h6 class="m-0 font-weight-bold text-primary">SNAHS Completed Forms</h6>
            </div>
            <div class="card-body">
                <?php echo "<h4 style='text-align:center;'>".$snahsArchivedForms."</h4>" ?>
            </div>
        </div>
    </div>

</div>
<!-- end snahs stats-->

<!-- start site stats -->
<div class="row">

    <div class="col-lg-3" >
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <h6 class="m-0 font-weight-bold text-primary">SITE Requested Forms</h6>
            </div>
            <div class="card-body">
                <?php echo "<h4 style='text-align:center;'>".$siteForms."</h4>" ?>
            </div>
        </div>
    </div>

    <div class="col-lg-3" >
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <h6 class="m-0 font-weight-bold text-primary">SITE Pending Forms</h6>
            </div>
            <div class="card-body">
                <?php echo "<h4 style='text-align:center;'>".$sitePendingForms."</h4>" ?>
            </div>
        </div>
    </div>

    <div class="col-lg-3" >
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <h6 class="m-0 font-weight-bold text-primary">SITE In Process Forms</h6>
            </div>
            <div class="card-body">
                <?php echo "<h4 style='text-align:center;'>".$siteInProcessForms."</h4>" ?>
            </div>
        </div>
    </div>

    <div class="col-lg-3" >
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <h6 class="m-0 font-weight-bold text-primary">SITE Completed Forms</h6>
            </div>
            <div class="card-body">
                <?php echo "<h4 style='text-align:center;'>".$siteArchivedForms."</h4>" ?>
            </div>
        </div>
    </div>

</div>
<!-- end site stats-->

<!-- start sbahm stats -->
<div class="row">

    <div class="col-lg-3" >
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <h6 class="m-0 font-weight-bold text-primary">SBAHM Requested Forms</h6>
            </div>
            <div class="card-body">
                <?php echo "<h4 style='text-align:center;'>".$sbahmForms."</h4>" ?>
            </div>
        </div>
    </div>

    <div class="col-lg-3" >
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <h6 class="m-0 font-weight-bold text-primary">SBAHM Pending Forms</h6>
            </div>
            <div class="card-body">
                <?php echo "<h4 style='text-align:center;'>".$sbahmPendingForms."</h4>" ?>
            </div>
        </div>
    </div>

    <div class="col-lg-3" >
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <h6 class="m-0 font-weight-bold text-primary">SBAHM In Process Forms</h6>
            </div>
            <div class="card-body">
                <?php echo "<h4 style='text-align:center;'>".$sbahmInProcessForms."</h4>" ?>
            </div>
        </div>
    </div>

    <div class="col-lg-3" >
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <h6 class="m-0 font-weight-bold text-primary">SBAHM Completed Forms</h6>
            </div>
            <div class="card-body">
                <?php echo "<h4 style='text-align:center;'>".$sbahmArchivedForms."</h4>" ?>
            </div>
        </div>
    </div>

</div>
<!-- end sbahm stats-->

<!-- start all departments stats -->
<div class="row">
  <div class="col-lg-3" >
    <!-- Area Chart -->
    <div class="card shadow mb-4">
      <div class="card-header py-3" >
          <h6 class="m-0 font-weight-bold text-primary">Total Requested Forms</h6>
      </div>
      <div class="card-body">
          <?php echo "<h4 style='text-align:center;'>".$totalForms."</h4>" ?>
          </div>
      </div>
    </div>

    <div class="col-lg-3" >
    <!-- Area Chart -->
    <div class="card shadow mb-4">
      <div class="card-header py-3" >
          <h6 class="m-0 font-weight-bold text-primary">Total Pending Forms</h6>
      </div>
      <div class="card-body">
          <?php echo "<h4 style='text-align:center;'>".$pendingForms."</h4>" ?>
          </div>
      </div>
    </div>

    <div class="col-lg-3" >
    <!-- Area Chart -->
    <div class="card shadow mb-4">
      <div class="card-header py-3" >
          <h6 class="m-0 font-weight-bold text-primary">Total In Process Forms</h6>
      </div>
      <div class="card-body">
          <?php echo "<h4 style='text-align:center;'>".$inProcessForms."</h4>" ?>
          </div>
      </div>
    </div>

    <div class="col-lg-3" >
    <!-- Area Chart -->
    <div class="card shadow mb-4">
      <div class="card-header py-3" >
          <h6 class="m-0 font-weight-bold text-primary">Total Processed Forms</h6>
      </div>
      <div class="card-body">
          <?php echo "<h4 style='text-align:center;'>".$archivedForms."</h4>" ?>
          </div>
      </div>
    </div>
    
</div>
<!-- end all departments stats -->

  <!-- Pie Chart -->
  <div class="col-lg-6">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <i class="fas fa-chart-pie mr-1"></i>
            <span class="font-weight-bold text-primary">Forms Requested per School</span>
        </div>
        <div class="card-body"><canvas id="myPieChart" width="100%" height="41"></canvas></div>

    </div>
  </div>
</div>
<!-- end pie chart -->




<?php
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
echo "saste " . $sasteForms;
echo "<br>snahs " . $snahsForms;
echo "<br>site " . $siteForms;
echo "<br>sbahm " .  $sbahmForms;
echo "<br><br><br>total requested forms " . $totalForms;
echo "<br>pending forms " . $pendingForms;
echo "<br>in process forms " . $inProcessForms;
echo "<br>archived forms " . $archivedForms;

?>





<script>
// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';


// $.ajax({
//   url : 'hom2.php', // your php file
//   type : 'GET', // type of the HTTP request
//   success : function(data){
//      var obj = jQuery.parseJSON(data);
//      console.log(obj);
//   }
// });

  
// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ["SASTE", "SNAHS", "SITE", "SBAHM"],
    datasets: [{
      data: [<?php echo $sasteForms ?>, <?php echo $snahsForms ?>, <?php echo $siteForms ?>, <?php echo $sbahmForms ?>],
      backgroundColor: ['#007bff', '#dc3545', '#FF69B4', '#28a745'],
    }],
  },
});
</script>


<script src="template/https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
<script src="template/https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/demo/chart-area-demo.js"></script>