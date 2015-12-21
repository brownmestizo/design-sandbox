<?php

namespace Map;

use \TblProdShipping;
use \TblProdShippingQuery;
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
 * This class defines the structure of the 'tbl_prod_shipping' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class TblProdShippingTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.TblProdShippingTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'mpm';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'tbl_prod_shipping';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\TblProdShipping';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'TblProdShipping';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 13;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 13;

    /**
     * the column name for the prod_shipping_price_id field
     */
    const COL_PROD_SHIPPING_PRICE_ID = 'tbl_prod_shipping.prod_shipping_price_id';

    /**
     * the column name for the prod_shipping_name field
     */
    const COL_PROD_SHIPPING_NAME = 'tbl_prod_shipping.prod_shipping_name';

    /**
     * the column name for the prod_shipping_description field
     */
    const COL_PROD_SHIPPING_DESCRIPTION = 'tbl_prod_shipping.prod_shipping_description';

    /**
     * the column name for the prod_shipping_asia field
     */
    const COL_PROD_SHIPPING_ASIA = 'tbl_prod_shipping.prod_shipping_asia';

    /**
     * the column name for the prod_shipping_europe field
     */
    const COL_PROD_SHIPPING_EUROPE = 'tbl_prod_shipping.prod_shipping_europe';

    /**
     * the column name for the prod_shipping_usa field
     */
    const COL_PROD_SHIPPING_USA = 'tbl_prod_shipping.prod_shipping_usa';

    /**
     * the column name for the prod_shipping_canada field
     */
    const COL_PROD_SHIPPING_CANADA = 'tbl_prod_shipping.prod_shipping_canada';

    /**
     * the column name for the prod_shipping_au field
     */
    const COL_PROD_SHIPPING_AU = 'tbl_prod_shipping.prod_shipping_au';

    /**
     * the column name for the prod_shipping_asia_parcel field
     */
    const COL_PROD_SHIPPING_ASIA_PARCEL = 'tbl_prod_shipping.prod_shipping_asia_parcel';

    /**
     * the column name for the prod_shipping_europe_parcel field
     */
    const COL_PROD_SHIPPING_EUROPE_PARCEL = 'tbl_prod_shipping.prod_shipping_europe_parcel';

    /**
     * the column name for the prod_shipping_usa_parcel field
     */
    const COL_PROD_SHIPPING_USA_PARCEL = 'tbl_prod_shipping.prod_shipping_usa_parcel';

    /**
     * the column name for the prod_shipping_canada_parcel field
     */
    const COL_PROD_SHIPPING_CANADA_PARCEL = 'tbl_prod_shipping.prod_shipping_canada_parcel';

    /**
     * the column name for the prod_shipping_au_parcel field
     */
    const COL_PROD_SHIPPING_AU_PARCEL = 'tbl_prod_shipping.prod_shipping_au_parcel';

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
        self::TYPE_PHPNAME       => array('ProdShippingPriceId', 'ProdShippingName', 'ProdShippingDescription', 'ProdShippingAsia', 'ProdShippingEurope', 'ProdShippingUsa', 'ProdShippingCanada', 'ProdShippingAu', 'ProdShippingAsiaParcel', 'ProdShippingEuropeParcel', 'ProdShippingUsaParcel', 'ProdShippingCanadaParcel', 'ProdShippingAuParcel', ),
        self::TYPE_CAMELNAME     => array('prodShippingPriceId', 'prodShippingName', 'prodShippingDescription', 'prodShippingAsia', 'prodShippingEurope', 'prodShippingUsa', 'prodShippingCanada', 'prodShippingAu', 'prodShippingAsiaParcel', 'prodShippingEuropeParcel', 'prodShippingUsaParcel', 'prodShippingCanadaParcel', 'prodShippingAuParcel', ),
        self::TYPE_COLNAME       => array(TblProdShippingTableMap::COL_PROD_SHIPPING_PRICE_ID, TblProdShippingTableMap::COL_PROD_SHIPPING_NAME, TblProdShippingTableMap::COL_PROD_SHIPPING_DESCRIPTION, TblProdShippingTableMap::COL_PROD_SHIPPING_ASIA, TblProdShippingTableMap::COL_PROD_SHIPPING_EUROPE, TblProdShippingTableMap::COL_PROD_SHIPPING_USA, TblProdShippingTableMap::COL_PROD_SHIPPING_CANADA, TblProdShippingTableMap::COL_PROD_SHIPPING_AU, TblProdShippingTableMap::COL_PROD_SHIPPING_ASIA_PARCEL, TblProdShippingTableMap::COL_PROD_SHIPPING_EUROPE_PARCEL, TblProdShippingTableMap::COL_PROD_SHIPPING_USA_PARCEL, TblProdShippingTableMap::COL_PROD_SHIPPING_CANADA_PARCEL, TblProdShippingTableMap::COL_PROD_SHIPPING_AU_PARCEL, ),
        self::TYPE_FIELDNAME     => array('prod_shipping_price_id', 'prod_shipping_name', 'prod_shipping_description', 'prod_shipping_asia', 'prod_shipping_europe', 'prod_shipping_usa', 'prod_shipping_canada', 'prod_shipping_au', 'prod_shipping_asia_parcel', 'prod_shipping_europe_parcel', 'prod_shipping_usa_parcel', 'prod_shipping_canada_parcel', 'prod_shipping_au_parcel', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('ProdShippingPriceId' => 0, 'ProdShippingName' => 1, 'ProdShippingDescription' => 2, 'ProdShippingAsia' => 3, 'ProdShippingEurope' => 4, 'ProdShippingUsa' => 5, 'ProdShippingCanada' => 6, 'ProdShippingAu' => 7, 'ProdShippingAsiaParcel' => 8, 'ProdShippingEuropeParcel' => 9, 'ProdShippingUsaParcel' => 10, 'ProdShippingCanadaParcel' => 11, 'ProdShippingAuParcel' => 12, ),
        self::TYPE_CAMELNAME     => array('prodShippingPriceId' => 0, 'prodShippingName' => 1, 'prodShippingDescription' => 2, 'prodShippingAsia' => 3, 'prodShippingEurope' => 4, 'prodShippingUsa' => 5, 'prodShippingCanada' => 6, 'prodShippingAu' => 7, 'prodShippingAsiaParcel' => 8, 'prodShippingEuropeParcel' => 9, 'prodShippingUsaParcel' => 10, 'prodShippingCanadaParcel' => 11, 'prodShippingAuParcel' => 12, ),
        self::TYPE_COLNAME       => array(TblProdShippingTableMap::COL_PROD_SHIPPING_PRICE_ID => 0, TblProdShippingTableMap::COL_PROD_SHIPPING_NAME => 1, TblProdShippingTableMap::COL_PROD_SHIPPING_DESCRIPTION => 2, TblProdShippingTableMap::COL_PROD_SHIPPING_ASIA => 3, TblProdShippingTableMap::COL_PROD_SHIPPING_EUROPE => 4, TblProdShippingTableMap::COL_PROD_SHIPPING_USA => 5, TblProdShippingTableMap::COL_PROD_SHIPPING_CANADA => 6, TblProdShippingTableMap::COL_PROD_SHIPPING_AU => 7, TblProdShippingTableMap::COL_PROD_SHIPPING_ASIA_PARCEL => 8, TblProdShippingTableMap::COL_PROD_SHIPPING_EUROPE_PARCEL => 9, TblProdShippingTableMap::COL_PROD_SHIPPING_USA_PARCEL => 10, TblProdShippingTableMap::COL_PROD_SHIPPING_CANADA_PARCEL => 11, TblProdShippingTableMap::COL_PROD_SHIPPING_AU_PARCEL => 12, ),
        self::TYPE_FIELDNAME     => array('prod_shipping_price_id' => 0, 'prod_shipping_name' => 1, 'prod_shipping_description' => 2, 'prod_shipping_asia' => 3, 'prod_shipping_europe' => 4, 'prod_shipping_usa' => 5, 'prod_shipping_canada' => 6, 'prod_shipping_au' => 7, 'prod_shipping_asia_parcel' => 8, 'prod_shipping_europe_parcel' => 9, 'prod_shipping_usa_parcel' => 10, 'prod_shipping_canada_parcel' => 11, 'prod_shipping_au_parcel' => 12, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
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
        $this->setName('tbl_prod_shipping');
        $this->setPhpName('TblProdShipping');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\TblProdShipping');
        $this->setPackage('');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('prod_shipping_price_id', 'ProdShippingPriceId', 'INTEGER', true, null, null);
        $this->addColumn('prod_shipping_name', 'ProdShippingName', 'LONGVARCHAR', true, null, null);
        $this->addColumn('prod_shipping_description', 'ProdShippingDescription', 'LONGVARCHAR', true, null, null);
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
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ProdShippingPriceId', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ProdShippingPriceId', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ProdShippingPriceId', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ProdShippingPriceId', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ProdShippingPriceId', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ProdShippingPriceId', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('ProdShippingPriceId', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? TblProdShippingTableMap::CLASS_DEFAULT : TblProdShippingTableMap::OM_CLASS;
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
     * @return array           (TblProdShipping object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = TblProdShippingTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = TblProdShippingTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + TblProdShippingTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = TblProdShippingTableMap::OM_CLASS;
            /** @var TblProdShipping $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            TblProdShippingTableMap::addInstanceToPool($obj, $key);
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
            $key = TblProdShippingTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = TblProdShippingTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var TblProdShipping $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                TblProdShippingTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(TblProdShippingTableMap::COL_PROD_SHIPPING_PRICE_ID);
            $criteria->addSelectColumn(TblProdShippingTableMap::COL_PROD_SHIPPING_NAME);
            $criteria->addSelectColumn(TblProdShippingTableMap::COL_PROD_SHIPPING_DESCRIPTION);
            $criteria->addSelectColumn(TblProdShippingTableMap::COL_PROD_SHIPPING_ASIA);
            $criteria->addSelectColumn(TblProdShippingTableMap::COL_PROD_SHIPPING_EUROPE);
            $criteria->addSelectColumn(TblProdShippingTableMap::COL_PROD_SHIPPING_USA);
            $criteria->addSelectColumn(TblProdShippingTableMap::COL_PROD_SHIPPING_CANADA);
            $criteria->addSelectColumn(TblProdShippingTableMap::COL_PROD_SHIPPING_AU);
            $criteria->addSelectColumn(TblProdShippingTableMap::COL_PROD_SHIPPING_ASIA_PARCEL);
            $criteria->addSelectColumn(TblProdShippingTableMap::COL_PROD_SHIPPING_EUROPE_PARCEL);
            $criteria->addSelectColumn(TblProdShippingTableMap::COL_PROD_SHIPPING_USA_PARCEL);
            $criteria->addSelectColumn(TblProdShippingTableMap::COL_PROD_SHIPPING_CANADA_PARCEL);
            $criteria->addSelectColumn(TblProdShippingTableMap::COL_PROD_SHIPPING_AU_PARCEL);
        } else {
            $criteria->addSelectColumn($alias . '.prod_shipping_price_id');
            $criteria->addSelectColumn($alias . '.prod_shipping_name');
            $criteria->addSelectColumn($alias . '.prod_shipping_description');
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
        return Propel::getServiceContainer()->getDatabaseMap(TblProdShippingTableMap::DATABASE_NAME)->getTable(TblProdShippingTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(TblProdShippingTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(TblProdShippingTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new TblProdShippingTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a TblProdShipping or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or TblProdShipping object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(TblProdShippingTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \TblProdShipping) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(TblProdShippingTableMap::DATABASE_NAME);
            $criteria->add(TblProdShippingTableMap::COL_PROD_SHIPPING_PRICE_ID, (array) $values, Criteria::IN);
        }

        $query = TblProdShippingQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            TblProdShippingTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                TblProdShippingTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the tbl_prod_shipping table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return TblProdShippingQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a TblProdShipping or Criteria object.
     *
     * @param mixed               $criteria Criteria or TblProdShipping object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TblProdShippingTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from TblProdShipping object
        }

        if ($criteria->containsKey(TblProdShippingTableMap::COL_PROD_SHIPPING_PRICE_ID) && $criteria->keyContainsValue(TblProdShippingTableMap::COL_PROD_SHIPPING_PRICE_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.TblProdShippingTableMap::COL_PROD_SHIPPING_PRICE_ID.')');
        }


        // Set the correct dbName
        $query = TblProdShippingQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // TblProdShippingTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
TblProdShippingTableMap::buildTableMap();
