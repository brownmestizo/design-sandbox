<?php

namespace Base;

use \TblShippingEconomy as ChildTblShippingEconomy;
use \TblShippingEconomyQuery as ChildTblShippingEconomyQuery;
use \Exception;
use \PDO;
use Map\TblShippingEconomyTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'tbl_shipping_economy' table.
 *
 * 
 *
 * @method     ChildTblShippingEconomyQuery orderByWeightIde($order = Criteria::ASC) Order by the weight_ide column
 * @method     ChildTblShippingEconomyQuery orderByWeightName($order = Criteria::ASC) Order by the weight_name column
 * @method     ChildTblShippingEconomyQuery orderByA($order = Criteria::ASC) Order by the A column
 * @method     ChildTblShippingEconomyQuery orderByB($order = Criteria::ASC) Order by the B column
 * @method     ChildTblShippingEconomyQuery orderByC($order = Criteria::ASC) Order by the C column
 * @method     ChildTblShippingEconomyQuery orderByD($order = Criteria::ASC) Order by the D column
 * @method     ChildTblShippingEconomyQuery orderByE($order = Criteria::ASC) Order by the E column
 * @method     ChildTblShippingEconomyQuery orderByF($order = Criteria::ASC) Order by the F column
 * @method     ChildTblShippingEconomyQuery orderByG($order = Criteria::ASC) Order by the G column
 * @method     ChildTblShippingEconomyQuery orderByH($order = Criteria::ASC) Order by the H column
 * @method     ChildTblShippingEconomyQuery orderByK($order = Criteria::ASC) Order by the K column
 * @method     ChildTblShippingEconomyQuery orderByN($order = Criteria::ASC) Order by the N column
 * @method     ChildTblShippingEconomyQuery orderByO($order = Criteria::ASC) Order by the O column
 * @method     ChildTblShippingEconomyQuery orderByP($order = Criteria::ASC) Order by the P column
 * @method     ChildTblShippingEconomyQuery orderByQ($order = Criteria::ASC) Order by the Q column
 * @method     ChildTblShippingEconomyQuery orderByR($order = Criteria::ASC) Order by the R column
 * @method     ChildTblShippingEconomyQuery orderByT($order = Criteria::ASC) Order by the T column
 * @method     ChildTblShippingEconomyQuery orderByU($order = Criteria::ASC) Order by the U column
 * @method     ChildTblShippingEconomyQuery orderByV($order = Criteria::ASC) Order by the V column
 * @method     ChildTblShippingEconomyQuery orderByW($order = Criteria::ASC) Order by the W column
 * @method     ChildTblShippingEconomyQuery orderByX($order = Criteria::ASC) Order by the X column
 * @method     ChildTblShippingEconomyQuery orderByY($order = Criteria::ASC) Order by the Y column
 * @method     ChildTblShippingEconomyQuery orderByZ($order = Criteria::ASC) Order by the Z column
 * @method     ChildTblShippingEconomyQuery orderByAa($order = Criteria::ASC) Order by the AA column
 * @method     ChildTblShippingEconomyQuery orderByAb($order = Criteria::ASC) Order by the AB column
 *
 * @method     ChildTblShippingEconomyQuery groupByWeightIde() Group by the weight_ide column
 * @method     ChildTblShippingEconomyQuery groupByWeightName() Group by the weight_name column
 * @method     ChildTblShippingEconomyQuery groupByA() Group by the A column
 * @method     ChildTblShippingEconomyQuery groupByB() Group by the B column
 * @method     ChildTblShippingEconomyQuery groupByC() Group by the C column
 * @method     ChildTblShippingEconomyQuery groupByD() Group by the D column
 * @method     ChildTblShippingEconomyQuery groupByE() Group by the E column
 * @method     ChildTblShippingEconomyQuery groupByF() Group by the F column
 * @method     ChildTblShippingEconomyQuery groupByG() Group by the G column
 * @method     ChildTblShippingEconomyQuery groupByH() Group by the H column
 * @method     ChildTblShippingEconomyQuery groupByK() Group by the K column
 * @method     ChildTblShippingEconomyQuery groupByN() Group by the N column
 * @method     ChildTblShippingEconomyQuery groupByO() Group by the O column
 * @method     ChildTblShippingEconomyQuery groupByP() Group by the P column
 * @method     ChildTblShippingEconomyQuery groupByQ() Group by the Q column
 * @method     ChildTblShippingEconomyQuery groupByR() Group by the R column
 * @method     ChildTblShippingEconomyQuery groupByT() Group by the T column
 * @method     ChildTblShippingEconomyQuery groupByU() Group by the U column
 * @method     ChildTblShippingEconomyQuery groupByV() Group by the V column
 * @method     ChildTblShippingEconomyQuery groupByW() Group by the W column
 * @method     ChildTblShippingEconomyQuery groupByX() Group by the X column
 * @method     ChildTblShippingEconomyQuery groupByY() Group by the Y column
 * @method     ChildTblShippingEconomyQuery groupByZ() Group by the Z column
 * @method     ChildTblShippingEconomyQuery groupByAa() Group by the AA column
 * @method     ChildTblShippingEconomyQuery groupByAb() Group by the AB column
 *
 * @method     ChildTblShippingEconomyQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildTblShippingEconomyQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildTblShippingEconomyQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildTblShippingEconomyQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildTblShippingEconomyQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildTblShippingEconomyQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildTblShippingEconomy findOne(ConnectionInterface $con = null) Return the first ChildTblShippingEconomy matching the query
 * @method     ChildTblShippingEconomy findOneOrCreate(ConnectionInterface $con = null) Return the first ChildTblShippingEconomy matching the query, or a new ChildTblShippingEconomy object populated from the query conditions when no match is found
 *
 * @method     ChildTblShippingEconomy findOneByWeightIde(int $weight_ide) Return the first ChildTblShippingEconomy filtered by the weight_ide column
 * @method     ChildTblShippingEconomy findOneByWeightName(string $weight_name) Return the first ChildTblShippingEconomy filtered by the weight_name column
 * @method     ChildTblShippingEconomy findOneByA(string $A) Return the first ChildTblShippingEconomy filtered by the A column
 * @method     ChildTblShippingEconomy findOneByB(string $B) Return the first ChildTblShippingEconomy filtered by the B column
 * @method     ChildTblShippingEconomy findOneByC(string $C) Return the first ChildTblShippingEconomy filtered by the C column
 * @method     ChildTblShippingEconomy findOneByD(string $D) Return the first ChildTblShippingEconomy filtered by the D column
 * @method     ChildTblShippingEconomy findOneByE(string $E) Return the first ChildTblShippingEconomy filtered by the E column
 * @method     ChildTblShippingEconomy findOneByF(string $F) Return the first ChildTblShippingEconomy filtered by the F column
 * @method     ChildTblShippingEconomy findOneByG(string $G) Return the first ChildTblShippingEconomy filtered by the G column
 * @method     ChildTblShippingEconomy findOneByH(string $H) Return the first ChildTblShippingEconomy filtered by the H column
 * @method     ChildTblShippingEconomy findOneByK(string $K) Return the first ChildTblShippingEconomy filtered by the K column
 * @method     ChildTblShippingEconomy findOneByN(string $N) Return the first ChildTblShippingEconomy filtered by the N column
 * @method     ChildTblShippingEconomy findOneByO(string $O) Return the first ChildTblShippingEconomy filtered by the O column
 * @method     ChildTblShippingEconomy findOneByP(string $P) Return the first ChildTblShippingEconomy filtered by the P column
 * @method     ChildTblShippingEconomy findOneByQ(string $Q) Return the first ChildTblShippingEconomy filtered by the Q column
 * @method     ChildTblShippingEconomy findOneByR(string $R) Return the first ChildTblShippingEconomy filtered by the R column
 * @method     ChildTblShippingEconomy findOneByT(string $T) Return the first ChildTblShippingEconomy filtered by the T column
 * @method     ChildTblShippingEconomy findOneByU(string $U) Return the first ChildTblShippingEconomy filtered by the U column
 * @method     ChildTblShippingEconomy findOneByV(string $V) Return the first ChildTblShippingEconomy filtered by the V column
 * @method     ChildTblShippingEconomy findOneByW(string $W) Return the first ChildTblShippingEconomy filtered by the W column
 * @method     ChildTblShippingEconomy findOneByX(string $X) Return the first ChildTblShippingEconomy filtered by the X column
 * @method     ChildTblShippingEconomy findOneByY(string $Y) Return the first ChildTblShippingEconomy filtered by the Y column
 * @method     ChildTblShippingEconomy findOneByZ(string $Z) Return the first ChildTblShippingEconomy filtered by the Z column
 * @method     ChildTblShippingEconomy findOneByAa(string $AA) Return the first ChildTblShippingEconomy filtered by the AA column
 * @method     ChildTblShippingEconomy findOneByAb(string $AB) Return the first ChildTblShippingEconomy filtered by the AB column *

 * @method     ChildTblShippingEconomy requirePk($key, ConnectionInterface $con = null) Return the ChildTblShippingEconomy by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingEconomy requireOne(ConnectionInterface $con = null) Return the first ChildTblShippingEconomy matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTblShippingEconomy requireOneByWeightIde(int $weight_ide) Return the first ChildTblShippingEconomy filtered by the weight_ide column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingEconomy requireOneByWeightName(string $weight_name) Return the first ChildTblShippingEconomy filtered by the weight_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingEconomy requireOneByA(string $A) Return the first ChildTblShippingEconomy filtered by the A column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingEconomy requireOneByB(string $B) Return the first ChildTblShippingEconomy filtered by the B column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingEconomy requireOneByC(string $C) Return the first ChildTblShippingEconomy filtered by the C column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingEconomy requireOneByD(string $D) Return the first ChildTblShippingEconomy filtered by the D column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingEconomy requireOneByE(string $E) Return the first ChildTblShippingEconomy filtered by the E column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingEconomy requireOneByF(string $F) Return the first ChildTblShippingEconomy filtered by the F column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingEconomy requireOneByG(string $G) Return the first ChildTblShippingEconomy filtered by the G column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingEconomy requireOneByH(string $H) Return the first ChildTblShippingEconomy filtered by the H column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingEconomy requireOneByK(string $K) Return the first ChildTblShippingEconomy filtered by the K column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingEconomy requireOneByN(string $N) Return the first ChildTblShippingEconomy filtered by the N column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingEconomy requireOneByO(string $O) Return the first ChildTblShippingEconomy filtered by the O column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingEconomy requireOneByP(string $P) Return the first ChildTblShippingEconomy filtered by the P column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingEconomy requireOneByQ(string $Q) Return the first ChildTblShippingEconomy filtered by the Q column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingEconomy requireOneByR(string $R) Return the first ChildTblShippingEconomy filtered by the R column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingEconomy requireOneByT(string $T) Return the first ChildTblShippingEconomy filtered by the T column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingEconomy requireOneByU(string $U) Return the first ChildTblShippingEconomy filtered by the U column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingEconomy requireOneByV(string $V) Return the first ChildTblShippingEconomy filtered by the V column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingEconomy requireOneByW(string $W) Return the first ChildTblShippingEconomy filtered by the W column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingEconomy requireOneByX(string $X) Return the first ChildTblShippingEconomy filtered by the X column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingEconomy requireOneByY(string $Y) Return the first ChildTblShippingEconomy filtered by the Y column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingEconomy requireOneByZ(string $Z) Return the first ChildTblShippingEconomy filtered by the Z column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingEconomy requireOneByAa(string $AA) Return the first ChildTblShippingEconomy filtered by the AA column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblShippingEconomy requireOneByAb(string $AB) Return the first ChildTblShippingEconomy filtered by the AB column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTblShippingEconomy[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildTblShippingEconomy objects based on current ModelCriteria
 * @method     ChildTblShippingEconomy[]|ObjectCollection findByWeightIde(int $weight_ide) Return ChildTblShippingEconomy objects filtered by the weight_ide column
 * @method     ChildTblShippingEconomy[]|ObjectCollection findByWeightName(string $weight_name) Return ChildTblShippingEconomy objects filtered by the weight_name column
 * @method     ChildTblShippingEconomy[]|ObjectCollection findByA(string $A) Return ChildTblShippingEconomy objects filtered by the A column
 * @method     ChildTblShippingEconomy[]|ObjectCollection findByB(string $B) Return ChildTblShippingEconomy objects filtered by the B column
 * @method     ChildTblShippingEconomy[]|ObjectCollection findByC(string $C) Return ChildTblShippingEconomy objects filtered by the C column
 * @method     ChildTblShippingEconomy[]|ObjectCollection findByD(string $D) Return ChildTblShippingEconomy objects filtered by the D column
 * @method     ChildTblShippingEconomy[]|ObjectCollection findByE(string $E) Return ChildTblShippingEconomy objects filtered by the E column
 * @method     ChildTblShippingEconomy[]|ObjectCollection findByF(string $F) Return ChildTblShippingEconomy objects filtered by the F column
 * @method     ChildTblShippingEconomy[]|ObjectCollection findByG(string $G) Return ChildTblShippingEconomy objects filtered by the G column
 * @method     ChildTblShippingEconomy[]|ObjectCollection findByH(string $H) Return ChildTblShippingEconomy objects filtered by the H column
 * @method     ChildTblShippingEconomy[]|ObjectCollection findByK(string $K) Return ChildTblShippingEconomy objects filtered by the K column
 * @method     ChildTblShippingEconomy[]|ObjectCollection findByN(string $N) Return ChildTblShippingEconomy objects filtered by the N column
 * @method     ChildTblShippingEconomy[]|ObjectCollection findByO(string $O) Return ChildTblShippingEconomy objects filtered by the O column
 * @method     ChildTblShippingEconomy[]|ObjectCollection findByP(string $P) Return ChildTblShippingEconomy objects filtered by the P column
 * @method     ChildTblShippingEconomy[]|ObjectCollection findByQ(string $Q) Return ChildTblShippingEconomy objects filtered by the Q column
 * @method     ChildTblShippingEconomy[]|ObjectCollection findByR(string $R) Return ChildTblShippingEconomy objects filtered by the R column
 * @method     ChildTblShippingEconomy[]|ObjectCollection findByT(string $T) Return ChildTblShippingEconomy objects filtered by the T column
 * @method     ChildTblShippingEconomy[]|ObjectCollection findByU(string $U) Return ChildTblShippingEconomy objects filtered by the U column
 * @method     ChildTblShippingEconomy[]|ObjectCollection findByV(string $V) Return ChildTblShippingEconomy objects filtered by the V column
 * @method     ChildTblShippingEconomy[]|ObjectCollection findByW(string $W) Return ChildTblShippingEconomy objects filtered by the W column
 * @method     ChildTblShippingEconomy[]|ObjectCollection findByX(string $X) Return ChildTblShippingEconomy objects filtered by the X column
 * @method     ChildTblShippingEconomy[]|ObjectCollection findByY(string $Y) Return ChildTblShippingEconomy objects filtered by the Y column
 * @method     ChildTblShippingEconomy[]|ObjectCollection findByZ(string $Z) Return ChildTblShippingEconomy objects filtered by the Z column
 * @method     ChildTblShippingEconomy[]|ObjectCollection findByAa(string $AA) Return ChildTblShippingEconomy objects filtered by the AA column
 * @method     ChildTblShippingEconomy[]|ObjectCollection findByAb(string $AB) Return ChildTblShippingEconomy objects filtered by the AB column
 * @method     ChildTblShippingEconomy[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class TblShippingEconomyQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\TblShippingEconomyQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpm', $modelName = '\\TblShippingEconomy', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildTblShippingEconomyQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildTblShippingEconomyQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildTblShippingEconomyQuery) {
            return $criteria;
        }
        $query = new ChildTblShippingEconomyQuery();
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
     * @return ChildTblShippingEconomy|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TblShippingEconomyTableMap::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(TblShippingEconomyTableMap::DATABASE_NAME);
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
     * @return ChildTblShippingEconomy A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT weight_ide, weight_name, A, B, C, D, E, F, G, H, K, N, O, P, Q, R, T, U, V, W, X, Y, Z, AA, AB FROM tbl_shipping_economy WHERE weight_ide = :p0';
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
            /** @var ChildTblShippingEconomy $obj */
            $obj = new ChildTblShippingEconomy();
            $obj->hydrate($row);
            TblShippingEconomyTableMap::addInstanceToPool($obj, (string) $key);
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
     * @return ChildTblShippingEconomy|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildTblShippingEconomyQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TblShippingEconomyTableMap::COL_WEIGHT_IDE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildTblShippingEconomyQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TblShippingEconomyTableMap::COL_WEIGHT_IDE, $keys, Criteria::IN);
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
     * @return $this|ChildTblShippingEconomyQuery The current query, for fluid interface
     */
    public function filterByWeightIde($weightIde = null, $comparison = null)
    {
        if (is_array($weightIde)) {
            $useMinMax = false;
            if (isset($weightIde['min'])) {
                $this->addUsingAlias(TblShippingEconomyTableMap::COL_WEIGHT_IDE, $weightIde['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($weightIde['max'])) {
                $this->addUsingAlias(TblShippingEconomyTableMap::COL_WEIGHT_IDE, $weightIde['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblShippingEconomyTableMap::COL_WEIGHT_IDE, $weightIde, $comparison);
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
     * @return $this|ChildTblShippingEconomyQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TblShippingEconomyTableMap::COL_WEIGHT_NAME, $weightName, $comparison);
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
     * @return $this|ChildTblShippingEconomyQuery The current query, for fluid interface
     */
    public function filterByA($a = null, $comparison = null)
    {
        if (is_array($a)) {
            $useMinMax = false;
            if (isset($a['min'])) {
                $this->addUsingAlias(TblShippingEconomyTableMap::COL_A, $a['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($a['max'])) {
                $this->addUsingAlias(TblShippingEconomyTableMap::COL_A, $a['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblShippingEconomyTableMap::COL_A, $a, $comparison);
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
     * @return $this|ChildTblShippingEconomyQuery The current query, for fluid interface
     */
    public function filterByB($b = null, $comparison = null)
    {
        if (is_array($b)) {
            $useMinMax = false;
            if (isset($b['min'])) {
                $this->addUsingAlias(TblShippingEconomyTableMap::COL_B, $b['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($b['max'])) {
                $this->addUsingAlias(TblShippingEconomyTableMap::COL_B, $b['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblShippingEconomyTableMap::COL_B, $b, $comparison);
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
     * @return $this|ChildTblShippingEconomyQuery The current query, for fluid interface
     */
    public function filterByC($c = null, $comparison = null)
    {
        if (is_array($c)) {
            $useMinMax = false;
            if (isset($c['min'])) {
                $this->addUsingAlias(TblShippingEconomyTableMap::COL_C, $c['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($c['max'])) {
                $this->addUsingAlias(TblShippingEconomyTableMap::COL_C, $c['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblShippingEconomyTableMap::COL_C, $c, $comparison);
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
     * @return $this|ChildTblShippingEconomyQuery The current query, for fluid interface
     */
    public function filterByD($d = null, $comparison = null)
    {
        if (is_array($d)) {
            $useMinMax = false;
            if (isset($d['min'])) {
                $this->addUsingAlias(TblShippingEconomyTableMap::COL_D, $d['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($d['max'])) {
                $this->addUsingAlias(TblShippingEconomyTableMap::COL_D, $d['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblShippingEconomyTableMap::COL_D, $d, $comparison);
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
     * @return $this|ChildTblShippingEconomyQuery The current query, for fluid interface
     */
    public function filterByE($e = null, $comparison = null)
    {
        if (is_array($e)) {
            $useMinMax = false;
            if (isset($e['min'])) {
                $this->addUsingAlias(TblShippingEconomyTableMap::COL_E, $e['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($e['max'])) {
                $this->addUsingAlias(TblShippingEconomyTableMap::COL_E, $e['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblShippingEconomyTableMap::COL_E, $e, $comparison);
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
     * @return $this|ChildTblShippingEconomyQuery The current query, for fluid interface
     */
    public function filterByF($f = null, $comparison = null)
    {
        if (is_array($f)) {
            $useMinMax = false;
            if (isset($f['min'])) {
                $this->addUsingAlias(TblShippingEconomyTableMap::COL_F, $f['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($f['max'])) {
                $this->addUsingAlias(TblShippingEconomyTableMap::COL_F, $f['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblShippingEconomyTableMap::COL_F, $f, $comparison);
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
     * @return $this|ChildTblShippingEconomyQuery The current query, for fluid interface
     */
    public function filterByG($g = null, $comparison = null)
    {
        if (is_array($g)) {
            $useMinMax = false;
            if (isset($g['min'])) {
                $this->addUsingAlias(TblShippingEconomyTableMap::COL_G, $g['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($g['max'])) {
                $this->addUsingAlias(TblShippingEconomyTableMap::COL_G, $g['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblShippingEconomyTableMap::COL_G, $g, $comparison);
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
     * @return $this|ChildTblShippingEconomyQuery The current query, for fluid interface
     */
    public function filterByH($h = null, $comparison = null)
    {
        if (is_array($h)) {
            $useMinMax = false;
            if (isset($h['min'])) {
                $this->addUsingAlias(TblShippingEconomyTableMap::COL_H, $h['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($h['max'])) {
                $this->addUsingAlias(TblShippingEconomyTableMap::COL_H, $h['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblShippingEconomyTableMap::COL_H, $h, $comparison);
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
     * @return $this|ChildTblShippingEconomyQuery The current query, for fluid interface
     */
    public function filterByK($k = null, $comparison = null)
    {
        if (is_array($k)) {
            $useMinMax = false;
            if (isset($k['min'])) {
                $this->addUsingAlias(TblShippingEconomyTableMap::COL_K, $k['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($k['max'])) {
                $this->addUsingAlias(TblShippingEconomyTableMap::COL_K, $k['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblShippingEconomyTableMap::COL_K, $k, $comparison);
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
     * @return $this|ChildTblShippingEconomyQuery The current query, for fluid interface
     */
    public function filterByN($n = null, $comparison = null)
    {
        if (is_array($n)) {
            $useMinMax = false;
            if (isset($n['min'])) {
                $this->addUsingAlias(TblShippingEconomyTableMap::COL_N, $n['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($n['max'])) {
                $this->addUsingAlias(TblShippingEconomyTableMap::COL_N, $n['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblShippingEconomyTableMap::COL_N, $n, $comparison);
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
     * @return $this|ChildTblShippingEconomyQuery The current query, for fluid interface
     */
    public function filterByO($o = null, $comparison = null)
    {
        if (is_array($o)) {
            $useMinMax = false;
            if (isset($o['min'])) {
                $this->addUsingAlias(TblShippingEconomyTableMap::COL_O, $o['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($o['max'])) {
                $this->addUsingAlias(TblShippingEconomyTableMap::COL_O, $o['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblShippingEconomyTableMap::COL_O, $o, $comparison);
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
     * @return $this|ChildTblShippingEconomyQuery The current query, for fluid interface
     */
    public function filterByP($p = null, $comparison = null)
    {
        if (is_array($p)) {
            $useMinMax = false;
            if (isset($p['min'])) {
                $this->addUsingAlias(TblShippingEconomyTableMap::COL_P, $p['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($p['max'])) {
                $this->addUsingAlias(TblShippingEconomyTableMap::COL_P, $p['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblShippingEconomyTableMap::COL_P, $p, $comparison);
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
     * @return $this|ChildTblShippingEconomyQuery The current query, for fluid interface
     */
    public function filterByQ($q = null, $comparison = null)
    {
        if (is_array($q)) {
            $useMinMax = false;
            if (isset($q['min'])) {
                $this->addUsingAlias(TblShippingEconomyTableMap::COL_Q, $q['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($q['max'])) {
                $this->addUsingAlias(TblShippingEconomyTableMap::COL_Q, $q['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblShippingEconomyTableMap::COL_Q, $q, $comparison);
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
     * @return $this|ChildTblShippingEconomyQuery The current query, for fluid interface
     */
    public function filterByR($r = null, $comparison = null)
    {
        if (is_array($r)) {
            $useMinMax = false;
            if (isset($r['min'])) {
                $this->addUsingAlias(TblShippingEconomyTableMap::COL_R, $r['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($r['max'])) {
                $this->addUsingAlias(TblShippingEconomyTableMap::COL_R, $r['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblShippingEconomyTableMap::COL_R, $r, $comparison);
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
     * @return $this|ChildTblShippingEconomyQuery The current query, for fluid interface
     */
    public function filterByT($t = null, $comparison = null)
    {
        if (is_array($t)) {
            $useMinMax = false;
            if (isset($t['min'])) {
                $this->addUsingAlias(TblShippingEconomyTableMap::COL_T, $t['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($t['max'])) {
                $this->addUsingAlias(TblShippingEconomyTableMap::COL_T, $t['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblShippingEconomyTableMap::COL_T, $t, $comparison);
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
     * @return $this|ChildTblShippingEconomyQuery The current query, for fluid interface
     */
    public function filterByU($u = null, $comparison = null)
    {
        if (is_array($u)) {
            $useMinMax = false;
            if (isset($u['min'])) {
                $this->addUsingAlias(TblShippingEconomyTableMap::COL_U, $u['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($u['max'])) {
                $this->addUsingAlias(TblShippingEconomyTableMap::COL_U, $u['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblShippingEconomyTableMap::COL_U, $u, $comparison);
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
     * @return $this|ChildTblShippingEconomyQuery The current query, for fluid interface
     */
    public function filterByV($v = null, $comparison = null)
    {
        if (is_array($v)) {
            $useMinMax = false;
            if (isset($v['min'])) {
                $this->addUsingAlias(TblShippingEconomyTableMap::COL_V, $v['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($v['max'])) {
                $this->addUsingAlias(TblShippingEconomyTableMap::COL_V, $v['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblShippingEconomyTableMap::COL_V, $v, $comparison);
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
     * @return $this|ChildTblShippingEconomyQuery The current query, for fluid interface
     */
    public function filterByW($w = null, $comparison = null)
    {
        if (is_array($w)) {
            $useMinMax = false;
            if (isset($w['min'])) {
                $this->addUsingAlias(TblShippingEconomyTableMap::COL_W, $w['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($w['max'])) {
                $this->addUsingAlias(TblShippingEconomyTableMap::COL_W, $w['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblShippingEconomyTableMap::COL_W, $w, $comparison);
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
     * @return $this|ChildTblShippingEconomyQuery The current query, for fluid interface
     */
    public function filterByX($x = null, $comparison = null)
    {
        if (is_array($x)) {
            $useMinMax = false;
            if (isset($x['min'])) {
                $this->addUsingAlias(TblShippingEconomyTableMap::COL_X, $x['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($x['max'])) {
                $this->addUsingAlias(TblShippingEconomyTableMap::COL_X, $x['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblShippingEconomyTableMap::COL_X, $x, $comparison);
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
     * @return $this|ChildTblShippingEconomyQuery The current query, for fluid interface
     */
    public function filterByY($y = null, $comparison = null)
    {
        if (is_array($y)) {
            $useMinMax = false;
            if (isset($y['min'])) {
                $this->addUsingAlias(TblShippingEconomyTableMap::COL_Y, $y['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($y['max'])) {
                $this->addUsingAlias(TblShippingEconomyTableMap::COL_Y, $y['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblShippingEconomyTableMap::COL_Y, $y, $comparison);
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
     * @return $this|ChildTblShippingEconomyQuery The current query, for fluid interface
     */
    public function filterByZ($z = null, $comparison = null)
    {
        if (is_array($z)) {
            $useMinMax = false;
            if (isset($z['min'])) {
                $this->addUsingAlias(TblShippingEconomyTableMap::COL_Z, $z['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($z['max'])) {
                $this->addUsingAlias(TblShippingEconomyTableMap::COL_Z, $z['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblShippingEconomyTableMap::COL_Z, $z, $comparison);
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
     * @return $this|ChildTblShippingEconomyQuery The current query, for fluid interface
     */
    public function filterByAa($aa = null, $comparison = null)
    {
        if (is_array($aa)) {
            $useMinMax = false;
            if (isset($aa['min'])) {
                $this->addUsingAlias(TblShippingEconomyTableMap::COL_AA, $aa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aa['max'])) {
                $this->addUsingAlias(TblShippingEconomyTableMap::COL_AA, $aa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblShippingEconomyTableMap::COL_AA, $aa, $comparison);
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
     * @return $this|ChildTblShippingEconomyQuery The current query, for fluid interface
     */
    public function filterByAb($ab = null, $comparison = null)
    {
        if (is_array($ab)) {
            $useMinMax = false;
            if (isset($ab['min'])) {
                $this->addUsingAlias(TblShippingEconomyTableMap::COL_AB, $ab['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ab['max'])) {
                $this->addUsingAlias(TblShippingEconomyTableMap::COL_AB, $ab['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblShippingEconomyTableMap::COL_AB, $ab, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildTblShippingEconomy $tblShippingEconomy Object to remove from the list of results
     *
     * @return $this|ChildTblShippingEconomyQuery The current query, for fluid interface
     */
    public function prune($tblShippingEconomy = null)
    {
        if ($tblShippingEconomy) {
            $this->addUsingAlias(TblShippingEconomyTableMap::COL_WEIGHT_IDE, $tblShippingEconomy->getWeightIde(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the tbl_shipping_economy table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TblShippingEconomyTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            TblShippingEconomyTableMap::clearInstancePool();
            TblShippingEconomyTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(TblShippingEconomyTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(TblShippingEconomyTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            
            TblShippingEconomyTableMap::removeInstanceFromPool($criteria);
        
            $affectedRows += ModelCriteria::delete($con);
            TblShippingEconomyTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // TblShippingEconomyQuery
