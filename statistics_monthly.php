<?php 
    include "header.php";
    
?>


<div class="container-fluid">

  <!-- Page Heading -->
  <div class="py-3 bordercolor mb-5" style="border:none;">
    <h1 class="m-0 headerblacked">STATISTICS</h1>
  </div>


    
    <h5 style="position:relative;">
        Showing you a month statistics of <b><?php
        $enterYear = $_POST['enterYear']; 
        $enterMonth = $_POST['enterMonth']; 
        $statistics_location = "print_monthly.php?m=".$enterMonth. "&y=". $enterYear;
        echo "Year: " . $enterYear . " " . "Month: " . $enterMonth;
        ?></b>
        <a href="statistics.php" class="d-none d-lg-inline-block btn btn-lg btn-warning shadow-sm" style="float:right;">Go Back</a>
        &nbsp;&nbsp;
        <!-- <a href="<?=$statistics_location;?>"; class="userbtn" style="float:right; margin-right:20px;">Generate Report</a> -->
        <button onclick="myFunction()" class="d-none d-lg-inline-block btn btn-lg btn-primary shadow-sm" style="float:right; margin-right:20px;"><i class="fas fa-download fa-sm text-white-50"></i>Generate Report</button>

              <script>
              function myFunction() {
                window.open("<?= base_url() ?><?=$statistics_location?>");
              }
              </script>
    </h5>
    <?php

        $sasteForms = count_school_forms_month('forms', 'SCHOOL OF ARTS, SCIENCES AND TEACHER EDUCATION', $enterYear, $enterMonth);
        $sastePendingForms = count_school_specific_forms_month('forms', 'SCHOOL OF ARTS, SCIENCES AND TEACHER EDUCATION', '0', $enterYear, $enterMonth);
        $sasteInProcessForms = count_school_inprocess_forms_month('forms', 'SCHOOL OF ARTS, SCIENCES AND TEACHER EDUCATION', '1', '2', $enterYear, $enterMonth);
        $sasteArchivedForms = count_school_specific_forms_month('forms', 'SCHOOL OF ARTS, SCIENCES AND TEACHER EDUCATION', '5', $enterYear, $enterMonth);

        $snahsForms = count_school_forms_month('forms', 'SCHOOL OF NURSING AND ALLIED HEALTH SCIENCES', $enterYear, $enterMonth);
        $snahsPendingForms = count_school_specific_forms_month('forms', 'SCHOOL OF NURSING AND ALLIED HEALTH SCIENCES', '0', $enterYear, $enterMonth);
        $snahsInProcessForms = count_school_inprocess_forms_month('forms', 'SCHOOL OF NURSING AND ALLIED HEALTH SCIENCES', '1', '2', $enterYear, $enterMonth);
        $snahsArchivedForms = count_school_specific_forms_month('forms', 'SCHOOL OF NURSING AND ALLIED HEALTH SCIENCES', '5', $enterYear, $enterMonth);

        $siteForms = count_school_forms_month('forms', 'SCHOOL OF INFORMATION TECHNOLOGY AND ENGINEERING', $enterYear, $enterMonth);
        $sitePendingForms = count_school_specific_forms_month('forms', 'SCHOOL OF INFORMATION TECHNOLOGY AND ENGINEERING', '0', $enterYear, $enterMonth);
        $siteInProcessForms = count_school_inprocess_forms_month('forms', 'SCHOOL OF INFORMATION TECHNOLOGY AND ENGINEERING', '1', '2', $enterYear, $enterMonth);
        $siteArchivedForms = count_school_specific_forms_month('forms', 'SCHOOL OF INFORMATION TECHNOLOGY AND ENGINEERING', '5', $enterYear, $enterMonth);

        $sbahmForms = count_school_forms_month('forms', 'SCHOOL OF BUSINESS, ACCOUNTANCY AND HOSPITALITY MANAGEMENT', $enterYear, $enterMonth);
        $sbahmPendingForms = count_school_specific_forms_month('forms', 'SCHOOL OF BUSINESS, ACCOUNTANCY AND HOSPITALITY MANAGEMENT', '0', $enterYear, $enterMonth);
        $sbahmInProcessForms = count_school_inprocess_forms_month('forms', 'SCHOOL OF BUSINESS, ACCOUNTANCY AND HOSPITALITY MANAGEMENT', '1', '2', $enterYear, $enterMonth);
        $sbahmArchivedForms = count_school_specific_forms_month('forms', 'SCHOOL OF BUSINESS, ACCOUNTANCY AND HOSPITALITY MANAGEMENT', '5', $enterYear, $enterMonth);

        $somForms = count_school_forms_month('forms', 'SCHOOL OF MEDICINE', $enterYear, $enterMonth);
        $somPendingForms = count_school_specific_forms_month('forms', 'SCHOOL OF MEDICINE', '0', $enterYear, $enterMonth);
        $somInProcessForms = count_school_inprocess_forms_month('forms', 'SCHOOL OF MEDICINE', '1', '2', $enterYear, $enterMonth);
        $somArchivedForms = count_school_specific_forms_month('forms', 'SCHOOL OF MEDICINE', '5', $enterYear, $enterMonth);

        $beuForms = count_school_forms_month('forms', 'BASIC EDUCATION UNIT', $enterYear, $enterMonth);
        $beuPendingForms = count_school_specific_forms_month('forms', 'BASIC EDUCATION UNIT', '0', $enterYear, $enterMonth);
        $beuInProcessForms = count_school_inprocess_forms_month('forms', 'BASIC EDUCATION UNIT', '1', '2', $enterYear, $enterMonth);
        $beuArchivedForms = count_school_specific_forms_month('forms', 'BASIC EDUCATION UNIT', '5', $enterYear, $enterMonth);

        $gradSchoolForms = count_school_forms_month('forms', 'GRADUATE SCHOOL', $enterYear, $enterMonth);
        $gradSchoolPendingForms = count_school_specific_forms_month('forms', 'GRADUATE SCHOOL', '0', $enterYear, $enterMonth);
        $gradSchoolInProcessForms = count_school_inprocess_forms_month('forms', 'GRADUATE SCHOOL', '1', '2', $enterYear, $enterMonth);
        $gradSchoolArchivedForms = count_school_specific_forms_month('forms', 'GRADUATE SCHOOL', '5', $enterYear, $enterMonth);

        $totalForms = count_total_forms_month($enterYear, $enterMonth);
        $pendingForms = count_pending_forms_month($enterYear, $enterMonth);
        $inProcessForms = count_inProcess_forms_month($enterYear, $enterMonth);
        $archivedForms = count_archived_forms_month($enterYear, $enterMonth);

        $table_name = "forms";
        $col1 = "formYear";
        $value1 = $enterYear;
        $col2 = "formMonth";
        $value2 = $enterMonth;
        $week1 = 0;
        $week2 = 0;
        $week3 = 0;
        $week4 = 0;
        $get_userData = get_where_double($table_name, $col1, $value1, $col2, $value2);
        foreach ($get_userData as $key => $row) {
            $formDay = $row['formDay'];
            
            if ($formDay >= 1 && $formDay <= 7) {

                $week1 ++;
                
            }
            if ($formDay >= 8 and $formDay <= 14 ) {
          
                $week2 ++;
                
            }
            if ($formDay >= 15 and $formDay <= 21) {
              
                $week3 ++;
                
            }
            if ($formDay >= 22 AND $formDay <= 31) {
                $week4 ++;
                
            }
            
            
        }

        // if formDay => 1 AND $formDay =< 7 == week1
        // if $formday >= 8 AND $formDay <= 14 == week2
        // if $formday >= 15 AND $formDay <= 21 == week3
        // if $formday >= 22 AND $formDay <= 31 == week4

        

        //reference number generator
        $today = date("Ymd");
        $rand = strtoupper(substr(uniqid(sha1(time())),0,10));
        $unique = $today. "-" . $rand;

?>

    
    <!-- start Area Chart -->
    <div class="row mb-3 mt-5">
        <div class="col-12">
            <div class="card shadow m`b-2">
                <div class="card-header py-6 col-12" >
                    <h6 class="col-6 m-0 font-weight-bold text-dark">Forms Requested per Week</h6>
                    <!-- <h6 class="col-12 text-right" style="margin-top:-20px;">Year: <?php // if(isset($_POST['submit'])){ 
                            // echo $_POST['enterYear'];
                        // }   
                        ?></h6> -->
                    </h6>
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
                <span class="font-weight-bold text-dark ">Forms Requested per School</span>
            </div>
            <div class="card-body">
                <canvas id="myPieChart" width="100%" height="41"></canvas>
            </div>
        </div>
    </div>
    <!-- end pie chart -->

    <!-- start all departments stats -->
    <div class="row col-6">
        <div class="col-6 mb-5 ">
            <div class="card shadow pb-5">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-dark text-allign:">Total Requested Forms</h6>
                </div>
                <div class="card-body pt-5">
                    <?php echo "<h4 style='text-align:center;'>".$totalForms."</h4>" ?>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="card shadow pb-5">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-dark">Total Pending Forms</h6>
                </div>
                <div class="card-body pt-5">
                    <?php echo "<h4 style='text-align:center;'>".$pendingForms."</h4>" ?>
                </div>
            </div>
        </div>

        <div class="col-6" >
        <div class="card shadow pb-5">
          <div class="card-header">
              <h6 class="m-0 font-weight-bold text-dark">Total In Process Forms</h6>
          </div>
          <div class="card-body pt-5">
              <?php echo "<h4 style='text-align:center;'>".$inProcessForms."</h4>" ?>
              </div>
          </div>
        </div>

        <div class="col-6" >
        <div class="card shadow pb-5">
          <div class="card-header">
              <h6 class="m-0 font-weight-bold text-dark">Total Archived Forms</h6>
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
                <h6 class="m-0 font-weight-bold text-dark">Requested Forms</h6>
            </div>
            <div class="card-body">
                <?php echo "<h4 style='text-align:center;'>".$sasteForms."</h4>" ?>
            </div>
        </div>
    </div>

    <div class="col-3 mt-3">
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <h6 class="m-0 font-weight-bold text-dark">Pending Forms</h6>
            </div>
            <div class="card-body">
                <?php echo "<h4 style='text-align:center;'>".$sastePendingForms."</h4>" ?>
            </div>
        </div>
    </div>

    <div class="col-3 mt-3">
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <h6 class="m-0 font-weight-bold text-dark">In Process Forms</h6>
            </div>
            <div class="card-body">
                <?php echo "<h4 style='text-align:center;'>".$sasteInProcessForms."</h4>" ?>
            </div>
        </div>
    </div>

    <div class="col-3 mt-3">
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <h6 class="m-0 font-weight-bold text-dark">Archived Forms</h6>
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
                <h6 class="m-0 font-weight-bold text-dark">Requested Forms</h6>
            </div>
            <div class="card-body">
                <?php echo "<h4 style='text-align:center;'>".$snahsForms."</h4>" ?>
            </div>
        </div>
    </div>

    <div class="col-lg-3 mt-3" >
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <h6 class="m-0 font-weight-bold font">Pending Forms</h6>
            </div>
            <div class="card-body">
                <?php echo "<h4 style='text-align:center;'>".$snahsPendingForms."</h4>" ?>
            </div>
        </div>
    </div>

    <div class="col-lg-3 mt-3" >
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <h6 class="m-0 font-weight-bold text-dark">In Process Forms</h6>
            </div>
            <div class="card-body">
                <?php echo "<h4 style='text-align:center;'>".$snahsInProcessForms."</h4>" ?>
            </div>
        </div>
    </div>

    <div class="col-lg-3 mt-3" >
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <h6 class="m-0 font-weight-bold text-dark">Archived Forms</h6>
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
                <h6 class="m-0 font-weight-bold text-dark">Requested Forms</h6>
            </div>
            <div class="card-body">
                <?php echo "<h4 style='text-align:center;'>".$siteForms."</h4>" ?>
            </div>
        </div>
    </div>

    <div class="col-lg-3 mt-3" >
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <h6 class="m-0 font-weight-bold text-dark">Pending Forms</h6>
            </div>
            <div class="card-body">
                <?php echo "<h4 style='text-align:center;'>".$sitePendingForms."</h4>" ?>
            </div>
        </div>
    </div>

    <div class="col-lg-3 mt-3" >
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <h6 class="m-0 font-weight-bold text-dark">In Process Forms</h6>
            </div>
            <div class="card-body">
                <?php echo "<h4 style='text-align:center;'>".$siteInProcessForms."</h4>" ?>
            </div>
        </div>
    </div>

    <div class="col-lg-3 mt-3" >
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <h6 class="m-0 font-weight-bold text-dark">Archived Forms</h6>
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
                <h6 class="m-0 font-weight-bold text-dark">Requested Forms</h6>
            </div>
            <div class="card-body">
                <?php echo "<h4 style='text-align:center;'>".$sbahmForms."</h4>" ?>
            </div>
        </div>
    </div>

    <div class="col-lg-3 mt-3" >
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <h6 class="m-0 font-weight-bold text-dark">Pending Forms</h6>
            </div>
            <div class="card-body">
                <?php echo "<h4 style='text-align:center;'>".$sbahmPendingForms."</h4>" ?>
            </div>
        </div>
    </div>

    <div class="col-lg-3 mt-3" >
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <h6 class="m-0 font-weight-bold text-dark">In Process Forms</h6>
            </div>
            <div class="card-body">
                <?php echo "<h4 style='text-align:center;'>".$sbahmInProcessForms."</h4>" ?>
            </div>
        </div>
    </div>

    <div class="col-lg-3 mt-3" >
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <h6 class="m-0 font-weight-bold text-dark">Archived Forms</h6>
            </div>
            <div class="card-body">
                <?php echo "<h4 style='text-align:center;'>".$sbahmArchivedForms."</h4>" ?>
            </div>
        </div>
    </div>

  </div>
  <!-- end sbahm stats-->
  
    <!-- start som stats -->
    <button type="button" class="fullStats">SOM</button>
  <div class="content w-100">

    <div class="col-lg-3 mt-3" >
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <h6 class="m-0 font-weight-bold text-dark">Requested Forms</h6>
            </div>
            <div class="card-body">
                <?php echo "<h4 style='text-align:center;'>".$somForms."</h4>" ?>
            </div>
        </div>
    </div>

    <div class="col-lg-3 mt-3" >
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <h6 class="m-0 font-weight-bold text-dark">Pending Forms</h6>
            </div>
            <div class="card-body">
                <?php echo "<h4 style='text-align:center;'>".$somPendingForms."</h4>" ?>
            </div>
        </div>
    </div>

    <div class="col-lg-3 mt-3" >
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <h6 class="m-0 font-weight-bold text-dark">In Process Forms</h6>
            </div>
            <div class="card-body">
                <?php echo "<h4 style='text-align:center;'>".$somInProcessForms."</h4>" ?>
            </div>
        </div>
    </div>

    <div class="col-lg-3 mt-3" >
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <h6 class="m-0 font-weight-bold text-dark">Archived Forms</h6>
            </div>
            <div class="card-body">
                <?php echo "<h4 style='text-align:center;'>".$somArchivedForms."</h4>" ?>
            </div>
        </div>
    </div>

  </div>
  <!-- end som stats-->

      <!-- start beu stats -->
  <button type="button" class="fullStats">BEU</button>
  <div class="content w-100">

    <div class="col-lg-3 mt-3" >
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <h6 class="m-0 font-weight-bold text-dark">Requested Forms</h6>
            </div>
            <div class="card-body">
                <?php echo "<h4 style='text-align:center;'>".$beuForms."</h4>" ?>
            </div>
        </div>
    </div>

    <div class="col-lg-3 mt-3" >
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <h6 class="m-0 font-weight-bold text-dark">Pending Forms</h6>
            </div>
            <div class="card-body">
                <?php echo "<h4 style='text-align:center;'>".$beuPendingForms."</h4>" ?>
            </div>
        </div>
    </div>

    <div class="col-lg-3 mt-3" >
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <h6 class="m-0 font-weight-bold text-dark">In Process Forms</h6>
            </div>
            <div class="card-body">
                <?php echo "<h4 style='text-align:center;'>".$beuInProcessForms."</h4>" ?>
            </div>
        </div>
    </div>

    <div class="col-lg-3 mt-3" >
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <h6 class="m-0 font-weight-bold text-dark">Archived Forms</h6>
            </div>
            <div class="card-body">
                <?php echo "<h4 style='text-align:center;'>".$beuArchivedForms."</h4>" ?>
            </div>
        </div>
    </div>

  </div>
  <!-- end beu stats-->

   <!-- start graduate school stats -->
   <button type="button" class="fullStats">GRADUATE SCHOOL</button>
  <div class="content w-100">

    <div class="col-lg-3 mt-3" >
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <h6 class="m-0 font-weight-bold text-dark">Requested Forms</h6>
            </div>
            <div class="card-body">
                <?php echo "<h4 style='text-align:center;'>".$gradSchoolForms."</h4>" ?>
            </div>
        </div>
    </div>

    <div class="col-lg-3 mt-3" >
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <h6 class="m-0 font-weight-bold text-dark">Pending Forms</h6>
            </div>
            <div class="card-body">
                <?php echo "<h4 style='text-align:center;'>".$gradSchoolPendingForms."</h4>" ?>
            </div>
        </div>
    </div>

    <div class="col-lg-3 mt-3" >
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <h6 class="m-0 font-weight-bold text-dark">In Process Forms</h6>
            </div>
            <div class="card-body">
                <?php echo "<h4 style='text-align:center;'>".$gradSchoolInProcessForms."</h4>" ?>
            </div>
        </div>
    </div>

    <div class="col-lg-3 mt-3" >
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <h6 class="m-0 font-weight-bold text-dark">Archived Forms</h6>
            </div>
            <div class="card-body">
                <?php echo "<h4 style='text-align:center;'>".$gradSchoolArchivedForms."</h4>" ?>
            </div>
        </div>
    </div>

  </div>
  <!-- end grad school stats-->



  </div>

  </div>
  
  <?php include "footeradmin.php" ?>
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
        labels: ["Week 1 (Days 1-7)", "Week 2 (Days 8-14)", "Week 3 (Days 15-21)", "Week 4 (Days 22-31)"],
        datasets: [{
        label: "Requests",
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
        data: [<?php echo $week1 ?>, <?php echo $week2 ?>, <?php echo $week3 ?>, <?php echo $week4 ?>],
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
            maxTicksLimit: 4
            }
        }],
        yAxes: [{
            ticks: {
            maxTicksLimit: 4,
            padding: 10,
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
        labels: ["SASTE", "SNAHS", "SITE", "SBAHM", "SOM", "BEU", "GRAD SCHOOL"],
        datasets: [{
        data: [<?php echo $sasteForms ?>, <?php echo $snahsForms ?>, <?php echo $siteForms ?>, <?php echo $sbahmForms ?>, 
        <?php echo $somForms ?>, <?php echo $beuForms ?>, <?php echo $gradSchoolForms ?>],
        backgroundColor: ['#007bff', '#dc3545', '#FF69B4', '#FFFF00', '#006400', '#CFB53B', '000'],
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
// extra reference number generator
    // function uuidv4() {
    //   return 'xxxxxxxxxx'.replace(/[xy]/g, function(c) {
    //     var r = Math.random() * 16 | 0, v = c == 'x' ? r : (r & 0x3 | 0x8);
    //     return v.toString(16);
    //   });
    // }
    // var yearNow = '<?php //echo $today."-"; ?>';
    // console.log(yearNow.concat(uuidv4()));
</script>


<script>

//reference number
// var refNumber = '<?php // echo $unique; ?>';
// console.log(refNumber);



// get date today

// const dateToday = new Date()
// dateToday.setFullYear(dateToday.getFullYear())
// console.log(dateToday);

// var dataYear = 0;
// var getYear = new Date();
// var yearNow = getYear.getFullYear();
// console.log(yearNow);
// document.getElementById("yearNow").innerHTML = yearNow;

</script>