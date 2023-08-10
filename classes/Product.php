<?php
    require_once "Database.php";

    class Product extends Database {
        public function addProduct($product_name, $price, $quantity) {
            
            #1. SQL QUERY
            $sql = "INSERT INTO products(`product_name`, `price`, `quantity`) VALUES('$product_name', '$price', '$quantity')";

            #2. EXECUTE THE QUERY
            if ($this->conn->query($sql)) {
                #3. REDIRECT/ERROR HANDLING
                header ("location: ../views/dashboard.php");
                exit;
            } else {
                die ("Error in adding the product." . $this->conn->error);
            }
        } 

        public function displayProducts() {
            $sql = "SELECT * FROM products";

            if ($result = $this->conn->query($sql)) {
                while ($item = $result->fetch_assoc()) {
                    $items[] = $item;
                }

                return $items;
            } else {
                die ("Error in retrieving the products: " . $this->conn->error);
            }
        }

        public function displaySpecificProduct($product_id) {
            $sql = "SELECT * FROM products WHERE id ='$product_id'";
            
            if ($result = $this->conn->query($sql)) {
                return $result->fetch_assoc();
            } else {
                die ("Error in retrieving the product details: ". $this->$conn->error);
            }
        }

        public function editProduct($product_id, $product_name, $price, $quantity) {
            $sql = "UPDATE products SET product_name = 'product_name', price = 'price', quantity = 'quantity' WHERE id = '$product_id'";

            if($this->conn->query($sql)) {
                header("location: ../views/dashboard.php");
                exit;
            } else {
                die("Error in editing product: " .$this->conn->error);
            }

        }

        public function deleteProduct($product_id) {
            $sql = "DELETE FROM products WHERE id ='$product_id'";
            
            # Execute the query
            if ($this->conn->query($sql)) {
                header("location: ../views/dashboard.php");
                exit;
            } else {
                die ("Error in deleting the product: ". $this->$conn->error);
            }

        }

        public function adjustStock($product_id, $buy_quantity) {
            $sql = "UPDATE products SET quantity = quantity - '$buy_quantity' WHERE id = '$product_id'";

            if($this->conn->query($sql)) {
                header('location: ../views/dashboard.php');
                exit;
            } else {
                die("Error in adjusting the stock: " . $this->conn->error);
            }
        }
    }

?>