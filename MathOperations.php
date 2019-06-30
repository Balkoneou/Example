<?php

final class MathOperations
{
    /**
     * @var Addition
     */
    private $addition;

    /**
     * @var Multiply
     */
    private $multiply;

    /**
     * @var Division
     */
    private $division;

    public function __construct(
        Addition $addition,
        Multiply $multiply,
        Division $division
    ) {
        $this->addition = $addition;
        $this->multiply = $multiply;
        $this->division = $division;
    }

    public function makeOperations()
    {
        $this->addition->executeOperation();
        $this->multiply->executeOperation();
        $this->division->executeOperation();
    }
}
