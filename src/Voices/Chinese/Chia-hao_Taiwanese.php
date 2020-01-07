<?php


namespace SergiX44\OddcastTTS\Voices\Chinese;


use SergiX44\OddcastTTS\Voices\Voice;

class Chia-hao_Taiwanese implements Voice
{

    public function getID(): int
    {
        return 2;
    }

    public function getLanguageID(): int
    {
        return 10;
    }

    public function getLanguageName(): string
    {
        return 'Chinese';
    }

    public function getName(): string
    {
        return 'Chia-hao_Taiwanese';
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