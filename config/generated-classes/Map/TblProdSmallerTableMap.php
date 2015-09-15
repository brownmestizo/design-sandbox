<?php

namespace Map;

use \TblProdSmaller;
use \TblProdSmallerQuery;
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
 * This class defines the structure of the 'tbl_prod_smaller' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class TblProdSmallerTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.TblProdSmallerTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'mpm';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'tbl_prod_smaller';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\TblProdSmaller';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'TblProdSmaller';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 9;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 9;

    /**
     * the column name for the prod_id field
     */
    const COL_PROD_ID = 'tbl_prod_smaller.prod_id';

    /**
     * the column name for the sm_enable_id field
     */
    const COL_SM_ENABLE_ID = 'tbl_prod_smaller.sm_enable_id';

    /**
     * the column name for the sm_prod_length field
     */
    const COL_SM_PROD_LENGTH = 'tbl_prod_smaller.sm_prod_length';

    /**
     * the column name for the sm_prod_wingspan field
     */
    const COL_SM_PROD_WINGSPAN = 'tbl_prod_smaller.sm_prod_wingspan';

    /**
     * the column name for the sm_prod_height field
     */
    const COL_SM_PROD_HEIGHT = 'tbl_prod_smaller.sm_prod_height';

    /**
     * the column name for the sm_prod_scale field
     */
    const COL_SM_PROD_SCALE = 'tbl_prod_smaller.sm_prod_scale';

    /**
     * the column name for the sm_prod_price_id field
     */
    const COL_SM_PROD_PRICE_ID = 'tbl_prod_smaller.sm_prod_price_id';

    /**
     * the column name for the sm_prod_normalprice field
     */
    const COL_SM_PROD_NORMALPRICE = 'tbl_prod_smaller.sm_prod_normalprice';

    /**
     * the column name for the sm_prod_shipping_price_id field
     */
    const COL_SM_PROD_SHIPPING_PRICE_ID = 'tbl_prod_smaller.sm_prod_shipping_price_id';

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
        self::TYPE_PHPNAME       => array('ProdId', 'SmEnableId', 'SmProdLength', 'SmProdWingspan', 'SmProdHeight', 'SmProdScale', 'SmProdPriceId', 'SmProdNormalprice', 'SmProdShippingPriceId', ),
        self::TYPE_CAMELNAME     => array('prodId', 'smEnableId', 'smProdLength', 'smProdWingspan', 'smProdHeight', 'smProdScale', 'smProdPriceId', 'smProdNormalprice', 'smProdShippingPriceId', ),
        self::TYPE_COLNAME       => array(TblProdSmallerTableMap::COL_PROD_ID, TblProdSmallerTableMap::COL_SM_ENABLE_ID, TblProdSmallerTableMap::COL_SM_PROD_LENGTH, TblProdSmallerTableMap::COL_SM_PROD_WINGSPAN, TblProdSmallerTableMap::COL_SM_PROD_HEIGHT, TblProdSmallerTableMap::COL_SM_PROD_SCALE, TblProdSmallerTableMap::COL_SM_PROD_PRICE_ID, TblProdSmallerTableMap::COL_SM_PROD_NORMALPRICE, TblProdSmallerTableMap::COL_SM_PROD_SHIPPING_PRICE_ID, ),
        self::TYPE_FIELDNAME     => array('prod_id', 'sm_enable_id', 'sm_prod_length', 'sm_prod_wingspan', 'sm_prod_height', 'sm_prod_scale', 'sm_prod_price_id', 'sm_prod_normalprice', 'sm_prod_shipping_price_id', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('ProdId' => 0, 'SmEnableId' => 1, 'SmProdLength' => 2, 'SmProdWingspan' => 3, 'SmProdHeight' => 4, 'SmProdScale' => 5, 'SmProdPriceId' => 6, 'SmProdNormalprice' => 7, 'SmProdShippingPriceId' => 8, ),
        self::TYPE_CAMELNAME     => array('prodId' => 0, 'smEnableId' => 1, 'smProdLength' => 2, 'smProdWingspan' => 3, 'smProdHeight' => 4, 'smProdScale' => 5, 'smProdPriceId' => 6, 'smProdNormalprice' => 7, 'smProdShippingPriceId' => 8, ),
        self::TYPE_COLNAME       => array(TblProdSmallerTableMap::COL_PROD_ID => 0, TblProdSmallerTableMap::COL_SM_ENABLE_ID => 1, TblProdSmallerTableMap::COL_SM_PROD_LENGTH => 2, TblProdSmallerTableMap::COL_SM_PROD_WINGSPAN => 3, TblProdSmallerTableMap::COL_SM_PROD_HEIGHT => 4, TblProdSmallerTableMap::COL_SM_PROD_SCALE => 5, TblProdSmallerTableMap::COL_SM_PROD_PRICE_ID => 6, TblProdSmallerTableMap::COL_SM_PROD_NORMALPRICE => 7, TblProdSmallerTableMap::COL_SM_PROD_SHIPPING_PRICE_ID => 8, ),
        self::TYPE_FIELDNAME     => array('prod_id' => 0, 'sm_enable_id' => 1, 'sm_prod_length' => 2, 'sm_prod_wingspan' => 3, 'sm_prod_height' => 4, 'sm_prod_scale' => 5, 'sm_prod_price_id' => 6, 'sm_prod_normalprice' => 7, 'sm_prod_shipping_price_id' => 8, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, )
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
        $this->setName('tbl_prod_smaller');
        $this->setPhpName('TblProdSmaller');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\TblProdSmaller');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('prod_id', 'ProdId', 'INTEGER', true, null, null);
        $this->addColumn('sm_enable_id', 'SmEnableId', 'INTEGER', true, null, null);
        $this->addColumn('sm_prod_length', 'SmProdLength', 'LONGVARCHAR', true, null, null);
        $this->addColumn('sm_prod_wingspan', 'SmProdWingspan', 'LONGVARCHAR', true, null, null);
        $this->addColumn('sm_prod_height', 'SmProdHeight', 'LONGVARCHAR', true, null, null);
        $this->addColumn('sm_prod_scale', 'SmProdScale', 'LONGVARCHAR', true, null, null);
        $this->addColumn('sm_prod_price_id', 'SmProdPriceId', 'INTEGER', true, null, null);
        $this->addColumn('sm_prod_normalprice', 'SmProdNormalprice', 'FLOAT', true, null, null);
        $this->addColumn('sm_prod_shipping_price_id', 'SmProdShippingPriceId', 'INTEGER', true, null, null);
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
        return $withPrefix ? TblProdSmallerTableMap::CLASS_DEFAULT : TblProdSmallerTableMap::OM_CLASS;
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
     * @return array           (TblProdSmaller object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = TblProdSmallerTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = TblProdSmallerTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + TblProdSmallerTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = TblProdSmallerTableMap::OM_CLASS;
            /** @var TblProdSmaller $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            TblProdSmallerTableMap::addInstanceToPool($obj, $key);
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
            $key = TblProdSmallerTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = TblProdSmallerTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var TblProdSmaller $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                TblProdSmallerTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(TblProdSmallerTableMap::COL_PROD_ID);
            $criteria->addSelectColumn(TblProdSmallerTableMap::COL_SM_ENABLE_ID);
            $criteria->addSelectColumn(TblProdSmallerTableMap::COL_SM_PROD_LENGTH);
            $criteria->addSelectColumn(TblProdSmallerTableMap::COL_SM_PROD_WINGSPAN);
            $criteria->addSelectColumn(TblProdSmallerTableMap::COL_SM_PROD_HEIGHT);
            $criteria->addSelectColumn(TblProdSmallerTableMap::COL_SM_PROD_SCALE);
            $criteria->addSelectColumn(TblProdSmallerTableMap::COL_SM_PROD_PRICE_ID);
            $criteria->addSelectColumn(TblProdSmallerTableMap::COL_SM_PROD_NORMALPRICE);
            $criteria->addSelectColumn(TblProdSmallerTableMap::COL_SM_PROD_SHIPPING_PRICE_ID);
        } else {
            $criteria->addSelectColumn($alias . '.prod_id');
            $criteria->addSelectColumn($alias . '.sm_enable_id');
            $criteria->addSelectColumn($alias . '.sm_prod_length');
            $criteria->addSelectColumn($alias . '.sm_prod_wingspan');
            $criteria->addSelectColumn($alias . '.sm_prod_height');
            $criteria->addSelectColumn($alias . '.sm_prod_scale');
            $criteria->addSelectColumn($alias . '.sm_prod_price_id');
            $criteria->addSelectColumn($alias . '.sm_prod_normalprice');
            $criteria->addSelectColumn($alias . '.sm_prod_shipping_price_id');
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
        return Propel::getServiceContainer()->getDatabaseMap(TblProdSmallerTableMap::DATABASE_NAME)->getTable(TblProdSmallerTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(TblProdSmallerTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(TblProdSmallerTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new TblProdSmallerTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a TblProdSmaller or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or TblProdSmaller object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(TblProdSmallerTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \TblProdSmaller) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(TblProdSmallerTableMap::DATABASE_NAME);
            $criteria->add(TblProdSmallerTableMap::COL_PROD_ID, (array) $values, Criteria::IN);
        }

        $query = TblProdSmallerQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            TblProdSmallerTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                TblProdSmallerTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the tbl_prod_smaller table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return TblProdSmallerQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a TblProdSmaller or Criteria object.
     *
     * @param mixed               $criteria Criteria or TblProdSmaller object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TblProdSmallerTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from TblProdSmaller object
        }


        // Set the correct dbName
        $query = TblProdSmallerQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // TblProdSmallerTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
TblProdSmallerTableMap::buildTableMap();
