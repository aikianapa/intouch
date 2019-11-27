<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <base href="/tpl/landing/">
    <title>InTouch</title>
    <link rel="stylesheet" href="assets/css/common.min.css">
    <meta role="variable" var="lang" value="rus" data-wb-where='"{{_SESS[lang]}}"=""' data-wb-hide="*">
    <meta role="variable" var="lang" value="{{_SESS[lang]}}" data-wb-where='"{{_SESS[lang]}}">""' data-wb-hide="*">
    <meta role="variable" var="lang" value="{{_ENV[route][params][lang]}}" data-wb-where='"{{_ENV[route][params][lang]}}">""' data-wb-hide="*">
    <meta role="variable" var="data" value="{{lang[{{_VAR[lang]}}]}}" data-wb-hide="*">
    <div role="tree" data-wb-item="elements" data-wb-branch="{{_VAR[lang]}}" data-wb-parent="false" data-wb-hide="*">
        <meta role="variable" var="{{id}}" value="{{name}}" data-wb-hide="*">
    </div>
</head>
<body class="pt-0">
<header id="top" class="page-header">
    <nav class="navbar fixed-top navbar-expand-lg navbar-light py-lg-30 navbar-background">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="assets/img/intouch-logo-short.svg" class="d-md-none" height="30" alt="InTouch">
                <img src="assets/img/intouch-logo.svg" class="d-none d-md-block" height="30" alt="InTouch">
            </a>

            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar_menu" aria-controls="navbar_menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar_menu">
                <include data-wb-from="lang[{{_VAR[lang]}}][data][text]" outerHtml="ul:eq(0)"></include>
            </div>
        </div>
    </nav>
</header>
