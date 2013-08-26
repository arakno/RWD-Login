
<a class="logo" title="take me Home!" href="http://www.arakno.net/favicon.ico"><img src="http://www.arakno.net/favicon.ico" alt="Logo"></a>

<div class="loginbox">
    <small class="register"><span class="icon-star">&nbsp;</span>Not a member yet? <a title="Get your own login" href="register.php">Sign Up here!</a></small>

    <div class="loginbox-inner">
        <header>
            <h1>Log in to <strong>your Website</strong>!
            </h1>
            <div class="alt-login">or use:
            <a href="#" class="icon-facebook">Facebook</a>
            <a href="#" class="icon-twitter">Twitter</a>
           </div>
        </header>

        <form action="server.php" id="dologin" method="POST" autocomplete="on">

            <ul>
                <li class="icon-mail">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="Email" title="Please provide a valid email address" required autofocus>
                    <span class="msg icon-warn">Your email address should be valid</span>
                </li>
                <li class="icon-pwd">
                    <label for="pwd">Password</label>
                    <input type="password" id="pwd" placeholder="Password" pattern="(?=^.{8,}$)((?=.*d)|(?=.*W+))(?![.n])(?=.*[A-Z])
(?=.*[a-z]).*" title="Minimum 8
characters, one number, one uppercase and one lowercase letter" required>
                    <span class="msg icon-warn">The password must be minimum 8 characters, one number, one uppercase and one lowercase letter</span>
                    <p class="forgot"><a title="Click here to recover your password" href="#">Forgot your password?</a></p>
                </li>
                <li>
                    <button id="submit" title="Login">Login&nbsp;<i class="icon-right">&nbsp;</i></button>
                    <label class="remember_me" for="remember_me" title="Remember my login on this computer">
                        <input type="checkbox" id="remember_me" value="yes">
                        Remember me!
                    </label>
                </li>
            </ul>



        </form>

        <div class="alert icon-success">You have Logged in Successfully! redirecting you&hellip;</div>
        <div class="alert icon-error">Login Error!</div>
    </div>

</div>

