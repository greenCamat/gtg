@extends('layout.master')
@section('title', 'GTG - Shop')
@section('content')	
<div class="main-wrap-shop-menu">

	<div class="title-page">
		<span>Items</span>
	</div> 

	<div class="upper-div">
		<div class="left">
			<a id="item_vegies" href="/vegetables" class="darken">
				<img src="/images/icon/grayvegies.png" style="height: 150px;width:150px;"></img>
				<span>Vegetables</span>
			</a>
		</div>
		<div class="left">
			<a id="item_fruits" href="#" class="darken">
				<img src="/images/icon/grayfruits.png" style="height: 150px;width:150px;"></img>
				<span>Fruits</span>
			</a>
		</div>
		<div class="left">
			<a id="item_meatfish" href="#" class="darken">
				<img src="/images/icon/graymeatnfish.png" style="height: 150px;width:150px;"></img>
				<span>Meat/Fish</span>
			</a>
		</div>		
	</div>

	<div class="upper-div">
		<div class="left">
			<a id="item_condiments" href="#" class="darken">
				<img src="/images/icon/graycondiments.png" style="height: 150px;width:150px;">
				<span>Condiments</span>
			</a>
		</div>
		<div class="left">
			<a id="item_dairy" href="#" class="darken">
				<img src="/images/icon/graydairy.png" style="height: 150px;width:150px;">
				<span>Dairy</span>
			</a>
		</div>
		<div class="left">
			<a id="item_chipsnacks" href="#" class="darken">
				<img src="/images/icon/graychips.png" style="height: 150px;width:150px;">
				<span>Chips/Snacks</span>
			</a>
		</div>		
	</div>

	<div class="lower-div">
		<div class="left">
			<a id="item_instantfood" href="#" class="darken">
				<img src="/images/icon/graycanned.png" style="height: 150px;width:150px;">
				<span>Instant Food</span>
			</a>
		</div>
		<div class="left">
			<a id="item_rice" href="#" class="darken">
				<img src="/images/icon/grayrice.png" style="height: 150px;width:150px;">
				<span>Rice</span>
			</a>
		</div>
		<div class="left">
			<a id="item_supplies" href="#" class="darken">
				<img src="/images/icon/supplies.png" style="height: 150px;width:150px;">
				<span>Supplies</span>
			</a>
		</div>
	</div>

	<div class="lower-div">
		<div class="left">
			<a id="item_beverages" href="#" class="darken">
				<img src="/images/icon/beverage.png" style="height: 150px;width:150px;">
				<span>Beverages</span>
			</a>
		</div>
		<div class="left">
			<a id="item_toiletries" href="#" class="darken">
				<img src="/images/icon/toiletries.png" style="height: 150px;width:150px;">
				<span>Toiletries</span>
			</a>
		</div>
		<div class="left">
			<a id="item_otherservices" href="#" class="darken">
				<img src="/images/icon/grayservices.png" style="height: 150px;width:150px;">
				<span>Other Services</span>
			</a>
		</div>
	</div>

</div>

<div style="height: 80%;"></div> 

@endsection

@section('scripts')

<script type="text/javascript" src="{{ asset('assets/js/scripts/shop-items.js') }}"></script>

@endsection