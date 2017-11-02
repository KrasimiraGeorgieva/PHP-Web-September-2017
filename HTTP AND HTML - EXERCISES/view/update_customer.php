<form method="post">
    <h2>Edit Customer Data</h2>
    <input type="hidden" name="customer_id" placeholder="Customer ID"/>
    <input type="text" name="first_name" placeholder="First name">
    <input type="text" name="family_name" placeholder="Family name">
    <hr>
    <button type="submit" name="updateCustomer">Update</button>
    <div> <?php echo "Customer with id .$customer_id. has been successfully updated."; ?>
    </div>
</form>
