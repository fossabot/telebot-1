<?php

namespace WeStacks\TeleBot\Objects\Passport\PassportElementError;

use WeStacks\TeleBot\Objects\Passport\PassportElementError;

/**
 * Represents an issue with one of the files that constitute the translation of a document. The error is considered resolved when the file changes.
 * 
 * @property String                    $source                  Error source, must be translation_file
 * @property String                    $type                    Type of element of the user's Telegram Passport which has the issue, one of “passport”, “driver_license”, “identity_card”, “internal_passport”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”
 * @property String                    $file_hash               Base64-encoded file hash
 * @property String                    $message                 Error message
 * 
 * @package WeStacks\TeleBot\Objects\Passport\PassportElementError
 */
class PassportElementErrorTranslationFile extends PassportElementError
{
    protected function relations()
    {
        return [
            'source'            => 'string',
            'type'              => 'string',
            'file_hash'         => 'string',
            'message'           => 'string',
        ];
    }
}