<?php

use Base\TblMenus as BaseTblMenus;

/**
 * Skeleton subclass for representing a row from the 'tbl_menus' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class TblMenus extends BaseTblMenus
{
	public function getProductCount ($website) {

		switch($website) {
			case 'mb':
				$productCount = TblProdInfoQuery::create()
					->filterByMb(true)
					->filterByProdCategory($this->menu_alias)
					->count();
			break;

			case 'm3':
				$productCount = TblProdInfoQuery::create()
					->filterByM3(true)
					->filterByProdCategory($this->menu_alias)
					->count();			
			break;

			case 'pa':
				$productCount = TblProdInfoQuery::create()
					->filterByPa(true)
					->filterByProdCategory($this->menu_alias)
					->count();			
			break;
		}

		return $productCount;

	}
}
