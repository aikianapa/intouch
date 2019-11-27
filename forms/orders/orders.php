<?php
function ordersAfterItemRead($Item)
{
    if ($_ENV["route"]["mode"] == "edit") {
        $dr = wbTreeRead("dict_dropoff_location");
        $dr = wbItemToArray($dr["tree"]);
        $dr = $dr[$_SESSION["lang"]];
        $Item["dropoff"] = array();
        foreach ($dr["children"] as $ch) {
            $Item["dropoff"][$ch["id"]] = array(
                "id" => $ch["id"],
                "name" => $ch["name"],
                "price" => $ch["data"]["price"] * $_ENV["settings"]["cur_" . $_SESSION["lang"]]
            );
        }
    }
    if (isset($Item["payed"]) AND $Item["payed"] == "on") {
        $Item["date"] = date("d.m.Y", strtotime($Item["paydate"]));
    } else if ($Item["payment"] !== "online") {
        $Item["date"] = date("d.m.Y", strtotime($Item["_created"]));
    }
    return $Item;
}

function ordersBeforeItemSave($Item)
{
    if (!isset($Item["paydate"]) AND isset($Item["payed"]) AND $Item["payed"] == "on") {
        $Item["paydate"] = date("d.m.Y");
    } else if (isset($Item["payed"]) AND $Item["payed"] !== "on") {
        $Item["paydate"] = "";
    }
    if (!isset($Item["mail"]) OR $Item["mail"] == "") {
        if ($Item["payment"] !== "online" OR ($Item["payment"] == "online" AND $Item["payed"] == "on")) {
            $out = wbGetForm("orders", "mail");
            $out->wbSetData($Item);
            wbMail("sales@intouchrussia.com;IntouchRussia", "sales@intouchrussia.com;IntouchRussia", "Order № " . $Item["id"], $out->outerHtml());
            $Item["mail"] = "on";
        }
    }
    return $Item;
}

?>
