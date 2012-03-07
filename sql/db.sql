
DROP TABLE IF EXISTS `festival_user`;
CREATE TABLE `festival_user` (
    `ident`             int unsigned                                                NOT NULL auto_increment,
    `email`             varchar(64)                                                 NOT NULL,
    `password`          varchar(64)                                                 NOT NULL,
    `fullname`          varchar(128)                                                NOT NULL DEFAULT '',
    `avatar`            boolean                                                     NOT NULL DEFAULT FALSE,
    `status`            enum('online', 'busy', 'away', 'offline')                   NOT NULL DEFAULT 'offline',
    `tsregister`        int unsigned                                                NOT NULL,
    PRIMARY KEY (`ident`),
    UNIQUE INDEX (`email`)
) DEFAULT CHARACTER SET UTF8;

INSERT INTO `festival_user` (`fullname`, `email`, `password`) VALUES
('Carlos Caballero',  'cijkb.j@gmail.com', '097ca637b7721e26b7e6eebb8620c75e');

DROP TABLE IF EXISTS `festival_instance`;
CREATE TABLE `festival_instance` (
    `ident`             int unsigned                                                NOT NULL auto_increment,
    `owner`             int unsigned                                                NOT NULL,
    `processor`         varchar(256)                                                NOT NULL DEFAULT '',
    `ram`               varchar(256)                                                NOT NULL DEFAULT '',
    `hdd`               varchar(256)                                                NOT NULL DEFAULT '',
    `video`             varchar(256)                                                NOT NULL DEFAULT '',
    `comments`          text                                                        NOT NULL DEFAULT '',
    `tsregister`        int unsigned                                                NOT NULL,
    PRIMARY KEY (`ident`),
    INDEX (`owner`),
    FOREIGN KEY (`owner`) REFERENCES `user`(`ident`) ON UPDATE CASCADE ON DELETE RESTRICT
) DEFAULT CHARACTER SET UTF8;

DROP TABLE IF EXISTS `festival_faq_post`;
CREATE TABLE `festival_faq_post` (
    `ident`             int unsigned                                                NOT NULL auto_increment,
    `text`              text                                                        NOT NULL,
    `author`            int unsigned                                                NOT NULL,
    `tsregister`        int unsigned                                                NOT NULL,
    PRIMARY KEY (`ident`),
    INDEX (`author`),
    FOREIGN KEY (`author`) REFERENCES `user`(`ident`) ON UPDATE CASCADE ON DELETE RESTRICT
) DEFAULT CHARACTER SET UTF8;

DROP TABLE IF EXISTS `festival_faq_post_comment`;
CREATE TABLE `festival_faq_post_comment` (
    `ident`             int unsigned                                                NOT NULL auto_increment,
    `post`              int unsigned                                                NOT NULL,
    `author`            int unsigned                                                NOT NULL,
    `comment`           text                                                        NOT NULL,
    `tsregister`        int unsigned                                                NOT NULL,
    PRIMARY KEY (`ident`, `post`),
    UNIQUE INDEX (`ident`),
    INDEX (`post`),
    FOREIGN KEY (`post`) REFERENCES `faq_post`(`ident`) ON UPDATE CASCADE ON DELETE RESTRICT,
    INDEX (`author`),
    FOREIGN KEY (`author`) REFERENCES `user`(`ident`) ON UPDATE CASCADE ON DELETE RESTRICT
) DEFAULT CHARACTER SET UTF8;
