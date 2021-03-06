<?php /** @var \TaskManagement\Data\CategoryDTO[] $data */ ?>
<h1>Add new Task</h1>

<form method="post">
    Title: <input type="text" name="title" minlength="3" maxlength="50"/><br/>
    Category: <select name="category_id">
        <?php foreach ($data as $category): ?>
            <option value="<?=$category->getId();?>"><?=$category->getName();?></option>
        <?php endforeach; ?>
    </select><br/>
    Description: <textarea name="description" minlength="10" maxlength="10000"></textarea><br/>
    Location: <input type="text" name="location" minlength="3" maxlength="100"/><br/>
    Started On: <input type="date" name="started_on"/><br/>
    Due date: <input type="date" name="due_date"/><br/>
    <input type="submit" name="save" value="Save"/>
</form>
<br/>
<a href="dashboard.php">List</a>