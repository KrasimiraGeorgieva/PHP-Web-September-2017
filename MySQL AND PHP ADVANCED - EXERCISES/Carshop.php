<?php
class Carshop
{
    private $db = false;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function main()
    {
        do{
            $input_str = trim(fgets(STDIN));
            $input_arr = explode(",", $input_str);
            if(count($input_arr)  == 6){
                $car = [
                    'make' => $input_arr[0],
                    'model'=> $input_arr[1],
                    'year_of_production' => $input_arr[2],
                ];
                $person = [
                    'first_name' =>  $input_arr[3],
                    'family_name' => $input_arr[4]
                ];
                $amount = [
                    'amount' => str_replace("BGN",'',$input_arr[5])
                ];
                $sale_id = $this->setSale($car, $person, $amount);
                if($sale_id){
                   echo $this->getSale($sale_id);
                }
            }elseif (count($input_arr) == 1 && strtolower($input_arr[0]) == 'sales') {
                echo $this->getSales();
            }
        }
        while($input_str != "Bye");
    }


    //Get
    protected function getSale($sale_id)
    {
    $stmt= $this->db->prepare("
        SELECT `date_sale`
        FROM `sales`
        WHERE `sale_id` = `sale_id`");
        $stmt->execute();
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            return "New sale entered ". ' '.$row['date_sale'];
        }
    }

    //Get
    protected function getSales()
    {
        try {
            $this->db->beginTransaction();
            $stmt= $this->db->prepare("
            SELECT
            `cars` . `make`,
            `cars` . `model`,
            `cars` . `year_of_production`,
            `sales` . `date_sale` AS `date_of_deal`,
            `sales` . `amount`
            FROM `sales`
             INNER JOIN `cars`
              ON `cars`.`car_id` = `sales`.`car_id`");
            $stmt->execute();
            $this->db->commit();
            $out = "";
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

                $out .= $row ['make'] . "  |";
                $out .= $row ['model'] . "  |";
                $out .= $row ['date_of_deal'] . "  |";
                $out .= $row ['amount'] . PHP_EOL;
            }

            $out .= "---" . PHP_EOL;
            $stmt = $this->db->prepare("
            SELECT SUM(`amount`) as `total_amount`
            FROM `sales`");
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($row) {
                $out .= "Total: " . $row['total_amount'] . PHP_EOL;
            }
            return $out;
        }catch (PDOException $e){
            $this->db->rollBack();
            print "Error!: " . $e->getMessage();
        }
	}

    //Set
    protected function setSale($car, $person, $amount)
    {
        try {
            // Insert into car
            $this->db->beginTransaction();
            $stmt = $this->db->prepare("
              INSERT INTO `cars`
                (`make`, `model`, `year_of_production`)
              VALUES
                (?, ?, ?)");
            $stmt->bindParam(1, $car['make']);
            $stmt->bindParam(2, $car['model']);
            $stmt->bindParam(3, $car['year_of_production']);
            $stmt->execute();
            $car_id = $this->db->lastInsertId();

            // Insert into customers
            $stmt = $this->db->prepare("
              INSERT INTO `customers`
                (`first_name`, `family_name`)
              VALUES
                (?, ?)");
            $stmt->bindParam(1, $person['first_name']);
            $stmt->bindParam(2, $person['family_name']);
            $stmt->execute();
            $customer_id = $this->db->lastInsertId();


            // Insert into sales
            $stmt = $this->db->prepare("
              INSERT INTO `sales`
                (`date_sale`, `amount`, `car_id`, `customer_id`)
              VALUES
                (NOW(), ?, ?, ?)");

            $stmt->bindParam(1,$amount['amount']);
            $stmt->bindParam(2,$car_id);
            $stmt->bindParam(3, $customer_id);
            $stmt->execute();
            $sale_id = $this->db->lastInsertId();

            $this->db->commit();
            return $sale_id;

        } catch (PDOException $e) {
            $this->db->rollBack();
            print "Error!: " . $e->getMessage() . "<br/>";
        }
        return false;
    }
}

