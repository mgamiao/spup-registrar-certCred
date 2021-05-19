<?php 

  include "header.php";

  $sasteForms = count_school_forms('forms', 'SCHOOL OF ARTS, SCIENCES AND TEACHER EDUCATION');
  $sastePendingForms = count_school_specific_forms('forms', 'SCHOOL OF ARTS, SCIENCES AND TEACHER EDUCATION', '0');
  $sasteInProcessForms = count_school_specific_forms('forms', 'SCHOOL OF ARTS, SCIENCES AND TEACHER EDUCATION', '1');
  $sasteArchivedForms = count_school_specific_forms('forms', 'SCHOOL OF ARTS, SCIENCES AND TEACHER EDUCATION', '2');

  $snahsForms = count_school_forms('forms', 'SCHOOL OF NURSING AND ALLIED HEALTH SCIENCES');
  $snahsPendingForms = count_school_specific_forms('forms', 'SCHOOL OF NURSING AND ALLIED HEALTH SCIENCES', '0');
  $snahsInProcessForms = count_school_specific_forms('forms', 'SCHOOL OF NURSING AND ALLIED HEALTH SCIENCES', '1');
  $snahsArchivedForms = count_school_specific_forms('forms', 'SCHOOL OF NURSING AND ALLIED HEALTH SCIENCES', '2');

  $siteForms = count_school_forms('forms', 'SCHOOL OF INFORMATION TECHNOLOGY AND ENGINEERING');
  $sitePendingForms = count_school_specific_forms('forms', 'SCHOOL OF INFORMATION TECHNOLOGY AND ENGINEERING', '0');
  $siteInProcessForms = count_school_specific_forms('forms', 'SCHOOL OF INFORMATION TECHNOLOGY AND ENGINEERING', '1');
  $siteArchivedForms = count_school_specific_forms('forms', 'SCHOOL OF INFORMATION TECHNOLOGY AND ENGINEERING', '2');

  $sbahmForms = count_school_forms('forms', 'SCHOOL OF BUSINESS, ACCOUNTANCY AND HOSPITALITY MANAGEMENT');
  $sbahmPendingForms = count_school_specific_forms('forms', 'SCHOOL OF BUSINESS, ACCOUNTANCY AND HOSPITALITY MANAGEMENT', '0');
  $sbahmInProcessForms = count_school_specific_forms('forms', 'SCHOOL OF BUSINESS, ACCOUNTANCY AND HOSPITALITY MANAGEMENT', '1');
  $sbahmArchivedForms = count_school_specific_forms('forms', 'SCHOOL OF BUSINESS, ACCOUNTANCY AND HOSPITALITY MANAGEMENT', '2');

  $totalForms = count_total_forms();
  $pendingForms = count_pending_forms();
  $inProcessForms = count_inProcess_forms();
  $archivedForms = count_archived_forms();

?>



<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">HOMEPAGE</h1>
  </div>

  <div class="row mb-3">

    <!-- Pie Chart -->
    <div class="col-6 mr-4">
        <div class="card shadow mb-2">
            <div class="card-header py-3">
                <i class="fas fa-chart-pie mr-1"></i>
                <span class="font-weight-bold text-primary">Forms Requested per School</span>
            </div>
            <div class="card-body"><canvas id="myPieChart" width="100%" height="41"></canvas></div>

        </div>
    </div>
    <!-- end pie chart -->

    <!-- start all departments stats -->
    <div class="row col-6">
        <div class="col-6 ">
            <div class="card shadow pb-5">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">Total Requested Forms</h6>
                </div>
                <div class="card-body pt-5">
                    <?php echo "<h4 style='text-align:center;'>".$totalForms."</h4>" ?>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="card shadow pb-5">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">Total Pending Forms</h6>
                </div>
                <div class="card-body pt-5">
                    <?php echo "<h4 style='text-align:center;'>".$pendingForms."</h4>" ?>
                </div>
            </div>
        </div>

        <div class="col-6" >
        <div class="card shadow pb-5">
          <div class="card-header">
              <h6 class="m-0 font-weight-bold text-primary">Total In Process Forms</h6>
          </div>
          <div class="card-body pt-5">
              <?php echo "<h4 style='text-align:center;'>".$inProcessForms."</h4>" ?>
              </div>
          </div>
        </div>

        <div class="col-6" >
        <div class="card shadow pb-5">
          <div class="card-header">
              <h6 class="m-0 font-weight-bold text-primary">Total Processed Forms</h6>
          </div>
          <div class="card-body pt-5">
              <?php echo "<h4 style='text-align:center;'>".$archivedForms."</h4>" ?>
              </div>
          </div>
        </div>
    </div>
    </div>
    <!-- end all departments stats -->

  </div>

<!-- start per department stats -->
<div class="container-fluid">
  <button type="button" class="fullStats">SASTE</button>
  <!-- start saste stats -->
  <div class="content w-100">

    <div class="col-3 mt-3">
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <h6 class="m-0 font-weight-bold text-primary">Requested Forms</h6>
            </div>
            <div class="card-body">
                <?php echo "<h4 style='text-align:center;'>".$sasteForms."</h4>" ?>
            </div>
        </div>
    </div>

    <div class="col-3 mt-3">
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <h6 class="m-0 font-weight-bold text-primary">Pending Forms</h6>
            </div>
            <div class="card-body">
                <?php echo "<h4 style='text-align:center;'>".$sastePendingForms."</h4>" ?>
            </div>
        </div>
    </div>

    <div class="col-3 mt-3">
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <h6 class="m-0 font-weight-bold text-primary">In Process Forms</h6>
            </div>
            <div class="card-body">
                <?php echo "<h4 style='text-align:center;'>".$sasteInProcessForms."</h4>" ?>
            </div>
        </div>
    </div>

    <div class="col-3 mt-3">
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <h6 class="m-0 font-weight-bold text-primary">Completed Forms</h6>
            </div>
            <div class="card-body">
                <?php echo "<h4 style='text-align:center;'>".$sasteArchivedForms."</h4>" ?>
            </div>
        </div>
    </div>

  </div>
  <!-- end saste stats-->

  <button type="button" class="fullStats">SNAHS</button>
  <!-- start snahs stats -->
  <div class="content w-100">

    <div class="col-lg-3 mt-3" >
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <h6 class="m-0 font-weight-bold text-primary">Requested Forms</h6>
            </div>
            <div class="card-body">
                <?php echo "<h4 style='text-align:center;'>".$snahsForms."</h4>" ?>
            </div>
        </div>
    </div>

    <div class="col-lg-3 mt-3" >
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <h6 class="m-0 font-weight-bold text-primary">Pending Forms</h6>
            </div>
            <div class="card-body">
                <?php echo "<h4 style='text-align:center;'>".$snahsPendingForms."</h4>" ?>
            </div>
        </div>
    </div>

    <div class="col-lg-3 mt-3" >
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <h6 class="m-0 font-weight-bold text-primary">In Process Forms</h6>
            </div>
            <div class="card-body">
                <?php echo "<h4 style='text-align:center;'>".$snahsInProcessForms."</h4>" ?>
            </div>
        </div>
    </div>

    <div class="col-lg-3 mt-3" >
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <h6 class="m-0 font-weight-bold text-primary">Completed Forms</h6>
            </div>
            <div class="card-body">
                <?php echo "<h4 style='text-align:center;'>".$snahsArchivedForms."</h4>" ?>
            </div>
        </div>
    </div>

  </div>
  <!-- end snahs stats-->

  <button type="button" class="fullStats">SITE</button>
  <!-- start site stats -->
  <div class="content w-100">

    <div class="col-lg-3 mt-3" >
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <h6 class="m-0 font-weight-bold text-primary">Requested Forms</h6>
            </div>
            <div class="card-body">
                <?php echo "<h4 style='text-align:center;'>".$siteForms."</h4>" ?>
            </div>
        </div>
    </div>

    <div class="col-lg-3 mt-3" >
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <h6 class="m-0 font-weight-bold text-primary">Pending Forms</h6>
            </div>
            <div class="card-body">
                <?php echo "<h4 style='text-align:center;'>".$sitePendingForms."</h4>" ?>
            </div>
        </div>
    </div>

    <div class="col-lg-3 mt-3" >
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <h6 class="m-0 font-weight-bold text-primary">In Process Forms</h6>
            </div>
            <div class="card-body">
                <?php echo "<h4 style='text-align:center;'>".$siteInProcessForms."</h4>" ?>
            </div>
        </div>
    </div>

    <div class="col-lg-3 mt-3" >
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <h6 class="m-0 font-weight-bold text-primary">Completed Forms</h6>
            </div>
            <div class="card-body">
                <?php echo "<h4 style='text-align:center;'>".$siteArchivedForms."</h4>" ?>
            </div>
        </div>
    </div>

  </div>
  <!-- end site stats-->

  <button type="button" class="fullStats">SBAHM</button>
  <!-- start sbahm stats -->
  <div class="content w-100">

    <div class="col-lg-3 mt-3" >
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <h6 class="m-0 font-weight-bold text-primary">Requested Forms</h6>
            </div>
            <div class="card-body">
                <?php echo "<h4 style='text-align:center;'>".$sbahmForms."</h4>" ?>
            </div>
        </div>
    </div>

    <div class="col-lg-3 mt-3" >
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <h6 class="m-0 font-weight-bold text-primary">Pending Forms</h6>
            </div>
            <div class="card-body">
                <?php echo "<h4 style='text-align:center;'>".$sbahmPendingForms."</h4>" ?>
            </div>
        </div>
    </div>

    <div class="col-lg-3 mt-3" >
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <h6 class="m-0 font-weight-bold text-primary">In Process Forms</h6>
            </div>
            <div class="card-body">
                <?php echo "<h4 style='text-align:center;'>".$sbahmInProcessForms."</h4>" ?>
            </div>
        </div>
    </div>

    <div class="col-lg-3 mt-3" >
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <h6 class="m-0 font-weight-bold text-primary">Completed Forms</h6>
            </div>
            <div class="card-body">
                <?php echo "<h4 style='text-align:center;'>".$sbahmArchivedForms."</h4>" ?>
            </div>
        </div>
    </div>

  </div>
  <!-- end sbahm stats-->
  </div>

</div>
<!-- end per department stats -->

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
      data: [<?php echo $sasteForms ?>, <?php echo $snahsForms ?>, <?php echo $siteForms ?>, <?php echo $sbahmForms ?>],
      backgroundColor: ['#007bff', '#dc3545', '#FF69B4', '#28a745'],
    }],
  },
});
</script>

<script>
var coll = document.getElementsByClassName("fullStats");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("fullStatsActive");
    var content = this.nextElementSibling;
    if (content.style.display === "inline-flex") {
      content.style.display = "none";
    } else {
      content.style.display = "inline-flex";
    }
  });
}
</script>


<script src="template/https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
<script src="template/https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/demo/chart-area-demo.js"></script>

<!-- idle timeout -->
<script>
  function idleLogout() {
      var t;
      window.onload = resetTimer;
      window.onmousemove = resetTimer;
      window.onmousedown = resetTimer;  // catches touchscreen presses as well      
      window.ontouchstart = resetTimer; // catches touchscreen swipes as well 
      window.onclick = resetTimer;      // catches touchpad clicks as well
      window.onkeydown = resetTimer;   
      window.addEventListener('scroll', resetTimer, true); 

      function yourFunction() {
        window.alert('You were inactive for 5 minutes. Please log in again')
        window.location.href = 'logout.php';
      }

      function resetTimer() {
          clearTimeout(t);
          t = setTimeout(yourFunction, 300000);  // time is in milliseconds
      }
  }
  idleLogout();
</script>