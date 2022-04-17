
<?php  

include "../menu/menu.php";

?>

<div class="content-wrapper">
<!-- START PAGE CONTENT-->
    <div class="page-heading">
        <h1 class="page-title">Sparkline Charts</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php"><i class="la la-home font-20"></i></a>
            </li>
            <li class="breadcrumb-item">Sparkline Charts</li>
        </ol>
    </div>
    <div class="page-content fade-in-up">
        <div class="ibox">
            <div class="ibox-head">
                <div class="ibox-title">Sparkline Charts</div>
            </div>
            <div class="ibox-body">
                <p>Mouse speed
                    <span id="mousespeed">Loading..</span>
                </p>
                <p>Inline
                    <span class="sparkline">10,8,9,3,5,8,5</span> line graphs
                    <span class="sparkline">8,4,0,0,0,0,1,4,4,10,10,10,10,0,0,0,4,6,5,9,10</span>
                </p>
                <p>Bar charts
                    <span class="sparkbar">10,8,9,3,5,8,5</span> negative values:
                    <span class="sparkbar">-3,1,2,0,3,-1</span> stacked:
                    <span class="sparkbar">0:2,2:4,4:2,4:1</span>
                </p>
                <p>Pie charts
                    <span class="sparkpie">1,1,2</span>
                    <span class="sparkpie">1,5</span>
                    <span class="sparkpie">20,50,80</span>
                </p>
                <p>Composite inline
                    <span id="compositeline">8,4,0,0,0,0,1,4,4,10,10,10,10,0,0,0,4,6,5,9,10</span>
                </p>
                <p>Inline with normal range
                    <span id="normalline">8,4,0,0,0,0,1,4,4,10,10,10,10,0,0,0,4,6,5,9,10</span>
                </p>
                <p>Composite bar
                    <span id="compositebar">4,6,7,7,4,3,2,1,4</span>
                </p>
                <p>Discrete
                    <span class="discrete1">4,6,7,7,4,3,2,1,4,4,5,6,7,6,6,2,4,5</span><br />
                </p>
                <p>Discrete with threshold
                    <span id="discrete2">4,6,7,7,4,3,2,1,4</span>
                </p>
                <p>Customize size and colours
                    <span id="linecustom">10,8,9,3,5,8,5,7</span>
                </p>
                <p>Tristate charts
                    <span class="sparktristate">1,1,0,1,-1,-1,1,-1,0,0,1,1</span><br />
                </p>
                <p>Tristate chart using a colour map:
                    <span class="sparktristatecols">1,2,0,2,-1,-2,1,-2,0,0,1,1</span>
                </p>
                <p>Box Plot:
                    <span class="sparkboxplot">4,27,34,52,54,59,61,68,78,82,85,87,91,93,100</span><br />
                </p>
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
