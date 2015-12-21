<?php

namespace Base;

use \TblGeneral as ChildTblGeneral;
use \TblGeneralQuery as ChildTblGeneralQuery;
use \TblProdInfo as ChildTblProdInfo;
use \TblProdInfoQuery as ChildTblProdInfoQuery;
use \Exception;
use \PDO;
use Map\TblGeneralTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveRecord\ActiveRecordInterface;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\BadMethodCallException;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Parser\AbstractParser;

/**
 * Base class that represents a row from the 'tbl_general' table.
 *
 * 
 *
* @package    propel.generator..Base
*/
abstract class TblGeneral implements ActiveRecordInterface 
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\TblGeneralTableMap';


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
     * The value for the prod_general field.
     * 
     * @var        int
     */
    protected $prod_general;

    /**
     * The value for the prod_name field.
     * 
     * @var        string
     */
    protected $prod_name;

    /**
     * The value for the prod_description field.
     * 
     * @var        string
     */
    protected $prod_description;

    /**
     * The value for the prod_description_pa field.
     * 
     * @var        string
     */
    protected $prod_description_pa;

    /**
     * The value for the prod_description_m3 field.
     * 
     * @var        string
     */
    protected $prod_description_m3;

    /**
     * The value for the prod_keywords field.
     * 
     * @var        string
     */
    protected $prod_keywords;

    /**
     * The value for the prod_keywords_pa field.
     * 
     * @var        string
     */
    protected $prod_keywords_pa;

    /**
     * The value for the prod_keywords_m3 field.
     * 
     * @var        string
     */
    protected $prod_keywords_m3;

    /**
     * The value for the prod_writeupkeywords field.
     * 
     * @var        string
     */
    protected $prod_writeupkeywords;

    /**
     * The value for the prod_writeupkeywords_pa field.
     * 
     * @var        string
     */
    protected $prod_writeupkeywords_pa;

    /**
     * The value for the prod_writeupkeywords_m3 field.
     * 
     * @var        string
     */
    protected $prod_writeupkeywords_m3;

    /**
     * @var        ObjectCollection|ChildTblProdInfo[] Collection to store aggregation of ChildTblProdInfo objects.
     */
    protected $collTblProdInfos;
    protected $collTblProdInfosPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildTblProdInfo[]
     */
    protected $tblProdInfosScheduledForDeletion = null;

    /**
     * Initializes internal state of Base\TblGeneral object.
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
     * Compares this with another <code>TblGeneral</code> instance.  If
     * <code>obj</code> is an instance of <code>TblGeneral</code>, delegates to
     * <code>equals(TblGeneral)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|TblGeneral The current object, for fluid interface
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
     * Get the [prod_general] column value.
     * 
     * @return int
     */
    public function getProdGeneral()
    {
        return $this->prod_general;
    }

    /**
     * Get the [prod_name] column value.
     * 
     * @return string
     */
    public function getProdName()
    {
        return $this->prod_name;
    }

    /**
     * Get the [prod_description] column value.
     * 
     * @return string
     */
    public function getProdDescription()
    {
        return $this->prod_description;
    }

    /**
     * Get the [prod_description_pa] column value.
     * 
     * @return string
     */
    public function getProdDescriptionPa()
    {
        return $this->prod_description_pa;
    }

    /**
     * Get the [prod_description_m3] column value.
     * 
     * @return string
     */
    public function getProdDescriptionM3()
    {
        return $this->prod_description_m3;
    }

    /**
     * Get the [prod_keywords] column value.
     * 
     * @return string
     */
    public function getProdKeywords()
    {
        return $this->prod_keywords;
    }

    /**
     * Get the [prod_keywords_pa] column value.
     * 
     * @return string
     */
    public function getProdKeywordsPa()
    {
        return $this->prod_keywords_pa;
    }

    /**
     * Get the [prod_keywords_m3] column value.
     * 
     * @return string
     */
    public function getProdKeywordsM3()
    {
        return $this->prod_keywords_m3;
    }

    /**
     * Get the [prod_writeupkeywords] column value.
     * 
     * @return string
     */
    public function getProdWriteupkeywords()
    {
        return $this->prod_writeupkeywords;
    }

    /**
     * Get the [prod_writeupkeywords_pa] column value.
     * 
     * @return string
     */
    public function getProdWriteupkeywordsPa()
    {
        return $this->prod_writeupkeywords_pa;
    }

    /**
     * Get the [prod_writeupkeywords_m3] column value.
     * 
     * @return string
     */
    public function getProdWriteupkeywordsM3()
    {
        return $this->prod_writeupkeywords_m3;
    }

    /**
     * Set the value of [prod_general] column.
     * 
     * @param int $v new value
     * @return $this|\TblGeneral The current object (for fluent API support)
     */
    public function setProdGeneral($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->prod_general !== $v) {
            $this->prod_general = $v;
            $this->modifiedColumns[TblGeneralTableMap::COL_PROD_GENERAL] = true;
        }

        return $this;
    } // setProdGeneral()

    /**
     * Set the value of [prod_name] column.
     * 
     * @param string $v new value
     * @return $this|\TblGeneral The current object (for fluent API support)
     */
    public function setProdName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_name !== $v) {
            $this->prod_name = $v;
            $this->modifiedColumns[TblGeneralTableMap::COL_PROD_NAME] = true;
        }

        return $this;
    } // setProdName()

    /**
     * Set the value of [prod_description] column.
     * 
     * @param string $v new value
     * @return $this|\TblGeneral The current object (for fluent API support)
     */
    public function setProdDescription($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_description !== $v) {
            $this->prod_description = $v;
            $this->modifiedColumns[TblGeneralTableMap::COL_PROD_DESCRIPTION] = true;
        }

        return $this;
    } // setProdDescription()

    /**
     * Set the value of [prod_description_pa] column.
     * 
     * @param string $v new value
     * @return $this|\TblGeneral The current object (for fluent API support)
     */
    public function setProdDescriptionPa($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_description_pa !== $v) {
            $this->prod_description_pa = $v;
            $this->modifiedColumns[TblGeneralTableMap::COL_PROD_DESCRIPTION_PA] = true;
        }

        return $this;
    } // setProdDescriptionPa()

    /**
     * Set the value of [prod_description_m3] column.
     * 
     * @param string $v new value
     * @return $this|\TblGeneral The current object (for fluent API support)
     */
    public function setProdDescriptionM3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_description_m3 !== $v) {
            $this->prod_description_m3 = $v;
            $this->modifiedColumns[TblGeneralTableMap::COL_PROD_DESCRIPTION_M3] = true;
        }

        return $this;
    } // setProdDescriptionM3()

    /**
     * Set the value of [prod_keywords] column.
     * 
     * @param string $v new value
     * @return $this|\TblGeneral The current object (for fluent API support)
     */
    public function setProdKeywords($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_keywords !== $v) {
            $this->prod_keywords = $v;
            $this->modifiedColumns[TblGeneralTableMap::COL_PROD_KEYWORDS] = true;
        }

        return $this;
    } // setProdKeywords()

    /**
     * Set the value of [prod_keywords_pa] column.
     * 
     * @param string $v new value
     * @return $this|\TblGeneral The current object (for fluent API support)
     */
    public function setProdKeywordsPa($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_keywords_pa !== $v) {
            $this->prod_keywords_pa = $v;
            $this->modifiedColumns[TblGeneralTableMap::COL_PROD_KEYWORDS_PA] = true;
        }

        return $this;
    } // setProdKeywordsPa()

    /**
     * Set the value of [prod_keywords_m3] column.
     * 
     * @param string $v new value
     * @return $this|\TblGeneral The current object (for fluent API support)
     */
    public function setProdKeywordsM3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_keywords_m3 !== $v) {
            $this->prod_keywords_m3 = $v;
            $this->modifiedColumns[TblGeneralTableMap::COL_PROD_KEYWORDS_M3] = true;
        }

        return $this;
    } // setProdKeywordsM3()

    /**
     * Set the value of [prod_writeupkeywords] column.
     * 
     * @param string $v new value
     * @return $this|\TblGeneral The current object (for fluent API support)
     */
    public function setProdWriteupkeywords($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_writeupkeywords !== $v) {
            $this->prod_writeupkeywords = $v;
            $this->modifiedColumns[TblGeneralTableMap::COL_PROD_WRITEUPKEYWORDS] = true;
        }

        return $this;
    } // setProdWriteupkeywords()

    /**
     * Set the value of [prod_writeupkeywords_pa] column.
     * 
     * @param string $v new value
     * @return $this|\TblGeneral The current object (for fluent API support)
     */
    public function setProdWriteupkeywordsPa($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_writeupkeywords_pa !== $v) {
            $this->prod_writeupkeywords_pa = $v;
            $this->modifiedColumns[TblGeneralTableMap::COL_PROD_WRITEUPKEYWORDS_PA] = true;
        }

        return $this;
    } // setProdWriteupkeywordsPa()

    /**
     * Set the value of [prod_writeupkeywords_m3] column.
     * 
     * @param string $v new value
     * @return $this|\TblGeneral The current object (for fluent API support)
     */
    public function setProdWriteupkeywordsM3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_writeupkeywords_m3 !== $v) {
            $this->prod_writeupkeywords_m3 = $v;
            $this->modifiedColumns[TblGeneralTableMap::COL_PROD_WRITEUPKEYWORDS_M3] = true;
        }

        return $this;
    } // setProdWriteupkeywordsM3()

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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : TblGeneralTableMap::translateFieldName('ProdGeneral', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_general = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : TblGeneralTableMap::translateFieldName('ProdName', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_name = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : TblGeneralTableMap::translateFieldName('ProdDescription', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_description = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : TblGeneralTableMap::translateFieldName('ProdDescriptionPa', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_description_pa = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : TblGeneralTableMap::translateFieldName('ProdDescriptionM3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_description_m3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : TblGeneralTableMap::translateFieldName('ProdKeywords', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_keywords = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : TblGeneralTableMap::translateFieldName('ProdKeywordsPa', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_keywords_pa = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : TblGeneralTableMap::translateFieldName('ProdKeywordsM3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_keywords_m3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : TblGeneralTableMap::translateFieldName('ProdWriteupkeywords', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_writeupkeywords = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : TblGeneralTableMap::translateFieldName('ProdWriteupkeywordsPa', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_writeupkeywords_pa = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : TblGeneralTableMap::translateFieldName('ProdWriteupkeywordsM3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_writeupkeywords_m3 = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 11; // 11 = TblGeneralTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\TblGeneral'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(TblGeneralTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildTblGeneralQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collTblProdInfos = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see TblGeneral::setDeleted()
     * @see TblGeneral::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(TblGeneralTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildTblGeneralQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(TblGeneralTableMap::DATABASE_NAME);
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
                TblGeneralTableMap::addInstanceToPool($this);
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

            if ($this->tblProdInfosScheduledForDeletion !== null) {
                if (!$this->tblProdInfosScheduledForDeletion->isEmpty()) {
                    \TblProdInfoQuery::create()
                        ->filterByPrimaryKeys($this->tblProdInfosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->tblProdInfosScheduledForDeletion = null;
                }
            }

            if ($this->collTblProdInfos !== null) {
                foreach ($this->collTblProdInfos as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
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

        $this->modifiedColumns[TblGeneralTableMap::COL_PROD_GENERAL] = true;
        if (null !== $this->prod_general) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . TblGeneralTableMap::COL_PROD_GENERAL . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(TblGeneralTableMap::COL_PROD_GENERAL)) {
            $modifiedColumns[':p' . $index++]  = 'prod_general';
        }
        if ($this->isColumnModified(TblGeneralTableMap::COL_PROD_NAME)) {
            $modifiedColumns[':p' . $index++]  = 'prod_name';
        }
        if ($this->isColumnModified(TblGeneralTableMap::COL_PROD_DESCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = 'prod_description';
        }
        if ($this->isColumnModified(TblGeneralTableMap::COL_PROD_DESCRIPTION_PA)) {
            $modifiedColumns[':p' . $index++]  = 'prod_description_pa';
        }
        if ($this->isColumnModified(TblGeneralTableMap::COL_PROD_DESCRIPTION_M3)) {
            $modifiedColumns[':p' . $index++]  = 'prod_description_m3';
        }
        if ($this->isColumnModified(TblGeneralTableMap::COL_PROD_KEYWORDS)) {
            $modifiedColumns[':p' . $index++]  = 'prod_keywords';
        }
        if ($this->isColumnModified(TblGeneralTableMap::COL_PROD_KEYWORDS_PA)) {
            $modifiedColumns[':p' . $index++]  = 'prod_keywords_pa';
        }
        if ($this->isColumnModified(TblGeneralTableMap::COL_PROD_KEYWORDS_M3)) {
            $modifiedColumns[':p' . $index++]  = 'prod_keywords_m3';
        }
        if ($this->isColumnModified(TblGeneralTableMap::COL_PROD_WRITEUPKEYWORDS)) {
            $modifiedColumns[':p' . $index++]  = 'prod_writeupkeywords';
        }
        if ($this->isColumnModified(TblGeneralTableMap::COL_PROD_WRITEUPKEYWORDS_PA)) {
            $modifiedColumns[':p' . $index++]  = 'prod_writeupkeywords_pa';
        }
        if ($this->isColumnModified(TblGeneralTableMap::COL_PROD_WRITEUPKEYWORDS_M3)) {
            $modifiedColumns[':p' . $index++]  = 'prod_writeupkeywords_m3';
        }

        $sql = sprintf(
            'INSERT INTO tbl_general (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'prod_general':                        
                        $stmt->bindValue($identifier, $this->prod_general, PDO::PARAM_INT);
                        break;
                    case 'prod_name':                        
                        $stmt->bindValue($identifier, $this->prod_name, PDO::PARAM_STR);
                        break;
                    case 'prod_description':                        
                        $stmt->bindValue($identifier, $this->prod_description, PDO::PARAM_STR);
                        break;
                    case 'prod_description_pa':                        
                        $stmt->bindValue($identifier, $this->prod_description_pa, PDO::PARAM_STR);
                        break;
                    case 'prod_description_m3':                        
                        $stmt->bindValue($identifier, $this->prod_description_m3, PDO::PARAM_STR);
                        break;
                    case 'prod_keywords':                        
                        $stmt->bindValue($identifier, $this->prod_keywords, PDO::PARAM_STR);
                        break;
                    case 'prod_keywords_pa':                        
                        $stmt->bindValue($identifier, $this->prod_keywords_pa, PDO::PARAM_STR);
                        break;
                    case 'prod_keywords_m3':                        
                        $stmt->bindValue($identifier, $this->prod_keywords_m3, PDO::PARAM_STR);
                        break;
                    case 'prod_writeupkeywords':                        
                        $stmt->bindValue($identifier, $this->prod_writeupkeywords, PDO::PARAM_STR);
                        break;
                    case 'prod_writeupkeywords_pa':                        
                        $stmt->bindValue($identifier, $this->prod_writeupkeywords_pa, PDO::PARAM_STR);
                        break;
                    case 'prod_writeupkeywords_m3':                        
                        $stmt->bindValue($identifier, $this->prod_writeupkeywords_m3, PDO::PARAM_STR);
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
        $this->setProdGeneral($pk);

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
        $pos = TblGeneralTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getProdGeneral();
                break;
            case 1:
                return $this->getProdName();
                break;
            case 2:
                return $this->getProdDescription();
                break;
            case 3:
                return $this->getProdDescriptionPa();
                break;
            case 4:
                return $this->getProdDescriptionM3();
                break;
            case 5:
                return $this->getProdKeywords();
                break;
            case 6:
                return $this->getProdKeywordsPa();
                break;
            case 7:
                return $this->getProdKeywordsM3();
                break;
            case 8:
                return $this->getProdWriteupkeywords();
                break;
            case 9:
                return $this->getProdWriteupkeywordsPa();
                break;
            case 10:
                return $this->getProdWriteupkeywordsM3();
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

        if (isset($alreadyDumpedObjects['TblGeneral'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['TblGeneral'][$this->hashCode()] = true;
        $keys = TblGeneralTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getProdGeneral(),
            $keys[1] => $this->getProdName(),
            $keys[2] => $this->getProdDescription(),
            $keys[3] => $this->getProdDescriptionPa(),
            $keys[4] => $this->getProdDescriptionM3(),
            $keys[5] => $this->getProdKeywords(),
            $keys[6] => $this->getProdKeywordsPa(),
            $keys[7] => $this->getProdKeywordsM3(),
            $keys[8] => $this->getProdWriteupkeywords(),
            $keys[9] => $this->getProdWriteupkeywordsPa(),
            $keys[10] => $this->getProdWriteupkeywordsM3(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }
        
        if ($includeForeignObjects) {
            if (null !== $this->collTblProdInfos) {
                
                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'tblProdInfos';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'tbl_prod_infos';
                        break;
                    default:
                        $key = 'TblProdInfos';
                }
        
                $result[$key] = $this->collTblProdInfos->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
     * @return $this|\TblGeneral
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = TblGeneralTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\TblGeneral
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setProdGeneral($value);
                break;
            case 1:
                $this->setProdName($value);
                break;
            case 2:
                $this->setProdDescription($value);
                break;
            case 3:
                $this->setProdDescriptionPa($value);
                break;
            case 4:
                $this->setProdDescriptionM3($value);
                break;
            case 5:
                $this->setProdKeywords($value);
                break;
            case 6:
                $this->setProdKeywordsPa($value);
                break;
            case 7:
                $this->setProdKeywordsM3($value);
                break;
            case 8:
                $this->setProdWriteupkeywords($value);
                break;
            case 9:
                $this->setProdWriteupkeywordsPa($value);
                break;
            case 10:
                $this->setProdWriteupkeywordsM3($value);
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
        $keys = TblGeneralTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setProdGeneral($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setProdName($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setProdDescription($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setProdDescriptionPa($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setProdDescriptionM3($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setProdKeywords($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setProdKeywordsPa($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setProdKeywordsM3($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setProdWriteupkeywords($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setProdWriteupkeywordsPa($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setProdWriteupkeywordsM3($arr[$keys[10]]);
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
     * @return $this|\TblGeneral The current object, for fluid interface
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
        $criteria = new Criteria(TblGeneralTableMap::DATABASE_NAME);

        if ($this->isColumnModified(TblGeneralTableMap::COL_PROD_GENERAL)) {
            $criteria->add(TblGeneralTableMap::COL_PROD_GENERAL, $this->prod_general);
        }
        if ($this->isColumnModified(TblGeneralTableMap::COL_PROD_NAME)) {
            $criteria->add(TblGeneralTableMap::COL_PROD_NAME, $this->prod_name);
        }
        if ($this->isColumnModified(TblGeneralTableMap::COL_PROD_DESCRIPTION)) {
            $criteria->add(TblGeneralTableMap::COL_PROD_DESCRIPTION, $this->prod_description);
        }
        if ($this->isColumnModified(TblGeneralTableMap::COL_PROD_DESCRIPTION_PA)) {
            $criteria->add(TblGeneralTableMap::COL_PROD_DESCRIPTION_PA, $this->prod_description_pa);
        }
        if ($this->isColumnModified(TblGeneralTableMap::COL_PROD_DESCRIPTION_M3)) {
            $criteria->add(TblGeneralTableMap::COL_PROD_DESCRIPTION_M3, $this->prod_description_m3);
        }
        if ($this->isColumnModified(TblGeneralTableMap::COL_PROD_KEYWORDS)) {
            $criteria->add(TblGeneralTableMap::COL_PROD_KEYWORDS, $this->prod_keywords);
        }
        if ($this->isColumnModified(TblGeneralTableMap::COL_PROD_KEYWORDS_PA)) {
            $criteria->add(TblGeneralTableMap::COL_PROD_KEYWORDS_PA, $this->prod_keywords_pa);
        }
        if ($this->isColumnModified(TblGeneralTableMap::COL_PROD_KEYWORDS_M3)) {
            $criteria->add(TblGeneralTableMap::COL_PROD_KEYWORDS_M3, $this->prod_keywords_m3);
        }
        if ($this->isColumnModified(TblGeneralTableMap::COL_PROD_WRITEUPKEYWORDS)) {
            $criteria->add(TblGeneralTableMap::COL_PROD_WRITEUPKEYWORDS, $this->prod_writeupkeywords);
        }
        if ($this->isColumnModified(TblGeneralTableMap::COL_PROD_WRITEUPKEYWORDS_PA)) {
            $criteria->add(TblGeneralTableMap::COL_PROD_WRITEUPKEYWORDS_PA, $this->prod_writeupkeywords_pa);
        }
        if ($this->isColumnModified(TblGeneralTableMap::COL_PROD_WRITEUPKEYWORDS_M3)) {
            $criteria->add(TblGeneralTableMap::COL_PROD_WRITEUPKEYWORDS_M3, $this->prod_writeupkeywords_m3);
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
        $criteria = ChildTblGeneralQuery::create();
        $criteria->add(TblGeneralTableMap::COL_PROD_GENERAL, $this->prod_general);

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
        $validPk = null !== $this->getProdGeneral();

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
        return $this->getProdGeneral();
    }

    /**
     * Generic method to set the primary key (prod_general column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setProdGeneral($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getProdGeneral();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \TblGeneral (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setProdName($this->getProdName());
        $copyObj->setProdDescription($this->getProdDescription());
        $copyObj->setProdDescriptionPa($this->getProdDescriptionPa());
        $copyObj->setProdDescriptionM3($this->getProdDescriptionM3());
        $copyObj->setProdKeywords($this->getProdKeywords());
        $copyObj->setProdKeywordsPa($this->getProdKeywordsPa());
        $copyObj->setProdKeywordsM3($this->getProdKeywordsM3());
        $copyObj->setProdWriteupkeywords($this->getProdWriteupkeywords());
        $copyObj->setProdWriteupkeywordsPa($this->getProdWriteupkeywordsPa());
        $copyObj->setProdWriteupkeywordsM3($this->getProdWriteupkeywordsM3());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getTblProdInfos() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addTblProdInfo($relObj->copy($deepCopy));
                }
            }

        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setProdGeneral(NULL); // this is a auto-increment column, so set to default value
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
     * @return \TblGeneral Clone of current object.
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
        if ('TblProdInfo' == $relationName) {
            return $this->initTblProdInfos();
        }
    }

    /**
     * Clears out the collTblProdInfos collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addTblProdInfos()
     */
    public function clearTblProdInfos()
    {
        $this->collTblProdInfos = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collTblProdInfos collection loaded partially.
     */
    public function resetPartialTblProdInfos($v = true)
    {
        $this->collTblProdInfosPartial = $v;
    }

    /**
     * Initializes the collTblProdInfos collection.
     *
     * By default this just sets the collTblProdInfos collection to an empty array (like clearcollTblProdInfos());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initTblProdInfos($overrideExisting = true)
    {
        if (null !== $this->collTblProdInfos && !$overrideExisting) {
            return;
        }
        $this->collTblProdInfos = new ObjectCollection();
        $this->collTblProdInfos->setModel('\TblProdInfo');
    }

    /**
     * Gets an array of ChildTblProdInfo objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildTblGeneral is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildTblProdInfo[] List of ChildTblProdInfo objects
     * @throws PropelException
     */
    public function getTblProdInfos(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collTblProdInfosPartial && !$this->isNew();
        if (null === $this->collTblProdInfos || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collTblProdInfos) {
                // return empty collection
                $this->initTblProdInfos();
            } else {
                $collTblProdInfos = ChildTblProdInfoQuery::create(null, $criteria)
                    ->filterByTblGeneral($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collTblProdInfosPartial && count($collTblProdInfos)) {
                        $this->initTblProdInfos(false);

                        foreach ($collTblProdInfos as $obj) {
                            if (false == $this->collTblProdInfos->contains($obj)) {
                                $this->collTblProdInfos->append($obj);
                            }
                        }

                        $this->collTblProdInfosPartial = true;
                    }

                    return $collTblProdInfos;
                }

                if ($partial && $this->collTblProdInfos) {
                    foreach ($this->collTblProdInfos as $obj) {
                        if ($obj->isNew()) {
                            $collTblProdInfos[] = $obj;
                        }
                    }
                }

                $this->collTblProdInfos = $collTblProdInfos;
                $this->collTblProdInfosPartial = false;
            }
        }

        return $this->collTblProdInfos;
    }

    /**
     * Sets a collection of ChildTblProdInfo objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $tblProdInfos A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildTblGeneral The current object (for fluent API support)
     */
    public function setTblProdInfos(Collection $tblProdInfos, ConnectionInterface $con = null)
    {
        /** @var ChildTblProdInfo[] $tblProdInfosToDelete */
        $tblProdInfosToDelete = $this->getTblProdInfos(new Criteria(), $con)->diff($tblProdInfos);

        
        $this->tblProdInfosScheduledForDeletion = $tblProdInfosToDelete;

        foreach ($tblProdInfosToDelete as $tblProdInfoRemoved) {
            $tblProdInfoRemoved->setTblGeneral(null);
        }

        $this->collTblProdInfos = null;
        foreach ($tblProdInfos as $tblProdInfo) {
            $this->addTblProdInfo($tblProdInfo);
        }

        $this->collTblProdInfos = $tblProdInfos;
        $this->collTblProdInfosPartial = false;

        return $this;
    }

    /**
     * Returns the number of related TblProdInfo objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related TblProdInfo objects.
     * @throws PropelException
     */
    public function countTblProdInfos(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collTblProdInfosPartial && !$this->isNew();
        if (null === $this->collTblProdInfos || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collTblProdInfos) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getTblProdInfos());
            }

            $query = ChildTblProdInfoQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByTblGeneral($this)
                ->count($con);
        }

        return count($this->collTblProdInfos);
    }

    /**
     * Method called to associate a ChildTblProdInfo object to this object
     * through the ChildTblProdInfo foreign key attribute.
     *
     * @param  ChildTblProdInfo $l ChildTblProdInfo
     * @return $this|\TblGeneral The current object (for fluent API support)
     */
    public function addTblProdInfo(ChildTblProdInfo $l)
    {
        if ($this->collTblProdInfos === null) {
            $this->initTblProdInfos();
            $this->collTblProdInfosPartial = true;
        }

        if (!$this->collTblProdInfos->contains($l)) {
            $this->doAddTblProdInfo($l);

            if ($this->tblProdInfosScheduledForDeletion and $this->tblProdInfosScheduledForDeletion->contains($l)) {
                $this->tblProdInfosScheduledForDeletion->remove($this->tblProdInfosScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildTblProdInfo $tblProdInfo The ChildTblProdInfo object to add.
     */
    protected function doAddTblProdInfo(ChildTblProdInfo $tblProdInfo)
    {
        $this->collTblProdInfos[]= $tblProdInfo;
        $tblProdInfo->setTblGeneral($this);
    }

    /**
     * @param  ChildTblProdInfo $tblProdInfo The ChildTblProdInfo object to remove.
     * @return $this|ChildTblGeneral The current object (for fluent API support)
     */
    public function removeTblProdInfo(ChildTblProdInfo $tblProdInfo)
    {
        if ($this->getTblProdInfos()->contains($tblProdInfo)) {
            $pos = $this->collTblProdInfos->search($tblProdInfo);
            $this->collTblProdInfos->remove($pos);
            if (null === $this->tblProdInfosScheduledForDeletion) {
                $this->tblProdInfosScheduledForDeletion = clone $this->collTblProdInfos;
                $this->tblProdInfosScheduledForDeletion->clear();
            }
            $this->tblProdInfosScheduledForDeletion[]= clone $tblProdInfo;
            $tblProdInfo->setTblGeneral(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this TblGeneral is new, it will return
     * an empty collection; or if this TblGeneral has previously
     * been saved, it will retrieve related TblProdInfos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in TblGeneral.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildTblProdInfo[] List of ChildTblProdInfo objects
     */
    public function getTblProdInfosJoinTblEra(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildTblProdInfoQuery::create(null, $criteria);
        $query->joinWith('TblEra', $joinBehavior);

        return $this->getTblProdInfos($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this TblGeneral is new, it will return
     * an empty collection; or if this TblGeneral has previously
     * been saved, it will retrieve related TblProdInfos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in TblGeneral.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildTblProdInfo[] List of ChildTblProdInfo objects
     */
    public function getTblProdInfosJoinTblMenus(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildTblProdInfoQuery::create(null, $criteria);
        $query->joinWith('TblMenus', $joinBehavior);

        return $this->getTblProdInfos($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this TblGeneral is new, it will return
     * an empty collection; or if this TblGeneral has previously
     * been saved, it will retrieve related TblProdInfos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in TblGeneral.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildTblProdInfo[] List of ChildTblProdInfo objects
     */
    public function getTblProdInfosJoinTblProdPhotos(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildTblProdInfoQuery::create(null, $criteria);
        $query->joinWith('TblProdPhotos', $joinBehavior);

        return $this->getTblProdInfos($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this TblGeneral is new, it will return
     * an empty collection; or if this TblGeneral has previously
     * been saved, it will retrieve related TblProdInfos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in TblGeneral.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildTblProdInfo[] List of ChildTblProdInfo objects
     */
    public function getTblProdInfosJoinTblProdPrices(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildTblProdInfoQuery::create(null, $criteria);
        $query->joinWith('TblProdPrices', $joinBehavior);

        return $this->getTblProdInfos($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this TblGeneral is new, it will return
     * an empty collection; or if this TblGeneral has previously
     * been saved, it will retrieve related TblProdInfos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in TblGeneral.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildTblProdInfo[] List of ChildTblProdInfo objects
     */
    public function getTblProdInfosJoinTblProdPricing(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildTblProdInfoQuery::create(null, $criteria);
        $query->joinWith('TblProdPricing', $joinBehavior);

        return $this->getTblProdInfos($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this TblGeneral is new, it will return
     * an empty collection; or if this TblGeneral has previously
     * been saved, it will retrieve related TblProdInfos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in TblGeneral.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildTblProdInfo[] List of ChildTblProdInfo objects
     */
    public function getTblProdInfosJoinTblProdSmaller(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildTblProdInfoQuery::create(null, $criteria);
        $query->joinWith('TblProdSmaller', $joinBehavior);

        return $this->getTblProdInfos($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this TblGeneral is new, it will return
     * an empty collection; or if this TblGeneral has previously
     * been saved, it will retrieve related TblProdInfos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in TblGeneral.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildTblProdInfo[] List of ChildTblProdInfo objects
     */
    public function getTblProdInfosJoinTblShippingCategories(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildTblProdInfoQuery::create(null, $criteria);
        $query->joinWith('TblShippingCategories', $joinBehavior);

        return $this->getTblProdInfos($query, $con);
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        $this->prod_general = null;
        $this->prod_name = null;
        $this->prod_description = null;
        $this->prod_description_pa = null;
        $this->prod_description_m3 = null;
        $this->prod_keywords = null;
        $this->prod_keywords_pa = null;
        $this->prod_keywords_m3 = null;
        $this->prod_writeupkeywords = null;
        $this->prod_writeupkeywords_pa = null;
        $this->prod_writeupkeywords_m3 = null;
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
            if ($this->collTblProdInfos) {
                foreach ($this->collTblProdInfos as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collTblProdInfos = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(TblGeneralTableMap::DEFAULT_STRING_FORMAT);
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
