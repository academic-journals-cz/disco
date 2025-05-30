/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- disco_plugin
CREATE TABLE IF NOT EXISTS `disco_plugin` (
  `disco_id` bigint NOT NULL AUTO_INCREMENT,
  `context_id` bigint NOT NULL,
  PRIMARY KEY (`disco_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- disco_plugin_settings
CREATE TABLE IF NOT EXISTS `disco_plugin_settings` (
  `disco_id` bigint NOT NULL,
  `locale` varchar(14) NOT NULL DEFAULT '',
  `setting_name` varchar(255) NOT NULL,
  `setting_value` longtext,
  `setting_type` varchar(6) NOT NULL COMMENT '(bool|int|float|string|object)',
  UNIQUE KEY `disco_plugin_settings_f_l_s_pkey` (`disco_id`,`locale`,`setting_name`),
  KEY `disco_plugin_settings_id` (`disco_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

