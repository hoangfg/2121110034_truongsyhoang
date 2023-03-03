<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
    <script>
        const togglePassword = (e) => {
            if (e) {
                const password = e.parentElement.querySelector('input');
                if (password) {
                    if (password.type === "password") {
                        password.type = "text";
                    } else {
                        password.type = "password";
                    }
                }
            }
        }
    </script>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="inner-box" id="card">
                <div class="card-front">
                    <h2>LOGIN</h2>
                    <form action="{{ route('login') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="group">
                            <input type="text" name="username" class="input-box" placeholder="Username" required />
                            <i class="fa-regular fa-user"></i>
                        </div>
                        <div class="group">
                            <input type="password" name="password" class="input-box" placeholder="Password" required />
                            <i class="far fa-eye btn" onclick="togglePassword(this)"></i>
                        </div>
                        <div class="group mt-3">
                            <input type="submit" name="DANGNHAP" class="submit-btn" value="Login">
                        </div>
                        <input type="checkbox" name="" id="" /><span>Remember Me</span>
                    </form>
                    <button type="button" class="btn mt-7" onclick="openRegister()">
                        I'm new here
                    </button>
                    <a href="">Forget password</a>
                </div>
                <div class="card-back">
                    <h2>REGISTER</h2>
                    <form action="">
                        <div class="group">
                            <input type="text" class="input-box" placeholder="Username" required />
                            <i class="fa-regular fa-user"></i>
                        </div>
                        <div class="group">
                            <input type="text" class="input-box" placeholder="Phone" required />
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="group">
                            <input type="email" class="input-box" placeholder="email" required />
                            <i class="fa-regular fa-envelope"></i>
                        </div>
                        <div class="group">
                            <input type="password" class="input-box" placeholder="password" required />
                            <i class="far fa-eye btn" onclick="togglePassword(this)"></i>
                        </div>

                        <div class="group">
                            <input type="submit" name="DANGNHAP" class="submit-btn" value="Register">

                        </div>
                        <input type="checkbox" name="" id="" /><span class="checkbox">Remember
                            Me</span>
                    </form>
                    <button type="button" class="btn mt-7" onclick="openLogin()">
                        I've an account
                    </button>

                </div>
            </div>
        </div>
    </div>
    <script>
        var card = document.getElementById("card");

        function openRegister() {
            card.style.transform = "rotateY(-180deg)";
        }

        function openLogin() {
            card.style.transform = "rotateY(0deg)";
        }
    </script>
</body>

</html>
