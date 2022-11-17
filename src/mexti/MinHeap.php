<?php
declare(strict_types=1);

namespace mexti;

class MinHeap{
    
    /**
     * 获取内部成员数目
     */
    public function count() : int {
        return 0;
    }

    /**
     * 是否为空 等价于 count() == 0
     */
    public function isEmpty() : bool{
        return true;
    }

    /**
     * 插入一个成员到最小堆中
     */
    public function insert(MinHeapNode $n) : bool|int{
        return true;
    }

    /**
     * 从最小堆中移除一个成员
     */
    public function erase(MinHeapNode $n) : bool|int{
        return 0;
    }

    /**
     * 成员键值更新后, 调整在最小堆中的位置.
     * 返回值:
     *      true:  调整后 $n 位于堆头部
     *      false: 调整后 $n 不位于堆头部
     */
    public function adjust(MinHeapNode $n) : bool{
        return true;
    }

    /**
     * 从最小堆中弹出一个成员
     */
    public function extract() : MinHeapNode {
        return new MinHeapNode();
    }

    /**
     * 获取最小堆中下一个将要弹出的成员(并不会弹出),
     */
    public function top() : MinHeapNode{
        return new MinHeapNode();
    }
}