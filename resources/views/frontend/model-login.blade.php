<div class="containers">
    <div class="cards">
        <div class="inner-boxs" id="cards">
            <div class="card-front">
                <h2>LOGIN</h2>
                <form action="{{ route('site.postlogin') }}" method="post">
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
                        <input type="checkbox" name="" id="" /><span>Remember Me</span>
                    </div>
                    @if (isset($error))
                        <div class="mt-3">
                            <div class="text-danger text-center ">
                                {{ $error }}
                            </div>
                        </div>
                    @endif
                </form>
                <button type="button" class=" btn-btn-login mt-7" onclick="openRegister()">
                    I'm new here
                </button>
                <a href="" class="forget">Forget password</a>
            </div>
            <div class="card-back">
                <h2>REGISTER</h2>
                <form action="{{ route('site.register') }}" method="POST">
                    @csrf
                    <div class="groups">
                        <input type="text" name="username" class="input-boxs" placeholder="username" required />
                        <i class="fa-regular fa-envelope"></i>
                    </div>
                    <div class="groups">
                        <input type="email" name="email" class="input-boxs" placeholder="email" required />
                        <i class="fa-regular fa-envelope"></i>
                    </div>


                    <div class="groups">
                        <input type="password" name="password" class="input-boxs" placeholder="password" required />
                        <i class="far fa-eye btn" onclick="togglePassword(this)"></i>
                    </div>
                    <div class="groups">
                        <input type="password" name="confirm_password" class="input-boxs" placeholder="confirm_password" required />
                        <i class="far fa-eye btn" onclick="togglePassword(this)"></i>
                    </div>
                    <div class="groups">
                        <input type="submit" name="DANGNHAP" class="submit-btns" value="Register">
                    </div>

                </form>
                <button type="button" class=" btn-btn-login mt-7" onclick="openLogin()">
                    I've an account
                </button>

            </div>
        </div>
    </div>
</div>

{{-- 
    <div class="containers">

        <div class="forms-container">
            <div class="signin-signup">
                <form action="{{ route('site.postlogin') }}" method="post" class="forms sign-in-form">
                    @csrf

                    <h2 class="title-sign">Sign in</h2>
                    <div class="input-field-sign">
                        <i class="fas fa-user"></i>
                        <input name="username" type="text" placeholder="Username" />
                    </div>
                    <div class="input-field-sign">
                        <i class="fas fa-lock"></i>
                        <input name="password" type="password" placeholder="Password" />
                    </div>
                    <input type="submit" value="Login" class="btn-sign solid" />
                    @if (isset($error))
                        <div class="mt-3">
                            <div class="text-danger text-center ">
                                {{ $error }}
                            </div>
                        </div>
                    @endif
                    <p class="social-text-sign">Or Sign in with social platforms</p>
                    <div class="social-media-sign">
                        <a href="#" class="social-icon-sign">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon-sign">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon-sign">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon-sign">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
                <form action="{{ route('site.postlogin') }}" method="post" class="forms sign-up-form">
                    @csrf
                    <h2 class="title-sign">Sign up</h2>
                    
                    <div class="input-field-sign">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" placeholder="Email" />
                    </div>
                    <div class="input-field-sign">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" />
                    </div>
                    
                    <input type="submit" class="btn-sign" value="Sign up" />
                    @if (isset($error))
                        <div class="mt-3">
                            <div class="text-danger text-center ">
                                {{ $error }}
                            </div>
                        </div>
                    @endif
                    <p class="social-text-sign">Or Sign up with social platforms</p>
                    <div class="social-media-sign">
                        <a href="#" class="social-icon-sign">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon-sign">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon-sign">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon-sign">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel-sign left-panel-sign">
                <div class="content-sign">
                    <h3>New here ?</h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
                        ex ratione. Aliquid!
                    </p>
                    <button class="btn-sign transparent-sign sign-up-btn " id="">
                        Sign up
                    </button>
                </div>
                <img src="img/log.svg" class="image-sign" alt="" />
            </div>
            <div class="panel-sign right-panel-sign">
                <div class="content-sign">
                    <h3>One of us ?</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
                        laboriosam ad deleniti.
                    </p>
                    <button class="btn-sign transparen-sign sign-in-btn " id="">
                        Sign in
                    </button>
                </div>
                <img src="img/register.svg" class="image" alt="" />
            </div>
        </div>

    </div> --}}

