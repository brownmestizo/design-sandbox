<?php

namespace Map;

use \TblGeneral;
use \TblGeneralQuery;
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
 * This class defines the structure of the 'tbl_general' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class TblGeneralTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.TblGeneralTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'mpm';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'tbl_general';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\TblGeneral';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'TblGeneral';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 11;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 11;

    /**
     * the column name for the prod_general field
     */
    const COL_PROD_GENERAL = 'tbl_general.prod_general';

    /**
     * the column name for the prod_name field
     */
    const COL_PROD_NAME = 'tbl_general.prod_name';

    /**
     * the column name for the prod_description field
     */
    const COL_PROD_DESCRIPTION = 'tbl_general.prod_description';

    /**
     * the column name for the prod_description_pa field
     */
    const COL_PROD_DESCRIPTION_PA = 'tbl_general.prod_description_pa';

    /**
     * the column name for the prod_description_m3 field
     */
    const COL_PROD_DESCRIPTION_M3 = 'tbl_general.prod_description_m3';

    /**
     * the column name for the prod_keywords field
     */
    const COL_PROD_KEYWORDS = 'tbl_general.prod_keywords';

    /**
     * the column name for the prod_keywords_pa field
     */
    const COL_PROD_KEYWORDS_PA = 'tbl_general.prod_keywords_pa';

    /**
     * the column name for the prod_keywords_m3 field
     */
    const COL_PROD_KEYWORDS_M3 = 'tbl_general.prod_keywords_m3';

    /**
     * the column name for the prod_writeupkeywords field
     */
    const COL_PROD_WRITEUPKEYWORDS = 'tbl_general.prod_writeupkeywords';

    /**
     * the column name for the prod_writeupkeywords_pa field
     */
    const COL_PROD_WRITEUPKEYWORDS_PA = 'tbl_general.prod_writeupkeywords_pa';

    /**
     * the column name for the prod_writeupkeywords_m3 field
     */
    const COL_PROD_WRITEUPKEYWORDS_M3 = 'tbl_general.prod_writeupkeywords_m3';

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
        self::TYPE_PHPNAME       => array('ProdGeneral', 'ProdName', 'ProdDescription', 'ProdDescriptionPa', 'ProdDescriptionM3', 'ProdKeywords', 'ProdKeywordsPa', 'ProdKeywordsM3', 'ProdWriteupkeywords', 'ProdWriteupkeywordsPa', 'ProdWriteupkeywordsM3', ),
        self::TYPE_CAMELNAME     => array('prodGeneral', 'prodName', 'prodDescription', 'prodDescriptionPa', 'prodDescriptionM3', 'prodKeywords', 'prodKeywordsPa', 'prodKeywordsM3', 'prodWriteupkeywords', 'prodWriteupkeywordsPa', 'prodWriteupkeywordsM3', ),
        self::TYPE_COLNAME       => array(TblGeneralTableMap::COL_PROD_GENERAL, TblGeneralTableMap::COL_PROD_NAME, TblGeneralTableMap::COL_PROD_DESCRIPTION, TblGeneralTableMap::COL_PROD_DESCRIPTION_PA, TblGeneralTableMap::COL_PROD_DESCRIPTION_M3, TblGeneralTableMap::COL_PROD_KEYWORDS, TblGeneralTableMap::COL_PROD_KEYWORDS_PA, TblGeneralTableMap::COL_PROD_KEYWORDS_M3, TblGeneralTableMap::COL_PROD_WRITEUPKEYWORDS, TblGeneralTableMap::COL_PROD_WRITEUPKEYWORDS_PA, TblGeneralTableMap::COL_PROD_WRITEUPKEYWORDS_M3, ),
        self::TYPE_FIELDNAME     => array('prod_general', 'prod_name', 'prod_description', 'prod_description_pa', 'prod_description_m3', 'prod_keywords', 'prod_keywords_pa', 'prod_keywords_m3', 'prod_writeupkeywords', 'prod_writeupkeywords_pa', 'prod_writeupkeywords_m3', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('ProdGeneral' => 0, 'ProdName' => 1, 'ProdDescription' => 2, 'ProdDescriptionPa' => 3, 'ProdDescriptionM3' => 4, 'ProdKeywords' => 5, 'ProdKeywordsPa' => 6, 'ProdKeywordsM3' => 7, 'ProdWriteupkeywords' => 8, 'ProdWriteupkeywordsPa' => 9, 'ProdWriteupkeywordsM3' => 10, ),
        self::TYPE_CAMELNAME     => array('prodGeneral' => 0, 'prodName' => 1, 'prodDescription' => 2, 'prodDescriptionPa' => 3, 'prodDescriptionM3' => 4, 'prodKeywords' => 5, 'prodKeywordsPa' => 6, 'prodKeywordsM3' => 7, 'prodWriteupkeywords' => 8, 'prodWriteupkeywordsPa' => 9, 'prodWriteupkeywordsM3' => 10, ),
        self::TYPE_COLNAME       => array(TblGeneralTableMap::COL_PROD_GENERAL => 0, TblGeneralTableMap::COL_PROD_NAME => 1, TblGeneralTableMap::COL_PROD_DESCRIPTION => 2, TblGeneralTableMap::COL_PROD_DESCRIPTION_PA => 3, TblGeneralTableMap::COL_PROD_DESCRIPTION_M3 => 4, TblGeneralTableMap::COL_PROD_KEYWORDS => 5, TblGeneralTableMap::COL_PROD_KEYWORDS_PA => 6, TblGeneralTableMap::COL_PROD_KEYWORDS_M3 => 7, TblGeneralTableMap::COL_PROD_WRITEUPKEYWORDS => 8, TblGeneralTableMap::COL_PROD_WRITEUPKEYWORDS_PA => 9, TblGeneralTableMap::COL_PROD_WRITEUPKEYWORDS_M3 => 10, ),
        self::TYPE_FIELDNAME     => array('prod_general' => 0, 'prod_name' => 1, 'prod_description' => 2, 'prod_description_pa' => 3, 'prod_description_m3' => 4, 'prod_keywords' => 5, 'prod_keywords_pa' => 6, 'prod_keywords_m3' => 7, 'prod_writeupkeywords' => 8, 'prod_writeupkeywords_pa' => 9, 'prod_writeupkeywords_m3' => 10, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
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
        $this->setName('tbl_general');
        $this->setPhpName('TblGeneral');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\TblGeneral');
        $this->setPackage('');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('prod_general', 'ProdGeneral', 'INTEGER', true, null, null);
        $this->addColumn('prod_name', 'ProdName', 'LONGVARCHAR', true, null, null);
        $this->addColumn('prod_description', 'ProdDescription', 'LONGVARCHAR', true, null, null);
        $this->addColumn('prod_description_pa', 'ProdDescriptionPa', 'LONGVARCHAR', true, null, null);
        $this->addColumn('prod_description_m3', 'ProdDescriptionM3', 'LONGVARCHAR', true, null, null);
        $this->addColumn('prod_keywords', 'ProdKeywords', 'LONGVARCHAR', false, null, null);
        $this->addColumn('prod_keywords_pa', 'ProdKeywordsPa', 'LONGVARCHAR', false, null, null);
        $this->addColumn('prod_keywords_m3', 'ProdKeywordsM3', 'LONGVARCHAR', false, null, null);
        $this->addColumn('prod_writeupkeywords', 'ProdWriteupkeywords', 'LONGVARCHAR', false, null, null);
        $this->addColumn('prod_writeupkeywords_pa', 'ProdWriteupkeywordsPa', 'LONGVARCHAR', false, null, null);
        $this->addColumn('prod_writeupkeywords_m3', 'ProdWriteupkeywordsM3', 'LONGVARCHAR', false, null, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('TblProdInfo', '\\TblProdInfo', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':prod_general',
    1 => ':prod_general',
  ),
), null, null, 'TblProdInfos', false);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ProdGeneral', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ProdGeneral', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ProdGeneral', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ProdGeneral', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ProdGeneral', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('ProdGeneral', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('ProdGeneral', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? TblGeneralTableMap::CLASS_DEFAULT : TblGeneralTableMap::OM_CLASS;
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
     * @return array           (TblGeneral object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = TblGeneralTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = TblGeneralTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + TblGeneralTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = TblGeneralTableMap::OM_CLASS;
            /** @var TblGeneral $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            TblGeneralTableMap::addInstanceToPool($obj, $key);
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
            $key = TblGeneralTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = TblGeneralTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var TblGeneral $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                TblGeneralTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(TblGeneralTableMap::COL_PROD_GENERAL);
            $criteria->addSelectColumn(TblGeneralTableMap::COL_PROD_NAME);
            $criteria->addSelectColumn(TblGeneralTableMap::COL_PROD_DESCRIPTION);
            $criteria->addSelectColumn(TblGeneralTableMap::COL_PROD_DESCRIPTION_PA);
            $criteria->addSelectColumn(TblGeneralTableMap::COL_PROD_DESCRIPTION_M3);
            $criteria->addSelectColumn(TblGeneralTableMap::COL_PROD_KEYWORDS);
            $criteria->addSelectColumn(TblGeneralTableMap::COL_PROD_KEYWORDS_PA);
            $criteria->addSelectColumn(TblGeneralTableMap::COL_PROD_KEYWORDS_M3);
            $criteria->addSelectColumn(TblGeneralTableMap::COL_PROD_WRITEUPKEYWORDS);
            $criteria->addSelectColumn(TblGeneralTableMap::COL_PROD_WRITEUPKEYWORDS_PA);
            $criteria->addSelectColumn(TblGeneralTableMap::COL_PROD_WRITEUPKEYWORDS_M3);
        } else {
            $criteria->addSelectColumn($alias . '.prod_general');
            $criteria->addSelectColumn($alias . '.prod_name');
            $criteria->addSelectColumn($alias . '.prod_description');
            $criteria->addSelectColumn($alias . '.prod_description_pa');
            $criteria->addSelectColumn($alias . '.prod_description_m3');
            $criteria->addSelectColumn($alias . '.prod_keywords');
            $criteria->addSelectColumn($alias . '.prod_keywords_pa');
            $criteria->addSelectColumn($alias . '.prod_keywords_m3');
            $criteria->addSelectColumn($alias . '.prod_writeupkeywords');
            $criteria->addSelectColumn($alias . '.prod_writeupkeywords_pa');
            $criteria->addSelectColumn($alias . '.prod_writeupkeywords_m3');
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
        return Propel::getServiceContainer()->getDatabaseMap(TblGeneralTableMap::DATABASE_NAME)->getTable(TblGeneralTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(TblGeneralTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(TblGeneralTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new TblGeneralTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a TblGeneral or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or TblGeneral object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(TblGeneralTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \TblGeneral) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(TblGeneralTableMap::DATABASE_NAME);
            $criteria->add(TblGeneralTableMap::COL_PROD_GENERAL, (array) $values, Criteria::IN);
        }

        $query = TblGeneralQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            TblGeneralTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                TblGeneralTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the tbl_general table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return TblGeneralQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a TblGeneral or Criteria object.
     *
     * @param mixed               $criteria Criteria or TblGeneral object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TblGeneralTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from TblGeneral object
        }

        if ($criteria->containsKey(TblGeneralTableMap::COL_PROD_GENERAL) && $criteria->keyContainsValue(TblGeneralTableMap::COL_PROD_GENERAL) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.TblGeneralTableMap::COL_PROD_GENERAL.')');
        }


        // Set the correct dbName
        $query = TblGeneralQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // TblGeneralTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
TblGeneralTableMap::buildTableMap();
