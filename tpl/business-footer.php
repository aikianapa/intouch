
<aside class="text-white py-40 py-md-60 page-banner" style="background-image: url(assets/img/business/bg-presentaition.jpg);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8 col-xl-6">
                <form id="presentDwnld" data-type="{{_ENV[route][item]}}">
                    <p class="font-weight-normal large text-center mb-30">{{_VAR[form_download]}}</p>
                        <div role="tree" data-wb-item="elements" data-wb-branch="{{_VAR[lang]}}->form_download" data-wb-parent="false" value="{{name}}" data-wb-hide="*">
                            <meta role="variables" var="{{id}}" value="{{name}}" data-wb-hide="*">
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary px-100" type="button">{{_VAR[btn_download]}}</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</aside>

<aside class="bg-light py-40 py-md-60 ">
    <div class="container">
        <div class="row no-gutters business-request">
            <div class="col-12 col-lg-7 bg-white py-40 px-20 px-sm-40 px-xl-100">
                <div data-wb-role="where" data-wb-where='"{{_VAR[lang]}}"="rus"' data-wb-hide="*">
                    <meta data-wb-hide="*" role="variable" var="bf_header" value="Готовы попробовать?">
                    <meta data-wb-hide="*" role="variable" var="bf_email" value="Оставьте заявку на почту">
                    <meta data-wb-hide="*" role="variable" var="bf_contact" value="Мы с вами свяжемся в ближайшее время!">
                    <meta data-wb-hide="*" role="variable" var="bf_call" value="Нет времени ждать? Звоните!">
                </div>
                <div data-wb-role="where" data-wb-where='"{{_VAR[lang]}}"="eng"' data-wb-hide="*">
                    <meta data-wb-hide="*" role="variable" var="bf_header" value="Ready to try it?">
                    <meta data-wb-hide="*" role="variable" var="bf_email" value="Send your request to">
                    <meta data-wb-hide="*" role="variable" var="bf_contact" value="We will get in touch with you shortly!">
                    <meta data-wb-hide="*" role="variable" var="bf_call" value="Need immediate assistance?">
                </div>
                <div data-wb-role="where" data-wb-where='"{{_VAR[lang]}}"="chi"' data-wb-hide="*">
                    <meta data-wb-hide="*" role="variable" var="bf_header" value="准您准备好尝试了吗？">
                    <meta data-wb-hide="*" role="variable" var="bf_email" value="发发送表格到电子邮件">
                    <meta data-wb-hide="*" role="variable" var="bf_contact" value="我我们将尽快联系您！">
                    <meta data-wb-hide="*" role="variable" var="bf_call" value="没时间等 给我们打电话">
                </div>
                <div data-wb-where='"{{_ENV[route][item]}}"<>"business-companies"' data-wb-hide="*">
                <h2 class="h1 text-business-dark mb-20 mb-md-40">{{_VAR[bf_header]}}</h2>
                <meta data-wb-role="variable" var="email" value="{{_SETT[email]}}">
                <meta data-wb-role="variable" var="email" value="hotel@intouchrussia.com" data-wb-where='"{{_item}}"="business-hotels-top"'>
                <p class="mb-20 text-primary">{{_VAR[bf_email]}}:</p>
                <p class="mb-20"><a href="mailto:{{_VAR[email]}}" class="large text-secondary">{{_VAR[email]}}</a></p>
                <p class="mb-20 mb-md-40">{{_VAR[bf_contact]}}</p>
                </div>
                <div data-wb-where='"{{_ENV[route][item]}}"="business-companies"' data-wb-hide="*">
                    <div data-wb-role="formdata" data-wb-form="pages" data-wb-item="business-how-works" data-wb-field="lang[{{_VAR[lang]}}][data]">
                        <h2 class="h1 text-business-dark mb-20 mb-md-40">{{header}}</h2>
                        {{text}}
                    </div>
                </div>

                <p class="mb-20 text-primary" data-wb-where='"{{_item}}"!="business-hotels-top"'>{{_VAR[bf_call]}}</p>
                <!--p class="mb-0">Москва: <a href="tel:+78123471188" class="text-secondary">+7 (812) 347-11-88</a></p>
                <p class="mb-0">Сакт-Петербург: <a href="tel:+74953471188" class="text-secondary">+7 (495) 347-11-88</a></p-->
                <!--a href="tel:{{_VAR[phone]}}">{{_VAR[phone]}}</a-->
            </div>

            <div role="tree" data-wb-item="elements" data-wb-branch="{{_VAR[lang]}}->form_biz" data-wb-parent="false" value="{{name}}" data-wb-hide="*">
                <meta role="variables" var="{{id}}" value="{{name}}" data-wb-hide="*">
            </div>

            <div class="col-12 col-lg-5 text-white py-40 px-20 px-sm-40 business-request-form-wrapper">
                <p class="font-weight-normal large mb-40">{{_VAR[form_biz]}}</p>

                <form action="/ajax/mailer" method="post" class="ajax-form" novalidate>
                    <div class="result-message"></div>

                    <div class="form-group" data-wb-where='"{{_item}}"<>"business-hotels"' data-wb-hide="wb">
                        <input type="text" class="form-control" placeholder="{{_VAR[biz_name]}}" required>
                    </div>
                    <div class="form-group" data-wb-where='"{{_item}}"="business-hotels"' data-wb-hide="wb">
                        <input type="text" class="form-control" placeholder="{{_VAR[biz_hotel]}}" required>
                    </div>
                    <div class="form-group" data-wb-where='"{{_item}}"="business-hotels"' data-wb-hide="wb">
                        <input type="number" class="form-control" placeholder="{{_VAR[biz_numbers]}}" required>
                    </div>
                    <div class="form-group" data-wb-where='"{{_item}}"="business-hotels"' data-wb-hide="wb">
                        <input type="number" class="form-control" placeholder="{{_VAR[biz_guests]}}" required>
                    </div>
                    <div class="form-group" data-wb-where='"{{_item}}"<>"business-hotels"' data-wb-hide="wb">
                        <input type="text" class="form-control" placeholder="{{_VAR[biz_type]}}" required>
                    </div>
                    <div class="form-group" data-wb-where='"{{_item}}"<>"business-hotels"' data-wb-hide="wb">
                        <textarea class="form-control" placeholder="{{_VAR[biz_descr]}}" rows="auto"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="{{_VAR[biz_city]}}" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="{{_VAR[biz_contact]}}" required>
                    </div>
                    <div class="form-group" data-wb-where='"{{_item}}"<>"business-companies"' data-wb-hide="wb">
                        <input type="tel" class="form-control" placeholder="{{_VAR[biz_phone]}}" required>
                    </div>
                    <div class="form-group"  data-wb-where='"{{_item]}}"="business-companies"' data-wb-hide="wb">
                        <input type="text" class="form-control" placeholder="{{_VAR[biz_phone]}}" data-wb-mask="+9 (999) 999-99-99" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="{{_VAR[biz_email]}}" required>
                    </div>
                    <div class="form-group mt-40">
                        <button type="submit" class="btn btn-light">{{_VAR["btn_send"]}}</button>
                    </div>
                    <div class="text-center small mt-20 text-muted">

                         {{_VAR[str_policy1]}}<br><a href="/policy" class="text-light">{{_VAR[str_policy2]}}</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</aside>
