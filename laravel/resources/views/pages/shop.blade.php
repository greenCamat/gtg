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
				<img src="/images/icon/grayvegies.png" style="height: 150px;width:150px;">
				<span>Vegetables</span>
			</a>
		</div>
		<div class="left">
			<a href="{{ url ('fruits') }}" class="darken">
				<img src="/images/icon/grayfruits.png" style="height: 150px;width:150px;">
				<span>Fruits</span>
			</a>
		</div>
		<div class="left">
			<a href="{{ url ('meat-fish') }}" class="darken">
				<img src="/images/icon/graymeatnfish.png" style="height: 150px;width:150px;">
				<span>Meat/Fish</span>
			</a>
		</div>		
	</div>

	<div class="upper-div">
		<div class="left">
			<a href="{{ url ('vegetables') }}" class="darken">
				<img src="/images/icon/graycondiments.png" style="height: 150px;width:150px;">
				<span>Condiments</span>
			</a>
		</div>
		<div class="left">
			<a href="{{ url ('graydairy') }}" class="darken">
				<img src="/images/icon/graydairy.png" style="height: 150px;width:150px;">
				<span>Dairy</span>
			</a>
		</div>
		<div class="left">
			<a href="{{ url ('meat-fish') }}" class="darken">
				<img src="/images/icon/graychips.png" style="height: 150px;width:150px;">
				<span>Chips/Snacks</span>
			</a>
		</div>		
	</div>

<div style="height: 10%;"></div> 

	<div class="lower-div">
		<div class="left">
			<a href="{{ url ('canned-instant-goods') }}" class="darken">
				<img src="/images/icon/graycanned.png" style="height: 150px;width:150px;">
				<span>Canned/Instant Food</span>
			</a>
		</div>
		<div class="left">
			<a href="{{ url ('rice') }}" class="darken">
				<img src="/images/icon/grayrice.png" style="height: 150px;width:150px;">
				<span>Rice</span>
			</a>
		</div>
		<div class="left">
			<a href="{{ url ('meat-fish') }}" class="darken">
				<img src="/images/icon/grayservices.png" style="height: 150px;width:150px;">
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