<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>newsLand</title>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

    <link rel="stylesheet" href="scss/styel.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="scss/page.css">
    <!-- <link rel="stylesheet" href="css/owl.theme.default.min.css"> -->

</head>

<body>



    <section class="login-up">
        <div class="wellcome">
           <a href="index.html"><img src="img/katwal master logo.png" alt="Ekatuwal master logo"></a>
            <div class="well-text">यहाँहरुलाई स्वागत गर्दछ !</div>
            <span>हाम्रो नियमित ग्राहक बन्न तथा प्रतिक्रिया जनाउनका लागि रजिष्टेशन गर्नुहोस् । </span>
        </div>
        <div class="container" id="container">
            <div class="form-container sign-up-container">
                <form action="#">
                    <h1>Create Account</h1>
                    <div class="social-container">
                        <a href="#" class="social" title="login with Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social" title="login with Gmail"><i class='bx bxl-gmail'></i></a>
                        <a href="#" class="social" title="login with Instagram"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="social" title="login with Viber"><i class="fa-brands fa-viber"></i></a>
                        <a href="#" class="social" title="login with Whatsapp"><i class='bx bxl-whatsapp'></i></a>
                    </div>
                    <span>or use your email for registration</span>
                    <input type="text" placeholder="Name" />
                    <input type="email" placeholder="Email" />
                    <input type="password" placeholder="Password" />
                    <button>Sign Up</button>
                </form>
            </div>
            <div class="form-container sign-in-container">
                <form action="#">
                    <h1>Sign in</h1>
                    <div class="social-container">
                        <a href="#" class="social" title="login with Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social" title="login with Gmail"><i class='bx bxl-gmail'></i></a>
                        <a href="#" class="social" title="login with Instagram"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="social" title="login with Viber"><i class="fa-brands fa-viber"></i></a>
                        <a href="#" class="social" title="login with Whatsapp"><i class='bx bxl-whatsapp'></i></a>
                    </div>
                    <span>or use your account</span>
                    <input type="email" placeholder="Email" />
                    <input type="password" placeholder="Password" />
                    <a href="#">Forgot your password?</a>
                    <button>Sign In</button>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Welcome Back!</h1>
                        <p>To keep connected with us please login with your personal info</p>
                        <button class="ghost" id="signIn">Sign In</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Hello, Friend!</h1>
                        <p>Enter your personal details and start journey with us</p>
                        <button class="ghost" id="signUp">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>

    </section>



    


    <script>
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');

        signUpButton.addEventListener('click', () => {
            container.classList.add("right-panel-active");
        });

        signInButton.addEventListener('click', () => {
            container.classList.remove("right-panel-active");
        });
    </script>









</body>

</html>