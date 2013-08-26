<?php
include "header.php";
?>


<div class="loginbox" id="outlogin">

<p class="register"><span class="icon-star">&nbsp;</span>go back <a class="login" title="Login to your website" href="index.php">to Login!</a></p>

    <div class="loginbox-inner">
        <header>

            <h1>Signup Steps</h1>
            <small>As easy as 1, 2, 3&hellip;</small>

        </header>
        <form id="register" action="server.php"  method="POST" autocomplete="on">
          <fieldset>
            <legend><strong>Step 1.</strong> : Login details</legend>
            <h3>Pick a login name.<br>
            <small class="help">Your login name will be your email address.
            </small>
            </h3>

            <ul>
                <li class="icon-mail">
                    <label for="email1">Login / email</label>
                    <input id="email1" required="required" placeholder="Email" autofocus="autofocus" type="email">
                </li>
                <li class="icon-mail">
                    <label for="email2">Repeat Email</label>
                    <input id="email2" required="required" placeholder="Repeat Email" type="email">
                </li>
            </ul>
            <small>Choose it wisely and be sure to check your spam folder afterwards.</small>
            <span class="msg">You must enter a valid email address to activate your account.</span>
        </fieldset>
        <fieldset>
            <legend><strong>Step 2.</strong> : Password</legend>
            <h3>Choose a password for your new account.<br>
                <small class="help">The password must be minimum 8 characters, one number, one uppercase and one lowercase letter.</small></h3>
                <ul>
                    <li class="icon-pwd">
                        <label for="password1">Password</label>
                        <input id="password1" required="required" placeholder="Password" type="password">
                    </li>
                    <li class="icon-pwd">
                        <label for="password2">Repeat Password</label>
                        <input id="password2" required="required" placeholder="Retype Password" type="password">
                    </li>
                </ul>

                <span class="msg">The password choosen does not match the pattern.</span>
                <span class="msg2">The passwords do not match.</span>
            </fieldset>
            <fieldset>
                <legend><strong>Step 3 </strong> : There is no step three, just go ahead and submit the form</legend>
                <h3></h3>
                <input id="submitform" value="Complete Signup »" type="submit">
                <h4>Terms of Service</h4>
                <small id="disclaimer">By pressing submit I agree to be launched to space as a test-pilot.</small>
            </fieldset>
        </form>

    </div>
</div>

<?php
include "footer.php";