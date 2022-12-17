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
     */
    public function call(string $func, ...$args)
    {

    }

    /**
     * 设置全局变量
     */
    public function set_global(string $var, mixed $value = null)
    {

    }
}

