<?php
class Pages extends Controller
{

    public function index()
    {
        $viewPath = VIEWS_PATH . 'pages/Index.php';
        require_once $viewPath;
        $indexView = new Index($this->getModel(), $this);
        $indexView->output();
    }

    public function about()
    {
        $viewPath = VIEWS_PATH . 'pages/About.php';
        require_once $viewPath;
        $aboutView = new About($this->getModel(), $this);
        $aboutView->output();
    }

    public function profile()
    {
        $viewPath = VIEWS_PATH . 'pages/Profile.php';
        require_once $viewPath;
        $aboutView = new Profile($this->getModel(), $this);
        $aboutView->output();
    }
    public function attendance()
    {
        $AttendanceModel = $this->getModel();
        if (isset($_POST['add_button'])) {
            $AttendanceModel->Checkin();
            redirect('pages/attendance');
        }
        if (isset($_POST['update_button'])) {
            $AttendanceModel->Checkout();
            $AttendanceModel->WorkingHours();
            redirect('pages/attendance');
        }
        $viewPath = VIEWS_PATH . 'pages/Attendance.php';
        require_once $viewPath;
        $aboutView = new Attendance($this->getModel(), $this);
        $aboutView->output();
    }
     public function admin()
    {
        $viewPath = VIEWS_PATH . 'pages/Admin.php';
        require_once $viewPath;
        $aboutView = new Admin($this->getModel(), $this);
        $aboutView->output();
    }

    public function adduser()
    {
        $viewPath = VIEWS_PATH . 'pages/AddUser.php';
        require_once $viewPath;
        $aboutView = new AddUser($this->getModel(), $this);
        $aboutView->output();
    }
    public function permission()
    {
        $viewPath = VIEWS_PATH . 'pages/Permission.php';
        require_once $viewPath;
        $indexView = new Permission($this->getModel(), $this);
        $indexView->output();
    }
    public function edit()
    {
        $viewPath = VIEWS_PATH . 'pages/Edit.php';
        require_once $viewPath;
        $indexView = new Edit($this->getModel(), $this);
        $indexView->output();
    }

    public function contact()
    {
        $viewPath = VIEWS_PATH . 'pages/contact.php';
        require_once $viewPath;
        $aboutView = new Contact($this->getModel(), $this);
        $aboutView->output();
    }

        public function Register()
    {
        $registerModel=$this->getModel();

        
        $registerModel->signup();
        $viewPath = VIEWS_PATH . 'pages/Register.php';
        require_once $viewPath;
        $registerView = new Register($this->getModel(), $this);
        $registerView->output();
    }
}
