<?php

    $users = mysqli_query($appconnect, "CREATE TABLE IF NOT EXISTS `acix`.`users` (
                          `id` INT NOT NULL AUTO_INCREMENT ,
                          `username` VARCHAR(255) NOT NULL ,
                          `password` VARCHAR(255) NOT NULL ,
                          `fullname` VARCHAR(255) NOT NULL ,
                          `email` VARCHAR(255) NULL ,
                          `userlevel` BOOLEAN NOT NULL ,
                          `online` BOOLEAN NOT NULL ,
                          `visibility` BOOLEAN NOT NULL ,
                          `date_created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
                          PRIMARY KEY (`id`),
                          UNIQUE (`username`))"
                        );

    $vendors = mysqli_query($appconnect, "CREATE TABLE IF NOT EXISTS `acix`.`vendors` (
                                        `id` INT NOT NULL AUTO_INCREMENT ,
                                        `name` VARCHAR(255) NOT NULL ,
                                        `phone` VARCHAR(255) NULL ,
                                        `email` VARCHAR(255) NULL ,
                                        `description` VARCHAR(255) NULL ,
                                        `visibility` BOOLEAN NOT NULL DEFAULT TRUE ,
                                        `date_created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
                                        `last_updated` TIMESTAMP NULL ,
                                        PRIMARY KEY (`id`), UNIQUE (`name`))"
                                      );

    $sales = mysqli_query($appconnect, "CREATE TABLE `acix`.`sales` (
                                        `id` INT NOT NULL AUTO_INCREMENT ,
                                        `product_id` INT NOT NULL ,
                                        `description` VARCHAR(255) NULL ,
                                        `profit` INT NOT NULL ,
                                        `month` VARCHAR(255) NOT NULL,
                                        `year` INT NOT NULL,
                                        `date_created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
                                        PRIMARY KEY (`id`))"
                                      );

    $products = mysqli_query($appconnect, "CREATE TABLE IF NOT EXISTS `acix`.`products` (
                                           `id` INT NOT NULL AUTO_INCREMENT ,
                                           `type_id` INT NOT NULL ,
                                           `brand_id` INT NOT NULL ,
                                           `vendor_id` INT NOT NULL ,
                                           `name` VARCHAR(255) NOT NULL ,
                                           `price` INT NOT NULL ,
                                           `stock` INT NOT NULL,
                                           `description` VARCHAR(255) NULL ,
                                           `visibility` BOOLEAN NOT NULL DEFAULT TRUE ,
                                           `date_created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
                                           `last_updated` TIMESTAMP NULL ,
                                           PRIMARY KEY (`id`), UNIQUE(`name`))"
                                         );

    $product_types = mysqli_query($appconnect, "CREATE TABLE IF NOT EXISTS `acix`.`product_types` (
                                                `id` INT NOT NULL AUTO_INCREMENT ,
                                                `type` VARCHAR(255) NOT NULL ,
                                                `description` VARCHAR(255) NULL ,
                                                `visibility` BOOLEAN NOT NULL DEFAULT TRUE ,
                                                `date_created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
                                                `last_updated` TIMESTAMP NULL ,
                                                PRIMARY KEY (`id`), UNIQUE (`type`))"
                                              );


    $product_brands = mysqli_query($appconnect, "CREATE TABLE IF NOT EXISTS `acix`.`product_brands` (
                                                `id` INT NOT NULL AUTO_INCREMENT ,
                                                `name` VARCHAR(255) NOT NULL ,
                                                `description` VARCHAR(255) NULL ,
                                                `visibility` BOOLEAN NOT NULL DEFAULT TRUE ,
                                                `date_created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
                                                `last_updated` TIMESTAMP NULL ,
                                                PRIMARY KEY (`id`), UNIQUE (`name`))"
                                              );


    $epense_accounts = mysqli_query($appconnect, "CREATE TABLE IF NOT EXISTS `acix`.`expense_accounts` (
                                        `id` INT NOT NULL AUTO_INCREMENT ,
                                        `account_title` VARCHAR(255) NOT NULL ,
                                        `description` VARCHAR(255) NULL ,
                                        `visibility` BOOLEAN NOT NULL DEFAULT TRUE ,
                                        `date_created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
                                        `last_updated` TIMESTAMP NULL ,
                                        PRIMARY KEY (`id`), UNIQUE (`account_title`))"
                                      );


    $store_account = mysqli_query($appconnect, "CREATE TABLE IF NOT EXISTS `acix`.`store_account` (
                                                `id` INT NOT NULL AUTO_INCREMENT ,
                                                `balance` INT NOT NULL ,
                                                `income` INT NOT NULL DEFAULT '0' ,
                                                `expense` INT NOT NULL DEFAULT '0' ,
                                                `month` VARCHAR(255) NOT NULL ,
                                                `year` INT NOT NULL,
                                                `date_created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
                                                `last_updated` TIMESTAMP NULL ,
                                                PRIMARY KEY (`id`) , UNIQUE (`month`))"
                                              );


    $expenses = mysqli_query($appconnect, "CREATE TABLE IF NOT EXISTS `acix`.`expenses` (
                                           `id` INT NOT NULL AUTO_INCREMENT ,
                                           `expense` INT NOT NULL ,
                                           `expense_acc_id` INT NOT NULL ,
                                           `description` VARCHAR(255) NOT NULL ,
                                           `month` VARCHAR(255) NOT NULL,
                                           `year` INT NOT NULL,
                                           `date_created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
                                           PRIMARY KEY (`id`))"
                                         );


    $notifications = mysqli_query($appconnect, "CREATE TABLE `acix`.`notifications` (
                                                `id` INT NOT NULL AUTO_INCREMENT ,
                                                `about` VARCHAR(255) NOT NULL ,
                                                `description` VARCHAR(255) NOT NULL ,
                                                `link` VARCHAR(255) NOT NULL ,
                                                `date_created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
                                                `visibility` BOOLEAN NOT NULL DEFAULT TRUE ,
                                                PRIMARY KEY (`id`))"
                                              );

?>
