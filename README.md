# PHP_For_Beginners

## 資料庫

創建資料庫

```sql
CREATE
DATABASE mydatabase CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

建立使用者

```sql
CREATE
USER 'cms_www'@'localhost' IDENTIFIED BY 'cms_password';
```

使用者授權

```sql
GRANT
ALL
PRIVILEGES
ON
cms
.
*
TO
'cms_www'@'%';
FLUSH
PRIVILEGES;
```

資料表創建原則

1. 使用單數名稱
2. 全小寫+底線

```sql
CREATE TABLE article
(
    id           INT          NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title        VARCHAR(128) NOT NULL,
    content      TEXT         NOT NULL,
    published_at DATETIME
);
```

插入資料

```sql
INSERT INTO article(title, content, published_at)
VALUES ('Fist post', 'This is the first of many posts!', '2022-05-18 10:30:25'),
VALUES ('Second post', 'Another interesting post!', '2022-05-18 10:35:25');
```

使用索引:加快查詢速度

✍️ 每當使用where的任何欄都需要加上索引

```sql
ALTER TABLE cms.article
    ADD INDEX (title);
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

## Don't Repeat Youerself

- [include](https://www.php.net/manual/en/function.include.php)
- [require](https://www.php.net/manual/en/function.require.php)
- [include_once](https://www.php.net/manual/en/function.include-once.php)
- [require_once](https://www.php.net/manual/en/function.require-once.php#function.require-once)

## 對於 Included Files 進行保護

- [.htaccess](https://httpd.apache.org/docs/current/howto/htaccess.html)

## HTML Forms

- [The Form element](https://devdocs.io/html/element/form)
- [button tag vs input type=”button” attribute](https://www.geeksforgeeks.org/button-tag-vs-input-typebutton-attribute/)
- 預設為GET

預設GET發送表單的缺點
1. 表單輸入的內容顯示於URL查詢參數中(敏感數據不希望呈現)
2. URL也保存在瀏覽器的歷史記錄中

使用POST, 約定成俗, HTML屬性中設置為小寫
```php
<form method="post"></form>
```

### GET VS POST

GET 
1. 儲存書籤 : 😀可以使用來儲存書籤
2. 敏感資料 : 😵不要使用於敏感數據!
3. 容量限制 : 😵有容量的限制，因此無法發送大量數據!
4. 使用時機 : 讀取資料

POST
1. 儲存書籤 : 😵不能使用來儲存書籤!
2. 敏感資料 : 😀使用於傳遞敏感數據
3. 容量限制 : 😀沒有容量的限制
4. 使用時機 : 傳送資料

- [$_SERVER](https://www.php.net/manual/en/reserved.variables.server.php)

### 不同類型的數據

- [Form Input](https://devdocs.io/html/element/input)
- [HTML5 PLEASE](https://html5please.com/)
- [Can I use](https://caniuse.com/)

## 資料插入資料庫

- [Data Manipulation](https://mariadb.com/kb/en/data-manipulation/)
- [mysqli_insert_id](https://www.php.net/manual/en/mysqli.insert-id.php)
- [The mysql Database Tables](https://mariadb.com/kb/en/the-mysql-database-tables/)

How SQL Injection Attacks Work

- [The mysql Database Tables](https://mariadb.com/kb/en/the-mysql-database-tables/)
- [crack mysql password](https://www.google.co.uk/search?q=crack+mysql+password)
- [Free Password Hash Cracker](https://crackstation.net/)

Avoid SQL Injection Attacks:Escape Input
- [mysqli_real_escape_string](https://www.php.net/manual/en/mysqli.real-escape-string.php)
- [mysqli_escape_string](https://www.php.net/manual/en/function.mysqli-escape-string.php)

Avoid SQL Injection Attacks:Use Prepared Statements
- [Prepared Statements](https://www.php.net/manual/en/mysqli.quickstart.prepared-statements.php)
- [mysqli_prepare](https://www.php.net/manual/en/mysqli.prepare.php)
- [mysqli_stmt_bind_param](https://www.php.net/manual/en/mysqli-stmt.bind-param.php)
- [mysqli_stmt_execute](https://www.php.net/manual/en/mysqli-stmt.execute.php)
- [General Query Log](https://mariadb.com/kb/en/general-query-log/)

## 涵式與驗證

Function 是一種封裝程式碼以可重複執行的方法
- [PHPDoc](https://docs.phpdoc.org/guide/getting-started/what-is-a-docblock.html)

連線DB優化
1. 獨立成一個檔案，避免重複
2. 使用涵式，好處是可以判斷什麼時候要連線、什麼時候不要

## 專案來源

此專案為 Dave Hollingworth 所開設的 Udemy 課程

