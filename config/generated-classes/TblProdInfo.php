<?php

use Base\TblProdInfo as BaseTblProdInfo;

/**
 * Skeleton subclass for representing a row from the 'tbl_prod_info' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class TblProdInfo extends BaseTblProdInfo
{
    public function getProdWriteup()
    {    	    	    	    	
    	$output = preg_replace('/\+/', "", preg_replace('/\+\./', "", $this->prod_writeup));
    	return $output;
    }


}
