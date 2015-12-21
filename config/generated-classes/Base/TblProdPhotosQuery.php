<?php

namespace Base;

use \TblProdPhotos as ChildTblProdPhotos;
use \TblProdPhotosQuery as ChildTblProdPhotosQuery;
use \Exception;
use \PDO;
use Map\TblProdPhotosTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'tbl_prod_photos' table.
 *
 * 
 *
 * @method     ChildTblProdPhotosQuery orderByProdId($order = Criteria::ASC) Order by the prod_id column
 * @method     ChildTblProdPhotosQuery orderByProdSolo1($order = Criteria::ASC) Order by the prod_solo_1 column
 * @method     ChildTblProdPhotosQuery orderByProdSolo2($order = Criteria::ASC) Order by the prod_solo_2 column
 * @method     ChildTblProdPhotosQuery orderByProdSolo3($order = Criteria::ASC) Order by the prod_solo_3 column
 * @method     ChildTblProdPhotosQuery orderByProdSolo4($order = Criteria::ASC) Order by the prod_solo_4 column
 * @method     ChildTblProdPhotosQuery orderByProdSolo1Pa($order = Criteria::ASC) Order by the prod_solo_1_pa column
 * @method     ChildTblProdPhotosQuery orderByProdSolo2Pa($order = Criteria::ASC) Order by the prod_solo_2_pa column
 * @method     ChildTblProdPhotosQuery orderByProdSolo3Pa($order = Criteria::ASC) Order by the prod_solo_3_pa column
 * @method     ChildTblProdPhotosQuery orderByProdSolo4Pa($order = Criteria::ASC) Order by the prod_solo_4_pa column
 * @method     ChildTblProdPhotosQuery orderByProdSolo1M3($order = Criteria::ASC) Order by the prod_solo_1_m3 column
 * @method     ChildTblProdPhotosQuery orderByProdSolo2M3($order = Criteria::ASC) Order by the prod_solo_2_m3 column
 * @method     ChildTblProdPhotosQuery orderByProdSolo3M3($order = Criteria::ASC) Order by the prod_solo_3_m3 column
 * @method     ChildTblProdPhotosQuery orderByProdSolo4M3($order = Criteria::ASC) Order by the prod_solo_4_m3 column
 * @method     ChildTblProdPhotosQuery orderByProdSolo1Blank($order = Criteria::ASC) Order by the prod_solo_1_blank column
 * @method     ChildTblProdPhotosQuery orderByProdSolo2Blank($order = Criteria::ASC) Order by the prod_solo_2_blank column
 * @method     ChildTblProdPhotosQuery orderByProdSolo3Blank($order = Criteria::ASC) Order by the prod_solo_3_blank column
 * @method     ChildTblProdPhotosQuery orderByProdSolo4Blank($order = Criteria::ASC) Order by the prod_solo_4_blank column
 *
 * @method     ChildTblProdPhotosQuery groupByProdId() Group by the prod_id column
 * @method     ChildTblProdPhotosQuery groupByProdSolo1() Group by the prod_solo_1 column
 * @method     ChildTblProdPhotosQuery groupByProdSolo2() Group by the prod_solo_2 column
 * @method     ChildTblProdPhotosQuery groupByProdSolo3() Group by the prod_solo_3 column
 * @method     ChildTblProdPhotosQuery groupByProdSolo4() Group by the prod_solo_4 column
 * @method     ChildTblProdPhotosQuery groupByProdSolo1Pa() Group by the prod_solo_1_pa column
 * @method     ChildTblProdPhotosQuery groupByProdSolo2Pa() Group by the prod_solo_2_pa column
 * @method     ChildTblProdPhotosQuery groupByProdSolo3Pa() Group by the prod_solo_3_pa column
 * @method     ChildTblProdPhotosQuery groupByProdSolo4Pa() Group by the prod_solo_4_pa column
 * @method     ChildTblProdPhotosQuery groupByProdSolo1M3() Group by the prod_solo_1_m3 column
 * @method     ChildTblProdPhotosQuery groupByProdSolo2M3() Group by the prod_solo_2_m3 column
 * @method     ChildTblProdPhotosQuery groupByProdSolo3M3() Group by the prod_solo_3_m3 column
 * @method     ChildTblProdPhotosQuery groupByProdSolo4M3() Group by the prod_solo_4_m3 column
 * @method     ChildTblProdPhotosQuery groupByProdSolo1Blank() Group by the prod_solo_1_blank column
 * @method     ChildTblProdPhotosQuery groupByProdSolo2Blank() Group by the prod_solo_2_blank column
 * @method     ChildTblProdPhotosQuery groupByProdSolo3Blank() Group by the prod_solo_3_blank column
 * @method     ChildTblProdPhotosQuery groupByProdSolo4Blank() Group by the prod_solo_4_blank column
 *
 * @method     ChildTblProdPhotosQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildTblProdPhotosQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildTblProdPhotosQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildTblProdPhotosQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildTblProdPhotosQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildTblProdPhotosQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildTblProdPhotosQuery leftJoinTblProdInfo($relationAlias = null) Adds a LEFT JOIN clause to the query using the TblProdInfo relation
 * @method     ChildTblProdPhotosQuery rightJoinTblProdInfo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TblProdInfo relation
 * @method     ChildTblProdPhotosQuery innerJoinTblProdInfo($relationAlias = null) Adds a INNER JOIN clause to the query using the TblProdInfo relation
 *
 * @method     ChildTblProdPhotosQuery joinWithTblProdInfo($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the TblProdInfo relation
 *
 * @method     ChildTblProdPhotosQuery leftJoinWithTblProdInfo() Adds a LEFT JOIN clause and with to the query using the TblProdInfo relation
 * @method     ChildTblProdPhotosQuery rightJoinWithTblProdInfo() Adds a RIGHT JOIN clause and with to the query using the TblProdInfo relation
 * @method     ChildTblProdPhotosQuery innerJoinWithTblProdInfo() Adds a INNER JOIN clause and with to the query using the TblProdInfo relation
 *
 * @method     \TblProdInfoQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildTblProdPhotos findOne(ConnectionInterface $con = null) Return the first ChildTblProdPhotos matching the query
 * @method     ChildTblProdPhotos findOneOrCreate(ConnectionInterface $con = null) Return the first ChildTblProdPhotos matching the query, or a new ChildTblProdPhotos object populated from the query conditions when no match is found
 *
 * @method     ChildTblProdPhotos findOneByProdId(int $prod_id) Return the first ChildTblProdPhotos filtered by the prod_id column
 * @method     ChildTblProdPhotos findOneByProdSolo1(string $prod_solo_1) Return the first ChildTblProdPhotos filtered by the prod_solo_1 column
 * @method     ChildTblProdPhotos findOneByProdSolo2(string $prod_solo_2) Return the first ChildTblProdPhotos filtered by the prod_solo_2 column
 * @method     ChildTblProdPhotos findOneByProdSolo3(string $prod_solo_3) Return the first ChildTblProdPhotos filtered by the prod_solo_3 column
 * @method     ChildTblProdPhotos findOneByProdSolo4(string $prod_solo_4) Return the first ChildTblProdPhotos filtered by the prod_solo_4 column
 * @method     ChildTblProdPhotos findOneByProdSolo1Pa(string $prod_solo_1_pa) Return the first ChildTblProdPhotos filtered by the prod_solo_1_pa column
 * @method     ChildTblProdPhotos findOneByProdSolo2Pa(string $prod_solo_2_pa) Return the first ChildTblProdPhotos filtered by the prod_solo_2_pa column
 * @method     ChildTblProdPhotos findOneByProdSolo3Pa(string $prod_solo_3_pa) Return the first ChildTblProdPhotos filtered by the prod_solo_3_pa column
 * @method     ChildTblProdPhotos findOneByProdSolo4Pa(string $prod_solo_4_pa) Return the first ChildTblProdPhotos filtered by the prod_solo_4_pa column
 * @method     ChildTblProdPhotos findOneByProdSolo1M3(string $prod_solo_1_m3) Return the first ChildTblProdPhotos filtered by the prod_solo_1_m3 column
 * @method     ChildTblProdPhotos findOneByProdSolo2M3(string $prod_solo_2_m3) Return the first ChildTblProdPhotos filtered by the prod_solo_2_m3 column
 * @method     ChildTblProdPhotos findOneByProdSolo3M3(string $prod_solo_3_m3) Return the first ChildTblProdPhotos filtered by the prod_solo_3_m3 column
 * @method     ChildTblProdPhotos findOneByProdSolo4M3(string $prod_solo_4_m3) Return the first ChildTblProdPhotos filtered by the prod_solo_4_m3 column
 * @method     ChildTblProdPhotos findOneByProdSolo1Blank(string $prod_solo_1_blank) Return the first ChildTblProdPhotos filtered by the prod_solo_1_blank column
 * @method     ChildTblProdPhotos findOneByProdSolo2Blank(string $prod_solo_2_blank) Return the first ChildTblProdPhotos filtered by the prod_solo_2_blank column
 * @method     ChildTblProdPhotos findOneByProdSolo3Blank(string $prod_solo_3_blank) Return the first ChildTblProdPhotos filtered by the prod_solo_3_blank column
 * @method     ChildTblProdPhotos findOneByProdSolo4Blank(string $prod_solo_4_blank) Return the first ChildTblProdPhotos filtered by the prod_solo_4_blank column *

 * @method     ChildTblProdPhotos requirePk($key, ConnectionInterface $con = null) Return the ChildTblProdPhotos by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdPhotos requireOne(ConnectionInterface $con = null) Return the first ChildTblProdPhotos matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTblProdPhotos requireOneByProdId(int $prod_id) Return the first ChildTblProdPhotos filtered by the prod_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdPhotos requireOneByProdSolo1(string $prod_solo_1) Return the first ChildTblProdPhotos filtered by the prod_solo_1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdPhotos requireOneByProdSolo2(string $prod_solo_2) Return the first ChildTblProdPhotos filtered by the prod_solo_2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdPhotos requireOneByProdSolo3(string $prod_solo_3) Return the first ChildTblProdPhotos filtered by the prod_solo_3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdPhotos requireOneByProdSolo4(string $prod_solo_4) Return the first ChildTblProdPhotos filtered by the prod_solo_4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdPhotos requireOneByProdSolo1Pa(string $prod_solo_1_pa) Return the first ChildTblProdPhotos filtered by the prod_solo_1_pa column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdPhotos requireOneByProdSolo2Pa(string $prod_solo_2_pa) Return the first ChildTblProdPhotos filtered by the prod_solo_2_pa column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdPhotos requireOneByProdSolo3Pa(string $prod_solo_3_pa) Return the first ChildTblProdPhotos filtered by the prod_solo_3_pa column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdPhotos requireOneByProdSolo4Pa(string $prod_solo_4_pa) Return the first ChildTblProdPhotos filtered by the prod_solo_4_pa column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdPhotos requireOneByProdSolo1M3(string $prod_solo_1_m3) Return the first ChildTblProdPhotos filtered by the prod_solo_1_m3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdPhotos requireOneByProdSolo2M3(string $prod_solo_2_m3) Return the first ChildTblProdPhotos filtered by the prod_solo_2_m3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdPhotos requireOneByProdSolo3M3(string $prod_solo_3_m3) Return the first ChildTblProdPhotos filtered by the prod_solo_3_m3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdPhotos requireOneByProdSolo4M3(string $prod_solo_4_m3) Return the first ChildTblProdPhotos filtered by the prod_solo_4_m3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdPhotos requireOneByProdSolo1Blank(string $prod_solo_1_blank) Return the first ChildTblProdPhotos filtered by the prod_solo_1_blank column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdPhotos requireOneByProdSolo2Blank(string $prod_solo_2_blank) Return the first ChildTblProdPhotos filtered by the prod_solo_2_blank column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdPhotos requireOneByProdSolo3Blank(string $prod_solo_3_blank) Return the first ChildTblProdPhotos filtered by the prod_solo_3_blank column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdPhotos requireOneByProdSolo4Blank(string $prod_solo_4_blank) Return the first ChildTblProdPhotos filtered by the prod_solo_4_blank column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTblProdPhotos[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildTblProdPhotos objects based on current ModelCriteria
 * @method     ChildTblProdPhotos[]|ObjectCollection findByProdId(int $prod_id) Return ChildTblProdPhotos objects filtered by the prod_id column
 * @method     ChildTblProdPhotos[]|ObjectCollection findByProdSolo1(string $prod_solo_1) Return ChildTblProdPhotos objects filtered by the prod_solo_1 column
 * @method     ChildTblProdPhotos[]|ObjectCollection findByProdSolo2(string $prod_solo_2) Return ChildTblProdPhotos objects filtered by the prod_solo_2 column
 * @method     ChildTblProdPhotos[]|ObjectCollection findByProdSolo3(string $prod_solo_3) Return ChildTblProdPhotos objects filtered by the prod_solo_3 column
 * @method     ChildTblProdPhotos[]|ObjectCollection findByProdSolo4(string $prod_solo_4) Return ChildTblProdPhotos objects filtered by the prod_solo_4 column
 * @method     ChildTblProdPhotos[]|ObjectCollection findByProdSolo1Pa(string $prod_solo_1_pa) Return ChildTblProdPhotos objects filtered by the prod_solo_1_pa column
 * @method     ChildTblProdPhotos[]|ObjectCollection findByProdSolo2Pa(string $prod_solo_2_pa) Return ChildTblProdPhotos objects filtered by the prod_solo_2_pa column
 * @method     ChildTblProdPhotos[]|ObjectCollection findByProdSolo3Pa(string $prod_solo_3_pa) Return ChildTblProdPhotos objects filtered by the prod_solo_3_pa column
 * @method     ChildTblProdPhotos[]|ObjectCollection findByProdSolo4Pa(string $prod_solo_4_pa) Return ChildTblProdPhotos objects filtered by the prod_solo_4_pa column
 * @method     ChildTblProdPhotos[]|ObjectCollection findByProdSolo1M3(string $prod_solo_1_m3) Return ChildTblProdPhotos objects filtered by the prod_solo_1_m3 column
 * @method     ChildTblProdPhotos[]|ObjectCollection findByProdSolo2M3(string $prod_solo_2_m3) Return ChildTblProdPhotos objects filtered by the prod_solo_2_m3 column
 * @method     ChildTblProdPhotos[]|ObjectCollection findByProdSolo3M3(string $prod_solo_3_m3) Return ChildTblProdPhotos objects filtered by the prod_solo_3_m3 column
 * @method     ChildTblProdPhotos[]|ObjectCollection findByProdSolo4M3(string $prod_solo_4_m3) Return ChildTblProdPhotos objects filtered by the prod_solo_4_m3 column
 * @method     ChildTblProdPhotos[]|ObjectCollection findByProdSolo1Blank(string $prod_solo_1_blank) Return ChildTblProdPhotos objects filtered by the prod_solo_1_blank column
 * @method     ChildTblProdPhotos[]|ObjectCollection findByProdSolo2Blank(string $prod_solo_2_blank) Return ChildTblProdPhotos objects filtered by the prod_solo_2_blank column
 * @method     ChildTblProdPhotos[]|ObjectCollection findByProdSolo3Blank(string $prod_solo_3_blank) Return ChildTblProdPhotos objects filtered by the prod_solo_3_blank column
 * @method     ChildTblProdPhotos[]|ObjectCollection findByProdSolo4Blank(string $prod_solo_4_blank) Return ChildTblProdPhotos objects filtered by the prod_solo_4_blank column
 * @method     ChildTblProdPhotos[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class TblProdPhotosQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\TblProdPhotosQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpm', $modelName = '\\TblProdPhotos', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildTblProdPhotosQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildTblProdPhotosQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildTblProdPhotosQuery) {
            return $criteria;
        }
        $query = new ChildTblProdPhotosQuery();
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
     * @return ChildTblProdPhotos|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TblProdPhotosTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(TblProdPhotosTableMap::DATABASE_NAME);
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
     * @return ChildTblProdPhotos A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT prod_id, prod_solo_1, prod_solo_2, prod_solo_3, prod_solo_4, prod_solo_1_pa, prod_solo_2_pa, prod_solo_3_pa, prod_solo_4_pa, prod_solo_1_m3, prod_solo_2_m3, prod_solo_3_m3, prod_solo_4_m3, prod_solo_1_blank, prod_solo_2_blank, prod_solo_3_blank, prod_solo_4_blank FROM tbl_prod_photos WHERE prod_id = :p0';
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
            /** @var ChildTblProdPhotos $obj */
            $obj = new ChildTblProdPhotos();
            $obj->hydrate($row);
            TblProdPhotosTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildTblProdPhotos|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildTblProdPhotosQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TblProdPhotosTableMap::COL_PROD_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildTblProdPhotosQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TblProdPhotosTableMap::COL_PROD_ID, $keys, Criteria::IN);
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
     * @return $this|ChildTblProdPhotosQuery The current query, for fluid interface
     */
    public function filterByProdId($prodId = null, $comparison = null)
    {
        if (is_array($prodId)) {
            $useMinMax = false;
            if (isset($prodId['min'])) {
                $this->addUsingAlias(TblProdPhotosTableMap::COL_PROD_ID, $prodId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prodId['max'])) {
                $this->addUsingAlias(TblProdPhotosTableMap::COL_PROD_ID, $prodId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblProdPhotosTableMap::COL_PROD_ID, $prodId, $comparison);
    }

    /**
     * Filter the query on the prod_solo_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByProdSolo1('fooValue');   // WHERE prod_solo_1 = 'fooValue'
     * $query->filterByProdSolo1('%fooValue%'); // WHERE prod_solo_1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodSolo1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdPhotosQuery The current query, for fluid interface
     */
    public function filterByProdSolo1($prodSolo1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodSolo1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodSolo1)) {
                $prodSolo1 = str_replace('*', '%', $prodSolo1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdPhotosTableMap::COL_PROD_SOLO_1, $prodSolo1, $comparison);
    }

    /**
     * Filter the query on the prod_solo_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByProdSolo2('fooValue');   // WHERE prod_solo_2 = 'fooValue'
     * $query->filterByProdSolo2('%fooValue%'); // WHERE prod_solo_2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodSolo2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdPhotosQuery The current query, for fluid interface
     */
    public function filterByProdSolo2($prodSolo2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodSolo2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodSolo2)) {
                $prodSolo2 = str_replace('*', '%', $prodSolo2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdPhotosTableMap::COL_PROD_SOLO_2, $prodSolo2, $comparison);
    }

    /**
     * Filter the query on the prod_solo_3 column
     *
     * Example usage:
     * <code>
     * $query->filterByProdSolo3('fooValue');   // WHERE prod_solo_3 = 'fooValue'
     * $query->filterByProdSolo3('%fooValue%'); // WHERE prod_solo_3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodSolo3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdPhotosQuery The current query, for fluid interface
     */
    public function filterByProdSolo3($prodSolo3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodSolo3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodSolo3)) {
                $prodSolo3 = str_replace('*', '%', $prodSolo3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdPhotosTableMap::COL_PROD_SOLO_3, $prodSolo3, $comparison);
    }

    /**
     * Filter the query on the prod_solo_4 column
     *
     * Example usage:
     * <code>
     * $query->filterByProdSolo4('fooValue');   // WHERE prod_solo_4 = 'fooValue'
     * $query->filterByProdSolo4('%fooValue%'); // WHERE prod_solo_4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodSolo4 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdPhotosQuery The current query, for fluid interface
     */
    public function filterByProdSolo4($prodSolo4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodSolo4)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodSolo4)) {
                $prodSolo4 = str_replace('*', '%', $prodSolo4);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdPhotosTableMap::COL_PROD_SOLO_4, $prodSolo4, $comparison);
    }

    /**
     * Filter the query on the prod_solo_1_pa column
     *
     * Example usage:
     * <code>
     * $query->filterByProdSolo1Pa('fooValue');   // WHERE prod_solo_1_pa = 'fooValue'
     * $query->filterByProdSolo1Pa('%fooValue%'); // WHERE prod_solo_1_pa LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodSolo1Pa The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdPhotosQuery The current query, for fluid interface
     */
    public function filterByProdSolo1Pa($prodSolo1Pa = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodSolo1Pa)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodSolo1Pa)) {
                $prodSolo1Pa = str_replace('*', '%', $prodSolo1Pa);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdPhotosTableMap::COL_PROD_SOLO_1_PA, $prodSolo1Pa, $comparison);
    }

    /**
     * Filter the query on the prod_solo_2_pa column
     *
     * Example usage:
     * <code>
     * $query->filterByProdSolo2Pa('fooValue');   // WHERE prod_solo_2_pa = 'fooValue'
     * $query->filterByProdSolo2Pa('%fooValue%'); // WHERE prod_solo_2_pa LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodSolo2Pa The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdPhotosQuery The current query, for fluid interface
     */
    public function filterByProdSolo2Pa($prodSolo2Pa = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodSolo2Pa)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodSolo2Pa)) {
                $prodSolo2Pa = str_replace('*', '%', $prodSolo2Pa);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdPhotosTableMap::COL_PROD_SOLO_2_PA, $prodSolo2Pa, $comparison);
    }

    /**
     * Filter the query on the prod_solo_3_pa column
     *
     * Example usage:
     * <code>
     * $query->filterByProdSolo3Pa('fooValue');   // WHERE prod_solo_3_pa = 'fooValue'
     * $query->filterByProdSolo3Pa('%fooValue%'); // WHERE prod_solo_3_pa LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodSolo3Pa The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdPhotosQuery The current query, for fluid interface
     */
    public function filterByProdSolo3Pa($prodSolo3Pa = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodSolo3Pa)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodSolo3Pa)) {
                $prodSolo3Pa = str_replace('*', '%', $prodSolo3Pa);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdPhotosTableMap::COL_PROD_SOLO_3_PA, $prodSolo3Pa, $comparison);
    }

    /**
     * Filter the query on the prod_solo_4_pa column
     *
     * Example usage:
     * <code>
     * $query->filterByProdSolo4Pa('fooValue');   // WHERE prod_solo_4_pa = 'fooValue'
     * $query->filterByProdSolo4Pa('%fooValue%'); // WHERE prod_solo_4_pa LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodSolo4Pa The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdPhotosQuery The current query, for fluid interface
     */
    public function filterByProdSolo4Pa($prodSolo4Pa = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodSolo4Pa)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodSolo4Pa)) {
                $prodSolo4Pa = str_replace('*', '%', $prodSolo4Pa);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdPhotosTableMap::COL_PROD_SOLO_4_PA, $prodSolo4Pa, $comparison);
    }

    /**
     * Filter the query on the prod_solo_1_m3 column
     *
     * Example usage:
     * <code>
     * $query->filterByProdSolo1M3('fooValue');   // WHERE prod_solo_1_m3 = 'fooValue'
     * $query->filterByProdSolo1M3('%fooValue%'); // WHERE prod_solo_1_m3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodSolo1M3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdPhotosQuery The current query, for fluid interface
     */
    public function filterByProdSolo1M3($prodSolo1M3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodSolo1M3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodSolo1M3)) {
                $prodSolo1M3 = str_replace('*', '%', $prodSolo1M3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdPhotosTableMap::COL_PROD_SOLO_1_M3, $prodSolo1M3, $comparison);
    }

    /**
     * Filter the query on the prod_solo_2_m3 column
     *
     * Example usage:
     * <code>
     * $query->filterByProdSolo2M3('fooValue');   // WHERE prod_solo_2_m3 = 'fooValue'
     * $query->filterByProdSolo2M3('%fooValue%'); // WHERE prod_solo_2_m3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodSolo2M3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdPhotosQuery The current query, for fluid interface
     */
    public function filterByProdSolo2M3($prodSolo2M3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodSolo2M3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodSolo2M3)) {
                $prodSolo2M3 = str_replace('*', '%', $prodSolo2M3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdPhotosTableMap::COL_PROD_SOLO_2_M3, $prodSolo2M3, $comparison);
    }

    /**
     * Filter the query on the prod_solo_3_m3 column
     *
     * Example usage:
     * <code>
     * $query->filterByProdSolo3M3('fooValue');   // WHERE prod_solo_3_m3 = 'fooValue'
     * $query->filterByProdSolo3M3('%fooValue%'); // WHERE prod_solo_3_m3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodSolo3M3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdPhotosQuery The current query, for fluid interface
     */
    public function filterByProdSolo3M3($prodSolo3M3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodSolo3M3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodSolo3M3)) {
                $prodSolo3M3 = str_replace('*', '%', $prodSolo3M3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdPhotosTableMap::COL_PROD_SOLO_3_M3, $prodSolo3M3, $comparison);
    }

    /**
     * Filter the query on the prod_solo_4_m3 column
     *
     * Example usage:
     * <code>
     * $query->filterByProdSolo4M3('fooValue');   // WHERE prod_solo_4_m3 = 'fooValue'
     * $query->filterByProdSolo4M3('%fooValue%'); // WHERE prod_solo_4_m3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodSolo4M3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdPhotosQuery The current query, for fluid interface
     */
    public function filterByProdSolo4M3($prodSolo4M3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodSolo4M3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodSolo4M3)) {
                $prodSolo4M3 = str_replace('*', '%', $prodSolo4M3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdPhotosTableMap::COL_PROD_SOLO_4_M3, $prodSolo4M3, $comparison);
    }

    /**
     * Filter the query on the prod_solo_1_blank column
     *
     * Example usage:
     * <code>
     * $query->filterByProdSolo1Blank('fooValue');   // WHERE prod_solo_1_blank = 'fooValue'
     * $query->filterByProdSolo1Blank('%fooValue%'); // WHERE prod_solo_1_blank LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodSolo1Blank The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdPhotosQuery The current query, for fluid interface
     */
    public function filterByProdSolo1Blank($prodSolo1Blank = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodSolo1Blank)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodSolo1Blank)) {
                $prodSolo1Blank = str_replace('*', '%', $prodSolo1Blank);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdPhotosTableMap::COL_PROD_SOLO_1_BLANK, $prodSolo1Blank, $comparison);
    }

    /**
     * Filter the query on the prod_solo_2_blank column
     *
     * Example usage:
     * <code>
     * $query->filterByProdSolo2Blank('fooValue');   // WHERE prod_solo_2_blank = 'fooValue'
     * $query->filterByProdSolo2Blank('%fooValue%'); // WHERE prod_solo_2_blank LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodSolo2Blank The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdPhotosQuery The current query, for fluid interface
     */
    public function filterByProdSolo2Blank($prodSolo2Blank = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodSolo2Blank)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodSolo2Blank)) {
                $prodSolo2Blank = str_replace('*', '%', $prodSolo2Blank);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdPhotosTableMap::COL_PROD_SOLO_2_BLANK, $prodSolo2Blank, $comparison);
    }

    /**
     * Filter the query on the prod_solo_3_blank column
     *
     * Example usage:
     * <code>
     * $query->filterByProdSolo3Blank('fooValue');   // WHERE prod_solo_3_blank = 'fooValue'
     * $query->filterByProdSolo3Blank('%fooValue%'); // WHERE prod_solo_3_blank LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodSolo3Blank The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdPhotosQuery The current query, for fluid interface
     */
    public function filterByProdSolo3Blank($prodSolo3Blank = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodSolo3Blank)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodSolo3Blank)) {
                $prodSolo3Blank = str_replace('*', '%', $prodSolo3Blank);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdPhotosTableMap::COL_PROD_SOLO_3_BLANK, $prodSolo3Blank, $comparison);
    }

    /**
     * Filter the query on the prod_solo_4_blank column
     *
     * Example usage:
     * <code>
     * $query->filterByProdSolo4Blank('fooValue');   // WHERE prod_solo_4_blank = 'fooValue'
     * $query->filterByProdSolo4Blank('%fooValue%'); // WHERE prod_solo_4_blank LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodSolo4Blank The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdPhotosQuery The current query, for fluid interface
     */
    public function filterByProdSolo4Blank($prodSolo4Blank = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodSolo4Blank)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodSolo4Blank)) {
                $prodSolo4Blank = str_replace('*', '%', $prodSolo4Blank);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdPhotosTableMap::COL_PROD_SOLO_4_BLANK, $prodSolo4Blank, $comparison);
    }

    /**
     * Filter the query by a related \TblProdInfo object
     *
     * @param \TblProdInfo|ObjectCollection $tblProdInfo the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildTblProdPhotosQuery The current query, for fluid interface
     */
    public function filterByTblProdInfo($tblProdInfo, $comparison = null)
    {
        if ($tblProdInfo instanceof \TblProdInfo) {
            return $this
                ->addUsingAlias(TblProdPhotosTableMap::COL_PROD_ID, $tblProdInfo->getProdId(), $comparison);
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
     * @return $this|ChildTblProdPhotosQuery The current query, for fluid interface
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
     * @param   ChildTblProdPhotos $tblProdPhotos Object to remove from the list of results
     *
     * @return $this|ChildTblProdPhotosQuery The current query, for fluid interface
     */
    public function prune($tblProdPhotos = null)
    {
        if ($tblProdPhotos) {
            $this->addUsingAlias(TblProdPhotosTableMap::COL_PROD_ID, $tblProdPhotos->getProdId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the tbl_prod_photos table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TblProdPhotosTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            TblProdPhotosTableMap::clearInstancePool();
            TblProdPhotosTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(TblProdPhotosTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(TblProdPhotosTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            
            TblProdPhotosTableMap::removeInstanceFromPool($criteria);
        
            $affectedRows += ModelCriteria::delete($con);
            TblProdPhotosTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // TblProdPhotosQuery
