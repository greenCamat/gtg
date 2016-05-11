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
				<img src="/images/icon/vegestables.png" style="height: 222px;width:250px;">
				<span>Vegetables</span>
			</a>
		</div>
		<div class="left">
			<a href="{{ url ('fruits') }}" class="darken">
				<img src="/images/icon/fruits2.png" style="height: 222px;width:250px;">
				<span>Fruits</span>
			</a>
		</div>
		<div class="left">
			<a href="{{ url ('meat-fish') }}" class="darken">
				<img src="/images/icon/meatnfish.png" style="height: 222px;width:250px;">
				<span>Meat/Fish</span>
			</a>
		</div>
	</div>
<div style="height: 25%;"></div> 
	<div class="lower-div">
		<div class="left">
			<a href="{{ url ('canned-instant-goods') }}" class="darken">
				<img src="/images/icon/canned.png" style="height: 222px;width:250px;">
				<span>Canned/Instant Food</span>
			</a>
		</div>
		<div class="left">
			<a href="{{ url ('rice') }}" class="darken">
				<img src="/images/icon/rice1.png" style="height: 222px;width:250px;">
				<span>Rice</span>
			</a>
		</div>
		<div class="left">
			<a href="{{ url ('meat-fish') }}" class="darken">
				<img src="/images/icon/otherservices.png" style="height: 222px;width:250px;">
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