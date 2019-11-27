<div data-wb-role="tree" data-wb-item="elements" data-wb-branch="{{_VAR[lang]}}->form_order" data-wb-parent="false" data-wb-hide="*" id="orderBlock">
<meta data-wb-role="variable" var="{{id}}" value='{{name}}' data-wb-hide="*">
</div>
<meta data-wb-role="variable" var="order_articul" value="{{articul}}" data-wb-hide="*">
<meta data-wb-role="variable" var="rental_price" value="{{apr[{{_VAR[lang]}}]}}">
<meta data-wb-role="variable" var="rental_price" value="0" data-wb-where='"{{articul}}"="sim"'>
<meta data-wb-role="variable" var="order_price" value="{{apr[{{_VAR[lang]}}]}}">
<meta data-wb-role="variable" var="order_deposit" value="{{dep[{{_VAR[lang]}}]}}">
<meta data-wb-role="variable" var="sendby_dhl" value="Send by DHL mail" data-wb-where='"{{_VAR[lang]}}"!="rus"'>
<meta data-wb-role="variable" var="sendby_dhl" value="Отправка службой DHL" data-wb-where='"{{_VAR[lang]}}"="rus"'>
<meta data-wb-role="variable" var="sendby_mail" value="Send to the address by mail" data-wb-where='"{{_VAR[lang]}}"!="rus"'>
<meta data-wb-role="variable" var="sendby_mail" value="Почтовое отправление" data-wb-where='"{{_VAR[lang]}}"="rus"'>


<div class="mb-20 mb-lg-30 large">{{_VAR[str_header]}}:</div>
<form id="Order" data-wb-form="orders" data-wb-item="{{_SESS[order_id]}}" class="ajax-form" novalidate>
    <div class="row">
        <div class="col-12 col-lg-6">
            <div class="form-group">
                <label for="fullname">{{_VAR[inp_name]}}</label>
                <input type="text" class="form-control form-control-transparent" id="fullname" name="fullname" placeholder="{{_VAR[inp_name]}}" required> </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="phone">{{_VAR[str_contacts]}}</label>
                    <input type="mask" data-wb-mask="+9 (999) 999-99-99" class="form-control form-control-transparent" id="phone" name="phone" placeholder="{{_VAR[str_contacts]}}" required> </div>
                <div class="form-group col-md-6">
                    <label for="email"><span class="invisible">{{_VAR[inp_email]}}</span></label>
                    <input type="email" class="form-control form-control-transparent" id="email" name="email" placeholder="{{_VAR[inp_email]}}" required> </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="city">{{_VAR[inp_city]}}</label>
                    <select class="form-control form-control-transparent" id="city" name="city" placeholder="{{_VAR[inp_city]}}" required>
                        <option value="spb" data-wb-role="where" data='"{{_VAR[lang]}}"<>"rus"' data-wb-hide="wb">St.Peterburg</option>
                        <option value="msk" data-wb-role="where" data='"{{_VAR[lang]}}"<>"rus"' data-wb-hide="wb">Moscow</option>
                        <option value="spb" data-wb-role="where" data='"{{_VAR[lang]}}"="rus"' data-wb-hide="wb">Санкт-Петербург</option>
                        <option value="msk" data-wb-role="where" data='"{{_VAR[lang]}}"="rus"' data-wb-hide="wb">Москва</option>
                    </select>
                </div>
                <div class="form-group col-md-6" data-wb-role="tree" data-wb-item="dict_dropoff_location" data-wb-hide="wb" data-wb-branch="{{_VAR[lang]}}" data-wb-children="false">
                    <label for="dropoff" class="owf-ellipsis">{{name}}</label>
                    <select class="form-control form-control-transparent" id="dropoff" name="dropoff" data-wb-role="foreach" data-wb-from="children" data-wb-hide="wb" data-wb-tpl="false" required>
                        <option value="{{id}}" data-price="{{data[price]}}">{{name}}</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <div class="form-group">
                <label for="address">{{_VAR[inp_address]}}</label>
                <input type="text" class="form-control form-control-transparent" id="address" name="address" placeholder="{{_VAR[inp_address]}}" required> </div>
            <div class="form-row">
                <div class="col-12 col-lg-7">
                    <div class="form-group">
                        <label for="phone">{{_VAR[inp_time]}}</label>
                        <div class="row no-gutters align-items-center form-control-transparent text-center medium" style="height: 48px;margin-top: 1px;">
                            <div class="col-5">
                                <div class="date dtpicker arrival col-xs-5 np text-center">
                                    <input type="hidden" name="arrival" value="{{_ENV[datetime]}}">
                                    <span class="add-on">
                                          <i class="fa fa-calendar text-hide"></i> <span class="dateval">date</span>
                                    </span>
                                </div>
                            </div>
                            <div class="col-2"> <span class="border border-secondary p-1 to" data-wb-role="where" data='"{{_VAR[lang]}}"<>"rus"' data-wb-hide="wb">To</span> <span class="border border-secondary p-1 to" data-wb-role="where" data='"{{_VAR[lang]}}"="rus"' data-wb-hide="wb">По</span> </div>
                            <div class="col-5">
                                <div class="date dtpicker departure col-xs-5 np text-center">
                                    <input type="hidden" name="departure" value="{{_ENV[datetime]}}"> <span class="add-on">                                                            <i class="fa fa-calendar text-hide"></i> <span class="dateval">date</span>
                                     </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="form-group">
                        <label for="payment">{{_VAR[inp_payment]}}</label>
                        <select class="form-control form-control-transparent" id="payment" name="payment" placeholder="{{_VAR[inp_payment]}}" required>
            <option value="online" data-wb-role="where" data='"{{_VAR[lang]}}"<>"rus"' data-wb-hide="wb">Card pay online</option>
            <option value="card" data-wb-role="where" data='"{{_VAR[lang]}}"<>"rus"' data-wb-hide="wb">Card pay to courier</option>
            <option value="online" data-wb-role="where" data='"{{_VAR[lang]}}"="rus"' data-wb-hide="wb">Картой банка (онлайн)</option>
            <option value="card" data-wb-role="where" data='"{{_VAR[lang]}}"="rus"' data-wb-hide="wb">Картой банка (курьеру)</option>
                        </select>
                    </div>
                </div>
            </div>

    <div class="total">
        <div class="form-row medium mb-2">
            <meta data-wb-role="variable" var="order_tarif" value="{{_VAR[order_price]}}" data-wb-where='category="tarifs"'>
            <meta data-wb-role="variable" var="rental_price" value="0" data-wb-where='category="tarifs"'>
            <div class="col-md-8">{{_VAR[str_sim]}}:</div>
            <div class="col-md-4 text-right">{{_VAR[ico_currency]}}<span class="calc-tarif">{{_VAR[order_tarif]}}</span></div>
        </div>
        <div data-wb-role="where" data='"{{_VAR[order_articul]}}"<>"sim" AND category<>"tarifs"' data-wb-hide="wb">
            <div class="form-row medium mb-2">
                <div class="col-md-8">{{_VAR[str_rental]}} <small>({{_VAR[ico_currency]}}{{_VAR[order_price]}}/{{_VAR[str_per_day]}})</small>:</div>
                <div class="col-md-4 text-right">{{_VAR[ico_currency]}}<span class="calc-rental">{{_VAR[order_price]}}</span></div>
            </div>
            <div class="form-row medium mb-2">
                <div class="col-md-8">{{_VAR[str_deposit]}}:</div>
                <div class="col-md-4 text-right">{{_VAR[ico_currency]}}<span class="calc-deposit">{{_VAR[order_deposit]}}</span></div>
            </div>
        </div>
        <div class="form-row medium mb-2">
            <div class="col-md-8">{{_VAR[str_shipping]}}:</div>
            <div class="col-md-4 text-right">{{_VAR[ico_currency]}}<span class="calc-shipping">0.00</span></div>
        </div>
        <div class="form-row mb-30">
            <div class="col-md-8">{{_VAR[str_total]}}:</div>
            <div class="col-md-4 text-right">{{_VAR[ico_currency]}}<strong class="calc-total">0</strong></div>
        </div>

        <input type="hidden" class="currency" name="currency" value="{{_VAR[lang]}}">
        <input type="hidden" class="tarif" name="tarif" value="{{_VAR[order_tarif_id]}}">
        <input type="hidden" name="device" value="{{id}}" data-wb-where='"{{category}}"="devices"'>
        <input type="hidden" class="deposit" name="deposit" value="{{_VAR[order_deposit]}}">
        <input type="hidden" class="calc-rental" name="rPrice" value="{{_VAR[rental_price]}}">
        <input type="hidden" class="calc-tarif" name="tPrice" value="0">
        <input type="hidden" class="calc-shipping" name="sPrice" value="0">
        <input type="hidden" class="calc-days" name="days" value="1">
        <input type="hidden" class="calc-total" name="total" value="0">
    </div>

        </div>
    </div>
    <div class="form-row align-items-center">
        <div class="col-12 col-lg-6">
            <div class="custom-radio custom-radio-inline mr-20">
                <input type="radio" id="sendby_dhl" checked name="sendby">
                <label for="sendby_dhl">{{_VAR[sendby_dhl]}}</label>
            </div>
            <div class="custom-radio custom-radio-inline">
                <input type="radio" id="sendby_mail" name="sendby">
                <label for="sendby_mail">{{_VAR[sendby_mail]}}</label>
            </div>
        </div>
        <div class="col-12 col-lg-6 text-lg-right mt-3 mt-lg-0">
            <a href="#orderBlock" data-wb-formsave="#Order" id="checkout" class="btn btn-primary px-60">{{_VAR[btn_buy]}}</a>
        </div>
    </div>
    <div class="text-center small mt-20"> {{_VAR[str_policy1]}} <a href="/policy" class="text-white text-underline"><u>{{_VAR[str_policy2]}}</u></a> </div>


</form>

<div data-wb-role="include" src="modal" data-wb-id="order_payment" data-wb-hide="*"></div>
<script src="https://widget.cloudpayments.ru/bundles/cloudpayments"></script>

