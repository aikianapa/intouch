<div data-wb-role="include" src="/tpl/wrapper.inc.php" data-wb-hide="*"></div>
<div data-wb-hide="*" data-wb-append="#wrapper">
<nav class="extra-nav py-20" role="include" src="/tpl/breadcrumb.inc.php"></nav>
<div role="formdata" data-wb-form="orders" data-wb-item="{{_POST[inv_id]}}" data-wb-hide="*">
    <meta data-wb-hide="*" role="variable" var="order_email" value="{{email}}">
    <meta data-wb-hide="*" role="variable" var="order_payment" value="{{payment}}">
</div>

<main>
    <section class="py-40 py-md-60">
        <div class="container">
            <h1 class="h2 mb-40 text-center" role="where" data='"{{_VAR[order_payment]}}"<>"online"'>{{lang[{{_VAR[lang]}}][data][header]}}</h1>
            <h2 class="mb-40 text-center" role="where" data='"{{_VAR[order_payment]}}"="online"'>{{lang[{{_VAR[lang]}}][data][footer]}}</h2>

            <div class="text-center mb-40">
                <img src="assets/img/delivery/icon-success.png" class="img-fluid mb-3" alt="Success">

                <p class="large font-weight-normal"><include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="h3:nth-child(1)"></include></p>
                <p class="small mb-0 font-weight-light"><include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="p:nth-child(2)"></include></p>
                <p class="small mb-35 font-weight-normal">{{_VAR[order_email]}}</p>
                <p class="mb-35"><a href="/cabinet" class="btn btn-primary"><include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="button"></include></a></p>
                <p class="large font-weight-normal"><include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="h3:nth-child(3)"></include></p>
            </div>

            <div class="row justify-content-center text-center small font-weight-normal">
                <div class="col-12 col-sm-6 col-md-3 mb-30">
                    <img src="assets/img/delivery/box.png" class="img-fluid mb-3" alt="">
                    <div><include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="ul:nth-child(4) li:nth-child(1)"></include></div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 mb-30">
                    <img src="assets/img/delivery/truck.png" class="img-fluid mb-3" alt="">
                    <div><include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="ul:nth-child(4) li:nth-child(2)"></include></div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 mb-30">
                    <img src="assets/img/delivery/mailbox.png" class="img-fluid mb-3" alt="">
                    <div><include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="ul:nth-child(4) li:nth-child(3)"></include></div>
                </div>
            </div>

            <div class="text-center">
                <a href="/products" class="btn btn-secondary">{{_VAR[btn_back]}}</a>
            </div>
        </div>
    </section>
</main>

<div data-wb-role="include" src="/tpl/banners.inc.php" data-wb-hide="*"></div>
</div>