@extends('layout.master')
@section('title', 'GTG - Vegetables')
@section('content')
<div role="main" class="page-body">

    <div class="upper-content">
        <div class="primary-site-nav-amount-rvw-prchsd">
            <span class="rvw-prchsd"><a id="review-purchased" href="#reviewList" name="modal">Review Purchased</a></span>
        </div>

        <div class="primary-site-nav-amount">
            Total Amount: &#x20B1; <span id="total-amt" class="total-amt">0.00</span><!--TOTAL AMOUNT: &#x20B1;3,200.00</span-->
        </div>
    </div>


    <div class="item-column">
        <label>Items:</label> 
            <select id="item-category" style="font-size: 15px;border-radius: 3px;font-weight: bold;">
                <!--render-->
            </select>
    </div>

    
    <div id="item-data-list" class="main-wrap-shop-content">
        <!--render-->
    </div>
    



<div id="reviewList" class="modalDialog">
            <div>
                <a href="#" class="close">X</a>
                <p><br />
                <table class="rvw-list" border="1" align="center">
                    <div class="modal-header">
                        <h3>Grocery List</h3>
                    </div>
                    <tr>
                        <th>Qty.</th>
                        <th>Product Name</th>
                        <th>Amount</th>
                    </tr>
                    <tr>
                        <td width="50" class="label-cell"><label>3pcs</label></td>
                        <td width="350" class="label-cell">
                            
                            <div class="import-contact-wrap">
                                White Onion
                            </div>
                           
                        </td>
                        <td width="50" class="label-cell"><label>450</label></td>
                    </tr>
                    <tr>
                        <td width="50" class="label-cell"><label>3pcs</label></td>
                        <td width="350" class="label-cell">
                            
                            <div class="import-contact-wrap">
                                Native Tomatoes(Kamatis)
                            </div>
                        </td>
                        <td width="50" class="label-cell"><label>450</label></td>
                    </tr>
                </table>
                <div class="modal-header">
                    <h3>Total Amount: &#x20B1; 900.00</h3>
                </div>
                <div class="modal-btn-wrap">
                    <button><a href="#" class="btn">Submit Order</a></button>
                    <button><a href="#" class="btn btn-close">Shop more</a></button>
                </div>
                </p>
            </div>
        </div>
</div>
@endsection('content')

@section('scripts')
<script type="text/javascript" src="{{ asset('assets/js/scripts/shop-items.js') }}"></script>
@endsection('scripts')