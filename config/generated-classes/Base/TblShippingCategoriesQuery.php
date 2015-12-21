<?php

namespace Base;

use \TblShippingCategories as ChildTblShippingCategories;
use \TblShippingCategoriesQuery as ChildTblShippingCategoriesQuery;
use \Exception;
use \PDO;
use Map\TblShippingCategoriesTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'tbl_shipping_categories' table.
 *
 * 
 *
 * @method     ChildTblShippingCategoriesQuery orderByProdShippingPriceId($order = Criteria::ASC) Order by the prod_shipping_price_id column
 * @method     ChildTblShippingCategoriesQuery orderByProdShippingName($order = Criteria::ASC) Order by the prod_shipping_name column
 * @method     ChildTblShippingCategoriesQuery orderByWeightIde($order = Criteria::ASC) Order by the weight_ide column
 * @method     ChildTblShippingCategoriesQuery orderByWeightIdp($order = Criteria::ASC) Order by the weight_idp column
 *
 * @method     ChildTblShippingCategoriesQuery groupByProdShippingPriceId() Group by the prod_shipping_price_id column
 * @method     ChildTblShippingCategoriesQuery groupByProdShippingName() Group by the prod_shipping_name column
 * @method     ChildTblShippingCategoriesQuery groupByWeightIde() Group by the weight_ide column
 * @method     ChildTblShippingCategoriesQuery groupByWeightIdp() Group by the weight_idp column
 *
 * @method     ChildTblShippingCategoriesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildTblShippingCategoriesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildTblShippingCategoriesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildTblShippingCategoriesQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildTblShippingCategoriesQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildTblShippingCategoriesQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildTblShippingCategoriesQuery leftJoinTblProdInfo($relationAlias = null) Adds a LEFT JOIN clause to the query using the TblProdInfo relation
 * @method     ChildTblShippingCategoriesQuery rightJoinTblProdInfo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TblProdInfo relation
 * @method     ChildTblShippingCategoriesQuery innerJoinTblProdInfo($relationAlias = null) Adds a INNER JOIN clause to the query using the TblProdInfo relation
 *
 * @method     ChildTblShippingCategoriesQuery joinWithTblProdInfo($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the TblProdInfo relation
 *
 * @method     ChildTblShippingCategoriesQuery leftJoinWithTblProdInfo() Adds a LEFT JOIN clause and with to the query using the TblProdInfo relation
 * @method     ChildTblShippingCategoriesQuery rightJoinWithTblProdInfo() Adds a RIGHT JOIN clause and with to the query using the TblProdInfo relation
 * @method     ChildTblShippingCategoriesQuery innerJoinWithTblProdInfo() Adds a INNER JOIN clause and with to the query using the TblProdInfo relation
 *
 * @method     \TblProdInfoQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildTblShippingCategories findOne(ConnectionInterface $con = null) Return the first ChildTblShippingCategories matching the query
 * @method     ChildTblShippingCategories findOneOrCreate(ConnectionInterface $con = null) Return the first ChildTblShippingCategories matching the query, or a new ChildTblShippingCategories object populated from the query conditions when no match is found
 *
 * @method     ChildTblShippingCategories findOneByProdShippingPriceId(int $prod_shipping_price_id) Return the first ChildTblShippingCategories filtered by the prod_shipping_price_id column
 * @method     ChildTblShippingCategories findOneByProdShippingName(string $prod_shipping_name) Return the first ChildTblShippingCategories filtered by the prod_shipping_name column
 * @method     ChildTblShippingCategories findOneByWeightIde(int $weight_ide) Return the first ChildTblShippingCategories filtered by the weight_ide column
 * @method     ChildTblShippingCategories findOneByWeightIdp(int $weight_idp) Return the first ChildTblShippingCategories filtered by the weight_idp column *

 * @method     ChildTblShippingCategories requirePk($key, ConnectionInterface $con = null) Return the ChildTblShippingCategories by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingCategories requireOne(ConnectionInterface $con = null) Return the first ChildTblShippingCategories matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTblShippingCategories requireOneByProdShippingPriceId(int $prod_shipping_price_id) Return the first ChildTblShippingCategories filtered by the prod_shipping_price_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingCategories requireOneByProdShippingName(string $prod_shipping_name) Return the first ChildTblShippingCategories filtered by the prod_shipping_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingCategories requireOneByWeightIde(int $weight_ide) Return the first ChildTblShippingCategories filtered by the weight_ide column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingCategories requireOneByWeightIdp(int $weight_idp) Return the first ChildTblShippingCategories filtered by the weight_idp column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTblShippingCategories[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildTblShippingCategories objects based on current ModelCriteria
 * @method     ChildTblShippingCategories[]|ObjectCollection findByProdShippingPriceId(int $prod_shipping_price_id) Return ChildTblShippingCategories objects filtered by the prod_shipping_price_id column
 * @method     ChildTblShippingCategories[]|ObjectCollection findByProdShippingName(string $prod_shipping_name) Return ChildTblShippingCategories objects filtered by the prod_shipping_name column
 * @method     ChildTblShippingCategories[]|ObjectCollection findByWeightIde(int $weight_ide) Return ChildTblShippingCategories objects filtered by the weight_ide column
 * @method     ChildTblShippingCategories[]|ObjectCollection findByWeightIdp(int $weight_idp) Return ChildTblShippingCategories objects filtered by the weight_idp column
 * @method     ChildTblShippingCategories[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class TblShippingCategoriesQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\TblShippingCategoriesQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpm', $modelName = '\\TblShippingCategories', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildTblShippingCategoriesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildTblShippingCategoriesQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildTblShippingCategoriesQuery) {
            return $criteria;
        }
        $query = new ChildTblShippingCategoriesQuery();
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
     * @return ChildTblShippingCategories|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TblShippingCategoriesTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(TblShippingCategoriesTableMap::DATABASE_NAME);
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
     * @return ChildTblShippingCategories A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT prod_shipping_price_id, prod_shipping_name, weight_ide, weight_idp FROM tbl_shipping_categories WHERE prod_shipping_price_id = :p0';
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
            /** @var ChildTblShippingCategories $obj */
            $obj = new ChildTblShippingCategories();
            $obj->hydrate($row);
            TblShippingCategoriesTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildTblShippingCategories|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildTblShippingCategoriesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TblShippingCategoriesTableMap::COL_PROD_SHIPPING_PRICE_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildTblShippingCategoriesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TblShippingCategoriesTableMap::COL_PROD_SHIPPING_PRICE_ID, $keys, Criteria::IN);
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
     * @return $this|ChildTblShippingCategoriesQuery The current query, for fluid interface
     */
    public function filterByProdShippingPriceId($prodShippingPriceId = null, $comparison = null)
    {
        if (is_array($prodShippingPriceId)) {
            $useMinMax = false;
            if (isset($prodShippingPriceId['min'])) {
                $this->addUsingAlias(TblShippingCategoriesTableMap::COL_PROD_SHIPPING_PRICE_ID, $prodShippingPriceId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prodShippingPriceId['max'])) {
                $this->addUsingAlias(TblShippingCategoriesTableMap::COL_PROD_SHIPPING_PRICE_ID, $prodShippingPriceId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblShippingCategoriesTableMap::COL_PROD_SHIPPING_PRICE_ID, $prodShippingPriceId, $comparison);
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
     * @return $this|ChildTblShippingCategoriesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TblShippingCategoriesTableMap::COL_PROD_SHIPPING_NAME, $prodShippingName, $comparison);
    }

    /**
     * Filter the query on the weight_ide column
     *
     * Example usage:
     * <code>
     * $query->filterByWeightIde(1234); // WHERE weight_ide = 1234
     * $query->filterByWeightIde(array(12, 34)); // WHERE weight_ide IN (12, 34)
     * $query->filterByWeightIde(array('min' => 12)); // WHERE weight_ide > 12
     * </code>
     *
     * @param     mixed $weightIde The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblShippingCategoriesQuery The current query, for fluid interface
     */
    public function filterByWeightIde($weightIde = null, $comparison = null)
    {
        if (is_array($weightIde)) {
            $useMinMax = false;
            if (isset($weightIde['min'])) {
                $this->addUsingAlias(TblShippingCategoriesTableMap::COL_WEIGHT_IDE, $weightIde['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($weightIde['max'])) {
                $this->addUsingAlias(TblShippingCategoriesTableMap::COL_WEIGHT_IDE, $weightIde['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblShippingCategoriesTableMap::COL_WEIGHT_IDE, $weightIde, $comparison);
    }

    /**
     * Filter the query on the weight_idp column
     *
     * Example usage:
     * <code>
     * $query->filterByWeightIdp(1234); // WHERE weight_idp = 1234
     * $query->filterByWeightIdp(array(12, 34)); // WHERE weight_idp IN (12, 34)
     * $query->filterByWeightIdp(array('min' => 12)); // WHERE weight_idp > 12
     * </code>
     *
     * @param     mixed $weightIdp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblShippingCategoriesQuery The current query, for fluid interface
     */
    public function filterByWeightIdp($weightIdp = null, $comparison = null)
    {
        if (is_array($weightIdp)) {
            $useMinMax = false;
            if (isset($weightIdp['min'])) {
                $this->addUsingAlias(TblShippingCategoriesTableMap::COL_WEIGHT_IDP, $weightIdp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($weightIdp['max'])) {
                $this->addUsingAlias(TblShippingCategoriesTableMap::COL_WEIGHT_IDP, $weightIdp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblShippingCategoriesTableMap::COL_WEIGHT_IDP, $weightIdp, $comparison);
    }

    /**
     * Filter the query by a related \TblProdInfo object
     *
     * @param \TblProdInfo|ObjectCollection $tblProdInfo the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildTblShippingCategoriesQuery The current query, for fluid interface
     */
    public function filterByTblProdInfo($tblProdInfo, $comparison = null)
    {
        if ($tblProdInfo instanceof \TblProdInfo) {
            return $this
                ->addUsingAlias(TblShippingCategoriesTableMap::COL_PROD_SHIPPING_PRICE_ID, $tblProdInfo->getProdCategoryShipping(), $comparison);
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
     * @return $this|ChildTblShippingCategoriesQuery The current query, for fluid interface
     */
    public function joinTblProdInfo($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useTblProdInfoQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinTblProdInfo($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'TblProdInfo', '\TblProdInfoQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildTblShippingCategories $tblShippingCategories Object to remove from the list of results
     *
     * @return $this|ChildTblShippingCategoriesQuery The current query, for fluid interface
     */
    public function prune($tblShippingCategories = null)
    {
        if ($tblShippingCategories) {
            $this->addUsingAlias(TblShippingCategoriesTableMap::COL_PROD_SHIPPING_PRICE_ID, $tblShippingCategories->getProdShippingPriceId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the tbl_shipping_categories table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TblShippingCategoriesTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            TblShippingCategoriesTableMap::clearInstancePool();
            TblShippingCategoriesTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(TblShippingCategoriesTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(TblShippingCategoriesTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            
            TblShippingCategoriesTableMap::removeInstanceFromPool($criteria);
        
            $affectedRows += ModelCriteria::delete($con);
            TblShippingCategoriesTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // TblShippingCategoriesQuery
