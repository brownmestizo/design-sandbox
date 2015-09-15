<?php

namespace Base;

use \TblProdShipping as ChildTblProdShipping;
use \TblProdShippingQuery as ChildTblProdShippingQuery;
use \Exception;
use \PDO;
use Map\TblProdShippingTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'tbl_prod_shipping' table.
 *
 * 
 *
 * @method     ChildTblProdShippingQuery orderByProdShippingPriceId($order = Criteria::ASC) Order by the prod_shipping_price_id column
 * @method     ChildTblProdShippingQuery orderByProdShippingName($order = Criteria::ASC) Order by the prod_shipping_name column
 * @method     ChildTblProdShippingQuery orderByProdShippingDescription($order = Criteria::ASC) Order by the prod_shipping_description column
 * @method     ChildTblProdShippingQuery orderByProdShippingAsia($order = Criteria::ASC) Order by the prod_shipping_asia column
 * @method     ChildTblProdShippingQuery orderByProdShippingEurope($order = Criteria::ASC) Order by the prod_shipping_europe column
 * @method     ChildTblProdShippingQuery orderByProdShippingUsa($order = Criteria::ASC) Order by the prod_shipping_usa column
 * @method     ChildTblProdShippingQuery orderByProdShippingCanada($order = Criteria::ASC) Order by the prod_shipping_canada column
 * @method     ChildTblProdShippingQuery orderByProdShippingAu($order = Criteria::ASC) Order by the prod_shipping_au column
 * @method     ChildTblProdShippingQuery orderByProdShippingAsiaParcel($order = Criteria::ASC) Order by the prod_shipping_asia_parcel column
 * @method     ChildTblProdShippingQuery orderByProdShippingEuropeParcel($order = Criteria::ASC) Order by the prod_shipping_europe_parcel column
 * @method     ChildTblProdShippingQuery orderByProdShippingUsaParcel($order = Criteria::ASC) Order by the prod_shipping_usa_parcel column
 * @method     ChildTblProdShippingQuery orderByProdShippingCanadaParcel($order = Criteria::ASC) Order by the prod_shipping_canada_parcel column
 * @method     ChildTblProdShippingQuery orderByProdShippingAuParcel($order = Criteria::ASC) Order by the prod_shipping_au_parcel column
 *
 * @method     ChildTblProdShippingQuery groupByProdShippingPriceId() Group by the prod_shipping_price_id column
 * @method     ChildTblProdShippingQuery groupByProdShippingName() Group by the prod_shipping_name column
 * @method     ChildTblProdShippingQuery groupByProdShippingDescription() Group by the prod_shipping_description column
 * @method     ChildTblProdShippingQuery groupByProdShippingAsia() Group by the prod_shipping_asia column
 * @method     ChildTblProdShippingQuery groupByProdShippingEurope() Group by the prod_shipping_europe column
 * @method     ChildTblProdShippingQuery groupByProdShippingUsa() Group by the prod_shipping_usa column
 * @method     ChildTblProdShippingQuery groupByProdShippingCanada() Group by the prod_shipping_canada column
 * @method     ChildTblProdShippingQuery groupByProdShippingAu() Group by the prod_shipping_au column
 * @method     ChildTblProdShippingQuery groupByProdShippingAsiaParcel() Group by the prod_shipping_asia_parcel column
 * @method     ChildTblProdShippingQuery groupByProdShippingEuropeParcel() Group by the prod_shipping_europe_parcel column
 * @method     ChildTblProdShippingQuery groupByProdShippingUsaParcel() Group by the prod_shipping_usa_parcel column
 * @method     ChildTblProdShippingQuery groupByProdShippingCanadaParcel() Group by the prod_shipping_canada_parcel column
 * @method     ChildTblProdShippingQuery groupByProdShippingAuParcel() Group by the prod_shipping_au_parcel column
 *
 * @method     ChildTblProdShippingQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildTblProdShippingQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildTblProdShippingQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildTblProdShippingQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildTblProdShippingQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildTblProdShippingQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildTblProdShipping findOne(ConnectionInterface $con = null) Return the first ChildTblProdShipping matching the query
 * @method     ChildTblProdShipping findOneOrCreate(ConnectionInterface $con = null) Return the first ChildTblProdShipping matching the query, or a new ChildTblProdShipping object populated from the query conditions when no match is found
 *
 * @method     ChildTblProdShipping findOneByProdShippingPriceId(int $prod_shipping_price_id) Return the first ChildTblProdShipping filtered by the prod_shipping_price_id column
 * @method     ChildTblProdShipping findOneByProdShippingName(string $prod_shipping_name) Return the first ChildTblProdShipping filtered by the prod_shipping_name column
 * @method     ChildTblProdShipping findOneByProdShippingDescription(string $prod_shipping_description) Return the first ChildTblProdShipping filtered by the prod_shipping_description column
 * @method     ChildTblProdShipping findOneByProdShippingAsia(string $prod_shipping_asia) Return the first ChildTblProdShipping filtered by the prod_shipping_asia column
 * @method     ChildTblProdShipping findOneByProdShippingEurope(string $prod_shipping_europe) Return the first ChildTblProdShipping filtered by the prod_shipping_europe column
 * @method     ChildTblProdShipping findOneByProdShippingUsa(string $prod_shipping_usa) Return the first ChildTblProdShipping filtered by the prod_shipping_usa column
 * @method     ChildTblProdShipping findOneByProdShippingCanada(string $prod_shipping_canada) Return the first ChildTblProdShipping filtered by the prod_shipping_canada column
 * @method     ChildTblProdShipping findOneByProdShippingAu(string $prod_shipping_au) Return the first ChildTblProdShipping filtered by the prod_shipping_au column
 * @method     ChildTblProdShipping findOneByProdShippingAsiaParcel(string $prod_shipping_asia_parcel) Return the first ChildTblProdShipping filtered by the prod_shipping_asia_parcel column
 * @method     ChildTblProdShipping findOneByProdShippingEuropeParcel(string $prod_shipping_europe_parcel) Return the first ChildTblProdShipping filtered by the prod_shipping_europe_parcel column
 * @method     ChildTblProdShipping findOneByProdShippingUsaParcel(string $prod_shipping_usa_parcel) Return the first ChildTblProdShipping filtered by the prod_shipping_usa_parcel column
 * @method     ChildTblProdShipping findOneByProdShippingCanadaParcel(string $prod_shipping_canada_parcel) Return the first ChildTblProdShipping filtered by the prod_shipping_canada_parcel column
 * @method     ChildTblProdShipping findOneByProdShippingAuParcel(string $prod_shipping_au_parcel) Return the first ChildTblProdShipping filtered by the prod_shipping_au_parcel column *

 * @method     ChildTblProdShipping requirePk($key, ConnectionInterface $con = null) Return the ChildTblProdShipping by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdShipping requireOne(ConnectionInterface $con = null) Return the first ChildTblProdShipping matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTblProdShipping requireOneByProdShippingPriceId(int $prod_shipping_price_id) Return the first ChildTblProdShipping filtered by the prod_shipping_price_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdShipping requireOneByProdShippingName(string $prod_shipping_name) Return the first ChildTblProdShipping filtered by the prod_shipping_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdShipping requireOneByProdShippingDescription(string $prod_shipping_description) Return the first ChildTblProdShipping filtered by the prod_shipping_description column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdShipping requireOneByProdShippingAsia(string $prod_shipping_asia) Return the first ChildTblProdShipping filtered by the prod_shipping_asia column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdShipping requireOneByProdShippingEurope(string $prod_shipping_europe) Return the first ChildTblProdShipping filtered by the prod_shipping_europe column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdShipping requireOneByProdShippingUsa(string $prod_shipping_usa) Return the first ChildTblProdShipping filtered by the prod_shipping_usa column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdShipping requireOneByProdShippingCanada(string $prod_shipping_canada) Return the first ChildTblProdShipping filtered by the prod_shipping_canada column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdShipping requireOneByProdShippingAu(string $prod_shipping_au) Return the first ChildTblProdShipping filtered by the prod_shipping_au column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdShipping requireOneByProdShippingAsiaParcel(string $prod_shipping_asia_parcel) Return the first ChildTblProdShipping filtered by the prod_shipping_asia_parcel column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdShipping requireOneByProdShippingEuropeParcel(string $prod_shipping_europe_parcel) Return the first ChildTblProdShipping filtered by the prod_shipping_europe_parcel column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdShipping requireOneByProdShippingUsaParcel(string $prod_shipping_usa_parcel) Return the first ChildTblProdShipping filtered by the prod_shipping_usa_parcel column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdShipping requireOneByProdShippingCanadaParcel(string $prod_shipping_canada_parcel) Return the first ChildTblProdShipping filtered by the prod_shipping_canada_parcel column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdShipping requireOneByProdShippingAuParcel(string $prod_shipping_au_parcel) Return the first ChildTblProdShipping filtered by the prod_shipping_au_parcel column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTblProdShipping[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildTblProdShipping objects based on current ModelCriteria
 * @method     ChildTblProdShipping[]|ObjectCollection findByProdShippingPriceId(int $prod_shipping_price_id) Return ChildTblProdShipping objects filtered by the prod_shipping_price_id column
 * @method     ChildTblProdShipping[]|ObjectCollection findByProdShippingName(string $prod_shipping_name) Return ChildTblProdShipping objects filtered by the prod_shipping_name column
 * @method     ChildTblProdShipping[]|ObjectCollection findByProdShippingDescription(string $prod_shipping_description) Return ChildTblProdShipping objects filtered by the prod_shipping_description column
 * @method     ChildTblProdShipping[]|ObjectCollection findByProdShippingAsia(string $prod_shipping_asia) Return ChildTblProdShipping objects filtered by the prod_shipping_asia column
 * @method     ChildTblProdShipping[]|ObjectCollection findByProdShippingEurope(string $prod_shipping_europe) Return ChildTblProdShipping objects filtered by the prod_shipping_europe column
 * @method     ChildTblProdShipping[]|ObjectCollection findByProdShippingUsa(string $prod_shipping_usa) Return ChildTblProdShipping objects filtered by the prod_shipping_usa column
 * @method     ChildTblProdShipping[]|ObjectCollection findByProdShippingCanada(string $prod_shipping_canada) Return ChildTblProdShipping objects filtered by the prod_shipping_canada column
 * @method     ChildTblProdShipping[]|ObjectCollection findByProdShippingAu(string $prod_shipping_au) Return ChildTblProdShipping objects filtered by the prod_shipping_au column
 * @method     ChildTblProdShipping[]|ObjectCollection findByProdShippingAsiaParcel(string $prod_shipping_asia_parcel) Return ChildTblProdShipping objects filtered by the prod_shipping_asia_parcel column
 * @method     ChildTblProdShipping[]|ObjectCollection findByProdShippingEuropeParcel(string $prod_shipping_europe_parcel) Return ChildTblProdShipping objects filtered by the prod_shipping_europe_parcel column
 * @method     ChildTblProdShipping[]|ObjectCollection findByProdShippingUsaParcel(string $prod_shipping_usa_parcel) Return ChildTblProdShipping objects filtered by the prod_shipping_usa_parcel column
 * @method     ChildTblProdShipping[]|ObjectCollection findByProdShippingCanadaParcel(string $prod_shipping_canada_parcel) Return ChildTblProdShipping objects filtered by the prod_shipping_canada_parcel column
 * @method     ChildTblProdShipping[]|ObjectCollection findByProdShippingAuParcel(string $prod_shipping_au_parcel) Return ChildTblProdShipping objects filtered by the prod_shipping_au_parcel column
 * @method     ChildTblProdShipping[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class TblProdShippingQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\TblProdShippingQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpm', $modelName = '\\TblProdShipping', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildTblProdShippingQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildTblProdShippingQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildTblProdShippingQuery) {
            return $criteria;
        }
        $query = new ChildTblProdShippingQuery();
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
     * @return ChildTblProdShipping|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TblProdShippingTableMap::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(TblProdShippingTableMap::DATABASE_NAME);
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
     * @return ChildTblProdShipping A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT prod_shipping_price_id, prod_shipping_name, prod_shipping_description, prod_shipping_asia, prod_shipping_europe, prod_shipping_usa, prod_shipping_canada, prod_shipping_au, prod_shipping_asia_parcel, prod_shipping_europe_parcel, prod_shipping_usa_parcel, prod_shipping_canada_parcel, prod_shipping_au_parcel FROM tbl_prod_shipping WHERE prod_shipping_price_id = :p0';
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
            /** @var ChildTblProdShipping $obj */
            $obj = new ChildTblProdShipping();
            $obj->hydrate($row);
            TblProdShippingTableMap::addInstanceToPool($obj, (string) $key);
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
     * @return ChildTblProdShipping|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildTblProdShippingQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TblProdShippingTableMap::COL_PROD_SHIPPING_PRICE_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildTblProdShippingQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TblProdShippingTableMap::COL_PROD_SHIPPING_PRICE_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the prod_shipping_price_id column
     *
     * Example usage:
     * <code>
     * $query->filterByProdShippingPriceId(1234); // WHERE prod_shipping_price_id = 1234
     * $query->filterByProdShippingPriceId(array(12, 34)); // WHERE prod_shipping_price_id IN (12, 34)
     * $query->filterByProdShippingPriceId(array('min' => 12)); // WHERE prod_shipping_price_id > 12
     * </code>
     *
     * @param     mixed $prodShippingPriceId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdShippingQuery The current query, for fluid interface
     */
    public function filterByProdShippingPriceId($prodShippingPriceId = null, $comparison = null)
    {
        if (is_array($prodShippingPriceId)) {
            $useMinMax = false;
            if (isset($prodShippingPriceId['min'])) {
                $this->addUsingAlias(TblProdShippingTableMap::COL_PROD_SHIPPING_PRICE_ID, $prodShippingPriceId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prodShippingPriceId['max'])) {
                $this->addUsingAlias(TblProdShippingTableMap::COL_PROD_SHIPPING_PRICE_ID, $prodShippingPriceId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblProdShippingTableMap::COL_PROD_SHIPPING_PRICE_ID, $prodShippingPriceId, $comparison);
    }

    /**
     * Filter the query on the prod_shipping_name column
     *
     * Example usage:
     * <code>
     * $query->filterByProdShippingName('fooValue');   // WHERE prod_shipping_name = 'fooValue'
     * $query->filterByProdShippingName('%fooValue%'); // WHERE prod_shipping_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodShippingName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdShippingQuery The current query, for fluid interface
     */
    public function filterByProdShippingName($prodShippingName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodShippingName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodShippingName)) {
                $prodShippingName = str_replace('*', '%', $prodShippingName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdShippingTableMap::COL_PROD_SHIPPING_NAME, $prodShippingName, $comparison);
    }

    /**
     * Filter the query on the prod_shipping_description column
     *
     * Example usage:
     * <code>
     * $query->filterByProdShippingDescription('fooValue');   // WHERE prod_shipping_description = 'fooValue'
     * $query->filterByProdShippingDescription('%fooValue%'); // WHERE prod_shipping_description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodShippingDescription The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdShippingQuery The current query, for fluid interface
     */
    public function filterByProdShippingDescription($prodShippingDescription = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodShippingDescription)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodShippingDescription)) {
                $prodShippingDescription = str_replace('*', '%', $prodShippingDescription);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdShippingTableMap::COL_PROD_SHIPPING_DESCRIPTION, $prodShippingDescription, $comparison);
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
     * @return $this|ChildTblProdShippingQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TblProdShippingTableMap::COL_PROD_SHIPPING_ASIA, $prodShippingAsia, $comparison);
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
     * @return $this|ChildTblProdShippingQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TblProdShippingTableMap::COL_PROD_SHIPPING_EUROPE, $prodShippingEurope, $comparison);
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
     * @return $this|ChildTblProdShippingQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TblProdShippingTableMap::COL_PROD_SHIPPING_USA, $prodShippingUsa, $comparison);
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
     * @return $this|ChildTblProdShippingQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TblProdShippingTableMap::COL_PROD_SHIPPING_CANADA, $prodShippingCanada, $comparison);
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
     * @return $this|ChildTblProdShippingQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TblProdShippingTableMap::COL_PROD_SHIPPING_AU, $prodShippingAu, $comparison);
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
     * @return $this|ChildTblProdShippingQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TblProdShippingTableMap::COL_PROD_SHIPPING_ASIA_PARCEL, $prodShippingAsiaParcel, $comparison);
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
     * @return $this|ChildTblProdShippingQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TblProdShippingTableMap::COL_PROD_SHIPPING_EUROPE_PARCEL, $prodShippingEuropeParcel, $comparison);
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
     * @return $this|ChildTblProdShippingQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TblProdShippingTableMap::COL_PROD_SHIPPING_USA_PARCEL, $prodShippingUsaParcel, $comparison);
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
     * @return $this|ChildTblProdShippingQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TblProdShippingTableMap::COL_PROD_SHIPPING_CANADA_PARCEL, $prodShippingCanadaParcel, $comparison);
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
     * @return $this|ChildTblProdShippingQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TblProdShippingTableMap::COL_PROD_SHIPPING_AU_PARCEL, $prodShippingAuParcel, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildTblProdShipping $tblProdShipping Object to remove from the list of results
     *
     * @return $this|ChildTblProdShippingQuery The current query, for fluid interface
     */
    public function prune($tblProdShipping = null)
    {
        if ($tblProdShipping) {
            $this->addUsingAlias(TblProdShippingTableMap::COL_PROD_SHIPPING_PRICE_ID, $tblProdShipping->getProdShippingPriceId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the tbl_prod_shipping table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TblProdShippingTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            TblProdShippingTableMap::clearInstancePool();
            TblProdShippingTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(TblProdShippingTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(TblProdShippingTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            
            TblProdShippingTableMap::removeInstanceFromPool($criteria);
        
            $affectedRows += ModelCriteria::delete($con);
            TblProdShippingTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // TblProdShippingQuery
