; <?php exit; ?> DO NOT REMOVE THIS LINE
; file automatically generated or modified by Piwik; you can manually override the default values in global.ini.php by redefining them in this file.
[database]
host = "${MARIADB_SERVICE_HOST}"
port = "${MARIADB_SERVICE_PORT}"
username = "${DATABASE_USER}"
password = "${DATABASE_PASSWORD}"
dbname = "${DATABASE_NAME}"
tables_prefix = "${PIWIK_TABLE_PREFIX}"
adapter = PDO\MYSQL
type = InnoDB
schema = Mysql

[General]
assume_secure_protocol = 1
enable_trusted_host_check = 0
proxy_client_headers[] = "HTTP_X_FORWARDED_FOR"
proxy_host_headers[] = "HTTP_X_FORWARDED_HOST"
salt = "${PIWIK_SALT}"
${TRUSTED_HOSTS_CONFIG}

[mail]
transport = "${PIWIK_MAIL_TRANSPORT}"
port = ${PIWIK_MAIL_PORT}
host = "${PIWIK_MAIL_HOST}"
type = "${PIWIK_MAIL_TYPE}"
username = "${PIWIK_MAIL_USERNAME}"
password = "${PIWIK_MAIL_PASSWORD}"
encryption = "${PIWIK_MAIL_ENCRYPTION}"

[Plugins]
${PLUGINS_CONFIG}

[PluginsInstalled]
${PLUGINS_INSTALLED_CONFIG}
