<h2>Thêm Note mới</h2>
<div>
    <?php
        echo $this->Session->flash();
    ?>

</div>
<p>
    <?php
        echo $this->Form->create();
        echo $this->Form->input('title', array('label' => 'Tiêu đề'));
        echo $this->Form->input('content', array(
            'label' => 'Nội dung' , 
            'type' => 'textarea'
        ));

        echo $this->Form->end('Tạo note');
    ?>

</p>