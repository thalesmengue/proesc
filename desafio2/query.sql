/*
Comando para saber quantos produtos existem em cada categoria
 */

SELECT categories.name AS category, COUNT(products.id) AS product_count
FROM categories
JOIN products ON products.category_id = categories.id
GROUP BY categories.name;

/*
Comando para saber qual a média de preço dos produtos de cada categoria
 */

SELECT categories.name AS category, AVG(products.price) AS avg_price
FROM categories
JOIN products ON products.category_id = categories.id
GROUP BY categories.name;

/*
Comando para atualizar a categoria dos produtos
 */

UPDATE products
SET category_id = 1
WHERE category_id = 2;