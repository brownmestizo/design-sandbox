<?php

use Base\TblGeneral as BaseTblGeneral;

/**
 * Skeleton subclass for representing a row from the 'tbl_general' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class TblGeneral extends BaseTblGeneral
{

	public function getProdDescription() {

		$alternateNames = array($this->prod_name, $this->prod_alt1, $this->prod_alt2, $this->prod_alt3, $this->prod_alt4);

		$var = $this->prod_description;

		$output = mb_convert_encoding($var, "utf-8", "HTML-ENTITIES");	
		$output = preg_replace('/<p[^>]*>[\s|&nbsp;]*<\/p>/', "", $output);
		$output = preg_replace('/<br[^>]*>/', "", $output);

		$output = preg_replace('/\+\./', "", $output);
		$output = preg_replace('/\+/', "", $output);

		$models = array("[model]", "[model1]", "[model2]", "[model3]", "[model4]");
		$output = str_replace($models, $alternateNames, $output);

		return $output;

	}
}
