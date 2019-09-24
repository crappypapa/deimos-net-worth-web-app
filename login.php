<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="og:title" property="og:title" content="">
    <link href="index.html" rel="canonical">
    <title>Deimos Login | Calculate Your Net Worth</title>
    <link rel="stylesheet" href="css/login.css">
    <!-- <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <input type="checkbox" name="" id="toggle_signup_1">
        <div class="row my-auto">
            <input class="d-none" type="checkbox" name="" id="toggle_signin">
            <input class="d-none" type="checkbox" name="" id="toggle_signup">
            <div class="col-sm signup-wrapper pl-0 pr-0">
                <nav class="navbar">
                    <a class="navbar-brand hide-for-large" href="index.html"><img src="./img/networth logo.svg"></a>
                    <a class="navbar-brand hide-for-small" href="index.html"><img src="./img/networth logo.svg"></a>
                </nav>
                <section>
                    <p class="text-center guide">SIGN UP WITH...</p>
                    <div class="sign-in-with-social d-flex justify-content-between">
                        <a href="https://www.google.com" class="btn align-items-center d-flex h-1450 sign-in-fb sign-in-common">
                            <img src="./img/fb-blue.png" alt="sign in with facebook" class=""> <span>FACEBOOK</span>
                        </a>
                        <a href="#" class="btn align-items-center d-flex h-45 sign-in-google sign-in-common">
                            <img src="./img/google-icon.png" alt="sign in with gmail"> <span>GOOGLE</span>
                        </a>
                    </div>
                    <div class="page-divider d-flex align-items-center">
                        <hr>
                        <span>OR</span>
                        <hr>
                    </div>
                    <form action="server.php" method="POST">
                        <h4>SIGN UP USING YOUR EMAIL ADDRESS</h4>
                        <div class="form-group general-input">
                            <input class="form-control" type="email" name="email" placeholder="EMAIL ADDRESS">
                        </div>
                        <div class="form-group general-input">
                            <input class="form-control" type="text" name="username" placeholder="USERNAME">
                        </div>
                        <div class="form-group general-input">
                            <input class="form-control" type="password" name="password" id="" placeholder="PASSWORD">
                        </div>
                        <div class="form-group general-input">
                            <input class="form-control" type="password" name="confirm_password" id="" placeholder="CONFIRM PASSWORD">
                        </div>
                        <div class="text-center">
                            <input type="submit" value="SIGN UP" name="reg_user" class="btn btn-default">
                        </div>
                    </form>
                    <div class="text-center hide-for-large">
                        <a href="#" class="returning-visitor">
                            <label class="box" for="toggle_signin">Already have an account? <span>LOGIN</span></label>
                        </a>
                    </div>
                </section>
            </div>
            <div class="col-sm signin-wrapper pl-0 pr-0">
                <nav class="navbar">
                    <a class="navbar-brand" href="index.html"><img src="./img/networth logo.svg" alt="Team Logo"></a>
                </nav>
                <section>
                    <p class="text-center guide">SIGN IN WITH...</p>
                    <div class="sign-in-with-social d-flex justify-content-between">
                        <a href="https://www.google.com" class="btn align-items-center d-flex h-1450 sign-in-fb sign-in-common">
                            <img src="./img/fb-blue.png" alt="sign in with facebook" class=""> <span>FACEBOOK</span>
                        </a>
                        <a href="#" class="btn align-items-center d-flex h-45 sign-in-google sign-in-common">
                            <img src="./img/google-icon.png" alt="sign in with gmail"> <span>GOOGLE</span>
                        </a>
                    </div>
                    <div class="page-divider d-flex align-items-center">
                        <hr>
                        <span>OR</span>
                        <hr>
                    </div>
                    <form action="server.php" method="POST">
                        <h4>SIGN IN WITH EMAIL</h4>
                        <div class="form-group general-input">
                            <input class="form-control" type="text" name="username" placeholder="Username">
                        </div>
                        <div class="form-group general-input">
                            <input class="form-control" type="password" name="password" id="" placeholder="PASSWORD">
                        </div>
                        <div class="text-center">
                            <input type="submit" value="SIGN IN" name="login_user" class="btn btn-default">
                        </div>
                    </form>
                    <div class="text-center forgotten-pass">
                        <a href="#" class="forgotten-pass"><b>Forgot password</b></a>
                    </div>
                    <div class="text-center hide-for-large">
                        <a href="#" class="returning-visitor">
                            <label class="box" for="toggle_signin">New to Deimos? <span>SIGN UP</span></label>
                        </a>
                    </div>
                </section>
            </div>
            <div class="info">
                <div class="a">
                    <a href="" class="text-center d-block">
                        <img src="./img/profile-pic.svg" alt="" class="profile-pic">
                    </a>
                    <h2 class="greetings text-center">Hello Friend</h2>
                    <p class="text-center main-message">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <div class="text-center main-button">
                        <a href="" class="">
                            <label for="toggle_signup_1">SIGN UP</label>
                        </a>
                    </div>
                </div>
                <div class="b">
                    <a href="" class="text-center d-block">
                        <img src="./img/profile-pic.svg" alt="" class="profile-pic">
                    </a>
                    <h2 class="greetings text-center">Welcome</h2>
                    <p class="text-center main-message">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <div class="text-center main-button">
                        <a href="" class="">
                            <label for="toggle_signup_1">SIGN IN</label>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- <script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>