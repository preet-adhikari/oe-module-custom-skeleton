-- This table definition is loaded and then executed when the OpenEMR interface's install button is clicked.
CREATE TABLE IF NOT EXISTS `device_request` (
    `id` BIGINT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    `uuid` BINARY,
    `pid` BIGINT DEFAULT NULL,   
    `encounter` BIGINT DEFAULT NULL, 
    `date` DATETIME DEFAULT NULL, 
    `event_date` DATETIME DEFAULT NULL, 
    `pruuid` BIGINT DEFAULT NULL, 
    `location_uuid` BINARY, 
    `device_uuid` BINARY,
    `organization_uuid` BINARY,
    `status` VARCHAR(50) DEFAULT NULL,
    `intent` VARCHAR(50) NOT NULL,
    `priority` VARCHAR(50) DEFAULT NULL,
    `insurance_uuid` BINARY DEFAULT NULL,
    `supporting_info` TEXT DEFAULT NULL,
    `note` TEXT DEFAULT NULL,
    `relevant_history_uuid` BINARY DEFAULT NULL,
    `last_updated` DATETIME,
    UNIQUE KEY `uuid` (`uuid`),
    UNIQUE KEY `pruuid` (`pruuid`),
    KEY `pid_encounter` (`pid`,`encounter`)
);
