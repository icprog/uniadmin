<?php
/**
 * +----------------------------------------------------------------------
 * | InitAdmin/actionphp [ InitAdmin渐进式模块化通用后台 ]
 * +----------------------------------------------------------------------
 * | Copyright (c) 2018-2019 http://initadmin.net All rights reserved.
 * +----------------------------------------------------------------------
 * | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
 * +----------------------------------------------------------------------
 * | Author: jry <ijry@qq.com>
 * +----------------------------------------------------------------------
*/

namespace app\core\controller\common;

use think\Controller;
use think\Request;

class Index extends Controller
{
    /**
     * 首页
     *
     * @return \think\Response
     */
    public function index()
    {
        //dump(user_md5('admin123'));
        return 'tpvue后台接口运行中...<br/>接口域名：' . request()->domain() . '<br/>';
    }
}
