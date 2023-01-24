<?php

namespace cstest\src;

/**
 * Description of database
 *
 * @author den
 */
Class database {

    private function connect() {
        $conn = mysqli_connect("localhost:3306", "root", "", "cstest") or die("Couldn't connect");
        return $conn;
    }

    public static function query($sql) {
        //var_dump($sql);
        $db = new database();
        $rs = mysqli_query($db->connect(), $sql);
        $arr = [];
        while ($row = mysqli_fetch_assoc($rs)) {
            $arr[] = $row;
        }
        return $arr;
    }

}
