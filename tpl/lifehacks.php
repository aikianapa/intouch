<div data-wb-role="include" src="/tpl/wrapper.inc.php" data-wb-hide="*"></div>
<div data-wb-hide="*" data-wb-append="#wrapper">
<nav class="extra-nav py-20" role="include" src="/tpl/breadcrumb.inc.php">
</nav>

<main>
    <section class="py-40 py-md-60">
        <div class="container">
            <h1 class="h2 mb-40 text-center">{{lang[{{_VAR[lang]}}][data][header]}}</h1>

            <div class="row">
              <div class="col-12 col-lg-4">
                  <div class="row no-gutters faq-categories" role="tree" data-wb-item="lifehacks" data-wb-children="false">
                      <meta data-wb-hide="*" role="variable" var="active" value="active" data-wb-if='"{{_idx}}"="0"' else ="">
                      <div class="col-6">
                          <a href="#tab-{{id}}" class="faq-category {{_VAR[active]}}" data-toggle="tab">
                              <div class="faq-category-icon">
                                  <span class="fa fa-{{data[icon]}}"></span>
                              </div>
                              <div>{{data[{{_VAR[lang]}}]}}</div>
                              <div class="faq-category-small">{{_VAR[str_answers]}}: <span></span></div>
                          </a>
                      </div>
                  </div>

                  <a href="/contacts" class="faq-asc mt-20 mb-40">{{_VAR[btn_ask]}}</a>
              </div>



                <div class="col-12 col-lg-8">
                    <div class="tab-content" role="tree" data-wb-item="lifehacks" data-wb-level="0">
                        <meta data-wb-hide="*" role="variable" var="active" value="">
                        <meta data-wb-hide="*" role="variable" var="active" value="active" data-wb-where='"{{_idx}}"="0"'>
                        <meta data-wb-hide="*" role="variable" var="category" value="{{id}}">
                        <div class="tab-pane fade show {{_VAR[active]}}" id="tab-{{id}}">
                            <div id="tab-{{_VAR[category]}}-accordion" data-children=".faq-answer"  role="tree" data-wb-item="lifehacks" data-wb-branch="{{id}}" data-wb-parent="false">
                                <section class="faq-answer">
                                    <a data-toggle="collapse" data-parent="#tab-{{_VAR[category]}}-accordion" href="#tab-{{id}}" class="collapsed">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h2 class="h5 faq-answer-heading owf-ellipsis">{{data[{{_VAR[lang]}}]}}</h2>
                                            <span class="fa faq-answer-icon"></span>
                                        </div>
                                    </a>
                                    <div id="tab-{{id}}" class="collapse" role="tabpanel">
                                        <div class="faq-answer-text">
                                            <p>
                                                {{data[{{_VAR[lang]}}]}}
                                            </p>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

</div>
