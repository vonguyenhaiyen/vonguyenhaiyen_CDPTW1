<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>



<div class="type-1842">
    <div class="container">
        <div class="content">
            <p class="title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent
                libero. Sed cursus ante dapibus diam. Sed nisi.
                Nulla quis sem at nibh elementum imperdiet.
                Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum
                lacinia arcu eget nulla.</p>
            <div class="accordion" id="accordion" role="tablist">
                <div class="accordion_item">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <div class="panel-title">
                            <a role="button" data-toggle="collapse" href="#collapseOne" aria-expanded="false"
                                aria-controls="collapseOne" class="accordion_item_title collapsed">Accordion Item 1
                                Title
                            </a>
                        </div>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne"
                        aria-expanded="false" style="height: 0px;" data-parent="#accordion">
                        <p class="accordion_inner">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                            sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    </div>
                </div>
                <div class="accordion_item">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <div class="panel-title">
                            <a role="button" data-toggle="collapse" href="#collapseTwo" aria-expanded="false"
                                aria-controls="collapseTwo" class="accordion_item_title collapsed">Accordion Item 2
                                Title
                            </a>
                        </div>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo"
                        aria-expanded="false" style="height: 0px;" data-parent="#accordion">
                        <p class="accordion_inner">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                            sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    </div>
                </div>
                <div class="accordion_item">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <div class="panel-title">
                            <a role="button" data-toggle="collapse" href="#collapseThree" aria-expanded="false"
                                aria-controls="collapseThree" class="accordion_item_title collapsed">Accordion Item 3
                                Title
                            </a>
                        </div>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                        aria-labelledby="headingThree" aria-expanded="false" style="height: 0px;"
                        data-parent="#accordion">
                        <p class="accordion_inner">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                            sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>