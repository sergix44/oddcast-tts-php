<?php


namespace SergiX44\OddcastTTS\Voices\Polish;


use SergiX44\OddcastTTS\Voices\Voice;

class Krzysztof implements Voice
{

    public function getID(): int
    {
        return 2;
    }

    public function getLanguageID(): int
    {
        return 14;
    }

    public function getLanguageName(): string
    {
        return 'Polish';
    }

    public function getName(): string
    {
        return 'Krzysztof';
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