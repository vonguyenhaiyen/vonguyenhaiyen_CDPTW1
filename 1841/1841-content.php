<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>



<div class="type-1841">
    <div class="container margin-col">
        <div class="row">
            <div class="col-md-3 col">
                <span class="title">About us</span>
                <div class="divider"></div>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                    laoreet dolore magna aliquam erat volutpat.</p>
                <div class="icons">
                    <a href="" class="icon facebook">
                        <span class="fa fa-facebook"></span>
                    </a>
                    <a href="" class="icon instagram">
                        <span class="fa fa-instagram"></span>
                    </a>
                    <a href="" class="icon twitter">
                        <span class="fa fa-twitter"></span>
                    </a>
                    <a href="" class="icon envelope-o">
                        <span class="fa fa-envelope-o"></span>
                    </a>
                    <a href="" class="icon pinterest">
                        <span class="fa fa-pinterest"></span>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col">
                <span class="title">Latest News</span>
                <div class="divider"></div>
                <ul class="list-date">
                    <li class="li-date">
                        
                        <div class="box">
                            <div class="box-date">
                                <span class="date">19</span>
                                <br>
                                <span class="month">Nov</span>
                            </div>
                        </div>

                        <div class="content">
                            <a href="">Welcome to Flatsome</a>
                        </div>
                    </li>
                    <li class="li-date">
                        
                        <div class="box">
                            <div class="box-date">
                                <span class="date">13</span>
                                <br>
                                <span class="month">Otc</span>
                            </div>
                        </div>

                        <div class="content">
                            <a href="">Just another post with A Gallery</a>
                        </div>
                    </li>
                    <li class="li-date">
                        
                        <div class="box">
                            <div class="box-date">
                                <span class="date">13</span>
                                <br>
                                <span class="month">Otc</span>
                            </div>
                        </div>

                        <div class="content">
                            <a href="">A Simple Blog Post</a>
                        </div>
                    </li>
                    <li class="li-date">
                        
                        <div class="box">
                            <div class="box-date">
                                <span class="date">01</span>
                                <br>
                                <span class="month">Jan</span>
                            </div>
                        </div>

                        <div class="content">
                            <a href="">A Video Blog Post</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 col">
                <span class="title">Tags</span>
                <div class="divider"></div>
                <div class="tagcloud">
                    <a href="">bag</a>
                    <a href="">classic</a>
                    <a href="">Converse</a>
                    <a href="">Diesel</a>
                    <a href="">fit</a>
                    <a href="">green</a>
                    <a href="">Jack and Jones</a>
                    <a href="">Jack and Jones-2</a>
                    <a href="">jeans</a>
                    <a href="">Jumper</a>
                    <a href="">leather</a>
                    <a href="">Lee</a>
                    <a href="">levis</a>
                    <a href="">man</a>
                    <a href="">nypd</a>
                    <a href="">party</a>
                    <a href="">Pink</a>
                    <a href="">River Island</a>
                    <a href="">rock chick</a>
                    <a href="">run</a>
                    <a href="">shoe</a>
                    <a href="">stars</a>
                    <a href="">sweden</a>
                    <a href="">t-shirt</a>
                    <a href="">vans</a>
                    <a href="">washed-out</a>
                    <a href="">white</a>
                    <a href="">women</a>
                </div>
            </div>
            <div class="col-md-3 col">
                <span class="title">Top Rated Products</span>
                <div class="divider"></div>
                <p class="sign-up">Signup to get news about Flatsome & WooCommerce. We don't spam!</p>
                <div class="form">
                    <form action="">
                        <span>
                            <input type="email" name="your-email" value size="40" placeholder="Your Email (required)">
                        </span>
                        <a href=""><span>Sign Up</span> </a>
                            
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>