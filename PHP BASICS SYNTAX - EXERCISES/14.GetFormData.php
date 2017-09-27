<form action="" method="GET">
    <table>
        <tr>
            <td><input type="text" name="name" required placeholder="Name"></td>
        </tr>
        <tr>
            <td><input type="number" name="age" required placeholder="Age"></td>
        </tr>
        <tr>
            <td><input type="radio" name="gender" value="male" required> Male</td>
        </tr>
        <tr>
            <td><input type="radio" name="gender" value="female"> Female</td>
        </tr>
        <tr>
            <td><input type="submit" value="Submit"></td>
        </tr>
    </table>

</form>
<?php if (isset($result)) : ?>
    <div>
        <?= $result ?>
    </div>
    <textarea type="text" rows="3" cols="50" id="result" disabled >
        <?= "\r\n" . $result ?>
    </textarea>
<?php endif; ?>