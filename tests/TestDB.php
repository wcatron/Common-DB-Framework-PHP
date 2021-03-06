<?php

use wcatron\CommonDBFramework\DB;

class TestDB extends DB {
    var $db = false;

    function connect() {
        if ($this->db == false) {
            echo "Connecting... ";
            $this->db = true;
            echo "Connected.";
        }
    }

    function getObjectByID($object, $id) {
        /** @var TestDBObject $object */
        $object = new $object();
        if ($id == "1") {
            $object->fromArray([
                                   "id"    => "1",
                                   "field" => "test"
                               ]);
        } else if ($id == "2") {
            $object->fromArray([
                                   "id"    => "2",
                                   "field" => "test"
                               ]);
        }
        return $object;
    }
}

?>