<div class= "index">
<h2><strong>Recipe Detail</strong></h2>
<?php echo $this->Html->link(
	'Add Post', array('controller' => 'posts', 'action' => 'add')
	);?>
<table>
	<tr>
		<th>Id</th>
		<th>Title</th>
			<th>Action</th>
		<th>Created</th>
	</tr>

	<!--Here is where we loop through our $post array, print out post info -->
	<?php foreach ($posts as $post): ?>
	<tr>
		<td><?php echo $post['Post']['id']; ?></td>
		<td>
			<?php echo $this->Html->link($post['Post']['title'],
			array('action' => 'view', $post['Post']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Form->postLink(
				'Delete',
				array('action' => 'delete', $post['Post']['id']),
				array('confirm' => 'Are you sure?'));
			?>
			<?php echo $this->Html->link('Edit', array('action' => 'edit', $post['Post']['id'])); ?>
		</td>
		<td><?php echo $post['Post']['created']; ?></td>
	</tr>
<?php endforeach; ?>

</table>
</div>
<div class = "actions">
	<h3>Actions</h3>
	<ul>
		<li><?php echo $this->Html->link('New Post', array('action'=>'add')); ?>
		</li>
	</ul>
	</div>
	<?php 
        echo $this->Paginator->first('首页');
        echo '&nbsp;&nbsp;&nbsp;';
        echo $this->Paginator->prev('上一页');
        echo '&nbsp;&nbsp;&nbsp;';
        echo $this->Paginator->numbers();
        echo '&nbsp;&nbsp;&nbsp;';
        echo $this->Paginator->next('下一页');
        echo '&nbsp;&nbsp;&nbsp;';
        echo $this->Paginator->last('尾页');
        echo '&nbsp;&nbsp;&nbsp;';
        echo $this->Paginator->counter(
            '共  {:pages} 页  共 {:count} 个记录'
        );
?>