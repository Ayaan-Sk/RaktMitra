<?php
    include "php/conn.php";

    if(isset($_POST['submit'])){
        $sr_no = trim($_POST['sr_no']);
        $name = trim($_POST['name']);
        $contact = trim($_POST['contact']);
        $bt = trim($_POST['bt']);
        $hn = trim($_POST['hn']);
       

        $insert = mysqli_query($conn, "INSERT INTO doctor(sr_no, name, contact, bt, hn) 
        VALUES ('$sr_no','$name','$contact','$bt','$hn')");

        if($insert){
            header("success=Client Created Successfull");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <title>Crud Project</title>
</head>
<body>
    <div class="container my-5">
        <h2>New Student</h2>
        <br>
        <br>

        <form action="" method="post">
            <?php
                if(isset($_GET['success'])){
                    echo '<div class="w-25 alert alert-success" role="alert">'.$_GET['success'].'</div>';
                }
            
            ?>
             <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Full Name</label>
                <div class="col-sm-6">
                    <input type="text" name="sr_no" class="form-control" placeholder="Full Name" required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Contact Number</label>
                <div class="col-sm-6">
                    <input type="number" name="name" class="form-control" placeholder="Contact Number" required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Blood Type</label>
                <div class="col-sm-6">
                    <input type="name" name="contact" class="form-control" placeholder="Select blood type" required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Hospital Name</label>
                <div class="col-sm-6">
                    <input type="text" name="bt" class="form-control" placeholder="hospital name" required>
                </div>
            </div>
            
            <div class="row mb-3">
               <button type="submit" name="submit" class="col-sm-3 btn btn-primary">Submit</button>
                <div class="col-sm-6">
                   <a href="home.php" class="btn btn-outline-primary">Go Back</a>
                </div>
            </div>
        </form>


    </div>
</body>
</html>