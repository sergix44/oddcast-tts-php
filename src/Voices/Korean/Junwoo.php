<?php


namespace SergiX44\OddcastTTS\Voices\Korean;


use SergiX44\OddcastTTS\Voices\Voice;

class Junwoo implements Voice
{

    public function getID(): int
    {
        return 2;
    }

    public function getLanguageID(): int
    {
        return 13;
    }

    public function getLanguageName(): string
    {
        return 'Korean';
    }

    public function getName(): string
    {
        return 'Junwoo';
    }

    public function getGender(): string
    {
        return 'M';
    }

    public function getEngine(): int
    {
        return 3;
    }
}