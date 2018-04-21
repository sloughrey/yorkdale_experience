@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="row flexBox">
			        <div style="height: 100px; width: 100%"></div>
			        <div id="welcome" style="" class="center col-12">
			            <p>Welcome</p>
			            <p>to the</p>
			            <img style="width: 220px;" src="{{ URL::asset('images/yorkdale_logo.png') }}"/>
			            <p>experience</p>
			        </div>
    			</div>
            </div>
        </div>
    </div>
</div>
@endsection
