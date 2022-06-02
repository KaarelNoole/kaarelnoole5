<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'my-first-post',
            'excerpt' => '<p>Lorem ipsun dolar sit amet.</p>',
            'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.Optio eveniet, a eaque fugit dolore cum quisquam. Quaerat velit, voluptas alias animi aliquid quis sequi tenetur fuga distinctio repellendus rem qui?Lorem ipsum, dolor sit amet consectetur adipisicing elit.Eligendi nostrum optio voluptate maiores aut tenetur, corporis delectus debitis numquam.Explicabo aspernatur necessitatibus dolorum eligendi quae sit molestias inventore, tempore asperiores.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi itaque autem eius et sed iure quia dolore quis fugiat accusantium! Magnam similique totam provident maxime voluptates placeat dicta minima illum!</p>'

        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-work-post',
            'excerpt' => '<p>Lorem ipsun dolar sit amet.</p>',
            'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.Optio eveniet, a eaque fugit dolore cum quisquam. Quaerat velit, voluptas alias animi aliquid quis sequi tenetur fuga distinctio repellendus rem qui?Lorem ipsum, dolor sit amet consectetur adipisicing elit.Eligendi nostrum optio voluptate maiores aut tenetur, corporis delectus debitis numquam.Explicabo aspernatur necessitatibus dolorum eligendi quae sit molestias inventore, tempore asperiores.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi itaque autem eius et sed iure quia dolore quis fugiat accusantium! Magnam similique totam provident maxime voluptates placeat dicta minima illum!</p>'

        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'My Personal Post',
            'slug' => 'my-personal-post',
            'excerpt' => '<p>Lorem ipsun dolar sit amet.</p>',
            'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.Optio eveniet, a eaque fugit dolore cum quisquam. Quaerat velit, voluptas alias animi aliquid quis sequi tenetur fuga distinctio repellendus rem qui?Lorem ipsum, dolor sit amet consectetur adipisicing elit.Eligendi nostrum optio voluptate maiores aut tenetur, corporis delectus debitis numquam.Explicabo aspernatur necessitatibus dolorum eligendi quae sit molestias inventore, tempore asperiores.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi itaque autem eius et sed iure quia dolore quis fugiat accusantium! Magnam similique totam provident maxime voluptates placeat dicta minima illum!</p>'
        
        ]);
    }
}
