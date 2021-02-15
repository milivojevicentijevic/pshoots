<?php
include 'parts/header.php';

$first_name = '';
$last_name = '';
$email = '';
$password = '';
$gender = '';

if(isset($_POST['submit'])) {
    // get variables from the form
    if (!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['gender'])) {
        $first_name = $_POST['firstname'];
        $last_name = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        // write sql query
        $insert_query = "INSERT INTO users (firstname, lastname, email, password, gender) VALUES ('$first_name','$last_name', '$email', '$password','$gender')";
        // execute the query
        $result = $conn->query($insert_query);
        // message in the create.php page
        if ($result == TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error:".$insert_query."<br>".$conn->error;
        }
        $conn->close();
    } else {
        echo "Fill in all fields";
        if (!empty($_POST['firstname'])){ $first_name = $_POST['firstname']; }
        if (!empty($_POST['lastname'])){ $last_name = $_POST['lastname']; }
        if (!empty($_POST['email'])){ $email = $_POST['email']; }
        if (!empty($_POST['password'])){ $password = $_POST['password']; }
        if (!empty($_POST['gender'])){ $gender = $_POST['gender']; }
    }
}
?>
<div class="container col-md-4 offset-md-4 my-3">
    <h1>Signup Form</h1>
    <h4>Personal information:</h4>
    <form action="" method="POST">
    <div class="mb-3">
        <label for="firstname" class="form-label">First name:</label>
        <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $first_name?>">
    </div>
    <div class="mb-3">
        <label for="lastname" class="form-label">Last name:</label>
        <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $last_name?>">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email address:</label>
        <input type="email" class="form-control" id="email" name="email" value="<?php echo $email?>">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password:</label>
        <input type="password" class="form-control" id="password" name="password" value="<?php echo $password?>">
    </div>
    <p class="mb-2">Gender:</p>
    <div class="form-check form-check-inline mb-4">
        <input class="form-check-input" type="radio" name="gender" id="male" value="Male" <?php if($gender == 'Male') { echo "checked"; } ?> >
        <label class="form-check-label" for="male">Male</label>
    </div>
    <div class="form-check form-check-inline mb-4">
        <input class="form-check-input" type="radio" name="gender" id="female" value="Female" <?php if($gender == 'Female') { echo "checked"; } ?> >
        <label class="form-check-label" for="female">Female</label>
    </div>
    <div class="mb-3">
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
</div>

<?php include 'parts/footer.php'; ?>
