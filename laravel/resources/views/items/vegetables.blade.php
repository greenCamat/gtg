@extends('layout.master')
@section('title', 'GTG - My Profile')
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

    <div class="main-wrap-shop-content">
        <div class="veges-item">
            <div class="veges-item-img">
                <img src="../images/veges/Onion-PNG.png" alt="Onion" style="height:130;width:200px;" />
            </div>
            <div class="item-name">
                <label>Red Onion: &#x20B1; 150.00 / kilo</label>
            </div>
            <div class="veges-add-btn">
                <button type="button"><img src="../images/btn/add.png" alt="Add item" /></button>&nbsp;<button type="button" /><img src="../images/btn/minus.png" alt="Remove item" />
            </div>		
        </div>
        <div class="veges-item2">
            <div class="veges-item-img">
                <img src="../images/veges/white-onion.png" alt="Onion" style="height:130;width:200px;" />
            </div>
            <div class="item-name">
                <label>White Onion: &#x20B1; 150.00</label>
            </div>
            <div class="veges-add-btn">
                <button type="button"><img src="../images/btn/add.png" alt="Add item" /></button>&nbsp;<button type="button" /><img src="../images/btn/minus.png" alt="Remove item" />
            </div>		
        </div>
        <div class="veges-item3">
            <div class="veges-item-img">
                <img src="../images/veges/kamatis.png" alt="Onion" style="height:130;width:138px;margin-left: 32px;" />
            </div>
            <div class="item-name">
                <label>Native Tomatoes: &#x20B1; 150.00</label>
            </div>
            <div class="veges-add-btn">
                <button type="button"><img src="../images/btn/add.png" alt="Add item" /></button>&nbsp;<button type="button" /><img src="../images/btn/minus.png" alt="Remove item" />
            </div>		
        </div>
        <div class="veges-item">
            <div class="veges-item-img">
                <img src="../images/veges/Onion-PNG.png" alt="Onion" style="height:130;width:200px;" />
            </div>
            <div class="item-name">
                <label>Red Onion: &#x20B1; 150.00</label>
            </div>
            <div class="veges-add-btn">
                <button type="button"><img src="../images/btn/add.png" alt="Add item" /></button>&nbsp;<button type="button" /><img src="../images/btn/minus.png" alt="Remove item" />
            </div>		
        </div>
        <div class="veges-item2">
            <div class="veges-item-img">
                <img src="../images/veges/white-onion.png" alt="Onion" style="height:130;width:200px;" />
            </div>
            <div class="item-name">
                <label>White Onion: &#x20B1; 150.00</label>
            </div>
            <div class="veges-add-btn">
                <button type="button"><img src="../images/btn/add.png" alt="Add item" /></button>&nbsp;<button type="button" /><img src="../images/btn/minus.png" alt="Remove item" />
            </div>		
        </div>
        <div class="veges-item3">
            <div class="veges-item-img">
                <img src="../images/veges/kamatis.png" alt="Onion" style="height:130;width:138px;margin-left: 32px;" />
            </div>
            <div class="item-name">
                <label>Native Tomatoes: &#x20B1; 150.00</label>
            </div>
            <div class="veges-add-btn">
                <button type="button"><img src="../images/btn/add.png" alt="Add item" /></button>&nbsp;<button type="button" /><img src="../images/btn/minus.png" alt="Remove item" />
            </div>		
        </div>
        <div class="veges-item">
            <div class="veges-item-img">
                <img src="../images/veges/Onion-PNG.png" alt="Onion" style="height:130;width:200px;" />
            </div>
            <div class="item-name">
                <label>Red Onion: &#x20B1; 150.00</label>
            </div>
            <div class="veges-add-btn">
                <button type="button"><img src="../images/btn/add.png" alt="Add item" /></button>&nbsp;<button type="button" /><img src="../images/btn/minus.png" alt="Remove item" />
            </div>		
        </div>
        <div class="veges-item2">
            <div class="veges-item-img">
                <img src="../images/veges/white-onion.png" alt="Onion" style="height:130;width:200px;" />
            </div>
            <div class="item-name">
                <label>White Onion: &#x20B1; 150.00</label>
            </div>
            <div class="veges-add-btn">
                <button type="button"><img src="../images/btn/add.png" alt="Add item" /></button>&nbsp;<button type="button" /><img src="../images/btn/minus.png" alt="Remove item" />
            </div>		
        </div>
        <div class="veges-item3">
            <div class="veges-item-img">
                <img src="../images/veges/kamatis.png" alt="Onion" style="height:130;width:138px;margin-left: 32px;" />
            </div>
            <div class="item-name">
                <label>Native Tomatoes: &#x20B1; 150.00</label>
            </div>
            <div class="veges-add-btn">
                <button type="button"><img src="../images/btn/add.png" alt="Add item" /></button>&nbsp;<button type="button" /><img src="../images/btn/minus.png" alt="Remove item" />
            </div>		
        </div>
    </div>
</div>
@endsection('content')

@section('scripts')
<script type="text/javascript" src="{{ asset('assets/js/scripts/vegetables.js') }}"></script>
@endsection('scripts')