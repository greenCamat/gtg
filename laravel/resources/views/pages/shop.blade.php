@extends('layout.master')
<header> @include('layout.header') </header>
<div role="main" class="page-body">
	    <div class="title-page">
			<span>Items</span>
		</div>    	
        <div class="main-wrap-shop-menu">

			<div class="veges-img">
				<a href="vegetable.html"><label class="icon1">Vegetables</label></a>
			</div>
			
			<div class="fruits-img">
				<a href="#"><label class="icon1">Fruits</label></a>
			</div>
			
			<div class="fish-img">
				<a href="#"><label class="icon1">Meat/Fish</label></a>
			</div>
			
			<div class="can-img">
				<a href="#"><label class="icon1">Canned Goods / Instant Food</label></a>
			</div>
			
			<div class="rice-img">
				<a href="#"><label class="icon1">Rice</label></a>
			</div>
			
			<div class="others-img">
				<a href="#"><label class="icon1">Other Services</label></a>
			</div>            
        </div>
  </div>
</div>
<footer> @include('layout.footer') </footer>