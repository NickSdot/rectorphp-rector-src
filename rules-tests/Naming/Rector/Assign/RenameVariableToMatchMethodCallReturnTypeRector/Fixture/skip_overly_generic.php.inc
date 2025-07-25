<?php

namespace Rector\Tests\Naming\Rector\Assign\RenameVariableToMatchMethodCallReturnTypeRector\Fixture;

use PhpParser\Node\Expr;
use PhpParser\Node\Scalar\Int_;
use PhpParser\Node\Scalar\String_;

final class SkipOverlyGeneric
{
    public function run()
    {
        $stringOrScalar = $this->resolveStringOrScalar();
    }

    private function resolveStringOrScalar(): Expr
    {
        if (mt_rand(0, 100)) {
            return new String_('hey');
        }

        return new Int_(1000);
    }
}
