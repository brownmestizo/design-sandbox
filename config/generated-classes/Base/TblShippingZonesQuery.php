<?php

namespace Base;

use \TblShippingZones as ChildTblShippingZones;
use \TblShippingZonesQuery as ChildTblShippingZonesQuery;
use \Exception;
use \PDO;
use Map\TblShippingZonesTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'tbl_shipping_zones' table.
 *
 * 
 *
 * @method     ChildTblShippingZonesQuery orderByZoneId($order = Criteria::ASC) Order by the zone_id column
 * @method     ChildTblShippingZonesQuery orderByZoneName($order = Criteria::ASC) Order by the zone_name column
 * @method     ChildTblShippingZonesQuery orderByZoneDesc($order = Criteria::ASC) Order by the zone_desc column
 *
 * @method     ChildTblShippingZonesQuery groupByZoneId() Group by the zone_id column
 * @method     ChildTblShippingZonesQuery groupByZoneName() Group by the zone_name column
 * @method     ChildTblShippingZonesQuery groupByZoneDesc() Group by the zone_desc column
 *
 * @method     ChildTblShippingZonesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildTblShippingZonesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildTblShippingZonesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildTblShippingZonesQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildTblShippingZonesQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildTblShippingZonesQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildTblShippingZones findOne(ConnectionInterface $con = null) Return the first ChildTblShippingZones matching the query
 * @method     ChildTblShippingZones findOneOrCreate(ConnectionInterface $con = null) Return the first ChildTblShippingZones matching the query, or a new ChildTblShippingZones object populated from the query conditions when no match is found
 *
 * @method     ChildTblShippingZones findOneByZoneId(int $zone_id) Return the first ChildTblShippingZones filtered by the zone_id column
 * @method     ChildTblShippingZones findOneByZoneName(string $zone_name) Return the first ChildTblShippingZones filtered by the zone_name column
 * @method     ChildTblShippingZones findOneByZoneDesc(string $zone_desc) Return the first ChildTblShippingZones filtered by the zone_desc column *

 * @method     ChildTblShippingZones requirePk($key, ConnectionInterface $con = null) Return the ChildTblShippingZones by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingZones requireOne(ConnectionInterface $con = null) Return the first ChildTblShippingZones matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTblShippingZones requireOneByZoneId(int $zone_id) Return the first ChildTblShippingZones filtered by the zone_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingZones requireOneByZoneName(string $zone_name) Return the first ChildTblShippingZones filtered by the zone_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingZones requireOneByZoneDesc(string $zone_desc) Return the first ChildTblShippingZones filtered by the zone_desc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTblShippingZones[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildTblShippingZones objects based on current ModelCriteria
 * @method     ChildTblShippingZones[]|ObjectCollection findByZoneId(int $zone_id) Return ChildTblShippingZones objects filtered by the zone_id column
 * @method     ChildTblShippingZones[]|ObjectCollection findByZoneName(string $zone_name) Return ChildTblShippingZones objects filtered by the zone_name column
 * @method     ChildTblShippingZones[]|ObjectCollection findByZoneDesc(string $zone_desc) Return ChildTblShippingZones objects filtered by the zone_desc column
 * @method     ChildTblShippingZones[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class TblShippingZonesQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\TblShippingZonesQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpm', $modelName = '\\TblShippingZones', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildTblShippingZonesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildTblShippingZonesQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildTblShippingZonesQuery) {
            return $criteria;
        }
        $query = new ChildTblShippingZonesQuery();
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
     * @return ChildTblShippingZones|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TblShippingZonesTableMap::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(TblShippingZonesTableMap::DATABASE_NAME);
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
     * @return ChildTblShippingZones A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT zone_id, zone_name, zone_desc FROM tbl_shipping_zones WHERE zone_id = :p0';
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
            /** @var ChildTblShippingZones $obj */
            $obj = new ChildTblShippingZones();
            $obj->hydrate($row);
            TblShippingZonesTableMap::addInstanceToPool($obj, (string) $key);
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
     * @return ChildTblShippingZones|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildTblShippingZonesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TblShippingZonesTableMap::COL_ZONE_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildTblShippingZonesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TblShippingZonesTableMap::COL_ZONE_ID, $keys, Criteria::IN);
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
     * @return $this|ChildTblShippingZonesQuery The current query, for fluid interface
     */
    public function filterByZoneId($zoneId = null, $comparison = null)
    {
        if (is_array($zoneId)) {
            $useMinMax = false;
            if (isset($zoneId['min'])) {
                $this->addUsingAlias(TblShippingZonesTableMap::COL_ZONE_ID, $zoneId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($zoneId['max'])) {
                $this->addUsingAlias(TblShippingZonesTableMap::COL_ZONE_ID, $zoneId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblShippingZonesTableMap::COL_ZONE_ID, $zoneId, $comparison);
    }

    /**
     * Filter the query on the zone_name column
     *
     * Example usage:
     * <code>
     * $query->filterByZoneName('fooValue');   // WHERE zone_name = 'fooValue'
     * $query->filterByZoneName('%fooValue%'); // WHERE zone_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $zoneName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblShippingZonesQuery The current query, for fluid interface
     */
    public function filterByZoneName($zoneName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($zoneName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $zoneName)) {
                $zoneName = str_replace('*', '%', $zoneName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblShippingZonesTableMap::COL_ZONE_NAME, $zoneName, $comparison);
    }

    /**
     * Filter the query on the zone_desc column
     *
     * Example usage:
     * <code>
     * $query->filterByZoneDesc('fooValue');   // WHERE zone_desc = 'fooValue'
     * $query->filterByZoneDesc('%fooValue%'); // WHERE zone_desc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $zoneDesc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblShippingZonesQuery The current query, for fluid interface
     */
    public function filterByZoneDesc($zoneDesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($zoneDesc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $zoneDesc)) {
                $zoneDesc = str_replace('*', '%', $zoneDesc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblShippingZonesTableMap::COL_ZONE_DESC, $zoneDesc, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildTblShippingZones $tblShippingZones Object to remove from the list of results
     *
     * @return $this|ChildTblShippingZonesQuery The current query, for fluid interface
     */
    public function prune($tblShippingZones = null)
    {
        if ($tblShippingZones) {
            $this->addUsingAlias(TblShippingZonesTableMap::COL_ZONE_ID, $tblShippingZones->getZoneId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the tbl_shipping_zones table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TblShippingZonesTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            TblShippingZonesTableMap::clearInstancePool();
            TblShippingZonesTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(TblShippingZonesTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(TblShippingZonesTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            
            TblShippingZonesTableMap::removeInstanceFromPool($criteria);
        
            $affectedRows += ModelCriteria::delete($con);
            TblShippingZonesTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // TblShippingZonesQuery
