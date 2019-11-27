<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<base href="/tpl/">
    <link rel="shortcut icon" href="/tpl/assets/img/favicon.png">
    <meta name="google-site-verification" content="8uZMHjKJR_lfQAKPysL6S9cP5FVlvIvEhmhghnv__Wg" />
    <meta name="mailru-domain" content="REMWvpsSxDOjAUd1" />
    <meta role="variable" var="lang" value="rus" data-wb-where='"{{_SESS[lang]}}"=""' data-wb-hide="*">
    <meta role="variable" var="lang" value="{{_SESS[lang]}}" data-wb-where='"{{_SESS[lang]}}">""' data-wb-hide="*">
    <meta role="variable" var="data" value="{{lang[{{_SESS[lang]}}]}}" data-wb-hide="*">
    <div role="tree" data-wb-item="elements" data-wb-branch="{{_VAR[lang]}}" data-wb-parent="false" data-wb-hide="*">
        <meta role="variable" var="{{id}}" value="{{name}}" data-wb-hide="*">
    </div>

    <title>{{lang[{{_VAR[lang]}}][name]}}</title>
    <link rel="stylesheet" href="assets/css/preloader.css">
    <link rel="stylesheet" href="assets/css/common.css" >
    <link rel="stylesheet" href="assets/css/custom.css">
</head>
<body data-lang="{{_VAR[lang]}}" data-name="{{_item}}">
<div class="preloader text-center">
    <img src="assets/img/intouch-logo.svg" class="img-responsive" alt="In Touch">
</div>
<header id="top" class="page-header">
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white py-lg-30">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="assets/img/intouch-logo-short.svg" class="d-md-none" height="30" alt="InTouch">
                <img src="assets/img/intouch-logo.svg" class="d-none d-md-block" height="30" alt="InTouch">
            </a>

            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar_menu" aria-controls="navbar_menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar_menu">
                <ul class="navbar-nav ml-auto" data-wb-role="tree" data-wb-item="mainmenu" data-wb-hide="wb">
                    <li class="nav-item">
                        <a class="nav-link {{data[class]}}" href="/{{id}}">{{data[{{_VAR[lang]}}]}}</a>
                    </li>
                </ul>
                    <li class="nav-item dropdown dropdown-choose-lang text-uppercase" data-wb-append="#navbar_menu .navbar-nav">
                        <a class="nav-link dropdown-toggle pr-0" href="#" data-toggle="dropdown">
                            <span class="badge badge-primary">{{_VAR[{{_VAR[lang]}}]}}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" data-wb-role="tree" data-wb-item="elements" data-wb-level="0" data-wb-hide="wb">
                            <meta role="variable" var="active" value="" data-wb-hide="*">
                            <meta role="variable" var="active" value="active" data-wb-where='"{{id}}"="{{_VAR[lang]}}"' data-wb-hide="*">
                            <a class="dropdown-item {{_VAR[active]}}" href="/module/lang/{{id}}/">{{name}}</a>
                        </div>
                    </li>
            </div>
        </div>
    </nav>
</header>
