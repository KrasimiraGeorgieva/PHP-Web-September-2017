<form action="">
    <div>
        <textarea name="input" id="input" cols="70" rows="3" title="input"></textarea>
    </div>
    <div>
        <input type="submit" value="Color text">
    </div>
</form>
<?php
if (isset($_GET["input"]) && !empty(trim($_GET["input"]))) {
    $text = trim($_GET["input"]);
    for ($ch = 0; $ch < strlen($text); $ch++) {
        if (!empty(trim($text[$ch]))) {
            $letter = colored($text[$ch]);
            echo "{$letter}";
        }
    }
}
function colored($item) {
    $color = ord($item) % 2 == 0 ? "red" : "blue";
    return "<span style='color: $color'> {$item} </span>";
}