 
<?php  

include "../menu/menu.php";

?>

<div class="content-wrapper">
<!-- START PAGE CONTENT-->
    <div class="page-heading">
        <h1 class="page-title">Badges &amp; Progress</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php"><i class="la la-home font-20"></i></a>
            </li>
            <li class="breadcrumb-item">badges &amp;Progress</li>
        </ol>
    </div>
    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-md-6">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Badges</div>
                    </div>
                    <div class="ibox-body">
                        <p>
                            <span class="badge badge-default m-r-5 m-b-5">DEFAULT</span>
                            <span class="badge badge-primary m-r-5 m-b-5">PRIMARY</span>
                            <span class="badge badge-info m-r-5 m-b-5">INFO</span>
                            <span class="badge badge-success m-r-5 m-b-5">SUCCESS</span>
                            <span class="badge badge-warning m-r-5 m-b-5">WARNING</span>
                            <span class="badge badge-danger m-b-5">DANGER</span>
                        </p>
                        <p>
                            <span class="badge badge-default badge-pill m-r-5 m-b-5">DEFAULT</span>
                            <span class="badge badge-primary badge-pill m-r-5 m-b-5">PRIMARY</span>
                            <span class="badge badge-info badge-pill m-r-5 m-b-5">INFO</span>
                            <span class="badge badge-success badge-pill m-r-5 m-b-5">SUCCESS</span>
                            <span class="badge badge-warning badge-pill m-r-5 m-b-5">WARNING</span>
                            <span class="badge badge-danger badge-pill m-b-5">DANGER</span>
                        </p>
                        <p>
                            <span class="badge badge-default badge-circle m-r-5 m-b-5">9</span>
                            <span class="badge badge-primary badge-circle m-r-5 m-b-5">3</span>
                            <span class="badge badge-info badge-circle m-r-5 m-b-5">7</span>
                            <span class="badge badge-success badge-circle m-r-5 m-b-5">8</span>
                            <span class="badge badge-warning badge-circle m-r-5 m-b-5">4</span>
                            <span class="badge badge-danger badge-circle m-b-5">1</span>
                        </p>
                        <p>
                            <span class="badge badge-default m-r-5 m-b-5">9</span>
                            <span class="badge badge-primary m-r-5 m-b-5">NEW</span>
                            <span class="badge badge-info m-r-5 m-b-5">7</span>
                            <span class="badge badge-success m-r-5 m-b-5">8</span>
                            <span class="badge badge-warning m-r-5 m-b-5">145</span>
                            <span class="badge badge-danger m-b-5">VIP</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Progress Bars</div>
                    </div>
                    <div class="ibox-body">
                        <div class="progress m-b-20">
                            <div class="progress-bar progress-bar-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress m-b-20">
                            <div class="progress-bar progress-bar-info" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                        </div>
                        <div class="progress m-b-20">
                            <div class="progress-bar progress-bar-warning" role="progressbar" style="width:75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress m-b-20">
                            <div class="progress-bar pull-right" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">60%</div>
                        </div>
                        <div class="progress m-b-20">
                            <div class="progress-bar progress-bar-danger pull-right" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width:30%;">30%</div>
                        </div>
                        <h6>Sizing</h6>
                        <div class="progress m-b-20">
                            <div class="progress-bar progress-bar-warning" role="progressbar" style="width:75%; height:10px;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress m-b-20">
                            <div class="progress-bar progress-bar-danger" role="progressbar" style="width:50%; height:4px;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h6>Striped</h6>
                        <div class="progress m-b-20">
                            <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"></div>
                        </div>
                        <div class="progress m-b-20">
                            <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"></div>
                        </div>
                        <h6>Animated</h6>
                        <div class="progress m-b-20">
                            <div class="progress-bar progress-bar-striped active" id="ex-progress" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
                        </div>
                        <button class="btn btn-gray" id="btn-toggle-progress" type="button" data-toggle="button">Toggle animation</button>
                        <h6>Stacked</h6>
                        <div class="progress m-b-20">
                            <div class="progress-bar progress-bar-success" style="width:35%;">
                                <span class="sr-only">35% Complete (success)</span>
                            </div>
                            <div class="progress-bar progress-bar-warning" style="width:20%;">
                                <span class="sr-only">20% Complete (warning)</span>
                            </div>
                            <div class="progress-bar progress-bar-danger" style="width:10%;">
                                <span class="sr-only">10% Complete (danger)</span>
                            </div>
                        </div>
                        <h6>Vertical</h6>
                        <div class="row">
                            <div class="col-sm-6 m-b-20" style="height:180px;">
                                <div class="progress progress-vertical">
                                    <div class="progress-bar progress-bar-success" role="progressbar" style="height: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress progress-vertical">
                                    <div class="progress-bar progress-bar-info" role="progressbar" style="height: 40%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress progress-vertical">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" style="height: 65%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress progress-vertical">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" style="height: 85%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-sm-6 m-b-20" style="height:180px;">
                                <div class="progress progress-vertical progress-bottom">
                                    <div class="progress-bar progress-bar-success" role="progressbar" style="height: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress progress-vertical progress-bottom">
                                    <div class="progress-bar progress-bar-info" role="progressbar" style="height: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                               <div class="progress progress-vertical progress-bottom">
                                    <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" style="height: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress progress-vertical progress-bottom">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" style="height: 85%;" aria-valuenow="50" aria-valuemin="85" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div style="height:150px;">
                            <div class="progress progress-vertical progress-bottom progress-wide">
                                <div class="progress-bar progress-bar-danger" role="progressbar" style="height: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                            </div>
                            <div class="progress progress-vertical progress-bottom progress-wide">
                                <div class="progress-bar progress-bar-warning" role="progressbar" style="height: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
                            </div>
                            <div class="progress progress-vertical progress-bottom progress-wide">
                                <div class="progress-bar progress-bar-info" role="progressbar" style="height: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
                            </div>
                            <div class="progress progress-vertical progress-bottom progress-wide">
                                <div class="progress-bar progress-bar-success" role="progressbar" style="height: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <a class="adminca-banner" href="http://admincast.com/adminca/" target="_blank">
                <div class="adminca-banner-ribbon"><i class="fa fa-trophy mr-2"></i>PREMIUM TEMPLATE</div>
                <div class="wrap-1">
                    <div class="wrap-2">
                        <div>
                            <img src="../assets/img/adminca-banner/adminca-preview.jpg" style="height:160px;margin-top:50px;" />
                        </div>
                        <div class="color-white" style="margin-left:40px;">
                            <h1 class="font-bold">ADMINCA</h1>
                            <p class="font-16">Save your time, choose the best</p>
                            <ul class="list-unstyled">
                                <li class="m-b-5"><i class="ti-check m-r-5"></i>High Quality Design</li>
                                <li class="m-b-5"><i class="ti-check m-r-5"></i>Fully Customizable and Easy Code</li>
                                <li class="m-b-5"><i class="ti-check m-r-5"></i>Bootstrap 4 and Angular 5+</li>
                                <li class="m-b-5"><i class="ti-check m-r-5"></i>Best Build Tools: Gulp, SaSS, Pug...
                                </li>
                                <li><i class="ti-check m-r-5"></i>More layouts, pages, components</li>
                            </ul>
                        </div>
                    </div>
                    <div style="flex:1;">
                        <div class="d-flex justify-content-end wrap-3">
                            <div class="adminca-banner-b m-r-20">
                                <img src="../assets/img/adminca-banner/bootstrap.png" style="width:40px;margin-right:10px;" />Bootstrap v4</div>
                            <div class="adminca-banner-b m-r-10">
                                <img src="../assets/img/adminca-banner/angular.png" style="width:35px;margin-right:10px;" />Angular v5+</div>
                        </div>
                        <div class="dev-img">
                            <img src="../assets/img/adminca-banner/sprite.png" />
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

<?php  

include "../footer/footer.php";

?>
