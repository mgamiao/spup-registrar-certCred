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
      data: [1, 2, 6, 4],
      backgroundColor: ['#007bff', '#dc3545', '#FF69B4', '#28a745'],
    }],
  },
});
