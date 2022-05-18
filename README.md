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

資料表創建原則
1. 使用單數名稱
2. 全小寫+底線

```sql
CREATE TABLE article (
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  title VARCHAR(128) NOT NULL,
  content TEXT NOT NULL,
  published_at DATETIME
);
```

插入資料
```sql
INSERT INTO article(title, content, published_at)
VALUES ('Fist post','This is the first of many posts!', '2022-05-18 10:30:25'),
VALUES ('Second post','Another interesting post!', '2022-05-18 10:35:25');
```


## 專案來源

此專案為 Dave Hollingworth 所開設的 Udemy 課程
