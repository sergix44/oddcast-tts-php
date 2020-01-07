<?php


namespace SergiX44\OddcastTTS\Voices\Japanese;


use SergiX44\OddcastTTS\Voices\Voice;

class Kaito implements Voice
{

    public function getID(): int
    {
        return 2;
    }

    public function getLanguageID(): int
    {
        return 12;
    }

    public function getLanguageName(): string
    {
        return 'Japanese';
    }

    public function getName(): string
    {
        return 'Kaito';
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