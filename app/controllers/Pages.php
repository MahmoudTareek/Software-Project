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
public function Hconcern()
    {
        $HRModel=$this->getModel();
        $HRModel->Hconcern();
        $viewPath = VIEWS_PATH . 'pages/Hconcern.php';
        require_once $viewPath;
        $HRView = new Hconcern($this->getModel(), $this);
        $HRView->output();
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
        $adminmodel=$this->getModel();
        $adminmodel->employee();
        $viewPath = VIEWS_PATH . 'pages/Admin.php';
        require_once $viewPath;
        $aboutView = new Admin($this->getModel(), $this);
        $aboutView->output();
    }
      public function HR()
    {
        $HRModel=$this->getModel();
        $HRModel->HR();
        $viewPath = VIEWS_PATH . 'pages/HR.php';
        require_once $viewPath;
        $HRView = new HR($this->getModel(), $this);
        $HRView->output();
    }

    public function permission()
     {
        $registerModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $registerModel->setfromDate(trim($_POST['fromDate']));
            $registerModel->settoDate(trim($_POST['toDate']));
            $registerModel->setfromTime(trim($_POST['fromTime']));
            $registerModel->settoTime(trim($_POST['toTime']));    
            $registerModel->setemail(trim($_POST['email'])); 
            $registerModel->settype(trim($_POST['type']));   
            $registerModel->setreason(trim($_POST['reason']));         
            $registerModel->Add();
            redirect('pages/Index');

        }
        $viewPath = VIEWS_PATH . 'pages/Permission.php';
        require_once $viewPath;
        $indexView = new Permission($this->getModel(), $this);
        $indexView->output();

    }
     public function report()
     {
        $registerModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $registerModel->setfromDate(trim($_POST['fromDate']));
            $registerModel->settoDate(trim($_POST['toDate']));
            $registerModel->setfromTime(trim($_POST['fromTime']));
            $registerModel->settoTime(trim($_POST['toTime']));    
            $registerModel->setemail(trim($_POST['email'])); 
            $registerModel->settype(trim($_POST['type']));   
            $registerModel->setreason(trim($_POST['reason']));         
            $registerModel->Add();
            redirect('pages/Index');

        }
        $viewPath = VIEWS_PATH . 'pages/report.php';
        require_once $viewPath;
        $indexView = new report($this->getModel(), $this);
        $indexView->output();

    }
   

  public function contact()
    {$concernModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $concernModel->setname(trim($_POST['name']));    
            $concernModel->setemail(trim($_POST['email'])); 
            $concernModel->setphone(trim($_POST['phone']));   
            $concernModel->setMessage(trim($_POST['Message']));         
            $concernModel->concern();
            redirect('pages/Admin');
}
        $viewPath = VIEWS_PATH . 'pages/contact.php';
        require_once $viewPath;
        $aboutView = new Contact($this->getModel(), $this);
        $aboutView->output();
    }
  function getUserById( $userId , $user) {
        foreach ($user as $x){
            if($x->id == $userId)
                return $x;
        }
    }
   

      public function Delete($userId)
    {
                
        $registerModel = $this->getModel();
     
       $registerModel->Delete($userId);
             redirect('pages/Admin');

        $viewPath = VIEWS_PATH . 'pages/Delete.php';
        require_once $viewPath;
        $DeleteuserView = new Delete($this->getModel(), $this);
        $DeleteuserView->output();


    }
    public function Edit($userId)
    {      $usersModel = $this->loadModel('AdminModel');
               
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $oldWorker = $usersModel->getUserById($userId)[0];
            $editModel = $this->getModel();
            
            
            $editModel->setemail(trim($_POST['email']));
            $editModel->setName(trim($_POST['name']));
            $editModel->setTitle(trim($_POST['Title']));          
            $editModel->Edit($userId);
            header('location: ' . URLROOT . 'pages/admin');

        }
        $this->users = $usersModel->getUserById($userId)[0];

        $viewPath = VIEWS_PATH . 'pages/Edit.php';
        require_once $viewPath;
        $EditView = new Edit($this->getModel(), $this);
        $EditView->output();
    }
     public function concerns1()
    {
        $viewPath = VIEWS_PATH . 'pages/concerns1.php';
        require_once $viewPath;
        $aboutView = new concerns1($this->getModel(), $this);
        $aboutView->output();
    }
    

}
