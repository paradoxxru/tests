<?php
?>

<div class="flex_item">
	<span class="item_name">Название альбома: <?php echo $this->name; ?></span>
	<img src="<?php echo $this->path.'/'.$this->name ?>">
	<a href="/index.php?page=<?php echo $this->link ?>">просмотреть альбом</a>
</div>