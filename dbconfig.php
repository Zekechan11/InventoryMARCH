<?php
$newconnection = new Connection();

Class Connection {
    private $server = "mysql:host=localhost;dbname=march_inventory";
    private $user = "root";
    private $pass = "";
    private $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
    protected $con;

    public function openConnection(){
        try {
            $this->con = new PDO($this->server,$this->user,$this->pass,$this->options);
            return $this->con;
        } catch (PDOException $e) {
            echo "There is some problem in the connection :".$e->getMessage();
        }}
    public function closeConnection(){
        $this->con = null;
    }       
}

// Function to get the count of categories
function getCategoryCount($conn)
{
    $stmt = $conn->prepare('SELECT COUNT(*) AS category_count FROM category_table');
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result['category_count'];
}

// Establish a database connection
$newconnection = new Connection();
$conn = $newconnection->openConnection();

// Function to get the count of products
function getProductCount($conn)
{
    $stmt = $conn->prepare('SELECT COUNT(*) AS product_count FROM products_table');
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result['product_count'];
}

function getInventoryCount($conn)
{
    $stmt = $conn->prepare('SELECT COUNT(*) AS inventory_count FROM inventory_table');
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result['inventory_count'];
}
?>