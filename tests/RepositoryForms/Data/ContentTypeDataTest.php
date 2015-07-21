<?php

/**
 * This file is part of the eZ RepositoryForms package.
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 *
 * @version //autogentag//
 */

namespace EzSystems\RepositoryForms\Tests\Data;

use EzSystems\RepositoryForms\Data\ContentTypeData;
use EzSystems\RepositoryForms\Data\FieldDefinitionData;
use PHPUnit_Framework_TestCase;

class ContentTypeDataTest extends PHPUnit_Framework_TestCase
{
    public function testContentTypeDraft()
    {
        $contentTypeDraft = $this->getMockForAbstractClass('\eZ\Publish\API\Repository\Values\ContentType\ContentTypeDraft');
        $data = new ContentTypeData(['contentTypeDraft' => $contentTypeDraft]);
        self::assertSame($contentTypeDraft, $data->contentTypeDraft);
    }

    public function testFieldDefinitionData()
    {
        $fieldDef1 = new FieldDefinitionData();
        $fieldDef2 = new FieldDefinitionData();
        $fieldDef3 = new FieldDefinitionData();
        $fieldDef4 = new FieldDefinitionData();

        $initialFieldDefs = [$fieldDef1, $fieldDef2];
        $data = new ContentTypeData(['fieldDefinitionsData' => $initialFieldDefs]);
        self::assertSame($initialFieldDefs, $data->fieldDefinitionsData);

        $data->addFieldDefinitionData($fieldDef3);
        $data->addFieldDefinitionData($fieldDef4);
        self::assertSame([$fieldDef1, $fieldDef2, $fieldDef3, $fieldDef4], $data->fieldDefinitionsData);
    }
}
