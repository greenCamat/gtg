@extends('layout.master')
@section('title', 'GTG - Vegetables')
@section('content')

<div id="item-data-list" class="row">
    <div class="col-lg-12">
        <h2 class="page-header">
        	Shopping Section
        </h2>
        <div class="col-sm-3 col-md-3 pull-left">
	        <select id="item-category" class="form-control">
			   <!--render-->
			</select>
		</div>
        <div class="col-sm-3 col-md-3 pull-right">
            <form class="navbar-form" role="search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript" src="{{ asset('assets/js/scripts/shop-items.js') }}"></script>
@endsection('scripts')