<?php
require('dnlib/load.php');

// Define common data for header and navigation
$data['title'] = 'RESUME FORMATS - Online';
$action->view->load('header', $data);
$action->view->load('nav', $data);

// Helper function to clean and JSON encode data
function cleanAndEncode($data) {
    global $action;
    return json_encode(array_map([$action->db, 'clean'], $data));
}

// Define routes using a more structured approach
$action->helper->route('/', function () use ($action, $data) {
    $action->view->load('footer');
});

$action->helper->route('action/createresume', function () use ($action) {
    $action->onlyForAuthUser();
    $resume_data = [
        $action->session->get('Auth')['data']['id'],
        $action->db->clean($_POST['name']),
        $action->db->clean($_POST['headline']),
        cleanAndEncode(['email' => $_POST['email'], 'mobile' => $_POST['mobile'], 'address' => $_POST['address']]),
        cleanAndEncode($_POST['skill']),
        cleanAndEncode(['collage' => $_POST['collage'], 'course' => $_POST['course'], 'duration' => $_POST['duration']]),
        cleanAndEncode(['company' => $_POST['company'], 'jobrole' => $_POST['jobrole'], 'w_duration' => $_POST['w_duration']]),
        $action->helper->UID()
    ];

    $run = $action->db->insert('cv', 'user_id,name,headline,objective,contact,skills,experience,education,url', $resume_data);
    if ($run) {
        $action->session->set('success', 'resume created');
    } else {
        $action->session->set('error', 'something went wrong, try again');
    }
    $action->helper->redirect('home');
});

$action->helper->route('action/deletecv/$url', function ($data) use ($action) {
    $url = $data['url'];
    $action->db->delete('cv', "url='$url'");
    $action->session->set('success', 'resume deleted');
    $action->helper->redirect('home');
});

$action->helper->route('action/logout', function () use ($action) {
    $action->session->delete('Auth');
    $action->session->set('success', 'logged out');
    $action->helper->redirect('login');
});

$action->helper->route('resume-details/$cvtype', function ($data) use ($action) {
    $action->onlyForAuthUser();
    $data['title'] = "Resume Details";
    $data['myresume'] = 'active';
    $action->view->load('header', $data);
    $action->view->load('nav', $data);
    if ($data['cvtype'] == 1) {
        $action->view->load('resume_details1');
    } else {
        $action->session->set('error', "Invalid Resume type");
        $action->helper->redirect('select-template');
    }
    $action->view->load('footer');
});

$action->helper->route('select-template', function () use ($action) {
    $action->onlyForAuthUser();
    $data['title'] = "Select Resume Template";
    $data['myresume'] = 'active';
    $action->view->load('header', $data);
    $action->view->load('nav', $data);
    $action->view->load('template_content');
    $action->view->load('footer');
});

$action->helper->route('cv/$url', function ($data) use ($action) {
    $cvdata = $action->db->read("cv", "*", "WHERE url='" . $data['url'] . "'");
    if (!$cvdata) {
        $action->helper->redirect('home');
    }
    $cvdata = $cvdata[0];
    $data['title'] = $cvdata['name'];
    $data['type'] = 1;
    $data['cv'] = $cvdata;
    if ($data['type'] == 1) {
        $action->view->load('rf1', $data);
    } else {
        $action->helper->redirect('home');
    }
});

$action->helper->route('home', function () use ($action) {
    $action->onlyForAuthUser();
    $data['title'] = 'Home';
    $data['myresume'] = 'active';
    $data['cv'] = $action->db->read('cv', '*', 'WHERE user_id=' . $action->user_id());
    $action->view->load('header', $data);
    $action->view->load('nav', $data);
    $action->view->load('home_content', $data);
    $action->view->load('footer');
});

$action->helper->route('login', function () use ($action) {
    $action->onlyForUnauthUser();
    $data['title'] = 'LogIn - Online';
    $action->view->load('header', $data);
    $action->view->load('login');
    $action->view->load('footer');
});

$action->helper->route('action/login', function () use ($action) {
    $error = $action->helper->isAnyEmpty($_POST);
    if ($error) {
        $action->session->set('error', "$error is empty!");
        $action->helper->redirect('login');
    } else {
        $email = $action->db->clean($_POST['email_id']);
        $password = $action->db->clean($_POST['password']);
        $user = $action->db->read('users', 'id,email_id', "WHERE email_id='$email' AND password='$password'");
        if (count($user) > 0) {
            $action->session->set('Auth', ['status' => true, 'data' => $user[0]]);
            $action->session->set('success', 'logged in');
            $action->helper->redirect('home');
        } else {
            $action->session->set('error', "incorrect email/password");
            $action->helper->redirect('login');
        }
    }
});

$action->helper->route('signup', function () use ($action) {
    $action->onlyForUnauthUser();
    $data['title'] = 'SignUp - Online';
    $action->view->load('header', $data);
    $action->view->load('signup');
    $action->view->load('footer');
});

$action->helper->route('action/signup', function () use ($action) {
    $error = $action->helper->isAnyEmpty($_POST);
    if ($error) {
        $action->session->set('error', "$error is empty!");
        $action->helper->redirect('signup');
    } else {
        $signup_data = [
            $action->db->clean($_POST['full_name']),
            $action->db->clean($_POST['email_id']),
            $action->db->clean($_POST['password'])
        ];
        $user = $action->db->read('users', 'email_id', "WHERE email_id='$signup_data[1]'");
        if (count($user) > 0) {
            $action->session->set('error', $signup_data[1] . " is already registered!");
            $action->helper->redirect('signup');
        } else {
            $action->db->insert('users', 'full_name,email_id,password', $signup_data);
            $action->session->set('success', 'account created!');
            $action->helper->redirect('login');
        }
    }
});

// The rest of your code remains unchanged.

/* ... */

?>
