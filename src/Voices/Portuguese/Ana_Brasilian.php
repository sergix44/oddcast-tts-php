<?php


namespace SergiX44\OddcastTTS\Voices\Portuguese;


use SergiX44\OddcastTTS\Voices\Voice;

class Ana_Brasilian implements Voice
{

    public function getID(): int
    {
        return 1;
    }

    public function getLanguageID(): int
    {
        return 6;
    }

    public function getLanguageName(): string
    {
        return 'Portuguese';
    }

    public function getName(): string
    {
        return 'Ana_Brasilian';
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