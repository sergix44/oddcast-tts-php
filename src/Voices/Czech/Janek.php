<?php


namespace SergiX44\OddcastTTS\Voices\Czech;


use SergiX44\OddcastTTS\Voices\Voice;

class Janek implements Voice
{

    public function getID(): int
    {
        return 2;
    }

    public function getLanguageID(): int
    {
        return 18;
    }

    public function getLanguageName(): string
    {
        return 'Czech';
    }

    public function getName(): string
    {
        return 'Janek';
    }

    public function getGender(): string
    {
        return 'M';
    }

    public function getEngine(): int
    {
        return 7;
    }
}