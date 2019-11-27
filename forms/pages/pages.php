<?php
function pagesAfterItemRead($Item) {
    $Item=wbItemToArray($Item);
    if ($_ENV["route"]["mode"]=="show"
        AND $_ENV["route"]["item"]=="paysuccess"
        AND $_ENV["route"]["order"]=="true"
        AND isset($_POST["InvoiceId"])
        ) {
        $order=wbItemRead("orders",$_POST["InvoiceId"]);
        if (!isset($order["payed"]) OR $order["payed"]!=="on") {
            $order["payed"]="on";
            $order["paydate"]=date("Y-m-d H:i:s");
            wbItemSave("orders",$order);
        }
        echo json_encode(array("code"=>0));
        die;
    }
    return $Item;
}

function pagesBeforeItemShow($Item) {
    if (isset($Item["lang"][$_SESSION["lang"]]["data"]["meta_description"])) {
        $Item["meta_description"]=$Item["lang"][$_SESSION["lang"]]["data"]["meta_description"];;
        $Item["meta_keywords"]=$Item["lang"][$_SESSION["lang"]]["data"]["meta_keywords"];
        $Item["head_add"]=$Item["lang"][$_SESSION["lang"]]["data"]["head_add"];
        $Item["head_add_active"]="on";
    }
    return $Item;   
}
?>