
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- tbl_era
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `tbl_era`;

CREATE TABLE `tbl_era`
(
    `era_id` INTEGER NOT NULL AUTO_INCREMENT,
    `era_description` TEXT NOT NULL,
    PRIMARY KEY (`era_id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- tbl_general
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `tbl_general`;

CREATE TABLE `tbl_general`
(
    `prod_general` INTEGER NOT NULL AUTO_INCREMENT,
    `prod_name` TEXT NOT NULL,
    `prod_description` TEXT NOT NULL,
    `prod_description_pa` TEXT NOT NULL,
    `prod_description_m3` TEXT NOT NULL,
    `prod_keywords` TEXT,
    `prod_keywords_pa` TEXT,
    `prod_keywords_m3` TEXT,
    `prod_writeupkeywords` TEXT,
    `prod_writeupkeywords_pa` TEXT,
    `prod_writeupkeywords_m3` TEXT,
    PRIMARY KEY (`prod_general`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- tbl_madetoorder
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `tbl_madetoorder`;

CREATE TABLE `tbl_madetoorder`
(
    `mad_id` INTEGER DEFAULT 0 NOT NULL,
    `mad_name` TEXT NOT NULL,
    `mad_email` TEXT NOT NULL,
    `mad_color` TEXT NOT NULL,
    `mad_length` TEXT NOT NULL,
    `mad_mark` TEXT NOT NULL,
    `mad_rem` TEXT NOT NULL,
    `mad_url` TEXT NOT NULL,
    `mad_photo` TEXT NOT NULL,
    `mad_photo2` TEXT NOT NULL,
    `mad_photo3` TEXT NOT NULL,
    PRIMARY KEY (`mad_id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- tbl_menus
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `tbl_menus`;

CREATE TABLE `tbl_menus`
(
    `menu_id` SMALLINT(9) NOT NULL AUTO_INCREMENT,
    `menu_alias` TEXT NOT NULL,
    `menu_name` TEXT NOT NULL,
    `menu_status` TEXT NOT NULL,
    `menu_title` TEXT NOT NULL,
    `menu_description` TEXT NOT NULL,
    `menu_writeup` TEXT,
    `menu_status_pa` TEXT NOT NULL,
    `menu_description_pa` TEXT NOT NULL,
    `menu_writeup_pa` TEXT,
    `menu_status_m3` TEXT NOT NULL,
    `menu_description_m3` TEXT NOT NULL,
    `menu_writeup_m3` TEXT,
    `menu_writeupkeywords` TEXT NOT NULL,
    `menu_writeupkeywords_pa` TEXT NOT NULL,
    `menu_writeupkeywords_m3` TEXT NOT NULL,
    PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- tbl_photos
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `tbl_photos`;

CREATE TABLE `tbl_photos`
(
    `photo_id` INTEGER NOT NULL AUTO_INCREMENT,
    `photo_name` TEXT NOT NULL,
    `prod_id` INTEGER NOT NULL,
    PRIMARY KEY (`photo_id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- tbl_photos_blank
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `tbl_photos_blank`;

CREATE TABLE `tbl_photos_blank`
(
    `photo_id` INTEGER NOT NULL AUTO_INCREMENT,
    `photo_name` TEXT NOT NULL,
    `prod_id` INTEGER NOT NULL,
    PRIMARY KEY (`photo_id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- tbl_photos_m3
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `tbl_photos_m3`;

CREATE TABLE `tbl_photos_m3`
(
    `photo_id` INTEGER NOT NULL AUTO_INCREMENT,
    `photo_name` TEXT NOT NULL,
    `prod_id` INTEGER NOT NULL,
    PRIMARY KEY (`photo_id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- tbl_photos_pa
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `tbl_photos_pa`;

CREATE TABLE `tbl_photos_pa`
(
    `photo_id` INTEGER NOT NULL AUTO_INCREMENT,
    `photo_name` TEXT NOT NULL,
    `prod_id` INTEGER NOT NULL,
    PRIMARY KEY (`photo_id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- tbl_prod_info
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `tbl_prod_info`;

CREATE TABLE `tbl_prod_info`
(
    `prod_id` INTEGER NOT NULL AUTO_INCREMENT,
    `prod_price_id` INTEGER NOT NULL,
    `prod_name` TEXT NOT NULL,
    `prod_alt1` TEXT NOT NULL,
    `prod_alt2` TEXT NOT NULL,
    `prod_alt3` TEXT NOT NULL,
    `prod_alt4` TEXT NOT NULL,
    `prod_code` TEXT NOT NULL,
    `prod_category` TEXT NOT NULL,
    `prod_category_shipping` INTEGER,
    `prod_writeup` LONGTEXT NOT NULL,
    `prod_length` TEXT NOT NULL,
    `prod_wingspan` TEXT NOT NULL,
    `prod_height` TEXT NOT NULL,
    `prod_scale` TEXT NOT NULL,
    `prod_links` TEXT NOT NULL,
    `prod_linkdescription` TEXT NOT NULL,
    `prod_front` TEXT,
    `prod_keywords` TEXT NOT NULL,
    `prod_keywords_writeup` TEXT NOT NULL,
    `prod_title` TEXT NOT NULL,
    `prod_description` TEXT NOT NULL,
    `prod_general` INTEGER NOT NULL,
    `prod_era` INTEGER NOT NULL,
    `prod_company` TEXT NOT NULL,
    `prod_related` TEXT NOT NULL,
    `prod_related_pa` TEXT,
    `prod_related_m3` TEXT,
    `prod_related2` TEXT NOT NULL,
    `prod_saveas` INTEGER NOT NULL,
    `prod_aircraftreg` TEXT NOT NULL,
    `mb` INTEGER,
    `pa` INTEGER,
    `m3` INTEGER,
    PRIMARY KEY (`prod_id`),
    INDEX `prod_name` (`prod_name`(50)),
    INDEX `prod_id` (`prod_id`),
    INDEX `tbl_prod_info_fi_cc8e2b` (`prod_era`),
    INDEX `tbl_prod_info_fi_fea4b0` (`prod_general`),
    INDEX `tbl_prod_info_fi_9712d5` (`prod_category`),
    INDEX `tbl_prod_info_fi_3b4d92` (`prod_price_id`),
    INDEX `tbl_prod_info_fi_65afda` (`prod_category_shipping`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- tbl_prod_photos
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `tbl_prod_photos`;

CREATE TABLE `tbl_prod_photos`
(
    `prod_id` INTEGER NOT NULL AUTO_INCREMENT,
    `prod_solo_1` TEXT NOT NULL,
    `prod_solo_2` TEXT NOT NULL,
    `prod_solo_3` TEXT NOT NULL,
    `prod_solo_4` TEXT NOT NULL,
    `prod_solo_1_pa` TEXT,
    `prod_solo_2_pa` TEXT,
    `prod_solo_3_pa` TEXT,
    `prod_solo_4_pa` TEXT,
    `prod_solo_1_m3` TEXT,
    `prod_solo_2_m3` TEXT,
    `prod_solo_3_m3` TEXT,
    `prod_solo_4_m3` TEXT,
    `prod_solo_1_blank` TEXT,
    `prod_solo_2_blank` TEXT,
    `prod_solo_3_blank` TEXT,
    `prod_solo_4_blank` TEXT,
    PRIMARY KEY (`prod_id`),
    INDEX `prod_id` (`prod_id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- tbl_prod_prices
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `tbl_prod_prices`;

CREATE TABLE `tbl_prod_prices`
(
    `prod_id` INTEGER NOT NULL AUTO_INCREMENT,
    `prod_normalprice` TEXT NOT NULL,
    `prod_salesprice` TEXT NOT NULL,
    `prod_customprice` TEXT NOT NULL,
    PRIMARY KEY (`prod_id`),
    INDEX `prod_id` (`prod_id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- tbl_prod_pricing
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `tbl_prod_pricing`;

CREATE TABLE `tbl_prod_pricing`
(
    `prod_price_id` INTEGER NOT NULL AUTO_INCREMENT,
    `prod_price_name` TEXT NOT NULL,
    `prod_price_description` TEXT NOT NULL,
    `prod_price_price` TEXT NOT NULL,
    PRIMARY KEY (`prod_price_id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- tbl_prod_shipping
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `tbl_prod_shipping`;

CREATE TABLE `tbl_prod_shipping`
(
    `prod_shipping_price_id` INTEGER NOT NULL AUTO_INCREMENT,
    `prod_shipping_name` TEXT NOT NULL,
    `prod_shipping_description` TEXT NOT NULL,
    `prod_shipping_asia` TEXT NOT NULL,
    `prod_shipping_europe` TEXT NOT NULL,
    `prod_shipping_usa` TEXT NOT NULL,
    `prod_shipping_canada` TEXT NOT NULL,
    `prod_shipping_au` TEXT NOT NULL,
    `prod_shipping_asia_parcel` TEXT NOT NULL,
    `prod_shipping_europe_parcel` TEXT NOT NULL,
    `prod_shipping_usa_parcel` TEXT NOT NULL,
    `prod_shipping_canada_parcel` TEXT NOT NULL,
    `prod_shipping_au_parcel` TEXT NOT NULL,
    PRIMARY KEY (`prod_shipping_price_id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- tbl_prod_smaller
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `tbl_prod_smaller`;

CREATE TABLE `tbl_prod_smaller`
(
    `prod_id` INTEGER NOT NULL,
    `sm_enable_id` INTEGER NOT NULL,
    `sm_prod_length` TEXT NOT NULL,
    `sm_prod_wingspan` TEXT NOT NULL,
    `sm_prod_height` TEXT NOT NULL,
    `sm_prod_scale` TEXT NOT NULL,
    `sm_prod_price_id` INTEGER NOT NULL,
    `sm_prod_normalprice` FLOAT NOT NULL,
    `sm_prod_shipping_price_id` INTEGER NOT NULL,
    PRIMARY KEY (`prod_id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- tbl_settings
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `tbl_settings`;

CREATE TABLE `tbl_settings`
(
    `settings_id` INTEGER NOT NULL,
    `settings_name` TEXT NOT NULL,
    `settings_value` TEXT NOT NULL
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- tbl_shipping_categories
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `tbl_shipping_categories`;

CREATE TABLE `tbl_shipping_categories`
(
    `prod_shipping_price_id` INTEGER NOT NULL AUTO_INCREMENT,
    `prod_shipping_name` TEXT NOT NULL,
    `weight_ide` INTEGER NOT NULL,
    `weight_idp` INTEGER NOT NULL,
    PRIMARY KEY (`prod_shipping_price_id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- tbl_shipping_countries
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `tbl_shipping_countries`;

CREATE TABLE `tbl_shipping_countries`
(
    `cty_id` INTEGER NOT NULL AUTO_INCREMENT,
    `cty_name` TEXT,
    `cty_priority` TEXT,
    `cty_economy` TEXT,
    `zone_id` INTEGER,
    PRIMARY KEY (`cty_id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- tbl_shipping_economy
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `tbl_shipping_economy`;

CREATE TABLE `tbl_shipping_economy`
(
    `weight_ide` INTEGER NOT NULL AUTO_INCREMENT,
    `weight_name` TEXT NOT NULL,
    `A` DECIMAL(10,2) NOT NULL,
    `B` DECIMAL(10,2) NOT NULL,
    `C` DECIMAL(10,2) NOT NULL,
    `D` DECIMAL(10,2) NOT NULL,
    `E` DECIMAL(10,2) NOT NULL,
    `F` DECIMAL(10,2) NOT NULL,
    `G` DECIMAL(10,2) NOT NULL,
    `H` DECIMAL(10,2) NOT NULL,
    `K` DECIMAL(10,2) NOT NULL,
    `N` DECIMAL(10,2) NOT NULL,
    `O` DECIMAL(10,2) NOT NULL,
    `P` DECIMAL(10,2) NOT NULL,
    `Q` DECIMAL(10,2) NOT NULL,
    `R` DECIMAL(10,2) NOT NULL,
    `T` DECIMAL(10,2) NOT NULL,
    `U` DECIMAL(10,2) NOT NULL,
    `V` DECIMAL(10,2) NOT NULL,
    `W` DECIMAL(10,2) NOT NULL,
    `X` DECIMAL(10,2) NOT NULL,
    `Y` DECIMAL(10,2) NOT NULL,
    `Z` DECIMAL(10,2) NOT NULL,
    `AA` DECIMAL(10,2) NOT NULL,
    `AB` DECIMAL(10,2) NOT NULL,
    PRIMARY KEY (`weight_ide`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- tbl_shipping_priority
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `tbl_shipping_priority`;

CREATE TABLE `tbl_shipping_priority`
(
    `weight_idp` INTEGER NOT NULL AUTO_INCREMENT,
    `weight_name` TEXT NOT NULL,
    `A` DECIMAL(10,2) NOT NULL,
    `B` DECIMAL(10,2) NOT NULL,
    `C` DECIMAL(10,2) NOT NULL,
    `D` DECIMAL(10,2) NOT NULL,
    `E` DECIMAL(10,2) NOT NULL,
    `F` DECIMAL(10,2) NOT NULL,
    `G` DECIMAL(10,2) NOT NULL,
    `H` DECIMAL(10,2) NOT NULL,
    `K` DECIMAL(10,2) NOT NULL,
    `N` DECIMAL(10,2) NOT NULL,
    `O` DECIMAL(10,2) NOT NULL,
    `P` DECIMAL(10,2) NOT NULL,
    `Q` DECIMAL(10,2) NOT NULL,
    `R` DECIMAL(10,2) NOT NULL,
    `T` DECIMAL(10,2) NOT NULL,
    `U` DECIMAL(10,2) NOT NULL,
    `V` DECIMAL(10,2) NOT NULL,
    `W` DECIMAL(10,2) NOT NULL,
    `X` DECIMAL(10,2) NOT NULL,
    `Y` DECIMAL(10,2) NOT NULL,
    `Z` DECIMAL(10,2) NOT NULL,
    `AA` DECIMAL(10,2) NOT NULL,
    `AB` DECIMAL(10,2) NOT NULL,
    PRIMARY KEY (`weight_idp`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- tbl_shipping_zones
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `tbl_shipping_zones`;

CREATE TABLE `tbl_shipping_zones`
(
    `zone_id` INTEGER NOT NULL AUTO_INCREMENT,
    `zone_name` TEXT NOT NULL,
    `zone_desc` TEXT NOT NULL,
    PRIMARY KEY (`zone_id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- tbl_stands
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `tbl_stands`;

CREATE TABLE `tbl_stands`
(
    `stand_id` INTEGER DEFAULT 0 NOT NULL,
    `stand_name` LONGTEXT NOT NULL,
    `stand_price` INTEGER DEFAULT 0 NOT NULL,
    `mb` INTEGER,
    `pa` INTEGER,
    `m3` INTEGER,
    PRIMARY KEY (`stand_id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- tbl_users
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `tbl_users`;

CREATE TABLE `tbl_users`
(
    `user_id` INTEGER NOT NULL AUTO_INCREMENT,
    `user_username` TEXT NOT NULL,
    `user_password` TEXT NOT NULL,
    `user_lastlogin` TEXT NOT NULL,
    PRIMARY KEY (`user_id`)
) ENGINE=MyISAM;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
