<?php
$_tags = get_all("SELECT DISTINCT tag_name FROM post_tags NATURAL JOIN tag");

foreach ($_tags as $tag) {
    //print_r($tag);
    $this->$tags[$tag['post_id']][] = $tag['tag_name'];
    //print_r($tag[2]);
    echo '<a href="http://mairisaar.ikt.khk.ee/blog/tags/view/'.$tag[tag_id].'">'.$tag['tag_name'].'</a>';
};

