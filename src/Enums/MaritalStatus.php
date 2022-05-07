<?php
namespace Luanardev\Library\Enums;

enum MaritalStatus: string{
    case Single = 'Single';
    case Married = 'Married';
    case Divoced = 'Divorced';
    case Widow = 'Widow';
    case Widower = 'Widower';

    public static function values()
    {
        $array = [];
        foreach(static::cases() as $case){
			$array[] = $case->value;
		}
		return $array;
    }
}
