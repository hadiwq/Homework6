<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>
  </body>
</html>

<html>
<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
<body>

<div id="myPlot" style="width:100%;max-width:700px"></div>

<script>
var xArray = [50,60,70,80,90,100,110,120,130,140,150];
var yArray = [7,8,8,9,9,9,10,11,14,14,15];

// Define Data
var data = [{
  x:xArray,
  y:yArray,
  mode:"markers"
}];

// Define Layout
var layout = {
  xaxis: {range: [40, 160], title: "Square Meters"},
  yaxis: {range: [5, 16], title: "Price in Millions"},  
  title: "House Prices vs. Size"
};

// Display using Plotly
Plotly.newPlot("myPlot", data, layout);
</script>

  
  <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
<body>

<div id="myPlot2" style="width:100%;max-width:700px"></div>

<script>
var xArray = [50,60,70,80,90,100,110,120,130,140,150];
var yArray = [7,8,8,9,9,9,10,11,14,14,15];

// Define Data
var data = [{
  x: xArray,
  y: yArray,
  mode:"lines"
}];

// Define Layout
var layout = {
  xaxis: {range: [40, 160], title: "Square Meters"},
  yaxis: {range: [5, 16], title: "Price in Millions"},  
  title: "House Prices vs. Size"
};

// Display using Plotly
Plotly.newPlot("myPlot2", data, layout);
</script>
  
  <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>

<body>
<div id="myPlot3" style="width:100%;max-width:700px"></div>

<script>
let exp = "x + 17";

// Generate values
const xValues = [];
const yValues = [];
for (let x = 0; x <= 10; x += 1) {
  xValues.push(x);
  yValues.push(eval(exp));
}

// Define Data
const data = [{
  x: xValues,
  y: yValues,
  mode:"lines"
}];

// Define Layout
const layout = {title: "y = " + exp};

// Display using Plotly
Plotly.newPlot("myPlot3", data, layout);
</script>
  
  <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
<body>

<div id="myPlot4" style="width:100%;max-width:700px"></div>

<script>
var xArray = ["Italy", "France", "Spain", "USA", "Argentina"];
var yArray = [55, 49, 44, 24, 15];

var data = [{
  x:xArray,
  y:yArray,
  type:"bar"
}];

var layout = {title:"World Wide Wine Production"};

Plotly.newPlot("myPlot4", data, layout);
</script>

  <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
<body>

<div id="myPlot5" style="width:100%;max-width:700px"></div>

<script>
var xArray = ["Italy", "France", "Spain", "USA", "Argentina"];
var yArray = [55, 49, 44, 24, 15];

var layout = {title:"World Wide Wine Production"};

var data = [{labels:xArray, values:yArray, type:"pie"}];

Plotly.newPlot("myPlot5", data, layout);
</script>
  
</body>
</html>

