<?php

class Post{
    //db stuff
    private $conn;
    private $table = 'posts';

    //post properties
    public $id;
    public $category_id;
    public $category_name;
    public $title;
    public $body;
    public $author;
    public $create_at;

    //constructor with db connection
    public function_construct($db){
        $this->conn = $db;
    }

    //getting post frm db

    public function read(){
        //create query

        $qeury = 'SELECT
        c.name as category_name,
        p.id,
        p.category_id,
        p.body,
        p.author,
        p.create_at
        FROM
        '.$this->table . 'p'
        LEFT JOIN

    categories c ON p.category_id = <div class="id"><!--  --></div>
        
        ';

    }
}
?>