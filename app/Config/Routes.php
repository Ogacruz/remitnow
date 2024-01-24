<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 $routes->set404Override(function(){
    $data = ['title'=>'Okanga&trade; 404!','page'=>'error_404'];
    return view('errors/html/error_404',$data);
});

$routes->get('/', 'Ogadan\Auth::home');



$routes->get('/signin', 'Ogadan\Auth::index');
$routes->get('/login', 'Ogadan\Auth::index');

$routes->get('/signup', 'Ogadan\Auth::signup');
$routes->get('/forgot-password', 'Ogadan\Auth::forgetPassword');
$routes->post('/auth/signin/dologin', 'Ogadan\Auth::doLogin');
$routes->get('/user/auth/logout', 'Ogadan\Auth::Logout');
$routes->post('/user/auth/signup', 'Ogadan\Auth::doSignup');

# User Mobile Dashboard Starts here
$routes->get('/user/dashboard', 'Mobile\User::index');
$routes->get('/user/dashboard/profile', 'Mobile\User::profile');
$routes->get('/user/dashboard/edit-profile', 'Mobile\User::editProfile');
$routes->post('/user/dashboard/upload/passport', 'Mobile\User::uploadPassport');
$routes->post('/user/dashboard/update/profile', 'Mobile\User::updateProfile');
$routes->get('/user/dashboard/settings', 'Mobile\User::settings');
$routes->get('/user/dashboard/change-password', 'Mobile\User::changePassword');
$routes->post('/user/dashboard/update/password', 'Mobile\User::updatePassword');
$routes->get('/user/dashboard/change-tpin', 'Mobile\User::changeTpin');
$routes->post('/user/dashboard/update/pin', 'Mobile\User::updatePin');
$routes->get('/user/dashboard/privacy-policy', 'Mobile\User::privacyPolicy');
$routes->get('/user/dashboard/support', 'Mobile\User::support');
$routes->get('/user/dashoard/catagory/(:num)/(:any)', 'Mobile\User::getItemByCategory/$1/$2');
$routes->get('/user/dashboard/products', 'Mobile\User::getProductList');
$routes->get('/user/dashboard/products/all-top-products', 'Mobile\User::getAllTopProducts');
$routes->get('/user/dashboard/products/all-weekly-best-sellers-products', 'Mobile\User::getAllWeeklyProducts');
$routes->get('/user/dashboard/products/all-featured-products', 'Mobile\User::getAllFeaturedProducts');
$routes->get('/user/dashoard/brand/(:any)', 'Mobile\User::getProductsByBrand/$1');
$routes->post('/user/dashboard/search', 'Mobile\User::searchProduct');
$routes->post('/user/dashboard/product/filter', 'Mobile\User::productFilter');
$routes->post('/user/dashboard/product/add-listing', 'Admin\AdminController::addProductListing');
$routes->get('/user/dashboard/products/buy/(:num)/(:any)', 'Mobile\User::buyProduct/$1/$2');
$routes->get('/user/dashboard/cart', 'Mobile\User::cart');
$routes->post('/cart', 'Mobile\User::shoppingCart');
$routes->post('/cart/counter', 'Mobile\User::shoppingcounter');
$routes->post('/cart/remove', 'Mobile\User::removeCart');
$routes->post('/cart/pullCart', 'Mobile\User::pullCart');
$routes->post('/cart/update', 'Mobile\User::upDateCart');
$routes->get('/cart/clear', 'Mobile\User::clearCart');
$routes->get('/user/dashboard/check-out', 'Mobile\User::checkOut');



////







//Admin controllers
$routes->get('/admin/dashboard', 'Admin\AdminController::index');
$routes->get('/admin/dashboard/employees', 'Admin\AdminController::employees');
$routes->get('/admin/dashboard/core-hr', 'Admin\AdminController::coreHr');
$routes->get('/admin/dashboard/finance', 'Admin\AdminController::finance');

$routes->get('/admin/dashboard/manage-listing', 'Admin\AdminController::ManageListing');
$routes->get('/admin/dashboard/task-summary', 'Admin\AdminController::taskSummary');

$routes->get('/admin/dashboard/performance', 'Admin\AdminController::performance');
$routes->get('/admin/dashboard/projects', 'Admin\AdminController::projects');
$routes->get('/admin/dashboard/reports', 'Admin\AdminController::reports');
$routes->get('/admin/dashboard/manage-partnership', 'Admin\AdminController::managePartnership');
$routes->get('/admin/dashboard/app-profile', 'Admin\AdminController::myProfile');
$routes->post('/admin/dashboard/employee/register', 'Admin\AdminController::addEmployee');
$routes->post('/admin/dashboard/employee/update-passport', 'Admin\AdminController::updatePassport');
$routes->post('/admin/dashboard/banemployee', 'Admin\AdminController::banEmployee');
$routes->post('/admin/dashboard/activateemployee', 'Admin\AdminController::activateEmployee');
$routes->post('/admin/dashboard/employee/edit-employee', 'Admin\AdminController::editEmployee');
$routes->get('/admin/dashboard/manage-users', 'Admin\AdminController::manageUsers');
$routes->post('/admin/dashboard/banuser', 'Admin\AdminController::banUser');
$routes->post('/admin/dashboard/activateuser', 'Admin\AdminController::activateUser');
$routes->post('/admin/dashboard/get-employee-details', 'Admin\AdminController::getEmployeeDetails');
$routes->post('/admin/dashboard/employee/add-user', 'Admin\AdminController::addUser');
$routes->get('/admin/dashboard/post/new-post', 'Admin\AdminController::newPost');
$routes->post('/admin/dashboard/post/do-add-post', 'Admin\AdminController::doAddPost');
$routes->get('/admin/dashboard/post/manage-post', 'Admin\AdminController::managePosts');
$routes->post('/admin/dashboard/activatepost', 'Admin\AdminController::activatePost');
$routes->post('/admin/dashboard/banpost', 'Admin\AdminController::banPost');
$routes->get('/admin/dsahboard/post/(:num)/(:any)', 'Admin\AdminController::editPost/$1/$2');
$routes->post('/admin/dashboard/post/edit-post', 'Admin\AdminController::editPostInfo');
$routes->post('/admin/dashboard/post/update-image', 'Admin\AdminController::updatePostImage');
$routes->get('/admin/dashboard/manage-faqs', 'Admin\AdminController::manageFAQs');
$routes->post('/faqs/admin/dashboard/doSaveFAQS', 'Admin\AdminController::doSaveFAQS');
$routes->post('/admin/dashboard/activateFaqs', 'Admin\AdminController::activateFaqs');
$routes->post('/admin/dashboard/banFaqs', 'Admin\AdminController::banFaqs');
$routes->post('/admin/dashboard/updateFaqs', 'Admin\AdminController::updateFaqs');

$routes->get('/admin/dashboard/manage-category', 'Admin\AdminController::manageBusinessGroups');

$routes->post('/admin/dashboard/banBusinessGroup', 'Admin\AdminController::banBusinessGroup');
$routes->post('/admin/dashboard/activateBusinessGroup', 'Admin\AdminController::activateBusinessGroup');







$routes->post('/admin/dashboard/add-biz-cat', 'Admin\AdminController::addBizCat');
$routes->post('/admin/dashboard/update-biz-cat', 'Admin\AdminController::updateBizCat');
$routes->get('/admin/dashboard/manage-course-list', 'Admin\AdminController::courseList');
$routes->post('/admin/dashboard/banCourse', 'Admin\AdminController::banCourse');
$routes->post('/admin/dashboard/activateCourse', 'Admin\AdminController::activateCourse');
$routes->post('/admin/dashboard/doUpdateCourse', 'Admin\AdminController::doUpdateCourse');
$routes->post('/admin/dashboard/doAddCourse', 'Admin\AdminController::doAddCourse');
$routes->get('/admin/dashboard/manager-master-trainers', 'Admin\AdminController::masterTrainers');
$routes->post('/admin/dashboard/banMaster', 'Admin\AdminController::banMaster');
$routes->post('/admin/dashboard/activateMaster', 'Admin\AdminController::activateMaster');
$routes->post('/admin/dashboard/getgroup/courses', 'Admin\AdminController::getBusinessGroupCourses');
$routes->post('/admin/dashboard/doSaveMasterTrainer', 'Admin\AdminController::doSaveMasterTrainer');
$routes->get('/admin/dashboard/master/(:num)/(:any)', 'Admin\AdminController::editMaster/$1/$2');
$routes->post('/admin/dashboard/master/update-image', 'Admin\AdminController::doUpdateMasterImage');
$routes->post('/admin/dashboard/doUpdateMasterTrainer', 'Admin\AdminController::doUpdateMasterTrainer');
$routes->get('/admin/dashboard/trainees', 'Admin\AdminController::manageTrainees');
$routes->post('/admin/dashboard/fetchTraineess', 'Admin\AdminController::fetchTraineess');
$routes->post('/admin/dashboard/banTrainee', 'Admin\AdminController::banTrainee');
$routes->post('/admin/dashboard/activateTrainee', 'Admin\AdminController::activateTrainee');
$routes->get('/admin/dashboard/post/manage-comments', 'Admin\AdminController::manageComments');
$routes->post('/admin/dashboard/banComment', 'Admin\AdminController::banComment');
$routes->post('/admin/dashboard/activateComment', 'Admin\AdminController::activateComment');
$routes->post('/admin/dashboard/edit-comment', 'Admin\AdminController::editComment');
$routes->get('/admin/dashboard/team-volunteers', 'Admin\AdminController::teamVolunteers');
$routes->post('/admin/dashboard/doSaveTeam', 'Admin\AdminController::doSaveTeam');
$routes->post('/admin/dashboard/banTeam', 'Admin\AdminController::banTeam');
$routes->post('/admin/dashboard/activateTeam', 'Admin\AdminController::activateTeam');
$routes->post('/admin/dashboard/doUpdateTeam', 'Admin\AdminController::doUpdateTeam');

// CronJobs
$routes->get("/cronjob-task", "BackgroundController::index");



