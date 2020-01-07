<?php


namespace SergiX44\OddcastTTS\Voices\Japanese;


use SergiX44\OddcastTTS\Voices\Voice;

class Takeru implements Voice
{

    public function getID(): int
    {
        return 8;
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
        return 'Takeru';
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