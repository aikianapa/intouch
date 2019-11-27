$(document).ready(function () {
    adaptive();
    presentDownload();
    faqCount();
    $(".preloader").addClass("done");
    setTimeout(function () {
        $(".preloader").addClass("fade out");
        $(".preloader-logo").addClass("fade out");
        setTimeout(function () {
            $(".preloader").remove();
            $(".preloader-logo").remove();
        }, 1000);
    }, 1500);
    $("a").each(function () {
        if ($(this).attr("href") == document.location.pathname) {
            $(this).addClass("active");
            $(this).parents(".nav-item").addClass("active");
        }
    });
    if ($("form#Order[data-wb-item]").length) {
        $("form#Order").data("data-wb-item", $("form#Order").attr("data-wb-item"));
    }

    if ($("#products section").length < 4) {
        $("#products section").removeClass("col-xl-3");
    }

    $(".contacts-form .form-check-input").on("click", function () {
        var that = this;
        setTimeout(function () {
            if ($(that).prop("checked")) {
                $(that).parents("form").find(":submit").prop("disabled", false);
            } else {
                $(that).parents("form").find(":submit").prop("disabled", true);
            }
        }, 100);
    });

    $("form#Order select[name=dropoff]").on("change", function () {
        if ($(this).val() == "") {
            $("form#Order .total .calc-shipping").html(number_format(0, 2));
        } else {
            $("form#Order .total .calc-shipping").html(number_format($(this).find("option[value=" + $(this).val() + "]").attr("data-price"), 2));
        }
        tarifCalc();
    });
    if ($("form#Order .dtpicker").length) {
        $("form#Order .dtpicker").each(function () {
            $(this).datetimepicker({
                autoclose: true,
                todayBtn: true,
                todayHighlight: true,
                pickerPosition: 'bottomLeft',
                startDate: $(this).find("input").val()
            });
        });
        $("form#Order select[name=dropoff]").trigger("change");
        orderShowDate();
        tarifSelector();
        tarifCalc();
        $('form .dtpicker').datetimepicker().on('changeDate', function (e) {
            var datetime = date("Y-m-d H:i:s", strtotime(e.date + ""));
            if ($(this).hasClass("arrival")) {
                var selector = "form#Order .date.arrival ";
                $("form#Order .date.departure ").datetimepicker('setStartDate', datetime);
                if ($("form#Order .date.departure input").val() < datetime) {
                    $("form#Order .date.departure input").val(datetime);
                }
            } else {
                var selector = "form#Order .date.departure ";
                $("form#Order .date.arrival ").datetimepicker('setEndDate', datetime);
                if ($("form#Order .date.arrival input").val() > datetime) {
                    $("form#Order .date.arrival input").val(datetime);
                }
            }
            $(selector + " input").val(datetime);
            $("form#Order .date").datetimepicker('update');
            var days = ceil(abs(strtotime($("form#Order .date.arrival input").val()) - strtotime($("form#Order .date.departure input").val())) / 86400);
            $("form#Order .calc-rental").data("days", days);
            orderShowDate();
            tarifCalc();
        });
    }
    $(document).on("orders_after_formsave", function () {
        var inv_id = $("form#Order").data("data-wb-item");
        var total = $("form#Order input.calc-total").val();
        var phone = $("form#Order input[name=phone]").val();
        var payment = $("form#Order [name=payment]").val();
        if ($("#Order").length && $("form#Order [name=payment]").val() == "online") {


            var api_key = md5(inv_id + total + payment);
            if ($("#Order").length && $("form#Order [name=payment]").val() == "online") {
                var lang = "en-US";
                if ($("body").attr("data-lang") == "rus") {
                    lang = "ru-RU";
                }
                var widget = new cp.CloudPayments({
                    language: lang
                });
                widget.charge({ // options
                        publicId: 'pk_f4c8d7508c321e308e4432d147ceb', //id из личного кабинета
                        description: 'IntouchRussia Order ID: ' + inv_id, //назначение
                        amount: $("form#Order .total").data("total") * 1, //сумма
                        currency: $("form#Order .total").data("currency"), //валюта
                        invoiceId: inv_id, //номер заказа  (необязательно)
                        data: {
                            api_key: api_key,
                            inv_id: inv_id
                        }
                    },
                    function (options) { // success
                        $.redirect("/paysuccess", {
                            inv_id: inv_id,
                            api_key: api_key,
                            options: options
                        });
                    },
                    function (reason, options) { // fail
                        $.redirect("/payfail", {
                            api_key: api_key,
                            inv_id: inv_id,
                            options: options
                        });
                    });
            } else {
                $.redirect("/paysuccess", {
                    api_key: api_key,
                    inv_id: inv_id
                });
            }
        }
    });

});

$(window).resize(function () {
    adaptive();
});

function tarifSelector() {
    $("#tarifSelector > div:first-child > .btn-plan").addClass("active");
    $("#tarifSelector a").on("click", function () {
        $("#tarifSelector a").removeClass("active");
        $(this).addClass("active");
    });
    $("#tarifDropdown .dropdown-item").on("click", function () {
        $("#tarifDropdown [data-toggle]>span:first-child").html($(this).html());
    });
    $("#tarifSelector a[data-wb-ajax]:first").trigger("click");
}

function tarifChange(e, ajax, data) {
    var data = $.parseJSON(data);
    var lang = $("body").attr("data-lang");
    $("form#Order .calc-tarif").html(number_format(data.apr[lang], 2));
    if ($("#prodshow").attr("data-articul") == "sim") {
        $("#prodshow .oldprice > span").html(data.opr[lang]);
        $("#prodshow .price > span").html(data.apr[lang]);
    }
    $("form#Order input.tarif").val(data.id);
    $("form#Order .total .calc-tarif").html(str_replace(",", "", data.apr[lang]));
    var text = data.lang;
    $("#tarifFeatures").html(data.lang[lang].data.features);
    $("#modal_product_info .modal-body").html(data.lang[lang].data.text);
    $("#modal_product_info .modal-title").html(data.lang[lang].data.header);

    tarifCalc();
}

function tarifCalc() {
    $("form#Order .total .calc-shipping").html($("form#Order #dropoff option:selected").attr("data-price") * $("form#Order .total .currency").val())
    if ($("form#Order input.calc-rental").data("days") == undefined) {
        var days = 1;
    } else {
        var days = $("form#Order input.calc-rental").data("days") * 1;
    }
    if ($("form#Order input.calc-rental").data("price") == undefined) {
        var price = $("form#Order input.calc-rental").val() * 1;
        $("form#Order input.calc-rental").data("price", price);
    } else {
        var price = $("form#Order input.calc-rental").data("price") * 1;
    }
    var tarif = str_replace(",", "", $("form#Order .total .calc-tarif").html()) * 1;
    var rental = price * days;
    var deposit = str_replace(",", "", $("form#Order .total input.deposit").val()) * 1;
    var shipping = str_replace(",", "", $("form#Order .total .calc-shipping").html()) * 1;
    if (!is_numeric(rental)) {
        rental = 0;
    }
    if (!is_numeric(deposit)) {
        deposit = 0;
    }
    if (!is_numeric(tarif)) {
        tarif = 0;
    }
    if (!is_numeric(shipping)) {
        shipping = 0;
    }
    var total = number_format(tarif + rental + deposit + shipping, 2);
    $("form#Order .total .calc-rental").html(number_format(rental, 2));
    $("form#Order .total .calc-total").html(total);
    $("form#Order .total").data("total", str_replace(",", "", total));
    var lang = $("body").attr("data-lang");
    if (lang == "rus") {
        $("form#Order .total").data("currency", "RUB");
    }
    if (lang == "eng") {
        $("form#Order .total").data("currency", "USD");
    }
    if (lang == "chi") {
        $("form#Order .total").data("currency", "CNY");
    }

    console.log($("form#Order .total").data("currency"));
    $("form#Order input.calc-rental").val(str_replace(",", "", rental));
    $("form#Order input.calc-tarif").val(str_replace(",", "", tarif));
    $("form#Order input.calc-deposit").val(str_replace(",", "", deposit));
    $("form#Order input.calc-shipping").val(str_replace(",", "", shipping));
    $("form#Order input.calc-days").val(str_replace(",", "", days));
    $("form#Order input.calc-total").val(str_replace(",", "", total));
}

function orderShowDate() {
    $("form#Order .dtpicker").each(function () {
        var dateval = date("M d Y", strtotime($(this).find("input").val()))
        var timeval = date("H:i", strtotime($(this).find("input").val()))
        $(this).find(".dateval").html(dateval);
        $(this).find(".timeval").html(timeval);
    });
}

function adaptive() {

    var prod_text = $(".card-product .text-primary");
    $(prod_text).removeAttr("style");
    if ($(window).width() + 15 >= 768) {
        var h = 0;
        $(prod_text).each(function (i) {
            if ($(this).height() > h) {
                h = $(this).height() + 20;
            }
            $(prod_text).height(h);
        });
    }
    if ($(window).width() + 15 < 992) {
        $("#products section:last-child .card-product .text-primary").removeAttr("style");
    }
}

function presentDownload() {
    if ($("#presentDwnld").length) {
        $("#presentDwnld button").on("click", function () {
            //if (wb_check_required($("#presentDwnld"))) {
            if ($("#presentDwnld").attr("data-type") == "business-hotels") {
                var url = "/tpl/assets/present_hotels.pdf"
            }
            if ($("#presentDwnld").attr("data-type") == "business-hotels-top") {
                var url = "/tpl/assets/present_hotels.pdf"
            }
            if ($("#presentDwnld").attr("data-type") == "business-advertisers") {
                var url = "/tpl/assets/present_adv.pdf"
            }
            if ($("#presentDwnld").attr("data-type") == "business-tourism") {
                var url = "/tpl/assets/present_tour.pdf"
            }

            if (url !== undefined) {
                window.open(url, '_blank');
                window.focus();
            }
            //}
        });
    }
}

function faqCount() {
    if ($("body").attr("data-name") == "faqs" || $("body").attr("data-name") == "lifehacks") {
        $(".faq-categories > div").each(function () {
            var tab = $(this).find("a").attr("href");
            var count = $(tab).find("section").length;
            $(this).find(".faq-category-small span").html(count);
        });
    }
}

jQuery.fn.rowHeight = function (s) {
    return $(this).height();
}
