<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// [ 应用入口文件 ]
namespace think;

// 加载基础文件
require __DIR__ . '/../thinkphp/base.php';

define('BOOKCTRL', 'book'); //book路由
define('CHAPTERCTRL','chapter'); //chapter路由
define('TAGCTRL','tag'); //tag路由
define('BOOKLISTACT','booklist'); //booklist路由
define('SEARCHCTRL','search'); //search路由
define('RANKCTRL', 'rank'); //rank路由
define('UPDATEACT','update'); //update路由
define('AUTHORCTRL','author'); //author路由

header("Access-Control-Allow-Origin:*");
header("Access-Control-Allow-Methods:GET, POST, OPTIONS, DELETE");
header("Access-Control-Allow-Headers:DNT,X-Mx-ReqToken,Keep-Alive,User-Agent,X-Requested-With,If-Modified-Since,Cache-Control,Content-Type, Accept-Language, Origin, Accept-Encoding");

// 定义应用目录
Container::get('app')->run()->send();
