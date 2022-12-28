<?php

namespace Tests\Feature\App\Http\Controllers\Api\V1;

use Tests\TestCase;

class EmployeeControllerTest extends TestCase
{

    // public function testIndex() {
    //     $this->json('get', 'api/v1/employees')
    //     ->assertStatus(Response::HTTP_OK)
    //     ->assertJsonStructure(
    //         [
    //             'data' => [
    //                 '*' => [
    //                         'id',
    //                         'name',
    //                         'employee_id',
    //                         'department',
    //                         'employee_status_id',
    //                         'email',
    //                     ]
    //                 ],
    //             ]
    //     );
    // }

    public function testEmployeeIsCreatedSuccessfully( ) {
        $payload = [
            'name' => 'test name',
            'employee_id' => '1323d41z',
            'department' => 'test department',
            'employee_status_id' => 1,
            'email' => '13sv.vdartzeys@gmail.com',
        ];

        $this->json('POST', 'api/v1/employees', $payload, ['Accept' => 'application/json'])
             ->assertStatus(200);
            
        $this->assertDatabaseHas('employees', $payload);
    }
}
