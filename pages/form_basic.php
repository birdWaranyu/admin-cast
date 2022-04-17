
<?php  

include "../menu/menu.php";

?>

<div class="content-wrapper">
<!-- START PAGE CONTENT-->
    <div class="page-heading">
        <h1 class="page-title">Basic Form</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php"><i class="la la-home font-20"></i></a>
             </li>
            <li class="breadcrumb-item">Basic Form</li>
        </ol>
    </div>
    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-md-6">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Basic form</div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                            <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item">option 1</a>
                                <a class="dropdown-item">option 2</a>
                            </div>
                        </div>
                    </div>
                    <div class="ibox-body">
                        <form>
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label>First Name</label>
                                    <input class="form-control" type="text" placeholder="First Name">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Last Name</label>
                                    <input class="form-control" type="text" placeholder="First Name">
                                </div>
                            </div>
                            	<div class="form-group">
                                	<label>Email</label>
                                	<input class="form-control" type="text" placeholder="Email address">
                            	</div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control" type="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label class="ui-checkbox">
                                        <input type="checkbox">
                                        <span class="input-span"></span>Remamber me
                                    </label>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-default" type="submit">Submit</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Horizontal Form</div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                            <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                    <div class="ibox-body">
                        <form class="form-horizontal">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="Email address">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="password" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Gender</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="password" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 ml-sm-auto">
                                    <label class="ui-checkbox ui-checkbox-gray">
                                        <input type="checkbox">
                                        <span class="input-span"></span>Remamber me
                                    </label>
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
            </div>
        </div>
        <div class="ibox">
            <div class="ibox-head">
                <div class="ibox-title">Inline Form</div>
            </div>
            <div class="ibox-body">
                <form class="form-inline">
                    <label class="sr-only" for="ex-email">Email</label>
                    <input class="form-control mb-2 mr-sm-2 mb-sm-0" id="ex-email" type="text" placeholder="Email address">
                    <label class="sr-only" for="ex-pass">Email</label>
                    <input class="form-control mb-2 mr-sm-2 mb-sm-0" id="ex-pass" type="password" placeholder="Password">
                    <div class="form-check mb-2 mr-sm-2 mb-sm-0">
                        <label class="ui-checkbox ui-checkbox-inline">
                            <input type="checkbox">
                            <span class="input-span"></span>Remamber me
                        </label>
                    </div>
                    <button class="btn btn-success" type="submit">Login</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Form Elements</div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                            <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                    <div class="ibox-body">
                        <form>
                            <div class="form-group">
                                <label>Default input</label>
                                <input class="form-control" type="text" placeholder="Default input">
                            </div>
                            <div class="form-group">
                                <label>Rounded input</label>
                                <input class="form-control input-rounded" type="text" placeholder="Rounded input">
                            </div>
                            <div class="form-group">
                                <label>With Help text</label>
                                <input class="form-control" type="text" placeholder="With Help text">
                                <span class="help-block">This is some placeholder block-level help text for the above input.</span>
                            </div>
                            <h4>Input Groups</h4>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                    <input class="form-control" type="text" placeholder="input group">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="input group">
                                     <div class="input-group-addon">@example.com</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon bg-white">$</div>
                                    <input class="form-control" type="text" placeholder="input group">
                                    <div class="input-group-addon bg-white">.00</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-lock font-16"></i></div>
                                    <input class="form-control" type="text" placeholder="input group">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                    <input class="form-control" type="text" placeholder="input group">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="input group">
                                    <div class="input-group-addon"><i class="fa fa-link"></i></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <input type="checkbox">
                                    </div>
                                    <input class="form-control" type="text" placeholder="input group">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <input type="radio">
                                    </div>
                                    <input class="form-control" type="text" placeholder="input group">
                                </div>
                            </div>
                            <h4>Input Button Groups</h4>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-btn">
                                        <button class="btn btn-info" type="button">Go!</button>
                                    </div>
                                    <input class="form-control" type="text" placeholder="input group">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="input group">
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary" type="button">Go!</button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-btn">
                                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></button>
                                        <ul class="dropdown-menu">
                                            <a class="dropdown-item">option 1</a>
                                            <a class="dropdown-item">option 2</a>
                                        </ul>
                                    </div>
                                    <input class="form-control" type="text" placeholder="input group">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="input group">
                                    <div class="input-group-btn">
                                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></button>
                                        <ul class="dropdown-menu">
                                            <a class="dropdown-item">option 1</a>
                                            <a class="dropdown-item">option 2</a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="input group">
                                    <div class="input-group-btn">
                                        <button class="btn btn-info" type="button">Action</button>
                                        <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown"><i class="fa fa-angle-down"></i></button>
                                        <ul class="dropdown-menu">
                                            <a class="dropdown-item">option 1</a>
                                            <a class="dropdown-item">option 2</a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h4>With Icons</h4>
                            <div class="form-group">
                                <div class="input-group-icon">
                                    <div class="input-icon"><i class="fa fa-link"></i></div>
                                    <input class="form-control" type="text" placeholder="with icon">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group-icon">
                                    <div class="input-icon"><i class="fa fa-keyboard-o"></i></div>
                                    <input class="form-control" type="text" placeholder="with icon">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group-icon">
                                    <div class="input-icon"><i class="fa fa-microphone text-primary font-15"></i></div>
                                    <input class="form-control" type="text" placeholder="with icon">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group-icon right">
                                    <div class="input-icon"><i class="fa fa-eye"></i></div>
                                    <input class="form-control" type="text" placeholder="with icon">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group-icon right">
                                    <div class="input-icon"><i class="fa fa-lock font-16"></i></div>
                                    <input class="form-control" type="text" placeholder="with icon">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group-icon right">
                                    <div class="input-icon"><i class="fa fa-check text-success"></i></div>
                                    <input class="form-control" type="text" placeholder="with icon">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group-icon right">
                                    <div class="input-icon"><i class="icon-cancel text-danger"></i></div>
                                    <input class="form-control" type="text" placeholder="with icon">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Disabled</label>
                                <input class="form-control" type="text" placeholder="Disabled input" disabled="">
                            </div>
                            <div class="form-group">
                                <label>Static control</label>
                                <p class="form-control-static">email@example.com</p>
                            </div>
                            <div class="form-group">
                                <label>Select</label>
                                <select class="form-control">
                                    <option value="">option 1</option>
                                    <option value="">option 2</option>
                                    <option value="">option 3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Multiple Select</label>
                                <select class="form-control" multiple="">
                                    <option value="">option 1</option>
                                    <option value="">option 2</option>
                                    <option value="">option 3</option>
                                    <option value="">option 4</option>
                                    <option value="">option 5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>textarea</label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Checkboxes & Radios</label>
                                <div class="row">
                                    <div class="col-6 m-b-20">
                                        <div class="check-list">
                                            <label class="ui-checkbox">
                                                <input type="checkbox">
                                                <span class="input-span"></span>Checkbox</label>
                                            <label class="ui-checkbox">
                                                <input type="checkbox">
                                                <span class="input-span"></span>Checkbox</label>
                                            <label class="ui-checkbox">
                                                <input type="checkbox" checked="">
                                                <span class="input-span"></span>Checked</label>
                                            <label class="ui-checkbox ui-checkbox-gray">
                                                <input type="checkbox">
                                                <span class="input-span"></span>Checkbox gray</label>
                                            <label class="ui-checkbox disabled">
                                                <input type="checkbox" disabled="">
                                                <span class="input-span"></span>Disabled</label>
                                        </div>
                                    </div>
                                    <div class="col-6 m-b-20">
                                        <div class="check-list">
                                            <label class="ui-checkbox ui-checkbox-primary">
                                                <input type="checkbox">
                                                <span class="input-span"></span>Primary</label>
                                            <label class="ui-checkbox ui-checkbox-success">
                                                <input type="checkbox">
                                                <span class="input-span"></span>Success</label>
                                            <label class="ui-checkbox ui-checkbox-info">
                                                <input type="checkbox">
                                                <span class="input-span"></span>Info</label>
                                            <label class="ui-checkbox ui-checkbox-warning">
                                                <input type="checkbox">
                                                <span class="input-span"></span>Warning</label>
                                            <label class="ui-checkbox ui-checkbox-danger">
                                                <input type="checkbox">
                                                <span class="input-span"></span>Danger</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 m-b-20">
                                        <div class="check-list">
                                            <label class="ui-radio">
                                                <input type="radio" name="test">
                                                <span class="input-span"></span>Radio</label>
                                            <label class="ui-radio">
                                                <input type="radio" name="test">
                                                <span class="input-span"></span>Radio</label>
                                            <label class="ui-radio">
                                                <input type="radio" name="test" checked="">
                                                <span class="input-span"></span>Checked</label>
                                            <label class="ui-radio ui-radio-gray">
                                                <input type="radio" name="test">
                                                <span class="input-span"></span>Radio Gray</label>
                                            <label class="ui-radio disabled">
                                                <input type="radio" name="test" disabled="">
                                                <span class="input-span"></span>Disabled</label>
                                        </div>
                                    </div>
                                    <div class="col-6 m-b-20">
                                        <div class="check-list">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="test2">
                                                <span class="input-span"></span>Primary</label>
                                            <label class="ui-radio ui-radio-success">
                                                <input type="radio" name="test2">
                                                <span class="input-span"></span>Success</label>
                                            <label class="ui-radio ui-radio-info">
                                                <input type="radio" name="test2">
                                                <span class="input-span"></span>Info</label>
                                            <label class="ui-radio ui-radio-warning">
                                                <input type="radio" name="test2">
                                                <span class="input-span"></span>Warning</label>
                                            <label class="ui-radio ui-radio-danger">
                                                <input type="radio" name="test2">
                                                <span class="input-span"></span>Danger</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Inline Checkboxes</label>
                                <div class="m-b-10">
                                    <label class="ui-checkbox ui-checkbox-inline">
                                        <input type="checkbox">
                                        <span class="input-span"></span>Option 1</label>
                                    <label class="ui-checkbox ui-checkbox-inline">
                                        <input type="checkbox">
                                        <span class="input-span"></span>Option 2</label>
                                    <label class="ui-checkbox ui-checkbox-inline">
                                        <input type="checkbox">
                                        <span class="input-span"></span>Option 3</label>
                                </div>
                                <div>
                                    <label class="ui-radio ui-radio-inline">
                                        <input type="radio" name="test">
                                        <span class="input-span"></span>Option 1</label>
                                    <label class="ui-radio ui-radio-inline">
                                        <input type="radio" name="test">
                                        <span class="input-span"></span>Option 2</label>
                                    <label class="ui-radio ui-radio-inline">
                                        <input type="radio" name="test">
                                        <span class="input-span"></span>Option 3</label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Form Elements</div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                            <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                    <div class="ibox-body">
                        <h4>Control sizing</h4>
                        <div class="form-group">
                            <input class="form-control input-sm" type="text" placeholder="Small">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Default">
                        </div>
                        <div class="form-group">
                            <input class="form-control input-lg" type="text" placeholder="Big">
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-sm">
                                <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                <input class="form-control" type="text" placeholder="small input group">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-lg">
                                <div class="input-group-addon"><i class="fa fa-link"></i></div>
                                <input class="form-control" type="text" placeholder="large input group">
                            </div>
                        </div>
                        <div class="form-group">
                            <select class="form-control input-sm">
                                <option>Small select</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control">
                                <option>Default select</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control input-lg">
                                <option>Big select</option>
                            </select>
                        </div>
                        <div class="form-group has-success">
                            <label class="col-form-label">Input success state</label>
                            <input class="form-control" type="text" placeholderx="Rounded input">
                        </div>
                        <div class="form-group has-warning">
                            <label class="col-form-label">Input warning state</label>
                            <input class="form-control" type="text" placeholderx="Rounded input">
                        </div>
                        <div class="form-group has-error">
                            <label class="col-form-label">Input error state</label>
                            <input class="form-control" type="text" placeholderx="Rounded input">
                        </div>
                        <h4>With icons</h4>
                        <div>
                            <div class="form-group">
                                <label class="col-form-label">Default input</label>
                                <div class="input-group-icon right">
                                    <div class="input-icon"><i class="fa fa-info-circle"></i></div>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="form-group has-success">
                                <label class="col-form-label">Input success state</label>
                                <div class="input-group-icon right">
                                    <div class="input-icon"><i class="fa fa-check"></i></div>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="form-group has-warning">
                                <label class="col-form-label">Input warning state</label>
                                <div class="input-group-icon right">
                                    <div class="input-icon"><i class="fa fa-warning"></i></div>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="form-group has-error">
                                <label class="col-form-label">Input error state</label>
                                <div class="input-group-icon right">
                                    <div class="input-icon"><i class="fa fa-exclamation"></i></div>
                                    <input class="form-control" type="text">
                                </div>
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
