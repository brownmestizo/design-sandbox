<?php

namespace Base;

use \TblStands as ChildTblStands;
use \TblStandsQuery as ChildTblStandsQuery;
use \Exception;
use \PDO;
use Map\TblStandsTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'tbl_stands' table.
 *
 * 
 *
 * @method     ChildTblStandsQuery orderByStandId($order = Criteria::ASC) Order by the stand_id column
 * @method     ChildTblStandsQuery orderByStandName($order = Criteria::ASC) Order by the stand_name column
 * @method     ChildTblStandsQuery orderByStandPrice($order = Criteria::ASC) Order by the stand_price column
 * @method     ChildTblStandsQuery orderByMb($order = Criteria::ASC) Order by the mb column
 * @method     ChildTblStandsQuery orderByPa($order = Criteria::ASC) Order by the pa column
 * @method     ChildTblStandsQuery orderByM3($order = Criteria::ASC) Order by the m3 column
 *
 * @method     ChildTblStandsQuery groupByStandId() Group by the stand_id column
 * @method     ChildTblStandsQuery groupByStandName() Group by the stand_name column
 * @method     ChildTblStandsQuery groupByStandPrice() Group by the stand_price column
 * @method     ChildTblStandsQuery groupByMb() Group by the mb column
 * @method     ChildTblStandsQuery groupByPa() Group by the pa column
 * @method     ChildTblStandsQuery groupByM3() Group by the m3 column
 *
 * @method     ChildTblStandsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildTblStandsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildTblStandsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildTblStandsQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildTblStandsQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildTblStandsQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildTblStands findOne(ConnectionInterface $con = null) Return the first ChildTblStands matching the query
 * @method     ChildTblStands findOneOrCreate(ConnectionInterface $con = null) Return the first ChildTblStands matching the query, or a new ChildTblStands object populated from the query conditions when no match is found
 *
 * @method     ChildTblStands findOneByStandId(int $stand_id) Return the first ChildTblStands filtered by the stand_id column
 * @method     ChildTblStands findOneByStandName(string $stand_name) Return the first ChildTblStands filtered by the stand_name column
 * @method     ChildTblStands findOneByStandPrice(int $stand_price) Return the first ChildTblStands filtered by the stand_price column
 * @method     ChildTblStands findOneByMb(int $mb) Return the first ChildTblStands filtered by the mb column
 * @method     ChildTblStands findOneByPa(int $pa) Return the first ChildTblStands filtered by the pa column
 * @method     ChildTblStands findOneByM3(int $m3) Return the first ChildTblStands filtered by the m3 column *

 * @method     ChildTblStands requirePk($key, ConnectionInterface $con = null) Return the ChildTblStands by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblStands requireOne(ConnectionInterface $con = null) Return the first ChildTblStands matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTblStands requireOneByStandId(int $stand_id) Return the first ChildTblStands filtered by the stand_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblStands requireOneByStandName(string $stand_name) Return the first ChildTblStands filtered by the stand_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblStands requireOneByStandPrice(int $stand_price) Return the first ChildTblStands filtered by the stand_price column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblStands requireOneByMb(int $mb) Return the first ChildTblStands filtered by the mb column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblStands requireOneByPa(int $pa) Return the first ChildTblStands filtered by the pa column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblStands requireOneByM3(int $m3) Return the first ChildTblStands filtered by the m3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTblStands[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildTblStands objects based on current ModelCriteria
 * @method     ChildTblStands[]|ObjectCollection findByStandId(int $stand_id) Return ChildTblStands objects filtered by the stand_id column
 * @method     ChildTblStands[]|ObjectCollection findByStandName(string $stand_name) Return ChildTblStands objects filtered by the stand_name column
 * @method     ChildTblStands[]|ObjectCollection findByStandPrice(int $stand_price) Return ChildTblStands objects filtered by the stand_price column
 * @method     ChildTblStands[]|ObjectCollection findByMb(int $mb) Return ChildTblStands objects filtered by the mb column
 * @method     ChildTblStands[]|ObjectCollection findByPa(int $pa) Return ChildTblStands objects filtered by the pa column
 * @method     ChildTblStands[]|ObjectCollection findByM3(int $m3) Return ChildTblStands objects filtered by the m3 column
 * @method     ChildTblStands[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class TblStandsQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\TblStandsQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpm', $modelName = '\\TblStands', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildTblStandsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildTblStandsQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildTblStandsQuery) {
            return $criteria;
        }
        $query = new ChildTblStandsQuery();
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
     * @return ChildTblStands|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TblStandsTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(TblStandsTableMap::DATABASE_NAME);
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
     * @return ChildTblStands A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT stand_id, stand_name, stand_price, mb, pa, m3 FROM tbl_stands WHERE stand_id = :p0';
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
            /** @var ChildTblStands $obj */
            $obj = new ChildTblStands();
            $obj->hydrate($row);
            TblStandsTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildTblStands|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildTblStandsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TblStandsTableMap::COL_STAND_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildTblStandsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TblStandsTableMap::COL_STAND_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the stand_id column
     *
     * Example usage:
     * <code>
     * $query->filterByStandId(1234); // WHERE stand_id = 1234
     * $query->filterByStandId(array(12, 34)); // WHERE stand_id IN (12, 34)
     * $query->filterByStandId(array('min' => 12)); // WHERE stand_id > 12
     * </code>
     *
     * @param     mixed $standId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblStandsQuery The current query, for fluid interface
     */
    public function filterByStandId($standId = null, $comparison = null)
    {
        if (is_array($standId)) {
            $useMinMax = false;
            if (isset($standId['min'])) {
                $this->addUsingAlias(TblStandsTableMap::COL_STAND_ID, $standId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($standId['max'])) {
                $this->addUsingAlias(TblStandsTableMap::COL_STAND_ID, $standId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblStandsTableMap::COL_STAND_ID, $standId, $comparison);
    }

    /**
     * Filter the query on the stand_name column
     *
     * Example usage:
     * <code>
     * $query->filterByStandName('fooValue');   // WHERE stand_name = 'fooValue'
     * $query->filterByStandName('%fooValue%'); // WHERE stand_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $standName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblStandsQuery The current query, for fluid interface
     */
    public function filterByStandName($standName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($standName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $standName)) {
                $standName = str_replace('*', '%', $standName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblStandsTableMap::COL_STAND_NAME, $standName, $comparison);
    }

    /**
     * Filter the query on the stand_price column
     *
     * Example usage:
     * <code>
     * $query->filterByStandPrice(1234); // WHERE stand_price = 1234
     * $query->filterByStandPrice(array(12, 34)); // WHERE stand_price IN (12, 34)
     * $query->filterByStandPrice(array('min' => 12)); // WHERE stand_price > 12
     * </code>
     *
     * @param     mixed $standPrice The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblStandsQuery The current query, for fluid interface
     */
    public function filterByStandPrice($standPrice = null, $comparison = null)
    {
        if (is_array($standPrice)) {
            $useMinMax = false;
            if (isset($standPrice['min'])) {
                $this->addUsingAlias(TblStandsTableMap::COL_STAND_PRICE, $standPrice['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($standPrice['max'])) {
                $this->addUsingAlias(TblStandsTableMap::COL_STAND_PRICE, $standPrice['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblStandsTableMap::COL_STAND_PRICE, $standPrice, $comparison);
    }

    /**
     * Filter the query on the mb column
     *
     * Example usage:
     * <code>
     * $query->filterByMb(1234); // WHERE mb = 1234
     * $query->filterByMb(array(12, 34)); // WHERE mb IN (12, 34)
     * $query->filterByMb(array('min' => 12)); // WHERE mb > 12
     * </code>
     *
     * @param     mixed $mb The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblStandsQuery The current query, for fluid interface
     */
    public function filterByMb($mb = null, $comparison = null)
    {
        if (is_array($mb)) {
            $useMinMax = false;
            if (isset($mb['min'])) {
                $this->addUsingAlias(TblStandsTableMap::COL_MB, $mb['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mb['max'])) {
                $this->addUsingAlias(TblStandsTableMap::COL_MB, $mb['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblStandsTableMap::COL_MB, $mb, $comparison);
    }

    /**
     * Filter the query on the pa column
     *
     * Example usage:
     * <code>
     * $query->filterByPa(1234); // WHERE pa = 1234
     * $query->filterByPa(array(12, 34)); // WHERE pa IN (12, 34)
     * $query->filterByPa(array('min' => 12)); // WHERE pa > 12
     * </code>
     *
     * @param     mixed $pa The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblStandsQuery The current query, for fluid interface
     */
    public function filterByPa($pa = null, $comparison = null)
    {
        if (is_array($pa)) {
            $useMinMax = false;
            if (isset($pa['min'])) {
                $this->addUsingAlias(TblStandsTableMap::COL_PA, $pa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pa['max'])) {
                $this->addUsingAlias(TblStandsTableMap::COL_PA, $pa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblStandsTableMap::COL_PA, $pa, $comparison);
    }

    /**
     * Filter the query on the m3 column
     *
     * Example usage:
     * <code>
     * $query->filterByM3(1234); // WHERE m3 = 1234
     * $query->filterByM3(array(12, 34)); // WHERE m3 IN (12, 34)
     * $query->filterByM3(array('min' => 12)); // WHERE m3 > 12
     * </code>
     *
     * @param     mixed $m3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblStandsQuery The current query, for fluid interface
     */
    public function filterByM3($m3 = null, $comparison = null)
    {
        if (is_array($m3)) {
            $useMinMax = false;
            if (isset($m3['min'])) {
                $this->addUsingAlias(TblStandsTableMap::COL_M3, $m3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($m3['max'])) {
                $this->addUsingAlias(TblStandsTableMap::COL_M3, $m3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblStandsTableMap::COL_M3, $m3, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildTblStands $tblStands Object to remove from the list of results
     *
     * @return $this|ChildTblStandsQuery The current query, for fluid interface
     */
    public function prune($tblStands = null)
    {
        if ($tblStands) {
            $this->addUsingAlias(TblStandsTableMap::COL_STAND_ID, $tblStands->getStandId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the tbl_stands table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TblStandsTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            TblStandsTableMap::clearInstancePool();
            TblStandsTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(TblStandsTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(TblStandsTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            
            TblStandsTableMap::removeInstanceFromPool($criteria);
        
            $affectedRows += ModelCriteria::delete($con);
            TblStandsTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // TblStandsQuery
