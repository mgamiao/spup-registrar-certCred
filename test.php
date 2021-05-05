<?php
    $var1=-10;
?>


<div style="width:50%; height:50%; margin: 0 auto;">
  <canvas id="myChart"></canvas>
</div>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<script>
    
    const labels = [
      'January',
      'February',
      'March',
      'April',
      'May',
      'June',
    ];
    const data = {
      labels: labels,
      datasets: [{
        label: 'My First dataset',
        backgroundColor: 'rgb(255, 99, 132)',
        borderColor: 'rgb(255, 99, 132)',
        data: [<?= $var1; ?>, 10, 5, 2, 20, 30, 45],
      }]
    };

    const config = {
      type: 'line',
      data,
      options: {}
    };

    var myChart = new Chart(
        document.getElementById('myChart'),
        config
      );
</script>



