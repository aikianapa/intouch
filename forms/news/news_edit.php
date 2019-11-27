<div class="modal fade" id="{{_GET[form]}}_{{_GET[mode]}}" data-keyboard="false" data-backdrop="true" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                <h5 class="modal-title">{{header}}</h5>
            </div>
            <div class="modal-body">

                <form id="{{_GET[form]}}EditForm" data-wb-form="{{_GET[form]}}" data-wb-item="{{_GET[item]}}" class="form-horizontal" role="form">
                        <input type="hidden" class="form-control" name="id" placeholder="Имя записи" required>

                    <div class="form-group row">
                        <label class="col-sm-2 form-control-label">Дата</label>
                        <div class="col-sm-4"><input type="datetimepicker" class="form-control" data-format="" name="date" placeholder="Дата"></div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 form-control-label">Отображать</label>
                        <div class="col-sm-2"><label class="switch switch-success"><input type="checkbox" name="active"><span></span></label></div>
                        <label class="col-sm-2 form-control-label">На главную</label>
                        <div class="col-sm-2"><label class="switch switch-success"><input type="checkbox" name="home"><span></span></label></div>
                        <label class="col-sm-2 form-control-label">В статьи</label>
                        <div class="col-sm-2"><label class="switch switch-success"><input type="checkbox" name="article"><span></span></label></div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-12">
                            <div data-wb-role="tree" name="lang" data-wb-dict="dict_news"></div>
                        </div>
                    </div>


                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">Изображение</label>
                    <div class="col-sm-5">
                        <input type="hidden" name="image" data-wb-role="uploader" >
                    </div>
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
