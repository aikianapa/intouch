<div data-wb-role="include" src="/tpl/wrapper.inc.php" data-wb-hide="*"></div>
<div data-wb-hide="*" data-wb-append="#wrapper">
<nav class="extra-nav py-20" role="include" src="/tpl/breadcrumb.inc.php">
</nav>

<main>
    <section class="py-40 py-md-60">
        <div class="container">
            <h1 class="h2 mb-40 text-center text-warning">{{lang[{{_VAR[lang]}}][data][header]}}</h1>

            <div class="text-center mb-40">
                <img src="assets/img/delivery/icon-failed.png" class="img-fluid mb-3" alt="Failed">

                <p class="large font-weight-normal"><include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="h3"></p>
                <p class="small mb-0 font-weight-light"><br> <include data-wb-from="lang[{{_VAR[lang]}}][data][text]" html="p"></p>
            </div>

            <div class="text-center">
                <a href="/products" class="btn btn-secondary">{{_VAR[btn_back]}}</a>
            </div>
        </div>
    </section>
</main>

<div data-wb-role="include" src="/tpl/banners.inc.php" data-wb-hide="*"></div>
</div>