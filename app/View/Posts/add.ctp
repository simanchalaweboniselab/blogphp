<h1>Add Post</h1>
<?php
echo $this->Form->create('Post', array('class'=>'abc', 'type'=>'get'));
echo $this->Form->input('title');
echo $this->Form->input('body', array('type' => 'textarea'));
echo $this->Form->end('Save Post');
?>