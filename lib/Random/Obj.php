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
}