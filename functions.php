<?php
// common functions
function wbBeforeEngine() {
    intouch_rus();
    intouch_https();
    intouch_setLanguage();
}

function intouch_https() {
    if ($_ENV["route"]["scheme"]=="http" AND $_ENV["route"]["domain"]=="intouchrussia.com") {
        $url="https://".$_ENV["route"]["host"].$_ENV["route"]["uri"];
        header("HTTP/1.1 301 Moved Permanently");
        header("Location: {$url}");
        exit();
    }
}

function intouch_rus() {
    if ($_ENV["route"]["subdomain"]!=="" AND $_ENV["route"]["domain"]=="intouchrussia.ru") {
        $url="http://".$_ENV["route"]["domain"].$_ENV["route"]["uri"];
        header("HTTP/1.1 301 Moved Permanently");
        header("Location: {$url}");
        exit();
    }
}

function intouch_setLanguage() {
	$els=wbTreeRead("elements");
	$els=$els["tree"];
	$langs=array();
    if ($_ENV["route"]["domain"]=="intouchrussia.ru") {$lang="rus";} else {$lang="eng";}
	foreach($els as $i => $l) {
		$langs[$l["id"]]=$l["data"]["subdomain"];
        if (isset($_ENV["route"]["subdomain"]) AND $_ENV["route"]["subdomain"]==$l["data"]["subdomain"]) {
            $lang=$l["id"];
        }
	}
    $_SESSION["lang"]=$lang;
}

function wbAfterEngine() {
    if ($_ENV["route"]["domain"]=="intouchrussia.ru") {
        $_ENV["DOM"]->find("#navbar_menu > ul > li:last")->remove();
    } elseif ($_ENV["route"]["domain"]=="intouchrussia.com") {
        $_ENV["DOM"]->find("#navbar_menu > ul > li:last > div.dropdown-menu > a:first-child")->remove();
    }

}


//wbItemRemove("orders",'_created >= "2018-09-13" AND _created < "2018-09-14"');
//wbMailer("info@intouchrussia.ru","oleg_frolov@mail.ru","Test","test message");
?>
