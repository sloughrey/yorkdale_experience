@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12"><?php 
       	foreach($events as $e)
       	{
       		echo 'name: ' . $e['name'] . '<br>';
       		echo 'date: ' . $e['date'] . '<br>';
       		echo 'start time: ' . $e['start_time'] . '<br>';
       		echo 'end time: ' . $e['end_time'] . '<br>';
       		echo 'location: ' . $e['location'] . '<br>';
       		?> <img style="width:200px; height:200px;" src="<?php echo $e['image_url']; ?>" /><?php
       		echo '<br><br><hr><br>';
       	} ?>
        </div>
    </div>
</div>
@endsection