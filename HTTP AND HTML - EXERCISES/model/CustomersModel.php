<?php
class CustomersModel extends Model
{
	private $first_name;
	private $family_name;
	
	public function create($first_name,$family_name)
	{
	    $this->first_name = $first_name;
	    $this->family_name = $family_name;

		// Insert into customers
		try{
            $stmt = $this->db->prepare("
              INSERT INTO `customers`
                (`first_name`, `family_name`)
              VALUES
                (?, ?)");
            $stmt->bindParam(1, $this->first_name);
            $stmt->bindParam(2, $this->family_name);
            $stmt->execute();
            $customer_id = $this->db->lastInsertId();
            return($customer_id);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
        }
        return false;
	}

    // Problem 2 - Read all customers
    public function readAll()
    {
        try {
            $stmt = $this->db->prepare("
              SELECT *         
                FROM `customers`");
            $stmt->execute();
            $all = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return ($all);
        } catch(PDOException $e){
            print "Error!: " . $e->getMessage() . "<br/>";
        }
        return false;
    }

    //Problem 8 - Update Customer
    public function updateCustomer($customer_id,$first_name, $family_name)
    {
        try {
            $stmt = $this->db->prepare("
              UPDATE `customers`         
                SET `first_name` = ?, `family_name =?`
                WHERE `customer_id` = ?");
            $stmt->bindParam(1, $this->first_name);
            $stmt->bindParam(2, $this->family_name);
            $stmt->bindParam(3, $customer_id);
            $stmt->execute();

        } catch(PDOException $e){
            print "Error!: " . $e->getMessage() . "<br/>";
            include "view/error_page.php";
        }
        return false;
    }
}