<?php

final class Multiply
{
    /**
     * @var integer
     */
    private $number1;

    /**
     * @var integer
     */
    private $number2;

    public function __construct(int $number1, int $number2)
    {
        $this->number1 = $number1;
        $this->number2 = $number2;
    }

    public function executeOperation()
    {
        return $this->number1 * $this->number2;
    }
}
