<?php
class Note_model extends CI_Model
{
    public function get_all_notes()
    {
        return $this->db->query("SELECT * FROM notes")->result_array();
    }

    public function add_note($post)
    {
        date_default_timezone_set('Asia/Manila');

        $query = "INSERT INTO notes (title, created_at) VALUES (?,?)";
        $values = array($post['title'], date("Y-m-d, H:i:s"));
        return $this->db->query($query, $values);
    }

    public function edit_note($post)
    {
        date_default_timezone_set('Asia/Manila');

        $query = "UPDATE notes SET description = ?, updated_at = ? WHERE id = ?";
        $values = array($post['description'], date("Y-m-d, H:i:s"), $post['id']);
        return $this->db->query($query, $values);
    }

    public function delete_note($post)
    {
        return $this->db->query("DELETE FROM notes WHERE id =?", $post['id']);
    }
}
