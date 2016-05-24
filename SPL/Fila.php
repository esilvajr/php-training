<?php

class FilaManual
{
    
    private $list = array();
    private $shift = -1;

    public function push($item)
    {
        $this->list[++$this->shift] = $item;
    }

    public function shift()
    {
        if ($this->_isset())
            unset($this->list[0]);
        $this->walk();
    }

    private function walk()
    {
        $arr = array();
        foreach ($this->list as $position) {
            $arr[] = $position;
        }
        unset($this->list);
        $this->list = $arr;
    }

    private function _isset()
    {
        if (isset($this->list[0])) return true;
        return false;
    }
}

class FilaArray
{

    private $list = array();

    public function push($item)
    {
        array_push($this->list, $item);
    }

    public function shift()
    {
        array_shift($this->list);
    }
}

//Manual
$fila = new FilaManual();
$fila->push(10);
$fila->push(11);
$fila->push(12);
$fila->push(13);
$fila->shift();
var_dump($fila);
unset($fila);

//Array
$fila = new FilaArray();
$fila->push(10);
$fila->push(11);
$fila->push(12);
$fila->push(13);
$fila->shift();
var_dump($fila);
unset($fila);

//SPL
$fila = new SplQueue();
$fila->push(10);
$fila->push(11);
$fila->push(12);
$fila->push(13);
$fila->shift();
var_dump($fila);
