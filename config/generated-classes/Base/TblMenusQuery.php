<?php

namespace Base;

use \TblMenus as ChildTblMenus;
use \TblMenusQuery as ChildTblMenusQuery;
use \Exception;
use \PDO;
use Map\TblMenusTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'tbl_menus' table.
 *
 * 
 *
 * @method     ChildTblMenusQuery orderByMenuId($order = Criteria::ASC) Order by the menu_id column
 * @method     ChildTblMenusQuery orderByMenuAlias($order = Criteria::ASC) Order by the menu_alias column
 * @method     ChildTblMenusQuery orderByMenuName($order = Criteria::ASC) Order by the menu_name column
 * @method     ChildTblMenusQuery orderByMenuStatus($order = Criteria::ASC) Order by the menu_status column
 * @method     ChildTblMenusQuery orderByMenuTitle($order = Criteria::ASC) Order by the menu_title column
 * @method     ChildTblMenusQuery orderByMenuDescription($order = Criteria::ASC) Order by the menu_description column
 * @method     ChildTblMenusQuery orderByMenuWriteup($order = Criteria::ASC) Order by the menu_writeup column
 * @method     ChildTblMenusQuery orderByMenuStatusPa($order = Criteria::ASC) Order by the menu_status_pa column
 * @method     ChildTblMenusQuery orderByMenuDescriptionPa($order = Criteria::ASC) Order by the menu_description_pa column
 * @method     ChildTblMenusQuery orderByMenuWriteupPa($order = Criteria::ASC) Order by the menu_writeup_pa column
 * @method     ChildTblMenusQuery orderByMenuStatusM3($order = Criteria::ASC) Order by the menu_status_m3 column
 * @method     ChildTblMenusQuery orderByMenuDescriptionM3($order = Criteria::ASC) Order by the menu_description_m3 column
 * @method     ChildTblMenusQuery orderByMenuWriteupM3($order = Criteria::ASC) Order by the menu_writeup_m3 column
 * @method     ChildTblMenusQuery orderByMenuWriteupkeywords($order = Criteria::ASC) Order by the menu_writeupkeywords column
 * @method     ChildTblMenusQuery orderByMenuWriteupkeywordsPa($order = Criteria::ASC) Order by the menu_writeupkeywords_pa column
 * @method     ChildTblMenusQuery orderByMenuWriteupkeywordsM3($order = Criteria::ASC) Order by the menu_writeupkeywords_m3 column
 *
 * @method     ChildTblMenusQuery groupByMenuId() Group by the menu_id column
 * @method     ChildTblMenusQuery groupByMenuAlias() Group by the menu_alias column
 * @method     ChildTblMenusQuery groupByMenuName() Group by the menu_name column
 * @method     ChildTblMenusQuery groupByMenuStatus() Group by the menu_status column
 * @method     ChildTblMenusQuery groupByMenuTitle() Group by the menu_title column
 * @method     ChildTblMenusQuery groupByMenuDescription() Group by the menu_description column
 * @method     ChildTblMenusQuery groupByMenuWriteup() Group by the menu_writeup column
 * @method     ChildTblMenusQuery groupByMenuStatusPa() Group by the menu_status_pa column
 * @method     ChildTblMenusQuery groupByMenuDescriptionPa() Group by the menu_description_pa column
 * @method     ChildTblMenusQuery groupByMenuWriteupPa() Group by the menu_writeup_pa column
 * @method     ChildTblMenusQuery groupByMenuStatusM3() Group by the menu_status_m3 column
 * @method     ChildTblMenusQuery groupByMenuDescriptionM3() Group by the menu_description_m3 column
 * @method     ChildTblMenusQuery groupByMenuWriteupM3() Group by the menu_writeup_m3 column
 * @method     ChildTblMenusQuery groupByMenuWriteupkeywords() Group by the menu_writeupkeywords column
 * @method     ChildTblMenusQuery groupByMenuWriteupkeywordsPa() Group by the menu_writeupkeywords_pa column
 * @method     ChildTblMenusQuery groupByMenuWriteupkeywordsM3() Group by the menu_writeupkeywords_m3 column
 *
 * @method     ChildTblMenusQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildTblMenusQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildTblMenusQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildTblMenusQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildTblMenusQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildTblMenusQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildTblMenusQuery leftJoinTblProdInfo($relationAlias = null) Adds a LEFT JOIN clause to the query using the TblProdInfo relation
 * @method     ChildTblMenusQuery rightJoinTblProdInfo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TblProdInfo relation
 * @method     ChildTblMenusQuery innerJoinTblProdInfo($relationAlias = null) Adds a INNER JOIN clause to the query using the TblProdInfo relation
 *
 * @method     ChildTblMenusQuery joinWithTblProdInfo($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the TblProdInfo relation
 *
 * @method     ChildTblMenusQuery leftJoinWithTblProdInfo() Adds a LEFT JOIN clause and with to the query using the TblProdInfo relation
 * @method     ChildTblMenusQuery rightJoinWithTblProdInfo() Adds a RIGHT JOIN clause and with to the query using the TblProdInfo relation
 * @method     ChildTblMenusQuery innerJoinWithTblProdInfo() Adds a INNER JOIN clause and with to the query using the TblProdInfo relation
 *
 * @method     \TblProdInfoQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildTblMenus findOne(ConnectionInterface $con = null) Return the first ChildTblMenus matching the query
 * @method     ChildTblMenus findOneOrCreate(ConnectionInterface $con = null) Return the first ChildTblMenus matching the query, or a new ChildTblMenus object populated from the query conditions when no match is found
 *
 * @method     ChildTblMenus findOneByMenuId(int $menu_id) Return the first ChildTblMenus filtered by the menu_id column
 * @method     ChildTblMenus findOneByMenuAlias(string $menu_alias) Return the first ChildTblMenus filtered by the menu_alias column
 * @method     ChildTblMenus findOneByMenuName(string $menu_name) Return the first ChildTblMenus filtered by the menu_name column
 * @method     ChildTblMenus findOneByMenuStatus(string $menu_status) Return the first ChildTblMenus filtered by the menu_status column
 * @method     ChildTblMenus findOneByMenuTitle(string $menu_title) Return the first ChildTblMenus filtered by the menu_title column
 * @method     ChildTblMenus findOneByMenuDescription(string $menu_description) Return the first ChildTblMenus filtered by the menu_description column
 * @method     ChildTblMenus findOneByMenuWriteup(string $menu_writeup) Return the first ChildTblMenus filtered by the menu_writeup column
 * @method     ChildTblMenus findOneByMenuStatusPa(string $menu_status_pa) Return the first ChildTblMenus filtered by the menu_status_pa column
 * @method     ChildTblMenus findOneByMenuDescriptionPa(string $menu_description_pa) Return the first ChildTblMenus filtered by the menu_description_pa column
 * @method     ChildTblMenus findOneByMenuWriteupPa(string $menu_writeup_pa) Return the first ChildTblMenus filtered by the menu_writeup_pa column
 * @method     ChildTblMenus findOneByMenuStatusM3(string $menu_status_m3) Return the first ChildTblMenus filtered by the menu_status_m3 column
 * @method     ChildTblMenus findOneByMenuDescriptionM3(string $menu_description_m3) Return the first ChildTblMenus filtered by the menu_description_m3 column
 * @method     ChildTblMenus findOneByMenuWriteupM3(string $menu_writeup_m3) Return the first ChildTblMenus filtered by the menu_writeup_m3 column
 * @method     ChildTblMenus findOneByMenuWriteupkeywords(string $menu_writeupkeywords) Return the first ChildTblMenus filtered by the menu_writeupkeywords column
 * @method     ChildTblMenus findOneByMenuWriteupkeywordsPa(string $menu_writeupkeywords_pa) Return the first ChildTblMenus filtered by the menu_writeupkeywords_pa column
 * @method     ChildTblMenus findOneByMenuWriteupkeywordsM3(string $menu_writeupkeywords_m3) Return the first ChildTblMenus filtered by the menu_writeupkeywords_m3 column *

 * @method     ChildTblMenus requirePk($key, ConnectionInterface $con = null) Return the ChildTblMenus by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblMenus requireOne(ConnectionInterface $con = null) Return the first ChildTblMenus matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTblMenus requireOneByMenuId(int $menu_id) Return the first ChildTblMenus filtered by the menu_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblMenus requireOneByMenuAlias(string $menu_alias) Return the first ChildTblMenus filtered by the menu_alias column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblMenus requireOneByMenuName(string $menu_name) Return the first ChildTblMenus filtered by the menu_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblMenus requireOneByMenuStatus(string $menu_status) Return the first ChildTblMenus filtered by the menu_status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblMenus requireOneByMenuTitle(string $menu_title) Return the first ChildTblMenus filtered by the menu_title column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblMenus requireOneByMenuDescription(string $menu_description) Return the first ChildTblMenus filtered by the menu_description column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblMenus requireOneByMenuWriteup(string $menu_writeup) Return the first ChildTblMenus filtered by the menu_writeup column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblMenus requireOneByMenuStatusPa(string $menu_status_pa) Return the first ChildTblMenus filtered by the menu_status_pa column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblMenus requireOneByMenuDescriptionPa(string $menu_description_pa) Return the first ChildTblMenus filtered by the menu_description_pa column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblMenus requireOneByMenuWriteupPa(string $menu_writeup_pa) Return the first ChildTblMenus filtered by the menu_writeup_pa column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblMenus requireOneByMenuStatusM3(string $menu_status_m3) Return the first ChildTblMenus filtered by the menu_status_m3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblMenus requireOneByMenuDescriptionM3(string $menu_description_m3) Return the first ChildTblMenus filtered by the menu_description_m3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblMenus requireOneByMenuWriteupM3(string $menu_writeup_m3) Return the first ChildTblMenus filtered by the menu_writeup_m3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblMenus requireOneByMenuWriteupkeywords(string $menu_writeupkeywords) Return the first ChildTblMenus filtered by the menu_writeupkeywords column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblMenus requireOneByMenuWriteupkeywordsPa(string $menu_writeupkeywords_pa) Return the first ChildTblMenus filtered by the menu_writeupkeywords_pa column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblMenus requireOneByMenuWriteupkeywordsM3(string $menu_writeupkeywords_m3) Return the first ChildTblMenus filtered by the menu_writeupkeywords_m3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTblMenus[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildTblMenus objects based on current ModelCriteria
 * @method     ChildTblMenus[]|ObjectCollection findByMenuId(int $menu_id) Return ChildTblMenus objects filtered by the menu_id column
 * @method     ChildTblMenus[]|ObjectCollection findByMenuAlias(string $menu_alias) Return ChildTblMenus objects filtered by the menu_alias column
 * @method     ChildTblMenus[]|ObjectCollection findByMenuName(string $menu_name) Return ChildTblMenus objects filtered by the menu_name column
 * @method     ChildTblMenus[]|ObjectCollection findByMenuStatus(string $menu_status) Return ChildTblMenus objects filtered by the menu_status column
 * @method     ChildTblMenus[]|ObjectCollection findByMenuTitle(string $menu_title) Return ChildTblMenus objects filtered by the menu_title column
 * @method     ChildTblMenus[]|ObjectCollection findByMenuDescription(string $menu_description) Return ChildTblMenus objects filtered by the menu_description column
 * @method     ChildTblMenus[]|ObjectCollection findByMenuWriteup(string $menu_writeup) Return ChildTblMenus objects filtered by the menu_writeup column
 * @method     ChildTblMenus[]|ObjectCollection findByMenuStatusPa(string $menu_status_pa) Return ChildTblMenus objects filtered by the menu_status_pa column
 * @method     ChildTblMenus[]|ObjectCollection findByMenuDescriptionPa(string $menu_description_pa) Return ChildTblMenus objects filtered by the menu_description_pa column
 * @method     ChildTblMenus[]|ObjectCollection findByMenuWriteupPa(string $menu_writeup_pa) Return ChildTblMenus objects filtered by the menu_writeup_pa column
 * @method     ChildTblMenus[]|ObjectCollection findByMenuStatusM3(string $menu_status_m3) Return ChildTblMenus objects filtered by the menu_status_m3 column
 * @method     ChildTblMenus[]|ObjectCollection findByMenuDescriptionM3(string $menu_description_m3) Return ChildTblMenus objects filtered by the menu_description_m3 column
 * @method     ChildTblMenus[]|ObjectCollection findByMenuWriteupM3(string $menu_writeup_m3) Return ChildTblMenus objects filtered by the menu_writeup_m3 column
 * @method     ChildTblMenus[]|ObjectCollection findByMenuWriteupkeywords(string $menu_writeupkeywords) Return ChildTblMenus objects filtered by the menu_writeupkeywords column
 * @method     ChildTblMenus[]|ObjectCollection findByMenuWriteupkeywordsPa(string $menu_writeupkeywords_pa) Return ChildTblMenus objects filtered by the menu_writeupkeywords_pa column
 * @method     ChildTblMenus[]|ObjectCollection findByMenuWriteupkeywordsM3(string $menu_writeupkeywords_m3) Return ChildTblMenus objects filtered by the menu_writeupkeywords_m3 column
 * @method     ChildTblMenus[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class TblMenusQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\TblMenusQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpm', $modelName = '\\TblMenus', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildTblMenusQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildTblMenusQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildTblMenusQuery) {
            return $criteria;
        }
        $query = new ChildTblMenusQuery();
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
     * @return ChildTblMenus|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TblMenusTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(TblMenusTableMap::DATABASE_NAME);
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
     * @return ChildTblMenus A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT menu_id, menu_alias, menu_name, menu_status, menu_title, menu_description, menu_writeup, menu_status_pa, menu_description_pa, menu_writeup_pa, menu_status_m3, menu_description_m3, menu_writeup_m3, menu_writeupkeywords, menu_writeupkeywords_pa, menu_writeupkeywords_m3 FROM tbl_menus WHERE menu_id = :p0';
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
            /** @var ChildTblMenus $obj */
            $obj = new ChildTblMenus();
            $obj->hydrate($row);
            TblMenusTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildTblMenus|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildTblMenusQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TblMenusTableMap::COL_MENU_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildTblMenusQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TblMenusTableMap::COL_MENU_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the menu_id column
     *
     * Example usage:
     * <code>
     * $query->filterByMenuId(1234); // WHERE menu_id = 1234
     * $query->filterByMenuId(array(12, 34)); // WHERE menu_id IN (12, 34)
     * $query->filterByMenuId(array('min' => 12)); // WHERE menu_id > 12
     * </code>
     *
     * @param     mixed $menuId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblMenusQuery The current query, for fluid interface
     */
    public function filterByMenuId($menuId = null, $comparison = null)
    {
        if (is_array($menuId)) {
            $useMinMax = false;
            if (isset($menuId['min'])) {
                $this->addUsingAlias(TblMenusTableMap::COL_MENU_ID, $menuId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($menuId['max'])) {
                $this->addUsingAlias(TblMenusTableMap::COL_MENU_ID, $menuId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblMenusTableMap::COL_MENU_ID, $menuId, $comparison);
    }

    /**
     * Filter the query on the menu_alias column
     *
     * Example usage:
     * <code>
     * $query->filterByMenuAlias('fooValue');   // WHERE menu_alias = 'fooValue'
     * $query->filterByMenuAlias('%fooValue%'); // WHERE menu_alias LIKE '%fooValue%'
     * </code>
     *
     * @param     string $menuAlias The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblMenusQuery The current query, for fluid interface
     */
    public function filterByMenuAlias($menuAlias = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($menuAlias)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $menuAlias)) {
                $menuAlias = str_replace('*', '%', $menuAlias);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblMenusTableMap::COL_MENU_ALIAS, $menuAlias, $comparison);
    }

    /**
     * Filter the query on the menu_name column
     *
     * Example usage:
     * <code>
     * $query->filterByMenuName('fooValue');   // WHERE menu_name = 'fooValue'
     * $query->filterByMenuName('%fooValue%'); // WHERE menu_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $menuName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblMenusQuery The current query, for fluid interface
     */
    public function filterByMenuName($menuName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($menuName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $menuName)) {
                $menuName = str_replace('*', '%', $menuName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblMenusTableMap::COL_MENU_NAME, $menuName, $comparison);
    }

    /**
     * Filter the query on the menu_status column
     *
     * Example usage:
     * <code>
     * $query->filterByMenuStatus('fooValue');   // WHERE menu_status = 'fooValue'
     * $query->filterByMenuStatus('%fooValue%'); // WHERE menu_status LIKE '%fooValue%'
     * </code>
     *
     * @param     string $menuStatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblMenusQuery The current query, for fluid interface
     */
    public function filterByMenuStatus($menuStatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($menuStatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $menuStatus)) {
                $menuStatus = str_replace('*', '%', $menuStatus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblMenusTableMap::COL_MENU_STATUS, $menuStatus, $comparison);
    }

    /**
     * Filter the query on the menu_title column
     *
     * Example usage:
     * <code>
     * $query->filterByMenuTitle('fooValue');   // WHERE menu_title = 'fooValue'
     * $query->filterByMenuTitle('%fooValue%'); // WHERE menu_title LIKE '%fooValue%'
     * </code>
     *
     * @param     string $menuTitle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblMenusQuery The current query, for fluid interface
     */
    public function filterByMenuTitle($menuTitle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($menuTitle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $menuTitle)) {
                $menuTitle = str_replace('*', '%', $menuTitle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblMenusTableMap::COL_MENU_TITLE, $menuTitle, $comparison);
    }

    /**
     * Filter the query on the menu_description column
     *
     * Example usage:
     * <code>
     * $query->filterByMenuDescription('fooValue');   // WHERE menu_description = 'fooValue'
     * $query->filterByMenuDescription('%fooValue%'); // WHERE menu_description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $menuDescription The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblMenusQuery The current query, for fluid interface
     */
    public function filterByMenuDescription($menuDescription = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($menuDescription)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $menuDescription)) {
                $menuDescription = str_replace('*', '%', $menuDescription);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblMenusTableMap::COL_MENU_DESCRIPTION, $menuDescription, $comparison);
    }

    /**
     * Filter the query on the menu_writeup column
     *
     * Example usage:
     * <code>
     * $query->filterByMenuWriteup('fooValue');   // WHERE menu_writeup = 'fooValue'
     * $query->filterByMenuWriteup('%fooValue%'); // WHERE menu_writeup LIKE '%fooValue%'
     * </code>
     *
     * @param     string $menuWriteup The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblMenusQuery The current query, for fluid interface
     */
    public function filterByMenuWriteup($menuWriteup = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($menuWriteup)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $menuWriteup)) {
                $menuWriteup = str_replace('*', '%', $menuWriteup);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblMenusTableMap::COL_MENU_WRITEUP, $menuWriteup, $comparison);
    }

    /**
     * Filter the query on the menu_status_pa column
     *
     * Example usage:
     * <code>
     * $query->filterByMenuStatusPa('fooValue');   // WHERE menu_status_pa = 'fooValue'
     * $query->filterByMenuStatusPa('%fooValue%'); // WHERE menu_status_pa LIKE '%fooValue%'
     * </code>
     *
     * @param     string $menuStatusPa The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblMenusQuery The current query, for fluid interface
     */
    public function filterByMenuStatusPa($menuStatusPa = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($menuStatusPa)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $menuStatusPa)) {
                $menuStatusPa = str_replace('*', '%', $menuStatusPa);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblMenusTableMap::COL_MENU_STATUS_PA, $menuStatusPa, $comparison);
    }

    /**
     * Filter the query on the menu_description_pa column
     *
     * Example usage:
     * <code>
     * $query->filterByMenuDescriptionPa('fooValue');   // WHERE menu_description_pa = 'fooValue'
     * $query->filterByMenuDescriptionPa('%fooValue%'); // WHERE menu_description_pa LIKE '%fooValue%'
     * </code>
     *
     * @param     string $menuDescriptionPa The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblMenusQuery The current query, for fluid interface
     */
    public function filterByMenuDescriptionPa($menuDescriptionPa = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($menuDescriptionPa)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $menuDescriptionPa)) {
                $menuDescriptionPa = str_replace('*', '%', $menuDescriptionPa);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblMenusTableMap::COL_MENU_DESCRIPTION_PA, $menuDescriptionPa, $comparison);
    }

    /**
     * Filter the query on the menu_writeup_pa column
     *
     * Example usage:
     * <code>
     * $query->filterByMenuWriteupPa('fooValue');   // WHERE menu_writeup_pa = 'fooValue'
     * $query->filterByMenuWriteupPa('%fooValue%'); // WHERE menu_writeup_pa LIKE '%fooValue%'
     * </code>
     *
     * @param     string $menuWriteupPa The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblMenusQuery The current query, for fluid interface
     */
    public function filterByMenuWriteupPa($menuWriteupPa = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($menuWriteupPa)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $menuWriteupPa)) {
                $menuWriteupPa = str_replace('*', '%', $menuWriteupPa);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblMenusTableMap::COL_MENU_WRITEUP_PA, $menuWriteupPa, $comparison);
    }

    /**
     * Filter the query on the menu_status_m3 column
     *
     * Example usage:
     * <code>
     * $query->filterByMenuStatusM3('fooValue');   // WHERE menu_status_m3 = 'fooValue'
     * $query->filterByMenuStatusM3('%fooValue%'); // WHERE menu_status_m3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $menuStatusM3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblMenusQuery The current query, for fluid interface
     */
    public function filterByMenuStatusM3($menuStatusM3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($menuStatusM3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $menuStatusM3)) {
                $menuStatusM3 = str_replace('*', '%', $menuStatusM3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblMenusTableMap::COL_MENU_STATUS_M3, $menuStatusM3, $comparison);
    }

    /**
     * Filter the query on the menu_description_m3 column
     *
     * Example usage:
     * <code>
     * $query->filterByMenuDescriptionM3('fooValue');   // WHERE menu_description_m3 = 'fooValue'
     * $query->filterByMenuDescriptionM3('%fooValue%'); // WHERE menu_description_m3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $menuDescriptionM3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblMenusQuery The current query, for fluid interface
     */
    public function filterByMenuDescriptionM3($menuDescriptionM3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($menuDescriptionM3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $menuDescriptionM3)) {
                $menuDescriptionM3 = str_replace('*', '%', $menuDescriptionM3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblMenusTableMap::COL_MENU_DESCRIPTION_M3, $menuDescriptionM3, $comparison);
    }

    /**
     * Filter the query on the menu_writeup_m3 column
     *
     * Example usage:
     * <code>
     * $query->filterByMenuWriteupM3('fooValue');   // WHERE menu_writeup_m3 = 'fooValue'
     * $query->filterByMenuWriteupM3('%fooValue%'); // WHERE menu_writeup_m3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $menuWriteupM3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblMenusQuery The current query, for fluid interface
     */
    public function filterByMenuWriteupM3($menuWriteupM3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($menuWriteupM3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $menuWriteupM3)) {
                $menuWriteupM3 = str_replace('*', '%', $menuWriteupM3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblMenusTableMap::COL_MENU_WRITEUP_M3, $menuWriteupM3, $comparison);
    }

    /**
     * Filter the query on the menu_writeupkeywords column
     *
     * Example usage:
     * <code>
     * $query->filterByMenuWriteupkeywords('fooValue');   // WHERE menu_writeupkeywords = 'fooValue'
     * $query->filterByMenuWriteupkeywords('%fooValue%'); // WHERE menu_writeupkeywords LIKE '%fooValue%'
     * </code>
     *
     * @param     string $menuWriteupkeywords The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblMenusQuery The current query, for fluid interface
     */
    public function filterByMenuWriteupkeywords($menuWriteupkeywords = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($menuWriteupkeywords)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $menuWriteupkeywords)) {
                $menuWriteupkeywords = str_replace('*', '%', $menuWriteupkeywords);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblMenusTableMap::COL_MENU_WRITEUPKEYWORDS, $menuWriteupkeywords, $comparison);
    }

    /**
     * Filter the query on the menu_writeupkeywords_pa column
     *
     * Example usage:
     * <code>
     * $query->filterByMenuWriteupkeywordsPa('fooValue');   // WHERE menu_writeupkeywords_pa = 'fooValue'
     * $query->filterByMenuWriteupkeywordsPa('%fooValue%'); // WHERE menu_writeupkeywords_pa LIKE '%fooValue%'
     * </code>
     *
     * @param     string $menuWriteupkeywordsPa The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblMenusQuery The current query, for fluid interface
     */
    public function filterByMenuWriteupkeywordsPa($menuWriteupkeywordsPa = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($menuWriteupkeywordsPa)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $menuWriteupkeywordsPa)) {
                $menuWriteupkeywordsPa = str_replace('*', '%', $menuWriteupkeywordsPa);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblMenusTableMap::COL_MENU_WRITEUPKEYWORDS_PA, $menuWriteupkeywordsPa, $comparison);
    }

    /**
     * Filter the query on the menu_writeupkeywords_m3 column
     *
     * Example usage:
     * <code>
     * $query->filterByMenuWriteupkeywordsM3('fooValue');   // WHERE menu_writeupkeywords_m3 = 'fooValue'
     * $query->filterByMenuWriteupkeywordsM3('%fooValue%'); // WHERE menu_writeupkeywords_m3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $menuWriteupkeywordsM3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblMenusQuery The current query, for fluid interface
     */
    public function filterByMenuWriteupkeywordsM3($menuWriteupkeywordsM3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($menuWriteupkeywordsM3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $menuWriteupkeywordsM3)) {
                $menuWriteupkeywordsM3 = str_replace('*', '%', $menuWriteupkeywordsM3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblMenusTableMap::COL_MENU_WRITEUPKEYWORDS_M3, $menuWriteupkeywordsM3, $comparison);
    }

    /**
     * Filter the query by a related \TblProdInfo object
     *
     * @param \TblProdInfo|ObjectCollection $tblProdInfo the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildTblMenusQuery The current query, for fluid interface
     */
    public function filterByTblProdInfo($tblProdInfo, $comparison = null)
    {
        if ($tblProdInfo instanceof \TblProdInfo) {
            return $this
                ->addUsingAlias(TblMenusTableMap::COL_MENU_ALIAS, $tblProdInfo->getProdCategory(), $comparison);
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
     * @return $this|ChildTblMenusQuery The current query, for fluid interface
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
     * @param   ChildTblMenus $tblMenus Object to remove from the list of results
     *
     * @return $this|ChildTblMenusQuery The current query, for fluid interface
     */
    public function prune($tblMenus = null)
    {
        if ($tblMenus) {
            $this->addUsingAlias(TblMenusTableMap::COL_MENU_ID, $tblMenus->getMenuId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the tbl_menus table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TblMenusTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            TblMenusTableMap::clearInstancePool();
            TblMenusTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(TblMenusTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(TblMenusTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            
            TblMenusTableMap::removeInstanceFromPool($criteria);
        
            $affectedRows += ModelCriteria::delete($con);
            TblMenusTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // TblMenusQuery
