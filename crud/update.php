<?php
include 'config.php';

// if the update button is clicked, we do process the form
if (isset($_POST['update'])) {
    $firstname = $_POST['firstname'];
    $user_id = $_POST['user_id'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    // query
    $sql = "UPDATE users SET firstname ='$firstname', lastname ='$lastname', email='$email', password='$password', gender='$gender' WHERE id=$user_id";
    // execution
    $result = $conn->query($sql);
    if ($result == TRUE) {
        echo "New updated successfully";
    } else {
        echo "Error:".$sql."<br>".$conn->error;
    }
}

// if the 'id' variable is set in the url, we can edit our record
if(isset($_GET['id'])) {
    $user_id = $_GET['id'];
    // write query to get user's data
    $sql = "SELECT * FROM users WHERE id=$user_id";
    // execute the query
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ( $row = $result->fetch_assoc()) {
            $first_name = $row['firstname'];
            $last_name = $row['lastname'];
            $email = $row['email'];
            $password = $row['password'];
            $gender = $row['gender'];
            $id = $row['id'];
        }
    ?>
        <h2>User Update Form</h2>
        <form action="" method="POST">
            <fieldset>
                <legend>Personal information:</legend>
                <p>First name:</p>
                <input type="text" name="firstname" value="<?php echo $first_name; ?>">
                <input type="hidden" name="user_id" value="<?php echo $id; ?>">
                <p>Last name:</p>
                <input type="text" name="lastname" value="<?php echo $last_name; ?>">
                <p>Email:</p>
                <input type="email" name="email" value="<?php echo $email; ?>">
                <p>Password:</p>
                <input type="password" name="password" value="<?php echo $password; ?>">
                <p>Gender:</p>
                <input type="radio" name="gender" value="Male" <?php if($gender == "Male") { echo "checked";} ?>>Male
                <input type="radio" name="gender" value="Female" <?php if($gender == "Female") { echo "checked";} ?>>Female
                <br><br>
                <input type="submit" name="update" value="Update">
            </fieldset>
        </form>
    <?php

    } else {
        // if the 'id' value is not valid
        header('location: view.php');
    }
}


?>