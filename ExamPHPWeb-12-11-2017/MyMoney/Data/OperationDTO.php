<?php

namespace MyMoney;

class OperationDTO
{
    private $id;
    private $type;
    private $reasonId;
    private $sum;
    private $notes;
    private $onDate;
    private $forDate;
    private $userId;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getType():OperationDTO
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getReasonId():OperationDTO
    {
        return $this->reasonId;
    }

    /**
     * @param mixed $reasonId
     */
    public function setReasonId($reasonId)
    {
        $this->reasonId = $reasonId;
    }

    /**
     * @return mixed
     */
    public function getSum():OperationDTO
    {
        return $this->sum;
    }

    /**
     * @param mixed $sum
     */
    public function setSum($sum)
    {
        $this->sum = $sum;
    }

    /**
     * @return mixed
     */
    public function getNotes():OperationDTO
    {
        return $this->notes;
    }

    /**
     * @param mixed $notes
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
    }

    /**
     * @return mixed
     */
    public function getOnDate():OperationDTO
    {
        return $this->onDate;
    }

    /**
     * @param mixed $onDate
     */
    public function setOnDate($onDate)
    {
        $this->onDate = $onDate;
    }

    /**
     * @return mixed
     */
    public function getForDate():OperationDTO
    {
        return $this->forDate;
    }

    /**
     * @param mixed $forDate
     */
    public function setForDate($forDate)
    {
        $this->forDate = $forDate;
    }

    /**
     * @return mixed
     */
    public function getUserId():OperationDTO
    {
        return $this->userId;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }


}