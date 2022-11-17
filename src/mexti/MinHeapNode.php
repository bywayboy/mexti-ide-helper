<?php
declare(strict_types=1);

namespace mexti;

/**
 * 最小堆节点
 */
abstract class MinHeapNode{
    /**
     * 需要被继承类实现的比较方法
    */
    public abstract function compare(MinHeapNode $b) :int;

    /**
     * 是否在 MinHeap池中.
     * @return bool 
    */
    public function inHeap() : bool{
        return true;
    }

    /**
     * 获取自身所在的MinHeap
    */
    public function getHeap() : ?MinHeap
    {
        return new MinHeap();
    }

    /**
     * 索引更新后调整位置.
     * @return bool true n 位于头部 false n 不位于头部. 其它情况 抛出异常.
     */
    public function adjust(): bool{
        return true;
    }

    /**
     * 从MinHeap中移除自身
     * @return bool 成功返回 true. 如果这身不在 MinHeap中 返回 false
    */
    public function erase() : bool{
        return true;
    }
}
