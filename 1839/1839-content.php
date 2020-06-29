<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>



<div class="type-1839">
    <div class="banner fill-picture">
        <div class="banner-bg fill-picture" data-parallax="-3">
            <div class="banner-fill fill-picture"></div>
            <div class="overlay"></div>
        </div>
        <div class="banner-layers container">
            <div class="fill-picture banner-link"></div>
            <div class="text-box">
                <div class="text">
                    <h2 class="uppercase">
                        <strong>Sale Ends Soon</strong>
                    </h2>
                    <h4 class="uppercase">
                        Up to
                        <strong>50% off</strong>
                        selected products
                    </h4>
                    <div class="timer">
                        <span>0 <strong>hours</strong></span>
                        <span>0 <strong>min</strong></span>
                        <span>0 <strong>sec</strong></span>
                    </div>
                    <a href="" class="btn-browse">
                        <span>Browse now</span>
                    </a>
                </div>
            </div>


        </div>
    </div>
</div>