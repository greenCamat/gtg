@extends('layout.admin-master-head')

@section('content')
<div role="main" class="page-body">
    <div class="page-body-wrapper clearfix">
    @include('sidebar')
        <div class="page-content rfloat">
            <div class="page-content-wrapper">
            <div class="content-header clearfix">
                <h1 class="lfloat">Dashboard</h1>
                <a href="#" class="btn-box btn-new-campaign rfloat">ADD Item</a>
            </div>
                <div class="main-content">
                    <div class="head clearfix">
                        <h2 class="lfloat">Overview</h2>
                        <input type="text" class="inpt-calendar rfloat" value="Aug 13, 2013 - Aug 19, 2013">
                    </div>
                <ul class="overview-wrapper clearfix">
                    <li>
                    <span class="title">USERS</span>
                    <span class="data">5</span>
                    </li>
                    <li>
                    <span class="title">TOTAL ORDERS PER DAY</span>
                    <span class="data">800</span>
                    </li>
                    <li>
                    <span class="title">TOTAL ORDERS PER WEEK</span>
                    <span class="data">2</span>
                    </li>
                    <li>
                    <span class="title">TOTAL ORDERS PER MONTH</span>
                    <span class="data">12%</span>
                    </li>
                </ul>

                    <div class="resource-data clearfix">
                        <div class="campaigns-activity lfloat clearfix">
                            <h2 class="lfloat">Activity</h2>
                            <a href="#" class="btn btn-view-activity rfloat">View More</a>
                            <div class="activity-wrapper clearfix">
                                <div class="most-recent-box clearfix">
                                    <div class="box-head clearfix">
                                        <h4 class="lfloat">Most Recent</h4>
                                        <h4 class="rfloat">AUG 19, 2013</h4>
                                    </div>
                                    <div class="pie-chart-block lfloat">
                                        <img src="/images/admin/pie-chart1.png">
                                    </div>
                                    <div class="statistics-block rfloat">
                                        <h3>Welcome Admin!</h3>
                                        <ul>
                                            <li class="active-stats clearfix">
                                                <span class="title">Visitors</span>
                                                <span class="data-clicks">400</span>
                                            </li>
                                            <li class="clearfix">
                                                <span class="title">Shopped</span>
                                                <span class="data-clicks">20</span>
                                            </li>
                                            <li class="clearfix">
                                                <span class="title">Forwards</span>
                                                <span class="data-clicks">2</span>
                                            </li>
                                            <li class="clearfix">
                                                <span class="title">Unsubscribers</span>
                                                <span class="data-clicks">0</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                           <!-- <div class="bottom-box right-border lfloat">
                                <div class="box-head clearfix">
                                    <h4 class="lfloat"></h4>
                                    <h4 class="rfloat">AUG 16, 2013</h4>
                                </div>
                                <div class="pie-chart-bottom">
                                    <img src="/images/admin/pie-chart2.png">
                                </div>
                                <p>Buy one Get one Sleep1</p>
                            </div>
                            <div class="bottom-box rfloat">
                                <div class="box-head clearfix">
                                    <h4 class="lfloat"></h4>
                                    <h4 class="rfloat">AUG 13, 2013</h4>
                                </div>
                                <div class="pie-chart-bottom">
                                    <img src="/images/admin/pie-chart3.png">
                                </div>
                                <p>Now-or-Never Deal!</p>
                            </div>-->
                            </div>
                            <!--/.activity-wrapper-->
                        </div>
                    <!--/.campaigns-activity-->

                    <div class="locations rfloat clearfix">
                        <h2 class="lfloat">Locations</h2>
                        <a href="#" class="btn btn-view-locations rfloat">VIP Users</a>
                        <div class="locations-wrapper clearfix">
                            <h4 class="lfloat">Location</h4>
                            <h4 class="rfloat">Clicks</h4>
                            <ul class="locations-list-wrap">
                            <li>
                            <span class="country">California, US</span>
                            <span class="data-clicks">375</span>
                            </li>
                            <li>
                            <span class="country">Florida, US</span>
                            <span class="data-clicks">275</span>
                            </li>
                            <li>
                            <span class="country">Los Angeles, US</span>
                            <span class="data-clicks">182</span>
                            </li>
                            <li>
                            <span class="country">Dallas, US</span>
                            <span class="data-clicks">153</span>
                            </li>
                            <li>
                            <span class="country">Miami, US</span>
                            <span class="data-clicks">98</span>
                            </li>
                            <li>
                            <span class="country">Houston, US</span>
                            <span class="data-clicks">375</span>
                            </li>
                            <li>
                            <span class="country">Chicago, US</span>
                            <span class="data-clicks">275</span>
                            </li>
                            <li>
                            <span class="country">New York, US</span>
                            <span class="data-clicks">182</span>
                            </li>
                            <li>
                            <span class="country">Denver, US</span>
                            <span class="data-clicks">153</span>
                            </li>
                            <li>
                            <span class="country">San Antonio, US</span>
                            <span class="data-clicks">98</span>
                            </li>
                            <li>
                            <span class="country">Miluakee, US</span>
                            <span class="data-clicks">375</span>
                            </li>
                            <li>
                            <span class="country">Phoenix, US</span>
                            <span class="data-clicks">375</span>
                            </li>
                            <li>
                            <span class="country">Washington, US</span>
                            <span class="data-clicks">375</span>
                            </li>
                            <li>
                            <span class="country">New York, US</span>
                            <span class="data-clicks">375</span>
                            </li>
                            <li>
                            <span class="country">Boston, US</span>
                            <span class="data-clicks">375</span>
                            </li>
                            </ul>
                        </div>
                    </div>
                    <!--/.locations-->

                    </div>
                <!--/.resource-data-->

                <div class="subscribers-data clearfix">
                <h1>Subscribers Performance</h1>
                <div class="subscriber-chart lfloat">
                <ul class="charts-buttons clearfix">
                <li>
                <a href="#" class="btn-chart btn-daily">Daily</a>
                </li>
                <li>
                <a href="#" class="btn-chart btn-weekly">Weekly</a>
                </li>
                <li>
                <a href="#" class="btn-chart btn-box btn-monthly">Monthly</a>
                </li>
                <li>
                <a href="#" class="btn-chart btn-yearly">Yearly</a>
                </li>
                </ul>

                <div class="chart-wrapper">
                <img src="/images/admin/img-test-chart.png">
                </div>
                </div>
                <!--/.subscribers-chart-->

                <div class="subscribers-list rfloat">
                <div class="subscriber-list-wrapper clearfix">
                <h3 class="lfloat">Subscribers</h3>
                <a href="#" class="btn btn-view-all rfloat">View All</a>
                <ul>
                <li>
                <span class="email">
                <h4>Kristine@wideumbrella.com</h4>
                </span>
                <span class="date">
                <h4>Aug 13, 2013</h4>
                </span>
                <span class="group">
                <h4>Test Group, Lean1, Shopify</h4>
                </span>
                </li>
                <li>
                <span class="email">
                <h4>jep@wideumbrella.com</h4>
                </span>
                <span class="date">
                <h4>Aug 13, 2013</h4>
                </span>
                <span class="group">
                <h4>Test Group, Lean1, Shopify</h4>
                </span>
                </li>
                <li>
                <span class="email">
                <h4>chuchay@wideumbrella.com</h4>
                </span>
                <span class="date">
                <h4>Aug 13, 2013</h4>
                </span>
                <span class="group">
                <h4>Test Group, Lean1, Shopify</h4>
                </span>
                </li>
                <li>
                <span class="email">
                <h4>paul@wideumbrella.com</h4>
                </span>
                <span class="date">
                <h4>Aug 13, 2013</h4>
                </span>
                <span class="group">
                <h4>Test Group, Lean1, Shopify</h4>
                </span>
                </li>
                <li>
                <span class="email">
                <h4>edi@wideumbrella.com</h4>
                </span>
                <span class="date">
                <h4>Aug 13, 2013</h4>
                </span>
                <span class="group">
                <h4>Test Group, Lean1, Shopify</h4>
                </span>
                </li>
                </ul>
                </div>

                <div class="unsubscriber-list-wrapper clearfix">
                <h3 class="lfloat">Unsubscribers</h3>
                <a href="#" class="btn btn-view-all rfloat">View All</a>
                <ul>
                <li>
                <span class="email">
                <h4>Kristine@wideumbrella.com</h4>
                </span>
                <span class="date">
                <h4>Aug 13, 2013</h4>
                </span>
                <span class="group">
                <h4>Test Group, Lean1, Shopify</h4>
                </span>
                </li>
                <li>
                <span class="email">
                <h4>jep@wideumbrella.com</h4>
                </span>
                <span class="date">
                <h4>Aug 13, 2013</h4>
                </span>
                <span class="group">
                <h4>Test Group, Lean1, Shopify</h4>
                </span>
                </li>
                <li>
                <span class="email">
                <h4>chuchay@wideumbrella.com</h4>
                </span>
                <span class="date">
                <h4>Aug 13, 2013</h4>
                </span>
                <span class="group">
                <h4>Test Group, Lean1, Shopify</h4>
                </span>
                </li>
                <li>
                <span class="email">
                <h4>paul@wideumbrella.com</h4>
                </span>
                <span class="date">
                <h4>Aug 13, 2013</h4>
                </span>
                <span class="group">
                <h4>Test Group, Lean1, Shopify</h4>
                </span>
                </li>
                <li>
                <span class="email">
                <h4>edi@wideumbrella.com</h4>
                </span>
                <span class="date">
                <h4>Aug 13, 2013</h4>
                </span>
                <span class="group">
                <h4>Test Group, Lean1, Shopify</h4>
                </span>
                </li>
                </ul>
                </div>
                </div>
                <!--/.subscribers-list-->

                </div>
                <!--/.subscribers-data-->

                </div>
                <!--/.main-content-->

            </div>
            <!--/.page-content-wrapper-->

        </div>
    </div>
</div>
@endsection