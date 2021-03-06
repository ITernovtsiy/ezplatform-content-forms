<?php

/**
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
declare(strict_types=1);

namespace EzSystems\EzPlatformContentForms\Data;

use eZ\Publish\Core\Repository\Values\Content\ContentUpdateStruct;

/**
 * @property \EzSystems\EzPlatformContentForms\Data\Content\FieldData[] $fieldsData
 * @property \eZ\Publish\API\Repository\Values\Content\Content $content
 */
class ContentTranslationData extends ContentUpdateStruct implements NewnessCheckable
{
    /**
     * {@inheritdoc}
     */
    public function isNew(): bool
    {
        return false;
    }
}
