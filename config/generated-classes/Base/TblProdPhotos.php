<?php

namespace Base;

use \TblProdInfo as ChildTblProdInfo;
use \TblProdInfoQuery as ChildTblProdInfoQuery;
use \TblProdPhotosQuery as ChildTblProdPhotosQuery;
use \Exception;
use \PDO;
use Map\TblProdPhotosTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveRecord\ActiveRecordInterface;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\BadMethodCallException;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Parser\AbstractParser;

/**
 * Base class that represents a row from the 'tbl_prod_photos' table.
 *
 * 
 *
* @package    propel.generator..Base
*/
abstract class TblProdPhotos implements ActiveRecordInterface 
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\TblProdPhotosTableMap';


    /**
     * attribute to determine if this object has previously been saved.
     * @var boolean
     */
    protected $new = true;

    /**
     * attribute to determine whether this object has been deleted.
     * @var boolean
     */
    protected $deleted = false;

    /**
     * The columns that have been modified in current object.
     * Tracking modified columns allows us to only update modified columns.
     * @var array
     */
    protected $modifiedColumns = array();

    /**
     * The (virtual) columns that are added at runtime
     * The formatters can add supplementary columns based on a resultset
     * @var array
     */
    protected $virtualColumns = array();

    /**
     * The value for the prod_id field.
     * 
     * @var        int
     */
    protected $prod_id;

    /**
     * The value for the prod_solo_1 field.
     * 
     * @var        string
     */
    protected $prod_solo_1;

    /**
     * The value for the prod_solo_2 field.
     * 
     * @var        string
     */
    protected $prod_solo_2;

    /**
     * The value for the prod_solo_3 field.
     * 
     * @var        string
     */
    protected $prod_solo_3;

    /**
     * The value for the prod_solo_4 field.
     * 
     * @var        string
     */
    protected $prod_solo_4;

    /**
     * The value for the prod_solo_1_pa field.
     * 
     * @var        string
     */
    protected $prod_solo_1_pa;

    /**
     * The value for the prod_solo_2_pa field.
     * 
     * @var        string
     */
    protected $prod_solo_2_pa;

    /**
     * The value for the prod_solo_3_pa field.
     * 
     * @var        string
     */
    protected $prod_solo_3_pa;

    /**
     * The value for the prod_solo_4_pa field.
     * 
     * @var        string
     */
    protected $prod_solo_4_pa;

    /**
     * The value for the prod_solo_1_m3 field.
     * 
     * @var        string
     */
    protected $prod_solo_1_m3;

    /**
     * The value for the prod_solo_2_m3 field.
     * 
     * @var        string
     */
    protected $prod_solo_2_m3;

    /**
     * The value for the prod_solo_3_m3 field.
     * 
     * @var        string
     */
    protected $prod_solo_3_m3;

    /**
     * The value for the prod_solo_4_m3 field.
     * 
     * @var        string
     */
    protected $prod_solo_4_m3;

    /**
     * The value for the prod_solo_1_blank field.
     * 
     * @var        string
     */
    protected $prod_solo_1_blank;

    /**
     * The value for the prod_solo_2_blank field.
     * 
     * @var        string
     */
    protected $prod_solo_2_blank;

    /**
     * The value for the prod_solo_3_blank field.
     * 
     * @var        string
     */
    protected $prod_solo_3_blank;

    /**
     * The value for the prod_solo_4_blank field.
     * 
     * @var        string
     */
    protected $prod_solo_4_blank;

    /**
     * @var        ChildTblProdInfo one-to-one related ChildTblProdInfo object
     */
    protected $singleTblProdInfo;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * Initializes internal state of Base\TblProdPhotos object.
     */
    public function __construct()
    {
    }

    /**
     * Returns whether the object has been modified.
     *
     * @return boolean True if the object has been modified.
     */
    public function isModified()
    {
        return !!$this->modifiedColumns;
    }

    /**
     * Has specified column been modified?
     *
     * @param  string  $col column fully qualified name (TableMap::TYPE_COLNAME), e.g. Book::AUTHOR_ID
     * @return boolean True if $col has been modified.
     */
    public function isColumnModified($col)
    {
        return $this->modifiedColumns && isset($this->modifiedColumns[$col]);
    }

    /**
     * Get the columns that have been modified in this object.
     * @return array A unique list of the modified column names for this object.
     */
    public function getModifiedColumns()
    {
        return $this->modifiedColumns ? array_keys($this->modifiedColumns) : [];
    }

    /**
     * Returns whether the object has ever been saved.  This will
     * be false, if the object was retrieved from storage or was created
     * and then saved.
     *
     * @return boolean true, if the object has never been persisted.
     */
    public function isNew()
    {
        return $this->new;
    }

    /**
     * Setter for the isNew attribute.  This method will be called
     * by Propel-generated children and objects.
     *
     * @param boolean $b the state of the object.
     */
    public function setNew($b)
    {
        $this->new = (boolean) $b;
    }

    /**
     * Whether this object has been deleted.
     * @return boolean The deleted state of this object.
     */
    public function isDeleted()
    {
        return $this->deleted;
    }

    /**
     * Specify whether this object has been deleted.
     * @param  boolean $b The deleted state of this object.
     * @return void
     */
    public function setDeleted($b)
    {
        $this->deleted = (boolean) $b;
    }

    /**
     * Sets the modified state for the object to be false.
     * @param  string $col If supplied, only the specified column is reset.
     * @return void
     */
    public function resetModified($col = null)
    {
        if (null !== $col) {
            if (isset($this->modifiedColumns[$col])) {
                unset($this->modifiedColumns[$col]);
            }
        } else {
            $this->modifiedColumns = array();
        }
    }

    /**
     * Compares this with another <code>TblProdPhotos</code> instance.  If
     * <code>obj</code> is an instance of <code>TblProdPhotos</code>, delegates to
     * <code>equals(TblProdPhotos)</code>.  Otherwise, returns <code>false</code>.
     *
     * @param  mixed   $obj The object to compare to.
     * @return boolean Whether equal to the object specified.
     */
    public function equals($obj)
    {
        if (!$obj instanceof static) {
            return false;
        }

        if ($this === $obj) {
            return true;
        }

        if (null === $this->getPrimaryKey() || null === $obj->getPrimaryKey()) {
            return false;
        }

        return $this->getPrimaryKey() === $obj->getPrimaryKey();
    }

    /**
     * Get the associative array of the virtual columns in this object
     *
     * @return array
     */
    public function getVirtualColumns()
    {
        return $this->virtualColumns;
    }

    /**
     * Checks the existence of a virtual column in this object
     *
     * @param  string  $name The virtual column name
     * @return boolean
     */
    public function hasVirtualColumn($name)
    {
        return array_key_exists($name, $this->virtualColumns);
    }

    /**
     * Get the value of a virtual column in this object
     *
     * @param  string $name The virtual column name
     * @return mixed
     *
     * @throws PropelException
     */
    public function getVirtualColumn($name)
    {
        if (!$this->hasVirtualColumn($name)) {
            throw new PropelException(sprintf('Cannot get value of inexistent virtual column %s.', $name));
        }

        return $this->virtualColumns[$name];
    }

    /**
     * Set the value of a virtual column in this object
     *
     * @param string $name  The virtual column name
     * @param mixed  $value The value to give to the virtual column
     *
     * @return $this|TblProdPhotos The current object, for fluid interface
     */
    public function setVirtualColumn($name, $value)
    {
        $this->virtualColumns[$name] = $value;

        return $this;
    }

    /**
     * Logs a message using Propel::log().
     *
     * @param  string  $msg
     * @param  int     $priority One of the Propel::LOG_* logging levels
     * @return boolean
     */
    protected function log($msg, $priority = Propel::LOG_INFO)
    {
        return Propel::log(get_class($this) . ': ' . $msg, $priority);
    }

    /**
     * Export the current object properties to a string, using a given parser format
     * <code>
     * $book = BookQuery::create()->findPk(9012);
     * echo $book->exportTo('JSON');
     *  => {"Id":9012,"Title":"Don Juan","ISBN":"0140422161","Price":12.99,"PublisherId":1234,"AuthorId":5678}');
     * </code>
     *
     * @param  mixed   $parser                 A AbstractParser instance, or a format name ('XML', 'YAML', 'JSON', 'CSV')
     * @param  boolean $includeLazyLoadColumns (optional) Whether to include lazy load(ed) columns. Defaults to TRUE.
     * @return string  The exported data
     */
    public function exportTo($parser, $includeLazyLoadColumns = true)
    {
        if (!$parser instanceof AbstractParser) {
            $parser = AbstractParser::getParser($parser);
        }

        return $parser->fromArray($this->toArray(TableMap::TYPE_PHPNAME, $includeLazyLoadColumns, array(), true));
    }

    /**
     * Clean up internal collections prior to serializing
     * Avoids recursive loops that turn into segmentation faults when serializing
     */
    public function __sleep()
    {
        $this->clearAllReferences();

        $cls = new \ReflectionClass($this);
        $propertyNames = [];
        $serializableProperties = array_diff($cls->getProperties(), $cls->getProperties(\ReflectionProperty::IS_STATIC));
        
        foreach($serializableProperties as $property) {
            $propertyNames[] = $property->getName();
        }
        
        return $propertyNames;
    }

    /**
     * Get the [prod_id] column value.
     * 
     * @return int
     */
    public function getProdId()
    {
        return $this->prod_id;
    }

    /**
     * Get the [prod_solo_1] column value.
     * 
     * @return string
     */
    public function getProdSolo1()
    {
        return $this->prod_solo_1;
    }

    /**
     * Get the [prod_solo_2] column value.
     * 
     * @return string
     */
    public function getProdSolo2()
    {
        return $this->prod_solo_2;
    }

    /**
     * Get the [prod_solo_3] column value.
     * 
     * @return string
     */
    public function getProdSolo3()
    {
        return $this->prod_solo_3;
    }

    /**
     * Get the [prod_solo_4] column value.
     * 
     * @return string
     */
    public function getProdSolo4()
    {
        return $this->prod_solo_4;
    }

    /**
     * Get the [prod_solo_1_pa] column value.
     * 
     * @return string
     */
    public function getProdSolo1Pa()
    {
        return $this->prod_solo_1_pa;
    }

    /**
     * Get the [prod_solo_2_pa] column value.
     * 
     * @return string
     */
    public function getProdSolo2Pa()
    {
        return $this->prod_solo_2_pa;
    }

    /**
     * Get the [prod_solo_3_pa] column value.
     * 
     * @return string
     */
    public function getProdSolo3Pa()
    {
        return $this->prod_solo_3_pa;
    }

    /**
     * Get the [prod_solo_4_pa] column value.
     * 
     * @return string
     */
    public function getProdSolo4Pa()
    {
        return $this->prod_solo_4_pa;
    }

    /**
     * Get the [prod_solo_1_m3] column value.
     * 
     * @return string
     */
    public function getProdSolo1M3()
    {
        return $this->prod_solo_1_m3;
    }

    /**
     * Get the [prod_solo_2_m3] column value.
     * 
     * @return string
     */
    public function getProdSolo2M3()
    {
        return $this->prod_solo_2_m3;
    }

    /**
     * Get the [prod_solo_3_m3] column value.
     * 
     * @return string
     */
    public function getProdSolo3M3()
    {
        return $this->prod_solo_3_m3;
    }

    /**
     * Get the [prod_solo_4_m3] column value.
     * 
     * @return string
     */
    public function getProdSolo4M3()
    {
        return $this->prod_solo_4_m3;
    }

    /**
     * Get the [prod_solo_1_blank] column value.
     * 
     * @return string
     */
    public function getProdSolo1Blank()
    {
        return $this->prod_solo_1_blank;
    }

    /**
     * Get the [prod_solo_2_blank] column value.
     * 
     * @return string
     */
    public function getProdSolo2Blank()
    {
        return $this->prod_solo_2_blank;
    }

    /**
     * Get the [prod_solo_3_blank] column value.
     * 
     * @return string
     */
    public function getProdSolo3Blank()
    {
        return $this->prod_solo_3_blank;
    }

    /**
     * Get the [prod_solo_4_blank] column value.
     * 
     * @return string
     */
    public function getProdSolo4Blank()
    {
        return $this->prod_solo_4_blank;
    }

    /**
     * Set the value of [prod_id] column.
     * 
     * @param int $v new value
     * @return $this|\TblProdPhotos The current object (for fluent API support)
     */
    public function setProdId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->prod_id !== $v) {
            $this->prod_id = $v;
            $this->modifiedColumns[TblProdPhotosTableMap::COL_PROD_ID] = true;
        }

        return $this;
    } // setProdId()

    /**
     * Set the value of [prod_solo_1] column.
     * 
     * @param string $v new value
     * @return $this|\TblProdPhotos The current object (for fluent API support)
     */
    public function setProdSolo1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_solo_1 !== $v) {
            $this->prod_solo_1 = $v;
            $this->modifiedColumns[TblProdPhotosTableMap::COL_PROD_SOLO_1] = true;
        }

        return $this;
    } // setProdSolo1()

    /**
     * Set the value of [prod_solo_2] column.
     * 
     * @param string $v new value
     * @return $this|\TblProdPhotos The current object (for fluent API support)
     */
    public function setProdSolo2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_solo_2 !== $v) {
            $this->prod_solo_2 = $v;
            $this->modifiedColumns[TblProdPhotosTableMap::COL_PROD_SOLO_2] = true;
        }

        return $this;
    } // setProdSolo2()

    /**
     * Set the value of [prod_solo_3] column.
     * 
     * @param string $v new value
     * @return $this|\TblProdPhotos The current object (for fluent API support)
     */
    public function setProdSolo3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_solo_3 !== $v) {
            $this->prod_solo_3 = $v;
            $this->modifiedColumns[TblProdPhotosTableMap::COL_PROD_SOLO_3] = true;
        }

        return $this;
    } // setProdSolo3()

    /**
     * Set the value of [prod_solo_4] column.
     * 
     * @param string $v new value
     * @return $this|\TblProdPhotos The current object (for fluent API support)
     */
    public function setProdSolo4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_solo_4 !== $v) {
            $this->prod_solo_4 = $v;
            $this->modifiedColumns[TblProdPhotosTableMap::COL_PROD_SOLO_4] = true;
        }

        return $this;
    } // setProdSolo4()

    /**
     * Set the value of [prod_solo_1_pa] column.
     * 
     * @param string $v new value
     * @return $this|\TblProdPhotos The current object (for fluent API support)
     */
    public function setProdSolo1Pa($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_solo_1_pa !== $v) {
            $this->prod_solo_1_pa = $v;
            $this->modifiedColumns[TblProdPhotosTableMap::COL_PROD_SOLO_1_PA] = true;
        }

        return $this;
    } // setProdSolo1Pa()

    /**
     * Set the value of [prod_solo_2_pa] column.
     * 
     * @param string $v new value
     * @return $this|\TblProdPhotos The current object (for fluent API support)
     */
    public function setProdSolo2Pa($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_solo_2_pa !== $v) {
            $this->prod_solo_2_pa = $v;
            $this->modifiedColumns[TblProdPhotosTableMap::COL_PROD_SOLO_2_PA] = true;
        }

        return $this;
    } // setProdSolo2Pa()

    /**
     * Set the value of [prod_solo_3_pa] column.
     * 
     * @param string $v new value
     * @return $this|\TblProdPhotos The current object (for fluent API support)
     */
    public function setProdSolo3Pa($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_solo_3_pa !== $v) {
            $this->prod_solo_3_pa = $v;
            $this->modifiedColumns[TblProdPhotosTableMap::COL_PROD_SOLO_3_PA] = true;
        }

        return $this;
    } // setProdSolo3Pa()

    /**
     * Set the value of [prod_solo_4_pa] column.
     * 
     * @param string $v new value
     * @return $this|\TblProdPhotos The current object (for fluent API support)
     */
    public function setProdSolo4Pa($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_solo_4_pa !== $v) {
            $this->prod_solo_4_pa = $v;
            $this->modifiedColumns[TblProdPhotosTableMap::COL_PROD_SOLO_4_PA] = true;
        }

        return $this;
    } // setProdSolo4Pa()

    /**
     * Set the value of [prod_solo_1_m3] column.
     * 
     * @param string $v new value
     * @return $this|\TblProdPhotos The current object (for fluent API support)
     */
    public function setProdSolo1M3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_solo_1_m3 !== $v) {
            $this->prod_solo_1_m3 = $v;
            $this->modifiedColumns[TblProdPhotosTableMap::COL_PROD_SOLO_1_M3] = true;
        }

        return $this;
    } // setProdSolo1M3()

    /**
     * Set the value of [prod_solo_2_m3] column.
     * 
     * @param string $v new value
     * @return $this|\TblProdPhotos The current object (for fluent API support)
     */
    public function setProdSolo2M3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_solo_2_m3 !== $v) {
            $this->prod_solo_2_m3 = $v;
            $this->modifiedColumns[TblProdPhotosTableMap::COL_PROD_SOLO_2_M3] = true;
        }

        return $this;
    } // setProdSolo2M3()

    /**
     * Set the value of [prod_solo_3_m3] column.
     * 
     * @param string $v new value
     * @return $this|\TblProdPhotos The current object (for fluent API support)
     */
    public function setProdSolo3M3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_solo_3_m3 !== $v) {
            $this->prod_solo_3_m3 = $v;
            $this->modifiedColumns[TblProdPhotosTableMap::COL_PROD_SOLO_3_M3] = true;
        }

        return $this;
    } // setProdSolo3M3()

    /**
     * Set the value of [prod_solo_4_m3] column.
     * 
     * @param string $v new value
     * @return $this|\TblProdPhotos The current object (for fluent API support)
     */
    public function setProdSolo4M3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_solo_4_m3 !== $v) {
            $this->prod_solo_4_m3 = $v;
            $this->modifiedColumns[TblProdPhotosTableMap::COL_PROD_SOLO_4_M3] = true;
        }

        return $this;
    } // setProdSolo4M3()

    /**
     * Set the value of [prod_solo_1_blank] column.
     * 
     * @param string $v new value
     * @return $this|\TblProdPhotos The current object (for fluent API support)
     */
    public function setProdSolo1Blank($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_solo_1_blank !== $v) {
            $this->prod_solo_1_blank = $v;
            $this->modifiedColumns[TblProdPhotosTableMap::COL_PROD_SOLO_1_BLANK] = true;
        }

        return $this;
    } // setProdSolo1Blank()

    /**
     * Set the value of [prod_solo_2_blank] column.
     * 
     * @param string $v new value
     * @return $this|\TblProdPhotos The current object (for fluent API support)
     */
    public function setProdSolo2Blank($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_solo_2_blank !== $v) {
            $this->prod_solo_2_blank = $v;
            $this->modifiedColumns[TblProdPhotosTableMap::COL_PROD_SOLO_2_BLANK] = true;
        }

        return $this;
    } // setProdSolo2Blank()

    /**
     * Set the value of [prod_solo_3_blank] column.
     * 
     * @param string $v new value
     * @return $this|\TblProdPhotos The current object (for fluent API support)
     */
    public function setProdSolo3Blank($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_solo_3_blank !== $v) {
            $this->prod_solo_3_blank = $v;
            $this->modifiedColumns[TblProdPhotosTableMap::COL_PROD_SOLO_3_BLANK] = true;
        }

        return $this;
    } // setProdSolo3Blank()

    /**
     * Set the value of [prod_solo_4_blank] column.
     * 
     * @param string $v new value
     * @return $this|\TblProdPhotos The current object (for fluent API support)
     */
    public function setProdSolo4Blank($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_solo_4_blank !== $v) {
            $this->prod_solo_4_blank = $v;
            $this->modifiedColumns[TblProdPhotosTableMap::COL_PROD_SOLO_4_BLANK] = true;
        }

        return $this;
    } // setProdSolo4Blank()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
        // otherwise, everything was equal, so return TRUE
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array   $row       The row returned by DataFetcher->fetch().
     * @param int     $startcol  0-based offset column which indicates which restultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @param string  $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                  One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                            TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false, $indexType = TableMap::TYPE_NUM)
    {
        try {

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : TblProdPhotosTableMap::translateFieldName('ProdId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_id = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : TblProdPhotosTableMap::translateFieldName('ProdSolo1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_solo_1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : TblProdPhotosTableMap::translateFieldName('ProdSolo2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_solo_2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : TblProdPhotosTableMap::translateFieldName('ProdSolo3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_solo_3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : TblProdPhotosTableMap::translateFieldName('ProdSolo4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_solo_4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : TblProdPhotosTableMap::translateFieldName('ProdSolo1Pa', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_solo_1_pa = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : TblProdPhotosTableMap::translateFieldName('ProdSolo2Pa', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_solo_2_pa = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : TblProdPhotosTableMap::translateFieldName('ProdSolo3Pa', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_solo_3_pa = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : TblProdPhotosTableMap::translateFieldName('ProdSolo4Pa', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_solo_4_pa = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : TblProdPhotosTableMap::translateFieldName('ProdSolo1M3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_solo_1_m3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : TblProdPhotosTableMap::translateFieldName('ProdSolo2M3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_solo_2_m3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : TblProdPhotosTableMap::translateFieldName('ProdSolo3M3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_solo_3_m3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : TblProdPhotosTableMap::translateFieldName('ProdSolo4M3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_solo_4_m3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : TblProdPhotosTableMap::translateFieldName('ProdSolo1Blank', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_solo_1_blank = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : TblProdPhotosTableMap::translateFieldName('ProdSolo2Blank', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_solo_2_blank = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : TblProdPhotosTableMap::translateFieldName('ProdSolo3Blank', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_solo_3_blank = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : TblProdPhotosTableMap::translateFieldName('ProdSolo4Blank', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_solo_4_blank = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 17; // 17 = TblProdPhotosTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\TblProdPhotos'), 0, $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {
    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param      boolean $deep (optional) Whether to also de-associated any related objects.
     * @param      ConnectionInterface $con (optional) The ConnectionInterface connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(TblProdPhotosTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildTblProdPhotosQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->singleTblProdInfo = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see TblProdPhotos::setDeleted()
     * @see TblProdPhotos::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(TblProdPhotosTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildTblProdPhotosQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $this->setDeleted(true);
            }
        });
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param      ConnectionInterface $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see doSave()
     */
    public function save(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(TblProdPhotosTableMap::DATABASE_NAME);
        }

        return $con->transaction(function () use ($con) {
            $isInsert = $this->isNew();
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                TblProdPhotosTableMap::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }

            return $affectedRows;
        });
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param      ConnectionInterface $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see save()
     */
    protected function doSave(ConnectionInterface $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                    $affectedRows += 1;
                } else {
                    $affectedRows += $this->doUpdate($con);
                }
                $this->resetModified();
            }

            if ($this->singleTblProdInfo !== null) {
                if (!$this->singleTblProdInfo->isDeleted() && ($this->singleTblProdInfo->isNew() || $this->singleTblProdInfo->isModified())) {
                    $affectedRows += $this->singleTblProdInfo->save($con);
                }
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param      ConnectionInterface $con
     *
     * @throws PropelException
     * @see doSave()
     */
    protected function doInsert(ConnectionInterface $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[TblProdPhotosTableMap::COL_PROD_ID] = true;
        if (null !== $this->prod_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . TblProdPhotosTableMap::COL_PROD_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(TblProdPhotosTableMap::COL_PROD_ID)) {
            $modifiedColumns[':p' . $index++]  = 'prod_id';
        }
        if ($this->isColumnModified(TblProdPhotosTableMap::COL_PROD_SOLO_1)) {
            $modifiedColumns[':p' . $index++]  = 'prod_solo_1';
        }
        if ($this->isColumnModified(TblProdPhotosTableMap::COL_PROD_SOLO_2)) {
            $modifiedColumns[':p' . $index++]  = 'prod_solo_2';
        }
        if ($this->isColumnModified(TblProdPhotosTableMap::COL_PROD_SOLO_3)) {
            $modifiedColumns[':p' . $index++]  = 'prod_solo_3';
        }
        if ($this->isColumnModified(TblProdPhotosTableMap::COL_PROD_SOLO_4)) {
            $modifiedColumns[':p' . $index++]  = 'prod_solo_4';
        }
        if ($this->isColumnModified(TblProdPhotosTableMap::COL_PROD_SOLO_1_PA)) {
            $modifiedColumns[':p' . $index++]  = 'prod_solo_1_pa';
        }
        if ($this->isColumnModified(TblProdPhotosTableMap::COL_PROD_SOLO_2_PA)) {
            $modifiedColumns[':p' . $index++]  = 'prod_solo_2_pa';
        }
        if ($this->isColumnModified(TblProdPhotosTableMap::COL_PROD_SOLO_3_PA)) {
            $modifiedColumns[':p' . $index++]  = 'prod_solo_3_pa';
        }
        if ($this->isColumnModified(TblProdPhotosTableMap::COL_PROD_SOLO_4_PA)) {
            $modifiedColumns[':p' . $index++]  = 'prod_solo_4_pa';
        }
        if ($this->isColumnModified(TblProdPhotosTableMap::COL_PROD_SOLO_1_M3)) {
            $modifiedColumns[':p' . $index++]  = 'prod_solo_1_m3';
        }
        if ($this->isColumnModified(TblProdPhotosTableMap::COL_PROD_SOLO_2_M3)) {
            $modifiedColumns[':p' . $index++]  = 'prod_solo_2_m3';
        }
        if ($this->isColumnModified(TblProdPhotosTableMap::COL_PROD_SOLO_3_M3)) {
            $modifiedColumns[':p' . $index++]  = 'prod_solo_3_m3';
        }
        if ($this->isColumnModified(TblProdPhotosTableMap::COL_PROD_SOLO_4_M3)) {
            $modifiedColumns[':p' . $index++]  = 'prod_solo_4_m3';
        }
        if ($this->isColumnModified(TblProdPhotosTableMap::COL_PROD_SOLO_1_BLANK)) {
            $modifiedColumns[':p' . $index++]  = 'prod_solo_1_blank';
        }
        if ($this->isColumnModified(TblProdPhotosTableMap::COL_PROD_SOLO_2_BLANK)) {
            $modifiedColumns[':p' . $index++]  = 'prod_solo_2_blank';
        }
        if ($this->isColumnModified(TblProdPhotosTableMap::COL_PROD_SOLO_3_BLANK)) {
            $modifiedColumns[':p' . $index++]  = 'prod_solo_3_blank';
        }
        if ($this->isColumnModified(TblProdPhotosTableMap::COL_PROD_SOLO_4_BLANK)) {
            $modifiedColumns[':p' . $index++]  = 'prod_solo_4_blank';
        }

        $sql = sprintf(
            'INSERT INTO tbl_prod_photos (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'prod_id':                        
                        $stmt->bindValue($identifier, $this->prod_id, PDO::PARAM_INT);
                        break;
                    case 'prod_solo_1':                        
                        $stmt->bindValue($identifier, $this->prod_solo_1, PDO::PARAM_STR);
                        break;
                    case 'prod_solo_2':                        
                        $stmt->bindValue($identifier, $this->prod_solo_2, PDO::PARAM_STR);
                        break;
                    case 'prod_solo_3':                        
                        $stmt->bindValue($identifier, $this->prod_solo_3, PDO::PARAM_STR);
                        break;
                    case 'prod_solo_4':                        
                        $stmt->bindValue($identifier, $this->prod_solo_4, PDO::PARAM_STR);
                        break;
                    case 'prod_solo_1_pa':                        
                        $stmt->bindValue($identifier, $this->prod_solo_1_pa, PDO::PARAM_STR);
                        break;
                    case 'prod_solo_2_pa':                        
                        $stmt->bindValue($identifier, $this->prod_solo_2_pa, PDO::PARAM_STR);
                        break;
                    case 'prod_solo_3_pa':                        
                        $stmt->bindValue($identifier, $this->prod_solo_3_pa, PDO::PARAM_STR);
                        break;
                    case 'prod_solo_4_pa':                        
                        $stmt->bindValue($identifier, $this->prod_solo_4_pa, PDO::PARAM_STR);
                        break;
                    case 'prod_solo_1_m3':                        
                        $stmt->bindValue($identifier, $this->prod_solo_1_m3, PDO::PARAM_STR);
                        break;
                    case 'prod_solo_2_m3':                        
                        $stmt->bindValue($identifier, $this->prod_solo_2_m3, PDO::PARAM_STR);
                        break;
                    case 'prod_solo_3_m3':                        
                        $stmt->bindValue($identifier, $this->prod_solo_3_m3, PDO::PARAM_STR);
                        break;
                    case 'prod_solo_4_m3':                        
                        $stmt->bindValue($identifier, $this->prod_solo_4_m3, PDO::PARAM_STR);
                        break;
                    case 'prod_solo_1_blank':                        
                        $stmt->bindValue($identifier, $this->prod_solo_1_blank, PDO::PARAM_STR);
                        break;
                    case 'prod_solo_2_blank':                        
                        $stmt->bindValue($identifier, $this->prod_solo_2_blank, PDO::PARAM_STR);
                        break;
                    case 'prod_solo_3_blank':                        
                        $stmt->bindValue($identifier, $this->prod_solo_3_blank, PDO::PARAM_STR);
                        break;
                    case 'prod_solo_4_blank':                        
                        $stmt->bindValue($identifier, $this->prod_solo_4_blank, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), 0, $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', 0, $e);
        }
        $this->setProdId($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param      ConnectionInterface $con
     *
     * @return Integer Number of updated rows
     * @see doSave()
     */
    protected function doUpdate(ConnectionInterface $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();

        return $selectCriteria->doUpdate($valuesCriteria, $con);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param      string $name name
     * @param      string $type The type of fieldname the $name is of:
     *                     one of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                     TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                     Defaults to TableMap::TYPE_PHPNAME.
     * @return mixed Value of field.
     */
    public function getByName($name, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = TblProdPhotosTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param      int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getProdId();
                break;
            case 1:
                return $this->getProdSolo1();
                break;
            case 2:
                return $this->getProdSolo2();
                break;
            case 3:
                return $this->getProdSolo3();
                break;
            case 4:
                return $this->getProdSolo4();
                break;
            case 5:
                return $this->getProdSolo1Pa();
                break;
            case 6:
                return $this->getProdSolo2Pa();
                break;
            case 7:
                return $this->getProdSolo3Pa();
                break;
            case 8:
                return $this->getProdSolo4Pa();
                break;
            case 9:
                return $this->getProdSolo1M3();
                break;
            case 10:
                return $this->getProdSolo2M3();
                break;
            case 11:
                return $this->getProdSolo3M3();
                break;
            case 12:
                return $this->getProdSolo4M3();
                break;
            case 13:
                return $this->getProdSolo1Blank();
                break;
            case 14:
                return $this->getProdSolo2Blank();
                break;
            case 15:
                return $this->getProdSolo3Blank();
                break;
            case 16:
                return $this->getProdSolo4Blank();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME,
     *                    TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                    Defaults to TableMap::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = TableMap::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {

        if (isset($alreadyDumpedObjects['TblProdPhotos'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['TblProdPhotos'][$this->hashCode()] = true;
        $keys = TblProdPhotosTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getProdId(),
            $keys[1] => $this->getProdSolo1(),
            $keys[2] => $this->getProdSolo2(),
            $keys[3] => $this->getProdSolo3(),
            $keys[4] => $this->getProdSolo4(),
            $keys[5] => $this->getProdSolo1Pa(),
            $keys[6] => $this->getProdSolo2Pa(),
            $keys[7] => $this->getProdSolo3Pa(),
            $keys[8] => $this->getProdSolo4Pa(),
            $keys[9] => $this->getProdSolo1M3(),
            $keys[10] => $this->getProdSolo2M3(),
            $keys[11] => $this->getProdSolo3M3(),
            $keys[12] => $this->getProdSolo4M3(),
            $keys[13] => $this->getProdSolo1Blank(),
            $keys[14] => $this->getProdSolo2Blank(),
            $keys[15] => $this->getProdSolo3Blank(),
            $keys[16] => $this->getProdSolo4Blank(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }
        
        if ($includeForeignObjects) {
            if (null !== $this->singleTblProdInfo) {
                
                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'tblProdInfo';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'tbl_prod_info';
                        break;
                    default:
                        $key = 'TblProdInfo';
                }
        
                $result[$key] = $this->singleTblProdInfo->toArray($keyType, $includeLazyLoadColumns, $alreadyDumpedObjects, true);
            }
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param  string $name
     * @param  mixed  $value field value
     * @param  string $type The type of fieldname the $name is of:
     *                one of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                Defaults to TableMap::TYPE_PHPNAME.
     * @return $this|\TblProdPhotos
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = TblProdPhotosTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\TblProdPhotos
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setProdId($value);
                break;
            case 1:
                $this->setProdSolo1($value);
                break;
            case 2:
                $this->setProdSolo2($value);
                break;
            case 3:
                $this->setProdSolo3($value);
                break;
            case 4:
                $this->setProdSolo4($value);
                break;
            case 5:
                $this->setProdSolo1Pa($value);
                break;
            case 6:
                $this->setProdSolo2Pa($value);
                break;
            case 7:
                $this->setProdSolo3Pa($value);
                break;
            case 8:
                $this->setProdSolo4Pa($value);
                break;
            case 9:
                $this->setProdSolo1M3($value);
                break;
            case 10:
                $this->setProdSolo2M3($value);
                break;
            case 11:
                $this->setProdSolo3M3($value);
                break;
            case 12:
                $this->setProdSolo4M3($value);
                break;
            case 13:
                $this->setProdSolo1Blank($value);
                break;
            case 14:
                $this->setProdSolo2Blank($value);
                break;
            case 15:
                $this->setProdSolo3Blank($value);
                break;
            case 16:
                $this->setProdSolo4Blank($value);
                break;
        } // switch()

        return $this;
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME,
     * TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     * The default key type is the column's TableMap::TYPE_PHPNAME.
     *
     * @param      array  $arr     An array to populate the object from.
     * @param      string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = TableMap::TYPE_PHPNAME)
    {
        $keys = TblProdPhotosTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setProdId($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setProdSolo1($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setProdSolo2($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setProdSolo3($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setProdSolo4($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setProdSolo1Pa($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setProdSolo2Pa($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setProdSolo3Pa($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setProdSolo4Pa($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setProdSolo1M3($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setProdSolo2M3($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setProdSolo3M3($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setProdSolo4M3($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setProdSolo1Blank($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setProdSolo2Blank($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setProdSolo3Blank($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setProdSolo4Blank($arr[$keys[16]]);
        }
    }

     /**
     * Populate the current object from a string, using a given parser format
     * <code>
     * $book = new Book();
     * $book->importFrom('JSON', '{"Id":9012,"Title":"Don Juan","ISBN":"0140422161","Price":12.99,"PublisherId":1234,"AuthorId":5678}');
     * </code>
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME,
     * TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     * The default key type is the column's TableMap::TYPE_PHPNAME.
     *
     * @param mixed $parser A AbstractParser instance,
     *                       or a format name ('XML', 'YAML', 'JSON', 'CSV')
     * @param string $data The source data to import from
     * @param string $keyType The type of keys the array uses.
     *
     * @return $this|\TblProdPhotos The current object, for fluid interface
     */
    public function importFrom($parser, $data, $keyType = TableMap::TYPE_PHPNAME)
    {
        if (!$parser instanceof AbstractParser) {
            $parser = AbstractParser::getParser($parser);
        }

        $this->fromArray($parser->toArray($data), $keyType);

        return $this;
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(TblProdPhotosTableMap::DATABASE_NAME);

        if ($this->isColumnModified(TblProdPhotosTableMap::COL_PROD_ID)) {
            $criteria->add(TblProdPhotosTableMap::COL_PROD_ID, $this->prod_id);
        }
        if ($this->isColumnModified(TblProdPhotosTableMap::COL_PROD_SOLO_1)) {
            $criteria->add(TblProdPhotosTableMap::COL_PROD_SOLO_1, $this->prod_solo_1);
        }
        if ($this->isColumnModified(TblProdPhotosTableMap::COL_PROD_SOLO_2)) {
            $criteria->add(TblProdPhotosTableMap::COL_PROD_SOLO_2, $this->prod_solo_2);
        }
        if ($this->isColumnModified(TblProdPhotosTableMap::COL_PROD_SOLO_3)) {
            $criteria->add(TblProdPhotosTableMap::COL_PROD_SOLO_3, $this->prod_solo_3);
        }
        if ($this->isColumnModified(TblProdPhotosTableMap::COL_PROD_SOLO_4)) {
            $criteria->add(TblProdPhotosTableMap::COL_PROD_SOLO_4, $this->prod_solo_4);
        }
        if ($this->isColumnModified(TblProdPhotosTableMap::COL_PROD_SOLO_1_PA)) {
            $criteria->add(TblProdPhotosTableMap::COL_PROD_SOLO_1_PA, $this->prod_solo_1_pa);
        }
        if ($this->isColumnModified(TblProdPhotosTableMap::COL_PROD_SOLO_2_PA)) {
            $criteria->add(TblProdPhotosTableMap::COL_PROD_SOLO_2_PA, $this->prod_solo_2_pa);
        }
        if ($this->isColumnModified(TblProdPhotosTableMap::COL_PROD_SOLO_3_PA)) {
            $criteria->add(TblProdPhotosTableMap::COL_PROD_SOLO_3_PA, $this->prod_solo_3_pa);
        }
        if ($this->isColumnModified(TblProdPhotosTableMap::COL_PROD_SOLO_4_PA)) {
            $criteria->add(TblProdPhotosTableMap::COL_PROD_SOLO_4_PA, $this->prod_solo_4_pa);
        }
        if ($this->isColumnModified(TblProdPhotosTableMap::COL_PROD_SOLO_1_M3)) {
            $criteria->add(TblProdPhotosTableMap::COL_PROD_SOLO_1_M3, $this->prod_solo_1_m3);
        }
        if ($this->isColumnModified(TblProdPhotosTableMap::COL_PROD_SOLO_2_M3)) {
            $criteria->add(TblProdPhotosTableMap::COL_PROD_SOLO_2_M3, $this->prod_solo_2_m3);
        }
        if ($this->isColumnModified(TblProdPhotosTableMap::COL_PROD_SOLO_3_M3)) {
            $criteria->add(TblProdPhotosTableMap::COL_PROD_SOLO_3_M3, $this->prod_solo_3_m3);
        }
        if ($this->isColumnModified(TblProdPhotosTableMap::COL_PROD_SOLO_4_M3)) {
            $criteria->add(TblProdPhotosTableMap::COL_PROD_SOLO_4_M3, $this->prod_solo_4_m3);
        }
        if ($this->isColumnModified(TblProdPhotosTableMap::COL_PROD_SOLO_1_BLANK)) {
            $criteria->add(TblProdPhotosTableMap::COL_PROD_SOLO_1_BLANK, $this->prod_solo_1_blank);
        }
        if ($this->isColumnModified(TblProdPhotosTableMap::COL_PROD_SOLO_2_BLANK)) {
            $criteria->add(TblProdPhotosTableMap::COL_PROD_SOLO_2_BLANK, $this->prod_solo_2_blank);
        }
        if ($this->isColumnModified(TblProdPhotosTableMap::COL_PROD_SOLO_3_BLANK)) {
            $criteria->add(TblProdPhotosTableMap::COL_PROD_SOLO_3_BLANK, $this->prod_solo_3_blank);
        }
        if ($this->isColumnModified(TblProdPhotosTableMap::COL_PROD_SOLO_4_BLANK)) {
            $criteria->add(TblProdPhotosTableMap::COL_PROD_SOLO_4_BLANK, $this->prod_solo_4_blank);
        }

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @throws LogicException if no primary key is defined
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = ChildTblProdPhotosQuery::create();
        $criteria->add(TblProdPhotosTableMap::COL_PROD_ID, $this->prod_id);

        return $criteria;
    }

    /**
     * If the primary key is not null, return the hashcode of the
     * primary key. Otherwise, return the hash code of the object.
     *
     * @return int Hashcode
     */
    public function hashCode()
    {
        $validPk = null !== $this->getProdId();

        $validPrimaryKeyFKs = 0;
        $primaryKeyFKs = [];

        if ($validPk) {
            return crc32(json_encode($this->getPrimaryKey(), JSON_UNESCAPED_UNICODE));
        } elseif ($validPrimaryKeyFKs) {
            return crc32(json_encode($primaryKeyFKs, JSON_UNESCAPED_UNICODE));
        }

        return spl_object_hash($this);
    }
        
    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getProdId();
    }

    /**
     * Generic method to set the primary key (prod_id column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setProdId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getProdId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \TblProdPhotos (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setProdSolo1($this->getProdSolo1());
        $copyObj->setProdSolo2($this->getProdSolo2());
        $copyObj->setProdSolo3($this->getProdSolo3());
        $copyObj->setProdSolo4($this->getProdSolo4());
        $copyObj->setProdSolo1Pa($this->getProdSolo1Pa());
        $copyObj->setProdSolo2Pa($this->getProdSolo2Pa());
        $copyObj->setProdSolo3Pa($this->getProdSolo3Pa());
        $copyObj->setProdSolo4Pa($this->getProdSolo4Pa());
        $copyObj->setProdSolo1M3($this->getProdSolo1M3());
        $copyObj->setProdSolo2M3($this->getProdSolo2M3());
        $copyObj->setProdSolo3M3($this->getProdSolo3M3());
        $copyObj->setProdSolo4M3($this->getProdSolo4M3());
        $copyObj->setProdSolo1Blank($this->getProdSolo1Blank());
        $copyObj->setProdSolo2Blank($this->getProdSolo2Blank());
        $copyObj->setProdSolo3Blank($this->getProdSolo3Blank());
        $copyObj->setProdSolo4Blank($this->getProdSolo4Blank());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            $relObj = $this->getTblProdInfo();
            if ($relObj) {
                $copyObj->setTblProdInfo($relObj->copy($deepCopy));
            }

        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setProdId(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param  boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return \TblProdPhotos Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param      string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
    }

    /**
     * Gets a single ChildTblProdInfo object, which is related to this object by a one-to-one relationship.
     *
     * @param  ConnectionInterface $con optional connection object
     * @return ChildTblProdInfo
     * @throws PropelException
     */
    public function getTblProdInfo(ConnectionInterface $con = null)
    {

        if ($this->singleTblProdInfo === null && !$this->isNew()) {
            $this->singleTblProdInfo = ChildTblProdInfoQuery::create()->findPk($this->getPrimaryKey(), $con);
        }

        return $this->singleTblProdInfo;
    }

    /**
     * Sets a single ChildTblProdInfo object as related to this object by a one-to-one relationship.
     *
     * @param  ChildTblProdInfo $v ChildTblProdInfo
     * @return $this|\TblProdPhotos The current object (for fluent API support)
     * @throws PropelException
     */
    public function setTblProdInfo(ChildTblProdInfo $v = null)
    {
        $this->singleTblProdInfo = $v;

        // Make sure that that the passed-in ChildTblProdInfo isn't already associated with this object
        if ($v !== null && $v->getTblProdPhotos(null, false) === null) {
            $v->setTblProdPhotos($this);
        }

        return $this;
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        $this->prod_id = null;
        $this->prod_solo_1 = null;
        $this->prod_solo_2 = null;
        $this->prod_solo_3 = null;
        $this->prod_solo_4 = null;
        $this->prod_solo_1_pa = null;
        $this->prod_solo_2_pa = null;
        $this->prod_solo_3_pa = null;
        $this->prod_solo_4_pa = null;
        $this->prod_solo_1_m3 = null;
        $this->prod_solo_2_m3 = null;
        $this->prod_solo_3_m3 = null;
        $this->prod_solo_4_m3 = null;
        $this->prod_solo_1_blank = null;
        $this->prod_solo_2_blank = null;
        $this->prod_solo_3_blank = null;
        $this->prod_solo_4_blank = null;
        $this->alreadyInSave = false;
        $this->clearAllReferences();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references and back-references to other model objects or collections of model objects.
     *
     * This method is used to reset all php object references (not the actual reference in the database).
     * Necessary for object serialisation.
     *
     * @param      boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep) {
            if ($this->singleTblProdInfo) {
                $this->singleTblProdInfo->clearAllReferences($deep);
            }
        } // if ($deep)

        $this->singleTblProdInfo = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(TblProdPhotosTableMap::DEFAULT_STRING_FORMAT);
    }

    /**
     * Code to be run before persisting the object
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preSave(ConnectionInterface $con = null)
    {
        return true;
    }

    /**
     * Code to be run after persisting the object
     * @param ConnectionInterface $con
     */
    public function postSave(ConnectionInterface $con = null)
    {

    }

    /**
     * Code to be run before inserting to database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preInsert(ConnectionInterface $con = null)
    {
        return true;
    }

    /**
     * Code to be run after inserting to database
     * @param ConnectionInterface $con
     */
    public function postInsert(ConnectionInterface $con = null)
    {

    }

    /**
     * Code to be run before updating the object in database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preUpdate(ConnectionInterface $con = null)
    {
        return true;
    }

    /**
     * Code to be run after updating the object in database
     * @param ConnectionInterface $con
     */
    public function postUpdate(ConnectionInterface $con = null)
    {

    }

    /**
     * Code to be run before deleting the object in database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preDelete(ConnectionInterface $con = null)
    {
        return true;
    }

    /**
     * Code to be run after deleting the object in database
     * @param ConnectionInterface $con
     */
    public function postDelete(ConnectionInterface $con = null)
    {

    }


    /**
     * Derived method to catches calls to undefined methods.
     *
     * Provides magic import/export method support (fromXML()/toXML(), fromYAML()/toYAML(), etc.).
     * Allows to define default __call() behavior if you overwrite __call()
     *
     * @param string $name
     * @param mixed  $params
     *
     * @return array|string
     */
    public function __call($name, $params)
    {
        if (0 === strpos($name, 'get')) {
            $virtualColumn = substr($name, 3);
            if ($this->hasVirtualColumn($virtualColumn)) {
                return $this->getVirtualColumn($virtualColumn);
            }

            $virtualColumn = lcfirst($virtualColumn);
            if ($this->hasVirtualColumn($virtualColumn)) {
                return $this->getVirtualColumn($virtualColumn);
            }
        }

        if (0 === strpos($name, 'from')) {
            $format = substr($name, 4);

            return $this->importFrom($format, reset($params));
        }

        if (0 === strpos($name, 'to')) {
            $format = substr($name, 2);
            $includeLazyLoadColumns = isset($params[0]) ? $params[0] : true;

            return $this->exportTo($format, $includeLazyLoadColumns);
        }

        throw new BadMethodCallException(sprintf('Call to undefined method: %s.', $name));
    }

}
