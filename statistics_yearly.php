<?php 
    include "header.php";
?>


<div class="container-fluid">

  <!-- Page Heading -->
  <div class="py-3 bordercolor mb-5" style="border:none;">
    <h1 class="m-0 headerblacked">STATISTICS</h1>
  </div>


    
    <h5 style="position:relative;">
        Showing you a whole year statistics of <b><?php 
        echo $enterYear = $_POST['enterYear'];
        $statistics_location = "print_yearly.php?y=". $enterYear; 
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

        $sasteForms = count_school_forms('forms', 'SCHOOL OF ARTS, SCIENCES AND TEACHER EDUCATION', $enterYear);
        $sastePendingForms = count_school_specific_forms('forms', 'SCHOOL OF ARTS, SCIENCES AND TEACHER EDUCATION', '0', $enterYear);
        $sasteInProcessForms = count_school_specific_inprocess('forms', 'SCHOOL OF ARTS, SCIENCES AND TEACHER EDUCATION', '1', '2', '3', $enterYear);
        $sasteArchivedForms = count_school_specific_forms('forms', 'SCHOOL OF ARTS, SCIENCES AND TEACHER EDUCATION', '6', $enterYear);

        $snahsForms = count_school_forms('forms', 'SCHOOL OF NURSING AND ALLIED HEALTH SCIENCES', $enterYear);
        $snahsPendingForms = count_school_specific_forms('forms', 'SCHOOL OF NURSING AND ALLIED HEALTH SCIENCES', '0', $enterYear);
        $snahsInProcessForms = count_school_specific_inprocess('forms', 'SCHOOL OF NURSING AND ALLIED HEALTH SCIENCES', '1', '2', '3', $enterYear);
        $snahsArchivedForms = count_school_specific_forms('forms', 'SCHOOL OF NURSING AND ALLIED HEALTH SCIENCES', '6', $enterYear);

        $siteForms = count_school_forms('forms', 'SCHOOL OF INFORMATION TECHNOLOGY AND ENGINEERING', $enterYear);
        $sitePendingForms = count_school_specific_forms('forms', 'SCHOOL OF INFORMATION TECHNOLOGY AND ENGINEERING', '0', $enterYear);
        $siteInProcessForms = count_school_specific_inprocess('forms', 'SCHOOL OF INFORMATION TECHNOLOGY AND ENGINEERING', '1', '2', '3', $enterYear);
        $siteArchivedForms = count_school_specific_forms('forms', 'SCHOOL OF INFORMATION TECHNOLOGY AND ENGINEERING', '6', $enterYear);

        $sbahmForms = count_school_forms('forms', 'SCHOOL OF BUSINESS, ACCOUNTANCY AND HOSPITALITY MANAGEMENT', '$enterYear', $enterYear);
        $sbahmPendingForms = count_school_specific_forms('forms', 'SCHOOL OF BUSINESS, ACCOUNTANCY AND HOSPITALITY MANAGEMENT', '0', $enterYear);
        $sbahmInProcessForms = count_school_specific_inprocess('forms', 'SCHOOL OF BUSINESS, ACCOUNTANCY AND HOSPITALITY MANAGEMENT', '1', '2', '3', $enterYear);
        $sbahmArchivedForms = count_school_specific_forms('forms', 'SCHOOL OF BUSINESS, ACCOUNTANCY AND HOSPITALITY MANAGEMENT', '6', $enterYear);

        $somForms = count_school_forms('forms', 'SCHOOL OF MEDICINE', $enterYear);
        $somPendingForms = count_school_specific_forms('forms', 'SCHOOL OF MEDICINE', '0', $enterYear);
        $somInProcessForms = count_school_specific_inprocess('forms', 'SCHOOL OF MEDICINE', '1', '2', '3', $enterYear);
        $somArchivedForms = count_school_specific_forms('forms', 'SCHOOL OF MEDICINE', '6', $enterYear);

        $beuForms = count_school_forms('forms', 'BASIC EDUCATION UNIT', $enterYear);
        $beuPendingForms = count_school_specific_forms('forms', 'BASIC EDUCATION UNIT', '0', $enterYear);
        $beuInProcessForms = count_school_specific_inprocess('forms', 'BASIC EDUCATION UNIT', '1', '2', '3', $enterYear);
        $beuArchivedForms = count_school_specific_forms('forms', 'BASIC EDUCATION UNIT', '6', $enterYear);

        $gradSchoolForms = count_school_forms('forms', 'GRADUATE SCHOOL', $enterYear);
        $gradSchoolPendingForms = count_school_specific_forms('forms', 'GRADUATE SCHOOL', '0', $enterYear);
        $gradSchoolInProcessForms = count_school_specific_inprocess('forms', 'GRADUATE SCHOOL', '1', '2', '3', $enterYear);
        $gradSchoolArchivedForms = count_school_specific_forms('forms', 'GRADUATE SCHOOL', '6', $enterYear);

        $totalForms = count_total_forms($enterYear);
        $pendingForms = count_pending_forms($enterYear);
        $inProcessForms = count_inProcess_forms($enterYear);
        $archivedForms = count_archived_forms($enterYear);


        //data for forms rquested per month
        $jan = count_forms_month($enterYear, 1);
        $feb = count_forms_month($enterYear, 2);
        $mar = count_forms_month($enterYear, 3);
        $apr = count_forms_month($enterYear, 4);
        $may = count_forms_month($enterYear, 5);
        $jun = count_forms_month($enterYear, 6);
        $jul = count_forms_month($enterYear, 7);
        $aug = count_forms_month($enterYear, 8);
        $sep = count_forms_month($enterYear, 9); 
        $oct = count_forms_month($enterYear, 10);
        $nov = count_forms_month($enterYear, 11);
        $dec = count_forms_month($enterYear, 12);

            //data for most requested forms
        $diploma = count_by_forms("Diploma", $enterYear);
        $tor = count_by_forms("Transcript of records", $enterYear);
        $form137 = count_by_forms("Form137A", $enterYear);
        $enrollment = count_by_forms("Certificate of Enrollment", $enterYear);
        $grades = count_by_forms("Certificate of Grades", $enterYear);
        $gwa = count_by_forms("Certificate of GWA", $enterYear);
        $graduation = count_by_forms("Certificate of Graduation", $enterYear);
        $english = count_by_forms("Certificate of English as Medium of Instruction", $enterYear);
        $units = count_by_forms("Certificate of Units Earned", $enterYear);
        $truecopy = count_by_forms("Certified True Copy of Documents (TOR/Diploma)", $enterYear); 
        $coursedec = count_by_forms("Course Description", $enterYear);
        $cav = count_by_forms("Certification, Authentication and Verification", $enterYear);
        $transcredd = count_by_forms("Transfer credentials", $enterYear);



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
                    <h6 class="col-6 m-0 font-weight-bold text-dark">Forms Requested per Month</h6>
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
        <div class="row mb-3 mt-5">
        <div class="col-12">
            <div class="card shadow m`b-2">
                <div class="card-header py-6 col-12" >
                    <h6 class="col-6 m-0 font-weight-bold text-dark">Most Requested Forms</h6>
                    </h6>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="myFormsAreaChart" width="100%"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
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
    var ctx = document.getElementById("myFormsAreaChart");
    var myLineChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Diploma", "CAV", "Form137A", "TOR", "Enrollment", "Grades", "GWA", "Units Earned",
        "Course Description",  "Transfer credentials", "Graduation",
        "English as Medium of Instruction",  "True Copy of Documents(TOR/Diploma)"
        ],
        datasets: [{
        label: "Requests",
        lineTension: 0.3,
        backgroundColor: "rgb(255, 0, 255)",
        borderColor: "rgba(255, 255, 225, 225)",
        pointRadius: 3,
        pointBackgroundColor: "rgba(78, 115, 223, 1)",
        pointBorderColor: "rgba(78, 115, 223, 1)",
        pointHoverRadius: 3,
        pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
        pointHoverBorderColor: "rgba(78, 115, 223, 1)",
        pointHitRadius: 10,
        pointBorderWidth: 2,
        data: [<?php echo $diploma ?>, <?php echo $cav ?>, <?php echo $form137 ?>, <?php echo $tor ?>, <?php echo $enrollment ?>, <?php echo $grades ?>, 
        <?php echo $gwa ?>, <?php echo $units ?>, <?php echo $coursedec ?>, <?php echo $transcredd ?>, <?php echo $graduation ?>, <?php echo $english ?>,  <?php echo $truecopy ?>],
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
