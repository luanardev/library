<?php
namespace Luanardev\Library\Enums;

enum District: string{
	
    case Lilongwe = 'Lilongwe';
    case Blantyre = 'Blantyre';
    case Mzuzu = 'Mzuzu';
    case Zomba = 'Zomba';
    case Chitipa = 'Chitipa';
    case Karonga = 'Karonga';
    case Rumphi = 'Rumphi';
    case Mzimba = 'Mzimba';
    case Nkhatabay = 'Nkhatabay';
    case Likoma =  'Likoma';
    case Nkhotakota = 'Nkhotakota';
    case Salima = 'Salima';
    case Kasungu = 'Kasungu';
    case Mchinji = 'Mchinji';
    case Ntchisi = 'Ntchisi';
    case Dowa = 'Dowa';
    case Dedza = 'Dedza';
    case Ntcheu = 'Ntcheu';
    case Balaka = 'Balaka';
    case Mangochi = 'Mangochi';
    case Machinga = 'Machinga';
    case Mwanza = 'Mwanza';
    case Neno = 'Neno';
    case Phalombe = 'Phalombe';
    case Chikwawa = 'Chikwawa';
    case Chiradzulu = 'Chiradzulu';
    case Thyolo = 'Thyolo';
    case Mulanje = 'Mulanje';
    case Nsanje = 'Nsanje';

    public static function values()
    {
        $array = [];
        foreach(static::cases() as $case){
			$array[] = $case->value;
		}
		return $array;
    }
    
}