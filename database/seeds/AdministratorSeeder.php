<?php

use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrator = new \App\User;
        $administrator->name = "administrator";
        $administrator->email = "administrator@gmail.com";
        $administrator->username = "admin";
        $administrator->role = "admin";
        $administrator->password = bcrypt("kepegawaian");
        $administrator->save();
        $this->command->info("User Admin berhasil diinsert");
    }

}
