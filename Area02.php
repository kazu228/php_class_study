<?php

class Area {
    public static $pi = 3.14;   // 静的プロパティ

    public static function circle($radius) {
        return pow($radius, 2) * self::$pi;      // 静的プロパティの呼び出し方  
    }
}