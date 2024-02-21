<!--BK!!!!!!ash!-->
<?php
interface  BKashAbstract{
     function login($email, $password);
     function confirmOrder();
     function sendInvoice();
}

interface   NogodAbstract{
    function Nogodlogin($email, $password);
    function NogodconfirmOrder();
    function NogodsendInvoice();
}
/*
class Payment implements BKashAbstract,NogodAbstract{
    function login($email, $password){
        echo "login";
    }
    function confirmOrder(){
        echo "confirmOrder";
    }
    function sendInvoice(){
        echo "sendInvoice";
    }
}
*/
?>