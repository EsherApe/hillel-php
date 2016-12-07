<?php

class HotelsDb {
    /**
     * @var null|PDO
     */
    private $pdo = null;

    /**
     * hotelsDb constructor.
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
            $sql = "CREATE TABLE IF NOT EXISTS hotels (id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, hotel_name VARCHAR(255), room_price INT NOT NULL, hotel_desc VARCHAR(255)) DEFAULT CHARACTER SET utf8 ENGINE=InnoDB";
            $this->pdo->exec($sql);

            $sql = "CREATE TABLE IF NOT EXISTS orders (user_name VARCHAR(255), user_surname VARCHAR(255), user_phone VARCHAR(255), room_id INT NOT NULL) DEFAULT CHARACTER SET utf8 ENGINE=InnoDB";
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
    public function addHotel($name, $price, $description)
    {
        $sql = 'INSERT INTO hotels SET hotel_name = :name, room_price = :price, hotel_desc = :descr';

        $query = $this->pdo->prepare($sql);
        $query->bindValue(':name', $name);
        $query->bindValue(':price', $price);
        $query->bindValue(':descr', $description);
        return $query->execute();
    }

    /**
     * @return array
     */
    public function getHotels()
    {
        $resultHotels = [];
        try {
            $sqlHotels = "SELECT id, hotel_name, room_price, hotel_desc FROM hotels";
            $resultHotels = $this->pdo->query($sqlHotels);
        } catch (PDOException $e) {
            echo "ошибка при извлечении записей <br>";
            echo $e->getMessage();
        }
        return $resultHotels;
    }

    /**
     * @param int $id
     * @return bool
     */
    public function deleteHotel($id)
    {
        $sql = "DELETE FROM hotels WHERE id = :id";
        $query = $this->pdo->prepare($sql);
        $query->bindValue(':id', $id);
        return $query->execute();
    }

    /**
     * @param string $name
     * @param string $surname
     * @param string $phone
     * @param int $roomId
     * @return bool
     */
    public function orderRoom($name, $surname, $phone, $roomId)
    {
        $sql = 'INSERT INTO orders SET user_name = :name, user_surname = :surName, user_phone = :phone, room_id = :id';

        $query = $this->pdo->prepare($sql);
        $query->bindValue(':name', $name);
        $query->bindValue(':surName', $surname);
        $query->bindValue(':phone', $phone);
        $query->bindValue(':id', $roomId);
        return $query->execute();
    }

    /**
     * @return array
     */
    public function getOrders()
    {
        $resultOrders = [];
        try {
            $sqlOrders = "SELECT user_name, user_surname, user_phone, hotel.hotel_name FROM orders AS `order` INNER JOIN hotels AS `hotel` ON hotel.id = order.room_id";
            $resultOrders = $this->pdo->query($sqlOrders);
        } catch (PDOException $e) {
            echo "ошибка при извлечении записей <br>";
            echo $e->getMessage();
        }
        return $resultOrders;
    }
}