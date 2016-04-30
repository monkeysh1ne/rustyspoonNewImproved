<?php

if ($_POST['submit']) {

    if (!$_POST['name']) {
        $error = "<br/>- Please enter your name";
    }
    if (!$_POST['email']) {
        $error .= "<br/>- Please enter your email";
    }
    if (!$_POST['message']) {
        $error .= "<br/>- Please enter your message";
    }
    if (!$_POST['check']) {
        $error .= "<br/>- Please confirm you are human ;) ";
    }

    if ($error) {
        $result = "Bugger!, there is an error.  Please correct the following: $error";
    }
}








?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RustySpoon Web Design - Contact Us</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/get-shit-done.css">
    <link rel="stylesheet" href="./css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Lora|Open+Sans" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="container topBanner">
        <div class="bannerLeft">
            <h1>Welcome to <span class="rusty">RustySpoon</span></h1></div>
        <div class="bannerRight">
            <h1>Web Design</h1>
            <div class="logoTop"><img id="rsLogoSml" src="img/rsLogo.png" alt="rustyspoon logo small"></div>
        </div>
    </div>
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h1>Contact Form</h1>
                    <?php echo $result; ?>
                    <p>Send a message via the form below</p>
                    <form method="post" action="" role="form">

                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder"Your name" value="<?php echo $_POST['name'];?>">
                        </div>

                       <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder"Your email" value="<?php echo $_POST['email'];?>">
                        </div>

                       <div class="form-group">
                            <textarea name="message" rows="5" class="form-control" placeholder="Message..."><?php echo $_POST['message'];?></textarea>
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="check"> I am human
                            </label>
                        </div>

                        <div align="center"
                            <input type="submit" name="submit" class="btn btn-default" value="Send messsage"/>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
        <div class="footer">
            <p>©2016 RustySpoon Web Design</p>
        </div>
        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/bootstrap.js"></script>
    </div>
</body>

</html>