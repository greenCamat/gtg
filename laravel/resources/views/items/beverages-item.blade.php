@extends('layout.master')
@section('title', 'GTG - Beverages')
@section('content')
<div role="main" class="page-body">

    <div class="upper-content">
        <div class="primary-site-nav-amount-rvw-prchsd">
            <span class="rvw-prchsd"><a id="review-purchased" href="#" name="modal">Review Purchased</a></span>
        </div>

        <div class="primary-site-nav-amount">
            Total Amount: &#x20B1; <span id="total-amt" class="total-amt">0.00</span><!--TOTAL AMOUNT: &#x20B1;3,200.00</span-->
        </div>
    </div>


    <div class="item-column">
        <label>Items:</label> 
            <select id="item-category" style="font-size: 15px;border-radius: 3px;font-weight: bold;">
                @foreach($itemColumn as $val)
                    <option value="{{$val}}">{{$val}}</option>
                @endforeach
            </select>
    </div>

    
    <div class="main-wrap-shop-content">
        @foreach($itemData as $val)
        <div class="veges-item">
            <div class="veges-item-img">
                <img src="../images/veges/Onion-PNG.png" alt="Onion" style="height:130;width:200px;" />
            </div>
            <div class="item-name">
                <label class="item-title">{{$val['item_name']}}</label>
                <label class="item-price">&#8369; {{$val['item_price']}}</label>
            </div>
            <div class="veges-add-btn">
                <button id="btn-add-item" type="button"><img src="../images/btn/add.png" alt="Add item" /></button>
                <button id="btn-minus-item" type="button"><img src="../images/btn/minus.png" alt="Remove item" /></button>
            </div>
        </div>
        @endforeach
    </div>
    

</div>
@endsection('content')

@section('scripts')
<script type="text/javascript" src="{{ asset('assets/js/scripts/beverages.js') }}"></script>
@endsection('scripts')