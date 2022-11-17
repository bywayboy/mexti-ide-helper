<?php
declare(strict_types=1);

namespace mexti;

/**
 * 最小堆
 */
class MinHeap{
    
    /**
     * 获取内部成员数目
     * @return int 成员数目
     */
    public function count() : int {
        return 0;
    }

    /**
     * 判断 MinHeap是否为空.
     * @return bool
     */
    public function isEmpty() : bool{
        return true;
    }

    /**
     * 插入一个成员到最小堆中
     * @param MinHeapNode $n 要插入的节点
     * @return bool  成功返回 true 失败会抛出一个异常.
     */
    public function insert(MinHeapNode $n) : bool{
        return true;
    }

    /**
     * 从最小堆中移除一个成员
     * @param MinHeapNode $n 要调整位置的节点
     * @return bool 成功返回 true 失败会抛出一个异常.
     */
    public function erase(MinHeapNode $n) : bool {
        return true;
    }

    /**
     * 成员键值更新后, 调整在最小堆中的位置.
     * @param MinHeapNode $n 要调整位置的节点
     * @return bool true n 位于头部 false n 不位于头部. 其它情况 抛出异常.
     */
    public function adjust(MinHeapNode $n) : bool{
        return true;
    }

    /**
     * 从最小堆中弹出一个成员
     * @return MinHeapNode
     */
    public function extract() : mixed {
        return new MinHeapNode();
    }

    /**
     * 获取最小堆中下一个将要弹出的成员(并不会弹出).
     * @return MinHeapNode
     */
    public function top() : mixed{
        return new MinHeapNode();
    }
}