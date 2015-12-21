<?php

namespace Base;

use \TblShippingCountriesQuery as ChildTblShippingCountriesQuery;
use \Exception;
use \PDO;
use Map\TblShippingCountriesTableMap;
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
 * Base class that represents a row from the 'tbl_shipping_countries' table.
 *
 * 
 *
* @package    propel.generator..Base
*/
abstract class TblShippingCountries implements ActiveRecordInterface 
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\TblShippingCountriesTableMap';


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
     * The value for the cty_id field.
     * 
     * @var        int
     */
    protected $cty_id;

    /**
     * The value for the cty_name field.
     * 
     * @var        string
     */
    protected $cty_name;

    /**
     * The value for the cty_priority field.
     * 
     * @var        string
     */
    protected $cty_priority;

    /**
     * The value for the cty_economy field.
     * 
     * @var        string
     */
    protected $cty_economy;

    /**
     * The value for the zone_id field.
     * 
     * @var        int
     */
    protected $zone_id;

    /**
     * The value for the airparcel_firstkg field.
     * 
     * @var        string
     */
    protected $airparcel_firstkg;

    /**
     * The value for the airparcel_secondkg field.
     * 
     * @var        string
     */
    protected $airparcel_secondkg;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * Initializes internal state of Base\TblShippingCountries object.
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
     * Compares this with another <code>TblShippingCountries</code> instance.  If
     * <code>obj</code> is an instance of <code>TblShippingCountries</code>, delegates to
     * <code>equals(TblShippingCountries)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|TblShippingCountries The current object, for fluid interface
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
     * Get the [cty_id] column value.
     * 
     * @return int
     */
    public function getCtyId()
    {
        return $this->cty_id;
    }

    /**
     * Get the [cty_name] column value.
     * 
     * @return string
     */
    public function getCtyName()
    {
        return $this->cty_name;
    }

    /**
     * Get the [cty_priority] column value.
     * 
     * @return string
     */
    public function getCtyPriority()
    {
        return $this->cty_priority;
    }

    /**
     * Get the [cty_economy] column value.
     * 
     * @return string
     */
    public function getCtyEconomy()
    {
        return $this->cty_economy;
    }

    /**
     * Get the [zone_id] column value.
     * 
     * @return int
     */
    public function getZoneId()
    {
        return $this->zone_id;
    }

    /**
     * Get the [airparcel_firstkg] column value.
     * 
     * @return string
     */
    public function getAirparcelFirstkg()
    {
        return $this->airparcel_firstkg;
    }

    /**
     * Get the [airparcel_secondkg] column value.
     * 
     * @return string
     */
    public function getAirparcelSecondkg()
    {
        return $this->airparcel_secondkg;
    }

    /**
     * Set the value of [cty_id] column.
     * 
     * @param int $v new value
     * @return $this|\TblShippingCountries The current object (for fluent API support)
     */
    public function setCtyId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->cty_id !== $v) {
            $this->cty_id = $v;
            $this->modifiedColumns[TblShippingCountriesTableMap::COL_CTY_ID] = true;
        }

        return $this;
    } // setCtyId()

    /**
     * Set the value of [cty_name] column.
     * 
     * @param string $v new value
     * @return $this|\TblShippingCountries The current object (for fluent API support)
     */
    public function setCtyName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cty_name !== $v) {
            $this->cty_name = $v;
            $this->modifiedColumns[TblShippingCountriesTableMap::COL_CTY_NAME] = true;
        }

        return $this;
    } // setCtyName()

    /**
     * Set the value of [cty_priority] column.
     * 
     * @param string $v new value
     * @return $this|\TblShippingCountries The current object (for fluent API support)
     */
    public function setCtyPriority($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cty_priority !== $v) {
            $this->cty_priority = $v;
            $this->modifiedColumns[TblShippingCountriesTableMap::COL_CTY_PRIORITY] = true;
        }

        return $this;
    } // setCtyPriority()

    /**
     * Set the value of [cty_economy] column.
     * 
     * @param string $v new value
     * @return $this|\TblShippingCountries The current object (for fluent API support)
     */
    public function setCtyEconomy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cty_economy !== $v) {
            $this->cty_economy = $v;
            $this->modifiedColumns[TblShippingCountriesTableMap::COL_CTY_ECONOMY] = true;
        }

        return $this;
    } // setCtyEconomy()

    /**
     * Set the value of [zone_id] column.
     * 
     * @param int $v new value
     * @return $this|\TblShippingCountries The current object (for fluent API support)
     */
    public function setZoneId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->zone_id !== $v) {
            $this->zone_id = $v;
            $this->modifiedColumns[TblShippingCountriesTableMap::COL_ZONE_ID] = true;
        }

        return $this;
    } // setZoneId()

    /**
     * Set the value of [airparcel_firstkg] column.
     * 
     * @param string $v new value
     * @return $this|\TblShippingCountries The current object (for fluent API support)
     */
    public function setAirparcelFirstkg($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->airparcel_firstkg !== $v) {
            $this->airparcel_firstkg = $v;
            $this->modifiedColumns[TblShippingCountriesTableMap::COL_AIRPARCEL_FIRSTKG] = true;
        }

        return $this;
    } // setAirparcelFirstkg()

    /**
     * Set the value of [airparcel_secondkg] column.
     * 
     * @param string $v new value
     * @return $this|\TblShippingCountries The current object (for fluent API support)
     */
    public function setAirparcelSecondkg($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->airparcel_secondkg !== $v) {
            $this->airparcel_secondkg = $v;
            $this->modifiedColumns[TblShippingCountriesTableMap::COL_AIRPARCEL_SECONDKG] = true;
        }

        return $this;
    } // setAirparcelSecondkg()

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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : TblShippingCountriesTableMap::translateFieldName('CtyId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cty_id = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : TblShippingCountriesTableMap::translateFieldName('CtyName', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cty_name = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : TblShippingCountriesTableMap::translateFieldName('CtyPriority', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cty_priority = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : TblShippingCountriesTableMap::translateFieldName('CtyEconomy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->cty_economy = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : TblShippingCountriesTableMap::translateFieldName('ZoneId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->zone_id = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : TblShippingCountriesTableMap::translateFieldName('AirparcelFirstkg', TableMap::TYPE_PHPNAME, $indexType)];
            $this->airparcel_firstkg = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : TblShippingCountriesTableMap::translateFieldName('AirparcelSecondkg', TableMap::TYPE_PHPNAME, $indexType)];
            $this->airparcel_secondkg = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 7; // 7 = TblShippingCountriesTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\TblShippingCountries'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(TblShippingCountriesTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildTblShippingCountriesQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see TblShippingCountries::setDeleted()
     * @see TblShippingCountries::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(TblShippingCountriesTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildTblShippingCountriesQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(TblShippingCountriesTableMap::DATABASE_NAME);
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
                TblShippingCountriesTableMap::addInstanceToPool($this);
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

        $this->modifiedColumns[TblShippingCountriesTableMap::COL_CTY_ID] = true;
        if (null !== $this->cty_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . TblShippingCountriesTableMap::COL_CTY_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(TblShippingCountriesTableMap::COL_CTY_ID)) {
            $modifiedColumns[':p' . $index++]  = 'cty_id';
        }
        if ($this->isColumnModified(TblShippingCountriesTableMap::COL_CTY_NAME)) {
            $modifiedColumns[':p' . $index++]  = 'cty_name';
        }
        if ($this->isColumnModified(TblShippingCountriesTableMap::COL_CTY_PRIORITY)) {
            $modifiedColumns[':p' . $index++]  = 'cty_priority';
        }
        if ($this->isColumnModified(TblShippingCountriesTableMap::COL_CTY_ECONOMY)) {
            $modifiedColumns[':p' . $index++]  = 'cty_economy';
        }
        if ($this->isColumnModified(TblShippingCountriesTableMap::COL_ZONE_ID)) {
            $modifiedColumns[':p' . $index++]  = 'zone_id';
        }
        if ($this->isColumnModified(TblShippingCountriesTableMap::COL_AIRPARCEL_FIRSTKG)) {
            $modifiedColumns[':p' . $index++]  = 'airparcel_firstkg';
        }
        if ($this->isColumnModified(TblShippingCountriesTableMap::COL_AIRPARCEL_SECONDKG)) {
            $modifiedColumns[':p' . $index++]  = 'airparcel_secondkg';
        }

        $sql = sprintf(
            'INSERT INTO tbl_shipping_countries (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'cty_id':                        
                        $stmt->bindValue($identifier, $this->cty_id, PDO::PARAM_INT);
                        break;
                    case 'cty_name':                        
                        $stmt->bindValue($identifier, $this->cty_name, PDO::PARAM_STR);
                        break;
                    case 'cty_priority':                        
                        $stmt->bindValue($identifier, $this->cty_priority, PDO::PARAM_STR);
                        break;
                    case 'cty_economy':                        
                        $stmt->bindValue($identifier, $this->cty_economy, PDO::PARAM_STR);
                        break;
                    case 'zone_id':                        
                        $stmt->bindValue($identifier, $this->zone_id, PDO::PARAM_INT);
                        break;
                    case 'airparcel_firstkg':                        
                        $stmt->bindValue($identifier, $this->airparcel_firstkg, PDO::PARAM_STR);
                        break;
                    case 'airparcel_secondkg':                        
                        $stmt->bindValue($identifier, $this->airparcel_secondkg, PDO::PARAM_STR);
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
        $this->setCtyId($pk);

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
        $pos = TblShippingCountriesTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getCtyId();
                break;
            case 1:
                return $this->getCtyName();
                break;
            case 2:
                return $this->getCtyPriority();
                break;
            case 3:
                return $this->getCtyEconomy();
                break;
            case 4:
                return $this->getZoneId();
                break;
            case 5:
                return $this->getAirparcelFirstkg();
                break;
            case 6:
                return $this->getAirparcelSecondkg();
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

        if (isset($alreadyDumpedObjects['TblShippingCountries'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['TblShippingCountries'][$this->hashCode()] = true;
        $keys = TblShippingCountriesTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getCtyId(),
            $keys[1] => $this->getCtyName(),
            $keys[2] => $this->getCtyPriority(),
            $keys[3] => $this->getCtyEconomy(),
            $keys[4] => $this->getZoneId(),
            $keys[5] => $this->getAirparcelFirstkg(),
            $keys[6] => $this->getAirparcelSecondkg(),
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
     * @return $this|\TblShippingCountries
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = TblShippingCountriesTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\TblShippingCountries
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setCtyId($value);
                break;
            case 1:
                $this->setCtyName($value);
                break;
            case 2:
                $this->setCtyPriority($value);
                break;
            case 3:
                $this->setCtyEconomy($value);
                break;
            case 4:
                $this->setZoneId($value);
                break;
            case 5:
                $this->setAirparcelFirstkg($value);
                break;
            case 6:
                $this->setAirparcelSecondkg($value);
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
        $keys = TblShippingCountriesTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setCtyId($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setCtyName($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setCtyPriority($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setCtyEconomy($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setZoneId($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setAirparcelFirstkg($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setAirparcelSecondkg($arr[$keys[6]]);
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
     * @return $this|\TblShippingCountries The current object, for fluid interface
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
        $criteria = new Criteria(TblShippingCountriesTableMap::DATABASE_NAME);

        if ($this->isColumnModified(TblShippingCountriesTableMap::COL_CTY_ID)) {
            $criteria->add(TblShippingCountriesTableMap::COL_CTY_ID, $this->cty_id);
        }
        if ($this->isColumnModified(TblShippingCountriesTableMap::COL_CTY_NAME)) {
            $criteria->add(TblShippingCountriesTableMap::COL_CTY_NAME, $this->cty_name);
        }
        if ($this->isColumnModified(TblShippingCountriesTableMap::COL_CTY_PRIORITY)) {
            $criteria->add(TblShippingCountriesTableMap::COL_CTY_PRIORITY, $this->cty_priority);
        }
        if ($this->isColumnModified(TblShippingCountriesTableMap::COL_CTY_ECONOMY)) {
            $criteria->add(TblShippingCountriesTableMap::COL_CTY_ECONOMY, $this->cty_economy);
        }
        if ($this->isColumnModified(TblShippingCountriesTableMap::COL_ZONE_ID)) {
            $criteria->add(TblShippingCountriesTableMap::COL_ZONE_ID, $this->zone_id);
        }
        if ($this->isColumnModified(TblShippingCountriesTableMap::COL_AIRPARCEL_FIRSTKG)) {
            $criteria->add(TblShippingCountriesTableMap::COL_AIRPARCEL_FIRSTKG, $this->airparcel_firstkg);
        }
        if ($this->isColumnModified(TblShippingCountriesTableMap::COL_AIRPARCEL_SECONDKG)) {
            $criteria->add(TblShippingCountriesTableMap::COL_AIRPARCEL_SECONDKG, $this->airparcel_secondkg);
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
        $criteria = ChildTblShippingCountriesQuery::create();
        $criteria->add(TblShippingCountriesTableMap::COL_CTY_ID, $this->cty_id);

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
        $validPk = null !== $this->getCtyId();

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
        return $this->getCtyId();
    }

    /**
     * Generic method to set the primary key (cty_id column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setCtyId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getCtyId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \TblShippingCountries (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setCtyName($this->getCtyName());
        $copyObj->setCtyPriority($this->getCtyPriority());
        $copyObj->setCtyEconomy($this->getCtyEconomy());
        $copyObj->setZoneId($this->getZoneId());
        $copyObj->setAirparcelFirstkg($this->getAirparcelFirstkg());
        $copyObj->setAirparcelSecondkg($this->getAirparcelSecondkg());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setCtyId(NULL); // this is a auto-increment column, so set to default value
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
     * @return \TblShippingCountries Clone of current object.
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
        $this->cty_id = null;
        $this->cty_name = null;
        $this->cty_priority = null;
        $this->cty_economy = null;
        $this->zone_id = null;
        $this->airparcel_firstkg = null;
        $this->airparcel_secondkg = null;
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
        } // if ($deep)

    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(TblShippingCountriesTableMap::DEFAULT_STRING_FORMAT);
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
