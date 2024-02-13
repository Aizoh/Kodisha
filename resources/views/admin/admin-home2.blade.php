
@extends('layouts.admin')
@section('content')
<div class="page-wrapper">  
    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <!-- BEGIN CONTENT BODY -->
            <div class="page-content">
                <!-- BEGIN PAGE HEADER-->
                <!-- BEGIN THEME PANEL -->
                <div class="theme-panel hidden-xs hidden-sm">
                    <div class="toggler"> </div>
                    <div class="toggler-close"> </div>
                    <div class="theme-options">
                        <div class="theme-option theme-colors clearfix">
                            <span> THEME COLOR </span>
                            <ul>
                                <li class="color-default current tooltips" data-style="default" data-container="body" data-original-title="Default"> </li>
                                <li class="color-darkblue tooltips" data-style="darkblue" data-container="body" data-original-title="Dark Blue"> </li>
                                <li class="color-blue tooltips" data-style="blue" data-container="body" data-original-title="Blue"> </li>
                                <li class="color-grey tooltips" data-style="grey" data-container="body" data-original-title="Grey"> </li>
                                <li class="color-light tooltips" data-style="light" data-container="body" data-original-title="Light"> </li>
                                <li class="color-light2 tooltips" data-style="light2" data-container="body" data-html="true" data-original-title="Light 2"> </li>
                            </ul>
                        </div>
                        <div class="theme-option">
                            <span> Theme Style </span>
                            <select class="layout-style-option form-control input-sm">
                                <option value="square" selected="selected">Square corners</option>
                                <option value="rounded">Rounded corners</option>
                            </select>
                        </div>
                        <div class="theme-option">
                            <span> Layout </span>
                            <select class="layout-option form-control input-sm">
                                <option value="fluid" selected="selected">Fluid</option>
                                <option value="boxed">Boxed</option>
                            </select>
                        </div>
                        <div class="theme-option">
                            <span> Header </span>
                            <select class="page-header-option form-control input-sm">
                                <option value="fixed" selected="selected">Fixed</option>
                                <option value="default">Default</option>
                            </select>
                        </div>
                        <div class="theme-option">
                            <span> Top Menu Dropdown</span>
                            <select class="page-header-top-dropdown-style-option form-control input-sm">
                                <option value="light" selected="selected">Light</option>
                                <option value="dark">Dark</option>
                            </select>
                        </div>
                        <div class="theme-option">
                            <span> Sidebar Mode</span>
                            <select class="sidebar-option form-control input-sm">
                                <option value="fixed">Fixed</option>
                                <option value="default" selected="selected">Default</option>
                            </select>
                        </div>
                        <div class="theme-option">
                            <span> Sidebar Menu </span>
                            <select class="sidebar-menu-option form-control input-sm">
                                <option value="accordion" selected="selected">Accordion</option>
                                <option value="hover">Hover</option>
                            </select>
                        </div>
                        <div class="theme-option">
                            <span> Sidebar Style </span>
                            <select class="sidebar-style-option form-control input-sm">
                                <option value="default" selected="selected">Default</option>
                                <option value="light">Light</option>
                            </select>
                        </div>
                        <div class="theme-option">
                            <span> Sidebar Position </span>
                            <select class="sidebar-pos-option form-control input-sm">
                                <option value="left" selected="selected">Left</option>
                                <option value="right">Right</option>
                            </select>
                        </div>
                        <div class="theme-option">
                            <span> Footer </span>
                            <select class="page-footer-option form-control input-sm">
                                <option value="fixed">Fixed</option>
                                <option value="default" selected="selected">Default</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- END THEME PANEL -->
                <!-- BEGIN PAGE BAR -->
                <div class="page-bar">
                    <ul class="page-breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <span>Dashboard</span>
                        </li>
                    </ul>
                    <div class="page-toolbar">
                        <div id="dashboard-report-range" class="pull-right tooltips btn btn-sm" data-container="body" data-placement="bottom" data-original-title="Change dashboard date range">
                            <i class="icon-calendar"></i>&nbsp;
                            <span class="thin uppercase hidden-xs"></span>&nbsp;
                            <i class="fa fa-angle-down"></i>
                        </div>
                    </div>
                </div>
                <!-- END PAGE BAR -->
                <!-- BEGIN PAGE TITLE-->
                <h1 class="page-title"> Admin Dashboard 2
                    <small>statistics, charts, recent events and reports</small>
                </h1>
                <!-- END PAGE TITLE-->
                <!-- END PAGE HEADER-->
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="dashboard-stat2 ">
                            <div class="display">
                                <div class="number">
                                    <h3 class="font-green-sharp">
                                        <span data-counter="counterup" data-value="7800">0</span>
                                        <small class="font-green-sharp">$</small>
                                    </h3>
                                    <small>TOTAL PROFIT</small>
                                </div>
                                <div class="icon">
                                    <i class="icon-pie-chart"></i>
                                </div>
                            </div>
                            <div class="progress-info">
                                <div class="progress">
                                    <span style="width: 76%;" class="progress-bar progress-bar-success green-sharp">
                                        <span class="sr-only">76% progress</span>
                                    </span>
                                </div>
                                <div class="status">
                                    <div class="status-title"> progress </div>
                                    <div class="status-number"> 76% </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="dashboard-stat2 ">
                            <div class="display">
                                <div class="number">
                                    <h3 class="font-red-haze">
                                        <span data-counter="counterup" data-value="1349">0</span>
                                    </h3>
                                    <small>NEW FEEDBACKS</small>
                                </div>
                                <div class="icon">
                                    <i class="icon-like"></i>
                                </div>
                            </div>
                            <div class="progress-info">
                                <div class="progress">
                                    <span style="width: 85%;" class="progress-bar progress-bar-success red-haze">
                                        <span class="sr-only">85% change</span>
                                    </span>
                                </div>
                                <div class="status">
                                    <div class="status-title"> change </div>
                                    <div class="status-number"> 85% </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="dashboard-stat2 ">
                            <div class="display">
                                <div class="number">
                                    <h3 class="font-blue-sharp">
                                        <span data-counter="counterup" data-value="567"></span>
                                    </h3>
                                    <small>NEW ORDERS</small>
                                </div>
                                <div class="icon">
                                    <i class="icon-basket"></i>
                                </div>
                            </div>
                            <div class="progress-info">
                                <div class="progress">
                                    <span style="width: 45%;" class="progress-bar progress-bar-success blue-sharp">
                                        <span class="sr-only">45% grow</span>
                                    </span>
                                </div>
                                <div class="status">
                                    <div class="status-title"> grow </div>
                                    <div class="status-number"> 45% </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="dashboard-stat2 ">
                            <div class="display">
                                <div class="number">
                                    <h3 class="font-purple-soft">
                                        <span data-counter="counterup" data-value="276"></span>
                                    </h3>
                                    <small>NEW USERS</small>
                                </div>
                                <div class="icon">
                                    <i class="icon-user"></i>
                                </div>
                            </div>
                            <div class="progress-info">
                                <div class="progress">
                                    <span style="width: 57%;" class="progress-bar progress-bar-success purple-soft">
                                        <span class="sr-only">56% change</span>
                                    </span>
                                </div>
                                <div class="status">
                                    <div class="status-title"> change </div>
                                    <div class="status-number"> 57% </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-xs-12 col-sm-12">
                        <div class="portlet light ">
                            <div class="portlet-title">
                                <div class="caption">
                                    <span class="caption-subject bold uppercase font-dark">Revenue</span>
                                    <span class="caption-helper">distance stats...</span>
                                </div>
                                <div class="actions">
                                    <a class="btn btn-circle btn-icon-only btn-default" href="#">
                                        <i class="icon-cloud-upload"></i>
                                    </a>
                                    <a class="btn btn-circle btn-icon-only btn-default" href="#">
                                        <i class="icon-wrench"></i>
                                    </a>
                                    <a class="btn btn-circle btn-icon-only btn-default" href="#">
                                        <i class="icon-trash"></i>
                                    </a>
                                    <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="#"> </a>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div id="dashboard_amchart_1" class="CSSAnimationChart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-12 col-sm-12">
                        <div class="portlet light ">
                            <div class="portlet-title">
                                <div class="caption ">
                                    <span class="caption-subject font-dark bold uppercase">Finance</span>
                                    <span class="caption-helper">distance stats...</span>
                                </div>
                                <div class="actions">
                                    <a href="#" class="btn btn-circle green btn-outline btn-sm">
                                        <i class="fa fa-pencil"></i> Export </a>
                                    <a href="#" class="btn btn-circle green btn-outline btn-sm">
                                        <i class="fa fa-print"></i> Print </a>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div id="dashboard_amchart_3" class="CSSAnimationChart"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-xs-12 col-sm-12">
                        <div class="portlet light portlet-fit ">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-directions font-green hide"></i>
                                    <span class="caption-subject bold font-dark uppercase "> Activities</span>
                                    <span class="caption-helper">Horizontal Timeline</span>
                                </div>
                                <div class="actions">
                                    <div class="btn-group">
                                        <a class="btn blue btn-outline btn-circle btn-sm" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Actions
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown-menu pull-right">
                                            <li>
                                                <a href="javascript:;"> Action 1</a>
                                            </li>
                                            <li class="divider"> </li>
                                            <li>
                                                <a href="javascript:;">Action 2</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">Action 3</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">Action 4</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="cd-horizontal-timeline mt-timeline-horizontal" data-spacing="60">
                                    <div class="timeline">
                                        <div class="events-wrapper">
                                            <div class="events">
                                                <ol>
                                                    <li>
                                                        <a href="#0" data-date="16/01/2014" class="border-after-red bg-after-red selected">16 Jan</a>
                                                    </li>
                                                    <li>
                                                        <a href="#0" data-date="28/02/2014" class="border-after-red bg-after-red">28 Feb</a>
                                                    </li>
                                                    <li>
                                                        <a href="#0" data-date="20/04/2014" class="border-after-red bg-after-red">20 Mar</a>
                                                    </li>
                                                    <li>
                                                        <a href="#0" data-date="20/05/2014" class="border-after-red bg-after-red">20 May</a>
                                                    </li>
                                                    <li>
                                                        <a href="#0" data-date="09/07/2014" class="border-after-red bg-after-red">09 Jul</a>
                                                    </li>
                                                    <li>
                                                        <a href="#0" data-date="30/08/2014" class="border-after-red bg-after-red">30 Aug</a>
                                                    </li>
                                                    <li>
                                                        <a href="#0" data-date="15/09/2014" class="border-after-red bg-after-red">15 Sep</a>
                                                    </li>
                                                    <li>
                                                        <a href="#0" data-date="01/11/2014" class="border-after-red bg-after-red">01 Nov</a>
                                                    </li>
                                                    <li>
                                                        <a href="#0" data-date="10/12/2014" class="border-after-red bg-after-red">10 Dec</a>
                                                    </li>
                                                    <li>
                                                        <a href="#0" data-date="19/01/2015" class="border-after-red bg-after-red">29 Jan</a>
                                                    </li>
                                                    <li>
                                                        <a href="#0" data-date="03/03/2015" class="border-after-red bg-after-red">3 Mar</a>
                                                    </li>
                                                </ol>
                                                <span class="filling-line bg-red" aria-hidden="true"></span>
                                            </div>
                                            <!-- .events -->
                                        </div>
                                        <!-- .events-wrapper -->
                                        <ul class="cd-timeline-navigation mt-ht-nav-icon">
                                            <li>
                                                <a href="#0" class="prev inactive btn btn-outline red md-skip">
                                                    <i class="fa fa-chevron-left"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#0" class="next btn btn-outline red md-skip">
                                                    <i class="fa fa-chevron-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- .cd-timeline-navigation -->
                                    </div>
                                    <!-- .timeline -->
                                    <div class="events-content">
                                        <ol>
                                            <li class="selected" data-date="16/01/2014">
                                                <div class="mt-title">
                                                    <h2 class="mt-content-title">New User</h2>
                                                </div>
                                                <div class="mt-author">
                                                    <div class="mt-avatar">
                                                        <img src="../assets/pages/media/users/avatar80_3.jpg" />
                                                    </div>
                                                    <div class="mt-author-name">
                                                        <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                                    </div>
                                                    <div class="mt-author-datetime font-grey-mint">16 January 2014 : 7:45 PM</div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="mt-content border-grey-steel">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, mi felis, aliquam at iaculis mi felis, aliquam
                                                        at iaculis finibus eu ex. Integer efficitur tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur odio non est rhoncus volutpat.</p>
                                                    <a href="javascript:;" class="btn btn-circle red btn-outline">Read More</a>
                                                    <a href="javascript:;" class="btn btn-circle btn-icon-only blue">
                                                        <i class="fa fa-plus"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-icon-only green pull-right">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                </div>
                                            </li>
                                            <li data-date="28/02/2014">
                                                <div class="mt-title">
                                                    <h2 class="mt-content-title">Sending Shipment</h2>
                                                </div>
                                                <div class="mt-author">
                                                    <div class="mt-avatar">
                                                        <img src="../assets/pages/media/users/avatar80_3.jpg" />
                                                    </div>
                                                    <div class="mt-author-name">
                                                        <a href="javascript:;" class="font-blue-madison">Hugh Grant</a>
                                                    </div>
                                                    <div class="mt-author-datetime font-grey-mint">28 February 2014 : 10:15 AM</div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="mt-content border-grey-steel">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget
                                                        dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                                        odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                                        dignissim luctus risus sed sodales.</p>
                                                    <a href="javascript:;" class="btn btn-circle btn-outline green-jungle">Download Shipment List</a>
                                                    <div class="btn-group dropup pull-right">
                                                        <button class="btn btn-circle blue-steel dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="false"> Actions
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu pull-right" role="menu">
                                                            <li>
                                                                <a href="javascript:;">Action </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">Another action </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">Something else here </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;">Separated link </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li data-date="20/04/2014">
                                                <div class="mt-title">
                                                    <h2 class="mt-content-title">Blue Chambray</h2>
                                                </div>
                                                <div class="mt-author">
                                                    <div class="mt-avatar">
                                                        <img src="../assets/pages/media/users/avatar80_1.jpg" />
                                                    </div>
                                                    <div class="mt-author-name">
                                                        <a href="javascript:;" class="font-blue">Rory Matthew</a>
                                                    </div>
                                                    <div class="mt-author-datetime font-grey-mint">20 April 2014 : 10:45 PM</div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="mt-content border-grey-steel">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget
                                                        dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                                        odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                                        dignissim luctus risus sed sodales.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                                        qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut. </p>
                                                    <a href="javascript:;" class="btn btn-circle red">Read More</a>
                                                </div>
                                            </li>
                                            <li data-date="20/05/2014">
                                                <div class="mt-title">
                                                    <h2 class="mt-content-title">Timeline Received</h2>
                                                </div>
                                                <div class="mt-author">
                                                    <div class="mt-avatar">
                                                        <img src="../assets/pages/media/users/avatar80_2.jpg" />
                                                    </div>
                                                    <div class="mt-author-name">
                                                        <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                                    </div>
                                                    <div class="mt-author-datetime font-grey-mint">20 May 2014 : 12:20 PM</div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="mt-content border-grey-steel">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget
                                                        dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                                        odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                                        dignissim luctus risus sed sodales.</p>
                                                    <a href="javascript:;" class="btn btn-circle green-turquoise">Read More</a>
                                                </div>
                                            </li>
                                            <li data-date="09/07/2014">
                                                <div class="mt-title">
                                                    <h2 class="mt-content-title">Event Success</h2>
                                                </div>
                                                <div class="mt-author">
                                                    <div class="mt-avatar">
                                                        <img src="../assets/pages/media/users/avatar80_1.jpg" />
                                                    </div>
                                                    <div class="mt-author-name">
                                                        <a href="javascript:;" class="font-blue-madison">Matt Goldman</a>
                                                    </div>
                                                    <div class="mt-author-datetime font-grey-mint">9 July 2014 : 8:15 PM</div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="mt-content border-grey-steel">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde.</p>
                                                    <a href="javascript:;"
                                                        class="btn btn-circle btn-outline purple-medium">View Summary</a>
                                                    <div class="btn-group dropup pull-right">
                                                        <button class="btn btn-circle green dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="false"> Actions
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu pull-right" role="menu">
                                                            <li>
                                                                <a href="javascript:;">Action </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">Another action </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">Something else here </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;">Separated link </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li data-date="30/08/2014">
                                                <div class="mt-title">
                                                    <h2 class="mt-content-title">Conference Call</h2>
                                                </div>
                                                <div class="mt-author">
                                                    <div class="mt-avatar">
                                                        <img src="../assets/pages/media/users/avatar80_1.jpg" />
                                                    </div>
                                                    <div class="mt-author-name">
                                                        <a href="javascript:;" class="font-blue-madison">Rory Matthew</a>
                                                    </div>
                                                    <div class="mt-author-datetime font-grey-mint">30 August 2014 : 5:45 PM</div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="mt-content border-grey-steel">
                                                    <img class="timeline-body-img pull-left" src="../assets/pages/media/blog/5.jpg" alt="">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                                        qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut. </p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                                        qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut. </p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                                        qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut. </p>
                                                    <a href="javascript:;" class="btn btn-circle red">Read More</a>
                                                </div>
                                            </li>
                                            <li data-date="15/09/2014">
                                                <div class="mt-title">
                                                    <h2 class="mt-content-title">Conference Decision</h2>
                                                </div>
                                                <div class="mt-author">
                                                    <div class="mt-avatar">
                                                        <img src="../assets/pages/media/users/avatar80_5.jpg" />
                                                    </div>
                                                    <div class="mt-author-name">
                                                        <a href="javascript:;" class="font-blue-madison">Jessica Wolf</a>
                                                    </div>
                                                    <div class="mt-author-datetime font-grey-mint">15 September 2014 : 8:30 PM</div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="mt-content border-grey-steel">
                                                    <img class="timeline-body-img pull-right" src="../assets/pages/media/blog/6.jpg" alt="">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                                        qui ut.</p>
                                                    <a href="javascript:;" class="btn btn-circle green-sharp">Read More</a>
                                                </div>
                                            </li>
                                            <li data-date="01/11/2014">
                                                <div class="mt-title">
                                                    <h2 class="mt-content-title">Timeline Received</h2>
                                                </div>
                                                <div class="mt-author">
                                                    <div class="mt-avatar">
                                                        <img src="../assets/pages/media/users/avatar80_2.jpg" />
                                                    </div>
                                                    <div class="mt-author-name">
                                                        <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                                    </div>
                                                    <div class="mt-author-datetime font-grey-mint">1 November 2014 : 12:20 PM</div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="mt-content border-grey-steel">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget
                                                        dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                                        odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                                        dignissim luctus risus sed sodales.</p>
                                                    <a href="javascript:;" class="btn btn-circle green-turquoise">Read More</a>
                                                </div>
                                            </li>
                                            <li data-date="10/12/2014">
                                                <div class="mt-title">
                                                    <h2 class="mt-content-title">Timeline Received</h2>
                                                </div>
                                                <div class="mt-author">
                                                    <div class="mt-avatar">
                                                        <img src="../assets/pages/media/users/avatar80_2.jpg" />
                                                    </div>
                                                    <div class="mt-author-name">
                                                        <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                                    </div>
                                                    <div class="mt-author-datetime font-grey-mint">10 December 2015 : 12:20 PM</div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="mt-content border-grey-steel">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget
                                                        dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                                        odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                                        dignissim luctus risus sed sodales.</p>
                                                    <a href="javascript:;" class="btn btn-circle green-turquoise">Read More</a>
                                                </div>
                                            </li>
                                            <li data-date="19/01/2015">
                                                <div class="mt-title">
                                                    <h2 class="mt-content-title">Timeline Received</h2>
                                                </div>
                                                <div class="mt-author">
                                                    <div class="mt-avatar">
                                                        <img src="../assets/pages/media/users/avatar80_2.jpg" />
                                                    </div>
                                                    <div class="mt-author-name">
                                                        <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                                    </div>
                                                    <div class="mt-author-datetime font-grey-mint">19 January 2015 : 12:20 PM</div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="mt-content border-grey-steel">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget
                                                        dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                                        odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                                        dignissim luctus risus sed sodales.</p>
                                                    <a href="javascript:;" class="btn btn-circle green-turquoise">Read More</a>
                                                </div>
                                            </li>
                                            <li data-date="03/03/2015">
                                                <div class="mt-title">
                                                    <h2 class="mt-content-title">Timeline Received</h2>
                                                </div>
                                                <div class="mt-author">
                                                    <div class="mt-avatar">
                                                        <img src="../assets/pages/media/users/avatar80_2.jpg" />
                                                    </div>
                                                    <div class="mt-author-name">
                                                        <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                                    </div>
                                                    <div class="mt-author-datetime font-grey-mint">3 March 2015 : 12:20 PM</div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="mt-content border-grey-steel">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget
                                                        dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                                        odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                                        dignissim luctus risus sed sodales.</p>
                                                    <a href="javascript:;" class="btn btn-circle green-turquoise">Read More</a>
                                                </div>
                                            </li>
                                        </ol>
                                    </div>
                                    <!-- .events-content -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-12 col-sm-12">
                        <div class="portlet light portlet-fit ">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-directions font-green hide"></i>
                                    <span class="caption-subject bold font-dark uppercase"> Events</span>
                                    <span class="caption-helper">Horizontal Timeline</span>
                                </div>
                                <div class="actions">
                                    <div class="btn-group btn-group-devided" data-toggle="buttons">
                                        <label class="btn green btn-outline btn-circle btn-sm active">
                                            <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                                        <label class="btn  green btn-outline btn-circle btn-sm">
                                            <input type="radio" name="options" class="toggle" id="option2">Tools</label>
                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="cd-horizontal-timeline mt-timeline-horizontal" data-spacing="60">
                                    <div class="timeline mt-timeline-square">
                                        <div class="events-wrapper">
                                            <div class="events">
                                                <ol>
                                                    <li>
                                                        <a href="#0" data-date="16/01/2014" class="border-after-blue bg-after-blue selected">Expo 2016</a>
                                                    </li>
                                                    <li>
                                                        <a href="#0" data-date="28/02/2014" class="border-after-blue bg-after-blue">New Promo</a>
                                                    </li>
                                                    <li>
                                                        <a href="#0" data-date="20/04/2014" class="border-after-blue bg-after-blue">Meeting</a>
                                                    </li>
                                                    <li>
                                                        <a href="#0" data-date="20/05/2014" class="border-after-blue bg-after-blue">Launch</a>
                                                    </li>
                                                    <li>
                                                        <a href="#0" data-date="09/07/2014" class="border-after-blue bg-after-blue">Party</a>
                                                    </li>
                                                    <li>
                                                        <a href="#0" data-date="30/08/2014" class="border-after-blue bg-after-blue">Reports</a>
                                                    </li>
                                                    <li>
                                                        <a href="#0" data-date="15/09/2014" class="border-after-blue bg-after-blue">HR</a>
                                                    </li>
                                                    <li>
                                                        <a href="#0" data-date="01/11/2014" class="border-after-blue bg-after-blue">IPO</a>
                                                    </li>
                                                    <li>
                                                        <a href="#0" data-date="10/12/2014" class="border-after-blue bg-after-blue">Board</a>
                                                    </li>
                                                    <li>
                                                        <a href="#0" data-date="19/01/2015" class="border-after-blue bg-after-blue">Revenue</a>
                                                    </li>
                                                    <li>
                                                        <a href="#0" data-date="03/03/2015" class="border-after-blue bg-after-blue">Dinner</a>
                                                    </li>
                                                </ol>
                                                <span class="filling-line bg-blue" aria-hidden="true"></span>
                                            </div>
                                            <!-- .events -->
                                        </div>
                                        <!-- .events-wrapper -->
                                        <ul class="cd-timeline-navigation mt-ht-nav-icon">
                                            <li>
                                                <a href="#0" class="prev inactive btn blue md-skip">
                                                    <i class="fa fa-chevron-left"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#0" class="next btn blue md-skip">
                                                    <i class="fa fa-chevron-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- .cd-timeline-navigation -->
                                    </div>
                                    <!-- .timeline -->
                                    <div class="events-content">
                                        <ol>
                                            <li class="selected" data-date="16/01/2014">
                                                <div class="mt-title">
                                                    <h2 class="mt-content-title">Expo 2016 Launch</h2>
                                                </div>
                                                <div class="mt-author">
                                                    <div class="mt-avatar">
                                                        <img src="../assets/pages/media/users/avatar80_2.jpg" />
                                                    </div>
                                                    <div class="mt-author-name">
                                                        <a href="javascript:;" class="font-blue-madison">Lisa Bold</a>
                                                    </div>
                                                    <div class="mt-author-datetime font-grey-mint">23 February 2014</div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="mt-content border-grey-steel">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod mi felis, aliquam at iaculis eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis mi felis, aliquam
                                                        at iaculis eu, onsectetur adipiscing elit finibus eu ex. Integer efficitur leo eget dolor tincidunt, et dignissim risus lacinia. Nam in egestas onsectetur adipiscing elit nunc. Suspendisse
                                                        potenti</p>
                                                    <a href="javascript:;" class="btn btn-circle dark btn-outline">Read More</a>
                                                    <a href="javascript:;" class="btn btn-circle btn-icon-only green pull-right">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                </div>
                                            </li>
                                            <li data-date="28/02/2014">
                                                <div class="mt-title">
                                                    <h2 class="mt-content-title">Sending Shipment</h2>
                                                </div>
                                                <div class="mt-author">
                                                    <div class="mt-avatar">
                                                        <img src="../assets/pages/media/users/avatar80_3.jpg" />
                                                    </div>
                                                    <div class="mt-author-name">
                                                        <a href="javascript:;" class="font-blue-madison">Hugh Grant</a>
                                                    </div>
                                                    <div class="mt-author-datetime font-grey-mint">28 February 2014 : 10:15 AM</div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="mt-content border-grey-steel">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget
                                                        dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                                        odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                                        dignissim luctus risus sed sodales.</p>
                                                    <a href="javascript:;" class="btn btn-circle btn-outline green-jungle">Download Shipment List</a>
                                                    <div class="btn-group dropup pull-right">
                                                        <button class="btn btn-circle blue-steel dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="false"> Actions
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu pull-right" role="menu">
                                                            <li>
                                                                <a href="javascript:;">Action </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">Another action </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">Something else here </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;">Separated link </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li data-date="20/04/2014">
                                                <div class="mt-title">
                                                    <h2 class="mt-content-title">Blue Chambray</h2>
                                                </div>
                                                <div class="mt-author">
                                                    <div class="mt-avatar">
                                                        <img src="../assets/pages/media/users/avatar80_1.jpg" />
                                                    </div>
                                                    <div class="mt-author-name">
                                                        <a href="javascript:;" class="font-blue">Rory Matthew</a>
                                                    </div>
                                                    <div class="mt-author-datetime font-grey-mint">20 April 2014 : 10:45 PM</div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="mt-content border-grey-steel">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget
                                                        dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                                        odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                                        dignissim luctus risus sed sodales.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                                        qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut. </p>
                                                    <a href="javascript:;" class="btn btn-circle red">Read More</a>
                                                </div>
                                            </li>
                                            <li data-date="20/05/2014">
                                                <div class="mt-title">
                                                    <h2 class="mt-content-title">Timeline Received</h2>
                                                </div>
                                                <div class="mt-author">
                                                    <div class="mt-avatar">
                                                        <img src="../assets/pages/media/users/avatar80_2.jpg" />
                                                    </div>
                                                    <div class="mt-author-name">
                                                        <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                                    </div>
                                                    <div class="mt-author-datetime font-grey-mint">20 May 2014 : 12:20 PM</div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="mt-content border-grey-steel">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget
                                                        dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                                        odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                                        dignissim luctus risus sed sodales.</p>
                                                    <a href="javascript:;" class="btn btn-circle green-turquoise">Read More</a>
                                                </div>
                                            </li>
                                            <li data-date="09/07/2014">
                                                <div class="mt-title">
                                                    <h2 class="mt-content-title">Event Success</h2>
                                                </div>
                                                <div class="mt-author">
                                                    <div class="mt-avatar">
                                                        <img src="../assets/pages/media/users/avatar80_1.jpg" />
                                                    </div>
                                                    <div class="mt-author-name">
                                                        <a href="javascript:;" class="font-blue-madison">Matt Goldman</a>
                                                    </div>
                                                    <div class="mt-author-datetime font-grey-mint">9 July 2014 : 8:15 PM</div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="mt-content border-grey-steel">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde.</p>
                                                    <a href="javascript:;"
                                                        class="btn btn-circle btn-outline purple-medium">View Summary</a>
                                                    <div class="btn-group dropup pull-right">
                                                        <button class="btn btn-circle green dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="false"> Actions
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu pull-right" role="menu">
                                                            <li>
                                                                <a href="javascript:;">Action </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">Another action </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">Something else here </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;">Separated link </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li data-date="30/08/2014">
                                                <div class="mt-title">
                                                    <h2 class="mt-content-title">Conference Call</h2>
                                                </div>
                                                <div class="mt-author">
                                                    <div class="mt-avatar">
                                                        <img src="../assets/pages/media/users/avatar80_1.jpg" />
                                                    </div>
                                                    <div class="mt-author-name">
                                                        <a href="javascript:;" class="font-blue-madison">Rory Matthew</a>
                                                    </div>
                                                    <div class="mt-author-datetime font-grey-mint">30 August 2014 : 5:45 PM</div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="mt-content border-grey-steel">
                                                    <img class="timeline-body-img pull-left" src="../assets/pages/media/blog/5.jpg" alt="">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                                        qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut. </p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                                        qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut. </p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                                        qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut. </p>
                                                    <a href="javascript:;" class="btn btn-circle red">Read More</a>
                                                </div>
                                            </li>
                                            <li data-date="15/09/2014">
                                                <div class="mt-title">
                                                    <h2 class="mt-content-title">Conference Decision</h2>
                                                </div>
                                                <div class="mt-author">
                                                    <div class="mt-avatar">
                                                        <img src="../assets/pages/media/users/avatar80_5.jpg" />
                                                    </div>
                                                    <div class="mt-author-name">
                                                        <a href="javascript:;" class="font-blue-madison">Jessica Wolf</a>
                                                    </div>
                                                    <div class="mt-author-datetime font-grey-mint">15 September 2014 : 8:30 PM</div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="mt-content border-grey-steel">
                                                    <img class="timeline-body-img pull-right" src="../assets/pages/media/blog/6.jpg" alt="">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                                        qui ut.</p>
                                                    <a href="javascript:;" class="btn btn-circle green-sharp">Read More</a>
                                                </div>
                                            </li>
                                            <li data-date="01/11/2014">
                                                <div class="mt-title">
                                                    <h2 class="mt-content-title">Timeline Received</h2>
                                                </div>
                                                <div class="mt-author">
                                                    <div class="mt-avatar">
                                                        <img src="../assets/pages/media/users/avatar80_2.jpg" />
                                                    </div>
                                                    <div class="mt-author-name">
                                                        <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                                    </div>
                                                    <div class="mt-author-datetime font-grey-mint">1 November 2014 : 12:20 PM</div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="mt-content border-grey-steel">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget
                                                        dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                                        odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                                        dignissim luctus risus sed sodales.</p>
                                                    <a href="javascript:;" class="btn btn-circle green-turquoise">Read More</a>
                                                </div>
                                            </li>
                                            <li data-date="10/12/2014">
                                                <div class="mt-title">
                                                    <h2 class="mt-content-title">Timeline Received</h2>
                                                </div>
                                                <div class="mt-author">
                                                    <div class="mt-avatar">
                                                        <img src="../assets/pages/media/users/avatar80_2.jpg" />
                                                    </div>
                                                    <div class="mt-author-name">
                                                        <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                                    </div>
                                                    <div class="mt-author-datetime font-grey-mint">10 December 2014 : 12:20 PM</div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="mt-content border-grey-steel">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget
                                                        dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                                        odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                                        dignissim luctus risus sed sodales.</p>
                                                    <a href="javascript:;" class="btn btn-circle green-turquoise">Read More</a>
                                                </div>
                                            </li>
                                            <li data-date="19/01/2015">
                                                <div class="mt-title">
                                                    <h2 class="mt-content-title">Timeline Received</h2>
                                                </div>
                                                <div class="mt-author">
                                                    <div class="mt-avatar">
                                                        <img src="../assets/pages/media/users/avatar80_2.jpg" />
                                                    </div>
                                                    <div class="mt-author-name">
                                                        <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                                    </div>
                                                    <div class="mt-author-datetime font-grey-mint">19 January 2015 : 12:20 PM</div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="mt-content border-grey-steel">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget
                                                        dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                                        odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                                        dignissim luctus risus sed sodales.</p>
                                                    <a href="javascript:;" class="btn btn-circle green-turquoise">Read More</a>
                                                </div>
                                            </li>
                                            <li data-date="03/03/2015">
                                                <div class="mt-title">
                                                    <h2 class="mt-content-title">Timeline Received</h2>
                                                </div>
                                                <div class="mt-author">
                                                    <div class="mt-avatar">
                                                        <img src="../assets/pages/media/users/avatar80_2.jpg" />
                                                    </div>
                                                    <div class="mt-author-name">
                                                        <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                                    </div>
                                                    <div class="mt-author-datetime font-grey-mint">3 March 2015 : 12:20 PM</div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="mt-content border-grey-steel">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget
                                                        dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                                        odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                                        dignissim luctus risus sed sodales.</p>
                                                    <a href="javascript:;" class="btn btn-circle green-turquoise">Read More</a>
                                                </div>
                                            </li>
                                        </ol>
                                    </div>
                                    <!-- .events-content -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-xs-12 col-sm-12">
                        <div class="portlet light ">
                            <div class="portlet-title">
                                <div class="caption caption-md">
                                    <i class="icon-bar-chart font-dark hide"></i>
                                    <span class="caption-subject font-dark bold uppercase">Member Activity</span>
                                    <span class="caption-helper">weekly stats...</span>
                                </div>
                                <div class="actions">
                                    <div class="btn-group btn-group-devided" data-toggle="buttons">
                                        <label class="btn btn-transparent blue-oleo btn-no-border btn-outline btn-circle btn-sm active">
                                            <input type="radio" name="options" class="toggle" id="option1">Today</label>
                                        <label class="btn btn-transparent blue-oleo btn-no-border btn-outline btn-circle btn-sm">
                                            <input type="radio" name="options" class="toggle" id="option2">Week</label>
                                        <label class="btn btn-transparent blue-oleo btn-no-border btn-outline btn-circle btn-sm">
                                            <input type="radio" name="options" class="toggle" id="option2">Month</label>
                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="row number-stats margin-bottom-30">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="stat-left">
                                            <div class="stat-chart">
                                                <!-- do not line break "sparkline_bar" div. sparkline chart has an issue when the container div has line break -->
                                                <div id="sparkline_bar"></div>
                                            </div>
                                            <div class="stat-number">
                                                <div class="title"> Total </div>
                                                <div class="number"> 2460 </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="stat-right">
                                            <div class="stat-chart">
                                                <!-- do not line break "sparkline_bar" div. sparkline chart has an issue when the container div has line break -->
                                                <div id="sparkline_bar2"></div>
                                            </div>
                                            <div class="stat-number">
                                                <div class="title"> New </div>
                                                <div class="number"> 719 </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-scrollable table-scrollable-borderless">
                                    <table class="table table-hover table-light">
                                        <thead>
                                            <tr class="uppercase">
                                                <th colspan="2"> MEMBER </th>
                                                <th> Earnings </th>
                                                <th> CASES </th>
                                                <th> CLOSED </th>
                                                <th> RATE </th>
                                            </tr>
                                        </thead>
                                        <tr>
                                            <td class="fit">
                                                <img class="user-pic rounded" src="../assets/pages/media/users/avatar4.jpg"> </td>
                                            <td>
                                                <a href="javascript:;" class="primary-link">Brain</a>
                                            </td>
                                            <td> $345 </td>
                                            <td> 45 </td>
                                            <td> 124 </td>
                                            <td>
                                                <span class="bold theme-font">80%</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fit">
                                                <img class="user-pic rounded" src="../assets/pages/media/users/avatar5.jpg"> </td>
                                            <td>
                                                <a href="javascript:;" class="primary-link">Nick</a>
                                            </td>
                                            <td> $560 </td>
                                            <td> 12 </td>
                                            <td> 24 </td>
                                            <td>
                                                <span class="bold theme-font">67%</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fit">
                                                <img class="user-pic rounded" src="../assets/pages/media/users/avatar6.jpg"> </td>
                                            <td>
                                                <a href="javascript:;" class="primary-link">Tim</a>
                                            </td>
                                            <td> $1,345 </td>
                                            <td> 450 </td>
                                            <td> 46 </td>
                                            <td>
                                                <span class="bold theme-font">98%</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fit">
                                                <img class="user-pic rounded" src="../assets/pages/media/users/avatar7.jpg"> </td>
                                            <td>
                                                <a href="javascript:;" class="primary-link">Tom</a>
                                            </td>
                                            <td> $645 </td>
                                            <td> 50 </td>
                                            <td> 89 </td>
                                            <td>
                                                <span class="bold theme-font">58%</span>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-12 col-sm-12">
                        <div class="portlet light ">
                            <div class="portlet-title">
                                <div class="caption caption-md">
                                    <i class="icon-bar-chart font-dark hide"></i>
                                    <span class="caption-subject font-dark bold uppercase">Customer Support</span>
                                    <span class="caption-helper">45 pending</span>
                                </div>
                                <div class="inputs">
                                    <div class="portlet-input input-inline input-small ">
                                        <div class="input-icon right">
                                            <i class="icon-magnifier"></i>
                                            <input type="text" class="form-control form-control-solid input-circle" placeholder="search..."> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="scroller" style="height: 338px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
                                    <div class="general-item-list">
                                        <div class="item">
                                            <div class="item-head">
                                                <div class="item-details">
                                                    <img class="item-pic rounded" src="../assets/pages/media/users/avatar4.jpg">
                                                    <a href="" class="item-name primary-link">Nick Larson</a>
                                                    <span class="item-label">3 hrs ago</span>
                                                </div>
                                                <span class="item-status">
                                                    <span class="badge badge-empty badge-success"></span> Open</span>
                                            </div>
                                            <div class="item-body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-head">
                                                <div class="item-details">
                                                    <img class="item-pic rounded" src="../assets/pages/media/users/avatar3.jpg">
                                                    <a href="" class="item-name primary-link">Mark</a>
                                                    <span class="item-label">5 hrs ago</span>
                                                </div>
                                                <span class="item-status">
                                                    <span class="badge badge-empty badge-warning"></span> Pending</span>
                                            </div>
                                            <div class="item-body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat tincidunt ut laoreet. </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-head">
                                                <div class="item-details">
                                                    <img class="item-pic rounded" src="../assets/pages/media/users/avatar6.jpg">
                                                    <a href="" class="item-name primary-link">Nick Larson</a>
                                                    <span class="item-label">8 hrs ago</span>
                                                </div>
                                                <span class="item-status">
                                                    <span class="badge badge-empty badge-primary"></span> Closed</span>
                                            </div>
                                            <div class="item-body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh. </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-head">
                                                <div class="item-details">
                                                    <img class="item-pic rounded" src="../assets/pages/media/users/avatar7.jpg">
                                                    <a href="" class="item-name primary-link">Nick Larson</a>
                                                    <span class="item-label">12 hrs ago</span>
                                                </div>
                                                <span class="item-status">
                                                    <span class="badge badge-empty badge-danger"></span> Pending</span>
                                            </div>
                                            <div class="item-body"> Consectetuer adipiscing elit Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-head">
                                                <div class="item-details">
                                                    <img class="item-pic rounded" src="../assets/pages/media/users/avatar9.jpg">
                                                    <a href="" class="item-name primary-link">Richard Stone</a>
                                                    <span class="item-label">2 days ago</span>
                                                </div>
                                                <span class="item-status">
                                                    <span class="badge badge-empty badge-danger"></span> Open</span>
                                            </div>
                                            <div class="item-body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, ut laoreet dolore magna aliquam erat volutpat. </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-head">
                                                <div class="item-details">
                                                    <img class="item-pic rounded" src="../assets/pages/media/users/avatar8.jpg">
                                                    <a href="" class="item-name primary-link">Dan</a>
                                                    <span class="item-label">3 days ago</span>
                                                </div>
                                                <span class="item-status">
                                                    <span class="badge badge-empty badge-warning"></span> Pending</span>
                                            </div>
                                            <div class="item-body"> Lorem ipsum dolor sit amet, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-head">
                                                <div class="item-details">
                                                    <img class="item-pic rounded" src="../assets/pages/media/users/avatar2.jpg">
                                                    <a href="" class="item-name primary-link">Larry</a>
                                                    <span class="item-label">4 hrs ago</span>
                                                </div>
                                                <span class="item-status">
                                                    <span class="badge badge-empty badge-success"></span> Open</span>
                                            </div>
                                            <div class="item-body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-xs-12 col-sm-12">
                        <div class="portlet light ">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-cursor font-dark hide"></i>
                                    <span class="caption-subject font-dark bold uppercase">General Stats</span>
                                </div>
                                <div class="actions">
                                    <a href="javascript:;" class="btn btn-sm btn-circle red easy-pie-chart-reload">
                                        <i class="fa fa-repeat"></i> Reload </a>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="easy-pie-chart">
                                            <div class="number transactions" data-percent="55">
                                                <span>+55</span>% </div>
                                            <a class="title" href="javascript:;"> Transactions
                                                <i class="icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="margin-bottom-10 visible-sm"> </div>
                                    <div class="col-md-4">
                                        <div class="easy-pie-chart">
                                            <div class="number visits" data-percent="85">
                                                <span>+85</span>% </div>
                                            <a class="title" href="javascript:;"> New Visits
                                                <i class="icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="margin-bottom-10 visible-sm"> </div>
                                    <div class="col-md-4">
                                        <div class="easy-pie-chart">
                                            <div class="number bounce" data-percent="46">
                                                <span>-46</span>% </div>
                                            <a class="title" href="javascript:;"> Bounce
                                                <i class="icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-12 col-sm-12">
                        <div class="portlet light ">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-equalizer font-dark hide"></i>
                                    <span class="caption-subject font-dark bold uppercase">Server Stats</span>
                                    <span class="caption-helper">monthly stats...</span>
                                </div>
                                <div class="tools">
                                    <a href="" class="collapse"> </a>
                                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                    <a href="" class="reload"> </a>
                                    <a href="" class="remove"> </a>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="sparkline-chart">
                                            <div class="number" id="sparkline_bar5"></div>
                                            <a class="title" href="javascript:;"> Network
                                                <i class="icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="margin-bottom-10 visible-sm"> </div>
                                    <div class="col-md-4">
                                        <div class="sparkline-chart">
                                            <div class="number" id="sparkline_bar6"></div>
                                            <a class="title" href="javascript:;"> CPU Load
                                                <i class="icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="margin-bottom-10 visible-sm"> </div>
                                    <div class="col-md-4">
                                        <div class="sparkline-chart">
                                            <div class="number" id="sparkline_line"></div>
                                            <a class="title" href="javascript:;"> Load Rate
                                                <i class="icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- END CONTENT BODY -->
        </div>
        <!-- END CONTENT -->
        <!-- BEGIN QUICK SIDEBAR -->
        <a href="javascript:;" class="page-quick-sidebar-toggler">
            <i class="icon-login"></i>
        </a>
        <div class="page-quick-sidebar-wrapper" data-close-on-body-click="false">
            <div class="page-quick-sidebar">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="javascript:;" data-target="#quick_sidebar_tab_1" data-toggle="tab"> Users
                            <span class="badge badge-danger">2</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" data-target="#quick_sidebar_tab_2" data-toggle="tab"> Alerts
                            <span class="badge badge-success">7</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> More
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li>
                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                    <i class="icon-bell"></i> Alerts </a>
                            </li>
                            <li>
                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                    <i class="icon-info"></i> Notifications </a>
                            </li>
                            <li>
                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                    <i class="icon-speech"></i> Activities </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                    <i class="icon-settings"></i> Settings </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">
                        <div class="page-quick-sidebar-chat-users" data-rail-color="#ddd" data-wrapper-class="page-quick-sidebar-list">
                            <h3 class="list-heading">Staff</h3>
                            <ul class="media-list list-items">
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-success">8</span>
                                    </div>
                                    <img class="media-object" src="../assets/layouts/layout/img/avatar3.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Bob Nilson</h4>
                                        <div class="media-heading-sub"> Project Manager </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="media-object" src="../assets/layouts/layout/img/avatar1.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Nick Larson</h4>
                                        <div class="media-heading-sub"> Art Director </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-danger">3</span>
                                    </div>
                                    <img class="media-object" src="../assets/layouts/layout/img/avatar4.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Deon Hubert</h4>
                                        <div class="media-heading-sub"> CTO </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="media-object" src="../assets/layouts/layout/img/avatar2.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Ella Wong</h4>
                                        <div class="media-heading-sub"> CEO </div>
                                    </div>
                                </li>
                            </ul>
                            <h3 class="list-heading">Customers</h3>
                            <ul class="media-list list-items">
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-warning">2</span>
                                    </div>
                                    <img class="media-object" src="../assets/layouts/layout/img/avatar6.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Lara Kunis</h4>
                                        <div class="media-heading-sub"> CEO, Loop Inc </div>
                                        <div class="media-heading-small"> Last seen 03:10 AM </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-status">
                                        <span class="label label-sm label-success">new</span>
                                    </div>
                                    <img class="media-object" src="../assets/layouts/layout/img/avatar7.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Ernie Kyllonen</h4>
                                        <div class="media-heading-sub"> Project Manager,
                                            <br> SmartBizz PTL </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="media-object" src="../assets/layouts/layout/img/avatar8.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Lisa Stone</h4>
                                        <div class="media-heading-sub"> CTO, Keort Inc </div>
                                        <div class="media-heading-small"> Last seen 13:10 PM </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-success">7</span>
                                    </div>
                                    <img class="media-object" src="../assets/layouts/layout/img/avatar9.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Deon Portalatin</h4>
                                        <div class="media-heading-sub"> CFO, H&D LTD </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="media-object" src="../assets/layouts/layout/img/avatar10.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Irina Savikova</h4>
                                        <div class="media-heading-sub"> CEO, Tizda Motors Inc </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-danger">4</span>
                                    </div>
                                    <img class="media-object" src="../assets/layouts/layout/img/avatar11.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Maria Gomez</h4>
                                        <div class="media-heading-sub"> Manager, Infomatic Inc </div>
                                        <div class="media-heading-small"> Last seen 03:10 AM </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="page-quick-sidebar-item">
                            <div class="page-quick-sidebar-chat-user">
                                <div class="page-quick-sidebar-nav">
                                    <a href="javascript:;" class="page-quick-sidebar-back-to-list">
                                        <i class="icon-arrow-left"></i>Back</a>
                                </div>
                                <div class="page-quick-sidebar-chat-user-messages">
                                    <div class="post out">
                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                            <span class="datetime">20:15</span>
                                            <span class="body"> When could you send me the report ? </span>
                                        </div>
                                    </div>
                                    <div class="post in">
                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Ella Wong</a>
                                            <span class="datetime">20:15</span>
                                            <span class="body"> Its almost done. I will be sending it shortly </span>
                                        </div>
                                    </div>
                                    <div class="post out">
                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                            <span class="datetime">20:15</span>
                                            <span class="body"> Alright. Thanks! :) </span>
                                        </div>
                                    </div>
                                    <div class="post in">
                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Ella Wong</a>
                                            <span class="datetime">20:16</span>
                                            <span class="body"> You are most welcome. Sorry for the delay. </span>
                                        </div>
                                    </div>
                                    <div class="post out">
                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                            <span class="datetime">20:17</span>
                                            <span class="body"> No probs. Just take your time :) </span>
                                        </div>
                                    </div>
                                    <div class="post in">
                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Ella Wong</a>
                                            <span class="datetime">20:40</span>
                                            <span class="body"> Alright. I just emailed it to you. </span>
                                        </div>
                                    </div>
                                    <div class="post out">
                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                            <span class="datetime">20:17</span>
                                            <span class="body"> Great! Thanks. Will check it right away. </span>
                                        </div>
                                    </div>
                                    <div class="post in">
                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Ella Wong</a>
                                            <span class="datetime">20:40</span>
                                            <span class="body"> Please let me know if you have any comment. </span>
                                        </div>
                                    </div>
                                    <div class="post out">
                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                            <span class="datetime">20:17</span>
                                            <span class="body"> Sure. I will check and buzz you if anything needs to be corrected. </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="page-quick-sidebar-chat-user-form">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Type a message here...">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn green">
                                                <i class="icon-paper-clip"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane page-quick-sidebar-alerts" id="quick_sidebar_tab_2">
                        <div class="page-quick-sidebar-alerts-list">
                            <h3 class="list-heading">General</h3>
                            <ul class="feeds list-items">
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> You have 4 pending tasks.
                                                    <span class="label label-sm label-warning "> Take action
                                                        <i class="fa fa-share"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> Just now </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-success">
                                                        <i class="fa fa-bar-chart-o"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> Finance Report for year 2013 has been released. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 20 mins </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-danger">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 24 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> New order received with
                                                    <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 30 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-success">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 24 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-bell-o"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> Web server hardware needs to be upgraded.
                                                    <span class="label label-sm label-warning"> Overdue </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 2 hours </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-default">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> IPO Report for year 2013 has been released. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 20 mins </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <h3 class="list-heading">System</h3>
                            <ul class="feeds list-items">
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> You have 4 pending tasks.
                                                    <span class="label label-sm label-warning "> Take action
                                                        <i class="fa fa-share"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> Just now </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-danger">
                                                        <i class="fa fa-bar-chart-o"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> Finance Report for year 2013 has been released. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 20 mins </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-default">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 24 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> New order received with
                                                    <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 30 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-success">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 24 mins </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-warning">
                                                    <i class="fa fa-bell-o"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> Web server hardware needs to be upgraded.
                                                    <span class="label label-sm label-default "> Overdue </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 2 hours </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-info">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> IPO Report for year 2013 has been released. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 20 mins </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane page-quick-sidebar-settings" id="quick_sidebar_tab_3">
                        <div class="page-quick-sidebar-settings-list">
                            <h3 class="list-heading">General Settings</h3>
                            <ul class="list-items borderless">
                                <li> Enable Notifications
                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                <li> Allow Tracking
                                    <input type="checkbox" class="make-switch" data-size="small" data-on-color="info" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                <li> Log Errors
                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                <li> Auto Sumbit Issues
                                    <input type="checkbox" class="make-switch" data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                <li> Enable SMS Alerts
                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                            </ul>
                            <h3 class="list-heading">System Settings</h3>
                            <ul class="list-items borderless">
                                <li> Security Level
                                    <select class="form-control input-inline input-sm input-small">
                                        <option value="1">Normal</option>
                                        <option value="2" selected>Medium</option>
                                        <option value="e">High</option>
                                    </select>
                                </li>
                                <li> Failed Email Attempts
                                    <input class="form-control input-inline input-sm input-small" value="5" /> </li>
                                <li> Secondary SMTP Port
                                    <input class="form-control input-inline input-sm input-small" value="3560" /> </li>
                                <li> Notify On System Error
                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                <li> Notify On SMTP Error
                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                            </ul>
                            <div class="inner-content">
                                <button class="btn btn-success">
                                    <i class="icon-settings"></i> Save Changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END QUICK SIDEBAR -->
    </div>
    <!-- END CONTAINER -->
</div>
@endsection