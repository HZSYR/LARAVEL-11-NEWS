<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="{{ asset('loginForm/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('loginForm/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('loginForm/css/style.css') }}" rel="stylesheet">

    <title>Login</title>
</head>

<body>
    <section class="form-02-main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="_lk_de">
                        <div class="form-03-main">
                            <div class="logo">
                                <img src="{{ asset('img/user.png') }}">
                            </div>
                            <form method="POST" action="{{ route('login.submit') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control _ge_de_ol" type="text"
                                        placeholder="Enter Email" aria-required="true" required
                                        value="{{ old('email', Cookie::get('email')) }}">
                                </div>

                                <div class="form-group">
                                    <input type="password" name="password" class="form-control _ge_de_ol" type="text"
                                        placeholder="Enter Password" aria-required="true" required
                                        value="{{ old('password', Cookie::get('password')) }}">
                                    <i class="fa fa-eye position-absolute" id="togglePassword"
                                        style="cursor: pointer; right: 20px; top: 50%; transform: translateY(-50%);"></i>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="_btn_04" id="loginButton">Login</button>
                                </div>

                                <div class="form-group nm_lk">
                                    <p>Or Register With</p>
                                </div>

                                <div class="form-group pt-0">
                                    <div class="_social_04">
                                        <ol>
                                            <li>
                                                <a href="{{ route('social.login', 'facebook') }}">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('social.login', 'twitter') }}">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('register') }}">
                                                    <i class="fa fa-google-plus"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('social.login', 'instagram') }}">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('social.login', 'linkedin') }}">
                                                    <i class="fa fa-linkedin"></i>
                                                </a>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('components.admin-footer')
    <script src="{{ asset('js/togglePassword.js') }}"></script>
</body>

</html>