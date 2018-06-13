<?php
namespace controllers;
use core\http\Controller;
use models\ItemModel;

class Route1Controller extends Controller
{
    public $title = "My First Application";
    public $items = [];

    public function __construct()
    {
        parent::__construct();

        $this->onOpen([$this, "open"]);
    }

    public function open()
    {
        $this->items = ItemModel::getList($this->db);
    }
}
