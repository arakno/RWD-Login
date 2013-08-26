<?php
include "header.php";

?>
<a class="logo" title="take me Home!" href="https://www.arakno.net/"><img src="http://www.arakno.net/favicon.ico" alt=" Logo"></a>

<div class="loginbox">


    <!-- MSSGs -->
    <div id="info">



            <div id="success" class="icon-success"> You have Logged in Successfully with username <strong></strong>! redirecting you&hellip;<small>hmm... or maybe not</small></div>

           <div id="errors" class="icon-error">
            There were some problems with your login:
            <ul>

                    <li></li>

                </ul>
            </div>
    </div>

    <!-- MSGs -->

    <p class="register"><span class="icon-star">&nbsp;</span>Not a member yet? <a title="Get your own login" href="register.php">Sign Up here!</a></p>

    <div class="loginbox-inner">
        <header>
            <h1>Log in to <strong>own login</strong>!
            </h1>
            <div class="alt-login">or use:
                <a href="#" class="icon-facebook">Facebook</a>
                <a href="#" class="icon-twitter">Twitter</a>
            </div>
        </header>

        <form action="server.php" id="dologin" name="dologin" method="POST" autocomplete="on">

            <ul>
                <li class="icon-mail">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Email"  value="<?php echo ($sr && !$lf['form_ok']) ? $lf['posted_form_data']['email'] : '' ?>" title="Please provide a valid email address" required="required" autofocus="autofocus">
                    <span class="msg icon-warn">Your email address should be valid</span>
                </li>
                <li class="icon-pwd">
                    <label for="pwd">Password</label>
                    <input type="password" id="pwd" name="pwd" maxlength="24" pattern="^(?=.*\d)(?=.*[a-zA-Z]).{8,}$" placeholder="Password"  value="<?php echo ($sr && !$lf['form_ok']) ? $lf['posted_form_data']['pwd'] : '' ?>" title="Minimum 8
                    characters, one number" required="required">
                    <span class="msg icon-warn">The password must be minimum 8 characters and at least one number</span>
                    <p class="forgot"><a title="Click here to recover your password" href="#">Forgot your password?</a></p>
                </li>
                <li>
                    <button id="submit" name="submit" class="gradient" title="Login">Login&nbsp;<i class="icon-right">&nbsp;</i></button>
                    <label class="remember-me" for="remember-me" title="Remember my login on this computer">
                        <input type="checkbox" id="remember-me" name="remember-me" value="yes">
                        Remember me!
                    </label>
                </li>
            </ul>
        </form>

    </div>

</div>

<?php
include "footer.php";