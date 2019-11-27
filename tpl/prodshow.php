<div data-wb-role="include" src="/tpl/wrapper.inc.php" data-wb-hide="*"></div>
<div data-wb-hide="*" data-wb-append="#wrapper">
    <nav class="extra-nav py-20" role="include" src="/tpl/breadcrumb.inc.php"> </nav>

        <section class="py-35 py-md-60" id="prodshow" data-articul="{{articul}}" data-lang="{{_VAR[lang]}}">
            <div class="container">
                <h1 class="h2 text-center mb-35 mb-md-60">{{lang[{{_VAR[lang]}}][name]}}</h1>
                <div class="large mb-20 mb-md-35" role="where" data='"{{articul}}"="sim"'>Choose a plan</div>
                <div class="border border-light border-bottom-0">
                    <ul class="nav nav-pills nav-justified product-plan-controls flex-column flex-md-row" role="foreach" data-wb-from="tarifs" id="tarifSelector" data-wb-where='id>"" AND "{{articul}}"="sim"' data-wb-hide="wb">
                        <meta role="variable" var="active" value="" data-wb-hide="*">
                        <meta role="variable" var="active" value="active" data-wb-where='"{{_idx}}"="0"' data-wb-hide="*">
                        <li class="nav-item" role="formdata" data-wb-table="products" data-wb-item="{{id}}" data-wb-hide="wb">
                            <a class="nav-link px-2 {{_VAR[active]}}" data-toggle="tab" data-wb-ajax="/products/tarif/{{id}}" data-wb-ajax-done="tarifChange">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div><span class="fa product-plan-check"></span></div>
                                    <div>{{lang[{{_VAR[lang]}}][name]}}</div>
                                    <div class="price">{{_VAR[ico_currency]}}{{apr[{{_VAR[lang]}}]}}</div>
                                    <meta role="variable" var="order_tarif" value="{{apr[{{_VAR[lang]}}]}}" data-wb-where='"{{%_idx}}"="0"' data-wb-hide="*"> </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="row no-gutters border border-light border-bottom-0">
                    <div class="col-12 col-md-5 px-35">
                        <div class="product-label text-white bg-info mt-35 pl-35">{{lang[{{_VAR[lang]}}][data][hint]}}</div> <img src="/uploads/products/{{id}}/{{images[0][img]}}" class="img-fluid" alt="{{lang[{{_VAR[lang]}}][name]}}"> </div>
                    <div class="col-12 col-md-7 p-20 p-md-35">
                        <p class="text-primary"> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star-half-o"></span> <span class="fa fa-star-o"></span> </p>
                        <div class="h5 text-dark font-weight-bold">{{lang[{{_VAR[lang]}}][name]}}</div>
                        <p>{{lang[{{_VAR[lang]}}][data][text]}}</p>
                        <div> <span class="text-secondary"><span class="product-price-from">{{_VAR[str_from]}}</span> <span class="product-price text-secondary text-strike oldprice">{{_VAR[ico_currency]}}<span>{{opr[{{_VAR[lang]}}]}}</span></span>
                            </span> <span class="text-danger product-price ml-30 price">{{_VAR[ico_currency]}}<span>{{apr[{{_VAR[lang]}}]}}</span></span>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-12 col-lg-5">
                        <div class="border border-light border-bottom-0">
                            <ul class="nav nav-pills nav-justified product-plan-controls flex-column flex-sm-row medium" role="foreach" data-wb-from="tarifs" id="tarifSelector" data-wb-where='id>"" AND "{{articul}}"<>"sim"' data-wb-hide="wb">
                                <meta role="variable" var="active" value="" data-wb-hide="*">
                                <meta role="variable" var="active" value="active" data-wb-where='"{{_idx}}"="0"' data-wb-hide="*">
                                <li class="nav-item" role="formdata" data-wb-table="products" data-wb-item="{{id}}" data-wb-hide="wb">
                                    <a class="nav-link p-3 {{_VAR[active]}}" data-toggle="tab" href="#Order" data-wb-ajax="/products/tarif/{{id}}" data-wb-ajax-done="tarifChange">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div><span class="fa product-plan-check"></span></div>
                                            <div>{{lang[{{_VAR[lang]}}][name]}}</div>
                                            <div>{{_VAR[ico_currency]}}{{apr[{{_VAR[lang]}}]}}</div>
                                            <meta role="variable" var="order_tarif" value="{{apr[{{_VAR[lang]}}]}}" data-wb-where='"{{%_idx}}"="0"' data-wb-hide="*"> </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div></div>
                        <div class="p-20 p-lg-35 border border-light" role="include" src="/tpl/order.inc.php"> </div>
                    </div>
                    <div class="col-12 col-lg-7 border border-light border-left-md-0">
                        <ul class="nav nav-pills nav-justified flex-column flex-md-row">
                            <li class="nav-item"> <a class="nav-link owf-ellipsis active" data-toggle="tab" href="#description">{{_VAR[str_features]}}</a> </li>
                            <li class="nav-item"> <a class="nav-link owf-ellipsis" data-toggle="tab" href="#delivery">{{_VAR[str_delivery]}}</a> </li>
                            <!--li class="nav-item">
                            <a class="nav-link owf-ellipsis" data-toggle="tab" href="#comments">{{_VAR[str_comments]}}</a>
                        </li--></ul>
                        <div class="tab-content p-20">
                            <div class="tab-pane fade show active" id="description">
                                <div class="container-fluid px-0">
                                    <div class="row">
                                        <div role="foreach" data-wb-from="tarifs" data-wb-tpl="false" data-wb-limit="1" data-wb-hide="*">
                                            <div class="col-12" id="tarifFeatures" role="formdata" data-wb-table="products" data-wb-item="{{id}}" data-wb-hide="wb"> {{lang[{{_VAR[lang]}}][data][features]}} <span data-wb-html="#modal_product_info .modal-body">
                                                {{lang[{{_VAR[lang]}}][data][text]}}
                                            </span> <span data-wb-html="#modal_product_info .modal-title">
                                                {{lang[{{_VAR[lang]}}][data][header]}}
                                            </span> </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12"> {{lang[{{_VAR[lang]}}][data][features]}} </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="delivery">
                                <div role="formdata" data-wb-table="pages" data-wb-item="delivery">
                                    <h3>{{lang[{{_VAR[lang]}}][name]}}</h3> {{lang[{{_VAR[lang]}}][data][text]}} </div>
                            </div>
                            <div class="tab-pane fade" id="comments">
                                <div data-wb-role="foreach" data-wb-table="comments" data-wb-size="15" data-wb-sort="date:d" data-wb-where='active = "on" AND (
				(target_form = "{{_ENV[route][form]}}" AND target_item = "{{_ENV[route][item]}}") OR
				(target_form = "comments"))' data-wb-hide="*">
                                    <!--div class="d-flex flex-wrap medium mb-35">
                                    <img class="mr-3 w-50px h-50px rounded-circle" alt="" data-wb-role="thumbnail" size="100px;100px;src" src="/tpl/assets/img/avatars/{{_idx}}.jpg" noimg="http://via.placeholder.com/100x100/53c419/fff">
                                    <div role="where" data='user_id=""' data-wb-hide="*">
                                        <meta role="variable" var="name" value="{{name}}">
                                    </div>
                                    <div class="align-self-center">
                                        <div class="font-weight-bold">{{_VAR[name]}}</div>
                                        <div>{{date}}</div>
                                    </div>

                                    <div class="text-warning ml-auto">
                                        <span class="comment-rating"><input type="hidden" readonly class="rating" value="{{rating}}"></span>
                                    </div>

                                    <div class="w-100 mt-3">
                                        {{text}}
                                    </div>
                                </div--></div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters border border-light border-top-0">
                        <div class="col-12 p-35">
                            <div class="large mb-20 mb-lg-35 text-primary">{{_VAR[str_interest]}}</div>
                            <div class="container-fluid px-0" data-wb-role="foreach" data-wb-table="products" data-wb-limit="1" data-wb-rand="true" data-wb-where='category="devices" AND active="on" AND id<>"{{id}}" AND id<>"sim"' data-wb-hide="wb">
                                <div class="row no-gutters border border-light bg-lighter">
                                    <div class="col-12 col-lg-3 px-20 px-md-100 px-lg-20 py-20"> <img src="/uploads/products/{{id}}/{{images[0][img]}}" class="img-fluid" alt="{{lang[{{_VAR[lang]}}][name]}}"> </div>
                                    <div class="col-12 col-lg-6 p-30">
                                        <h5 class="text-dark">{{lang[{{_VAR[lang]}}][name]}}</h5>
                                        <div>{{lang[{{_VAR[lang]}}][data][text_short]}}</div>
                                    </div>
                                    <div class="col-12 col-lg-3 product-addition-wrapper">
                                        <div class="text-center text-secondary product-price py-3 py-lg-35 product-addition-price"> {{_VAR[ico_currency]}}{{apr[{{_VAR[lang]}}]}} </div>
                                        <div class="text-center py-3 py-lg-35"> <a href="/products/{{_furl}}" class="text-primary">{{_VAR[btn_more]}}</a> </div> <a href="/products/{{_furl}}" class="btn btn-primary btn-block rounded-0 product-addition-button mt-auto">{{_VAR[btn_buy]}}</a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <div data-wb-append="body" class="modal fade" id="modal_product_info" tabindex="-1" role="dialog" aria-labelledby="modal_product_info_title" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_product_info_title"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                </div>
                <div class="modal-body"> </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">{{_VAR[btn_close]}}</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://widget.cloudpayments.ru/bundles/cloudpayments"></script>
    <div data-wb-role="include" src="/tpl/banners.inc.php" data-wb-hide="*"></div>
</div>