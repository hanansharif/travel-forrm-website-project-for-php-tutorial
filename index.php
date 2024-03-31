<?php
    if(isset($_POST['name'])){
        // $servername = "localhost";
        $servername = "mysql_server";
        $username = "root";
        $password = "root";
        $database = "bzu";

        $con = mysqli_connect($servername, $username,$password);

        if (!$con) {
            die("Connection failed: ". mysqli_connect_error());
        }
        else{
            $name = $_POST['name'];
            $age = $_POST['age'];
            $gender = $_POST['gender'];
            $phoneNumber = $_POST['phone'];
            $email = $_POST['mail'];
            $other = $_POST['other'];
    
            // echo "Connection Successfully established";
            $sql = "INSERT INTO `trip_temp`.`trip` (name, age, gender, phone, email, other, dt)
            VALUES ( '$name' , '$age' , '$gender', '$phoneNumber', '$email', '$other', current_timestamp());";
            // echo $sql;

            if($con->query($sql)){
                echo "New record created successfully";
            }
            else{
                echo "Error: ". $sql. "<br>". $con->error;
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="bg"></div>
    <div class="container rounded-4">
        <h3>Welcome to Travel Form</h3>
        <p>Enter your details and submit this form to confirm your participation.</p>
        <form action="index.php" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter yout Name">
              </div>
              <div class="mb-3">
                <label for="mail" class="form-label">Email address</label>
                <input type="email" class="form-control" id="mail" name="mail" placeholder="name@example.com">
              </div>
              <div class="mb-3">    
                <label for="phone" class="form-label">Phone</label>
                <input type="phone" class="form-control" id="phone" name="phone" placeholder="+92 123 1234567">
              </div>
              <div class="mb-3">    
                <label for="age" class="form-label">Age</label>
                <input type="number" min="10" max="100" class="form-control" id="age" name="age" placeholder="Age">
              </div>
              <div class="mb-3">
                <label for="gender" class="form-label">Gender</label>
                <input type="text" class="form-control" id="gender" name="gender" placeholder="Enter yout Gender">
              </div>
              <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  Gender
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" name="gender" id="gender">
                  <li><a class="dropdown-item" href="#">male</a></li>
                  <li><a class="dropdown-item" href="#">female</a></li>
                </ul>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea class="form-control" id="other" name="other" rows="3"></textarea>
                <div class="col-auto" style="justify-content: end; display: flex;">
                    <button type="submit" class="btn btn-primary m-3 mw-5 px-4 py-2" style="width: auto;">Submit</button>
                  </div>
              </div>
        </form>
    </div>
    <script src="index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>





<!-- INSERT INTO trip_temp.trip (name, age, gender, phone, email, other, dt)
VALUES ("John Doe", 30, "Male", 1234567890, "john.doe@example.com", "This is some additional information about the trip.", NOW());
 -->