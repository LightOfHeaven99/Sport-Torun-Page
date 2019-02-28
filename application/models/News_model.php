<?php

class News_model extends CI_Model
{
  public function insert_user($title, $content, $image, $postdate){
    $query = $this->db->query("INSERT INTO news (title, content, image, postdate) VALUES ('$title', '$content', '$image', '$postdate')");
  }

  public function update_user(
    $id,
    $title,
    $content,
    $image,
    $postdate
    ) {
      $query = $this->db->query("UPDATE news SET
        title = '$title',
        content = '$content',
        image = '$image',
        postdate = '$postdate'
        WHERE id = '$id'");

        return $query;
    }


}
