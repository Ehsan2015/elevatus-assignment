<?php

namespace Elevatus;

use Elevatus\core\enums\CalculatorKey;

class DistanceCalculator {

    /**
     * First String provided by user.
     * @example "Some Text"
     * @var string
     */
    protected $a_string = null;

    /**
     * Second String provided by user.
     * @example "Some Text"
     * @var string
     */
    protected $b_string = null;

    /**
     * Gets an active DistanceCalculator instance based on `$calculatorName` parameter.
     * @param string $calculatorName
     * @return DistanceCalculator
     */
    final public static function GetDistanceCalculator(string $calculatorName): DistanceCalculator
    {
        $calculator_key = $calculatorName;
        $calculatorName = CalculatorKey::KEYS[$calculatorName] ?? null;
        if (!$calculatorName || !class_exists($calculatorName))
            throw new \Exception('Invalid Calculator!');

        return new $calculatorName;
    }

    public function setStrings($a_string, $b_string)
    {
        $this->a_string = $a_string;
        $this->b_string = $b_string;
    }

    /**
     * calculate distance.
     * @return int
     */
    public function calculateDistance(): int
    {
        throw new \Exception('DistanceCalculator::calculateDistance() Not Implemented!');
    }

}