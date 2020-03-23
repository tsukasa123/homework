<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="1_form.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/889bd2c23c.js" crossorigin="anonymous"></script>
 
    <link href="https://fonts.googleapis.com/css2?family=Play&display=swap" rel="stylesheet">
</head>
<body>   
<main>
    <div class="landing">
      <div class="home-wrap">
        <div class="home-inner">
            <img src="img/background-purple2.jpg" alt="">
        </div>
      </div>
    </div>

    <div class="container text-center">
        <h1 class="mb-5">TWAIN CREATIVE FORMS</h1>

        <div class="d-md-flex justify-content-center">
            <div class="signin-form mx-4 mb-2 col-md-6" id="signin-form">
            <form action="1_validation.php" method="post" class="px-5">
                <h2 class="py-5">SIGN IN NOW</h2>
                <div class="input-group text-input mb-5">
                    <div class="input-group-text">
                        <i class="far fa-envelope"></i>
                    </div>
                    <input type="text" name="email" class="form-control" placeholder="E-MAIL">
                </div>
                <div class="input-group text-input mb-5">
                    <div class="input-group-text">
                        <i class="fas fa-key"></i>
                    </div>    
                    <input type="password" name="password" class="form-control" placeholder="PASSWORD">
                </div>
                <div class="input-group justify-content-center mb-5">
                    <button type="submit" class="btn btn-warning btn-lg">SIGN IN</button>
                </div>
                <a href="#"><u>Forgot Password?</u></a>
                <p class="my-4">(or)</p>
                <div class="row d-flex justify-content-center">
                    <div class="col-2"><a href="#"><i class="fab fa-facebook"></i></a></div>
                    <div class="col-2"><a href="#"><i class="fab fa-twitter"></i></a></div>
                    <div class="col-2"><a href="#"><i class="fab fa-google-plus"></i></a></div>
                </div>
            </form>
            </div>
           

            <div class="signup-form mx-4 mb-2 col-md-6" id="signup-form">
            <form method="post" action="1_registration.php" class="px-5">
                <h2 class="py-5">SIGN UP NOW</h2>
                <input type="hidden" id="id" name="id">
                <div class="input-group text-input mb-5">
                    <div class="input-group-text">
                        <i class="fas fa-user"></i>
                    </div>
                    <input type="text" name="user" class="form-control" placeholder="USERNAME">
                </div>
                <div class="input-group text-input mb-5">
                    <div class="input-group-text">
                        <i class="far fa-envelope"></i>
                    </div>
                    <input type="text" name="email" class="form-control" placeholder="E-MAIL">
                </div>
                <div class="input-group text-input mb-5">
                    <div class="input-group-text">
                        <i class="fas fa-key"></i>
                    </div>
                    <input type="password" name="password" class="form-control" placeholder="PASSWORD">
                </div>
                <div class="input-group text-input mb-5">
                    <div class="input-group-text">
                        <i class="fas fa-key"></i>
                    </div>
                    <input type="password" name="password2" class="form-control" placeholder="CONFIRM PASSWORD">
                </div>
                <div class="input-group justify-content-center mb-5">
                    <button type="submit" class="btn btn-warning btn-lg">SIGN UP</button>
                </div>
            </form>    
            </div>

            

        </div>

        <div class="footer py-4">
            <div class="row justify-content-center">
                <p>&copy;2017 Twain Creative Forms. All rights reserved | Design by <span>W3layouts</span></p>
            </div>
        </div>

    </div>
</main>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>