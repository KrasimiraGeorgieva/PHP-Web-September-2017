
<!-- Винаги когато се правят $_POST заявки да се redirect-ва. В противен случай, с презареждане на страницата (F5) се изпълнява заявката отново.-->


<form>
    <input type="text" name="redirect"/>
    <input type="submit"/>
</form>

<?php
// Redirect after $_POST

if (isset($_GET['redirect'])){
    header("Location: " . $_GET['redirect']); // примерен вход http://abv.bg или index.php
}