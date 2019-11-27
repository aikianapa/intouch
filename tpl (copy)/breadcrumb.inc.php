<meta role="variable" var="breadcrumb" value='[]'>
<span role="formdata" data-wb-table="pages" data-wb-item="products" data-wb-hide="*">
    <meta role="variable" var="str_products" value='{{lang[{{_VAR[lang]}}][name]}}' data-wb-hide="*">
</span>
<span role="formdata" data-wb-table="pages" data-wb-item="articles" data-wb-hide="*">
    <meta role="variable" var="str_articles" value='{{lang[{{_VAR[lang]}}][name]}}' data-wb-hide="*">
</span>

<meta role="variable" var="breadcrumb" value='[{"id":"products","name":"{{_VAR[str_products]}}"}]' data-wb-where='"{{_ENV[route][form]}}"="products"' data-wb-hide="*">
<meta role="variable" var="breadcrumb" value='[{"id":"articles","name":"{{_VAR[str_articles]}}"}]' data-wb-where='"{{_ENV[route][form]}}"="news" AND "{{_ENV[route][uri]}}" like "article"' data-wb-hide="*">
<div class="container">
    <div class="row no-gutters align-items-md-center flex-column flex-md-row"  xmlns:v="http://rdf.data-vocabulary.org/#">
            <ol class="breadcrumb mb-lg-0" role="foreach" data-wb-json='{{_VAR[breadcrumb]}}'>
                <li class="breadcrumb-item" typeof="v:Breadcrumb"><a rel="v:url" property="v:title" href="/{{id}}">{{name}}</a></li>
            </ol>
            <meta role="variable" var="page" value='{{lang[{{_VAR[lang]}}][name]}}'>
            <meta role="variable" var="page" value='404' data-wb-where='"{{_ENV[route][error]}}"="404"'>
            <li class="breadcrumb-item" typeof="v:Breadcrumb" data-wb-prepend=".breadcrumb"><a rel="v:url" property="v:title" href="/" class="text-dark"><i class="fa fa-home"></i></a></li>
            <li typeof="v:Breadcrumb" class="breadcrumb-item active" data-wb-append=".breadcrumb">{{_VAR[page]}}</li>

        <div class="ml-lg-auto d-flex flex-column flex-md-row">
            <div role="where" data='"{{_ENV[route][item]}}"="faqs" OR "{{_ENV[route][item]}}"="lifehacks"' data-wb-hide="*">
                <a rel="v:url" property="v:title" class="extra-nav-link" href="/lifehacks">
                    <span role="formdata" data-wb-table="pages" data-wb-item="lifehacks">{{lang[{{_VAR[lang]}}][data][header]}}</span>
                </a>
                <a rel="v:url" property="v:title" class="extra-nav-link" href="/faqs">
                    <span role="formdata" data-wb-table="pages" data-wb-item="faqs">{{lang[{{_VAR[lang]}}][data][header]}}</span>
                </a>
            </div>
            <div data-wb-role="foreach" data-wb-table="products" data-wb-rand="true" data-wb-where='"{{_ENV[route][form]}}"="products" AND category="devices" AND active="on" AND articul!="sim" AND id<>"{{id}}"' data-wb-hide="*">
                <a rel="v:url" property="v:title" class="extra-nav-link" href="/products/{{_furl}}">{{lang[{{_VAR[lang]}}][name]}}</a>
            </div>

            <div data-wb-where='"{{_ENV[route][item]}}"="tariffs"' data-wb-hide="*">
                <a rel="v:url" property="v:title" class="extra-nav-link" href="/products"><span role="formdata" data-wb-table="pages" data-wb-item="products">{{lang[{{_VAR[lang]}}][name]}}</span></a>
            </div>

            <div data-wb-where='"{{_ENV[route][item]}}"="products"' data-wb-hide="*">
                <a rel="v:url" property="v:title" class="extra-nav-link" href="/tariffs"><span role="formdata" data-wb-table="pages" data-wb-item="tariffs">{{lang[{{_VAR[lang]}}][name]}}</span></a>
            </div>

            
            <div role="where" data='"{{_ENV[route][item]}}" like "business" AND "{{_ENV[route][item]}}"!=="business-hotels-top"' data-wb-hide="*">
                <a rel="v:url" property="v:title" class="extra-nav-link" href="/business-hotels"><span role="formdata" data-wb-table="pages" data-wb-item="business-hotels">{{lang[{{_VAR[lang]}}][name]}}</span></a>
                <a rel="v:url" property="v:title" class="extra-nav-link" href="/business-tourism"><span role="formdata" data-wb-table="pages" data-wb-item="business-tourism">{{lang[{{_VAR[lang]}}][name]}}</span></a>
                <a rel="v:url" property="v:title" class="extra-nav-link" href="/business-advertisers"><span role="formdata" data-wb-table="pages" data-wb-item="business-advertisers">{{lang[{{_VAR[lang]}}][name]}}</span></a>
                <a rel="v:url" property="v:title" class="extra-nav-link" href="/business-companies"><span role="formdata" data-wb-table="pages" data-wb-item="business-companies">{{lang[{{_VAR[lang]}}][name]}}</span></a>
            </div>
            <a href="javascript:history.back()" class="extra-nav-link extra-nav-link-special d-none d-lg-inline"><span class="fa fa-angle-left large mr-2"></span> {{_VAR[btn_back]}}</a>
        </div>
    </div>
</div>
