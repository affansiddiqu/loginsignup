<?php
include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Css/style.css">
    <title>Rigester Foam</title>
</head>

<body>
    <div class="container-fluid">
        <form action="Signup.php" method="post" class="form-group">
            <h1>Rigester Foam</h1>
            <label for="firstname">First Name</label>
            <input type="text" name="firstname" class="form-control" placeholder="First-Name">
            <br>
            <label for="lastname">Last Name</label>
            <input type="text" name="lastname" class="form-control" placeholder="Last-Name">
            <br>
            <label for="username">Email</label>
            <input type="email" name="username" class="form-control" placeholder="Example@123">
            <br>
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password">
            <br>
            <label for="age">Age</label>
            <input type="number" name="age" class="form-control" placeholder="Age">
            <br>
            <label for="gender">Gender</label>
            <input type="text" name="gender" class="form-control" placeholder="Male/Female">
            <br>
            <input type="Submit" value="Rigester Now" name="Submit" class="btn btn-primary">
        </form>
    </div>
    <?php
    if (isset($_POST['Submit'])) {
        $Firstname = $_POST['firstname'];
        $Lastname = $_POST['lastname'];
        $Username = $_POST['username'];
        $Password = $_POST['password'];
        $Age = $_POST['age'];
        $Gender = $_POST['gender'];

        $query = "INSERT INTO `usersinfo` (`Firstname`,`Lastname`,`Email`, `Password`,`Age`,`Gender`) VALUES ('$Firstname','$Lastname','$Username', '$Password','$Age','$Gender')";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            die("Query failed");
        }
        header("Location: http://localhost:82/ASSIGNMENT%202%20PHP/login.php");
    }
    ?>
</body>

</html>