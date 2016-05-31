<?php

namespace Base;

use \TblShippingPriority as ChildTblShippingPriority;
use \TblShippingPriorityQuery as ChildTblShippingPriorityQuery;
use \Exception;
use \PDO;
use Map\TblShippingPriorityTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'tbl_shipping_priority' table.
 *
 *
 *
 * @method     ChildTblShippingPriorityQuery orderByWeightIdp($order = Criteria::ASC) Order by the weight_idp column
 * @method     ChildTblShippingPriorityQuery orderByWeightName($order = Criteria::ASC) Order by the weight_name column
 * @method     ChildTblShippingPriorityQuery orderByA($order = Criteria::ASC) Order by the A column
 * @method     ChildTblShippingPriorityQuery orderByB($order = Criteria::ASC) Order by the B column
 * @method     ChildTblShippingPriorityQuery orderByC($order = Criteria::ASC) Order by the C column
 * @method     ChildTblShippingPriorityQuery orderByD($order = Criteria::ASC) Order by the D column
 * @method     ChildTblShippingPriorityQuery orderByE($order = Criteria::ASC) Order by the E column
 * @method     ChildTblShippingPriorityQuery orderByF($order = Criteria::ASC) Order by the F column
 * @method     ChildTblShippingPriorityQuery orderByG($order = Criteria::ASC) Order by the G column
 * @method     ChildTblShippingPriorityQuery orderByH($order = Criteria::ASC) Order by the H column
 * @method     ChildTblShippingPriorityQuery orderByK($order = Criteria::ASC) Order by the K column
 * @method     ChildTblShippingPriorityQuery orderByN($order = Criteria::ASC) Order by the N column
 * @method     ChildTblShippingPriorityQuery orderByO($order = Criteria::ASC) Order by the O column
 * @method     ChildTblShippingPriorityQuery orderByP($order = Criteria::ASC) Order by the P column
 * @method     ChildTblShippingPriorityQuery orderByQ($order = Criteria::ASC) Order by the Q column
 * @method     ChildTblShippingPriorityQuery orderByR($order = Criteria::ASC) Order by the R column
 * @method     ChildTblShippingPriorityQuery orderByT($order = Criteria::ASC) Order by the T column
 * @method     ChildTblShippingPriorityQuery orderByU($order = Criteria::ASC) Order by the U column
 * @method     ChildTblShippingPriorityQuery orderByV($order = Criteria::ASC) Order by the V column
 * @method     ChildTblShippingPriorityQuery orderByW($order = Criteria::ASC) Order by the W column
 * @method     ChildTblShippingPriorityQuery orderByX($order = Criteria::ASC) Order by the X column
 * @method     ChildTblShippingPriorityQuery orderByY($order = Criteria::ASC) Order by the Y column
 * @method     ChildTblShippingPriorityQuery orderByZ($order = Criteria::ASC) Order by the Z column
 * @method     ChildTblShippingPriorityQuery orderByAa($order = Criteria::ASC) Order by the AA column
 * @method     ChildTblShippingPriorityQuery orderByAb($order = Criteria::ASC) Order by the AB column
 *
 * @method     ChildTblShippingPriorityQuery groupByWeightIdp() Group by the weight_idp column
 * @method     ChildTblShippingPriorityQuery groupByWeightName() Group by the weight_name column
 * @method     ChildTblShippingPriorityQuery groupByA() Group by the A column
 * @method     ChildTblShippingPriorityQuery groupByB() Group by the B column
 * @method     ChildTblShippingPriorityQuery groupByC() Group by the C column
 * @method     ChildTblShippingPriorityQuery groupByD() Group by the D column
 * @method     ChildTblShippingPriorityQuery groupByE() Group by the E column
 * @method     ChildTblShippingPriorityQuery groupByF() Group by the F column
 * @method     ChildTblShippingPriorityQuery groupByG() Group by the G column
 * @method     ChildTblShippingPriorityQuery groupByH() Group by the H column
 * @method     ChildTblShippingPriorityQuery groupByK() Group by the K column
 * @method     ChildTblShippingPriorityQuery groupByN() Group by the N column
 * @method     ChildTblShippingPriorityQuery groupByO() Group by the O column
 * @method     ChildTblShippingPriorityQuery groupByP() Group by the P column
 * @method     ChildTblShippingPriorityQuery groupByQ() Group by the Q column
 * @method     ChildTblShippingPriorityQuery groupByR() Group by the R column
 * @method     ChildTblShippingPriorityQuery groupByT() Group by the T column
 * @method     ChildTblShippingPriorityQuery groupByU() Group by the U column
 * @method     ChildTblShippingPriorityQuery groupByV() Group by the V column
 * @method     ChildTblShippingPriorityQuery groupByW() Group by the W column
 * @method     ChildTblShippingPriorityQuery groupByX() Group by the X column
 * @method     ChildTblShippingPriorityQuery groupByY() Group by the Y column
 * @method     ChildTblShippingPriorityQuery groupByZ() Group by the Z column
 * @method     ChildTblShippingPriorityQuery groupByAa() Group by the AA column
 * @method     ChildTblShippingPriorityQuery groupByAb() Group by the AB column
 *
 * @method     ChildTblShippingPriorityQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildTblShippingPriorityQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildTblShippingPriorityQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildTblShippingPriorityQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildTblShippingPriorityQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildTblShippingPriorityQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildTblShippingPriority findOne(ConnectionInterface $con = null) Return the first ChildTblShippingPriority matching the query
 * @method     ChildTblShippingPriority findOneOrCreate(ConnectionInterface $con = null) Return the first ChildTblShippingPriority matching the query, or a new ChildTblShippingPriority object populated from the query conditions when no match is found
 *
 * @method     ChildTblShippingPriority findOneByWeightIdp(int $weight_idp) Return the first ChildTblShippingPriority filtered by the weight_idp column
 * @method     ChildTblShippingPriority findOneByWeightName(string $weight_name) Return the first ChildTblShippingPriority filtered by the weight_name column
 * @method     ChildTblShippingPriority findOneByA(string $A) Return the first ChildTblShippingPriority filtered by the A column
 * @method     ChildTblShippingPriority findOneByB(string $B) Return the first ChildTblShippingPriority filtered by the B column
 * @method     ChildTblShippingPriority findOneByC(string $C) Return the first ChildTblShippingPriority filtered by the C column
 * @method     ChildTblShippingPriority findOneByD(string $D) Return the first ChildTblShippingPriority filtered by the D column
 * @method     ChildTblShippingPriority findOneByE(string $E) Return the first ChildTblShippingPriority filtered by the E column
 * @method     ChildTblShippingPriority findOneByF(string $F) Return the first ChildTblShippingPriority filtered by the F column
 * @method     ChildTblShippingPriority findOneByG(string $G) Return the first ChildTblShippingPriority filtered by the G column
 * @method     ChildTblShippingPriority findOneByH(string $H) Return the first ChildTblShippingPriority filtered by the H column
 * @method     ChildTblShippingPriority findOneByK(string $K) Return the first ChildTblShippingPriority filtered by the K column
 * @method     ChildTblShippingPriority findOneByN(string $N) Return the first ChildTblShippingPriority filtered by the N column
 * @method     ChildTblShippingPriority findOneByO(string $O) Return the first ChildTblShippingPriority filtered by the O column
 * @method     ChildTblShippingPriority findOneByP(string $P) Return the first ChildTblShippingPriority filtered by the P column
 * @method     ChildTblShippingPriority findOneByQ(string $Q) Return the first ChildTblShippingPriority filtered by the Q column
 * @method     ChildTblShippingPriority findOneByR(string $R) Return the first ChildTblShippingPriority filtered by the R column
 * @method     ChildTblShippingPriority findOneByT(string $T) Return the first ChildTblShippingPriority filtered by the T column
 * @method     ChildTblShippingPriority findOneByU(string $U) Return the first ChildTblShippingPriority filtered by the U column
 * @method     ChildTblShippingPriority findOneByV(string $V) Return the first ChildTblShippingPriority filtered by the V column
 * @method     ChildTblShippingPriority findOneByW(string $W) Return the first ChildTblShippingPriority filtered by the W column
 * @method     ChildTblShippingPriority findOneByX(string $X) Return the first ChildTblShippingPriority filtered by the X column
 * @method     ChildTblShippingPriority findOneByY(string $Y) Return the first ChildTblShippingPriority filtered by the Y column
 * @method     ChildTblShippingPriority findOneByZ(string $Z) Return the first ChildTblShippingPriority filtered by the Z column
 * @method     ChildTblShippingPriority findOneByAa(string $AA) Return the first ChildTblShippingPriority filtered by the AA column
 * @method     ChildTblShippingPriority findOneByAb(string $AB) Return the first ChildTblShippingPriority filtered by the AB column *

 * @method     ChildTblShippingPriority requirePk($key, ConnectionInterface $con = null) Return the ChildTblShippingPriority by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingPriority requireOne(ConnectionInterface $con = null) Return the first ChildTblShippingPriority matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTblShippingPriority requireOneByWeightIdp(int $weight_idp) Return the first ChildTblShippingPriority filtered by the weight_idp column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingPriority requireOneByWeightName(string $weight_name) Return the first ChildTblShippingPriority filtered by the weight_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingPriority requireOneByA(string $A) Return the first ChildTblShippingPriority filtered by the A column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingPriority requireOneByB(string $B) Return the first ChildTblShippingPriority filtered by the B column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingPriority requireOneByC(string $C) Return the first ChildTblShippingPriority filtered by the C column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingPriority requireOneByD(string $D) Return the first ChildTblShippingPriority filtered by the D column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingPriority requireOneByE(string $E) Return the first ChildTblShippingPriority filtered by the E column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingPriority requireOneByF(string $F) Return the first ChildTblShippingPriority filtered by the F column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingPriority requireOneByG(string $G) Return the first ChildTblShippingPriority filtered by the G column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingPriority requireOneByH(string $H) Return the first ChildTblShippingPriority filtered by the H column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingPriority requireOneByK(string $K) Return the first ChildTblShippingPriority filtered by the K column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingPriority requireOneByN(string $N) Return the first ChildTblShippingPriority filtered by the N column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingPriority requireOneByO(string $O) Return the first ChildTblShippingPriority filtered by the O column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingPriority requireOneByP(string $P) Return the first ChildTblShippingPriority filtered by the P column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingPriority requireOneByQ(string $Q) Return the first ChildTblShippingPriority filtered by the Q column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingPriority requireOneByR(string $R) Return the first ChildTblShippingPriority filtered by the R column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingPriority requireOneByT(string $T) Return the first ChildTblShippingPriority filtered by the T column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingPriority requireOneByU(string $U) Return the first ChildTblShippingPriority filtered by the U column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingPriority requireOneByV(string $V) Return the first ChildTblShippingPriority filtered by the V column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingPriority requireOneByW(string $W) Return the first ChildTblShippingPriority filtered by the W column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingPriority requireOneByX(string $X) Return the first ChildTblShippingPriority filtered by the X column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingPriority requireOneByY(string $Y) Return the first ChildTblShippingPriority filtered by the Y column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingPriority requireOneByZ(string $Z) Return the first ChildTblShippingPriority filtered by the Z column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingPriority requireOneByAa(string $AA) Return the first ChildTblShippingPriority filtered by the AA column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingPriority requireOneByAb(string $AB) Return the first ChildTblShippingPriority filtered by the AB column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTblShippingPriority[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildTblShippingPriority objects based on current ModelCriteria
 * @method     ChildTblShippingPriority[]|ObjectCollection findByWeightIdp(int $weight_idp) Return ChildTblShippingPriority objects filtered by the weight_idp column
 * @method     ChildTblShippingPriority[]|ObjectCollection findByWeightName(string $weight_name) Return ChildTblShippingPriority objects filtered by the weight_name column
 * @method     ChildTblShippingPriority[]|ObjectCollection findByA(string $A) Return ChildTblShippingPriority objects filtered by the A column
 * @method     ChildTblShippingPriority[]|ObjectCollection findByB(string $B) Return ChildTblShippingPriority objects filtered by the B column
 * @method     ChildTblShippingPriority[]|ObjectCollection findByC(string $C) Return ChildTblShippingPriority objects filtered by the C column
 * @method     ChildTblShippingPriority[]|ObjectCollection findByD(string $D) Return ChildTblShippingPriority objects filtered by the D column
 * @method     ChildTblShippingPriority[]|ObjectCollection findByE(string $E) Return ChildTblShippingPriority objects filtered by the E column
 * @method     ChildTblShippingPriority[]|ObjectCollection findByF(string $F) Return ChildTblShippingPriority objects filtered by the F column
 * @method     ChildTblShippingPriority[]|ObjectCollection findByG(string $G) Return ChildTblShippingPriority objects filtered by the G column
 * @method     ChildTblShippingPriority[]|ObjectCollection findByH(string $H) Return ChildTblShippingPriority objects filtered by the H column
 * @method     ChildTblShippingPriority[]|ObjectCollection findByK(string $K) Return ChildTblShippingPriority objects filtered by the K column
 * @method     ChildTblShippingPriority[]|ObjectCollection findByN(string $N) Return ChildTblShippingPriority objects filtered by the N column
 * @method     ChildTblShippingPriority[]|ObjectCollection findByO(string $O) Return ChildTblShippingPriority objects filtered by the O column
 * @method     ChildTblShippingPriority[]|ObjectCollection findByP(string $P) Return ChildTblShippingPriority objects filtered by the P column
 * @method     ChildTblShippingPriority[]|ObjectCollection findByQ(string $Q) Return ChildTblShippingPriority objects filtered by the Q column
 * @method     ChildTblShippingPriority[]|ObjectCollection findByR(string $R) Return ChildTblShippingPriority objects filtered by the R column
 * @method     ChildTblShippingPriority[]|ObjectCollection findByT(string $T) Return ChildTblShippingPriority objects filtered by the T column
 * @method     ChildTblShippingPriority[]|ObjectCollection findByU(string $U) Return ChildTblShippingPriority objects filtered by the U column
 * @method     ChildTblShippingPriority[]|ObjectCollection findByV(string $V) Return ChildTblShippingPriority objects filtered by the V column
 * @method     ChildTblShippingPriority[]|ObjectCollection findByW(string $W) Return ChildTblShippingPriority objects filtered by the W column
 * @method     ChildTblShippingPriority[]|ObjectCollection findByX(string $X) Return ChildTblShippingPriority objects filtered by the X column
 * @method     ChildTblShippingPriority[]|ObjectCollection findByY(string $Y) Return ChildTblShippingPriority objects filtered by the Y column
 * @method     ChildTblShippingPriority[]|ObjectCollection findByZ(string $Z) Return ChildTblShippingPriority objects filtered by the Z column
 * @method     ChildTblShippingPriority[]|ObjectCollection findByAa(string $AA) Return ChildTblShippingPriority objects filtered by the AA column
 * @method     ChildTblShippingPriority[]|ObjectCollection findByAb(string $AB) Return ChildTblShippingPriority objects filtered by the AB column
 * @method     ChildTblShippingPriority[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class TblShippingPriorityQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\TblShippingPriorityQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpm', $modelName = '\\TblShippingPriority', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildTblShippingPriorityQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildTblShippingPriorityQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildTblShippingPriorityQuery) {
            return $criteria;
        }
        $query = new ChildTblShippingPriorityQuery();
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
     * @return ChildTblShippingPriority|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(TblShippingPriorityTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = TblShippingPriorityTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildTblShippingPriority A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT weight_idp, weight_name, A, B, C, D, E, F, G, H, K, N, O, P, Q, R, T, U, V, W, X, Y, Z, AA, AB FROM tbl_shipping_priority WHERE weight_idp = :p0';
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
            /** @var ChildTblShippingPriority $obj */
            $obj = new ChildTblShippingPriority();
            $obj->hydrate($row);
            TblShippingPriorityTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildTblShippingPriority|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildTblShippingPriorityQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TblShippingPriorityTableMap::COL_WEIGHT_IDP, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildTblShippingPriorityQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TblShippingPriorityTableMap::COL_WEIGHT_IDP, $keys, Criteria::IN);
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
     * @return $this|ChildTblShippingPriorityQuery The current query, for fluid interface
     */
    public function filterByWeightIdp($weightIdp = null, $comparison = null)
    {
        if (is_array($weightIdp)) {
            $useMinMax = false;
            if (isset($weightIdp['min'])) {
                $this->addUsingAlias(TblShippingPriorityTableMap::COL_WEIGHT_IDP, $weightIdp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($weightIdp['max'])) {
                $this->addUsingAlias(TblShippingPriorityTableMap::COL_WEIGHT_IDP, $weightIdp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblShippingPriorityTableMap::COL_WEIGHT_IDP, $weightIdp, $comparison);
    }

    /**
     * Filter the query on the weight_name column
     *
     * Example usage:
     * <code>
     * $query->filterByWeightName('fooValue');   // WHERE weight_name = 'fooValue'
     * $query->filterByWeightName('%fooValue%'); // WHERE weight_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $weightName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblShippingPriorityQuery The current query, for fluid interface
     */
    public function filterByWeightName($weightName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($weightName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $weightName)) {
                $weightName = str_replace('*', '%', $weightName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblShippingPriorityTableMap::COL_WEIGHT_NAME, $weightName, $comparison);
    }

    /**
     * Filter the query on the A column
     *
     * Example usage:
     * <code>
     * $query->filterByA(1234); // WHERE A = 1234
     * $query->filterByA(array(12, 34)); // WHERE A IN (12, 34)
     * $query->filterByA(array('min' => 12)); // WHERE A > 12
     * </code>
     *
     * @param     mixed $a The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblShippingPriorityQuery The current query, for fluid interface
     */
    public function filterByA($a = null, $comparison = null)
    {
        if (is_array($a)) {
            $useMinMax = false;
            if (isset($a['min'])) {
                $this->addUsingAlias(TblShippingPriorityTableMap::COL_A, $a['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($a['max'])) {
                $this->addUsingAlias(TblShippingPriorityTableMap::COL_A, $a['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblShippingPriorityTableMap::COL_A, $a, $comparison);
    }

    /**
     * Filter the query on the B column
     *
     * Example usage:
     * <code>
     * $query->filterByB(1234); // WHERE B = 1234
     * $query->filterByB(array(12, 34)); // WHERE B IN (12, 34)
     * $query->filterByB(array('min' => 12)); // WHERE B > 12
     * </code>
     *
     * @param     mixed $b The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblShippingPriorityQuery The current query, for fluid interface
     */
    public function filterByB($b = null, $comparison = null)
    {
        if (is_array($b)) {
            $useMinMax = false;
            if (isset($b['min'])) {
                $this->addUsingAlias(TblShippingPriorityTableMap::COL_B, $b['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($b['max'])) {
                $this->addUsingAlias(TblShippingPriorityTableMap::COL_B, $b['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblShippingPriorityTableMap::COL_B, $b, $comparison);
    }

    /**
     * Filter the query on the C column
     *
     * Example usage:
     * <code>
     * $query->filterByC(1234); // WHERE C = 1234
     * $query->filterByC(array(12, 34)); // WHERE C IN (12, 34)
     * $query->filterByC(array('min' => 12)); // WHERE C > 12
     * </code>
     *
     * @param     mixed $c The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblShippingPriorityQuery The current query, for fluid interface
     */
    public function filterByC($c = null, $comparison = null)
    {
        if (is_array($c)) {
            $useMinMax = false;
            if (isset($c['min'])) {
                $this->addUsingAlias(TblShippingPriorityTableMap::COL_C, $c['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($c['max'])) {
                $this->addUsingAlias(TblShippingPriorityTableMap::COL_C, $c['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblShippingPriorityTableMap::COL_C, $c, $comparison);
    }

    /**
     * Filter the query on the D column
     *
     * Example usage:
     * <code>
     * $query->filterByD(1234); // WHERE D = 1234
     * $query->filterByD(array(12, 34)); // WHERE D IN (12, 34)
     * $query->filterByD(array('min' => 12)); // WHERE D > 12
     * </code>
     *
     * @param     mixed $d The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblShippingPriorityQuery The current query, for fluid interface
     */
    public function filterByD($d = null, $comparison = null)
    {
        if (is_array($d)) {
            $useMinMax = false;
            if (isset($d['min'])) {
                $this->addUsingAlias(TblShippingPriorityTableMap::COL_D, $d['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($d['max'])) {
                $this->addUsingAlias(TblShippingPriorityTableMap::COL_D, $d['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblShippingPriorityTableMap::COL_D, $d, $comparison);
    }

    /**
     * Filter the query on the E column
     *
     * Example usage:
     * <code>
     * $query->filterByE(1234); // WHERE E = 1234
     * $query->filterByE(array(12, 34)); // WHERE E IN (12, 34)
     * $query->filterByE(array('min' => 12)); // WHERE E > 12
     * </code>
     *
     * @param     mixed $e The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblShippingPriorityQuery The current query, for fluid interface
     */
    public function filterByE($e = null, $comparison = null)
    {
        if (is_array($e)) {
            $useMinMax = false;
            if (isset($e['min'])) {
                $this->addUsingAlias(TblShippingPriorityTableMap::COL_E, $e['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($e['max'])) {
                $this->addUsingAlias(TblShippingPriorityTableMap::COL_E, $e['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblShippingPriorityTableMap::COL_E, $e, $comparison);
    }

    /**
     * Filter the query on the F column
     *
     * Example usage:
     * <code>
     * $query->filterByF(1234); // WHERE F = 1234
     * $query->filterByF(array(12, 34)); // WHERE F IN (12, 34)
     * $query->filterByF(array('min' => 12)); // WHERE F > 12
     * </code>
     *
     * @param     mixed $f The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblShippingPriorityQuery The current query, for fluid interface
     */
    public function filterByF($f = null, $comparison = null)
    {
        if (is_array($f)) {
            $useMinMax = false;
            if (isset($f['min'])) {
                $this->addUsingAlias(TblShippingPriorityTableMap::COL_F, $f['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($f['max'])) {
                $this->addUsingAlias(TblShippingPriorityTableMap::COL_F, $f['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblShippingPriorityTableMap::COL_F, $f, $comparison);
    }

    /**
     * Filter the query on the G column
     *
     * Example usage:
     * <code>
     * $query->filterByG(1234); // WHERE G = 1234
     * $query->filterByG(array(12, 34)); // WHERE G IN (12, 34)
     * $query->filterByG(array('min' => 12)); // WHERE G > 12
     * </code>
     *
     * @param     mixed $g The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblShippingPriorityQuery The current query, for fluid interface
     */
    public function filterByG($g = null, $comparison = null)
    {
        if (is_array($g)) {
            $useMinMax = false;
            if (isset($g['min'])) {
                $this->addUsingAlias(TblShippingPriorityTableMap::COL_G, $g['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($g['max'])) {
                $this->addUsingAlias(TblShippingPriorityTableMap::COL_G, $g['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblShippingPriorityTableMap::COL_G, $g, $comparison);
    }

    /**
     * Filter the query on the H column
     *
     * Example usage:
     * <code>
     * $query->filterByH(1234); // WHERE H = 1234
     * $query->filterByH(array(12, 34)); // WHERE H IN (12, 34)
     * $query->filterByH(array('min' => 12)); // WHERE H > 12
     * </code>
     *
     * @param     mixed $h The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblShippingPriorityQuery The current query, for fluid interface
     */
    public function filterByH($h = null, $comparison = null)
    {
        if (is_array($h)) {
            $useMinMax = false;
            if (isset($h['min'])) {
                $this->addUsingAlias(TblShippingPriorityTableMap::COL_H, $h['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($h['max'])) {
                $this->addUsingAlias(TblShippingPriorityTableMap::COL_H, $h['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblShippingPriorityTableMap::COL_H, $h, $comparison);
    }

    /**
     * Filter the query on the K column
     *
     * Example usage:
     * <code>
     * $query->filterByK(1234); // WHERE K = 1234
     * $query->filterByK(array(12, 34)); // WHERE K IN (12, 34)
     * $query->filterByK(array('min' => 12)); // WHERE K > 12
     * </code>
     *
     * @param     mixed $k The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblShippingPriorityQuery The current query, for fluid interface
     */
    public function filterByK($k = null, $comparison = null)
    {
        if (is_array($k)) {
            $useMinMax = false;
            if (isset($k['min'])) {
                $this->addUsingAlias(TblShippingPriorityTableMap::COL_K, $k['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($k['max'])) {
                $this->addUsingAlias(TblShippingPriorityTableMap::COL_K, $k['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblShippingPriorityTableMap::COL_K, $k, $comparison);
    }

    /**
     * Filter the query on the N column
     *
     * Example usage:
     * <code>
     * $query->filterByN(1234); // WHERE N = 1234
     * $query->filterByN(array(12, 34)); // WHERE N IN (12, 34)
     * $query->filterByN(array('min' => 12)); // WHERE N > 12
     * </code>
     *
     * @param     mixed $n The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblShippingPriorityQuery The current query, for fluid interface
     */
    public function filterByN($n = null, $comparison = null)
    {
        if (is_array($n)) {
            $useMinMax = false;
            if (isset($n['min'])) {
                $this->addUsingAlias(TblShippingPriorityTableMap::COL_N, $n['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($n['max'])) {
                $this->addUsingAlias(TblShippingPriorityTableMap::COL_N, $n['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblShippingPriorityTableMap::COL_N, $n, $comparison);
    }

    /**
     * Filter the query on the O column
     *
     * Example usage:
     * <code>
     * $query->filterByO(1234); // WHERE O = 1234
     * $query->filterByO(array(12, 34)); // WHERE O IN (12, 34)
     * $query->filterByO(array('min' => 12)); // WHERE O > 12
     * </code>
     *
     * @param     mixed $o The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblShippingPriorityQuery The current query, for fluid interface
     */
    public function filterByO($o = null, $comparison = null)
    {
        if (is_array($o)) {
            $useMinMax = false;
            if (isset($o['min'])) {
                $this->addUsingAlias(TblShippingPriorityTableMap::COL_O, $o['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($o['max'])) {
                $this->addUsingAlias(TblShippingPriorityTableMap::COL_O, $o['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblShippingPriorityTableMap::COL_O, $o, $comparison);
    }

    /**
     * Filter the query on the P column
     *
     * Example usage:
     * <code>
     * $query->filterByP(1234); // WHERE P = 1234
     * $query->filterByP(array(12, 34)); // WHERE P IN (12, 34)
     * $query->filterByP(array('min' => 12)); // WHERE P > 12
     * </code>
     *
     * @param     mixed $p The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblShippingPriorityQuery The current query, for fluid interface
     */
    public function filterByP($p = null, $comparison = null)
    {
        if (is_array($p)) {
            $useMinMax = false;
            if (isset($p['min'])) {
                $this->addUsingAlias(TblShippingPriorityTableMap::COL_P, $p['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($p['max'])) {
                $this->addUsingAlias(TblShippingPriorityTableMap::COL_P, $p['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblShippingPriorityTableMap::COL_P, $p, $comparison);
    }

    /**
     * Filter the query on the Q column
     *
     * Example usage:
     * <code>
     * $query->filterByQ(1234); // WHERE Q = 1234
     * $query->filterByQ(array(12, 34)); // WHERE Q IN (12, 34)
     * $query->filterByQ(array('min' => 12)); // WHERE Q > 12
     * </code>
     *
     * @param     mixed $q The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblShippingPriorityQuery The current query, for fluid interface
     */
    public function filterByQ($q = null, $comparison = null)
    {
        if (is_array($q)) {
            $useMinMax = false;
            if (isset($q['min'])) {
                $this->addUsingAlias(TblShippingPriorityTableMap::COL_Q, $q['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($q['max'])) {
                $this->addUsingAlias(TblShippingPriorityTableMap::COL_Q, $q['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblShippingPriorityTableMap::COL_Q, $q, $comparison);
    }

    /**
     * Filter the query on the R column
     *
     * Example usage:
     * <code>
     * $query->filterByR(1234); // WHERE R = 1234
     * $query->filterByR(array(12, 34)); // WHERE R IN (12, 34)
     * $query->filterByR(array('min' => 12)); // WHERE R > 12
     * </code>
     *
     * @param     mixed $r The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblShippingPriorityQuery The current query, for fluid interface
     */
    public function filterByR($r = null, $comparison = null)
    {
        if (is_array($r)) {
            $useMinMax = false;
            if (isset($r['min'])) {
                $this->addUsingAlias(TblShippingPriorityTableMap::COL_R, $r['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($r['max'])) {
                $this->addUsingAlias(TblShippingPriorityTableMap::COL_R, $r['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblShippingPriorityTableMap::COL_R, $r, $comparison);
    }

    /**
     * Filter the query on the T column
     *
     * Example usage:
     * <code>
     * $query->filterByT(1234); // WHERE T = 1234
     * $query->filterByT(array(12, 34)); // WHERE T IN (12, 34)
     * $query->filterByT(array('min' => 12)); // WHERE T > 12
     * </code>
     *
     * @param     mixed $t The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblShippingPriorityQuery The current query, for fluid interface
     */
    public function filterByT($t = null, $comparison = null)
    {
        if (is_array($t)) {
            $useMinMax = false;
            if (isset($t['min'])) {
                $this->addUsingAlias(TblShippingPriorityTableMap::COL_T, $t['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($t['max'])) {
                $this->addUsingAlias(TblShippingPriorityTableMap::COL_T, $t['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblShippingPriorityTableMap::COL_T, $t, $comparison);
    }

    /**
     * Filter the query on the U column
     *
     * Example usage:
     * <code>
     * $query->filterByU(1234); // WHERE U = 1234
     * $query->filterByU(array(12, 34)); // WHERE U IN (12, 34)
     * $query->filterByU(array('min' => 12)); // WHERE U > 12
     * </code>
     *
     * @param     mixed $u The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblShippingPriorityQuery The current query, for fluid interface
     */
    public function filterByU($u = null, $comparison = null)
    {
        if (is_array($u)) {
            $useMinMax = false;
            if (isset($u['min'])) {
                $this->addUsingAlias(TblShippingPriorityTableMap::COL_U, $u['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($u['max'])) {
                $this->addUsingAlias(TblShippingPriorityTableMap::COL_U, $u['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblShippingPriorityTableMap::COL_U, $u, $comparison);
    }

    /**
     * Filter the query on the V column
     *
     * Example usage:
     * <code>
     * $query->filterByV(1234); // WHERE V = 1234
     * $query->filterByV(array(12, 34)); // WHERE V IN (12, 34)
     * $query->filterByV(array('min' => 12)); // WHERE V > 12
     * </code>
     *
     * @param     mixed $v The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblShippingPriorityQuery The current query, for fluid interface
     */
    public function filterByV($v = null, $comparison = null)
    {
        if (is_array($v)) {
            $useMinMax = false;
            if (isset($v['min'])) {
                $this->addUsingAlias(TblShippingPriorityTableMap::COL_V, $v['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($v['max'])) {
                $this->addUsingAlias(TblShippingPriorityTableMap::COL_V, $v['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblShippingPriorityTableMap::COL_V, $v, $comparison);
    }

    /**
     * Filter the query on the W column
     *
     * Example usage:
     * <code>
     * $query->filterByW(1234); // WHERE W = 1234
     * $query->filterByW(array(12, 34)); // WHERE W IN (12, 34)
     * $query->filterByW(array('min' => 12)); // WHERE W > 12
     * </code>
     *
     * @param     mixed $w The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblShippingPriorityQuery The current query, for fluid interface
     */
    public function filterByW($w = null, $comparison = null)
    {
        if (is_array($w)) {
            $useMinMax = false;
            if (isset($w['min'])) {
                $this->addUsingAlias(TblShippingPriorityTableMap::COL_W, $w['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($w['max'])) {
                $this->addUsingAlias(TblShippingPriorityTableMap::COL_W, $w['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblShippingPriorityTableMap::COL_W, $w, $comparison);
    }

    /**
     * Filter the query on the X column
     *
     * Example usage:
     * <code>
     * $query->filterByX(1234); // WHERE X = 1234
     * $query->filterByX(array(12, 34)); // WHERE X IN (12, 34)
     * $query->filterByX(array('min' => 12)); // WHERE X > 12
     * </code>
     *
     * @param     mixed $x The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblShippingPriorityQuery The current query, for fluid interface
     */
    public function filterByX($x = null, $comparison = null)
    {
        if (is_array($x)) {
            $useMinMax = false;
            if (isset($x['min'])) {
                $this->addUsingAlias(TblShippingPriorityTableMap::COL_X, $x['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($x['max'])) {
                $this->addUsingAlias(TblShippingPriorityTableMap::COL_X, $x['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblShippingPriorityTableMap::COL_X, $x, $comparison);
    }

    /**
     * Filter the query on the Y column
     *
     * Example usage:
     * <code>
     * $query->filterByY(1234); // WHERE Y = 1234
     * $query->filterByY(array(12, 34)); // WHERE Y IN (12, 34)
     * $query->filterByY(array('min' => 12)); // WHERE Y > 12
     * </code>
     *
     * @param     mixed $y The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblShippingPriorityQuery The current query, for fluid interface
     */
    public function filterByY($y = null, $comparison = null)
    {
        if (is_array($y)) {
            $useMinMax = false;
            if (isset($y['min'])) {
                $this->addUsingAlias(TblShippingPriorityTableMap::COL_Y, $y['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($y['max'])) {
                $this->addUsingAlias(TblShippingPriorityTableMap::COL_Y, $y['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblShippingPriorityTableMap::COL_Y, $y, $comparison);
    }

    /**
     * Filter the query on the Z column
     *
     * Example usage:
     * <code>
     * $query->filterByZ(1234); // WHERE Z = 1234
     * $query->filterByZ(array(12, 34)); // WHERE Z IN (12, 34)
     * $query->filterByZ(array('min' => 12)); // WHERE Z > 12
     * </code>
     *
     * @param     mixed $z The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblShippingPriorityQuery The current query, for fluid interface
     */
    public function filterByZ($z = null, $comparison = null)
    {
        if (is_array($z)) {
            $useMinMax = false;
            if (isset($z['min'])) {
                $this->addUsingAlias(TblShippingPriorityTableMap::COL_Z, $z['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($z['max'])) {
                $this->addUsingAlias(TblShippingPriorityTableMap::COL_Z, $z['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblShippingPriorityTableMap::COL_Z, $z, $comparison);
    }

    /**
     * Filter the query on the AA column
     *
     * Example usage:
     * <code>
     * $query->filterByAa(1234); // WHERE AA = 1234
     * $query->filterByAa(array(12, 34)); // WHERE AA IN (12, 34)
     * $query->filterByAa(array('min' => 12)); // WHERE AA > 12
     * </code>
     *
     * @param     mixed $aa The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblShippingPriorityQuery The current query, for fluid interface
     */
    public function filterByAa($aa = null, $comparison = null)
    {
        if (is_array($aa)) {
            $useMinMax = false;
            if (isset($aa['min'])) {
                $this->addUsingAlias(TblShippingPriorityTableMap::COL_AA, $aa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aa['max'])) {
                $this->addUsingAlias(TblShippingPriorityTableMap::COL_AA, $aa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblShippingPriorityTableMap::COL_AA, $aa, $comparison);
    }

    /**
     * Filter the query on the AB column
     *
     * Example usage:
     * <code>
     * $query->filterByAb(1234); // WHERE AB = 1234
     * $query->filterByAb(array(12, 34)); // WHERE AB IN (12, 34)
     * $query->filterByAb(array('min' => 12)); // WHERE AB > 12
     * </code>
     *
     * @param     mixed $ab The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblShippingPriorityQuery The current query, for fluid interface
     */
    public function filterByAb($ab = null, $comparison = null)
    {
        if (is_array($ab)) {
            $useMinMax = false;
            if (isset($ab['min'])) {
                $this->addUsingAlias(TblShippingPriorityTableMap::COL_AB, $ab['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ab['max'])) {
                $this->addUsingAlias(TblShippingPriorityTableMap::COL_AB, $ab['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblShippingPriorityTableMap::COL_AB, $ab, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildTblShippingPriority $tblShippingPriority Object to remove from the list of results
     *
     * @return $this|ChildTblShippingPriorityQuery The current query, for fluid interface
     */
    public function prune($tblShippingPriority = null)
    {
        if ($tblShippingPriority) {
            $this->addUsingAlias(TblShippingPriorityTableMap::COL_WEIGHT_IDP, $tblShippingPriority->getWeightIdp(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the tbl_shipping_priority table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TblShippingPriorityTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            TblShippingPriorityTableMap::clearInstancePool();
            TblShippingPriorityTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(TblShippingPriorityTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(TblShippingPriorityTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            TblShippingPriorityTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            TblShippingPriorityTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // TblShippingPriorityQuery
