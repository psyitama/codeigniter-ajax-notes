<?php
class Notes extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('notes/index');
        $this->load->view('templates/footer');
    }

    public function index_html()
    {
        $data["notes"] = $this->note->get_all_notes();
        $this->load->view("partials/notes", $data);
    }

    public function create()
    {
        $new_note = $this->input->post();
        $this->note->add_note($new_note);

        $data["notes"] = $this->note->get_all_notes();
        $this->load->view("partials/notes", $data);
    }

    public function update()
    {
        $updated_note = $this->input->post();
        $this->note->edit_note($updated_note);

        $data["notes"] = $this->note->get_all_notes();
        $this->load->view("partials/notes", $data);
    }

    public function delete()
    {
        $note_id = $this->input->post();
        $this->note->delete_note($note_id);

        $data["notes"] = $this->note->get_all_notes();
        $this->load->view("partials/notes", $data);
    }
}
