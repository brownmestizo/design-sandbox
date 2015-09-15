<?php

namespace Base;

use \TblProdSmaller as ChildTblProdSmaller;
use \TblProdSmallerQuery as ChildTblProdSmallerQuery;
use \Exception;
use \PDO;
use Map\TblProdSmallerTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'tbl_prod_smaller' table.
 *
 * 
 *
 * @method     ChildTblProdSmallerQuery orderByProdId($order = Criteria::ASC) Order by the prod_id column
 * @method     ChildTblProdSmallerQuery orderBySmEnableId($order = Criteria::ASC) Order by the sm_enable_id column
 * @method     ChildTblProdSmallerQuery orderBySmProdLength($order = Criteria::ASC) Order by the sm_prod_length column
 * @method     ChildTblProdSmallerQuery orderBySmProdWingspan($order = Criteria::ASC) Order by the sm_prod_wingspan column
 * @method     ChildTblProdSmallerQuery orderBySmProdHeight($order = Criteria::ASC) Order by the sm_prod_height column
 * @method     ChildTblProdSmallerQuery orderBySmProdScale($order = Criteria::ASC) Order by the sm_prod_scale column
 * @method     ChildTblProdSmallerQuery orderBySmProdPriceId($order = Criteria::ASC) Order by the sm_prod_price_id column
 * @method     ChildTblProdSmallerQuery orderBySmProdNormalprice($order = Criteria::ASC) Order by the sm_prod_normalprice column
 * @method     ChildTblProdSmallerQuery orderBySmProdShippingPriceId($order = Criteria::ASC) Order by the sm_prod_shipping_price_id column
 *
 * @method     ChildTblProdSmallerQuery groupByProdId() Group by the prod_id column
 * @method     ChildTblProdSmallerQuery groupBySmEnableId() Group by the sm_enable_id column
 * @method     ChildTblProdSmallerQuery groupBySmProdLength() Group by the sm_prod_length column
 * @method     ChildTblProdSmallerQuery groupBySmProdWingspan() Group by the sm_prod_wingspan column
 * @method     ChildTblProdSmallerQuery groupBySmProdHeight() Group by the sm_prod_height column
 * @method     ChildTblProdSmallerQuery groupBySmProdScale() Group by the sm_prod_scale column
 * @method     ChildTblProdSmallerQuery groupBySmProdPriceId() Group by the sm_prod_price_id column
 * @method     ChildTblProdSmallerQuery groupBySmProdNormalprice() Group by the sm_prod_normalprice column
 * @method     ChildTblProdSmallerQuery groupBySmProdShippingPriceId() Group by the sm_prod_shipping_price_id column
 *
 * @method     ChildTblProdSmallerQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildTblProdSmallerQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildTblProdSmallerQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildTblProdSmallerQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildTblProdSmallerQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildTblProdSmallerQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildTblProdSmallerQuery leftJoinTblProdInfo($relationAlias = null) Adds a LEFT JOIN clause to the query using the TblProdInfo relation
 * @method     ChildTblProdSmallerQuery rightJoinTblProdInfo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TblProdInfo relation
 * @method     ChildTblProdSmallerQuery innerJoinTblProdInfo($relationAlias = null) Adds a INNER JOIN clause to the query using the TblProdInfo relation
 *
 * @method     ChildTblProdSmallerQuery joinWithTblProdInfo($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the TblProdInfo relation
 *
 * @method     ChildTblProdSmallerQuery leftJoinWithTblProdInfo() Adds a LEFT JOIN clause and with to the query using the TblProdInfo relation
 * @method     ChildTblProdSmallerQuery rightJoinWithTblProdInfo() Adds a RIGHT JOIN clause and with to the query using the TblProdInfo relation
 * @method     ChildTblProdSmallerQuery innerJoinWithTblProdInfo() Adds a INNER JOIN clause and with to the query using the TblProdInfo relation
 *
 * @method     \TblProdInfoQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildTblProdSmaller findOne(ConnectionInterface $con = null) Return the first ChildTblProdSmaller matching the query
 * @method     ChildTblProdSmaller findOneOrCreate(ConnectionInterface $con = null) Return the first ChildTblProdSmaller matching the query, or a new ChildTblProdSmaller object populated from the query conditions when no match is found
 *
 * @method     ChildTblProdSmaller findOneByProdId(int $prod_id) Return the first ChildTblProdSmaller filtered by the prod_id column
 * @method     ChildTblProdSmaller findOneBySmEnableId(int $sm_enable_id) Return the first ChildTblProdSmaller filtered by the sm_enable_id column
 * @method     ChildTblProdSmaller findOneBySmProdLength(string $sm_prod_length) Return the first ChildTblProdSmaller filtered by the sm_prod_length column
 * @method     ChildTblProdSmaller findOneBySmProdWingspan(string $sm_prod_wingspan) Return the first ChildTblProdSmaller filtered by the sm_prod_wingspan column
 * @method     ChildTblProdSmaller findOneBySmProdHeight(string $sm_prod_height) Return the first ChildTblProdSmaller filtered by the sm_prod_height column
 * @method     ChildTblProdSmaller findOneBySmProdScale(string $sm_prod_scale) Return the first ChildTblProdSmaller filtered by the sm_prod_scale column
 * @method     ChildTblProdSmaller findOneBySmProdPriceId(int $sm_prod_price_id) Return the first ChildTblProdSmaller filtered by the sm_prod_price_id column
 * @method     ChildTblProdSmaller findOneBySmProdNormalprice(double $sm_prod_normalprice) Return the first ChildTblProdSmaller filtered by the sm_prod_normalprice column
 * @method     ChildTblProdSmaller findOneBySmProdShippingPriceId(int $sm_prod_shipping_price_id) Return the first ChildTblProdSmaller filtered by the sm_prod_shipping_price_id column *

 * @method     ChildTblProdSmaller requirePk($key, ConnectionInterface $con = null) Return the ChildTblProdSmaller by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdSmaller requireOne(ConnectionInterface $con = null) Return the first ChildTblProdSmaller matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTblProdSmaller requireOneByProdId(int $prod_id) Return the first ChildTblProdSmaller filtered by the prod_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdSmaller requireOneBySmEnableId(int $sm_enable_id) Return the first ChildTblProdSmaller filtered by the sm_enable_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdSmaller requireOneBySmProdLength(string $sm_prod_length) Return the first ChildTblProdSmaller filtered by the sm_prod_length column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdSmaller requireOneBySmProdWingspan(string $sm_prod_wingspan) Return the first ChildTblProdSmaller filtered by the sm_prod_wingspan column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdSmaller requireOneBySmProdHeight(string $sm_prod_height) Return the first ChildTblProdSmaller filtered by the sm_prod_height column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdSmaller requireOneBySmProdScale(string $sm_prod_scale) Return the first ChildTblProdSmaller filtered by the sm_prod_scale column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdSmaller requireOneBySmProdPriceId(int $sm_prod_price_id) Return the first ChildTblProdSmaller filtered by the sm_prod_price_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdSmaller requireOneBySmProdNormalprice(double $sm_prod_normalprice) Return the first ChildTblProdSmaller filtered by the sm_prod_normalprice column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdSmaller requireOneBySmProdShippingPriceId(int $sm_prod_shipping_price_id) Return the first ChildTblProdSmaller filtered by the sm_prod_shipping_price_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTblProdSmaller[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildTblProdSmaller objects based on current ModelCriteria
 * @method     ChildTblProdSmaller[]|ObjectCollection findByProdId(int $prod_id) Return ChildTblProdSmaller objects filtered by the prod_id column
 * @method     ChildTblProdSmaller[]|ObjectCollection findBySmEnableId(int $sm_enable_id) Return ChildTblProdSmaller objects filtered by the sm_enable_id column
 * @method     ChildTblProdSmaller[]|ObjectCollection findBySmProdLength(string $sm_prod_length) Return ChildTblProdSmaller objects filtered by the sm_prod_length column
 * @method     ChildTblProdSmaller[]|ObjectCollection findBySmProdWingspan(string $sm_prod_wingspan) Return ChildTblProdSmaller objects filtered by the sm_prod_wingspan column
 * @method     ChildTblProdSmaller[]|ObjectCollection findBySmProdHeight(string $sm_prod_height) Return ChildTblProdSmaller objects filtered by the sm_prod_height column
 * @method     ChildTblProdSmaller[]|ObjectCollection findBySmProdScale(string $sm_prod_scale) Return ChildTblProdSmaller objects filtered by the sm_prod_scale column
 * @method     ChildTblProdSmaller[]|ObjectCollection findBySmProdPriceId(int $sm_prod_price_id) Return ChildTblProdSmaller objects filtered by the sm_prod_price_id column
 * @method     ChildTblProdSmaller[]|ObjectCollection findBySmProdNormalprice(double $sm_prod_normalprice) Return ChildTblProdSmaller objects filtered by the sm_prod_normalprice column
 * @method     ChildTblProdSmaller[]|ObjectCollection findBySmProdShippingPriceId(int $sm_prod_shipping_price_id) Return ChildTblProdSmaller objects filtered by the sm_prod_shipping_price_id column
 * @method     ChildTblProdSmaller[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class TblProdSmallerQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\TblProdSmallerQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpm', $modelName = '\\TblProdSmaller', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildTblProdSmallerQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildTblProdSmallerQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildTblProdSmallerQuery) {
            return $criteria;
        }
        $query = new ChildTblProdSmallerQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildTblProdSmaller|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TblProdSmallerTableMap::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(TblProdSmallerTableMap::DATABASE_NAME);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildTblProdSmaller A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT prod_id, sm_enable_id, sm_prod_length, sm_prod_wingspan, sm_prod_height, sm_prod_scale, sm_prod_price_id, sm_prod_normalprice, sm_prod_shipping_price_id FROM tbl_prod_smaller WHERE prod_id = :p0';
        try {
            $stmt = $con->prepare($sql);            
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildTblProdSmaller $obj */
            $obj = new ChildTblProdSmaller();
            $obj->hydrate($row);
            TblProdSmallerTableMap::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @return ChildTblProdSmaller|array|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, ConnectionInterface $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($dataFetcher);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     ConnectionInterface $con an optional connection object
     *
     * @return ObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getReadConnection($this->getDbName());
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($dataFetcher);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildTblProdSmallerQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TblProdSmallerTableMap::COL_PROD_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildTblProdSmallerQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TblProdSmallerTableMap::COL_PROD_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the prod_id column
     *
     * Example usage:
     * <code>
     * $query->filterByProdId(1234); // WHERE prod_id = 1234
     * $query->filterByProdId(array(12, 34)); // WHERE prod_id IN (12, 34)
     * $query->filterByProdId(array('min' => 12)); // WHERE prod_id > 12
     * </code>
     *
     * @param     mixed $prodId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdSmallerQuery The current query, for fluid interface
     */
    public function filterByProdId($prodId = null, $comparison = null)
    {
        if (is_array($prodId)) {
            $useMinMax = false;
            if (isset($prodId['min'])) {
                $this->addUsingAlias(TblProdSmallerTableMap::COL_PROD_ID, $prodId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prodId['max'])) {
                $this->addUsingAlias(TblProdSmallerTableMap::COL_PROD_ID, $prodId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblProdSmallerTableMap::COL_PROD_ID, $prodId, $comparison);
    }

    /**
     * Filter the query on the sm_enable_id column
     *
     * Example usage:
     * <code>
     * $query->filterBySmEnableId(1234); // WHERE sm_enable_id = 1234
     * $query->filterBySmEnableId(array(12, 34)); // WHERE sm_enable_id IN (12, 34)
     * $query->filterBySmEnableId(array('min' => 12)); // WHERE sm_enable_id > 12
     * </code>
     *
     * @param     mixed $smEnableId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdSmallerQuery The current query, for fluid interface
     */
    public function filterBySmEnableId($smEnableId = null, $comparison = null)
    {
        if (is_array($smEnableId)) {
            $useMinMax = false;
            if (isset($smEnableId['min'])) {
                $this->addUsingAlias(TblProdSmallerTableMap::COL_SM_ENABLE_ID, $smEnableId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($smEnableId['max'])) {
                $this->addUsingAlias(TblProdSmallerTableMap::COL_SM_ENABLE_ID, $smEnableId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblProdSmallerTableMap::COL_SM_ENABLE_ID, $smEnableId, $comparison);
    }

    /**
     * Filter the query on the sm_prod_length column
     *
     * Example usage:
     * <code>
     * $query->filterBySmProdLength('fooValue');   // WHERE sm_prod_length = 'fooValue'
     * $query->filterBySmProdLength('%fooValue%'); // WHERE sm_prod_length LIKE '%fooValue%'
     * </code>
     *
     * @param     string $smProdLength The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdSmallerQuery The current query, for fluid interface
     */
    public function filterBySmProdLength($smProdLength = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($smProdLength)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $smProdLength)) {
                $smProdLength = str_replace('*', '%', $smProdLength);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdSmallerTableMap::COL_SM_PROD_LENGTH, $smProdLength, $comparison);
    }

    /**
     * Filter the query on the sm_prod_wingspan column
     *
     * Example usage:
     * <code>
     * $query->filterBySmProdWingspan('fooValue');   // WHERE sm_prod_wingspan = 'fooValue'
     * $query->filterBySmProdWingspan('%fooValue%'); // WHERE sm_prod_wingspan LIKE '%fooValue%'
     * </code>
     *
     * @param     string $smProdWingspan The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdSmallerQuery The current query, for fluid interface
     */
    public function filterBySmProdWingspan($smProdWingspan = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($smProdWingspan)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $smProdWingspan)) {
                $smProdWingspan = str_replace('*', '%', $smProdWingspan);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdSmallerTableMap::COL_SM_PROD_WINGSPAN, $smProdWingspan, $comparison);
    }

    /**
     * Filter the query on the sm_prod_height column
     *
     * Example usage:
     * <code>
     * $query->filterBySmProdHeight('fooValue');   // WHERE sm_prod_height = 'fooValue'
     * $query->filterBySmProdHeight('%fooValue%'); // WHERE sm_prod_height LIKE '%fooValue%'
     * </code>
     *
     * @param     string $smProdHeight The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdSmallerQuery The current query, for fluid interface
     */
    public function filterBySmProdHeight($smProdHeight = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($smProdHeight)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $smProdHeight)) {
                $smProdHeight = str_replace('*', '%', $smProdHeight);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdSmallerTableMap::COL_SM_PROD_HEIGHT, $smProdHeight, $comparison);
    }

    /**
     * Filter the query on the sm_prod_scale column
     *
     * Example usage:
     * <code>
     * $query->filterBySmProdScale('fooValue');   // WHERE sm_prod_scale = 'fooValue'
     * $query->filterBySmProdScale('%fooValue%'); // WHERE sm_prod_scale LIKE '%fooValue%'
     * </code>
     *
     * @param     string $smProdScale The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdSmallerQuery The current query, for fluid interface
     */
    public function filterBySmProdScale($smProdScale = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($smProdScale)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $smProdScale)) {
                $smProdScale = str_replace('*', '%', $smProdScale);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdSmallerTableMap::COL_SM_PROD_SCALE, $smProdScale, $comparison);
    }

    /**
     * Filter the query on the sm_prod_price_id column
     *
     * Example usage:
     * <code>
     * $query->filterBySmProdPriceId(1234); // WHERE sm_prod_price_id = 1234
     * $query->filterBySmProdPriceId(array(12, 34)); // WHERE sm_prod_price_id IN (12, 34)
     * $query->filterBySmProdPriceId(array('min' => 12)); // WHERE sm_prod_price_id > 12
     * </code>
     *
     * @param     mixed $smProdPriceId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdSmallerQuery The current query, for fluid interface
     */
    public function filterBySmProdPriceId($smProdPriceId = null, $comparison = null)
    {
        if (is_array($smProdPriceId)) {
            $useMinMax = false;
            if (isset($smProdPriceId['min'])) {
                $this->addUsingAlias(TblProdSmallerTableMap::COL_SM_PROD_PRICE_ID, $smProdPriceId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($smProdPriceId['max'])) {
                $this->addUsingAlias(TblProdSmallerTableMap::COL_SM_PROD_PRICE_ID, $smProdPriceId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblProdSmallerTableMap::COL_SM_PROD_PRICE_ID, $smProdPriceId, $comparison);
    }

    /**
     * Filter the query on the sm_prod_normalprice column
     *
     * Example usage:
     * <code>
     * $query->filterBySmProdNormalprice(1234); // WHERE sm_prod_normalprice = 1234
     * $query->filterBySmProdNormalprice(array(12, 34)); // WHERE sm_prod_normalprice IN (12, 34)
     * $query->filterBySmProdNormalprice(array('min' => 12)); // WHERE sm_prod_normalprice > 12
     * </code>
     *
     * @param     mixed $smProdNormalprice The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdSmallerQuery The current query, for fluid interface
     */
    public function filterBySmProdNormalprice($smProdNormalprice = null, $comparison = null)
    {
        if (is_array($smProdNormalprice)) {
            $useMinMax = false;
            if (isset($smProdNormalprice['min'])) {
                $this->addUsingAlias(TblProdSmallerTableMap::COL_SM_PROD_NORMALPRICE, $smProdNormalprice['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($smProdNormalprice['max'])) {
                $this->addUsingAlias(TblProdSmallerTableMap::COL_SM_PROD_NORMALPRICE, $smProdNormalprice['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblProdSmallerTableMap::COL_SM_PROD_NORMALPRICE, $smProdNormalprice, $comparison);
    }

    /**
     * Filter the query on the sm_prod_shipping_price_id column
     *
     * Example usage:
     * <code>
     * $query->filterBySmProdShippingPriceId(1234); // WHERE sm_prod_shipping_price_id = 1234
     * $query->filterBySmProdShippingPriceId(array(12, 34)); // WHERE sm_prod_shipping_price_id IN (12, 34)
     * $query->filterBySmProdShippingPriceId(array('min' => 12)); // WHERE sm_prod_shipping_price_id > 12
     * </code>
     *
     * @param     mixed $smProdShippingPriceId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdSmallerQuery The current query, for fluid interface
     */
    public function filterBySmProdShippingPriceId($smProdShippingPriceId = null, $comparison = null)
    {
        if (is_array($smProdShippingPriceId)) {
            $useMinMax = false;
            if (isset($smProdShippingPriceId['min'])) {
                $this->addUsingAlias(TblProdSmallerTableMap::COL_SM_PROD_SHIPPING_PRICE_ID, $smProdShippingPriceId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($smProdShippingPriceId['max'])) {
                $this->addUsingAlias(TblProdSmallerTableMap::COL_SM_PROD_SHIPPING_PRICE_ID, $smProdShippingPriceId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblProdSmallerTableMap::COL_SM_PROD_SHIPPING_PRICE_ID, $smProdShippingPriceId, $comparison);
    }

    /**
     * Filter the query by a related \TblProdInfo object
     *
     * @param \TblProdInfo|ObjectCollection $tblProdInfo the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildTblProdSmallerQuery The current query, for fluid interface
     */
    public function filterByTblProdInfo($tblProdInfo, $comparison = null)
    {
        if ($tblProdInfo instanceof \TblProdInfo) {
            return $this
                ->addUsingAlias(TblProdSmallerTableMap::COL_PROD_ID, $tblProdInfo->getProdId(), $comparison);
        } elseif ($tblProdInfo instanceof ObjectCollection) {
            return $this
                ->useTblProdInfoQuery()
                ->filterByPrimaryKeys($tblProdInfo->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByTblProdInfo() only accepts arguments of type \TblProdInfo or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the TblProdInfo relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildTblProdSmallerQuery The current query, for fluid interface
     */
    public function joinTblProdInfo($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('TblProdInfo');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'TblProdInfo');
        }

        return $this;
    }

    /**
     * Use the TblProdInfo relation TblProdInfo object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \TblProdInfoQuery A secondary query class using the current class as primary query
     */
    public function useTblProdInfoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTblProdInfo($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'TblProdInfo', '\TblProdInfoQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildTblProdSmaller $tblProdSmaller Object to remove from the list of results
     *
     * @return $this|ChildTblProdSmallerQuery The current query, for fluid interface
     */
    public function prune($tblProdSmaller = null)
    {
        if ($tblProdSmaller) {
            $this->addUsingAlias(TblProdSmallerTableMap::COL_PROD_ID, $tblProdSmaller->getProdId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the tbl_prod_smaller table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TblProdSmallerTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            TblProdSmallerTableMap::clearInstancePool();
            TblProdSmallerTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    /**
     * Performs a DELETE on the database based on the current ModelCriteria
     *
     * @param ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TblProdSmallerTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(TblProdSmallerTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            
            TblProdSmallerTableMap::removeInstanceFromPool($criteria);
        
            $affectedRows += ModelCriteria::delete($con);
            TblProdSmallerTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // TblProdSmallerQuery
