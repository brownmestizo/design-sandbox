<?php

use Base\TblProdInfoQuery as BaseTblProdInfoQuery;

/**
 * Skeleton subclass for performing query and update operations on the 'tbl_prod_info' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class TblProdInfoQuery extends BaseTblProdInfoQuery
{
	
	public function forThisWebsiteOnly () {
		return $this->filterByMb(1);
	}


	
}
