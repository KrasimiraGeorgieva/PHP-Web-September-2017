<?php
class MyController extends Controller
{
    public function main()
    {
        include "view/header.php";
        include "view/main.php";

        switch($this->input){
            case 'sales':
                $this->viewSales();
                break;
            case 'customers':
                $this->viewCustomers();
                break;
            case 'cars':
                $this->viewCars();
                break;
            case 'addSale':
                $this->addSale();
                break;
            case'search':
                $this->viewSearchCarOwner();
                break;
            case ' ':
                $this->viewPageNotFound();
                break;
            case 'updateSale':
                include "view/update_sale.php";
                break;
            case 'updateCar':
                include "view/update_car.php";
                break;
            case 'updateCustomer':
                $this->updateCustomer();
                break;
            default:
               include "view/default.php";
                break;
        }
        include "view/footer.php";
    }

    public function viewSales()
    {
        $s = new SalesModel($this->db);
        $sales = $s->readAll();
        $sales_total = $s->readTotal();
        include "view/read_sales.php";
    }

    // Problem 1 - addSale()

    public function addSale()
    {
        include "view/add_sale.php";

        if (isset($_POST['make']) && isset($_POST['model']) && isset($_POST['year_of_production']) &&
            isset($_POST['first_name']) && isset($_POST['family_name']) && isset($_POST['amount'])) {

            try {
                $this->db->beginTransaction();
                // Insert into cars
                $make = htmlspecialchars(trim($_POST['make']));
                $model = htmlspecialchars(trim($_POST['model']));
                $year_of_production = htmlspecialchars(trim($_POST['year_of_production']));

                $car = new CarsModel($this->db);
                $car_id = $car->create($make, $model, $year_of_production);

                // Insert into customers
                $first_name = htmlspecialchars(trim($_POST['first_name']));
                $family_name = htmlspecialchars(trim($_POST['family_name']));

                $customer = new CustomersModel($this->db);
                $customer_id = $customer->create($first_name, $family_name);

                // Insert into sales
                $amount = htmlspecialchars(trim(floatval($_POST['amount'])));
                $date_sale = date('Y-m-d H:i:s');

                $sale = new SalesModel($this->db);
                $sale_id = $sale->create($amount, $car_id, $customer_id, $date_sale);

                $this->db->commit();
                include "view/addCarCustomerSale.php";
            } catch (PDOException $e) {
                $this->db->rollBack();
                print  $e->getMessage() . "<br/>";
                include "view/error_page.php";
            }
        }
        return false;
    }

    // Problem 2 - viewCustomers()
    public function viewCustomers()
    {
        $customerModel = new CustomersModel($this->db);
        $customers = $customerModel->readAll();
        include 'view/view_customers.php';
    }

    // Problem 3 - viewCars()
    public function viewCars()
    {
        $carsModel= new CarsModel($this->db);
        $cars = $carsModel->readAll();
        include 'view/view_cars.php';
    }

    // Problem 5 - viewPageNotFound()
    public function viewPageNotFound()
    {
        header("HTTP/1.0 404");
        include 'view/page_not_found.php';
    }

    // Problem 6 - SearchCarOwner()
    public function viewSearchCarOwner()
    {
        include'view/search_form.php';
        try {
            if (isset($_POST['make']) && (!empty($_POST['make']))) {
                $make = htmlspecialchars(trim($_POST['make']));
                $car = new CarsModel($this->db);
                $customers = $car->searchCarOwner($make);
                include "view/search_car_owner.php";
            }else{
                include "view/error_page.php";
            }
        }catch (PDOException $e){
            print  $e->getMessage() . "<br/>";
        }
    }

    //Problem 8 - Update info

    public function updateCustomer()
    {
        include'view/update_customer.php';
        try {
            if (isset($_POST['first_name']) && (!empty($_POST['first_name'])) && isset($_POST['family_name']) && (!empty($_POST['family_name']))) {
                $first_name = htmlspecialchars(trim($_POST['first_name']));
                $family_name = htmlspecialchars(trim($_POST['family_name']));

                $customer = new CustomersModel($this->db);
                $customer->updateCustomer($first_name, $family_name);
            }else{
                include "view/error_page.php";
            }
        }catch (PDOException $e){
            print  $e->getMessage() . "<br/>";
        }
    }
}
