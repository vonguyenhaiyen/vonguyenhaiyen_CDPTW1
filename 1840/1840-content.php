<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1840 pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <span class="title">Latest</span>
                <div class="divider"></div>
                <ul class="list-product">
                    <li>
                        <a href="#">
                            <img src="images/img1.jpg" alt="" width="100" height="100" sizes="(max-width: 100px) 100vw, 100px">
                            <span class="product-name">On1 Jersey UNIF-2</span>
                        </a>
                        <span class="price">$39,00</span>
                    </li>
                    <li>
                        <a href="#">
                            <img src="images/img3.jpg" alt="" width="100" height="100">
                            <span class="product-name">Osaka Entry Tee Superdry 12</span>
                        </a>
                        <span class="price">$29,00</span>
                    </li>
                    <li>
                        <a href="#">
                            <img src="images/img5.jpg" alt="" width="100" height="100">
                            <span class="product-name">All Star Canvas Hi Converse</span>
                        </a>
                        <span class="price">$29,00</span>
                    </li>
                    <li>
                        <a href="#">
                            <img src="images/img8.jpg" alt="" width="100" height="100">
                            <span class="product-name">Fluro Big Pullover Designers Remix</span>
                        </a>
                        <span class="price">$49,00</span>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <span class="title">Best Selling</span>
                <div class="divider"></div>
                <ul class="list-product">
                    <li>
                        <a href="#">
                            <img src="images/img2.jpg" alt="" width="100" height="100" sizes="(max-width: 100px) 100vw, 100px">
                            <span class="product-name">Daisy Bag Sonia by Sonia Rykiel</span>
                        </a>
                        <span class="price">$2.999,00</span>
                    </li>
                    <li>
                        <a href="#">
                            <img src="images/img1.jpg" alt="" width="100" height="100">
                            <span class="product-name">On1 Jersey UNIF</span>
                        </a>
                        <span class="price">$39,00</span>
                    </li>
                    <li>
                        <a href="#">
                            <img src="images/img7.jpg" alt="" width="100" height="100">
                            <span class="product-name">Beyond Top NLY Trend</span>
                        </a>
                        <span class="price">$9,90</span>
                    </li>
                    <li>
                        <a href="#">
                            <img src="images/img10.jpg" alt="" width="100" height="100">
                            <span class="product-name">Harissa O-Neck Sweat</span>
                        </a>
                        <span class="price">$101,00</span>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <span class="title">Featured</span>
                <div class="divider"></div>
                <ul class="list-product">
                    <li>
                        <a href="#">
                            <img src="images/img3.jpg" alt="" width="100" height="100" sizes="(max-width: 100px) 100vw, 100px">
                            <span class="product-name">Osaka Entry Tee Superdry 12</span>
                        </a>
                        <span class="price">$29,00</span>
                    </li>
                    <li>
                        <a href="#">
                            <img src="images/img5.jpg" alt="" width="100" height="100">
                            <span class="product-name">All Star Canvas Hi Converse</span>
                        </a>
                        <span class="price">$29,00</span>
                    </li>
                    <li>
                        <a href="#">
                            <img src="images/img8.jpg" alt="" width="100" height="100">
                            <span class="product-name">Fluro Big Pullover Designers Remix</span>
                        </a>
                        <span class="price">$49,00</span>
                    </li>
                    <li>
                        <a href="#">
                            <img src="images/img11.jpg" alt="" width="100" height="100">
                            <span class="product-name">Varanise CN Tee Hilfiger Denim</span>
                        </a>
                        <del><span class="price">$19,00</span></del>
                        <span class="price">$15,00</span>

                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <span class="title">Top Rated Products</span>
                <div class="divider"></div>
                <ul class="list-product">
                    <li>
                        <a href="#">
                            <img src="images/img4.jpg" alt="" width="100" height="100" sizes="(max-width: 100px) 100vw, 100px">
                            <span class="product-name">Pima SS O-Neck NOOS  Selected Homme</span>
                        </a>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </div>
                        
                        <span class="price">$29,00</span>
                    </li>
                    <li>
                        <a href="#">
                            <img src="images/img6.jpg" alt="" width="100" height="100">
                            <span class="product-name">Ninja Silhouette</span>
                        </a>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </div>
                        
                        <span class="price">$20,00</span>
                    </li>
                    <li>
                        <a href="#">
                            <img src="images/img9.jpg" alt="" width="100" height="100">
                            <span class="product-name">Raglan Tee Denim & Supply Ralph Lauren</span>
                        </a>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </div>
                        <del><span class="price">$15,00</span></del>
                        <span class="price">$9,90</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
