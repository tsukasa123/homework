<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="2_form.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<main>
    <div class="landing">
      <div class="home-wrap">
            <img src="img/background-purple3.jpg" alt="">
      </div>
    </div>

    <div class="container">
        <h1 class="text-center py-5">CREATIVE SIGN IN & SIGN UP FORM</h1>

        <div class="contact-wrap d-lg-flex justify-content-center">

            <div class="contact-form px-5" style="width: 500px; height: 540px;">
                <form action="2_signin.php" method="post">
                    <div class="input-group mt-4 py-4">
                        <h3 class="pb-2" style="border-bottom: 4px solid #EC4988;">Sign In</h3>
                        <h3 class="px-4">/</h3>
                        <h3>Sign Up</h3>
                    </div>
                    <div class="input-group d-block mb-3">
                        <p for="">User Name</p>
                        <input type="text" name="username" class="form-control">
                    </div>
                    <div class="input-group d-block mb-4">
                        <p for="">Password</p>
                        <input type="text" name="password" class="form-control">
                    </div>
                    <div class="input-group mb-4">
                        <div class="mycheckbox">
                            <input type="checkbox" name="checkbox" class=""><label for="checkbox">Remember me?</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline-danger form-control">SIGN IN</button>
                </form>
                <div class="row justify-content-center">
                    <a href="#" class="f-password mt-5">FORGOT PASSWORD?</a>
                </div>
            </div>


            <div class="img-wrap">
                <div class="img-inner">

                </div>
            </div>

            <div class="image-wrap" style="width: 380px; height: 540px;">
                <img src="img/office-img3.png" alt="">
            </div>

        </div>

        <div class="footer">
            <div class="row justify-content-center py-4 mb-5">
                <p>&copy; 2017 Creative Sign In & Sinn Up Forms. All Rights Reserved | Design by <span>W3layouts</span></p>
            </div>
        </div>
    </div>

</main>




<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>