<!DOCTYPE html>
<html lang="en">

<head>
    <title>‫‪Admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

    <link rel="stylesheet" href="css/admin.css" />
</head>

<body>
    <header class="container-fluid">
        <div class="logo"></div>
    </header>

    <div class="container-fluid main">
        <div class="row">
            <div class="col-3 d-none d-md-block"></div>
            <div class="col-md-6 justify-content-center align-items-center mt-5 ml-sm-5">



                <?php
require_once 'db_connect.php';

$query_users = 'SELECT * FROM users';
$user_statement = $db->prepare($query_users);
$user_statement->execute();
$users = $user_statement->fetchAll();
$user_statement->closeCursor();
?>

                <table class='table table-responsive table-striped mt-lg-5'>
                    <thead class='thead-dark'>
                        <tr>
                            <th scope='col'>Full Name</th>
                            <th scope='col'>Country</th>
                            <th scope='col'>Phone</th>
                            <th scope='col'>Email</th>
                        </tr>
                    </thead>
                    <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?php echo $user['full_name']; ?></td>
                        <td><?php echo $user['country']; ?></td>
                        <td><?php echo $user['phone']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                    </tr>
                    <?php endforeach;?>
                </table>
            </div>
            <div class="col-3 d-none d-md-block"></div>
        </div>
    </div>

    <footer class="container-fluid bg-secondary d-flex justify-content-center align-items-center">
        <small class="text-center">© 2020. All Rights Reserved.</small>
    </footer>
</body>

</html>