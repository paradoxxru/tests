<?php
?>

<div class="flex_item">
	<span class="item_name">Название: <?php echo $this->name; ?></span>
	<img src="<?php echo $this->path.'/'.$this->name ?>">
	<a href="/index.php?page=onephoto&path=<?php echo $this->path ?>&id=<?php echo $this->link ?>">подробно</a>
</div>