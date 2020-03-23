<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="3_form.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/889bd2c23c.js" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container">

        <div class="contact-wrap d-block mx-auto text-center">
            <div class="row close-button">
                <i class="fas fa-times"></i>
            </div>

            <div class="close">
                <a href="#"></a>
            </div>
            <div class="form-text row">
                <h2>Your feedback counts!</h2>
            </div>
            <div class="form-text row">
                <p class="text-p1">Thank you very much for trying out the New OptiMonk Editor. We would really like to<br> know your opinion.</p>
                <hr>
                <p class="mb-0 text-p2">How easy was the New Editor for you?<br></p>
                <span>(1- it was very hard 5- it was very easy)</span>
            </div>
            <form action="3_server.php" method="post">
                <div class="input-group d-flex mb-2">
                    <div class="radio-box"><input type="radio" name="number" value="1"><label for="1">1</label></div>
                    <div class="radio-box"><input type="radio" name="number" value="2"><label for="2">2</label></div>
                    <div class="radio-box"><input type="radio" name="number" value="3"><label for="3">3</label></div>
                    <div class="radio-box"><input type="radio" name="number" value="4"><label for="4">4</label></div>
                    <div class="radio-box"><input type="radio" name="number" value="5"><label for="5">5</label></div>
                </div>
                <div class="form-text row float-left pl-4">
                    <p>Please write your comments below:</p>
                </div>
                <div class="input-group">
                    <textarea name="textarea" class="form-control" cols="30" rows="4" placeholder="I THINK THAT THE NEW EDITOR..."></textarea>
                </div>
                <div class="input-group input-email mb-3">
                    <input type="text" name="email" class="form-control" placeholder="EMAIL ADDRESS">
                </div>
            <button type="submit" name="submit" class="btn btn-primary btn-lg">SUBMIT</button>
            </form>
        </div>
    
    </div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>