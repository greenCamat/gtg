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
				<img src="/images/icon/vegiesiconred.png" style="height: 222px;width:250px;">
				<span>Vegetables</span>
			</a>
		</div>
		<div class="left">
			<a href="{{ url ('fruits') }}" class="darken">
				<img src="/images/icon/fruitsicon.png" style="height: 222px;width:250px;">
				<span>Fruits</span>
			</a>
		</div>
		<div class="left">
			<a href="{{ url ('meat-fish') }}" class="darken">
				<img src="/images/icon/Icon_vegies.png" style="height: 222px;width:250px;">
				<span>Meat/Fish/Chicken and Frozen Foods</span>
			</a>
		</div>
	</div>
<div style="height: 55%;"></div> 
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
</div>
<div style="height: 80%;"></div> 
@endsection

@section('scripts')

<!--add here the js for this page-->

@endsection