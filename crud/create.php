<?php
include 'config.php';

if(isset($_POST['submit'])) {
    // get variables from the form
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    // write sql query
    $sql = "INSERT INTO users (firstname, lastname, email, password, gender) VALUES ('$first_name','$last_name', '$email', '$password','$gender')";
    // execute the query
    $result = $conn->query($sql);
    if ($result == TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error:".$sql."<br>".$conn->error;
    }
    $conn->close();
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup form</title>
</head>
<body>
    <h2>Signup Form</h2>
    <form action="" method="POST">
        <fieldset>
            <legend>Personal information:</legend>
            <p>First name:</p>
            <input type="text" name="firstname">
            <p>Last name:</p>
            <input type="text" name="lastname">
            <p>Email:</p>
            <input type="email" name="email">
            <p>Password:</p>
            <input type="password" name="password">
            <p>Gender:</p>
            <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="Female">Female
            <br><br>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>