<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head><link rel="stylesheet" href="css/bootstrap.min.css">
<body>

    <form action="" method="POST">
    <div class="container" mt-5>
    <div class="justfy-content-center">
        <div class="cal-md-5">
            <div class="card shadow">
                <div class="card-header bg-primary ">
            <h1 class="text-center text-white"> course registration</h1>
            </div>
            <div class="card-body">
                <label form="name" class="form-label">Course Name</label>
                <input type="text" name="c_name" class="form-control">
                <label form="name" class="form-label">Course Period</label>
                <input type="text" name="period" class="form-control">
                <label form="name" class="form-label">Course Date</label>
                <input type="date" name="date" class="form-control"><br>
                <button type="submit" name="send" class=" btn btn-danger">Send</button>
                 <button type="submit" name="cancel" class=" btn btn-warning">Cancel</button>
            </div>
                
            </div>
        </div>
</div>
</div>
</form>
</body>
</html>

<?php 
include("connection.php");
if(isset($_POST['send'])){
    $a=$_POST['c_name'];
    $b=$_POST['period'];
    $c=$_POST['date'];
    $query=mysqli_query($conn,"insert into course values('','$a','$b','$c')");
    if($query==TRUE){
        echo"data inserted!!!!!";

    }else{
        echo"data inserted fail";
    }
}





?>