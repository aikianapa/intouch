<?php
wbRouterAdd("/products/tarif/(:any)","/form/ajax_tarif/form:products/item:$1");

function products_show($Item=null) {
    if ($Item==null) {$Item=$_ENV["ITEM"];}
    $out=wbGetTpl("product-new.php");
    $Item=productsBeforeItemShow($Item);
    $out->wbSetData($Item);
    return $out;
}

function products_ajax_tarif() {
    $tarif=wbItemRead("products",$_ENV["route"]["item"]);
    $tarif=productsBeforeItemShow($tarif);
    $out=products_show($tarif);
    $out=$out->find("#description",0)->beautyHtml();
    $tarif["lang"][$_SESSION["lang"]]["data"]["features"]=$out;

    echo json_encode($tarif,JSON_HEX_QUOT|JSON_HEX_TAG|JSON_HEX_AMP|JSON_HEX_APOS);
    die;
}


function productsBeforeItemShow($Item) {
    $modes=array("show","ajax_tarif");
    if (in_array($_ENV["route"]["mode"],$modes)) {
        $Item=wbItemToArray($Item);
        $el=wbTreeRead("elements");
        $lang=$_SESSION["lang"];
        $dr=wbTreeRead("dict_dropoff_location"); $dr=$dr[$lang];
        $Item["dropoff_label"]=$dr["name"];
        $Item["dropoff"]=array();
        if (!is_array($dr["children"])) $dr["children"]=[];
        foreach($dr["children"] as $ch) {
            $Item["dropoff"][$ch["id"]]=array(
                "id"=>$ch["id"],
                "name"=>$ch["name"],
                "price"=>$ch["data"]["price"]*$_ENV["settings"]["cur_".$lang]
            );
        }
        $Item["apr"][$lang]=number_format (floatval($Item["lang"][$_SESSION["lang"]]["data"]["price"]),2);
        $Item["opr"][$lang]=number_format (floatval($Item["lang"][$_SESSION["lang"]]["data"]["priceold"]),2);
        $Item["dep"][$lang]=number_format (floatval($Item["lang"][$_SESSION["lang"]]["data"]["deposit"]),2);
        $Item["lang"][$lang]["data"]["text_short"]=wbGetWords($Item["lang"][$lang]["data"]["text"],40);

        $dl=wbFromString($Item["lang"][$_SESSION["lang"]]["data"]["features"]);
        $Item["countFeatures"]=$dl->find("dt")->length;
        unset($dl);
    }

    return $Item;
}

function productsBeforeItemSave($Item) {
    $Item["_furl"]=wbFurlPut($Item,$Item["name"]);
    return $Item;
}

function productsBeforeItemRemove($Item) {
    wbFurlPut($Item,null,"remove");
    return $Item;
}

?>
