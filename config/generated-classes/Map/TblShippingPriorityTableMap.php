<?php

namespace Map;

use \TblShippingPriority;
use \TblShippingPriorityQuery;
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
 * This class defines the structure of the 'tbl_shipping_priority' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class TblShippingPriorityTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.TblShippingPriorityTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'mpm';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'tbl_shipping_priority';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\TblShippingPriority';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'TblShippingPriority';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 25;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 25;

    /**
     * the column name for the weight_idp field
     */
    const COL_WEIGHT_IDP = 'tbl_shipping_priority.weight_idp';

    /**
     * the column name for the weight_name field
     */
    const COL_WEIGHT_NAME = 'tbl_shipping_priority.weight_name';

    /**
     * the column name for the A field
     */
    const COL_A = 'tbl_shipping_priority.A';

    /**
     * the column name for the B field
     */
    const COL_B = 'tbl_shipping_priority.B';

    /**
     * the column name for the C field
     */
    const COL_C = 'tbl_shipping_priority.C';

    /**
     * the column name for the D field
     */
    const COL_D = 'tbl_shipping_priority.D';

    /**
     * the column name for the E field
     */
    const COL_E = 'tbl_shipping_priority.E';

    /**
     * the column name for the F field
     */
    const COL_F = 'tbl_shipping_priority.F';

    /**
     * the column name for the G field
     */
    const COL_G = 'tbl_shipping_priority.G';

    /**
     * the column name for the H field
     */
    const COL_H = 'tbl_shipping_priority.H';

    /**
     * the column name for the K field
     */
    const COL_K = 'tbl_shipping_priority.K';

    /**
     * the column name for the N field
     */
    const COL_N = 'tbl_shipping_priority.N';

    /**
     * the column name for the O field
     */
    const COL_O = 'tbl_shipping_priority.O';

    /**
     * the column name for the P field
     */
    const COL_P = 'tbl_shipping_priority.P';

    /**
     * the column name for the Q field
     */
    const COL_Q = 'tbl_shipping_priority.Q';

    /**
     * the column name for the R field
     */
    const COL_R = 'tbl_shipping_priority.R';

    /**
     * the column name for the T field
     */
    const COL_T = 'tbl_shipping_priority.T';

    /**
     * the column name for the U field
     */
    const COL_U = 'tbl_shipping_priority.U';

    /**
     * the column name for the V field
     */
    const COL_V = 'tbl_shipping_priority.V';

    /**
     * the column name for the W field
     */
    const COL_W = 'tbl_shipping_priority.W';

    /**
     * the column name for the X field
     */
    const COL_X = 'tbl_shipping_priority.X';

    /**
     * the column name for the Y field
     */
    const COL_Y = 'tbl_shipping_priority.Y';

    /**
     * the column name for the Z field
     */
    const COL_Z = 'tbl_shipping_priority.Z';

    /**
     * the column name for the AA field
     */
    const COL_AA = 'tbl_shipping_priority.AA';

    /**
     * the column name for the AB field
     */
    const COL_AB = 'tbl_shipping_priority.AB';

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
        self::TYPE_PHPNAME       => array('WeightIdp', 'WeightName', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'K', 'N', 'O', 'P', 'Q', 'R', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'Aa', 'Ab', ),
        self::TYPE_CAMELNAME     => array('weightIdp', 'weightName', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'k', 'n', 'o', 'p', 'q', 'r', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'aa', 'ab', ),
        self::TYPE_COLNAME       => array(TblShippingPriorityTableMap::COL_WEIGHT_IDP, TblShippingPriorityTableMap::COL_WEIGHT_NAME, TblShippingPriorityTableMap::COL_A, TblShippingPriorityTableMap::COL_B, TblShippingPriorityTableMap::COL_C, TblShippingPriorityTableMap::COL_D, TblShippingPriorityTableMap::COL_E, TblShippingPriorityTableMap::COL_F, TblShippingPriorityTableMap::COL_G, TblShippingPriorityTableMap::COL_H, TblShippingPriorityTableMap::COL_K, TblShippingPriorityTableMap::COL_N, TblShippingPriorityTableMap::COL_O, TblShippingPriorityTableMap::COL_P, TblShippingPriorityTableMap::COL_Q, TblShippingPriorityTableMap::COL_R, TblShippingPriorityTableMap::COL_T, TblShippingPriorityTableMap::COL_U, TblShippingPriorityTableMap::COL_V, TblShippingPriorityTableMap::COL_W, TblShippingPriorityTableMap::COL_X, TblShippingPriorityTableMap::COL_Y, TblShippingPriorityTableMap::COL_Z, TblShippingPriorityTableMap::COL_AA, TblShippingPriorityTableMap::COL_AB, ),
        self::TYPE_FIELDNAME     => array('weight_idp', 'weight_name', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'K', 'N', 'O', 'P', 'Q', 'R', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'AA', 'AB', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('WeightIdp' => 0, 'WeightName' => 1, 'A' => 2, 'B' => 3, 'C' => 4, 'D' => 5, 'E' => 6, 'F' => 7, 'G' => 8, 'H' => 9, 'K' => 10, 'N' => 11, 'O' => 12, 'P' => 13, 'Q' => 14, 'R' => 15, 'T' => 16, 'U' => 17, 'V' => 18, 'W' => 19, 'X' => 20, 'Y' => 21, 'Z' => 22, 'Aa' => 23, 'Ab' => 24, ),
        self::TYPE_CAMELNAME     => array('weightIdp' => 0, 'weightName' => 1, 'a' => 2, 'b' => 3, 'c' => 4, 'd' => 5, 'e' => 6, 'f' => 7, 'g' => 8, 'h' => 9, 'k' => 10, 'n' => 11, 'o' => 12, 'p' => 13, 'q' => 14, 'r' => 15, 't' => 16, 'u' => 17, 'v' => 18, 'w' => 19, 'x' => 20, 'y' => 21, 'z' => 22, 'aa' => 23, 'ab' => 24, ),
        self::TYPE_COLNAME       => array(TblShippingPriorityTableMap::COL_WEIGHT_IDP => 0, TblShippingPriorityTableMap::COL_WEIGHT_NAME => 1, TblShippingPriorityTableMap::COL_A => 2, TblShippingPriorityTableMap::COL_B => 3, TblShippingPriorityTableMap::COL_C => 4, TblShippingPriorityTableMap::COL_D => 5, TblShippingPriorityTableMap::COL_E => 6, TblShippingPriorityTableMap::COL_F => 7, TblShippingPriorityTableMap::COL_G => 8, TblShippingPriorityTableMap::COL_H => 9, TblShippingPriorityTableMap::COL_K => 10, TblShippingPriorityTableMap::COL_N => 11, TblShippingPriorityTableMap::COL_O => 12, TblShippingPriorityTableMap::COL_P => 13, TblShippingPriorityTableMap::COL_Q => 14, TblShippingPriorityTableMap::COL_R => 15, TblShippingPriorityTableMap::COL_T => 16, TblShippingPriorityTableMap::COL_U => 17, TblShippingPriorityTableMap::COL_V => 18, TblShippingPriorityTableMap::COL_W => 19, TblShippingPriorityTableMap::COL_X => 20, TblShippingPriorityTableMap::COL_Y => 21, TblShippingPriorityTableMap::COL_Z => 22, TblShippingPriorityTableMap::COL_AA => 23, TblShippingPriorityTableMap::COL_AB => 24, ),
        self::TYPE_FIELDNAME     => array('weight_idp' => 0, 'weight_name' => 1, 'A' => 2, 'B' => 3, 'C' => 4, 'D' => 5, 'E' => 6, 'F' => 7, 'G' => 8, 'H' => 9, 'K' => 10, 'N' => 11, 'O' => 12, 'P' => 13, 'Q' => 14, 'R' => 15, 'T' => 16, 'U' => 17, 'V' => 18, 'W' => 19, 'X' => 20, 'Y' => 21, 'Z' => 22, 'AA' => 23, 'AB' => 24, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, )
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
        $this->setName('tbl_shipping_priority');
        $this->setPhpName('TblShippingPriority');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\TblShippingPriority');
        $this->setPackage('');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('weight_idp', 'WeightIdp', 'INTEGER', true, null, null);
        $this->addColumn('weight_name', 'WeightName', 'LONGVARCHAR', true, null, null);
        $this->addColumn('A', 'A', 'DECIMAL', true, 10, null);
        $this->addColumn('B', 'B', 'DECIMAL', true, 10, null);
        $this->addColumn('C', 'C', 'DECIMAL', true, 10, null);
        $this->addColumn('D', 'D', 'DECIMAL', true, 10, null);
        $this->addColumn('E', 'E', 'DECIMAL', true, 10, null);
        $this->addColumn('F', 'F', 'DECIMAL', true, 10, null);
        $this->addColumn('G', 'G', 'DECIMAL', true, 10, null);
        $this->addColumn('H', 'H', 'DECIMAL', true, 10, null);
        $this->addColumn('K', 'K', 'DECIMAL', true, 10, null);
        $this->addColumn('N', 'N', 'DECIMAL', true, 10, null);
        $this->addColumn('O', 'O', 'DECIMAL', true, 10, null);
        $this->addColumn('P', 'P', 'DECIMAL', true, 10, null);
        $this->addColumn('Q', 'Q', 'DECIMAL', true, 10, null);
        $this->addColumn('R', 'R', 'DECIMAL', true, 10, null);
        $this->addColumn('T', 'T', 'DECIMAL', true, 10, null);
        $this->addColumn('U', 'U', 'DECIMAL', true, 10, null);
        $this->addColumn('V', 'V', 'DECIMAL', true, 10, null);
        $this->addColumn('W', 'W', 'DECIMAL', true, 10, null);
        $this->addColumn('X', 'X', 'DECIMAL', true, 10, null);
        $this->addColumn('Y', 'Y', 'DECIMAL', true, 10, null);
        $this->addColumn('Z', 'Z', 'DECIMAL', true, 10, null);
        $this->addColumn('AA', 'Aa', 'DECIMAL', true, 10, null);
        $this->addColumn('AB', 'Ab', 'DECIMAL', true, 10, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('WeightIdp', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('WeightIdp', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('WeightIdp', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? TblShippingPriorityTableMap::CLASS_DEFAULT : TblShippingPriorityTableMap::OM_CLASS;
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
     * @return array           (TblShippingPriority object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = TblShippingPriorityTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = TblShippingPriorityTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + TblShippingPriorityTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = TblShippingPriorityTableMap::OM_CLASS;
            /** @var TblShippingPriority $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            TblShippingPriorityTableMap::addInstanceToPool($obj, $key);
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
            $key = TblShippingPriorityTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = TblShippingPriorityTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var TblShippingPriority $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                TblShippingPriorityTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(TblShippingPriorityTableMap::COL_WEIGHT_IDP);
            $criteria->addSelectColumn(TblShippingPriorityTableMap::COL_WEIGHT_NAME);
            $criteria->addSelectColumn(TblShippingPriorityTableMap::COL_A);
            $criteria->addSelectColumn(TblShippingPriorityTableMap::COL_B);
            $criteria->addSelectColumn(TblShippingPriorityTableMap::COL_C);
            $criteria->addSelectColumn(TblShippingPriorityTableMap::COL_D);
            $criteria->addSelectColumn(TblShippingPriorityTableMap::COL_E);
            $criteria->addSelectColumn(TblShippingPriorityTableMap::COL_F);
            $criteria->addSelectColumn(TblShippingPriorityTableMap::COL_G);
            $criteria->addSelectColumn(TblShippingPriorityTableMap::COL_H);
            $criteria->addSelectColumn(TblShippingPriorityTableMap::COL_K);
            $criteria->addSelectColumn(TblShippingPriorityTableMap::COL_N);
            $criteria->addSelectColumn(TblShippingPriorityTableMap::COL_O);
            $criteria->addSelectColumn(TblShippingPriorityTableMap::COL_P);
            $criteria->addSelectColumn(TblShippingPriorityTableMap::COL_Q);
            $criteria->addSelectColumn(TblShippingPriorityTableMap::COL_R);
            $criteria->addSelectColumn(TblShippingPriorityTableMap::COL_T);
            $criteria->addSelectColumn(TblShippingPriorityTableMap::COL_U);
            $criteria->addSelectColumn(TblShippingPriorityTableMap::COL_V);
            $criteria->addSelectColumn(TblShippingPriorityTableMap::COL_W);
            $criteria->addSelectColumn(TblShippingPriorityTableMap::COL_X);
            $criteria->addSelectColumn(TblShippingPriorityTableMap::COL_Y);
            $criteria->addSelectColumn(TblShippingPriorityTableMap::COL_Z);
            $criteria->addSelectColumn(TblShippingPriorityTableMap::COL_AA);
            $criteria->addSelectColumn(TblShippingPriorityTableMap::COL_AB);
        } else {
            $criteria->addSelectColumn($alias . '.weight_idp');
            $criteria->addSelectColumn($alias . '.weight_name');
            $criteria->addSelectColumn($alias . '.A');
            $criteria->addSelectColumn($alias . '.B');
            $criteria->addSelectColumn($alias . '.C');
            $criteria->addSelectColumn($alias . '.D');
            $criteria->addSelectColumn($alias . '.E');
            $criteria->addSelectColumn($alias . '.F');
            $criteria->addSelectColumn($alias . '.G');
            $criteria->addSelectColumn($alias . '.H');
            $criteria->addSelectColumn($alias . '.K');
            $criteria->addSelectColumn($alias . '.N');
            $criteria->addSelectColumn($alias . '.O');
            $criteria->addSelectColumn($alias . '.P');
            $criteria->addSelectColumn($alias . '.Q');
            $criteria->addSelectColumn($alias . '.R');
            $criteria->addSelectColumn($alias . '.T');
            $criteria->addSelectColumn($alias . '.U');
            $criteria->addSelectColumn($alias . '.V');
            $criteria->addSelectColumn($alias . '.W');
            $criteria->addSelectColumn($alias . '.X');
            $criteria->addSelectColumn($alias . '.Y');
            $criteria->addSelectColumn($alias . '.Z');
            $criteria->addSelectColumn($alias . '.AA');
            $criteria->addSelectColumn($alias . '.AB');
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
        return Propel::getServiceContainer()->getDatabaseMap(TblShippingPriorityTableMap::DATABASE_NAME)->getTable(TblShippingPriorityTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(TblShippingPriorityTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(TblShippingPriorityTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new TblShippingPriorityTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a TblShippingPriority or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or TblShippingPriority object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(TblShippingPriorityTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \TblShippingPriority) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(TblShippingPriorityTableMap::DATABASE_NAME);
            $criteria->add(TblShippingPriorityTableMap::COL_WEIGHT_IDP, (array) $values, Criteria::IN);
        }

        $query = TblShippingPriorityQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            TblShippingPriorityTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                TblShippingPriorityTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the tbl_shipping_priority table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return TblShippingPriorityQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a TblShippingPriority or Criteria object.
     *
     * @param mixed               $criteria Criteria or TblShippingPriority object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TblShippingPriorityTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from TblShippingPriority object
        }

        if ($criteria->containsKey(TblShippingPriorityTableMap::COL_WEIGHT_IDP) && $criteria->keyContainsValue(TblShippingPriorityTableMap::COL_WEIGHT_IDP) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.TblShippingPriorityTableMap::COL_WEIGHT_IDP.')');
        }


        // Set the correct dbName
        $query = TblShippingPriorityQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // TblShippingPriorityTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
TblShippingPriorityTableMap::buildTableMap();