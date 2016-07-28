<h2><?php echo $note['Note']['title']; ?></h2>
<div class="menu_action">
<?php echo $this->Html->link('<< Back to Menu' , array('controller' => 'notes' , 'action' => 'index')); ?>
</div>
<p>
<?php 
echo str_replace("\r\n", "<br>" ,$note['Note']['content']);
?>
</p>
<small>
Ngày tạo: <?php echo date( 'Y年m月d日 H:i:s' , strtotime($note['Note']['created'])); ?>
<br>
Ngày chỉnh sửa: <?php echo date( 'Y年m月d日 H:i:s' , strtotime($note['Note']['modified'])); ?>
</small>