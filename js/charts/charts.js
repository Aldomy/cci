google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ['Year', 'Sales', 'Expenses'],
    ['2004',  1000,      400],
    ['2005',  1170,      460],
    ['2006',  660,       1120],
    ['2007',  1030,      540]
  ]);

  var options = {
    'title': 'Company Performance',
    'curveType': 'function',
    'legend': { position: 'bottom' },
    'chartArea':{left:40,top:"5%",width:"100%",height:"90%"}

  };

  var chart1 = new google.visualization.LineChart(document.getElementById('curve_chart1'));

  chart1.draw(data, options);

  var chart2 = new google.visualization.LineChart(document.getElementById('curve_chart2'));

  chart2.draw(data, options);

  var chart3 = new google.visualization.LineChart(document.getElementById('curve_chart3'));

  chart3.draw(data, options);

}



