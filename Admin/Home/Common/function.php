<?php
// +----------------------------------------------------------------------
// |  [ you slogan ]
// +----------------------------------------------------------------------
// | Author: you name  and you E-mail
// +----------------------------------------------------------------------
// | Date: 2017/10/25 Time: 2:03
// +----------------------------------------------------------------------

/**
 * 自定义函数
 */


/**
 * ajax 返回数据
 * @param $code
 * @param string $msg
 */
function ajaxRes($code, $msg = ''){
    $arr = array( 'code' => $code, 'message' => $msg );
    die(json_encode($arr));
}

