<?php

class News_model extends CI_Model
{

  function get_posts()
  {
     $this->db->select("id, title, content, image, postdate, voting, commenting, mailing");
     $this->db->from('news');
     $query = $this->db->get();
     return $query->result();
  }


  public function insert_news($title, $content, $image, $voting,
  $commenting, $mailing)
  {
    $query = $this->db->query("INSERT
                              INTO news (title, content, image, voting, commenting, mailing)
                              VALUES ('$title', '$content', '$image', '$voting', '$commenting', '$mailing')");
  }

  public function update_news(
    $id,
    $title,
    $content,
    $image,
    $voting,
    $commenting,
    $mailing
    ) {
      $query = $this->db->query("UPDATE news SET
        title = '$title',
        content = '$content',
        image = '$image',
        voting = '$voting',
        commenting = '$commenting',
        mailing = '$mailing'
        WHERE id = '$id'");

        return $query;
    }

}
