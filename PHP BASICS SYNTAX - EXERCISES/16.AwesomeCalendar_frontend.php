<div class="calendar">
    <div class="year">
        <?php
        $year = 2017;
        echo $year;
        ?>
    </div>
    <hr>

    <?php
    for ($month = 1; $month <= 12; $month++) {
        printMonthTable(getMonthTable($month, $year));
    }
    ?>
</div>

