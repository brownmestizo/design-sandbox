<?php

namespace Base;

use \TblShippingPriorityQuery as ChildTblShippingPriorityQuery;
use \Exception;
use \PDO;
use Map\TblShippingPriorityTableMap;
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
 * Base class that represents a row from the 'tbl_shipping_priority' table.
 *
 * 
 *
* @package    propel.generator..Base
*/
abstract class TblShippingPriority implements ActiveRecordInterface 
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\TblShippingPriorityTableMap';


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
     * The value for the weight_idp field.
     * 
     * @var        int
     */
    protected $weight_idp;

    /**
     * The value for the weight_name field.
     * 
     * @var        string
     */
    protected $weight_name;

    /**
     * The value for the a field.
     * 
     * @var        string
     */
    protected $a;

    /**
     * The value for the b field.
     * 
     * @var        string
     */
    protected $b;

    /**
     * The value for the c field.
     * 
     * @var        string
     */
    protected $c;

    /**
     * The value for the d field.
     * 
     * @var        string
     */
    protected $d;

    /**
     * The value for the e field.
     * 
     * @var        string
     */
    protected $e;

    /**
     * The value for the f field.
     * 
     * @var        string
     */
    protected $f;

    /**
     * The value for the g field.
     * 
     * @var        string
     */
    protected $g;

    /**
     * The value for the h field.
     * 
     * @var        string
     */
    protected $h;

    /**
     * The value for the k field.
     * 
     * @var        string
     */
    protected $k;

    /**
     * The value for the n field.
     * 
     * @var        string
     */
    protected $n;

    /**
     * The value for the o field.
     * 
     * @var        string
     */
    protected $o;

    /**
     * The value for the p field.
     * 
     * @var        string
     */
    protected $p;

    /**
     * The value for the q field.
     * 
     * @var        string
     */
    protected $q;

    /**
     * The value for the r field.
     * 
     * @var        string
     */
    protected $r;

    /**
     * The value for the t field.
     * 
     * @var        string
     */
    protected $t;

    /**
     * The value for the u field.
     * 
     * @var        string
     */
    protected $u;

    /**
     * The value for the v field.
     * 
     * @var        string
     */
    protected $v;

    /**
     * The value for the w field.
     * 
     * @var        string
     */
    protected $w;

    /**
     * The value for the x field.
     * 
     * @var        string
     */
    protected $x;

    /**
     * The value for the y field.
     * 
     * @var        string
     */
    protected $y;

    /**
     * The value for the z field.
     * 
     * @var        string
     */
    protected $z;

    /**
     * The value for the aa field.
     * 
     * @var        string
     */
    protected $aa;

    /**
     * The value for the ab field.
     * 
     * @var        string
     */
    protected $ab;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * Initializes internal state of Base\TblShippingPriority object.
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
     * Compares this with another <code>TblShippingPriority</code> instance.  If
     * <code>obj</code> is an instance of <code>TblShippingPriority</code>, delegates to
     * <code>equals(TblShippingPriority)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|TblShippingPriority The current object, for fluid interface
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
     * Get the [weight_idp] column value.
     * 
     * @return int
     */
    public function getWeightIdp()
    {
        return $this->weight_idp;
    }

    /**
     * Get the [weight_name] column value.
     * 
     * @return string
     */
    public function getWeightName()
    {
        return $this->weight_name;
    }

    /**
     * Get the [a] column value.
     * 
     * @return string
     */
    public function getA()
    {
        return $this->a;
    }

    /**
     * Get the [b] column value.
     * 
     * @return string
     */
    public function getB()
    {
        return $this->b;
    }

    /**
     * Get the [c] column value.
     * 
     * @return string
     */
    public function getC()
    {
        return $this->c;
    }

    /**
     * Get the [d] column value.
     * 
     * @return string
     */
    public function getD()
    {
        return $this->d;
    }

    /**
     * Get the [e] column value.
     * 
     * @return string
     */
    public function getE()
    {
        return $this->e;
    }

    /**
     * Get the [f] column value.
     * 
     * @return string
     */
    public function getF()
    {
        return $this->f;
    }

    /**
     * Get the [g] column value.
     * 
     * @return string
     */
    public function getG()
    {
        return $this->g;
    }

    /**
     * Get the [h] column value.
     * 
     * @return string
     */
    public function getH()
    {
        return $this->h;
    }

    /**
     * Get the [k] column value.
     * 
     * @return string
     */
    public function getK()
    {
        return $this->k;
    }

    /**
     * Get the [n] column value.
     * 
     * @return string
     */
    public function getN()
    {
        return $this->n;
    }

    /**
     * Get the [o] column value.
     * 
     * @return string
     */
    public function getO()
    {
        return $this->o;
    }

    /**
     * Get the [p] column value.
     * 
     * @return string
     */
    public function getP()
    {
        return $this->p;
    }

    /**
     * Get the [q] column value.
     * 
     * @return string
     */
    public function getQ()
    {
        return $this->q;
    }

    /**
     * Get the [r] column value.
     * 
     * @return string
     */
    public function getR()
    {
        return $this->r;
    }

    /**
     * Get the [t] column value.
     * 
     * @return string
     */
    public function getT()
    {
        return $this->t;
    }

    /**
     * Get the [u] column value.
     * 
     * @return string
     */
    public function getU()
    {
        return $this->u;
    }

    /**
     * Get the [v] column value.
     * 
     * @return string
     */
    public function getV()
    {
        return $this->v;
    }

    /**
     * Get the [w] column value.
     * 
     * @return string
     */
    public function getW()
    {
        return $this->w;
    }

    /**
     * Get the [x] column value.
     * 
     * @return string
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * Get the [y] column value.
     * 
     * @return string
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * Get the [z] column value.
     * 
     * @return string
     */
    public function getZ()
    {
        return $this->z;
    }

    /**
     * Get the [aa] column value.
     * 
     * @return string
     */
    public function getAa()
    {
        return $this->aa;
    }

    /**
     * Get the [ab] column value.
     * 
     * @return string
     */
    public function getAb()
    {
        return $this->ab;
    }

    /**
     * Set the value of [weight_idp] column.
     * 
     * @param int $v new value
     * @return $this|\TblShippingPriority The current object (for fluent API support)
     */
    public function setWeightIdp($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->weight_idp !== $v) {
            $this->weight_idp = $v;
            $this->modifiedColumns[TblShippingPriorityTableMap::COL_WEIGHT_IDP] = true;
        }

        return $this;
    } // setWeightIdp()

    /**
     * Set the value of [weight_name] column.
     * 
     * @param string $v new value
     * @return $this|\TblShippingPriority The current object (for fluent API support)
     */
    public function setWeightName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->weight_name !== $v) {
            $this->weight_name = $v;
            $this->modifiedColumns[TblShippingPriorityTableMap::COL_WEIGHT_NAME] = true;
        }

        return $this;
    } // setWeightName()

    /**
     * Set the value of [a] column.
     * 
     * @param string $v new value
     * @return $this|\TblShippingPriority The current object (for fluent API support)
     */
    public function setA($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->a !== $v) {
            $this->a = $v;
            $this->modifiedColumns[TblShippingPriorityTableMap::COL_A] = true;
        }

        return $this;
    } // setA()

    /**
     * Set the value of [b] column.
     * 
     * @param string $v new value
     * @return $this|\TblShippingPriority The current object (for fluent API support)
     */
    public function setB($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->b !== $v) {
            $this->b = $v;
            $this->modifiedColumns[TblShippingPriorityTableMap::COL_B] = true;
        }

        return $this;
    } // setB()

    /**
     * Set the value of [c] column.
     * 
     * @param string $v new value
     * @return $this|\TblShippingPriority The current object (for fluent API support)
     */
    public function setC($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->c !== $v) {
            $this->c = $v;
            $this->modifiedColumns[TblShippingPriorityTableMap::COL_C] = true;
        }

        return $this;
    } // setC()

    /**
     * Set the value of [d] column.
     * 
     * @param string $v new value
     * @return $this|\TblShippingPriority The current object (for fluent API support)
     */
    public function setD($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->d !== $v) {
            $this->d = $v;
            $this->modifiedColumns[TblShippingPriorityTableMap::COL_D] = true;
        }

        return $this;
    } // setD()

    /**
     * Set the value of [e] column.
     * 
     * @param string $v new value
     * @return $this|\TblShippingPriority The current object (for fluent API support)
     */
    public function setE($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->e !== $v) {
            $this->e = $v;
            $this->modifiedColumns[TblShippingPriorityTableMap::COL_E] = true;
        }

        return $this;
    } // setE()

    /**
     * Set the value of [f] column.
     * 
     * @param string $v new value
     * @return $this|\TblShippingPriority The current object (for fluent API support)
     */
    public function setF($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->f !== $v) {
            $this->f = $v;
            $this->modifiedColumns[TblShippingPriorityTableMap::COL_F] = true;
        }

        return $this;
    } // setF()

    /**
     * Set the value of [g] column.
     * 
     * @param string $v new value
     * @return $this|\TblShippingPriority The current object (for fluent API support)
     */
    public function setG($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->g !== $v) {
            $this->g = $v;
            $this->modifiedColumns[TblShippingPriorityTableMap::COL_G] = true;
        }

        return $this;
    } // setG()

    /**
     * Set the value of [h] column.
     * 
     * @param string $v new value
     * @return $this|\TblShippingPriority The current object (for fluent API support)
     */
    public function setH($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->h !== $v) {
            $this->h = $v;
            $this->modifiedColumns[TblShippingPriorityTableMap::COL_H] = true;
        }

        return $this;
    } // setH()

    /**
     * Set the value of [k] column.
     * 
     * @param string $v new value
     * @return $this|\TblShippingPriority The current object (for fluent API support)
     */
    public function setK($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->k !== $v) {
            $this->k = $v;
            $this->modifiedColumns[TblShippingPriorityTableMap::COL_K] = true;
        }

        return $this;
    } // setK()

    /**
     * Set the value of [n] column.
     * 
     * @param string $v new value
     * @return $this|\TblShippingPriority The current object (for fluent API support)
     */
    public function setN($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->n !== $v) {
            $this->n = $v;
            $this->modifiedColumns[TblShippingPriorityTableMap::COL_N] = true;
        }

        return $this;
    } // setN()

    /**
     * Set the value of [o] column.
     * 
     * @param string $v new value
     * @return $this|\TblShippingPriority The current object (for fluent API support)
     */
    public function setO($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->o !== $v) {
            $this->o = $v;
            $this->modifiedColumns[TblShippingPriorityTableMap::COL_O] = true;
        }

        return $this;
    } // setO()

    /**
     * Set the value of [p] column.
     * 
     * @param string $v new value
     * @return $this|\TblShippingPriority The current object (for fluent API support)
     */
    public function setP($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->p !== $v) {
            $this->p = $v;
            $this->modifiedColumns[TblShippingPriorityTableMap::COL_P] = true;
        }

        return $this;
    } // setP()

    /**
     * Set the value of [q] column.
     * 
     * @param string $v new value
     * @return $this|\TblShippingPriority The current object (for fluent API support)
     */
    public function setQ($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->q !== $v) {
            $this->q = $v;
            $this->modifiedColumns[TblShippingPriorityTableMap::COL_Q] = true;
        }

        return $this;
    } // setQ()

    /**
     * Set the value of [r] column.
     * 
     * @param string $v new value
     * @return $this|\TblShippingPriority The current object (for fluent API support)
     */
    public function setR($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->r !== $v) {
            $this->r = $v;
            $this->modifiedColumns[TblShippingPriorityTableMap::COL_R] = true;
        }

        return $this;
    } // setR()

    /**
     * Set the value of [t] column.
     * 
     * @param string $v new value
     * @return $this|\TblShippingPriority The current object (for fluent API support)
     */
    public function setT($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->t !== $v) {
            $this->t = $v;
            $this->modifiedColumns[TblShippingPriorityTableMap::COL_T] = true;
        }

        return $this;
    } // setT()

    /**
     * Set the value of [u] column.
     * 
     * @param string $v new value
     * @return $this|\TblShippingPriority The current object (for fluent API support)
     */
    public function setU($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->u !== $v) {
            $this->u = $v;
            $this->modifiedColumns[TblShippingPriorityTableMap::COL_U] = true;
        }

        return $this;
    } // setU()

    /**
     * Set the value of [v] column.
     * 
     * @param string $v new value
     * @return $this|\TblShippingPriority The current object (for fluent API support)
     */
    public function setV($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->v !== $v) {
            $this->v = $v;
            $this->modifiedColumns[TblShippingPriorityTableMap::COL_V] = true;
        }

        return $this;
    } // setV()

    /**
     * Set the value of [w] column.
     * 
     * @param string $v new value
     * @return $this|\TblShippingPriority The current object (for fluent API support)
     */
    public function setW($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->w !== $v) {
            $this->w = $v;
            $this->modifiedColumns[TblShippingPriorityTableMap::COL_W] = true;
        }

        return $this;
    } // setW()

    /**
     * Set the value of [x] column.
     * 
     * @param string $v new value
     * @return $this|\TblShippingPriority The current object (for fluent API support)
     */
    public function setX($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->x !== $v) {
            $this->x = $v;
            $this->modifiedColumns[TblShippingPriorityTableMap::COL_X] = true;
        }

        return $this;
    } // setX()

    /**
     * Set the value of [y] column.
     * 
     * @param string $v new value
     * @return $this|\TblShippingPriority The current object (for fluent API support)
     */
    public function setY($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->y !== $v) {
            $this->y = $v;
            $this->modifiedColumns[TblShippingPriorityTableMap::COL_Y] = true;
        }

        return $this;
    } // setY()

    /**
     * Set the value of [z] column.
     * 
     * @param string $v new value
     * @return $this|\TblShippingPriority The current object (for fluent API support)
     */
    public function setZ($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->z !== $v) {
            $this->z = $v;
            $this->modifiedColumns[TblShippingPriorityTableMap::COL_Z] = true;
        }

        return $this;
    } // setZ()

    /**
     * Set the value of [aa] column.
     * 
     * @param string $v new value
     * @return $this|\TblShippingPriority The current object (for fluent API support)
     */
    public function setAa($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aa !== $v) {
            $this->aa = $v;
            $this->modifiedColumns[TblShippingPriorityTableMap::COL_AA] = true;
        }

        return $this;
    } // setAa()

    /**
     * Set the value of [ab] column.
     * 
     * @param string $v new value
     * @return $this|\TblShippingPriority The current object (for fluent API support)
     */
    public function setAb($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ab !== $v) {
            $this->ab = $v;
            $this->modifiedColumns[TblShippingPriorityTableMap::COL_AB] = true;
        }

        return $this;
    } // setAb()

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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : TblShippingPriorityTableMap::translateFieldName('WeightIdp', TableMap::TYPE_PHPNAME, $indexType)];
            $this->weight_idp = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : TblShippingPriorityTableMap::translateFieldName('WeightName', TableMap::TYPE_PHPNAME, $indexType)];
            $this->weight_name = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : TblShippingPriorityTableMap::translateFieldName('A', TableMap::TYPE_PHPNAME, $indexType)];
            $this->a = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : TblShippingPriorityTableMap::translateFieldName('B', TableMap::TYPE_PHPNAME, $indexType)];
            $this->b = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : TblShippingPriorityTableMap::translateFieldName('C', TableMap::TYPE_PHPNAME, $indexType)];
            $this->c = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : TblShippingPriorityTableMap::translateFieldName('D', TableMap::TYPE_PHPNAME, $indexType)];
            $this->d = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : TblShippingPriorityTableMap::translateFieldName('E', TableMap::TYPE_PHPNAME, $indexType)];
            $this->e = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : TblShippingPriorityTableMap::translateFieldName('F', TableMap::TYPE_PHPNAME, $indexType)];
            $this->f = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : TblShippingPriorityTableMap::translateFieldName('G', TableMap::TYPE_PHPNAME, $indexType)];
            $this->g = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : TblShippingPriorityTableMap::translateFieldName('H', TableMap::TYPE_PHPNAME, $indexType)];
            $this->h = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : TblShippingPriorityTableMap::translateFieldName('K', TableMap::TYPE_PHPNAME, $indexType)];
            $this->k = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : TblShippingPriorityTableMap::translateFieldName('N', TableMap::TYPE_PHPNAME, $indexType)];
            $this->n = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : TblShippingPriorityTableMap::translateFieldName('O', TableMap::TYPE_PHPNAME, $indexType)];
            $this->o = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : TblShippingPriorityTableMap::translateFieldName('P', TableMap::TYPE_PHPNAME, $indexType)];
            $this->p = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : TblShippingPriorityTableMap::translateFieldName('Q', TableMap::TYPE_PHPNAME, $indexType)];
            $this->q = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : TblShippingPriorityTableMap::translateFieldName('R', TableMap::TYPE_PHPNAME, $indexType)];
            $this->r = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : TblShippingPriorityTableMap::translateFieldName('T', TableMap::TYPE_PHPNAME, $indexType)];
            $this->t = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : TblShippingPriorityTableMap::translateFieldName('U', TableMap::TYPE_PHPNAME, $indexType)];
            $this->u = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : TblShippingPriorityTableMap::translateFieldName('V', TableMap::TYPE_PHPNAME, $indexType)];
            $this->v = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : TblShippingPriorityTableMap::translateFieldName('W', TableMap::TYPE_PHPNAME, $indexType)];
            $this->w = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : TblShippingPriorityTableMap::translateFieldName('X', TableMap::TYPE_PHPNAME, $indexType)];
            $this->x = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : TblShippingPriorityTableMap::translateFieldName('Y', TableMap::TYPE_PHPNAME, $indexType)];
            $this->y = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : TblShippingPriorityTableMap::translateFieldName('Z', TableMap::TYPE_PHPNAME, $indexType)];
            $this->z = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : TblShippingPriorityTableMap::translateFieldName('Aa', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aa = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : TblShippingPriorityTableMap::translateFieldName('Ab', TableMap::TYPE_PHPNAME, $indexType)];
            $this->ab = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 25; // 25 = TblShippingPriorityTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\TblShippingPriority'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(TblShippingPriorityTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildTblShippingPriorityQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see TblShippingPriority::setDeleted()
     * @see TblShippingPriority::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(TblShippingPriorityTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildTblShippingPriorityQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(TblShippingPriorityTableMap::DATABASE_NAME);
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
                TblShippingPriorityTableMap::addInstanceToPool($this);
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

        $this->modifiedColumns[TblShippingPriorityTableMap::COL_WEIGHT_IDP] = true;
        if (null !== $this->weight_idp) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . TblShippingPriorityTableMap::COL_WEIGHT_IDP . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(TblShippingPriorityTableMap::COL_WEIGHT_IDP)) {
            $modifiedColumns[':p' . $index++]  = 'weight_idp';
        }
        if ($this->isColumnModified(TblShippingPriorityTableMap::COL_WEIGHT_NAME)) {
            $modifiedColumns[':p' . $index++]  = 'weight_name';
        }
        if ($this->isColumnModified(TblShippingPriorityTableMap::COL_A)) {
            $modifiedColumns[':p' . $index++]  = 'A';
        }
        if ($this->isColumnModified(TblShippingPriorityTableMap::COL_B)) {
            $modifiedColumns[':p' . $index++]  = 'B';
        }
        if ($this->isColumnModified(TblShippingPriorityTableMap::COL_C)) {
            $modifiedColumns[':p' . $index++]  = 'C';
        }
        if ($this->isColumnModified(TblShippingPriorityTableMap::COL_D)) {
            $modifiedColumns[':p' . $index++]  = 'D';
        }
        if ($this->isColumnModified(TblShippingPriorityTableMap::COL_E)) {
            $modifiedColumns[':p' . $index++]  = 'E';
        }
        if ($this->isColumnModified(TblShippingPriorityTableMap::COL_F)) {
            $modifiedColumns[':p' . $index++]  = 'F';
        }
        if ($this->isColumnModified(TblShippingPriorityTableMap::COL_G)) {
            $modifiedColumns[':p' . $index++]  = 'G';
        }
        if ($this->isColumnModified(TblShippingPriorityTableMap::COL_H)) {
            $modifiedColumns[':p' . $index++]  = 'H';
        }
        if ($this->isColumnModified(TblShippingPriorityTableMap::COL_K)) {
            $modifiedColumns[':p' . $index++]  = 'K';
        }
        if ($this->isColumnModified(TblShippingPriorityTableMap::COL_N)) {
            $modifiedColumns[':p' . $index++]  = 'N';
        }
        if ($this->isColumnModified(TblShippingPriorityTableMap::COL_O)) {
            $modifiedColumns[':p' . $index++]  = 'O';
        }
        if ($this->isColumnModified(TblShippingPriorityTableMap::COL_P)) {
            $modifiedColumns[':p' . $index++]  = 'P';
        }
        if ($this->isColumnModified(TblShippingPriorityTableMap::COL_Q)) {
            $modifiedColumns[':p' . $index++]  = 'Q';
        }
        if ($this->isColumnModified(TblShippingPriorityTableMap::COL_R)) {
            $modifiedColumns[':p' . $index++]  = 'R';
        }
        if ($this->isColumnModified(TblShippingPriorityTableMap::COL_T)) {
            $modifiedColumns[':p' . $index++]  = 'T';
        }
        if ($this->isColumnModified(TblShippingPriorityTableMap::COL_U)) {
            $modifiedColumns[':p' . $index++]  = 'U';
        }
        if ($this->isColumnModified(TblShippingPriorityTableMap::COL_V)) {
            $modifiedColumns[':p' . $index++]  = 'V';
        }
        if ($this->isColumnModified(TblShippingPriorityTableMap::COL_W)) {
            $modifiedColumns[':p' . $index++]  = 'W';
        }
        if ($this->isColumnModified(TblShippingPriorityTableMap::COL_X)) {
            $modifiedColumns[':p' . $index++]  = 'X';
        }
        if ($this->isColumnModified(TblShippingPriorityTableMap::COL_Y)) {
            $modifiedColumns[':p' . $index++]  = 'Y';
        }
        if ($this->isColumnModified(TblShippingPriorityTableMap::COL_Z)) {
            $modifiedColumns[':p' . $index++]  = 'Z';
        }
        if ($this->isColumnModified(TblShippingPriorityTableMap::COL_AA)) {
            $modifiedColumns[':p' . $index++]  = 'AA';
        }
        if ($this->isColumnModified(TblShippingPriorityTableMap::COL_AB)) {
            $modifiedColumns[':p' . $index++]  = 'AB';
        }

        $sql = sprintf(
            'INSERT INTO tbl_shipping_priority (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'weight_idp':                        
                        $stmt->bindValue($identifier, $this->weight_idp, PDO::PARAM_INT);
                        break;
                    case 'weight_name':                        
                        $stmt->bindValue($identifier, $this->weight_name, PDO::PARAM_STR);
                        break;
                    case 'A':                        
                        $stmt->bindValue($identifier, $this->a, PDO::PARAM_STR);
                        break;
                    case 'B':                        
                        $stmt->bindValue($identifier, $this->b, PDO::PARAM_STR);
                        break;
                    case 'C':                        
                        $stmt->bindValue($identifier, $this->c, PDO::PARAM_STR);
                        break;
                    case 'D':                        
                        $stmt->bindValue($identifier, $this->d, PDO::PARAM_STR);
                        break;
                    case 'E':                        
                        $stmt->bindValue($identifier, $this->e, PDO::PARAM_STR);
                        break;
                    case 'F':                        
                        $stmt->bindValue($identifier, $this->f, PDO::PARAM_STR);
                        break;
                    case 'G':                        
                        $stmt->bindValue($identifier, $this->g, PDO::PARAM_STR);
                        break;
                    case 'H':                        
                        $stmt->bindValue($identifier, $this->h, PDO::PARAM_STR);
                        break;
                    case 'K':                        
                        $stmt->bindValue($identifier, $this->k, PDO::PARAM_STR);
                        break;
                    case 'N':                        
                        $stmt->bindValue($identifier, $this->n, PDO::PARAM_STR);
                        break;
                    case 'O':                        
                        $stmt->bindValue($identifier, $this->o, PDO::PARAM_STR);
                        break;
                    case 'P':                        
                        $stmt->bindValue($identifier, $this->p, PDO::PARAM_STR);
                        break;
                    case 'Q':                        
                        $stmt->bindValue($identifier, $this->q, PDO::PARAM_STR);
                        break;
                    case 'R':                        
                        $stmt->bindValue($identifier, $this->r, PDO::PARAM_STR);
                        break;
                    case 'T':                        
                        $stmt->bindValue($identifier, $this->t, PDO::PARAM_STR);
                        break;
                    case 'U':                        
                        $stmt->bindValue($identifier, $this->u, PDO::PARAM_STR);
                        break;
                    case 'V':                        
                        $stmt->bindValue($identifier, $this->v, PDO::PARAM_STR);
                        break;
                    case 'W':                        
                        $stmt->bindValue($identifier, $this->w, PDO::PARAM_STR);
                        break;
                    case 'X':                        
                        $stmt->bindValue($identifier, $this->x, PDO::PARAM_STR);
                        break;
                    case 'Y':                        
                        $stmt->bindValue($identifier, $this->y, PDO::PARAM_STR);
                        break;
                    case 'Z':                        
                        $stmt->bindValue($identifier, $this->z, PDO::PARAM_STR);
                        break;
                    case 'AA':                        
                        $stmt->bindValue($identifier, $this->aa, PDO::PARAM_STR);
                        break;
                    case 'AB':                        
                        $stmt->bindValue($identifier, $this->ab, PDO::PARAM_STR);
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
        $this->setWeightIdp($pk);

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
        $pos = TblShippingPriorityTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getWeightIdp();
                break;
            case 1:
                return $this->getWeightName();
                break;
            case 2:
                return $this->getA();
                break;
            case 3:
                return $this->getB();
                break;
            case 4:
                return $this->getC();
                break;
            case 5:
                return $this->getD();
                break;
            case 6:
                return $this->getE();
                break;
            case 7:
                return $this->getF();
                break;
            case 8:
                return $this->getG();
                break;
            case 9:
                return $this->getH();
                break;
            case 10:
                return $this->getK();
                break;
            case 11:
                return $this->getN();
                break;
            case 12:
                return $this->getO();
                break;
            case 13:
                return $this->getP();
                break;
            case 14:
                return $this->getQ();
                break;
            case 15:
                return $this->getR();
                break;
            case 16:
                return $this->getT();
                break;
            case 17:
                return $this->getU();
                break;
            case 18:
                return $this->getV();
                break;
            case 19:
                return $this->getW();
                break;
            case 20:
                return $this->getX();
                break;
            case 21:
                return $this->getY();
                break;
            case 22:
                return $this->getZ();
                break;
            case 23:
                return $this->getAa();
                break;
            case 24:
                return $this->getAb();
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

        if (isset($alreadyDumpedObjects['TblShippingPriority'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['TblShippingPriority'][$this->hashCode()] = true;
        $keys = TblShippingPriorityTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getWeightIdp(),
            $keys[1] => $this->getWeightName(),
            $keys[2] => $this->getA(),
            $keys[3] => $this->getB(),
            $keys[4] => $this->getC(),
            $keys[5] => $this->getD(),
            $keys[6] => $this->getE(),
            $keys[7] => $this->getF(),
            $keys[8] => $this->getG(),
            $keys[9] => $this->getH(),
            $keys[10] => $this->getK(),
            $keys[11] => $this->getN(),
            $keys[12] => $this->getO(),
            $keys[13] => $this->getP(),
            $keys[14] => $this->getQ(),
            $keys[15] => $this->getR(),
            $keys[16] => $this->getT(),
            $keys[17] => $this->getU(),
            $keys[18] => $this->getV(),
            $keys[19] => $this->getW(),
            $keys[20] => $this->getX(),
            $keys[21] => $this->getY(),
            $keys[22] => $this->getZ(),
            $keys[23] => $this->getAa(),
            $keys[24] => $this->getAb(),
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
     * @return $this|\TblShippingPriority
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = TblShippingPriorityTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\TblShippingPriority
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setWeightIdp($value);
                break;
            case 1:
                $this->setWeightName($value);
                break;
            case 2:
                $this->setA($value);
                break;
            case 3:
                $this->setB($value);
                break;
            case 4:
                $this->setC($value);
                break;
            case 5:
                $this->setD($value);
                break;
            case 6:
                $this->setE($value);
                break;
            case 7:
                $this->setF($value);
                break;
            case 8:
                $this->setG($value);
                break;
            case 9:
                $this->setH($value);
                break;
            case 10:
                $this->setK($value);
                break;
            case 11:
                $this->setN($value);
                break;
            case 12:
                $this->setO($value);
                break;
            case 13:
                $this->setP($value);
                break;
            case 14:
                $this->setQ($value);
                break;
            case 15:
                $this->setR($value);
                break;
            case 16:
                $this->setT($value);
                break;
            case 17:
                $this->setU($value);
                break;
            case 18:
                $this->setV($value);
                break;
            case 19:
                $this->setW($value);
                break;
            case 20:
                $this->setX($value);
                break;
            case 21:
                $this->setY($value);
                break;
            case 22:
                $this->setZ($value);
                break;
            case 23:
                $this->setAa($value);
                break;
            case 24:
                $this->setAb($value);
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
        $keys = TblShippingPriorityTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setWeightIdp($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setWeightName($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setA($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setB($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setC($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setD($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setE($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setF($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setG($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setH($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setK($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setN($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setO($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setP($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setQ($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setR($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setT($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setU($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setV($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setW($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setX($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setY($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setZ($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setAa($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setAb($arr[$keys[24]]);
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
     * @return $this|\TblShippingPriority The current object, for fluid interface
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
        $criteria = new Criteria(TblShippingPriorityTableMap::DATABASE_NAME);

        if ($this->isColumnModified(TblShippingPriorityTableMap::COL_WEIGHT_IDP)) {
            $criteria->add(TblShippingPriorityTableMap::COL_WEIGHT_IDP, $this->weight_idp);
        }
        if ($this->isColumnModified(TblShippingPriorityTableMap::COL_WEIGHT_NAME)) {
            $criteria->add(TblShippingPriorityTableMap::COL_WEIGHT_NAME, $this->weight_name);
        }
        if ($this->isColumnModified(TblShippingPriorityTableMap::COL_A)) {
            $criteria->add(TblShippingPriorityTableMap::COL_A, $this->a);
        }
        if ($this->isColumnModified(TblShippingPriorityTableMap::COL_B)) {
            $criteria->add(TblShippingPriorityTableMap::COL_B, $this->b);
        }
        if ($this->isColumnModified(TblShippingPriorityTableMap::COL_C)) {
            $criteria->add(TblShippingPriorityTableMap::COL_C, $this->c);
        }
        if ($this->isColumnModified(TblShippingPriorityTableMap::COL_D)) {
            $criteria->add(TblShippingPriorityTableMap::COL_D, $this->d);
        }
        if ($this->isColumnModified(TblShippingPriorityTableMap::COL_E)) {
            $criteria->add(TblShippingPriorityTableMap::COL_E, $this->e);
        }
        if ($this->isColumnModified(TblShippingPriorityTableMap::COL_F)) {
            $criteria->add(TblShippingPriorityTableMap::COL_F, $this->f);
        }
        if ($this->isColumnModified(TblShippingPriorityTableMap::COL_G)) {
            $criteria->add(TblShippingPriorityTableMap::COL_G, $this->g);
        }
        if ($this->isColumnModified(TblShippingPriorityTableMap::COL_H)) {
            $criteria->add(TblShippingPriorityTableMap::COL_H, $this->h);
        }
        if ($this->isColumnModified(TblShippingPriorityTableMap::COL_K)) {
            $criteria->add(TblShippingPriorityTableMap::COL_K, $this->k);
        }
        if ($this->isColumnModified(TblShippingPriorityTableMap::COL_N)) {
            $criteria->add(TblShippingPriorityTableMap::COL_N, $this->n);
        }
        if ($this->isColumnModified(TblShippingPriorityTableMap::COL_O)) {
            $criteria->add(TblShippingPriorityTableMap::COL_O, $this->o);
        }
        if ($this->isColumnModified(TblShippingPriorityTableMap::COL_P)) {
            $criteria->add(TblShippingPriorityTableMap::COL_P, $this->p);
        }
        if ($this->isColumnModified(TblShippingPriorityTableMap::COL_Q)) {
            $criteria->add(TblShippingPriorityTableMap::COL_Q, $this->q);
        }
        if ($this->isColumnModified(TblShippingPriorityTableMap::COL_R)) {
            $criteria->add(TblShippingPriorityTableMap::COL_R, $this->r);
        }
        if ($this->isColumnModified(TblShippingPriorityTableMap::COL_T)) {
            $criteria->add(TblShippingPriorityTableMap::COL_T, $this->t);
        }
        if ($this->isColumnModified(TblShippingPriorityTableMap::COL_U)) {
            $criteria->add(TblShippingPriorityTableMap::COL_U, $this->u);
        }
        if ($this->isColumnModified(TblShippingPriorityTableMap::COL_V)) {
            $criteria->add(TblShippingPriorityTableMap::COL_V, $this->v);
        }
        if ($this->isColumnModified(TblShippingPriorityTableMap::COL_W)) {
            $criteria->add(TblShippingPriorityTableMap::COL_W, $this->w);
        }
        if ($this->isColumnModified(TblShippingPriorityTableMap::COL_X)) {
            $criteria->add(TblShippingPriorityTableMap::COL_X, $this->x);
        }
        if ($this->isColumnModified(TblShippingPriorityTableMap::COL_Y)) {
            $criteria->add(TblShippingPriorityTableMap::COL_Y, $this->y);
        }
        if ($this->isColumnModified(TblShippingPriorityTableMap::COL_Z)) {
            $criteria->add(TblShippingPriorityTableMap::COL_Z, $this->z);
        }
        if ($this->isColumnModified(TblShippingPriorityTableMap::COL_AA)) {
            $criteria->add(TblShippingPriorityTableMap::COL_AA, $this->aa);
        }
        if ($this->isColumnModified(TblShippingPriorityTableMap::COL_AB)) {
            $criteria->add(TblShippingPriorityTableMap::COL_AB, $this->ab);
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
        $criteria = ChildTblShippingPriorityQuery::create();
        $criteria->add(TblShippingPriorityTableMap::COL_WEIGHT_IDP, $this->weight_idp);

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
        $validPk = null !== $this->getWeightIdp();

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
        return $this->getWeightIdp();
    }

    /**
     * Generic method to set the primary key (weight_idp column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setWeightIdp($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getWeightIdp();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \TblShippingPriority (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setWeightName($this->getWeightName());
        $copyObj->setA($this->getA());
        $copyObj->setB($this->getB());
        $copyObj->setC($this->getC());
        $copyObj->setD($this->getD());
        $copyObj->setE($this->getE());
        $copyObj->setF($this->getF());
        $copyObj->setG($this->getG());
        $copyObj->setH($this->getH());
        $copyObj->setK($this->getK());
        $copyObj->setN($this->getN());
        $copyObj->setO($this->getO());
        $copyObj->setP($this->getP());
        $copyObj->setQ($this->getQ());
        $copyObj->setR($this->getR());
        $copyObj->setT($this->getT());
        $copyObj->setU($this->getU());
        $copyObj->setV($this->getV());
        $copyObj->setW($this->getW());
        $copyObj->setX($this->getX());
        $copyObj->setY($this->getY());
        $copyObj->setZ($this->getZ());
        $copyObj->setAa($this->getAa());
        $copyObj->setAb($this->getAb());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setWeightIdp(NULL); // this is a auto-increment column, so set to default value
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
     * @return \TblShippingPriority Clone of current object.
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
        $this->weight_idp = null;
        $this->weight_name = null;
        $this->a = null;
        $this->b = null;
        $this->c = null;
        $this->d = null;
        $this->e = null;
        $this->f = null;
        $this->g = null;
        $this->h = null;
        $this->k = null;
        $this->n = null;
        $this->o = null;
        $this->p = null;
        $this->q = null;
        $this->r = null;
        $this->t = null;
        $this->u = null;
        $this->v = null;
        $this->w = null;
        $this->x = null;
        $this->y = null;
        $this->z = null;
        $this->aa = null;
        $this->ab = null;
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
        return (string) $this->exportTo(TblShippingPriorityTableMap::DEFAULT_STRING_FORMAT);
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
