<?php
session_start();

// Check if 'movie_name' and 'seats' are set in the GET request
if (isset($_GET['movie'])) {
    $movie = $_GET['movie'];
} else {
    $movie = null;
}

if (isset($_GET['seats'])) {
    $seats = $_GET['seats'];
} else {
    $seats = null;
}

if (isset($_GET['amount'])) {
    $amount = $_GET['amount'];
} else {
    $amount = null;
}

// Assuming you have a database connection, replace these placeholders with your actual database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "movietheatredb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
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

    <link rel="stylesheet" href="css/seatLayout.css" />
    <title>Movie Seat Booking</title>
  </head>
 
  
  </body>
  <p>Selected Movie: <?php echo $movie; ?>&nbsp;&nbsp;&nbsp;&nbsp;
  Selected Seats: <?php echo $seats; ?>&nbsp;&nbsp;&nbsp;&nbsp;
  Amount: <?php echo $amount; ?></p>
    <div class="movie-container" id="book-seats">


      
    </div>
    <textarea class="inputBox" style="display:none;       ">
      {
          "product_id": 46539040,
          "freeSeating": false,
          "tempTransId": "1ecae165f2d86315fea19963d0ded41a",
          "seatLayout": {
          "colAreas": {
              "Count": 2,
              "intMaxSeatId": 43,
              "intMinSeatId": 2,
              "objArea": [
              {
                  "AreaDesc": "EXECUTIVE",
                  "AreaCode": "0000000003",
                  "AreaNum": "1",
                  "HasCurrentOrder": true,
                  "objRow": [
                  {
                      "GridRowId": 1,
                      "PhyRowId": "A",
                      "objSeat": [
                      {
                          "GridSeatNum": 1,
                          "SeatStatus": "0",
                          "seatNumber": 1
                      },
                      {
                          "GridSeatNum": 2,
                          "SeatStatus": "0",
                          "seatNumber": 2
                      },
                      {
                          "GridSeatNum": 3,
                          "SeatStatus": "0",
                          "seatNumber": 3
                      },
                      {
                          "GridSeatNum": 4,
                          "SeatStatus": "0",
                          "seatNumber": 4
                      },
                      {
                          "GridSeatNum": 5,
                          "SeatStatus": "0",
                          "seatNumber": 5
                      },
                      {
                          "GridSeatNum": 6,
                          "SeatStatus": "0",
                          "seatNumber": 6
                      },
                      {
                          "GridSeatNum": 7,
                          "SeatStatus": "0",
                          "seatNumber": 7
                      },
                      {
                          "GridSeatNum": 8,
                          "SeatStatus": "0",
                          "seatNumber": 8
                      },
                      {
                          "GridSeatNum": 9,
                          "SeatStatus": "0",
                          "seatNumber": 9
                      },
                      {
                          "GridSeatNum": 10,
                          "SeatStatus": "0",
                          "seatNumber": 10
                      },
                      {
                          "GridSeatNum": 11,
                          "SeatStatus": "0",
                          "seatNumber": 11
                      },
                      {
                          "GridSeatNum": 12,
                          "SeatStatus": "0",
                          "seatNumber": 12
                      },
                      {
                          "GridSeatNum": 13,
                          "SeatStatus": "0",
                          "seatNumber": 13
                      },
                      {
                          "GridSeatNum": 33,
                          "SeatStatus": "0",
                          "seatNumber": 14
                      },
                      {
                          "GridSeatNum": 34,
                          "SeatStatus": "0",
                          "seatNumber": 15
                      },
                      {
                          "GridSeatNum": 35,
                          "SeatStatus": "0",
                          "seatNumber": 16
                      },
                      {
                          "GridSeatNum": 36,
                          "SeatStatus": "0",
                          "seatNumber": 17
                      },
                      {
                          "GridSeatNum": 37,
                          "SeatStatus": "0",
                          "seatNumber": 18
                      },
                      {
                          "GridSeatNum": 38,
                          "SeatStatus": "0",
                          "seatNumber": 19
                      },
                      {
                          "GridSeatNum": 39,
                          "SeatStatus": "0",
                          "seatNumber": 20
                      },
                      {
                          "GridSeatNum": 40,
                          "SeatStatus": "0",
                          "seatNumber": 21
                      },
                      {
                          "GridSeatNum": 41,
                          "SeatStatus": "0",
                          "seatNumber": 22
                      },
                      {
                          "GridSeatNum": 42,
                          "SeatStatus": "0",
                          "seatNumber": 23
                      }
                      ]
                  },
                  {
                      "GridRowId": 2,
                      "PhyRowId": "B",
                      "objSeat": [
                      {
                          "GridSeatNum": 1,
                          "SeatStatus": "0",
                          "seatNumber": 1
                      },
                      {
                          "GridSeatNum": 2,
                          "SeatStatus": "0",
                          "seatNumber": 2
                      },
                      {
                          "GridSeatNum": 3,
                          "SeatStatus": "0",
                          "seatNumber": 3
                      },
                      {
                          "GridSeatNum": 4,
                          "SeatStatus": "0",
                          "seatNumber": 4
                      },
                      {
                          "GridSeatNum": 8,
                          "SeatStatus": "0",
                          "seatNumber": 5
                      },
                      {
                          "GridSeatNum": 9,
                          "SeatStatus": "0",
                          "seatNumber": 6
                      },
                      {
                          "GridSeatNum": 10,
                          "SeatStatus": "0",
                          "seatNumber": 7
                      },
                      {
                          "GridSeatNum": 11,
                          "SeatStatus": "0",
                          "seatNumber": 8
                      },
                      {
                          "GridSeatNum": 12,
                          "SeatStatus": "0",
                          "seatNumber": 9
                      },
                      {
                          "GridSeatNum": 13,
                          "SeatStatus": "0",
                          "seatNumber": 10
                      },
                      {
                          "GridSeatNum": 14,
                          "SeatStatus": "0",
                          "seatNumber": 11
                      },
                      {
                          "GridSeatNum": 15,
                          "SeatStatus": "0",
                          "seatNumber": 12
                      },
                      {
                          "GridSeatNum": 16,
                          "SeatStatus": "0",
                          "seatNumber": 13
                      },
                      {
                          "GridSeatNum": 31,
                          "SeatStatus": "0",
                          "seatNumber": 14
                      },
                      {
                          "GridSeatNum": 32,
                          "SeatStatus": "0",
                          "seatNumber": 15
                      },
                      {
                          "GridSeatNum": 33,
                          "SeatStatus": "0",
                          "seatNumber": 16
                      },
                      {
                          "GridSeatNum": 34,
                          "SeatStatus": "0",
                          "seatNumber": 17
                      },
                      {
                          "GridSeatNum": 35,
                          "SeatStatus": "0",
                          "seatNumber": 18
                      },
                      {
                          "GridSeatNum": 36,
                          "SeatStatus": "0",
                          "seatNumber": 19
                      },
                      {
                          "GridSeatNum": 39,
                          "SeatStatus": "0",
                          "seatNumber": 20
                      },
                      {
                          "GridSeatNum": 40,
                          "SeatStatus": "0",
                          "seatNumber": 21
                      },
                      {
                          "GridSeatNum": 41,
                          "SeatStatus": "0",
                          "seatNumber": 22
                      },
                      {
                          "GridSeatNum": 42,
                          "SeatStatus": "0",
                          "seatNumber": 23
                      }
                      ]
                  },
                  {
                      "GridRowId": 3,
                      "PhyRowId": "C",
                      "objSeat": [
                      {
                          "GridSeatNum": 1,
                          "SeatStatus": "0",
                          "seatNumber": 1
                      },
                      {
                          "GridSeatNum": 2,
                          "SeatStatus": "0",
                          "seatNumber": 2
                      },
                      {
                          "GridSeatNum": 3,
                          "SeatStatus": "0",
                          "seatNumber": 3
                      },
                      {
                          "GridSeatNum": 4,
                          "SeatStatus": "0",
                          "seatNumber": 4
                      },
                      {
                          "GridSeatNum": 8,
                          "SeatStatus": "0",
                          "seatNumber": 5
                      },
                      {
                          "GridSeatNum": 9,
                          "SeatStatus": "0",
                          "seatNumber": 6
                      },
                      {
                          "GridSeatNum": 10,
                          "SeatStatus": "0",
                          "seatNumber": 7
                      },
                      {
                          "GridSeatNum": 11,
                          "SeatStatus": "0",
                          "seatNumber": 8
                      },
                      {
                          "GridSeatNum": 12,
                          "SeatStatus": "0",
                          "seatNumber": 9
                      },
                      {
                          "GridSeatNum": 13,
                          "SeatStatus": "0",
                          "seatNumber": 10
                      },
                      {
                          "GridSeatNum": 14,
                          "SeatStatus": "0",
                          "seatNumber": 11
                      },
                      {
                          "GridSeatNum": 15,
                          "SeatStatus": "0",
                          "seatNumber": 12
                      },
                      {
                          "GridSeatNum": 16,
                          "SeatStatus": "0",
                          "seatNumber": 13
                      },
                      {
                          "GridSeatNum": 17,
                          "SeatStatus": "0",
                          "seatNumber": 14
                      },
                      {
                          "GridSeatNum": 18,
                          "SeatStatus": "0",
                          "seatNumber": 15
                      },
                      {
                          "GridSeatNum": 19,
                          "SeatStatus": "0",
                          "seatNumber": 16
                      },
                      {
                          "GridSeatNum": 20,
                          "SeatStatus": "0",
                          "seatNumber": 17
                      },
                      {
                          "GridSeatNum": 24,
                          "SeatStatus": "0",
                          "seatNumber": 18
                      },
                      {
                          "GridSeatNum": 25,
                          "SeatStatus": "0",
                          "seatNumber": 19
                      },
                      {
                          "GridSeatNum": 26,
                          "SeatStatus": "0",
                          "seatNumber": 20
                      },
                      {
                          "GridSeatNum": 27,
                          "SeatStatus": "0",
                          "seatNumber": 21
                      },
                      {
                          "GridSeatNum": 28,
                          "SeatStatus": "0",
                          "seatNumber": 22
                      },
                      {
                          "GridSeatNum": 29,
                          "SeatStatus": "0",
                          "seatNumber": 23
                      },
                      {
                          "GridSeatNum": 30,
                          "SeatStatus": "0",
                          "seatNumber": 24
                      },
                      {
                          "GridSeatNum": 31,
                          "SeatStatus": "0",
                          "seatNumber": 25
                      },
                      {
                          "GridSeatNum": 32,
                          "SeatStatus": "0",
                          "seatNumber": 26
                      },
                      {
                          "GridSeatNum": 33,
                          "SeatStatus": "0",
                          "seatNumber": 27
                      },
                      {
                          "GridSeatNum": 34,
                          "SeatStatus": "0",
                          "seatNumber": 28
                      },
                      {
                          "GridSeatNum": 35,
                          "SeatStatus": "0",
                          "seatNumber": 29
                      },
                      {
                          "GridSeatNum": 36,
                          "SeatStatus": "0",
                          "seatNumber": 30
                      },
                      {
                          "GridSeatNum": 39,
                          "SeatStatus": "0",
                          "seatNumber": 31
                      },
                      {
                          "GridSeatNum": 40,
                          "SeatStatus": "0",
                          "seatNumber": 32
                      },
                      {
                          "GridSeatNum": 41,
                          "SeatStatus": "0",
                          "seatNumber": 33
                      },
                      {
                          "GridSeatNum": 42,
                          "SeatStatus": "0",
                          "seatNumber": 34
                      }
                      ]
                  },
                  {
                      "GridRowId": 4,
                      "PhyRowId": "D",
                      "objSeat": [
                      {
                          "GridSeatNum": 1,
                          "SeatStatus": "0",
                          "seatNumber": 1
                      },
                      {
                          "GridSeatNum": 2,
                          "SeatStatus": "0",
                          "seatNumber": 2
                      },
                      {
                          "GridSeatNum": 3,
                          "SeatStatus": "0",
                          "seatNumber": 3
                      },
                      {
                          "GridSeatNum": 4,
                          "SeatStatus": "0",
                          "seatNumber": 4
                      },
                      {
                          "GridSeatNum": 8,
                          "SeatStatus": "0",
                          "seatNumber": 5
                      },
                      {
                          "GridSeatNum": 9,
                          "SeatStatus": "0",
                          "seatNumber": 6
                      },
                      {
                          "GridSeatNum": 10,
                          "SeatStatus": "0",
                          "seatNumber": 7
                      },
                      {
                          "GridSeatNum": 11,
                          "SeatStatus": "0",
                          "seatNumber": 8
                      },
                      {
                          "GridSeatNum": 12,
                          "SeatStatus": "0",
                          "seatNumber": 9
                      },
                      {
                          "GridSeatNum": 13,
                          "SeatStatus": "0",
                          "seatNumber": 10
                      },
                      {
                          "GridSeatNum": 14,
                          "SeatStatus": "0",
                          "seatNumber": 11
                      },
                      {
                          "GridSeatNum": 15,
                          "SeatStatus": "0",
                          "seatNumber": 12
                      },
                      {
                          "GridSeatNum": 16,
                          "SeatStatus": "0",
                          "seatNumber": 13
                      },
                      {
                          "GridSeatNum": 17,
                          "SeatStatus": "0",
                          "seatNumber": 14
                      },
                      {
                          "GridSeatNum": 18,
                          "SeatStatus": "0",
                          "seatNumber": 15
                      },
                      {
                          "GridSeatNum": 19,
                          "SeatStatus": "0",
                          "seatNumber": 16
                      },
                      {
                          "GridSeatNum": 20,
                          "SeatStatus": "0",
                          "seatNumber": 17
                      },
                      {
                          "GridSeatNum": 24,
                          "SeatStatus": "0",
                          "seatNumber": 18
                      },
                      {
                          "GridSeatNum": 25,
                          "SeatStatus": "0",
                          "seatNumber": 19
                      },
                      {
                          "GridSeatNum": 26,
                          "SeatStatus": "0",
                          "seatNumber": 20
                      },
                      {
                          "GridSeatNum": 27,
                          "SeatStatus": "0",
                          "seatNumber": 21
                      },
                      {
                          "GridSeatNum": 28,
                          "SeatStatus": "0",
                          "seatNumber": 22
                      },
                      {
                          "GridSeatNum": 29,
                          "SeatStatus": "0",
                          "seatNumber": 23
                      },
                      {
                          "GridSeatNum": 30,
                          "SeatStatus": "0",
                          "seatNumber": 24
                      },
                      {
                          "GridSeatNum": 31,
                          "SeatStatus": "0",
                          "seatNumber": 25
                      },
                      {
                          "GridSeatNum": 32,
                          "SeatStatus": "0",
                          "seatNumber": 26
                      },
                      {
                          "GridSeatNum": 33,
                          "SeatStatus": "0",
                          "seatNumber": 27
                      },
                      {
                          "GridSeatNum": 34,
                          "SeatStatus": "0",
                          "seatNumber": 28
                      },
                      {
                          "GridSeatNum": 35,
                          "SeatStatus": "0",
                          "seatNumber": 29
                      },
                      {
                          "GridSeatNum": 36,
                          "SeatStatus": "0",
                          "seatNumber": 30
                      },
                      {
                          "GridSeatNum": 39,
                          "SeatStatus": "0",
                          "seatNumber": 31
                      },
                      {
                          "GridSeatNum": 40,
                          "SeatStatus": "0",
                          "seatNumber": 32
                      },
                      {
                          "GridSeatNum": 41,
                          "SeatStatus": "0",
                          "seatNumber": 33
                      },
                      {
                          "GridSeatNum": 42,
                          "SeatStatus": "0",
                          "seatNumber": 34
                      }
                      ]
                  },
                  {
                      "GridRowId": 5,
                      "PhyRowId": "E",
                      "objSeat": [
                      {
                          "GridSeatNum": 1,
                          "SeatStatus": "0",
                          "seatNumber": 1
                      },
                      {
                          "GridSeatNum": 2,
                          "SeatStatus": "0",
                          "seatNumber": 2
                      },
                      {
                          "GridSeatNum": 3,
                          "SeatStatus": "0",
                          "seatNumber": 3
                      },
                      {
                          "GridSeatNum": 4,
                          "SeatStatus": "0",
                          "seatNumber": 4
                      },
                      {
                          "GridSeatNum": 8,
                          "SeatStatus": "0",
                          "seatNumber": 5
                      },
                      {
                          "GridSeatNum": 9,
                          "SeatStatus": "0",
                          "seatNumber": 6
                      },
                      {
                          "GridSeatNum": 10,
                          "SeatStatus": "0",
                          "seatNumber": 7
                      },
                      {
                          "GridSeatNum": 11,
                          "SeatStatus": "0",
                          "seatNumber": 8
                      },
                      {
                          "GridSeatNum": 12,
                          "SeatStatus": "0",
                          "seatNumber": 9
                      },
                      {
                          "GridSeatNum": 13,
                          "SeatStatus": "0",
                          "seatNumber": 10
                      },
                      {
                          "GridSeatNum": 14,
                          "SeatStatus": "0",
                          "seatNumber": 11
                      },
                      {
                          "GridSeatNum": 15,
                          "SeatStatus": "0",
                          "seatNumber": 12
                      },
                      {
                          "GridSeatNum": 16,
                          "SeatStatus": "0",
                          "seatNumber": 13
                      },
                      {
                          "GridSeatNum": 17,
                          "SeatStatus": "0",
                          "seatNumber": 14
                      },
                      {
                          "GridSeatNum": 18,
                          "SeatStatus": "0",
                          "seatNumber": 15
                      },
                      {
                          "GridSeatNum": 19,
                          "SeatStatus": "0",
                          "seatNumber": 16
                      },
                      {
                          "GridSeatNum": 20,
                          "SeatStatus": "0",
                          "seatNumber": 17
                      },
                      {
                          "GridSeatNum": 24,
                          "SeatStatus": "0",
                          "seatNumber": 18
                      },
                      {
                          "GridSeatNum": 25,
                          "SeatStatus": "0",
                          "seatNumber": 19
                      },
                      {
                          "GridSeatNum": 26,
                          "SeatStatus": "0",
                          "seatNumber": 20
                      },
                      {
                          "GridSeatNum": 27,
                          "SeatStatus": "0",
                          "seatNumber": 21
                      },
                      {
                          "GridSeatNum": 28,
                          "SeatStatus": "0",
                          "seatNumber": 22
                      },
                      {
                          "GridSeatNum": 29,
                          "SeatStatus": "0",
                          "seatNumber": 23
                      },
                      {
                          "GridSeatNum": 30,
                          "SeatStatus": "0",
                          "seatNumber": 24
                      },
                      {
                          "GridSeatNum": 31,
                          "SeatStatus": "0",
                          "seatNumber": 25
                      },
                      {
                          "GridSeatNum": 32,
                          "SeatStatus": "0",
                          "seatNumber": 26
                      },
                      {
                          "GridSeatNum": 33,
                          "SeatStatus": "0",
                          "seatNumber": 27
                      },
                      {
                          "GridSeatNum": 34,
                          "SeatStatus": "0",
                          "seatNumber": 28
                      },
                      {
                          "GridSeatNum": 35,
                          "SeatStatus": "0",
                          "seatNumber": 29
                      },
                      {
                          "GridSeatNum": 36,
                          "SeatStatus": "0",
                          "seatNumber": 30
                      },
                      {
                          "GridSeatNum": 39,
                          "SeatStatus": "0",
                          "seatNumber": 31
                      },
                      {
                          "GridSeatNum": 40,
                          "SeatStatus": "0",
                          "seatNumber": 32
                      },
                      {
                          "GridSeatNum": 41,
                          "SeatStatus": "0",
                          "seatNumber": 33
                      },
                      {
                          "GridSeatNum": 42,
                          "SeatStatus": "0",
                          "seatNumber": 34
                      }
                      ]
                  },
                  {
                      "GridRowId": 6,
                      "PhyRowId": "F",
                      "objSeat": [
                      {
                          "GridSeatNum": 1,
                          "SeatStatus": "0",
                          "seatNumber": 1
                      },
                      {
                          "GridSeatNum": 2,
                          "SeatStatus": "0",
                          "seatNumber": 2
                      },
                      {
                          "GridSeatNum": 3,
                          "SeatStatus": "0",
                          "seatNumber": 3
                      },
                      {
                          "GridSeatNum": 4,
                          "SeatStatus": "0",
                          "seatNumber": 4
                      },
                      {
                          "GridSeatNum": 8,
                          "SeatStatus": "0",
                          "seatNumber": 5
                      },
                      {
                          "GridSeatNum": 9,
                          "SeatStatus": "0",
                          "seatNumber": 6
                      },
                      {
                          "GridSeatNum": 10,
                          "SeatStatus": "0",
                          "seatNumber": 7
                      },
                      {
                          "GridSeatNum": 11,
                          "SeatStatus": "0",
                          "seatNumber": 8
                      },
                      {
                          "GridSeatNum": 12,
                          "SeatStatus": "0",
                          "seatNumber": 9
                      },
                      {
                          "GridSeatNum": 13,
                          "SeatStatus": "0",
                          "seatNumber": 10
                      },
                      {
                          "GridSeatNum": 14,
                          "SeatStatus": "0",
                          "seatNumber": 11
                      },
                      {
                          "GridSeatNum": 15,
                          "SeatStatus": "0",
                          "seatNumber": 12
                      },
                      {
                          "GridSeatNum": 16,
                          "SeatStatus": "0",
                          "seatNumber": 13
                      },
                      {
                          "GridSeatNum": 17,
                          "SeatStatus": "0",
                          "seatNumber": 14
                      },
                      {
                          "GridSeatNum": 18,
                          "SeatStatus": "0",
                          "seatNumber": 15
                      },
                      {
                          "GridSeatNum": 19,
                          "SeatStatus": "0",
                          "seatNumber": 16
                      },
                      {
                          "GridSeatNum": 20,
                          "SeatStatus": "0",
                          "seatNumber": 17
                      },
                      {
                          "GridSeatNum": 24,
                          "SeatStatus": "0",
                          "seatNumber": 18
                      },
                      {
                          "GridSeatNum": 25,
                          "SeatStatus": "0",
                          "seatNumber": 19
                      },
                      {
                          "GridSeatNum": 26,
                          "SeatStatus": "0",
                          "seatNumber": 20
                      },
                      {
                          "GridSeatNum": 27,
                          "SeatStatus": "0",
                          "seatNumber": 21
                      },
                      {
                          "GridSeatNum": 28,
                          "SeatStatus": "0",
                          "seatNumber": 22
                      },
                      {
                          "GridSeatNum": 29,
                          "SeatStatus": "0",
                          "seatNumber": 23
                      },
                      {
                          "GridSeatNum": 30,
                          "SeatStatus": "0",
                          "seatNumber": 24
                      },
                      {
                          "GridSeatNum": 31,
                          "SeatStatus": "0",
                          "seatNumber": 25
                      },
                      {
                          "GridSeatNum": 32,
                          "SeatStatus": "0",
                          "seatNumber": 26
                      },
                      {
                          "GridSeatNum": 33,
                          "SeatStatus": "0",
                          "seatNumber": 27
                      },
                      {
                          "GridSeatNum": 34,
                          "SeatStatus": "0",
                          "seatNumber": 28
                      },
                      {
                          "GridSeatNum": 35,
                          "SeatStatus": "0",
                          "seatNumber": 29
                      },
                      {
                          "GridSeatNum": 36,
                          "SeatStatus": "0",
                          "seatNumber": 30
                      },
                      {
                          "GridSeatNum": 39,
                          "SeatStatus": "0",
                          "seatNumber": 31
                      },
                      {
                          "GridSeatNum": 40,
                          "SeatStatus": "0",
                          "seatNumber": 32
                      },
                      {
                          "GridSeatNum": 41,
                          "SeatStatus": "0",
                          "seatNumber": 33
                      },
                      {
                          "GridSeatNum": 42,
                          "SeatStatus": "0",
                          "seatNumber": 34
                      }
                      ]
                  },
                  {
                      "GridRowId": 7,
                      "PhyRowId": "G",
                      "objSeat": [
                      {
                          "GridSeatNum": 1,
                          "SeatStatus": "0",
                          "seatNumber": 1
                      },
                      {
                          "GridSeatNum": 2,
                          "SeatStatus": "0",
                          "seatNumber": 2
                      },
                      {
                          "GridSeatNum": 3,
                          "SeatStatus": "0",
                          "seatNumber": 3
                      },
                      {
                          "GridSeatNum": 4,
                          "SeatStatus": "0",
                          "seatNumber": 4
                      },
                      {
                          "GridSeatNum": 8,
                          "SeatStatus": "0",
                          "seatNumber": 5
                      },
                      {
                          "GridSeatNum": 9,
                          "SeatStatus": "0",
                          "seatNumber": 6
                      },
                      {
                          "GridSeatNum": 10,
                          "SeatStatus": "0",
                          "seatNumber": 7
                      },
                      {
                          "GridSeatNum": 11,
                          "SeatStatus": "0",
                          "seatNumber": 8
                      },
                      {
                          "GridSeatNum": 12,
                          "SeatStatus": "0",
                          "seatNumber": 9
                      },
                      {
                          "GridSeatNum": 13,
                          "SeatStatus": "0",
                          "seatNumber": 10
                      },
                      {
                          "GridSeatNum": 14,
                          "SeatStatus": "0",
                          "seatNumber": 11
                      },
                      {
                          "GridSeatNum": 15,
                          "SeatStatus": "0",
                          "seatNumber": 12
                      },
                      {
                          "GridSeatNum": 16,
                          "SeatStatus": "0",
                          "seatNumber": 13
                      },
                      {
                          "GridSeatNum": 17,
                          "SeatStatus": "0",
                          "seatNumber": 14
                      },
                      {
                          "GridSeatNum": 18,
                          "SeatStatus": "0",
                          "seatNumber": 15
                      },
                      {
                          "GridSeatNum": 19,
                          "SeatStatus": "0",
                          "seatNumber": 16
                      },
                      {
                          "GridSeatNum": 20,
                          "SeatStatus": "0",
                          "seatNumber": 17
                      },
                      {
                          "GridSeatNum": 24,
                          "SeatStatus": "0",
                          "seatNumber": 18
                      },
                      {
                          "GridSeatNum": 25,
                          "SeatStatus": "0",
                          "seatNumber": 19
                      },
                      {
                          "GridSeatNum": 26,
                          "SeatStatus": "0",
                          "seatNumber": 20
                      },
                      {
                          "GridSeatNum": 27,
                          "SeatStatus": "0",
                          "seatNumber": 21
                      },
                      {
                          "GridSeatNum": 28,
                          "SeatStatus": "0",
                          "seatNumber": 22
                      },
                      {
                          "GridSeatNum": 29,
                          "SeatStatus": "0",
                          "seatNumber": 23
                      },
                      {
                          "GridSeatNum": 30,
                          "SeatStatus": "0",
                          "seatNumber": 24
                      },
                      {
                          "GridSeatNum": 31,
                          "SeatStatus": "0",
                          "seatNumber": 25
                      },
                      {
                          "GridSeatNum": 32,
                          "SeatStatus": "0",
                          "seatNumber": 26
                      },
                      {
                          "GridSeatNum": 33,
                          "SeatStatus": "0",
                          "seatNumber": 27
                      },
                      {
                          "GridSeatNum": 34,
                          "SeatStatus": "0",
                          "seatNumber": 28
                      },
                      {
                          "GridSeatNum": 35,
                          "SeatStatus": "0",
                          "seatNumber": 29
                      },
                      {
                          "GridSeatNum": 36,
                          "SeatStatus": "0",
                          "seatNumber": 30
                      },
                      {
                          "GridSeatNum": 39,
                          "SeatStatus": "0",
                          "seatNumber": 31
                      },
                      {
                          "GridSeatNum": 40,
                          "SeatStatus": "0",
                          "seatNumber": 32
                      },
                      {
                          "GridSeatNum": 41,
                          "SeatStatus": "0",
                          "seatNumber": 33
                      },
                      {
                          "GridSeatNum": 42,
                          "SeatStatus": "0",
                          "seatNumber": 34
                      }
                      ]
                  },
                  {
                      "GridRowId": 8,
                      "PhyRowId": "H",
                      "objSeat": [
                      {
                          "GridSeatNum": 1,
                          "SeatStatus": "0",
                          "seatNumber": 1
                      },
                      {
                          "GridSeatNum": 2,
                          "SeatStatus": "0",
                          "seatNumber": 2
                      },
                      {
                          "GridSeatNum": 3,
                          "SeatStatus": "0",
                          "seatNumber": 3
                      },
                      {
                          "GridSeatNum": 4,
                          "SeatStatus": "0",
                          "seatNumber": 4
                      },
                      {
                          "GridSeatNum": 8,
                          "SeatStatus": "0",
                          "seatNumber": 5
                      },
                      {
                          "GridSeatNum": 9,
                          "SeatStatus": "0",
                          "seatNumber": 6
                      },
                      {
                          "GridSeatNum": 10,
                          "SeatStatus": "0",
                          "seatNumber": 7
                      },
                      {
                          "GridSeatNum": 11,
                          "SeatStatus": "0",
                          "seatNumber": 8
                      },
                      {
                          "GridSeatNum": 12,
                          "SeatStatus": "0",
                          "seatNumber": 9
                      },
                      {
                          "GridSeatNum": 13,
                          "SeatStatus": "0",
                          "seatNumber": 10
                      },
                      {
                          "GridSeatNum": 14,
                          "SeatStatus": "0",
                          "seatNumber": 11
                      },
                      {
                          "GridSeatNum": 15,
                          "SeatStatus": "0",
                          "seatNumber": 12
                      },
                      {
                          "GridSeatNum": 16,
                          "SeatStatus": "0",
                          "seatNumber": 13
                      },
                      {
                          "GridSeatNum": 17,
                          "SeatStatus": "0",
                          "seatNumber": 14
                      },
                      {
                          "GridSeatNum": 18,
                          "SeatStatus": "0",
                          "seatNumber": 15
                      },
                      {
                          "GridSeatNum": 19,
                          "SeatStatus": "0",
                          "seatNumber": 16
                      },
                      {
                          "GridSeatNum": 20,
                          "SeatStatus": "0",
                          "seatNumber": 17
                      },
                      {
                          "GridSeatNum": 24,
                          "SeatStatus": "0",
                          "seatNumber": 18
                      },
                      {
                          "GridSeatNum": 25,
                          "SeatStatus": "0",
                          "seatNumber": 19
                      },
                      {
                          "GridSeatNum": 26,
                          "SeatStatus": "0",
                          "seatNumber": 20
                      },
                      {
                          "GridSeatNum": 27,
                          "SeatStatus": "0",
                          "seatNumber": 21
                      },
                      {
                          "GridSeatNum": 28,
                          "SeatStatus": "0",
                          "seatNumber": 22
                      },
                      {
                          "GridSeatNum": 29,
                          "SeatStatus": "0",
                          "seatNumber": 23
                      },
                      {
                          "GridSeatNum": 30,
                          "SeatStatus": "0",
                          "seatNumber": 24
                      },
                      {
                          "GridSeatNum": 31,
                          "SeatStatus": "0",
                          "seatNumber": 25
                      },
                      {
                          "GridSeatNum": 32,
                          "SeatStatus": "0",
                          "seatNumber": 26
                      },
                      {
                          "GridSeatNum": 33,
                          "SeatStatus": "0",
                          "seatNumber": 27
                      },
                      {
                          "GridSeatNum": 34,
                          "SeatStatus": "0",
                          "seatNumber": 28
                      },
                      {
                          "GridSeatNum": 35,
                          "SeatStatus": "0",
                          "seatNumber": 29
                      },
                      {
                          "GridSeatNum": 36,
                          "SeatStatus": "0",
                          "seatNumber": 30
                      },
                      {
                          "GridSeatNum": 39,
                          "SeatStatus": "0",
                          "seatNumber": 31
                      },
                      {
                          "GridSeatNum": 40,
                          "SeatStatus": "0",
                          "seatNumber": 32
                      },
                      {
                          "GridSeatNum": 41,
                          "SeatStatus": "0",
                          "seatNumber": 33
                      },
                      {
                          "GridSeatNum": 42,
                          "SeatStatus": "0",
                          "seatNumber": 34
                      }
                      ]
                  },
                  {
                      "GridRowId": 11,
                      "PhyRowId": "I",
                      "objSeat": [
                      {
                          "GridSeatNum": 8,
                          "SeatStatus": "0",
                          "seatNumber": 1
                      },
                      {
                          "GridSeatNum": 9,
                          "SeatStatus": "0",
                          "seatNumber": 2
                      },
                      {
                          "GridSeatNum": 10,
                          "SeatStatus": "0",
                          "seatNumber": 3
                      },
                      {
                          "GridSeatNum": 11,
                          "SeatStatus": "0",
                          "seatNumber": 4
                      },
                      {
                          "GridSeatNum": 12,
                          "SeatStatus": "0",
                          "seatNumber": 5
                      },
                      {
                          "GridSeatNum": 13,
                          "SeatStatus": "0",
                          "seatNumber": 6
                      },
                      {
                          "GridSeatNum": 14,
                          "SeatStatus": "0",
                          "seatNumber": 7
                      },
                      {
                          "GridSeatNum": 15,
                          "SeatStatus": "0",
                          "seatNumber": 8
                      },
                      {
                          "GridSeatNum": 16,
                          "SeatStatus": "0",
                          "seatNumber": 9
                      },
                      {
                          "GridSeatNum": 17,
                          "SeatStatus": "0",
                          "seatNumber": 10
                      },
                      {
                          "GridSeatNum": 18,
                          "SeatStatus": "0",
                          "seatNumber": 11
                      },
                      {
                          "GridSeatNum": 19,
                          "SeatStatus": "0",
                          "seatNumber": 12
                      },
                      {
                          "GridSeatNum": 20,
                          "SeatStatus": "0",
                          "seatNumber": 13
                      },
                      {
                          "GridSeatNum": 24,
                          "SeatStatus": "0",
                          "seatNumber": 14
                      },
                      {
                          "GridSeatNum": 25,
                          "SeatStatus": "0",
                          "seatNumber": 15
                      },
                      {
                          "GridSeatNum": 26,
                          "SeatStatus": "0",
                          "seatNumber": 16
                      },
                      {
                          "GridSeatNum": 27,
                          "SeatStatus": "0",
                          "seatNumber": 17
                      },
                      {
                          "GridSeatNum": 28,
                          "SeatStatus": "0",
                          "seatNumber": 18
                      },
                      {
                          "GridSeatNum": 29,
                          "SeatStatus": "0",
                          "seatNumber": 19
                      },
                      {
                          "GridSeatNum": 30,
                          "SeatStatus": "0",
                          "seatNumber": 20
                      },
                      {
                          "GridSeatNum": 31,
                          "SeatStatus": "0",
                          "seatNumber": 21
                      },
                      {
                          "GridSeatNum": 32,
                          "SeatStatus": "0",
                          "seatNumber": 22
                      },
                      {
                          "GridSeatNum": 33,
                          "SeatStatus": "0",
                          "seatNumber": 23
                      },
                      {
                          "GridSeatNum": 34,
                          "SeatStatus": "0",
                          "seatNumber": 24
                      },
                      {
                          "GridSeatNum": 35,
                          "SeatStatus": "0",
                          "seatNumber": 25
                      },
                      {
                          "GridSeatNum": 36,
                          "SeatStatus": "0",
                          "seatNumber": 26
                      }
                      ]
                  },
                  {
                      "GridRowId": 12,
                      "PhyRowId": "J",
                      "objSeat": [
                      {
                          "GridSeatNum": 8,
                          "SeatStatus": "0",
                          "seatNumber": 1
                      },
                      {
                          "GridSeatNum": 9,
                          "SeatStatus": "0",
                          "seatNumber": 2
                      },
                      {
                          "GridSeatNum": 10,
                          "SeatStatus": "0",
                          "seatNumber": 3
                      },
                      {
                          "GridSeatNum": 11,
                          "SeatStatus": "0",
                          "seatNumber": 4
                      },
                      {
                          "GridSeatNum": 12,
                          "SeatStatus": "0",
                          "seatNumber": 5
                      },
                      {
                          "GridSeatNum": 13,
                          "SeatStatus": "0",
                          "seatNumber": 6
                      },
                      {
                          "GridSeatNum": 14,
                          "SeatStatus": "0",
                          "seatNumber": 7
                      },
                      {
                          "GridSeatNum": 15,
                          "SeatStatus": "0",
                          "seatNumber": 8
                      },
                      {
                          "GridSeatNum": 16,
                          "SeatStatus": "0",
                          "seatNumber": 9
                      },
                      {
                          "GridSeatNum": 17,
                          "SeatStatus": "0",
                          "seatNumber": 10
                      },
                      {
                          "GridSeatNum": 18,
                          "SeatStatus": "0",
                          "seatNumber": 11
                      },
                      {
                          "GridSeatNum": 19,
                          "SeatStatus": "0",
                          "seatNumber": 12
                      },
                      {
                          "GridSeatNum": 20,
                          "SeatStatus": "0",
                          "seatNumber": 13
                      },
                      {
                          "GridSeatNum": 24,
                          "SeatStatus": "0",
                          "seatNumber": 14
                      },
                      {
                          "GridSeatNum": 25,
                          "SeatStatus": "0",
                          "seatNumber": 15
                      },
                      {
                          "GridSeatNum": 26,
                          "SeatStatus": "0",
                          "seatNumber": 16
                      },
                      {
                          "GridSeatNum": 27,
                          "SeatStatus": "0",
                          "seatNumber": 17
                      },
                      {
                          "GridSeatNum": 28,
                          "SeatStatus": "0",
                          "seatNumber": 18
                      },
                      {
                          "GridSeatNum": 29,
                          "SeatStatus": "0",
                          "seatNumber": 19
                      },
                      {
                          "GridSeatNum": 30,
                          "SeatStatus": "0",
                          "seatNumber": 20
                      },
                      {
                          "GridSeatNum": 31,
                          "SeatStatus": "0",
                          "seatNumber": 21
                      },
                      {
                          "GridSeatNum": 32,
                          "SeatStatus": "0",
                          "seatNumber": 22
                      },
                      {
                          "GridSeatNum": 33,
                          "SeatStatus": "0",
                          "seatNumber": 23
                      },
                      {
                          "GridSeatNum": 34,
                          "SeatStatus": "0",
                          "seatNumber": 24
                      },
                      {
                          "GridSeatNum": 35,
                          "SeatStatus": "0",
                          "seatNumber": 25
                      },
                      {
                          "GridSeatNum": 36,
                          "SeatStatus": "0",
                          "seatNumber": 26
                      }
                      ]
                  },
                  {
                      "GridRowId": 13,
                      "PhyRowId": "K",
                      "objSeat": [
                      {
                          "GridSeatNum": 8,
                          "SeatStatus": "0",
                          "seatNumber": 1
                      },
                      {
                          "GridSeatNum": 9,
                          "SeatStatus": "0",
                          "seatNumber": 2
                      },
                      {
                          "GridSeatNum": 10,
                          "SeatStatus": "0",
                          "seatNumber": 3
                      },
                      {
                          "GridSeatNum": 11,
                          "SeatStatus": "0",
                          "seatNumber": 4
                      },
                      {
                          "GridSeatNum": 12,
                          "SeatStatus": "0",
                          "seatNumber": 5
                      },
                      {
                          "GridSeatNum": 13,
                          "SeatStatus": "0",
                          "seatNumber": 6
                      },
                      {
                          "GridSeatNum": 14,
                          "SeatStatus": "0",
                          "seatNumber": 7
                      },
                      {
                          "GridSeatNum": 15,
                          "SeatStatus": "0",
                          "seatNumber": 8
                      },
                      {
                          "GridSeatNum": 16,
                          "SeatStatus": "0",
                          "seatNumber": 9
                      },
                      {
                          "GridSeatNum": 17,
                          "SeatStatus": "0",
                          "seatNumber": 10
                      },
                      {
                          "GridSeatNum": 18,
                          "SeatStatus": "0",
                          "seatNumber": 11
                      },
                      {
                          "GridSeatNum": 19,
                          "SeatStatus": "0",
                          "seatNumber": 12
                      },
                      {
                          "GridSeatNum": 20,
                          "SeatStatus": "0",
                          "seatNumber": 13
                      },
                      {
                          "GridSeatNum": 24,
                          "SeatStatus": "0",
                          "seatNumber": 14
                      },
                      {
                          "GridSeatNum": 25,
                          "SeatStatus": "0",
                          "seatNumber": 15
                      },
                      {
                          "GridSeatNum": 26,
                          "SeatStatus": "0",
                          "seatNumber": 16
                      },
                      {
                          "GridSeatNum": 27,
                          "SeatStatus": "0",
                          "seatNumber": 17
                      },
                      {
                          "GridSeatNum": 28,
                          "SeatStatus": "0",
                          "seatNumber": 18
                      },
                      {
                          "GridSeatNum": 29,
                          "SeatStatus": "0",
                          "seatNumber": 19
                      },
                      {
                          "GridSeatNum": 30,
                          "SeatStatus": "0",
                          "seatNumber": 20
                      },
                      {
                          "GridSeatNum": 31,
                          "SeatStatus": "0",
                          "seatNumber": 21
                      },
                      {
                          "GridSeatNum": 32,
                          "SeatStatus": "0",
                          "seatNumber": 22
                      },
                      {
                          "GridSeatNum": 33,
                          "SeatStatus": "0",
                          "seatNumber": 23
                      },
                      {
                          "GridSeatNum": 34,
                          "SeatStatus": "0",
                          "seatNumber": 24
                      },
                      {
                          "GridSeatNum": 35,
                          "SeatStatus": "0",
                          "seatNumber": 25
                      },
                      {
                          "GridSeatNum": 36,
                          "SeatStatus": "0",
                          "seatNumber": 26
                      }
                      ]
                  },
                  {
                      "GridRowId": 14,
                      "PhyRowId": "L",
                      "objSeat": [
                      {
                          "GridSeatNum": 8,
                          "SeatStatus": "0",
                          "seatNumber": 1
                      },
                      {
                          "GridSeatNum": 9,
                          "SeatStatus": "0",
                          "seatNumber": 2
                      },
                      {
                          "GridSeatNum": 10,
                          "SeatStatus": "0",
                          "seatNumber": 3
                      },
                      {
                          "GridSeatNum": 11,
                          "SeatStatus": "0",
                          "seatNumber": 4
                      },
                      {
                          "GridSeatNum": 12,
                          "SeatStatus": "0",
                          "seatNumber": 5
                      },
                      {
                          "GridSeatNum": 13,
                          "SeatStatus": "0",
                          "seatNumber": 6
                      },
                      {
                          "GridSeatNum": 14,
                          "SeatStatus": "0",
                          "seatNumber": 7
                      },
                      {
                          "GridSeatNum": 15,
                          "SeatStatus": "0",
                          "seatNumber": 8
                      },
                      {
                          "GridSeatNum": 16,
                          "SeatStatus": "0",
                          "seatNumber": 9
                      },
                      {
                          "GridSeatNum": 17,
                          "SeatStatus": "0",
                          "seatNumber": 10
                      },
                      {
                          "GridSeatNum": 18,
                          "SeatStatus": "0",
                          "seatNumber": 11
                      },
                      {
                          "GridSeatNum": 19,
                          "SeatStatus": "0",
                          "seatNumber": 12
                      },
                      {
                          "GridSeatNum": 20,
                          "SeatStatus": "0",
                          "seatNumber": 13
                      },
                      {
                          "GridSeatNum": 24,
                          "SeatStatus": "0",
                          "seatNumber": 14
                      },
                      {
                          "GridSeatNum": 25,
                          "SeatStatus": "0",
                          "seatNumber": 15
                      },
                      {
                          "GridSeatNum": 26,
                          "SeatStatus": "0",
                          "seatNumber": 16
                      },
                      {
                          "GridSeatNum": 27,
                          "SeatStatus": "0",
                          "seatNumber": 17
                      },
                      {
                          "GridSeatNum": 28,
                          "SeatStatus": "0",
                          "seatNumber": 18
                      },
                      {
                          "GridSeatNum": 29,
                          "SeatStatus": "0",
                          "seatNumber": 19
                      },
                      {
                          "GridSeatNum": 30,
                          "SeatStatus": "0",
                          "seatNumber": 20
                      },
                      {
                          "GridSeatNum": 31,
                          "SeatStatus": "0",
                          "seatNumber": 21
                      },
                      {
                          "GridSeatNum": 32,
                          "SeatStatus": "0",
                          "seatNumber": 22
                      },
                      {
                          "GridSeatNum": 33,
                          "SeatStatus": "0",
                          "seatNumber": 23
                      },
                      {
                          "GridSeatNum": 34,
                          "SeatStatus": "0",
                          "seatNumber": 24
                      },
                      {
                          "GridSeatNum": 35,
                          "SeatStatus": "0",
                          "seatNumber": 25
                      },
                      {
                          "GridSeatNum": 36,
                          "SeatStatus": "0",
                          "seatNumber": 26
                      }
                      ]
                  },
                  {
                      "GridRowId": 15,
                      "PhyRowId": "M",
                      "objSeat": [
                      {
                          "GridSeatNum": 8,
                          "SeatStatus": "0",
                          "seatNumber": 1
                      },
                      {
                          "GridSeatNum": 9,
                          "SeatStatus": "0",
                          "seatNumber": 2
                      },
                      {
                          "GridSeatNum": 10,
                          "SeatStatus": "0",
                          "seatNumber": 3
                      },
                      {
                          "GridSeatNum": 11,
                          "SeatStatus": "0",
                          "seatNumber": 4
                      },
                      {
                          "GridSeatNum": 12,
                          "SeatStatus": "0",
                          "seatNumber": 5
                      },
                      {
                          "GridSeatNum": 13,
                          "SeatStatus": "0",
                          "seatNumber": 6
                      },
                      {
                          "GridSeatNum": 14,
                          "SeatStatus": "0",
                          "seatNumber": 7
                      },
                      {
                          "GridSeatNum": 15,
                          "SeatStatus": "0",
                          "seatNumber": 8
                      },
                      {
                          "GridSeatNum": 16,
                          "SeatStatus": "0",
                          "seatNumber": 9
                      },
                      {
                          "GridSeatNum": 17,
                          "SeatStatus": "0",
                          "seatNumber": 10
                      },
                      {
                          "GridSeatNum": 18,
                          "SeatStatus": "0",
                          "seatNumber": 11
                      },
                      {
                          "GridSeatNum": 19,
                          "SeatStatus": "0",
                          "seatNumber": 12
                      },
                      {
                          "GridSeatNum": 20,
                          "SeatStatus": "0",
                          "seatNumber": 13
                      },
                      {
                          "GridSeatNum": 24,
                          "SeatStatus": "0",
                          "seatNumber": 14
                      },
                      {
                          "GridSeatNum": 25,
                          "SeatStatus": "0",
                          "seatNumber": 15
                      },
                      {
                          "GridSeatNum": 26,
                          "SeatStatus": "0",
                          "seatNumber": 16
                      },
                      {
                          "GridSeatNum": 27,
                          "SeatStatus": "0",
                          "seatNumber": 17
                      },
                      {
                          "GridSeatNum": 28,
                          "SeatStatus": "0",
                          "seatNumber": 18
                      },
                      {
                          "GridSeatNum": 29,
                          "SeatStatus": "0",
                          "seatNumber": 19
                      },
                      {
                          "GridSeatNum": 30,
                          "SeatStatus": "0",
                          "seatNumber": 20
                      },
                      {
                          "GridSeatNum": 31,
                          "SeatStatus": "0",
                          "seatNumber": 21
                      },
                      {
                          "GridSeatNum": 32,
                          "SeatStatus": "0",
                          "seatNumber": 22
                      },
                      {
                          "GridSeatNum": 33,
                          "SeatStatus": "0",
                          "seatNumber": 23
                      },
                      {
                          "GridSeatNum": 34,
                          "SeatStatus": "0",
                          "seatNumber": 24
                      },
                      {
                          "GridSeatNum": 35,
                          "SeatStatus": "0",
                          "seatNumber": 25
                      },
                      {
                          "GridSeatNum": 36,
                          "SeatStatus": "0",
                          "seatNumber": 26
                      }
                      ]
                  }
                  ]
              },
              {
                  "AreaDesc": "SPECIAL",
                  "AreaCode": "0000000002",
                  "AreaNum": "2",
                  "HasCurrentOrder": true,
                  "objRow": [
                  {
                      "GridRowId": 1,
                      "PhyRowId": "N",
                      "objSeat": [
                      {
                          "GridSeatNum": 3,
                          "SeatStatus": "0",
                          "seatNumber": 1
                      },
                      {
                          "GridSeatNum": 4,
                          "SeatStatus": "0",
                          "seatNumber": 2
                      },
                      {
                          "GridSeatNum": 5,
                          "SeatStatus": "0",
                          "seatNumber": 3
                      },
                      {
                          "GridSeatNum": 6,
                          "SeatStatus": "0",
                          "seatNumber": 4
                      },
                      {
                          "GridSeatNum": 7,
                          "SeatStatus": "0",
                          "seatNumber": 5
                      },
                      {
                          "GridSeatNum": 8,
                          "SeatStatus": "0",
                          "seatNumber": 6
                      },
                      {
                          "GridSeatNum": 9,
                          "SeatStatus": "0",
                          "seatNumber": 7
                      },
                      {
                          "GridSeatNum": 10,
                          "SeatStatus": "0",
                          "seatNumber": 8
                      },
                      {
                          "GridSeatNum": 11,
                          "SeatStatus": "0",
                          "seatNumber": 9
                      },
                      {
                          "GridSeatNum": 16,
                          "SeatStatus": "0",
                          "seatNumber": 10
                      },
                      {
                          "GridSeatNum": 17,
                          "SeatStatus": "0",
                          "seatNumber": 11
                      },
                      {
                          "GridSeatNum": 18,
                          "SeatStatus": "0",
                          "seatNumber": 12
                      },
                      {
                          "GridSeatNum": 19,
                          "SeatStatus": "0",
                          "seatNumber": 13
                      },
                      {
                          "GridSeatNum": 20,
                          "SeatStatus": "0",
                          "seatNumber": 14
                      },
                      {
                          "GridSeatNum": 21,
                          "SeatStatus": "0",
                          "seatNumber": 15
                      },
                      {
                          "GridSeatNum": 22,
                          "SeatStatus": "0",
                          "seatNumber": 16
                      },
                      {
                          "GridSeatNum": 23,
                          "SeatStatus": "0",
                          "seatNumber": 17
                      },
                      {
                          "GridSeatNum": 24,
                          "SeatStatus": "0",
                          "seatNumber": 18
                      },
                      {
                          "GridSeatNum": 25,
                          "SeatStatus": "0",
                          "seatNumber": 19
                      },
                      {
                          "GridSeatNum": 26,
                          "SeatStatus": "0",
                          "seatNumber": 20
                      },
                      {
                          "GridSeatNum": 27,
                          "SeatStatus": "0",
                          "seatNumber": 21
                      },
                      {
                          "GridSeatNum": 28,
                          "SeatStatus": "0",
                          "seatNumber": 22
                      },
                      {
                          "GridSeatNum": 29,
                          "SeatStatus": "0",
                          "seatNumber": 23
                      },
                      {
                          "GridSeatNum": 32,
                          "SeatStatus": "0",
                          "seatNumber": 24
                      },
                      {
                          "GridSeatNum": 33,
                          "SeatStatus": "0",
                          "seatNumber": 25
                      },
                      {
                          "GridSeatNum": 34,
                          "SeatStatus": "0",
                          "seatNumber": 26
                      },
                      {
                          "GridSeatNum": 35,
                          "SeatStatus": "0",
                          "seatNumber": 27
                      },
                      {
                          "GridSeatNum": 36,
                          "SeatStatus": "0",
                          "seatNumber": 28
                      },
                      {
                          "GridSeatNum": 37,
                          "SeatStatus": "0",
                          "seatNumber": 29
                      },
                      {
                          "GridSeatNum": 38,
                          "SeatStatus": "0",
                          "seatNumber": 30
                      },
                      {
                          "GridSeatNum": 39,
                          "SeatStatus": "0",
                          "seatNumber": 31
                      },
                      {
                          "GridSeatNum": 40,
                          "SeatStatus": "0",
                          "seatNumber": 32
                      }
                      ]
                  },
                  {
                      "GridRowId": 2,
                      "PhyRowId": "O",
                      "objSeat": [
                      {
                          "GridSeatNum": 7,
                          "SeatStatus": "0",
                          "seatNumber": 1
                      },
                      {
                          "GridSeatNum": 8,
                          "SeatStatus": "0",
                          "seatNumber": 2
                      },
                      {
                          "GridSeatNum": 9,
                          "SeatStatus": "0",
                          "seatNumber": 3
                      },
                      {
                          "GridSeatNum": 10,
                          "SeatStatus": "0",
                          "seatNumber": 4
                      },
                      {
                          "GridSeatNum": 11,
                          "SeatStatus": "0",
                          "seatNumber": 5
                      },
                      {
                          "GridSeatNum": 16,
                          "SeatStatus": "0",
                          "seatNumber": 6
                      },
                      {
                          "GridSeatNum": 17,
                          "SeatStatus": "0",
                          "seatNumber": 7
                      },
                      {
                          "GridSeatNum": 18,
                          "SeatStatus": "0",
                          "seatNumber": 8
                      },
                      {
                          "GridSeatNum": 19,
                          "SeatStatus": "0",
                          "seatNumber": 9
                      },
                      {
                          "GridSeatNum": 20,
                          "SeatStatus": "0",
                          "seatNumber": 10
                      },
                      {
                          "GridSeatNum": 21,
                          "SeatStatus": "0",
                          "seatNumber": 11
                      },
                      {
                          "GridSeatNum": 22,
                          "SeatStatus": "0",
                          "seatNumber": 12
                      },
                      {
                          "GridSeatNum": 23,
                          "SeatStatus": "0",
                          "seatNumber": 13
                      },
                      {
                          "GridSeatNum": 24,
                          "SeatStatus": "0",
                          "seatNumber": 14
                      },
                      {
                          "GridSeatNum": 25,
                          "SeatStatus": "0",
                          "seatNumber": 15
                      },
                      {
                          "GridSeatNum": 26,
                          "SeatStatus": "0",
                          "seatNumber": 16
                      },
                      {
                          "GridSeatNum": 27,
                          "SeatStatus": "0",
                          "seatNumber": 17
                      },
                      {
                          "GridSeatNum": 28,
                          "SeatStatus": "0",
                          "seatNumber": 18
                      },
                      {
                          "GridSeatNum": 29,
                          "SeatStatus": "0",
                          "seatNumber": 19
                      },
                      {
                          "GridSeatNum": 32,
                          "SeatStatus": "0",
                          "seatNumber": 20
                      },
                      {
                          "GridSeatNum": 33,
                          "SeatStatus": "0",
                          "seatNumber": 21
                      },
                      {
                          "GridSeatNum": 34,
                          "SeatStatus": "0",
                          "seatNumber": 22
                      },
                      {
                          "GridSeatNum": 35,
                          "SeatStatus": "0",
                          "seatNumber": 23
                      },
                      {
                          "GridSeatNum": 36,
                          "SeatStatus": "0",
                          "seatNumber": 24
                      }
                      ]
                  }
                  ]
              }
              ]
          }
          },
          "areas": [],
          "groupedSeats": []
      }
    </textarea>

  

    </script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

<script src="js/seatLayout.js"></script>
    <script>

        var seat_data = ''; 
        const seats_array = [];    

        function loadGrid() {
            var seatData = $('.inputBox').val();
            
            var nuberOfSeat = "<?php echo $_GET["seats"]; ?>";

            seatData = JSON.parse($('.inputBox').val());

            $('#book-seats').seatLayout({
                data: seatData,
                showActionButtons:true,
                classes : {
                    doneBtn : '',
                    cancelBtn : '',
                    row:'',
                    area:'',
                    screen:'',
                    seat:''
                },
                numberOfSeat: parseInt(nuberOfSeat),
                callOnSeatRender: function (Obj) {
                    return Obj;
                },
                callOnSeatSelect: function (_event, _data, _selected, _element) {
                    //console.log(_event);
                    //console.log(_data["selected"]);
                    //console.log(_selected);

                   

                    _data["selected"].forEach((element, index, array) => {
                       
                        seats_array.push(element.PhyRowId+"_"+element.seatNumber); 

                    });

                    var booked_seats = seats_array.join(",");
                    console.log(booked_seats); 
                },
                selectionDone: function (_array) 
                {
                    pay_now();
                },
                cancel: function () {
                    history.back();
                }
            });
        }

        loadGrid();

        </script>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script type="text/javascript">
         function pay_now()
        {
            var name          = ""; // Add Name
            var amount        = "<?php echo $_GET['amount']; ?>"; // Get total amount
            var actual_amount = parseInt(amount) *100;
            var description   = "Movie Booking"; // Add description

            var options = {
                "key": "rzp_test_MGWGsjkJ3Kthbl", // Add API Key
                "amount": actual_amount, 
                "currency": "INR",
                "name": "Fusion Movies",
                "description": description,
                "image": "", // Add Image
                "handler": function (response){
                    var seat_details = seats_array.toString();
                    console.log(response);
                    $.ajax({
                        url: 'payment-proccess.php',
                        'type': 'POST',
                        'data': {
                            'user': "", 
                            'payment_id':response.razorpay_payment_id,
                            'amount':actual_amount,
                            'total': amount,
                            'movie': "<?php echo $_GET["movie"]; ?>",
                            'seats': seat_details,
                        },
                        success:function(data){
                            console.log(data);
                            window.location.href = 'profile.php'; 
                        }

                    });
                },
            };

            var rzp1 = new Razorpay(options);
            rzp1.on('payment.failed', function (response){
                    alert(response.error.code);
                    alert(response.error.description);
                    alert(response.error.source);
                    alert(response.error.step);
                    alert(response.error.reason);
                    alert(response.error.metadata.order_id);
                    alert(response.error.metadata.payment_id);
            });

            rzp1.open();
        }
    </script>

    
  </body>
</html>