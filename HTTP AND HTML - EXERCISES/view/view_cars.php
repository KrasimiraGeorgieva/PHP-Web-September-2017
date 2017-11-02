<table>
    <th>Car Number</th>
    <th>Make</th>
    <th>Model</th>
    <th>Year</th>
    <?php foreach($cars as $i => $iv): ?>
    <tr>
        <td><?php echo ($iv['car_id']); ?></td>
        <td><?php echo ($iv['make']); ?></td>
        <td><?php echo ($iv['model']); ?></td>
        <td><?php echo ($iv['year_of_production']); ?></td>
    </tr>
<?php endforeach; ?>
</table>