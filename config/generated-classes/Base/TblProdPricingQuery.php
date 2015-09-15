<?php

namespace Base;

use \TblProdPricing as ChildTblProdPricing;
use \TblProdPricingQuery as ChildTblProdPricingQuery;
use \Exception;
use \PDO;
use Map\TblProdPricingTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'tbl_prod_pricing' table.
 *
 * 
 *
 * @method     ChildTblProdPricingQuery orderByProdPriceId($order = Criteria::ASC) Order by the prod_price_id column
 * @method     ChildTblProdPricingQuery orderByProdPriceName($order = Criteria::ASC) Order by the prod_price_name column
 * @method     ChildTblProdPricingQuery orderByProdPriceDescription($order = Criteria::ASC) Order by the prod_price_description column
 * @method     ChildTblProdPricingQuery orderByProdPricePrice($order = Criteria::ASC) Order by the prod_price_price column
 *
 * @method     ChildTblProdPricingQuery groupByProdPriceId() Group by the prod_price_id column
 * @method     ChildTblProdPricingQuery groupByProdPriceName() Group by the prod_price_name column
 * @method     ChildTblProdPricingQuery groupByProdPriceDescription() Group by the prod_price_description column
 * @method     ChildTblProdPricingQuery groupByProdPricePrice() Group by the prod_price_price column
 *
 * @method     ChildTblProdPricingQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildTblProdPricingQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildTblProdPricingQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildTblProdPricingQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildTblProdPricingQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildTblProdPricingQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildTblProdPricingQuery leftJoinTblProdInfo($relationAlias = null) Adds a LEFT JOIN clause to the query using the TblProdInfo relation
 * @method     ChildTblProdPricingQuery rightJoinTblProdInfo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TblProdInfo relation
 * @method     ChildTblProdPricingQuery innerJoinTblProdInfo($relationAlias = null) Adds a INNER JOIN clause to the query using the TblProdInfo relation
 *
 * @method     ChildTblProdPricingQuery joinWithTblProdInfo($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the TblProdInfo relation
 *
 * @method     ChildTblProdPricingQuery leftJoinWithTblProdInfo() Adds a LEFT JOIN clause and with to the query using the TblProdInfo relation
 * @method     ChildTblProdPricingQuery rightJoinWithTblProdInfo() Adds a RIGHT JOIN clause and with to the query using the TblProdInfo relation
 * @method     ChildTblProdPricingQuery innerJoinWithTblProdInfo() Adds a INNER JOIN clause and with to the query using the TblProdInfo relation
 *
 * @method     \TblProdInfoQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildTblProdPricing findOne(ConnectionInterface $con = null) Return the first ChildTblProdPricing matching the query
 * @method     ChildTblProdPricing findOneOrCreate(ConnectionInterface $con = null) Return the first ChildTblProdPricing matching the query, or a new ChildTblProdPricing object populated from the query conditions when no match is found
 *
 * @method     ChildTblProdPricing findOneByProdPriceId(int $prod_price_id) Return the first ChildTblProdPricing filtered by the prod_price_id column
 * @method     ChildTblProdPricing findOneByProdPriceName(string $prod_price_name) Return the first ChildTblProdPricing filtered by the prod_price_name column
 * @method     ChildTblProdPricing findOneByProdPriceDescription(string $prod_price_description) Return the first ChildTblProdPricing filtered by the prod_price_description column
 * @method     ChildTblProdPricing findOneByProdPricePrice(string $prod_price_price) Return the first ChildTblProdPricing filtered by the prod_price_price column *

 * @method     ChildTblProdPricing requirePk($key, ConnectionInterface $con = null) Return the ChildTblProdPricing by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdPricing requireOne(ConnectionInterface $con = null) Return the first ChildTblProdPricing matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTblProdPricing requireOneByProdPriceId(int $prod_price_id) Return the first ChildTblProdPricing filtered by the prod_price_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdPricing requireOneByProdPriceName(string $prod_price_name) Return the first ChildTblProdPricing filtered by the prod_price_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdPricing requireOneByProdPriceDescription(string $prod_price_description) Return the first ChildTblProdPricing filtered by the prod_price_description column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdPricing requireOneByProdPricePrice(string $prod_price_price) Return the first ChildTblProdPricing filtered by the prod_price_price column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTblProdPricing[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildTblProdPricing objects based on current ModelCriteria
 * @method     ChildTblProdPricing[]|ObjectCollection findByProdPriceId(int $prod_price_id) Return ChildTblProdPricing objects filtered by the prod_price_id column
 * @method     ChildTblProdPricing[]|ObjectCollection findByProdPriceName(string $prod_price_name) Return ChildTblProdPricing objects filtered by the prod_price_name column
 * @method     ChildTblProdPricing[]|ObjectCollection findByProdPriceDescription(string $prod_price_description) Return ChildTblProdPricing objects filtered by the prod_price_description column
 * @method     ChildTblProdPricing[]|ObjectCollection findByProdPricePrice(string $prod_price_price) Return ChildTblProdPricing objects filtered by the prod_price_price column
 * @method     ChildTblProdPricing[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class TblProdPricingQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\TblProdPricingQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpm', $modelName = '\\TblProdPricing', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildTblProdPricingQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildTblProdPricingQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildTblProdPricingQuery) {
            return $criteria;
        }
        $query = new ChildTblProdPricingQuery();
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
     * @return ChildTblProdPricing|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TblProdPricingTableMap::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(TblProdPricingTableMap::DATABASE_NAME);
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
     * @return ChildTblProdPricing A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT prod_price_id, prod_price_name, prod_price_description, prod_price_price FROM tbl_prod_pricing WHERE prod_price_id = :p0';
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
            /** @var ChildTblProdPricing $obj */
            $obj = new ChildTblProdPricing();
            $obj->hydrate($row);
            TblProdPricingTableMap::addInstanceToPool($obj, (string) $key);
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
     * @return ChildTblProdPricing|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildTblProdPricingQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TblProdPricingTableMap::COL_PROD_PRICE_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildTblProdPricingQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TblProdPricingTableMap::COL_PROD_PRICE_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the prod_price_id column
     *
     * Example usage:
     * <code>
     * $query->filterByProdPriceId(1234); // WHERE prod_price_id = 1234
     * $query->filterByProdPriceId(array(12, 34)); // WHERE prod_price_id IN (12, 34)
     * $query->filterByProdPriceId(array('min' => 12)); // WHERE prod_price_id > 12
     * </code>
     *
     * @param     mixed $prodPriceId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdPricingQuery The current query, for fluid interface
     */
    public function filterByProdPriceId($prodPriceId = null, $comparison = null)
    {
        if (is_array($prodPriceId)) {
            $useMinMax = false;
            if (isset($prodPriceId['min'])) {
                $this->addUsingAlias(TblProdPricingTableMap::COL_PROD_PRICE_ID, $prodPriceId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prodPriceId['max'])) {
                $this->addUsingAlias(TblProdPricingTableMap::COL_PROD_PRICE_ID, $prodPriceId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblProdPricingTableMap::COL_PROD_PRICE_ID, $prodPriceId, $comparison);
    }

    /**
     * Filter the query on the prod_price_name column
     *
     * Example usage:
     * <code>
     * $query->filterByProdPriceName('fooValue');   // WHERE prod_price_name = 'fooValue'
     * $query->filterByProdPriceName('%fooValue%'); // WHERE prod_price_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodPriceName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdPricingQuery The current query, for fluid interface
     */
    public function filterByProdPriceName($prodPriceName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodPriceName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodPriceName)) {
                $prodPriceName = str_replace('*', '%', $prodPriceName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdPricingTableMap::COL_PROD_PRICE_NAME, $prodPriceName, $comparison);
    }

    /**
     * Filter the query on the prod_price_description column
     *
     * Example usage:
     * <code>
     * $query->filterByProdPriceDescription('fooValue');   // WHERE prod_price_description = 'fooValue'
     * $query->filterByProdPriceDescription('%fooValue%'); // WHERE prod_price_description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodPriceDescription The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdPricingQuery The current query, for fluid interface
     */
    public function filterByProdPriceDescription($prodPriceDescription = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodPriceDescription)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodPriceDescription)) {
                $prodPriceDescription = str_replace('*', '%', $prodPriceDescription);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdPricingTableMap::COL_PROD_PRICE_DESCRIPTION, $prodPriceDescription, $comparison);
    }

    /**
     * Filter the query on the prod_price_price column
     *
     * Example usage:
     * <code>
     * $query->filterByProdPricePrice('fooValue');   // WHERE prod_price_price = 'fooValue'
     * $query->filterByProdPricePrice('%fooValue%'); // WHERE prod_price_price LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodPricePrice The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdPricingQuery The current query, for fluid interface
     */
    public function filterByProdPricePrice($prodPricePrice = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodPricePrice)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodPricePrice)) {
                $prodPricePrice = str_replace('*', '%', $prodPricePrice);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdPricingTableMap::COL_PROD_PRICE_PRICE, $prodPricePrice, $comparison);
    }

    /**
     * Filter the query by a related \TblProdInfo object
     *
     * @param \TblProdInfo|ObjectCollection $tblProdInfo the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildTblProdPricingQuery The current query, for fluid interface
     */
    public function filterByTblProdInfo($tblProdInfo, $comparison = null)
    {
        if ($tblProdInfo instanceof \TblProdInfo) {
            return $this
                ->addUsingAlias(TblProdPricingTableMap::COL_PROD_PRICE_ID, $tblProdInfo->getProdPriceId(), $comparison);
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
     * @return $this|ChildTblProdPricingQuery The current query, for fluid interface
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
     * @param   ChildTblProdPricing $tblProdPricing Object to remove from the list of results
     *
     * @return $this|ChildTblProdPricingQuery The current query, for fluid interface
     */
    public function prune($tblProdPricing = null)
    {
        if ($tblProdPricing) {
            $this->addUsingAlias(TblProdPricingTableMap::COL_PROD_PRICE_ID, $tblProdPricing->getProdPriceId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the tbl_prod_pricing table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TblProdPricingTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            TblProdPricingTableMap::clearInstancePool();
            TblProdPricingTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(TblProdPricingTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(TblProdPricingTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            
            TblProdPricingTableMap::removeInstanceFromPool($criteria);
        
            $affectedRows += ModelCriteria::delete($con);
            TblProdPricingTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // TblProdPricingQuery
