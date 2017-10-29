<?php
declare(strict_types = 1);

/*
 * Create php file that gets student data from standard input. The script must receive data until get the “end”
 * keyword.
 *
 * <First_name> <Last_name> <Studen_number> <Course_Name>

*/
class Transaction
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function main()
    {
            $input = '';
            while ($input != 'end') {
                $input = explode(' ', trim(fgets(STDIN)));
                if (count($input) < 4 || count($input) > 4) {
                    break;
                }
                if(count($input == 4)) {
                    $student = [
                        'first_name' => $input[0],
                        'last_name' => $input[1],
                        'student_number' => $input[2]
                    ];

                    $courses = ['course_name' => $input[3]];
                    $this->setStudent($student,$courses);
                    $this->getStudentsData();
                }
            }
    }
    //Problem 1.Prepare Database
    //Problem 2.Populate tables via PHP file
    protected function setStudent($student, $courses)
    {
        try {
            $this->db->beginTransaction();
            //Insert into student
            $db_stm = $this->db->prepare('INSERT INTO `student` (`first_name`, `last_name`, `student_number`)
                                          VALUES (?, ?, ?)');

            $db_stm->bindParam(1, $student['first_name']);
            $db_stm->bindParam(2, $student['last_name']);
            $db_stm->bindParam(3, $student['student_number']);

            $db_stm->execute();
            $student_id = $this->db->lastInsertId();
            //Insert into courses
            $db_stm = $this->db->prepare('INSERT INTO `courses` (`course_id`) VALUES (?)');
            $db_stm->bindParam(1, $courses['course_id']);

            $db_stm->execute();
            $course_id = $this->db->lastInsertId();

            //Insert into student_subscriptions
            $db_stm = $this->db->prepare('INSERT INTO `student_subscriptions`(`course_id`, `student_id`) VALUES (?, ?)');

            $db_stm->bindParam(1,$course_id);
            $db_stm->bindParam(2,$student_id);
            $db_stm->execute();
            $studentSubscription = $this->db->lastInsertId();

            $this->db->commit();
        } catch (PDOException $e) {
            $this->db->rollBack();
            print "Error: " . $e->getMessage() . PHP_EOL;
        }
    }

    //Problem 3.Create procedure
    //Problem 4.Call procedure
    protected function getStudentsData()
    {
        try {
            $result = $this->db->prepare('CALL all_students_data', PDO::FETCH_ASSOC);

            foreach ($result as $row) {
                print_r($row);
            }
            $result = null;
            $db = null;
        }catch (PDOException $e){
            print "Error: " . $e->getMessage(). PHP_EOL;
        }
    }
}