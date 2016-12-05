<?php
//не нашел примеров особо для php 5, пометил себе на будущее что бы посмотреть когда буду изучать php 7, но идею я уловил

class Logger
{
    public function log($msg)
    {
        echo $msg;
    }
}
$anon = new Logger;
$name = 'Jack';
$anon->log($name);
