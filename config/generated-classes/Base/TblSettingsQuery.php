<?php

namespace Base;

use \TblSettings as ChildTblSettings;
use \TblSettingsQuery as ChildTblSettingsQuery;
use \Exception;
use Map\TblSettingsTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'tbl_settings' table.
 *
 * 
 *
 * @method     ChildTblSettingsQuery orderBySettingsId($order = Criteria::ASC) Order by the settings_id column
 * @method     ChildTblSettingsQuery orderBySettingsName($order = Criteria::ASC) Order by the settings_name column
 * @method     ChildTblSettingsQuery orderBySettingsValue($order = Criteria::ASC) Order by the settings_value column
 *
 * @method     ChildTblSettingsQuery groupBySettingsId() Group by the settings_id column
 * @method     ChildTblSettingsQuery groupBySettingsName() Group by the settings_name column
 * @method     ChildTblSettingsQuery groupBySettingsValue() Group by the settings_value column
 *
 * @method     ChildTblSettingsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildTblSettingsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildTblSettingsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildTblSettingsQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildTblSettingsQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildTblSettingsQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildTblSettings findOne(ConnectionInterface $con = null) Return the first ChildTblSettings matching the query
 * @method     ChildTblSettings findOneOrCreate(ConnectionInterface $con = null) Return the first ChildTblSettings matching the query, or a new ChildTblSettings object populated from the query conditions when no match is found
 *
 * @method     ChildTblSettings findOneBySettingsId(int $settings_id) Return the first ChildTblSettings filtered by the settings_id column
 * @method     ChildTblSettings findOneBySettingsName(string $settings_name) Return the first ChildTblSettings filtered by the settings_name column
 * @method     ChildTblSettings findOneBySettingsValue(string $settings_value) Return the first ChildTblSettings filtered by the settings_value column *

 * @method     ChildTblSettings requirePk($key, ConnectionInterface $con = null) Return the ChildTblSettings by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblSettings requireOne(ConnectionInterface $con = null) Return the first ChildTblSettings matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTblSettings requireOneBySettingsId(int $settings_id) Return the first ChildTblSettings filtered by the settings_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblSettings requireOneBySettingsName(string $settings_name) Return the first ChildTblSettings filtered by the settings_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblSettings requireOneBySettingsValue(string $settings_value) Return the first ChildTblSettings filtered by the settings_value column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTblSettings[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildTblSettings objects based on current ModelCriteria
 * @method     ChildTblSettings[]|ObjectCollection findBySettingsId(int $settings_id) Return ChildTblSettings objects filtered by the settings_id column
 * @method     ChildTblSettings[]|ObjectCollection findBySettingsName(string $settings_name) Return ChildTblSettings objects filtered by the settings_name column
 * @method     ChildTblSettings[]|ObjectCollection findBySettingsValue(string $settings_value) Return ChildTblSettings objects filtered by the settings_value column
 * @method     ChildTblSettings[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class TblSettingsQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\TblSettingsQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpm', $modelName = '\\TblSettings', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildTblSettingsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildTblSettingsQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildTblSettingsQuery) {
            return $criteria;
        }
        $query = new ChildTblSettingsQuery();
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
     * @return ChildTblSettings|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        throw new LogicException('The TblSettings object has no primary key');
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     ConnectionInterface $con an optional connection object
     *
     * @return ObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, ConnectionInterface $con = null)
    {
        throw new LogicException('The TblSettings object has no primary key');
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildTblSettingsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        throw new LogicException('The TblSettings object has no primary key');
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildTblSettingsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        throw new LogicException('The TblSettings object has no primary key');
    }

    /**
     * Filter the query on the settings_id column
     *
     * Example usage:
     * <code>
     * $query->filterBySettingsId(1234); // WHERE settings_id = 1234
     * $query->filterBySettingsId(array(12, 34)); // WHERE settings_id IN (12, 34)
     * $query->filterBySettingsId(array('min' => 12)); // WHERE settings_id > 12
     * </code>
     *
     * @param     mixed $settingsId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblSettingsQuery The current query, for fluid interface
     */
    public function filterBySettingsId($settingsId = null, $comparison = null)
    {
        if (is_array($settingsId)) {
            $useMinMax = false;
            if (isset($settingsId['min'])) {
                $this->addUsingAlias(TblSettingsTableMap::COL_SETTINGS_ID, $settingsId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($settingsId['max'])) {
                $this->addUsingAlias(TblSettingsTableMap::COL_SETTINGS_ID, $settingsId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblSettingsTableMap::COL_SETTINGS_ID, $settingsId, $comparison);
    }

    /**
     * Filter the query on the settings_name column
     *
     * Example usage:
     * <code>
     * $query->filterBySettingsName('fooValue');   // WHERE settings_name = 'fooValue'
     * $query->filterBySettingsName('%fooValue%'); // WHERE settings_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $settingsName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblSettingsQuery The current query, for fluid interface
     */
    public function filterBySettingsName($settingsName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($settingsName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $settingsName)) {
                $settingsName = str_replace('*', '%', $settingsName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblSettingsTableMap::COL_SETTINGS_NAME, $settingsName, $comparison);
    }

    /**
     * Filter the query on the settings_value column
     *
     * Example usage:
     * <code>
     * $query->filterBySettingsValue('fooValue');   // WHERE settings_value = 'fooValue'
     * $query->filterBySettingsValue('%fooValue%'); // WHERE settings_value LIKE '%fooValue%'
     * </code>
     *
     * @param     string $settingsValue The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblSettingsQuery The current query, for fluid interface
     */
    public function filterBySettingsValue($settingsValue = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($settingsValue)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $settingsValue)) {
                $settingsValue = str_replace('*', '%', $settingsValue);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblSettingsTableMap::COL_SETTINGS_VALUE, $settingsValue, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildTblSettings $tblSettings Object to remove from the list of results
     *
     * @return $this|ChildTblSettingsQuery The current query, for fluid interface
     */
    public function prune($tblSettings = null)
    {
        if ($tblSettings) {
            throw new LogicException('TblSettings object has no primary key');

        }

        return $this;
    }

    /**
     * Deletes all rows from the tbl_settings table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TblSettingsTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            TblSettingsTableMap::clearInstancePool();
            TblSettingsTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(TblSettingsTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(TblSettingsTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            
            TblSettingsTableMap::removeInstanceFromPool($criteria);
        
            $affectedRows += ModelCriteria::delete($con);
            TblSettingsTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // TblSettingsQuery
