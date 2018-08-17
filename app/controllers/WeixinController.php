<?php
use QCloud_WeApp_SDK\Auth\LoginService as LoginService;
use QCloud_WeApp_SDK\Constants as Constants;
// use Yansongda\Pay\Pay;
// use Yansongda\Pay\Log;

class WeixinController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        return 404;

    }
    
    public function LoginAction() {
        $result = LoginService::login();
        
        
        if ($result['loginState'] === Constants::S_AUTH) {
            return $this->response->setJsonContent([
                'code' => 0,
                'data' => $result['userinfo']
            ]);
        } else {
            return $this->response->setJsonContent([
                'code' => -1,
                'error' => $result['error']
            ]);
        }
    }
        


    public function UserAction() {
        $result = LoginService::check();

        if ($result['loginState'] === Constants::S_AUTH) {
            return $this->response->setJsonContent([
                'code' => 0,
                'data' => $result['userinfo']
            ]);
        } else {
           return $this->response->setJsonContent([
                'code' => -1,
                'data' => []
            ]);
        }
    }

    public function getfoodAction(){
        $foods = Food::find();

        $foodtypes = Type::find();
            
        $result = array();
        foreach ($foodtypes as $foodtype) {
            $obj = array();

            $obj['typeid'] = $foodtype->typeid;
            $obj['typeName'] = $foodtype->food_type;
            $obj['food'] = array();

            foreach ($foods as $food) {
                if($obj['typeName'] == $food->food_Type){
                    array_push($obj['food'],['foodname'=>$food->food_Name,'foodtype'=>$food->food_Type,'price'=>$food->food_Price,'description'=>$food->food_description,"foodid"=>$food->food_Id,"imgurl"=>'http://localhost'.$this->url->getBaseUri().$food->food_Url]);
                }
            }
            array_push($result,$obj);
        }
        return $this->response->setJsonContent($result);

        // $foodset= array(

        // );
        // $value = 0;
        // foreach ($foods as $food) {
        
        //   $foodset[$value]['id'] = $food->food_Id;
        //   $foodset[$value]['description'] = $food->food_description;
         
        //   $foodset[$value]['typeid'] = $Typeset[$food->food_Type]['typeid'];
        //   $foodset[$value]['foodname'] = $food->food_Name;
        //   $foodset[$value]['imgurl'] = 'http://localhost'.$this->url->getBaseUri().$food->food_Url;
        //   $value++;
        // }

        
       
         
    }

   
    // protected $config = [
    //     'appid' => 'wxb3fxxxxxxxxxxx', // APP APPID
    //     'app_id' => 'wxb3fxxxxxxxxxxx', // 公众号 APPID
    //     'miniapp_id' => 'wxb3fxxxxxxxxxxx', // 小程序 APPID
    //     'mch_id' => '14577xxxx',
    //     'key' => 'mF2suE9sU6Mk1Cxxxxxxxxxxx',
    //     'notify_url' => 'http://yanda.net.cn/notify.php',
    //     'cert_client' => './cert/apiclient_cert.pem', // optional，退款等情况时用到
    //     'cert_key' => './cert/apiclient_key.pem',// optional，退款等情况时用到
    //     'log' => [ // optional
    //         'file' => './logs/wechat.log',
    //         'level' => 'debug'
    //     ],
    //     'mode' => 'dev', // optional, dev/hk;当为 `hk` 时，为香港 gateway。
    // ]; 


    // public function payAction(){

    //     $order = [
    //         'out_trade_no' => time(),
    //         'total_fee' => '1', // **单位：分**
    //         'body' => 'test body - 测试',
    //         'openid' => 'onkVf1FjWS5SBIixxxxxxx',
    //     ];

    //     $pay = Pay::wechat($this->config)->mp($order);
    // }
    // public function notifyAction()
    // {
    //     $pay = Pay::wechat($this->config);

    //     try{
    //         $data = $pay->verify(); // 是的，验签就这么简单！

    //         Log::debug('Wechat notify', $data->all());
    //     } catch (Exception $e) {
    //         // $e->getMessage();
    //     }
        
    //     return $this->response->send($pay->success());// laravel 框架中请直接 `return $pay->success()`
    // }
}

