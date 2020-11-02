<?php

if (isset($_POST['submit']) && isset($_POST['fullName']) && isset($_POST['country']) && isset($_POST['phone']) && isset($_POST['email'])) {

    require_once 'db_connect.php';

    $fullName = $_POST['fullName'];
    $country = $_POST['country'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $query = "INSERT INTO users (full_name, country, phone, email)
    VALUES (:full_name, :country, :phone, :email)";

    $stm = $db->prepare($query);

    $stm->bindValue(':full_name', $fullName);
    $stm->bindValue(':country', $country);
    $stm->bindValue(':phone', $phone);
    $stm->bindValue(':email', $email);

    $execute_success = $stm->execute();
    $stm->closeCursor();

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>‫‪Thank you</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

    <link rel="stylesheet" href="css/thanks.css" />
</head>

<body>
    <header class="container-fluid">
        <div class="logo"></div>
    </header>

    <div class="container-fluid main d-flex justify-content-center align-items-center">
        <div class="text-center">
            <h1>Thank you!</h1>
            <p class="text-white">
                We have received your form and we will contact you.
            </p>
        </div>
    </div>

    <footer class="container-fluid bg-secondary d-flex justify-content-center align-items-center">
        <small class="text-center">© 2020. All Rights Reserved.</small>
    </footer>
</body>

</html>