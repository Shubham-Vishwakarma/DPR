<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-clearmin.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/roboto.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/material-design.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/small-n-flat.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
        <title>Dashboard</title>
    </head>
    <body class="cm-no-transition cm-2-navbar">
        <div id="cm-menu">
            <nav class="cm-navbar cm-navbar-primary">
                <div class="cm-flex"><a href="#"><i class="fa fa-home fa-3x" style="color: #ffffff"></i></a></div>
                <div class="btn btn-primary md-menu-white" data-toggle="cm-menu"></div>
            </nav>
            <div id="cm-menu-content">
                <div id="cm-menu-items-wrapper">
                    <div id="cm-menu-scroller">
                        <ul class="cm-menu-items">
                            <li><a href="pending.html" class="sf-dashboard">Dashboard</a></li>
                            <li><a href="{{ route('create_project') }}" class="sf-brick">Create New Project</a></li>
                            <li><a href="#" class="sf-lock-open">Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <header id="cm-header">
            <nav class="cm-navbar cm-navbar-primary">
                <div class="btn btn-primary md-menu-white hidden-md hidden-lg" data-toggle="cm-menu"></div>
                <div class="cm-flex">
                    <h1>Dashboard</h1>
                    <form id="cm-search" action="index.html" method="get">
                        <input type="search" name="q" autocomplete="off" placeholder="Search...">
                    </form>
                </div>
                <div class="pull-right">
                    <div id="cm-search-btn" class="btn btn-primary md-search-white" data-toggle="cm-search"></div>
                </div>
                <div class="dropdown pull-right">
                    <button class="btn btn-primary md-notifications-white" data-toggle="dropdown"> <span class="label label-danger">23</span> </button>
                    <div class="popover cm-popover bottom">
                        <div class="arrow"></div>
                        <div class="popover-content">
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <h4 class="list-group-item-heading text-overflow">
                                        <i class="fa fa-fw fa-envelope"></i> Nunc volutpat aliquet magna.
                                    </h4>
                                    <p class="list-group-item-text text-overflow">Pellentesque tincidunt mollis scelerisque. Praesent vel blandit quam.</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <h4 class="list-group-item-heading">
                                        <i class="fa fa-fw fa-envelope"></i> Aliquam orci lectus
                                    </h4>
                                    <p class="list-group-item-text">Donec quis arcu non risus sagittis</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <h4 class="list-group-item-heading">
                                        <i class="fa fa-fw fa-warning"></i> Holy guacamole !
                                    </h4>
                                    <p class="list-group-item-text">Best check yo self, you're not looking too good.</p>
                                </a>
                            </div>
                            <div style="padding:10px"><a class="btn btn-success btn-block" href="#">Show me more...</a></div>
                        </div>
                    </div>
                </div>
                <div class="dropdown pull-right">
                    <button class="btn btn-primary md-account-circle-white" data-toggle="dropdown"></button>
                    <ul class="dropdown-menu">
                        <li class="disabled text-center">
                            <a style="cursor:default;"><strong>Priyanka Lubal</strong></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-cog"></i> Settings</a>
                        </li>
                        <li>
                            <a href="login.html"><i class="fa fa-fw fa-sign-out"></i> Sign out</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <nav class="cm-navbar cm-navbar-default cm-navbar-slideup">
                <div class="cm-flex">
                    <div class="nav-tabs-container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#pending" data-toggle="tab">Pending</a></li>
                            <li><a href="#completed" data-toggle="tab">Completed</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div id="global">
            <div class="container-fluid">
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="pending" style="margin-top:20px">
                        <div class="row cm-fix-height">
                    <div class="col-sm-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">Project name</div>
                            <div class="panel-body">
                                <blockquote style="margin:0">
                                    <p>Project Description</p>
                                    <footer><cite title="Source Title">Status</cite></footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">Project name</div>
                            <div class="panel-body">
                                <blockquote style="margin:0">
                                    <p>Project Description</p>
                                    <footer><cite title="Source Title">Status</cite></footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">Project name</div>
                            <div class="panel-body">
                                <blockquote style="margin:0">
                                    <p>Project Description</p>
                                    <footer><cite title="Source Title">Status</cite></footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                    <div class="tab-pane fade" id="completed" style="margin-top:20px;">
                        <div class="row cm-fix-height">
                    <div class="col-sm-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">Project name</div>
                            <div class="panel-body">
                                <blockquote style="margin:0">
                                    <p>Project Description</p>
                                    <footer><cite title="Source Title">Status</cite></footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">Project name</div>
                            <div class="panel-body">
                                <blockquote style="margin:0">
                                    <p>Project Description</p>
                                    <footer><cite title="Source Title">Status</cite></footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
            </div>
            <footer class="cm-footer"><span class="pull-left">Connected as Priyanka Lubal</span><span class="pull-right">&copy; PAOMEDIA SARL</span></footer>
        </div>
        <script src="{{ asset('js/jquery-2.1.3.min.js') }}"></script>
        <script src="{{ asset('js/jquery.mousewheel.min.js') }}"></script>
        <script src="{{ asset('js/jquery.cookie.min.js') }}"></script>
        <script src="{{ asset('js/fastclick.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/clearmin.min.js') }}"></script>
    </body>
</html>
