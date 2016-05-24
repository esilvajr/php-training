<?php
/**
 * Created by PhpStorm.
 * User: esilva
 * Date: 23/05/16
 * Time: 16:25
 */

namespace Project\Logger;


use Psr\Log\LoggerTrait;

trait Log
{

    use LoggerTrait;

    private $file;

    public function __construct()
    {
        $this->file = getcwd() . "/../logs/log.txt";
    }

    public function log(string $level, string $message, array $context = array()) : bool
    {
        unset($context);
        $data = sprintf("[%s]: %s \r\n", $level, $message);
        try {
            file_put_contents($this->file, $data, FILE_APPEND);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
}