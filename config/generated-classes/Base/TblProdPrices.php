<?php

namespace Base;

use \TblProdInfo as ChildTblProdInfo;
use \TblProdInfoQuery as ChildTblProdInfoQuery;
use \TblProdPricesQuery as ChildTblProdPricesQuery;
use \Exception;
use \PDO;
use Map\TblProdPricesTableMap;
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
 * Base class that represents a row from the 'tbl_prod_prices' table.
 *
 * 
 *
* @package    propel.generator..Base
*/
abstract class TblProdPrices implements ActiveRecordInterface 
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\TblProdPricesTableMap';


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
     * The value for the prod_normalprice field.
     * 
     * @var        string
     */
    protected $prod_normalprice;

    /**
     * The value for the prod_salesprice field.
     * 
     * @var        string
     */
    protected $prod_salesprice;

    /**
     * The value for the prod_shipping_asia field.
     * 
     * @var        string
     */
    protected $prod_shipping_asia;

    /**
     * The value for the prod_shipping_europe field.
     * 
     * @var        string
     */
    protected $prod_shipping_europe;

    /**
     * The value for the prod_shipping_usa field.
     * 
     * @var        string
     */
    protected $prod_shipping_usa;

    /**
     * The value for the prod_shipping_canada field.
     * 
     * @var        string
     */
    protected $prod_shipping_canada;

    /**
     * The value for the prod_shipping_au field.
     * 
     * @var        string
     */
    protected $prod_shipping_au;

    /**
     * The value for the prod_shipping_asia_parcel field.
     * 
     * @var        string
     */
    protected $prod_shipping_asia_parcel;

    /**
     * The value for the prod_shipping_europe_parcel field.
     * 
     * @var        string
     */
    protected $prod_shipping_europe_parcel;

    /**
     * The value for the prod_shipping_usa_parcel field.
     * 
     * @var        string
     */
    protected $prod_shipping_usa_parcel;

    /**
     * The value for the prod_shipping_canada_parcel field.
     * 
     * @var        string
     */
    protected $prod_shipping_canada_parcel;

    /**
     * The value for the prod_shipping_au_parcel field.
     * 
     * @var        string
     */
    protected $prod_shipping_au_parcel;

    /**
     * The value for the prod_customprice field.
     * 
     * @var        string
     */
    protected $prod_customprice;

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
     * Initializes internal state of Base\TblProdPrices object.
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
     * Compares this with another <code>TblProdPrices</code> instance.  If
     * <code>obj</code> is an instance of <code>TblProdPrices</code>, delegates to
     * <code>equals(TblProdPrices)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|TblProdPrices The current object, for fluid interface
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
     * Get the [prod_normalprice] column value.
     * 
     * @return string
     */
    public function getProdNormalprice()
    {
        return $this->prod_normalprice;
    }

    /**
     * Get the [prod_salesprice] column value.
     * 
     * @return string
     */
    public function getProdSalesprice()
    {
        return $this->prod_salesprice;
    }

    /**
     * Get the [prod_shipping_asia] column value.
     * 
     * @return string
     */
    public function getProdShippingAsia()
    {
        return $this->prod_shipping_asia;
    }

    /**
     * Get the [prod_shipping_europe] column value.
     * 
     * @return string
     */
    public function getProdShippingEurope()
    {
        return $this->prod_shipping_europe;
    }

    /**
     * Get the [prod_shipping_usa] column value.
     * 
     * @return string
     */
    public function getProdShippingUsa()
    {
        return $this->prod_shipping_usa;
    }

    /**
     * Get the [prod_shipping_canada] column value.
     * 
     * @return string
     */
    public function getProdShippingCanada()
    {
        return $this->prod_shipping_canada;
    }

    /**
     * Get the [prod_shipping_au] column value.
     * 
     * @return string
     */
    public function getProdShippingAu()
    {
        return $this->prod_shipping_au;
    }

    /**
     * Get the [prod_shipping_asia_parcel] column value.
     * 
     * @return string
     */
    public function getProdShippingAsiaParcel()
    {
        return $this->prod_shipping_asia_parcel;
    }

    /**
     * Get the [prod_shipping_europe_parcel] column value.
     * 
     * @return string
     */
    public function getProdShippingEuropeParcel()
    {
        return $this->prod_shipping_europe_parcel;
    }

    /**
     * Get the [prod_shipping_usa_parcel] column value.
     * 
     * @return string
     */
    public function getProdShippingUsaParcel()
    {
        return $this->prod_shipping_usa_parcel;
    }

    /**
     * Get the [prod_shipping_canada_parcel] column value.
     * 
     * @return string
     */
    public function getProdShippingCanadaParcel()
    {
        return $this->prod_shipping_canada_parcel;
    }

    /**
     * Get the [prod_shipping_au_parcel] column value.
     * 
     * @return string
     */
    public function getProdShippingAuParcel()
    {
        return $this->prod_shipping_au_parcel;
    }

    /**
     * Get the [prod_customprice] column value.
     * 
     * @return string
     */
    public function getProdCustomprice()
    {
        return $this->prod_customprice;
    }

    /**
     * Set the value of [prod_id] column.
     * 
     * @param int $v new value
     * @return $this|\TblProdPrices The current object (for fluent API support)
     */
    public function setProdId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->prod_id !== $v) {
            $this->prod_id = $v;
            $this->modifiedColumns[TblProdPricesTableMap::COL_PROD_ID] = true;
        }

        if ($this->singleTblProdInfo !== null && $this->singleTblProdInfo->getProdId() !== $v) {
            $this->singleTblProdInfo = null;
        }

        return $this;
    } // setProdId()

    /**
     * Set the value of [prod_normalprice] column.
     * 
     * @param string $v new value
     * @return $this|\TblProdPrices The current object (for fluent API support)
     */
    public function setProdNormalprice($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_normalprice !== $v) {
            $this->prod_normalprice = $v;
            $this->modifiedColumns[TblProdPricesTableMap::COL_PROD_NORMALPRICE] = true;
        }

        return $this;
    } // setProdNormalprice()

    /**
     * Set the value of [prod_salesprice] column.
     * 
     * @param string $v new value
     * @return $this|\TblProdPrices The current object (for fluent API support)
     */
    public function setProdSalesprice($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_salesprice !== $v) {
            $this->prod_salesprice = $v;
            $this->modifiedColumns[TblProdPricesTableMap::COL_PROD_SALESPRICE] = true;
        }

        return $this;
    } // setProdSalesprice()

    /**
     * Set the value of [prod_shipping_asia] column.
     * 
     * @param string $v new value
     * @return $this|\TblProdPrices The current object (for fluent API support)
     */
    public function setProdShippingAsia($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_shipping_asia !== $v) {
            $this->prod_shipping_asia = $v;
            $this->modifiedColumns[TblProdPricesTableMap::COL_PROD_SHIPPING_ASIA] = true;
        }

        return $this;
    } // setProdShippingAsia()

    /**
     * Set the value of [prod_shipping_europe] column.
     * 
     * @param string $v new value
     * @return $this|\TblProdPrices The current object (for fluent API support)
     */
    public function setProdShippingEurope($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_shipping_europe !== $v) {
            $this->prod_shipping_europe = $v;
            $this->modifiedColumns[TblProdPricesTableMap::COL_PROD_SHIPPING_EUROPE] = true;
        }

        return $this;
    } // setProdShippingEurope()

    /**
     * Set the value of [prod_shipping_usa] column.
     * 
     * @param string $v new value
     * @return $this|\TblProdPrices The current object (for fluent API support)
     */
    public function setProdShippingUsa($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_shipping_usa !== $v) {
            $this->prod_shipping_usa = $v;
            $this->modifiedColumns[TblProdPricesTableMap::COL_PROD_SHIPPING_USA] = true;
        }

        return $this;
    } // setProdShippingUsa()

    /**
     * Set the value of [prod_shipping_canada] column.
     * 
     * @param string $v new value
     * @return $this|\TblProdPrices The current object (for fluent API support)
     */
    public function setProdShippingCanada($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_shipping_canada !== $v) {
            $this->prod_shipping_canada = $v;
            $this->modifiedColumns[TblProdPricesTableMap::COL_PROD_SHIPPING_CANADA] = true;
        }

        return $this;
    } // setProdShippingCanada()

    /**
     * Set the value of [prod_shipping_au] column.
     * 
     * @param string $v new value
     * @return $this|\TblProdPrices The current object (for fluent API support)
     */
    public function setProdShippingAu($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_shipping_au !== $v) {
            $this->prod_shipping_au = $v;
            $this->modifiedColumns[TblProdPricesTableMap::COL_PROD_SHIPPING_AU] = true;
        }

        return $this;
    } // setProdShippingAu()

    /**
     * Set the value of [prod_shipping_asia_parcel] column.
     * 
     * @param string $v new value
     * @return $this|\TblProdPrices The current object (for fluent API support)
     */
    public function setProdShippingAsiaParcel($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_shipping_asia_parcel !== $v) {
            $this->prod_shipping_asia_parcel = $v;
            $this->modifiedColumns[TblProdPricesTableMap::COL_PROD_SHIPPING_ASIA_PARCEL] = true;
        }

        return $this;
    } // setProdShippingAsiaParcel()

    /**
     * Set the value of [prod_shipping_europe_parcel] column.
     * 
     * @param string $v new value
     * @return $this|\TblProdPrices The current object (for fluent API support)
     */
    public function setProdShippingEuropeParcel($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_shipping_europe_parcel !== $v) {
            $this->prod_shipping_europe_parcel = $v;
            $this->modifiedColumns[TblProdPricesTableMap::COL_PROD_SHIPPING_EUROPE_PARCEL] = true;
        }

        return $this;
    } // setProdShippingEuropeParcel()

    /**
     * Set the value of [prod_shipping_usa_parcel] column.
     * 
     * @param string $v new value
     * @return $this|\TblProdPrices The current object (for fluent API support)
     */
    public function setProdShippingUsaParcel($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_shipping_usa_parcel !== $v) {
            $this->prod_shipping_usa_parcel = $v;
            $this->modifiedColumns[TblProdPricesTableMap::COL_PROD_SHIPPING_USA_PARCEL] = true;
        }

        return $this;
    } // setProdShippingUsaParcel()

    /**
     * Set the value of [prod_shipping_canada_parcel] column.
     * 
     * @param string $v new value
     * @return $this|\TblProdPrices The current object (for fluent API support)
     */
    public function setProdShippingCanadaParcel($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_shipping_canada_parcel !== $v) {
            $this->prod_shipping_canada_parcel = $v;
            $this->modifiedColumns[TblProdPricesTableMap::COL_PROD_SHIPPING_CANADA_PARCEL] = true;
        }

        return $this;
    } // setProdShippingCanadaParcel()

    /**
     * Set the value of [prod_shipping_au_parcel] column.
     * 
     * @param string $v new value
     * @return $this|\TblProdPrices The current object (for fluent API support)
     */
    public function setProdShippingAuParcel($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_shipping_au_parcel !== $v) {
            $this->prod_shipping_au_parcel = $v;
            $this->modifiedColumns[TblProdPricesTableMap::COL_PROD_SHIPPING_AU_PARCEL] = true;
        }

        return $this;
    } // setProdShippingAuParcel()

    /**
     * Set the value of [prod_customprice] column.
     * 
     * @param string $v new value
     * @return $this|\TblProdPrices The current object (for fluent API support)
     */
    public function setProdCustomprice($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_customprice !== $v) {
            $this->prod_customprice = $v;
            $this->modifiedColumns[TblProdPricesTableMap::COL_PROD_CUSTOMPRICE] = true;
        }

        return $this;
    } // setProdCustomprice()

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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : TblProdPricesTableMap::translateFieldName('ProdId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_id = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : TblProdPricesTableMap::translateFieldName('ProdNormalprice', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_normalprice = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : TblProdPricesTableMap::translateFieldName('ProdSalesprice', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_salesprice = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : TblProdPricesTableMap::translateFieldName('ProdShippingAsia', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_shipping_asia = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : TblProdPricesTableMap::translateFieldName('ProdShippingEurope', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_shipping_europe = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : TblProdPricesTableMap::translateFieldName('ProdShippingUsa', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_shipping_usa = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : TblProdPricesTableMap::translateFieldName('ProdShippingCanada', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_shipping_canada = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : TblProdPricesTableMap::translateFieldName('ProdShippingAu', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_shipping_au = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : TblProdPricesTableMap::translateFieldName('ProdShippingAsiaParcel', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_shipping_asia_parcel = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : TblProdPricesTableMap::translateFieldName('ProdShippingEuropeParcel', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_shipping_europe_parcel = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : TblProdPricesTableMap::translateFieldName('ProdShippingUsaParcel', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_shipping_usa_parcel = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : TblProdPricesTableMap::translateFieldName('ProdShippingCanadaParcel', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_shipping_canada_parcel = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : TblProdPricesTableMap::translateFieldName('ProdShippingAuParcel', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_shipping_au_parcel = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : TblProdPricesTableMap::translateFieldName('ProdCustomprice', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_customprice = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 14; // 14 = TblProdPricesTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\TblProdPrices'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(TblProdPricesTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildTblProdPricesQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see TblProdPrices::setDeleted()
     * @see TblProdPrices::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(TblProdPricesTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildTblProdPricesQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(TblProdPricesTableMap::DATABASE_NAME);
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
                TblProdPricesTableMap::addInstanceToPool($this);
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

            if ($this->singleTblProdInfo !== null) {
                if ($this->singleTblProdInfo->isModified() || $this->singleTblProdInfo->isNew()) {
                    $affectedRows += $this->singleTblProdInfo->save($con);
                }
                $this->setTblProdInfo($this->singleTblProdInfo);
            }

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

        $this->modifiedColumns[TblProdPricesTableMap::COL_PROD_ID] = true;

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(TblProdPricesTableMap::COL_PROD_ID)) {
            $modifiedColumns[':p' . $index++]  = 'prod_id';
        }
        if ($this->isColumnModified(TblProdPricesTableMap::COL_PROD_NORMALPRICE)) {
            $modifiedColumns[':p' . $index++]  = 'prod_normalprice';
        }
        if ($this->isColumnModified(TblProdPricesTableMap::COL_PROD_SALESPRICE)) {
            $modifiedColumns[':p' . $index++]  = 'prod_salesprice';
        }
        if ($this->isColumnModified(TblProdPricesTableMap::COL_PROD_SHIPPING_ASIA)) {
            $modifiedColumns[':p' . $index++]  = 'prod_shipping_asia';
        }
        if ($this->isColumnModified(TblProdPricesTableMap::COL_PROD_SHIPPING_EUROPE)) {
            $modifiedColumns[':p' . $index++]  = 'prod_shipping_europe';
        }
        if ($this->isColumnModified(TblProdPricesTableMap::COL_PROD_SHIPPING_USA)) {
            $modifiedColumns[':p' . $index++]  = 'prod_shipping_usa';
        }
        if ($this->isColumnModified(TblProdPricesTableMap::COL_PROD_SHIPPING_CANADA)) {
            $modifiedColumns[':p' . $index++]  = 'prod_shipping_canada';
        }
        if ($this->isColumnModified(TblProdPricesTableMap::COL_PROD_SHIPPING_AU)) {
            $modifiedColumns[':p' . $index++]  = 'prod_shipping_au';
        }
        if ($this->isColumnModified(TblProdPricesTableMap::COL_PROD_SHIPPING_ASIA_PARCEL)) {
            $modifiedColumns[':p' . $index++]  = 'prod_shipping_asia_parcel';
        }
        if ($this->isColumnModified(TblProdPricesTableMap::COL_PROD_SHIPPING_EUROPE_PARCEL)) {
            $modifiedColumns[':p' . $index++]  = 'prod_shipping_europe_parcel';
        }
        if ($this->isColumnModified(TblProdPricesTableMap::COL_PROD_SHIPPING_USA_PARCEL)) {
            $modifiedColumns[':p' . $index++]  = 'prod_shipping_usa_parcel';
        }
        if ($this->isColumnModified(TblProdPricesTableMap::COL_PROD_SHIPPING_CANADA_PARCEL)) {
            $modifiedColumns[':p' . $index++]  = 'prod_shipping_canada_parcel';
        }
        if ($this->isColumnModified(TblProdPricesTableMap::COL_PROD_SHIPPING_AU_PARCEL)) {
            $modifiedColumns[':p' . $index++]  = 'prod_shipping_au_parcel';
        }
        if ($this->isColumnModified(TblProdPricesTableMap::COL_PROD_CUSTOMPRICE)) {
            $modifiedColumns[':p' . $index++]  = 'prod_customprice';
        }

        $sql = sprintf(
            'INSERT INTO tbl_prod_prices (%s) VALUES (%s)',
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
                    case 'prod_normalprice':                        
                        $stmt->bindValue($identifier, $this->prod_normalprice, PDO::PARAM_STR);
                        break;
                    case 'prod_salesprice':                        
                        $stmt->bindValue($identifier, $this->prod_salesprice, PDO::PARAM_STR);
                        break;
                    case 'prod_shipping_asia':                        
                        $stmt->bindValue($identifier, $this->prod_shipping_asia, PDO::PARAM_STR);
                        break;
                    case 'prod_shipping_europe':                        
                        $stmt->bindValue($identifier, $this->prod_shipping_europe, PDO::PARAM_STR);
                        break;
                    case 'prod_shipping_usa':                        
                        $stmt->bindValue($identifier, $this->prod_shipping_usa, PDO::PARAM_STR);
                        break;
                    case 'prod_shipping_canada':                        
                        $stmt->bindValue($identifier, $this->prod_shipping_canada, PDO::PARAM_STR);
                        break;
                    case 'prod_shipping_au':                        
                        $stmt->bindValue($identifier, $this->prod_shipping_au, PDO::PARAM_STR);
                        break;
                    case 'prod_shipping_asia_parcel':                        
                        $stmt->bindValue($identifier, $this->prod_shipping_asia_parcel, PDO::PARAM_STR);
                        break;
                    case 'prod_shipping_europe_parcel':                        
                        $stmt->bindValue($identifier, $this->prod_shipping_europe_parcel, PDO::PARAM_STR);
                        break;
                    case 'prod_shipping_usa_parcel':                        
                        $stmt->bindValue($identifier, $this->prod_shipping_usa_parcel, PDO::PARAM_STR);
                        break;
                    case 'prod_shipping_canada_parcel':                        
                        $stmt->bindValue($identifier, $this->prod_shipping_canada_parcel, PDO::PARAM_STR);
                        break;
                    case 'prod_shipping_au_parcel':                        
                        $stmt->bindValue($identifier, $this->prod_shipping_au_parcel, PDO::PARAM_STR);
                        break;
                    case 'prod_customprice':                        
                        $stmt->bindValue($identifier, $this->prod_customprice, PDO::PARAM_STR);
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
        $pos = TblProdPricesTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getProdNormalprice();
                break;
            case 2:
                return $this->getProdSalesprice();
                break;
            case 3:
                return $this->getProdShippingAsia();
                break;
            case 4:
                return $this->getProdShippingEurope();
                break;
            case 5:
                return $this->getProdShippingUsa();
                break;
            case 6:
                return $this->getProdShippingCanada();
                break;
            case 7:
                return $this->getProdShippingAu();
                break;
            case 8:
                return $this->getProdShippingAsiaParcel();
                break;
            case 9:
                return $this->getProdShippingEuropeParcel();
                break;
            case 10:
                return $this->getProdShippingUsaParcel();
                break;
            case 11:
                return $this->getProdShippingCanadaParcel();
                break;
            case 12:
                return $this->getProdShippingAuParcel();
                break;
            case 13:
                return $this->getProdCustomprice();
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

        if (isset($alreadyDumpedObjects['TblProdPrices'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['TblProdPrices'][$this->hashCode()] = true;
        $keys = TblProdPricesTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getProdId(),
            $keys[1] => $this->getProdNormalprice(),
            $keys[2] => $this->getProdSalesprice(),
            $keys[3] => $this->getProdShippingAsia(),
            $keys[4] => $this->getProdShippingEurope(),
            $keys[5] => $this->getProdShippingUsa(),
            $keys[6] => $this->getProdShippingCanada(),
            $keys[7] => $this->getProdShippingAu(),
            $keys[8] => $this->getProdShippingAsiaParcel(),
            $keys[9] => $this->getProdShippingEuropeParcel(),
            $keys[10] => $this->getProdShippingUsaParcel(),
            $keys[11] => $this->getProdShippingCanadaParcel(),
            $keys[12] => $this->getProdShippingAuParcel(),
            $keys[13] => $this->getProdCustomprice(),
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
     * @return $this|\TblProdPrices
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = TblProdPricesTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\TblProdPrices
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setProdId($value);
                break;
            case 1:
                $this->setProdNormalprice($value);
                break;
            case 2:
                $this->setProdSalesprice($value);
                break;
            case 3:
                $this->setProdShippingAsia($value);
                break;
            case 4:
                $this->setProdShippingEurope($value);
                break;
            case 5:
                $this->setProdShippingUsa($value);
                break;
            case 6:
                $this->setProdShippingCanada($value);
                break;
            case 7:
                $this->setProdShippingAu($value);
                break;
            case 8:
                $this->setProdShippingAsiaParcel($value);
                break;
            case 9:
                $this->setProdShippingEuropeParcel($value);
                break;
            case 10:
                $this->setProdShippingUsaParcel($value);
                break;
            case 11:
                $this->setProdShippingCanadaParcel($value);
                break;
            case 12:
                $this->setProdShippingAuParcel($value);
                break;
            case 13:
                $this->setProdCustomprice($value);
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
        $keys = TblProdPricesTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setProdId($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setProdNormalprice($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setProdSalesprice($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setProdShippingAsia($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setProdShippingEurope($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setProdShippingUsa($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setProdShippingCanada($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setProdShippingAu($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setProdShippingAsiaParcel($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setProdShippingEuropeParcel($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setProdShippingUsaParcel($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setProdShippingCanadaParcel($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setProdShippingAuParcel($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setProdCustomprice($arr[$keys[13]]);
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
     * @return $this|\TblProdPrices The current object, for fluid interface
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
        $criteria = new Criteria(TblProdPricesTableMap::DATABASE_NAME);

        if ($this->isColumnModified(TblProdPricesTableMap::COL_PROD_ID)) {
            $criteria->add(TblProdPricesTableMap::COL_PROD_ID, $this->prod_id);
        }
        if ($this->isColumnModified(TblProdPricesTableMap::COL_PROD_NORMALPRICE)) {
            $criteria->add(TblProdPricesTableMap::COL_PROD_NORMALPRICE, $this->prod_normalprice);
        }
        if ($this->isColumnModified(TblProdPricesTableMap::COL_PROD_SALESPRICE)) {
            $criteria->add(TblProdPricesTableMap::COL_PROD_SALESPRICE, $this->prod_salesprice);
        }
        if ($this->isColumnModified(TblProdPricesTableMap::COL_PROD_SHIPPING_ASIA)) {
            $criteria->add(TblProdPricesTableMap::COL_PROD_SHIPPING_ASIA, $this->prod_shipping_asia);
        }
        if ($this->isColumnModified(TblProdPricesTableMap::COL_PROD_SHIPPING_EUROPE)) {
            $criteria->add(TblProdPricesTableMap::COL_PROD_SHIPPING_EUROPE, $this->prod_shipping_europe);
        }
        if ($this->isColumnModified(TblProdPricesTableMap::COL_PROD_SHIPPING_USA)) {
            $criteria->add(TblProdPricesTableMap::COL_PROD_SHIPPING_USA, $this->prod_shipping_usa);
        }
        if ($this->isColumnModified(TblProdPricesTableMap::COL_PROD_SHIPPING_CANADA)) {
            $criteria->add(TblProdPricesTableMap::COL_PROD_SHIPPING_CANADA, $this->prod_shipping_canada);
        }
        if ($this->isColumnModified(TblProdPricesTableMap::COL_PROD_SHIPPING_AU)) {
            $criteria->add(TblProdPricesTableMap::COL_PROD_SHIPPING_AU, $this->prod_shipping_au);
        }
        if ($this->isColumnModified(TblProdPricesTableMap::COL_PROD_SHIPPING_ASIA_PARCEL)) {
            $criteria->add(TblProdPricesTableMap::COL_PROD_SHIPPING_ASIA_PARCEL, $this->prod_shipping_asia_parcel);
        }
        if ($this->isColumnModified(TblProdPricesTableMap::COL_PROD_SHIPPING_EUROPE_PARCEL)) {
            $criteria->add(TblProdPricesTableMap::COL_PROD_SHIPPING_EUROPE_PARCEL, $this->prod_shipping_europe_parcel);
        }
        if ($this->isColumnModified(TblProdPricesTableMap::COL_PROD_SHIPPING_USA_PARCEL)) {
            $criteria->add(TblProdPricesTableMap::COL_PROD_SHIPPING_USA_PARCEL, $this->prod_shipping_usa_parcel);
        }
        if ($this->isColumnModified(TblProdPricesTableMap::COL_PROD_SHIPPING_CANADA_PARCEL)) {
            $criteria->add(TblProdPricesTableMap::COL_PROD_SHIPPING_CANADA_PARCEL, $this->prod_shipping_canada_parcel);
        }
        if ($this->isColumnModified(TblProdPricesTableMap::COL_PROD_SHIPPING_AU_PARCEL)) {
            $criteria->add(TblProdPricesTableMap::COL_PROD_SHIPPING_AU_PARCEL, $this->prod_shipping_au_parcel);
        }
        if ($this->isColumnModified(TblProdPricesTableMap::COL_PROD_CUSTOMPRICE)) {
            $criteria->add(TblProdPricesTableMap::COL_PROD_CUSTOMPRICE, $this->prod_customprice);
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
        $criteria = ChildTblProdPricesQuery::create();
        $criteria->add(TblProdPricesTableMap::COL_PROD_ID, $this->prod_id);

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
     * @param      object $copyObj An object of \TblProdPrices (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setProdNormalprice($this->getProdNormalprice());
        $copyObj->setProdSalesprice($this->getProdSalesprice());
        $copyObj->setProdShippingAsia($this->getProdShippingAsia());
        $copyObj->setProdShippingEurope($this->getProdShippingEurope());
        $copyObj->setProdShippingUsa($this->getProdShippingUsa());
        $copyObj->setProdShippingCanada($this->getProdShippingCanada());
        $copyObj->setProdShippingAu($this->getProdShippingAu());
        $copyObj->setProdShippingAsiaParcel($this->getProdShippingAsiaParcel());
        $copyObj->setProdShippingEuropeParcel($this->getProdShippingEuropeParcel());
        $copyObj->setProdShippingUsaParcel($this->getProdShippingUsaParcel());
        $copyObj->setProdShippingCanadaParcel($this->getProdShippingCanadaParcel());
        $copyObj->setProdShippingAuParcel($this->getProdShippingAuParcel());
        $copyObj->setProdCustomprice($this->getProdCustomprice());

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
     * @return \TblProdPrices Clone of current object.
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
        if ($this->singleTblProdInfo === null && ($this->prod_id !== null)) {
            $this->singleTblProdInfo = ChildTblProdInfoQuery::create()->findPk($this->prod_id, $con);
            $this->singleTblProdInfo->setTblProdPrices($this);
        }

        return $this->singleTblProdInfo;
    }

    /**
     * Sets a single ChildTblProdInfo object as related to this object by a one-to-one relationship.
     *
     * @param  ChildTblProdInfo $v ChildTblProdInfo
     * @return $this|\TblProdPrices The current object (for fluent API support)
     * @throws PropelException
     */
    public function setTblProdInfo(ChildTblProdInfo $v = null)
    {
        if ($v === null) {
            $this->setProdId(NULL);
        } else {
            $this->setProdId($v->getProdId());
        }
        
        $this->singleTblProdInfo = $v;

        // Make sure that that the passed-in ChildTblProdInfo isn't already associated with this object
        if ($v !== null) {
            $v->setTblProdPrices($this);
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
        $this->prod_normalprice = null;
        $this->prod_salesprice = null;
        $this->prod_shipping_asia = null;
        $this->prod_shipping_europe = null;
        $this->prod_shipping_usa = null;
        $this->prod_shipping_canada = null;
        $this->prod_shipping_au = null;
        $this->prod_shipping_asia_parcel = null;
        $this->prod_shipping_europe_parcel = null;
        $this->prod_shipping_usa_parcel = null;
        $this->prod_shipping_canada_parcel = null;
        $this->prod_shipping_au_parcel = null;
        $this->prod_customprice = null;
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
        return (string) $this->exportTo(TblProdPricesTableMap::DEFAULT_STRING_FORMAT);
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
