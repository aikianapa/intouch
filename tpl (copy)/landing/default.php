<div data-wb-role="include" src="/tpl/landing/tpl/header_landing.php" data-wb-hide="*"></div>

<div class="landing-banner page-banner" style="background-image: url(assets/img/landing/landing-header-bg.jpg);">
    <div class="container">
        <div class="row py-100">
            <div class="col-12 col-sm-6 offset-sm-6 mt-xl-100">
                <h1 class="font-weight-bold text-uppercase mb-20 mt-lg-60 mt-xl-100">
                    {{lang[{{_VAR[lang]}}][data][header]}}
                </h2>

                <p class="large font-weight-medium mb-40">
                    {{lang[{{_VAR[lang]}}][data][footer]}}
                </p>

                <div class="mt-40">
                    <a href="#sim" class="btn btn-darker px-40  scroll-to">{{_VAR[btn_go]}}</a>
                </div>
            </div>
        </div>
    </div>
</div>

<aside class="bg-light text-dark">
    <div class="container pt-40 pt-md-60">
        <div class="row">
            <section class="col-12 col-md-10 col-lg-8 col-xl-6">
                <h2 class="h1 font-weight-bold text-uppercase text-muted mb-40 mb-md-60">
                    <include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="div:eq(0) > h2:eq(0)"></include>
                </h2>
            </section>
        </div>

        <div class="row">
            <section class="col-12 col-md-4 mb-40 mb-md-60">
                <h5 class="underline-left text-dark"><include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="div:eq(0) > h5:eq(0)"></include></h5>
                <div><include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="div:eq(0) > p:eq(0)"></include></div>
            </section>

            <section class="col-12 col-md-4 mb-40 mb-md-60">
              <h5 class="underline-left text-dark"><include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="div:eq(0) > h5:eq(1)"></include></h5>
              <div><include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="div:eq(0) > p:eq(0)"></include></div>
            </section>

            <section class="col-12 col-md-4 mb-40 mb-md-60">
              <h5 class="underline-left text-dark"><include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="div:eq(0) > h5:eq(2)"></include></h5>
              <div><include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="div:eq(0) > p:eq(0)"></include></div>
            </section>
        </div>
    </div>
</aside>

<main>
    <section id="sim" data-scroll-offset="100" class="bg-lighter pt-40 pt-md-60">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 mb-40 mb-lg-60">
                    <p class="large font-weight-medium mb-20"><include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="div:eq(1) > p:eq(0)"></include></p>

                    <h2 class="h1 font-weight-bold text-uppercase mb-20"><include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="div:eq(1) > h2:eq(0)"></include></h2>

                    <p class="large font-weight-medium mb-40"><include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="div:eq(1) > p:eq(1)"></include></p>

                    <div class="row align-items-center">
                        <div class="col-12 col-sm-6 mb-20 mb-sm-0 text-center text-lg-left">
                            <img src="assets/img/landing/qr.png" class="img-fluid" width="150" height="150" alt="">
                        </div>
                        <a href="#" class="col-12 col-sm-6 d-flex align-items-center justify-content-center justify-content-sm-start">
                            <span class="fa fa-3x fa-weixin text-primary mr-2"></span>
                            <span class="text-secondary font-weight-medium large line-height-1">Go to<br> WeChat</span>
                        </a>
                    </div>
                </div>


                <div data-wb-role="foreach" data-wb-table="pages" data-wb-where='id like "landing-prod-" AND active="on"' data-wb-hide="*">
                <section class="col-12 col-md-6 col-lg-4 mb-40 mb-lg-60">
                    <div class="card card-shadow-light">
                        <div class="card-body p-20 p-sm-40 p-lg-20 p-xl-40">
                            <div class="position-relative xsmall text-darker text-uppercase">{{lang[{{_VAR[lang]}}][data][footer]}}</div>

                            <div class="mb-20 text-center">
                                <a href="/product-phone.php"><img src="assets/img/landing/sim{{_ndx}}.png" alt="lang[{{_VAR[lang]}}][data][header]" height="240"></a>
                            </div>

                            <div class="text-primary">
                                <p class="text-darker"><include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="ul li:eq(0)"></include></p>
                                <p class="text-darker"><include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="ul li:eq(1)"></include></p>
                            </div>

                            <hr>

                            <div class="clearfix mb-30">
                                <div class="text-secondary float-left"><span class="product-price-from">{{_VAR[str_from]}}</span> <span class="product-price text-strike">
                                    <include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="p:eq(0)"></include>
                                </span></div>
                                <div class="text-danger float-right"><span class="product-price">
                                    <include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="p:eq(1)"></include>
                                </span></div>
                            </div>

                            <a href="/product-phone.php" class="btn btn-outline-primary d-block">{{_VAR[btn_buy]}}</a>
                        </div>
                    </div>
                </section>
                </div>
            </div>
        </div>
    </section>

    <section id="assistance" data-scroll-offset="100" class="bg-light pt-40 pt-md-60 page-banner" style="background-image: url(assets/img/landing/24-7.png);">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 mb-40 mb-md-60">
                    <h2 class="h1 font-weight-bold text-uppercase mb-20"><include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="div:eq(2) > h2:eq(0)"></include></h2>

                    <p class="large font-weight-medium mb-40"><include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="div:eq(2) > p:eq(0)"></include></p>
                    <p class="mb-2"><include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="div:eq(2) > p:eq(1)"></include></p>
                    <p class="mb-2"><include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="div:eq(2) > p:eq(2)"></include></p>
                    <p class="mb-2"><include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="div:eq(2) > p:eq(3)"></include></p>
                    <p class="mb-2"><include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="div:eq(2) > p:eq(4)"></include></p>
                    <p class="mb-2"><include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="div:eq(2) > p:eq(5)"></include></p>

                    <div class="mt-40">
                        <a href="#help" class="scroll-to btn btn-darker px-40">{{_VAR[btn_go]}}</a>
                    </div>
                </div>

                <div class="col-12 col-md-6 mb-40 mb-md-60 text-center">
                    <img src="assets/img/landing/assistance.png" class="img-fluid" alt="On-line Support 24/7 Foreign Tourist">
                </div>
            </div>
        </div>
    </section>

    <section id="help" data-scroll-offset="100" class="bg-lighter pt-40 pt-md-60">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 mb-40 mb-md-60">
                    <h2 class="h1 font-weight-bold text-uppercase mb-20"><include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="div:eq(3) > h2:eq(0)"></include></h2>

                    <p class="large font-weight-medium mb-40"><include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="div:eq(3) > p:eq(0)"></include></p>
                    <p class="mb-2"><include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="div:eq(3) > p:eq(1)"></include></p>
                    <p class="mb-2"><include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="div:eq(3) > p:eq(2)"></include></p>

                    <div class="mt-40">
                        <a href="#video" class="scroll-to btn btn-darker px-40">{{_VAR[btn_go]}}</a>
                    </div>
                </div>

                <div class="col-12 col-md-6 mb-40 mb-md-60 text-center">
                    <img src="assets/img/landing/help.png" class="img-fluid" alt="Quick assistance to foreign tourists">
                </div>
            </div>
        </div>
    </section>

    <div id="video" data-scroll-offset="100"  class="bg-darker py-40 py-md-60">
        <div class="container">
            <div class="row align-content-lg-stretch medium text-white">
                <div class="col-12 col-lg-6 mb-40 mb-lg-0 order-lg-2">
                    <div class="embed-responsive embed-responsive-16by9">
                        <include data-wb-from="lang[{{_VAR[lang]}}][data][text]" outerhtml="div:eq(4) iframe">
                    </div>
                </div>

                <div class="col-12 col-lg-3 order-lg-1 d-flex flex-column justify-content-lg-between">
                    <div>
                        <div class="text-right"><img src="assets/img/arrows/tr.png" alt="THE WORLD CUP 2018 IN RUSSIA" class="d-none d-lg-inline-block mb-2" height="60"></div>
                        <div class="mb-20 mb-lg-0"><include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="div:eq(4) > p:eq(0)"></include></div>
                    </div>
                    <div>
                        <div class="mb-20 mb-lg-0"><include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="div:eq(4) > p:eq(1)"></include></div>
                        <div class="text-right"><img src="assets/img/arrows/dr.png" alt="ON-LINE SUPPORT 24/7 FOREIGN TOURIST" class="d-none d-lg-inline-block" height="60"></div>
                    </div>
                </div>

                <div class="col-12 col-lg-3 order-lg-3 d-flex flex-column justify-content-lg-between">
                    <div>
                        <div><img src="assets/img/arrows/tl.png" alt="RUSSIA DATA SIM CARD" class="d-none d-lg-inline-block mb-2" height="60"></div>
                        <div class="mb-20 mb-lg-0"><include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="div:eq(4) > p:eq(2)"></include></div>
                    </div>
                    <div>
                        <div class="mb-20 mb-lg-0"><include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="div:eq(4) > p:eq(3)"></include></div>
                        <div><img src="assets/img/arrows/dl.png" alt="QUICK ASSISTANCE TO FOREIGN TOURISTS" class="d-none d-lg-inline-block" height="60"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="contact" data-scroll-offset="100" class="bg-lighter pt-40 pt-md-60">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 mb-40 mb-md-60">
                    <h2 class="h1 font-weight-bold text-uppercase mb-20"><include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="div:eq(5) > h2"></include></h2>

                    <p class="large font-weight-medium mb-40"><include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="div:eq(5) > p:eq(0)"></include></p>

                    <div class="large mb-2">
                        <span class="text-primary mt-1 float-left fa fa-fw fa-lg fa-phone"></span> <div class="ml-55"><include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="div:eq(5) > p:eq(1)"></include></div>
                    </div>
                    <div class="large mb-2">
                        <span class="text-primary mt-1 float-left fa fa-fw fa-lg fa-envelope"></span> <div class="ml-55"><include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="div:eq(5) > p:eq(2)"></include></div>
                    </div>
                    <div class="large mb-2">
                        <span class="text-primary mt-1 float-left fa fa-fw fa-lg fa-map-marker"></span> <div class="ml-55"><include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="div:eq(5) > p:eq(3)"></include></div>
                    </div>
                </div>

                <div class="col-12 col-md-6 mb-40 mb-md-60 text-center">
                    <img src="assets/img/landing/contact.png" class="img-fluid" alt="Contact us">
                </div>
            </div>
        </div>
    </section>

    <div data-wb-role="include" src="/tpl/landing/tpl/advertizing-banner.php" data-wb-hide="*"></div>
</main>

<div data-wb-role="include" src="/tpl/landing/tpl/footer_landing.php" data-wb-hide="*"></div>
