<div class="content">
<div class="box">
<div class="times view">
<legend style="margin-bottom:0px;"><h2 class="headng"><?php echo __('Time'); ?></h2></legend>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($time['Time']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Restaurant'); ?></dt>
		<dd>
			<?php echo h($time['Restaurant']['name']);?>
			&nbsp;
		</dd>
		<dt><?php echo __('Monday open'); ?></dt>
		<dd>
			<?php echo h($time['Time']['mopen']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Monday close'); ?></dt>
		<dd>
			<?php echo h($time['Time']['mclose']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tuesday open'); ?></dt>
		<dd>
			<?php echo h($time['Time']['topen']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tuesday close'); ?></dt>
		<dd>
			<?php echo h($time['Time']['tclose']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Wednesday open'); ?></dt>
		<dd>
			<?php echo h($time['Time']['wopen']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Wednesday close'); ?></dt>
		<dd>
			<?php echo h($time['Time']['wclose']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Thursday open'); ?></dt>
		<dd>
			<?php echo h($time['Time']['thopen']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Thursday close'); ?></dt>
		<dd>
			<?php echo h($time['Time']['thclose']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Friday open'); ?></dt>
		<dd>
			<?php echo h($time['Time']['fopen']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Friday close'); ?></dt>
		<dd>
			<?php echo h($time['Time']['fclose']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Saturday open'); ?></dt>
		<dd>
			<?php echo h($time['Time']['satopen']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Saturday close'); ?></dt>
		<dd>
			<?php echo h($time['Time']['satclose']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sunday open'); ?></dt>
		<dd>
			<?php echo h($time['Time']['sunopen']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sunday close'); ?></dt>
		<dd>
			<?php echo h($time['Time']['sunclose']); ?>
			&nbsp;
		</dd>
                    <dt><?php echo __('Monday Closed'); ?></dt>
		<dd>
			 <?php echo h($time['Time']['mcl'] == 1) ? " Yes" : "No"; ?>
			&nbsp;
		</dd>
                   <dt><?php echo __('Tuesday Closed'); ?></dt>
		<dd>
			 <?php echo h($time['Time']['tcl'] == 1) ? " Yes" : "No"; ?>
			&nbsp;
		</dd>
                   <dt><?php echo __('Wednesday Closed'); ?></dt>
		<dd>
			 <?php echo h($time['Time']['wcl'] == 1) ? " Yes" : "No"; ?>
			&nbsp;
		</dd>
                   <dt><?php echo __('Thrusday Closed'); ?></dt>
		<dd>
			 <?php echo h($time['Time']['thcl'] == 1) ? " Yes" : "No"; ?>
			&nbsp;
		</dd>
                   <dt><?php echo __('Friday Closed'); ?></dt>
		<dd>
			 <?php echo h($time['Time']['fcl'] == 1) ? " Yes" : "No"; ?>
			&nbsp;
		</dd>
                   <dt><?php echo __('Saturday Closed'); ?></dt>
		<dd>
			 <?php echo h($time['Time']['satcl'] == 1) ? " Yes" : "No"; ?>
			&nbsp;
		</dd>
                   <dt><?php echo __('Sunday Closed'); ?></dt>
		<dd>
			 <?php echo h($time['Time']['suncl'] == 1) ? " Yes" : "No"; ?>
			&nbsp;
		</dd>
           
	</dl>
</div>
</div>
</div>

<div class="actions">
	<h3 class="headng"><?php echo __('Actions'); ?></h3>
	<ul style="margin:0;">
		<li><?php echo $this->Html->link(__('Edit Time'), array('action' => 'edit', $time['Time']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Time'), array('action' => 'delete', $time['Time']['id']), array(), __('Are you sure you want to delete # %s?', $time['Time']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Times'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Time'), array('action' => 'add')); ?> </li>
		
	</ul>
</div>


<style>
dl {
    width: 100%;
    float: left;
}
dt {
    width: 30%;
    float: left;
	padding: 10px;
	border-bottom:1px solid #ccc;
}
dd {
    width: 70%;
    float: left;
	padding: 10px;
	border-bottom:1px solid #ccc;
}
</style>