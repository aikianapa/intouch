<div data-wb-role="include" src="/tpl/wrapper.inc.php" data-wb-hide="*"></div>
<div data-wb-hide="*" data-wb-append="#wrapper">
    <nav class="extra-nav py-20" role="include" src="/tpl/breadcrumb.inc.php"> </nav>

<div class="bg-lighter">
    <section class="py-35 py-md-60">
        <div class="container">
            <h1 class="h2 text-center mb-35 mb-md-60">{{lang[{{_VAR[lang]}}][name]}}</h1>
        </div>

        <div class="container">
            <div class="bg-white p-20 p-md-35 card-shadow mb-40">
    <meta role="variable" var="bgcolor" value="bg-success" data-wb-where='"green"="{{lang[{{_VAR[lang]}}][data][hintcolor]}}"'>
    <meta role="variable" var="bgcolor" value="bg-danger" data-wb-where='"red"="{{lang[{{_VAR[lang]}}][data][hintcolor]}}"'>
    <meta role="variable" var="bgcolor" value="bg-info" data-wb-where='"blue"="{{lang[{{_VAR[lang]}}][data][hintcolor]}}"'>
    <meta role="variable" var="bgcolor" value="bg-warning" data-wb-where='"orange"="{{lang[{{_VAR[lang]}}][data][hintcolor]}}"'>
                <div class="position-absolute font-weight-bold text-uppercase small text-white {{_VAR[bgcolor]}} py-2 px-20" style="z-index:1;">
                    {{lang[{{_VAR[lang]}}][data][hint]}}
                </div>

                <div class="row no-gutters">
                    <div class="col-12 col-md-5 col-lg-4">
                        <img src="/uploads/products/{{id}}/{{images[0][img]}}" class="img-fluid" alt="{{lang[{{_VAR[lang]}}][name]}}">
                    </div>

                    <div class="col-12 col-md-7 col-lg-8 mb-35">
                        <div class="d-flex flex-column flex-lg-row justify-content-between mb-lg-40">
                            <div>
                                <p class="text-primary">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star-half-o"></span>
                                    <span class="fa fa-star-o"></span>
                                </p>

                                <div class="h5 text-dark font-weight-bold">{{lang[{{_VAR[lang]}}][name]}}</div>
                            </div>

                            <div class="d-flex flex-row justify-content-lg-between align-items-end  mb-20">
                                <div>
                                    <div class="text-secondary xsmall text-uppercase">{{_VAR[str_from]}}</div>
                                    <div class="text-secondary font-weight-bold text-strike line-height-1">{{_VAR[ico_currency]}}<span>{{opr[{{_VAR[lang]}}]}}</span></div>
                                </div>

                                <div class="line-height-1 ml-20">
                                    <div class="text-danger lead font-weight-bold">{{_VAR[ico_currency]}}<span>{{apr[{{_VAR[lang]}}]}}</span></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            {{lang[{{_VAR[lang]}}][data][text]}}
                        </div>
                    </div>
                </div>

                <div class="row no-gutters">
                    <div class="col-12 col-lg-4 pr-lg-35"  data-wb-where='"{{category}}"!="tarifs"'>
                            <ul class="nav nav-pills nav-justified product-plan-controls border border-light mb-40 flex-column" data-wb-role="foreach" data-wb-table="products" id="tarifSelector" data-wb-where='active="on" AND category="tarifs"' data-wb-sort="sort" data-wb-hide="wb">
                                <meta role="variable" var="active" value="" data-wb-hide="*">
                                <meta role="variable" var="active" value="active" data-wb-where='"{{_idx}}"="0"' data-wb-hide="*">
                                <li class="nav-item" style="cursor:pointer;">
                                    <a class="nav-link p-3 {{_VAR[active]}}" data-toggle="tab" href="#Order" data-wb-ajax="/products/tarif/{{id}}" data-wb-ajax-done="tarifChange">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="mr-2"><span class="fa product-plan-check"></span></div>
                                            <div>{{lang[{{_VAR[lang]}}][name]}}</div>
                                            <div class="ml-2">{{_VAR[ico_currency]}}{{apr[{{_VAR[lang]}}]}}</div>
                                            <meta role="variable" var="order_tarif" value="{{apr[{{_VAR[lang]}}]}}" data-wb-where='"{{%_idx}}"="0"' data-wb-hide="*"> </div>
                                    </a>
                                </li>
                            </ul>
                    </div>
                    <div class="col-12 col-lg-4 pr-lg-35"  data-wb-where='"{{category}}"="tarifs"'>
                        <div  data-wb-role="foreach" data-wb-from="lang[{{_VAR[lang]}}][data][features]" data-wb-hide="*">
                        <div class="bg-light-blue mb-30 p-20" data-wb-where='"{{icon}}">""' data-wb-hide="wb">
                            <div class="d-flex flex-row mb-3 align-items-center">
                                <div><img src="assets/img/icons/{{icon}}" width="36" alt=""></div>
                                <div class="ml-3">{{header}}</div>
                            </div>
                            <div class="small">{{text}}</div>
                        </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-8 border border-light border-left-md-0">
                        <ul class="nav nav-pills nav-justified flex-column flex-md-row">
                            <li class="nav-item">
                                <a class="nav-link px-2 active" data-toggle="tab" href="#description">{{_VAR[str_features]}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-2" data-toggle="tab" href="#delivery">{{_VAR[str_delivery]}}</a>
                            </li>
                        </ul>

                        <div class="tab-content pt-20 px-20">
                            <div class="tab-pane fade show active" id="description">
                                <div class="container-fluid px-0">
                                    <div class="row no-gutters align-items-start" data-wb-role="foreach" data-wb-from="lang[{{_VAR[lang]}}][data][properties]">
                                        <dt class="col-12 col-lg-7 d-flex flex-row">
                                            {{propname}}
                                            <div class="border border-top-0 border-left-0 border-right-0 mx-20 flex-grow-1 d-none d-lg-block"></div>
                                        </dt>
                                        <dd class="col-12 col-lg-5 mb-3">
                                            <span data-wb-where='"{{propval}}"="&check;"' data-wb-hide="*"><span class="check-sign">&nbsp;</span></span>
                                            <span data-wb-where='"{{propval}}"!="&check;"' data-wb-hide="*">{{propval}}</span>
                                        </dd>
                                    </div>
                                    <div class="row no-gutters align-items-start" id="tarifFeatures">
                                            
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="delivery" data-wb-role="formdata" data-wb-table="pages" data-wb-item="delivery" data-wb-hide="wb">
                                {{lang[{{_VAR[lang]}}][data][text]}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-secondary text-white mt-40 p-20 p-md-35" data-wb-role="include" src="/tpl/order.inc.php">
                </div>
            </div>

            <div class="bg-white card-shadow mb-40 p-20 p-md-30" data-wb-role="foreach" data-wb-table="products" data-wb-where='active="on" AND _furl!="{{_item}}" AND articul!="sim"' data-wb-limit="1" data-wb-rand="true" data-wb-tpl="false">
                <div class="large mb-20 mb-lg-35 text-primary">{{_VAR[str_interest]}}</div>

                <div class="container-fluid px-0">
                    <div class="row no-gutters border border-light">
                        <div class="col-12 col-lg-3 px-20 px-md-100 px-lg-20 py-20">
                            <img src="/uploads/products/{{id}}/{{images[0][img]}}" class="img-fluid" alt="{{lang[{{_VAR[lang]}}][name]}}">
                        </div>

                        <div class="col-12 col-lg-6 p-20 p-md-30">
                            <h5 class="text-dark">{{lang[{{_VAR[lang]}}][name]}}</h5>
                            <div>{{lang[{{_VAR[lang]}}][data][text_short]}}</div>
                        </div>

                        <div class="col-12 col-lg-3 product-addition-wrapper">
                            <div class="text-center text-secondary product-price py-3 py-lg-35 product-addition-price">
                                 {{_VAR[ico_currency]}}{{apr[{{_VAR[lang]}}]}} 
                            </div>

                            <div class="text-center py-3 py-lg-35">
                                <a href="/products/{{_furl}}" class="text-primary">{{_VAR[btn_more]}}</a>
                            </div>

                            <a href="/products/{{_furl}}" class="btn btn-primary btn-block rounded-0 product-addition-button mt-auto">{{_VAR[btn_buy]}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="modal fade" id="modal_product_info" tabindex="-1" role="dialog" aria-labelledby="modal_product_info_title" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_product_info_title">Тариф «Welcome»</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-striped table-sm">
                    <tbody>
                        <tr class="bg-primary text-white">
                            <td>Тип номера</td>
                            <td>Федеральный</td>
                        </tr>
                        <tr>
                            <td>Система расчетов</td>
                            <td>предоплатная<sup>1</sup></td>
                        </tr>
                        <tr>
                            <td>Абонентская плата 2</td>
                            <td>О руб.</td>
                        </tr>
                        <tr>
                            <td>Входящие в поездках по стране</td>
                            <td>О руб.</td>
                        </tr>
                        <tr>
                            <td class="bg-primary text-white" colspan="2">В пакет «Bundle for Welcome tariff» включено*:</td>
                        </tr>
                        <tr>
                            <td>Стоимость пакета</td>
                            <td>700 руб.</td>
                        </tr>
                        <tr>
                            <td>Продолжительность действия пакета</td>
                            <td>14 дней</td>
                        </tr>
                        <tr>
                            <td class="bg-primary text-white" colspan="2">В пакет «Bundle for Welcome tariff» включено*:</td>
                        </tr>
                        <tr>
                            <td>Исходящие вызовы на номера абонентов ТП «Welcome»*</td>
                            <td>безлимит</td>
                        </tr>
                        <tr>
                            <td>Исходящие вызовы на все номера России по всей стране, исходящие вызовы в Германию, Великобританию, Израиль, Индию, Испанию, Италию, Канаду, США, Южную Корею и Финляндию из Санкт-Петербурга и Ленинградской области, а также исходящие вызовы в Китай по всей стране.</td>
                            <td>150 минут</td>
                        </tr>
                        <tr>
                            <td>SMS на номера России и Китая в поездках по всей стране</td>
                            <td>100 шт.</td>
                        </tr>
                        <tr>
                            <td>Мобильный Интернет в поездках по всей стране</td>
                            <td>15 Гбайт</td>
                        </tr>
                        <tr>
                            <td class="bg-primary text-white" colspan="2">Стоимость услуг, не входящих в пакет «Bundle for Welcome tariff»</td>
                        </tr>
                        <tr>
                            <td>Исходящие MMS на номера России</td>
                            <td>6,60 руб.</td>
                        </tr>
                        <tr>
                            <td>Исходящие MMS на номера СНГ</td>
                            <td>6,60 руб.</td>
                        </tr>
                        <tr>
                            <td>Исходящие MMS в остальные страны</td>
                            <td>6,60 руб.</td>
                        </tr>
                        <tr>
                            <td>Исходящие SMS в другие страны</td>
                            <td>5,5 руб.</td>
                        </tr>
                        <tr>
                            <td>Исходящие вызовы в Германию, Великобританию, Израиль, Индию, Испанию, Италию, Канаду, США, Южную Корею и Финляндию за пределами Санкт-Петербурга и Ленинградской области</td>
                            <td>50 руб.</td>
                        </tr>
                        <tr>
                            <td>Исходящие вызовы в страны СНГ, Грузию, Украину на номера любых операторов</td>
                            <td>30 руб.</td>
                        </tr>
                        <tr>
                            <td>Исходящие вызовы в остальные страны Европы, Вьетнам, Турцию</td>
                            <td>50 руб.</td>
                        </tr>
                        <tr>
                            <td>Исходящие вызовы в остальные страны</td>
                            <td>80 руб.</td>
                        </tr>
                        <tr>
                            <td class="bg-primary text-white" colspan="2">Если закончились минут, SMS, интернет или срок действия пакета «Bundle for Welcome tariff»</td>
                        </tr>
                        <tr>
                            <td>При окончании срока действия пакета «Bundle for Welcome tariff» доступны только входящие вызовы и сервисы не включенные в пакет</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>При исчерпании пакета минут, SMS или интернета возобновление сервиса доступно только при подключении нового пакета «Bundle for Welcome tariff»</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Подключить еще один пакет «Bundle for Welcome tariff»**</td>
                            <td>06740011</td>
                        </tr>

                    </tbody>
                </table>

                <div class="small font-weight-normal">
                    <p class="mb-0">* Исходящие вызовы на номера абонентов ТП «Welcome» региона подключения не расходуют пакет включенных минут</p>
                    <p class="mb-0">** Номиналы и сроки действия пакетов не суммируются.</p>
                    <p class="mb-0">За изменение тарифа для оплаты телематических услуг связи плата не взимается. Все цены указаны за минуту разговора.</p>
                    <p>Соединение менее 3х секунд не тарифицируются. Телефонный разговор тарифицируется поминутно.</p>

                    <p class="mb-0">Мобильный Интернет, включенный в пакет «Bundle for Welcome tariff» предоставляется каждый первый день нового расчетного периода со скоростью передачи данных по технологии GPRS/EDGE до 256 Кбит/с и технологии 3G (UMTS/HSDPA) до 7,2 Мбит/с. Объем переданных/полученных данных в течение сессии округляется в большую сторону с точностью до 150 Кбайт. Сессия - время с момента установления GPRS-соединения до момента его завершения.</p>
                    <p>Мобильный интернет, входящий в пакет, действует в сети "Билайн" по всей России. На территории Камчатского края, Магаданской области, Чукотского автономного округа, Республики Саха (Якутия), действует помегабайтная тарификация по тарифу 9,95 руб./Мбайт. На территории Норильской тарифной зоны (Таймырского и Долгано-Ненецкого муниципальных районов, ЕМО г. Норильска и г. Игарки) первые 300 МБ переданных/полученных данных предоставляются на скорости, предусмотренной условиями тарифного плана, далее скорость снижается на весь период нахождения в Норильской Тарифной зоне до 32 кбит/с. Скорость восстанавливается в течение двух суток с момента последней интернет-сессии за пределами Норильской тарифной зоны.</p>

                    <p class="mb-0">Неактивация карты, стартовой суммы или не проведение платежа в иной форме в течение 180 дней с момента заключения Договора/приобретения SIM-карты/USIM-карты и, если новая карта оплаты не активирована (или денежные средства не внесены по другим каналам) до истечения 180 дней с момента достижения условной суммы на Электронном счет величины, недостаточной для оплаты единицы тарификации услуги, Договор считается расторгнутым по желанию Абонента, обязательства Сторон прекращаются.</p>
                    <p>Указанные тарифы действительны при нахождении абонента на территории области подключения.</p>

                    <p class="mb-0">20.07.2016</p>
                    <p class="mb-0">Цены и тарифы указаны в рублях с учетом НДС. Термины и определения, используемые для обозначения услуг, служат только для целей данного тарифного плана.</p>
                    <p class="mb-0">Центр поддержки клиентов (круглосуточно): 0611 (номер в сети «Билайн»), www.shop.beeline.ru.</p>
                    <p class="mb-0">Оборудование сертифицировано. Услуги лицензированы.</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>
<div data-wb-role="include" src="/tpl/banners.inc.php" data-wb-hide="*"></div>
</div>