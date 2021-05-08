<?php 

include "header.php";

?>;



<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">HOMEPAGE</h1>
  
</div>
<div class="row">
  <div class="col-lg-6" >
    <!-- Area Chart -->
    <div class="card shadow mb-4">
      <div class="card-header py-3" >
          <h6 class="m-0 font-weight-bold text-primary">Forms Requested per Month</h6>
      </div>
      <div class="card-body">
          <div class="chart-area">
              <canvas id="myAreaChart"></canvas>
          </div>
      </div>
    </div>
  </div>
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

<!-- Content Row -->
<!--<div class="row">

   Earnings (Monthly) Card Example -->
  <!-- <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Students</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-calendar fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div> -->

 

  <!-- Pending Requests Card Example -->
  <!-- <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Requests</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-comments fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->

<script src="template/https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
<script src="template/https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/demo/chart-pie-demo.js"></script>
<script src="js/demo/chart-area-demo.js"></script>


<script>
  function idleLogout() {
      var t;
      window.onload = resetTimer;
      window.onmousemove = resetTimer;
      window.onmousedown = resetTimer;  // catches touchscreen presses as well      
      window.ontouchstart = resetTimer; // catches touchscreen swipes as well 
      window.onclick = resetTimer;      // catches touchpad clicks as well
      window.onkeydown = resetTimer;   
      window.addEventListener('scroll', resetTimer, true); // improved; see comments

      function yourFunction() {
        window.alert('You were inactive for 5 minutes. Please log in again')
        window.location.href = 'logout.php';
      }

      function resetTimer() {
          clearTimeout(t);
          t = setTimeout(yourFunction, 5000);  // time is in milliseconds
      }
  }
  idleLogout();
</script>