<div data-wb-role="include" src="/tpl/wrapper.inc.php" data-wb-hide="*"></div>
<div data-wb-hide="*" data-wb-append="#wrapper">
<nav class="extra-nav py-20" role="include" src="/tpl/breadcrumb.inc.php"></nav>
<main>
    <script data-wb-append="body">
        $(document).ready(function() {
            $('body').on('click', '.scroll-button-top', function (e){
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: 0
                },1000);
            });

            $(document).on("wb_required_success",function(a,b,c){
              $("#here").removeClass("d-none").removeClass("error");
            });
            $(document).on("wb_required_danger",function(a,b,c){
                $("#here").removeClass("d-none").addClass("error");
            });
            $(document).on("wb_required_false",function(ev,inp){
              $(inp).parents(".custom-text-container, .custom-radio-container, .custom-checkbox-container").addClass("error");
              $(".bootstrap-growl").remove();
            });
            $(document).on("wb_required_true",function(ev,inp){
              $(inp).parents(".custom-text-container, .custom-radio-container, .custom-checkbox-container").removeClass("error");
            });

            $("#policy-checkbox").on("click",function(){
                if ($(this).is(":checked")) {
                    $("button.btn-outline-primary").prop("disabled",false);
                } else {
                    $("button.btn-outline-primary").prop("disabled",true);
                }
            });
        });
    </script>
    <meta data-wb-selector="input,select,textarea" data-wb-attr="required" value="true">

    <form class="container" method="post">
      <input type="hidden" name="_subject" value="Заказ e-visa">
      <input type="hidden" name="_mailto" value="{{_SETT.evisa_mail}}">
        <div id="registerform" class="registerform row mt-60" data-rows="1">
            <section id="here" class="d-none validation correct col-12 col-sm-12 offset-sm-12 col-md-12 col-lg-12">
                <span></span>
            </section>

            <section class="service=form-section full-width col-12 col-sm-12 offset-sm-12 col-md-12">
                <div class="">
                <h1>RUSSIAN E-VISA APPLICATION SUBMISSION<br> SERVICE FORM</h1>
                </div>
                <div class="">
                    <div class="custom-text-container">
                        <input type="text" placeholder="Visa applicant ...">
                    </div>
                    <div class="custom-text-container">
                        <input type="text" placeholder="Client (person or company) ...">
                    </div>
                    <div class="custom-text-container">
                        <input type="text" placeholder="Address (person or company) ...">
                    </div>
                    <div class="custom-text-container">
                        <input type="phone  " placeholder="Mobile phone number ...">
                    </div>
                    <div class="custom-text-container">
                        <input type="email" placeholder="E-mail ...">
                    </div>
                </div>
            </section>

            <section class="visa-delivery-section full-width">
                <h2>VISA DELIVERY METHOD</h2>
                <label class="custom-radio-container">
                    <input type="radio" name="visa-delivery">
                    <span class="checkmark"></span>
                    <label class="ie-label-padding">Shipped by express mail (incl. shipping costs) to the address mentioned above / to another address</label>
                </label>
                <label class="custom-radio-container">
                    <input type="radio" name="visa-delivery">
                    <span class="checkmark"></span>
                    <label>By email according to the email address given in this order</label>
                </label>
                <p>
                    The Russian e-visa application will be sent electronically to the authority's system.
                    The e-visa takes effect from the date of issue and is valid for 30 days, during which you can make one return trip to Leningrad area, St. Petersburg (including Vyborg and Karelian Strait) or Kaliningrad for a maximum of 8 days.
                </p>
            </section>

            <section class="process-is-following-section">
                <h2>The process is following</h2>
                <ol>
                    <li>
                        Carefully fill in the visa application submission service form (see under). It is important that you answer all questions in the service form to avoid your e-visa to be delayed / denied due to incomplete information. Save the document.
                    </li>
                    <li>
                        Return to us by email to <a href="mailto:evisaintouch@gmail.com">evisaintouch@gmail.com</a><br>
                        a. Copy of your passport information page<br>
                        b. Passport photo
                    </li>
                    <li>
                        With the help of these documents we will start the process. The e-visa will be issued within 2 - 6 days after we have submitted your online application. We will send the ready e-visa to you according to your oder.
                    </li>
                </ol>
            </section>

            <section class="service-and-payment-section">
                <h2>Service fee and payment</h2>
                <p>
                    Our service fee {{_sett.price_evisa}} eur can be paid in advance (by a payment link sent to your email), at our office or online in Paytrail payment service. We charge the corporate customers according to the agreement.
                </p>
            </section>
            <section class="contact-us-section">
                <h2>Contact us</h2>
                <p>
                    If you have any questions regarding your e-visa, please contact our visa specialist,
                    <a href="mailto:evisaintouch@gmail.com">evisaintouch@gmail.com</a>, phone...... (Mon - Fri at 9 – 17). We will be happy to assist you.
                </p>
            </section>

            <section class="remarks-section">
                <h2>Remarks</h2>
                <p>
                    Our service is not responsible for the authority's decision not to issue an e-visa. If an e-visa is not issued, you can apply for a standard visa after a negative e-visa decision.
                </p>
            </section>
            <section>
                <h2>Cancellation policy for your e-visa order</h2>
                <p>
                    You can cancel your e-visa order free of charge until we have received your visa documentation. If the documents have already arrived, we will charge {{_sett.price_evisa_cancel}} euro cancellation fee. If we have begun filling the electronic e- visa application to authority ́s system, we will charge the full e-visa service cost of {{_sett.price_evisa}} euro for the cancellation.
                </p>
            </section>

            <section class="service-form-section">
                <h1>SERVICE FORM FOR RUSSIAN E-VISA<br>
                    APPLICATION</h1>

                <ol>
                    <li>
                        You have chosen InTouch service to apply for Russian e-visa on your behalf
                    </li>
                    <li>
                        Kindly fill this Service form carefully, bring, mail or email it for us,
                        <a href="mailto:evisaintouch@gmail.com">evisaintouch@gmail.com</a>, together with your passport photo and copy of your passport name page.
                    </li>
                    <li>
                        We will take care of the e-visa and deliver it for you according to your order.
                    </li>
                    <li>
                        E-visa will be ready in 2 – 6 days of filing the application.
                    </li>
                    <li>
                        Our service fee is {{_sett.price_evisa}} euro (incl. vat)
                    </li>
                </ol>
            </section>

            <section class="personal-details">
                <h2>PERSONAL DETAILS</h2>
                <div class="custom-text-container">
                    <input type="text" placeholder="SURNAME As in passport ...">
                </div>
                <div class="custom-text-container">
                    <input type="text" placeholder="FIRST NAME, MIDDLE NAME, PATRONYMIC NAMES As in passport ...">
                </div>
                <div class="d-flex">
                    <div class="no-padding col-6 col-lg-6">
                        <label class="custom-radio-container">
                            <input type="checkbox" name="have-other-name" class="control-value-othername">
                            <span class="checkmark"></span>
                            <label>
                                <p>HAVE YOU EVER HAD OTHER <br>NAMES?<br>
                                    <span>(maiden name, pseudonym, holy order etc.)</span>
                                </p>
                            </label>
                        </label>
                    </div>
                    <div class="no-padding col-6 col-lg-6">
                        <div class="custom-text-container control-show-othername-on">
                            <input type="text" name="other-name" class="" data-label="Other names" placeholder="Explain ...">
                        </div>
                    </div>
                </div>
                <p>
                    The Russian e-visa application will be sent electronically to the authority's system.
                    The e-visa takes effect from the date of issue and is valid for 30 days, during which you can make one return trip to Leningrad area, St. Petersburg (including Vyborg and Karelian Strait) or Kaliningrad for a maximum of 8 days.
                </p>
            </section>

            <section class="travel-information-section full-width">
                <div class="green-title">
                    <div>
                        TRAVEL INFORMATION
                        <hr>
                    </div>
                </div>
                <h2>PURPOSE OF VISIT</h2>
                <div class="d-flex">
                    <div class="width-third">
                        <label class="custom-radio-container">
                            <input type="radio" name="purpose-visit">
                            <span class="checkmark"></span>
                            <label>Tourism</label>
                        </label>
                    </div>
                    <div class="width-third">
                        <label class="custom-radio-container">
                            <input type="radio" name="purpose-visit">
                            <span class="checkmark"></span>
                            <label>Sport relations</label>
                        </label>
                    </div>
                    <div class="width-third">
                        <label class="custom-radio-container">
                            <input type="radio" name="purpose-visit">
                            <span class="checkmark"></span>
                            <label>Scientific-technical relations</label>
                        </label>
                    </div>
                </div>
                <div class="d-flex d-flex-margin-bottom">
                    <div class="width-third">
                        <label class="custom-radio-container">
                            <input type="radio" name="purpose-visit">
                            <span class="checkmark"></span>
                            <label>Business</label>
                        </label>
                    </div>
                    <div class="width-third">
                        <label class="custom-radio-container">
                            <input type="radio" name="purpose-visit">
                            <span class="checkmark"></span>
                            <label>Cultural relations</label>
                        </label>
                    </div>
                </div>
                <div class="custom-text-container">
                    <input type="text" placeholder="VISIT AREA ...">
                </div>
                <div class="custom-text-container">
                    <input type="datepicker" placeholder="DATE OF ENTRY INTO RUSSIA ...">
                </div>
            </section>

            <section class="intended-places-section full-width">
                <h2>INTENDED PLACES OF STAY IN THE RUSSIAN FEDERATION</h2>
                <div class="d-flex">
                    <div class="width-third">
                        <label class="custom-radio-container">
                            <input type="radio" name="reservation" value="hotel" class="control-value-rsvrn" >
                            <span class="checkmark"></span>
                            <label>Hotel</label>
                        </label>
                    </div>
                    <div class="full-width">
                        <div class="custom-text-container control-show-rsvrn-hotel control-hide-rsvrn-oneday">
                            <input type="text" placeholder="Hotel name, address, phone, email (if available) ...">
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="width-third">
                        <label class="custom-radio-container">
                            <input type="radio" name="reservation" value="individual" class="control-value-rsvrn">
                            <span class="checkmark"></span>
                            <label>Individual</label>
                        </label>
                    </div>
                    <div class="full-width control-show-rsvrn-individual control-hide-rsvrn-oneday">
                        <div class="custom-text-container">
                            <textarea type="text" placeholder="Family name, first name(s) of the individual, address, &#10;phone number, email (if available) ..."></textarea>
                        </div>
                    </div>
                </div>
                <div class="full-width">
                    <label class="custom-radio-container">
                        <input type="radio" name="reservation" value="oneday" class="control-value-rsvrn">
                        <span class="checkmark"></span>
                        <label>One day trip
                            (no reservations)</label>
                    </label>
                </div>
            </section>

            <section class="russia-visited-section full-width">
                <h2>HAVE YOU EVER VISITED RUSSIA?</h2>
                <div class="d-flex">
                    <div class="yes-no-checkbox-container">
                        <label class="custom-radio-container">
                            <input type="radio" name="russia-visited" value="no" class="control-value-rusvis">
                            <span class="checkmark"></span>
                            <label>No</label>
                        </label>
                        <label class="custom-radio-container">
                            <input type="radio" name="russia-visited" value="yes" class="control-value-rusvis">
                            <span class="checkmark"></span>
                            <label>Yes</label>
                        </label>
                    </div>
                    <div class="full-width control-show-rusvis-yes">
                        <div class="custom-text-container">
                            <input type="text" placeholder="HOW MANY TIMES HAVE YOU BEEN TO RUSSIA? ...">
                        </div>
                        <div class="custom-text-container">
                            <input type="text" placeholder="DATE OF LAST TRIP TO RUSSIA? From - To ...">
                        </div>
                    </div>
                </div>
            </section>

            <section class="home-adress-details-section full-width">
                <div class="green-title">
                    <div>
                        HOME ADDRESS DETAILS
                        <hr>
                    </div>
                </div>
                <div class="full-width">
                    <div class="custom-text-container">
                        <input type="text" placeholder="HOME ADDRESS Street address, index, city ...">
                    </div>
                    <div class="custom-text-container">
                        <input type="text" placeholder="PHONE NUMBER WITH COUNTRY CODE ...">
                    </div>
                    <div class="custom-text-container">
                        <input type="email" placeholder="E-MAIL ....">
                    </div>
                </div>
            </section>

            <section class="work-details-section full-width">
                <div class="green-title">
                    <div>
                        WORK (STUDY) DETAILS
                        <hr>
                    </div>
                </div>
                <h2>DO YOU WORK (STUDY) IN THE PRESENT TIME?</h2>
                <div class="d-flex">
                    <div class="width-third">
                        <label class="custom-radio-container">
                            <input type="radio" name="work-details" value="work" class="control-value-workdetails">
                            <span class="checkmark"></span>
                            <label>Work</label>
                        </label>
                    </div>
                    <div class="width-third">
                        <label class="custom-radio-container">
                            <input type="radio" name="work-details" value="retired" class="control-value-workdetails">
                            <span class="checkmark"></span>
                            <label>Retired</label>
                        </label>
                    </div>
                    <div class="width-third">
                        <label class="custom-radio-container">
                            <input type="radio" name="work-details" value="husband" class="control-value-workdetails">
                            <span class="checkmark"></span>
                            <label>Housewife/husband</label>
                        </label>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="width-third">
                        <label class="custom-radio-container">
                            <input type="radio" name="work-details" value="study" class="control-value-workdetails">
                            <span class="checkmark"></span>
                            <label>Study</label>
                        </label>
                    </div>
                    <div class="width-third">
                        <label class="custom-radio-container">
                            <input type="radio" name="work-details" value="unemploued" class="control-value-workdetails">
                            <span class="checkmark"></span>
                            <label>Unemployed</label>
                        </label>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="width-third">
                        <label class="custom-radio-container">
                            <input type="radio" name="work-details" value="specify" class="control-value-workdetails">
                            <span class="checkmark"></span>
                            <label>
                                Else, specify
                            </label>
                        </label>
                    </div>
                    <div class="full-width">
                        <div class="custom-text-container control-show-workdetails-specify">
                            <input type="text" placeholder="Else, specify ...">
                        </div>
                    </div>
                </div>
                <div class="custom-text-container control-hide-workdetails-specify
                    control-show-workdetails-work
                    control-show-workdetails-retired
                    control-show-workdetails-study
                    control-show-workdetails-unemploued
                    ">
                    <input type="text" placeholder="NAME OF EMPLOYER (SCHOOL)/ PREVIOUS EMPLOYER) ...">
                </div>
                <div class="custom-text-container control-hide-workdetails-specify
                    control-show-workdetails-work
                    control-show-workdetails-retired
                    control-show-workdetails-study
                    control-show-workdetails-unemploued
                    ">
                    <input type="text" placeholder="WORK POSITION ...">
                </div>
                <div class="custom-text-container control-hide-workdetails-specify
                    control-show-workdetails-work
                    control-show-workdetails-retired
                    control-show-workdetails-study
                    control-show-workdetails-unemploued
                    ">
                    <input type="text" placeholder="EMPLOYER (SCHOOL) ADDRESS ...">
                </div>
                <div class="custom-text-container control-hide-workdetails-specify
                    control-show-workdetails-work
                    control-show-workdetails-retired
                    control-show-workdetails-study
                    control-show-workdetails-unemploued
                    ">
                    <input type="text" placeholder="WORK TELEPHONE AND EMAIL ...">
                </div>
            </section>

            <section class="ralatives-in-russia-section full-width">
                <div class="green-title">
                    <div>
                        RELATIVES IN RUSSIA
                        <hr>
                    </div>
                </div>
                <h2>DO YOU CURRENTLY HAVE RELATIVES IN RUSSIA?</h2>
                <div class="d-flex">
                    <div class="yes-no-checkbox-container">
                        <label class="custom-radio-container">
                            <input type="radio" name="relatives-in-russia" value="no" class="control-value-relatives">
                            <span class="checkmark"></span>
                            <label>No</label>
                        </label>
                        <label class="custom-radio-container">
                            <input type="radio" name="relatives-in-russia" value="yes" class="control-value-relatives">
                            <span class="checkmark"></span>
                            <label>Yes</label>
                        </label>
                    </div>
                    <div class="full-width control-show-relatives-yes">
                        <div class="custom-text-container">
                            <input type="text" placeholder="RELATION DEGREE ...">
                        </div>
                        <div class="custom-text-container">
                            <input type="text" placeholder="SURNAME AND FIRST NAME ...">
                        </div>
                    </div>
                </div>
                <div class="custom-text-container control-show-relatives-yes">
                    <input type="datepicker" placeholder="DATE OF BIRTH ...">
                </div>
                <div class="custom-text-container control-show-relatives-yes">
                    <input type="text" placeholder="ADDRESS ...">
                </div>
            </section>

            <section class="policy-agree-block-section full-width">
                <hr>
                <div class="d-flex">
                    <div class="policy-agree-checkbox">
                        <label class="custom-checkbox-container">
                            <input type="checkbox" id="policy-checkbox" name="policy-checkbox" data-label="Согласие с политикой">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="policy-agree-text">
                    I declare that the information provided in this application is correct and I understand that the visa service provider is not responsible for the case that the providing false information will result denial of e-visa, as well as other measures it might cause. I promise to leave Russia when my e-visa expires. I am aware that the existence of e-visa does not automatically guarantee the right of entry to Russia. If I am denied entry, I will not demand any reimbursement of costs.
                    </div>
                </div>
                <hr>
            </section>

            <div class="submit-button-container mb-5">
                <button href="#here" disabled data-wb-ajax="/ajax/mail/" class="scroll-button-top btn btn-outline-primary btn-sm">Submit</button>
            </div>
        </div>
    </form>
</main>
</div>
