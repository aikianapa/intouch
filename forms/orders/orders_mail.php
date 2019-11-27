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
<label>Номер заказа: </label> <i>{{id}}</i>
<br>
<label>Имя клиента: </label><i>{{fullname}}</i>
<br>
<label>Телефон: </label> <i>{{phone}}</i>
<br>
<label>Эл.почта: </label> <i>{{email}}</i>
<br>
<label>Дата прибытия: </label> <i>{{arrival}}</i>
<br>
<label>Дата выбытия: </label> <i>{{departure}}</i>
<br>
<label>Город: </label> <i>{{city}}</i>
<br>
<label>Адрес: </label> <i>{{address}}</i>
<br>
<label>Доставка: </label> <i>{{dropoff}}</i>
<br>
<label>Способ доставки: </label> <i>{{sendby}}</i>
<br>
<label>Вид оплаты: </label> <i>{{payment}}</i>
<br>
<label>Оплачено: </label> <i>{{payed}}</i>
<br>
<label>Валюта: </label> <i>{{currency}}</i>
<br>
<label>Сумма: </label> <i>{{total}}</i>

                    <table border="1"><tr>
			</tr>
				<td>Устройство</td><td>Дней</td><td>Аренда/день</td>
			<tr>
                        <td>
                            <span data-wb-role="foreach" data-wb-table="products" data-wb-where='active="on" AND category="devices" AND id = "{{device}}"' name="device">
                                {{name}} арт.{{articul}}
                            </span>
                        </td>
                        <td align="center">
                            {{days}}
                        </td>
                        <td align="center">
				{{rPrice}}
                        </td>
                    </tr></table>
<br>
                    <table border="1"><tr>
				<td>Тариф</td><td>Цена</td><td>Доставка</td>
			</tr>
			<tr>
                        <td>
                            <label class="form-control-label">Тариф</label>
                            <span data-wb-role="foreach" data-wb-table="products" data-wb-where='active="on" AND category="tarifs" AND id="{{tarif}}"' name="tarif">
                                {{name}} арт.{{articul}}
                            </span>
                        </td>
                        <td align="center">
                            {{tPrice}}
                        </td>
                        <td align="center">
                            {{sPrice}}
                        </td>
                        </tr>
                    </table>




            </div>


        </div>


    </div>
</div>
