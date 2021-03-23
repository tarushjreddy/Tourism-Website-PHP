<?php
$insert = false;
if (isset($_POST['name'])) {
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if (!$con) {
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO `Trip`.`trip` (`name`, `age`, `gender`, `email`, `password`,`Date`) VALUES ('$name', '$age', '$gender', '$email', '$password', current_timestamp());";
    // echo $sql;

    // Execute the query
    if ($con->query($sql) == true) {
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    } else {
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="./style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />

    <title>Travel-Pro</title>
</head>

<body>
    <!-- Image and text -->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid" style="
          display: flex;
          align-items: center;
          flex-direction: row;
          justify-content: flex-start;
        ">
            <img src="./4136591.jpg" alt="" style="background-color: white; border-radius: 20px" width="45" height="44" class="d-inline-block align-top" />
            <a href="#" style="
            text-decoration: none;
            color: white;
            margin-left: 10px;
            font-size: 25px;
          ">
                Travel-Pro
            </a>
        </div>
    </nav>
    <div class="jumbotron jumbotron-fluid" style="
        background-color: rgba(206, 206, 206, 0.5);
        margin: auto;
        max-width: 80%;
        margin-top: 10px;
      ">
        <div class="container" style="margin: auto; max-width: 80%">
            <h4 class="display-4" style="padding-top: 20px; text-align: center; font-size: 50px">
                Ticket Booking Portal
            </h4>
            <form action="main.php" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Full Name</label>
                    <input type="name" class="form-control" id="name" name="name" aria-describedby="emailHelp" />
                    <!-- <div id="emailHelp" class="form-text">
              We'll never share your name with anyone else.
            </div> -->
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Age</label>
                    <input type="age" class="form-control" id="age" name="age" aria-describedby="emailHelp" />
                    <!-- <div id="emailHelp" class="form-text">
              We'll never share your age with anyone else.
            </div> -->
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Gender</label>
                    <input type="gender" class="form-control" id="gender" name="gender" aria-describedby="emailHelp" />
                    <!-- <div id="emailHelp" class="form-text">
              We'll never share your age with anyone else.
            </div> -->
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
                    <div id="emailHelp" class="form-text">
                        We'll never share your email with anyone else.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" />
                </div>
                <!-- <div class="mb-3 form-check">
            <input
              type="checkbox"
              class="form-check-input"
              id="exampleCheck1"
            />
            <label class="form-check-label" for="exampleCheck1"
              >Check me out</label
            >
          </div> -->
                <button type="button" class="btn btn-danger" style="margin-right: 10px; margin-bottom: 20px">
                    Danger
                </button>
                <button type="submit" class="btn btn-primary" style="margin-right: 10px; margin-bottom: 20px">
                    Submit
                </button>
            </form>
        </div>
    </div>

    <script src="./index.js
"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>