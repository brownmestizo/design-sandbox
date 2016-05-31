<?php

namespace Base;

use \TblShippingCountries as ChildTblShippingCountries;
use \TblShippingCountriesQuery as ChildTblShippingCountriesQuery;
use \Exception;
use \PDO;
use Map\TblShippingCountriesTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'tbl_shipping_countries' table.
 *
 *
 *
 * @method     ChildTblShippingCountriesQuery orderByCtyId($order = Criteria::ASC) Order by the cty_id column
 * @method     ChildTblShippingCountriesQuery orderByCtyName($order = Criteria::ASC) Order by the cty_name column
 * @method     ChildTblShippingCountriesQuery orderByCtyPriority($order = Criteria::ASC) Order by the cty_priority column
 * @method     ChildTblShippingCountriesQuery orderByCtyEconomy($order = Criteria::ASC) Order by the cty_economy column
 * @method     ChildTblShippingCountriesQuery orderByZoneId($order = Criteria::ASC) Order by the zone_id column
 *
 * @method     ChildTblShippingCountriesQuery groupByCtyId() Group by the cty_id column
 * @method     ChildTblShippingCountriesQuery groupByCtyName() Group by the cty_name column
 * @method     ChildTblShippingCountriesQuery groupByCtyPriority() Group by the cty_priority column
 * @method     ChildTblShippingCountriesQuery groupByCtyEconomy() Group by the cty_economy column
 * @method     ChildTblShippingCountriesQuery groupByZoneId() Group by the zone_id column
 *
 * @method     ChildTblShippingCountriesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildTblShippingCountriesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildTblShippingCountriesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildTblShippingCountriesQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildTblShippingCountriesQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildTblShippingCountriesQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildTblShippingCountries findOne(ConnectionInterface $con = null) Return the first ChildTblShippingCountries matching the query
 * @method     ChildTblShippingCountries findOneOrCreate(ConnectionInterface $con = null) Return the first ChildTblShippingCountries matching the query, or a new ChildTblShippingCountries object populated from the query conditions when no match is found
 *
 * @method     ChildTblShippingCountries findOneByCtyId(int $cty_id) Return the first ChildTblShippingCountries filtered by the cty_id column
 * @method     ChildTblShippingCountries findOneByCtyName(string $cty_name) Return the first ChildTblShippingCountries filtered by the cty_name column
 * @method     ChildTblShippingCountries findOneByCtyPriority(string $cty_priority) Return the first ChildTblShippingCountries filtered by the cty_priority column
 * @method     ChildTblShippingCountries findOneByCtyEconomy(string $cty_economy) Return the first ChildTblShippingCountries filtered by the cty_economy column
 * @method     ChildTblShippingCountries findOneByZoneId(int $zone_id) Return the first ChildTblShippingCountries filtered by the zone_id column *

 * @method     ChildTblShippingCountries requirePk($key, ConnectionInterface $con = null) Return the ChildTblShippingCountries by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingCountries requireOne(ConnectionInterface $con = null) Return the first ChildTblShippingCountries matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTblShippingCountries requireOneByCtyId(int $cty_id) Return the first ChildTblShippingCountries filtered by the cty_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingCountries requireOneByCtyName(string $cty_name) Return the first ChildTblShippingCountries filtered by the cty_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingCountries requireOneByCtyPriority(string $cty_priority) Return the first ChildTblShippingCountries filtered by the cty_priority column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingCountries requireOneByCtyEconomy(string $cty_economy) Return the first ChildTblShippingCountries filtered by the cty_economy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingCountries requireOneByZoneId(int $zone_id) Return the first ChildTblShippingCountries filtered by the zone_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTblShippingCountries[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildTblShippingCountries objects based on current ModelCriteria
 * @method     ChildTblShippingCountries[]|ObjectCollection findByCtyId(int $cty_id) Return ChildTblShippingCountries objects filtered by the cty_id column
 * @method     ChildTblShippingCountries[]|ObjectCollection findByCtyName(string $cty_name) Return ChildTblShippingCountries objects filtered by the cty_name column
 * @method     ChildTblShippingCountries[]|ObjectCollection findByCtyPriority(string $cty_priority) Return ChildTblShippingCountries objects filtered by the cty_priority column
 * @method     ChildTblShippingCountries[]|ObjectCollection findByCtyEconomy(string $cty_economy) Return ChildTblShippingCountries objects filtered by the cty_economy column
 * @method     ChildTblShippingCountries[]|ObjectCollection findByZoneId(int $zone_id) Return ChildTblShippingCountries objects filtered by the zone_id column
 * @method     ChildTblShippingCountries[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class TblShippingCountriesQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\TblShippingCountriesQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpm', $modelName = '\\TblShippingCountries', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildTblShippingCountriesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildTblShippingCountriesQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildTblShippingCountriesQuery) {
            return $criteria;
        }
        $query = new ChildTblShippingCountriesQuery();
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
     * @return ChildTblShippingCountries|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(TblShippingCountriesTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = TblShippingCountriesTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
            // the object is already in the instance pool
            return $obj;
        }

        return $this->findPkSimple($key, $con);
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
     * @return ChildTblShippingCountries A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT cty_id, cty_name, cty_priority, cty_economy, zone_id FROM tbl_shipping_countries WHERE cty_id = :p0';
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
            /** @var ChildTblShippingCountries $obj */
            $obj = new ChildTblShippingCountries();
            $obj->hydrate($row);
            TblShippingCountriesTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildTblShippingCountries|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildTblShippingCountriesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TblShippingCountriesTableMap::COL_CTY_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildTblShippingCountriesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TblShippingCountriesTableMap::COL_CTY_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the cty_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCtyId(1234); // WHERE cty_id = 1234
     * $query->filterByCtyId(array(12, 34)); // WHERE cty_id IN (12, 34)
     * $query->filterByCtyId(array('min' => 12)); // WHERE cty_id > 12
     * </code>
     *
     * @param     mixed $ctyId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblShippingCountriesQuery The current query, for fluid interface
     */
    public function filterByCtyId($ctyId = null, $comparison = null)
    {
        if (is_array($ctyId)) {
            $useMinMax = false;
            if (isset($ctyId['min'])) {
                $this->addUsingAlias(TblShippingCountriesTableMap::COL_CTY_ID, $ctyId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ctyId['max'])) {
                $this->addUsingAlias(TblShippingCountriesTableMap::COL_CTY_ID, $ctyId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblShippingCountriesTableMap::COL_CTY_ID, $ctyId, $comparison);
    }

    /**
     * Filter the query on the cty_name column
     *
     * Example usage:
     * <code>
     * $query->filterByCtyName('fooValue');   // WHERE cty_name = 'fooValue'
     * $query->filterByCtyName('%fooValue%'); // WHERE cty_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ctyName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblShippingCountriesQuery The current query, for fluid interface
     */
    public function filterByCtyName($ctyName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ctyName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ctyName)) {
                $ctyName = str_replace('*', '%', $ctyName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblShippingCountriesTableMap::COL_CTY_NAME, $ctyName, $comparison);
    }

    /**
     * Filter the query on the cty_priority column
     *
     * Example usage:
     * <code>
     * $query->filterByCtyPriority('fooValue');   // WHERE cty_priority = 'fooValue'
     * $query->filterByCtyPriority('%fooValue%'); // WHERE cty_priority LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ctyPriority The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblShippingCountriesQuery The current query, for fluid interface
     */
    public function filterByCtyPriority($ctyPriority = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ctyPriority)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ctyPriority)) {
                $ctyPriority = str_replace('*', '%', $ctyPriority);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblShippingCountriesTableMap::COL_CTY_PRIORITY, $ctyPriority, $comparison);
    }

    /**
     * Filter the query on the cty_economy column
     *
     * Example usage:
     * <code>
     * $query->filterByCtyEconomy('fooValue');   // WHERE cty_economy = 'fooValue'
     * $query->filterByCtyEconomy('%fooValue%'); // WHERE cty_economy LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ctyEconomy The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblShippingCountriesQuery The current query, for fluid interface
     */
    public function filterByCtyEconomy($ctyEconomy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ctyEconomy)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ctyEconomy)) {
                $ctyEconomy = str_replace('*', '%', $ctyEconomy);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblShippingCountriesTableMap::COL_CTY_ECONOMY, $ctyEconomy, $comparison);
    }

    /**
     * Filter the query on the zone_id column
     *
     * Example usage:
     * <code>
     * $query->filterByZoneId(1234); // WHERE zone_id = 1234
     * $query->filterByZoneId(array(12, 34)); // WHERE zone_id IN (12, 34)
     * $query->filterByZoneId(array('min' => 12)); // WHERE zone_id > 12
     * </code>
     *
     * @param     mixed $zoneId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblShippingCountriesQuery The current query, for fluid interface
     */
    public function filterByZoneId($zoneId = null, $comparison = null)
    {
        if (is_array($zoneId)) {
            $useMinMax = false;
            if (isset($zoneId['min'])) {
                $this->addUsingAlias(TblShippingCountriesTableMap::COL_ZONE_ID, $zoneId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($zoneId['max'])) {
                $this->addUsingAlias(TblShippingCountriesTableMap::COL_ZONE_ID, $zoneId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblShippingCountriesTableMap::COL_ZONE_ID, $zoneId, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildTblShippingCountries $tblShippingCountries Object to remove from the list of results
     *
     * @return $this|ChildTblShippingCountriesQuery The current query, for fluid interface
     */
    public function prune($tblShippingCountries = null)
    {
        if ($tblShippingCountries) {
            $this->addUsingAlias(TblShippingCountriesTableMap::COL_CTY_ID, $tblShippingCountries->getCtyId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the tbl_shipping_countries table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TblShippingCountriesTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            TblShippingCountriesTableMap::clearInstancePool();
            TblShippingCountriesTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(TblShippingCountriesTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(TblShippingCountriesTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            TblShippingCountriesTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            TblShippingCountriesTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // TblShippingCountriesQuery
