<?php


    class ContactController {

        public $db;

        function __construct()
        {
            try {
                $connexion = new PDO('mysql:host=localhost;dbname=master_contacts', "root", 'root');
            } catch (Exception $e) {
                die("Error".$e->getMessage());
            }

        
            $this->db = $connexion;
        }
       
        public function getContactList(){
            include __DIR__.'/../contact.php';

            $query = "SELECT * FROM contacts";
            $stmt = $this->db->query($query);

            if($stmt->rowCount() > 0) {
                $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $contacts = array_filter($list, function($el) {
                    return  new Contact(
                        $el["name"],
                        $el['prenom'],
                        $el['phone'],
                        $el["email"]
                    );
                });
                return $contacts;
            } else {
                return [];
            }
        }

        public function createContact($name, $prenom, $phone, $email) {
            $stamt = $this->db->prepare("INSERT INTO contacts (name, prenom, phone, email) VALUES (?, ?, ?, ?)");
    
            return $stamt->execute([$name, $prenom, $phone, $email]);
        }


    }
?>