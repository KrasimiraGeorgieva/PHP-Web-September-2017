<?php /** @var \TaskManagement\Data\UserDTO $data */ ?>
<?php foreach ($errors as $error): ?>
    <p style="color:red"><?=$error;?></p>
<?php endforeach; ?>
<form method="POST">
    Username: <br><input value="<?= $data != null ? $data->getUsername() : "" ; ?>" type="text" name="username"/><br/>
    Password: <br><input value="<?= $data != null ? $data->getPassword() : "" ; ?>" type="password"
                        name="password"/><br/>
    Confirm Password: <br><input type="password" name="confirm_password"/><br/>
    First Name: <br><input value="<?= $data != null ? $data->getFirstName() : "" ; ?>" type="text"
                         name="first_name"/><br/>
    Last Name: <br><input value="<?= $data != null ? $data->getLastName() : "" ; ?>" type="text" name="last_name"/><br/>
    <br><input type="submit" name="register" value="Register!"/>
</form>