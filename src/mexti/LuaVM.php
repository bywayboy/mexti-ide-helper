<?php
declare(strict_types=1);

namespace mexti;

/**
 * LUA 虚拟机环境
 */
class LuaVM {
    /**
     * 传入一段LUA代码, 创建一个LUA虚拟机环境
     */
    public function __construct(string $luaCode)
    {
        
    }

    /**
     * 调用LUA函数.
     * @param string $func 函数名称
     * @param mixed ...$args 要传递给lua函数的参数.
     * @return mixed 返回值 多个返回值会打包成 array 返回.
     */
    public function call(string $func, ...$args) : mixed
    {
        return null;
    }

    /**
     * 设置全局变量
     * @param string $var 要设置的全局变量名称
     * @param mixed $value 要设置的变量值, null 表示删除一个变量.
     */
    public function set_global(string $var, mixed $value = null)
    {

    }
}

