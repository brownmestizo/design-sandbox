<?php

namespace Base;

use \TblMenus as ChildTblMenus;
use \TblMenusQuery as ChildTblMenusQuery;
use \TblProdInfo as ChildTblProdInfo;
use \TblProdInfoQuery as ChildTblProdInfoQuery;
use \Exception;
use \PDO;
use Map\TblMenusTableMap;
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
 * Base class that represents a row from the 'tbl_menus' table.
 *
 * 
 *
* @package    propel.generator..Base
*/
abstract class TblMenus implements ActiveRecordInterface 
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\TblMenusTableMap';


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
     * The value for the menu_id field.
     * 
     * @var        int
     */
    protected $menu_id;

    /**
     * The value for the menu_alias field.
     * 
     * @var        string
     */
    protected $menu_alias;

    /**
     * The value for the menu_name field.
     * 
     * @var        string
     */
    protected $menu_name;

    /**
     * The value for the menu_status field.
     * 
     * @var        string
     */
    protected $menu_status;

    /**
     * The value for the menu_title field.
     * 
     * @var        string
     */
    protected $menu_title;

    /**
     * The value for the menu_description field.
     * 
     * @var        string
     */
    protected $menu_description;

    /**
     * The value for the menu_writeup field.
     * 
     * @var        string
     */
    protected $menu_writeup;

    /**
     * The value for the menu_status_pa field.
     * 
     * @var        string
     */
    protected $menu_status_pa;

    /**
     * The value for the menu_description_pa field.
     * 
     * @var        string
     */
    protected $menu_description_pa;

    /**
     * The value for the menu_writeup_pa field.
     * 
     * @var        string
     */
    protected $menu_writeup_pa;

    /**
     * The value for the menu_status_m3 field.
     * 
     * @var        string
     */
    protected $menu_status_m3;

    /**
     * The value for the menu_description_m3 field.
     * 
     * @var        string
     */
    protected $menu_description_m3;

    /**
     * The value for the menu_writeup_m3 field.
     * 
     * @var        string
     */
    protected $menu_writeup_m3;

    /**
     * The value for the menu_writeupkeywords field.
     * 
     * @var        string
     */
    protected $menu_writeupkeywords;

    /**
     * The value for the menu_writeupkeywords_pa field.
     * 
     * @var        string
     */
    protected $menu_writeupkeywords_pa;

    /**
     * The value for the menu_writeupkeywords_m3 field.
     * 
     * @var        string
     */
    protected $menu_writeupkeywords_m3;

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
     * Initializes internal state of Base\TblMenus object.
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
     * Compares this with another <code>TblMenus</code> instance.  If
     * <code>obj</code> is an instance of <code>TblMenus</code>, delegates to
     * <code>equals(TblMenus)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|TblMenus The current object, for fluid interface
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

        return array_keys(get_object_vars($this));
    }

    /**
     * Get the [menu_id] column value.
     * 
     * @return int
     */
    public function getMenuId()
    {
        return $this->menu_id;
    }

    /**
     * Get the [menu_alias] column value.
     * 
     * @return string
     */
    public function getMenuAlias()
    {
        return $this->menu_alias;
    }

    /**
     * Get the [menu_name] column value.
     * 
     * @return string
     */
    public function getMenuName()
    {
        return $this->menu_name;
    }

    /**
     * Get the [menu_status] column value.
     * 
     * @return string
     */
    public function getMenuStatus()
    {
        return $this->menu_status;
    }

    /**
     * Get the [menu_title] column value.
     * 
     * @return string
     */
    public function getMenuTitle()
    {
        return $this->menu_title;
    }

    /**
     * Get the [menu_description] column value.
     * 
     * @return string
     */
    public function getMenuDescription()
    {
        return $this->menu_description;
    }

    /**
     * Get the [menu_writeup] column value.
     * 
     * @return string
     */
    public function getMenuWriteup()
    {
        return $this->menu_writeup;
    }

    /**
     * Get the [menu_status_pa] column value.
     * 
     * @return string
     */
    public function getMenuStatusPa()
    {
        return $this->menu_status_pa;
    }

    /**
     * Get the [menu_description_pa] column value.
     * 
     * @return string
     */
    public function getMenuDescriptionPa()
    {
        return $this->menu_description_pa;
    }

    /**
     * Get the [menu_writeup_pa] column value.
     * 
     * @return string
     */
    public function getMenuWriteupPa()
    {
        return $this->menu_writeup_pa;
    }

    /**
     * Get the [menu_status_m3] column value.
     * 
     * @return string
     */
    public function getMenuStatusM3()
    {
        return $this->menu_status_m3;
    }

    /**
     * Get the [menu_description_m3] column value.
     * 
     * @return string
     */
    public function getMenuDescriptionM3()
    {
        return $this->menu_description_m3;
    }

    /**
     * Get the [menu_writeup_m3] column value.
     * 
     * @return string
     */
    public function getMenuWriteupM3()
    {
        return $this->menu_writeup_m3;
    }

    /**
     * Get the [menu_writeupkeywords] column value.
     * 
     * @return string
     */
    public function getMenuWriteupkeywords()
    {
        return $this->menu_writeupkeywords;
    }

    /**
     * Get the [menu_writeupkeywords_pa] column value.
     * 
     * @return string
     */
    public function getMenuWriteupkeywordsPa()
    {
        return $this->menu_writeupkeywords_pa;
    }

    /**
     * Get the [menu_writeupkeywords_m3] column value.
     * 
     * @return string
     */
    public function getMenuWriteupkeywordsM3()
    {
        return $this->menu_writeupkeywords_m3;
    }

    /**
     * Set the value of [menu_id] column.
     * 
     * @param int $v new value
     * @return $this|\TblMenus The current object (for fluent API support)
     */
    public function setMenuId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->menu_id !== $v) {
            $this->menu_id = $v;
            $this->modifiedColumns[TblMenusTableMap::COL_MENU_ID] = true;
        }

        return $this;
    } // setMenuId()

    /**
     * Set the value of [menu_alias] column.
     * 
     * @param string $v new value
     * @return $this|\TblMenus The current object (for fluent API support)
     */
    public function setMenuAlias($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->menu_alias !== $v) {
            $this->menu_alias = $v;
            $this->modifiedColumns[TblMenusTableMap::COL_MENU_ALIAS] = true;
        }

        return $this;
    } // setMenuAlias()

    /**
     * Set the value of [menu_name] column.
     * 
     * @param string $v new value
     * @return $this|\TblMenus The current object (for fluent API support)
     */
    public function setMenuName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->menu_name !== $v) {
            $this->menu_name = $v;
            $this->modifiedColumns[TblMenusTableMap::COL_MENU_NAME] = true;
        }

        return $this;
    } // setMenuName()

    /**
     * Set the value of [menu_status] column.
     * 
     * @param string $v new value
     * @return $this|\TblMenus The current object (for fluent API support)
     */
    public function setMenuStatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->menu_status !== $v) {
            $this->menu_status = $v;
            $this->modifiedColumns[TblMenusTableMap::COL_MENU_STATUS] = true;
        }

        return $this;
    } // setMenuStatus()

    /**
     * Set the value of [menu_title] column.
     * 
     * @param string $v new value
     * @return $this|\TblMenus The current object (for fluent API support)
     */
    public function setMenuTitle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->menu_title !== $v) {
            $this->menu_title = $v;
            $this->modifiedColumns[TblMenusTableMap::COL_MENU_TITLE] = true;
        }

        return $this;
    } // setMenuTitle()

    /**
     * Set the value of [menu_description] column.
     * 
     * @param string $v new value
     * @return $this|\TblMenus The current object (for fluent API support)
     */
    public function setMenuDescription($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->menu_description !== $v) {
            $this->menu_description = $v;
            $this->modifiedColumns[TblMenusTableMap::COL_MENU_DESCRIPTION] = true;
        }

        return $this;
    } // setMenuDescription()

    /**
     * Set the value of [menu_writeup] column.
     * 
     * @param string $v new value
     * @return $this|\TblMenus The current object (for fluent API support)
     */
    public function setMenuWriteup($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->menu_writeup !== $v) {
            $this->menu_writeup = $v;
            $this->modifiedColumns[TblMenusTableMap::COL_MENU_WRITEUP] = true;
        }

        return $this;
    } // setMenuWriteup()

    /**
     * Set the value of [menu_status_pa] column.
     * 
     * @param string $v new value
     * @return $this|\TblMenus The current object (for fluent API support)
     */
    public function setMenuStatusPa($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->menu_status_pa !== $v) {
            $this->menu_status_pa = $v;
            $this->modifiedColumns[TblMenusTableMap::COL_MENU_STATUS_PA] = true;
        }

        return $this;
    } // setMenuStatusPa()

    /**
     * Set the value of [menu_description_pa] column.
     * 
     * @param string $v new value
     * @return $this|\TblMenus The current object (for fluent API support)
     */
    public function setMenuDescriptionPa($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->menu_description_pa !== $v) {
            $this->menu_description_pa = $v;
            $this->modifiedColumns[TblMenusTableMap::COL_MENU_DESCRIPTION_PA] = true;
        }

        return $this;
    } // setMenuDescriptionPa()

    /**
     * Set the value of [menu_writeup_pa] column.
     * 
     * @param string $v new value
     * @return $this|\TblMenus The current object (for fluent API support)
     */
    public function setMenuWriteupPa($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->menu_writeup_pa !== $v) {
            $this->menu_writeup_pa = $v;
            $this->modifiedColumns[TblMenusTableMap::COL_MENU_WRITEUP_PA] = true;
        }

        return $this;
    } // setMenuWriteupPa()

    /**
     * Set the value of [menu_status_m3] column.
     * 
     * @param string $v new value
     * @return $this|\TblMenus The current object (for fluent API support)
     */
    public function setMenuStatusM3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->menu_status_m3 !== $v) {
            $this->menu_status_m3 = $v;
            $this->modifiedColumns[TblMenusTableMap::COL_MENU_STATUS_M3] = true;
        }

        return $this;
    } // setMenuStatusM3()

    /**
     * Set the value of [menu_description_m3] column.
     * 
     * @param string $v new value
     * @return $this|\TblMenus The current object (for fluent API support)
     */
    public function setMenuDescriptionM3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->menu_description_m3 !== $v) {
            $this->menu_description_m3 = $v;
            $this->modifiedColumns[TblMenusTableMap::COL_MENU_DESCRIPTION_M3] = true;
        }

        return $this;
    } // setMenuDescriptionM3()

    /**
     * Set the value of [menu_writeup_m3] column.
     * 
     * @param string $v new value
     * @return $this|\TblMenus The current object (for fluent API support)
     */
    public function setMenuWriteupM3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->menu_writeup_m3 !== $v) {
            $this->menu_writeup_m3 = $v;
            $this->modifiedColumns[TblMenusTableMap::COL_MENU_WRITEUP_M3] = true;
        }

        return $this;
    } // setMenuWriteupM3()

    /**
     * Set the value of [menu_writeupkeywords] column.
     * 
     * @param string $v new value
     * @return $this|\TblMenus The current object (for fluent API support)
     */
    public function setMenuWriteupkeywords($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->menu_writeupkeywords !== $v) {
            $this->menu_writeupkeywords = $v;
            $this->modifiedColumns[TblMenusTableMap::COL_MENU_WRITEUPKEYWORDS] = true;
        }

        return $this;
    } // setMenuWriteupkeywords()

    /**
     * Set the value of [menu_writeupkeywords_pa] column.
     * 
     * @param string $v new value
     * @return $this|\TblMenus The current object (for fluent API support)
     */
    public function setMenuWriteupkeywordsPa($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->menu_writeupkeywords_pa !== $v) {
            $this->menu_writeupkeywords_pa = $v;
            $this->modifiedColumns[TblMenusTableMap::COL_MENU_WRITEUPKEYWORDS_PA] = true;
        }

        return $this;
    } // setMenuWriteupkeywordsPa()

    /**
     * Set the value of [menu_writeupkeywords_m3] column.
     * 
     * @param string $v new value
     * @return $this|\TblMenus The current object (for fluent API support)
     */
    public function setMenuWriteupkeywordsM3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->menu_writeupkeywords_m3 !== $v) {
            $this->menu_writeupkeywords_m3 = $v;
            $this->modifiedColumns[TblMenusTableMap::COL_MENU_WRITEUPKEYWORDS_M3] = true;
        }

        return $this;
    } // setMenuWriteupkeywordsM3()

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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : TblMenusTableMap::translateFieldName('MenuId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->menu_id = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : TblMenusTableMap::translateFieldName('MenuAlias', TableMap::TYPE_PHPNAME, $indexType)];
            $this->menu_alias = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : TblMenusTableMap::translateFieldName('MenuName', TableMap::TYPE_PHPNAME, $indexType)];
            $this->menu_name = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : TblMenusTableMap::translateFieldName('MenuStatus', TableMap::TYPE_PHPNAME, $indexType)];
            $this->menu_status = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : TblMenusTableMap::translateFieldName('MenuTitle', TableMap::TYPE_PHPNAME, $indexType)];
            $this->menu_title = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : TblMenusTableMap::translateFieldName('MenuDescription', TableMap::TYPE_PHPNAME, $indexType)];
            $this->menu_description = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : TblMenusTableMap::translateFieldName('MenuWriteup', TableMap::TYPE_PHPNAME, $indexType)];
            $this->menu_writeup = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : TblMenusTableMap::translateFieldName('MenuStatusPa', TableMap::TYPE_PHPNAME, $indexType)];
            $this->menu_status_pa = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : TblMenusTableMap::translateFieldName('MenuDescriptionPa', TableMap::TYPE_PHPNAME, $indexType)];
            $this->menu_description_pa = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : TblMenusTableMap::translateFieldName('MenuWriteupPa', TableMap::TYPE_PHPNAME, $indexType)];
            $this->menu_writeup_pa = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : TblMenusTableMap::translateFieldName('MenuStatusM3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->menu_status_m3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : TblMenusTableMap::translateFieldName('MenuDescriptionM3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->menu_description_m3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : TblMenusTableMap::translateFieldName('MenuWriteupM3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->menu_writeup_m3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : TblMenusTableMap::translateFieldName('MenuWriteupkeywords', TableMap::TYPE_PHPNAME, $indexType)];
            $this->menu_writeupkeywords = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : TblMenusTableMap::translateFieldName('MenuWriteupkeywordsPa', TableMap::TYPE_PHPNAME, $indexType)];
            $this->menu_writeupkeywords_pa = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : TblMenusTableMap::translateFieldName('MenuWriteupkeywordsM3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->menu_writeupkeywords_m3 = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 16; // 16 = TblMenusTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\TblMenus'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(TblMenusTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildTblMenusQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see TblMenus::setDeleted()
     * @see TblMenus::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(TblMenusTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildTblMenusQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(TblMenusTableMap::DATABASE_NAME);
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
                TblMenusTableMap::addInstanceToPool($this);
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

        $this->modifiedColumns[TblMenusTableMap::COL_MENU_ID] = true;
        if (null !== $this->menu_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . TblMenusTableMap::COL_MENU_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(TblMenusTableMap::COL_MENU_ID)) {
            $modifiedColumns[':p' . $index++]  = 'menu_id';
        }
        if ($this->isColumnModified(TblMenusTableMap::COL_MENU_ALIAS)) {
            $modifiedColumns[':p' . $index++]  = 'menu_alias';
        }
        if ($this->isColumnModified(TblMenusTableMap::COL_MENU_NAME)) {
            $modifiedColumns[':p' . $index++]  = 'menu_name';
        }
        if ($this->isColumnModified(TblMenusTableMap::COL_MENU_STATUS)) {
            $modifiedColumns[':p' . $index++]  = 'menu_status';
        }
        if ($this->isColumnModified(TblMenusTableMap::COL_MENU_TITLE)) {
            $modifiedColumns[':p' . $index++]  = 'menu_title';
        }
        if ($this->isColumnModified(TblMenusTableMap::COL_MENU_DESCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = 'menu_description';
        }
        if ($this->isColumnModified(TblMenusTableMap::COL_MENU_WRITEUP)) {
            $modifiedColumns[':p' . $index++]  = 'menu_writeup';
        }
        if ($this->isColumnModified(TblMenusTableMap::COL_MENU_STATUS_PA)) {
            $modifiedColumns[':p' . $index++]  = 'menu_status_pa';
        }
        if ($this->isColumnModified(TblMenusTableMap::COL_MENU_DESCRIPTION_PA)) {
            $modifiedColumns[':p' . $index++]  = 'menu_description_pa';
        }
        if ($this->isColumnModified(TblMenusTableMap::COL_MENU_WRITEUP_PA)) {
            $modifiedColumns[':p' . $index++]  = 'menu_writeup_pa';
        }
        if ($this->isColumnModified(TblMenusTableMap::COL_MENU_STATUS_M3)) {
            $modifiedColumns[':p' . $index++]  = 'menu_status_m3';
        }
        if ($this->isColumnModified(TblMenusTableMap::COL_MENU_DESCRIPTION_M3)) {
            $modifiedColumns[':p' . $index++]  = 'menu_description_m3';
        }
        if ($this->isColumnModified(TblMenusTableMap::COL_MENU_WRITEUP_M3)) {
            $modifiedColumns[':p' . $index++]  = 'menu_writeup_m3';
        }
        if ($this->isColumnModified(TblMenusTableMap::COL_MENU_WRITEUPKEYWORDS)) {
            $modifiedColumns[':p' . $index++]  = 'menu_writeupkeywords';
        }
        if ($this->isColumnModified(TblMenusTableMap::COL_MENU_WRITEUPKEYWORDS_PA)) {
            $modifiedColumns[':p' . $index++]  = 'menu_writeupkeywords_pa';
        }
        if ($this->isColumnModified(TblMenusTableMap::COL_MENU_WRITEUPKEYWORDS_M3)) {
            $modifiedColumns[':p' . $index++]  = 'menu_writeupkeywords_m3';
        }

        $sql = sprintf(
            'INSERT INTO tbl_menus (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'menu_id':                        
                        $stmt->bindValue($identifier, $this->menu_id, PDO::PARAM_INT);
                        break;
                    case 'menu_alias':                        
                        $stmt->bindValue($identifier, $this->menu_alias, PDO::PARAM_STR);
                        break;
                    case 'menu_name':                        
                        $stmt->bindValue($identifier, $this->menu_name, PDO::PARAM_STR);
                        break;
                    case 'menu_status':                        
                        $stmt->bindValue($identifier, $this->menu_status, PDO::PARAM_STR);
                        break;
                    case 'menu_title':                        
                        $stmt->bindValue($identifier, $this->menu_title, PDO::PARAM_STR);
                        break;
                    case 'menu_description':                        
                        $stmt->bindValue($identifier, $this->menu_description, PDO::PARAM_STR);
                        break;
                    case 'menu_writeup':                        
                        $stmt->bindValue($identifier, $this->menu_writeup, PDO::PARAM_STR);
                        break;
                    case 'menu_status_pa':                        
                        $stmt->bindValue($identifier, $this->menu_status_pa, PDO::PARAM_STR);
                        break;
                    case 'menu_description_pa':                        
                        $stmt->bindValue($identifier, $this->menu_description_pa, PDO::PARAM_STR);
                        break;
                    case 'menu_writeup_pa':                        
                        $stmt->bindValue($identifier, $this->menu_writeup_pa, PDO::PARAM_STR);
                        break;
                    case 'menu_status_m3':                        
                        $stmt->bindValue($identifier, $this->menu_status_m3, PDO::PARAM_STR);
                        break;
                    case 'menu_description_m3':                        
                        $stmt->bindValue($identifier, $this->menu_description_m3, PDO::PARAM_STR);
                        break;
                    case 'menu_writeup_m3':                        
                        $stmt->bindValue($identifier, $this->menu_writeup_m3, PDO::PARAM_STR);
                        break;
                    case 'menu_writeupkeywords':                        
                        $stmt->bindValue($identifier, $this->menu_writeupkeywords, PDO::PARAM_STR);
                        break;
                    case 'menu_writeupkeywords_pa':                        
                        $stmt->bindValue($identifier, $this->menu_writeupkeywords_pa, PDO::PARAM_STR);
                        break;
                    case 'menu_writeupkeywords_m3':                        
                        $stmt->bindValue($identifier, $this->menu_writeupkeywords_m3, PDO::PARAM_STR);
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
        $this->setMenuId($pk);

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
        $pos = TblMenusTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getMenuId();
                break;
            case 1:
                return $this->getMenuAlias();
                break;
            case 2:
                return $this->getMenuName();
                break;
            case 3:
                return $this->getMenuStatus();
                break;
            case 4:
                return $this->getMenuTitle();
                break;
            case 5:
                return $this->getMenuDescription();
                break;
            case 6:
                return $this->getMenuWriteup();
                break;
            case 7:
                return $this->getMenuStatusPa();
                break;
            case 8:
                return $this->getMenuDescriptionPa();
                break;
            case 9:
                return $this->getMenuWriteupPa();
                break;
            case 10:
                return $this->getMenuStatusM3();
                break;
            case 11:
                return $this->getMenuDescriptionM3();
                break;
            case 12:
                return $this->getMenuWriteupM3();
                break;
            case 13:
                return $this->getMenuWriteupkeywords();
                break;
            case 14:
                return $this->getMenuWriteupkeywordsPa();
                break;
            case 15:
                return $this->getMenuWriteupkeywordsM3();
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

        if (isset($alreadyDumpedObjects['TblMenus'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['TblMenus'][$this->hashCode()] = true;
        $keys = TblMenusTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getMenuId(),
            $keys[1] => $this->getMenuAlias(),
            $keys[2] => $this->getMenuName(),
            $keys[3] => $this->getMenuStatus(),
            $keys[4] => $this->getMenuTitle(),
            $keys[5] => $this->getMenuDescription(),
            $keys[6] => $this->getMenuWriteup(),
            $keys[7] => $this->getMenuStatusPa(),
            $keys[8] => $this->getMenuDescriptionPa(),
            $keys[9] => $this->getMenuWriteupPa(),
            $keys[10] => $this->getMenuStatusM3(),
            $keys[11] => $this->getMenuDescriptionM3(),
            $keys[12] => $this->getMenuWriteupM3(),
            $keys[13] => $this->getMenuWriteupkeywords(),
            $keys[14] => $this->getMenuWriteupkeywordsPa(),
            $keys[15] => $this->getMenuWriteupkeywordsM3(),
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
     * @return $this|\TblMenus
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = TblMenusTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\TblMenus
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setMenuId($value);
                break;
            case 1:
                $this->setMenuAlias($value);
                break;
            case 2:
                $this->setMenuName($value);
                break;
            case 3:
                $this->setMenuStatus($value);
                break;
            case 4:
                $this->setMenuTitle($value);
                break;
            case 5:
                $this->setMenuDescription($value);
                break;
            case 6:
                $this->setMenuWriteup($value);
                break;
            case 7:
                $this->setMenuStatusPa($value);
                break;
            case 8:
                $this->setMenuDescriptionPa($value);
                break;
            case 9:
                $this->setMenuWriteupPa($value);
                break;
            case 10:
                $this->setMenuStatusM3($value);
                break;
            case 11:
                $this->setMenuDescriptionM3($value);
                break;
            case 12:
                $this->setMenuWriteupM3($value);
                break;
            case 13:
                $this->setMenuWriteupkeywords($value);
                break;
            case 14:
                $this->setMenuWriteupkeywordsPa($value);
                break;
            case 15:
                $this->setMenuWriteupkeywordsM3($value);
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
        $keys = TblMenusTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setMenuId($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setMenuAlias($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setMenuName($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setMenuStatus($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setMenuTitle($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setMenuDescription($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setMenuWriteup($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setMenuStatusPa($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setMenuDescriptionPa($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setMenuWriteupPa($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setMenuStatusM3($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setMenuDescriptionM3($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setMenuWriteupM3($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setMenuWriteupkeywords($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setMenuWriteupkeywordsPa($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setMenuWriteupkeywordsM3($arr[$keys[15]]);
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
     * @return $this|\TblMenus The current object, for fluid interface
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
        $criteria = new Criteria(TblMenusTableMap::DATABASE_NAME);

        if ($this->isColumnModified(TblMenusTableMap::COL_MENU_ID)) {
            $criteria->add(TblMenusTableMap::COL_MENU_ID, $this->menu_id);
        }
        if ($this->isColumnModified(TblMenusTableMap::COL_MENU_ALIAS)) {
            $criteria->add(TblMenusTableMap::COL_MENU_ALIAS, $this->menu_alias);
        }
        if ($this->isColumnModified(TblMenusTableMap::COL_MENU_NAME)) {
            $criteria->add(TblMenusTableMap::COL_MENU_NAME, $this->menu_name);
        }
        if ($this->isColumnModified(TblMenusTableMap::COL_MENU_STATUS)) {
            $criteria->add(TblMenusTableMap::COL_MENU_STATUS, $this->menu_status);
        }
        if ($this->isColumnModified(TblMenusTableMap::COL_MENU_TITLE)) {
            $criteria->add(TblMenusTableMap::COL_MENU_TITLE, $this->menu_title);
        }
        if ($this->isColumnModified(TblMenusTableMap::COL_MENU_DESCRIPTION)) {
            $criteria->add(TblMenusTableMap::COL_MENU_DESCRIPTION, $this->menu_description);
        }
        if ($this->isColumnModified(TblMenusTableMap::COL_MENU_WRITEUP)) {
            $criteria->add(TblMenusTableMap::COL_MENU_WRITEUP, $this->menu_writeup);
        }
        if ($this->isColumnModified(TblMenusTableMap::COL_MENU_STATUS_PA)) {
            $criteria->add(TblMenusTableMap::COL_MENU_STATUS_PA, $this->menu_status_pa);
        }
        if ($this->isColumnModified(TblMenusTableMap::COL_MENU_DESCRIPTION_PA)) {
            $criteria->add(TblMenusTableMap::COL_MENU_DESCRIPTION_PA, $this->menu_description_pa);
        }
        if ($this->isColumnModified(TblMenusTableMap::COL_MENU_WRITEUP_PA)) {
            $criteria->add(TblMenusTableMap::COL_MENU_WRITEUP_PA, $this->menu_writeup_pa);
        }
        if ($this->isColumnModified(TblMenusTableMap::COL_MENU_STATUS_M3)) {
            $criteria->add(TblMenusTableMap::COL_MENU_STATUS_M3, $this->menu_status_m3);
        }
        if ($this->isColumnModified(TblMenusTableMap::COL_MENU_DESCRIPTION_M3)) {
            $criteria->add(TblMenusTableMap::COL_MENU_DESCRIPTION_M3, $this->menu_description_m3);
        }
        if ($this->isColumnModified(TblMenusTableMap::COL_MENU_WRITEUP_M3)) {
            $criteria->add(TblMenusTableMap::COL_MENU_WRITEUP_M3, $this->menu_writeup_m3);
        }
        if ($this->isColumnModified(TblMenusTableMap::COL_MENU_WRITEUPKEYWORDS)) {
            $criteria->add(TblMenusTableMap::COL_MENU_WRITEUPKEYWORDS, $this->menu_writeupkeywords);
        }
        if ($this->isColumnModified(TblMenusTableMap::COL_MENU_WRITEUPKEYWORDS_PA)) {
            $criteria->add(TblMenusTableMap::COL_MENU_WRITEUPKEYWORDS_PA, $this->menu_writeupkeywords_pa);
        }
        if ($this->isColumnModified(TblMenusTableMap::COL_MENU_WRITEUPKEYWORDS_M3)) {
            $criteria->add(TblMenusTableMap::COL_MENU_WRITEUPKEYWORDS_M3, $this->menu_writeupkeywords_m3);
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
        $criteria = ChildTblMenusQuery::create();
        $criteria->add(TblMenusTableMap::COL_MENU_ID, $this->menu_id);

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
        $validPk = null !== $this->getMenuId();

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
        return $this->getMenuId();
    }

    /**
     * Generic method to set the primary key (menu_id column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setMenuId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getMenuId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \TblMenus (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setMenuAlias($this->getMenuAlias());
        $copyObj->setMenuName($this->getMenuName());
        $copyObj->setMenuStatus($this->getMenuStatus());
        $copyObj->setMenuTitle($this->getMenuTitle());
        $copyObj->setMenuDescription($this->getMenuDescription());
        $copyObj->setMenuWriteup($this->getMenuWriteup());
        $copyObj->setMenuStatusPa($this->getMenuStatusPa());
        $copyObj->setMenuDescriptionPa($this->getMenuDescriptionPa());
        $copyObj->setMenuWriteupPa($this->getMenuWriteupPa());
        $copyObj->setMenuStatusM3($this->getMenuStatusM3());
        $copyObj->setMenuDescriptionM3($this->getMenuDescriptionM3());
        $copyObj->setMenuWriteupM3($this->getMenuWriteupM3());
        $copyObj->setMenuWriteupkeywords($this->getMenuWriteupkeywords());
        $copyObj->setMenuWriteupkeywordsPa($this->getMenuWriteupkeywordsPa());
        $copyObj->setMenuWriteupkeywordsM3($this->getMenuWriteupkeywordsM3());

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
            $copyObj->setMenuId(NULL); // this is a auto-increment column, so set to default value
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
     * @return \TblMenus Clone of current object.
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
     * If this ChildTblMenus is new, it will return
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
                    ->filterByTblMenus($this)
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
     * @return $this|ChildTblMenus The current object (for fluent API support)
     */
    public function setTblProdInfos(Collection $tblProdInfos, ConnectionInterface $con = null)
    {
        /** @var ChildTblProdInfo[] $tblProdInfosToDelete */
        $tblProdInfosToDelete = $this->getTblProdInfos(new Criteria(), $con)->diff($tblProdInfos);

        
        $this->tblProdInfosScheduledForDeletion = $tblProdInfosToDelete;

        foreach ($tblProdInfosToDelete as $tblProdInfoRemoved) {
            $tblProdInfoRemoved->setTblMenus(null);
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
                ->filterByTblMenus($this)
                ->count($con);
        }

        return count($this->collTblProdInfos);
    }

    /**
     * Method called to associate a ChildTblProdInfo object to this object
     * through the ChildTblProdInfo foreign key attribute.
     *
     * @param  ChildTblProdInfo $l ChildTblProdInfo
     * @return $this|\TblMenus The current object (for fluent API support)
     */
    public function addTblProdInfo(ChildTblProdInfo $l)
    {
        if ($this->collTblProdInfos === null) {
            $this->initTblProdInfos();
            $this->collTblProdInfosPartial = true;
        }

        if (!$this->collTblProdInfos->contains($l)) {
            $this->doAddTblProdInfo($l);
        }

        return $this;
    }

    /**
     * @param ChildTblProdInfo $tblProdInfo The ChildTblProdInfo object to add.
     */
    protected function doAddTblProdInfo(ChildTblProdInfo $tblProdInfo)
    {
        $this->collTblProdInfos[]= $tblProdInfo;
        $tblProdInfo->setTblMenus($this);
    }

    /**
     * @param  ChildTblProdInfo $tblProdInfo The ChildTblProdInfo object to remove.
     * @return $this|ChildTblMenus The current object (for fluent API support)
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
            $tblProdInfo->setTblMenus(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this TblMenus is new, it will return
     * an empty collection; or if this TblMenus has previously
     * been saved, it will retrieve related TblProdInfos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in TblMenus.
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
     * Otherwise if this TblMenus is new, it will return
     * an empty collection; or if this TblMenus has previously
     * been saved, it will retrieve related TblProdInfos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in TblMenus.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildTblProdInfo[] List of ChildTblProdInfo objects
     */
    public function getTblProdInfosJoinTblGeneral(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildTblProdInfoQuery::create(null, $criteria);
        $query->joinWith('TblGeneral', $joinBehavior);

        return $this->getTblProdInfos($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this TblMenus is new, it will return
     * an empty collection; or if this TblMenus has previously
     * been saved, it will retrieve related TblProdInfos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in TblMenus.
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
     * Otherwise if this TblMenus is new, it will return
     * an empty collection; or if this TblMenus has previously
     * been saved, it will retrieve related TblProdInfos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in TblMenus.
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
     * Otherwise if this TblMenus is new, it will return
     * an empty collection; or if this TblMenus has previously
     * been saved, it will retrieve related TblProdInfos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in TblMenus.
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
     * Otherwise if this TblMenus is new, it will return
     * an empty collection; or if this TblMenus has previously
     * been saved, it will retrieve related TblProdInfos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in TblMenus.
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
     * Otherwise if this TblMenus is new, it will return
     * an empty collection; or if this TblMenus has previously
     * been saved, it will retrieve related TblProdInfos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in TblMenus.
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
        $this->menu_id = null;
        $this->menu_alias = null;
        $this->menu_name = null;
        $this->menu_status = null;
        $this->menu_title = null;
        $this->menu_description = null;
        $this->menu_writeup = null;
        $this->menu_status_pa = null;
        $this->menu_description_pa = null;
        $this->menu_writeup_pa = null;
        $this->menu_status_m3 = null;
        $this->menu_description_m3 = null;
        $this->menu_writeup_m3 = null;
        $this->menu_writeupkeywords = null;
        $this->menu_writeupkeywords_pa = null;
        $this->menu_writeupkeywords_m3 = null;
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
        return (string) $this->exportTo(TblMenusTableMap::DEFAULT_STRING_FORMAT);
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
