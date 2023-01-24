<?php

namespace cstest\src;

/**
 * Description of menu
 *
 * @author den
 */
class menutree {

    public static function forGroupId(int $id = 0) {

        $arr = groups::getByParentId($id);

        foreach ($arr as $k => $g) {
            $arr[$k]['prods_count'] = groups::getCountProdsGroupId($g['id']);
            $arr[$k]['child_groups'] = self::forGroupId($g['id']);
        }
        return $arr;
    }

}
