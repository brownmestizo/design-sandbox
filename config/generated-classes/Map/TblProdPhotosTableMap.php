<?php

namespace Map;

use \TblProdPhotos;
use \TblProdPhotosQuery;
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
 * This class defines the structure of the 'tbl_prod_photos' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class TblProdPhotosTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.TblProdPhotosTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'mpm';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'tbl_prod_photos';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\TblProdPhotos';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'TblProdPhotos';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 17;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 17;

    /**
     * the column name for the prod_id field
     */
    const COL_PROD_ID = 'tbl_prod_photos.prod_id';

    /**
     * the column name for the prod_solo_1 field
     */
    const COL_PROD_SOLO_1 = 'tbl_prod_photos.prod_solo_1';

    /**
     * the column name for the prod_solo_2 field
     */
    const COL_PROD_SOLO_2 = 'tbl_prod_photos.prod_solo_2';

    /**
     * the column name for the prod_solo_3 field
     */
    const COL_PROD_SOLO_3 = 'tbl_prod_photos.prod_solo_3';

    /**
     * the column name for the prod_solo_4 field
     */
    const COL_PROD_SOLO_4 = 'tbl_prod_photos.prod_solo_4';

    /**
     * the column name for the prod_solo_1_pa field
     */
    const COL_PROD_SOLO_1_PA = 'tbl_prod_photos.prod_solo_1_pa';

    /**
     * the column name for the prod_solo_2_pa field
     */
    const COL_PROD_SOLO_2_PA = 'tbl_prod_photos.prod_solo_2_pa';

    /**
     * the column name for the prod_solo_3_pa field
     */
    const COL_PROD_SOLO_3_PA = 'tbl_prod_photos.prod_solo_3_pa';

    /**
     * the column name for the prod_solo_4_pa field
     */
    const COL_PROD_SOLO_4_PA = 'tbl_prod_photos.prod_solo_4_pa';

    /**
     * the column name for the prod_solo_1_m3 field
     */
    const COL_PROD_SOLO_1_M3 = 'tbl_prod_photos.prod_solo_1_m3';

    /**
     * the column name for the prod_solo_2_m3 field
     */
    const COL_PROD_SOLO_2_M3 = 'tbl_prod_photos.prod_solo_2_m3';

    /**
     * the column name for the prod_solo_3_m3 field
     */
    const COL_PROD_SOLO_3_M3 = 'tbl_prod_photos.prod_solo_3_m3';

    /**
     * the column name for the prod_solo_4_m3 field
     */
    const COL_PROD_SOLO_4_M3 = 'tbl_prod_photos.prod_solo_4_m3';

    /**
     * the column name for the prod_solo_1_blank field
     */
    const COL_PROD_SOLO_1_BLANK = 'tbl_prod_photos.prod_solo_1_blank';

    /**
     * the column name for the prod_solo_2_blank field
     */
    const COL_PROD_SOLO_2_BLANK = 'tbl_prod_photos.prod_solo_2_blank';

    /**
     * the column name for the prod_solo_3_blank field
     */
    const COL_PROD_SOLO_3_BLANK = 'tbl_prod_photos.prod_solo_3_blank';

    /**
     * the column name for the prod_solo_4_blank field
     */
    const COL_PROD_SOLO_4_BLANK = 'tbl_prod_photos.prod_solo_4_blank';

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
        self::TYPE_PHPNAME       => array('ProdId', 'ProdSolo1', 'ProdSolo2', 'ProdSolo3', 'ProdSolo4', 'ProdSolo1Pa', 'ProdSolo2Pa', 'ProdSolo3Pa', 'ProdSolo4Pa', 'ProdSolo1M3', 'ProdSolo2M3', 'ProdSolo3M3', 'ProdSolo4M3', 'ProdSolo1Blank', 'ProdSolo2Blank', 'ProdSolo3Blank', 'ProdSolo4Blank', ),
        self::TYPE_CAMELNAME     => array('prodId', 'prodSolo1', 'prodSolo2', 'prodSolo3', 'prodSolo4', 'prodSolo1Pa', 'prodSolo2Pa', 'prodSolo3Pa', 'prodSolo4Pa', 'prodSolo1M3', 'prodSolo2M3', 'prodSolo3M3', 'prodSolo4M3', 'prodSolo1Blank', 'prodSolo2Blank', 'prodSolo3Blank', 'prodSolo4Blank', ),
        self::TYPE_COLNAME       => array(TblProdPhotosTableMap::COL_PROD_ID, TblProdPhotosTableMap::COL_PROD_SOLO_1, TblProdPhotosTableMap::COL_PROD_SOLO_2, TblProdPhotosTableMap::COL_PROD_SOLO_3, TblProdPhotosTableMap::COL_PROD_SOLO_4, TblProdPhotosTableMap::COL_PROD_SOLO_1_PA, TblProdPhotosTableMap::COL_PROD_SOLO_2_PA, TblProdPhotosTableMap::COL_PROD_SOLO_3_PA, TblProdPhotosTableMap::COL_PROD_SOLO_4_PA, TblProdPhotosTableMap::COL_PROD_SOLO_1_M3, TblProdPhotosTableMap::COL_PROD_SOLO_2_M3, TblProdPhotosTableMap::COL_PROD_SOLO_3_M3, TblProdPhotosTableMap::COL_PROD_SOLO_4_M3, TblProdPhotosTableMap::COL_PROD_SOLO_1_BLANK, TblProdPhotosTableMap::COL_PROD_SOLO_2_BLANK, TblProdPhotosTableMap::COL_PROD_SOLO_3_BLANK, TblProdPhotosTableMap::COL_PROD_SOLO_4_BLANK, ),
        self::TYPE_FIELDNAME     => array('prod_id', 'prod_solo_1', 'prod_solo_2', 'prod_solo_3', 'prod_solo_4', 'prod_solo_1_pa', 'prod_solo_2_pa', 'prod_solo_3_pa', 'prod_solo_4_pa', 'prod_solo_1_m3', 'prod_solo_2_m3', 'prod_solo_3_m3', 'prod_solo_4_m3', 'prod_solo_1_blank', 'prod_solo_2_blank', 'prod_solo_3_blank', 'prod_solo_4_blank', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('ProdId' => 0, 'ProdSolo1' => 1, 'ProdSolo2' => 2, 'ProdSolo3' => 3, 'ProdSolo4' => 4, 'ProdSolo1Pa' => 5, 'ProdSolo2Pa' => 6, 'ProdSolo3Pa' => 7, 'ProdSolo4Pa' => 8, 'ProdSolo1M3' => 9, 'ProdSolo2M3' => 10, 'ProdSolo3M3' => 11, 'ProdSolo4M3' => 12, 'ProdSolo1Blank' => 13, 'ProdSolo2Blank' => 14, 'ProdSolo3Blank' => 15, 'ProdSolo4Blank' => 16, ),
        self::TYPE_CAMELNAME     => array('prodId' => 0, 'prodSolo1' => 1, 'prodSolo2' => 2, 'prodSolo3' => 3, 'prodSolo4' => 4, 'prodSolo1Pa' => 5, 'prodSolo2Pa' => 6, 'prodSolo3Pa' => 7, 'prodSolo4Pa' => 8, 'prodSolo1M3' => 9, 'prodSolo2M3' => 10, 'prodSolo3M3' => 11, 'prodSolo4M3' => 12, 'prodSolo1Blank' => 13, 'prodSolo2Blank' => 14, 'prodSolo3Blank' => 15, 'prodSolo4Blank' => 16, ),
        self::TYPE_COLNAME       => array(TblProdPhotosTableMap::COL_PROD_ID => 0, TblProdPhotosTableMap::COL_PROD_SOLO_1 => 1, TblProdPhotosTableMap::COL_PROD_SOLO_2 => 2, TblProdPhotosTableMap::COL_PROD_SOLO_3 => 3, TblProdPhotosTableMap::COL_PROD_SOLO_4 => 4, TblProdPhotosTableMap::COL_PROD_SOLO_1_PA => 5, TblProdPhotosTableMap::COL_PROD_SOLO_2_PA => 6, TblProdPhotosTableMap::COL_PROD_SOLO_3_PA => 7, TblProdPhotosTableMap::COL_PROD_SOLO_4_PA => 8, TblProdPhotosTableMap::COL_PROD_SOLO_1_M3 => 9, TblProdPhotosTableMap::COL_PROD_SOLO_2_M3 => 10, TblProdPhotosTableMap::COL_PROD_SOLO_3_M3 => 11, TblProdPhotosTableMap::COL_PROD_SOLO_4_M3 => 12, TblProdPhotosTableMap::COL_PROD_SOLO_1_BLANK => 13, TblProdPhotosTableMap::COL_PROD_SOLO_2_BLANK => 14, TblProdPhotosTableMap::COL_PROD_SOLO_3_BLANK => 15, TblProdPhotosTableMap::COL_PROD_SOLO_4_BLANK => 16, ),
        self::TYPE_FIELDNAME     => array('prod_id' => 0, 'prod_solo_1' => 1, 'prod_solo_2' => 2, 'prod_solo_3' => 3, 'prod_solo_4' => 4, 'prod_solo_1_pa' => 5, 'prod_solo_2_pa' => 6, 'prod_solo_3_pa' => 7, 'prod_solo_4_pa' => 8, 'prod_solo_1_m3' => 9, 'prod_solo_2_m3' => 10, 'prod_solo_3_m3' => 11, 'prod_solo_4_m3' => 12, 'prod_solo_1_blank' => 13, 'prod_solo_2_blank' => 14, 'prod_solo_3_blank' => 15, 'prod_solo_4_blank' => 16, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
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
        $this->setName('tbl_prod_photos');
        $this->setPhpName('TblProdPhotos');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\TblProdPhotos');
        $this->setPackage('');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('prod_id', 'ProdId', 'INTEGER', true, null, null);
        $this->addColumn('prod_solo_1', 'ProdSolo1', 'LONGVARCHAR', true, null, null);
        $this->addColumn('prod_solo_2', 'ProdSolo2', 'LONGVARCHAR', true, null, null);
        $this->addColumn('prod_solo_3', 'ProdSolo3', 'LONGVARCHAR', true, null, null);
        $this->addColumn('prod_solo_4', 'ProdSolo4', 'LONGVARCHAR', true, null, null);
        $this->addColumn('prod_solo_1_pa', 'ProdSolo1Pa', 'LONGVARCHAR', false, null, null);
        $this->addColumn('prod_solo_2_pa', 'ProdSolo2Pa', 'LONGVARCHAR', false, null, null);
        $this->addColumn('prod_solo_3_pa', 'ProdSolo3Pa', 'LONGVARCHAR', false, null, null);
        $this->addColumn('prod_solo_4_pa', 'ProdSolo4Pa', 'LONGVARCHAR', false, null, null);
        $this->addColumn('prod_solo_1_m3', 'ProdSolo1M3', 'LONGVARCHAR', false, null, null);
        $this->addColumn('prod_solo_2_m3', 'ProdSolo2M3', 'LONGVARCHAR', false, null, null);
        $this->addColumn('prod_solo_3_m3', 'ProdSolo3M3', 'LONGVARCHAR', false, null, null);
        $this->addColumn('prod_solo_4_m3', 'ProdSolo4M3', 'LONGVARCHAR', false, null, null);
        $this->addColumn('prod_solo_1_blank', 'ProdSolo1Blank', 'LONGVARCHAR', false, null, null);
        $this->addColumn('prod_solo_2_blank', 'ProdSolo2Blank', 'LONGVARCHAR', false, null, null);
        $this->addColumn('prod_solo_3_blank', 'ProdSolo3Blank', 'LONGVARCHAR', false, null, null);
        $this->addColumn('prod_solo_4_blank', 'ProdSolo4Blank', 'LONGVARCHAR', false, null, null);
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
        return $withPrefix ? TblProdPhotosTableMap::CLASS_DEFAULT : TblProdPhotosTableMap::OM_CLASS;
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
     * @return array           (TblProdPhotos object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = TblProdPhotosTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = TblProdPhotosTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + TblProdPhotosTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = TblProdPhotosTableMap::OM_CLASS;
            /** @var TblProdPhotos $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            TblProdPhotosTableMap::addInstanceToPool($obj, $key);
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
            $key = TblProdPhotosTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = TblProdPhotosTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var TblProdPhotos $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                TblProdPhotosTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(TblProdPhotosTableMap::COL_PROD_ID);
            $criteria->addSelectColumn(TblProdPhotosTableMap::COL_PROD_SOLO_1);
            $criteria->addSelectColumn(TblProdPhotosTableMap::COL_PROD_SOLO_2);
            $criteria->addSelectColumn(TblProdPhotosTableMap::COL_PROD_SOLO_3);
            $criteria->addSelectColumn(TblProdPhotosTableMap::COL_PROD_SOLO_4);
            $criteria->addSelectColumn(TblProdPhotosTableMap::COL_PROD_SOLO_1_PA);
            $criteria->addSelectColumn(TblProdPhotosTableMap::COL_PROD_SOLO_2_PA);
            $criteria->addSelectColumn(TblProdPhotosTableMap::COL_PROD_SOLO_3_PA);
            $criteria->addSelectColumn(TblProdPhotosTableMap::COL_PROD_SOLO_4_PA);
            $criteria->addSelectColumn(TblProdPhotosTableMap::COL_PROD_SOLO_1_M3);
            $criteria->addSelectColumn(TblProdPhotosTableMap::COL_PROD_SOLO_2_M3);
            $criteria->addSelectColumn(TblProdPhotosTableMap::COL_PROD_SOLO_3_M3);
            $criteria->addSelectColumn(TblProdPhotosTableMap::COL_PROD_SOLO_4_M3);
            $criteria->addSelectColumn(TblProdPhotosTableMap::COL_PROD_SOLO_1_BLANK);
            $criteria->addSelectColumn(TblProdPhotosTableMap::COL_PROD_SOLO_2_BLANK);
            $criteria->addSelectColumn(TblProdPhotosTableMap::COL_PROD_SOLO_3_BLANK);
            $criteria->addSelectColumn(TblProdPhotosTableMap::COL_PROD_SOLO_4_BLANK);
        } else {
            $criteria->addSelectColumn($alias . '.prod_id');
            $criteria->addSelectColumn($alias . '.prod_solo_1');
            $criteria->addSelectColumn($alias . '.prod_solo_2');
            $criteria->addSelectColumn($alias . '.prod_solo_3');
            $criteria->addSelectColumn($alias . '.prod_solo_4');
            $criteria->addSelectColumn($alias . '.prod_solo_1_pa');
            $criteria->addSelectColumn($alias . '.prod_solo_2_pa');
            $criteria->addSelectColumn($alias . '.prod_solo_3_pa');
            $criteria->addSelectColumn($alias . '.prod_solo_4_pa');
            $criteria->addSelectColumn($alias . '.prod_solo_1_m3');
            $criteria->addSelectColumn($alias . '.prod_solo_2_m3');
            $criteria->addSelectColumn($alias . '.prod_solo_3_m3');
            $criteria->addSelectColumn($alias . '.prod_solo_4_m3');
            $criteria->addSelectColumn($alias . '.prod_solo_1_blank');
            $criteria->addSelectColumn($alias . '.prod_solo_2_blank');
            $criteria->addSelectColumn($alias . '.prod_solo_3_blank');
            $criteria->addSelectColumn($alias . '.prod_solo_4_blank');
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
        return Propel::getServiceContainer()->getDatabaseMap(TblProdPhotosTableMap::DATABASE_NAME)->getTable(TblProdPhotosTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(TblProdPhotosTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(TblProdPhotosTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new TblProdPhotosTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a TblProdPhotos or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or TblProdPhotos object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(TblProdPhotosTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \TblProdPhotos) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(TblProdPhotosTableMap::DATABASE_NAME);
            $criteria->add(TblProdPhotosTableMap::COL_PROD_ID, (array) $values, Criteria::IN);
        }

        $query = TblProdPhotosQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            TblProdPhotosTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                TblProdPhotosTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the tbl_prod_photos table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return TblProdPhotosQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a TblProdPhotos or Criteria object.
     *
     * @param mixed               $criteria Criteria or TblProdPhotos object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TblProdPhotosTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from TblProdPhotos object
        }

        if ($criteria->containsKey(TblProdPhotosTableMap::COL_PROD_ID) && $criteria->keyContainsValue(TblProdPhotosTableMap::COL_PROD_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.TblProdPhotosTableMap::COL_PROD_ID.')');
        }


        // Set the correct dbName
        $query = TblProdPhotosQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // TblProdPhotosTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
TblProdPhotosTableMap::buildTableMap();
