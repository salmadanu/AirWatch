<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- Sesuaiin html ke blade --}}
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">


    <!-- Icon Font Awesome -->
    <script src="https://kit.fontawesome.com/034a66e8b9.js" crossorigin="anonymous"></script>

    <title>AIRWATCH</title>
  </head>
  <body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg py-0 fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar nav-link active logo" href="#page-top">AIRWATCH</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
              <li class="navbar-text nav-item">
                <a class="nav-link active nav__icon" aria-current="page" href="#">
                  <i class="fa-solid fa-house"></i>
                </a>
              </li>
              <li class="navbar-text nav-item">
                <a class="nav-link active nav__icon" aria-current="page" href="#">
                  <i class="fa-solid fa-medal"></i>
                </a>
              </li>
              <li class="navbar-text nav-item">
                <a class="nav-link active nav__icon" aria-current="page" href="request 1.html">
                  <i class="fa-solid fa-user-plus"></i>
                </a>
              </li>
              <li class="navbar-text nav-item">
                <a class="nav-link active nav__icon" aria-current="page" href="#">
                  <i class="fa-solid fa-gear"></i>
                </a>
              </li>
              <li class="navbar-text nav-item">
                <a class="nav-link active nav__icon" aria-current="page" href="#">
                  <i class="fa-solid fa-bell"></i>
                </a>
              </li>
            </ul>
            <ul class="navbar-nav">
              <li class="navbar-text nav-item">
                <a class="nav-link nav__text" href="#">PT Gemastik 1 - Pabrik A
                  <img class="profil__pict nav__text" src="{{ asset('img/profil.jpeg') }}" alt="Avatar">
                </a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <!-- AQI -->
    <section>
      <div class="container" style="padding-top: 80px;">
        <div class="row justify-content-center">
          <div class="row">

            <!-- AQI INDOOR -->
            <div class="col">
              <h3 style="text-align: center;">INDOOR</h3>
              <div class="row" style="margin-bottom: 20px;">
                <div class="col d-flex justify-content-center align-items-center" style="position: relative; padding-left: 60px;">
                  <i class="fa-solid fa-mask-face fa-3x" style="color: red; position: absolute;"></i>
                  <i class="fa-regular fa-circle fa-6x" style="color: red; position: absolute;"></i>
                </div>
                <div class="col" style="text-align: center; padding-right: 100px;">
                  <p style="margin: 0px; color: red;">AQI: 165</p>
                  <h4 style="margin: 0px; color: red;">HAZARDOUS</h4>
                  <p style="margin: 0px; font-weight: bold;">March 29th, 2023</p>
                  <P style="margin: 0px; font-weight: bold;">8 PM</P>
                </div>
              </div>

              <!-- ZAT UDARA -->
              <div class="row justify-content-center" style="text-align: center;">
                <div class="row">
                  <div class="col">
                    <h5 style="margin: 0px; color: red;">120</h5>
                    <p style="font-size: small; font-weight: bold; color: gray">SO2</p>
                  </div>
                  <div class="vertical__line_kecil"></div>
                  <div class="col">
                    <h5 style="margin: 0px; color: green;">1200</h5>
                    <p style="font-size: small; font-weight: bold; color: gray">CO</p>
                  </div>
                  <div class="vertical__line_kecil"></div>
                  <div class="col">
                    <h5 style="margin: 0px; color: red;">30</h5>
                    <p style="font-size: small; font-weight: bold; color: gray">NO2</p>
                  </div>
                  <div class="vertical__line_kecil"></div>
                  <div class="col">
                    <h5 style="margin: 0px; color: red;">78</h5>
                    <p style="font-size: small; font-weight: bold; color: gray">O3</p>
                  </div>
                  <div class="vertical__line_kecil"></div>
                  <div class="col">
                    <h5 style="margin: 0px; color: red;">90</h5>
                    <p style="font-size: small; font-weight: bold; color: gray">PM2.5</p>
                  </div>
                  <div class="vertical__line_kecil"></div>
                  <div class="col">
                    <h5 style="margin: 0px; color: red;">70</h5>
                    <p style="font-size: small; font-weight: bold; color: gray">PM10</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="vertical__line"></div>

            <!-- AQI OUTDOOR -->
            <div class="col">
              <h3 style="text-align: center;">OUTDOOR</h3>
              <div class="row" style="margin-bottom: 20px;">
                <div class="col d-flex justify-content-center align-items-center" style="position: relative; padding-left: 60px;">
                  <i class="fa-solid fa-leaf fa-3x" style="color: green; position: absolute;"></i>
                  <i class="fa-regular fa-circle fa-6x" style="color: green; position: absolute;"></i>
                </div>
                <div class="col" style="text-align: center; padding-right: 100px;">
                  <p style="margin: 0px; color: green;">AQI: 17</p>
                  <h4 style="margin: 0px; color: green;">HEALTHY</h4>
                  <p style="margin: 0px; font-weight: bold;">March 29th, 2023</p>
                  <P style="margin: 0px; font-weight: bold;">8 PM</P>
                </div>
              </div>

              <!-- ZAT UDARA -->
              <div class="row justify-content-center" style="text-align: center;">
                <div class="row">
                  <div class="col">
                    <h5 style="margin: 0px; color: green;">20</h5>
                    <p style="font-size: small; font-weight: bold; color: gray">SO2</p>
                  </div>
                  <div class="vertical__line_kecil"></div>
                  <div class="col">
                    <h5 style="margin: 0px; color: green;">1150</h5>
                    <p style="font-size: small; font-weight: bold; color: gray">CO</p>
                  </div>
                  <div class="vertical__line_kecil"></div>
                  <div class="col">
                    <h5 style="margin: 0px; color: green;">4</h5>
                    <p style="font-size: small; font-weight: bold; color: gray">NO2</p>
                  </div>
                  <div class="vertical__line_kecil"></div>
                  <div class="col">
                    <h5 style="margin: 0px; color: green;">40</h5>
                    <p style="font-size: small; font-weight: bold; color: gray">O3</p>
                  </div>
                  <div class="vertical__line_kecil"></div>
                  <div class="col">
                    <h5 style="margin: 0px; color: green;">3</h5>
                    <p style="font-size: small; font-weight: bold; color: gray">PM2.5</p>
                  </div>
                  <div class="vertical__line_kecil"></div>
                  <div class="col">
                    <h5 style="margin: 0px; color: green;">10</h5>
                    <p style="font-size: small; font-weight: bold; color: gray">PM10</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    {{-- Chart JS Script --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
  
<!-- HTML elements for chart containers -->
<div id="chart-container-aqi">
  <canvas id="aqi-chart" width="400" height="200"></canvas>
</div>

<div id="chart-container-so2">
  <canvas id="so2-chart" width="400" height="200"></canvas>
</div>

<!-- Add containers for other parameters with similar structure -->
<div id="chart-container-co">
  <canvas id="co-chart" width="400" height="200"></canvas>
</div>

<div id="chart-container-no2">
  <canvas id="no2-chart" width="400" height="200"></canvas>
</div>

<div id="chart-container-o3">
  <canvas id="o3-chart" width="400" height="200"></canvas>
</div>

<div id="chart-container-pm25">
  <canvas id="pm25-chart" width="400" height="200"></canvas>
</div>

<div id="chart-container-pm10">
  <canvas id="pm10-chart" width="400" height="200"></canvas>
</div>


{{-- <!-- Add containers for other parameters with similar structure -->

</div>

<script>
  function showChart(chartId) {
  // Hide all chart containers
  document.querySelectorAll('.chart-container canvas').forEach(function(container) {
    container.style.display = 'none';
  });

  // Show the selected chart container
  document.getElementById(`chart-container-${chartId}`).style.display = 'block';

  // Update the chart when showing
  if (chartId === 'aqi-chart') {
    updateChart('aqi-chart', {!! json_encode($aqiData) !!});
  } else if (chartId === 'so2-chart') {
    updateChart('so2-chart', {!! json_encode($so2Data) !!});
  }
  // Add similar conditions for other parameters
}

  // Function to update the chart
  function updateChart(chartId, data) {
      var ctx = document.getElementById(chartId).getContext('2d');
      new Chart(ctx, {
          type: 'line',
          data: {
              labels: [...Array(data.length).keys()], // Hours
              datasets: [{
                  label: chartId,
                  data: data, // Air quality levels
                  borderColor: 'rgba(75, 192, 192, 1)',
                  borderWidth: 1,
                  fill: false,
              }]
          },
          options: {
              scales: {
                  x: {
                      title: {
                          display: true,
                          text: 'Air Quality Level'
                      }
                  },
                  y: {
                      title: {
                          display: true,
                          text: 'Hours'
                      }
                  }
              }
          }
      });
  }

  // Initially show the AQI chart
  showChart('aqi-chart');
</script> --}}



  </body>
</html>