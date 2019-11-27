<meta role="variable" var="footer_class" value="bg-alternative">
<meta role="variable" var="footer_class" value="bg-business-dark" data-wb-where='"{{_ENV[route][item]}}" like "business"'>

<footer class="page-footer {{_VAR[footer_class]}}">
    <div class="bg-primary text-white text-center" role="formdata" data-wb-table="pages" data-wb-item="home" data-wb-field="lang[{{_VAR[lang]}}][data]">
        <div class="container lead py-30 py-lg-40 px-30 px-md-100 position-relative">
            {{footer}}
        </div>
    </div>


    <div class="text-white">
        <div class="container py-40">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <a href="/"><img src="assets/img/intouch-logo-inverse.svg" alt="InTouch" height="30"></a>

                    <address class="mt-40 mb-0">

                        <!--p class="mb-2" data-wb-role="formdata" data-wb-table="pages" data-wb-item="contacts" data-wb-hide="wb">{{lang[{{_VAR[lang]}}][data][footer]}}</p-->
                        <!--p class="mb-2 font-weight-normal">{{_VAR[phone]}}</p-->
                        <meta data-wb-role="variable" var="email" value="{{_SETT[email]}}">
                        <meta data-wb-role="variable" var="email" value="hotel@intouchrussia.com" data-wb-where='"{{_item}}"="business-hotels-top"'>
                        <p class="mb-40 mb-lg-0">{{_VAR[email]}}</p>
                    </address>
                </div>

                <div class="col-12 col-lg-7">
                    <div class="container-fluid p-0">
                        <div class="row" data-wb-role="tree" data-wb-item="botmenu" data-wb-level="0" data-wb-hide="wb">
                            <div class="col-12 col-sm-6 col-md-4">
                                <h5 class="text-white mb-3">{{data[{{_VAR[lang]}}]}}</h5>
                                <ul class="list-unstyled mb-30 mb-md-0" data-wb-role="foreach" data-wb-tpl="false" data-wb-from="children" data-wb-hide="wb">
                                    <li class="mb-2"><a href="/{{id}}" class="text-white">{{data[{{_VAR[lang]}}]}}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-white page-footer-border">
        <div class="container py-30">
            <div class="row align-items-center">
                <div class="col-12 offset-sm-2 col-sm-8 offset-lg-0 col-lg-4 order-lg-3 mb-20 mb-lg-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col px-2">
                            <img src="assets/img/payment/card-union.svg" class="img-fluid" alt="Union Pay"
                                 data-wb-role="where" data='"{{_VAR[footer_class]}}"<>"bg-business-dark"'>
                            <img src="assets/img/payment/card-union-biz.svg" class="img-fluid" alt="Union Pay"
                                 data-wb-role="where" data='"{{_VAR[footer_class]}}"="bg-business-dark"'>
                        </div>
                        <div class="col px-2">
                            <img src="assets/img/payment/card-visa.svg" class="img-fluid" alt="VISA">
                        </div>
                        <div class="col px-2">
                            <img src="assets/img/payment/card-master.svg" class="img-fluid" alt="Master Card"
                                 data-wb-role="where" data='"{{_VAR[footer_class]}}"<>"bg-business-dark"'>
                            <img src="assets/img/payment/card-master-biz.svg" class="img-fluid" alt="Master Card"
                                 data-wb-role="where" data='"{{_VAR[footer_class]}}"="bg-business-dark"'>
                        </div>
                        <div class="col px-2">
                            <img src="assets/img/payment/card-amex.svg" class="img-fluid" alt="American Express">
                        </div>
                        <div class="col px-2">
                            <img src="assets/img/payment/PayKeeper.png" class="img-fluid" alt="PayKeeper">
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4 order-lg-2 mb-20 mb-lg-0 text-center lead">
                    <a href="https://facebook.com/Intouchrussiacom-477679522628447/" target="_blank" class="text-white mx-2"><span class="fa fa-facebook-official"></span></a>
                    <a href="https://twitter.com/intouchrussia" target="_blank" class="text-white mx-2"><span class="fa fa-twitter"></span></a>
                    <a href="https://t.me/intouchrussia" target="_blank" class="text-white mx-2"><span class="fa fa-telegram"></span></a>
                    <a href="https://www.instagram.com/intouchrussia/" target="_blank" class="text-white mx-2"><span class="fa fa-instagram"></span></a>
                    <a href="https://www.youtube.com/c/InTouchRussia " target="_blank" class="text-white mx-2"><span class="fa fa-youtube-play"></span></a>
                    <a href="#" class="text-white mx-2"><span class="fa fa-weixin"></span></a>
                </div>

                <div class="col-12 col-lg-4 order-lg-1 text-center text-lg-left medium">
                    <div>© 2017-2018 In Touch Russia LLC</div>
                    <small role="where" data='"{{_VAR[lang]}}"="eng"'>Service for foreign tourists coming to Russia</small>
                    <small role="where" data='"{{_VAR[lang]}}"="rus"'>Сервис для путешественников по России</small>
                    <small role="where" data='"{{_VAR[lang]}}"="chi"'>提供给国外来俄罗斯旅游的客人的服务</small>
                </div>
            </div>
        </div>
    </div>
    <a href="#top" class="back-to-top"><span class="fa fa-chevron-up"></span></a>
</footer>

<script src="assets/js/common.min.js"></script>
<script data-wb-src="engine"></script>
<script data-wb-src="plugins"></script>
<script data-wb-src="datepicker"></script>


<meta data-wb-role="variable" var="yandex_counter" value="47184273"         data-wb-where='"{{_ENV[route][host]}}"="intouchrussia.com"' data-wb-hide="*">
<meta data-wb-role="variable" var="google_counter" value="UA-114181007-1"   data-wb-where='"{{_ENV[route][host]}}"="intouchrussia.com"' data-wb-hide="*">
<meta data-wb-role="variable" var="yandex_counter" value="47723059"         data-wb-where='"{{_ENV[route][host]}}"="intouchrussia.ru"' data-wb-hide="*">
<meta data-wb-role="variable" var="google_counter" value="UA-114181007-2"   data-wb-where='"{{_ENV[route][host]}}"="intouchrussia.ru"' data-wb-hide="*">


<script src="assets/js/scripts.js"></script>
<!-- Yandex.Metrika counter --> <script type="text/javascript" > (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter{{_VAR[yandex_counter]}} = new Ya.Metrika({ id:{{_VAR[yandex_counter]}}, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/{{_VAR[yandex_counter]}}" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id={{_VAR[google_counter]}}"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', '{{_VAR[google_counter]}}');
</script>

</body>
</html>
