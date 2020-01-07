<?php


namespace SergiX44\OddcastTTS\Voices\Japanese;


use SergiX44\OddcastTTS\Voices\Voice;

class Ryo implements Voice
{

    public function getID(): int
    {
        return 7;
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
        return 'Ryo';
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