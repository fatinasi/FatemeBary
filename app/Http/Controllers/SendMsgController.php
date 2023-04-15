<?php

namespace App\Http\Controllers;

class SendMsgController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

//$chatID, $messaggio, $token
    function telegramMsg()
    {


//        echo "sending message to " . $chatID . "\n";
//
//        $url = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chatID;
//        $url = $url . "&text=" . urlencode($messaggio);
//        $ch = curl_init();
//        $optArray = array(
//            CURLOPT_URL => $url,
//            CURLOPT_RETURNTRANSFER => true
//        );
//        curl_setopt_array($ch, $optArray);
//        $result = curl_exec($ch);
//        curl_close($ch);
//        return $result;



        /*
         *
         * */
        $bot_token = '6180778482:AAEcpv0g345Quv5EGZHmY_azJR1-fdINwTo';

// آیدی گیرنده
        $chat_id = '@fateemeh_bd';

// متن پیام
        $message = 'Hello, World!';

// URL API تلگرام
        $url = "https://api.telegram.org/bot{$bot_token}/sendMessage";

// پارامترهای درخواست
        $params = [
            'chat_id' => $chat_id,
            'text' => $message
        ];

// ساخت بدنه‌ی درخواست
        $options = [
            'http' => [
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($params),
            ],
        ];

// ارسال درخواست به API تلگرام
        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
dd($result);
// پرینت کردن نتیجه

        /*
         *
         * */

//        $apiToken = "4334584910:AAEPmjlh84N62Lv3jGWEgOftlxxAfMhB1gs";
//
//$data = [
//    'chat_id' => '@fateemeh_bd',
// 'text' => 'Welcome to my world'
//];
//
//$response = file_get_contents("http://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );
//   dd($response);

    }

//    public function sendMsg()
//    {
//        $token = "<insert bot token here>";
//        $chatid = "<chatID>";
//        telegramMsg($chatid, "Hello World", $token);
//    }
}
