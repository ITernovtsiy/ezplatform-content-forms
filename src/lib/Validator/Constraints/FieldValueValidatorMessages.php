<?php

/**
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
declare(strict_types=1);

namespace EzSystems\EzPlatformContentForms\Validator\Constraints;

use JMS\TranslationBundle\Translation\TranslationContainerInterface;
use JMS\TranslationBundle\Model\Message;

/**
 * This class holds translation messages which comes from kernel as ValidationError messages.
 * It allows JMSTranslationBundle to extracting those messages.
 */
class FieldValueValidatorMessages implements TranslationContainerInterface
{
    /**
     * Returns an array of messages.
     *
     * @return Message[]
     */
    public static function getTranslationMessages(): array
    {
        return [
            new Message("User login '%login%' already in use. Enter a unique login.", 'validators'),
            new Message("Email '%email%' is used by another user. You must enter a unique email.", 'validators'),
            new Message('Invalid login format.', 'validators'),
        ];
    }
}
