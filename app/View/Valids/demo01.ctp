<h1>Add Post</h1>
<?php 
echo $this->Form->create('Valid' , ['url' => [ 'controller' => 'Valids' , 'action' => 'demo01']] , ['type' => 'post']);
echo $this->Form->input('title', ['required' => false] );
echo $this->Form->input('info' , ['required' => false] );
echo $this->Form->end('Register');

?>