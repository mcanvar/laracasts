<?php

/**
 * User: mevlut
 * e23
 * ${FILE_NAME}
 * Date: 2.09.2016
 */
class CommandNameTranslator {

    /**
     * CommandNameTranslator constructor.
     */
    public function __construct()
    {
    }

    public function toValidatorName($commandName)
    {
        if($commandName == 'foobar')
        {
            return 'baz';
        }
        return str_replace('Command', 'Validator', $commandName);
    }
}