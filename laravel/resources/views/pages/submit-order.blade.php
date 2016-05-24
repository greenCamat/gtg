@extends('layout.master')
@section('title', 'GTG - Submit Order')
@section('content')
<div role="main" class="page-body">
    <div class="submit-order">
        <span class="rvw-prchsd">Submit Order</span>
    </div>
    <div class="submit-content">
        <div class="submit-info">
            <table>
                <tr>
                    <td width="150px"><label>Name: <span>*</span></label></td>
                    <td ><input type="text"/></td>
                </tr>
                <tr><td>&nbsp;</td></tr>
                <tr>
                    <td width="150px"><label>Email: <span>*</span></label></td>
                    <td><input type="text"/></td>
                </tr>
                <tr><td>&nbsp;</td></tr>
                <tr>
                    <td width="150px"><label>Contact No.: <span>*</span></label></td>
                    <td><input type="text"/></td>
                </tr>
                <tr><td>&nbsp;</td></tr>
                <tr>
                    <td width="150px"><label>Address: <span>*</span></label></td>
                    <td><input type="text"/></td>
                    <td width="57px"><label> City: <span>*</span></label></td>
                    <td><input type="text"/></td>
                </tr>
                <tr><td>&nbsp;</td></tr>
                <tr>
                    <td width="150px"><label>Preferred Delivery Date: <span>*</span></label></td>
                    <td><input type="text"/></td>
                </tr>
                <tr><td>&nbsp;</td></tr>
                <tr>
                    <td width="150px"><label>Delivery Option:</label></td>
                    <td>
                        <select>
                            <option>SELECT</option>
                            <option>Personal delivery</option>
                            <option>Delivery to someone else</option><!--if, will have info (name, address or same as above, and contact # if not diff from above)-->
                        </select>
                    </td>
                </tr>
                <tr><td>&nbsp;</td></tr>
                <tr>
                    <td width="150px"><label>Payment Option:<span>*</span></label></td>
                    <td>
                        <select>
                            <option>SELECT</option>
                            <option>Cash</option>
                            <option>Paypal</option>
                            <option>Credit Card</option>
                            <option>Debit Card</option>
                        </select>
                    </td>
                </tr>
                <tr><td>&nbsp;</td></tr>
                <tr>
                    <td width="150px"><label>Special Instructions or Comments: <span>*</span></label></td>
                    <td><textarea style="width: 386px; height: 146px;"></textarea></td>
                </tr>
            </table>
        </div>
        <div class="send-order">
            <button class="submit-btn">SEND ORDER</button>
            <button class="cancel-btn">CANCEL</button>
        </div>
        <!--<div class="upper-content">
            <div class="primary-site-nav-amount">
                Total Amount: &#x20B1; <span id="total-amt" class="total-amt">0.00</span>
            </div>
        </div>   --> 
    </div>
</div>
@endsection('content')

@section('scripts')

@endsection('scripts')