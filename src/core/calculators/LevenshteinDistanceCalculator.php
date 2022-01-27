<?php

namespace Elevatus\core\calculators;

use Elevatus\DistanceCalculator;

class LevenshteinDistanceCalculator extends DistanceCalculator
{
    /**
     * @inheritdoc
     */
    public function calculateDistance(): int
    {
        return levenshtein($this->a_string, $this->b_string);
    }
}
