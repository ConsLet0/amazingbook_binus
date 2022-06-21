@include("material.scriptlink")
<link rel="stylesheet" href="css/registerStyle.css">
    <div class="main bg-dark">
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Register</h2>
                        <form action="{{ url('/register') }}" method="post" class="register-form" id="register-form" enctype="multipart/form-data">
                            @csrf
                            {{-- Name --}}
                            <div class="form-group">
                                <label for="first_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input class="@error('first_name') is-invalid @enderror" type="text" id="first_name" name="first_name" placeholder="First Name "/>
                                @error('first_name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="middle_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input class="@error('middle_name') is-invalid @enderror" type="text" id="middle_name" name="middle_name" placeholder="Middle Name"/>
                                @error('middle_name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="last_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input class="@error('last_name') is-invalid @enderror" type="text" id="last_name" name="last_name" placeholder="Last Name"/>
                                @error('last_name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            
                            {{-- Email --}}
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input class="@error('email') is-invalid @enderror" type="email" id="email" name="email" placeholder="Email Address"/>
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            {{-- Gender --}}
                            <div class="form-group">
                                <span><i class="zmdi zmdi-face"></i> Gender</span>
                            </div>
                            <div class="form-group">
                                <select id="gender_id" name="gender_id" class="form-select @error('gender_id') is-invalid @enderror" aria-label="Default select example">
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                </select>
                                @error('gender_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            {{-- Role --}}
                            <div class="form-group">
                                <span><i class="zmdi zmdi-account-circle"></i> Register As</span>
                            </div>
                            <div class="form-group">
                                <select id="role_id" name="role_id" class="form-select @error('role_id') is-invalid @enderror" aria-label="Default select example">
                                    <option value="1">Admin</option>
                                    <option value="2">User</option>
                                </select>
                                @error('role_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            {{-- Upload Image--}}
                            <div class="form-group">
                                <span><i class="zmdi zmdi-upload"></i> Display Picture</span>
                            </div>
                            <div class="form-group">
                                <input class="@error('image') is-invalid @enderror" type="file" id="image" name="image" />
                                @error('image')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div> 

                            {{-- Password --}}
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input class="@error('password') is-invalid @enderror" type="password" id="password" name="password" placeholder="Password"/>
                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group form-button">
                                <button type="submit" class="btn btn-outline-dark">Register</button></div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="/login" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
@include("material.scriptjs")
