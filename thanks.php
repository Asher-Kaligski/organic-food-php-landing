
<?php

if (isset($_POST['fullName']) && isset($_POST['country']) && isset($_POST['phone']) && isset($_POST['email'])){

$servername = "localhost:3306";
$username = "root1";
$password = "root1";
$dbname = "organic_food";
    
$conn = mysqli_connect($servername,$username,$password,$dbname);

$fullName = $_POST['fullName'];
$country = $_POST['country'];
$phone = $_POST['phone'];
$email = $_POST['email'];


$sql = "INSERT INTO users (full_name, country, phone, email) 
VALUES ('$fullName', '$country', '$phone', '$email')";

if(mysqli_query($conn, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}


$conn -> close();

}
 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>‫‪Thank you</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="css/thanks.css" />
  </head>

  <body>
    <header class="container-fluid">
      <div class="logo"></div>
    </header>

    <div
      class="container-fluid main d-flex justify-content-center align-items-center"
    >
      <div class="text-center">
        <h1>Thank you!</h1>
        <p class="text-white">
          We have received your form and we will contact you.
        </p>
      </div>
    </div>

    <footer
      class="container-fluid bg-secondary d-flex justify-content-center align-items-center"
    >
      <small class="text-center">© 2020. All Rights Reserved.</small>
    </footer>
  </body>
</html>
