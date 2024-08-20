<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://fonts.googleapis.com/css?family=Oxygen:300,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">

   
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">

    <title>Register & Login</title>

    
</head>



<body>

    <div id="page">
        <nav class="nav-nav" role="navigation">
            <div class="container-wrap">
                <div class="top-menu">
                    <div class="row">
                        <div class="col-xs-2">
                            <div id="nav-logo"><a href="index.html">#Homes for People</a></div>
                        </div>
                        <div class="col-xs-10 text-right menu-1">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li class="active"><a href="contact.html">Get in Touch</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </nav>
    </div>

    <div class="container" id="signup" style="display: none">
        <h1 class="form-title">Register</h1>
        <form action="register.php" method="post">
            <div class="input-group">
                <span class="icon">
                    <i class="icon-user"></i>
                </span>
                <input type="text" name="fName" id="fName" placeholder="First Name" required>
                <label for="fName" >First Name</label>
            </div>
            <div class="input-group">
                <span class="icon">
                    <i class="icon-user"></i>
                </span>
                <input type="text" name="lName" id="lName" placeholder="Last Name" required>
                <label for="lName">Last Name</label>
            </div>
            <div class="input-group">
                <span class="icon">
                    <i class="icon-envelope"></i>
                </span>
                <input autocomplete="on" type="email" name="email" id="email" placeholder="Email" required>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <span class="icon">
                    <i class="icon-lock"></i>
                </span>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            <input type="submit" class="btn" value="Sign Up" name="signup">
        </form>
        <p class="or">
            ---------or-------
        </p>
        <span class="icons">
            <i class="icon-google"></i>
            <i class="icon-facebook"></i>
        </span>
        <div class="links">
            <p>Already Have an Account?</p>
            <button id="signInButton"> Sign In</button>
        </div>
    </div>

    <div class="container" id="signIn">
        <h1 class="form-title">Sign In</h1>
        <form action="register.php" method="post">
            <div class="input-group">
                <span class="icon">
                    <i class="icon-envelope"></i>
                </span>
                <input autocomplete="on" type="email" name="email" id="email" placeholder="Email" required>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <span class="icon">
                    <i class="icon-lock"></i>
                </span>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            <p class="recover">
                <a href="#">Recover Password</a>
            </p>
            <input type="submit" class="btn" value="Sign In" name="signIn">
        </form>
        <p class="or">
            ---------or-------
        </p>
        <span class="icons">
            <i class="icon-google"></i>
            <i class="icon-facebook"></i>
        </span>
        <div class="links">
            <p>Don't Have an Account?</p>
            <button id="signUpButton"> Sign Up</button>
        </div>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/main.js"></script>
    

</body>
</html>