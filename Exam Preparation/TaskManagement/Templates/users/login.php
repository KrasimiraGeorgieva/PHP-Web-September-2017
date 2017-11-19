<?php /** @var $data \TaskManagement\Data\UserDTO|null */ ?>
<?php foreach ($errors as $error): ?>
    <p style="color:red"><?=$error;?></p>
<?php endforeach; ?>
<form method="POST">
    Username: <br><input value="<?=$data != null ? $data->getUsername() : ""; ?>" type="text" name="username"/><br/>
    Password: <br><input value="<?=$data != null ? $data->getPassword() : ""; ?>" type="password" name="password"<br/>
    <br><input type="submit" name="login" value="Login!"/>
</form>