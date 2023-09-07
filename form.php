<?php include("connection.php"); 
   if($_POST['register'])
   {
       $fname       = $_POST['name'];
       $rollno      = $_POST['rollnumber'];

       $query = "INSERT INTO recordinfo VALUES('$fname','$rollno')";

       $data = mysqli_query($connection,$query);

       if($data)
       {
           echo "data inserted";
       }
       else{
           echo "failed";
       }
   }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information Form</title>
    <style>
        /* Basic styles for the form */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
        }
        form {
            display: grid;
            gap: 20px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        
        <h2>Student Information Form</h2>
        <form action=""  method="POST">
            <label for="name">Name:</label>
            <input type="text"  name="name" >

            <label for="rollnumber">Roll Number:</label>
            <input type="text"  name="rollnumber" >
            <div class="input_field">
              <input type="submit" value="Submit"  class="btn" name="register">
            </div>

        </form>
    </div>
</body>
</html>


<?php
    
?>
