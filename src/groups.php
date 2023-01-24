<?php

namespace cstest\src;

/**
 * Description of groups
 *
 * @author den
 */
class groups {

    public static function getById(int $id) {
        $rs = database::query("SELECT * FROM cstest.groups WHERE id = $id");
        return $rs;
    }

    public static function getByParentId(int $id) {
        $rs = database::query("SELECT * FROM cstest.groups WHERE id_parent = $id");
        return $rs;
    }

    public static function getChildsById(int $id) {
        $sql = "WITH recursive r AS (
                    SELECT * 
                        FROM cstest.groups as t 
                        WHERE id = $id
                    UNION ALL
                    SELECT m.* 
                        FROM cstest.groups m
                    JOIN r ON m.id_parent = r.id
                ) 
                SELECT * FROM r";
        $rs = database::query($sql);
        return $rs;
    }

    public static function getCountProdsGroupId(int $id) {

        $rs = database::query("WITH recursive r AS (
                    SELECT id 
                        FROM cstest.groups as t 
                        WHERE id = $id
                    UNION ALL
                    SELECT m.id
                        FROM cstest.groups m
                    JOIN r ON m.id_parent = r.id
                ) 
                SELECT count(*) as count
                    FROM r
                JOIN cstest.products as p ON p.id_group = r.id");
        return $rs[0]['count'];
    }

}
