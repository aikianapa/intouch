<div data-wb-role="include" src="/tpl/wrapper.inc.php" data-wb-hide="*"></div>

<div data-wb-hide="*" data-wb-append="#wrapper">
<nav class="extra-nav py-20" role="include" src="/tpl/breadcrumb.inc.php"></nav>

<main>
    <section class="py-40 py-md-60">
        <div class="container">
            <h1 class="h2 underline-center">{{lang[{{_VAR[lang]}}][data][header]}}</h1>
            <div class="text-secondary text-center mb-40 mb-md-60">{{lang[{{_VAR[lang]}}][data][footer]}}</div>

            <div class="row" data-wb-role="foreach" data-wb-table="news" data-wb-where='active="on" AND article="on"' data-wb-sort="date:d" data-wb-size="6">
                <section class="col-12 col-md-6 col-lg-4 mb-40">
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

            <nav class="custom-pagination mt-20">
                <div><a href="#" class="custom-pagination-prev">{{_VAR[btn_prev]}}</a></div>

                <div class="custom-pagination-pages">
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                </div>

                <div><a href="#" class="custom-pagination-next">{{_VAR[btn_next]}}</a></div>
            </nav>
        </div>
    </section>
</main>

<div data-wb-role="include" src="/tpl/banners.inc.php" data-wb-hide="*"></div>
</div>
