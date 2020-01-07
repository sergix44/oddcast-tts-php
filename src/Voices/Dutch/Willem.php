<?php


namespace SergiX44\OddcastTTS\Voices\Dutch;


use SergiX44\OddcastTTS\Voices\Voice;

class Willem implements Voice
{

    public function getID(): int
    {
        return 1;
    }

    public function getLanguageID(): int
    {
        return 11;
    }

    public function getLanguageName(): string
    {
        return 'Dutch';
    }

    public function getName(): string
    {
        return 'Willem';
    }

    public function getGender(): string
    {
        return 'M';
    }

    public function getEngine(): int
    {
        return 2;
    }
}