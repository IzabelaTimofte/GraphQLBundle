<?php

declare(strict_types=1);

namespace Overblog\GraphQLBundle\Tests\Config\Parser\fixtures\annotations\Type;

use Overblog\GraphQLBundle\Annotation as GQL;

/**
 * @GQL\Type
 * @GQL\FieldsBuilder(value="MyFieldsBuilder", config={"param1": "val1"})
 */
#[GQL\Type]
#[GQL\FieldsBuilder(value: "MyFieldsBuilder", config: ["param1" => "val1"])]
class Crystal
{
    /**
     * @GQL\Field(type="String!")
     */
    #[GQL\Field(type: "String!")]
    protected string $color;
}
