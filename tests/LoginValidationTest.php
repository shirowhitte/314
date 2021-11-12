<?php

require __DIR__ . "/../admin/adminLoginCTRL.php";
require __DIR__ . "/../doctor/doctorLoginCTRL.php";
require __DIR__ . "/../patient/patientLoginCTRL.php";
require __DIR__ . "/../pharmacist/pharmacistLoginCTRL.php";


class LoginValidationTest extends \PHPUnit\Framework\TestCase {

    public function testAdminLoginWithRightDetails(): void{
        $this->assertEquals(
            true,
            adminLoginCTRL::validateFields(1001, "AbbX101")
        );
    }

    public function testAdminLoginWithWrongDetails(): void{
        $this->assertEquals(
            false,
            adminLoginCTRL::validateFields(100200, 10)
        );
    }

    public function testDocLoginWithRightDetails(): void{
        $this->assertEquals(
            true,
            doctorLoginCTRL::validateFields(4001, "baS5k9bX1")
        );
    }

    public function testDocLoginWithWrongDetails(): void{
        $this->assertEquals(
            false,
            doctorLoginCTRL::validateFields("OnasJ", 5123)
        );
    }

    public function testPatientLoginWithRightDetails(): void{
        $this->assertEquals(
            true,
            patientLoginCTRL::validateFields(2028, "Zxf123X101")
        );
    }

    public function testPatientLoginWithWrongDetails(): void{
        $this->assertEquals(
            false,
            patientLoginCTRL::validateFields(12, "sdha89")
        );
    }

    public function testPharLoginWithRightDetails(): void{
        $this->assertEquals(
            true,
            pharmacistLoginCTRL::validateFields(3010, "ikds9907uuOk")
        );
    }

    public function testPharLoginWithWrongDetails(): void{
        $this->assertEquals(
            false,
            pharmacistLoginCTRL::validateFields("asUooLa", "asokwuuia1295")
        );
    }



}
