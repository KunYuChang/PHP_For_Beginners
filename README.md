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

使用索引:加快查詢速度

✍️ 每當使用where的任何欄都需要加上索引
```sql
ALTER TABLE cms.article ADD INDEX (title);
```

## 資料庫連線

- [mysqli_connect](https://www.php.net/manual/en/function.mysqli-connect.php)
- [mysqli_extension](https://www.php.net/manual/en/book.mysqli.php)
- [mysqli_connect_error](https://www.php.net/manual/en/mysqli.connect-error.php)
- [mysqli_query](https://www.php.net/manual/en/mysqli.query.php)
- [PHP_Booleans](https://www.php.net/manual/en/language.types.boolean.php#language.types.boolean.casting)
- [Comparison Operators](https://www.php.net/manual/en/language.operators.comparison.php)
- [mysqli_fetch_row](https://www.php.net/manual/en/mysqli-result.fetch-row.php)
- [mysqli_fetch_all](https://www.php.net/manual/en/mysqli-result.fetch-all.php)
- [mysqli_fetch_assoc](https://www.php.net/manual/en/mysqli-result.fetch-assoc.php)

## URL傳遞資料

透過id查詢單一文章有幾種方法:
1. hot coding 
2. query string
3. $_GET (better)

- [Superglobals](https://www.php.net/manual/en/language.variables.superglobals.php)
- [$_GET](https://www.php.net/manual/en/reserved.variables.get.php)

## SQL Injection

- [is_numeric](https://www.php.net/manual/en/function.is-numeric.php)
- [isset](https://www.php.net/manual/en/function.isset.php)
- [Logical Operators](https://www.php.net/manual/en/language.operators.logical.php)

## 專案來源

此專案為 Dave Hollingworth 所開設的 Udemy 課程
