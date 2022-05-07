<?php
namespace Luanardev\Library\Enums;

enum Family: string{
    case Husband = 'Husband';
    case Wife = 'Wife';
    case Mother = 'Mother';
    case Father = 'Father';
    case Son = 'Son';
    case Daughter = 'Daughter';
    case Brother = 'Brother';
    case Sister = 'Sister';
    case Uncle = 'Uncle';
    case Aunt = 'Aunt';
    case Cousin = 'Cousin';
    case Nephew = 'Nephew';
    case Niece = 'Niece';
    case Grandfather = 'Grandfather';
    case Grandmother = 'Grandmother';
    case Grandson = 'Grandson';
    case Granddaughter = 'Granddaughter';
    case MotherInlaw = 'MotherInlaw';
    case FatherInlaw = 'FatherInlaw';
    case SonInlaw = 'SonInlaw';
    case DaughterInlaw = 'DaughterInlaw';
    case BrotherInlaw = 'BrotherInlaw';
    case SisterInlaw = 'SisterInlaw';

    public static function values()
    {
        $array = [];
        foreach(static::cases() as $case){
			$array[] = $case->value;
		}
		return $array;
    }
}

