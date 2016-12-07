<?php

class InternetStoreDb {
    /**
     * @var null|PDO
     */
    private $pdo = null;

    /**
     * PhonesDb constructor.
     * @param string $databaseName
     * @param string $user
     * @param string $password
     */
    public function __construct($databaseName, $user, $password)
    {
        if ($this->pdo === null) {
            $dsn = 'mysql:dbname=' . $databaseName . ';host=localhost';
            try {
                $this->pdo = new PDO($dsn, $user, $password);
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->pdo->exec('SET NAMES "utf8"');
            } catch (PDOException $e) {
                echo 'Подключение не удалось: ' . $e->getMessage();
            }
            $this->prepareDb();
        }
    }

    private function prepareDb()
    {
        try {
            $sql = "CREATE TABLE IF NOT EXISTS products (id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, product_name VARCHAR(255), product_price INT NOT NULL, product_desc VARCHAR(255), product_img_link VARCHAR(255)) DEFAULT CHARACTER SET utf8 ENGINE=InnoDB";
            $this->pdo->exec($sql);

            $sql = "CREATE TABLE IF NOT EXISTS orders (id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, user_name VARCHAR(255), user_phone VARCHAR(255), user_email VARCHAR(255), product_id INT NOT NULL, product_amount INT NOT NULL) DEFAULT CHARACTER SET utf8 ENGINE=InnoDB";
            $this->pdo->exec($sql);
        } catch (PDOException $e) {
            echo "Ошибка при создании таблицы!<br>";
            echo $e->getMessage();
            exit();
        }
    }

    /**
     * @param string $name
     * @param int $price
     * @param string $description
     * @return bool
     */
    public function addProduct($name, $price, $description, $imgLink)
    {
        $sql = 'INSERT INTO products SET product_name = :name, product_price = :price, product_desc = :descr, product_img_link = :link';

        $query = $this->pdo->prepare($sql);
        $query->bindValue(':name', $name);
        $query->bindValue(':price', $price);
        $query->bindValue(':descr', $description);
        $query->bindValue(':link', $imgLink);
        return $query->execute();
    }

    /**
     * @return array
     */
    public function getProducts()
    {
        $result = [];
        try {
            $sql = "SELECT id, product_name, product_price, product_desc, product_img_link FROM products";
            $result = $this->pdo->query($sql);
        } catch (PDOException $e) {
            echo "ошибка при извлечении записей <br>";
            echo $e->getMessage();
        }
        return $result;
    }

    /**
     * @param int $id
     * @return array
     */
    public function getProductItem($id)
    {
        $result = [];
        try {
            $sql = "SELECT id, product_name, product_price, product_desc, product_img_link FROM products WHERE id = :id";
            $query = $this->pdo->prepare($sql);
            $query->bindValue(':id', $id, PDO::PARAM_INT);
            $query->execute();
            $result = $query->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "ошибка при извлечении записей <br>";
            echo $e->getMessage();
        }
        return $result;
    }

    /**
     * @param int $id
     * @return bool
     */
    public function deleteProduct($id)
    {
        $sql = "DELETE FROM products WHERE id = :id";
        $query = $this->pdo->prepare($sql);
        $query->bindValue(':id', $id);
        return $query->execute();
    }

    /**
     * @param string $name
     * @param string $email
     * @param string $phone
     * @param int $product_id
     * @param int $product_amount
     * @return bool
     */
    public function orderProduct($name, $phone, $email, $product_id, $product_amount)
    {
        $sql = 'INSERT INTO orders SET user_name = :name, user_email = :email, user_phone = :phone, product_id = :id, product_amount = :amount';

        $query = $this->pdo->prepare($sql);
        $query->bindValue(':name', $name);
        $query->bindValue(':phone', $phone);
        $query->bindValue(':email', $email);
        $query->bindValue(':id', $product_id);
        $query->bindValue(':amount', $product_amount);
        return $query->execute();
    }

    /**
     * @return array
     */
    /*public function getOrders()
    {
        $resultOrders = [];
        try {
            $sqlOrders = "SELECT user_name, user_surname, user_phone, hotel.hotel_name FROM orders AS `order` INNER JOIN Phones AS `hotel` ON hotel.id = order.room_id";
            $resultOrders = $this->pdo->query($sqlOrders);
        } catch (PDOException $e) {
            echo "ошибка при извлечении записей <br>";
            echo $e->getMessage();
        }
        return $resultOrders;
    }*/
}