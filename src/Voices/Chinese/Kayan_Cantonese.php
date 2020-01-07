<?php


namespace SergiX44\OddcastTTS\Voices\Chinese;


use SergiX44\OddcastTTS\Voices\Voice;

class Kayan_Cantonese implements Voice
{

    public function getID(): int
    {
        return 7;
    }

    public function getLanguageID(): int
    {
        return 10;
    }

    public function getLanguageName(): string
    {
        return 'Chinese';
    }

    public function getName(): string
    {
        return 'Kayan_Cantonese';
    }

    public function getGender(): string
    {
        return 'F';
    }

    public function getEngine(): int
    {
        return 3;
    }
}