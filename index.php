<?php

final class index
{
    public function start()
    {
        $mathOperations = new MathOperations(
            new Addition(2,5),
            new Multiply(2,5),
            new Division(2,5)
        );

        try {
            $mathOperations->makeOperations();
        } catch (Exception $exception) {
            echo $exception->getMessage();
        }
    }
}
