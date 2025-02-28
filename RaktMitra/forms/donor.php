<?php
    include "php/conn.php";

    if(isset($_POST['submit'])){
        $ran_id = trim($_POST['crud_id']);
        $name = trim($_POST['name']);
        $percentage = trim($_POST['percentage']);
        $number = trim($_POST['number']);
        $address = trim($_POST['address']);
        $semister = trim($_POST['semister']);
        $gender = trim($_POST['gender']);


        $date = date('d - F Y');


        $insert = mysqli_query($conn, "INSERT INTO `data`(`crud_id`, `name`, `percentage`, `number`, `address`, `semister`, `gender`, `time_created`) 
        VALUES ('$ran_id','$name','$percentage','$number','$address','$semister','$gender','$date')");

        if($insert){
            header("location: create.php?success=Client Created Successfull");
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor Registration</title>
    <link rel="stylesheet" href="/forms/donor.css">
</head>
<body>
    <div class="container">
       
        <h2>Donor Registration</h2>
        <form>
            <input type="text" placeholder="Full Name" required>
            <input type="tel" placeholder="Contact Number" required>
            
            <select required>
                <option value="" disabled selected>Select Blood Type</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
            </select>

            <input type="text" placeholder="Hospital Name" required>

            <button type="submit">Register as Donor</button>
        </form>
    </div>
</body>
</html>