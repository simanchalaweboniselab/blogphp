<h1>Add Post</h1>
<?php
echo $this->Form->create('Post');
echo $this->Form->input('title');
echo $this->Form->input('body', array('type' => 'textarea'));
echo $this->Form->end('Save Post');
?>