<h1>REGISTER NEW USER</h1>
<p style="color:lightgreen">Username already taken!</p>
<form method="post">
    Username: <input type="text"  name="username" required="required" minlength="4"/><br/>
    Password: <input type="password" name="password" required="required" minlength="6"/><br/>
    Confirm Password: <input type="password" name="confirm_password" required="required" minlength="6"/><br/>
    Full Name: <input type="text"  name="full_name" required="required" minlength="5"/><br/>
    Born On: <input type="date"  name="born_on" required="required" min="1900" max="2017"/><br/>
    <input type="submit" name="register" value="Register now"/>
</form>
