
<?php  

include "../menu/menu.php";

?>

<div class="content-wrapper">
            <!-- START PAGE CONTENT-->
    <div class="page-heading">
        <h1 class="page-title">Colors</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.php"><i class="la la-home font-20"></i></a>
                </li>
                <li class="breadcrumb-item">Colors</li>
            </ol>
    </div>

    <div class="page-content fade-in-up">
        <div class="ibox">
            <div class="ibox-head">
                <div class="ibox-title">Main Colors list</div>
                    <div class="ibox-tools">
                        <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                    </div>
            </div>
            <div class="ibox-body">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="color-box">
                            <div class="color-view bg-primary"></div>
                            <div class="color-name">Primary <small>#3498db</small></div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="color-box">
                            <div class="color-view bg-info"></div>
                            <div class="color-name">Info <small>#23B7E5</small></div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="color-box">
                            <div class="color-view bg-success"></div>
                            <div class="color-name">Success <small>#2ecc71</small></div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="color-box">
                            <div class="color-view bg-warning"></div>
                            <div class="color-name">Warning <small>#F39C12</small></div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="color-box">
                            <div class="color-view bg-danger"></div>
                            <div class="color-name">Danger <small>#e74c3c</small></div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="color-box">
                            <div class="color-view bg-silver"></div>
                            <div class="color-name">Silver <small>#bdc3c7</small></div>
                        </div>
                    </div>
            	</div>

                <div class="row">
                    <div class="col-sm-2">
                        <div class="color-box">
                            <div class="color-view bg-ebony"></div>
                            <div class="color-name">Navy <small>#7f8c8d</small></div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="color-box">
                            <div class="color-view bg-purple"></div>
                            <div class="color-name">Purple<small>#7E57C2</small></div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="color-box">
                            <div class="color-view bg-teal"></div>
                            <div class="color-name">Teal<small>#1abc9c</small></div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="color-box">
                            <div class="color-view bg-yellow"></div>
                            <div class="color-name">Yellow <small>#f1c40f</small></div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="color-box">
                            <div class="color-view bg-pink"></div>
                            <div class="color-name">Pink<small>#E91E63</small></div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="color-box">
                            <div class="color-view bg-grey"></div>
                            <div class="color-name">Grey<small>#7f8c8d</small></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>

            .colors-boxes .color-box {
                margin-bottom: 20px;
                border: 1px solid #eee;
            }

            .color-box .color-view {
                position: relative;
                padding: 35px 10px;
                text-align: center;
                font-size: 18px;
            }

            .color-box .color-view span {
                position: absolute;
                bottom: 0;
                left: 0;
                width: 100%;
                text-align: center;
                padding: 6px;
                background-color: rgba(0, 0, 0, .2);
                font-size: 12px;
                color: #fff;
            }

            .color-box .color-name {
                padding: 7px;
                text-align: center;
                font-weight: 600;
            }

            .color-box .color-name small {
                display: block;
                font-weight: 400;
            }

            .colors-tabs {
                padding-top: 15px;
                margin: 0;
                border: 0;
                display: block
            }

            .colors-tabs span {
                display: inline-block;
                height: 20px;
                width: 20px;
                margin-left: 15px;
                cursor: pointer;
                border: 0 !important;
                padding: 0;
            }

            .color-palette {
                padding: 10px 15px;
                color: #fff;
            }

        </style>

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
                                <li class="m-b-5">
                                	<i class="ti-check m-r-5"></i>High Quality Design
                                </li>
                                <li class="m-b-5">
                                	<i class="ti-check m-r-5"></i>Fully Customizable and Easy Code
                                </li>
                                <li class="m-b-5">
                                	<i class="ti-check m-r-5"></i>Bootstrap 4 and Angular 5+
                                </li>
                                <li class="m-b-5">
                                	<i class="ti-check m-r-5"></i>Best Build Tools: Gulp, SaSS, Pug...
                                </li>
                                <li><i class="ti-check m-r-5"></i>More layouts, pages, components
                                </li>
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
    <!-- END PAGE CONTENT-->


<?php  

include "../footer/footer.php";

?>
