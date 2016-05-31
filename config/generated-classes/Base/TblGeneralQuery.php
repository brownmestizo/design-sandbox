<?php

namespace Base;

use \TblGeneral as ChildTblGeneral;
use \TblGeneralQuery as ChildTblGeneralQuery;
use \Exception;
use \PDO;
use Map\TblGeneralTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'tbl_general' table.
 *
 *
 *
 * @method     ChildTblGeneralQuery orderByProdGeneral($order = Criteria::ASC) Order by the prod_general column
 * @method     ChildTblGeneralQuery orderByProdName($order = Criteria::ASC) Order by the prod_name column
 * @method     ChildTblGeneralQuery orderByProdDescription($order = Criteria::ASC) Order by the prod_description column
 * @method     ChildTblGeneralQuery orderByProdDescriptionPa($order = Criteria::ASC) Order by the prod_description_pa column
 * @method     ChildTblGeneralQuery orderByProdDescriptionM3($order = Criteria::ASC) Order by the prod_description_m3 column
 * @method     ChildTblGeneralQuery orderByProdKeywords($order = Criteria::ASC) Order by the prod_keywords column
 * @method     ChildTblGeneralQuery orderByProdKeywordsPa($order = Criteria::ASC) Order by the prod_keywords_pa column
 * @method     ChildTblGeneralQuery orderByProdKeywordsM3($order = Criteria::ASC) Order by the prod_keywords_m3 column
 * @method     ChildTblGeneralQuery orderByProdWriteupkeywords($order = Criteria::ASC) Order by the prod_writeupkeywords column
 * @method     ChildTblGeneralQuery orderByProdWriteupkeywordsPa($order = Criteria::ASC) Order by the prod_writeupkeywords_pa column
 * @method     ChildTblGeneralQuery orderByProdWriteupkeywordsM3($order = Criteria::ASC) Order by the prod_writeupkeywords_m3 column
 *
 * @method     ChildTblGeneralQuery groupByProdGeneral() Group by the prod_general column
 * @method     ChildTblGeneralQuery groupByProdName() Group by the prod_name column
 * @method     ChildTblGeneralQuery groupByProdDescription() Group by the prod_description column
 * @method     ChildTblGeneralQuery groupByProdDescriptionPa() Group by the prod_description_pa column
 * @method     ChildTblGeneralQuery groupByProdDescriptionM3() Group by the prod_description_m3 column
 * @method     ChildTblGeneralQuery groupByProdKeywords() Group by the prod_keywords column
 * @method     ChildTblGeneralQuery groupByProdKeywordsPa() Group by the prod_keywords_pa column
 * @method     ChildTblGeneralQuery groupByProdKeywordsM3() Group by the prod_keywords_m3 column
 * @method     ChildTblGeneralQuery groupByProdWriteupkeywords() Group by the prod_writeupkeywords column
 * @method     ChildTblGeneralQuery groupByProdWriteupkeywordsPa() Group by the prod_writeupkeywords_pa column
 * @method     ChildTblGeneralQuery groupByProdWriteupkeywordsM3() Group by the prod_writeupkeywords_m3 column
 *
 * @method     ChildTblGeneralQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildTblGeneralQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildTblGeneralQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildTblGeneralQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildTblGeneralQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildTblGeneralQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildTblGeneralQuery leftJoinTblProdInfo($relationAlias = null) Adds a LEFT JOIN clause to the query using the TblProdInfo relation
 * @method     ChildTblGeneralQuery rightJoinTblProdInfo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TblProdInfo relation
 * @method     ChildTblGeneralQuery innerJoinTblProdInfo($relationAlias = null) Adds a INNER JOIN clause to the query using the TblProdInfo relation
 *
 * @method     ChildTblGeneralQuery joinWithTblProdInfo($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the TblProdInfo relation
 *
 * @method     ChildTblGeneralQuery leftJoinWithTblProdInfo() Adds a LEFT JOIN clause and with to the query using the TblProdInfo relation
 * @method     ChildTblGeneralQuery rightJoinWithTblProdInfo() Adds a RIGHT JOIN clause and with to the query using the TblProdInfo relation
 * @method     ChildTblGeneralQuery innerJoinWithTblProdInfo() Adds a INNER JOIN clause and with to the query using the TblProdInfo relation
 *
 * @method     \TblProdInfoQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildTblGeneral findOne(ConnectionInterface $con = null) Return the first ChildTblGeneral matching the query
 * @method     ChildTblGeneral findOneOrCreate(ConnectionInterface $con = null) Return the first ChildTblGeneral matching the query, or a new ChildTblGeneral object populated from the query conditions when no match is found
 *
 * @method     ChildTblGeneral findOneByProdGeneral(int $prod_general) Return the first ChildTblGeneral filtered by the prod_general column
 * @method     ChildTblGeneral findOneByProdName(string $prod_name) Return the first ChildTblGeneral filtered by the prod_name column
 * @method     ChildTblGeneral findOneByProdDescription(string $prod_description) Return the first ChildTblGeneral filtered by the prod_description column
 * @method     ChildTblGeneral findOneByProdDescriptionPa(string $prod_description_pa) Return the first ChildTblGeneral filtered by the prod_description_pa column
 * @method     ChildTblGeneral findOneByProdDescriptionM3(string $prod_description_m3) Return the first ChildTblGeneral filtered by the prod_description_m3 column
 * @method     ChildTblGeneral findOneByProdKeywords(string $prod_keywords) Return the first ChildTblGeneral filtered by the prod_keywords column
 * @method     ChildTblGeneral findOneByProdKeywordsPa(string $prod_keywords_pa) Return the first ChildTblGeneral filtered by the prod_keywords_pa column
 * @method     ChildTblGeneral findOneByProdKeywordsM3(string $prod_keywords_m3) Return the first ChildTblGeneral filtered by the prod_keywords_m3 column
 * @method     ChildTblGeneral findOneByProdWriteupkeywords(string $prod_writeupkeywords) Return the first ChildTblGeneral filtered by the prod_writeupkeywords column
 * @method     ChildTblGeneral findOneByProdWriteupkeywordsPa(string $prod_writeupkeywords_pa) Return the first ChildTblGeneral filtered by the prod_writeupkeywords_pa column
 * @method     ChildTblGeneral findOneByProdWriteupkeywordsM3(string $prod_writeupkeywords_m3) Return the first ChildTblGeneral filtered by the prod_writeupkeywords_m3 column *

 * @method     ChildTblGeneral requirePk($key, ConnectionInterface $con = null) Return the ChildTblGeneral by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblGeneral requireOne(ConnectionInterface $con = null) Return the first ChildTblGeneral matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTblGeneral requireOneByProdGeneral(int $prod_general) Return the first ChildTblGeneral filtered by the prod_general column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblGeneral requireOneByProdName(string $prod_name) Return the first ChildTblGeneral filtered by the prod_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblGeneral requireOneByProdDescription(string $prod_description) Return the first ChildTblGeneral filtered by the prod_description column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblGeneral requireOneByProdDescriptionPa(string $prod_description_pa) Return the first ChildTblGeneral filtered by the prod_description_pa column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblGeneral requireOneByProdDescriptionM3(string $prod_description_m3) Return the first ChildTblGeneral filtered by the prod_description_m3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblGeneral requireOneByProdKeywords(string $prod_keywords) Return the first ChildTblGeneral filtered by the prod_keywords column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblGeneral requireOneByProdKeywordsPa(string $prod_keywords_pa) Return the first ChildTblGeneral filtered by the prod_keywords_pa column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblGeneral requireOneByProdKeywordsM3(string $prod_keywords_m3) Return the first ChildTblGeneral filtered by the prod_keywords_m3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblGeneral requireOneByProdWriteupkeywords(string $prod_writeupkeywords) Return the first ChildTblGeneral filtered by the prod_writeupkeywords column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblGeneral requireOneByProdWriteupkeywordsPa(string $prod_writeupkeywords_pa) Return the first ChildTblGeneral filtered by the prod_writeupkeywords_pa column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblGeneral requireOneByProdWriteupkeywordsM3(string $prod_writeupkeywords_m3) Return the first ChildTblGeneral filtered by the prod_writeupkeywords_m3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTblGeneral[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildTblGeneral objects based on current ModelCriteria
 * @method     ChildTblGeneral[]|ObjectCollection findByProdGeneral(int $prod_general) Return ChildTblGeneral objects filtered by the prod_general column
 * @method     ChildTblGeneral[]|ObjectCollection findByProdName(string $prod_name) Return ChildTblGeneral objects filtered by the prod_name column
 * @method     ChildTblGeneral[]|ObjectCollection findByProdDescription(string $prod_description) Return ChildTblGeneral objects filtered by the prod_description column
 * @method     ChildTblGeneral[]|ObjectCollection findByProdDescriptionPa(string $prod_description_pa) Return ChildTblGeneral objects filtered by the prod_description_pa column
 * @method     ChildTblGeneral[]|ObjectCollection findByProdDescriptionM3(string $prod_description_m3) Return ChildTblGeneral objects filtered by the prod_description_m3 column
 * @method     ChildTblGeneral[]|ObjectCollection findByProdKeywords(string $prod_keywords) Return ChildTblGeneral objects filtered by the prod_keywords column
 * @method     ChildTblGeneral[]|ObjectCollection findByProdKeywordsPa(string $prod_keywords_pa) Return ChildTblGeneral objects filtered by the prod_keywords_pa column
 * @method     ChildTblGeneral[]|ObjectCollection findByProdKeywordsM3(string $prod_keywords_m3) Return ChildTblGeneral objects filtered by the prod_keywords_m3 column
 * @method     ChildTblGeneral[]|ObjectCollection findByProdWriteupkeywords(string $prod_writeupkeywords) Return ChildTblGeneral objects filtered by the prod_writeupkeywords column
 * @method     ChildTblGeneral[]|ObjectCollection findByProdWriteupkeywordsPa(string $prod_writeupkeywords_pa) Return ChildTblGeneral objects filtered by the prod_writeupkeywords_pa column
 * @method     ChildTblGeneral[]|ObjectCollection findByProdWriteupkeywordsM3(string $prod_writeupkeywords_m3) Return ChildTblGeneral objects filtered by the prod_writeupkeywords_m3 column
 * @method     ChildTblGeneral[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class TblGeneralQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\TblGeneralQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpm', $modelName = '\\TblGeneral', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildTblGeneralQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildTblGeneralQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildTblGeneralQuery) {
            return $criteria;
        }
        $query = new ChildTblGeneralQuery();
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
     * @return ChildTblGeneral|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(TblGeneralTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = TblGeneralTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildTblGeneral A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT prod_general, prod_name, prod_description, prod_description_pa, prod_description_m3, prod_keywords, prod_keywords_pa, prod_keywords_m3, prod_writeupkeywords, prod_writeupkeywords_pa, prod_writeupkeywords_m3 FROM tbl_general WHERE prod_general = :p0';
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
            /** @var ChildTblGeneral $obj */
            $obj = new ChildTblGeneral();
            $obj->hydrate($row);
            TblGeneralTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildTblGeneral|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildTblGeneralQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TblGeneralTableMap::COL_PROD_GENERAL, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildTblGeneralQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TblGeneralTableMap::COL_PROD_GENERAL, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the prod_general column
     *
     * Example usage:
     * <code>
     * $query->filterByProdGeneral(1234); // WHERE prod_general = 1234
     * $query->filterByProdGeneral(array(12, 34)); // WHERE prod_general IN (12, 34)
     * $query->filterByProdGeneral(array('min' => 12)); // WHERE prod_general > 12
     * </code>
     *
     * @param     mixed $prodGeneral The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblGeneralQuery The current query, for fluid interface
     */
    public function filterByProdGeneral($prodGeneral = null, $comparison = null)
    {
        if (is_array($prodGeneral)) {
            $useMinMax = false;
            if (isset($prodGeneral['min'])) {
                $this->addUsingAlias(TblGeneralTableMap::COL_PROD_GENERAL, $prodGeneral['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prodGeneral['max'])) {
                $this->addUsingAlias(TblGeneralTableMap::COL_PROD_GENERAL, $prodGeneral['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblGeneralTableMap::COL_PROD_GENERAL, $prodGeneral, $comparison);
    }

    /**
     * Filter the query on the prod_name column
     *
     * Example usage:
     * <code>
     * $query->filterByProdName('fooValue');   // WHERE prod_name = 'fooValue'
     * $query->filterByProdName('%fooValue%'); // WHERE prod_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblGeneralQuery The current query, for fluid interface
     */
    public function filterByProdName($prodName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodName)) {
                $prodName = str_replace('*', '%', $prodName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblGeneralTableMap::COL_PROD_NAME, $prodName, $comparison);
    }

    /**
     * Filter the query on the prod_description column
     *
     * Example usage:
     * <code>
     * $query->filterByProdDescription('fooValue');   // WHERE prod_description = 'fooValue'
     * $query->filterByProdDescription('%fooValue%'); // WHERE prod_description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodDescription The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblGeneralQuery The current query, for fluid interface
     */
    public function filterByProdDescription($prodDescription = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodDescription)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodDescription)) {
                $prodDescription = str_replace('*', '%', $prodDescription);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblGeneralTableMap::COL_PROD_DESCRIPTION, $prodDescription, $comparison);
    }

    /**
     * Filter the query on the prod_description_pa column
     *
     * Example usage:
     * <code>
     * $query->filterByProdDescriptionPa('fooValue');   // WHERE prod_description_pa = 'fooValue'
     * $query->filterByProdDescriptionPa('%fooValue%'); // WHERE prod_description_pa LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodDescriptionPa The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblGeneralQuery The current query, for fluid interface
     */
    public function filterByProdDescriptionPa($prodDescriptionPa = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodDescriptionPa)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodDescriptionPa)) {
                $prodDescriptionPa = str_replace('*', '%', $prodDescriptionPa);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblGeneralTableMap::COL_PROD_DESCRIPTION_PA, $prodDescriptionPa, $comparison);
    }

    /**
     * Filter the query on the prod_description_m3 column
     *
     * Example usage:
     * <code>
     * $query->filterByProdDescriptionM3('fooValue');   // WHERE prod_description_m3 = 'fooValue'
     * $query->filterByProdDescriptionM3('%fooValue%'); // WHERE prod_description_m3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodDescriptionM3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblGeneralQuery The current query, for fluid interface
     */
    public function filterByProdDescriptionM3($prodDescriptionM3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodDescriptionM3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodDescriptionM3)) {
                $prodDescriptionM3 = str_replace('*', '%', $prodDescriptionM3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblGeneralTableMap::COL_PROD_DESCRIPTION_M3, $prodDescriptionM3, $comparison);
    }

    /**
     * Filter the query on the prod_keywords column
     *
     * Example usage:
     * <code>
     * $query->filterByProdKeywords('fooValue');   // WHERE prod_keywords = 'fooValue'
     * $query->filterByProdKeywords('%fooValue%'); // WHERE prod_keywords LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodKeywords The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblGeneralQuery The current query, for fluid interface
     */
    public function filterByProdKeywords($prodKeywords = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodKeywords)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodKeywords)) {
                $prodKeywords = str_replace('*', '%', $prodKeywords);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblGeneralTableMap::COL_PROD_KEYWORDS, $prodKeywords, $comparison);
    }

    /**
     * Filter the query on the prod_keywords_pa column
     *
     * Example usage:
     * <code>
     * $query->filterByProdKeywordsPa('fooValue');   // WHERE prod_keywords_pa = 'fooValue'
     * $query->filterByProdKeywordsPa('%fooValue%'); // WHERE prod_keywords_pa LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodKeywordsPa The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblGeneralQuery The current query, for fluid interface
     */
    public function filterByProdKeywordsPa($prodKeywordsPa = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodKeywordsPa)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodKeywordsPa)) {
                $prodKeywordsPa = str_replace('*', '%', $prodKeywordsPa);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblGeneralTableMap::COL_PROD_KEYWORDS_PA, $prodKeywordsPa, $comparison);
    }

    /**
     * Filter the query on the prod_keywords_m3 column
     *
     * Example usage:
     * <code>
     * $query->filterByProdKeywordsM3('fooValue');   // WHERE prod_keywords_m3 = 'fooValue'
     * $query->filterByProdKeywordsM3('%fooValue%'); // WHERE prod_keywords_m3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodKeywordsM3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblGeneralQuery The current query, for fluid interface
     */
    public function filterByProdKeywordsM3($prodKeywordsM3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodKeywordsM3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodKeywordsM3)) {
                $prodKeywordsM3 = str_replace('*', '%', $prodKeywordsM3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblGeneralTableMap::COL_PROD_KEYWORDS_M3, $prodKeywordsM3, $comparison);
    }

    /**
     * Filter the query on the prod_writeupkeywords column
     *
     * Example usage:
     * <code>
     * $query->filterByProdWriteupkeywords('fooValue');   // WHERE prod_writeupkeywords = 'fooValue'
     * $query->filterByProdWriteupkeywords('%fooValue%'); // WHERE prod_writeupkeywords LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodWriteupkeywords The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblGeneralQuery The current query, for fluid interface
     */
    public function filterByProdWriteupkeywords($prodWriteupkeywords = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodWriteupkeywords)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodWriteupkeywords)) {
                $prodWriteupkeywords = str_replace('*', '%', $prodWriteupkeywords);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblGeneralTableMap::COL_PROD_WRITEUPKEYWORDS, $prodWriteupkeywords, $comparison);
    }

    /**
     * Filter the query on the prod_writeupkeywords_pa column
     *
     * Example usage:
     * <code>
     * $query->filterByProdWriteupkeywordsPa('fooValue');   // WHERE prod_writeupkeywords_pa = 'fooValue'
     * $query->filterByProdWriteupkeywordsPa('%fooValue%'); // WHERE prod_writeupkeywords_pa LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodWriteupkeywordsPa The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblGeneralQuery The current query, for fluid interface
     */
    public function filterByProdWriteupkeywordsPa($prodWriteupkeywordsPa = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodWriteupkeywordsPa)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodWriteupkeywordsPa)) {
                $prodWriteupkeywordsPa = str_replace('*', '%', $prodWriteupkeywordsPa);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblGeneralTableMap::COL_PROD_WRITEUPKEYWORDS_PA, $prodWriteupkeywordsPa, $comparison);
    }

    /**
     * Filter the query on the prod_writeupkeywords_m3 column
     *
     * Example usage:
     * <code>
     * $query->filterByProdWriteupkeywordsM3('fooValue');   // WHERE prod_writeupkeywords_m3 = 'fooValue'
     * $query->filterByProdWriteupkeywordsM3('%fooValue%'); // WHERE prod_writeupkeywords_m3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodWriteupkeywordsM3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblGeneralQuery The current query, for fluid interface
     */
    public function filterByProdWriteupkeywordsM3($prodWriteupkeywordsM3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodWriteupkeywordsM3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodWriteupkeywordsM3)) {
                $prodWriteupkeywordsM3 = str_replace('*', '%', $prodWriteupkeywordsM3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblGeneralTableMap::COL_PROD_WRITEUPKEYWORDS_M3, $prodWriteupkeywordsM3, $comparison);
    }

    /**
     * Filter the query by a related \TblProdInfo object
     *
     * @param \TblProdInfo|ObjectCollection $tblProdInfo the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildTblGeneralQuery The current query, for fluid interface
     */
    public function filterByTblProdInfo($tblProdInfo, $comparison = null)
    {
        if ($tblProdInfo instanceof \TblProdInfo) {
            return $this
                ->addUsingAlias(TblGeneralTableMap::COL_PROD_GENERAL, $tblProdInfo->getProdGeneral(), $comparison);
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
     * @return $this|ChildTblGeneralQuery The current query, for fluid interface
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
     * @param   ChildTblGeneral $tblGeneral Object to remove from the list of results
     *
     * @return $this|ChildTblGeneralQuery The current query, for fluid interface
     */
    public function prune($tblGeneral = null)
    {
        if ($tblGeneral) {
            $this->addUsingAlias(TblGeneralTableMap::COL_PROD_GENERAL, $tblGeneral->getProdGeneral(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the tbl_general table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TblGeneralTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            TblGeneralTableMap::clearInstancePool();
            TblGeneralTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(TblGeneralTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(TblGeneralTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            TblGeneralTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            TblGeneralTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // TblGeneralQuery
