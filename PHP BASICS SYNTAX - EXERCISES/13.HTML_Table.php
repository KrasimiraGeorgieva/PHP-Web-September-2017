<style>
    table {
        border-collapse: collapse;
        table-layout: fixed;
    }
    td {
        border: 1px solid black;
        padding: .2em;
    }
</style>
<?php
$information = [];
$information['Name'] = 'Gosho';
$information['Phone Number'] = '0882-321-423';
$information['Age'] = 24;
$information['Address'] = 'Mladost';
?>

<table>
    <thead></thead>
    <tbody>
    <?php foreach ($information as $key => $value): ?>
        <tr>
            <td bgcolor="#ffffe0" ><?php echo $key; ?></td>
            <td><?php echo $value; ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>