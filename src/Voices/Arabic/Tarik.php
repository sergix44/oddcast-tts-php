<?php


namespace SergiX44\OddcastTTS\Voices\Arabic;


use SergiX44\OddcastTTS\Voices\Voice;

class Tarik implements Voice
{

    public function getID(): int
    {
        return 1;
    }

    public function getLanguageID(): int
    {
        return 27;
    }

    public function getLanguageName(): string
    {
        return 'Arabic';
    }

    public function getName(): string
    {
        return 'Tarik';
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