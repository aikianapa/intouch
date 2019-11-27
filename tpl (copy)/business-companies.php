<div data-wb-role="include" src="/tpl/wrapper.inc.php" data-wb-hide="*"></div>
<div data-wb-hide="*" data-wb-append="#wrapper">
<nav class="extra-nav py-20" role="include" src="/tpl/breadcrumb.inc.php"></nav>
<main>
    <div class="text-dark py-40 py-md-60 py-xl-100 page-banner" style="background-image: url(assets/img/business/banner-companies.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 col-xl-7">
                    <h1 class="h2 text-white mb-30 mb-md-0">{{lang[{{_VAR[lang]}}][data][header]}}</h1>
                </div>

                <div class="col-12"></div>

                <div class="col-12 col-md-6 mb-30 mb-md-0 pt-0 pt-md-60 large">
                    <div class="lead text-white font-weight-normal mb-0"><include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="p:nth-child(1)"></include></div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-light text-dark">
        <div class="container py-40">
            <div class="row">
                <section class="col-12">
                    <h5 class="underline-left text-dark mb-lg-40"><include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="h2:nth-child(2)"></include></h5>
                </section>

                <div class="col-12 col-lg-6 mb-40 mb-lg-0">

                    <div class="card card-shadow">
                        <div class="card-body p-20 p-md-35">
                            <h3 class="text-business-dark mb-20 mb-md-40"><include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="h3:nth-child(3)"></include></h3>

                            <ul class="list-colored child-mb-lg-20">
                                <include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="ul:nth-child(4)"></include>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="p:nth-child(5)"></include>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-business-dark text-white pt-40 pt-md-60">
        <div class="container">
            <h2 class="h1 text-white mb-40"><include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="h2:nth-child(6)"></include></h2>

            <div class="row">
                <div class="col-12 col-md-6 mb-md-60">
                    <ul class="list-colored child-mb-lg-20 mb-0">
                        <include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="ul:nth-child(7)"></include>
                    </ul>
                </div>

                <div class="col-12 col-md-6 mb-40 mb-md-60">
                    <ul class="list-colored child-mb-lg-20 mb-0">
                        <include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="ul:nth-child(9)"></include>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-light text-dark">
        <div class="container pt-40 pt-lg-60 pb-30">
            <h2 class="h1 text-dark mb-20 mb-lg-60"><include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="h2:nth-child(10)"></include></h2>

            <div class="row align-items-stretch" data-wb-role="foreach" data-wb-count="4" data-wb-hide="wb">
                <div class="col-12 col-lg-6 mb-30">
                    <div class="card card-hover card-shadow" data-wb-role="formdata" data-wb-form="pages" data-wb-item="{{_ENV[route][item]}}" data-wb-hide="wb">
                        <div class="card-body p-20 p-md-35 d-flex align-items-center">
                            <div class="larger mr-40 text-light">{{%_ndx}}</div>
                            <div class="h5 mb-0 text-dark"><include data-wb-from="lang[{{_VAR[lang]}}][data][text]" innerHtml="ol:nth-child(11) li:nth-child({{%_ndx}})"></include></div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</main>
<div data-wb-role="include" src="/tpl/business-footer.php" data-wb-hide="*"></div>
<div data-wb-role="include" src="/tpl/banners.inc.php" data-wb-hide="*"></div>
</div>
