<?php 

  include "header.php";

  $sasteForms = count_school_forms('forms', 'SASTE');
  $sastePendingForms = count_school_specific_forms('forms', 'SASTE', '0');
  $sasteInProcessForms = count_school_specific_forms('forms', 'SASTE', '1');
  $sasteArchivedForms = count_school_specific_forms('forms', 'SASTE', '2');

  $snahsForms = count_school_forms('forms', 'SNAHS');
  $snahsPendingForms = count_school_specific_forms('forms', 'SNAHS', '0');
  $snahsInProcessForms = count_school_specific_forms('forms', 'SNAHS', '1');
  $snahsArchivedForms = count_school_specific_forms('forms', 'SNAHS', '2');

  $siteForms = count_school_forms('forms', 'SITE');
  $sitePendingForms = count_school_specific_forms('forms', 'SITE', '0');
  $siteInProcessForms = count_school_specific_forms('forms', 'SITE', '1');
  $siteArchivedForms = count_school_specific_forms('forms', 'SITE', '2');

  $sbahmForms = count_school_forms('forms', 'SBAHM');
  $sbahmPendingForms = count_school_specific_forms('forms', 'SBAHM', '0');
  $sbahmInProcessForms = count_school_specific_forms('forms', 'SBAHM', '1');
  $sbahmArchivedForms = count_school_specific_forms('forms', 'SBAHM', '2');

  $totalForms = count_total_forms();
  $pendingForms = count_pending_forms();
  $inProcessForms = count_inProcess_forms();
  $archivedForms = count_archived_forms();

  $jan = 1;
  $feb = 3;
  $mar = 5;
  $apr = 2;
  $may = 7;
  $jun = 9;
  $jul = 4;
  $aug = 11;
  $sep = 6; 
  $oct = 13;
  $nov = 8;
  $dec = 10;

?>



<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">HOMEPAGE</h1>
  </div>

    <!-- start Area Chart -->
    <div class="row mb-3">
        <div class="col-12" >
            <div class="card shadow mb-2">
                <div class="card-header py-3" >
                    <h6 class="m-0 font-weight-bold text-primary">Forms Requested per Month</h6>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="myAreaChart" width="100%"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- end Area Chart -->

    <!-- start Pie Chart -->
  <div class="row mb-3">
    <div class="col-6 mr-4">
        <div class="card shadow mb-2">
            <div class="card-header py-3">
                <span class="font-weight-bold text-primary">Forms Requested per School</span>
            </div>
            <div class="card-body">
                <canvas id="myPieChart" width="100%" height="41"></canvas>
            </div>
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
<div class="container-fluid pb-5">
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



<!--                         LAGAY LAHAT NG NASA BABA DITO SA FOOTER.PHP?                             -->



<script>
// START AREA CHART DATA
    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';
    
    function number_format(number, decimals, dec_point, thousands_sep) {
    // *     example: number_format(1234.56, 2, ',', ' ');
    // *     return: '1 234,56'
    number = (number + '').replace(',', '').replace(' ', '');
    var n = !isFinite(+number) ? 0 : +number,
        prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
        sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
        dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
        s = '',
        toFixedFix = function(n, prec) {
        var k = Math.pow(10, prec);
        return '' + Math.round(n * k) / k;
        };
    // Fix for IE parseFloat(0.55).toFixed(0) = 0;
    s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
    if (s[0].length > 3) {
        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
    }
    if ((s[1] || '').length < prec) {
        s[1] = s[1] || '';
        s[1] += new Array(prec - s[1].length + 1).join('0');
    }
    return s.join(dec);
    }
    
    // Area Chart Example
    var ctx = document.getElementById("myAreaChart");
    var myLineChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
        label: "Earnings",
        lineTension: 0.3,
        backgroundColor: "rgba(78, 115, 223, 0.05)",
        borderColor: "rgba(78, 115, 223, 1)",
        pointRadius: 3,
        pointBackgroundColor: "rgba(78, 115, 223, 1)",
        pointBorderColor: "rgba(78, 115, 223, 1)",
        pointHoverRadius: 3,
        pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
        pointHoverBorderColor: "rgba(78, 115, 223, 1)",
        pointHitRadius: 10,
        pointBorderWidth: 2,
        data: [<?php echo $jan ?>, <?php echo $feb ?>, <?php echo $mar ?>, <?php echo $apr ?>, <?php echo $may ?>, <?php echo $jun ?>, 
        <?php echo $jul ?>, <?php echo $aug ?>, <?php echo $sep ?>, <?php echo $oct ?>, <?php echo $nov ?>, <?php echo $dec ?>],
        }],
    },
    options: {
        maintainAspectRatio: false,
        layout: {
        padding: {
            left: 10,
            right: 25,
            top: 25,
            bottom: 0
        }
        },
        scales: {
        xAxes: [{
            time: {
            unit: 'date'
            },
            gridLines: {
            display: false,
            drawBorder: false
            },
            ticks: {
            maxTicksLimit: 12
            }
        }],
        yAxes: [{
            ticks: {
            maxTicksLimit: 6,
            padding: 10,
            // Include a dollar sign in the ticks
            callback: function(value, index, values) {
                return number_format(value);
            }
            },
            gridLines: {
            color: "rgb(234, 236, 244)",
            zeroLineColor: "rgb(234, 236, 244)",
            drawBorder: false,
            borderDash: [2],
            zeroLineBorderDash: [2]
            }
        }],
        },
        legend: {
        display: false
        },
        tooltips: {
        backgroundColor: "rgb(255,255,255)",
        bodyFontColor: "#858796",
        titleMarginBottom: 10,
        titleFontColor: '#6e707e',
        titleFontSize: 14,
        borderColor: '#dddfeb',
        borderWidth: 1,
        xPadding: 15,
        yPadding: 15,
        displayColors: false,
        intersect: false,
        mode: 'index',
        caretPadding: 10,
        callbacks: {
            label: function(tooltipItem, chart) {
            var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
            return datasetLabel + ': ' + number_format(tooltipItem.yLabel);
            }
        }
        }
    }
    });
// END AREA CHART DATA

// START PIE CHART DATA
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
// END PIE CHART DATA

</script>


<script src="template/https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
<script src="template/https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

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