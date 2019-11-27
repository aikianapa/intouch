<div data-wb-role="include" src="/tpl/wrapper.inc.php" data-wb-hide="*"></div>
<div data-wb-hide="*" data-wb-append="#wrapper">
<nav class="extra-nav py-20" role="include" src="/tpl/breadcrumb.inc.php">
</nav>
<div class="container py-40">
            <h1>{{lang[{{_VAR[lang]}}][name]}}</h1>
            
</div>
    
    <section>
        <div class="container">
            <h2 data-wb-where='"{{_VAR[lang]}}"="rus"'>Продукция</h2>
            <h2 data-wb-where='"{{_VAR[lang]}}"<>"rus"'>Products</h2>
            
            <ul class="text-secondary text-left mb-40 mb-md-60" data-wb-role="foreach" data-wb-table="products" data-wb-sort="sort" data-wb-where='category="devices" AND active="on"' data-wb-tpl="false" data-wb-hide="wb">
                <meta data-wb-role="variable" var="header" value="{{lang[{{_VAR[lang]}}][data][header]}}">
                <li>
                    <a href="/{{id}}">{{lang[{{_VAR[lang]}}][name]}}</a>
                </li>
            </ul>
        </div>
    </section>

    <section>
        <div class="container">
            <h2 data-wb-where='"{{_VAR[lang]}}"="rus"'>Страницы</h2>
            <h2 data-wb-where='"{{_VAR[lang]}}"<>"rus"'>Pages</h2>
            <ul class="text-secondary text-left mb-40 mb-md-60" data-wb-role="foreach" data-wb-table="pages" data-wb-sort="id" data-wb-where='active="on"' data-wb-tpl="false" data-wb-hide="wb">
                <meta data-wb-role="variable" var="header" value="{{lang[{{_VAR[lang]}}][data][header]}}">
                <li>
                    <a href="/{{id}}">{{_VAR[header]}}</a>
                </li>
            </ul>
        </div>
    </section>

    <section>
        <div class="container">
            <h2 data-wb-where='"{{_VAR[lang]}}"="rus"'>Статьи</h2>
            <h2 data-wb-where='"{{_VAR[lang]}}"<>"rus"'>Articles</h2>
            <ul class="text-secondary text-left mb-40 mb-md-60" data-wb-role="foreach" data-wb-table="news" data-wb-sort="header" data-wb-where='active="on" AND article="on"' data-wb-tpl="false" data-wb-hide="wb">
                <meta data-wb-role="variable" var="header" value="{{lang[{{_VAR[lang]}}][data][header]}}">
                <li>
                    <a href="/article/{{_furl}}">{{_VAR[header]}}</a>
                </li>
            </ul>
        </div>
    </section>
    
</div>