
<?php  

include "../menu/menu.php";

?>

 <div class="content-wrapper">
<!-- START PAGE CONTENT-->
    <div class="page-heading">
        <h1 class="page-title">Text Editors</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php"><i class="la la-home font-20"></i></a>
            </li>
            <li class="breadcrumb-item">Text Editors</li>
        </ol>
    </div>
    <div class="page-content fade-in-up">
        <div class="ibox">
            <div class="ibox-head">
                <div class="ibox-title">Summernote Editor
                    <a class="btn btn-xs btn-default m-l-5" href="http://summernote.org/" target="_blank">Official site</a>
                </div>
            </div>
            <div class="ibox-body">
                <div id="summernote" data-plugin="summernote" data-air-mode="true">
                    <h2>WYSIWYG Editor</h2> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ullamcorper sapien non nisl facilisis bibendum in quis tellus. Duis in urna bibendum turpis pretium fringilla. Aenean neque velit, porta eget
                            mattis ac, imperdiet quis nisi. Donec non dui et tortor vulputate luctus. Praesent consequat rhoncus velit, ut molestie arcu venenatis sodales.
                    <h4>Lacinia</h4>
                    <ul>
                        <li>Suspendisse tincidunt urna ut velit ullamcorper fermentum.</li>
                        <li>Nullam mattis sodales lacus, in gravida sem auctor at.</li>
                        <li>Praesent non lacinia mi.</li>
                        <li>Mauris a ante neque.</li>
                        <li>Aenean ut magna lobortis nunc feugiat sagittis.</li>
                    </ul>
                    <h4>Pellentesque Adipiscing</h4> Maecenas quis ante ante. Nunc adipiscing rhoncus rutrum. Pellentesque adipiscing urna mi, ut tempus lacus ultrices ac. Pellentesque sodales, libero et mollis interdum, dui odio vestibulum dolor,
                    eu pellentesque nisl nibh quis nunc. Sed porttitor leo adipiscing venenatis vehicula. Aenean quis viverra enim. Praesent porttitor ut ipsum id ornare.
                </div>
            </div>
        </div>
        <div class="ibox">
            <div class="ibox-head">
                <div class="ibox-title">Summernote Air-Mode</div>
            </div>
            <div class="ibox-body">
                <div id="summernote_air" data-plugin="summernote" data-air-mode="true">
                    <h2>Air-Mode</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ullamcorper sapien non nisl facilisis bibendum in quis tellus. Duis in urna bibendum turpis pretium fringilla. Aenean neque velit</p>
                    <ul>
                        <li>Suspendisse tincidunt urna ut velit ullamcorper fermentum.</li>
                        <li>Nullam mattis sodales lacus, in gravida sem auctor at.</li>
                        <li>Aenean ut magna lobortis nunc feugiat sagittis.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Markdown
                            <a class="btn btn-xs btn-default m-l-5" href="https://github.com/toopay/bootstrap-markdown" target="_blank">Official site</a>
                        </div>
                    </div>
                    <div class="ibox-body">
                        <p>Switch regular textarea within your form into Bootstrap-Markdown editor seamlessly by adding <code>data-provide="markdown"</code> attribute</p>
                                <textarea name="content" data-provide="markdown" data-iconlibrary="fa" rows="10">h1 header ============ Paragraphs are separated by a blank line. 2nd paragraph. *Italic*, **bold**, and `monospace`. Itemized lists look like: * this one * that one * the other one</textarea>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Markdown Inline Editing</div>
                    </div>
                    <div class="ibox-body">
                        <p>Inline editing with Bootstrap-Markdown is done by adding <code>data-provide="markdown-editable"</code> attribute</p>
                        <div data-provide="markdown-editable" data-iconlibrary="fa">
                            <h3>Heading is here</h3>
                            <p>Lorem ipsum dolor,<strong><b>consectetur adipisicing elit</b></strong>consectetur adipisicing elit, sed domagna aliqua. Ut enim ad minim veniam, quis nostrud <u>Exercitation</u> ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat.</p>
                            <h4>Title</h4>
                            <p>laboris nisi ut aliquip ex ea commodo consequat
                                <a href="http://www.github.com">link is here</a>
                            </p>
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
