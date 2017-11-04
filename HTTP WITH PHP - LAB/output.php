<form>
    <input type="text" name="username" />
    <input type="submit" />
</form>

<?php
// Правилния начин за ескейпване само при ПРИНТИРАНЕ на HTML страницата.
if(isset($_GET['username'])){
    echo 'Welcome ' . htmlspecialchars($_GET['username']);
    echo 'Welcome ' . htmlentities($_GET['username']); //подобна функция на горната.
// ДА СЕ ПОЛЗВА ЕДНА ОТ ДВЕТЕ САМО ПРИ ПРИНТИРАНЕ. НЕ ЕСКЕЙПВАМЕ В БАЗАТА, ПРИ ПИСАНЕ И КЪДЕТО И ДА Е ДРУГАДЕ!!!
}
?>

<hr>
<form>
    <input type="text" name="age" />
    <input type="submit" />
</form>
<?php
//  Проверка за тип данни
function printAge(int $age){
    echo $age;
}
if(isset($_GET['age'])){
    // В $age ще се запише или число, или булевата false затова провеляваме с три равенства
    $age = filter_var($_GET['age'], FILTER_VALIDATE_INT);
    if($age === false){
        echo "Error: not valid age, try again";
    }else{
        printAge($age);
    }
}
// Четейки вход от потребителя е препоръчително да се използва функцията filter_var(), а не intval() например.