<?php
if (isset($_POST['name'])) {
    $submit = true;
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if (!$con) {
        die("connection failed due to" . mysqli_connect_error());
    }
    // echo "successfully connecting to the database";
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $skills = $_POST['skills'];
    $email = $_POST['email'];
    $organization = $_POST['organization'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];



    $sql = "INSERT INTO `more`.`more` (`name`, `gender`, `skills`, `email`, `organization`, `phone`, `dob`) VALUES ('$name', '$gender', '$skills', '$email', '$organization', '$phone', '$dob');";

    // echo $sql;
    if ($con->query($sql) == true) {
        // echo "successfully executed";
        $insert = true;
    } else {
        echo "not inserted: $sql <br> $con->error";
    }

    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=div, initial-scale=1.0">
    <title>about</title>
    <link rel="stylesheet" href="more.css">
</head>

<body>
    <div class="form_heading">
        <h2>CONNCET WITH ME...</h1>
    </div>
    <div class="container">
        <form action="more.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your Name"><br>
            <input type="text" name="gender" id="gender" placeholder="Your Gender"><br>
            <input type="text" name="skills" id="skills" placeholder="Your Skills"><br>
            <input type="email" name="email" id="email" placeholder="Enter Your Email"><br>
            <input type="text" name="organization" id="organization" placeholder="Your Organization"><br>
            <input type="number" name="phone" id="phone" placeholder="Enter your phone number"><br>
            <input type="date" name="dob" id="dob" placeholder="D.O.B"><br><br>
            <button class="btn"> SUBMIT</button>
            <hr>
            <?php
            if ($insert == true) {
                echo "data saved in the form successfully";
            }
            ?>

        </form>
    </div>

</body>

</html>