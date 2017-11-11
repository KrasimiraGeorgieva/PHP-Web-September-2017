<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form>
    <label>
        Title:
        <input type="text" name="title" minlength="3" required>
    </label>
    <label>
        Description:
        <textarea name="description" minlength="10" maxlength="10000" required></textarea>
    </label>
    <label>
        Category:
        <select name="category" required></select>
    </label>
    <label>
        Location:
        <input type="text" name="location" minlength="3" required>
    </label>
    <label>
        Started on:
        <input type="datetime-local" name="started_on" required>
    </label>
    <label>
        Due date:
        <input type="datetime-local" name="due_date" required>
    </label>

    <input type="submit" name="add" value="Add">
</form>
</body>
</html>