<?php

namespace Map;

use \TblSettings;
use \TblSettingsQuery;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\InstancePoolTrait;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\DataFetcher\DataFetcherInterface;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\RelationMap;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Map\TableMapTrait;


/**
 * This class defines the structure of the 'tbl_settings' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class TblSettingsTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.TblSettingsTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'mpm';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'tbl_settings';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\TblSettings';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'TblSettings';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 3;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 3;

    /**
     * the column name for the settings_id field
     */
    const COL_SETTINGS_ID = 'tbl_settings.settings_id';

    /**
     * the column name for the settings_name field
     */
    const COL_SETTINGS_NAME = 'tbl_settings.settings_name';

    /**
     * the column name for the settings_value field
     */
    const COL_SETTINGS_VALUE = 'tbl_settings.settings_value';

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
        self::TYPE_PHPNAME       => array('SettingsId', 'SettingsName', 'SettingsValue', ),
        self::TYPE_CAMELNAME     => array('settingsId', 'settingsName', 'settingsValue', ),
        self::TYPE_COLNAME       => array(TblSettingsTableMap::COL_SETTINGS_ID, TblSettingsTableMap::COL_SETTINGS_NAME, TblSettingsTableMap::COL_SETTINGS_VALUE, ),
        self::TYPE_FIELDNAME     => array('settings_id', 'settings_name', 'settings_value', ),
        self::TYPE_NUM           => array(0, 1, 2, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('SettingsId' => 0, 'SettingsName' => 1, 'SettingsValue' => 2, ),
        self::TYPE_CAMELNAME     => array('settingsId' => 0, 'settingsName' => 1, 'settingsValue' => 2, ),
        self::TYPE_COLNAME       => array(TblSettingsTableMap::COL_SETTINGS_ID => 0, TblSettingsTableMap::COL_SETTINGS_NAME => 1, TblSettingsTableMap::COL_SETTINGS_VALUE => 2, ),
        self::TYPE_FIELDNAME     => array('settings_id' => 0, 'settings_name' => 1, 'settings_value' => 2, ),
        self::TYPE_NUM           => array(0, 1, 2, )
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
        $this->setName('tbl_settings');
        $this->setPhpName('TblSettings');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\TblSettings');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('settings_id', 'SettingsId', 'INTEGER', true, null, null);
        $this->addColumn('settings_name', 'SettingsName', 'LONGVARCHAR', true, null, null);
        $this->addColumn('settings_value', 'SettingsValue', 'LONGVARCHAR', true, null, null);
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
        return null;
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
        return '';
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
        return $withPrefix ? TblSettingsTableMap::CLASS_DEFAULT : TblSettingsTableMap::OM_CLASS;
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
     * @return array           (TblSettings object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = TblSettingsTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = TblSettingsTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + TblSettingsTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = TblSettingsTableMap::OM_CLASS;
            /** @var TblSettings $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            TblSettingsTableMap::addInstanceToPool($obj, $key);
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
            $key = TblSettingsTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = TblSettingsTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var TblSettings $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                TblSettingsTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(TblSettingsTableMap::COL_SETTINGS_ID);
            $criteria->addSelectColumn(TblSettingsTableMap::COL_SETTINGS_NAME);
            $criteria->addSelectColumn(TblSettingsTableMap::COL_SETTINGS_VALUE);
        } else {
            $criteria->addSelectColumn($alias . '.settings_id');
            $criteria->addSelectColumn($alias . '.settings_name');
            $criteria->addSelectColumn($alias . '.settings_value');
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
        return Propel::getServiceContainer()->getDatabaseMap(TblSettingsTableMap::DATABASE_NAME)->getTable(TblSettingsTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(TblSettingsTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(TblSettingsTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new TblSettingsTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a TblSettings or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or TblSettings object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(TblSettingsTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \TblSettings) { // it's a model object
            // create criteria based on pk value
            $criteria = $values->buildCriteria();
        } else { // it's a primary key, or an array of pks
            throw new LogicException('The TblSettings object has no primary key');
        }

        $query = TblSettingsQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            TblSettingsTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                TblSettingsTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the tbl_settings table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return TblSettingsQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a TblSettings or Criteria object.
     *
     * @param mixed               $criteria Criteria or TblSettings object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TblSettingsTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from TblSettings object
        }


        // Set the correct dbName
        $query = TblSettingsQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // TblSettingsTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
TblSettingsTableMap::buildTableMap();
