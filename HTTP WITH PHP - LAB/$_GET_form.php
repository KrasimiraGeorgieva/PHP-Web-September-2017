<form action="$_GET_form.php" method="get">
    Id: <input type="text" name="id" /><br>
    Name: <input type="text" name="name" /><br>
    Age: <input type="text" name="age" /><br>
    <input type="submit" name="Send" /><br>
</form>
<?php

var_dump($_GET);

// С $_GET може да праща без формуляр. Не е задължително да поискаш данни без да събмитваш формуляр. Всички заявки през хиперлинкове са GET-заявки. GET-заявките имат свойството да извличат данните.
?>

<a href="$_GET_form.php?id=2">Render Id 2</a><br>
<a href="$_GET_form.php?id=3">Render Id 3</a><br>
<a href="$_GET_form.php?id=4">Render Id 4</a><br>

<?php

var_dump($_GET);

//$_GET чете от т.нар QUERY_STRING, КОЙТО Е В URL-а след ? знак.