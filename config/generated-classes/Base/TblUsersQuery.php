<?php

namespace Base;

use \TblUsers as ChildTblUsers;
use \TblUsersQuery as ChildTblUsersQuery;
use \Exception;
use \PDO;
use Map\TblUsersTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'tbl_users' table.
 *
 * 
 *
 * @method     ChildTblUsersQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     ChildTblUsersQuery orderByUserUsername($order = Criteria::ASC) Order by the user_username column
 * @method     ChildTblUsersQuery orderByUserPassword($order = Criteria::ASC) Order by the user_password column
 * @method     ChildTblUsersQuery orderByUserLastlogin($order = Criteria::ASC) Order by the user_lastlogin column
 *
 * @method     ChildTblUsersQuery groupByUserId() Group by the user_id column
 * @method     ChildTblUsersQuery groupByUserUsername() Group by the user_username column
 * @method     ChildTblUsersQuery groupByUserPassword() Group by the user_password column
 * @method     ChildTblUsersQuery groupByUserLastlogin() Group by the user_lastlogin column
 *
 * @method     ChildTblUsersQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildTblUsersQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildTblUsersQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildTblUsersQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildTblUsersQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildTblUsersQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildTblUsers findOne(ConnectionInterface $con = null) Return the first ChildTblUsers matching the query
 * @method     ChildTblUsers findOneOrCreate(ConnectionInterface $con = null) Return the first ChildTblUsers matching the query, or a new ChildTblUsers object populated from the query conditions when no match is found
 *
 * @method     ChildTblUsers findOneByUserId(int $user_id) Return the first ChildTblUsers filtered by the user_id column
 * @method     ChildTblUsers findOneByUserUsername(string $user_username) Return the first ChildTblUsers filtered by the user_username column
 * @method     ChildTblUsers findOneByUserPassword(string $user_password) Return the first ChildTblUsers filtered by the user_password column
 * @method     ChildTblUsers findOneByUserLastlogin(string $user_lastlogin) Return the first ChildTblUsers filtered by the user_lastlogin column *

 * @method     ChildTblUsers requirePk($key, ConnectionInterface $con = null) Return the ChildTblUsers by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblUsers requireOne(ConnectionInterface $con = null) Return the first ChildTblUsers matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTblUsers requireOneByUserId(int $user_id) Return the first ChildTblUsers filtered by the user_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblUsers requireOneByUserUsername(string $user_username) Return the first ChildTblUsers filtered by the user_username column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblUsers requireOneByUserPassword(string $user_password) Return the first ChildTblUsers filtered by the user_password column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblUsers requireOneByUserLastlogin(string $user_lastlogin) Return the first ChildTblUsers filtered by the user_lastlogin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTblUsers[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildTblUsers objects based on current ModelCriteria
 * @method     ChildTblUsers[]|ObjectCollection findByUserId(int $user_id) Return ChildTblUsers objects filtered by the user_id column
 * @method     ChildTblUsers[]|ObjectCollection findByUserUsername(string $user_username) Return ChildTblUsers objects filtered by the user_username column
 * @method     ChildTblUsers[]|ObjectCollection findByUserPassword(string $user_password) Return ChildTblUsers objects filtered by the user_password column
 * @method     ChildTblUsers[]|ObjectCollection findByUserLastlogin(string $user_lastlogin) Return ChildTblUsers objects filtered by the user_lastlogin column
 * @method     ChildTblUsers[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class TblUsersQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\TblUsersQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpm', $modelName = '\\TblUsers', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildTblUsersQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildTblUsersQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildTblUsersQuery) {
            return $criteria;
        }
        $query = new ChildTblUsersQuery();
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
     * @return ChildTblUsers|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TblUsersTableMap::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(TblUsersTableMap::DATABASE_NAME);
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
     * @return ChildTblUsers A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT user_id, user_username, user_password, user_lastlogin FROM tbl_users WHERE user_id = :p0';
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
            /** @var ChildTblUsers $obj */
            $obj = new ChildTblUsers();
            $obj->hydrate($row);
            TblUsersTableMap::addInstanceToPool($obj, (string) $key);
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
     * @return ChildTblUsers|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildTblUsersQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TblUsersTableMap::COL_USER_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildTblUsersQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TblUsersTableMap::COL_USER_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the user_id column
     *
     * Example usage:
     * <code>
     * $query->filterByUserId(1234); // WHERE user_id = 1234
     * $query->filterByUserId(array(12, 34)); // WHERE user_id IN (12, 34)
     * $query->filterByUserId(array('min' => 12)); // WHERE user_id > 12
     * </code>
     *
     * @param     mixed $userId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblUsersQuery The current query, for fluid interface
     */
    public function filterByUserId($userId = null, $comparison = null)
    {
        if (is_array($userId)) {
            $useMinMax = false;
            if (isset($userId['min'])) {
                $this->addUsingAlias(TblUsersTableMap::COL_USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userId['max'])) {
                $this->addUsingAlias(TblUsersTableMap::COL_USER_ID, $userId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblUsersTableMap::COL_USER_ID, $userId, $comparison);
    }

    /**
     * Filter the query on the user_username column
     *
     * Example usage:
     * <code>
     * $query->filterByUserUsername('fooValue');   // WHERE user_username = 'fooValue'
     * $query->filterByUserUsername('%fooValue%'); // WHERE user_username LIKE '%fooValue%'
     * </code>
     *
     * @param     string $userUsername The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblUsersQuery The current query, for fluid interface
     */
    public function filterByUserUsername($userUsername = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($userUsername)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $userUsername)) {
                $userUsername = str_replace('*', '%', $userUsername);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblUsersTableMap::COL_USER_USERNAME, $userUsername, $comparison);
    }

    /**
     * Filter the query on the user_password column
     *
     * Example usage:
     * <code>
     * $query->filterByUserPassword('fooValue');   // WHERE user_password = 'fooValue'
     * $query->filterByUserPassword('%fooValue%'); // WHERE user_password LIKE '%fooValue%'
     * </code>
     *
     * @param     string $userPassword The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblUsersQuery The current query, for fluid interface
     */
    public function filterByUserPassword($userPassword = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($userPassword)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $userPassword)) {
                $userPassword = str_replace('*', '%', $userPassword);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblUsersTableMap::COL_USER_PASSWORD, $userPassword, $comparison);
    }

    /**
     * Filter the query on the user_lastlogin column
     *
     * Example usage:
     * <code>
     * $query->filterByUserLastlogin('fooValue');   // WHERE user_lastlogin = 'fooValue'
     * $query->filterByUserLastlogin('%fooValue%'); // WHERE user_lastlogin LIKE '%fooValue%'
     * </code>
     *
     * @param     string $userLastlogin The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblUsersQuery The current query, for fluid interface
     */
    public function filterByUserLastlogin($userLastlogin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($userLastlogin)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $userLastlogin)) {
                $userLastlogin = str_replace('*', '%', $userLastlogin);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblUsersTableMap::COL_USER_LASTLOGIN, $userLastlogin, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildTblUsers $tblUsers Object to remove from the list of results
     *
     * @return $this|ChildTblUsersQuery The current query, for fluid interface
     */
    public function prune($tblUsers = null)
    {
        if ($tblUsers) {
            $this->addUsingAlias(TblUsersTableMap::COL_USER_ID, $tblUsers->getUserId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the tbl_users table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TblUsersTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            TblUsersTableMap::clearInstancePool();
            TblUsersTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(TblUsersTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(TblUsersTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            
            TblUsersTableMap::removeInstanceFromPool($criteria);
        
            $affectedRows += ModelCriteria::delete($con);
            TblUsersTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // TblUsersQuery
