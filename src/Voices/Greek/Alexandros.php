<?php


namespace SergiX44\OddcastTTS\Voices\Greek;


use SergiX44\OddcastTTS\Voices\Voice;

class Alexandros implements Voice
{

    public function getID(): int
    {
        return 1;
    }

    public function getLanguageID(): int
    {
        return 8;
    }

    public function getLanguageName(): string
    {
        return 'Greek';
    }

    public function getName(): string
    {
        return 'Alexandros';
    }

    public function getGender(): string
    {
        return 'M';
    }

    public function getEngine(): int
    {
        return 4;
    }
}