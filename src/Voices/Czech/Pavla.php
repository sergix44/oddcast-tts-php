<?php


namespace SergiX44\OddcastTTS\Voices\Czech;


use SergiX44\OddcastTTS\Voices\Voice;

class Pavla implements Voice
{

    public function getID(): int
    {
        return 1;
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
        return 'Pavla';
    }

    public function getGender(): string
    {
        return 'F';
    }

    public function getEngine(): int
    {
        return 7;
    }
}