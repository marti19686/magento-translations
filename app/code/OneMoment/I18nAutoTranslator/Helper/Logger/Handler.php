<?php

namespace OneMoment\I18nAutoTranslator\Helper\Logger;

class Handler extends \Magento\Framework\Logger\Handler\Base
{
    protected $loggerType = Logger::DEBUG;
    protected $fileName = '/var/log/translator.log';
}
