<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <title>Charts</title>
</head>
<body>
  <div class="container">
    <div class="row mb-3">
      <div class="col-12" >
          <div class="card shadow mb-2">
              <div class="card-body">
                  <div class="chart-area">
                      <canvas id="myChart" width="100%"></canvas>
                  </div>
              </div>
          </div>
      </div>
  </div>
      <!-- end Area Chart -->

  <!-- start Pie Chart -->
<!-- <div class="row mb-3">
  <div class="col-7 mr-4">
      <div class="card shadow mb-2">
          <div class="card-body">
              <canvas id="myPieChart" width="100%" height="41"></canvas>
          </div>
      </div>
  </div>
  </div> -->

  <script>
    let myChart = document.getElementById('myChart').getContext('2d');

    // Global Options
    Chart.defaults.global.defaultFontFamily = 'Lato';
    Chart.defaults.global.defaultFontSize = 18;
    Chart.defaults.global.defaultFontColor = '#777';

    let massPopChart = new Chart(myChart, {
      type:'bar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels:['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June'],
        datasets:[{
          label:'Price',
          data:[
            15000,
            10000,
            9000,
            25000,
            13000,
            20000
          ],
          //backgroundColor:'green',
          backgroundColor:[
            'rgba(255, 99, 132, 0.6)',
            'rgba(54, 162, 235, 0.6)',
            'rgba(255, 206, 86, 0.6)',
            'rgba(75, 192, 192, 0.6)',
            'rgba(153, 102, 255, 0.6)',
            'rgba(255, 159, 64, 0.6)',
            'rgba(255, 99, 132, 0.6)'
          ],
          borderWidth:2,
          borderColor:'#777',
          hoverBorderWidth:3,
          hoverBorderColor:'#000'
        }]
      },
      options:{
        title:{
          display:true,
          text:'Price of Product A',
          fontSize:25
        },
        legend:{
          display:false,
          position:'top',
          labels:{
            fontColor:'#000'
          }
        },
        layout:{
          padding:{
            left:50,
            right:0,
            bottom:0,
            top:0
          }
        },
        tooltips:{
          enabled:true
        }
      }
    });

    // Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    // Chart.defaults.global.defaultFontColor = '#292b2c';
    
    // // Pie Chart Example
    // let myPieChart = document.getElementById('myPieChart').getContext('2d');
    // let PieChart = new Chart(myPieChart, {
    // type: 'horizontalBar',
    // data: {
    //     labels: ["Jan", "Feb", "Mar", "Apr", "May", "June", ],
    //     datasets: [{
    //     data: 
    //     [
    //     15000,
    //     10000,
    //     9000,
    //     25000,
    //     13000,
    //     20000
    //     ],
    //     backgroundColor: [
    //         'rgba(255, 99, 132, 0.6)',
    //         'rgba(54, 162, 235, 0.6)',
    //         'rgba(255, 206, 86, 0.6)',
    //         'rgba(75, 192, 192, 0.6)',
    //         'rgba(153, 102, 255, 0.6)',
    //         'rgba(255, 159, 64, 0.6)',
    //         'rgba(255, 99, 132, 0.6)'
    //       ],
    //       borderWidth:2,
    //       borderColor:'#777',
    //       hoverBorderWidth:3,
    //       hoverBorderColor:'#000'
    //     }],
    // },
    // options:{
    //     title:{
    //       display:true,
    //       text:'Price of Product B',
    //       fontSize:25
    //     },
    //     legend:{
    //       display:false,
    //       position:'top',
    //       labels:{
    //         fontColor:'#000'
    //       }
    //     },
    //     layout:{
    //       padding:{
    //         left:50,
    //         right:0,
    //         bottom:0,
    //         top:0
    //       }
    //     },
    //     tooltips:{
    //       enabled:true
    //     }
    //   }
    // });
  </script>
</body>
</html>