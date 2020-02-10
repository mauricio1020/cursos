<?php

use App\Note;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class NotesTest extends TestCase
{

    public function test_notes_list()
    {
        // Having; la base de las pruebas condiciones
        Note::create(['note' => 'My first note']);
        Note::create(['note' => 'Second note']);

        //When; cuando
        $this->visit('notes')
            // Then, Entonces todas las comprobaciones
            ->see('My first note')
            ->see('Second note');
    }
}
