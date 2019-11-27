<?php
function newsBeforeShowItem($Item) {
    $Item["short"]=wbGetWords(strip_tags($Item["lang"][$_ENV["variables"]["lang"]]["data"]["text"]),100);
    $Item["header"]=$Item["lang"]["eng"]["data"]["header"];
    $Item["day"]=date("d",strtotime($Item["date"]));
    $Item["datetime"]=date("d.m.Y H:i",strtotime($Item["date"]));
    $Item["month"]=newsShortMonth($Item["date"]);
    if (!isset($Item["author"]) OR $Item["author"]="") {$Item["author"]="John Snow";}
    return $Item;
}

function news_show() {
    $Item=$_ENV["ITEM"];
    $out=wbGetTpl("article-show.php");
    $Item=wbItemToArray($Item);
    $Item["date"]=date("d.m.Y",strtotime($Item["date"]));
    $text=wbFromString($Item["lang"][$_SESSION["lang"]]["data"]["text"]);
    if (!$text->find("img")->length AND isset($Item["image"][0]["img"]) AND $Item["image"][0]["img"]>"") {
      $text->prepend("<img src='/uploads/news/{$Item["id"]}/{$Item["image"][0]["img"]}'>");
    }
    $text->find("img")->addClass("img-fluid");
    $Item["lang"][$_SESSION["lang"]]["data"]["text"]=$text->outerHtml();
    $Item["header"]=$Item["lang"][$_SESSION["lang"]]["data"]["header"];
    unset($text);
          if ($Item["article"]=="on") {
            // пагинация внутри статьи
            $alist=wbItemList("news",'active="on" AND article="on"');
            $pag=array();
            foreach($alist as $art) {
                if (!isset($afirst)) {$afirst=$art["_furl"];}
                if (isset($pag["curr"]) AND !isset($pag["next"]) ) {$pag["next"]=$art["_furl"];}
                if ($art["id"]==$Item["_furl"]) {$pag["curr"]=$art["_furl"];}
                if (!isset($pag["curr"])) {$pag["prev"]=$art["_furl"];}
                $alast=$art["_furl"];
            }
            if (!isset($pag["prev"]) OR $pag["prev"]==$pag["curr"]) {$pag["prev"]=$alast;}
            if (!isset($pag["next"]) OR $pag["next"]==$pag["curr"]) {$pag["next"]=$afirst;}
            $Item["pag"]=$pag;
          }
    $out->wbSetData($Item);
    echo $out; die;
    return $out;
}

function newsBeforeItemSave($Item) {
    if (!isset($Item["author"])) {$Item["author"]=$_SESSION["user_name"];}
    $Item["author"]=$_SESSION["user_name"];
    $str=json_decode($Item["lang"],true);
    $str=$str[0]["data"]["header"];
    $Item["_furl"]=wbFurlPut($Item,$str);
    unset($header);
  return $Item;
}


function newsBeforeItemRemove($Item) {
    wbFurlPut($Item,null,"remove");
    return $Item;
}

function newsShortMonth($date) {
if (!isset($_SESSION["lang"]) OR $_SESSION["lang"]=="eng") {
  $month=date("M",strtotime($date));
} else {
  $month=date("m",strtotime($date))*1;
  $lang=$_SESSION["lang"];
  $rus=array("Янв","Фев","Мар","Апр","Май","Июн","Июл","Авг","Сен","Окт","Ноя","Дек");
  $chi=array("一月","二月","三月","四月","五月","六月","七月","八月","九月","十月","十一月","十二月");
  $month=$$lang[$month];
}
return $month;
}

?>
