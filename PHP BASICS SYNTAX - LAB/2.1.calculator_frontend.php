<form method="get">
    <div>
        Operation:
        <select name="operation">
            <option value="sum">Sum</option>
            <option value="subtract">Subtract</option>
        </select>
    </div>
    <div>
        Number 1:
        <input type="text" name="number_one" value="<?php if(isset($numberOne))echo $numberOne; ?>"/>
    </div>
    <div>
        Number 2:
        <input type="text" name="number_two" value="<?php if(isset($numberTwo))echo $numberTwo; ?>"/>
    </div>
<?php if (isset($output)): ?>
    <div>
        Result:
        <input type="text" disabled="disabled" readonly="readonly" value="<?php echo $output; ?>"/>
    </div>
<?php endif; ?>
    <div>
        <input type="submit" name="calculate" value="Calculate!"/>
    </div>
    <br/>
    <?php if(isset($output)): ?>
    <li style="color: red"><?php echo $output; ?></li>
</form>
<?php endif; ?>