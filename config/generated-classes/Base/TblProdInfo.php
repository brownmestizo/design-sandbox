<?php

namespace Base;

use \TblEra as ChildTblEra;
use \TblEraQuery as ChildTblEraQuery;
use \TblGeneral as ChildTblGeneral;
use \TblGeneralQuery as ChildTblGeneralQuery;
use \TblMenus as ChildTblMenus;
use \TblMenusQuery as ChildTblMenusQuery;
use \TblProdInfoQuery as ChildTblProdInfoQuery;
use \TblProdPhotos as ChildTblProdPhotos;
use \TblProdPhotosQuery as ChildTblProdPhotosQuery;
use \TblProdPrices as ChildTblProdPrices;
use \TblProdPricesQuery as ChildTblProdPricesQuery;
use \TblProdPricing as ChildTblProdPricing;
use \TblProdPricingQuery as ChildTblProdPricingQuery;
use \TblProdSmaller as ChildTblProdSmaller;
use \TblProdSmallerQuery as ChildTblProdSmallerQuery;
use \TblShippingCategories as ChildTblShippingCategories;
use \TblShippingCategoriesQuery as ChildTblShippingCategoriesQuery;
use \Exception;
use \PDO;
use Map\TblProdInfoTableMap;
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
 * Base class that represents a row from the 'tbl_prod_info' table.
 *
 * 
 *
* @package    propel.generator..Base
*/
abstract class TblProdInfo implements ActiveRecordInterface 
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\TblProdInfoTableMap';


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
     * The value for the prod_price_id field.
     * 
     * @var        int
     */
    protected $prod_price_id;

    /**
     * The value for the prod_name field.
     * 
     * @var        string
     */
    protected $prod_name;

    /**
     * The value for the prod_alt1 field.
     * 
     * @var        string
     */
    protected $prod_alt1;

    /**
     * The value for the prod_alt2 field.
     * 
     * @var        string
     */
    protected $prod_alt2;

    /**
     * The value for the prod_alt3 field.
     * 
     * @var        string
     */
    protected $prod_alt3;

    /**
     * The value for the prod_alt4 field.
     * 
     * @var        string
     */
    protected $prod_alt4;

    /**
     * The value for the prod_code field.
     * 
     * @var        string
     */
    protected $prod_code;

    /**
     * The value for the prod_category field.
     * 
     * @var        string
     */
    protected $prod_category;

    /**
     * The value for the prod_category_shipping field.
     * 
     * @var        int
     */
    protected $prod_category_shipping;

    /**
     * The value for the prod_writeup field.
     * 
     * @var        string
     */
    protected $prod_writeup;

    /**
     * The value for the prod_length field.
     * 
     * @var        string
     */
    protected $prod_length;

    /**
     * The value for the prod_wingspan field.
     * 
     * @var        string
     */
    protected $prod_wingspan;

    /**
     * The value for the prod_height field.
     * 
     * @var        string
     */
    protected $prod_height;

    /**
     * The value for the prod_scale field.
     * 
     * @var        string
     */
    protected $prod_scale;

    /**
     * The value for the prod_links field.
     * 
     * @var        string
     */
    protected $prod_links;

    /**
     * The value for the prod_linkdescription field.
     * 
     * @var        string
     */
    protected $prod_linkdescription;

    /**
     * The value for the prod_front field.
     * 
     * @var        string
     */
    protected $prod_front;

    /**
     * The value for the prod_keywords field.
     * 
     * @var        string
     */
    protected $prod_keywords;

    /**
     * The value for the prod_keywords_writeup field.
     * 
     * @var        string
     */
    protected $prod_keywords_writeup;

    /**
     * The value for the prod_title field.
     * 
     * @var        string
     */
    protected $prod_title;

    /**
     * The value for the prod_description field.
     * 
     * @var        string
     */
    protected $prod_description;

    /**
     * The value for the prod_general field.
     * 
     * @var        int
     */
    protected $prod_general;

    /**
     * The value for the prod_era field.
     * 
     * @var        int
     */
    protected $prod_era;

    /**
     * The value for the prod_company field.
     * 
     * @var        string
     */
    protected $prod_company;

    /**
     * The value for the prod_related field.
     * 
     * @var        string
     */
    protected $prod_related;

    /**
     * The value for the prod_related_pa field.
     * 
     * @var        string
     */
    protected $prod_related_pa;

    /**
     * The value for the prod_related_m3 field.
     * 
     * @var        string
     */
    protected $prod_related_m3;

    /**
     * The value for the prod_related2 field.
     * 
     * @var        string
     */
    protected $prod_related2;

    /**
     * The value for the prod_saveas field.
     * 
     * @var        int
     */
    protected $prod_saveas;

    /**
     * The value for the prod_aircraftreg field.
     * 
     * @var        string
     */
    protected $prod_aircraftreg;

    /**
     * The value for the mb field.
     * 
     * @var        int
     */
    protected $mb;

    /**
     * The value for the pa field.
     * 
     * @var        int
     */
    protected $pa;

    /**
     * The value for the m3 field.
     * 
     * @var        int
     */
    protected $m3;

    /**
     * @var        ChildTblEra
     */
    protected $aTblEra;

    /**
     * @var        ChildTblGeneral
     */
    protected $aTblGeneral;

    /**
     * @var        ChildTblMenus
     */
    protected $aTblMenus;

    /**
     * @var        ChildTblProdPhotos
     */
    protected $aTblProdPhotos;

    /**
     * @var        ChildTblProdPrices
     */
    protected $aTblProdPrices;

    /**
     * @var        ChildTblProdPricing
     */
    protected $aTblProdPricing;

    /**
     * @var        ChildTblProdSmaller
     */
    protected $aTblProdSmaller;

    /**
     * @var        ChildTblShippingCategories
     */
    protected $aTblShippingCategories;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * Initializes internal state of Base\TblProdInfo object.
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
     * Compares this with another <code>TblProdInfo</code> instance.  If
     * <code>obj</code> is an instance of <code>TblProdInfo</code>, delegates to
     * <code>equals(TblProdInfo)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|TblProdInfo The current object, for fluid interface
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
     * Get the [prod_price_id] column value.
     * 
     * @return int
     */
    public function getProdPriceId()
    {
        return $this->prod_price_id;
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
     * Get the [prod_alt1] column value.
     * 
     * @return string
     */
    public function getProdAlt1()
    {
        return $this->prod_alt1;
    }

    /**
     * Get the [prod_alt2] column value.
     * 
     * @return string
     */
    public function getProdAlt2()
    {
        return $this->prod_alt2;
    }

    /**
     * Get the [prod_alt3] column value.
     * 
     * @return string
     */
    public function getProdAlt3()
    {
        return $this->prod_alt3;
    }

    /**
     * Get the [prod_alt4] column value.
     * 
     * @return string
     */
    public function getProdAlt4()
    {
        return $this->prod_alt4;
    }

    /**
     * Get the [prod_code] column value.
     * 
     * @return string
     */
    public function getProdCode()
    {
        return $this->prod_code;
    }

    /**
     * Get the [prod_category] column value.
     * 
     * @return string
     */
    public function getProdCategory()
    {
        return $this->prod_category;
    }

    /**
     * Get the [prod_category_shipping] column value.
     * 
     * @return int
     */
    public function getProdCategoryShipping()
    {
        return $this->prod_category_shipping;
    }

    /**
     * Get the [prod_writeup] column value.
     * 
     * @return string
     */
    public function getProdWriteup()
    {
        return $this->prod_writeup;
    }

    /**
     * Get the [prod_length] column value.
     * 
     * @return string
     */
    public function getProdLength()
    {
        return $this->prod_length;
    }

    /**
     * Get the [prod_wingspan] column value.
     * 
     * @return string
     */
    public function getProdWingspan()
    {
        return $this->prod_wingspan;
    }

    /**
     * Get the [prod_height] column value.
     * 
     * @return string
     */
    public function getProdHeight()
    {
        return $this->prod_height;
    }

    /**
     * Get the [prod_scale] column value.
     * 
     * @return string
     */
    public function getProdScale()
    {
        return $this->prod_scale;
    }

    /**
     * Get the [prod_links] column value.
     * 
     * @return string
     */
    public function getProdLinks()
    {
        return $this->prod_links;
    }

    /**
     * Get the [prod_linkdescription] column value.
     * 
     * @return string
     */
    public function getProdLinkdescription()
    {
        return $this->prod_linkdescription;
    }

    /**
     * Get the [prod_front] column value.
     * 
     * @return string
     */
    public function getProdFront()
    {
        return $this->prod_front;
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
     * Get the [prod_keywords_writeup] column value.
     * 
     * @return string
     */
    public function getProdKeywordsWriteup()
    {
        return $this->prod_keywords_writeup;
    }

    /**
     * Get the [prod_title] column value.
     * 
     * @return string
     */
    public function getProdTitle()
    {
        return $this->prod_title;
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
     * Get the [prod_general] column value.
     * 
     * @return int
     */
    public function getProdGeneral()
    {
        return $this->prod_general;
    }

    /**
     * Get the [prod_era] column value.
     * 
     * @return int
     */
    public function getProdEra()
    {
        return $this->prod_era;
    }

    /**
     * Get the [prod_company] column value.
     * 
     * @return string
     */
    public function getProdCompany()
    {
        return $this->prod_company;
    }

    /**
     * Get the [prod_related] column value.
     * 
     * @return string
     */
    public function getProdRelated()
    {
        return $this->prod_related;
    }

    /**
     * Get the [prod_related_pa] column value.
     * 
     * @return string
     */
    public function getProdRelatedPa()
    {
        return $this->prod_related_pa;
    }

    /**
     * Get the [prod_related_m3] column value.
     * 
     * @return string
     */
    public function getProdRelatedM3()
    {
        return $this->prod_related_m3;
    }

    /**
     * Get the [prod_related2] column value.
     * 
     * @return string
     */
    public function getProdRelated2()
    {
        return $this->prod_related2;
    }

    /**
     * Get the [prod_saveas] column value.
     * 
     * @return int
     */
    public function getProdSaveas()
    {
        return $this->prod_saveas;
    }

    /**
     * Get the [prod_aircraftreg] column value.
     * 
     * @return string
     */
    public function getProdAircraftreg()
    {
        return $this->prod_aircraftreg;
    }

    /**
     * Get the [mb] column value.
     * 
     * @return int
     */
    public function getMb()
    {
        return $this->mb;
    }

    /**
     * Get the [pa] column value.
     * 
     * @return int
     */
    public function getPa()
    {
        return $this->pa;
    }

    /**
     * Get the [m3] column value.
     * 
     * @return int
     */
    public function getM3()
    {
        return $this->m3;
    }

    /**
     * Set the value of [prod_id] column.
     * 
     * @param int $v new value
     * @return $this|\TblProdInfo The current object (for fluent API support)
     */
    public function setProdId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->prod_id !== $v) {
            $this->prod_id = $v;
            $this->modifiedColumns[TblProdInfoTableMap::COL_PROD_ID] = true;
        }

        if ($this->aTblProdPhotos !== null && $this->aTblProdPhotos->getProdId() !== $v) {
            $this->aTblProdPhotos = null;
        }

        if ($this->aTblProdPrices !== null && $this->aTblProdPrices->getProdId() !== $v) {
            $this->aTblProdPrices = null;
        }

        if ($this->aTblProdSmaller !== null && $this->aTblProdSmaller->getProdId() !== $v) {
            $this->aTblProdSmaller = null;
        }

        return $this;
    } // setProdId()

    /**
     * Set the value of [prod_price_id] column.
     * 
     * @param int $v new value
     * @return $this|\TblProdInfo The current object (for fluent API support)
     */
    public function setProdPriceId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->prod_price_id !== $v) {
            $this->prod_price_id = $v;
            $this->modifiedColumns[TblProdInfoTableMap::COL_PROD_PRICE_ID] = true;
        }

        if ($this->aTblProdPricing !== null && $this->aTblProdPricing->getProdPriceId() !== $v) {
            $this->aTblProdPricing = null;
        }

        return $this;
    } // setProdPriceId()

    /**
     * Set the value of [prod_name] column.
     * 
     * @param string $v new value
     * @return $this|\TblProdInfo The current object (for fluent API support)
     */
    public function setProdName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_name !== $v) {
            $this->prod_name = $v;
            $this->modifiedColumns[TblProdInfoTableMap::COL_PROD_NAME] = true;
        }

        return $this;
    } // setProdName()

    /**
     * Set the value of [prod_alt1] column.
     * 
     * @param string $v new value
     * @return $this|\TblProdInfo The current object (for fluent API support)
     */
    public function setProdAlt1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_alt1 !== $v) {
            $this->prod_alt1 = $v;
            $this->modifiedColumns[TblProdInfoTableMap::COL_PROD_ALT1] = true;
        }

        return $this;
    } // setProdAlt1()

    /**
     * Set the value of [prod_alt2] column.
     * 
     * @param string $v new value
     * @return $this|\TblProdInfo The current object (for fluent API support)
     */
    public function setProdAlt2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_alt2 !== $v) {
            $this->prod_alt2 = $v;
            $this->modifiedColumns[TblProdInfoTableMap::COL_PROD_ALT2] = true;
        }

        return $this;
    } // setProdAlt2()

    /**
     * Set the value of [prod_alt3] column.
     * 
     * @param string $v new value
     * @return $this|\TblProdInfo The current object (for fluent API support)
     */
    public function setProdAlt3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_alt3 !== $v) {
            $this->prod_alt3 = $v;
            $this->modifiedColumns[TblProdInfoTableMap::COL_PROD_ALT3] = true;
        }

        return $this;
    } // setProdAlt3()

    /**
     * Set the value of [prod_alt4] column.
     * 
     * @param string $v new value
     * @return $this|\TblProdInfo The current object (for fluent API support)
     */
    public function setProdAlt4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_alt4 !== $v) {
            $this->prod_alt4 = $v;
            $this->modifiedColumns[TblProdInfoTableMap::COL_PROD_ALT4] = true;
        }

        return $this;
    } // setProdAlt4()

    /**
     * Set the value of [prod_code] column.
     * 
     * @param string $v new value
     * @return $this|\TblProdInfo The current object (for fluent API support)
     */
    public function setProdCode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_code !== $v) {
            $this->prod_code = $v;
            $this->modifiedColumns[TblProdInfoTableMap::COL_PROD_CODE] = true;
        }

        return $this;
    } // setProdCode()

    /**
     * Set the value of [prod_category] column.
     * 
     * @param string $v new value
     * @return $this|\TblProdInfo The current object (for fluent API support)
     */
    public function setProdCategory($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_category !== $v) {
            $this->prod_category = $v;
            $this->modifiedColumns[TblProdInfoTableMap::COL_PROD_CATEGORY] = true;
        }

        if ($this->aTblMenus !== null && $this->aTblMenus->getMenuAlias() !== $v) {
            $this->aTblMenus = null;
        }

        return $this;
    } // setProdCategory()

    /**
     * Set the value of [prod_category_shipping] column.
     * 
     * @param int $v new value
     * @return $this|\TblProdInfo The current object (for fluent API support)
     */
    public function setProdCategoryShipping($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->prod_category_shipping !== $v) {
            $this->prod_category_shipping = $v;
            $this->modifiedColumns[TblProdInfoTableMap::COL_PROD_CATEGORY_SHIPPING] = true;
        }

        if ($this->aTblShippingCategories !== null && $this->aTblShippingCategories->getProdShippingPriceId() !== $v) {
            $this->aTblShippingCategories = null;
        }

        return $this;
    } // setProdCategoryShipping()

    /**
     * Set the value of [prod_writeup] column.
     * 
     * @param string $v new value
     * @return $this|\TblProdInfo The current object (for fluent API support)
     */
    public function setProdWriteup($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_writeup !== $v) {
            $this->prod_writeup = $v;
            $this->modifiedColumns[TblProdInfoTableMap::COL_PROD_WRITEUP] = true;
        }

        return $this;
    } // setProdWriteup()

    /**
     * Set the value of [prod_length] column.
     * 
     * @param string $v new value
     * @return $this|\TblProdInfo The current object (for fluent API support)
     */
    public function setProdLength($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_length !== $v) {
            $this->prod_length = $v;
            $this->modifiedColumns[TblProdInfoTableMap::COL_PROD_LENGTH] = true;
        }

        return $this;
    } // setProdLength()

    /**
     * Set the value of [prod_wingspan] column.
     * 
     * @param string $v new value
     * @return $this|\TblProdInfo The current object (for fluent API support)
     */
    public function setProdWingspan($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_wingspan !== $v) {
            $this->prod_wingspan = $v;
            $this->modifiedColumns[TblProdInfoTableMap::COL_PROD_WINGSPAN] = true;
        }

        return $this;
    } // setProdWingspan()

    /**
     * Set the value of [prod_height] column.
     * 
     * @param string $v new value
     * @return $this|\TblProdInfo The current object (for fluent API support)
     */
    public function setProdHeight($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_height !== $v) {
            $this->prod_height = $v;
            $this->modifiedColumns[TblProdInfoTableMap::COL_PROD_HEIGHT] = true;
        }

        return $this;
    } // setProdHeight()

    /**
     * Set the value of [prod_scale] column.
     * 
     * @param string $v new value
     * @return $this|\TblProdInfo The current object (for fluent API support)
     */
    public function setProdScale($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_scale !== $v) {
            $this->prod_scale = $v;
            $this->modifiedColumns[TblProdInfoTableMap::COL_PROD_SCALE] = true;
        }

        return $this;
    } // setProdScale()

    /**
     * Set the value of [prod_links] column.
     * 
     * @param string $v new value
     * @return $this|\TblProdInfo The current object (for fluent API support)
     */
    public function setProdLinks($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_links !== $v) {
            $this->prod_links = $v;
            $this->modifiedColumns[TblProdInfoTableMap::COL_PROD_LINKS] = true;
        }

        return $this;
    } // setProdLinks()

    /**
     * Set the value of [prod_linkdescription] column.
     * 
     * @param string $v new value
     * @return $this|\TblProdInfo The current object (for fluent API support)
     */
    public function setProdLinkdescription($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_linkdescription !== $v) {
            $this->prod_linkdescription = $v;
            $this->modifiedColumns[TblProdInfoTableMap::COL_PROD_LINKDESCRIPTION] = true;
        }

        return $this;
    } // setProdLinkdescription()

    /**
     * Set the value of [prod_front] column.
     * 
     * @param string $v new value
     * @return $this|\TblProdInfo The current object (for fluent API support)
     */
    public function setProdFront($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_front !== $v) {
            $this->prod_front = $v;
            $this->modifiedColumns[TblProdInfoTableMap::COL_PROD_FRONT] = true;
        }

        return $this;
    } // setProdFront()

    /**
     * Set the value of [prod_keywords] column.
     * 
     * @param string $v new value
     * @return $this|\TblProdInfo The current object (for fluent API support)
     */
    public function setProdKeywords($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_keywords !== $v) {
            $this->prod_keywords = $v;
            $this->modifiedColumns[TblProdInfoTableMap::COL_PROD_KEYWORDS] = true;
        }

        return $this;
    } // setProdKeywords()

    /**
     * Set the value of [prod_keywords_writeup] column.
     * 
     * @param string $v new value
     * @return $this|\TblProdInfo The current object (for fluent API support)
     */
    public function setProdKeywordsWriteup($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_keywords_writeup !== $v) {
            $this->prod_keywords_writeup = $v;
            $this->modifiedColumns[TblProdInfoTableMap::COL_PROD_KEYWORDS_WRITEUP] = true;
        }

        return $this;
    } // setProdKeywordsWriteup()

    /**
     * Set the value of [prod_title] column.
     * 
     * @param string $v new value
     * @return $this|\TblProdInfo The current object (for fluent API support)
     */
    public function setProdTitle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_title !== $v) {
            $this->prod_title = $v;
            $this->modifiedColumns[TblProdInfoTableMap::COL_PROD_TITLE] = true;
        }

        return $this;
    } // setProdTitle()

    /**
     * Set the value of [prod_description] column.
     * 
     * @param string $v new value
     * @return $this|\TblProdInfo The current object (for fluent API support)
     */
    public function setProdDescription($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_description !== $v) {
            $this->prod_description = $v;
            $this->modifiedColumns[TblProdInfoTableMap::COL_PROD_DESCRIPTION] = true;
        }

        return $this;
    } // setProdDescription()

    /**
     * Set the value of [prod_general] column.
     * 
     * @param int $v new value
     * @return $this|\TblProdInfo The current object (for fluent API support)
     */
    public function setProdGeneral($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->prod_general !== $v) {
            $this->prod_general = $v;
            $this->modifiedColumns[TblProdInfoTableMap::COL_PROD_GENERAL] = true;
        }

        if ($this->aTblGeneral !== null && $this->aTblGeneral->getProdGeneral() !== $v) {
            $this->aTblGeneral = null;
        }

        return $this;
    } // setProdGeneral()

    /**
     * Set the value of [prod_era] column.
     * 
     * @param int $v new value
     * @return $this|\TblProdInfo The current object (for fluent API support)
     */
    public function setProdEra($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->prod_era !== $v) {
            $this->prod_era = $v;
            $this->modifiedColumns[TblProdInfoTableMap::COL_PROD_ERA] = true;
        }

        if ($this->aTblEra !== null && $this->aTblEra->getEraId() !== $v) {
            $this->aTblEra = null;
        }

        return $this;
    } // setProdEra()

    /**
     * Set the value of [prod_company] column.
     * 
     * @param string $v new value
     * @return $this|\TblProdInfo The current object (for fluent API support)
     */
    public function setProdCompany($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_company !== $v) {
            $this->prod_company = $v;
            $this->modifiedColumns[TblProdInfoTableMap::COL_PROD_COMPANY] = true;
        }

        return $this;
    } // setProdCompany()

    /**
     * Set the value of [prod_related] column.
     * 
     * @param string $v new value
     * @return $this|\TblProdInfo The current object (for fluent API support)
     */
    public function setProdRelated($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_related !== $v) {
            $this->prod_related = $v;
            $this->modifiedColumns[TblProdInfoTableMap::COL_PROD_RELATED] = true;
        }

        return $this;
    } // setProdRelated()

    /**
     * Set the value of [prod_related_pa] column.
     * 
     * @param string $v new value
     * @return $this|\TblProdInfo The current object (for fluent API support)
     */
    public function setProdRelatedPa($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_related_pa !== $v) {
            $this->prod_related_pa = $v;
            $this->modifiedColumns[TblProdInfoTableMap::COL_PROD_RELATED_PA] = true;
        }

        return $this;
    } // setProdRelatedPa()

    /**
     * Set the value of [prod_related_m3] column.
     * 
     * @param string $v new value
     * @return $this|\TblProdInfo The current object (for fluent API support)
     */
    public function setProdRelatedM3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_related_m3 !== $v) {
            $this->prod_related_m3 = $v;
            $this->modifiedColumns[TblProdInfoTableMap::COL_PROD_RELATED_M3] = true;
        }

        return $this;
    } // setProdRelatedM3()

    /**
     * Set the value of [prod_related2] column.
     * 
     * @param string $v new value
     * @return $this|\TblProdInfo The current object (for fluent API support)
     */
    public function setProdRelated2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_related2 !== $v) {
            $this->prod_related2 = $v;
            $this->modifiedColumns[TblProdInfoTableMap::COL_PROD_RELATED2] = true;
        }

        return $this;
    } // setProdRelated2()

    /**
     * Set the value of [prod_saveas] column.
     * 
     * @param int $v new value
     * @return $this|\TblProdInfo The current object (for fluent API support)
     */
    public function setProdSaveas($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->prod_saveas !== $v) {
            $this->prod_saveas = $v;
            $this->modifiedColumns[TblProdInfoTableMap::COL_PROD_SAVEAS] = true;
        }

        return $this;
    } // setProdSaveas()

    /**
     * Set the value of [prod_aircraftreg] column.
     * 
     * @param string $v new value
     * @return $this|\TblProdInfo The current object (for fluent API support)
     */
    public function setProdAircraftreg($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prod_aircraftreg !== $v) {
            $this->prod_aircraftreg = $v;
            $this->modifiedColumns[TblProdInfoTableMap::COL_PROD_AIRCRAFTREG] = true;
        }

        return $this;
    } // setProdAircraftreg()

    /**
     * Set the value of [mb] column.
     * 
     * @param int $v new value
     * @return $this|\TblProdInfo The current object (for fluent API support)
     */
    public function setMb($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->mb !== $v) {
            $this->mb = $v;
            $this->modifiedColumns[TblProdInfoTableMap::COL_MB] = true;
        }

        return $this;
    } // setMb()

    /**
     * Set the value of [pa] column.
     * 
     * @param int $v new value
     * @return $this|\TblProdInfo The current object (for fluent API support)
     */
    public function setPa($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->pa !== $v) {
            $this->pa = $v;
            $this->modifiedColumns[TblProdInfoTableMap::COL_PA] = true;
        }

        return $this;
    } // setPa()

    /**
     * Set the value of [m3] column.
     * 
     * @param int $v new value
     * @return $this|\TblProdInfo The current object (for fluent API support)
     */
    public function setM3($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->m3 !== $v) {
            $this->m3 = $v;
            $this->modifiedColumns[TblProdInfoTableMap::COL_M3] = true;
        }

        return $this;
    } // setM3()

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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : TblProdInfoTableMap::translateFieldName('ProdId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_id = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : TblProdInfoTableMap::translateFieldName('ProdPriceId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_price_id = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : TblProdInfoTableMap::translateFieldName('ProdName', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_name = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : TblProdInfoTableMap::translateFieldName('ProdAlt1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_alt1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : TblProdInfoTableMap::translateFieldName('ProdAlt2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_alt2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : TblProdInfoTableMap::translateFieldName('ProdAlt3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_alt3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : TblProdInfoTableMap::translateFieldName('ProdAlt4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_alt4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : TblProdInfoTableMap::translateFieldName('ProdCode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_code = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : TblProdInfoTableMap::translateFieldName('ProdCategory', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_category = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : TblProdInfoTableMap::translateFieldName('ProdCategoryShipping', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_category_shipping = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : TblProdInfoTableMap::translateFieldName('ProdWriteup', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_writeup = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : TblProdInfoTableMap::translateFieldName('ProdLength', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_length = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : TblProdInfoTableMap::translateFieldName('ProdWingspan', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_wingspan = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : TblProdInfoTableMap::translateFieldName('ProdHeight', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_height = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : TblProdInfoTableMap::translateFieldName('ProdScale', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_scale = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : TblProdInfoTableMap::translateFieldName('ProdLinks', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_links = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : TblProdInfoTableMap::translateFieldName('ProdLinkdescription', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_linkdescription = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : TblProdInfoTableMap::translateFieldName('ProdFront', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_front = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : TblProdInfoTableMap::translateFieldName('ProdKeywords', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_keywords = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : TblProdInfoTableMap::translateFieldName('ProdKeywordsWriteup', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_keywords_writeup = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : TblProdInfoTableMap::translateFieldName('ProdTitle', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_title = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : TblProdInfoTableMap::translateFieldName('ProdDescription', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_description = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : TblProdInfoTableMap::translateFieldName('ProdGeneral', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_general = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : TblProdInfoTableMap::translateFieldName('ProdEra', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_era = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : TblProdInfoTableMap::translateFieldName('ProdCompany', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_company = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : TblProdInfoTableMap::translateFieldName('ProdRelated', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_related = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : TblProdInfoTableMap::translateFieldName('ProdRelatedPa', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_related_pa = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : TblProdInfoTableMap::translateFieldName('ProdRelatedM3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_related_m3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : TblProdInfoTableMap::translateFieldName('ProdRelated2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_related2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 29 + $startcol : TblProdInfoTableMap::translateFieldName('ProdSaveas', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_saveas = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 30 + $startcol : TblProdInfoTableMap::translateFieldName('ProdAircraftreg', TableMap::TYPE_PHPNAME, $indexType)];
            $this->prod_aircraftreg = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 31 + $startcol : TblProdInfoTableMap::translateFieldName('Mb', TableMap::TYPE_PHPNAME, $indexType)];
            $this->mb = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 32 + $startcol : TblProdInfoTableMap::translateFieldName('Pa', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pa = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 33 + $startcol : TblProdInfoTableMap::translateFieldName('M3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->m3 = (null !== $col) ? (int) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 34; // 34 = TblProdInfoTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\TblProdInfo'), 0, $e);
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
        if ($this->aTblProdPhotos !== null && $this->prod_id !== $this->aTblProdPhotos->getProdId()) {
            $this->aTblProdPhotos = null;
        }
        if ($this->aTblProdPrices !== null && $this->prod_id !== $this->aTblProdPrices->getProdId()) {
            $this->aTblProdPrices = null;
        }
        if ($this->aTblProdSmaller !== null && $this->prod_id !== $this->aTblProdSmaller->getProdId()) {
            $this->aTblProdSmaller = null;
        }
        if ($this->aTblProdPricing !== null && $this->prod_price_id !== $this->aTblProdPricing->getProdPriceId()) {
            $this->aTblProdPricing = null;
        }
        if ($this->aTblMenus !== null && $this->prod_category !== $this->aTblMenus->getMenuAlias()) {
            $this->aTblMenus = null;
        }
        if ($this->aTblShippingCategories !== null && $this->prod_category_shipping !== $this->aTblShippingCategories->getProdShippingPriceId()) {
            $this->aTblShippingCategories = null;
        }
        if ($this->aTblGeneral !== null && $this->prod_general !== $this->aTblGeneral->getProdGeneral()) {
            $this->aTblGeneral = null;
        }
        if ($this->aTblEra !== null && $this->prod_era !== $this->aTblEra->getEraId()) {
            $this->aTblEra = null;
        }
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
            $con = Propel::getServiceContainer()->getReadConnection(TblProdInfoTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildTblProdInfoQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aTblEra = null;
            $this->aTblGeneral = null;
            $this->aTblMenus = null;
            $this->aTblProdPhotos = null;
            $this->aTblProdPrices = null;
            $this->aTblProdPricing = null;
            $this->aTblProdSmaller = null;
            $this->aTblShippingCategories = null;
        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see TblProdInfo::setDeleted()
     * @see TblProdInfo::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(TblProdInfoTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildTblProdInfoQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(TblProdInfoTableMap::DATABASE_NAME);
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
                TblProdInfoTableMap::addInstanceToPool($this);
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

            // We call the save method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aTblEra !== null) {
                if ($this->aTblEra->isModified() || $this->aTblEra->isNew()) {
                    $affectedRows += $this->aTblEra->save($con);
                }
                $this->setTblEra($this->aTblEra);
            }

            if ($this->aTblGeneral !== null) {
                if ($this->aTblGeneral->isModified() || $this->aTblGeneral->isNew()) {
                    $affectedRows += $this->aTblGeneral->save($con);
                }
                $this->setTblGeneral($this->aTblGeneral);
            }

            if ($this->aTblMenus !== null) {
                if ($this->aTblMenus->isModified() || $this->aTblMenus->isNew()) {
                    $affectedRows += $this->aTblMenus->save($con);
                }
                $this->setTblMenus($this->aTblMenus);
            }

            if ($this->aTblProdPhotos !== null) {
                if ($this->aTblProdPhotos->isModified() || $this->aTblProdPhotos->isNew()) {
                    $affectedRows += $this->aTblProdPhotos->save($con);
                }
                $this->setTblProdPhotos($this->aTblProdPhotos);
            }

            if ($this->aTblProdPrices !== null) {
                if ($this->aTblProdPrices->isModified() || $this->aTblProdPrices->isNew()) {
                    $affectedRows += $this->aTblProdPrices->save($con);
                }
                $this->setTblProdPrices($this->aTblProdPrices);
            }

            if ($this->aTblProdPricing !== null) {
                if ($this->aTblProdPricing->isModified() || $this->aTblProdPricing->isNew()) {
                    $affectedRows += $this->aTblProdPricing->save($con);
                }
                $this->setTblProdPricing($this->aTblProdPricing);
            }

            if ($this->aTblProdSmaller !== null) {
                if ($this->aTblProdSmaller->isModified() || $this->aTblProdSmaller->isNew()) {
                    $affectedRows += $this->aTblProdSmaller->save($con);
                }
                $this->setTblProdSmaller($this->aTblProdSmaller);
            }

            if ($this->aTblShippingCategories !== null) {
                if ($this->aTblShippingCategories->isModified() || $this->aTblShippingCategories->isNew()) {
                    $affectedRows += $this->aTblShippingCategories->save($con);
                }
                $this->setTblShippingCategories($this->aTblShippingCategories);
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

        $this->modifiedColumns[TblProdInfoTableMap::COL_PROD_ID] = true;
        if (null !== $this->prod_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . TblProdInfoTableMap::COL_PROD_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_ID)) {
            $modifiedColumns[':p' . $index++]  = 'prod_id';
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_PRICE_ID)) {
            $modifiedColumns[':p' . $index++]  = 'prod_price_id';
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_NAME)) {
            $modifiedColumns[':p' . $index++]  = 'prod_name';
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_ALT1)) {
            $modifiedColumns[':p' . $index++]  = 'prod_alt1';
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_ALT2)) {
            $modifiedColumns[':p' . $index++]  = 'prod_alt2';
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_ALT3)) {
            $modifiedColumns[':p' . $index++]  = 'prod_alt3';
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_ALT4)) {
            $modifiedColumns[':p' . $index++]  = 'prod_alt4';
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_CODE)) {
            $modifiedColumns[':p' . $index++]  = 'prod_code';
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_CATEGORY)) {
            $modifiedColumns[':p' . $index++]  = 'prod_category';
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_CATEGORY_SHIPPING)) {
            $modifiedColumns[':p' . $index++]  = 'prod_category_shipping';
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_WRITEUP)) {
            $modifiedColumns[':p' . $index++]  = 'prod_writeup';
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_LENGTH)) {
            $modifiedColumns[':p' . $index++]  = 'prod_length';
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_WINGSPAN)) {
            $modifiedColumns[':p' . $index++]  = 'prod_wingspan';
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_HEIGHT)) {
            $modifiedColumns[':p' . $index++]  = 'prod_height';
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_SCALE)) {
            $modifiedColumns[':p' . $index++]  = 'prod_scale';
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_LINKS)) {
            $modifiedColumns[':p' . $index++]  = 'prod_links';
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_LINKDESCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = 'prod_linkdescription';
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_FRONT)) {
            $modifiedColumns[':p' . $index++]  = 'prod_front';
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_KEYWORDS)) {
            $modifiedColumns[':p' . $index++]  = 'prod_keywords';
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_KEYWORDS_WRITEUP)) {
            $modifiedColumns[':p' . $index++]  = 'prod_keywords_writeup';
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_TITLE)) {
            $modifiedColumns[':p' . $index++]  = 'prod_title';
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_DESCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = 'prod_description';
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_GENERAL)) {
            $modifiedColumns[':p' . $index++]  = 'prod_general';
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_ERA)) {
            $modifiedColumns[':p' . $index++]  = 'prod_era';
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_COMPANY)) {
            $modifiedColumns[':p' . $index++]  = 'prod_company';
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_RELATED)) {
            $modifiedColumns[':p' . $index++]  = 'prod_related';
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_RELATED_PA)) {
            $modifiedColumns[':p' . $index++]  = 'prod_related_pa';
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_RELATED_M3)) {
            $modifiedColumns[':p' . $index++]  = 'prod_related_m3';
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_RELATED2)) {
            $modifiedColumns[':p' . $index++]  = 'prod_related2';
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_SAVEAS)) {
            $modifiedColumns[':p' . $index++]  = 'prod_saveas';
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_AIRCRAFTREG)) {
            $modifiedColumns[':p' . $index++]  = 'prod_aircraftreg';
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_MB)) {
            $modifiedColumns[':p' . $index++]  = 'mb';
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PA)) {
            $modifiedColumns[':p' . $index++]  = 'pa';
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_M3)) {
            $modifiedColumns[':p' . $index++]  = 'm3';
        }

        $sql = sprintf(
            'INSERT INTO tbl_prod_info (%s) VALUES (%s)',
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
                    case 'prod_price_id':                        
                        $stmt->bindValue($identifier, $this->prod_price_id, PDO::PARAM_INT);
                        break;
                    case 'prod_name':                        
                        $stmt->bindValue($identifier, $this->prod_name, PDO::PARAM_STR);
                        break;
                    case 'prod_alt1':                        
                        $stmt->bindValue($identifier, $this->prod_alt1, PDO::PARAM_STR);
                        break;
                    case 'prod_alt2':                        
                        $stmt->bindValue($identifier, $this->prod_alt2, PDO::PARAM_STR);
                        break;
                    case 'prod_alt3':                        
                        $stmt->bindValue($identifier, $this->prod_alt3, PDO::PARAM_STR);
                        break;
                    case 'prod_alt4':                        
                        $stmt->bindValue($identifier, $this->prod_alt4, PDO::PARAM_STR);
                        break;
                    case 'prod_code':                        
                        $stmt->bindValue($identifier, $this->prod_code, PDO::PARAM_STR);
                        break;
                    case 'prod_category':                        
                        $stmt->bindValue($identifier, $this->prod_category, PDO::PARAM_STR);
                        break;
                    case 'prod_category_shipping':                        
                        $stmt->bindValue($identifier, $this->prod_category_shipping, PDO::PARAM_INT);
                        break;
                    case 'prod_writeup':                        
                        $stmt->bindValue($identifier, $this->prod_writeup, PDO::PARAM_STR);
                        break;
                    case 'prod_length':                        
                        $stmt->bindValue($identifier, $this->prod_length, PDO::PARAM_STR);
                        break;
                    case 'prod_wingspan':                        
                        $stmt->bindValue($identifier, $this->prod_wingspan, PDO::PARAM_STR);
                        break;
                    case 'prod_height':                        
                        $stmt->bindValue($identifier, $this->prod_height, PDO::PARAM_STR);
                        break;
                    case 'prod_scale':                        
                        $stmt->bindValue($identifier, $this->prod_scale, PDO::PARAM_STR);
                        break;
                    case 'prod_links':                        
                        $stmt->bindValue($identifier, $this->prod_links, PDO::PARAM_STR);
                        break;
                    case 'prod_linkdescription':                        
                        $stmt->bindValue($identifier, $this->prod_linkdescription, PDO::PARAM_STR);
                        break;
                    case 'prod_front':                        
                        $stmt->bindValue($identifier, $this->prod_front, PDO::PARAM_STR);
                        break;
                    case 'prod_keywords':                        
                        $stmt->bindValue($identifier, $this->prod_keywords, PDO::PARAM_STR);
                        break;
                    case 'prod_keywords_writeup':                        
                        $stmt->bindValue($identifier, $this->prod_keywords_writeup, PDO::PARAM_STR);
                        break;
                    case 'prod_title':                        
                        $stmt->bindValue($identifier, $this->prod_title, PDO::PARAM_STR);
                        break;
                    case 'prod_description':                        
                        $stmt->bindValue($identifier, $this->prod_description, PDO::PARAM_STR);
                        break;
                    case 'prod_general':                        
                        $stmt->bindValue($identifier, $this->prod_general, PDO::PARAM_INT);
                        break;
                    case 'prod_era':                        
                        $stmt->bindValue($identifier, $this->prod_era, PDO::PARAM_INT);
                        break;
                    case 'prod_company':                        
                        $stmt->bindValue($identifier, $this->prod_company, PDO::PARAM_STR);
                        break;
                    case 'prod_related':                        
                        $stmt->bindValue($identifier, $this->prod_related, PDO::PARAM_STR);
                        break;
                    case 'prod_related_pa':                        
                        $stmt->bindValue($identifier, $this->prod_related_pa, PDO::PARAM_STR);
                        break;
                    case 'prod_related_m3':                        
                        $stmt->bindValue($identifier, $this->prod_related_m3, PDO::PARAM_STR);
                        break;
                    case 'prod_related2':                        
                        $stmt->bindValue($identifier, $this->prod_related2, PDO::PARAM_STR);
                        break;
                    case 'prod_saveas':                        
                        $stmt->bindValue($identifier, $this->prod_saveas, PDO::PARAM_INT);
                        break;
                    case 'prod_aircraftreg':                        
                        $stmt->bindValue($identifier, $this->prod_aircraftreg, PDO::PARAM_STR);
                        break;
                    case 'mb':                        
                        $stmt->bindValue($identifier, $this->mb, PDO::PARAM_INT);
                        break;
                    case 'pa':                        
                        $stmt->bindValue($identifier, $this->pa, PDO::PARAM_INT);
                        break;
                    case 'm3':                        
                        $stmt->bindValue($identifier, $this->m3, PDO::PARAM_INT);
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
        $pos = TblProdInfoTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getProdPriceId();
                break;
            case 2:
                return $this->getProdName();
                break;
            case 3:
                return $this->getProdAlt1();
                break;
            case 4:
                return $this->getProdAlt2();
                break;
            case 5:
                return $this->getProdAlt3();
                break;
            case 6:
                return $this->getProdAlt4();
                break;
            case 7:
                return $this->getProdCode();
                break;
            case 8:
                return $this->getProdCategory();
                break;
            case 9:
                return $this->getProdCategoryShipping();
                break;
            case 10:
                return $this->getProdWriteup();
                break;
            case 11:
                return $this->getProdLength();
                break;
            case 12:
                return $this->getProdWingspan();
                break;
            case 13:
                return $this->getProdHeight();
                break;
            case 14:
                return $this->getProdScale();
                break;
            case 15:
                return $this->getProdLinks();
                break;
            case 16:
                return $this->getProdLinkdescription();
                break;
            case 17:
                return $this->getProdFront();
                break;
            case 18:
                return $this->getProdKeywords();
                break;
            case 19:
                return $this->getProdKeywordsWriteup();
                break;
            case 20:
                return $this->getProdTitle();
                break;
            case 21:
                return $this->getProdDescription();
                break;
            case 22:
                return $this->getProdGeneral();
                break;
            case 23:
                return $this->getProdEra();
                break;
            case 24:
                return $this->getProdCompany();
                break;
            case 25:
                return $this->getProdRelated();
                break;
            case 26:
                return $this->getProdRelatedPa();
                break;
            case 27:
                return $this->getProdRelatedM3();
                break;
            case 28:
                return $this->getProdRelated2();
                break;
            case 29:
                return $this->getProdSaveas();
                break;
            case 30:
                return $this->getProdAircraftreg();
                break;
            case 31:
                return $this->getMb();
                break;
            case 32:
                return $this->getPa();
                break;
            case 33:
                return $this->getM3();
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

        if (isset($alreadyDumpedObjects['TblProdInfo'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['TblProdInfo'][$this->hashCode()] = true;
        $keys = TblProdInfoTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getProdId(),
            $keys[1] => $this->getProdPriceId(),
            $keys[2] => $this->getProdName(),
            $keys[3] => $this->getProdAlt1(),
            $keys[4] => $this->getProdAlt2(),
            $keys[5] => $this->getProdAlt3(),
            $keys[6] => $this->getProdAlt4(),
            $keys[7] => $this->getProdCode(),
            $keys[8] => $this->getProdCategory(),
            $keys[9] => $this->getProdCategoryShipping(),
            $keys[10] => $this->getProdWriteup(),
            $keys[11] => $this->getProdLength(),
            $keys[12] => $this->getProdWingspan(),
            $keys[13] => $this->getProdHeight(),
            $keys[14] => $this->getProdScale(),
            $keys[15] => $this->getProdLinks(),
            $keys[16] => $this->getProdLinkdescription(),
            $keys[17] => $this->getProdFront(),
            $keys[18] => $this->getProdKeywords(),
            $keys[19] => $this->getProdKeywordsWriteup(),
            $keys[20] => $this->getProdTitle(),
            $keys[21] => $this->getProdDescription(),
            $keys[22] => $this->getProdGeneral(),
            $keys[23] => $this->getProdEra(),
            $keys[24] => $this->getProdCompany(),
            $keys[25] => $this->getProdRelated(),
            $keys[26] => $this->getProdRelatedPa(),
            $keys[27] => $this->getProdRelatedM3(),
            $keys[28] => $this->getProdRelated2(),
            $keys[29] => $this->getProdSaveas(),
            $keys[30] => $this->getProdAircraftreg(),
            $keys[31] => $this->getMb(),
            $keys[32] => $this->getPa(),
            $keys[33] => $this->getM3(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }
        
        if ($includeForeignObjects) {
            if (null !== $this->aTblEra) {
                
                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'tblEra';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'tbl_era';
                        break;
                    default:
                        $key = 'TblEra';
                }
        
                $result[$key] = $this->aTblEra->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aTblGeneral) {
                
                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'tblGeneral';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'tbl_general';
                        break;
                    default:
                        $key = 'TblGeneral';
                }
        
                $result[$key] = $this->aTblGeneral->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aTblMenus) {
                
                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'tblMenus';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'tbl_menus';
                        break;
                    default:
                        $key = 'TblMenus';
                }
        
                $result[$key] = $this->aTblMenus->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aTblProdPhotos) {
                
                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'tblProdPhotos';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'tbl_prod_photos';
                        break;
                    default:
                        $key = 'TblProdPhotos';
                }
        
                $result[$key] = $this->aTblProdPhotos->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aTblProdPrices) {
                
                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'tblProdPrices';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'tbl_prod_prices';
                        break;
                    default:
                        $key = 'TblProdPrices';
                }
        
                $result[$key] = $this->aTblProdPrices->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aTblProdPricing) {
                
                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'tblProdPricing';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'tbl_prod_pricing';
                        break;
                    default:
                        $key = 'TblProdPricing';
                }
        
                $result[$key] = $this->aTblProdPricing->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aTblProdSmaller) {
                
                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'tblProdSmaller';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'tbl_prod_smaller';
                        break;
                    default:
                        $key = 'TblProdSmaller';
                }
        
                $result[$key] = $this->aTblProdSmaller->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aTblShippingCategories) {
                
                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'tblShippingCategories';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'tbl_shipping_categories';
                        break;
                    default:
                        $key = 'TblShippingCategories';
                }
        
                $result[$key] = $this->aTblShippingCategories->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
     * @return $this|\TblProdInfo
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = TblProdInfoTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\TblProdInfo
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setProdId($value);
                break;
            case 1:
                $this->setProdPriceId($value);
                break;
            case 2:
                $this->setProdName($value);
                break;
            case 3:
                $this->setProdAlt1($value);
                break;
            case 4:
                $this->setProdAlt2($value);
                break;
            case 5:
                $this->setProdAlt3($value);
                break;
            case 6:
                $this->setProdAlt4($value);
                break;
            case 7:
                $this->setProdCode($value);
                break;
            case 8:
                $this->setProdCategory($value);
                break;
            case 9:
                $this->setProdCategoryShipping($value);
                break;
            case 10:
                $this->setProdWriteup($value);
                break;
            case 11:
                $this->setProdLength($value);
                break;
            case 12:
                $this->setProdWingspan($value);
                break;
            case 13:
                $this->setProdHeight($value);
                break;
            case 14:
                $this->setProdScale($value);
                break;
            case 15:
                $this->setProdLinks($value);
                break;
            case 16:
                $this->setProdLinkdescription($value);
                break;
            case 17:
                $this->setProdFront($value);
                break;
            case 18:
                $this->setProdKeywords($value);
                break;
            case 19:
                $this->setProdKeywordsWriteup($value);
                break;
            case 20:
                $this->setProdTitle($value);
                break;
            case 21:
                $this->setProdDescription($value);
                break;
            case 22:
                $this->setProdGeneral($value);
                break;
            case 23:
                $this->setProdEra($value);
                break;
            case 24:
                $this->setProdCompany($value);
                break;
            case 25:
                $this->setProdRelated($value);
                break;
            case 26:
                $this->setProdRelatedPa($value);
                break;
            case 27:
                $this->setProdRelatedM3($value);
                break;
            case 28:
                $this->setProdRelated2($value);
                break;
            case 29:
                $this->setProdSaveas($value);
                break;
            case 30:
                $this->setProdAircraftreg($value);
                break;
            case 31:
                $this->setMb($value);
                break;
            case 32:
                $this->setPa($value);
                break;
            case 33:
                $this->setM3($value);
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
        $keys = TblProdInfoTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setProdId($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setProdPriceId($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setProdName($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setProdAlt1($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setProdAlt2($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setProdAlt3($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setProdAlt4($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setProdCode($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setProdCategory($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setProdCategoryShipping($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setProdWriteup($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setProdLength($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setProdWingspan($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setProdHeight($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setProdScale($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setProdLinks($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setProdLinkdescription($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setProdFront($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setProdKeywords($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setProdKeywordsWriteup($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setProdTitle($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setProdDescription($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setProdGeneral($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setProdEra($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setProdCompany($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setProdRelated($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setProdRelatedPa($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setProdRelatedM3($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setProdRelated2($arr[$keys[28]]);
        }
        if (array_key_exists($keys[29], $arr)) {
            $this->setProdSaveas($arr[$keys[29]]);
        }
        if (array_key_exists($keys[30], $arr)) {
            $this->setProdAircraftreg($arr[$keys[30]]);
        }
        if (array_key_exists($keys[31], $arr)) {
            $this->setMb($arr[$keys[31]]);
        }
        if (array_key_exists($keys[32], $arr)) {
            $this->setPa($arr[$keys[32]]);
        }
        if (array_key_exists($keys[33], $arr)) {
            $this->setM3($arr[$keys[33]]);
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
     * @return $this|\TblProdInfo The current object, for fluid interface
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
        $criteria = new Criteria(TblProdInfoTableMap::DATABASE_NAME);

        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_ID)) {
            $criteria->add(TblProdInfoTableMap::COL_PROD_ID, $this->prod_id);
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_PRICE_ID)) {
            $criteria->add(TblProdInfoTableMap::COL_PROD_PRICE_ID, $this->prod_price_id);
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_NAME)) {
            $criteria->add(TblProdInfoTableMap::COL_PROD_NAME, $this->prod_name);
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_ALT1)) {
            $criteria->add(TblProdInfoTableMap::COL_PROD_ALT1, $this->prod_alt1);
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_ALT2)) {
            $criteria->add(TblProdInfoTableMap::COL_PROD_ALT2, $this->prod_alt2);
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_ALT3)) {
            $criteria->add(TblProdInfoTableMap::COL_PROD_ALT3, $this->prod_alt3);
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_ALT4)) {
            $criteria->add(TblProdInfoTableMap::COL_PROD_ALT4, $this->prod_alt4);
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_CODE)) {
            $criteria->add(TblProdInfoTableMap::COL_PROD_CODE, $this->prod_code);
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_CATEGORY)) {
            $criteria->add(TblProdInfoTableMap::COL_PROD_CATEGORY, $this->prod_category);
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_CATEGORY_SHIPPING)) {
            $criteria->add(TblProdInfoTableMap::COL_PROD_CATEGORY_SHIPPING, $this->prod_category_shipping);
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_WRITEUP)) {
            $criteria->add(TblProdInfoTableMap::COL_PROD_WRITEUP, $this->prod_writeup);
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_LENGTH)) {
            $criteria->add(TblProdInfoTableMap::COL_PROD_LENGTH, $this->prod_length);
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_WINGSPAN)) {
            $criteria->add(TblProdInfoTableMap::COL_PROD_WINGSPAN, $this->prod_wingspan);
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_HEIGHT)) {
            $criteria->add(TblProdInfoTableMap::COL_PROD_HEIGHT, $this->prod_height);
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_SCALE)) {
            $criteria->add(TblProdInfoTableMap::COL_PROD_SCALE, $this->prod_scale);
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_LINKS)) {
            $criteria->add(TblProdInfoTableMap::COL_PROD_LINKS, $this->prod_links);
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_LINKDESCRIPTION)) {
            $criteria->add(TblProdInfoTableMap::COL_PROD_LINKDESCRIPTION, $this->prod_linkdescription);
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_FRONT)) {
            $criteria->add(TblProdInfoTableMap::COL_PROD_FRONT, $this->prod_front);
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_KEYWORDS)) {
            $criteria->add(TblProdInfoTableMap::COL_PROD_KEYWORDS, $this->prod_keywords);
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_KEYWORDS_WRITEUP)) {
            $criteria->add(TblProdInfoTableMap::COL_PROD_KEYWORDS_WRITEUP, $this->prod_keywords_writeup);
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_TITLE)) {
            $criteria->add(TblProdInfoTableMap::COL_PROD_TITLE, $this->prod_title);
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_DESCRIPTION)) {
            $criteria->add(TblProdInfoTableMap::COL_PROD_DESCRIPTION, $this->prod_description);
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_GENERAL)) {
            $criteria->add(TblProdInfoTableMap::COL_PROD_GENERAL, $this->prod_general);
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_ERA)) {
            $criteria->add(TblProdInfoTableMap::COL_PROD_ERA, $this->prod_era);
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_COMPANY)) {
            $criteria->add(TblProdInfoTableMap::COL_PROD_COMPANY, $this->prod_company);
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_RELATED)) {
            $criteria->add(TblProdInfoTableMap::COL_PROD_RELATED, $this->prod_related);
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_RELATED_PA)) {
            $criteria->add(TblProdInfoTableMap::COL_PROD_RELATED_PA, $this->prod_related_pa);
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_RELATED_M3)) {
            $criteria->add(TblProdInfoTableMap::COL_PROD_RELATED_M3, $this->prod_related_m3);
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_RELATED2)) {
            $criteria->add(TblProdInfoTableMap::COL_PROD_RELATED2, $this->prod_related2);
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_SAVEAS)) {
            $criteria->add(TblProdInfoTableMap::COL_PROD_SAVEAS, $this->prod_saveas);
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PROD_AIRCRAFTREG)) {
            $criteria->add(TblProdInfoTableMap::COL_PROD_AIRCRAFTREG, $this->prod_aircraftreg);
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_MB)) {
            $criteria->add(TblProdInfoTableMap::COL_MB, $this->mb);
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_PA)) {
            $criteria->add(TblProdInfoTableMap::COL_PA, $this->pa);
        }
        if ($this->isColumnModified(TblProdInfoTableMap::COL_M3)) {
            $criteria->add(TblProdInfoTableMap::COL_M3, $this->m3);
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
        $criteria = ChildTblProdInfoQuery::create();
        $criteria->add(TblProdInfoTableMap::COL_PROD_ID, $this->prod_id);

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

        $validPrimaryKeyFKs = 3;
        $primaryKeyFKs = [];

        //relation tbl_prod_info_fk_c95266 to table tbl_prod_photos
        if ($this->aTblProdPhotos && $hash = spl_object_hash($this->aTblProdPhotos)) {
            $primaryKeyFKs[] = $hash;
        } else {
            $validPrimaryKeyFKs = false;
        }

        //relation tbl_prod_info_fk_55d783 to table tbl_prod_prices
        if ($this->aTblProdPrices && $hash = spl_object_hash($this->aTblProdPrices)) {
            $primaryKeyFKs[] = $hash;
        } else {
            $validPrimaryKeyFKs = false;
        }

        //relation tbl_prod_info_fk_937b39 to table tbl_prod_smaller
        if ($this->aTblProdSmaller && $hash = spl_object_hash($this->aTblProdSmaller)) {
            $primaryKeyFKs[] = $hash;
        } else {
            $validPrimaryKeyFKs = false;
        }

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
     * @param      object $copyObj An object of \TblProdInfo (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setProdPriceId($this->getProdPriceId());
        $copyObj->setProdName($this->getProdName());
        $copyObj->setProdAlt1($this->getProdAlt1());
        $copyObj->setProdAlt2($this->getProdAlt2());
        $copyObj->setProdAlt3($this->getProdAlt3());
        $copyObj->setProdAlt4($this->getProdAlt4());
        $copyObj->setProdCode($this->getProdCode());
        $copyObj->setProdCategory($this->getProdCategory());
        $copyObj->setProdCategoryShipping($this->getProdCategoryShipping());
        $copyObj->setProdWriteup($this->getProdWriteup());
        $copyObj->setProdLength($this->getProdLength());
        $copyObj->setProdWingspan($this->getProdWingspan());
        $copyObj->setProdHeight($this->getProdHeight());
        $copyObj->setProdScale($this->getProdScale());
        $copyObj->setProdLinks($this->getProdLinks());
        $copyObj->setProdLinkdescription($this->getProdLinkdescription());
        $copyObj->setProdFront($this->getProdFront());
        $copyObj->setProdKeywords($this->getProdKeywords());
        $copyObj->setProdKeywordsWriteup($this->getProdKeywordsWriteup());
        $copyObj->setProdTitle($this->getProdTitle());
        $copyObj->setProdDescription($this->getProdDescription());
        $copyObj->setProdGeneral($this->getProdGeneral());
        $copyObj->setProdEra($this->getProdEra());
        $copyObj->setProdCompany($this->getProdCompany());
        $copyObj->setProdRelated($this->getProdRelated());
        $copyObj->setProdRelatedPa($this->getProdRelatedPa());
        $copyObj->setProdRelatedM3($this->getProdRelatedM3());
        $copyObj->setProdRelated2($this->getProdRelated2());
        $copyObj->setProdSaveas($this->getProdSaveas());
        $copyObj->setProdAircraftreg($this->getProdAircraftreg());
        $copyObj->setMb($this->getMb());
        $copyObj->setPa($this->getPa());
        $copyObj->setM3($this->getM3());
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
     * @return \TblProdInfo Clone of current object.
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
     * Declares an association between this object and a ChildTblEra object.
     *
     * @param  ChildTblEra $v
     * @return $this|\TblProdInfo The current object (for fluent API support)
     * @throws PropelException
     */
    public function setTblEra(ChildTblEra $v = null)
    {
        if ($v === null) {
            $this->setProdEra(NULL);
        } else {
            $this->setProdEra($v->getEraId());
        }

        $this->aTblEra = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildTblEra object, it will not be re-added.
        if ($v !== null) {
            $v->addTblProdInfo($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildTblEra object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildTblEra The associated ChildTblEra object.
     * @throws PropelException
     */
    public function getTblEra(ConnectionInterface $con = null)
    {
        if ($this->aTblEra === null && ($this->prod_era !== null)) {
            $this->aTblEra = ChildTblEraQuery::create()->findPk($this->prod_era, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aTblEra->addTblProdInfos($this);
             */
        }

        return $this->aTblEra;
    }

    /**
     * Declares an association between this object and a ChildTblGeneral object.
     *
     * @param  ChildTblGeneral $v
     * @return $this|\TblProdInfo The current object (for fluent API support)
     * @throws PropelException
     */
    public function setTblGeneral(ChildTblGeneral $v = null)
    {
        if ($v === null) {
            $this->setProdGeneral(NULL);
        } else {
            $this->setProdGeneral($v->getProdGeneral());
        }

        $this->aTblGeneral = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildTblGeneral object, it will not be re-added.
        if ($v !== null) {
            $v->addTblProdInfo($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildTblGeneral object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildTblGeneral The associated ChildTblGeneral object.
     * @throws PropelException
     */
    public function getTblGeneral(ConnectionInterface $con = null)
    {
        if ($this->aTblGeneral === null && ($this->prod_general !== null)) {
            $this->aTblGeneral = ChildTblGeneralQuery::create()->findPk($this->prod_general, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aTblGeneral->addTblProdInfos($this);
             */
        }

        return $this->aTblGeneral;
    }

    /**
     * Declares an association between this object and a ChildTblMenus object.
     *
     * @param  ChildTblMenus $v
     * @return $this|\TblProdInfo The current object (for fluent API support)
     * @throws PropelException
     */
    public function setTblMenus(ChildTblMenus $v = null)
    {
        if ($v === null) {
            $this->setProdCategory(NULL);
        } else {
            $this->setProdCategory($v->getMenuAlias());
        }

        $this->aTblMenus = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildTblMenus object, it will not be re-added.
        if ($v !== null) {
            $v->addTblProdInfo($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildTblMenus object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildTblMenus The associated ChildTblMenus object.
     * @throws PropelException
     */
    public function getTblMenus(ConnectionInterface $con = null)
    {
        if ($this->aTblMenus === null && (($this->prod_category !== "" && $this->prod_category !== null))) {
            $this->aTblMenus = ChildTblMenusQuery::create()
                ->filterByTblProdInfo($this) // here
                ->findOne($con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aTblMenus->addTblProdInfos($this);
             */
        }

        return $this->aTblMenus;
    }

    /**
     * Declares an association between this object and a ChildTblProdPhotos object.
     *
     * @param  ChildTblProdPhotos $v
     * @return $this|\TblProdInfo The current object (for fluent API support)
     * @throws PropelException
     */
    public function setTblProdPhotos(ChildTblProdPhotos $v = null)
    {
        if ($v === null) {
            $this->setProdId(NULL);
        } else {
            $this->setProdId($v->getProdId());
        }

        $this->aTblProdPhotos = $v;

        // Add binding for other direction of this 1:1 relationship.
        if ($v !== null) {
            $v->setTblProdInfo($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildTblProdPhotos object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildTblProdPhotos The associated ChildTblProdPhotos object.
     * @throws PropelException
     */
    public function getTblProdPhotos(ConnectionInterface $con = null)
    {
        if ($this->aTblProdPhotos === null && ($this->prod_id !== null)) {
            $this->aTblProdPhotos = ChildTblProdPhotosQuery::create()->findPk($this->prod_id, $con);
            // Because this foreign key represents a one-to-one relationship, we will create a bi-directional association.
            $this->aTblProdPhotos->setTblProdInfo($this);
        }

        return $this->aTblProdPhotos;
    }

    /**
     * Declares an association between this object and a ChildTblProdPrices object.
     *
     * @param  ChildTblProdPrices $v
     * @return $this|\TblProdInfo The current object (for fluent API support)
     * @throws PropelException
     */
    public function setTblProdPrices(ChildTblProdPrices $v = null)
    {
        if ($v === null) {
            $this->setProdId(NULL);
        } else {
            $this->setProdId($v->getProdId());
        }

        $this->aTblProdPrices = $v;

        // Add binding for other direction of this 1:1 relationship.
        if ($v !== null) {
            $v->setTblProdInfo($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildTblProdPrices object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildTblProdPrices The associated ChildTblProdPrices object.
     * @throws PropelException
     */
    public function getTblProdPrices(ConnectionInterface $con = null)
    {
        if ($this->aTblProdPrices === null && ($this->prod_id !== null)) {
            $this->aTblProdPrices = ChildTblProdPricesQuery::create()->findPk($this->prod_id, $con);
            // Because this foreign key represents a one-to-one relationship, we will create a bi-directional association.
            $this->aTblProdPrices->setTblProdInfo($this);
        }

        return $this->aTblProdPrices;
    }

    /**
     * Declares an association between this object and a ChildTblProdPricing object.
     *
     * @param  ChildTblProdPricing $v
     * @return $this|\TblProdInfo The current object (for fluent API support)
     * @throws PropelException
     */
    public function setTblProdPricing(ChildTblProdPricing $v = null)
    {
        if ($v === null) {
            $this->setProdPriceId(NULL);
        } else {
            $this->setProdPriceId($v->getProdPriceId());
        }

        $this->aTblProdPricing = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildTblProdPricing object, it will not be re-added.
        if ($v !== null) {
            $v->addTblProdInfo($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildTblProdPricing object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildTblProdPricing The associated ChildTblProdPricing object.
     * @throws PropelException
     */
    public function getTblProdPricing(ConnectionInterface $con = null)
    {
        if ($this->aTblProdPricing === null && ($this->prod_price_id !== null)) {
            $this->aTblProdPricing = ChildTblProdPricingQuery::create()->findPk($this->prod_price_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aTblProdPricing->addTblProdInfos($this);
             */
        }

        return $this->aTblProdPricing;
    }

    /**
     * Declares an association between this object and a ChildTblProdSmaller object.
     *
     * @param  ChildTblProdSmaller $v
     * @return $this|\TblProdInfo The current object (for fluent API support)
     * @throws PropelException
     */
    public function setTblProdSmaller(ChildTblProdSmaller $v = null)
    {
        if ($v === null) {
            $this->setProdId(NULL);
        } else {
            $this->setProdId($v->getProdId());
        }

        $this->aTblProdSmaller = $v;

        // Add binding for other direction of this 1:1 relationship.
        if ($v !== null) {
            $v->setTblProdInfo($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildTblProdSmaller object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildTblProdSmaller The associated ChildTblProdSmaller object.
     * @throws PropelException
     */
    public function getTblProdSmaller(ConnectionInterface $con = null)
    {
        if ($this->aTblProdSmaller === null && ($this->prod_id !== null)) {
            $this->aTblProdSmaller = ChildTblProdSmallerQuery::create()->findPk($this->prod_id, $con);
            // Because this foreign key represents a one-to-one relationship, we will create a bi-directional association.
            $this->aTblProdSmaller->setTblProdInfo($this);
        }

        return $this->aTblProdSmaller;
    }

    /**
     * Declares an association between this object and a ChildTblShippingCategories object.
     *
     * @param  ChildTblShippingCategories $v
     * @return $this|\TblProdInfo The current object (for fluent API support)
     * @throws PropelException
     */
    public function setTblShippingCategories(ChildTblShippingCategories $v = null)
    {
        if ($v === null) {
            $this->setProdCategoryShipping(NULL);
        } else {
            $this->setProdCategoryShipping($v->getProdShippingPriceId());
        }

        $this->aTblShippingCategories = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildTblShippingCategories object, it will not be re-added.
        if ($v !== null) {
            $v->addTblProdInfo($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildTblShippingCategories object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildTblShippingCategories The associated ChildTblShippingCategories object.
     * @throws PropelException
     */
    public function getTblShippingCategories(ConnectionInterface $con = null)
    {
        if ($this->aTblShippingCategories === null && ($this->prod_category_shipping !== null)) {
            $this->aTblShippingCategories = ChildTblShippingCategoriesQuery::create()->findPk($this->prod_category_shipping, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aTblShippingCategories->addTblProdInfos($this);
             */
        }

        return $this->aTblShippingCategories;
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        if (null !== $this->aTblEra) {
            $this->aTblEra->removeTblProdInfo($this);
        }
        if (null !== $this->aTblGeneral) {
            $this->aTblGeneral->removeTblProdInfo($this);
        }
        if (null !== $this->aTblMenus) {
            $this->aTblMenus->removeTblProdInfo($this);
        }
        if (null !== $this->aTblProdPhotos) {
            $this->aTblProdPhotos->removeTblProdInfo($this);
        }
        if (null !== $this->aTblProdPrices) {
            $this->aTblProdPrices->removeTblProdInfo($this);
        }
        if (null !== $this->aTblProdPricing) {
            $this->aTblProdPricing->removeTblProdInfo($this);
        }
        if (null !== $this->aTblProdSmaller) {
            $this->aTblProdSmaller->removeTblProdInfo($this);
        }
        if (null !== $this->aTblShippingCategories) {
            $this->aTblShippingCategories->removeTblProdInfo($this);
        }
        $this->prod_id = null;
        $this->prod_price_id = null;
        $this->prod_name = null;
        $this->prod_alt1 = null;
        $this->prod_alt2 = null;
        $this->prod_alt3 = null;
        $this->prod_alt4 = null;
        $this->prod_code = null;
        $this->prod_category = null;
        $this->prod_category_shipping = null;
        $this->prod_writeup = null;
        $this->prod_length = null;
        $this->prod_wingspan = null;
        $this->prod_height = null;
        $this->prod_scale = null;
        $this->prod_links = null;
        $this->prod_linkdescription = null;
        $this->prod_front = null;
        $this->prod_keywords = null;
        $this->prod_keywords_writeup = null;
        $this->prod_title = null;
        $this->prod_description = null;
        $this->prod_general = null;
        $this->prod_era = null;
        $this->prod_company = null;
        $this->prod_related = null;
        $this->prod_related_pa = null;
        $this->prod_related_m3 = null;
        $this->prod_related2 = null;
        $this->prod_saveas = null;
        $this->prod_aircraftreg = null;
        $this->mb = null;
        $this->pa = null;
        $this->m3 = null;
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

        $this->aTblEra = null;
        $this->aTblGeneral = null;
        $this->aTblMenus = null;
        $this->aTblProdPhotos = null;
        $this->aTblProdPrices = null;
        $this->aTblProdPricing = null;
        $this->aTblProdSmaller = null;
        $this->aTblShippingCategories = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(TblProdInfoTableMap::DEFAULT_STRING_FORMAT);
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
