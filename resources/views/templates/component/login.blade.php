<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    Sign In & Sign Up
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <section>
                    <div class="modal-body">
                        <div class="w3_login_module">
                            <div class="module form-module">
                                <div class="toggle"><i class="fa fa-times fa-pencil"></i>
                                    <div class="tooltip">Click Me</div>
                                </div>
                                <div class="form">
                                    <h3>Login to your account</h3>
                                    <form action="{{ route('login.authenticate') }}" method="post">
                                        @csrf
                                        @if ($errors->has('notif'))
                                            <div class="alert alert-danger">
                                                {{ $errors->first('notif') }}
                                            </div>
                                        @endif
                                        <input type="text" name="email" placeholder="Email" required=""
                                            class="@error('email') is-invalid @enderror" value="{{ old('email') }}"
                                            autocomplete="off">
                                        <input type="password" name="password" placeholder="Password" required=""
                                            autocomplete="off">
                                        <input type="submit" value="Login">
                                    </form>
                                </div>
                                <div class="form">
                                    <h3>Create an account</h3>
                                    <form action="{{ route('register.store') }}" method="POST">
                                        @csrf
                                        <input type="text" name="name" placeholder="Username">
                                        <input type="password" name="password" placeholder="Password">
                                        <input type="email" name="email" placeholder="Email Address">
                                        <input type="text" name="alamat" placeholder="Alamat">
                                        <input type="text" name="umur" placeholder="Umur">
                                        <input type="text" name="bio" placeholder="Bio">
                                        <input type="submit" value="Register">
                                    </form>
                                </div>
                                <div class="cta"><a href="#">Forgot your password?</a></div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
<script>
    $('.toggle').click(function() {
        // Switches the Icon
        $(this).children('i').toggleClass('fa-pencil');
        // Switches the forms
        $('.form').animate({
            height: "toggle",
            'padding-top': 'toggle',
            'padding-bottom': 'toggle',
            opacity: "toggle"
        }, "slow");
    });
</script>
</body>

</html>