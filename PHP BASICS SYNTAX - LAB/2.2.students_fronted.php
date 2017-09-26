<form method="get">
    <div>
        Delimiter:
        <select name="delimiter" id="delimiter">
            <option value=",">,</option>
            <option value="|">|</option>
            <option value="&amp;">&amp;</option>
        </select>
    </div>
    <div>
        Names:
        <input type="text" id="names" name="names" required>
    </div>
    <div>
        Ages:
        <input type="text" id="ages" name="ages" required>
    </div>
    <div>
        <input type="submit" name="filter" value="Filter!"/>
    </div>
</form>
<?php if (isset($students)) : ?>
    <table border="1" cellpadding="0">
        <thead>
        <tr>
            <th>Name</th>
            <th>Age</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($students as $student) : ; ?>
            <tr>
                <td><?= $student->name ?></td>
                <td><?= $student->age ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>
