<?php foreach ($notes as $note): ?>
<div class="note">
    <form class="delete" action="notes/delete" method="post">
        <h3><?=$note['title']?></h3>
        <input type="hidden" name="id" value="<?=$note['id']?>">
        <input type="submit" value="Delete">
    </form>
    <form class="update" action="notes/update" method="post">
        <input type="hidden" name="id" value="<?=$note['id']?>">
        <textarea name="description" id="description" rows="10" placeholder="Enter description here...">
            <?=$note['description']?>
        </textarea>
    </form>
</div>

<?php endforeach;?>
