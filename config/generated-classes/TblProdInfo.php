<?php

use Base\TblProdInfo as BaseTblProdInfo;
use Map\TblProdInfoTableMap;
use Propel\Runtime\Connection\ConnectionInterface;

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
    /** @var \Form\UploadedPhotos|null */
    private $photos;
    
    public function getProdWriteup() {    	    	    	    	
    	$output = preg_replace('/\+/', "", preg_replace('/\+\./', "", $this->prod_writeup));
    	return $output;
    }

    public function numberFormat ($x) {
    	return number_format($x, 2);
    }

    public function numberConvertToMetric ($x) {
    	return ($x * 2.54);
    }

    public function displayStat ($x) {
    	$formatted = number_format($x, 2);
    	$metric = number_format(($x * 2.54), 2);

    	return $formatted." in (".$metric." cm)";
    }

    public function setProdAlt($altsStr)
    {
        $this->prod_alt1 = '';
        $this->prod_alt2 = '';
        $this->prod_alt3 = '';
        $this->prod_alt4 = '';
        $alts = explode(',', $altsStr);
        if (isset($alts[0])) {
            $this->prod_alt1 = trim($alts[0]);
        }
        if (isset($alts[1])) {
            $this->prod_alt2 = trim($alts[1]);
        }
        if (isset($alts[2])) {
            $this->prod_alt3 = trim($alts[2]);
        }
        if (isset($alts[3])) {
            $this->prod_alt4 = trim($alts[3]);
        }
        $this->modifiedColumns[TblProdInfoTableMap::COL_PROD_ALT1] = true;
        $this->modifiedColumns[TblProdInfoTableMap::COL_PROD_ALT2] = true;
        $this->modifiedColumns[TblProdInfoTableMap::COL_PROD_ALT3] = true;
        $this->modifiedColumns[TblProdInfoTableMap::COL_PROD_ALT4] = true;
    }

    public function getProdAlt()
    {
        $res = trim(str_replace(',,', ',',
            implode(',', [$this->prod_alt1, $this->prod_alt2, $this->prod_alt3, $this->prod_alt4])), ',');

        return $res;
    }

    public function postInsert(ConnectionInterface $con = null)
    {
        $photos = $this->photos->getTblPhotos($this);
        $photos->save($con);
    }

    public function preUpdate(ConnectionInterface $con = null)
    {
        $photos = $this->photos->getTblPhotos($this);
        $photos->save($con);
        
        return true;
    }

    /**
     * @return mixed
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * @param mixed $photos
     */
    public function setPhotos($photos)
    {
        $this->photos = $photos;
    }
}
