<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
                'name' => 'Abyan',
                'username'=> 'abyan',
                'email' => 'abyan@mail.com',
                'password' => bcrypt('12345')
        ]);
//
        //User::create([
        //    'name' => 'Ardi',
        //    'email' => 'ardi@gmail.com',
        //    'password' => bcrypt('12345')
        //]);
        //
        User::factory(3)->create();

        Post::factory(20)->create();
//
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
                'name' => 'Web Design',
                'slug' => 'web-design'
            ]);
//
        //Post::create([
        //    'category_id' => 1,
        //    'title' => 'Laravel 5.8 From Scratch',
        //    'slug' => 'laravel-from-scratch',
        //    'excerpt' => 'Laravel 5.8 From Scratch is a series of videos', 
        //    'body' => 'Laravel 5.8 From Scratch is a series of videos that will teach you how to build a complete web application using Laravel 5.8. This series is for beginners and assumes no prior knowledge of Laravel. We will start from scratch and build a complete web application. We will start by installing Laravel and then build a complete web application. We will build a blog application that will allow users to create posts, edit posts, delete posts, and view posts. We will also build a comments system that will allow users to comment on posts. We will also build a user authentication system that will allow users to register, login, and logout. We will also build a user profile system that will allow users to upload a profile picture and update their profile information. We will also build a user roles and permissions system that will allow us to assign roles and permissions to users. We will also build a user activity system that will allow us to track user activity. We will also build a user notifications system that will allow us to send notifications to users. We will also build a user settings system that will allow users to update their settings. We will also build a user dashboard system that will allow users to view their dashboard. We will also build a user search system that will allow users to search for posts. We will also build a user social login system that will allow users to login using their social accounts. We will also build a user email verification system that will allow users to verify their email address. We will also build a user password reset system that will allow users to reset their password. We will also build a user two-factor authentication system that will allow users to enable two-factor authentication. We will also build a user API system that will allow users to access the application using an API. We will also build a user API documentation system that will allow users to view the API documentation. We will also build a user API testing system that will allow users to test the API. We will also build a user API versioning system that will allow us to version the API. We will also build a user API authentication system that will allow users to authenticate using an API. We will also build a user API rate limiting system that will allow us to limit the number of API requests that a user can make. We will also build a user API throttling system that will allow us to throttle the number of API requests that a user can make. We will also build a user API pagination system that will allow us to paginate the API results. We will also',
        //    'user_id' => 1
        //]);
//
        //Post::create([
        //    'category_id' => 1,
        //    'title' => 'Daily UI Challenge',
        //    'slug' => 'daily-ui-challenge',
        //    'excerpt' => 'The Daily UI Challenge is a series of videos',
        //    'body' => 'The Daily UI Challenge sometimes referred to as the 100 Days of UI Challenge is a series of videos that will teach you how to build a complete web application using Laravel 5.8. This series is for beginners and assumes no prior knowledge of Laravel. We will start from scratch and build a complete web application. We will start by installing Laravel and then build a complete web application. We will build a blog application that will allow users to create posts, edit posts, delete posts, and view posts. We will also build a comments system that will allow users to comment on posts. We will also build a user authentication system that will allow users to register, login, and logout. We will also build a user profile system that will allow users to upload a profile picture and update their profile information. We will also build a user roles and permissions system that will allow us to assign roles and permissions to users. We will also build a user activity system that will allow us to track user activity. We will also build a user notifications system that will allow us to send notifications to users. We will also build a user settings system that will allow users to update their settings. We will also build a user dashboard system that will allow users to view their dashboard. We will also build a user search system that will allow users to search for posts. We will also build a user social login system that will allow users to login using their social accounts. We will also build a user email verification system that will allow users to verify their email address. We will also build a user password reset system that will allow users to reset their password. We will also build a user two-factor authentication system that will allow users to enable two-factor authentication. We will also build a user API system that will allow users to access the application using an API. We will also build a user API documentation system that will allow users to view the API documentation. We will also build a user API testing system that will allow users to test the API. We will also build a user API versioning system that will allow us to version the API. We will also build a user API authentication system that will allow users to authenticate using an API. We will also build a user API rate limiting system that will allow us to limit the number of API requests that a user can make. We will also build a user API throttling system that will allow us to throttle the number of API requests that a user can make. We will also build a user API pagination system that will',
        //    'user_id' => 1
        //]);
//
        //Post::create([
        //    'category_id' => 2,
        //    'title' => 'Computer Science 101',
        //    'slug' => 'computer-science-101',
        //    'excerpt' => 'Computer Science 101 is a series of videos',
        //    'body' => 'Computer Science 101 is a series of videos that will teach you how to build a complete web application using Laravel 5.8. This series is for beginners and assumes no prior knowledge of Laravel. We will start from scratch and build a complete web application. We will start by installing Laravel and then build a complete web application. We will build a blog application that will allow users to create posts, edit posts, delete posts, and view posts. We will also build a comments system that will allow users to comment on posts. We will also build a user authentication system that will allow users to register, login, and logout. We will also build a user profile system that will allow users to upload a profile picture and update their profile information. We will also build a user roles and permissions system that will allow us to assign roles and permissions to users. We will also build a user activity system that will allow us to track user activity. We will also build a user notifications system that will allow us to send notifications to users. We will also build a user settings system that will allow users to update their settings. We will also build a user dashboard system that will allow users to view their dashboard. We will also build a user search system that will allow users to search for posts. We will also build a user social login system that will allow users to login using their social accounts. We will also build a user email verification system that will allow users to verify their email address. We will also build a user password reset system that will allow users to reset their password. We will also build a user two-factor authentication system that will allow users to enable two-factor authentication. We will also build a user API system that will allow users to access the application using an API. We will also build a user API documentation system that will allow users to view the API documentation. We will also build a user API testing system that will allow users to test the API. We will also build a user API versioning system that will allow us to version the API. We will also build a user API authentication system that will allow users to authenticate using an API. We will also build a user API rate limiting system that will allow us to limit the number of API requests that a user can make. We will also build a user API throttling system that will allow us to throttle the number of API requests that a user can make. We will also build a user API pagination system that',
        //    'user_id' => 2
        //]);
//
//





    }
}
