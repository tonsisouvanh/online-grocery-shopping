<?php

namespace App\Models;

use Db;

class LabelModel
{
    public function __construct()
    {
    }

    public function all()
    {
        $db = new Db();

        $sql = "SELECT * 
        FROM `labels`;";

        $db->load($sql);
        $ret = $db->Rows();
        return $ret;
    }
    public function add($label_id, $label_name)
    {

        $db = new Db();

        $sql = "INSERT INTO `labels`(label_id, label_name)
        VALUES ('$label_id','$label_name');";

        $ret = $db->patchDb($sql);
        return $ret;
    }

    public function findLabelByLabelName($tagsName)
    {

        $db = new Db();

        $sql = "SELECT  *
        FROM  `labels`AS l
        WHERE l.label_name='$tagsName';";

        $db->load($sql);
        $ret = $db->Rows();

        // console_log($ret);

        if (count($ret) > 0) {
            return $ret[0];
        }



        return [];
    }
    public function  getTagUsedByUserWithAmount()
    {
        $db = new Db();

        $sql = "SELECT l.label_id, l.label_name, COUNT(*) AS count_user_used
        FROM `labels` AS l
        INNER JOIN `quetionqueue_labels` AS ql
        ON ql.label_id = l.label_id
        GROUP BY l.label_id
        ORDER BY l.label_name
        LIMIT 15";

        $db->load($sql);
        $ret = $db->Rows();
        return $ret;
    }
    public function getTagIdByTagName($tag_name)
    {
        $db = new Db();

        $sql = "SELECT l.label_id
        FROM `labels` AS l
        WHERE l.label_name = '$tag_name'
        ";

        $db->load($sql);
        $ret = $db->Rows();
        return $ret[0];
    }
}
