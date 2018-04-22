@extends('layouts.app')

@section('content')
    <div class="row">
        <div style="padding-right: 0;" class="text-center col-12">
            <h3 style="font-weight: 900;" class="tl ml-4 mt-4 mb-4 f2">Live Events</h3>
            <img class="live-event-link" src="{{ asset('images/live.jpg') }}">
        </div>
    </div>

    <div class="row">
        <div class="text-center col-12">
            <h3 style="font-weight: 900;" class="tc ml-4 mt-4 mb-4 f3">UPCOMING EVENTS</h3>
            <img src="{{ asset('images/upcoming.jpg') }}">
        </div>
    </div>
@endsection


@section('js')
<script type="text/javascript">
$(document).ready(function(){
	$(".live-event-link").each(function(){
		$(this).on("click", function(){
			window.location = "{{ route('map', ['event' => 'atlier']) }}";
		});
	});
});
</script>

@endsection