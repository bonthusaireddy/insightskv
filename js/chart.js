// Bar chart
var ctxL = document.getElementById("barChart").getContext('2d');
var myLineChart = new Chart(ctxL, {
  type: 'bar',
  data: {
    labels: ["January", "February", "March", "April", "May", "June", ],
    datasets: [
      {
        label: "Project Revenue V/S Vendor Expense",
        data: [3, 5, 6, 5, 1, 5, ],
        backgroundColor: ["red", "blue","orange","red", "blue","orange"],
        borderWidth: 0,
      }
    ]
  },
  options: {
    responsive: true,
    legend: {
      display: true,
    },
    tooltips: {
      intersect: false,
      mode: 'index'
    },
    scales: {
      xAxes: [{
        stacked: true,
        gridLines: {
          display: false,
        },

        ticks: {
          fontColor: 'rgba(0,0,0, 0.5)',
        }
      }],
      yAxes: [{
        stacked: true,
        gridLines: {
          borderDash: [2],
          drawBorder: false,
          zeroLineColor: "rgba(0,0,0,0)",
          zeroLineBorderDash: [2],
          zeroLineBorderDashOffset: [2]
        },
        ticks: {
          fontColor: 'rgba(0,0,0, 0.5)'
        }
      }]
    }
  }
});

//Hide Show Di