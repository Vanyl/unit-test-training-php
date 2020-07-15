<?php

use PHPUnit\Framework\TestCase;

final class EmployeeTest extends TestCase
{
    public function testCanVerifyCreatedEmployeeObjectIsInstanceEmployee(): void
    {
        $employeeObj = new Employee($firstName = '', $lastName = '', $email='');        
        
        $this->assertInstanceOf(            
            Employee::class, 
            $employeeObj
        );
    }
}