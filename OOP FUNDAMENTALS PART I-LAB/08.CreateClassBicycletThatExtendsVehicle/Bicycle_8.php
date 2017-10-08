<?php
declare(strict_types = 1);
class Bicycle_8 extends Vehicle_8
{
    private $brand;
    private $model;
    private $year;
    private $forSkirt;
    private $mode;

    public function __construct(string $color, string $brand, string $model, int $year)
    {
        parent::__construct($color, 0);
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->setDoors();
    }

    public function setRideStop($mode)
    {
        if ($mode == 1) {
            $this->mode = 1;
        } else {
            $this->mode = 0;
        }
    }

    public function getRideStop(): string
    {
        switch ($this->mode) {
            case 1:
                return 'rides the bike';
                break;
            case 0:
                return 'stop the bike';
                break;
            default:
                return 'no info ';
                break;
        }
    }

    public function setForSkirt($forSkirt)
    {
        if ($forSkirt) {
            $this->forSkirt = 1;
        } else {
            $this->forSkirt = 0;
        }
    }

    public function getForSkirt(): string
    {
        switch ($this->forSkirt) {
            case 1:
                return 'for skirt';
                break;
            case 0:
                return 'not for skirt';
                break;
            default:
                return 'no info';
                break;
        }
    }

    public function setDoors()
    {

    }

    public function __toString()
    {

        return
            "
<head>
<h1 align='center' style='color: gray'>TAKE YOUR BICYCLE<h1>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    color: grey;
}

tr:nth-child(even) {
    background-color: #e6e6e6;
}
</style>
</head>

<body>
<div>
    <table>   
        <tr>
            <th>BRAND</th>
            <th>MODEL</th>
            <th>YEAR</th>
            <th>COLOR</th>               
            <th>DOORS</th>
            <th>SKIRT</th>
            <th>RIDE/STOP</th>
        </tr>
        <tr>
            <td>" . $this->brand . "</td>
            <td>" . $this->model . "</td>
            <td>" . $this->year . "</td>
            <td>" . parent::getColor() . "</td>                        
            <td>" . $this->getNumberDoors() . "</td>
            <td>" . $this->getForSkirt() . "</td>
            <td>" . $this->getRideStop() . "</td>
        </tr>
    </table>
</div>
</body>
";
    }
}