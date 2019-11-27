<div class="modal fade" id="{{_form}}_{{_mode}}" data-keyboard="false" data-backdrop="true" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                <h5 class="modal-title">{{name}}</h5>
            </div>
            <div class="modal-body">

                <form id="{{_GET[form]}}EditForm" data-wb-form="{{_GET[form]}}" data-wb-item="{{_GET[item]}}" class="form-horizontal" role="form">
                    <input type="hidden" name="id" placeholder="Имя записи">
                    <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Имя клиента</label>
                        <div class="col-sm-9"><input type="text" class="form-control" name="fullname" placeholder="Имя клиента"></div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Оплачено</label>
                        <div class="col-sm-3">
                            <meta data-wb-role="include" src="snippet" data-wb-mode="switch" data-wb-label="Оплачено" name="payed" ></div>
                        <label class="col-sm-3 form-control-label">Доставлено</label>
                        <div class="col-sm-3">
                            <meta data-wb-role="include" src="snippet" data-wb-mode="switch" data-wb-label="Доставлено" name="delivered" ></div>
                    </div>


                    <div class="form-group row">
                        <label class="col-sm-3 control-label">Телефон</label>
                        <div class="col-sm-3"><input type="phone" name="phone" class="form-control" placeholder="{{_VAR[inp_phone]}}" required></div>

                        <label class="col-sm-2 control-label">Эл.почта</label>
                        <div class="col-sm-4"><input type="email" name="email" class="form-control" placeholder="{{_VAR[inp_email]}}" required></div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Дата прибытия</label>
                        <div class="col-sm-3">
                            <input type="datetimepicker" class="form-control" name="arrival">
                        </div>
                        <label class="col-sm-2 form-control-label">Дата выбытия</label>
                        <div class="col-sm-4">
                            <input type="datetimepicker" class="form-control" name="departure">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Город</label>
                        <div class="col-sm-3">
                            <select name="city" class="form-control">
                <option value="spb">Санкт-Петербург</option>
                <option value="msk">Москва</option>
             </select>
                        </div>
                        <label class="col-sm-2 form-control-label">Доставка</label>
                        <div class="col-sm-4">
                            <select name="dropoff" class="form-control" data-wb-role="foreach" data-wb-from="dropoff" data-wb-hide="wb" data-wb-tpl="false">
                <option value="{{id}}" data-price="{{price}}">{{name}}</option>
            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Адрес прибытия</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="address" placeholder="Адрес прибытия">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 control-label">Оплата</label>
                        <div class="col-8 col-sm-5">
                            <select name="payment" class="form-control select2">
                                <option value="online" >Картой банка (онлайн)</option>
                                 <option value="card">Картой банка (курьеру)</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-5">
                            <label class="form-control-label">Устройство</label>
                            <select placeholder="Устройство" class="form-control select2" role="foreach" data-wb-table="products" data-wb-where='active="on" AND category="devices"' name="device">
                                <option value="{{id}}">{{name}} арт.{{articul}}</option>
                            </select>
                        </div>
                        <div class="col-2">
                            <label class="form-control-label">Дней</label>
                            <input type="number" class="form-control text-right" name="days">
                        </div>
                        <div class="col-2">
                            <label class="form-control-label">Аренда</label>
                            <input type="number" class="form-control text-right" name="rPrice">
                        </div>
                        <div class="col-3">
                            <label class="form-control-label">Сумма</label>
                            <input type="number" class="form-control text-right" name="rSumm" readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-5">
                            <label class="form-control-label">Тариф</label>
                            <select placeholder="Тариф" class="form-control select2" role="foreach" data-wb-table="products" data-wb-where='active="on" AND category="tarifs"' name="tarif">
                                <option value="{{id}}">{{name}} арт.{{articul}}</option>
                            </select>
                        </div>
                        <div class="col-2">
                            <label class="form-control-label">Цена</label>
                            <input type="number" class="form-control text-right" name="tPrice">
                        </div>
                        <div class="col-2">
                            <label class="form-control-label">Доставка</label>
                            <input type="number" class="form-control text-right" name="sPrice">
                        </div>
                        <div class="col-3">
                            <label class="form-control-label">Сумма</label>
                            <input type="number" class="form-control text-right" name="tSumm" readonly>
                        </div>
                    </div>

                    <div class="form-group row" name="totals">
                        <div class="col-9"><label>Итого ({{currency}}):</label></div>
                        <div class="col-3 .summ"><input type="number" name="total" class="form-control text-right" placeholder="Сумма" readonly></div>
                    </div>

                </form>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-close"></span> Закрыть</button>
                <button type="button" class="btn btn-primary" data-wb-formsave="#{{_GET[form]}}EditForm"><span class="fa fa-save"></span> Сохранить изменения</button>
            </div>

        </div>


    </div>
</div>
<script>
$(document).ready(function(){
    var form=$("#{{_form}}_{{_mode}}");
    form.undelegate("input","click");
    form.delegate("input","click",function(){
        $(this).trigger("change");
    });
    form.undelegate("input","change");
    form.delegate("input","change",function(){
        if ($(this).is("[name=tPrice],[name=sPrice],[name=days]")) {
            var rSumm=form.find("[name=days]").val()*1*form.find("[name=rPrice]").val()*1
            var tSumm=form.find("[name=tPrice]").val()*1+form.find("[name=sPrice]").val()*1;
            form.find("[name=rSumm]").val(number_format(rSumm, 2));
            form.find("[name=tSumm]").val(number_format(tSumm, 2));
            form.find("[name=total]").val(number_format(rSumm+tSumm,2));
        }
    });
    $(form).find("input").trigger("change");
});
</script>
