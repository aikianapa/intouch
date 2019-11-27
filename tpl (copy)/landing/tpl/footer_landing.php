
<footer class="page-footer <?= strpos($_SERVER['REQUEST_URI'], 'business') ? 'page-footer-business' : ''; ?>">
    <a href="#top" class="back-to-top"><span class="fa fa-chevron-up"></span></a>


    <div class="bg-primary text-white text-center" role="formdata" data-wb-table="pages" data-wb-item="home" data-wb-field="lang[{{_VAR[lang]}}][data]">
        <div class="container lead py-30 py-lg-40 px-30 px-md-100 position-relative">
            {{footer}}
        </div>
    </div>


    <div class="text-white">
        <div class="container py-40">
            <div class="row align-items-center">
                <div class="col-12 col-lg-4 mb-20 mb-lg-0 text-center text-lg-left">
                    <img src="assets/img/intouch-logo-inverse.svg" alt="InTouch" height="30">
                </div>

                <div class="col-12 col-lg-4 col-xl-5 mb-20 mb-lg-0 text-center text-lg-left lead">
                    <a href="https://facebook.com/Intouchrussiacom-477679522628447/" target="_blank" class="text-white mx-2"><span class="fa fa-facebook-official"></span></a>
                    <a href="https://twitter.com/intouchrussia" target="_blank" class="text-white mx-2"><span class="fa fa-twitter"></span></a>
                    <a href="https://www.instagram.com/intouchrussia/" target="_blank" class="text-white mx-2"><span class="fa fa-instagram"></span></a>
                    <a href="https://www.youtube.com/channel/UCd7aOUNA6yHEzbDALgRrLfg" target="_blank" class="text-white mx-2"><span class="fa fa-youtube-play"></span></a>
                    <a href="#" class="text-white mx-2"><span class="fa fa-weixin"></span></a>
                    <a href="https://t.me/intouchrussia" target="_blank" class="text-white mx-2"><span class="fa fa-telegram"></span></a>
                </div>

                <div class="col-12 col-lg-4 col-xl-3 text-center text-lg-left medium">
                    <div>© 2017 In Touch Russia LLC</div>
                    <small role="where" data='"{{_VAR[lang]}}"="eng"'>Service for foreign tourists coming to Russia</small>
                    <small role="where" data='"{{_VAR[lang]}}"="rus"'>Сервис для путешественников по России</small>
                    <small role="where" data='"{{_VAR[lang]}}"="chi"'>提供给国外来俄罗斯旅游的客人的服务</small>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="assets/js/common.min.js"></script>
</body>
</html>
