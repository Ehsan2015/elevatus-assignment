<?php
namespace Elevatus\core\enums;

use Elevatus\core\calculators\HammingDistanceCalculator;
use Elevatus\core\calculators\LevenshteinDistanceCalculator;

class CalculatorKey
{
    const KEYS = [
        'hamming' => HammingDistanceCalculator::class,
        'levenshtein' => LevenshteinDistanceCalculator::class,
    ];
}
