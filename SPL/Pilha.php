<?php

class PilhaManual
{
    
    private $list = array();
    private $top = -1;

    public function push($item)
    {
        $this->list[++$this->top] = $item;
    }

    public function pop()
    {
        if ($this->_isset())
            unset($this->list[$this->top--]);
    }

    private function _isset()
    {
        if ($this->top < 0) return false;
        return true;
    }
}

class PilhaArray
{

    private $list = array();

    public function push($item)
    {
        array_push($this->list, $item);
    }

    public function pop()
    {
        array_pop($this->list);
    }

}

//Manual
$pilha = new PilhaManual();
$pilha->push(10);
$pilha->push(11);
$pilha->push(12);
$pilha->push(13);
$pilha->pop();
var_dump($pilha);
unset($pilha);

//Array
$pilha = new PilhaArray();
$pilha->push(10);
$pilha->push(11);
$pilha->push(12);
$pilha->push(13);
$pilha->pop();
var_dump($pilha);
unset($pilha);

//SPL
$pilha = new SplStack();
$pilha->push(10);
$pilha->push(11);
$pilha->push(12);
$pilha->push(13);
$pilha->pop();
var_dump($pilha);
