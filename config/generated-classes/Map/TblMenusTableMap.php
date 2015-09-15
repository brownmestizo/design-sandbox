<?php

namespace Map;

use \TblMenus;
use \TblMenusQuery;
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
 * This class defines the structure of the 'tbl_menus' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class TblMenusTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.TblMenusTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'mpm';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'tbl_menus';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\TblMenus';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'TblMenus';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 16;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 16;

    /**
     * the column name for the menu_id field
     */
    const COL_MENU_ID = 'tbl_menus.menu_id';

    /**
     * the column name for the menu_alias field
     */
    const COL_MENU_ALIAS = 'tbl_menus.menu_alias';

    /**
     * the column name for the menu_name field
     */
    const COL_MENU_NAME = 'tbl_menus.menu_name';

    /**
     * the column name for the menu_status field
     */
    const COL_MENU_STATUS = 'tbl_menus.menu_status';

    /**
     * the column name for the menu_title field
     */
    const COL_MENU_TITLE = 'tbl_menus.menu_title';

    /**
     * the column name for the menu_description field
     */
    const COL_MENU_DESCRIPTION = 'tbl_menus.menu_description';

    /**
     * the column name for the menu_writeup field
     */
    const COL_MENU_WRITEUP = 'tbl_menus.menu_writeup';

    /**
     * the column name for the menu_status_pa field
     */
    const COL_MENU_STATUS_PA = 'tbl_menus.menu_status_pa';

    /**
     * the column name for the menu_description_pa field
     */
    const COL_MENU_DESCRIPTION_PA = 'tbl_menus.menu_description_pa';

    /**
     * the column name for the menu_writeup_pa field
     */
    const COL_MENU_WRITEUP_PA = 'tbl_menus.menu_writeup_pa';

    /**
     * the column name for the menu_status_m3 field
     */
    const COL_MENU_STATUS_M3 = 'tbl_menus.menu_status_m3';

    /**
     * the column name for the menu_description_m3 field
     */
    const COL_MENU_DESCRIPTION_M3 = 'tbl_menus.menu_description_m3';

    /**
     * the column name for the menu_writeup_m3 field
     */
    const COL_MENU_WRITEUP_M3 = 'tbl_menus.menu_writeup_m3';

    /**
     * the column name for the menu_writeupkeywords field
     */
    const COL_MENU_WRITEUPKEYWORDS = 'tbl_menus.menu_writeupkeywords';

    /**
     * the column name for the menu_writeupkeywords_pa field
     */
    const COL_MENU_WRITEUPKEYWORDS_PA = 'tbl_menus.menu_writeupkeywords_pa';

    /**
     * the column name for the menu_writeupkeywords_m3 field
     */
    const COL_MENU_WRITEUPKEYWORDS_M3 = 'tbl_menus.menu_writeupkeywords_m3';

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
        self::TYPE_PHPNAME       => array('MenuId', 'MenuAlias', 'MenuName', 'MenuStatus', 'MenuTitle', 'MenuDescription', 'MenuWriteup', 'MenuStatusPa', 'MenuDescriptionPa', 'MenuWriteupPa', 'MenuStatusM3', 'MenuDescriptionM3', 'MenuWriteupM3', 'MenuWriteupkeywords', 'MenuWriteupkeywordsPa', 'MenuWriteupkeywordsM3', ),
        self::TYPE_CAMELNAME     => array('menuId', 'menuAlias', 'menuName', 'menuStatus', 'menuTitle', 'menuDescription', 'menuWriteup', 'menuStatusPa', 'menuDescriptionPa', 'menuWriteupPa', 'menuStatusM3', 'menuDescriptionM3', 'menuWriteupM3', 'menuWriteupkeywords', 'menuWriteupkeywordsPa', 'menuWriteupkeywordsM3', ),
        self::TYPE_COLNAME       => array(TblMenusTableMap::COL_MENU_ID, TblMenusTableMap::COL_MENU_ALIAS, TblMenusTableMap::COL_MENU_NAME, TblMenusTableMap::COL_MENU_STATUS, TblMenusTableMap::COL_MENU_TITLE, TblMenusTableMap::COL_MENU_DESCRIPTION, TblMenusTableMap::COL_MENU_WRITEUP, TblMenusTableMap::COL_MENU_STATUS_PA, TblMenusTableMap::COL_MENU_DESCRIPTION_PA, TblMenusTableMap::COL_MENU_WRITEUP_PA, TblMenusTableMap::COL_MENU_STATUS_M3, TblMenusTableMap::COL_MENU_DESCRIPTION_M3, TblMenusTableMap::COL_MENU_WRITEUP_M3, TblMenusTableMap::COL_MENU_WRITEUPKEYWORDS, TblMenusTableMap::COL_MENU_WRITEUPKEYWORDS_PA, TblMenusTableMap::COL_MENU_WRITEUPKEYWORDS_M3, ),
        self::TYPE_FIELDNAME     => array('menu_id', 'menu_alias', 'menu_name', 'menu_status', 'menu_title', 'menu_description', 'menu_writeup', 'menu_status_pa', 'menu_description_pa', 'menu_writeup_pa', 'menu_status_m3', 'menu_description_m3', 'menu_writeup_m3', 'menu_writeupkeywords', 'menu_writeupkeywords_pa', 'menu_writeupkeywords_m3', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('MenuId' => 0, 'MenuAlias' => 1, 'MenuName' => 2, 'MenuStatus' => 3, 'MenuTitle' => 4, 'MenuDescription' => 5, 'MenuWriteup' => 6, 'MenuStatusPa' => 7, 'MenuDescriptionPa' => 8, 'MenuWriteupPa' => 9, 'MenuStatusM3' => 10, 'MenuDescriptionM3' => 11, 'MenuWriteupM3' => 12, 'MenuWriteupkeywords' => 13, 'MenuWriteupkeywordsPa' => 14, 'MenuWriteupkeywordsM3' => 15, ),
        self::TYPE_CAMELNAME     => array('menuId' => 0, 'menuAlias' => 1, 'menuName' => 2, 'menuStatus' => 3, 'menuTitle' => 4, 'menuDescription' => 5, 'menuWriteup' => 6, 'menuStatusPa' => 7, 'menuDescriptionPa' => 8, 'menuWriteupPa' => 9, 'menuStatusM3' => 10, 'menuDescriptionM3' => 11, 'menuWriteupM3' => 12, 'menuWriteupkeywords' => 13, 'menuWriteupkeywordsPa' => 14, 'menuWriteupkeywordsM3' => 15, ),
        self::TYPE_COLNAME       => array(TblMenusTableMap::COL_MENU_ID => 0, TblMenusTableMap::COL_MENU_ALIAS => 1, TblMenusTableMap::COL_MENU_NAME => 2, TblMenusTableMap::COL_MENU_STATUS => 3, TblMenusTableMap::COL_MENU_TITLE => 4, TblMenusTableMap::COL_MENU_DESCRIPTION => 5, TblMenusTableMap::COL_MENU_WRITEUP => 6, TblMenusTableMap::COL_MENU_STATUS_PA => 7, TblMenusTableMap::COL_MENU_DESCRIPTION_PA => 8, TblMenusTableMap::COL_MENU_WRITEUP_PA => 9, TblMenusTableMap::COL_MENU_STATUS_M3 => 10, TblMenusTableMap::COL_MENU_DESCRIPTION_M3 => 11, TblMenusTableMap::COL_MENU_WRITEUP_M3 => 12, TblMenusTableMap::COL_MENU_WRITEUPKEYWORDS => 13, TblMenusTableMap::COL_MENU_WRITEUPKEYWORDS_PA => 14, TblMenusTableMap::COL_MENU_WRITEUPKEYWORDS_M3 => 15, ),
        self::TYPE_FIELDNAME     => array('menu_id' => 0, 'menu_alias' => 1, 'menu_name' => 2, 'menu_status' => 3, 'menu_title' => 4, 'menu_description' => 5, 'menu_writeup' => 6, 'menu_status_pa' => 7, 'menu_description_pa' => 8, 'menu_writeup_pa' => 9, 'menu_status_m3' => 10, 'menu_description_m3' => 11, 'menu_writeup_m3' => 12, 'menu_writeupkeywords' => 13, 'menu_writeupkeywords_pa' => 14, 'menu_writeupkeywords_m3' => 15, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
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
        $this->setName('tbl_menus');
        $this->setPhpName('TblMenus');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\TblMenus');
        $this->setPackage('');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('menu_id', 'MenuId', 'SMALLINT', true, 9, null);
        $this->addColumn('menu_alias', 'MenuAlias', 'LONGVARCHAR', true, null, null);
        $this->addColumn('menu_name', 'MenuName', 'LONGVARCHAR', true, null, null);
        $this->addColumn('menu_status', 'MenuStatus', 'LONGVARCHAR', true, null, null);
        $this->addColumn('menu_title', 'MenuTitle', 'LONGVARCHAR', true, null, null);
        $this->addColumn('menu_description', 'MenuDescription', 'LONGVARCHAR', true, null, null);
        $this->addColumn('menu_writeup', 'MenuWriteup', 'LONGVARCHAR', false, null, null);
        $this->addColumn('menu_status_pa', 'MenuStatusPa', 'LONGVARCHAR', true, null, null);
        $this->addColumn('menu_description_pa', 'MenuDescriptionPa', 'LONGVARCHAR', true, null, null);
        $this->addColumn('menu_writeup_pa', 'MenuWriteupPa', 'LONGVARCHAR', false, null, null);
        $this->addColumn('menu_status_m3', 'MenuStatusM3', 'LONGVARCHAR', true, null, null);
        $this->addColumn('menu_description_m3', 'MenuDescriptionM3', 'LONGVARCHAR', true, null, null);
        $this->addColumn('menu_writeup_m3', 'MenuWriteupM3', 'LONGVARCHAR', false, null, null);
        $this->addColumn('menu_writeupkeywords', 'MenuWriteupkeywords', 'LONGVARCHAR', true, null, null);
        $this->addColumn('menu_writeupkeywords_pa', 'MenuWriteupkeywordsPa', 'LONGVARCHAR', true, null, null);
        $this->addColumn('menu_writeupkeywords_m3', 'MenuWriteupkeywordsM3', 'LONGVARCHAR', true, null, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('TblProdInfo', '\\TblProdInfo', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':prod_category',
    1 => ':menu_alias',
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('MenuId', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('MenuId', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('MenuId', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? TblMenusTableMap::CLASS_DEFAULT : TblMenusTableMap::OM_CLASS;
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
     * @return array           (TblMenus object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = TblMenusTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = TblMenusTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + TblMenusTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = TblMenusTableMap::OM_CLASS;
            /** @var TblMenus $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            TblMenusTableMap::addInstanceToPool($obj, $key);
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
            $key = TblMenusTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = TblMenusTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var TblMenus $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                TblMenusTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(TblMenusTableMap::COL_MENU_ID);
            $criteria->addSelectColumn(TblMenusTableMap::COL_MENU_ALIAS);
            $criteria->addSelectColumn(TblMenusTableMap::COL_MENU_NAME);
            $criteria->addSelectColumn(TblMenusTableMap::COL_MENU_STATUS);
            $criteria->addSelectColumn(TblMenusTableMap::COL_MENU_TITLE);
            $criteria->addSelectColumn(TblMenusTableMap::COL_MENU_DESCRIPTION);
            $criteria->addSelectColumn(TblMenusTableMap::COL_MENU_WRITEUP);
            $criteria->addSelectColumn(TblMenusTableMap::COL_MENU_STATUS_PA);
            $criteria->addSelectColumn(TblMenusTableMap::COL_MENU_DESCRIPTION_PA);
            $criteria->addSelectColumn(TblMenusTableMap::COL_MENU_WRITEUP_PA);
            $criteria->addSelectColumn(TblMenusTableMap::COL_MENU_STATUS_M3);
            $criteria->addSelectColumn(TblMenusTableMap::COL_MENU_DESCRIPTION_M3);
            $criteria->addSelectColumn(TblMenusTableMap::COL_MENU_WRITEUP_M3);
            $criteria->addSelectColumn(TblMenusTableMap::COL_MENU_WRITEUPKEYWORDS);
            $criteria->addSelectColumn(TblMenusTableMap::COL_MENU_WRITEUPKEYWORDS_PA);
            $criteria->addSelectColumn(TblMenusTableMap::COL_MENU_WRITEUPKEYWORDS_M3);
        } else {
            $criteria->addSelectColumn($alias . '.menu_id');
            $criteria->addSelectColumn($alias . '.menu_alias');
            $criteria->addSelectColumn($alias . '.menu_name');
            $criteria->addSelectColumn($alias . '.menu_status');
            $criteria->addSelectColumn($alias . '.menu_title');
            $criteria->addSelectColumn($alias . '.menu_description');
            $criteria->addSelectColumn($alias . '.menu_writeup');
            $criteria->addSelectColumn($alias . '.menu_status_pa');
            $criteria->addSelectColumn($alias . '.menu_description_pa');
            $criteria->addSelectColumn($alias . '.menu_writeup_pa');
            $criteria->addSelectColumn($alias . '.menu_status_m3');
            $criteria->addSelectColumn($alias . '.menu_description_m3');
            $criteria->addSelectColumn($alias . '.menu_writeup_m3');
            $criteria->addSelectColumn($alias . '.menu_writeupkeywords');
            $criteria->addSelectColumn($alias . '.menu_writeupkeywords_pa');
            $criteria->addSelectColumn($alias . '.menu_writeupkeywords_m3');
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
        return Propel::getServiceContainer()->getDatabaseMap(TblMenusTableMap::DATABASE_NAME)->getTable(TblMenusTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(TblMenusTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(TblMenusTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new TblMenusTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a TblMenus or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or TblMenus object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(TblMenusTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \TblMenus) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(TblMenusTableMap::DATABASE_NAME);
            $criteria->add(TblMenusTableMap::COL_MENU_ID, (array) $values, Criteria::IN);
        }

        $query = TblMenusQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            TblMenusTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                TblMenusTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the tbl_menus table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return TblMenusQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a TblMenus or Criteria object.
     *
     * @param mixed               $criteria Criteria or TblMenus object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TblMenusTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from TblMenus object
        }

        if ($criteria->containsKey(TblMenusTableMap::COL_MENU_ID) && $criteria->keyContainsValue(TblMenusTableMap::COL_MENU_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.TblMenusTableMap::COL_MENU_ID.')');
        }


        // Set the correct dbName
        $query = TblMenusQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // TblMenusTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
TblMenusTableMap::buildTableMap();
