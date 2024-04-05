<?php
session_start();
if (isset($_GET['movie_name'])) {
    $movie = $_GET['movie_name'];
    $seats = isset($_GET['seats']) ? $_GET['seats'] : null; // Check if 'seats' is set
    $_SESSION['movie_name'] = $movie;
    $_SESSION['seats'] = $seats;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Lato&display=swap');

* {
  box-sizing: border-box;
}

body {
  background-color: #eabdbd;
  color: #fff;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  font-family: 'Lato', sans-serif;
  margin: 0;
  overflow-y: scroll;
  height: 1300px;
}

.movie-container {
  margin: 20px 0;
}

.movie-container select {
  background-color: #fff;
  border: 0;
  border-radius: 5px;
  font-size: 14px;
  margin-left: 10px;
  padding: 5px 15px 5px 15px;
  -moz-appearance: none;
  -webkit-appearance: none;
  appearance: none;
}

.container {
  perspective: 1000px;
  margin-bottom: 30px;
}

.seat {
    background-color: #444451;
    height: 20px;
    width: 20px;
    margin: 3px;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
}

.seat.selected {
  background-color: #6feaf6;
}

.seat.occupied {
  background-color: #fff;
}

.seat:nth-of-type(2) {
  margin-right: 18px;
}

.seat:nth-last-of-type(2) {
  margin-left: 18px;
}

.seat:not(.occupied):hover {
  cursor: pointer;
  transform: scale(1.2);
}

.showcase .seat:not(.occupied):hover {
  cursor: default;
  transform: scale(1);
}

.showcase {
  background: rgba(0, 0, 0, 0.1);
  padding: 5px 10px;
  border-radius: 5px;
  color: #777;
  list-style-type: none;
  display: flex;
  justify-content: space-between;
}

.showcase li {
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 10px;
}

.showcase li small {
  margin-left: 2px;
}

.row {
  display: flex;
}

.screen {
  background-color: #fff;
  height: 70px;
  width: 100%;
  margin: 15px 0;
  transform: rotateX(-45deg);
  box-shadow: 0 3px 10px rgba(255, 255, 255, 0.7);
}

p.text {
  margin: 5px 0;
}

p.text span {
  color: #6feaf6;
}

.label-seat-space {
    margin-right: 10px; /* Adjust the margin as needed */
  }

.row.Club {
  justify-content: center; /* Center-align seats within the container */
  text-align: center; /* Center-align row label */
}

.container .row.Club {
  margin-bottom: 10px; /* Adjust the margin as needed for spacing */
}

.container .row.Club .label-seat-space {
  display: none; /* Hide the space between alphabet label and seats */
}

.row.balcony {
  justify-content: center; /* Center-align seats within the container */
  text-align: center; /* Center-align row label */
}

.container .row.balcony {
  margin-bottom: 10px; /* Adjust the margin as needed for spacing */
}

.container .row.balcony .label-seat-space {
  display: none; /* Hide the space between alphabet label and seats */
}

.row.Executive {
  justify-content: center; /* Center-align seats within the container */
  text-align: center; /* Center-align row label */
}

.container .row.Executive {
  margin-bottom: 10px; /* Adjust the margin as needed for spacing */
}

.container .row.Executive .label-seat-space {
  display: none; /* Hide the space between alphabet label and seats */
}

.row.Executive .seat.selected {
  background-color: #6feaf6; /* Change to the desired green color */
}


        </style>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="style.css" />
    <title>Movie Seat Booking</title>
  </head>
  <body>
    <div class="movie-container">
    <?php
echo "Number of Seats: " . $_SESSION['seats'];
?>

      <label>Pick a movie:</label>
      <select id="movie">
      <option value="10"><?php echo $_SESSION['movie'];?></option>
        <!-- <option value="12">Pindam (Rs 200)</option>
        <option value="8">Hii Nanna(Rs 160)</option>
        <option value="9">Extra Ordinary Man (Rs 180)</option>
        <option value="9">Sam Bahadur (Rs 120)</option> -->
      </select>
    </div>

    <ul class="showcase">
      <li>
        <div class="seat"></div>
        <small>N/A</small>
      </li>
      <li>
        <div class="seat selected"></div>
        <small>Selected</small>
      </li>
      <li>
        <div class="seat occupied"></div>
        <small>Occupied</small>
      </li>
    </ul>

    <div class="container">
      <div class="screen"></div>
      <hr style="width:100%;text-align:left;margin-left:0">
      <h4 style="color: #000;
    font-size: 1em;
    padding: 0.5%;">Rs.120 Economy</h4>
      <div class="row Balcony">
  <!-- Row A -->
  <div class="container" id="container">
  <?php
    // Use PHP to generate rows and seats
    $rows = 3; // Number of rows
    $seatsPerRow = 12; // Number of seats per row
    $firstCharCode = ord('A'); // ASCII code for 'A'

    for ($i = 0; $i < $rows; $i++) {
      echo '<div class="row balcony">';
      echo '<div class="row-label">' . chr($firstCharCode + $i) . '</div>'; // Generate alphabet labels

      // Add space or another HTML element (e.g., &nbsp;) between alphabet label and seats
      echo '<div class="label-seat-space"></div>';

      for ($j = 1; $j <= $seatsPerRow; $j++) {
        echo '<div class="seat">' . $j . '</div>'; // Generate seat numbers
      }

      echo '</div>';
    }
  ?>
</div>
</div>
    <hr style="width:100%;text-align:left;margin-left:0">
    <h4 style="color: #000;
    font-size: 1em;
    padding: 0.5%;">Rs.200 Elite</h4>
    <div class="row Club">
  <div class="container" id="container">
    <?php
      // Use PHP to generate rows and seats
      $rows = 4; // Number of rows
      $seatsPerRow = 20; // Number of seats per row
      $firstCharCode = ord('D'); // ASCII code for 'A'

      for ($i = 0; $i < $rows; $i++) {
        echo '<div class="row Club">';
        echo '<div class="row-label">' . chr($firstCharCode + $i) . '</div>'; // Generate alphabet labels

        // Add space or another HTML element (e.g., &nbsp;) between alphabet label and seats
        echo '<div class="label-seat-space"></div>';

        for ($j = 1; $j <= $seatsPerRow; $j++) {
          echo '<div class="seat">' . $j . '</div>'; // Generate seat numbers
        }

        echo '</div>';
      }
    ?>
  </div>
    </div>
    <?php
      // Use PHP to generate rows and seats
      $rows = 5; // Number of rows
      $seatsPerRow = 16; // Number of seats per row
      $firstCharCode = ord('H'); // ASCII code for 'A'

      for ($i = 0; $i < $rows; $i++) {
        echo '<div class="row Club">';
        echo '<div class="row-label">' . chr($firstCharCode + $i) . '</div>'; // Generate alphabet labels

        // Add space or another HTML element (e.g., &nbsp;) between alphabet label and seats
        echo '<div class="label-seat-space"></div>';

        for ($j = 1; $j <= $seatsPerRow; $j++) {
          echo '<div class="seat">' . $j . '</div>'; // Generate seat numbers
        }

        echo '</div>';
      }
    ?>
  </div>
    </div>
    <hr style="width:45%; text-align:left; margin-left:350px">
    <h4 style="    color: #000;
    font-size: 1em;
    padding: 0.5%;
    margin: 0px 0px 0px -421px;">Rs.295 Gold Class</h4>
    <div class="row Executive">
  <div class="container" id="container">
    <?php
      // Use PHP to generate rows and seats
      $rows = 2; // Number of rows
      $seatsPerRow = 20; // Number of seats per row
      $firstCharCode = ord('M'); // ASCII code for 'A'

      for ($i = 0; $i < $rows; $i++) {
        echo '<div class="row Executive">';
        echo '<div class="row-label">' . chr($firstCharCode + $i) . '</div>'; // Generate alphabet labels

        // Add space or another HTML element (e.g., &nbsp;) between alphabet label and seats
        echo '<div class="label-seat-space"></div>';

        for ($j = 1; $j <= $seatsPerRow; $j++) {
          echo '<div class="seat">' . $j . '</div>'; // Generate seat numbers
        }

        echo '</div>';
      }
    ?>
  </div>
    </div>
    <p class="text">
      You have selected <span id="count">0</span> seats for a price of ₹<span
        id="total"
        >0</span
      >
    </p>

    <script>
        const container = document.querySelector('.container');
const seats = document.querySelectorAll('.row .seat:not(.occupied)');
const count = document.getElementById('count');
const total = document.getElementById('total');
const movieSelect = document.getElementById('movie');

populateUI();

let ticketPrice = +movieSelect.value;

// Save selected movie index and price
function setMovieData(movieIndex, moviePrice) {
  localStorage.setItem('selectedMovieIndex', movieIndex);
  localStorage.setItem('selectedMoviePrice', moviePrice);
}

// Update total and count
function updateSelectedCount() {
  const selectedSeats = document.querySelectorAll('.row .seat.selected');

  const seatsIndex = [...selectedSeats].map(seat => [...seats].indexOf(seat));

  localStorage.setItem('selectedSeats', JSON.stringify(seatsIndex));

  const selectedSeatsCount = selectedSeats.length;

  count.innerText = selectedSeatsCount;
  total.innerText = selectedSeatsCount * ticketPrice;
}

// Get data from localstorage and populate UI
function populateUI() {
  const selectedSeats = JSON.parse(localStorage.getItem('selectedSeats'));

  if (selectedSeats !== null && selectedSeats.length > 0) {
    seats.forEach((seat, index) => {
      if (selectedSeats.indexOf(index) > -1) {
        seat.classList.add('selected');
      }
    });
  }

  const selectedMovieIndex = localStorage.getItem('selectedMovieIndex');

  if (selectedMovieIndex !== null) {
    movieSelect.selectedIndex = selectedMovieIndex;
  }
}

// Movie select event
movieSelect.addEventListener('change', e => {
  ticketPrice = +e.target.value;
  setMovieData(e.target.selectedIndex, e.target.value);
  updateSelectedCount();
});

// Seat click event
// Seat click event
container.addEventListener('click', e => {
  if (
    e.target.classList.contains('seat') &&
    !e.target.classList.contains('occupied')
  ) {
    e.target.classList.toggle('selected');
    updateSelectedCount();
  }
});

// Initial count and total set
updateSelectedCount();
// ... Your existing code ...

const containerExecutive = document.querySelector('.row.Executive');
containerExecutive.addEventListener('click', handleSeatClick);

// ... Your existing code ...

function handleSeatClick(e) {
  if (
    e.target.classList.contains('seat') &&
    !e.target.classList.contains('occupied')
  ) {
    e.target.classList.toggle('selected');
    updateSelectedCount();
  }
}

// ... Your existing code ...



    </script>
  </body>
</html>