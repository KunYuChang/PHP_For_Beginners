# PHP_For_Beginners

## 資料庫

創建資料庫
```sql
CREATE DATABASE mydatabase CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```
建立使用者
```sql
CREATE USER 'cms_www'@'localhost' IDENTIFIED BY 'cms_password';
```

使用者授權
```sql
GRANT ALL PRIVILEGES ON cms.* TO 'cms_www'@'%';
FLUSH PRIVILEGES;
```

## 專案來源

此專案為 Dave Hollingworth 所開設的 Udemy 課程
