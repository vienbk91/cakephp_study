<h2>Danh sách ghi chú</h2>
<div>
    <?php
        echo $this->Session->flash();
    ?>

</div>
<ul>
<?php foreach ($notes as $note) {
	
	echo "<li>";
	echo $this->Html->link($note['Note']['title'], 'view/' . $note['Note']['id'] , array('target' => '_self'));
	echo "</li>";
} 
?>
</ul>

<div class="menu_action" >
<?php echo $this->Html->link('>> Thêm ghi chú mới(using CakePHP FormHelper)' , array('controller' => 'notes', 'action' => 'add' )); ?>
<br>
<?php echo $this->Html->link('>> Thêm ghi chú mới(using Form)' , array('controller' => 'notes', 'action' => 'add2' )); ?>
</div>