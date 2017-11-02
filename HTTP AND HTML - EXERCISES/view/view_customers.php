<table>
    <th>Customer Number</th>
    <th>First Name</th>
    <th>Last Name</th>
    <?php foreach($customers as $i => $iv): ?>
        <tr>
            <td><?php echo($iv['customer_id']); ?></td>
            <td><?php echo($iv['first_name']); ?></td>
            <td><?php echo($iv['family_name']); ?></td>
        </tr>
    <?php endforeach; ?>
</table>