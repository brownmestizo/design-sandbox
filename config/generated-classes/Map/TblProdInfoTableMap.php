<?php

namespace Map;

use \TblProdInfo;
use \TblProdInfoQuery;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\InstancePoolTrait;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\DataFetcher\DataFetcherInterface;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\RelationMap;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Map\TableMapTrait;


/**
 * This class defines the structure of the 'tbl_prod_info' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class TblProdInfoTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.TblProdInfoTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'mpm';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'tbl_prod_info';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\TblProdInfo';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'TblProdInfo';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 34;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 34;

    /**
     * the column name for the prod_id field
     */
    const COL_PROD_ID = 'tbl_prod_info.prod_id';

    /**
     * the column name for the prod_price_id field
     */
    const COL_PROD_PRICE_ID = 'tbl_prod_info.prod_price_id';

    /**
     * the column name for the prod_name field
     */
    const COL_PROD_NAME = 'tbl_prod_info.prod_name';

    /**
     * the column name for the prod_alt1 field
     */
    const COL_PROD_ALT1 = 'tbl_prod_info.prod_alt1';

    /**
     * the column name for the prod_alt2 field
     */
    const COL_PROD_ALT2 = 'tbl_prod_info.prod_alt2';

    /**
     * the column name for the prod_alt3 field
     */
    const COL_PROD_ALT3 = 'tbl_prod_info.prod_alt3';

    /**
     * the column name for the prod_alt4 field
     */
    const COL_PROD_ALT4 = 'tbl_prod_info.prod_alt4';

    /**
     * the column name for the prod_code field
     */
    const COL_PROD_CODE = 'tbl_prod_info.prod_code';

    /**
     * the column name for the prod_category field
     */
    const COL_PROD_CATEGORY = 'tbl_prod_info.prod_category';

    /**
     * the column name for the prod_category_shipping field
     */
    const COL_PROD_CATEGORY_SHIPPING = 'tbl_prod_info.prod_category_shipping';

    /**
     * the column name for the prod_writeup field
     */
    const COL_PROD_WRITEUP = 'tbl_prod_info.prod_writeup';

    /**
     * the column name for the prod_length field
     */
    const COL_PROD_LENGTH = 'tbl_prod_info.prod_length';

    /**
     * the column name for the prod_wingspan field
     */
    const COL_PROD_WINGSPAN = 'tbl_prod_info.prod_wingspan';

    /**
     * the column name for the prod_height field
     */
    const COL_PROD_HEIGHT = 'tbl_prod_info.prod_height';

    /**
     * the column name for the prod_scale field
     */
    const COL_PROD_SCALE = 'tbl_prod_info.prod_scale';

    /**
     * the column name for the prod_links field
     */
    const COL_PROD_LINKS = 'tbl_prod_info.prod_links';

    /**
     * the column name for the prod_linkdescription field
     */
    const COL_PROD_LINKDESCRIPTION = 'tbl_prod_info.prod_linkdescription';

    /**
     * the column name for the prod_front field
     */
    const COL_PROD_FRONT = 'tbl_prod_info.prod_front';

    /**
     * the column name for the prod_keywords field
     */
    const COL_PROD_KEYWORDS = 'tbl_prod_info.prod_keywords';

    /**
     * the column name for the prod_keywords_writeup field
     */
    const COL_PROD_KEYWORDS_WRITEUP = 'tbl_prod_info.prod_keywords_writeup';

    /**
     * the column name for the prod_title field
     */
    const COL_PROD_TITLE = 'tbl_prod_info.prod_title';

    /**
     * the column name for the prod_description field
     */
    const COL_PROD_DESCRIPTION = 'tbl_prod_info.prod_description';

    /**
     * the column name for the prod_general field
     */
    const COL_PROD_GENERAL = 'tbl_prod_info.prod_general';

    /**
     * the column name for the prod_era field
     */
    const COL_PROD_ERA = 'tbl_prod_info.prod_era';

    /**
     * the column name for the prod_company field
     */
    const COL_PROD_COMPANY = 'tbl_prod_info.prod_company';

    /**
     * the column name for the prod_related field
     */
    const COL_PROD_RELATED = 'tbl_prod_info.prod_related';

    /**
     * the column name for the prod_related_pa field
     */
    const COL_PROD_RELATED_PA = 'tbl_prod_info.prod_related_pa';

    /**
     * the column name for the prod_related_m3 field
     */
    const COL_PROD_RELATED_M3 = 'tbl_prod_info.prod_related_m3';

    /**
     * the column name for the prod_related2 field
     */
    const COL_PROD_RELATED2 = 'tbl_prod_info.prod_related2';

    /**
     * the column name for the prod_saveas field
     */
    const COL_PROD_SAVEAS = 'tbl_prod_info.prod_saveas';

    /**
     * the column name for the prod_aircraftreg field
     */
    const COL_PROD_AIRCRAFTREG = 'tbl_prod_info.prod_aircraftreg';

    /**
     * the column name for the mb field
     */
    const COL_MB = 'tbl_prod_info.mb';

    /**
     * the column name for the pa field
     */
    const COL_PA = 'tbl_prod_info.pa';

    /**
     * the column name for the m3 field
     */
    const COL_M3 = 'tbl_prod_info.m3';

    /**
     * The default string format for model objects of the related table
     */
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        self::TYPE_PHPNAME       => array('ProdId', 'ProdPriceId', 'ProdName', 'ProdAlt1', 'ProdAlt2', 'ProdAlt3', 'ProdAlt4', 'ProdCode', 'ProdCategory', 'ProdCategoryShipping', 'ProdWriteup', 'ProdLength', 'ProdWingspan', 'ProdHeight', 'ProdScale', 'ProdLinks', 'ProdLinkdescription', 'ProdFront', 'ProdKeywords', 'ProdKeywordsWriteup', 'ProdTitle', 'ProdDescription', 'ProdGeneral', 'ProdEra', 'ProdCompany', 'ProdRelated', 'ProdRelatedPa', 'ProdRelatedM3', 'ProdRelated2', 'ProdSaveas', 'ProdAircraftreg', 'Mb', 'Pa', 'M3', ),
        self::TYPE_CAMELNAME     => array('prodId', 'prodPriceId', 'prodName', 'prodAlt1', 'prodAlt2', 'prodAlt3', 'prodAlt4', 'prodCode', 'prodCategory', 'prodCategoryShipping', 'prodWriteup', 'prodLength', 'prodWingspan', 'prodHeight', 'prodScale', 'prodLinks', 'prodLinkdescription', 'prodFront', 'prodKeywords', 'prodKeywordsWriteup', 'prodTitle', 'prodDescription', 'prodGeneral', 'prodEra', 'prodCompany', 'prodRelated', 'prodRelatedPa', 'prodRelatedM3', 'prodRelated2', 'prodSaveas', 'prodAircraftreg', 'mb', 'pa', 'm3', ),
        self::TYPE_COLNAME       => array(TblProdInfoTableMap::COL_PROD_ID, TblProdInfoTableMap::COL_PROD_PRICE_ID, TblProdInfoTableMap::COL_PROD_NAME, TblProdInfoTableMap::COL_PROD_ALT1, TblProdInfoTableMap::COL_PROD_ALT2, TblProdInfoTableMap::COL_PROD_ALT3, TblProdInfoTableMap::COL_PROD_ALT4, TblProdInfoTableMap::COL_PROD_CODE, TblProdInfoTableMap::COL_PROD_CATEGORY, TblProdInfoTableMap::COL_PROD_CATEGORY_SHIPPING, TblProdInfoTableMap::COL_PROD_WRITEUP, TblProdInfoTableMap::COL_PROD_LENGTH, TblProdInfoTableMap::COL_PROD_WINGSPAN, TblProdInfoTableMap::COL_PROD_HEIGHT, TblProdInfoTableMap::COL_PROD_SCALE, TblProdInfoTableMap::COL_PROD_LINKS, TblProdInfoTableMap::COL_PROD_LINKDESCRIPTION, TblProdInfoTableMap::COL_PROD_FRONT, TblProdInfoTableMap::COL_PROD_KEYWORDS, TblProdInfoTableMap::COL_PROD_KEYWORDS_WRITEUP, TblProdInfoTableMap::COL_PROD_TITLE, TblProdInfoTableMap::COL_PROD_DESCRIPTION, TblProdInfoTableMap::COL_PROD_GENERAL, TblProdInfoTableMap::COL_PROD_ERA, TblProdInfoTableMap::COL_PROD_COMPANY, TblProdInfoTableMap::COL_PROD_RELATED, TblProdInfoTableMap::COL_PROD_RELATED_PA, TblProdInfoTableMap::COL_PROD_RELATED_M3, TblProdInfoTableMap::COL_PROD_RELATED2, TblProdInfoTableMap::COL_PROD_SAVEAS, TblProdInfoTableMap::COL_PROD_AIRCRAFTREG, TblProdInfoTableMap::COL_MB, TblProdInfoTableMap::COL_PA, TblProdInfoTableMap::COL_M3, ),
        self::TYPE_FIELDNAME     => array('prod_id', 'prod_price_id', 'prod_name', 'prod_alt1', 'prod_alt2', 'prod_alt3', 'prod_alt4', 'prod_code', 'prod_category', 'prod_category_shipping', 'prod_writeup', 'prod_length', 'prod_wingspan', 'prod_height', 'prod_scale', 'prod_links', 'prod_linkdescription', 'prod_front', 'prod_keywords', 'prod_keywords_writeup', 'prod_title', 'prod_description', 'prod_general', 'prod_era', 'prod_company', 'prod_related', 'prod_related_pa', 'prod_related_m3', 'prod_related2', 'prod_saveas', 'prod_aircraftreg', 'mb', 'pa', 'm3', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('ProdId' => 0, 'ProdPriceId' => 1, 'ProdName' => 2, 'ProdAlt1' => 3, 'ProdAlt2' => 4, 'ProdAlt3' => 5, 'ProdAlt4' => 6, 'ProdCode' => 7, 'ProdCategory' => 8, 'ProdCategoryShipping' => 9, 'ProdWriteup' => 10, 'ProdLength' => 11, 'ProdWingspan' => 12, 'ProdHeight' => 13, 'ProdScale' => 14, 'ProdLinks' => 15, 'ProdLinkdescription' => 16, 'ProdFront' => 17, 'ProdKeywords' => 18, 'ProdKeywordsWriteup' => 19, 'ProdTitle' => 20, 'ProdDescription' => 21, 'ProdGeneral' => 22, 'ProdEra' => 23, 'ProdCompany' => 24, 'ProdRelated' => 25, 'ProdRelatedPa' => 26, 'ProdRelatedM3' => 27, 'ProdRelated2' => 28, 'ProdSaveas' => 29, 'ProdAircraftreg' => 30, 'Mb' => 31, 'Pa' => 32, 'M3' => 33, ),
        self::TYPE_CAMELNAME     => array('prodId' => 0, 'prodPriceId' => 1, 'prodName' => 2, 'prodAlt1' => 3, 'prodAlt2' => 4, 'prodAlt3' => 5, 'prodAlt4' => 6, 'prodCode' => 7, 'prodCategory' => 8, 'prodCategoryShipping' => 9, 'prodWriteup' => 10, 'prodLength' => 11, 'prodWingspan' => 12, 'prodHeight' => 13, 'prodScale' => 14, 'prodLinks' => 15, 'prodLinkdescription' => 16, 'prodFront' => 17, 'prodKeywords' => 18, 'prodKeywordsWriteup' => 19, 'prodTitle' => 20, 'prodDescription' => 21, 'prodGeneral' => 22, 'prodEra' => 23, 'prodCompany' => 24, 'prodRelated' => 25, 'prodRelatedPa' => 26, 'prodRelatedM3' => 27, 'prodRelated2' => 28, 'prodSaveas' => 29, 'prodAircraftreg' => 30, 'mb' => 31, 'pa' => 32, 'm3' => 33, ),
        self::TYPE_COLNAME       => array(TblProdInfoTableMap::COL_PROD_ID => 0, TblProdInfoTableMap::COL_PROD_PRICE_ID => 1, TblProdInfoTableMap::COL_PROD_NAME => 2, TblProdInfoTableMap::COL_PROD_ALT1 => 3, TblProdInfoTableMap::COL_PROD_ALT2 => 4, TblProdInfoTableMap::COL_PROD_ALT3 => 5, TblProdInfoTableMap::COL_PROD_ALT4 => 6, TblProdInfoTableMap::COL_PROD_CODE => 7, TblProdInfoTableMap::COL_PROD_CATEGORY => 8, TblProdInfoTableMap::COL_PROD_CATEGORY_SHIPPING => 9, TblProdInfoTableMap::COL_PROD_WRITEUP => 10, TblProdInfoTableMap::COL_PROD_LENGTH => 11, TblProdInfoTableMap::COL_PROD_WINGSPAN => 12, TblProdInfoTableMap::COL_PROD_HEIGHT => 13, TblProdInfoTableMap::COL_PROD_SCALE => 14, TblProdInfoTableMap::COL_PROD_LINKS => 15, TblProdInfoTableMap::COL_PROD_LINKDESCRIPTION => 16, TblProdInfoTableMap::COL_PROD_FRONT => 17, TblProdInfoTableMap::COL_PROD_KEYWORDS => 18, TblProdInfoTableMap::COL_PROD_KEYWORDS_WRITEUP => 19, TblProdInfoTableMap::COL_PROD_TITLE => 20, TblProdInfoTableMap::COL_PROD_DESCRIPTION => 21, TblProdInfoTableMap::COL_PROD_GENERAL => 22, TblProdInfoTableMap::COL_PROD_ERA => 23, TblProdInfoTableMap::COL_PROD_COMPANY => 24, TblProdInfoTableMap::COL_PROD_RELATED => 25, TblProdInfoTableMap::COL_PROD_RELATED_PA => 26, TblProdInfoTableMap::COL_PROD_RELATED_M3 => 27, TblProdInfoTableMap::COL_PROD_RELATED2 => 28, TblProdInfoTableMap::COL_PROD_SAVEAS => 29, TblProdInfoTableMap::COL_PROD_AIRCRAFTREG => 30, TblProdInfoTableMap::COL_MB => 31, TblProdInfoTableMap::COL_PA => 32, TblProdInfoTableMap::COL_M3 => 33, ),
        self::TYPE_FIELDNAME     => array('prod_id' => 0, 'prod_price_id' => 1, 'prod_name' => 2, 'prod_alt1' => 3, 'prod_alt2' => 4, 'prod_alt3' => 5, 'prod_alt4' => 6, 'prod_code' => 7, 'prod_category' => 8, 'prod_category_shipping' => 9, 'prod_writeup' => 10, 'prod_length' => 11, 'prod_wingspan' => 12, 'prod_height' => 13, 'prod_scale' => 14, 'prod_links' => 15, 'prod_linkdescription' => 16, 'prod_front' => 17, 'prod_keywords' => 18, 'prod_keywords_writeup' => 19, 'prod_title' => 20, 'prod_description' => 21, 'prod_general' => 22, 'prod_era' => 23, 'prod_company' => 24, 'prod_related' => 25, 'prod_related_pa' => 26, 'prod_related_m3' => 27, 'prod_related2' => 28, 'prod_saveas' => 29, 'prod_aircraftreg' => 30, 'mb' => 31, 'pa' => 32, 'm3' => 33, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, )
    );

    /**
     * Initialize the table attributes and columns
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('tbl_prod_info');
        $this->setPhpName('TblProdInfo');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\TblProdInfo');
        $this->setPackage('');
        $this->setUseIdGenerator(true);
        // columns
        $this->addForeignPrimaryKey('prod_id', 'ProdId', 'INTEGER' , 'tbl_era', 'era_id', true, null, null);
        $this->addForeignPrimaryKey('prod_id', 'ProdId', 'INTEGER' , 'tbl_prod_photos', 'prod_id', true, null, null);
        $this->addForeignPrimaryKey('prod_id', 'ProdId', 'INTEGER' , 'tbl_prod_prices', 'prod_id', true, null, null);
        $this->addForeignPrimaryKey('prod_id', 'ProdId', 'INTEGER' , 'tbl_prod_smaller', 'prod_id', true, null, null);
        $this->addForeignKey('prod_price_id', 'ProdPriceId', 'INTEGER', 'tbl_prod_pricing', 'prod_price_id', true, null, null);
        $this->addColumn('prod_name', 'ProdName', 'LONGVARCHAR', true, null, null);
        $this->addColumn('prod_alt1', 'ProdAlt1', 'LONGVARCHAR', true, null, null);
        $this->addColumn('prod_alt2', 'ProdAlt2', 'LONGVARCHAR', true, null, null);
        $this->addColumn('prod_alt3', 'ProdAlt3', 'LONGVARCHAR', true, null, null);
        $this->addColumn('prod_alt4', 'ProdAlt4', 'LONGVARCHAR', true, null, null);
        $this->addColumn('prod_code', 'ProdCode', 'LONGVARCHAR', true, null, null);
        $this->addForeignKey('prod_category', 'ProdCategory', 'LONGVARCHAR', 'tbl_menus', 'menu_alias', true, null, null);
        $this->addForeignKey('prod_category_shipping', 'ProdCategoryShipping', 'INTEGER', 'tbl_shipping_categories', 'prod_shipping_price_id', false, null, null);
        $this->addColumn('prod_writeup', 'ProdWriteup', 'CLOB', true, null, null);
        $this->addColumn('prod_length', 'ProdLength', 'LONGVARCHAR', true, null, null);
        $this->addColumn('prod_wingspan', 'ProdWingspan', 'LONGVARCHAR', true, null, null);
        $this->addColumn('prod_height', 'ProdHeight', 'LONGVARCHAR', true, null, null);
        $this->addColumn('prod_scale', 'ProdScale', 'LONGVARCHAR', true, null, null);
        $this->addColumn('prod_links', 'ProdLinks', 'LONGVARCHAR', true, null, null);
        $this->addColumn('prod_linkdescription', 'ProdLinkdescription', 'LONGVARCHAR', true, null, null);
        $this->addColumn('prod_front', 'ProdFront', 'LONGVARCHAR', false, null, null);
        $this->addColumn('prod_keywords', 'ProdKeywords', 'LONGVARCHAR', true, null, null);
        $this->addColumn('prod_keywords_writeup', 'ProdKeywordsWriteup', 'LONGVARCHAR', true, null, null);
        $this->addColumn('prod_title', 'ProdTitle', 'LONGVARCHAR', true, null, null);
        $this->addColumn('prod_description', 'ProdDescription', 'LONGVARCHAR', true, null, null);
        $this->addForeignKey('prod_general', 'ProdGeneral', 'INTEGER', 'tbl_general', 'prod_general', true, null, null);
        $this->addColumn('prod_era', 'ProdEra', 'INTEGER', true, null, null);
        $this->addColumn('prod_company', 'ProdCompany', 'LONGVARCHAR', true, null, null);
        $this->addColumn('prod_related', 'ProdRelated', 'LONGVARCHAR', true, null, null);
        $this->addColumn('prod_related_pa', 'ProdRelatedPa', 'LONGVARCHAR', false, null, null);
        $this->addColumn('prod_related_m3', 'ProdRelatedM3', 'LONGVARCHAR', false, null, null);
        $this->addColumn('prod_related2', 'ProdRelated2', 'LONGVARCHAR', true, null, null);
        $this->addColumn('prod_saveas', 'ProdSaveas', 'INTEGER', true, null, null);
        $this->addColumn('prod_aircraftreg', 'ProdAircraftreg', 'LONGVARCHAR', true, null, null);
        $this->addColumn('mb', 'Mb', 'INTEGER', false, null, null);
        $this->addColumn('pa', 'Pa', 'INTEGER', false, null, null);
        $this->addColumn('m3', 'M3', 'INTEGER', false, null, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('TblEra', '\\TblEra', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':prod_id',
    1 => ':era_id',
  ),
), null, null, null, false);
        $this->addRelation('TblGeneral', '\\TblGeneral', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':prod_general',
    1 => ':prod_general',
  ),
), null, null, null, false);
        $this->addRelation('TblMenus', '\\TblMenus', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':prod_category',
    1 => ':menu_alias',
  ),
), null, null, null, false);
        $this->addRelation('TblProdPhotos', '\\TblProdPhotos', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':prod_id',
    1 => ':prod_id',
  ),
), null, null, null, false);
        $this->addRelation('TblProdPrices', '\\TblProdPrices', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':prod_id',
    1 => ':prod_id',
  ),
), null, null, null, false);
        $this->addRelation('TblProdPricing', '\\TblProdPricing', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':prod_price_id',
    1 => ':prod_price_id',
  ),
), null, null, null, false);
        $this->addRelation('TblProdSmaller', '\\TblProdSmaller', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':prod_id',
    1 => ':prod_id',
  ),
), null, null, null, false);
        $this->addRelation('TblShippingCategories', '\\TblShippingCategories', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':prod_category_shipping',
    1 => ':prod_shipping_price_id',
  ),
), null, null, null, false);
    } // buildRelations()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return string The primary key hash of the row
     */
    public static function getPrimaryKeyHashFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        // If the PK cannot be derived from the row, return NULL.
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ProdId', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ProdId', TableMap::TYPE_PHPNAME, $indexType)];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        return (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('ProdId', TableMap::TYPE_PHPNAME, $indexType)
        ];
    }
    
    /**
     * The class that the tableMap will make instances of.
     *
     * If $withPrefix is true, the returned path
     * uses a dot-path notation which is translated into a path
     * relative to a location on the PHP include_path.
     * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
     *
     * @param boolean $withPrefix Whether or not to return the path with the class name
     * @return string path.to.ClassName
     */
    public static function getOMClass($withPrefix = true)
    {
        return $withPrefix ? TblProdInfoTableMap::CLASS_DEFAULT : TblProdInfoTableMap::OM_CLASS;
    }

    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param array  $row       row returned by DataFetcher->fetch().
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                 One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return array           (TblProdInfo object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = TblProdInfoTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = TblProdInfoTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + TblProdInfoTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = TblProdInfoTableMap::OM_CLASS;
            /** @var TblProdInfo $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            TblProdInfoTableMap::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @param DataFetcherInterface $dataFetcher
     * @return array
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function populateObjects(DataFetcherInterface $dataFetcher)
    {
        $results = array();
    
        // set the class once to avoid overhead in the loop
        $cls = static::getOMClass(false);
        // populate the object(s)
        while ($row = $dataFetcher->fetch()) {
            $key = TblProdInfoTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = TblProdInfoTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var TblProdInfo $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                TblProdInfoTableMap::addInstanceToPool($obj, $key);
            } // if key exists
        }

        return $results;
    }
    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param Criteria $criteria object containing the columns to add.
     * @param string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(TblProdInfoTableMap::COL_PROD_ID);
            $criteria->addSelectColumn(TblProdInfoTableMap::COL_PROD_PRICE_ID);
            $criteria->addSelectColumn(TblProdInfoTableMap::COL_PROD_NAME);
            $criteria->addSelectColumn(TblProdInfoTableMap::COL_PROD_ALT1);
            $criteria->addSelectColumn(TblProdInfoTableMap::COL_PROD_ALT2);
            $criteria->addSelectColumn(TblProdInfoTableMap::COL_PROD_ALT3);
            $criteria->addSelectColumn(TblProdInfoTableMap::COL_PROD_ALT4);
            $criteria->addSelectColumn(TblProdInfoTableMap::COL_PROD_CODE);
            $criteria->addSelectColumn(TblProdInfoTableMap::COL_PROD_CATEGORY);
            $criteria->addSelectColumn(TblProdInfoTableMap::COL_PROD_CATEGORY_SHIPPING);
            $criteria->addSelectColumn(TblProdInfoTableMap::COL_PROD_WRITEUP);
            $criteria->addSelectColumn(TblProdInfoTableMap::COL_PROD_LENGTH);
            $criteria->addSelectColumn(TblProdInfoTableMap::COL_PROD_WINGSPAN);
            $criteria->addSelectColumn(TblProdInfoTableMap::COL_PROD_HEIGHT);
            $criteria->addSelectColumn(TblProdInfoTableMap::COL_PROD_SCALE);
            $criteria->addSelectColumn(TblProdInfoTableMap::COL_PROD_LINKS);
            $criteria->addSelectColumn(TblProdInfoTableMap::COL_PROD_LINKDESCRIPTION);
            $criteria->addSelectColumn(TblProdInfoTableMap::COL_PROD_FRONT);
            $criteria->addSelectColumn(TblProdInfoTableMap::COL_PROD_KEYWORDS);
            $criteria->addSelectColumn(TblProdInfoTableMap::COL_PROD_KEYWORDS_WRITEUP);
            $criteria->addSelectColumn(TblProdInfoTableMap::COL_PROD_TITLE);
            $criteria->addSelectColumn(TblProdInfoTableMap::COL_PROD_DESCRIPTION);
            $criteria->addSelectColumn(TblProdInfoTableMap::COL_PROD_GENERAL);
            $criteria->addSelectColumn(TblProdInfoTableMap::COL_PROD_ERA);
            $criteria->addSelectColumn(TblProdInfoTableMap::COL_PROD_COMPANY);
            $criteria->addSelectColumn(TblProdInfoTableMap::COL_PROD_RELATED);
            $criteria->addSelectColumn(TblProdInfoTableMap::COL_PROD_RELATED_PA);
            $criteria->addSelectColumn(TblProdInfoTableMap::COL_PROD_RELATED_M3);
            $criteria->addSelectColumn(TblProdInfoTableMap::COL_PROD_RELATED2);
            $criteria->addSelectColumn(TblProdInfoTableMap::COL_PROD_SAVEAS);
            $criteria->addSelectColumn(TblProdInfoTableMap::COL_PROD_AIRCRAFTREG);
            $criteria->addSelectColumn(TblProdInfoTableMap::COL_MB);
            $criteria->addSelectColumn(TblProdInfoTableMap::COL_PA);
            $criteria->addSelectColumn(TblProdInfoTableMap::COL_M3);
        } else {
            $criteria->addSelectColumn($alias . '.prod_id');
            $criteria->addSelectColumn($alias . '.prod_price_id');
            $criteria->addSelectColumn($alias . '.prod_name');
            $criteria->addSelectColumn($alias . '.prod_alt1');
            $criteria->addSelectColumn($alias . '.prod_alt2');
            $criteria->addSelectColumn($alias . '.prod_alt3');
            $criteria->addSelectColumn($alias . '.prod_alt4');
            $criteria->addSelectColumn($alias . '.prod_code');
            $criteria->addSelectColumn($alias . '.prod_category');
            $criteria->addSelectColumn($alias . '.prod_category_shipping');
            $criteria->addSelectColumn($alias . '.prod_writeup');
            $criteria->addSelectColumn($alias . '.prod_length');
            $criteria->addSelectColumn($alias . '.prod_wingspan');
            $criteria->addSelectColumn($alias . '.prod_height');
            $criteria->addSelectColumn($alias . '.prod_scale');
            $criteria->addSelectColumn($alias . '.prod_links');
            $criteria->addSelectColumn($alias . '.prod_linkdescription');
            $criteria->addSelectColumn($alias . '.prod_front');
            $criteria->addSelectColumn($alias . '.prod_keywords');
            $criteria->addSelectColumn($alias . '.prod_keywords_writeup');
            $criteria->addSelectColumn($alias . '.prod_title');
            $criteria->addSelectColumn($alias . '.prod_description');
            $criteria->addSelectColumn($alias . '.prod_general');
            $criteria->addSelectColumn($alias . '.prod_era');
            $criteria->addSelectColumn($alias . '.prod_company');
            $criteria->addSelectColumn($alias . '.prod_related');
            $criteria->addSelectColumn($alias . '.prod_related_pa');
            $criteria->addSelectColumn($alias . '.prod_related_m3');
            $criteria->addSelectColumn($alias . '.prod_related2');
            $criteria->addSelectColumn($alias . '.prod_saveas');
            $criteria->addSelectColumn($alias . '.prod_aircraftreg');
            $criteria->addSelectColumn($alias . '.mb');
            $criteria->addSelectColumn($alias . '.pa');
            $criteria->addSelectColumn($alias . '.m3');
        }
    }

    /**
     * Returns the TableMap related to this object.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getServiceContainer()->getDatabaseMap(TblProdInfoTableMap::DATABASE_NAME)->getTable(TblProdInfoTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(TblProdInfoTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(TblProdInfoTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new TblProdInfoTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a TblProdInfo or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or TblProdInfo object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param  ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, ConnectionInterface $con = null)
     {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TblProdInfoTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \TblProdInfo) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(TblProdInfoTableMap::DATABASE_NAME);
            $criteria->add(TblProdInfoTableMap::COL_PROD_ID, (array) $values, Criteria::IN);
        }

        $query = TblProdInfoQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            TblProdInfoTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                TblProdInfoTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the tbl_prod_info table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return TblProdInfoQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a TblProdInfo or Criteria object.
     *
     * @param mixed               $criteria Criteria or TblProdInfo object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TblProdInfoTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from TblProdInfo object
        }

        if ($criteria->containsKey(TblProdInfoTableMap::COL_PROD_ID) && $criteria->keyContainsValue(TblProdInfoTableMap::COL_PROD_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.TblProdInfoTableMap::COL_PROD_ID.')');
        }


        // Set the correct dbName
        $query = TblProdInfoQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // TblProdInfoTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
TblProdInfoTableMap::buildTableMap();
