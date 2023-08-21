<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Airwatch</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <!-- stylenya mmf blm tw gmn cara masukin di cssny -->
    <style>
      .table-container {
        max-height: 150px; /* Set the maximum height of the container */
        overflow-y: auto; /* Add a vertical scrollbar if content exceeds max-height */
      }
      /* Custom CSS to center the map */
      .map-container {
        display: flex;
        justify-content: center;
      }
      
      .offset-text {
        padding-left: 80px; /* Adjust the padding as needed */
      }

      /* Set map width to 80% */
      #map {
        width: 80%;
      }
    </style>
  </head>

  <!-- Peta sudah jadi nich tapi untuk input lebih dari 1 lokasi blm tw gmn -->
  <div class="container mt-5">
    <div class="map-area">
      <div class="map-container">
        <div id="map" style="height: 300px;"></div>
      </div>
    </div>
  </div>

  <script>
    // Initialize the map
    var map = L.map('map').setView([-6.1702, 106.6403], 14);

    // Add OpenStreetMap tile layer
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 19,
    }).addTo(map);

    // Add markers to the map
    var markers = [
      L.marker([-6.1702, 106.6403]).addTo(map),
      L.marker([-6.1711, 106.6411]).addTo(map)
      // Add more markers as needed
    ];

    // Bind popups to markers
    markers[0].bindPopup('This is location 1');
    // Bind popups for other markers
  </script>


    <!-- penulisan rank -->
    <body>
        <h1 class="offset-text">Rank</h1>
    </body>
    
    <!-- penulisan tabel rank -->
    <div class="container mt-5">
      <div class="table-container">
        <table class="table table-bordered">
          <thead class="bg-light">
            <tr>
              <th>Rank</th>
              <th>Company's Name</th>
              <th>Status</th>
              <!-- Add more header columns as needed -->
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>PT Gemastik 1</td>
              <td>+1</td>
            </tr>
            <tr>
              <td>2</td>
              <td>PT Gemastik 1</td>
              <td>+1</td>
            </tr>
            <tr>
              <td>3</td>
              <td>PT Gemastik 1</td>
              <td>+1</td>
            </tr>
            <tr>
              <td>4</td>
              <td>PT Gemastik 1</td>
              <td>+1</td>
            </tr>
            <tr>
              <td>5</td>
              <td>PT Gemastik 1</td>
              <td>+1</td>
            </tr>
            <tr>
              <td>6</td>
              <td>PT Gemastik 1</td>
              <td>+1</td>
            </tr>
            <tr>
              <td>7</td>
              <td>PT Gemastik 1</td>
              <td>+1</td>
            </tr>
            <tr>
              <td>8</td>
              <td>PT Gemastik 1</td>
              <td>+1</td>
            </tr>
            <tr>
              <td>9</td>
              <td>PT Gemastik 1</td>
              <td>+1</td>
            </tr>
            <tr>
              <td>10</td>
              <td>PT Gemastik 1</td>
              <td>+1</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
</html>

