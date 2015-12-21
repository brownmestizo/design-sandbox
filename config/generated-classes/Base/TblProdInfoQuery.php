<?php

namespace Base;

use \TblProdInfo as ChildTblProdInfo;
use \TblProdInfoQuery as ChildTblProdInfoQuery;
use \Exception;
use \PDO;
use Map\TblProdInfoTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'tbl_prod_info' table.
 *
 * 
 *
 * @method     ChildTblProdInfoQuery orderByProdId($order = Criteria::ASC) Order by the prod_id column
 * @method     ChildTblProdInfoQuery orderByProdPriceId($order = Criteria::ASC) Order by the prod_price_id column
 * @method     ChildTblProdInfoQuery orderByProdName($order = Criteria::ASC) Order by the prod_name column
 * @method     ChildTblProdInfoQuery orderByProdAlt1($order = Criteria::ASC) Order by the prod_alt1 column
 * @method     ChildTblProdInfoQuery orderByProdAlt2($order = Criteria::ASC) Order by the prod_alt2 column
 * @method     ChildTblProdInfoQuery orderByProdAlt3($order = Criteria::ASC) Order by the prod_alt3 column
 * @method     ChildTblProdInfoQuery orderByProdAlt4($order = Criteria::ASC) Order by the prod_alt4 column
 * @method     ChildTblProdInfoQuery orderByProdCode($order = Criteria::ASC) Order by the prod_code column
 * @method     ChildTblProdInfoQuery orderByProdCategory($order = Criteria::ASC) Order by the prod_category column
 * @method     ChildTblProdInfoQuery orderByProdCategoryShipping($order = Criteria::ASC) Order by the prod_category_shipping column
 * @method     ChildTblProdInfoQuery orderByProdWriteup($order = Criteria::ASC) Order by the prod_writeup column
 * @method     ChildTblProdInfoQuery orderByProdLength($order = Criteria::ASC) Order by the prod_length column
 * @method     ChildTblProdInfoQuery orderByProdWingspan($order = Criteria::ASC) Order by the prod_wingspan column
 * @method     ChildTblProdInfoQuery orderByProdHeight($order = Criteria::ASC) Order by the prod_height column
 * @method     ChildTblProdInfoQuery orderByProdScale($order = Criteria::ASC) Order by the prod_scale column
 * @method     ChildTblProdInfoQuery orderByProdLinks($order = Criteria::ASC) Order by the prod_links column
 * @method     ChildTblProdInfoQuery orderByProdLinkdescription($order = Criteria::ASC) Order by the prod_linkdescription column
 * @method     ChildTblProdInfoQuery orderByProdFront($order = Criteria::ASC) Order by the prod_front column
 * @method     ChildTblProdInfoQuery orderByProdKeywords($order = Criteria::ASC) Order by the prod_keywords column
 * @method     ChildTblProdInfoQuery orderByProdKeywordsWriteup($order = Criteria::ASC) Order by the prod_keywords_writeup column
 * @method     ChildTblProdInfoQuery orderByProdTitle($order = Criteria::ASC) Order by the prod_title column
 * @method     ChildTblProdInfoQuery orderByProdDescription($order = Criteria::ASC) Order by the prod_description column
 * @method     ChildTblProdInfoQuery orderByProdGeneral($order = Criteria::ASC) Order by the prod_general column
 * @method     ChildTblProdInfoQuery orderByProdEra($order = Criteria::ASC) Order by the prod_era column
 * @method     ChildTblProdInfoQuery orderByProdCompany($order = Criteria::ASC) Order by the prod_company column
 * @method     ChildTblProdInfoQuery orderByProdRelated($order = Criteria::ASC) Order by the prod_related column
 * @method     ChildTblProdInfoQuery orderByProdRelatedPa($order = Criteria::ASC) Order by the prod_related_pa column
 * @method     ChildTblProdInfoQuery orderByProdRelatedM3($order = Criteria::ASC) Order by the prod_related_m3 column
 * @method     ChildTblProdInfoQuery orderByProdRelated2($order = Criteria::ASC) Order by the prod_related2 column
 * @method     ChildTblProdInfoQuery orderByProdSaveas($order = Criteria::ASC) Order by the prod_saveas column
 * @method     ChildTblProdInfoQuery orderByProdAircraftreg($order = Criteria::ASC) Order by the prod_aircraftreg column
 * @method     ChildTblProdInfoQuery orderByMb($order = Criteria::ASC) Order by the mb column
 * @method     ChildTblProdInfoQuery orderByPa($order = Criteria::ASC) Order by the pa column
 * @method     ChildTblProdInfoQuery orderByM3($order = Criteria::ASC) Order by the m3 column
 *
 * @method     ChildTblProdInfoQuery groupByProdId() Group by the prod_id column
 * @method     ChildTblProdInfoQuery groupByProdPriceId() Group by the prod_price_id column
 * @method     ChildTblProdInfoQuery groupByProdName() Group by the prod_name column
 * @method     ChildTblProdInfoQuery groupByProdAlt1() Group by the prod_alt1 column
 * @method     ChildTblProdInfoQuery groupByProdAlt2() Group by the prod_alt2 column
 * @method     ChildTblProdInfoQuery groupByProdAlt3() Group by the prod_alt3 column
 * @method     ChildTblProdInfoQuery groupByProdAlt4() Group by the prod_alt4 column
 * @method     ChildTblProdInfoQuery groupByProdCode() Group by the prod_code column
 * @method     ChildTblProdInfoQuery groupByProdCategory() Group by the prod_category column
 * @method     ChildTblProdInfoQuery groupByProdCategoryShipping() Group by the prod_category_shipping column
 * @method     ChildTblProdInfoQuery groupByProdWriteup() Group by the prod_writeup column
 * @method     ChildTblProdInfoQuery groupByProdLength() Group by the prod_length column
 * @method     ChildTblProdInfoQuery groupByProdWingspan() Group by the prod_wingspan column
 * @method     ChildTblProdInfoQuery groupByProdHeight() Group by the prod_height column
 * @method     ChildTblProdInfoQuery groupByProdScale() Group by the prod_scale column
 * @method     ChildTblProdInfoQuery groupByProdLinks() Group by the prod_links column
 * @method     ChildTblProdInfoQuery groupByProdLinkdescription() Group by the prod_linkdescription column
 * @method     ChildTblProdInfoQuery groupByProdFront() Group by the prod_front column
 * @method     ChildTblProdInfoQuery groupByProdKeywords() Group by the prod_keywords column
 * @method     ChildTblProdInfoQuery groupByProdKeywordsWriteup() Group by the prod_keywords_writeup column
 * @method     ChildTblProdInfoQuery groupByProdTitle() Group by the prod_title column
 * @method     ChildTblProdInfoQuery groupByProdDescription() Group by the prod_description column
 * @method     ChildTblProdInfoQuery groupByProdGeneral() Group by the prod_general column
 * @method     ChildTblProdInfoQuery groupByProdEra() Group by the prod_era column
 * @method     ChildTblProdInfoQuery groupByProdCompany() Group by the prod_company column
 * @method     ChildTblProdInfoQuery groupByProdRelated() Group by the prod_related column
 * @method     ChildTblProdInfoQuery groupByProdRelatedPa() Group by the prod_related_pa column
 * @method     ChildTblProdInfoQuery groupByProdRelatedM3() Group by the prod_related_m3 column
 * @method     ChildTblProdInfoQuery groupByProdRelated2() Group by the prod_related2 column
 * @method     ChildTblProdInfoQuery groupByProdSaveas() Group by the prod_saveas column
 * @method     ChildTblProdInfoQuery groupByProdAircraftreg() Group by the prod_aircraftreg column
 * @method     ChildTblProdInfoQuery groupByMb() Group by the mb column
 * @method     ChildTblProdInfoQuery groupByPa() Group by the pa column
 * @method     ChildTblProdInfoQuery groupByM3() Group by the m3 column
 *
 * @method     ChildTblProdInfoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildTblProdInfoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildTblProdInfoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildTblProdInfoQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildTblProdInfoQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildTblProdInfoQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildTblProdInfoQuery leftJoinTblEra($relationAlias = null) Adds a LEFT JOIN clause to the query using the TblEra relation
 * @method     ChildTblProdInfoQuery rightJoinTblEra($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TblEra relation
 * @method     ChildTblProdInfoQuery innerJoinTblEra($relationAlias = null) Adds a INNER JOIN clause to the query using the TblEra relation
 *
 * @method     ChildTblProdInfoQuery joinWithTblEra($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the TblEra relation
 *
 * @method     ChildTblProdInfoQuery leftJoinWithTblEra() Adds a LEFT JOIN clause and with to the query using the TblEra relation
 * @method     ChildTblProdInfoQuery rightJoinWithTblEra() Adds a RIGHT JOIN clause and with to the query using the TblEra relation
 * @method     ChildTblProdInfoQuery innerJoinWithTblEra() Adds a INNER JOIN clause and with to the query using the TblEra relation
 *
 * @method     ChildTblProdInfoQuery leftJoinTblGeneral($relationAlias = null) Adds a LEFT JOIN clause to the query using the TblGeneral relation
 * @method     ChildTblProdInfoQuery rightJoinTblGeneral($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TblGeneral relation
 * @method     ChildTblProdInfoQuery innerJoinTblGeneral($relationAlias = null) Adds a INNER JOIN clause to the query using the TblGeneral relation
 *
 * @method     ChildTblProdInfoQuery joinWithTblGeneral($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the TblGeneral relation
 *
 * @method     ChildTblProdInfoQuery leftJoinWithTblGeneral() Adds a LEFT JOIN clause and with to the query using the TblGeneral relation
 * @method     ChildTblProdInfoQuery rightJoinWithTblGeneral() Adds a RIGHT JOIN clause and with to the query using the TblGeneral relation
 * @method     ChildTblProdInfoQuery innerJoinWithTblGeneral() Adds a INNER JOIN clause and with to the query using the TblGeneral relation
 *
 * @method     ChildTblProdInfoQuery leftJoinTblMenus($relationAlias = null) Adds a LEFT JOIN clause to the query using the TblMenus relation
 * @method     ChildTblProdInfoQuery rightJoinTblMenus($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TblMenus relation
 * @method     ChildTblProdInfoQuery innerJoinTblMenus($relationAlias = null) Adds a INNER JOIN clause to the query using the TblMenus relation
 *
 * @method     ChildTblProdInfoQuery joinWithTblMenus($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the TblMenus relation
 *
 * @method     ChildTblProdInfoQuery leftJoinWithTblMenus() Adds a LEFT JOIN clause and with to the query using the TblMenus relation
 * @method     ChildTblProdInfoQuery rightJoinWithTblMenus() Adds a RIGHT JOIN clause and with to the query using the TblMenus relation
 * @method     ChildTblProdInfoQuery innerJoinWithTblMenus() Adds a INNER JOIN clause and with to the query using the TblMenus relation
 *
 * @method     ChildTblProdInfoQuery leftJoinTblProdPhotos($relationAlias = null) Adds a LEFT JOIN clause to the query using the TblProdPhotos relation
 * @method     ChildTblProdInfoQuery rightJoinTblProdPhotos($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TblProdPhotos relation
 * @method     ChildTblProdInfoQuery innerJoinTblProdPhotos($relationAlias = null) Adds a INNER JOIN clause to the query using the TblProdPhotos relation
 *
 * @method     ChildTblProdInfoQuery joinWithTblProdPhotos($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the TblProdPhotos relation
 *
 * @method     ChildTblProdInfoQuery leftJoinWithTblProdPhotos() Adds a LEFT JOIN clause and with to the query using the TblProdPhotos relation
 * @method     ChildTblProdInfoQuery rightJoinWithTblProdPhotos() Adds a RIGHT JOIN clause and with to the query using the TblProdPhotos relation
 * @method     ChildTblProdInfoQuery innerJoinWithTblProdPhotos() Adds a INNER JOIN clause and with to the query using the TblProdPhotos relation
 *
 * @method     ChildTblProdInfoQuery leftJoinTblProdPrices($relationAlias = null) Adds a LEFT JOIN clause to the query using the TblProdPrices relation
 * @method     ChildTblProdInfoQuery rightJoinTblProdPrices($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TblProdPrices relation
 * @method     ChildTblProdInfoQuery innerJoinTblProdPrices($relationAlias = null) Adds a INNER JOIN clause to the query using the TblProdPrices relation
 *
 * @method     ChildTblProdInfoQuery joinWithTblProdPrices($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the TblProdPrices relation
 *
 * @method     ChildTblProdInfoQuery leftJoinWithTblProdPrices() Adds a LEFT JOIN clause and with to the query using the TblProdPrices relation
 * @method     ChildTblProdInfoQuery rightJoinWithTblProdPrices() Adds a RIGHT JOIN clause and with to the query using the TblProdPrices relation
 * @method     ChildTblProdInfoQuery innerJoinWithTblProdPrices() Adds a INNER JOIN clause and with to the query using the TblProdPrices relation
 *
 * @method     ChildTblProdInfoQuery leftJoinTblProdPricing($relationAlias = null) Adds a LEFT JOIN clause to the query using the TblProdPricing relation
 * @method     ChildTblProdInfoQuery rightJoinTblProdPricing($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TblProdPricing relation
 * @method     ChildTblProdInfoQuery innerJoinTblProdPricing($relationAlias = null) Adds a INNER JOIN clause to the query using the TblProdPricing relation
 *
 * @method     ChildTblProdInfoQuery joinWithTblProdPricing($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the TblProdPricing relation
 *
 * @method     ChildTblProdInfoQuery leftJoinWithTblProdPricing() Adds a LEFT JOIN clause and with to the query using the TblProdPricing relation
 * @method     ChildTblProdInfoQuery rightJoinWithTblProdPricing() Adds a RIGHT JOIN clause and with to the query using the TblProdPricing relation
 * @method     ChildTblProdInfoQuery innerJoinWithTblProdPricing() Adds a INNER JOIN clause and with to the query using the TblProdPricing relation
 *
 * @method     ChildTblProdInfoQuery leftJoinTblProdSmaller($relationAlias = null) Adds a LEFT JOIN clause to the query using the TblProdSmaller relation
 * @method     ChildTblProdInfoQuery rightJoinTblProdSmaller($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TblProdSmaller relation
 * @method     ChildTblProdInfoQuery innerJoinTblProdSmaller($relationAlias = null) Adds a INNER JOIN clause to the query using the TblProdSmaller relation
 *
 * @method     ChildTblProdInfoQuery joinWithTblProdSmaller($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the TblProdSmaller relation
 *
 * @method     ChildTblProdInfoQuery leftJoinWithTblProdSmaller() Adds a LEFT JOIN clause and with to the query using the TblProdSmaller relation
 * @method     ChildTblProdInfoQuery rightJoinWithTblProdSmaller() Adds a RIGHT JOIN clause and with to the query using the TblProdSmaller relation
 * @method     ChildTblProdInfoQuery innerJoinWithTblProdSmaller() Adds a INNER JOIN clause and with to the query using the TblProdSmaller relation
 *
 * @method     ChildTblProdInfoQuery leftJoinTblShippingCategories($relationAlias = null) Adds a LEFT JOIN clause to the query using the TblShippingCategories relation
 * @method     ChildTblProdInfoQuery rightJoinTblShippingCategories($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TblShippingCategories relation
 * @method     ChildTblProdInfoQuery innerJoinTblShippingCategories($relationAlias = null) Adds a INNER JOIN clause to the query using the TblShippingCategories relation
 *
 * @method     ChildTblProdInfoQuery joinWithTblShippingCategories($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the TblShippingCategories relation
 *
 * @method     ChildTblProdInfoQuery leftJoinWithTblShippingCategories() Adds a LEFT JOIN clause and with to the query using the TblShippingCategories relation
 * @method     ChildTblProdInfoQuery rightJoinWithTblShippingCategories() Adds a RIGHT JOIN clause and with to the query using the TblShippingCategories relation
 * @method     ChildTblProdInfoQuery innerJoinWithTblShippingCategories() Adds a INNER JOIN clause and with to the query using the TblShippingCategories relation
 *
 * @method     \TblEraQuery|\TblGeneralQuery|\TblMenusQuery|\TblProdPhotosQuery|\TblProdPricesQuery|\TblProdPricingQuery|\TblProdSmallerQuery|\TblShippingCategoriesQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildTblProdInfo findOne(ConnectionInterface $con = null) Return the first ChildTblProdInfo matching the query
 * @method     ChildTblProdInfo findOneOrCreate(ConnectionInterface $con = null) Return the first ChildTblProdInfo matching the query, or a new ChildTblProdInfo object populated from the query conditions when no match is found
 *
 * @method     ChildTblProdInfo findOneByProdId(int $prod_id) Return the first ChildTblProdInfo filtered by the prod_id column
 * @method     ChildTblProdInfo findOneByProdPriceId(int $prod_price_id) Return the first ChildTblProdInfo filtered by the prod_price_id column
 * @method     ChildTblProdInfo findOneByProdName(string $prod_name) Return the first ChildTblProdInfo filtered by the prod_name column
 * @method     ChildTblProdInfo findOneByProdAlt1(string $prod_alt1) Return the first ChildTblProdInfo filtered by the prod_alt1 column
 * @method     ChildTblProdInfo findOneByProdAlt2(string $prod_alt2) Return the first ChildTblProdInfo filtered by the prod_alt2 column
 * @method     ChildTblProdInfo findOneByProdAlt3(string $prod_alt3) Return the first ChildTblProdInfo filtered by the prod_alt3 column
 * @method     ChildTblProdInfo findOneByProdAlt4(string $prod_alt4) Return the first ChildTblProdInfo filtered by the prod_alt4 column
 * @method     ChildTblProdInfo findOneByProdCode(string $prod_code) Return the first ChildTblProdInfo filtered by the prod_code column
 * @method     ChildTblProdInfo findOneByProdCategory(string $prod_category) Return the first ChildTblProdInfo filtered by the prod_category column
 * @method     ChildTblProdInfo findOneByProdCategoryShipping(int $prod_category_shipping) Return the first ChildTblProdInfo filtered by the prod_category_shipping column
 * @method     ChildTblProdInfo findOneByProdWriteup(string $prod_writeup) Return the first ChildTblProdInfo filtered by the prod_writeup column
 * @method     ChildTblProdInfo findOneByProdLength(string $prod_length) Return the first ChildTblProdInfo filtered by the prod_length column
 * @method     ChildTblProdInfo findOneByProdWingspan(string $prod_wingspan) Return the first ChildTblProdInfo filtered by the prod_wingspan column
 * @method     ChildTblProdInfo findOneByProdHeight(string $prod_height) Return the first ChildTblProdInfo filtered by the prod_height column
 * @method     ChildTblProdInfo findOneByProdScale(string $prod_scale) Return the first ChildTblProdInfo filtered by the prod_scale column
 * @method     ChildTblProdInfo findOneByProdLinks(string $prod_links) Return the first ChildTblProdInfo filtered by the prod_links column
 * @method     ChildTblProdInfo findOneByProdLinkdescription(string $prod_linkdescription) Return the first ChildTblProdInfo filtered by the prod_linkdescription column
 * @method     ChildTblProdInfo findOneByProdFront(string $prod_front) Return the first ChildTblProdInfo filtered by the prod_front column
 * @method     ChildTblProdInfo findOneByProdKeywords(string $prod_keywords) Return the first ChildTblProdInfo filtered by the prod_keywords column
 * @method     ChildTblProdInfo findOneByProdKeywordsWriteup(string $prod_keywords_writeup) Return the first ChildTblProdInfo filtered by the prod_keywords_writeup column
 * @method     ChildTblProdInfo findOneByProdTitle(string $prod_title) Return the first ChildTblProdInfo filtered by the prod_title column
 * @method     ChildTblProdInfo findOneByProdDescription(string $prod_description) Return the first ChildTblProdInfo filtered by the prod_description column
 * @method     ChildTblProdInfo findOneByProdGeneral(int $prod_general) Return the first ChildTblProdInfo filtered by the prod_general column
 * @method     ChildTblProdInfo findOneByProdEra(int $prod_era) Return the first ChildTblProdInfo filtered by the prod_era column
 * @method     ChildTblProdInfo findOneByProdCompany(string $prod_company) Return the first ChildTblProdInfo filtered by the prod_company column
 * @method     ChildTblProdInfo findOneByProdRelated(string $prod_related) Return the first ChildTblProdInfo filtered by the prod_related column
 * @method     ChildTblProdInfo findOneByProdRelatedPa(string $prod_related_pa) Return the first ChildTblProdInfo filtered by the prod_related_pa column
 * @method     ChildTblProdInfo findOneByProdRelatedM3(string $prod_related_m3) Return the first ChildTblProdInfo filtered by the prod_related_m3 column
 * @method     ChildTblProdInfo findOneByProdRelated2(string $prod_related2) Return the first ChildTblProdInfo filtered by the prod_related2 column
 * @method     ChildTblProdInfo findOneByProdSaveas(int $prod_saveas) Return the first ChildTblProdInfo filtered by the prod_saveas column
 * @method     ChildTblProdInfo findOneByProdAircraftreg(string $prod_aircraftreg) Return the first ChildTblProdInfo filtered by the prod_aircraftreg column
 * @method     ChildTblProdInfo findOneByMb(int $mb) Return the first ChildTblProdInfo filtered by the mb column
 * @method     ChildTblProdInfo findOneByPa(int $pa) Return the first ChildTblProdInfo filtered by the pa column
 * @method     ChildTblProdInfo findOneByM3(int $m3) Return the first ChildTblProdInfo filtered by the m3 column *

 * @method     ChildTblProdInfo requirePk($key, ConnectionInterface $con = null) Return the ChildTblProdInfo by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdInfo requireOne(ConnectionInterface $con = null) Return the first ChildTblProdInfo matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTblProdInfo requireOneByProdId(int $prod_id) Return the first ChildTblProdInfo filtered by the prod_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdInfo requireOneByProdPriceId(int $prod_price_id) Return the first ChildTblProdInfo filtered by the prod_price_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdInfo requireOneByProdName(string $prod_name) Return the first ChildTblProdInfo filtered by the prod_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdInfo requireOneByProdAlt1(string $prod_alt1) Return the first ChildTblProdInfo filtered by the prod_alt1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdInfo requireOneByProdAlt2(string $prod_alt2) Return the first ChildTblProdInfo filtered by the prod_alt2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdInfo requireOneByProdAlt3(string $prod_alt3) Return the first ChildTblProdInfo filtered by the prod_alt3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdInfo requireOneByProdAlt4(string $prod_alt4) Return the first ChildTblProdInfo filtered by the prod_alt4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdInfo requireOneByProdCode(string $prod_code) Return the first ChildTblProdInfo filtered by the prod_code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdInfo requireOneByProdCategory(string $prod_category) Return the first ChildTblProdInfo filtered by the prod_category column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdInfo requireOneByProdCategoryShipping(int $prod_category_shipping) Return the first ChildTblProdInfo filtered by the prod_category_shipping column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdInfo requireOneByProdWriteup(string $prod_writeup) Return the first ChildTblProdInfo filtered by the prod_writeup column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdInfo requireOneByProdLength(string $prod_length) Return the first ChildTblProdInfo filtered by the prod_length column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdInfo requireOneByProdWingspan(string $prod_wingspan) Return the first ChildTblProdInfo filtered by the prod_wingspan column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdInfo requireOneByProdHeight(string $prod_height) Return the first ChildTblProdInfo filtered by the prod_height column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdInfo requireOneByProdScale(string $prod_scale) Return the first ChildTblProdInfo filtered by the prod_scale column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdInfo requireOneByProdLinks(string $prod_links) Return the first ChildTblProdInfo filtered by the prod_links column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdInfo requireOneByProdLinkdescription(string $prod_linkdescription) Return the first ChildTblProdInfo filtered by the prod_linkdescription column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdInfo requireOneByProdFront(string $prod_front) Return the first ChildTblProdInfo filtered by the prod_front column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdInfo requireOneByProdKeywords(string $prod_keywords) Return the first ChildTblProdInfo filtered by the prod_keywords column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdInfo requireOneByProdKeywordsWriteup(string $prod_keywords_writeup) Return the first ChildTblProdInfo filtered by the prod_keywords_writeup column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdInfo requireOneByProdTitle(string $prod_title) Return the first ChildTblProdInfo filtered by the prod_title column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdInfo requireOneByProdDescription(string $prod_description) Return the first ChildTblProdInfo filtered by the prod_description column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdInfo requireOneByProdGeneral(int $prod_general) Return the first ChildTblProdInfo filtered by the prod_general column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdInfo requireOneByProdEra(int $prod_era) Return the first ChildTblProdInfo filtered by the prod_era column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdInfo requireOneByProdCompany(string $prod_company) Return the first ChildTblProdInfo filtered by the prod_company column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdInfo requireOneByProdRelated(string $prod_related) Return the first ChildTblProdInfo filtered by the prod_related column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdInfo requireOneByProdRelatedPa(string $prod_related_pa) Return the first ChildTblProdInfo filtered by the prod_related_pa column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdInfo requireOneByProdRelatedM3(string $prod_related_m3) Return the first ChildTblProdInfo filtered by the prod_related_m3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdInfo requireOneByProdRelated2(string $prod_related2) Return the first ChildTblProdInfo filtered by the prod_related2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdInfo requireOneByProdSaveas(int $prod_saveas) Return the first ChildTblProdInfo filtered by the prod_saveas column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdInfo requireOneByProdAircraftreg(string $prod_aircraftreg) Return the first ChildTblProdInfo filtered by the prod_aircraftreg column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdInfo requireOneByMb(int $mb) Return the first ChildTblProdInfo filtered by the mb column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdInfo requireOneByPa(int $pa) Return the first ChildTblProdInfo filtered by the pa column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTblProdInfo requireOneByM3(int $m3) Return the first ChildTblProdInfo filtered by the m3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTblProdInfo[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildTblProdInfo objects based on current ModelCriteria
 * @method     ChildTblProdInfo[]|ObjectCollection findByProdId(int $prod_id) Return ChildTblProdInfo objects filtered by the prod_id column
 * @method     ChildTblProdInfo[]|ObjectCollection findByProdPriceId(int $prod_price_id) Return ChildTblProdInfo objects filtered by the prod_price_id column
 * @method     ChildTblProdInfo[]|ObjectCollection findByProdName(string $prod_name) Return ChildTblProdInfo objects filtered by the prod_name column
 * @method     ChildTblProdInfo[]|ObjectCollection findByProdAlt1(string $prod_alt1) Return ChildTblProdInfo objects filtered by the prod_alt1 column
 * @method     ChildTblProdInfo[]|ObjectCollection findByProdAlt2(string $prod_alt2) Return ChildTblProdInfo objects filtered by the prod_alt2 column
 * @method     ChildTblProdInfo[]|ObjectCollection findByProdAlt3(string $prod_alt3) Return ChildTblProdInfo objects filtered by the prod_alt3 column
 * @method     ChildTblProdInfo[]|ObjectCollection findByProdAlt4(string $prod_alt4) Return ChildTblProdInfo objects filtered by the prod_alt4 column
 * @method     ChildTblProdInfo[]|ObjectCollection findByProdCode(string $prod_code) Return ChildTblProdInfo objects filtered by the prod_code column
 * @method     ChildTblProdInfo[]|ObjectCollection findByProdCategory(string $prod_category) Return ChildTblProdInfo objects filtered by the prod_category column
 * @method     ChildTblProdInfo[]|ObjectCollection findByProdCategoryShipping(int $prod_category_shipping) Return ChildTblProdInfo objects filtered by the prod_category_shipping column
 * @method     ChildTblProdInfo[]|ObjectCollection findByProdWriteup(string $prod_writeup) Return ChildTblProdInfo objects filtered by the prod_writeup column
 * @method     ChildTblProdInfo[]|ObjectCollection findByProdLength(string $prod_length) Return ChildTblProdInfo objects filtered by the prod_length column
 * @method     ChildTblProdInfo[]|ObjectCollection findByProdWingspan(string $prod_wingspan) Return ChildTblProdInfo objects filtered by the prod_wingspan column
 * @method     ChildTblProdInfo[]|ObjectCollection findByProdHeight(string $prod_height) Return ChildTblProdInfo objects filtered by the prod_height column
 * @method     ChildTblProdInfo[]|ObjectCollection findByProdScale(string $prod_scale) Return ChildTblProdInfo objects filtered by the prod_scale column
 * @method     ChildTblProdInfo[]|ObjectCollection findByProdLinks(string $prod_links) Return ChildTblProdInfo objects filtered by the prod_links column
 * @method     ChildTblProdInfo[]|ObjectCollection findByProdLinkdescription(string $prod_linkdescription) Return ChildTblProdInfo objects filtered by the prod_linkdescription column
 * @method     ChildTblProdInfo[]|ObjectCollection findByProdFront(string $prod_front) Return ChildTblProdInfo objects filtered by the prod_front column
 * @method     ChildTblProdInfo[]|ObjectCollection findByProdKeywords(string $prod_keywords) Return ChildTblProdInfo objects filtered by the prod_keywords column
 * @method     ChildTblProdInfo[]|ObjectCollection findByProdKeywordsWriteup(string $prod_keywords_writeup) Return ChildTblProdInfo objects filtered by the prod_keywords_writeup column
 * @method     ChildTblProdInfo[]|ObjectCollection findByProdTitle(string $prod_title) Return ChildTblProdInfo objects filtered by the prod_title column
 * @method     ChildTblProdInfo[]|ObjectCollection findByProdDescription(string $prod_description) Return ChildTblProdInfo objects filtered by the prod_description column
 * @method     ChildTblProdInfo[]|ObjectCollection findByProdGeneral(int $prod_general) Return ChildTblProdInfo objects filtered by the prod_general column
 * @method     ChildTblProdInfo[]|ObjectCollection findByProdEra(int $prod_era) Return ChildTblProdInfo objects filtered by the prod_era column
 * @method     ChildTblProdInfo[]|ObjectCollection findByProdCompany(string $prod_company) Return ChildTblProdInfo objects filtered by the prod_company column
 * @method     ChildTblProdInfo[]|ObjectCollection findByProdRelated(string $prod_related) Return ChildTblProdInfo objects filtered by the prod_related column
 * @method     ChildTblProdInfo[]|ObjectCollection findByProdRelatedPa(string $prod_related_pa) Return ChildTblProdInfo objects filtered by the prod_related_pa column
 * @method     ChildTblProdInfo[]|ObjectCollection findByProdRelatedM3(string $prod_related_m3) Return ChildTblProdInfo objects filtered by the prod_related_m3 column
 * @method     ChildTblProdInfo[]|ObjectCollection findByProdRelated2(string $prod_related2) Return ChildTblProdInfo objects filtered by the prod_related2 column
 * @method     ChildTblProdInfo[]|ObjectCollection findByProdSaveas(int $prod_saveas) Return ChildTblProdInfo objects filtered by the prod_saveas column
 * @method     ChildTblProdInfo[]|ObjectCollection findByProdAircraftreg(string $prod_aircraftreg) Return ChildTblProdInfo objects filtered by the prod_aircraftreg column
 * @method     ChildTblProdInfo[]|ObjectCollection findByMb(int $mb) Return ChildTblProdInfo objects filtered by the mb column
 * @method     ChildTblProdInfo[]|ObjectCollection findByPa(int $pa) Return ChildTblProdInfo objects filtered by the pa column
 * @method     ChildTblProdInfo[]|ObjectCollection findByM3(int $m3) Return ChildTblProdInfo objects filtered by the m3 column
 * @method     ChildTblProdInfo[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class TblProdInfoQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\TblProdInfoQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpm', $modelName = '\\TblProdInfo', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildTblProdInfoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildTblProdInfoQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildTblProdInfoQuery) {
            return $criteria;
        }
        $query = new ChildTblProdInfoQuery();
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
     * @return ChildTblProdInfo|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TblProdInfoTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(TblProdInfoTableMap::DATABASE_NAME);
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
     * @return ChildTblProdInfo A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT prod_id, prod_price_id, prod_name, prod_alt1, prod_alt2, prod_alt3, prod_alt4, prod_code, prod_category, prod_category_shipping, prod_writeup, prod_length, prod_wingspan, prod_height, prod_scale, prod_links, prod_linkdescription, prod_front, prod_keywords, prod_keywords_writeup, prod_title, prod_description, prod_general, prod_era, prod_company, prod_related, prod_related_pa, prod_related_m3, prod_related2, prod_saveas, prod_aircraftreg, mb, pa, m3 FROM tbl_prod_info WHERE prod_id = :p0';
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
            /** @var ChildTblProdInfo $obj */
            $obj = new ChildTblProdInfo();
            $obj->hydrate($row);
            TblProdInfoTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildTblProdInfo|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildTblProdInfoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TblProdInfoTableMap::COL_PROD_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildTblProdInfoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TblProdInfoTableMap::COL_PROD_ID, $keys, Criteria::IN);
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
     * @see       filterByTblProdPhotos()
     *
     * @see       filterByTblProdPrices()
     *
     * @see       filterByTblProdSmaller()
     *
     * @param     mixed $prodId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdInfoQuery The current query, for fluid interface
     */
    public function filterByProdId($prodId = null, $comparison = null)
    {
        if (is_array($prodId)) {
            $useMinMax = false;
            if (isset($prodId['min'])) {
                $this->addUsingAlias(TblProdInfoTableMap::COL_PROD_ID, $prodId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prodId['max'])) {
                $this->addUsingAlias(TblProdInfoTableMap::COL_PROD_ID, $prodId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblProdInfoTableMap::COL_PROD_ID, $prodId, $comparison);
    }

    /**
     * Filter the query on the prod_price_id column
     *
     * Example usage:
     * <code>
     * $query->filterByProdPriceId(1234); // WHERE prod_price_id = 1234
     * $query->filterByProdPriceId(array(12, 34)); // WHERE prod_price_id IN (12, 34)
     * $query->filterByProdPriceId(array('min' => 12)); // WHERE prod_price_id > 12
     * </code>
     *
     * @see       filterByTblProdPricing()
     *
     * @param     mixed $prodPriceId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdInfoQuery The current query, for fluid interface
     */
    public function filterByProdPriceId($prodPriceId = null, $comparison = null)
    {
        if (is_array($prodPriceId)) {
            $useMinMax = false;
            if (isset($prodPriceId['min'])) {
                $this->addUsingAlias(TblProdInfoTableMap::COL_PROD_PRICE_ID, $prodPriceId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prodPriceId['max'])) {
                $this->addUsingAlias(TblProdInfoTableMap::COL_PROD_PRICE_ID, $prodPriceId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblProdInfoTableMap::COL_PROD_PRICE_ID, $prodPriceId, $comparison);
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
     * @return $this|ChildTblProdInfoQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TblProdInfoTableMap::COL_PROD_NAME, $prodName, $comparison);
    }

    /**
     * Filter the query on the prod_alt1 column
     *
     * Example usage:
     * <code>
     * $query->filterByProdAlt1('fooValue');   // WHERE prod_alt1 = 'fooValue'
     * $query->filterByProdAlt1('%fooValue%'); // WHERE prod_alt1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodAlt1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdInfoQuery The current query, for fluid interface
     */
    public function filterByProdAlt1($prodAlt1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodAlt1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodAlt1)) {
                $prodAlt1 = str_replace('*', '%', $prodAlt1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdInfoTableMap::COL_PROD_ALT1, $prodAlt1, $comparison);
    }

    /**
     * Filter the query on the prod_alt2 column
     *
     * Example usage:
     * <code>
     * $query->filterByProdAlt2('fooValue');   // WHERE prod_alt2 = 'fooValue'
     * $query->filterByProdAlt2('%fooValue%'); // WHERE prod_alt2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodAlt2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdInfoQuery The current query, for fluid interface
     */
    public function filterByProdAlt2($prodAlt2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodAlt2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodAlt2)) {
                $prodAlt2 = str_replace('*', '%', $prodAlt2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdInfoTableMap::COL_PROD_ALT2, $prodAlt2, $comparison);
    }

    /**
     * Filter the query on the prod_alt3 column
     *
     * Example usage:
     * <code>
     * $query->filterByProdAlt3('fooValue');   // WHERE prod_alt3 = 'fooValue'
     * $query->filterByProdAlt3('%fooValue%'); // WHERE prod_alt3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodAlt3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdInfoQuery The current query, for fluid interface
     */
    public function filterByProdAlt3($prodAlt3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodAlt3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodAlt3)) {
                $prodAlt3 = str_replace('*', '%', $prodAlt3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdInfoTableMap::COL_PROD_ALT3, $prodAlt3, $comparison);
    }

    /**
     * Filter the query on the prod_alt4 column
     *
     * Example usage:
     * <code>
     * $query->filterByProdAlt4('fooValue');   // WHERE prod_alt4 = 'fooValue'
     * $query->filterByProdAlt4('%fooValue%'); // WHERE prod_alt4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodAlt4 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdInfoQuery The current query, for fluid interface
     */
    public function filterByProdAlt4($prodAlt4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodAlt4)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodAlt4)) {
                $prodAlt4 = str_replace('*', '%', $prodAlt4);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdInfoTableMap::COL_PROD_ALT4, $prodAlt4, $comparison);
    }

    /**
     * Filter the query on the prod_code column
     *
     * Example usage:
     * <code>
     * $query->filterByProdCode('fooValue');   // WHERE prod_code = 'fooValue'
     * $query->filterByProdCode('%fooValue%'); // WHERE prod_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodCode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdInfoQuery The current query, for fluid interface
     */
    public function filterByProdCode($prodCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodCode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodCode)) {
                $prodCode = str_replace('*', '%', $prodCode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdInfoTableMap::COL_PROD_CODE, $prodCode, $comparison);
    }

    /**
     * Filter the query on the prod_category column
     *
     * Example usage:
     * <code>
     * $query->filterByProdCategory('fooValue');   // WHERE prod_category = 'fooValue'
     * $query->filterByProdCategory('%fooValue%'); // WHERE prod_category LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodCategory The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdInfoQuery The current query, for fluid interface
     */
    public function filterByProdCategory($prodCategory = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodCategory)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodCategory)) {
                $prodCategory = str_replace('*', '%', $prodCategory);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdInfoTableMap::COL_PROD_CATEGORY, $prodCategory, $comparison);
    }

    /**
     * Filter the query on the prod_category_shipping column
     *
     * Example usage:
     * <code>
     * $query->filterByProdCategoryShipping(1234); // WHERE prod_category_shipping = 1234
     * $query->filterByProdCategoryShipping(array(12, 34)); // WHERE prod_category_shipping IN (12, 34)
     * $query->filterByProdCategoryShipping(array('min' => 12)); // WHERE prod_category_shipping > 12
     * </code>
     *
     * @see       filterByTblShippingCategories()
     *
     * @param     mixed $prodCategoryShipping The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdInfoQuery The current query, for fluid interface
     */
    public function filterByProdCategoryShipping($prodCategoryShipping = null, $comparison = null)
    {
        if (is_array($prodCategoryShipping)) {
            $useMinMax = false;
            if (isset($prodCategoryShipping['min'])) {
                $this->addUsingAlias(TblProdInfoTableMap::COL_PROD_CATEGORY_SHIPPING, $prodCategoryShipping['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prodCategoryShipping['max'])) {
                $this->addUsingAlias(TblProdInfoTableMap::COL_PROD_CATEGORY_SHIPPING, $prodCategoryShipping['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblProdInfoTableMap::COL_PROD_CATEGORY_SHIPPING, $prodCategoryShipping, $comparison);
    }

    /**
     * Filter the query on the prod_writeup column
     *
     * Example usage:
     * <code>
     * $query->filterByProdWriteup('fooValue');   // WHERE prod_writeup = 'fooValue'
     * $query->filterByProdWriteup('%fooValue%'); // WHERE prod_writeup LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodWriteup The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdInfoQuery The current query, for fluid interface
     */
    public function filterByProdWriteup($prodWriteup = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodWriteup)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodWriteup)) {
                $prodWriteup = str_replace('*', '%', $prodWriteup);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdInfoTableMap::COL_PROD_WRITEUP, $prodWriteup, $comparison);
    }

    /**
     * Filter the query on the prod_length column
     *
     * Example usage:
     * <code>
     * $query->filterByProdLength('fooValue');   // WHERE prod_length = 'fooValue'
     * $query->filterByProdLength('%fooValue%'); // WHERE prod_length LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodLength The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdInfoQuery The current query, for fluid interface
     */
    public function filterByProdLength($prodLength = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodLength)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodLength)) {
                $prodLength = str_replace('*', '%', $prodLength);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdInfoTableMap::COL_PROD_LENGTH, $prodLength, $comparison);
    }

    /**
     * Filter the query on the prod_wingspan column
     *
     * Example usage:
     * <code>
     * $query->filterByProdWingspan('fooValue');   // WHERE prod_wingspan = 'fooValue'
     * $query->filterByProdWingspan('%fooValue%'); // WHERE prod_wingspan LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodWingspan The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdInfoQuery The current query, for fluid interface
     */
    public function filterByProdWingspan($prodWingspan = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodWingspan)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodWingspan)) {
                $prodWingspan = str_replace('*', '%', $prodWingspan);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdInfoTableMap::COL_PROD_WINGSPAN, $prodWingspan, $comparison);
    }

    /**
     * Filter the query on the prod_height column
     *
     * Example usage:
     * <code>
     * $query->filterByProdHeight('fooValue');   // WHERE prod_height = 'fooValue'
     * $query->filterByProdHeight('%fooValue%'); // WHERE prod_height LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodHeight The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdInfoQuery The current query, for fluid interface
     */
    public function filterByProdHeight($prodHeight = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodHeight)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodHeight)) {
                $prodHeight = str_replace('*', '%', $prodHeight);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdInfoTableMap::COL_PROD_HEIGHT, $prodHeight, $comparison);
    }

    /**
     * Filter the query on the prod_scale column
     *
     * Example usage:
     * <code>
     * $query->filterByProdScale('fooValue');   // WHERE prod_scale = 'fooValue'
     * $query->filterByProdScale('%fooValue%'); // WHERE prod_scale LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodScale The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdInfoQuery The current query, for fluid interface
     */
    public function filterByProdScale($prodScale = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodScale)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodScale)) {
                $prodScale = str_replace('*', '%', $prodScale);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdInfoTableMap::COL_PROD_SCALE, $prodScale, $comparison);
    }

    /**
     * Filter the query on the prod_links column
     *
     * Example usage:
     * <code>
     * $query->filterByProdLinks('fooValue');   // WHERE prod_links = 'fooValue'
     * $query->filterByProdLinks('%fooValue%'); // WHERE prod_links LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodLinks The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdInfoQuery The current query, for fluid interface
     */
    public function filterByProdLinks($prodLinks = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodLinks)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodLinks)) {
                $prodLinks = str_replace('*', '%', $prodLinks);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdInfoTableMap::COL_PROD_LINKS, $prodLinks, $comparison);
    }

    /**
     * Filter the query on the prod_linkdescription column
     *
     * Example usage:
     * <code>
     * $query->filterByProdLinkdescription('fooValue');   // WHERE prod_linkdescription = 'fooValue'
     * $query->filterByProdLinkdescription('%fooValue%'); // WHERE prod_linkdescription LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodLinkdescription The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdInfoQuery The current query, for fluid interface
     */
    public function filterByProdLinkdescription($prodLinkdescription = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodLinkdescription)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodLinkdescription)) {
                $prodLinkdescription = str_replace('*', '%', $prodLinkdescription);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdInfoTableMap::COL_PROD_LINKDESCRIPTION, $prodLinkdescription, $comparison);
    }

    /**
     * Filter the query on the prod_front column
     *
     * Example usage:
     * <code>
     * $query->filterByProdFront('fooValue');   // WHERE prod_front = 'fooValue'
     * $query->filterByProdFront('%fooValue%'); // WHERE prod_front LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodFront The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdInfoQuery The current query, for fluid interface
     */
    public function filterByProdFront($prodFront = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodFront)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodFront)) {
                $prodFront = str_replace('*', '%', $prodFront);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdInfoTableMap::COL_PROD_FRONT, $prodFront, $comparison);
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
     * @return $this|ChildTblProdInfoQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TblProdInfoTableMap::COL_PROD_KEYWORDS, $prodKeywords, $comparison);
    }

    /**
     * Filter the query on the prod_keywords_writeup column
     *
     * Example usage:
     * <code>
     * $query->filterByProdKeywordsWriteup('fooValue');   // WHERE prod_keywords_writeup = 'fooValue'
     * $query->filterByProdKeywordsWriteup('%fooValue%'); // WHERE prod_keywords_writeup LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodKeywordsWriteup The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdInfoQuery The current query, for fluid interface
     */
    public function filterByProdKeywordsWriteup($prodKeywordsWriteup = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodKeywordsWriteup)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodKeywordsWriteup)) {
                $prodKeywordsWriteup = str_replace('*', '%', $prodKeywordsWriteup);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdInfoTableMap::COL_PROD_KEYWORDS_WRITEUP, $prodKeywordsWriteup, $comparison);
    }

    /**
     * Filter the query on the prod_title column
     *
     * Example usage:
     * <code>
     * $query->filterByProdTitle('fooValue');   // WHERE prod_title = 'fooValue'
     * $query->filterByProdTitle('%fooValue%'); // WHERE prod_title LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodTitle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdInfoQuery The current query, for fluid interface
     */
    public function filterByProdTitle($prodTitle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodTitle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodTitle)) {
                $prodTitle = str_replace('*', '%', $prodTitle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdInfoTableMap::COL_PROD_TITLE, $prodTitle, $comparison);
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
     * @return $this|ChildTblProdInfoQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TblProdInfoTableMap::COL_PROD_DESCRIPTION, $prodDescription, $comparison);
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
     * @see       filterByTblGeneral()
     *
     * @param     mixed $prodGeneral The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdInfoQuery The current query, for fluid interface
     */
    public function filterByProdGeneral($prodGeneral = null, $comparison = null)
    {
        if (is_array($prodGeneral)) {
            $useMinMax = false;
            if (isset($prodGeneral['min'])) {
                $this->addUsingAlias(TblProdInfoTableMap::COL_PROD_GENERAL, $prodGeneral['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prodGeneral['max'])) {
                $this->addUsingAlias(TblProdInfoTableMap::COL_PROD_GENERAL, $prodGeneral['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblProdInfoTableMap::COL_PROD_GENERAL, $prodGeneral, $comparison);
    }

    /**
     * Filter the query on the prod_era column
     *
     * Example usage:
     * <code>
     * $query->filterByProdEra(1234); // WHERE prod_era = 1234
     * $query->filterByProdEra(array(12, 34)); // WHERE prod_era IN (12, 34)
     * $query->filterByProdEra(array('min' => 12)); // WHERE prod_era > 12
     * </code>
     *
     * @see       filterByTblEra()
     *
     * @param     mixed $prodEra The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdInfoQuery The current query, for fluid interface
     */
    public function filterByProdEra($prodEra = null, $comparison = null)
    {
        if (is_array($prodEra)) {
            $useMinMax = false;
            if (isset($prodEra['min'])) {
                $this->addUsingAlias(TblProdInfoTableMap::COL_PROD_ERA, $prodEra['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prodEra['max'])) {
                $this->addUsingAlias(TblProdInfoTableMap::COL_PROD_ERA, $prodEra['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblProdInfoTableMap::COL_PROD_ERA, $prodEra, $comparison);
    }

    /**
     * Filter the query on the prod_company column
     *
     * Example usage:
     * <code>
     * $query->filterByProdCompany('fooValue');   // WHERE prod_company = 'fooValue'
     * $query->filterByProdCompany('%fooValue%'); // WHERE prod_company LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodCompany The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdInfoQuery The current query, for fluid interface
     */
    public function filterByProdCompany($prodCompany = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodCompany)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodCompany)) {
                $prodCompany = str_replace('*', '%', $prodCompany);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdInfoTableMap::COL_PROD_COMPANY, $prodCompany, $comparison);
    }

    /**
     * Filter the query on the prod_related column
     *
     * Example usage:
     * <code>
     * $query->filterByProdRelated('fooValue');   // WHERE prod_related = 'fooValue'
     * $query->filterByProdRelated('%fooValue%'); // WHERE prod_related LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodRelated The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdInfoQuery The current query, for fluid interface
     */
    public function filterByProdRelated($prodRelated = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodRelated)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodRelated)) {
                $prodRelated = str_replace('*', '%', $prodRelated);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdInfoTableMap::COL_PROD_RELATED, $prodRelated, $comparison);
    }

    /**
     * Filter the query on the prod_related_pa column
     *
     * Example usage:
     * <code>
     * $query->filterByProdRelatedPa('fooValue');   // WHERE prod_related_pa = 'fooValue'
     * $query->filterByProdRelatedPa('%fooValue%'); // WHERE prod_related_pa LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodRelatedPa The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdInfoQuery The current query, for fluid interface
     */
    public function filterByProdRelatedPa($prodRelatedPa = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodRelatedPa)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodRelatedPa)) {
                $prodRelatedPa = str_replace('*', '%', $prodRelatedPa);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdInfoTableMap::COL_PROD_RELATED_PA, $prodRelatedPa, $comparison);
    }

    /**
     * Filter the query on the prod_related_m3 column
     *
     * Example usage:
     * <code>
     * $query->filterByProdRelatedM3('fooValue');   // WHERE prod_related_m3 = 'fooValue'
     * $query->filterByProdRelatedM3('%fooValue%'); // WHERE prod_related_m3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodRelatedM3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdInfoQuery The current query, for fluid interface
     */
    public function filterByProdRelatedM3($prodRelatedM3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodRelatedM3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodRelatedM3)) {
                $prodRelatedM3 = str_replace('*', '%', $prodRelatedM3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdInfoTableMap::COL_PROD_RELATED_M3, $prodRelatedM3, $comparison);
    }

    /**
     * Filter the query on the prod_related2 column
     *
     * Example usage:
     * <code>
     * $query->filterByProdRelated2('fooValue');   // WHERE prod_related2 = 'fooValue'
     * $query->filterByProdRelated2('%fooValue%'); // WHERE prod_related2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodRelated2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdInfoQuery The current query, for fluid interface
     */
    public function filterByProdRelated2($prodRelated2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodRelated2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodRelated2)) {
                $prodRelated2 = str_replace('*', '%', $prodRelated2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdInfoTableMap::COL_PROD_RELATED2, $prodRelated2, $comparison);
    }

    /**
     * Filter the query on the prod_saveas column
     *
     * Example usage:
     * <code>
     * $query->filterByProdSaveas(1234); // WHERE prod_saveas = 1234
     * $query->filterByProdSaveas(array(12, 34)); // WHERE prod_saveas IN (12, 34)
     * $query->filterByProdSaveas(array('min' => 12)); // WHERE prod_saveas > 12
     * </code>
     *
     * @param     mixed $prodSaveas The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdInfoQuery The current query, for fluid interface
     */
    public function filterByProdSaveas($prodSaveas = null, $comparison = null)
    {
        if (is_array($prodSaveas)) {
            $useMinMax = false;
            if (isset($prodSaveas['min'])) {
                $this->addUsingAlias(TblProdInfoTableMap::COL_PROD_SAVEAS, $prodSaveas['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prodSaveas['max'])) {
                $this->addUsingAlias(TblProdInfoTableMap::COL_PROD_SAVEAS, $prodSaveas['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblProdInfoTableMap::COL_PROD_SAVEAS, $prodSaveas, $comparison);
    }

    /**
     * Filter the query on the prod_aircraftreg column
     *
     * Example usage:
     * <code>
     * $query->filterByProdAircraftreg('fooValue');   // WHERE prod_aircraftreg = 'fooValue'
     * $query->filterByProdAircraftreg('%fooValue%'); // WHERE prod_aircraftreg LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prodAircraftreg The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdInfoQuery The current query, for fluid interface
     */
    public function filterByProdAircraftreg($prodAircraftreg = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prodAircraftreg)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prodAircraftreg)) {
                $prodAircraftreg = str_replace('*', '%', $prodAircraftreg);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TblProdInfoTableMap::COL_PROD_AIRCRAFTREG, $prodAircraftreg, $comparison);
    }

    /**
     * Filter the query on the mb column
     *
     * Example usage:
     * <code>
     * $query->filterByMb(1234); // WHERE mb = 1234
     * $query->filterByMb(array(12, 34)); // WHERE mb IN (12, 34)
     * $query->filterByMb(array('min' => 12)); // WHERE mb > 12
     * </code>
     *
     * @param     mixed $mb The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdInfoQuery The current query, for fluid interface
     */
    public function filterByMb($mb = null, $comparison = null)
    {
        if (is_array($mb)) {
            $useMinMax = false;
            if (isset($mb['min'])) {
                $this->addUsingAlias(TblProdInfoTableMap::COL_MB, $mb['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mb['max'])) {
                $this->addUsingAlias(TblProdInfoTableMap::COL_MB, $mb['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblProdInfoTableMap::COL_MB, $mb, $comparison);
    }

    /**
     * Filter the query on the pa column
     *
     * Example usage:
     * <code>
     * $query->filterByPa(1234); // WHERE pa = 1234
     * $query->filterByPa(array(12, 34)); // WHERE pa IN (12, 34)
     * $query->filterByPa(array('min' => 12)); // WHERE pa > 12
     * </code>
     *
     * @param     mixed $pa The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdInfoQuery The current query, for fluid interface
     */
    public function filterByPa($pa = null, $comparison = null)
    {
        if (is_array($pa)) {
            $useMinMax = false;
            if (isset($pa['min'])) {
                $this->addUsingAlias(TblProdInfoTableMap::COL_PA, $pa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pa['max'])) {
                $this->addUsingAlias(TblProdInfoTableMap::COL_PA, $pa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblProdInfoTableMap::COL_PA, $pa, $comparison);
    }

    /**
     * Filter the query on the m3 column
     *
     * Example usage:
     * <code>
     * $query->filterByM3(1234); // WHERE m3 = 1234
     * $query->filterByM3(array(12, 34)); // WHERE m3 IN (12, 34)
     * $query->filterByM3(array('min' => 12)); // WHERE m3 > 12
     * </code>
     *
     * @param     mixed $m3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTblProdInfoQuery The current query, for fluid interface
     */
    public function filterByM3($m3 = null, $comparison = null)
    {
        if (is_array($m3)) {
            $useMinMax = false;
            if (isset($m3['min'])) {
                $this->addUsingAlias(TblProdInfoTableMap::COL_M3, $m3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($m3['max'])) {
                $this->addUsingAlias(TblProdInfoTableMap::COL_M3, $m3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TblProdInfoTableMap::COL_M3, $m3, $comparison);
    }

    /**
     * Filter the query by a related \TblEra object
     *
     * @param \TblEra|ObjectCollection $tblEra The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildTblProdInfoQuery The current query, for fluid interface
     */
    public function filterByTblEra($tblEra, $comparison = null)
    {
        if ($tblEra instanceof \TblEra) {
            return $this
                ->addUsingAlias(TblProdInfoTableMap::COL_PROD_ERA, $tblEra->getEraId(), $comparison);
        } elseif ($tblEra instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TblProdInfoTableMap::COL_PROD_ERA, $tblEra->toKeyValue('PrimaryKey', 'EraId'), $comparison);
        } else {
            throw new PropelException('filterByTblEra() only accepts arguments of type \TblEra or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the TblEra relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildTblProdInfoQuery The current query, for fluid interface
     */
    public function joinTblEra($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('TblEra');

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
            $this->addJoinObject($join, 'TblEra');
        }

        return $this;
    }

    /**
     * Use the TblEra relation TblEra object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \TblEraQuery A secondary query class using the current class as primary query
     */
    public function useTblEraQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTblEra($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'TblEra', '\TblEraQuery');
    }

    /**
     * Filter the query by a related \TblGeneral object
     *
     * @param \TblGeneral|ObjectCollection $tblGeneral The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildTblProdInfoQuery The current query, for fluid interface
     */
    public function filterByTblGeneral($tblGeneral, $comparison = null)
    {
        if ($tblGeneral instanceof \TblGeneral) {
            return $this
                ->addUsingAlias(TblProdInfoTableMap::COL_PROD_GENERAL, $tblGeneral->getProdGeneral(), $comparison);
        } elseif ($tblGeneral instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TblProdInfoTableMap::COL_PROD_GENERAL, $tblGeneral->toKeyValue('PrimaryKey', 'ProdGeneral'), $comparison);
        } else {
            throw new PropelException('filterByTblGeneral() only accepts arguments of type \TblGeneral or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the TblGeneral relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildTblProdInfoQuery The current query, for fluid interface
     */
    public function joinTblGeneral($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('TblGeneral');

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
            $this->addJoinObject($join, 'TblGeneral');
        }

        return $this;
    }

    /**
     * Use the TblGeneral relation TblGeneral object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \TblGeneralQuery A secondary query class using the current class as primary query
     */
    public function useTblGeneralQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTblGeneral($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'TblGeneral', '\TblGeneralQuery');
    }

    /**
     * Filter the query by a related \TblMenus object
     *
     * @param \TblMenus|ObjectCollection $tblMenus The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildTblProdInfoQuery The current query, for fluid interface
     */
    public function filterByTblMenus($tblMenus, $comparison = null)
    {
        if ($tblMenus instanceof \TblMenus) {
            return $this
                ->addUsingAlias(TblProdInfoTableMap::COL_PROD_CATEGORY, $tblMenus->getMenuAlias(), $comparison);
        } elseif ($tblMenus instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TblProdInfoTableMap::COL_PROD_CATEGORY, $tblMenus->toKeyValue('PrimaryKey', 'MenuAlias'), $comparison);
        } else {
            throw new PropelException('filterByTblMenus() only accepts arguments of type \TblMenus or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the TblMenus relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildTblProdInfoQuery The current query, for fluid interface
     */
    public function joinTblMenus($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('TblMenus');

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
            $this->addJoinObject($join, 'TblMenus');
        }

        return $this;
    }

    /**
     * Use the TblMenus relation TblMenus object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \TblMenusQuery A secondary query class using the current class as primary query
     */
    public function useTblMenusQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTblMenus($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'TblMenus', '\TblMenusQuery');
    }

    /**
     * Filter the query by a related \TblProdPhotos object
     *
     * @param \TblProdPhotos|ObjectCollection $tblProdPhotos The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildTblProdInfoQuery The current query, for fluid interface
     */
    public function filterByTblProdPhotos($tblProdPhotos, $comparison = null)
    {
        if ($tblProdPhotos instanceof \TblProdPhotos) {
            return $this
                ->addUsingAlias(TblProdInfoTableMap::COL_PROD_ID, $tblProdPhotos->getProdId(), $comparison);
        } elseif ($tblProdPhotos instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TblProdInfoTableMap::COL_PROD_ID, $tblProdPhotos->toKeyValue('PrimaryKey', 'ProdId'), $comparison);
        } else {
            throw new PropelException('filterByTblProdPhotos() only accepts arguments of type \TblProdPhotos or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the TblProdPhotos relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildTblProdInfoQuery The current query, for fluid interface
     */
    public function joinTblProdPhotos($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('TblProdPhotos');

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
            $this->addJoinObject($join, 'TblProdPhotos');
        }

        return $this;
    }

    /**
     * Use the TblProdPhotos relation TblProdPhotos object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \TblProdPhotosQuery A secondary query class using the current class as primary query
     */
    public function useTblProdPhotosQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTblProdPhotos($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'TblProdPhotos', '\TblProdPhotosQuery');
    }

    /**
     * Filter the query by a related \TblProdPrices object
     *
     * @param \TblProdPrices|ObjectCollection $tblProdPrices The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildTblProdInfoQuery The current query, for fluid interface
     */
    public function filterByTblProdPrices($tblProdPrices, $comparison = null)
    {
        if ($tblProdPrices instanceof \TblProdPrices) {
            return $this
                ->addUsingAlias(TblProdInfoTableMap::COL_PROD_ID, $tblProdPrices->getProdId(), $comparison);
        } elseif ($tblProdPrices instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TblProdInfoTableMap::COL_PROD_ID, $tblProdPrices->toKeyValue('PrimaryKey', 'ProdId'), $comparison);
        } else {
            throw new PropelException('filterByTblProdPrices() only accepts arguments of type \TblProdPrices or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the TblProdPrices relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildTblProdInfoQuery The current query, for fluid interface
     */
    public function joinTblProdPrices($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('TblProdPrices');

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
            $this->addJoinObject($join, 'TblProdPrices');
        }

        return $this;
    }

    /**
     * Use the TblProdPrices relation TblProdPrices object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \TblProdPricesQuery A secondary query class using the current class as primary query
     */
    public function useTblProdPricesQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTblProdPrices($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'TblProdPrices', '\TblProdPricesQuery');
    }

    /**
     * Filter the query by a related \TblProdPricing object
     *
     * @param \TblProdPricing|ObjectCollection $tblProdPricing The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildTblProdInfoQuery The current query, for fluid interface
     */
    public function filterByTblProdPricing($tblProdPricing, $comparison = null)
    {
        if ($tblProdPricing instanceof \TblProdPricing) {
            return $this
                ->addUsingAlias(TblProdInfoTableMap::COL_PROD_PRICE_ID, $tblProdPricing->getProdPriceId(), $comparison);
        } elseif ($tblProdPricing instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TblProdInfoTableMap::COL_PROD_PRICE_ID, $tblProdPricing->toKeyValue('PrimaryKey', 'ProdPriceId'), $comparison);
        } else {
            throw new PropelException('filterByTblProdPricing() only accepts arguments of type \TblProdPricing or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the TblProdPricing relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildTblProdInfoQuery The current query, for fluid interface
     */
    public function joinTblProdPricing($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('TblProdPricing');

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
            $this->addJoinObject($join, 'TblProdPricing');
        }

        return $this;
    }

    /**
     * Use the TblProdPricing relation TblProdPricing object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \TblProdPricingQuery A secondary query class using the current class as primary query
     */
    public function useTblProdPricingQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTblProdPricing($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'TblProdPricing', '\TblProdPricingQuery');
    }

    /**
     * Filter the query by a related \TblProdSmaller object
     *
     * @param \TblProdSmaller|ObjectCollection $tblProdSmaller The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildTblProdInfoQuery The current query, for fluid interface
     */
    public function filterByTblProdSmaller($tblProdSmaller, $comparison = null)
    {
        if ($tblProdSmaller instanceof \TblProdSmaller) {
            return $this
                ->addUsingAlias(TblProdInfoTableMap::COL_PROD_ID, $tblProdSmaller->getProdId(), $comparison);
        } elseif ($tblProdSmaller instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TblProdInfoTableMap::COL_PROD_ID, $tblProdSmaller->toKeyValue('PrimaryKey', 'ProdId'), $comparison);
        } else {
            throw new PropelException('filterByTblProdSmaller() only accepts arguments of type \TblProdSmaller or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the TblProdSmaller relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildTblProdInfoQuery The current query, for fluid interface
     */
    public function joinTblProdSmaller($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('TblProdSmaller');

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
            $this->addJoinObject($join, 'TblProdSmaller');
        }

        return $this;
    }

    /**
     * Use the TblProdSmaller relation TblProdSmaller object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \TblProdSmallerQuery A secondary query class using the current class as primary query
     */
    public function useTblProdSmallerQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTblProdSmaller($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'TblProdSmaller', '\TblProdSmallerQuery');
    }

    /**
     * Filter the query by a related \TblShippingCategories object
     *
     * @param \TblShippingCategories|ObjectCollection $tblShippingCategories The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildTblProdInfoQuery The current query, for fluid interface
     */
    public function filterByTblShippingCategories($tblShippingCategories, $comparison = null)
    {
        if ($tblShippingCategories instanceof \TblShippingCategories) {
            return $this
                ->addUsingAlias(TblProdInfoTableMap::COL_PROD_CATEGORY_SHIPPING, $tblShippingCategories->getProdShippingPriceId(), $comparison);
        } elseif ($tblShippingCategories instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TblProdInfoTableMap::COL_PROD_CATEGORY_SHIPPING, $tblShippingCategories->toKeyValue('PrimaryKey', 'ProdShippingPriceId'), $comparison);
        } else {
            throw new PropelException('filterByTblShippingCategories() only accepts arguments of type \TblShippingCategories or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the TblShippingCategories relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildTblProdInfoQuery The current query, for fluid interface
     */
    public function joinTblShippingCategories($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('TblShippingCategories');

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
            $this->addJoinObject($join, 'TblShippingCategories');
        }

        return $this;
    }

    /**
     * Use the TblShippingCategories relation TblShippingCategories object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \TblShippingCategoriesQuery A secondary query class using the current class as primary query
     */
    public function useTblShippingCategoriesQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinTblShippingCategories($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'TblShippingCategories', '\TblShippingCategoriesQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildTblProdInfo $tblProdInfo Object to remove from the list of results
     *
     * @return $this|ChildTblProdInfoQuery The current query, for fluid interface
     */
    public function prune($tblProdInfo = null)
    {
        if ($tblProdInfo) {
            $this->addUsingAlias(TblProdInfoTableMap::COL_PROD_ID, $tblProdInfo->getProdId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the tbl_prod_info table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TblProdInfoTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            TblProdInfoTableMap::clearInstancePool();
            TblProdInfoTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(TblProdInfoTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(TblProdInfoTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            
            TblProdInfoTableMap::removeInstanceFromPool($criteria);
        
            $affectedRows += ModelCriteria::delete($con);
            TblProdInfoTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // TblProdInfoQuery
