<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Category;
use \App\Models\Post;
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
            'title' => 'My First Family Post',
            'slug' => 'my-first-family-post',
            'excerpt' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..',
            'body' => 'Nullam semper dolor a lacus faucibus, non efficitur leo cursus. Donec porta quis tellus non venenatis. Morbi sollicitudin metus velit, at aliquam sem commodo vitae. Nullam sit amet leo lorem. Vestibulum luctus dui et dui aliquet interdum. Nunc sed velit id massa lacinia tempor. Curabitur efficitur nisi nec varius condimentum. Nam in bibendum neque. Aliquam non sollicitudin diam. Quisque id nisl vel risus efficitur posuere. Etiam facilisis augue tellus, nec tempus sem viverra et.
            
            Integer auctor, nisi vel mattis laoreet, tellus turpis vestibulum mi, id mollis nibh tortor sed ipsum. Suspendisse id leo a nisl egestas lobortis non at nulla. Maecenas rutrum eros sit amet tempor commodo. Sed mattis nisi id fringilla sodales. Donec nulla est, molestie nec nibh et, congue lobortis libero. Mauris vel lorem ac metus pretium vulputate. Praesent tempor turpis eros, ac lobortis ex vehicula sed. Integer tempus imperdiet leo et tincidunt. Praesent vehicula, sapien cursus porta porta, urna nisi efficitur urna, ut luctus mauris libero sit amet massa. Duis massa libero, ultrices in arcu vel, consectetur auctor neque. Etiam leo purus, viverra in tortor eu, viverra vulputate metus. Fusce ac tristique orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vehicula tortor sed lobortis auctor. Mauris vel aliquet justo. Sed condimentum leo quis nibh consequat, in ultrices massa ullamcorper.'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My First Work Post',
            'slug' => 'my-first-work-post',
            'excerpt' => 'Integer auctor, nisi vel mattis laoreet, tellus turpis vestibulum mi..',
            'body' => 'Integer auctor, nisi vel mattis laoreet, tellus turpis vestibulum mi, id mollis nibh tortor sed ipsum. Suspendisse id leo a nisl egestas lobortis non at nulla. Maecenas rutrum eros sit amet tempor commodo. Sed mattis nisi id fringilla sodales. Donec nulla est, molestie nec nibh et, congue lobortis libero. Mauris vel lorem ac metus pretium vulputate. Praesent tempor turpis eros, ac lobortis ex vehicula sed. Integer tempus imperdiet leo et tincidunt. Praesent vehicula, sapien cursus porta porta, urna nisi efficitur urna, ut luctus mauris libero sit amet massa. Duis massa libero, ultrices in arcu vel, consectetur auctor neque. Etiam leo purus, viverra in tortor eu, viverra vulputate metus. Fusce ac tristique orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vehicula tortor sed lobortis auctor. Mauris vel aliquet justo. Sed condimentum leo quis nibh consequat, in ultrices massa ullamcorper.'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'My First Personal Post',
            'slug' => 'my-first-personal-post',
            'excerpt' => 'Mauris vel lorem ac metus pretium vulputate...',
            'body' => 'Mauris vel lorem ac metus pretium vulputate. Praesent tempor turpis eros, ac lobortis ex vehicula sed. Integer tempus imperdiet leo et tincidunt. Praesent vehicula, sapien cursus porta porta, urna nisi efficitur urna, ut luctus mauris libero sit amet massa. Duis massa libero, ultrices in arcu vel, consectetur auctor neque. Etiam leo purus, viverra in tortor eu, viverra vulputate metus. Fusce ac tristique orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vehicula tortor sed lobortis auctor. Mauris vel aliquet justo. Sed condimentum leo quis nibh consequat, in ultrices massa ullamcorper.'
        ]);
    }
}
