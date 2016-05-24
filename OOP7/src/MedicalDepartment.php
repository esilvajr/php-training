<?php

namespace Project;

class MedicalDepartment
{
    private $_lastVisit;
    private $_diseases;
    private $_status;

    /**
     * @return mixed
     */
    public function getDiseases() : array
    {
        return $this->_diseases;
    }

    /**
     * @param mixed $diseases
     * @return MedicalDepartment
     */
    public function setDiseases(array $diseases) : MedicalDepartment
    {
        $this->_diseases = $diseases;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastVisit() : \DateTime
    {
        return $this->_lastVisit;
    }

    /**
     * @param mixed $lastVisit
     * @return MedicalDepartment
     */
    public function setLastVisit(\DateTime $lastVisit) : MedicalDepartment
    {
        $this->_lastVisit = $lastVisit;
        return $this;
    }

    public function getAbleToWork()  : bool
    {
        return $this->_status;
    }

    /**
     * @param mixed $status
     * @return MedicalDepartment
     */
    public function setAbleToWork(bool $status) : MedicalDepartment
    {
        $this->_status = $status;
        return $this;
    }
}
