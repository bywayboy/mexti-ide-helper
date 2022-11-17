<?php
declare(strict_types=1);

namespace mexti;

abstract class MinHeapNode{
    /**
     * 需要被继承类实现的比较方法
    */
    public abstract function compare(MinHeapNode $b) :int;

    /**
     * 是否在 MinHeap池中.
    */
    public function inHeap() : bool{
        return true;
    }

    /*
        * 获取自身所在的MinHeap
    */
    public function getHeap() : ?\mexti\MinHeap
    {
        return new \mexti\MinHeap();
    }
    /**
     * 索引更新后调整位置.
     *      true:  调整后 $n 位于堆头部
     *      false: 调整后 $n 不位于堆头部
     */
    public function adjust(): bool{
        return true;
    }
    /**
     * 从MinHeap中移除自身
    */
    public function erase() : bool{
        return true;
    }
}
