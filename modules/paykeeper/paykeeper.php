<?php
function paykeeper_init()
{
    if (isset($_ENV["route"]["params"][0])) {
        $mode=$_ENV["route"]["params"][0];
        $call="paykeeper__{$mode}";
        if (is_callable($call)) {
            $out=@$call();
        }
        die;
    } else {
        $payment_parameters = http_build_query($_POST);
        $options = array("http"=>array(
            "method"=>"POST",
            "header"=>
            "Content-type: application/x-www-form-urlencoded",
            "content"=>$payment_parameters
        ));
        $context = stream_context_create($options);

        echo file_get_contents("http://188.225.56.179/order/inline/",FALSE, $context);
        die;
    }
}

?>