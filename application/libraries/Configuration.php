<?php

use TelegramBot\Api\BotApi;
use Unirest\Request;

/**
 * Created by PhpStorm.
 * User: PC-06
 * Date: 07/02/2019
 * Time: 15:37
 * @property CI_Controller CI
 */

class Configuration
{
    /**
     * Conversion constructor.
     */
    public function __construct()
    {
        $this->CI =& get_instance();
        date_default_timezone_set("Asia/Bangkok");
    }

//    Templating
    public static function layout(){
		return "template/layout";
	}

    public static function template($default = "vuesax"){
		return "template/{$default}/";
	}

    public static function menuDirection($direcion = "horizontal"){
    	if($direcion === "horizontal"){
			return "template/vuesax/layout";
		}else{
			return "vertical";
		}
	}

}
