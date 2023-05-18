<?php

namespace App\Models;


class Post
{
    static $blog_post =[
        [
            "title" => "Judul Post 1",
            "slug" => "judul-post-1",
            "author" => "Abyan Ardiatama",
            "body" => "Do nostrud id dolore ullamco ex nostrud reprehenderit enim quis culpa sint 
            dolor. Fugiat veniam officia pariatur reprehenderit velit qui eiusmod mollit dolor 
            eiusmod officia est. Elit aliqua occaecat aliquip aliquip dolor in adipisicing officia 
            irure duis ipsum qui nisi. Pariatur aliquip tempor Lorem sunt consequat aute. Id magna 
            cillum esse labore dolor eu labore reprehenderit do anim exercitation ex."
        ],
        [
            "title" => "Judul Post Ke-2",
            "slug" => "judul-post-2",
            "author" => "Ardi Tama",
            "body" => "Amet consectetur pariatur voluptate esse non minim ex. Ex fugiat eiusmod 
            aute consectetur irure eu nisi. Laborum anim tempor tempor Lorem voluptate officia in 
            adipisicing est commodo aliqua cillum laborum dolor. Irure nisi consectetur esse 
            eiusmod cillum non non nostrud. Minim consequat ex fugiat do duis occaecat adipisicing. 
            Irure nostrud voluptate sint ad incididunt consectetur voluptate do ea officia tempor 
            ipsum. Tempor dolore enim magna ullamco duis duis exercitation excepteur reprehenderit 
            et ea proident sunt. Pariatur irure aliquip anim id mollit qui fugiat proident aute. 
            Cupidatat voluptate do sunt sit incididunt cillum sit duis. Eu Lorem veniam dolore ut. 
            Magna excepteur ipsum nostrud aute cillum Lorem eiusmod mollit nisi commodo occaecat."
        ]
    ];

    public static function all(){
        return collect(self::$blog_post);
    }
    public static function find($slug){
        $posts= static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
