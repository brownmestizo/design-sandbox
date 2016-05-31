<?php

namespace Map;

use \TblMadetoorder;
use \TblMadetoorderQuery;
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
 * This class defines the structure of the 'tbl_madetoorder' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class TblMadetoorderTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.TblMadetoorderTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'mpm';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'tbl_madetoorder';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\TblMadetoorder';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'TblMadetoorder';

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
     * the column name for the mad_id field
     */
    const COL_MAD_ID = 'tbl_madetoorder.mad_id';

    /**
     * the column name for the mad_name field
     */
    const COL_MAD_NAME = 'tbl_madetoorder.mad_name';

    /**
     * the column name for the mad_email field
     */
    const COL_MAD_EMAIL = 'tbl_madetoorder.mad_email';

    /**
     * the column name for the mad_color field
     */
    const COL_MAD_COLOR = 'tbl_madetoorder.mad_color';

    /**
     * the column name for the mad_length field
     */
    const COL_MAD_LENGTH = 'tbl_madetoorder.mad_length';

    /**
     * the column name for the mad_mark field
     */
    const COL_MAD_MARK = 'tbl_madetoorder.mad_mark';

    /**
     * the column name for the mad_rem field
     */
    const COL_MAD_REM = 'tbl_madetoorder.mad_rem';

    /**
     * the column name for the mad_url field
     */
    const COL_MAD_URL = 'tbl_madetoorder.mad_url';

    /**
     * the column name for the mad_photo field
     */
    const COL_MAD_PHOTO = 'tbl_madetoorder.mad_photo';

    /**
     * the column name for the mad_photo2 field
     */
    const COL_MAD_PHOTO2 = 'tbl_madetoorder.mad_photo2';

    /**
     * the column name for the mad_photo3 field
     */
    const COL_MAD_PHOTO3 = 'tbl_madetoorder.mad_photo3';

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
        self::TYPE_PHPNAME       => array('MadId', 'MadName', 'MadEmail', 'MadColor', 'MadLength', 'MadMark', 'MadRem', 'MadUrl', 'MadPhoto', 'MadPhoto2', 'MadPhoto3', ),
        self::TYPE_CAMELNAME     => array('madId', 'madName', 'madEmail', 'madColor', 'madLength', 'madMark', 'madRem', 'madUrl', 'madPhoto', 'madPhoto2', 'madPhoto3', ),
        self::TYPE_COLNAME       => array(TblMadetoorderTableMap::COL_MAD_ID, TblMadetoorderTableMap::COL_MAD_NAME, TblMadetoorderTableMap::COL_MAD_EMAIL, TblMadetoorderTableMap::COL_MAD_COLOR, TblMadetoorderTableMap::COL_MAD_LENGTH, TblMadetoorderTableMap::COL_MAD_MARK, TblMadetoorderTableMap::COL_MAD_REM, TblMadetoorderTableMap::COL_MAD_URL, TblMadetoorderTableMap::COL_MAD_PHOTO, TblMadetoorderTableMap::COL_MAD_PHOTO2, TblMadetoorderTableMap::COL_MAD_PHOTO3, ),
        self::TYPE_FIELDNAME     => array('mad_id', 'mad_name', 'mad_email', 'mad_color', 'mad_length', 'mad_mark', 'mad_rem', 'mad_url', 'mad_photo', 'mad_photo2', 'mad_photo3', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('MadId' => 0, 'MadName' => 1, 'MadEmail' => 2, 'MadColor' => 3, 'MadLength' => 4, 'MadMark' => 5, 'MadRem' => 6, 'MadUrl' => 7, 'MadPhoto' => 8, 'MadPhoto2' => 9, 'MadPhoto3' => 10, ),
        self::TYPE_CAMELNAME     => array('madId' => 0, 'madName' => 1, 'madEmail' => 2, 'madColor' => 3, 'madLength' => 4, 'madMark' => 5, 'madRem' => 6, 'madUrl' => 7, 'madPhoto' => 8, 'madPhoto2' => 9, 'madPhoto3' => 10, ),
        self::TYPE_COLNAME       => array(TblMadetoorderTableMap::COL_MAD_ID => 0, TblMadetoorderTableMap::COL_MAD_NAME => 1, TblMadetoorderTableMap::COL_MAD_EMAIL => 2, TblMadetoorderTableMap::COL_MAD_COLOR => 3, TblMadetoorderTableMap::COL_MAD_LENGTH => 4, TblMadetoorderTableMap::COL_MAD_MARK => 5, TblMadetoorderTableMap::COL_MAD_REM => 6, TblMadetoorderTableMap::COL_MAD_URL => 7, TblMadetoorderTableMap::COL_MAD_PHOTO => 8, TblMadetoorderTableMap::COL_MAD_PHOTO2 => 9, TblMadetoorderTableMap::COL_MAD_PHOTO3 => 10, ),
        self::TYPE_FIELDNAME     => array('mad_id' => 0, 'mad_name' => 1, 'mad_email' => 2, 'mad_color' => 3, 'mad_length' => 4, 'mad_mark' => 5, 'mad_rem' => 6, 'mad_url' => 7, 'mad_photo' => 8, 'mad_photo2' => 9, 'mad_photo3' => 10, ),
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
        $this->setName('tbl_madetoorder');
        $this->setPhpName('TblMadetoorder');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\TblMadetoorder');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('mad_id', 'MadId', 'INTEGER', true, null, 0);
        $this->addColumn('mad_name', 'MadName', 'LONGVARCHAR', true, null, null);
        $this->addColumn('mad_email', 'MadEmail', 'LONGVARCHAR', true, null, null);
        $this->addColumn('mad_color', 'MadColor', 'LONGVARCHAR', true, null, null);
        $this->addColumn('mad_length', 'MadLength', 'LONGVARCHAR', true, null, null);
        $this->addColumn('mad_mark', 'MadMark', 'LONGVARCHAR', true, null, null);
        $this->addColumn('mad_rem', 'MadRem', 'LONGVARCHAR', true, null, null);
        $this->addColumn('mad_url', 'MadUrl', 'LONGVARCHAR', true, null, null);
        $this->addColumn('mad_photo', 'MadPhoto', 'LONGVARCHAR', true, null, null);
        $this->addColumn('mad_photo2', 'MadPhoto2', 'LONGVARCHAR', true, null, null);
        $this->addColumn('mad_photo3', 'MadPhoto3', 'LONGVARCHAR', true, null, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('MadId', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('MadId', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('MadId', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('MadId', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('MadId', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('MadId', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('MadId', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? TblMadetoorderTableMap::CLASS_DEFAULT : TblMadetoorderTableMap::OM_CLASS;
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
     * @return array           (TblMadetoorder object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = TblMadetoorderTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = TblMadetoorderTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + TblMadetoorderTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = TblMadetoorderTableMap::OM_CLASS;
            /** @var TblMadetoorder $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            TblMadetoorderTableMap::addInstanceToPool($obj, $key);
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
            $key = TblMadetoorderTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = TblMadetoorderTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var TblMadetoorder $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                TblMadetoorderTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(TblMadetoorderTableMap::COL_MAD_ID);
            $criteria->addSelectColumn(TblMadetoorderTableMap::COL_MAD_NAME);
            $criteria->addSelectColumn(TblMadetoorderTableMap::COL_MAD_EMAIL);
            $criteria->addSelectColumn(TblMadetoorderTableMap::COL_MAD_COLOR);
            $criteria->addSelectColumn(TblMadetoorderTableMap::COL_MAD_LENGTH);
            $criteria->addSelectColumn(TblMadetoorderTableMap::COL_MAD_MARK);
            $criteria->addSelectColumn(TblMadetoorderTableMap::COL_MAD_REM);
            $criteria->addSelectColumn(TblMadetoorderTableMap::COL_MAD_URL);
            $criteria->addSelectColumn(TblMadetoorderTableMap::COL_MAD_PHOTO);
            $criteria->addSelectColumn(TblMadetoorderTableMap::COL_MAD_PHOTO2);
            $criteria->addSelectColumn(TblMadetoorderTableMap::COL_MAD_PHOTO3);
        } else {
            $criteria->addSelectColumn($alias . '.mad_id');
            $criteria->addSelectColumn($alias . '.mad_name');
            $criteria->addSelectColumn($alias . '.mad_email');
            $criteria->addSelectColumn($alias . '.mad_color');
            $criteria->addSelectColumn($alias . '.mad_length');
            $criteria->addSelectColumn($alias . '.mad_mark');
            $criteria->addSelectColumn($alias . '.mad_rem');
            $criteria->addSelectColumn($alias . '.mad_url');
            $criteria->addSelectColumn($alias . '.mad_photo');
            $criteria->addSelectColumn($alias . '.mad_photo2');
            $criteria->addSelectColumn($alias . '.mad_photo3');
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
        return Propel::getServiceContainer()->getDatabaseMap(TblMadetoorderTableMap::DATABASE_NAME)->getTable(TblMadetoorderTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(TblMadetoorderTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(TblMadetoorderTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new TblMadetoorderTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a TblMadetoorder or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or TblMadetoorder object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(TblMadetoorderTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \TblMadetoorder) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(TblMadetoorderTableMap::DATABASE_NAME);
            $criteria->add(TblMadetoorderTableMap::COL_MAD_ID, (array) $values, Criteria::IN);
        }

        $query = TblMadetoorderQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            TblMadetoorderTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                TblMadetoorderTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the tbl_madetoorder table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return TblMadetoorderQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a TblMadetoorder or Criteria object.
     *
     * @param mixed               $criteria Criteria or TblMadetoorder object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TblMadetoorderTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from TblMadetoorder object
        }


        // Set the correct dbName
        $query = TblMadetoorderQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // TblMadetoorderTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
TblMadetoorderTableMap::buildTableMap();
