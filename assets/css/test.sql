

CREATE USER 'titrepro'@'%' IDENTIFIED WITH mysql_native_password AS '***';
GRANT ALL PRIVILEGES
ON
    *.* TO 'titrepro'@'%' REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;
GRANT ALL PRIVILEGES
ON
    `gemini`.* TO 'titrepro'@'%';