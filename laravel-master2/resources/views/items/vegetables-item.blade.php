@extends('layout.master')
@section('title', 'GTG - Vegestables')
@section('content')

<div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Categories</h2>
                <div class="col-sm-3 col-md-3 pull-right">
                    <form class="navbar-form" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                            <img src="img/icon/vegesB.png" style="margin-top: -15px;height: 150px;" />
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Vegetables</h4>
                        <p>We deliver to you fresh!</p>
                        <a id="item_vegies" href="/shop/vegetables" class="btn btn-primary">Shop</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                            <img src="img/icon/fruits.png" style="margin: -19px;height: 183px;" />
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Fruits</h4>
                        <p>We deliver to you fresh!</p>
                        <a href="#" class="btn btn-primary">Shop</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                            <img src="img/icon/rawfish.png" style="margin-top: -15px;height: 128px;" />
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Meat and Fish</h4>
                        <p>Meats are included in this category.</p>
                        <a href="#" class="btn btn-primary">Shop</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                            <img src="img/icon/condiments.png" style="margin-top: -15px;height: 150px;" />
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Condiments</h4>
                        <p>Sugar, Spice and Everything nice.</p>
                        <a href="#" class="btn btn-primary">Shop</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                            <img src="img/icon/dairy.png" style="margin-top: -15px;height: 150px;" />
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Dairy</h4>
                        <p>Eggs, Milks etc..</p>
                        <a href="#" class="btn btn-primary">Shop</a>
                    </div>
                </div>
            </div>
             <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                            <img src="img/icon/chips.png" style="margin-top: -15px;height: 150px;" />
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Chips/Snacks</h4>
                        <p>All local and imported are here.</p>
                        <a href="#" class="btn btn-primary">Shop</a>
                    </div>
                </div>
            </div>
             <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                            <img src="img/icon/canned-food.png" style="margin-top: -15px;height: 150px;" />
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Instant Food</h4>
                        <p>Canned food and One step cooking.</p>
                        <a href="#" class="btn btn-primary">Shop</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                            <img src="img/icon/riceraw.png" style="margin-top: -15px;height: 150px;" />
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Rice</h4>
                        <p>Canned food and One step cooking.</p>
                        <a href="#" class="btn btn-primary">Shop</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                            <img src="img/icon/supplies.png" style="margin-top: -15px;height: 150px;" />
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Supplies</h4>
                        <p>Kitchen supplies and all.</p>
                        <a href="#" class="btn btn-primary">Shop</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                            <img src="img/icon/beverage.png" style="margin-top: -15px;height: 150px;" />
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Beverages</h4>
                        <p>Let's all drink to that!</p>
                        <a href="#" class="btn btn-primary">Shop</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                            <img src="img/icon/23468-200.png" style="margin-top: -15px;height: 150px;" />
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Toiletries</h4>
                        <p>Bath and Beyond</p>
                        <a href="#" class="btn btn-primary">Shop</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                            <img src="img/icon/Services-Icon.png" style="margin-top: -15px;height: 150px;" />
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Other Services</h4>
                        <p>Beyond groceries are here.</p>
                        <a href="#" class="btn btn-primary">Shop</a>
                    </div>
                </div>
            </div>
        </div>

@endsection