-- This table definition is loaded and then executed when the OpenEMR interface's install button is clicked.
CREATE TABLE IF NOT EXISTS `mod_custom_skeleton_records`(
    `id` INT(11)  PRIMARY KEY AUTO_INCREMENT NOT NULL
    ,`name` VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS `device_request` (
    `id` BIGINT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    `uuid` BINARY,
    `identifier` TEXT,
    `reference` VARCHAR(255),
    `instantiatesURI` VARCHAR(255),
    `groupidentifier` TEXT,
    `status` VARCHAR(50),
    `intent` VARCHAR(50) NOT NULL,
    `priority` VARCHAR(50),
    `code_reference` VARCHAR(255) NOT NULL,
    `code_codeable_concept` TEXT NOT NULL,
    `subject` VARCHAR(255) NOT NULL,
    `encounter` VARCHAR(255),
    `occurrence_date_time` DATETIME,
    `occurrence_period` TEXT,
    `occurrence_timing` TEXT,
    `authored_on` DATETIME,
    `requester` TEXT,
    `performer` TEXT,
    `reason` TEXT,
    `as_needed` BOOLEAN,
    `as_needed_for` TEXT,
    `insurance` TEXT,
    `supporting_info` TEXT,
    `note` TEXT,
    `relevant_history` TEXT,
    `last_updated` DATETIME
);
