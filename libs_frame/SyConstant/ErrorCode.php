<?php
/**
 * Created by PhpStorm.
 * User: 姜伟
 * Date: 2017/3/2 0002
 * Time: 11:22
 */
namespace SyConstant;

use SyTrait\SimpleTrait;

class ErrorCode
{
    use SimpleTrait;

    //公共错误,取值范围:10000-99999
    const COMMON_SUCCESS = 0;
    const COMMON_MIN_NUM = 10000;
    const COMMON_PARAM_ERROR = 10000;
    const COMMON_SERVER_ERROR = 10500;
    const COMMON_SERVER_EXCEPTION = 10501;
    const COMMON_SERVER_FATAL = 10502;
    const COMMON_SERVER_RESOURCE_NOT_EXIST = 10503;
    const COMMON_SERVER_BUSY = 10504;
    const COMMON_SERVER_TOKEN_EXPIRE = 10505;
    const COMMON_ROUTE_MODULE_NOT_ACCEPT = 11000;
    const COMMON_ROUTE_URI_FORMAT_ERROR = 11001;
    const COMMON_ROUTE_CONTROLLER_NOT_EXIST = 11002;
    const COMMON_ROUTE_ACTION_NOT_EXIST = 11003;

    //REDIS错误,取值范围:100600-100799
    const REDIS_CONNECTION_ERROR = 100600;
    const REDIS_AUTH_ERROR = 100601;

    //SWOOLE错误,取值范围:100800-100999
    const SWOOLE_SERVER_PARAM_ERROR = 100800;
    const SWOOLE_SERVER_NOT_EXIST_ERROR = 100801;
    const SWOOLE_SERVER_NO_RESPONSE_ERROR = 100802;
    const SWOOLE_SERVER_REQUEST_FAIL = 100803;

    //反射错误,取值范围:101000-101199
    const REFLECT_RESOURCE_NOT_EXIST = 101000;
    const REFLECT_ANNOTATION_DATA_ERROR = 101001;

    //签名错误,取值范围:103000-103099
    const SIGN_ERROR = 103000;
    const SIGN_TIME_ERROR = 103001;
    const SIGN_NONCE_ERROR = 103002;

    protected static $msgArr = [
        self::COMMON_SUCCESS => '成功',
        self::COMMON_PARAM_ERROR => '参数错误',
        self::COMMON_SERVER_ERROR => '服务出错',
        self::COMMON_SERVER_EXCEPTION => '服务出错',
        self::COMMON_SERVER_FATAL => '服务出错',
        self::COMMON_SERVER_RESOURCE_NOT_EXIST => '资源不存在',
        self::COMMON_SERVER_BUSY => '服务繁忙',
        self::COMMON_SERVER_TOKEN_EXPIRE => '令牌已过期',
        self::COMMON_ROUTE_MODULE_NOT_ACCEPT => '模块不支持',
        self::COMMON_ROUTE_URI_FORMAT_ERROR => '路由格式错误',
        self::COMMON_ROUTE_CONTROLLER_NOT_EXIST => '控制器不存在',
        self::COMMON_ROUTE_ACTION_NOT_EXIST => '方法不存在',
        self::REDIS_CONNECTION_ERROR => 'REDIS连接出错',
        self::REDIS_AUTH_ERROR => 'REDIS鉴权失败',
        self::SWOOLE_SERVER_PARAM_ERROR => 'SWOOLE服务参数错误',
        self::SWOOLE_SERVER_NOT_EXIST_ERROR => 'SWOOLE服务不存在',
        self::SWOOLE_SERVER_NO_RESPONSE_ERROR => 'SWOOLE服务未设置响应数据',
        self::SWOOLE_SERVER_REQUEST_FAIL => 'SWOOLE请求失败',
        self::REFLECT_RESOURCE_NOT_EXIST => '反射资源不存在',
        self::REFLECT_ANNOTATION_DATA_ERROR => '注解数据不正确',
        self::SIGN_ERROR => '签名值错误',
        self::SIGN_TIME_ERROR => '签名时间错误',
        self::SIGN_NONCE_ERROR => '签名随机字符串错误',
    ];

    /**
     * 获取错误信息
     * @param int $errorCode 错误码
     * @return mixed|string
     */
    public static function getMsg(int $errorCode)
    {
        return self::$msgArr[$errorCode] ?? '';
    }
}
