<?php

namespace Base;

use \TblPhotos as ChildTblPhotos;
use \TblPhotosQuery as ChildTblPhotosQuery;
use \Exception;
use \PDO;
use Map\TblPhotosTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'tbl_photos' table.
 *
 *
 *
 * @method     ChildTblPhotosQuery orderByPhotoId($order = Criteria::ASC) Order by the photo_id column
 * @method     ChildTblPhotosQuery orderByPhotoName($order = Criteria::ASC) Order by the photo_name column
 * @method     ChildTblPhotosQuery orderByProdId($order = Criteria::ASC) Order by the prod_id column
 *
 * @method     ChildTblPhotosQuery groupByPhotoId() Group by the photo_id column
 * @method     ChildTblPhotosQuery groupByPhotoName() Group by the photo_name column
 * @method     ChildTblPhotosQuery groupByProdId() Group by the prod_id column
 *
 * @method     ChildTblPhotosQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildTblPhotosQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildTblPhotosQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildTblPhotosQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildTblPhotosQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildTblPhotosQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildTblPhotos findOne(ConnectionInterface $con = null) Return the first ChildTblPhotos matching the query
 * @method     ChildTblPhotos findOneOrCreate(ConnectionInterface $con = null) Return the first ChildTblPhotos matching the query, or a new ChildTblPhotos object populated from the query conditions when no match is found
 *
 * @method     ChildTblPhotos findOneByPhotoId(int $photo_id) Return the first ChildTblPhotos filtered by the photo_id column
 * @method     ChildTblPhotos findOneByPhotoName(string $photo_name) Return the first ChildTblPhotos filtered by the photo_name column
 * @method     ChildTblPhotos findOneByProdId(int $prod_id) Return the first ChildTblPhotos filtered by the prod_id column *

 * @method     ChildTblPhotos requirePk($key, ConnectionInterface $con = null) Return the ChildTblPhotos by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblPhotos requireOne(ConnectionInterface $con = null) Return the first ChildTblPhotos matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTblPhotos requireOneByPhotoId(int $photo_id) Return the first ChildTblPhotos filtered by the photo_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblPhotos requireOneByPhotoName(string $photo_name) Return the first ChildTblPhotos filtered by the photo_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblPhotos requireOneByProdId(int $prod_id) Return the first ChildTblPhotos filtered by the prod_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTblPhotos[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildTblPhotos objects based on current ModelCriteria
 * @method     ChildTblPhotos[]|ObjectCollection findByPhotoId(int $photo_id) Return ChildTblPhotos objects filtered by the photo_id column
 * @method     ChildTblPhotos[]|ObjectCollection findByPhotoName(string $photo_name) Return ChildTblPhotos objects filtered by the photo_name column
 * @method     ChildTblPhotos[]|ObjectCollection findByProdId(int $prod_id) Return ChildTblPhotos objects filtered by the prod_id column
 * @method     ChildTblPhotos[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class TblPhotosQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\TblPhotosQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpm', $modelName = '\\TblPhotos', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildTblPhotosQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildTblPhotosQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildTblPhotosQuery) {
            return $criteria;
        }
        $query = new ChildTblPhotosQuery();
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
     * @return ChildTblPhotos|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(TblPhotosTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = TblPhotosTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildTblPhotos A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT photo_id, photo_name, prod_id FROM tbl_photos WHERE photo_id = :p0';
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
            /** @var ChildTblPhotos $obj */
            $obj = new ChildTblPhotos();
            $obj->hydrate($row);
            TblPhotosTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildTblPhotos|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildTblPhotosQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TblPhotosTableMap::COL_PHOTO_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildTblPhotosQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TblPhotosTableMap::COL_PHOTO_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the photo_id column
     *
     * Example usage:
     * <code>
     * $query->filterByPhotoId(1234); // WHERE photo_id = 1234
     * $query->filterByPhotoId(array(12, 34)); // WHERE photo_id IN (12, 34)
     * $query->filterByPhotoId(array('min' => 12)); // WHERE photo_id > 12
     * </code>
     *
     * @param     mixed $photoId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblPhotosQuery The current query, for fluid interface
     */
    public function filterByPhotoId($photoId = null, $comparison = null)
    {
        if (is_array($photoId)) {
            $useMinMax = false;
            if (isset($photoId['min'])) {
                $this->addUsingAlias(TblPhotosTableMap::COL_PHOTO_ID, $photoId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($photoId['max'])) {
                $this->addUsingAlias(TblPhotosTableMap::COL_PHOTO_ID, $photoId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblPhotosTableMap::COL_PHOTO_ID, $photoId, $comparison);
    }

    /**
     * Filter the query on the photo_name column
     *
     * Example usage:
     * <code>
     * $query->filterByPhotoName('fooValue');   // WHERE photo_name = 'fooValue'
     * $query->filterByPhotoName('%fooValue%'); // WHERE photo_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $photoName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblPhotosQuery The current query, for fluid interface
     */
    public function filterByPhotoName($photoName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($photoName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $photoName)) {
                $photoName = str_replace('*', '%', $photoName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblPhotosTableMap::COL_PHOTO_NAME, $photoName, $comparison);
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
     * @return $this|ChildTblPhotosQuery The current query, for fluid interface
     */
    public function filterByProdId($prodId = null, $comparison = null)
    {
        if (is_array($prodId)) {
            $useMinMax = false;
            if (isset($prodId['min'])) {
                $this->addUsingAlias(TblPhotosTableMap::COL_PROD_ID, $prodId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prodId['max'])) {
                $this->addUsingAlias(TblPhotosTableMap::COL_PROD_ID, $prodId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblPhotosTableMap::COL_PROD_ID, $prodId, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildTblPhotos $tblPhotos Object to remove from the list of results
     *
     * @return $this|ChildTblPhotosQuery The current query, for fluid interface
     */
    public function prune($tblPhotos = null)
    {
        if ($tblPhotos) {
            $this->addUsingAlias(TblPhotosTableMap::COL_PHOTO_ID, $tblPhotos->getPhotoId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the tbl_photos table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TblPhotosTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            TblPhotosTableMap::clearInstancePool();
            TblPhotosTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(TblPhotosTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(TblPhotosTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            TblPhotosTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            TblPhotosTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // TblPhotosQuery
