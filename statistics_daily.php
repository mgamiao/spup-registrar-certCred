<?php 
    include "header.php";
?>


<div class="container-fluid">

  <!-- Page Heading -->
  <div class="py-3 bordercolor mb-5" style="border:none;">
    <h1 class="m-0 headerblacked">STATISTICS</h1>
  </div>


    
    <h5 style="position:relative;">
        Showing you a day statistics of <b><?php
        $enterYear = $_POST['enterYear']; 
        $enterMonth = $_POST['enterMonth']; 
        $enterDay = $_POST['enterDay'];
        echo "Year: " . $enterYear . " " . "Month: " . "0".$enterMonth . " " . "Day: " . $enterDay;
        ?></b>
        <a href="statistics.php" class="d-none d-lg-inline-block btn btn-lg btn-warning shadow-sm" style="float:right;">Go Back</a>
    </h5>
    <?php

        $sasteForms = count_school_forms_day('forms', 'SCHOOL OF ARTS, SCIENCES AND TEACHER EDUCATION', $enterYear, $enterMonth, $enterDay);
        $sastePendingForms = count_school_specific_forms_day('forms', 'SCHOOL OF ARTS, SCIENCES AND TEACHER EDUCATION', '0', $enterYear, $enterMonth, $enterDay);
        $sasteInProcessForms = count_school_inprocess_forms_day('forms', 'SCHOOL OF ARTS, SCIENCES AND TEACHER EDUCATION', '1', '2',  $enterYear, $enterMonth, $enterDay);
        $sasteArchivedForms = count_school_specific_forms_day('forms', 'SCHOOL OF ARTS, SCIENCES AND TEACHER EDUCATION', '5', $enterYear, $enterMonth, $enterDay);

        $snahsForms = count_school_forms_day('forms', 'SCHOOL OF NURSING AND ALLIED HEALTH SCIENCES', $enterYear, $enterMonth, $enterDay);
        $snahsPendingForms = count_school_specific_forms_day('forms', 'SCHOOL OF NURSING AND ALLIED HEALTH SCIENCES', '0', $enterYear, $enterMonth, $enterDay);
        $snahsInProcessForms = count_school_inprocess_forms_day('forms', 'SCHOOL OF NURSING AND ALLIED HEALTH SCIENCES', '1', '2', $enterYear, $enterMonth, $enterDay);
        $snahsArchivedForms = count_school_specific_forms_day('forms', 'SCHOOL OF NURSING AND ALLIED HEALTH SCIENCES', '5', $enterYear, $enterMonth, $enterDay);

        $siteForms = count_school_forms_day('forms', 'SCHOOL OF INFORMATION TECHNOLOGY AND ENGINEERING', $enterYear, $enterMonth, $enterDay);
        $sitePendingForms = count_school_specific_forms_day('forms', 'SCHOOL OF INFORMATION TECHNOLOGY AND ENGINEERING', '0', $enterYear, $enterMonth, $enterDay);
        $siteInProcessForms = count_school_inprocess_forms_day('forms', 'SCHOOL OF INFORMATION TECHNOLOGY AND ENGINEERING', '1', '2', $enterYear, $enterMonth, $enterDay);
        $siteArchivedForms = count_school_specific_forms_day('forms', 'SCHOOL OF INFORMATION TECHNOLOGY AND ENGINEERING', '5', $enterYear, $enterMonth, $enterDay);

        $sbahmForms = count_school_forms_day('forms', 'SCHOOL OF BUSINESS, ACCOUNTANCY AND HOSPITALITY MANAGEMENT', $enterYear, $enterMonth, $enterDay);
        $sbahmPendingForms = count_school_specific_forms_day('forms', 'SCHOOL OF BUSINESS, ACCOUNTANCY AND HOSPITALITY MANAGEMENT', '0', $enterYear, $enterMonth, $enterDay);
        $sbahmInProcessForms = count_school_inprocess_forms_day('forms', 'SCHOOL OF BUSINESS, ACCOUNTANCY AND HOSPITALITY MANAGEMENT', '1', '2', $enterYear, $enterMonth, $enterDay);
        $sbahmArchivedForms = count_school_specific_forms_day('forms', 'SCHOOL OF BUSINESS, ACCOUNTANCY AND HOSPITALITY MANAGEMENT', '5', $enterYear, $enterMonth, $enterDay);

        $somForms = count_school_forms_day('forms', 'SCHOOL OF MEDICINE', $enterYear, $enterMonth, $enterDay);
        $somPendingForms = count_school_specific_forms_day('forms', 'SCHOOL OF MEDICINE', '0', $enterYear, $enterMonth, $enterDay);
        $somInProcessForms = count_school_inprocess_forms_day('forms', 'SCHOOL OF MEDICINE', '1', '2', $enterYear, $enterMonth, $enterDay);
        $somArchivedForms = count_school_specific_forms_day('forms', 'SCHOOL OF MEDICINE', '5', $enterYear, $enterMonth, $enterDay);

        $beuForms = count_school_forms_day('forms', 'BASIC EDUCATION UNIT', $enterYear, $enterMonth, $enterDay);
        $beuPendingForms = count_school_specific_forms_day('forms', 'BASIC EDUCATION UNIT', '0', $enterYear, $enterMonth, $enterDay);
        $beuInProcessForms = count_school_inprocess_forms_day('forms', 'BASIC EDUCATION UNIT', '1', '2', $enterYear, $enterMonth, $enterDay);
        $beuArchivedForms = count_school_specific_forms_day('forms', 'BASIC EDUCATION UNIT', '5', $enterYear, $enterMonth, $enterDay);

        $gradSchoolForms = count_school_forms_day('forms', 'GRADUATE SCHOOL', $enterYear, $enterMonth, $enterDay);
        $gradSchoolPendingForms = count_school_specific_forms_day('forms', 'GRADUATE SCHOOL', '0', $enterYear, $enterMonth, $enterDay);
        $gradSchoolInProcessForms = count_school_inprocess_forms_day('forms', 'GRADUATE SCHOOL', '1', '2', $enterYear, $enterMonth, $enterDay);
        $gradSchoolArchivedForms = count_school_specific_forms_day('forms', 'GRADUATE SCHOOL', '5', $enterYear, $enterMonth, $enterDay);

        $totalForms = count_total_forms_day($enterYear, $enterMonth, $enterDay);
        $pendingForms = count_pending_forms_day($enterYear, $enterMonth, $enterDay);
        $inProcessForms = count_inProcess_forms_day($enterYear, $enterMonth, $enterDay);
        $archivedForms = count_archived_forms_day($enterYear, $enterMonth, $enterDay);


?>

    
    <!-- start Area Chart -->
    <div class="row mb-3 mt-5">
        <div class="col-12">
            <div class="card shadow mb-2">
                <div class="card-header py-6 col-12" >
                    <h6 class="col-6 m-0 font-weight-bold text-dark">Forms Requested for the Day</h6>
                </div>
                <div class="card-body bodyblacked">
                <div class="table-responsive" >
                    <table class="table table-striped" id="dataTable" width="100%" cellspacing="0" >
        
        <thead class="tableblacked">
        <tr>
            <td>Full Name</td>
            <td>School</td>
            <td>Type of Form</td>
            <td>Date Claimed</td>
            
        </tr>
        </thead>

        <tfoot class="tableblacked">
        <tr>
            <td>Full Name</td>
            <td>School</td>
            <td>Type of Form</td>
            <td>Date Claimed</td>
            

        </tr>
        </tfoot>

        <tbody class="bodyblacked">

    <?php
        $table_name = "forms";
        $year = $enterYear;
        $month = $enterMonth;
        $day = $enterDay;
        $sql = "SELECT * FROM $table_name WHERE `formYear` = '$year' AND `formMonth` = '$month' AND `formDay` = '$day'";
        $get_userData = custom_query($sql);

        foreach ($get_userData as $key => $row) {
            
            $id = $row['id'];
            $lastName = $row['lastname'] ;
            $firstName = $row['firstname'] ;
            $middleName = $row['middlename'] ;
            $formType = $row['form_type'];
            $dateReceived = $row['dateReceived'];
            $school = $row['school'];
            

    ?>
    
    <tr>
        <td><?= $firstName . " " . $middleName . " " . $lastName ?></td>
        <td><?= $school ?></td>
        <td><?= $formType ?></td>
        <td><?= $dateReceived ?></td>
        
        <?php } ?>
    </tr>


   
    </tbody>
</table>
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
    // Bar Chart start


    


    //Bar Chart end
    // Area Chart Example
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

<script src="template/vendor/jquery/jquery.min.js"></script>
    <!-- <script src="template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>   pag meron to ayaw gumana ng logout-->

    <!-- Core plugin JavaScript-->
    <script src="template/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="template/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="template/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="template/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="template/js/demo/datatables-demo.js"></script>
    
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