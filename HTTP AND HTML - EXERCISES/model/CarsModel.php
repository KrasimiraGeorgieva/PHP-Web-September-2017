<?php
class CarsModel extends Model
{
	private $make;
	private $model;
	private $year_of_production;
	protected $table;
	
	public function __construct(PDO $db)
	{
	    parent::__construct($db);
		$this->table = 'cars';
	}
	
	public function create($make,$model,$year_of_production){
		try {
		    $this->make = $make;
		    $this->model = $model;
		    $this->year_of_production = $year_of_production;

            // Insert into car
            $stmt = $this->db->prepare("
              INSERT INTO `".$this->table."`
                (`make`, `model`, `year_of_production`)
              VALUES
                (?, ?, ?)");
            $stmt->bindParam(1, $this->make);
            $stmt->bindParam(2, $this->model);
            $stmt->bindParam(3, $this->year_of_production);
            $stmt->execute();
            $car_id = $this->db->lastInsertId();
			return $car_id;
		 } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
        }
        return false;
	}

	public function readAll()
    {
        try{
            $stmt = $this->db->prepare("
              SELECT *         
                FROM " . $this->table);
            $stmt->execute();
            $all = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return ($all);

        }catch (PDOException $e){
            print "Error!: " . $e->getMessage() . "<br/>";
        }
    }

    //  Problem 6 - Method searches cars and owners.

    public function searchCarOwner(string $make)
    {
        try{
            $stmt = $this->db->prepare("
            SELECT `car_id`, `make`, `model`, `year_of_production`, `customer_id`, `first_name`, `family_name` 
            FROM `cars` 
            INNER JOIN `sales` USING(`car_id`)
            INNER JOIN `customers` USING(`customer_id`)
            WHERE `make` = ?");
            $stmt->bindParam(1, $make);
            $stmt->execute();
            $all = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return ($all);
        }catch (PDOException $e){
            print "Error!: " . $e->getMessage() . "<br/>";
        }
    }
}