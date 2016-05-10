@extends('layout.master')
@section('title', 'GTG - Vegetables')
@section('content')
<div role="main" class="page-body">

    <div class="upper-content">
        
        <div class="primary-site-nav-amount-rvw-prchsd">
            <span class="rvw-prchsd"><a href="#rvw-list" name="modal" title="Review List">Review Purchased</a></span>
        </div>

        <span class="title-page-veges">Items:</span> 
        <select style="width: 200px;font-size: 15px;border-radius: 3px;font-weight: bold;">
            <option>Vegetables</option>
            <option>Fruits</option>
            <option>Meat/Fish</option>
            <option>Canned Goods/Instant Food</option>
            <option>Dairy</option>
            <option>Condiments</option>
            <option>Rice</option>
        </select>

        <div class="primary-site-nav-amount">
            <span class="total-amt">TOTAL AMOUNT: &#x20B1;3,200.00</span>
        </div>
    </div>
    
    

</div>
@endsection('content')

@section('scripts')
<script type="text/javascript" src="{{ asset('assets/js/scripts/vegetables.js') }}"></script>
@endsection('scripts')