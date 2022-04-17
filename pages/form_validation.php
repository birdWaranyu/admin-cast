
<?php  

include "../menu/menu.php";

?>

<div class="content-wrapper">
<!-- START PAGE CONTENT-->
    <div class="page-heading">
        <h1 class="page-title">Form Validation</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php"><i class="la la-home font-20"></i></a>
            </li>
            <li class="breadcrumb-item">Form Validation</li>
        </ol>
    </div>
    <div class="page-content fade-in-up">
        <div class="alert bg-white">
            <h4>jQuery Validation Plugin</h4>
            <p>This jQuery plugin makes simple clientside form validation easy, whilst still offering plenty of customization options. For more info please check out</p>
            <p>
                <a class="btn btn-success" href="https://jqueryvalidation.org/" target="_blank">Official Site</a>
            </p>
        </div>
        <div class="ibox">
            <div class="ibox-head">
                <div class="ibox-title">Basic Validation</div>
                <div class="ibox-tools">
                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                </div>
            </div>
            <div class="ibox-body">
                <form class="form-horizontal" id="form-sample-1" method="post" novalidate="novalidate">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Website</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="url">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Number</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="number">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Min length</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="min">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Max length</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="max">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">EqualTo (confirm)</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="password" type="text" name="password" placeholder="password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10 ml-sm-auto">
                            <input class="form-control" type="text" name="password_confirmation" placeholder="confirm password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10 ml-sm-auto">
                            <button class="btn btn-info" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
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
