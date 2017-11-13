<?php


namespace MyMoney\Service;


use MyMoney\Repository\ReasonRepositoryInterface;

class ReasonService implements ReasonServiceInterface
{
    /**
     * @var ReasonServiceInterface
     */
    private $reasonRepository;

    public function __construct(ReasonRepositoryInterface $reasonRepository)
    {
        $this->reasonRepository = $reasonRepository;
    }


}