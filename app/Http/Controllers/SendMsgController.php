<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    function telegramMsg(Request $request)
    {
        $data = json_decode($request->getBody(), true);

        $bot_token = '6180778482:AAEcpv0g345Quv5EGZHmY_azJR1-fdINwTo';

// آیدی گیرنده
        $chat_id = '115634901';

// متن پیام
        $message = 'Hello,dfdf World!';
//        echo "sending message to " . $chat_id . "\n";
        /*
         *
         *
         * */
//        $url = "https://api.telegram.org/bot" . $bot_token . "/sendMessage?chat_id=" . $chat_id;
//        $url = $url . "&text=" . urlencode($message);
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

//
//// URL API تلگرام
//        $url = "https://api.telegram.org/bot{$bot_token}/sendMessage";
////        https://api.telegram.org/bot6180778482:AAEcpv0g345Quv5EGZHmY_azJR1-fdINwTo/sendmessage?text=Hello%20Telegram&chat_id=115634901
//// پارامترهای درخواست
//        $params = [
//            'chat_id' => $chat_id,
//            'text' => $message
//        ];
//
//// ساخت بدنه‌ی درخواست
//        $options = [
//            'http' => [
//                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
//                'method' => 'POST',
//                'content' => http_build_query($params),
//            ],
//        ];
//
//// ارسال درخواست به API تلگرام
//        $context = stream_context_create($options);
//        $result = file_get_contents($url, false, $context);
//dd($result);
// پرینت کردن نتیجه

        /*
         *
         * */

//        $apiToken = "4334584910:AAEPmjlh84N62Lv3jGWEgOftlxxAfMhB1gs";
//
//        $data = [
//            'chat_id' => $chat_id,
//            'text' => $message
//        ];
//
//        $response = file_get_contents("https://api.telegram.org/bot$bot_token/sendMessage?" . http_build_query($data));
//        dd($response);

        /*
         *
         * */
        $sendResponseUrl = 'https://api.telegram.org/bot'.$bot_token . '/sendMessage?parse_mode=HTML&chat_id='.$chat_id.'&text='.$message.'';
        file_get_contents($sendResponseUrl);
    }

//    public function sendMsg()
//    {
//        $token = "<insert bot token here>";
//        $chatid = "<chatID>";
//        telegramMsg($chatid, "Hello World", $token);
//    }

}
