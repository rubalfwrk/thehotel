<div class="dishSubcats index">
	<h2 class="headng"><?php echo __('Dish Subcats'); ?></h2>
    <div class="table-responsive">
	<table class="table table-striped table-bordered" cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('dish_catid'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
                        <th><?php echo $this->Paginator->sort('image'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
<!--			<th><?php //echo $this->Paginator->sort('status'); ?></th>-->
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($dishSubcats as $dishSubcat): ?>
	<tr>
		<td><?php echo h($dishSubcat['DishSubcat']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($dishSubcat['DishCategory']['name'], array('controller' => 'dish_categories', 'action' => 'view', $dishSubcat['DishCategory']['id'])); ?>
		</td>
		<td><?php echo h($dishSubcat['DishSubcat']['name']); ?>&nbsp;</td>
                <td><img src="<?php echo $this->webroot?>/files/subcatimage/<?php echo h($dishSubcat['DishSubcat']['image']); ?>" width="100px" height="100px"/>&nbsp</td>

		<td><?php echo h($dishSubcat['DishSubcat']['created']); ?>&nbsp;</td>
		<td><?php echo h($dishSubcat['DishSubcat']['modified']); ?>&nbsp;</td>
<!--		<td><?php //echo h($dishSubcat['DishSubcat']['status']); ?>&nbsp;</td>-->
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $dishSubcat['DishSubcat']['id']),array('class'=>'btn btn-primary btn-xs')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $dishSubcat['DishSubcat']['id']),array('class'=>'btn btn-success btn-xs')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $dishSubcat['DishSubcat']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $dishSubcat['DishSubcat']['id']),'class'=>'btn btn-danger btn-xs')); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
    </div>
	<p class="headng">
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging headng">
	<?php
		echo $this->Paginator->prev('< ' . __('previous') . ' >', array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next('  < ' . __('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="row">
<div class="col-sm-3">
<div class="actions action_menu">
	<h3 class="headng"><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Dish Subcat'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Dish Categories'), array('controller' => 'dish_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dish Category'), array('controller' => 'dish_categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
</div>
</div>
