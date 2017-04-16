<?php

require __DIR__ . '/../lib/Core.php';

class User {

    function __construct() {
        $this->core = \lib\Core::getInstance();
    }

    // Get all users
    public function getUsers() {
        $r = array();

        $sql = "SELECT * FROM Users";
        $stmt = $this->core->dbh->prepare($sql);

        if ($stmt->execute()) {
            $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $r = 0;
        }
        return $r;
    }
}