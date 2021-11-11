<?php

require "../admin/adminLoginCTRL.php";


class LoginLogoutTest extends \PHPUnit\Framework\TestCase {

    public function testLoginWithRightDetails(): void{
        $this->assertEquals(
            true,
            adminLoginCTRL::onSubmit('1003', 'admc')
        );
    }

    public function testLoginWithWrongDetails(): void{
        $this->assertEquals(
            false,
            adminLoginCTRL::onSubmit('1003', 'admin1003')
        );
    }

}
