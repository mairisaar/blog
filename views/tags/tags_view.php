
<div >
    <h1><? echo $post['post_subject'];?></h1>
    <h2><? echo $post['name'];?></h2>
    <p><? echo $post['post_text'];?></p>

</div>

<h1>Tags</h1>

<?foreach ($tags as $tag):?><a href="#"><span class="label label-info"><?=$tag['tag_name']?></span></a> <?endforeach?>

