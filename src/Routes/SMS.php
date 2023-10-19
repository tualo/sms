<?php
namespace Tualo\Office\SMS\Routes;

use Tualo\Office\Basic\TualoApplication as App;
use Tualo\Office\Basic\Route as BasicRoute;
use Tualo\Office\Basic\IRoute;
use Tualo\Office\SMS\SMS as S;

class SMS implements IRoute{
    public static function register(){
        BasicRoute::add('/sms/send',function($matches){
            try{
                App::contenttype('application/json');
                if (!isset($_POST['phonenumber'])) throw new \Exception('phonenumber is missing!');
                if (!isset($_POST['message'])) throw new \Exception('message is missing!');
                App::result('r',S::sendMessage($_POST['message'],$_POST['phonenumber']));

                App::result('success',true);
            }catch(\Exception $e){
                App::result('msg', $e->getMessage());
            }
        },['post'],true);

    }
}