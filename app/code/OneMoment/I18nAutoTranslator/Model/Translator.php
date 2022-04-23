<?php

namespace OneMoment\I18nAutoTranslator\Model;

use OneMoment\I18nAutoTranslator\Helper\Data;
use OneMoment\I18nAutoTranslator\Model\Phrase\Original;
use OneMoment\I18nAutoTranslator\Model\Phrase\Translated;

class Translator
{
    /** @var Data */
    protected $configData;

    public function __construct(Data $configData)
    {
        $this->configData = $configData;
    }

    public function getTranslate(Original $phrase)
    {


        $translatePhrase = new Translated();
    }
}
