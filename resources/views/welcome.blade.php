@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
			<div class="row">
        		<div id="homepage" style="background-image: url({{ asset('images/home-page.png') }})"></div>
    		</div>
	    	<div class="row">
	            <div class="flexBox center col 12">
	                <button id="login-facebook"style="background-color: #366EA7" class="logbutton hvr-rectangle-out-blue">LOGIN WITH FACEBOOK</button>
	                <br>
	                <button id="login-email" style="background-color: #BD282E" class="logbutton hvr-rectangle-out-red">LOGIN WITH EMAIL</button>
	            </div>
	        </div>
        </div>
    </div>
</div>
@endsection


@section('js')
<script type="text/javascript">
$(document).ready(function(){
	$("#login-email").on("click", function(){
		window.location = "{{ route('login') }}";
		console.log('wtf');
	});
});
</script>
@endsection