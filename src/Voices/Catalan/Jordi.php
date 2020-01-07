<?php


namespace SergiX44\OddcastTTS\Voices\Catalan;


use SergiX44\OddcastTTS\Voices\Voice;

class Jordi implements Voice
{

    public function getID(): int
    {
        return 2;
    }

    public function getLanguageID(): int
    {
        return 5;
    }

    public function getLanguageName(): string
    {
        return 'Catalan';
    }

    public function getName(): string
    {
        return 'Jordi';
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