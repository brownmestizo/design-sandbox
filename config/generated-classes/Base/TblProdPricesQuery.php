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
 * @method     ChildTblProdPricesQuery orderByProdCustomprice($order = Criteria::ASC) Order by the prod_customprice column
 *
 * @method     ChildTblProdPricesQuery groupByProdId() Group by the prod_id column
 * @method     ChildTblProdPricesQuery groupByProdNormalprice() Group by the prod_normalprice column
 * @method     ChildTblProdPricesQuery groupByProdSalesprice() Group by the prod_salesprice column
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
 * @method     ChildTblProdPrices findOneByProdCustomprice(string $prod_customprice) Return the first ChildTblProdPrices filtered by the prod_customprice column *

 * @method     ChildTblProdPrices requirePk($key, ConnectionInterface $con = null) Return the ChildTblProdPrices by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdPrices requireOne(ConnectionInterface $con = null) Return the first ChildTblProdPrices matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTblProdPrices requireOneByProdId(int $prod_id) Return the first ChildTblProdPrices filtered by the prod_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdPrices requireOneByProdNormalprice(string $prod_normalprice) Return the first ChildTblProdPrices filtered by the prod_normalprice column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdPrices requireOneByProdSalesprice(string $prod_salesprice) Return the first ChildTblProdPrices filtered by the prod_salesprice column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdPrices requireOneByProdCustomprice(string $prod_customprice) Return the first ChildTblProdPrices filtered by the prod_customprice column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTblProdPrices[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildTblProdPrices objects based on current ModelCriteria
 * @method     ChildTblProdPrices[]|ObjectCollection findByProdId(int $prod_id) Return ChildTblProdPrices objects filtered by the prod_id column
 * @method     ChildTblProdPrices[]|ObjectCollection findByProdNormalprice(string $prod_normalprice) Return ChildTblProdPrices objects filtered by the prod_normalprice column
 * @method     ChildTblProdPrices[]|ObjectCollection findByProdSalesprice(string $prod_salesprice) Return ChildTblProdPrices objects filtered by the prod_salesprice column
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

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(TblProdPricesTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = TblProdPricesTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildTblProdPrices A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT prod_id, prod_normalprice, prod_salesprice, prod_customprice FROM tbl_prod_prices WHERE prod_id = :p0';
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
            TblProdPricesTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
