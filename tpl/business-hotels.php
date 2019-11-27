<div data-wb-role="include" src="/tpl/wrapper.inc.php" data-wb-hide="*"></div>
<div data-wb-hide="*" data-wb-append="#wrapper">
<nav class="extra-nav py-20" role="include" src="/tpl/breadcrumb.inc.php"></nav>

<main>
    <div class="text-white py-40 py-md-60 py-xl-100 page-banner" style="background-image: url(assets/img/business/banner-hotels.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 col-xl-6">
                    <h1 class="h2 text-white mb-30 mb-md-40">{{lang[{{_VAR[lang]}}][data][header]}}</h1>
                </div>

                <div class="col-12"></div>

                <div class="col-12 col-md-6 mb-30 mb-md-0 large">
                    <include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="p:nth-child(1)"></include>
                </div>

                <div class="col-12 col-md-6 large">
                    <include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="p:nth-child(2)"></include>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-light text-dark">
        <div class="container pt-40">
            <div class="row">
                <section class="col-12 col-lg-6">
                    <h5 class="underline-left text-dark mb-lg-40"><include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="ul li:nth-child(1)"></include></h5>
                </section>

                <section class="col-12 col-lg-6">
                    <div class="mb-40"><include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="ul li:nth-child(2)"></include></div>
                </section>
            </div>
        </div>
    </div>

    <div class="bg-lighter py-40 py-md-60">
        <div class="container">
            <div class="row align-items-stretch" data-wb-role="foreach" data-wb-count="9" data-wb-step="3" data-wb-tpl="false" data-wb-hide="wb">
                <meta role="variable" var="ndx" value="{{_ndx}}" data-wb-hide="*">
                <section class="col-12 col-md-6 col-lg-4 mb-40">
                    <div class="card card-hover card-shadow bg-white">
                        <div class="card-body pt-20 px-35 pb-35" data-wb-role="formdata" data-wb-form="pages" data-wb-item="{{_ENV[route][item]}}" data-wb-hide="wb">
                    
                        <include data-wb-from="lang[{{_VAR[lang]}}][data][text]" outerHtml="ol li:nth-child({{_VAR[ndx]}}) img"></include>
                        <h5 class="card-title text-dark my-20">
                            <include data-wb-from="lang[{{_VAR[lang]}}][data][text]" innerHtml="ol li:nth-child({{_VAR[ndx]}}) strong"></include>
                        </h5>
                            <p class="card-text"><include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="ol li:nth-child({{_VAR[ndx]}}) p"></include></p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</main>

<div data-wb-role="include" src="/tpl/business-footer.php" data-wb-hide="*"></div>
<div data-wb-role="include" src="/tpl/banners.inc.php" data-wb-hide="*"></div>
</div>