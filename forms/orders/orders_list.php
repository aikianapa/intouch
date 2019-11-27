<div class="element-wrapper">
    <h6 class="element-header">
        Список заявок
        <button class="btn btn-sm btn-success pull-right" data-wb-ajax="/form/edit/{{_GET[form]}}/_new"
                data-wb-append="body">
            <i class="fa fa-plus"></i> Добавить заявку
        </button>
    </h6>
    <div class="element-box">
        <div class="table-responsive">
            <table class="table table-lightborder">
                <thead>
                <tr>
                    <th> ID заявки</th>
                    <th> Дата</th>
                    <th> Клиент</th>
                    <th class="text-center"> Статус</th>
                    <th class="text-right"> Действие</th>
                </tr>
                </thead>
                <tbody data-wb-role="foreach" data-wb-table="{{_GET[form]}}" data-wb-add="true" data-wb-size="12"
                       data-wb-sort="_created:d active:d">
                <tr>
                    <td class="nowrap"> {{id}}</td>
                    <td class="nowrap"> {{date}}</td>
                    <td class="nowrap"> {{fullname}}</td>
                    <td class="text-center">
                        <div class="status-pill red" data-title="Доставлен" data-wb-role="where" data='delivered="on"'
                             data-toggle="tooltip"></div>
                        <div class="status-pill yellow" data-title="Ожидает доставку" data-wb-role="where"
                             data='payment!="online" AND delivered!="on"' data-toggle="tooltip"></div>
                        <div class="status-pill green" data-title="Оплачен, ожидает доставку" data-wb-role="where"
                             data='delivered!="on" AND payed="on"' data-toggle="tooltip"></div>
                    </td>
                    <td class="text-right" data-wb-role="include" src="/engine/forms/common/item_actions.php"></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
