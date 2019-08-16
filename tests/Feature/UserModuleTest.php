<?php

#Pruebas

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
    /** @test    */

    function test_it_loads_the_users_lista_page()
    {
        //$this->assertTrue(true);

        $this->get('/usuarios')
             ->assertStatus(200)
             ->assertSee('Usuarios');

    }

    /** @test    */
     function test_it_loads_the_users_detail_page()
    {
        //$this->assertTrue(true);

        $this->get('/usuarios/5')
             ->assertStatus(200)
             ->assertSee('Usuario N° 5');

    }


     /** @test    */
     function test_it_loads_the_new_users_page()
    {
        //$this->assertTrue(true);

        $this->get('/usuarios/nuevo')
             ->assertStatus(200)
             ->assertSee('Crear Nuevo Usuario');

    }






}
