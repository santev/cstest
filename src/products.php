<?php

namespace cstest\src;

/**
 * Description of groups
 *
 * @author den
 */
class products {

    public static function getById(int $id) {
        $rs = database::query("SELECT * FROM cstest.products WHERE id = $id");
        return $rs;
    }

    public static function getByGroupId(int $id) {
        if ($id >= 1) {
            $where = "WHERE id_group = $id";
        }
        $rs = database::query("SELECT * FROM cstest.products " . @$where);

        return $rs;
    }

    public static function getAllProdsByGroupId(int $id) {

        $rs = database::query("WITH recursive r AS (
                    SELECT * 
                        FROM cstest.groups as t 
                        WHERE id = $id
                    UNION ALL
                    SELECT m.*
                        FROM cstest.groups m
                    JOIN r ON m.id_parent = r.id
                ) 
                SELECT * 
                    FROM r
                JOIN cstest.products as p ON p.id_group = r.id");
        return $rs;
    }

}
