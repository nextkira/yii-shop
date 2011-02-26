<div class="view">
<h2> <?php echo CHtml::link(CHtml::encode($data->title), array('products/view', 'id' => $data->product_id)); ?> </h2>

	<p> <?php echo CHtml::encode($data->description); ?> </p>
	<br />

<div style="float:left;margin-right:20px;">
<?php foreach($data->images as $image) {
	$this->renderPartial('/image/view', array( 'model' => $image)); 
} ?>
</div>

<div style="float:left;margin-right:100px;">
	<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
	<?php echo CHtml::encode($data->price) . " €"; ?>
	<br />


</div>

<hr />
<?php $this->renderPartial('/products/addToCart', array('model' => $data)); ?>
</div>