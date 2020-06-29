<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1840 content">

    <div class="container content-padding">
        <div class="title width">
            <div class="tilte-text">
                <h1>Flatsome Elements</h1>
                <p class="p-text-1843">Flatsome is more than a theme. It's a framework for creating amazing Websites.
                    Here    is a collection of our highly  customisable elements.</p>
            </div>

        </div>
        <div class="row width ">
            <div class="col-1843">
                <div class="col-inner">
                    <a href="#">
                        <div class="page-box">
                            <div class="box-image">
                                <img src="images/1.svg" alt="" width="114" height="77">

                            </div>
                            <div class="box-text" style="background-color:rgb(250, 250, 250);padding:1px 1px 3px 10px;">
                                <p>Sections</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-1843">
                <div class="col-inner">
                    <a href="#">
                        <div class="page-box">
                            <div class="box-image">
                                <img src="images/2.svg" alt="" width="114" height="77">

                            </div>
                            <div class="box-text" style="background-color:rgb(250, 250, 250);padding:1px 1px 3px 10px;">
                                <p>Sections</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-1843">
                <div class="col-inner">
                    <a href="#">
                        <div class="page-box">
                            <div class="box-image">
                                <img src="images/3.svg" alt="" width="114" height="77">
                            </div>
                            <div class="box-text" style="background-color:rgb(250, 250, 250);padding:1px 1px 3px 10px;">
                                <p>Sections</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-1843">
                <div class="col-inner">
                    <a href="#">
                        <div class="page-box">
                            <div class="box-image">
                                <img src="images/4.svg" alt="" width="114" height="77">
                            </div>
                            <div class="box-text" style="background-color:rgb(250, 250, 250);padding:1px 1px 3px 10px;">
                                <p>Sections</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-1843">
                <div class="col-inner">
                    <a href="#">
                        <div class="page-box">
                            <div class="box-image">
                                <img src="images/5.svg" alt="" width="114" height="77">
                            </div>
                            <div class="box-text" style="background-color:rgb(250, 250, 250);padding:1px 1px 3px 10px;">
                                <p>Sections</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-1843">
                <div class="col-inner">
                    <a href="#">
                        <div class="page-box">
                            <div class="box-image">
                                <img src="images/6.svg" alt="" width="114" height="77">
                            </div>
                            <div class="box-text" style="background-color:rgb(250, 250, 250);padding:1px 1px 3px 10px;">
                                <p>Sections</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-1843">
                <div class="col-inner">
                    <a href="#">
                        <div class="page-box">
                            <div class="box-image">
                                <img src="images/7.svg" alt="" width="114" height="77">
                            </div>
                            <div class="box-text" style="background-color:rgb(250, 250, 250);padding:1px 1px 3px 10px;">
                                <p>Sections</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-1843">
                <div class="col-inner">
                    <a href="#">
                        <div class="page-box">
                            <div class="box-image">
                                <img src="images/8.svg" alt="" width="114" height="77">
                            </div>
                            <div class="box-text" style="background-color:rgb(250, 250, 250);padding:1px 1px 3px 10px;">
                                <p>Sections</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>