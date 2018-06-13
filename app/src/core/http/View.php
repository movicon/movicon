<?php
namespace core\http;
use \Exception;
use movicon\http\HttpView;

abstract class View extends HttpView
{
    public function __construct($controller)
    {
        parent::__construct($controller, "application/json");
    }
}
