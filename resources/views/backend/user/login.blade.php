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

<body class="body-login">
    <div class="containers">
        <div class="cards">
            <div class="inner-boxs" id="card">
                <div class="card-front">
                    <h2>LOGIN</h2>
                    <form action="{{ route('admin.postlogin') }}" method="post" >
                        @csrf
                        <div class="groups mt-1">
                            <input type="text" name="username" class="input-boxs" placeholder="Username" required />
                            <i class="fa-regular fa-user"></i>
                        </div>
                        <div class="groups mt-1">
                            <input type="password" name="password" class="input-boxs" placeholder="Password" required />
                            <i class="far fa-eye btn" onclick="togglePassword(this)"></i>
                        </div>
                        <div class="groups mt-3">
                            <input type="submit" name="DANGNHAP" class="submit-btns" value="Login">
                        </div>
                        <div>
                            <input type="checkbox" name="remember" id="" /><span>Remember Me</span>
                        </div>
                        @if (isset($error))
                            <div class="mt-3">
                                <div class="text-danger text-center ">
                                    {{ $error }}
                                </div>
                            </div>
                        @endif
                    </form>
                    <button type="button" class="btn mt-7 btn-btn-login" onclick="openRegister()">
                        I'm new here
                    </button>
                    <a href="" class="forget">Forget password</a>
                </div>
                <div class="card-back">
                    <h2>REGISTER</h2>
                    <form action="">
                        <div class="groups">
                            <input type="text" class="input-boxs" placeholder="Username" required />
                            <i class="fa-regular fa-user"></i>
                        </div>
                        <div class="groups">
                            <input type="text" class="input-boxs" placeholder="Phone" required />
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="groups">
                            <input type="email" class="input-boxs" placeholder="email" required />
                            <i class="fa-regular fa-envelope"></i>
                        </div>
                        <div class="groups">
                            <input type="password" class="input-boxs" placeholder="password" required />
                            <i class="far fa-eye btn" onclick="togglePassword(this)"></i>
                        </div>
                        <div class="groups">
                            <input type="submit" name="DANGNHAP" class="submit-btns" value="Register">
                        </div>
                        <input type="checkbox" name="" id="" /><span class="checkbox">Remember
                            Me</span>
                    </form>
                    <button type="button" class="btn mt-7 btn-btn-login" onclick="openLogin()">
                        I've an account
                    </button>

                </div>
            </div>
        </div>
    </div>
    <script>
        var card = document.getElementById("cards");

        function openRegister() {
            card.style.transform = "rotateY(-180deg)";
        }

        function openLogin() {
            card.style.transform = "rotateY(0deg)";
        }
    </script>
</body>

</html>
