<?php 

/* 
Polimorfizm

Polimorfizm aynı isimdeki metotların farklı davranışlar sergileyebilmesi prensibidir.

*/

require 'post.php';

class FeaturedPost extends Post 
{
    private $featuredPosts = [];

    public function markAsFeatured($id) {
        $post = $this->read($id);
        $this->featuredPosts[$id] = $post;
        echo "Öne Çıkarıldı";
    }

    public function getFeaturedPosts() {
        return $this->featuredPosts;
    }

    public function read($id)
    {
        $post = parent::read($id); // parent aile demektir yani mirasçı olarak bağladığımız dosyanın içerisineki read değerini al demektir bu.
        $post['content'] = "Öne Çıkan: ". $post['content'];
        return $post;
    }

}

?>