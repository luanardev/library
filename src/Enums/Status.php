<?php
namespace Luanardev\Library\Enums;

enum Status: string{
    case ACTIVE = 'Active';
    case INACTIVE = 'Inactive';

    public static function values()
    {
        $array = [];
        foreach(static::cases() as $case){
			$array[] = $case->value;
		}
		return $array;
    }
}
