<!DOCTYPE html>
<html lang="en">

<head>
    <title>‫‪Organic Food</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

    <link rel="stylesheet" href="css/home.css" />
</head>

<body>
    <header class="container-fluid">
        <div class="logo"></div>
    </header>

    <div class="container-fluid carousel-box">
        <div class="row">
            <div class="col-12 bg-light">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active rounded" style="background-image: url('./imgs/bananas.jpg')">
                            <div class="carousel-caption">
                                <p class="display-5 image-title">Bananas</p>
                            </div>
                        </div>

                        <div class="carousel-item rounded" style="background-image: url('./imgs/blackberry.jpeg')">
                            <div class="carousel-caption">
                                <p class="display-5 image-title">Blackberry</p>
                            </div>
                        </div>

                        <div class="carousel-item rounded" style="background-image: url('./imgs/blueberry.jpeg')">
                            <div class="carousel-caption">
                                <p class="display-5 image-title">Blueberry</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid m-0 py-4 bg-light">
        <div class="row justify-content-around">
            <img src="./imgs/grape.jpg" />
            <img src="./imgs/lettuce.jpg" />
            <img src="./imgs/orange.jpg" />
            <img src="./imgs/watermelon.jpeg" />
            <img src="./imgs/blackberry.jpeg" />
        </div>
    </div>

    <div class="container-fluid m-0 py-3 bg-light">
        <div class="row justify-content-between">
            <div class="col-lg-4 d-flex justify-content-center align-items-center">
                <div>
                    <h2 class="text-center">Organic food</h2>
                    <p>
                        <span class="font-weight-bold"> Organic food</span> is grown
                        without the use of synthetic chemicals, such as human-made
                        pesticides and fertilizers, and does not contain genetically
                        modified organisms (GMOs). Organic foods include fresh produce,
                        meats, and dairy products as well as processed foods such as
                        crackers, drinks, and frozen meals.
                    </p>

                    <p>
                        <span class="font-weight-bold">Organic produce contains fewer pesticides.</span>
                        Chemicals such as synthetic fungicides, herbicides, and
                        insecticides are widely used in conventional agriculture and
                        residues remain on (and in) the food we eat.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 d-flex justify-content-center align-items-center">
                <div class="bottom-img"></div>
            </div>
            <div class="col-lg-4 d-flex justify-content-center align-items-center">
                <form id="form" action="thanks.php" method="post">
                    <div id="message-box" style="width: 100%; height: 100%; display: none">
                        <p id="message-text"></p>
                    </div>


                    <div class="row flex-column">
                        <div class="col-12 form-group">
                            <label for="fullName"> Full Name:</label>
                            <input type="text" id="fullName" name="fullName" class="form-control"
                                placeholder="Full name" onfocusout="validateFullName()" />
                            <small class="validation-error"></small>
                        </div>

                        <div class="col-12 form-group">
                            <label for="email">Email:</label>
                            <input type="text" id="email" name="email" class="form-control" placeholder="Email"
                                onfocusout="validateEmail()" />
                            <small class="validation-error"></small>
                        </div>
                        <div class="col-12 form-group">
                            <label for="phone" class="">Tel:</label>
                            <input type="text" id="phone" name="phone" class="form-control" placeholder="Tel"
                                onfocusout="validatePhone()" />
                            <small class="validation-error"></small>
                        </div>
                        <div class="col-12 form-group">
                            <label for="phone" class="">Country</label>
                            <select class="form-control" name="country" id="country"></select>
                        </div>

                        <div>
                            <button type="submit" name="submit" id="send-form"
                                class="btn btn-block btn-secondary pull-right">
                                Submit &rarr;
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer class="container-fluid bg-secondary d-flex justify-content-center align-items-center">
        <small class="text-center">© 2020. All Rights Reserved.</small>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <script src="js/main.js"></script>
</body>

</html>