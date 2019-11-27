<div data-wb-role="include" src="/tpl/wrapper.inc.php" data-wb-hide="*"></div>

<div data-wb-hide="*" data-wb-append="#wrapper">
        <div class="mainpage-banner">
            <p class="text-hide">InTouch</p>
        </div>
        <h1 class="bg-alternative text-white text-center lead p-30 p-lg-40 mb-0">
            {{lang[{{_VAR[lang]}}][data][header]}}
        </h1>

        <aside class="bg-light text-dark">
            <div class="container pt-40">
                <div class="row" data-wb-role="formdata" data-wb-table="pages" data-wb-item="home_subhead" data-wb-field="lang[{{_VAR[lang]}}][data]">
                    <section class="col-12 col-md-4 mb-40">
                        <h5 class="underline-left text-dark">
                            <include data-wb-from="text" innerHtml="h4:eq(0)"></include>
                        </h5>
                        <div>
                            <include data-wb-from="text" innerHtml="p:eq(0)"></include>
                        </div>
                    </section>

                    <section class="col-12 col-md-4 mb-40">
                        <h5 class="underline-left text-dark">
                            <include data-wb-from="text" innerHtml="h4:eq(1)"></include>
                        </h5>
                        <div>
                            <include data-wb-from="text" innerHtml="p:eq(1)"></include>
                        </div>            </section>

                    <section class="col-12 col-md-4 mb-40">
                        <h5 class="underline-left text-dark">
                            <include data-wb-from="text" innerHtml="h4:eq(2)"></include>
                        </h5>
                        <div>
                            <include data-wb-from="text" innerHtml="p:eq(2)"></include>
                        </div>
                    </section>
                </div>
            </div>
        </aside>


            <section class="pt-40 pt-md-60" data-wb-role="formdata" data-wb-table="pages" data-wb-item="home_steps" data-wb-field="lang[{{_VAR[lang]}}][data]">
                <div class="container">
                    <h2 class="underline-center">{{header}}</h2>
                    <div class="text-secondary text-center mb-40 mb-md-60">{{footer}}</div>

                    <div class="row mb-40 mb-md-60">
                        <div class="col-12 col-md-5 mb-30 mb-md-0 mainpage-step-text-1">
                            <h3 class="mt-60"><include data-wb-from="text" innerHtml="h4:eq(0)"></include></h3>
                            <div class="font-expanded"><include data-wb-from="text" innerHtml="p:eq(0)"></include></div>
                        </div>

                        <div class="col-12 col-md-7">
                            <div class="mainpage-step-image-1"></div>
                        </div>
                    </div>

                    <div class="row mb-40 mb-md-60">
                        <div class="col-12 col-md-5 mb-30 mb-md-0 order-md-1 mainpage-step-text-2">
                            <h3 class="mt-60"><include data-wb-from="text" innerHtml="h4:eq(1)"></include></h3>
                            <div class="font-expanded"><include data-wb-from="text" innerHtml="p:eq(1)"></include></div>
                        </div>

                        <div class="col-12 col-md-7">
                            <div class="mainpage-step-image-2"></div>
                        </div>
                    </div>

                    <div class="row mb-40 mb-md-60">
                        <div class="col-12 col-md-5 mb-30 mb-md-0 mainpage-step-text-3">
                            <h3 class="mt-60"><include data-wb-from="text" innerHtml="h4:eq(2)"></include></h3>
                            <div class="font-expanded"><include data-wb-from="text" innerHtml="p:eq(2)"></include></div>
                        </div>

                        <div class="col-12 col-md-7">
                            <div class="mainpage-step-image-3"></div>
                        </div>
                    </div>

                    <div class="row mb-40 mb-md-60">
                        <div class="col-12 col-md-5 mb-30 mb-md-0 order-md-1 mainpage-step-text-4">
                            <h3 class="mt-60"><include data-wb-from="text" innerHtml="h4:eq(3)"></include></h3>
                            <div class="font-expanded"><include data-wb-from="text" innerHtml="p:eq(3)"></include></div>
                        </div>

                        <div class="col-12 col-md-7">
                            <div class="mainpage-step-image-4"></div>
                        </div>
                    </div>
                    
                    <div class="row mb-40 mb-md-60">
                        <div class="col-12 col-md-5 mb-30 mb-md-0 mainpage-step-text-5">
                            <h3 class="mt-60"><include data-wb-from="text" innerHtml="h4:eq(4)"></include></h3>
                            <div class="font-expanded"><include data-wb-from="text" innerHtml="p:eq(4)"></include></div>
                        </div>

                        <div class="col-12 col-md-7">
                            <div class="mainpage-step-image-5"></div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-light py-40 py-md-60" data-wb-role="formdata" data-wb-table="pages" data-wb-item="home_products" data-wb-field="lang[{{_VAR[lang]}}][data]">
                <div class="container">
                    <h2 class="underline-center">{{header}}</h2>
                    <div class="text-secondary text-center mb-40 mb-md-60">{{footer}}</div>

                    <div data-wb-role="include" src="/tpl/products.inc.php" data-wb-hide="*"></div>

                    <div class="text-center mb-40"  data-wb-role="formdata" data-wb-table="pages" data-wb-item="products_stars" data-wb-field="lang[{{_VAR[lang]}}][data]">
                        <div>{{text}}</div>
                    </div>

                    <div class="text-center">
                        <a href="/products" class="btn btn-secondary">{{_VAR[btn_allprod]}}</a>
                    </div>
                </div>
            </section>

            <div data-wb-role="include" src="/tpl/banners.inc.php" data-wb-hide="*"></div>

            <section class="bg-light pt-40 pt-md-60" data-wb-role="formdata" data-wb-table="pages" data-wb-item="home_video" data-wb-field="lang[{{_VAR[lang]}}][data]">
                <div class="container">
                    <h2 class="text-center mb-40 mb-md-60">{{header}}</h2>

                    <div class="row">
                        <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-0 mb-40 mb-lg-60">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe data-wb-where='"{{_VAR[lang]}}"="rus"' src="https://www.youtube.com/embed/_ta-RwWz52A?rel=0&amp;showinfo=0&enablejsapi=1" gesture="media" allow="encrypted-media" frameborder="0" allowfullscreen></iframe>
                                <iframe data-wb-where='"{{_VAR[lang]}}"="eng"' src="https://www.youtube.com/embed/jisiVhRIjW8?rel=0&amp;showinfo=0&enablejsapi=1" gesture="media" allow="encrypted-media" frameborder="0" allowfullscreen></iframe>
                                <iframe data-wb-where='"{{_VAR[lang]}}"="chi"' src="https://www.youtube.com/embed/UgTAUvfUGGs?rel=0&amp;showinfo=0&enablejsapi=1" gesture="media" allow="encrypted-media" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>

                        <div class="col-12 col-md-8 offset-md-2 col-lg-4 offset-lg-0 mb-40 mb-md-60">

                            <ul class="mt-0 mt-lg-30 list-checked child-mb-30">
                                <include data-wb-from="text" innerHtml="ul"></include>
                            </ul>

                            <div class="text-center">
                                <a href="/products" class="btn btn-outline-primary d-block d-sm-inline-block">{{_VAR[btn_buy]}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="py-40 py-md-60">
                <div class="container">
                    <h2 class="text-center mb-40 mb-md-60" data-wb-role="formdata" data-wb-form="pages" data-wb-item="articles" data-wb-hide="wb">
                        {{lang[{{_VAR[lang]}}][data][header]}}
                    </h2>

                    <div class="row" data-wb-role="foreach" data-wb-table="news" data-wb-where='active="on" AND article="on" AND home="on"' data-wb-sort="date:d" data-wb-limit="2">
                        <section class="col-12 col-md-6 mb-40 mb-md-60">
                            <div class="position-relative mb-30">
                                <img data-wb-role="thumbnail" size="570px;300px;src" src="/uploads/news/{{id}}/{{image[0][img]}}" class="img-fluid" alt="{{lang[{{_VAR[lang]}}][data][header]}}" >
                                <div class="post-date">
                                    <div class="post-date-day">{{day}}</div>
                                    <div class="post-date-month">{{month}}</div>
                                </div>
                            </div>

                            <h5 class="text-dark mb-20">{{lang[{{_VAR[lang]}}][data][header]}}</h5>
                            <div class="text-dark mb-20"  style="height:140px;overflow:hidden;">{{short}}</div>

                            <a href="/article/{{_furl}}" class="font-weight-normal">{{_VAR[btn_read]}}</a>
                        </section>
                    </div>

                    <div class="text-center">
                        <a href="/articles" class="btn btn-secondary">{{_VAR[btn_allarticles]}}</a>
                    </div>
                </div>
            </section>

</div>