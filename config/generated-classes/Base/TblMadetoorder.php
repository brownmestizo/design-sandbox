<?php

namespace Base;

use \TblMadetoorderQuery as ChildTblMadetoorderQuery;
use \Exception;
use \PDO;
use Map\TblMadetoorderTableMap;
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
 * Base class that represents a row from the 'tbl_madetoorder' table.
 *
 * 
 *
* @package    propel.generator..Base
*/
abstract class TblMadetoorder implements ActiveRecordInterface 
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\TblMadetoorderTableMap';


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
     * The value for the mad_id field.
     * 
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $mad_id;

    /**
     * The value for the mad_name field.
     * 
     * @var        string
     */
    protected $mad_name;

    /**
     * The value for the mad_email field.
     * 
     * @var        string
     */
    protected $mad_email;

    /**
     * The value for the mad_color field.
     * 
     * @var        string
     */
    protected $mad_color;

    /**
     * The value for the mad_length field.
     * 
     * @var        string
     */
    protected $mad_length;

    /**
     * The value for the mad_mark field.
     * 
     * @var        string
     */
    protected $mad_mark;

    /**
     * The value for the mad_rem field.
     * 
     * @var        string
     */
    protected $mad_rem;

    /**
     * The value for the mad_url field.
     * 
     * @var        string
     */
    protected $mad_url;

    /**
     * The value for the mad_photo field.
     * 
     * @var        string
     */
    protected $mad_photo;

    /**
     * The value for the mad_photo2 field.
     * 
     * @var        string
     */
    protected $mad_photo2;

    /**
     * The value for the mad_photo3 field.
     * 
     * @var        string
     */
    protected $mad_photo3;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see __construct()
     */
    public function applyDefaultValues()
    {
        $this->mad_id = 0;
    }

    /**
     * Initializes internal state of Base\TblMadetoorder object.
     * @see applyDefaults()
     */
    public function __construct()
    {
        $this->applyDefaultValues();
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
     * Compares this with another <code>TblMadetoorder</code> instance.  If
     * <code>obj</code> is an instance of <code>TblMadetoorder</code>, delegates to
     * <code>equals(TblMadetoorder)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|TblMadetoorder The current object, for fluid interface
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
     * Get the [mad_id] column value.
     * 
     * @return int
     */
    public function getMadId()
    {
        return $this->mad_id;
    }

    /**
     * Get the [mad_name] column value.
     * 
     * @return string
     */
    public function getMadName()
    {
        return $this->mad_name;
    }

    /**
     * Get the [mad_email] column value.
     * 
     * @return string
     */
    public function getMadEmail()
    {
        return $this->mad_email;
    }

    /**
     * Get the [mad_color] column value.
     * 
     * @return string
     */
    public function getMadColor()
    {
        return $this->mad_color;
    }

    /**
     * Get the [mad_length] column value.
     * 
     * @return string
     */
    public function getMadLength()
    {
        return $this->mad_length;
    }

    /**
     * Get the [mad_mark] column value.
     * 
     * @return string
     */
    public function getMadMark()
    {
        return $this->mad_mark;
    }

    /**
     * Get the [mad_rem] column value.
     * 
     * @return string
     */
    public function getMadRem()
    {
        return $this->mad_rem;
    }

    /**
     * Get the [mad_url] column value.
     * 
     * @return string
     */
    public function getMadUrl()
    {
        return $this->mad_url;
    }

    /**
     * Get the [mad_photo] column value.
     * 
     * @return string
     */
    public function getMadPhoto()
    {
        return $this->mad_photo;
    }

    /**
     * Get the [mad_photo2] column value.
     * 
     * @return string
     */
    public function getMadPhoto2()
    {
        return $this->mad_photo2;
    }

    /**
     * Get the [mad_photo3] column value.
     * 
     * @return string
     */
    public function getMadPhoto3()
    {
        return $this->mad_photo3;
    }

    /**
     * Set the value of [mad_id] column.
     * 
     * @param int $v new value
     * @return $this|\TblMadetoorder The current object (for fluent API support)
     */
    public function setMadId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->mad_id !== $v) {
            $this->mad_id = $v;
            $this->modifiedColumns[TblMadetoorderTableMap::COL_MAD_ID] = true;
        }

        return $this;
    } // setMadId()

    /**
     * Set the value of [mad_name] column.
     * 
     * @param string $v new value
     * @return $this|\TblMadetoorder The current object (for fluent API support)
     */
    public function setMadName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->mad_name !== $v) {
            $this->mad_name = $v;
            $this->modifiedColumns[TblMadetoorderTableMap::COL_MAD_NAME] = true;
        }

        return $this;
    } // setMadName()

    /**
     * Set the value of [mad_email] column.
     * 
     * @param string $v new value
     * @return $this|\TblMadetoorder The current object (for fluent API support)
     */
    public function setMadEmail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->mad_email !== $v) {
            $this->mad_email = $v;
            $this->modifiedColumns[TblMadetoorderTableMap::COL_MAD_EMAIL] = true;
        }

        return $this;
    } // setMadEmail()

    /**
     * Set the value of [mad_color] column.
     * 
     * @param string $v new value
     * @return $this|\TblMadetoorder The current object (for fluent API support)
     */
    public function setMadColor($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->mad_color !== $v) {
            $this->mad_color = $v;
            $this->modifiedColumns[TblMadetoorderTableMap::COL_MAD_COLOR] = true;
        }

        return $this;
    } // setMadColor()

    /**
     * Set the value of [mad_length] column.
     * 
     * @param string $v new value
     * @return $this|\TblMadetoorder The current object (for fluent API support)
     */
    public function setMadLength($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->mad_length !== $v) {
            $this->mad_length = $v;
            $this->modifiedColumns[TblMadetoorderTableMap::COL_MAD_LENGTH] = true;
        }

        return $this;
    } // setMadLength()

    /**
     * Set the value of [mad_mark] column.
     * 
     * @param string $v new value
     * @return $this|\TblMadetoorder The current object (for fluent API support)
     */
    public function setMadMark($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->mad_mark !== $v) {
            $this->mad_mark = $v;
            $this->modifiedColumns[TblMadetoorderTableMap::COL_MAD_MARK] = true;
        }

        return $this;
    } // setMadMark()

    /**
     * Set the value of [mad_rem] column.
     * 
     * @param string $v new value
     * @return $this|\TblMadetoorder The current object (for fluent API support)
     */
    public function setMadRem($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->mad_rem !== $v) {
            $this->mad_rem = $v;
            $this->modifiedColumns[TblMadetoorderTableMap::COL_MAD_REM] = true;
        }

        return $this;
    } // setMadRem()

    /**
     * Set the value of [mad_url] column.
     * 
     * @param string $v new value
     * @return $this|\TblMadetoorder The current object (for fluent API support)
     */
    public function setMadUrl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->mad_url !== $v) {
            $this->mad_url = $v;
            $this->modifiedColumns[TblMadetoorderTableMap::COL_MAD_URL] = true;
        }

        return $this;
    } // setMadUrl()

    /**
     * Set the value of [mad_photo] column.
     * 
     * @param string $v new value
     * @return $this|\TblMadetoorder The current object (for fluent API support)
     */
    public function setMadPhoto($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->mad_photo !== $v) {
            $this->mad_photo = $v;
            $this->modifiedColumns[TblMadetoorderTableMap::COL_MAD_PHOTO] = true;
        }

        return $this;
    } // setMadPhoto()

    /**
     * Set the value of [mad_photo2] column.
     * 
     * @param string $v new value
     * @return $this|\TblMadetoorder The current object (for fluent API support)
     */
    public function setMadPhoto2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->mad_photo2 !== $v) {
            $this->mad_photo2 = $v;
            $this->modifiedColumns[TblMadetoorderTableMap::COL_MAD_PHOTO2] = true;
        }

        return $this;
    } // setMadPhoto2()

    /**
     * Set the value of [mad_photo3] column.
     * 
     * @param string $v new value
     * @return $this|\TblMadetoorder The current object (for fluent API support)
     */
    public function setMadPhoto3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->mad_photo3 !== $v) {
            $this->mad_photo3 = $v;
            $this->modifiedColumns[TblMadetoorderTableMap::COL_MAD_PHOTO3] = true;
        }

        return $this;
    } // setMadPhoto3()

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
            if ($this->mad_id !== 0) {
                return false;
            }

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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : TblMadetoorderTableMap::translateFieldName('MadId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->mad_id = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : TblMadetoorderTableMap::translateFieldName('MadName', TableMap::TYPE_PHPNAME, $indexType)];
            $this->mad_name = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : TblMadetoorderTableMap::translateFieldName('MadEmail', TableMap::TYPE_PHPNAME, $indexType)];
            $this->mad_email = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : TblMadetoorderTableMap::translateFieldName('MadColor', TableMap::TYPE_PHPNAME, $indexType)];
            $this->mad_color = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : TblMadetoorderTableMap::translateFieldName('MadLength', TableMap::TYPE_PHPNAME, $indexType)];
            $this->mad_length = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : TblMadetoorderTableMap::translateFieldName('MadMark', TableMap::TYPE_PHPNAME, $indexType)];
            $this->mad_mark = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : TblMadetoorderTableMap::translateFieldName('MadRem', TableMap::TYPE_PHPNAME, $indexType)];
            $this->mad_rem = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : TblMadetoorderTableMap::translateFieldName('MadUrl', TableMap::TYPE_PHPNAME, $indexType)];
            $this->mad_url = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : TblMadetoorderTableMap::translateFieldName('MadPhoto', TableMap::TYPE_PHPNAME, $indexType)];
            $this->mad_photo = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : TblMadetoorderTableMap::translateFieldName('MadPhoto2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->mad_photo2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : TblMadetoorderTableMap::translateFieldName('MadPhoto3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->mad_photo3 = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 11; // 11 = TblMadetoorderTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\TblMadetoorder'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(TblMadetoorderTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildTblMadetoorderQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see TblMadetoorder::setDeleted()
     * @see TblMadetoorder::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(TblMadetoorderTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildTblMadetoorderQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(TblMadetoorderTableMap::DATABASE_NAME);
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
                TblMadetoorderTableMap::addInstanceToPool($this);
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


         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(TblMadetoorderTableMap::COL_MAD_ID)) {
            $modifiedColumns[':p' . $index++]  = 'mad_id';
        }
        if ($this->isColumnModified(TblMadetoorderTableMap::COL_MAD_NAME)) {
            $modifiedColumns[':p' . $index++]  = 'mad_name';
        }
        if ($this->isColumnModified(TblMadetoorderTableMap::COL_MAD_EMAIL)) {
            $modifiedColumns[':p' . $index++]  = 'mad_email';
        }
        if ($this->isColumnModified(TblMadetoorderTableMap::COL_MAD_COLOR)) {
            $modifiedColumns[':p' . $index++]  = 'mad_color';
        }
        if ($this->isColumnModified(TblMadetoorderTableMap::COL_MAD_LENGTH)) {
            $modifiedColumns[':p' . $index++]  = 'mad_length';
        }
        if ($this->isColumnModified(TblMadetoorderTableMap::COL_MAD_MARK)) {
            $modifiedColumns[':p' . $index++]  = 'mad_mark';
        }
        if ($this->isColumnModified(TblMadetoorderTableMap::COL_MAD_REM)) {
            $modifiedColumns[':p' . $index++]  = 'mad_rem';
        }
        if ($this->isColumnModified(TblMadetoorderTableMap::COL_MAD_URL)) {
            $modifiedColumns[':p' . $index++]  = 'mad_url';
        }
        if ($this->isColumnModified(TblMadetoorderTableMap::COL_MAD_PHOTO)) {
            $modifiedColumns[':p' . $index++]  = 'mad_photo';
        }
        if ($this->isColumnModified(TblMadetoorderTableMap::COL_MAD_PHOTO2)) {
            $modifiedColumns[':p' . $index++]  = 'mad_photo2';
        }
        if ($this->isColumnModified(TblMadetoorderTableMap::COL_MAD_PHOTO3)) {
            $modifiedColumns[':p' . $index++]  = 'mad_photo3';
        }

        $sql = sprintf(
            'INSERT INTO tbl_madetoorder (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'mad_id':                        
                        $stmt->bindValue($identifier, $this->mad_id, PDO::PARAM_INT);
                        break;
                    case 'mad_name':                        
                        $stmt->bindValue($identifier, $this->mad_name, PDO::PARAM_STR);
                        break;
                    case 'mad_email':                        
                        $stmt->bindValue($identifier, $this->mad_email, PDO::PARAM_STR);
                        break;
                    case 'mad_color':                        
                        $stmt->bindValue($identifier, $this->mad_color, PDO::PARAM_STR);
                        break;
                    case 'mad_length':                        
                        $stmt->bindValue($identifier, $this->mad_length, PDO::PARAM_STR);
                        break;
                    case 'mad_mark':                        
                        $stmt->bindValue($identifier, $this->mad_mark, PDO::PARAM_STR);
                        break;
                    case 'mad_rem':                        
                        $stmt->bindValue($identifier, $this->mad_rem, PDO::PARAM_STR);
                        break;
                    case 'mad_url':                        
                        $stmt->bindValue($identifier, $this->mad_url, PDO::PARAM_STR);
                        break;
                    case 'mad_photo':                        
                        $stmt->bindValue($identifier, $this->mad_photo, PDO::PARAM_STR);
                        break;
                    case 'mad_photo2':                        
                        $stmt->bindValue($identifier, $this->mad_photo2, PDO::PARAM_STR);
                        break;
                    case 'mad_photo3':                        
                        $stmt->bindValue($identifier, $this->mad_photo3, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), 0, $e);
        }

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
        $pos = TblMadetoorderTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getMadId();
                break;
            case 1:
                return $this->getMadName();
                break;
            case 2:
                return $this->getMadEmail();
                break;
            case 3:
                return $this->getMadColor();
                break;
            case 4:
                return $this->getMadLength();
                break;
            case 5:
                return $this->getMadMark();
                break;
            case 6:
                return $this->getMadRem();
                break;
            case 7:
                return $this->getMadUrl();
                break;
            case 8:
                return $this->getMadPhoto();
                break;
            case 9:
                return $this->getMadPhoto2();
                break;
            case 10:
                return $this->getMadPhoto3();
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
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = TableMap::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
    {

        if (isset($alreadyDumpedObjects['TblMadetoorder'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['TblMadetoorder'][$this->hashCode()] = true;
        $keys = TblMadetoorderTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getMadId(),
            $keys[1] => $this->getMadName(),
            $keys[2] => $this->getMadEmail(),
            $keys[3] => $this->getMadColor(),
            $keys[4] => $this->getMadLength(),
            $keys[5] => $this->getMadMark(),
            $keys[6] => $this->getMadRem(),
            $keys[7] => $this->getMadUrl(),
            $keys[8] => $this->getMadPhoto(),
            $keys[9] => $this->getMadPhoto2(),
            $keys[10] => $this->getMadPhoto3(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
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
     * @return $this|\TblMadetoorder
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = TblMadetoorderTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\TblMadetoorder
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setMadId($value);
                break;
            case 1:
                $this->setMadName($value);
                break;
            case 2:
                $this->setMadEmail($value);
                break;
            case 3:
                $this->setMadColor($value);
                break;
            case 4:
                $this->setMadLength($value);
                break;
            case 5:
                $this->setMadMark($value);
                break;
            case 6:
                $this->setMadRem($value);
                break;
            case 7:
                $this->setMadUrl($value);
                break;
            case 8:
                $this->setMadPhoto($value);
                break;
            case 9:
                $this->setMadPhoto2($value);
                break;
            case 10:
                $this->setMadPhoto3($value);
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
        $keys = TblMadetoorderTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setMadId($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setMadName($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setMadEmail($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setMadColor($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setMadLength($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setMadMark($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setMadRem($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setMadUrl($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setMadPhoto($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setMadPhoto2($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setMadPhoto3($arr[$keys[10]]);
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
     * @return $this|\TblMadetoorder The current object, for fluid interface
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
        $criteria = new Criteria(TblMadetoorderTableMap::DATABASE_NAME);

        if ($this->isColumnModified(TblMadetoorderTableMap::COL_MAD_ID)) {
            $criteria->add(TblMadetoorderTableMap::COL_MAD_ID, $this->mad_id);
        }
        if ($this->isColumnModified(TblMadetoorderTableMap::COL_MAD_NAME)) {
            $criteria->add(TblMadetoorderTableMap::COL_MAD_NAME, $this->mad_name);
        }
        if ($this->isColumnModified(TblMadetoorderTableMap::COL_MAD_EMAIL)) {
            $criteria->add(TblMadetoorderTableMap::COL_MAD_EMAIL, $this->mad_email);
        }
        if ($this->isColumnModified(TblMadetoorderTableMap::COL_MAD_COLOR)) {
            $criteria->add(TblMadetoorderTableMap::COL_MAD_COLOR, $this->mad_color);
        }
        if ($this->isColumnModified(TblMadetoorderTableMap::COL_MAD_LENGTH)) {
            $criteria->add(TblMadetoorderTableMap::COL_MAD_LENGTH, $this->mad_length);
        }
        if ($this->isColumnModified(TblMadetoorderTableMap::COL_MAD_MARK)) {
            $criteria->add(TblMadetoorderTableMap::COL_MAD_MARK, $this->mad_mark);
        }
        if ($this->isColumnModified(TblMadetoorderTableMap::COL_MAD_REM)) {
            $criteria->add(TblMadetoorderTableMap::COL_MAD_REM, $this->mad_rem);
        }
        if ($this->isColumnModified(TblMadetoorderTableMap::COL_MAD_URL)) {
            $criteria->add(TblMadetoorderTableMap::COL_MAD_URL, $this->mad_url);
        }
        if ($this->isColumnModified(TblMadetoorderTableMap::COL_MAD_PHOTO)) {
            $criteria->add(TblMadetoorderTableMap::COL_MAD_PHOTO, $this->mad_photo);
        }
        if ($this->isColumnModified(TblMadetoorderTableMap::COL_MAD_PHOTO2)) {
            $criteria->add(TblMadetoorderTableMap::COL_MAD_PHOTO2, $this->mad_photo2);
        }
        if ($this->isColumnModified(TblMadetoorderTableMap::COL_MAD_PHOTO3)) {
            $criteria->add(TblMadetoorderTableMap::COL_MAD_PHOTO3, $this->mad_photo3);
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
        $criteria = ChildTblMadetoorderQuery::create();
        $criteria->add(TblMadetoorderTableMap::COL_MAD_ID, $this->mad_id);

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
        $validPk = null !== $this->getMadId();

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
        return $this->getMadId();
    }

    /**
     * Generic method to set the primary key (mad_id column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setMadId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getMadId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \TblMadetoorder (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setMadId($this->getMadId());
        $copyObj->setMadName($this->getMadName());
        $copyObj->setMadEmail($this->getMadEmail());
        $copyObj->setMadColor($this->getMadColor());
        $copyObj->setMadLength($this->getMadLength());
        $copyObj->setMadMark($this->getMadMark());
        $copyObj->setMadRem($this->getMadRem());
        $copyObj->setMadUrl($this->getMadUrl());
        $copyObj->setMadPhoto($this->getMadPhoto());
        $copyObj->setMadPhoto2($this->getMadPhoto2());
        $copyObj->setMadPhoto3($this->getMadPhoto3());
        if ($makeNew) {
            $copyObj->setNew(true);
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
     * @return \TblMadetoorder Clone of current object.
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
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        $this->mad_id = null;
        $this->mad_name = null;
        $this->mad_email = null;
        $this->mad_color = null;
        $this->mad_length = null;
        $this->mad_mark = null;
        $this->mad_rem = null;
        $this->mad_url = null;
        $this->mad_photo = null;
        $this->mad_photo2 = null;
        $this->mad_photo3 = null;
        $this->alreadyInSave = false;
        $this->clearAllReferences();
        $this->applyDefaultValues();
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
        } // if ($deep)

    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(TblMadetoorderTableMap::DEFAULT_STRING_FORMAT);
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
