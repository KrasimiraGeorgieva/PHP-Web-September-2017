<?php
declare(strict_types = 1);
namespace Ferrari;
class Ferrari implements Actions

{
    private $driver;
    const MODEL = '488-Spider';

    public function __construct(string $driver)
    {
        $this->setDriver($driver);
    }

    protected function setDriver(string $driver)
    {
        $this->driver = $driver;
    }

    public function getDriver(): string
    {
        return $this->driver;
    }

    public function useBrake(){
        return 'Brakes!';
    }

    public function useGas(){
        return 'Zadu6avam sA!';
    }

    public function __toString()
    {
        return self::MODEL .'/' . $this->useBrake(). '/' . $this->useGas(). '/' . $this->driver;
    }
}