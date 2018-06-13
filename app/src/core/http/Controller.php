<?php
namespace core\http;
use movicon\db\mysql\MySqlConnection;
use movicon\http\HttpController;

class Controller extends HttpController
{
    protected $db;

    public function __construct()
    {
        $this->onOpen(function () {
            $this->db = new MySqlConnection(DBNAME, DBUSER, DBPASS, DBHOST);
        });
    }
}
