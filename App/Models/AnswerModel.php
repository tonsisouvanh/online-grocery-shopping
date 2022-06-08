<?php

namespace App\Models;

use Db;

class AnswerModel
{
    public function __construct()
    {
    }
    public function all()
    {
        $db = new Db();

        $sql = "SELECT a.ans_id, a.ans_content, a.createdAt, u.user_name, qq.que_id, a.is_accepted
        FROM `answers` AS a
        INNER JOIN `questionqueue` AS qq 
        ON qq.que_id = a.que_id 
        INNER JOIN `users` AS u
        ON u.user_id = a.user_id
        ORDER BY a.createdAt DESC;";

        $db->load($sql);
        $ret = $db->Rows();

        return $ret;
    }
    public function add(
        $ans_id,
        $ans_content,
        $ans_source_URL,
        $ans_images,
        $que_id,
        $user_id,
        $is_accepted
    ) {
        $db = new Db();
        $sql = "INSERT INTO `answers` (ans_id, ans_content, ans_source_URL, ans_images, createdAt, que_id, user_id,is_accepted)
        VALUES ('$ans_id', '$ans_content', '$ans_source_URL', '$ans_images', current_timestamp(), '$que_id', '$user_id',$is_accepted);
        ";


        $ret = $db->patchDb($sql);


        return $ret;
    }
    public function detail($ans_id)
    {
        $db = new Db();

        $sql = "SELECT a.ans_id, a.ans_content, a.createdAt, u.user_name, qq.que_id, a.is_accepted
        FROM `answers` AS a
        INNER JOIN `questionqueue` AS qq 
        ON qq.que_id = a.que_id 
        INNER JOIN `users` AS u
        ON u.user_id = a.user_id
        WHERE a.ans_id = '$ans_id';";

        $db->load($sql);
        $ret = $db->Rows();

        return $ret[0];
    }

    public function del($ans_id)
    {
        $db = new Db();

        $sql = "DELETE 
        FROM `answers` AS a
        WHERE a.ans_id='$ans_id';";

        $ret = $db->patchDb($sql);

        return $ret;
    }

    public function getAnsByQueID_Admin($que_id)
    {
        $db = new Db();

        $sql = "SELECT a.ans_id, a.que_id, a.ans_content, a.ans_source_url, a.ans_images,
        a.createdAt, a.user_id, u.user_name, a.is_accepted
       FROM `answers` AS a
       INNER JOIN `users` AS u
       ON u.user_id = a.user_id
       WHERE a.que_id = '$que_id';
       ";

        $db->load($sql);
        $ret = $db->Rows();

        return $ret;
    }

    public function getAnsByQueID($que_id)
    {
        $db = new Db();

        $sql = "SELECT a.ans_id, a.que_id, a.ans_content, a.ans_source_url, a.ans_images,
        a.createdAt, a.user_id, u.user_name, a.is_accepted
       FROM `answers` AS a
       INNER JOIN `users` AS u
       ON u.user_id = a.user_id
       WHERE a.que_id = '$que_id'
       AND a.is_accepted = TRUE
       ORDER BY a.createdAt DESC;
       ";

        $db->load($sql);
        $ret = $db->Rows();

        return $ret;
    }

    public function getAnsPagiByQueID($que_id, $limit, $offset)
    {
        $db = new Db();

        $sql = "SELECT a.ans_id, a.que_id, a.ans_content, a.ans_source_url, a.ans_images,
        a.createdAt, a.user_id, u.user_name, a.is_accepted
       FROM `answers` AS a
       INNER JOIN `users` AS u
       ON u.user_id = a.user_id
       WHERE a.que_id = '$que_id'
       AND a.is_accepted = TRUE
       ORDER BY a.createdAt DESC
       LIMIT $limit
       OFFSET $offset;
       ";

        $db->load($sql);
        $ret = $db->Rows();

        return $ret;
    }

    public function filterAnswerByDESCTiming($que_id)
    {
        $db = new Db();

        $sql = "SELECT a.ans_id, a.que_id, a.ans_content, a.ans_source_url, a.ans_images,
        a.createdAt, a.user_id, u.user_name, a.is_accepted
       FROM `answers` AS a
       INNER JOIN `users` AS u
       ON u.user_id = a.user_id
       WHERE a.que_id = '$que_id'
       AND a.is_accepted = TRUE
       ORDER BY a.createdAt DESC;
       ";

        $db->load($sql);
        $ret = $db->Rows();

        return $ret;
    }


    public function filterAnswerByASCTiming($que_id)
    {
        $db = new Db();

        $sql = "SELECT a.ans_id, a.que_id, a.ans_content, a.ans_source_url, a.ans_images,
        a.createdAt, a.user_id, u.user_name, a.is_accepted
       FROM `answers` AS a
       INNER JOIN `users` AS u
       ON u.user_id = a.user_id
       WHERE a.que_id = '$que_id'
       AND a.is_accepted = TRUE
       ORDER BY a.createdAt ASC;
       ";

        $db->load($sql);
        $ret = $db->Rows();

        return $ret;
    }
}
