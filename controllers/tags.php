<?php
/**
 * Created by PhpStorm.
 * User: mairi.saar
 * Date: 10.01.2019
 * Time: 9:36
 */

namespace App;


class tags extends Controller
{

    function index()
    {
        $this->tags = get_all("SELECT *, COUNT(post_id) AS count FROM post_tags NATURAL JOIN tag GROUP BY tag_id");
    }

    function view()
    {
        $_tags = get_all("SELECT * FROM post_tags NATURAL JOIN tag");
        foreach ($_tags as $tag) {
            $this->tags[$tag['post_id']][] = $tag['tag_name'];
    }
        /*$this->tags = get_all("SELECT tag_name, COUNT(post_id) AS count FROM post_tags NATURAL JOIN tag GROUP BY tag_id");
        $this->posts = get_all("SELECT * FROM post_tags NATURAL JOIN post");
*/
    }
}

