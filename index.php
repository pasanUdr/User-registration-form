<?php
require("connecrionDB.php");

if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $name = $_POST["name"];

    // Create connection
    // $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Insert data into database
    $sql = "INSERT INTO users  VALUES ('','$username', '$email', '$password', '$name')";
    $result = mysqli_query($conn, $sql);
    //search user
    // $sql1 = "SELECT username, name  FROM users WHERE id='12'";

    if ($result) {
        echo '<script>alert("Data Saved Successfully");</script>';
    } else {
        echo '<script>alert("Error: ' . mysqli_error($conn) . '");</script>';
    }

    // Close connection
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <script src="myscripts.js"></script>
</head>
<body>
    <div class="container mt-5">
        <h1>User Registration Form</h1>
        <form method="post" >
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" minlength="3" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email" required>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" minlength="6" required>

                <!-- An element to toggle between password visibility -->
                <input type="checkbox" onclick="passwordVisible()">Show Password
                <!-- <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">Show Password</label>
                </div> -->

            </div>
            <div class="form-group">
                <label for="cpassword">Confirm Password</label>
                <input type="password" class="form-control" id="cpassword" placeholder="Confirm Password" required>
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" maxlength="70" required>
            </div>
            <button type="submit" class="btn btn-primary btn-lg mt-3 btn-default" name="submit" id="submit" onclick="validate()">Submit</button>
        </form>
    </div>
</body>



</html>
