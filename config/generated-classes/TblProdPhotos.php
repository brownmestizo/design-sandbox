<?php

use Base\TblProdPhotos as BaseTblProdPhotos;

/**
 * Skeleton subclass for representing a row from the 'tbl_prod_photos' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class TblProdPhotos extends BaseTblProdPhotos
{
    public function __construct()
    {
        $this->setProdSolo1('');
        $this->setProdSolo2('');
        $this->setProdSolo3('');
        $this->setProdSolo4('');
        parent::__construct();
    }
}
