<div data-wb-role="include" src="/tpl/wrapper.inc.php" data-wb-hide="*"></div>
<div data-wb-hide="*" data-wb-append="#wrapper">
<nav class="extra-nav py-20" role="include" src="/tpl/breadcrumb.inc.php"></nav>

<main>
    <div class="bg-dark text-white py-40 py-md-60 py-xl-100 page-banner" style="background-image: url(assets/img/business/banner-advertisers.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 col-xl-7">
                    <h1 class="h2 text-white mb-30 mb-md-40">{{lang[{{_VAR[lang]}}][data][header]}}</h1>
                </div>

                <div class="col-12"></div>

                <div class="col-12 col-md-5 mb-30 mb-md-0 large">
                    <include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="p:nth-child(1)"></include>
                </div>

                <div class="col-12 col-md-7 font-weight-normal large">
                    <p class="mb-3 card-text">
                    <include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="p:nth-child(2)"></include>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-light text-dark">
        <div class="container py-40">
            <div class="row">
                <section class="col-12">
                </section>

                <div class="col-12 col-lg-6 mb-40 mb-lg-0">
                    <h5 class="underline-left text-dark mb-lg-40"><include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="p:nth-child(3)"></include></h5>
                </div>

                <div class="col-12 col-lg-6">
                    <include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="p:nth-child(4)"></include>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-lighter text-dark pt-40 pt-md-60">
        <div class="container">
            <h2 class="h1 text-dark mb-40"><include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="h2:nth-child(5)"></include></h2>

            <div class="row">
                <div class="col-12 col-md-6 mb-40 mb-md-60">
                    <ul class="list-colored child-mb-lg-20">
                        <include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="ul:nth-child(6)"></include>
                    </ul>
                </div>

                <div class="col-12 col-md-6 mb-40 mb-md-60">
                    <ul class="list-colored child-mb-lg-20">
                        <include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="ul:nth-child(8)"></include>
                    </ul>

                    <div class="h3 mt-40"><include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="h3:nth-child(9)"></include></div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-light text-dark">
        <div class="container pt-40 pt-lg-60 pb-30">

            <div class="row align-items-stretch">
                <div class="col-12 col-xl-7">
                    <h2 class="h1 text-dark mb-20 mb-lg-60"><include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="h2:nth-child(10)"></include></h2>
                </div>

                <div class="col-12"></div>
                
                <div role="foreach" data-wb-count="7" data-wb-hide="*">
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-30">
                    <div class="card card-hover card-shadow h-100">
                        <img src="/tpl/assets/img/business/images/{{_ndx}}.jpg" alt="" class="card-img-top">
                        <div class="card-body py-3 px-20 px-md-30" data-wb-role="formdata" data-wb-form="pages" data-wb-item="{{_ENV[route][item]}}" data-wb-hide="wb">
                            <div class="font-weight-normal"><include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="ul:nth-child(11) li:nth-child({{%_ndx}})"></include></div>
                        </div>
                    </div>
                </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-30">
                    <div class="card card-hover card-shadow">
                        <img src="http://via.placeholder.com/270x150/e8f0f5/f2f7fa?text=%2B" alt="" class="card-img-top">
                        <div class="card-body py-3 px-20 px-md-30">
                            <div class="font-weight-normal"><include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="ul:nth-child(11) li:last-child"></include></div>
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