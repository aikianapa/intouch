<div data-wb-role="include" src="/tpl/wrapper.inc.php" data-wb-hide="*"></div>
<div data-wb-hide="*" data-wb-append="#wrapper">
<nav class="extra-nav py-20" role="include" src="/tpl/breadcrumb.inc.php">
</nav>

<main>
    <section class="bg-lighter py-40 py-md-60">
        <div class="container">
            <h1 class="h2 underline-center">{{lang[{{_VAR[lang]}}][data][header]}}</h1>
            <div class="text-secondary text-center mb-40 mb-md-60">{{lang[{{_VAR[lang]}}][data][footer]}}</div>

            <div class="text-center mb-40 mb-md-60">{{lang[{{_VAR[lang]}}][data][text]}}</div>

            <div class="row">
                <div class="col-12 col-md-6 large">
                    <p><span class="text-primary w-50px text-center fa fa-lg fa-map-marker"></span> {{lang[{{_VAR[lang]}}][data][footer]}}</p>
                    <p><span class="text-primary w-50px text-center fa fa-lg fa-envelope"></span> {{_SETT[email]}}</p>
                    <!--p><span class="text-primary w-50px text-center fa fa-lg fa-phone"></span> {{_SETT[phone]}}</p-->
                </div>

                <div class="col-12 col-md-6">
                    <form action="/ajax/mailer" method="post" class="ajax-form contacts-form" novalidate>
                            <div class="result-message"></div>
                            <div class="form-group ">
                                <input type="text" class="form-control" name="name" data-label="Name" placeholder="{{_VAR[your_name]}}" required>
                            </div>

                            <div class="form-group ">
                                <input type="text" class="form-control" name="contacts" data-label="Contact" placeholder="{{_VAR[your_contact]}}" required>
                            </div>

                            <div class="form-group ">
                                <textarea class="form-control" name="message" rows="auto" data-label="Message" placeholder="{{_VAR[your_msg]}}" minlength="20" required></textarea>
                            </div>

                            <div class="form-row">
                                <div class="col-12 col-md-6 pt-3 order-md-1 text-md-right">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" data-mail="false">
                                            {{_VAR[nobot]}}
                                        </label>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <button type="submit" class="btn btn-primary" disabled>{{_VAR[btn_send]}}</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

</div>
