<?php

namespace Map;

use \TblProdPrices;
use \TblProdPricesQuery;
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
 * This class defines the structure of the 'tbl_prod_prices' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class TblProdPricesTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.TblProdPricesTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'mpm';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'tbl_prod_prices';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\TblProdPrices';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'TblProdPrices';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 14;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 14;

    /**
     * the column name for the prod_id field
     */
    const COL_PROD_ID = 'tbl_prod_prices.prod_id';

    /**
     * the column name for the prod_normalprice field
     */
    const COL_PROD_NORMALPRICE = 'tbl_prod_prices.prod_normalprice';

    /**
     * the column name for the prod_salesprice field
     */
    const COL_PROD_SALESPRICE = 'tbl_prod_prices.prod_salesprice';

    /**
     * the column name for the prod_shipping_asia field
     */
    const COL_PROD_SHIPPING_ASIA = 'tbl_prod_prices.prod_shipping_asia';

    /**
     * the column name for the prod_shipping_europe field
     */
    const COL_PROD_SHIPPING_EUROPE = 'tbl_prod_prices.prod_shipping_europe';

    /**
     * the column name for the prod_shipping_usa field
     */
    const COL_PROD_SHIPPING_USA = 'tbl_prod_prices.prod_shipping_usa';

    /**
     * the column name for the prod_shipping_canada field
     */
    const COL_PROD_SHIPPING_CANADA = 'tbl_prod_prices.prod_shipping_canada';

    /**
     * the column name for the prod_shipping_au field
     */
    const COL_PROD_SHIPPING_AU = 'tbl_prod_prices.prod_shipping_au';

    /**
     * the column name for the prod_shipping_asia_parcel field
     */
    const COL_PROD_SHIPPING_ASIA_PARCEL = 'tbl_prod_prices.prod_shipping_asia_parcel';

    /**
     * the column name for the prod_shipping_europe_parcel field
     */
    const COL_PROD_SHIPPING_EUROPE_PARCEL = 'tbl_prod_prices.prod_shipping_europe_parcel';

    /**
     * the column name for the prod_shipping_usa_parcel field
     */
    const COL_PROD_SHIPPING_USA_PARCEL = 'tbl_prod_prices.prod_shipping_usa_parcel';

    /**
     * the column name for the prod_shipping_canada_parcel field
     */
    const COL_PROD_SHIPPING_CANADA_PARCEL = 'tbl_prod_prices.prod_shipping_canada_parcel';

    /**
     * the column name for the prod_shipping_au_parcel field
     */
    const COL_PROD_SHIPPING_AU_PARCEL = 'tbl_prod_prices.prod_shipping_au_parcel';

    /**
     * the column name for the prod_customprice field
     */
    const COL_PROD_CUSTOMPRICE = 'tbl_prod_prices.prod_customprice';

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
        self::TYPE_PHPNAME       => array('ProdId', 'ProdNormalprice', 'ProdSalesprice', 'ProdShippingAsia', 'ProdShippingEurope', 'ProdShippingUsa', 'ProdShippingCanada', 'ProdShippingAu', 'ProdShippingAsiaParcel', 'ProdShippingEuropeParcel', 'ProdShippingUsaParcel', 'ProdShippingCanadaParcel', 'ProdShippingAuParcel', 'ProdCustomprice', ),
        self::TYPE_CAMELNAME     => array('prodId', 'prodNormalprice', 'prodSalesprice', 'prodShippingAsia', 'prodShippingEurope', 'prodShippingUsa', 'prodShippingCanada', 'prodShippingAu', 'prodShippingAsiaParcel', 'prodShippingEuropeParcel', 'prodShippingUsaParcel', 'prodShippingCanadaParcel', 'prodShippingAuParcel', 'prodCustomprice', ),
        self::TYPE_COLNAME       => array(TblProdPricesTableMap::COL_PROD_ID, TblProdPricesTableMap::COL_PROD_NORMALPRICE, TblProdPricesTableMap::COL_PROD_SALESPRICE, TblProdPricesTableMap::COL_PROD_SHIPPING_ASIA, TblProdPricesTableMap::COL_PROD_SHIPPING_EUROPE, TblProdPricesTableMap::COL_PROD_SHIPPING_USA, TblProdPricesTableMap::COL_PROD_SHIPPING_CANADA, TblProdPricesTableMap::COL_PROD_SHIPPING_AU, TblProdPricesTableMap::COL_PROD_SHIPPING_ASIA_PARCEL, TblProdPricesTableMap::COL_PROD_SHIPPING_EUROPE_PARCEL, TblProdPricesTableMap::COL_PROD_SHIPPING_USA_PARCEL, TblProdPricesTableMap::COL_PROD_SHIPPING_CANADA_PARCEL, TblProdPricesTableMap::COL_PROD_SHIPPING_AU_PARCEL, TblProdPricesTableMap::COL_PROD_CUSTOMPRICE, ),
        self::TYPE_FIELDNAME     => array('prod_id', 'prod_normalprice', 'prod_salesprice', 'prod_shipping_asia', 'prod_shipping_europe', 'prod_shipping_usa', 'prod_shipping_canada', 'prod_shipping_au', 'prod_shipping_asia_parcel', 'prod_shipping_europe_parcel', 'prod_shipping_usa_parcel', 'prod_shipping_canada_parcel', 'prod_shipping_au_parcel', 'prod_customprice', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('ProdId' => 0, 'ProdNormalprice' => 1, 'ProdSalesprice' => 2, 'ProdShippingAsia' => 3, 'ProdShippingEurope' => 4, 'ProdShippingUsa' => 5, 'ProdShippingCanada' => 6, 'ProdShippingAu' => 7, 'ProdShippingAsiaParcel' => 8, 'ProdShippingEuropeParcel' => 9, 'ProdShippingUsaParcel' => 10, 'ProdShippingCanadaParcel' => 11, 'ProdShippingAuParcel' => 12, 'ProdCustomprice' => 13, ),
        self::TYPE_CAMELNAME     => array('prodId' => 0, 'prodNormalprice' => 1, 'prodSalesprice' => 2, 'prodShippingAsia' => 3, 'prodShippingEurope' => 4, 'prodShippingUsa' => 5, 'prodShippingCanada' => 6, 'prodShippingAu' => 7, 'prodShippingAsiaParcel' => 8, 'prodShippingEuropeParcel' => 9, 'prodShippingUsaParcel' => 10, 'prodShippingCanadaParcel' => 11, 'prodShippingAuParcel' => 12, 'prodCustomprice' => 13, ),
        self::TYPE_COLNAME       => array(TblProdPricesTableMap::COL_PROD_ID => 0, TblProdPricesTableMap::COL_PROD_NORMALPRICE => 1, TblProdPricesTableMap::COL_PROD_SALESPRICE => 2, TblProdPricesTableMap::COL_PROD_SHIPPING_ASIA => 3, TblProdPricesTableMap::COL_PROD_SHIPPING_EUROPE => 4, TblProdPricesTableMap::COL_PROD_SHIPPING_USA => 5, TblProdPricesTableMap::COL_PROD_SHIPPING_CANADA => 6, TblProdPricesTableMap::COL_PROD_SHIPPING_AU => 7, TblProdPricesTableMap::COL_PROD_SHIPPING_ASIA_PARCEL => 8, TblProdPricesTableMap::COL_PROD_SHIPPING_EUROPE_PARCEL => 9, TblProdPricesTableMap::COL_PROD_SHIPPING_USA_PARCEL => 10, TblProdPricesTableMap::COL_PROD_SHIPPING_CANADA_PARCEL => 11, TblProdPricesTableMap::COL_PROD_SHIPPING_AU_PARCEL => 12, TblProdPricesTableMap::COL_PROD_CUSTOMPRICE => 13, ),
        self::TYPE_FIELDNAME     => array('prod_id' => 0, 'prod_normalprice' => 1, 'prod_salesprice' => 2, 'prod_shipping_asia' => 3, 'prod_shipping_europe' => 4, 'prod_shipping_usa' => 5, 'prod_shipping_canada' => 6, 'prod_shipping_au' => 7, 'prod_shipping_asia_parcel' => 8, 'prod_shipping_europe_parcel' => 9, 'prod_shipping_usa_parcel' => 10, 'prod_shipping_canada_parcel' => 11, 'prod_shipping_au_parcel' => 12, 'prod_customprice' => 13, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
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
        $this->setName('tbl_prod_prices');
        $this->setPhpName('TblProdPrices');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\TblProdPrices');
        $this->setPackage('');
        $this->setUseIdGenerator(true);
        // columns
        $this->addForeignPrimaryKey('prod_id', 'ProdId', 'INTEGER' , 'tbl_prod_info', 'prod_id', true, null, null);
        $this->addColumn('prod_normalprice', 'ProdNormalprice', 'LONGVARCHAR', true, null, null);
        $this->addColumn('prod_salesprice', 'ProdSalesprice', 'LONGVARCHAR', true, null, null);
        $this->addColumn('prod_shipping_asia', 'ProdShippingAsia', 'LONGVARCHAR', true, null, null);
        $this->addColumn('prod_shipping_europe', 'ProdShippingEurope', 'LONGVARCHAR', true, null, null);
        $this->addColumn('prod_shipping_usa', 'ProdShippingUsa', 'LONGVARCHAR', true, null, null);
        $this->addColumn('prod_shipping_canada', 'ProdShippingCanada', 'LONGVARCHAR', true, null, null);
        $this->addColumn('prod_shipping_au', 'ProdShippingAu', 'LONGVARCHAR', true, null, null);
        $this->addColumn('prod_shipping_asia_parcel', 'ProdShippingAsiaParcel', 'LONGVARCHAR', true, null, null);
        $this->addColumn('prod_shipping_europe_parcel', 'ProdShippingEuropeParcel', 'LONGVARCHAR', true, null, null);
        $this->addColumn('prod_shipping_usa_parcel', 'ProdShippingUsaParcel', 'LONGVARCHAR', true, null, null);
        $this->addColumn('prod_shipping_canada_parcel', 'ProdShippingCanadaParcel', 'LONGVARCHAR', true, null, null);
        $this->addColumn('prod_shipping_au_parcel', 'ProdShippingAuParcel', 'LONGVARCHAR', true, null, null);
        $this->addColumn('prod_customprice', 'ProdCustomprice', 'LONGVARCHAR', true, null, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('TblProdInfo', '\\TblProdInfo', RelationMap::ONE_TO_ONE, array (
  0 =>
  array (
    0 => ':prod_id',
    1 => ':prod_id',
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

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ProdId', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ProdId', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ProdId', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ProdId', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ProdId', TableMap::TYPE_PHPNAME, $indexType)];
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
        return $withPrefix ? TblProdPricesTableMap::CLASS_DEFAULT : TblProdPricesTableMap::OM_CLASS;
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
     * @return array           (TblProdPrices object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = TblProdPricesTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = TblProdPricesTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + TblProdPricesTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = TblProdPricesTableMap::OM_CLASS;
            /** @var TblProdPrices $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            TblProdPricesTableMap::addInstanceToPool($obj, $key);
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
            $key = TblProdPricesTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = TblProdPricesTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var TblProdPrices $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                TblProdPricesTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(TblProdPricesTableMap::COL_PROD_ID);
            $criteria->addSelectColumn(TblProdPricesTableMap::COL_PROD_NORMALPRICE);
            $criteria->addSelectColumn(TblProdPricesTableMap::COL_PROD_SALESPRICE);
            $criteria->addSelectColumn(TblProdPricesTableMap::COL_PROD_SHIPPING_ASIA);
            $criteria->addSelectColumn(TblProdPricesTableMap::COL_PROD_SHIPPING_EUROPE);
            $criteria->addSelectColumn(TblProdPricesTableMap::COL_PROD_SHIPPING_USA);
            $criteria->addSelectColumn(TblProdPricesTableMap::COL_PROD_SHIPPING_CANADA);
            $criteria->addSelectColumn(TblProdPricesTableMap::COL_PROD_SHIPPING_AU);
            $criteria->addSelectColumn(TblProdPricesTableMap::COL_PROD_SHIPPING_ASIA_PARCEL);
            $criteria->addSelectColumn(TblProdPricesTableMap::COL_PROD_SHIPPING_EUROPE_PARCEL);
            $criteria->addSelectColumn(TblProdPricesTableMap::COL_PROD_SHIPPING_USA_PARCEL);
            $criteria->addSelectColumn(TblProdPricesTableMap::COL_PROD_SHIPPING_CANADA_PARCEL);
            $criteria->addSelectColumn(TblProdPricesTableMap::COL_PROD_SHIPPING_AU_PARCEL);
            $criteria->addSelectColumn(TblProdPricesTableMap::COL_PROD_CUSTOMPRICE);
        } else {
            $criteria->addSelectColumn($alias . '.prod_id');
            $criteria->addSelectColumn($alias . '.prod_normalprice');
            $criteria->addSelectColumn($alias . '.prod_salesprice');
            $criteria->addSelectColumn($alias . '.prod_shipping_asia');
            $criteria->addSelectColumn($alias . '.prod_shipping_europe');
            $criteria->addSelectColumn($alias . '.prod_shipping_usa');
            $criteria->addSelectColumn($alias . '.prod_shipping_canada');
            $criteria->addSelectColumn($alias . '.prod_shipping_au');
            $criteria->addSelectColumn($alias . '.prod_shipping_asia_parcel');
            $criteria->addSelectColumn($alias . '.prod_shipping_europe_parcel');
            $criteria->addSelectColumn($alias . '.prod_shipping_usa_parcel');
            $criteria->addSelectColumn($alias . '.prod_shipping_canada_parcel');
            $criteria->addSelectColumn($alias . '.prod_shipping_au_parcel');
            $criteria->addSelectColumn($alias . '.prod_customprice');
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
        return Propel::getServiceContainer()->getDatabaseMap(TblProdPricesTableMap::DATABASE_NAME)->getTable(TblProdPricesTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(TblProdPricesTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(TblProdPricesTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new TblProdPricesTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a TblProdPrices or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or TblProdPrices object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(TblProdPricesTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \TblProdPrices) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(TblProdPricesTableMap::DATABASE_NAME);
            $criteria->add(TblProdPricesTableMap::COL_PROD_ID, (array) $values, Criteria::IN);
        }

        $query = TblProdPricesQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            TblProdPricesTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                TblProdPricesTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the tbl_prod_prices table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return TblProdPricesQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a TblProdPrices or Criteria object.
     *
     * @param mixed               $criteria Criteria or TblProdPrices object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TblProdPricesTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from TblProdPrices object
        }

        if ($criteria->containsKey(TblProdPricesTableMap::COL_PROD_ID) && $criteria->keyContainsValue(TblProdPricesTableMap::COL_PROD_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.TblProdPricesTableMap::COL_PROD_ID.')');
        }


        // Set the correct dbName
        $query = TblProdPricesQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // TblProdPricesTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
TblProdPricesTableMap::buildTableMap();
