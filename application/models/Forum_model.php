<?php

class Forum_model extends CI_Model
{

  function get_advertisements()
  {
     $this->db->select("id, category, author_id, topic, content, phone, email, postdate");
     $this->db->from('forum');
     $query = $this->db->get();
     return $query->result();
  }


  public function insert_advertisement($category, $author_id, $topic, $content, $phone, $email)
  {
    $query = $this->db->query("INSERT
                              INTO forum (category, author_id, topic, content, phone, email)
                              VALUES ('$category', '$author_id', '$topic', '$content', '$phone', '$email')");
  }

  public function update_advertisement(
    $id,
    $category,
    $author_id,
    $topic,
    $content,
    $phone,
    $email
    ) {
      $query = $this->db->query("UPDATE forum SET
        category = '$category',
        author_id = '$author_id',
        topic = '$topic',
        content = '$content',
        phone = '$phone',
        email = '$email'
        WHERE id = '$id'");

        return $query;
    }


}
