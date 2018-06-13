<?php
namespace models;
use movicon\db\DbActiveRecord;

class ItemModel extends DbActiveRecord
{
    public function __construct($db, $id = null)
    {
        parent::__construct($db, "item", $id);
    }

    public static function getList($db)
    {
        $sql = "
        select
            id,
            title,
            description
        from item
        order by id";

        return iterator_to_array($db->query($sql));
    }
}
