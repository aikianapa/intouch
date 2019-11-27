<div data-wb-role="include" src="/tpl/wrapper.inc.php" data-wb-hide="*"></div>

<div data-wb-hide="*" data-wb-append="#wrapper">
<nav class="extra-nav py-20" role="include" src="/tpl/breadcrumb.inc.php"></nav>

<main>
    <div class="bg-lighter py-40 py-md-60">
        <div class="container">
            <div class="mb-30">
                {{datetime}} <!--| {{author}} | {{category}}-->
                <!--div class="text-primary d-md-inline-block ml-md-40">
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star-half-o"></span>
                    <span class="fa fa-star-o"></span>
                </div-->
            </div>
            <div class="row">
                <div class="col-12 col-lg-8 mb-40">
                    <h1 class="h2 text-dark mb-40">{{lang[{{_VAR[lang]}}][data][header]}}</h1>
                    <p class="large">{{lang[{{_VAR[lang]}}][data][text]}}</p>
                </div>

                <aside class="col-12 col-lg-4">
                    <section class="card card-product mb-40 mb-md-60" data-wb-role="foreach" data-wb-table="products" data-wb-where='active="on" AND category="devices"' data-wb-limit="1" data-wb-rand="true">
                        <div class="card-body p-20 p-sm-40 p-lg-20 p-xl-40">
                            <div class="product-label text-white bg-danger mt-20 mt-sm-40 mt-lg-20 mt-xl-40 pl-20 pl-sm-40 pl-lg-20 pl-xl-40" style="z-index:1;">{{lang[{{_VAR[lang]}}][data][hint]}}</div>

                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-12">
                                    <a href="/products/{{_furl}}">
                                      <img src="/uploads/products/{{id}}/{{images[0][img]}}" class="img-fluid mb-20 mb-md-0 mb-lg-20" alt="{{lang[{{_VAR[lang]}}][data][header]}}">
                                    </a>
                                </div>

                                <div class="col-12 col-md-6 col-lg-12">
                                    <h6 class="text-uppercase text-secondary font-weight-bold mb-20">{{lang[{{_VAR[lang]}}][name]}}</h6>

                                    <hr>

                                    <div class="text-primary">
                                        <p class="text-secondary">{{lang[{{_VAR[lang]}}][data][descr]}}</p>
                                        <p>{{lang[{{_VAR[lang]}}][data][short]}}</p>
                                    </div>

                                    <hr>

                                    <div class="clearfix mb-30">
                                        <div class="text-secondary float-left"><span class="product-price-from">{{_VAR[str_from]}}</span> <span class="product-price text-strike">
                                            {{_VAR[ico_currency]}}{{opr[{{_VAR[lang]}}]}}
                                        </span></div>
                                        <div class="text-danger float-right"><span class="product-price">
                                            {{_VAR[ico_currency]}}{{apr[{{_VAR[lang]}}]}}
                                        </span></div>
                                    </div>

                                    <a href="/products/{{_furl}}" class="btn btn-outline-primary d-block">{{_VAR[btn_buy]}}</a>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section>
                        <h3 class="mb-40" data-wb-role="formdata" data-wb-form="pages" data-wb-item="articles" data-wb-hide="wb">{{lang[{{_VAR[lang]}}][data][header]}}</h3>

                        <div class="row"  data-wb-role="foreach" data-wb-table="news" data-wb-where='active="on" AND article="on"' data-wb-rand="true" data-wb-limit="2">
                            <section class="col-12 col-md-6 col-lg-12 mb-40">
                                <div class="position-relative mb-30">
                                    <img data-wb-role="thumbnail" size="570px;300px;src" src="/uploads/news/{{id}}/{{image[0][img]}}" class="img-fluid" alt="{{lang[{{_VAR[lang]}}][data][header]}}">
                                    <div class="post-date">
                                        <div class="post-date-day">{{day}}</div>
                                        <div class="post-date-month">{{month}}</div>
                                    </div>
                                    <!--div class="post-type">History</div-->
                                </div>

                                <h5 class="text-dark mb-20 owf-ellipsis">{{lang[{{_VAR[lang]}}][data][header]}}</h5>
                                <div class="text-dark mb-20"  style="height:190px;overflow:hidden;">{{short}}</div>

                                <a href="/article/{{_furl}}" class="font-weight-normal">{{_VAR[btn_read]}}</a>
                            </section>
                        </div>
                    </section>
                </aside>
            </div>

            <nav class="custom-pagination mt-20">
                <div><a href="/article/{{pag[prev]}}" class="custom-pagination-prev">{{_VAR[btn_prev]}}</a></div>

                <div>
                    <a href="/articles">{{_VAR[btn_back]}}</a>
                </div>

                <div><a href="/article/{{pag[next]}}" class="custom-pagination-next">{{_VAR[btn_next]}}</a></div>
            </nav>
        </div>
    </div>
</main>

<div data-wb-role="include" src="/tpl/banners.inc.php" data-wb-hide="*"></div>
</div>