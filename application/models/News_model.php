<?php

class News_model extends CI_Model
{

  function get_posts()
  {
     $this->db->select("id, title, content, image, postdate, voting, commenting");
     $this->db->from('news');
     $query = $this->db->get();
     return $query->result();
  }


  public function insert_news($title, $content, $image, $voting,
  $commenting)
  {
    $query = $this->db->query("INSERT
                              INTO news (title, content, image, voting, commenting)
                              VALUES ('$title', '$content', '$image', '$voting', '$commenting')");
  }

  public function update_news(
    $id,
    $title,
    $content,
    $image,
    $voting,
    $commenting
    ) {
      $query = $this->db->query("UPDATE news SET
        title = '$title',
        content = '$content',
        image = '$image',
        voting = '$voting',
        commenting = '$commenting'
        WHERE id = '$id'");

        return $query;
    }


}
