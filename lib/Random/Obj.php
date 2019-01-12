<?php
namespace Random;

class Obj {
    /**
     * @return null
     */
    public function shouldThrowPhanTypeMismatchReturn() {
        return 'data';
    }

    /**
     * @return int
     */
    public function shouldThrowPhanTypeMismatchReturn2() {
        return 'data';
    }

    /**
     * @return bool
     */
    public function shouldThrowPhanTypeMismatchReturn3() {
        return 'data';
    }
}