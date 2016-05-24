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
    public function getDiseases()
    {
        return $this->_diseases;
    }

    /**
     * @param mixed $diseases
     * @return MedicalDepartment
     */
    public function setDiseases(array $diseases)
    {
        $this->_diseases = $diseases;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastVisit()
    {
        return $this->_lastVisit;
    }

    /**
     * @param mixed $lastVisit
     * @return MedicalDepartment
     */
    public function setLastVisit($lastVisit)
    {
        $this->_lastVisit = $lastVisit;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAbleToWork()
    {
        return $this->_status;
    }

    /**
     * @param mixed $status
     * @return MedicalDepartment
     */
    public function setAbleToWork($status)
    {
        $this->_status = $status;
        return $this;
    }
}
