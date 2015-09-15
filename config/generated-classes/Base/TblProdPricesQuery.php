<?php

namespace Base;

use \TblProdPrices as ChildTblProdPrices;
use \TblProdPricesQuery as ChildTblProdPricesQuery;
use \Exception;
use \PDO;
use Map\TblProdPricesTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'tbl_prod_prices' table.
 *
 * 
 *
 * @method     ChildTblProdPricesQuery orderByProdId($order = Criteria::ASC) Order by the prod_id column
 * @method     ChildTblProdPricesQuery orderByProdNormalprice($order = Criteria::ASC) Order by the prod_normalprice column
 * @method     ChildTblProdPricesQuery orderByProdSalesprice($order = Criteria::ASC) Order by the prod_salesprice column
 * @method     ChildTblProdPricesQuery orderByProdShippingAsia($order = Criteria::ASC) Order by the prod_shipping_asia column
 * @method     ChildTblProdPricesQuery orderByProdShippingEurope($order = Criteria::ASC) Order by the prod_shipping_europe column
 * @method     ChildTblProdPricesQuery orderByProdShippingUsa($order = Criteria::ASC) Order by the prod_shipping_usa column
 * @method     ChildTblProdPricesQuery orderByProdShippingCanada($order = Criteria::ASC) Order by the prod_shipping_canada column
 * @method     ChildTblProdPricesQuery orderByProdShippingAu($order = Criteria::ASC) Order by the prod_shipping_au column
 * @method     ChildTblProdPricesQuery orderByProdShippingAsiaParcel($order = Criteria::ASC) Order by the prod_shipping_asia_parcel column
 * @method     ChildTblProdPricesQuery orderByProdShippingEuropeParcel($order = Criteria::ASC) Order by the prod_shipping_europe_parcel column
 * @method     ChildTblProdPricesQuery orderByProdShippingUsaParcel($order = Criteria::ASC) Order by the prod_shipping_usa_parcel column
 * @method     ChildTblProdPricesQuery orderByProdShippingCanadaParcel($order = Criteria::ASC) Order by the prod_shipping_canada_parcel column
 * @method     ChildTblProdPricesQuery orderByProdShippingAuParcel($order = Criteria::ASC) Order by the prod_shipping_au_parcel column
 * @method     ChildTblProdPricesQuery orderByProdCustomprice($order = Criteria::ASC) Order by the prod_customprice column
 *
 * @method     ChildTblProdPricesQuery groupByProdId() Group by the prod_id column
 * @method     ChildTblProdPricesQuery groupByProdNormalprice() Group by the prod_normalprice column
 * @method     ChildTblProdPricesQuery groupByProdSalesprice() Group by the prod_salesprice column
 * @method     ChildTblProdPricesQuery groupByProdShippingAsia() Group by the prod_shipping_asia column
 * @method     ChildTblProdPricesQuery groupByProdShippingEurope() Group by the prod_shipping_europe column
 * @method     ChildTblProdPricesQuery groupByProdShippingUsa() Group by the prod_shipping_usa column
 * @method     ChildTblProdPricesQuery groupByProdShippingCanada() Group by the prod_shipping_canada column
 * @method     ChildTblProdPricesQuery groupByProdShippingAu() Group by the prod_shipping_au column
 * @method     ChildTblProdPricesQuery groupByProdShippingAsiaParcel() Group by the prod_shipping_asia_parcel column
 * @method     ChildTblProdPricesQuery groupByProdShippingEuropeParcel() Group by the prod_shipping_europe_parcel column
 * @method     ChildTblProdPricesQuery groupByProdShippingUsaParcel() Group by the prod_shipping_usa_parcel column
 * @method     ChildTblProdPricesQuery groupByProdShippingCanadaParcel() Group by the prod_shipping_canada_parcel column
 * @method     ChildTblProdPricesQuery groupByProdShippingAuParcel() Group by the prod_shipping_au_parcel column
 * @method     ChildTblProdPricesQuery groupByProdCustomprice() Group by the prod_customprice column
 *
 * @method     ChildTblProdPricesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildTblProdPricesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildTblProdPricesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildTblProdPricesQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildTblProdPricesQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildTblProdPricesQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildTblProdPricesQuery leftJoinTblProdInfo($relationAlias = null) Adds a LEFT JOIN clause to the query using the TblProdInfo relation
 * @method     ChildTblProdPricesQuery rightJoinTblProdInfo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TblProdInfo relation
 * @method     ChildTblProdPricesQuery innerJoinTblProdInfo($relationAlias = null) Adds a INNER JOIN clause to the query using the TblProdInfo relation
 *
 * @method     ChildTblProdPricesQuery joinWithTblProdInfo($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the TblProdInfo relation
 *
 * @method     ChildTblProdPricesQuery leftJoinWithTblProdInfo() Adds a LEFT JOIN clause and with to the query using the TblProdInfo relation
 * @method     ChildTblProdPricesQuery rightJoinWithTblProdInfo() Adds a RIGHT JOIN clause and with to the query using the TblProdInfo relation
 * @method     ChildTblProdPricesQuery innerJoinWithTblProdInfo() Adds a INNER JOIN clause and with to the query using the TblProdInfo relation
 *
 * @method     \TblProdInfoQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildTblProdPrices findOne(ConnectionInterface $con = null) Return the first ChildTblProdPrices matching the query
 * @method     ChildTblProdPrices findOneOrCreate(ConnectionInterface $con = null) Return the first ChildTblProdPrices matching the query, or a new ChildTblProdPrices object populated from the query conditions when no match is found
 *
 * @method     ChildTblProdPrices findOneByProdId(int $prod_id) Return the first ChildTblProdPrices filtered by the prod_id column
 * @method     ChildTblProdPrices findOneByProdNormalprice(string $prod_normalprice) Return the first ChildTblProdPrices filtered by the prod_normalprice column
 * @method     ChildTblProdPrices findOneByProdSalesprice(string $prod_salesprice) Return the first ChildTblProdPrices filtered by the prod_salesprice column
 * @method     ChildTblProdPrices findOneByProdShippingAsia(string $prod_shipping_asia) Return the first ChildTblProdPrices filtered by the prod_shipping_asia column
 * @method     ChildTblProdPrices findOneByProdShippingEurope(string $prod_shipping_europe) Return the first ChildTblProdPrices filtered by the prod_shipping_europe column
 * @method     ChildTblProdPrices findOneByProdShippingUsa(string $prod_shipping_usa) Return the first ChildTblProdPrices filtered by the prod_shipping_usa column
 * @method     ChildTblProdPrices findOneByProdShippingCanada(string $prod_shipping_canada) Return the first ChildTblProdPrices filtered by the prod_shipping_canada column
 * @method     ChildTblProdPrices findOneByProdShippingAu(string $prod_shipping_au) Return the first ChildTblProdPrices filtered by the prod_shipping_au column
 * @method     ChildTblProdPrices findOneByProdShippingAsiaParcel(string $prod_shipping_asia_parcel) Return the first ChildTblProdPrices filtered by the prod_shipping_asia_parcel column
 * @method     ChildTblProdPrices findOneByProdShippingEuropeParcel(string $prod_shipping_europe_parcel) Return the first ChildTblProdPrices filtered by the prod_shipping_europe_parcel column
 * @method     ChildTblProdPrices findOneByProdShippingUsaParcel(string $prod_shipping_usa_parcel) Return the first ChildTblProdPrices filtered by the prod_shipping_usa_parcel column
 * @method     ChildTblProdPrices findOneByProdShippingCanadaParcel(string $prod_shipping_canada_parcel) Return the first ChildTblProdPrices filtered by the prod_shipping_canada_parcel column
 * @method     ChildTblProdPrices findOneByProdShippingAuParcel(string $prod_shipping_au_parcel) Return the first ChildTblProdPrices filtered by the prod_shipping_au_parcel column
 * @method     ChildTblProdPrices findOneByProdCustomprice(string $prod_customprice) Return the first ChildTblProdPrices filtered by the prod_customprice column *

 * @method     ChildTblProdPrices requirePk($key, ConnectionInterface $con = null) Return the ChildTblProdPrices by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdPrices requireOne(ConnectionInterface $con = null) Return the first ChildTblProdPrices matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTblProdPrices requireOneByProdId(int $prod_id) Return the first ChildTblProdPrices filtered by the prod_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdPrices requireOneByProdNormalprice(string $prod_normalprice) Return the first ChildTblProdPrices filtered by the prod_normalprice column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdPrices requireOneByProdSalesprice(string $prod_salesprice) Return the first ChildTblProdPrices filtered by the prod_salesprice column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdPrices requireOneByProdShippingAsia(string $prod_shipping_asia) Return the first ChildTblProdPrices filtered by the prod_shipping_asia column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdPrices requireOneByProdShippingEurope(string $prod_shipping_europe) Return the first ChildTblProdPrices filtered by the prod_shipping_europe column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdPrices requireOneByProdShippingUsa(string $prod_shipping_usa) Return the first ChildTblProdPrices filtered by the prod_shipping_usa column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdPrices requireOneByProdShippingCanada(string $prod_shipping_canada) Return the first ChildTblProdPrices filtered by the prod_shipping_canada column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdPrices requireOneByProdShippingAu(string $prod_shipping_au) Return the first ChildTblProdPrices filtered by the prod_shipping_au column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdPrices requireOneByProdShippingAsiaParcel(string $prod_shipping_asia_parcel) Return the first ChildTblProdPrices filtered by the prod_shipping_asia_parcel column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdPrices requireOneByProdShippingEuropeParcel(string $prod_shipping_europe_parcel) Return the first ChildTblProdPrices filtered by the prod_shipping_europe_parcel column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdPrices requireOneByProdShippingUsaParcel(string $prod_shipping_usa_parcel) Return the first ChildTblProdPrices filtered by the prod_shipping_usa_parcel column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdPrices requireOneByProdShippingCanadaParcel(string $prod_shipping_canada_parcel) Return the first ChildTblProdPrices filtered by the prod_shipping_canada_parcel column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdPrices requireOneByProdShippingAuParcel(string $prod_shipping_au_parcel) Return the first ChildTblProdPrices filtered by the prod_shipping_au_parcel column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdPrices requireOneByProdCustomprice(string $prod_customprice) Return the first ChildTblProdPrices filtered by the prod_customprice column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTblProdPrices[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildTblProdPrices objects based on current ModelCriteria
 * @method     ChildTblProdPrices[]|ObjectCollection findByProdId(int $prod_id) Return ChildTblProdPrices objects filtered by the prod_id column
 * @method     ChildTblProdPrices[]|ObjectCollection findByProdNormalprice(string $prod_normalprice) Return ChildTblProdPrices objects filtered by the prod_normalprice column
 * @method     ChildTblProdPrices[]|ObjectCollection findByProdSalesprice(string $prod_salesprice) Return ChildTblProdPrices objects filtered by the prod_salesprice column
 * @method     ChildTblProdPrices[]|ObjectCollection findByProdShippingAsia(string $prod_shipping_asia) Return ChildTblProdPrices objects filtered by the prod_shipping_asia column
 * @method     ChildTblProdPrices[]|ObjectCollection findByProdShippingEurope(string $prod_shipping_europe) Return ChildTblProdPrices objects filtered by the prod_shipping_europe column
 * @method     ChildTblProdPrices[]|ObjectCollection findByProdShippingUsa(string $prod_shipping_usa) Return ChildTblProdPrices objects filtered by the prod_shipping_usa column
 * @method     ChildTblProdPrices[]|ObjectCollection findByProdShippingCanada(string $prod_shipping_canada) Return ChildTblProdPrices objects filtered by the prod_shipping_canada column
 * @method     ChildTblProdPrices[]|ObjectCollection findByProdShippingAu(string $prod_shipping_au) Return ChildTblProdPrices objects filtered by the prod_shipping_au column
 * @method     ChildTblProdPrices[]|ObjectCollection findByProdShippingAsiaParcel(string $prod_shipping_asia_parcel) Return ChildTblProdPrices objects filtered by the prod_shipping_asia_parcel column
 * @method     ChildTblProdPrices[]|ObjectCollection findByProdShippingEuropeParcel(string $prod_shipping_europe_parcel) Return ChildTblProdPrices objects filtered by the prod_shipping_europe_parcel column
 * @method     ChildTblProdPrices[]|ObjectCollection findByProdShippingUsaParcel(string $prod_shipping_usa_parcel) Return ChildTblProdPrices objects filtered by the prod_shipping_usa_parcel column
 * @method     ChildTblProdPrices[]|ObjectCollection findByProdShippingCanadaParcel(string $prod_shipping_canada_parcel) Return ChildTblProdPrices objects filtered by the prod_shipping_canada_parcel column
 * @method     ChildTblProdPrices[]|ObjectCollection findByProdShippingAuParcel(string $prod_shipping_au_parcel) Return ChildTblProdPrices objects filtered by the prod_shipping_au_parcel column
 * @method     ChildTblProdPrices[]|ObjectCollection findByProdCustomprice(string $prod_customprice) Return ChildTblProdPrices objects filtered by the prod_customprice column
 * @method     ChildTblProdPrices[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class TblProdPricesQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\TblProdPricesQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpm', $modelName = '\\TblProdPrices', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildTblProdPricesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildTblProdPricesQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildTblProdPricesQuery) {
            return $criteria;
        }
        $query = new ChildTblProdPricesQuery();
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
     * @return ChildTblProdPrices|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TblProdPricesTableMap::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(TblProdPricesTableMap::DATABASE_NAME);
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
     * @return ChildTblProdPrices A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT prod_id, prod_normalprice, prod_salesprice, prod_shipping_asia, prod_shipping_europe, prod_shipping_usa, prod_shipping_canada, prod_shipping_au, prod_shipping_asia_parcel, prod_shipping_europe_parcel, prod_shipping_usa_parcel, prod_shipping_canada_parcel, prod_shipping_au_parcel, prod_customprice FROM tbl_prod_prices WHERE prod_id = :p0';
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
            /** @var ChildTblProdPrices $obj */
            $obj = new ChildTblProdPrices();
            $obj->hydrate($row);
            TblProdPricesTableMap::addInstanceToPool($obj, (string) $key);
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
     * @return ChildTblProdPrices|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildTblProdPricesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TblProdPricesTableMap::COL_PROD_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildTblProdPricesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TblProdPricesTableMap::COL_PROD_ID, $keys, Criteria::IN);
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
     * @return $this|ChildTblProdPricesQuery The current query, for fluid interface
     */
    public function filterByProdId($prodId = null, $comparison = null)
    {
        if (is_array($prodId)) {
            $useMinMax = false;
            if (isset($prodId['min'])) {
                $this->addUsingAlias(TblProdPricesTableMap::COL_PROD_ID, $prodId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prodId['max'])) {
                $this->addUsingAlias(TblProdPricesTableMap::COL_PROD_ID, $prodId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblProdPricesTableMap::COL_PROD_ID, $prodId, $comparison);
    }

    /**
     * Filter the query on the prod_normalprice column
     *
     * Example usage:
     * <code>
     * $query->filterByProdNormalprice('fooValue');   // WHERE prod_normalprice = 'fooValue'
     * $query->filterByProdNormalprice('%fooValue%'); // WHERE prod_normalprice LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodNormalprice The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdPricesQuery The current query, for fluid interface
     */
    public function filterByProdNormalprice($prodNormalprice = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodNormalprice)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodNormalprice)) {
                $prodNormalprice = str_replace('*', '%', $prodNormalprice);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdPricesTableMap::COL_PROD_NORMALPRICE, $prodNormalprice, $comparison);
    }

    /**
     * Filter the query on the prod_salesprice column
     *
     * Example usage:
     * <code>
     * $query->filterByProdSalesprice('fooValue');   // WHERE prod_salesprice = 'fooValue'
     * $query->filterByProdSalesprice('%fooValue%'); // WHERE prod_salesprice LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodSalesprice The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdPricesQuery The current query, for fluid interface
     */
    public function filterByProdSalesprice($prodSalesprice = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodSalesprice)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodSalesprice)) {
                $prodSalesprice = str_replace('*', '%', $prodSalesprice);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdPricesTableMap::COL_PROD_SALESPRICE, $prodSalesprice, $comparison);
    }

    /**
     * Filter the query on the prod_shipping_asia column
     *
     * Example usage:
     * <code>
     * $query->filterByProdShippingAsia('fooValue');   // WHERE prod_shipping_asia = 'fooValue'
     * $query->filterByProdShippingAsia('%fooValue%'); // WHERE prod_shipping_asia LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodShippingAsia The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdPricesQuery The current query, for fluid interface
     */
    public function filterByProdShippingAsia($prodShippingAsia = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodShippingAsia)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodShippingAsia)) {
                $prodShippingAsia = str_replace('*', '%', $prodShippingAsia);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdPricesTableMap::COL_PROD_SHIPPING_ASIA, $prodShippingAsia, $comparison);
    }

    /**
     * Filter the query on the prod_shipping_europe column
     *
     * Example usage:
     * <code>
     * $query->filterByProdShippingEurope('fooValue');   // WHERE prod_shipping_europe = 'fooValue'
     * $query->filterByProdShippingEurope('%fooValue%'); // WHERE prod_shipping_europe LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodShippingEurope The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdPricesQuery The current query, for fluid interface
     */
    public function filterByProdShippingEurope($prodShippingEurope = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodShippingEurope)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodShippingEurope)) {
                $prodShippingEurope = str_replace('*', '%', $prodShippingEurope);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdPricesTableMap::COL_PROD_SHIPPING_EUROPE, $prodShippingEurope, $comparison);
    }

    /**
     * Filter the query on the prod_shipping_usa column
     *
     * Example usage:
     * <code>
     * $query->filterByProdShippingUsa('fooValue');   // WHERE prod_shipping_usa = 'fooValue'
     * $query->filterByProdShippingUsa('%fooValue%'); // WHERE prod_shipping_usa LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodShippingUsa The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdPricesQuery The current query, for fluid interface
     */
    public function filterByProdShippingUsa($prodShippingUsa = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodShippingUsa)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodShippingUsa)) {
                $prodShippingUsa = str_replace('*', '%', $prodShippingUsa);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdPricesTableMap::COL_PROD_SHIPPING_USA, $prodShippingUsa, $comparison);
    }

    /**
     * Filter the query on the prod_shipping_canada column
     *
     * Example usage:
     * <code>
     * $query->filterByProdShippingCanada('fooValue');   // WHERE prod_shipping_canada = 'fooValue'
     * $query->filterByProdShippingCanada('%fooValue%'); // WHERE prod_shipping_canada LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodShippingCanada The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdPricesQuery The current query, for fluid interface
     */
    public function filterByProdShippingCanada($prodShippingCanada = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodShippingCanada)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodShippingCanada)) {
                $prodShippingCanada = str_replace('*', '%', $prodShippingCanada);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdPricesTableMap::COL_PROD_SHIPPING_CANADA, $prodShippingCanada, $comparison);
    }

    /**
     * Filter the query on the prod_shipping_au column
     *
     * Example usage:
     * <code>
     * $query->filterByProdShippingAu('fooValue');   // WHERE prod_shipping_au = 'fooValue'
     * $query->filterByProdShippingAu('%fooValue%'); // WHERE prod_shipping_au LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodShippingAu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdPricesQuery The current query, for fluid interface
     */
    public function filterByProdShippingAu($prodShippingAu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodShippingAu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodShippingAu)) {
                $prodShippingAu = str_replace('*', '%', $prodShippingAu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdPricesTableMap::COL_PROD_SHIPPING_AU, $prodShippingAu, $comparison);
    }

    /**
     * Filter the query on the prod_shipping_asia_parcel column
     *
     * Example usage:
     * <code>
     * $query->filterByProdShippingAsiaParcel('fooValue');   // WHERE prod_shipping_asia_parcel = 'fooValue'
     * $query->filterByProdShippingAsiaParcel('%fooValue%'); // WHERE prod_shipping_asia_parcel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodShippingAsiaParcel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdPricesQuery The current query, for fluid interface
     */
    public function filterByProdShippingAsiaParcel($prodShippingAsiaParcel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodShippingAsiaParcel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodShippingAsiaParcel)) {
                $prodShippingAsiaParcel = str_replace('*', '%', $prodShippingAsiaParcel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdPricesTableMap::COL_PROD_SHIPPING_ASIA_PARCEL, $prodShippingAsiaParcel, $comparison);
    }

    /**
     * Filter the query on the prod_shipping_europe_parcel column
     *
     * Example usage:
     * <code>
     * $query->filterByProdShippingEuropeParcel('fooValue');   // WHERE prod_shipping_europe_parcel = 'fooValue'
     * $query->filterByProdShippingEuropeParcel('%fooValue%'); // WHERE prod_shipping_europe_parcel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodShippingEuropeParcel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdPricesQuery The current query, for fluid interface
     */
    public function filterByProdShippingEuropeParcel($prodShippingEuropeParcel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodShippingEuropeParcel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodShippingEuropeParcel)) {
                $prodShippingEuropeParcel = str_replace('*', '%', $prodShippingEuropeParcel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdPricesTableMap::COL_PROD_SHIPPING_EUROPE_PARCEL, $prodShippingEuropeParcel, $comparison);
    }

    /**
     * Filter the query on the prod_shipping_usa_parcel column
     *
     * Example usage:
     * <code>
     * $query->filterByProdShippingUsaParcel('fooValue');   // WHERE prod_shipping_usa_parcel = 'fooValue'
     * $query->filterByProdShippingUsaParcel('%fooValue%'); // WHERE prod_shipping_usa_parcel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodShippingUsaParcel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdPricesQuery The current query, for fluid interface
     */
    public function filterByProdShippingUsaParcel($prodShippingUsaParcel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodShippingUsaParcel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodShippingUsaParcel)) {
                $prodShippingUsaParcel = str_replace('*', '%', $prodShippingUsaParcel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdPricesTableMap::COL_PROD_SHIPPING_USA_PARCEL, $prodShippingUsaParcel, $comparison);
    }

    /**
     * Filter the query on the prod_shipping_canada_parcel column
     *
     * Example usage:
     * <code>
     * $query->filterByProdShippingCanadaParcel('fooValue');   // WHERE prod_shipping_canada_parcel = 'fooValue'
     * $query->filterByProdShippingCanadaParcel('%fooValue%'); // WHERE prod_shipping_canada_parcel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodShippingCanadaParcel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdPricesQuery The current query, for fluid interface
     */
    public function filterByProdShippingCanadaParcel($prodShippingCanadaParcel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodShippingCanadaParcel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodShippingCanadaParcel)) {
                $prodShippingCanadaParcel = str_replace('*', '%', $prodShippingCanadaParcel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdPricesTableMap::COL_PROD_SHIPPING_CANADA_PARCEL, $prodShippingCanadaParcel, $comparison);
    }

    /**
     * Filter the query on the prod_shipping_au_parcel column
     *
     * Example usage:
     * <code>
     * $query->filterByProdShippingAuParcel('fooValue');   // WHERE prod_shipping_au_parcel = 'fooValue'
     * $query->filterByProdShippingAuParcel('%fooValue%'); // WHERE prod_shipping_au_parcel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodShippingAuParcel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdPricesQuery The current query, for fluid interface
     */
    public function filterByProdShippingAuParcel($prodShippingAuParcel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodShippingAuParcel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodShippingAuParcel)) {
                $prodShippingAuParcel = str_replace('*', '%', $prodShippingAuParcel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdPricesTableMap::COL_PROD_SHIPPING_AU_PARCEL, $prodShippingAuParcel, $comparison);
    }

    /**
     * Filter the query on the prod_customprice column
     *
     * Example usage:
     * <code>
     * $query->filterByProdCustomprice('fooValue');   // WHERE prod_customprice = 'fooValue'
     * $query->filterByProdCustomprice('%fooValue%'); // WHERE prod_customprice LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodCustomprice The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdPricesQuery The current query, for fluid interface
     */
    public function filterByProdCustomprice($prodCustomprice = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodCustomprice)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodCustomprice)) {
                $prodCustomprice = str_replace('*', '%', $prodCustomprice);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdPricesTableMap::COL_PROD_CUSTOMPRICE, $prodCustomprice, $comparison);
    }

    /**
     * Filter the query by a related \TblProdInfo object
     *
     * @param \TblProdInfo|ObjectCollection $tblProdInfo the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildTblProdPricesQuery The current query, for fluid interface
     */
    public function filterByTblProdInfo($tblProdInfo, $comparison = null)
    {
        if ($tblProdInfo instanceof \TblProdInfo) {
            return $this
                ->addUsingAlias(TblProdPricesTableMap::COL_PROD_ID, $tblProdInfo->getProdId(), $comparison);
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
     * @return $this|ChildTblProdPricesQuery The current query, for fluid interface
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
     * @param   ChildTblProdPrices $tblProdPrices Object to remove from the list of results
     *
     * @return $this|ChildTblProdPricesQuery The current query, for fluid interface
     */
    public function prune($tblProdPrices = null)
    {
        if ($tblProdPrices) {
            $this->addUsingAlias(TblProdPricesTableMap::COL_PROD_ID, $tblProdPrices->getProdId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the tbl_prod_prices table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TblProdPricesTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            TblProdPricesTableMap::clearInstancePool();
            TblProdPricesTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(TblProdPricesTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(TblProdPricesTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            
            TblProdPricesTableMap::removeInstanceFromPool($criteria);
        
            $affectedRows += ModelCriteria::delete($con);
            TblProdPricesTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // TblProdPricesQuery
