<?php

namespace Project\Interfaces;

interface Employee
{
    public function raiseWage(float $plus) : float;
    public function calculateAnualWage() : float;
}