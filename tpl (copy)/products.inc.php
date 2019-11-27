<meta role="variable" var="where" value='category="devices" AND active="on"' data-wb-where='"{{_ENV[route][item]}}"="products" OR "{{_ENV[route][item]}}"="home"'>
<meta role="variable" var="where" value='category="tarifs" AND active="on"' data-wb-where='"{{_ENV[route][item]}}"="tariffs"'>

<div id="products" class="row mt-60 align-items-stretch" data-wb-role="foreach" data-wb-table="products" data-wb-sort="sort" data-wb-where='{{_VAR[where]}}' data-wb-tpl="false" data-wb-hide="wb">
    <meta role="variable" var="bgcolor" value="bg-success" data-wb-where='"green"="{{lang[{{_VAR[lang]}}][data][hintcolor]}}"'>
    <meta role="variable" var="bgcolor" value="bg-danger" data-wb-where='"red"="{{lang[{{_VAR[lang]}}][data][hintcolor]}}"'>
    <meta role="variable" var="bgcolor" value="bg-info" data-wb-where='"blue"="{{lang[{{_VAR[lang]}}][data][hintcolor]}}"'>
    <meta role="variable" var="bgcolor" value="bg-warning" data-wb-where='"orange"="{{lang[{{_VAR[lang]}}][data][hintcolor]}}"'>
    <meta role="variable" var="link" value="/products/{{_furl}}" data-wb-where='"{{articul}}"!="sim"'>
    <meta role="variable" var="link" value="/tariffs" data-wb-where='"{{articul}}"="sim"'>

    <section class="col-12 col-sm-10 offset-sm-1 col-md-6 offset-md-0 col-lg-4 col-xl-3 mb-40 mb-lg-60">
        <div class="card card-product">
            <div class="position-absolute small text-white {{_VAR[bgcolor]}} py-2 px-20">{{lang[{{_VAR[lang]}}][data][hint]}}&nbsp;</div>

            <div class="row no-gutters my-20">
                <div class="col-9">
                    <a href="{{_VAR[link]}}"><img src="/uploads/products/{{id}}/{{images[0][img]}}" class="img-fluid" alt="{{lang[{{_VAR[lang]}}][name]}}"></a>
                </div>

                <div class="col-3 text-right" data-wb-where='"{{_ENV[route][item]}}"="tariffs"'>
                    <div><img src="assets/img/icons/4g.svg" class="mb-2 mx-20" width="25" alt=""></div>
                    <div><img src="assets/img/icons/phone.svg" class="mb-2 mx-20" width="25" alt=""></div>
                    <div><img src="assets/img/icons/calling.svg" class="mb-2 mx-20" width="25" alt=""></div>
                    <div><img src="assets/img/icons/inf.svg" class="mb-2 mx-20" width="25" alt=""></div>
                </div>
            </div>

            <h6 class="text-uppercase text-business-dark font-weight-bold mx-20 owf-ellipsis">{{lang[{{_VAR[lang]}}][name]}}</h6>

            <hr>

            <div class="mx-20 text-secondary">
                {{lang[{{_VAR[lang]}}][data][descr]}}
            </div>

            <hr>

            <div class="mx-20 text-primary small">
                {{lang[{{_VAR[lang]}}][data][short]}}
            </div>

            <hr class="mt-auto">

            <div class="d-flex flex-row justify-content-between align-items-end mx-20 mb-20">
                <div class="line-height-1">
                    <div class="text-secondary xsmall text-uppercase">{{_VAR[str_from]}}</div>
                    <div class="text-danger lead font-weight-bold">{{_VAR[ico_currency]}}{{apr[{{_VAR[lang]}}]}}</div>
                    <div><span class="text-secondary font-weight-bold text-strike">{{_VAR[ico_currency]}}{{opr[{{_VAR[lang]}}]}}</span></div>
                </div>

                <div>
                    <a href="{{_VAR[link]}}" class="btn btn-outline-primary btn-sm">{{_VAR[btn_buy]}}</a>
                </div>
            </div>
        </div>
    </section>
</div>
