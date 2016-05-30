@extends('layout.master')
@section('title', 'GTG - Shop')
@section('content')	
<div role="main" class="page-body">
	<div class="main-wrap-shop-menu">
		<div class="title-page">
			<span>Items</span>
		</div>

		<div class="upper-div" align="center">
			<div class="left">
				<a id="item_vegies" href="/shop/vegetables" class="darken">
					<img src="/images/icon/grayvegies.png" style="height: 150px;width:150px;" />
					<span>Vegetables</span>
				</a>
			</div>
			<div class="left">
				<a id="item_fruits" href="/shop/fruits" class="darken">
					<img src="/images/icon/grayfruits.png" style="height: 150px;width:150px;" />
					<span>Fruits</span>
				</a>
			</div>
			<div class="left">
				<a id="item_meatfish" href="/shop/meatfish" class="darken">
					<img src="/images/icon/graymeatnfish.png" style="height: 150px;width:150px;" />
					<span>Meat/Fish</span>
				</a>
			</div>
		</div>

		<div class="upper-div" align="center">
			<div class="left">
				<a id="item_condiments" href="/shop/condiments" class="darken">
					<img src="/images/icon/graycondiments.png" style="height: 150px;width:150px;" />
					<span>Condiments</span>
				</a>
			</div>
			<div class="left">
				<a id="item_dairy" href="/shop/dairy" class="darken">
					<img src="/images/icon/graydairy.png" style="height: 150px;width:150px;" />
					<span>Dairy</span>
				</a>
			</div>
			<div class="left">
				<a id="item_chipsnacks" href="/shop/chipsnacks" class="darken">
					<img src="/images/icon/graychips.png" style="height: 150px;width:150px;" />
					<span>Chips/Snacks</span>
				</a>
			</div>	
		</div>

		<div class="upper-div" align="center">
			<div class="left">
				<a id="item_instantfood" href="/shop/instantfood" class="darken">
					<img src="/images/icon/graycanned.png" style="height: 150px;width:150px;" />
					<span>Instant Food</span>
				</a>
			</div>
			<div class="left">
				<a id="item_rice" href="/shop/rice" class="darken">
					<img src="/images/icon/grayrice.png" style="height: 150px;width:150px;" />
					<span>Rice</span>
				</a>
			</div>
			<div class="left" align="center">
				<a id="item_supplies" href="/shop/supplies" class="darken">
					<img src="/images/icon/supplies.png" style="height: 150px;width:150px;" />
					<span>Supplies</span>
				</a>
			</div>
		</div>

		<div class="upper-div" align="center">
			<div class="left">
					<a id="item_beverages" href="/shop/beverages" class="darken">
						<img src="/images/icon/beverage.png" style="height: 150px;width:150px;" />
						<span>Beverages</span>
					</a>
				</div>
				<div class="left">
					<a id="item_toiletries" href="/shop/toiletries" class="darken">
						<img src="/images/icon/toiletries.png" style="height: 150px;width:150px;" /> 
						<span>Toiletries</span>
					</a>
				</div>
				<div class="left">
					<a id="item_otherservices" href="/shop/otherservices" class="darken">
						<img src="/images/icon/grayservices.png" style="height: 150px;width:150px;" />
						<span>Other Services</span>
					</a>
				</div>
		</div>
	</div>
	<div style="height: 40px;"></div>
</div>

@endsection