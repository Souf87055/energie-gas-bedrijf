var xValues = ["Januari","Februari","Maart","April","Mei","Juni","Juli","Augustus","September","Oktober","November","December"];

new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{ 
      data: gasdata,
      borderColor: "red",
      fill: false
    }, { 
      data: energiedata,
      borderColor: "green",
      fill: false
    }] 
  },
  options: {
    legend: {display: false}
  }
});

var xValues = ["Januari","Februari","Maart","April","Mei","Juni","Juli","Augustus","September","Oktober","November","December"];

new Chart("myChart2", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{ 
      data: gasdata2,
      borderColor: "red",
      fill: false
    }, { 
      data: energiedata2,
      borderColor: "green",
      fill: false
    }] 
  },
  options: {
    legend: {display: false}
  }
});

var xValues = ["Januari","Februari","Maart","April","Mei","Juni","Juli","Augustus","September","Oktober","November","December"];

new Chart("myChart3", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{ 
      data: gasdata3,
      borderColor: "red",
      fill: false
    }, { 
      data: energiedata3,
      borderColor: "green",
      fill: false
    }] 
  },
  options: {
    legend: {display: false}
  }
});







