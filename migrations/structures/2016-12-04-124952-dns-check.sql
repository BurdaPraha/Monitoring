ALTER TABLE `checks` ADD `ip` VARCHAR(40)  NULL  DEFAULT NULL;
ALTER TABLE `checks` ADD `last_ip` VARCHAR(40)  NULL  DEFAULT NULL  AFTER `ip`;