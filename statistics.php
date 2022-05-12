<?php 
    include "header.php";
?>


<div class="container-fluid">

  <!-- Page Heading -->
  <div class="py-3 bordercolor mb-5" style="border:none;">
    <h1 class="m-0 headerblacked">STATISTICS</h1>
  </div>
 
    



  <div class="row mb-5" style="width: 80%; margin: auto;">


  <div class="col-sm-4 text-center">
      <div class="card">
        <div class="card-body colorcb">
          <img src="img/dayCalendar.png" style= "width: 20%; align-items: center;">
          <h5 class="card-title mt-3">SPECIFIC DAY STATISTICS</h5>
          <p class="card-text">Enter a specific year, month, and day for its statistics</p>
          <p>
            <form action="statistics_daily.php" method="post">
                <label>Year: </label>
                <input type="number" class="statisticsYear" id="enterYear" name="enterYear" autocomplete="off" required>
                <label>Month: </label>
                <select name="enterMonth" id="enterMonth">
                    <option value="1">January</option>
                    <option value="2">February</option>
                    <option value="3">March</option>
                    <option value="4">April</option>
                    <option value="5">May</option>
                    <option value="6">June</option>
                    <option value="7">July</option>
                    <option value="8">August</option>
                    <option value="9">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
                <label>Day: </label>
                <input type="number" class="statisticsDay" id="enterDay" name="enterDay" autocomplete="off" required>
          </p>
                  <!-- <input type="number" id="enterMonth" name="enterMonth" min=1 max=12 autocomplete="off" required></p> -->
                  <input type="submit" name="submit" value="Submit"  class="userbtn">
              </form>
          </p>
        </div>
      </div>
    </div>

    <div class="col-sm-4 text-center">
      <div class="card">
        <div class="card-body colorcb">
          <img src="img/monthCalendar.png" style= "width: 20%; align-items: center;">
          <h5 class="card-title mt-3">SPECIFIC MONTH STATISTICS</h5>
          <p class="card-text">Enter a specific year and month for its statistics</p>
          <p>
              <form action="statistics_monthly.php" method="post">
                  <label>Year: </label>
                  <input type="number" class="statisticsYear" id="enterYear" name="enterYear" autocomplete="off" required>
                  <label>Month: </label>
                  <select name="enterMonth" id="enterMonth">
                      <option value="1">January</option>
                      <option value="2">February</option>
                      <option value="3">March</option>
                      <option value="4">April</option>
                      <option value="5">May</option>
                      <option value="6">June</option>
                      <option value="7">July</option>
                      <option value="8">August</option>
                      <option value="9">September</option>
                      <option value="10">October</option>
                      <option value="11">November</option>
                      <option value="12">December</option>
                  </select></p>
                  <!-- <input type="number" id="enterMonth" name="enterMonth" min=1 max=12 autocomplete="off" required></p> -->
                  <input type="submit" name="submit" value="Submit"  class="userbtn">
              </form>
          </p>
        </div>
      </div>
    </div>

    <div class="col-sm-4 text-center">
      <div class="card">
        <div class="card-body colorcb">
          <img src="img/yearCalendar.png" style= "width: 20%; align-items: center; ">
          <h5 class="card-title mt-3">SPECIFIC YEAR STATISTICS</h5>
          <p class="card-text">Enter a specific year for its statistics</p>
          <p>
              <form action="statistics_yearly.php" method="post">
              <label>Year: </label>
                  <input type="number" class="statisticsYear" id="enterYear" name="enterYear" autocomplete="off" required></p>
                  <input type="submit" name="submit" value="Submit"  class="userbtn">
              </form>
          </p>
        </div>
      </div>
    </div>
  
    
  </div>
</div>

<?php include "footeradmin.php" ?>