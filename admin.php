<!DOCTYPE html>
<html lang="en">
  <head>
    <title>‫‪Admin</title>
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

    <link rel="stylesheet" href="css/admin.css" />
  </head>

  <body>
    <header class="container-fluid">
      <div class="logo"></div>
    </header>

    <div class="container-fluid main">
      <div class="row">
        <div class="col-3 d-none d-md-block"></div>
        <div
          class="col-md-6 justify-content-center align-items-center mt-5 ml-sm-5"
        >
      
<?php

$servername = "localhost:3306";
$username = "root1";
$password = "root1";
$dbname = "organic_food";
  
$conn = mysqli_connect($servername,$username,$password,$dbname);


$sql = "SELECT * FROM users";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        
        echo "<table class='table table-responsive table-striped mt-lg-5'>";
           echo "<thead class='thead-dark'>";
            echo "<tr>";
                echo "<th scope='col'>Full Name</th>";
                echo "<th scope='col'>Country</th>";
                echo "<th scope='col'>Phone</th>";
                echo "<th scope='col'>Email</th>";
            echo "</tr>";
            echo "</thead>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['full_name'] . "</td>";
                echo "<td>" . $row['country'] . "</td>";
                echo "<td>" . $row['phone'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        
        mysqli_free_result($result);
    } else{
        echo "<p>Users have not been found.</p>";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

$conn -> close();
 

?>

      </div>
        <div class="col-3 d-none d-md-block"></div>
      </div>
    </div>

    <footer
      class="container-fluid bg-secondary d-flex justify-content-center align-items-center"
    >
      <small class="text-center">© 2020. All Rights Reserved.</small>
    </footer>
  </body>
</html>
