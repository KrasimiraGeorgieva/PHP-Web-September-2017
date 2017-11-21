<?php

namespace MyMoney\Data;


class ReasonDTO
{
    const NAME_MIN_LENGTH = 3;
    const NAME_MAX_LENGTH = 100;

    private $id;
    private $name;
    private $operationsCount;
    private $total;



    public function getId()
    {
        return $this->id;
    }

    public function setId($id):ReasonDTO
    {
        return $this->id = $id;

    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name):ReasonDTO
    {
        ValidatorDTO::validate(
            self::NAME_MIN_LENGTH,
            self::NAME_MAX_LENGTH,
            $name,
            "Name must be between 3 and 100 characters!"
        );
        return $this->name = $name;

    }

    /**
     * @return mixed
     */
    public function getOperationsCount()
    {
        return $this->operationsCount;
    }

    /**
     * @param mixed $operationsCount
     */
    public function setOperationsCount($operationsCount)
    {
        $this->operationsCount = $operationsCount;
    }

    /**
     * @return mixed
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param mixed $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }



}