<?php

class Worker extends Human{
    private $weeklySalary;
    private $hoursPerDay;
    private $salaryPerHour;

    public function __construct(string $firstName, string $lastName, $weeklySalary, $hoursPerDay){
        parent::__construct($firstName, $lastName);
        $this->setWeeklySalary($weeklySalary);
        $this->setHoursPerDay($hoursPerDay);
    }

    protected function setWeeklySalary($weeklySalary){
        if ($weeklySalary <= 10) {
            exit("Expected value mismatch!Argument: weekSalary");
        }
        $this->weeklySalary = $weeklySalary;
    }

    protected function setHoursPerDay($hoursPerDay){
        if ($hoursPerDay < 1 || $hoursPerDay > 12) {
            exit("Expected value mismatch!Argument: workHoursPerDay");
        }
        $this->hoursPerDay = $hoursPerDay;
    }

    private function setSalaryPerHour()
    {
        return number_format($this->weeklySalary / (7  * $this->hoursPerDay),
            2,'.','');
    }
    private function getWeeklySalary()
    {
        return number_format($this->weeklySalary, 2, '.', '');
    }

    private function getWorkHoursPerDay()
    {
        return number_format($this->hoursPerDay, 2, '.', '');
    }

    private function getSalaryPerHour(){
        return number_format($this->weeklySalary/7/$this->hoursPerDay, 2, '.', '');
    }

    public function __toString()
    {
        return parent::__toString() .
            'Week Salary: ' . $this->getWeeklySalary() . PHP_EOL .
            'Hours per day: ' . $this->getWorkHoursPerDay() . PHP_EOL .
            'Salary per hour: ' . $this->getSalaryPerHour() . PHP_EOL;
    }


}