<?php

    $dsn = 'mysql:dbname=shop;host=localhost';
    $dbh = new PDO($dsn, root);
    $res = $dbh->query("SELECT sum(price)FROM goods");
    $resul = $res->fetchAll();
    var_dump($resul);
    
    /* INSERT INTO brend(tip) VALUES ('sarp')     вставить в таблицу значение
     * DELETE FROM categpry WHERE id=1          удаляем из таблице значение
     * SELECT * FROM brend WHERE id=3              выбрать из таблице где 
     * SELECT * FROM categpry WHERE (discount > 5) AND (discount < 12)   и
     * SELECT * FROM categpry WHERE (discount > 5) OR (discount >= 12)    или
     * SELECT * FROM categpry WHERE NOT (discount > 5)   отрицание
     * SELECT * FROM brend WHERE id IS NOT NULL     не равно пустоте
     * SELECT artic, price FROM goods
     * SELECT DISTINCT artic, price FROM goods      убирает дубликаты
     * SELECT * FROM brend ORDER BY id               сортировать по 
     * SELECT * FROM brend ORDER BY id DESC          сортировать в обратном порядке
     * SELECT * FROM brend WHERE discount <> 0 ORDER BY id   запросы можно комбинировать
     * SELECT * FROM brend LIMIT 2                лимит 
     * CREATE TABLE name_bd, name_tabl (id INT,name varchar(255), PRIMARY KEY (id))  создаем таблицу
     * DROP TABLE name_bd, name_tabl       удаляет таблицу
     * DROP DATABASE name_bd               удаляет базу данных
     * ALTER TABLE name_bd, name_tabl ADD COLUMN name_column VARCHAR(128)   вставляет новую колонку в таблицу
     * UPDATE categpry SET name=[value-2],discount=[value-3] WHERE id IN (2, 5)      заменим значение в таблице с id 2 и 5
     * select * from product 
	inner join category on goods.id_categpry = categpry.id;             объеденяет таблицы 
     * UNION  к одному запросу приклеивает второй запрос
     * SELECT count(*)FROM brend     считает колличество записей в таблице (Агрегирующие функции)
     * SELECT sum(price)FROM goods      сумма всех столбцов
     * SELECT sum(price) as top FROM goods           as переименовывает столбцы
     * GROUP BY                              группируем запрос
     * like 'Р’%          поля начинаются на букву Р (% - любое колличество букв)
     *  having      ограничения на агрегирующие функции
     * start transaction;                                  две команды выполняются вместе или вообще не выполняются
	update `shop`.`user_bank_account` set money = money - 100 where id = 1;     
    update `shop`.`user_bank_account` set money = money + 100 where id = 2;
commit;
     * Когда вы выполняете какой-нибудь запрос, оптимизатор запросов MySQL пытается придумать оптимальный план выполнения 
     * этого запроса. Вы можете посмотреть этот самый план используя запрос с ключевым словом EXPLAIN
     */