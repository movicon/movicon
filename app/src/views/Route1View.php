<?php
namespace views;
use core\http\View;
use controllers\Route1Controller;

class Route1View extends View
{
    public function __construct()
    {
        parent::__construct(new Route1Controller());
    }

    public function getDocument() {
        return json_encode(
            [
                "title" => $this->controller->title,
                "items" => array_map(
                    function ($item) {
                        return [
                            "id" => $item["id"],
                            "title" => $item["title"]
                        ];
                    },
                    $this->controller->items
                )
            ]
        );
    }
}
