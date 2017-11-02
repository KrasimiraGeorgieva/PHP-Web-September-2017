<?php
class SalesModel extends Model{
	private $date_sale;
	private $amount;
	private $car_id;
	private $customer_id;

	public function __construct(PDO $db)
    {
        parent::__construct($db);
        $this->table = 'sales';
    }

    public function create($amount, $car_id, $customer_id, $date_sale)
	{
	    $this->amount = $amount;
	    $this->car_id = $car_id;
	    $this->customer_id = $customer_id;
	    $this->date_sale = $date_sale;

        // Insert into sales
		try{
            $stmt = $this->db->prepare("
                INSERT INTO `sales`
                  (`date_sale`,`amount`,`car_id`,`customer_id`)
                VALUES 
                   (NOW(), ?, ?, ?)");
            $stmt->bindParam(1, $this->amount);
            $stmt->bindParam(2, $this->car_id);
            $stmt->bindParam(3, $this->customer_id);
            $stmt->bindParam(4, $this->date_sale);
            $stmt->execute();
            $sale_id = $this->db->lastInsertId();
            return($sale_id);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
        }
        return false;
	}
		
	public function readAll()
	{
        try {
            $stmt = $this->db->prepare("
              SELECT *         
                FROM `deal`");
            $stmt->execute();
            $all = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return ($all);
        } catch(PDOException $e){
		    print "Error!: " . $e->getMessage() . "<br/>";
        }
	}
	
	public function readTotal()
	{
        $stmt = $this->db->prepare("
            SELECT SUM(`amount`) as `total_amount`
              FROM `sales`");
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if($row['total_amount'])
			return $row['total_amount'];
		else
			return false;
	}
}