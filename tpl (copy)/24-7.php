<div data-wb-role="include" src="/tpl/wrapper.inc.php" data-wb-hide="*"></div>

<div data-wb-hide="*" data-wb-append="#wrapper">
<div class="header-banner" style="background-image: url(assets/img/support-header.jpg)"></div>

<main>
    <div class="bg-lighter pt-40 pt-md-60">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-9">
                    <h1 class="h2 font-weight-medium mb-0">{{lang[{{_VAR[lang]}}][data][header]}}</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="bg-lighter pt-40 pt-md-60">
        <div class="container">
            <div class="border border-light-blue p-20 p-md-40 p-lg-60">
                <div class="row">
                    <div class="col-12 col-lg-9">
                        <h4 class="text-business-dark">
                            <include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="h4:nth-child(1)"></include>
                        </h4>
                    </div>
                </div>

                <ul class="mt-30 mb-0 list-dash child-mb-20">
                    <include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="ul:nth-child(2)"></include>
                </ul>
            </div>
        </div>
    </section>

    <div class="bg-lighter pt-40 pt-md-60">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-0 mb-40 mb-lg-60">
                  <img class="img-fluid" src="./assets/img/video_support.png">
                    <!--div class="embed-responsive embed-responsive-16by9">
                        <iframe src="https://www.youtube.com/embed/jisiVhRIjW8" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                    </div-->
                </div>

                <div class="col-12 col-md-8 offset-md-2 col-lg-4 offset-lg-0 mb-40 mb-md-60">
                    <ul class="mt-0 mt-xl-40 list-checked child-mb-lg-40">
                        <include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="ul:nth-child(4)"></include>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="bg-lighter pb-40 pb-md-60">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7">
                    <div class="border border-light-blue py-40 px-55 font-weight-medium text-business-dark">
                        <include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="p:nth-child(5)"></include>
                    </div>
                </div>
            </div>

            <div class="border-wide border-light-blue box-shadow p-20 p-md-40">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <h4 class="text-business-dark mb-30 font-weight-medium">
                              <include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="h4:nth-child(6)"></include>
                        </h4>

                        <div class="d-flex flex-column flex-sm-row flex-lg-column flex-xl-row justify-content-between">
                            <div class="mb-2 medium">
                              <include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="p:nth-child(7)"></include>
                            </div>
                            <div>
                                <img src="assets/img/app-store-badge.svg" alt="App Store" width="135" class="mb-2 mb-sm-0 mr-20">
                                <img src="assets/img/google-play-badge.svg" alt="Google Play" width="135" class="mb-2 mb-sm-0">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-right">
                    <img src="assets/img/mobile-app.png" alt="Mobile App" class="mobile-app-image">
                </div>

            </div>
        </div>
    </section>

    <section class="bg-light py-40 py-md-60">
        <div class="container">
            <div class="border-wide border-primary p-20 p-md-40 p-lg-60">
                <div class="border-wide-caption bg-light">
                    <include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="h4:nth-child(8)"></include>
                </div>

                <ul class="mb-0 list-dash font-weight-medium">
                    <include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="ul:nth-child(9)"></include>
                </ul>
            </div>
        </div>
    </section>

    <section class="bg-lighter py-40 py-md-60">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7 mb-40 mb-40 mb-lg-0">
                    <h4 class="text-business-dark mt-xl-40 mb-30">
                      <include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="h4:nth-child(10)"></include>
                    </h4>
                    <p><include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="p:nth-child(11)"></include></p>
                    <p><include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="p:nth-child(12)"></include></p>

                    <div class="mt-40">
                        <button type="button" class="btn btn-outline-primary px-40 mr-20">{{_VAR[btn_yes]}}</button>
                        <button type="button" class="btn btn-outline-danger px-35">{{_VAR[btn_no]}}</button>
                    </div>
                </div>

                <div class="col-12 col-lg-5 text-center">
                    <img src="assets/img/insurance-{{_VAR[lang]}}.png" alt="Страхование" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
</main>

<div data-wb-role="include" src="/tpl/banners.inc.php" data-wb-hide="*"></div>
</div>