<?php

require "/../admin/adminLoginCTRL.php";
require "/../doctor/doctorLoginCTRL.php";
require "/../patient/patientLoginCTRL.php";
require "/../pharmacist/pharmacistLoginCTRL.php";


class LoginValidationTest extends \PHPUnit\Framework\TestCase {

    public function testAdminLoginWithRightDetails(): void{
        $this->assertEquals(
            true,
            adminLoginCTRL::validateFields(1000, "AbbX101")
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
            doctorLoginCTRL::validateFields(1000, "AbbX101")
        );
    }

    public function testDocLoginWithWrongDetails(): void{
        $this->assertEquals(
            false,
            doctorLoginCTRL::validateFields(100200, 10)
        );
    }

    public function testPatientLoginWithRightDetails(): void{
        $this->assertEquals(
            true,
            patientLoginCTRL::validateFields(1000, "AbbX101")
        );
    }

    public function testPatientLoginWithWrongDetails(): void{
        $this->assertEquals(
            false,
            patientLoginCTRL::validateFields(100200, 10)
        );
    }

    public function testParLoginWithRightDetails(): void{
        $this->assertEquals(
            true,
            pharmacistLoginCTRL::validateFields(1000, "AbbX101")
        );
    }

    public function testPharLoginWithWrongDetails(): void{
        $this->assertEquals(
            false,
            pharmacistLoginCTRL::validateFields(100200, 10)
        );
    }



}
