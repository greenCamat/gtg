@extends('layout.master')
@section('title', 'GTG - Vegetables')
@section('content')

<div class="col-lg-12">
    <h2 class="page-header">
        Shopping Section
    </h2>
    <div class="col-sm-3 col-md-3 pull-left">
        <select id="item-category" class="form-control">
            <!--render-->
        </select>
    </div>
    <div class="col-sm-3 col-md-3 btn-group">
        <span data-target="#myModal" data-toggle="modal" type="button" style="font-size: 16px;color: #333;" class="label btn btn-default">Review purchased</span>
    </div>
    <div class="col-sm-3 col-md-3 btn-group">
        <span style="font-size: 16px;" class="label">Cart/Total Amount: &#x20B1; <label id="total-amt">0.00</label></span>  
    </div>
    
    <div class="col-sm-3 col-md-3 pull-right">
        <form class="navbar-form" role="search">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term" />
                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </form>
    </div>
</div>
<div id="item-data-list" class="row">
    <!--render items-->
</div>

<!--modal part-->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" style="background-color: #e3444a;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Grocery List</h4>
         <div align="right">Total Amount: &#x20B1; <span id="totalAmtPurchase" style="font-weight: bold;">0.00<span></div>
      </div>
        <div class="modal-body">
            <div class="table-responsive">          
              <table class="table">
                <thead>
                  <tr>
                    <th>Quantity</th>
                    <th>Items Name</th>
                    <th>Total</th>
                  </tr>
                </thead>
                <tbody id="renderPurchased">
                  <!--<tr>
                    <td style="width: 130px;">
                        <div class="input-group" style="width: 125px;">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-danger btn-number"  data-type="minus" data-field="quant[2]">
                                    <span class="glyphicon glyphicon-minus"></span>
                                </button>
                            </span>
                          <input disabled type="text" name="quant[2]" class="form-control input-number" value="10" min="1" max="100">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-success btn-number" data-type="plus" data-field="quant[2]">
                                  <span class="glyphicon glyphicon-plus"></span>
                                </button>
                            </span>
                        </div>
                    </td>
                    <td>Petchay Baguio</td>
                    <td>20.75</td>
                  </tr>-->
                </tbody>
              </table>
            </div>
            <div align="right">
                <button type="button" class="btn btn-success">Submit order</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
      </div>
    </div>

  </div>

@endsection

@section('scripts')
<script type="text/javascript" src="{{ asset('assets/js/scripts/shop-items.js') }}"></script>
@endsection('scripts')