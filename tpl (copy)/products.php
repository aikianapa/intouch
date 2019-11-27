<div data-wb-role="include" src="/tpl/wrapper.inc.php" data-wb-hide="*"></div>
<div data-wb-hide="*" data-wb-append="#wrapper">
<nav class="extra-nav py-20" role="include" src="/tpl/breadcrumb.inc.php"></nav>

<main>
    <section class="bg-lighter py-40 py-md-60">
        <div class="container">
            <h1 class="h2 underline-center">{{lang[{{_VAR[lang]}}][data][header]}}</h1>
            <div class="text-secondary text-center mb-40 mb-md-60">{{lang[{{_VAR[lang]}}][data][footer]}}</div>

            <div>
                {{lang[{{_VAR[lang]}}][data][text]}}
            </div>

            <div data-wb-role="include" src="/tpl/products.inc.php" data-wb-hide="*"></div>

            <div class="text-center mb-40"  role="formdata" data-wb-table="pages" data-wb-item="products_stars" data-wb-field="lang[{{_VAR[lang]}}][data]">
                <div>{{text}}</div>
            </div>
        </div>
    </section>
</main>

<div data-wb-role="include" src="/tpl/banners.inc.php" data-wb-hide="*"></div>
</div>