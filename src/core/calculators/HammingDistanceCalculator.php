<?php

namespace Elevatus\core\calculators;

use Elevatus\DistanceCalculator;

class HammingDistanceCalculator extends DistanceCalculator
{
    /**
     * @inheritdoc
     */
    public function calculateDistance(): int
    {
        // return $number_of_changes;
        // Get the length of string element
		$n1 = strlen($this->a_string);
		$n2 = strlen($this->b_string);
		if ($n1 != $n2) {
			// When given string size are not equals
            throw new \Exception(" String length of (". $this->a_string .",". $this->b_string .") are not equals\n");
		} else {
			// Used to store result
			$result = 0;
			// Loop controlling variable
			$i = 0;
			// Compare string element of a_string and b_string
			while ($i < $n1)
			{
				if ($this->a_string[$i] != $this->b_string[$i])
				{
					// When element of (i) location are not same
					$result++;
				}
				$i++;
			}
			// return calculated result
			return $result;
		}
    }

}
