<form method="post">
<table>
    <th>Make</th>
    <th>Model</th>
    <th>Year</th>
    <th>Car ID</th>
    <th>Owner first name</th>
    <th>Owner last name</th>
    <th>Customer ID</th>

    <?php foreach($customers as $i => $iv): ?>
        <tr>
            <td><?php echo($iv['make']);        ?></td>
            <td><?php echo($iv['model']);       ?></td>
            <td><?php echo($iv['year_of_production']);        ?></td>
            <td><?php echo($iv['car_id']);        ?></td>
            <td><?php echo($iv['first_name']);        ?></td>
            <td><?php echo($iv['family_name']);        ?></td>
            <td><?php echo($iv['customer_id']);        ?></td>

        </tr>
    <?php endforeach; ?>
</table>
</form>