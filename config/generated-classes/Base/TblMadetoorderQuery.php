<?php

namespace Base;

use \TblMadetoorder as ChildTblMadetoorder;
use \TblMadetoorderQuery as ChildTblMadetoorderQuery;
use \Exception;
use \PDO;
use Map\TblMadetoorderTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'tbl_madetoorder' table.
 *
 *
 *
 * @method     ChildTblMadetoorderQuery orderByMadId($order = Criteria::ASC) Order by the mad_id column
 * @method     ChildTblMadetoorderQuery orderByMadName($order = Criteria::ASC) Order by the mad_name column
 * @method     ChildTblMadetoorderQuery orderByMadEmail($order = Criteria::ASC) Order by the mad_email column
 * @method     ChildTblMadetoorderQuery orderByMadColor($order = Criteria::ASC) Order by the mad_color column
 * @method     ChildTblMadetoorderQuery orderByMadLength($order = Criteria::ASC) Order by the mad_length column
 * @method     ChildTblMadetoorderQuery orderByMadMark($order = Criteria::ASC) Order by the mad_mark column
 * @method     ChildTblMadetoorderQuery orderByMadRem($order = Criteria::ASC) Order by the mad_rem column
 * @method     ChildTblMadetoorderQuery orderByMadUrl($order = Criteria::ASC) Order by the mad_url column
 * @method     ChildTblMadetoorderQuery orderByMadPhoto($order = Criteria::ASC) Order by the mad_photo column
 * @method     ChildTblMadetoorderQuery orderByMadPhoto2($order = Criteria::ASC) Order by the mad_photo2 column
 * @method     ChildTblMadetoorderQuery orderByMadPhoto3($order = Criteria::ASC) Order by the mad_photo3 column
 *
 * @method     ChildTblMadetoorderQuery groupByMadId() Group by the mad_id column
 * @method     ChildTblMadetoorderQuery groupByMadName() Group by the mad_name column
 * @method     ChildTblMadetoorderQuery groupByMadEmail() Group by the mad_email column
 * @method     ChildTblMadetoorderQuery groupByMadColor() Group by the mad_color column
 * @method     ChildTblMadetoorderQuery groupByMadLength() Group by the mad_length column
 * @method     ChildTblMadetoorderQuery groupByMadMark() Group by the mad_mark column
 * @method     ChildTblMadetoorderQuery groupByMadRem() Group by the mad_rem column
 * @method     ChildTblMadetoorderQuery groupByMadUrl() Group by the mad_url column
 * @method     ChildTblMadetoorderQuery groupByMadPhoto() Group by the mad_photo column
 * @method     ChildTblMadetoorderQuery groupByMadPhoto2() Group by the mad_photo2 column
 * @method     ChildTblMadetoorderQuery groupByMadPhoto3() Group by the mad_photo3 column
 *
 * @method     ChildTblMadetoorderQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildTblMadetoorderQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildTblMadetoorderQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildTblMadetoorderQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildTblMadetoorderQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildTblMadetoorderQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildTblMadetoorder findOne(ConnectionInterface $con = null) Return the first ChildTblMadetoorder matching the query
 * @method     ChildTblMadetoorder findOneOrCreate(ConnectionInterface $con = null) Return the first ChildTblMadetoorder matching the query, or a new ChildTblMadetoorder object populated from the query conditions when no match is found
 *
 * @method     ChildTblMadetoorder findOneByMadId(int $mad_id) Return the first ChildTblMadetoorder filtered by the mad_id column
 * @method     ChildTblMadetoorder findOneByMadName(string $mad_name) Return the first ChildTblMadetoorder filtered by the mad_name column
 * @method     ChildTblMadetoorder findOneByMadEmail(string $mad_email) Return the first ChildTblMadetoorder filtered by the mad_email column
 * @method     ChildTblMadetoorder findOneByMadColor(string $mad_color) Return the first ChildTblMadetoorder filtered by the mad_color column
 * @method     ChildTblMadetoorder findOneByMadLength(string $mad_length) Return the first ChildTblMadetoorder filtered by the mad_length column
 * @method     ChildTblMadetoorder findOneByMadMark(string $mad_mark) Return the first ChildTblMadetoorder filtered by the mad_mark column
 * @method     ChildTblMadetoorder findOneByMadRem(string $mad_rem) Return the first ChildTblMadetoorder filtered by the mad_rem column
 * @method     ChildTblMadetoorder findOneByMadUrl(string $mad_url) Return the first ChildTblMadetoorder filtered by the mad_url column
 * @method     ChildTblMadetoorder findOneByMadPhoto(string $mad_photo) Return the first ChildTblMadetoorder filtered by the mad_photo column
 * @method     ChildTblMadetoorder findOneByMadPhoto2(string $mad_photo2) Return the first ChildTblMadetoorder filtered by the mad_photo2 column
 * @method     ChildTblMadetoorder findOneByMadPhoto3(string $mad_photo3) Return the first ChildTblMadetoorder filtered by the mad_photo3 column *

 * @method     ChildTblMadetoorder requirePk($key, ConnectionInterface $con = null) Return the ChildTblMadetoorder by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblMadetoorder requireOne(ConnectionInterface $con = null) Return the first ChildTblMadetoorder matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTblMadetoorder requireOneByMadId(int $mad_id) Return the first ChildTblMadetoorder filtered by the mad_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblMadetoorder requireOneByMadName(string $mad_name) Return the first ChildTblMadetoorder filtered by the mad_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblMadetoorder requireOneByMadEmail(string $mad_email) Return the first ChildTblMadetoorder filtered by the mad_email column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblMadetoorder requireOneByMadColor(string $mad_color) Return the first ChildTblMadetoorder filtered by the mad_color column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblMadetoorder requireOneByMadLength(string $mad_length) Return the first ChildTblMadetoorder filtered by the mad_length column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblMadetoorder requireOneByMadMark(string $mad_mark) Return the first ChildTblMadetoorder filtered by the mad_mark column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblMadetoorder requireOneByMadRem(string $mad_rem) Return the first ChildTblMadetoorder filtered by the mad_rem column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblMadetoorder requireOneByMadUrl(string $mad_url) Return the first ChildTblMadetoorder filtered by the mad_url column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblMadetoorder requireOneByMadPhoto(string $mad_photo) Return the first ChildTblMadetoorder filtered by the mad_photo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblMadetoorder requireOneByMadPhoto2(string $mad_photo2) Return the first ChildTblMadetoorder filtered by the mad_photo2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblMadetoorder requireOneByMadPhoto3(string $mad_photo3) Return the first ChildTblMadetoorder filtered by the mad_photo3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTblMadetoorder[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildTblMadetoorder objects based on current ModelCriteria
 * @method     ChildTblMadetoorder[]|ObjectCollection findByMadId(int $mad_id) Return ChildTblMadetoorder objects filtered by the mad_id column
 * @method     ChildTblMadetoorder[]|ObjectCollection findByMadName(string $mad_name) Return ChildTblMadetoorder objects filtered by the mad_name column
 * @method     ChildTblMadetoorder[]|ObjectCollection findByMadEmail(string $mad_email) Return ChildTblMadetoorder objects filtered by the mad_email column
 * @method     ChildTblMadetoorder[]|ObjectCollection findByMadColor(string $mad_color) Return ChildTblMadetoorder objects filtered by the mad_color column
 * @method     ChildTblMadetoorder[]|ObjectCollection findByMadLength(string $mad_length) Return ChildTblMadetoorder objects filtered by the mad_length column
 * @method     ChildTblMadetoorder[]|ObjectCollection findByMadMark(string $mad_mark) Return ChildTblMadetoorder objects filtered by the mad_mark column
 * @method     ChildTblMadetoorder[]|ObjectCollection findByMadRem(string $mad_rem) Return ChildTblMadetoorder objects filtered by the mad_rem column
 * @method     ChildTblMadetoorder[]|ObjectCollection findByMadUrl(string $mad_url) Return ChildTblMadetoorder objects filtered by the mad_url column
 * @method     ChildTblMadetoorder[]|ObjectCollection findByMadPhoto(string $mad_photo) Return ChildTblMadetoorder objects filtered by the mad_photo column
 * @method     ChildTblMadetoorder[]|ObjectCollection findByMadPhoto2(string $mad_photo2) Return ChildTblMadetoorder objects filtered by the mad_photo2 column
 * @method     ChildTblMadetoorder[]|ObjectCollection findByMadPhoto3(string $mad_photo3) Return ChildTblMadetoorder objects filtered by the mad_photo3 column
 * @method     ChildTblMadetoorder[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class TblMadetoorderQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\TblMadetoorderQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpm', $modelName = '\\TblMadetoorder', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildTblMadetoorderQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildTblMadetoorderQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildTblMadetoorderQuery) {
            return $criteria;
        }
        $query = new ChildTblMadetoorderQuery();
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
     * @return ChildTblMadetoorder|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(TblMadetoorderTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = TblMadetoorderTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildTblMadetoorder A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT mad_id, mad_name, mad_email, mad_color, mad_length, mad_mark, mad_rem, mad_url, mad_photo, mad_photo2, mad_photo3 FROM tbl_madetoorder WHERE mad_id = :p0';
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
            /** @var ChildTblMadetoorder $obj */
            $obj = new ChildTblMadetoorder();
            $obj->hydrate($row);
            TblMadetoorderTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildTblMadetoorder|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildTblMadetoorderQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TblMadetoorderTableMap::COL_MAD_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildTblMadetoorderQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TblMadetoorderTableMap::COL_MAD_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the mad_id column
     *
     * Example usage:
     * <code>
     * $query->filterByMadId(1234); // WHERE mad_id = 1234
     * $query->filterByMadId(array(12, 34)); // WHERE mad_id IN (12, 34)
     * $query->filterByMadId(array('min' => 12)); // WHERE mad_id > 12
     * </code>
     *
     * @param     mixed $madId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblMadetoorderQuery The current query, for fluid interface
     */
    public function filterByMadId($madId = null, $comparison = null)
    {
        if (is_array($madId)) {
            $useMinMax = false;
            if (isset($madId['min'])) {
                $this->addUsingAlias(TblMadetoorderTableMap::COL_MAD_ID, $madId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($madId['max'])) {
                $this->addUsingAlias(TblMadetoorderTableMap::COL_MAD_ID, $madId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblMadetoorderTableMap::COL_MAD_ID, $madId, $comparison);
    }

    /**
     * Filter the query on the mad_name column
     *
     * Example usage:
     * <code>
     * $query->filterByMadName('fooValue');   // WHERE mad_name = 'fooValue'
     * $query->filterByMadName('%fooValue%'); // WHERE mad_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $madName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblMadetoorderQuery The current query, for fluid interface
     */
    public function filterByMadName($madName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($madName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $madName)) {
                $madName = str_replace('*', '%', $madName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblMadetoorderTableMap::COL_MAD_NAME, $madName, $comparison);
    }

    /**
     * Filter the query on the mad_email column
     *
     * Example usage:
     * <code>
     * $query->filterByMadEmail('fooValue');   // WHERE mad_email = 'fooValue'
     * $query->filterByMadEmail('%fooValue%'); // WHERE mad_email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $madEmail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblMadetoorderQuery The current query, for fluid interface
     */
    public function filterByMadEmail($madEmail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($madEmail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $madEmail)) {
                $madEmail = str_replace('*', '%', $madEmail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblMadetoorderTableMap::COL_MAD_EMAIL, $madEmail, $comparison);
    }

    /**
     * Filter the query on the mad_color column
     *
     * Example usage:
     * <code>
     * $query->filterByMadColor('fooValue');   // WHERE mad_color = 'fooValue'
     * $query->filterByMadColor('%fooValue%'); // WHERE mad_color LIKE '%fooValue%'
     * </code>
     *
     * @param     string $madColor The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblMadetoorderQuery The current query, for fluid interface
     */
    public function filterByMadColor($madColor = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($madColor)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $madColor)) {
                $madColor = str_replace('*', '%', $madColor);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblMadetoorderTableMap::COL_MAD_COLOR, $madColor, $comparison);
    }

    /**
     * Filter the query on the mad_length column
     *
     * Example usage:
     * <code>
     * $query->filterByMadLength('fooValue');   // WHERE mad_length = 'fooValue'
     * $query->filterByMadLength('%fooValue%'); // WHERE mad_length LIKE '%fooValue%'
     * </code>
     *
     * @param     string $madLength The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblMadetoorderQuery The current query, for fluid interface
     */
    public function filterByMadLength($madLength = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($madLength)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $madLength)) {
                $madLength = str_replace('*', '%', $madLength);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblMadetoorderTableMap::COL_MAD_LENGTH, $madLength, $comparison);
    }

    /**
     * Filter the query on the mad_mark column
     *
     * Example usage:
     * <code>
     * $query->filterByMadMark('fooValue');   // WHERE mad_mark = 'fooValue'
     * $query->filterByMadMark('%fooValue%'); // WHERE mad_mark LIKE '%fooValue%'
     * </code>
     *
     * @param     string $madMark The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblMadetoorderQuery The current query, for fluid interface
     */
    public function filterByMadMark($madMark = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($madMark)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $madMark)) {
                $madMark = str_replace('*', '%', $madMark);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblMadetoorderTableMap::COL_MAD_MARK, $madMark, $comparison);
    }

    /**
     * Filter the query on the mad_rem column
     *
     * Example usage:
     * <code>
     * $query->filterByMadRem('fooValue');   // WHERE mad_rem = 'fooValue'
     * $query->filterByMadRem('%fooValue%'); // WHERE mad_rem LIKE '%fooValue%'
     * </code>
     *
     * @param     string $madRem The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblMadetoorderQuery The current query, for fluid interface
     */
    public function filterByMadRem($madRem = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($madRem)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $madRem)) {
                $madRem = str_replace('*', '%', $madRem);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblMadetoorderTableMap::COL_MAD_REM, $madRem, $comparison);
    }

    /**
     * Filter the query on the mad_url column
     *
     * Example usage:
     * <code>
     * $query->filterByMadUrl('fooValue');   // WHERE mad_url = 'fooValue'
     * $query->filterByMadUrl('%fooValue%'); // WHERE mad_url LIKE '%fooValue%'
     * </code>
     *
     * @param     string $madUrl The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblMadetoorderQuery The current query, for fluid interface
     */
    public function filterByMadUrl($madUrl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($madUrl)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $madUrl)) {
                $madUrl = str_replace('*', '%', $madUrl);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblMadetoorderTableMap::COL_MAD_URL, $madUrl, $comparison);
    }

    /**
     * Filter the query on the mad_photo column
     *
     * Example usage:
     * <code>
     * $query->filterByMadPhoto('fooValue');   // WHERE mad_photo = 'fooValue'
     * $query->filterByMadPhoto('%fooValue%'); // WHERE mad_photo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $madPhoto The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblMadetoorderQuery The current query, for fluid interface
     */
    public function filterByMadPhoto($madPhoto = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($madPhoto)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $madPhoto)) {
                $madPhoto = str_replace('*', '%', $madPhoto);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblMadetoorderTableMap::COL_MAD_PHOTO, $madPhoto, $comparison);
    }

    /**
     * Filter the query on the mad_photo2 column
     *
     * Example usage:
     * <code>
     * $query->filterByMadPhoto2('fooValue');   // WHERE mad_photo2 = 'fooValue'
     * $query->filterByMadPhoto2('%fooValue%'); // WHERE mad_photo2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $madPhoto2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblMadetoorderQuery The current query, for fluid interface
     */
    public function filterByMadPhoto2($madPhoto2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($madPhoto2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $madPhoto2)) {
                $madPhoto2 = str_replace('*', '%', $madPhoto2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblMadetoorderTableMap::COL_MAD_PHOTO2, $madPhoto2, $comparison);
    }

    /**
     * Filter the query on the mad_photo3 column
     *
     * Example usage:
     * <code>
     * $query->filterByMadPhoto3('fooValue');   // WHERE mad_photo3 = 'fooValue'
     * $query->filterByMadPhoto3('%fooValue%'); // WHERE mad_photo3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $madPhoto3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblMadetoorderQuery The current query, for fluid interface
     */
    public function filterByMadPhoto3($madPhoto3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($madPhoto3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $madPhoto3)) {
                $madPhoto3 = str_replace('*', '%', $madPhoto3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblMadetoorderTableMap::COL_MAD_PHOTO3, $madPhoto3, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildTblMadetoorder $tblMadetoorder Object to remove from the list of results
     *
     * @return $this|ChildTblMadetoorderQuery The current query, for fluid interface
     */
    public function prune($tblMadetoorder = null)
    {
        if ($tblMadetoorder) {
            $this->addUsingAlias(TblMadetoorderTableMap::COL_MAD_ID, $tblMadetoorder->getMadId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the tbl_madetoorder table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TblMadetoorderTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            TblMadetoorderTableMap::clearInstancePool();
            TblMadetoorderTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(TblMadetoorderTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(TblMadetoorderTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            TblMadetoorderTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            TblMadetoorderTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // TblMadetoorderQuery
