<?php
class Company {
    protected $company_name;
    protected $address;
    protected $phone_number;

    public function __construct($company_name, $address, $phone_number) {
        $this->company_name = $company_name;
        $this->address = $address;
        $this->phone_number = $phone_number;
    }

    public function displayCompany() {
        echo "会社名：".$this->company_name."\n";
        echo "住所：".$this->address."\n";
        echo "電話番号：".$this->phone_number."\n";
    }
    }

    class Department extends Company {
    private $department_name;
    private $manager;

    public function __construct($department_name, $manager) {
        $this->department_name = $department_name;
        $this->manager = $manager;
    }

    public function displayDepartment() {
        echo "部署名：". $this->department_name."\n";
        echo "部長：".$this->manager."\n";
    }
}

$company1 = new Company('サンプルA', '市ヶ谷', '080-XXXX-XXXX');
$company2 = new Company('サンプルB', '池袋', '090-XXXX-XXXX');
$company3 = new Company('サンプルC', '新宿', '080-XXXX-XXXX');

$department1 = new Department( '人事', '高田');
$department2 = new Department('総務', '田中');
$department3 = new Department('営業', '高橋');

$companies = array($company1, $company2, $company3);
$departments = array($department1, $department2, $department3);

$counter = 0;
foreach ($companies as $index) {
    if ($counter >= 1) {break;}
    $company1->displayCompany()."\n";
    $department1->displayDepartment()."\n";
    $company2->displayCompany()."\n";
    $department2->displayDepartment()."\n";
    $company3->displayCompany()."\n";
    $department3->displayDepartment()."\n";

    $counter++;
}
?>
