@include("material.scriptlink")
<link rel="stylesheet" href="css/registerStyle.css">
    <div class="main bg-light">
        <!-- Log in  Form -->
        <section class="sign-in">
            <div class="container">

                @if(session()->has('registerSuccess'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('registerSuccess') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @endif

                @if(session()->has('loginErrors'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginErrors') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @endif

                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="/register" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Log In</h2>
                        <form action="{{ url('/login') }}" method="post" class="register-form" id="login-form">
                            @csrf
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="email" class="@error('email') is-invalid @enderror" id="email" placeholder="Your Email" autofocus required value="{{ old('email') }}"/>
                            
                            @error('email')
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>
                            @enderror

                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password" required/>
                            </div>
                            <div class="form-group form-button">
                                <button type="submit" class="btn btn-outline-dark">Login</button></div>
                            </div>
                        </form>
                    
                    </div>
                </div>
            </div>
        </section>
    </div>
@include("material.scriptjs")