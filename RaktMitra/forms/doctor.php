<?php
    include "conn.php";

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
    <title>Blood Donation Dashboard</title>
    <link rel="stylesheet" href="/forms/doctor.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h2 class="logo">BloodConnect</h2>
        <ul>
            <li class="active"><i class="fas fa-tachometer-alt"></i> Dashboard</li>
            <li><i class="fas fa-user"></i> Donors</li>
            <li><i class="fas fa-hospital"></i> Requests</li>
            <li><i class="fas fa-chart-line"></i> Analytics</li>
            <li><i class="fas fa-cogs"></i> Settings</li>
        </ul>
        
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <header>
            <input type="text" placeholder="Search donors, hospitals...">
            <div class="user-info">
                <p>Admin</p>
                <small>skashaf0108@gmail.com</small>
            </div>
        </header>

        <!-- Dashboard Cards -->
        <section class="dashboard-cards">
            <div class="card">
                <h3>Available Donors</h3>
                <p>0</p>
            </div>
            <div class="card">
                <h3>Active Requests</h3>
                <p>0</p>
            </div>
            <div class="card">
                <h3>Total Donations</h3>
                <p>0</p>
            </div>
            <div class="card urgent">
                <h3>Urgent Cases</h3>
                <p>0</p>
            </div>
        </section>

        <!-- Hospital Requests & Donor List -->
        <div class="dashboard-grid">
            <div class="hospital-requests">
                <h3>Hospital Requests</h3>
                <ul>
                    <li>City Hospital - O+ Needed <span class="urgent">Urgent</span></li>
                    <li>Green Clinic - A- Needed</li>
                    <li>Care Medical - B+ Needed</li>
                    <li>Metro Health - AB- Needed</li>
                </ul>
            </div>

            <div class="donor-list">
                <h3>Donor Availability</h3>
                <ul>
                    <li>John Doe - O+ <span class="available">Available</span></li>
                    <li>Sarah Khan - A- <span class="available">Available</span></li>
                    <li>Mike Ross - B+ <span class="busy">Donated Recently</span></li>
                    <li>Emily Smith - AB- <span class="available">Available</span></li>
                </ul>
            </div>
        </div>

        
    </div>

</body>
</html>