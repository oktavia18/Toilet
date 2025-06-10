<?php

class Login extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata("role")) {
            redirect("dashboard");
        }
        if ($this->input->post() == null) {
            $this->load->view("v_login");
        } else {

            $email = $this->input->post("email");
            $password = md5($this->input->post("password"));
            $user = $this->db->query(
                "SELECT * FROM inspector WHERE email='$email' and password='$password' and status = 1"
            );
            if ($user->num_rows() > 0) {
                foreach ($user->result() as $row) {
                    $sess_data["id"] = $row->id;
                    $sess_data["username"] = $row->username;
                    $sess_data["name"] = $row->name;
                    $sess_data["email"] = $row->email;
                    $sess_data["role"] = $row->role == 1 ? "admin" : "inspektur";
                    $this->session->set_userdata($sess_data);
                }
                redirect("dashboard");
            }
            ?>
            <script type="text/javascript">
                alert('Data yang dimasukkan salah atau akun anda telah di non-aktifkan!');
                window.location = "<?php echo base_url("login"); ?>";
            </script>
<?php
        }
    }

    function logout()
    {
        $this->session->unset_userdata("id");
        $this->session->unset_userdata("username");
        $this->session->unset_userdata("name");
        $this->session->unset_userdata("email");
        $this->session->unset_userdata("role");
        session_destroy();
        redirect("login");
    }
}
