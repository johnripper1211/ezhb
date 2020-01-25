<?php
class CONTROLLER
{
    public $port = 81;

    function __construct()
    {
        // runingzone
    }

    function base_url($text)
    {
        if ($text == '') {
            $url = 'http://localhost:' . $this->port . '/ezhb/';
        } else {
            $url = 'http://localhost:' . $this->port . '/ezhb/' . $text . '.php';
        }
        echo $url;
    }

    function load($text)
    {
        include $text . '.php';
    }
}

$CL = new CONTROLLER;


