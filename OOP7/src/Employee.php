<?php

namespace Project;
use Project\Logger\Log;

/**
 * Class Employee
 * @package Project
 */
class Employee extends MedicalDepartment implements \Project\Interfaces\Employee
{

    use Log;

    /**
     * @var
     */
    private $_name;
    /**
     * @var
     */
    private $_department;
    /**
     * @var
     */
    private $_wage;
    /**
     * @var
     */
    private $_admission;
    /**
     * @var
     */
    private $_document;

    /**
     * @return mixed
     */
    public function getAdmission() : \DateTime
    {
        return $this->_admission;
    }

    /**
     * @param mixed $admission
     * @return Employee
     */
    public function setAdmission(\DateTime $admission) : Employee
    {
        $this->_admission = $admission;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDepartment() : string
    {
        return $this->_department;
    }

    /**
     * @param mixed $department
     * @return Employee
     */
    public function setDepartment(string $department) : Employee
    {
        $this->_department = $department;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDocument() : int
    {
        return $this->_document;
    }

    /**
     * @param mixed $document
     * @return Employee
     */
    public function setDocument(int $document) : Employee
    {
        $this->_document = $document;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName() : string
    {
        return $this->_name;
    }

    /**
     * @param mixed $name
     * @return Employee
     */
    public function setName(string $name) : Employee
    {
        $this->_name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getWage() : float
    {
        return $this->_wage;
    }

    /**
     * @param mixed $wage
     * @return Employee
     */
    public function setWage(float $wage) : Employee
    {
        $this->_wage = $wage;
        return $this;
    }

    /**
     * Aumenta o salário em (x) valor.
     * @param double $plus
     * @return mixed
     */
    public function raiseWage(float $plus) : float
    {
        $this->info(nl2br("Raising {$this->_name} wage"));
        $this->_wage = $this->_wage + $plus;
        return $this->_wage;
    }



    /**
     * Calcula o salário total ao final de um ano
     * @return mixed
     */
    public function calculateAnualWage() : float
    {
        return $this->_wage * 12;
    }
}
