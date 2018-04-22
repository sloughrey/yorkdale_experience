@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12"><?php 
       	foreach($exclusive_products as $p)
       	{
       		echo 'name: ' . $p['name'] . '<br>';
       		echo 'qty remaining: ' . $p['qty_remaining'] . '<br>';
       		echo 'qty made: ' . $p['qty_made'] . '<br>';
       		echo 'price: ' . $p['price'] . '<br>';
       		?> <img style="width:200px; height:200px;" src="<?php echo $p['image_url']; ?>" /><?php
       		echo '<br><br><hr><br>';
       	} ?>
        </div>
    </div>
</div>
@endsection
