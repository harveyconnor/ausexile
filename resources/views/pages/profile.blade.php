@extends('layouts.app')
@section('section_style')class="hero cover hidden-xs" style="background-image: url(https://static.wixstatic.com/media/c152f3_dfedd2e927aa4d589234d4c316e0831f.jpg);"@endsection
@section('content')
        <div class="hero-bg"></div>
        <div class="container relative">
            <div class="page-header">
                <div class="page-title">YAKUZI <a href="#" class="btn btn-primary btn-sm btn-rounded" data-toggle="tooltip" title="Add friend"><i class="fa fa-user-plus"></i></a></div>
                <div class="profile-avatar">
                    <div class="thumbnail" data-toggle="tooltip" title="YAKUZI">
                        <a href="#">
                            <img src="img/user/profile.jpg">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="profile-nav height-50 border-bottom-1 border-grey-300  hidden-xs">
        <div class="tab-select sticky">
            <div class="container">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active"><a href="#">Timeline</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Friends <span>(34)</span></a></li>
                    <li><a href="#">Images <span>(8)</span></a></li>
                    <li><a href="#">Videos <span>(2)</span></a></li>
                    <li><a href="#">Groups</a></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="bg-grey-50 padding-top-60 padding-top-sm-30">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4 hidden-xs">
                    <div class="widget">
                        <div class="panel panel-default">
                            <div class="panel-heading">User Information</div>
                            <div class="panel-body">
                                <ul class="panel-list margin-top-25">
                                    <li><i class="fa fa-clock-o"></i> Joined {{ $user->created_at->diffForHumans() }}</li>
                                    <li><i class="fa fa-map-marker"></i> United Kingdom</li>
                                    <li><i class="fa fa-chain-broken"></i> Gameforest</li>
                                    <li><i class="fa fa-envelope"></i> {{ $user->email }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="widget widget-friends">
                        <div class="panel panel-default">
                            <div class="panel-heading">Friends (34)</div>
                            <div class="panel-body">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" title="Orb"><img src="img/user/avatar2.jpg" alt=""></a></li>
                                    <li><a href="#" data-toggle="tooltip" title="Patrick"><img src="img/user/avatar3.jpg" alt=""></a></li>
                                    <li><a href="#" data-toggle="tooltip" title="John"><img src="img/user/avatar4.jpg" alt=""></a></li>
                                    <li><a href="#" data-toggle="tooltip" title="Michael"><img src="img/user/avatar5.jpg" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="widget widget-list">
                        <div class="panel panel-default">
                            <div class="panel-heading bold">Recent Feeds</div>
                            <div class="panel-body">
                                <ul>
                                    <li>
                                        <a href="#" class="thumb"><img src="img/blog/xs/1.jpg" alt=""></a>
                                        <div class="widget-list-meta">
                                            <h4 class="widget-list-title"><a href="#">Overwatch Closed Beta</a></h4>
                                            <p><i class="fa fa-clock-o"></i> September 15, 2016</p>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#" class="thumb"><img src="img/blog/xs/2.jpg" alt=""></a>
                                        <div class="widget-list-meta">
                                            <h4 class="widget-list-title"><a href="#">Blood and Gore</a></h4>
                                            <p><i class="fa fa-clock-o"></i> September 13, 2016</p>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#" class="thumb"><img src="img/blog/xs/3.jpg" alt=""></a>
                                        <div class="widget-list-meta">
                                            <h4 class="widget-list-title"><a href="#">Warner Bros. Interactive</a></h4>
                                            <p><i class="fa fa-clock-o"></i> September 12, 2016</p>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#" class="thumb"><img src="img/blog/xs/4.jpg" alt=""></a>
                                        <div class="widget-list-meta">
                                            <h4 class="widget-list-title"><a href="#">Sharks Don't Sleep</a></h4>
                                            <p><i class="fa fa-clock-o"></i> September 11, 2016</p>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#" class="thumb"><img src="img/blog/xs/5.jpg" alt=""></a>
                                        <div class="widget-list-meta">
                                            <h4 class="widget-list-title"><a href="#">GTA 5 Reaches 5 Million</a></h4>
                                            <p><i class="fa fa-clock-o"></i> September 10, 2016</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-9 col-sm-8">
                    <div class="panel panel-default margin-bottom-40">
                        <div class="panel-body">
                            <div class="form-group">
                                <textarea class="form-control" rows="4" placeholder="What's in your head?..."></textarea>
                            </div>
                            <div class="btn-group pull-left">
                                <a href="#" class="btn btn-link btn-icon-left no-padding-left"><i class="fa fa-image"></i> Image</a>
                                <a href="#" class="btn btn-link btn-icon-left"><i class="fa fa-film"></i> Video</a>
                                <a href="#" class="btn btn-link btn-icon-left"><i class="fa fa-map-marker"></i> Location</a>
                            </div>
                            <button type="submit" class="btn btn-primary btn-icon-left pull-right"><i class="fa fa-edit"></i> Submit</button>
                        </div>
                    </div>

                    <div class="panel panel-default panel-post">
                        <div class="panel-body">
                            <div class="post">
                                <div class="post-header post-author">
                                    <a href="#" class="author" data-toggle="tooltip" title="YAKUZI"><img src="img/user/avatar.jpg" alt=""></a>
                                    <div class="post-title">
                                        <h3><a href="#">Deadpool Gets the Movie He Deserves</a></h3>
                                        <ul class="post-meta">
                                            <li><i class="fa fa-calendar-o"></i> April 13, 2016</li>
                                            <li><a href="#">#hashtag</a>, <a href="#">#witcher 3</a></li>
                                        </ul>
                                    </div>
                                </div>
                                Etiam et sollicitudin elit. Sed ultrices aliquet dui, eu aliquet metus sodales sit amet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis porttitor varius pulvinar. Vivamus efficitur vulputate imperdiet.
                            </div>
                        </div>
                        <div class="panel-footer">
                            <ul class="post-action">
                                <li><a href="#"><i class="fa fa-heart"></i> like (5)</a></li>
                                <li><a href="#"><i class="fa fa-comments"></i> Comments</a></li>
                                <li><a href="#"><i class="fa fa-reply"></i> share</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="panel panel-default panel-post">
                        <div class="panel-body">
                            <div class="post">
                                <div class="post-header post-author">
                                    <a href="#" class="author" data-toggle="tooltip" title="YAKUZI"><img src="img/user/avatar.jpg" alt=""></a>
                                    <div class="post-title">
                                        <h3><a href="#">Official Mirror’s Edge Catalyst Trailer</a></h3>
                                        <ul class="post-meta">
                                            <li><i class="fa fa-calendar-o"></i> April 13, 2016</li>
                                            <li><a href="#">#hashtag</a>, <a href="#">#witcher 3</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="post-thumbnail">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/IsDX_LiJT7E?rel=0&amp;showinfo=0" allowfullscreen></iframe>
                                    </div>
                                </div>

                                Etiam et sollicitudin elit. Sed ultrices aliquet dui, eu aliquet metus sodales sit amet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis porttitor varius pulvinar. Vivamus efficitur vulputate imperdiet.
                            </div>
                        </div>
                        <div class="panel-footer">
                            <ul class="post-action">
                                <li><a href="#" class="active"><i class="fa fa-heart"></i> you like it (7)</a></li>
                                <li><a href="#"><i class="fa fa-comments"></i> Comments</a></li>
                                <li><a href="#"><i class="fa fa-reply"></i> share</a></li>
                            </ul>
                        </div>
                    </div>

                    <h4 class="page-header text-center no-padding"><i class="fa fa-clock-o"></i> February, 2016</h4>
                    <div class="panel panel-default panel-post">
                        <div class="panel-body">
                            <div class="post">
                                <div class="post-header post-author">
                                    <a href="#" class="author" data-toggle="tooltip" title="YAKUZI"><img src="img/user/avatar.jpg" alt=""></a>
                                    <div class="post-title">
                                        <h3><a href="#">The Witcher 3 is Game of the Year</a></h3>
                                        <ul class="post-meta">
                                            <li><i class="fa fa-calendar-o"></i> April 13, 2016</li>
                                            <li><a href="#">#hashtag</a>, <a href="#">#witcher 3</a></li>
                                        </ul>
                                    </div>
                                </div>
                                Etiam et sollicitudin elit. Sed ultrices aliquet dui, eu aliquet metus sodales sit amet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis porttitor varius pulvinar. Vivamus efficitur vulputate imperdiet.
                            </div>
                        </div>
                        <div class="panel-footer">
                            <ul class="post-action">
                                <li><a href="#"><i class="fa fa-heart"></i> like (5)</a></li>
                                <li><a href="#"><i class="fa fa-comments"></i> Comments</a></li>
                                <li><a href="#"><i class="fa fa-reply"></i> share</a></li>
                            </ul>
                        </div>
                    </div>

                    <center><a href="#" class="btn btn-primary btn-lg btn-shadow btn-rounded">Show More</a></center>
                </div>
            </div>
        </div>
@endsection
