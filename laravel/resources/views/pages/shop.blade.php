@extends('layout.master')
@section('title', 'GTG - Shop')
@section('content')	
<div class="main-wrap-shop-menu">

	<div class="title-page">
		<span>Items</span>
	</div> 

	<div class="upper-div">
		<div class="left">
			<a href="{{ url ('vegetables') }}" class="darken">
				<img src="/images/icon/vegesB.png" style="height: 222px;width:250px;">
				<span>Vegetables</span>
			</a>
		</div>
		<div class="left">
			<a href="{{ url ('fruits') }}" class="darken">
				<img src="/images/icon/fruits1.png" style="height: 222px;width:250px;">
				<span>Fruits</span>
			</a>
		</div>
		<div class="left">
			<a href="{{ url ('meat-fish') }}" class="darken">
				<img src="/images/icon/Icon_vegies.png" style="height: 222px;width:250px;">
				<span>Meat/Fish</span>
			</a>
		</div>
	</div>

	<div class="lower-div">
		<div class="left">
			<a href="{{ url ('canned-instant-goods') }}" class="darken">
				<img src="/images/icon/Icon_vegies.png" style="height: 222px;width:250px;">
				<span>Canned Goods / Instant Food</span>
			</a>
		</div>
		<div class="left">
			<a href="{{ url ('rice') }}" class="darken">
				<img src="/images/icon/Icon_vegies.png" style="height: 222px;width:250px;">
				<span>Rice</span>
			</a>
		</div>
		<div class="left">
			<a href="{{ url ('meat-fish') }}" class="darken">
				<img src="/images/icon/Icon_vegies.png" style="height: 222px;width:250px;">
				<span>Other Services</span>
			</a>
		</div>
	</div>
	<!--<div class="veges-img">
		<a href="{{ url ('vegetables') }}"><label class="icon1">Fruits</label></a>
	</div>
	
	<div class="fruits-img">
		<a href="{{ url ('fruits') }}"><label class="icon1">Fruits</label></a>
	</div>
	
	<div class="fish-img">
		<a href="{{ url ('meat-fish') }}"><label class="icon1">Meat/Fish</label></a>
	</div>
	
	<div class="can-img">
		<a href="{{ url ('canned-instant-goods') }}"><label class="icon1">Canned Goods / Instant Food</label></a>
	</div>
	
	<div class="rice-img">
		<a href="{{ url ('rice') }}"><label class="icon1">Rice</label></a>
	</div>
	
	<div class="others-img">
		<a href="#"><label class="icon1">Other Services</label></a>
	</div>  -->
</div>
<div style="height: 35%;"></div> 
@endsection

@section('scripts')

<!--add here the js for this page-->

@endsection