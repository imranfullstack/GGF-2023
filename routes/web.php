<?php

use Illuminate\Support\Facades\Route;

// --- Custom URL Link ---

use App\Http\Controllers\PaypalController;
use App\Http\Controllers\ServicePaypalController;
use App\Http\Controllers\PaymentMessageController;
use App\Http\Controllers\EventPaypalController;

// Site Admin
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\FrontendOrg;

use App\Http\Controllers\Frontend\FrontendFilterController;


use App\Http\Controllers\Frontend\Org\FrontendPostController;
use App\Http\Controllers\Frontend\Org\FrontendProjectController;
use App\Http\Controllers\Frontend\Org\FrontendRecruitController;
use App\Http\Controllers\Frontend\Org\FrontendServiceController;
use App\Http\Controllers\Frontend\Org\FrontendEventController;
use App\Http\Controllers\Frontend\Org\FrontendProductController;
// Site Admin
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminPaymentController;
use App\Http\Controllers\Admin\AdminPaymentRequestController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AdminPostCategoryController;
use App\Http\Controllers\Admin\AdminPostController;
use App\Http\Controllers\Admin\AdminProjectCategoryController;
use App\Http\Controllers\Admin\AdminProjectController;
use App\Http\Controllers\Admin\AdminEventCategoryController;
use App\Http\Controllers\Admin\AdminEventController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Admin\AdminProductCategoryController;
use App\Http\Controllers\Admin\AdminServiceController;
use App\Http\Controllers\Admin\AdminServiceCategoryController;
use App\Http\Controllers\Admin\AdminRecruitController;
use App\Http\Controllers\Admin\AdminRecruitCategoryController;
use App\Http\Controllers\Admin\AdminContributeController;
use App\Http\Controllers\Admin\AdminContributeCategoryController;
use App\Http\Controllers\Admin\AdminOrganisationTypeController;
use App\Http\Controllers\Admin\AdminFocusController;
use App\Http\Controllers\Admin\AdminProvideController;
use App\Http\Controllers\Admin\AdminKeySkillsController;
use App\Http\Controllers\Admin\AdminInterestsController;
use App\Http\Controllers\Admin\OrgApproveController;
use App\Http\Controllers\Admin\AdminHomeEditController;
use App\Http\Controllers\Admin\AdminFooterEditController;


// Site Editor
use App\Http\Controllers\Editor\EditorDashboardController;


// Site Orgadmin
use App\Http\Controllers\Orgadmin\OrgadminDashboardController;
use App\Http\Controllers\Orgadmin\OrgadminOperationController;
use App\Http\Controllers\Orgadmin\OrganisationController;
use App\Http\Controllers\Orgadmin\OrgadminProjectController;
use App\Http\Controllers\Orgadmin\OrgadminTeamController;
use App\Http\Controllers\Orgadmin\OrgadminFeedbackController;
use App\Http\Controllers\Orgadmin\OrgadminPostController;
use App\Http\Controllers\Orgadmin\OrgadminEventController;
use App\Http\Controllers\Orgadmin\OrgadminProductController;
use App\Http\Controllers\Orgadmin\OrgadminServiceController;
use App\Http\Controllers\Orgadmin\OrgadminRecruitController;
use App\Http\Controllers\Orgadmin\OrgadminSearchProfileController;
use App\Http\Controllers\Orgadmin\OrgadminSearchResourcesController;
use App\Http\Controllers\Orgadmin\OrgadminContributeController;
use App\Http\Controllers\Orgadmin\OrgadminSponsorController;
use App\Http\Controllers\Orgadmin\OrgadminPaymentController;
use App\Http\Controllers\Orgadmin\OrgadminBankManageController;

// Site Orgeditor
use App\Http\Controllers\Orgeditor\OrgeditorDashboardController;
// Site Orgmember
use App\Http\Controllers\Orgmember\OrgmemberDashboardController;


// Site User
use App\Http\Controllers\User\UserDashboardController;
use App\Http\Controllers\User\UserManageProfileController;
use App\Http\Controllers\User\IndividualinfoController;
use App\Http\Controllers\User\UserJoinOrgController;
use App\Http\Controllers\User\BeFoundController;
use App\Http\Controllers\User\UserProjectController;
use App\Http\Controllers\User\UserProductController;
use App\Http\Controllers\User\UserRecruitController;
use App\Http\Controllers\User\UserEventController;
use App\Http\Controllers\User\UserServiceController;
use App\Http\Controllers\User\UserContributeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// Paypal This Payment only for Product 
Route::get('product/preocesspaypal/{slug}/{productslug}/{productbuyid}', [PaypalController::class, 'preocesspaypal'])->name('preocesspaypal');
// Success Paypal
Route::get('product/sucessprocess/{slug}/{productslug}/{productbuyid}', [PaypalController::class, 'sucessprocess'])->name('sucessprocess');
// Cancel Paypal
Route::get('product/cancelprocess', [PaypalController::class, 'cancelprocess'])->name('cancelprocess');


// Product Paypal Controllers
Route::get('/success-payment', [PaymentMessageController::class, 'success_payment'])->name('payment.success');
Route::get('/cancel-payment', [PaymentMessageController::class, 'cancel_payment'])->name('payment.cancel');
Route::get('/error-payment', [PaymentMessageController::class, 'error_payment'])->name('payment.error');





// Service Paypal Controllers
Route::get('service/preocesspaypal/{slug}/{serviceslug}/{serviceapplyid}', [ServicePaypalController::class, 'preocesspaypal'])->name('service.payment.process');

Route::get('service/sucessprocess/{slug}/{serviceslug}/{serviceapplyid}', [ServicePaypalController::class, 'sucessprocess'])->name('service.payment.success');

Route::get('/service/cancelprocess', [ServicePaypalController::class, 'cancelprocess'])->name('service.payment.cancel');

// Event Paypal Controllers
Route::get('event/preocesspaypal/{slug}/{eventslug}/{eventapplyid}', [EventPaypalController::class, 'preocesspaypal'])->name('event.payment.process');

Route::get('event/sucessprocess/{slug}/{eventslug}/{eventapplyid}', [EventPaypalController::class, 'sucessprocess'])->name('event.payment.success');

Route::get('/event/cancelprocess', [EventPaypalController::class, 'cancelprocess'])->name('event.payment.cancel');






// Post For Frontend Aria
// Post For Frontend Aria End


// All Frontend Controller -------------------------- END


//  -------------------------------------------------------------------------------
                                // Admin Route Group
//  -------------------------------------------------------------------------------
Route::group(['as'=> 'admin.' , 'prefix' => 'admin' , 'namespace' => 'Admin' , 'middleware' =>['auth','admin']], function(){

    // ------ Dashboard Admin
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('index');



// --------------------------------------
        // User List Here  AdminUserController
// --------------------------------------

Route::group(['as' => 'pages.', 'prefix' => 'pages' , 'namespace' => 'pages'],function(){

    // Home Page Edit
        Route::group(['as' => 'home.', 'prefix' => 'home' , 'namespace' => 'home'],function(){
            Route::get('/index', [AdminHomeEditController::class, 'index'])->name('index');
            // Banner Data Store
            
            Route::post('/banner-store', [AdminHomeEditController::class, 'banner_store'])->name('banner.store');
        });
    // Home Page Edit
        Route::group(['as' => 'footer.', 'prefix' => 'footer' , 'namespace' => 'footer'],function(){
            // Index
            Route::get('/index', [AdminFooterEditController::class, 'index'])->name('index');
            // Index
            Route::post('/store', [AdminFooterEditController::class, 'store'])->name('store');
        });
});



// --------------------------------------
        // User List Here  AdminUserController
// --------------------------------------

Route::group(['as' => 'user.', 'prefix' => 'user' , 'namespace' => 'user'],function(){

    Route::get('/index', [AdminUserController::class, 'index'])->name('index');
    // View
    Route::get('/view/{id}', [AdminUserController::class, 'view'])->name('view');


});

// --------------------------------------
        // User List Here  AdminUserController
// --------------------------------------

Route::group(['as' => 'payment.', 'prefix' => 'payment' , 'namespace' => 'payment'],function(){

    Route::get('/index/', [AdminPaymentController::class, 'index'])->name('index');

    Route::group(['as' => 'request.', 'prefix' => 'request' , 'namespace' => 'request'],function(){


         Route::get('/index/', [AdminPaymentRequestController::class, 'index'])->name('index');
         Route::post('/store/{id}', [AdminPaymentRequestController::class, 'store'])->name('store');

    });
});

// --------------------------------------
        // User List Here End
// --------------------------------------

// --------------------------------------
        // Post Here 
// --------------------------------------
Route::group(['as' => 'post.', 'prefix' => 'post' , 'namespace' => 'post'],function(){
            Route::get('/index', [AdminPostController::class, 'index'])->name('index');
            // Edit Post Admin
            Route::get('/edit/{slug}', [AdminPostController::class, 'edit'])->name('edit');
            // Edit Post Admin
            Route::post('/update/{slug}', [AdminPostController::class, 'update'])->name('update');



// ---------------- Post Category Here 
        Route::group(['as' => 'category.', 'prefix' => 'category' , 'namespace' => 'category'],function(){

            Route::get('/create', [AdminPostCategoryController::class, 'create'])->name('create');
            Route::get('/', [AdminPostCategoryController::class, 'index'])->name('index');
            // ------ Store Category ----
            Route::post('/store', [AdminPostCategoryController::class, 'store'])->name('store');
            // Edit Post category
            Route::get('/edit/{id}', [AdminPostCategoryController::class, 'edit'])->name('edit');
            // update Post category
            Route::post('/update/{id}', [AdminPostCategoryController::class, 'update'])->name('update');
            // update Post category
            Route::get('/active/{id}', [AdminPostCategoryController::class, 'active'])->name('active');
            // update Post category
            Route::get('/deactive/{id}', [AdminPostCategoryController::class, 'deactive'])->name('deactive');
        });
// ---------------- Post Category Here End   


});

// -------------------------------------- 
        // Post Here End
// --------------------------------------

// --------------------------------------
        // Post Here 
// --------------------------------------
Route::group(['as' => 'orgstatus.', 'prefix' => 'orgstatus' , 'namespace' => 'orgstatus'],function(){

            Route::get('/index', [OrgApproveController::class, 'index'])->name('index');
            // single Org
            Route::get('/single-org/{id}', [OrgApproveController::class, 'single_org'])->name('single.org');
            // single Org
            Route::post('/update-org/{id}', [OrgApproveController::class, 'update_org'])->name('update.org');
// admin.orgstatus.index
});

// -------------------------------------- 
        // Post Here End
// --------------------------------------
// -------------------------------------- 
        // Projet Here 
// --------------------------------------

Route::group(['as' => 'project.', 'prefix' => 'project' , 'namespace' => 'project'],function(){


        Route::get('/index', [AdminProjectController::class, 'index'])->name('index');
        // Edit Projet
        Route::get('/edit/{id}', [AdminProjectController::class, 'edit'])->name('edit');
        // Edit Projet
        Route::post('/update/{id}', [AdminProjectController::class, 'update'])->name('update');
        // Application Projet
        Route::get('/application/{id}', [AdminProjectController::class, 'application'])->name('application');
        Route::get('/single-application/{id}', [AdminProjectController::class, 'single_application'])->name('single.application');

// ---------------- Post Category Here 
        Route::group(['as' => 'category.', 'prefix' => 'category' , 'namespace' => 'category'],function(){

Route::get('/create', [AdminProjectCategoryController::class, 'create'])->name('create');
Route::get('/', [AdminProjectCategoryController::class, 'index'])->name('index');
// ------ Store Category ----
Route::post('/store', [AdminProjectCategoryController::class, 'store'])->name('store');
// ------ Edit Category ----
Route::get('/edit/{id}', [AdminProjectCategoryController::class, 'edit'])->name('edit');
// ------ Store Category ----
Route::post('/update/{id}', [AdminProjectCategoryController::class, 'update'])->name('update');
// ------ active Category ----
Route::get('/active/{id}', [AdminProjectCategoryController::class, 'active'])->name('active');
// ------ deactive Category ----
Route::get('/deactive/{id}', [AdminProjectCategoryController::class, 'deactive'])->name('deactive');
        });
// ---------------- Post Category Here End  


});
// -------------------------------------- 
        // Projet Here 
// --------------------------------------
// -------------------------------------- 
        // Event Here 
// --------------------------------------


Route::group(['as' => 'event.', 'prefix' => 'experiences-and-event' , 'namespace' => 'event'],function(){

        Route::get('/index', [AdminEventController::class, 'index'])->name('index');
        // Edit OR Change Status
        Route::get('/edit/{id}', [AdminEventController::class, 'edit'])->name('edit');
        // Edit OR Change Status
        Route::post('/update/{id}', [AdminEventController::class, 'update'])->name('update');
        // Event Application Status
        Route::get('/apply/{id}', [AdminEventController::class, 'apply'])->name('apply');
        // Event Application Status
        Route::get('/single-application/{id}', [AdminEventController::class, 'single_application'])->name('apply.single');

        // ---------------- Post Category Here 
Route::group(['as' => 'category.', 'prefix' => 'category' , 'namespace' => 'category'],function(){

    Route::get('/', [AdminEventCategoryController::class, 'index'])->name('index');
    // Event Category Create
    Route::get('/create', [AdminEventCategoryController::class, 'create'])->name('create');
    // Event Category Edit
    Route::get('/edit/{id}', [AdminEventCategoryController::class, 'edit'])->name('edit');
    // Event Category update
    Route::post('/update/{id}', [AdminEventCategoryController::class, 'update'])->name('update');
    // ------ Store Category ----
    Route::post('/store', [AdminEventCategoryController::class, 'store'])->name('store');
    // ------ Store Category Active----
    Route::get('/active/{id}', [AdminEventCategoryController::class, 'active'])->name('active');
    // ------ Store Category Deactive----
    Route::get('/disable/{id}', [AdminEventCategoryController::class, 'disable'])->name('disable');
});
// ---------------- Post Category Here End  



});
// -------------------------------------- 
        // Event Here End
// --------------------------------------




// -------------------------------------- 
        // Product Here
// --------------------------------------

Route::group(['as' => 'product.', 'prefix' => 'product' , 'namespace' => 'product'],function(){

        Route::get('/index', [AdminProductController::class, 'index'])->name('index');
        // Edit Product
        Route::get('/edit/{id}', [AdminProductController::class, 'edit'])->name('edit');
        // Edit Product
        Route::post('/update/{id}', [AdminProductController::class, 'update'])->name('update');
        // Edit Product
        Route::get('/order/{id}', [AdminProductController::class, 'product_order'])->name('order');
        // Edit Product
        Route::get('/single-order/{id}', [AdminProductController::class, 'product_single_order'])->name('order.single');

    // ---------------- Product Category Here 
    Route::group(['as' => 'category.', 'prefix' => 'category' , 'namespace' => 'category'],function(){
        // index
        Route::get('/', [AdminProductCategoryController::class, 'index'])->name('index');
        // store
        Route::get('/create', [AdminProductCategoryController::class, 'create'])->name('create');

        // ------ Store Category ----
        Route::post('/store', [AdminProductCategoryController::class, 'store'])->name('store');
        // ------ Edit Category ----
        Route::get('/edit/{id}', [AdminProductCategoryController::class, 'edit'])->name('edit');
        // ------ Edit Category ----
        Route::post('/update/{id}', [AdminProductCategoryController::class, 'update'])->name('update');
     // ------ Store Category Active----
        Route::get('/active/{id}', [AdminProductCategoryController::class, 'active'])->name('active');
        // ------ Store Category Deactive----
        Route::get('/deactive/{id}', [AdminProductCategoryController::class, 'deactive'])->name('deactive');
        });
    // ---------------- Product Category Here End  
});

// -------------------------------------- 
        // Product Here End
// --------------------------------------
// -------------------------------------- 
        // Service Here
// --------------------------------------

Route::group(['as' => 'service.', 'prefix' => 'service' , 'namespace' => 'service'],function(){

        Route::get('/index', [AdminServiceController::class, 'index'])->name('index');
        // Edit Service
        Route::get('/edit/{id}', [AdminServiceController::class, 'edit'])->name('edit');
        // Edit Service
        Route::post('/update/{id}', [AdminServiceController::class, 'update'])->name('update');


        // Edit Service
        Route::get('/application/{id}', [AdminServiceController::class, 'application'])->name('application');
        // Edit Service
        Route::get('/application-single/{id}', [AdminServiceController::class, 'single_application'])->name('single.application');




    // ---------------- Service Category Here 
    Route::group(['as' => 'category.', 'prefix' => 'category' , 'namespace' => 'category'],function(){
            Route::get('/', [AdminServiceCategoryController::class, 'index'])->name('index');
            Route::get('/create', [AdminServiceCategoryController::class, 'create'])->name('create');
            // ------ Store Category ----
            Route::post('/store', [AdminServiceCategoryController::class, 'store'])->name('store');
            // ------ Store Category ----
            Route::get('/edit/{id}', [AdminServiceCategoryController::class, 'edit'])->name('edit');
            // ------ Store Category ----
            Route::post('/update/{id}', [AdminServiceCategoryController::class, 'update'])->name('update');
            // ------ Store Category Active----
            Route::get('/active/{id}', [AdminServiceCategoryController::class, 'active'])->name('active');
            // ------ Store Category Deactive----
            Route::get('/deactive/{id}', [AdminServiceCategoryController::class, 'deactive'])->name('deactive');
    });
    // ---------------- Service Category Here End  
});

// -------------------------------------- 
        // Service Here End
// --------------------------------------
// -------------------------------------- 
        // Service Here
// --------------------------------------

Route::group(['as' => 'recruit.', 'prefix' => 'recruit' , 'namespace' => 'recruit'],function(){

        Route::get('/index', [AdminRecruitController::class, 'index'])->name('index');
        // Edit recruit
        Route::get('/edit/{id}', [AdminRecruitController::class, 'edit'])->name('edit');
        // Edit recruit
        Route::post('/update/{id}', [AdminRecruitController::class, 'update'])->name('update');
        // Edit recruit
        Route::get('/application/{id}', [AdminRecruitController::class, 'application'])->name('application');
        // Edit recruit
        Route::get('/single-application/{id}', [AdminRecruitController::class, 'single_application'])->name('single.application');

    // ---------------- Service Category Here 
    Route::group(['as' => 'category.', 'prefix' => 'category' , 'namespace' => 'category'],function(){
        Route::get('/', [AdminRecruitCategoryController::class, 'index'])->name('index');
        Route::get('/create', [AdminRecruitCategoryController::class, 'create'])->name('create');
        // ------ Store Category ----
        Route::post('/store', [AdminRecruitCategoryController::class, 'store'])->name('store');
        // ------ Store Category ----
        Route::post('/update/{id}', [AdminRecruitCategoryController::class, 'update'])->name('update');
        // ------ Edit Category ----
        Route::get('/edit/{id}', [AdminRecruitCategoryController::class, 'edit'])->name('edit');
        // ------ Active Category ----
        Route::get('/active/{id}', [AdminRecruitCategoryController::class, 'active'])->name('active');
        // ------ Deactive Category ----
        Route::get('/deactive/{id}', [AdminRecruitCategoryController::class, 'deactive'])->name('deactive');
    
    });
    // ---------------- Service Category Here End  
});

// -------------------------------------- 
        // Service Here End
// --------------------------------------
// -------------------------------------- 
        // AdminContributeController Here
// --------------------------------------

Route::group(['as' => 'contribute.', 'prefix' => 'contribute' , 'namespace' => 'contribute'],function(){
        // Contribute Index
        Route::get('/index', [AdminContributeController::class, 'index'])->name('index');
        // Edit
        Route::get('/edit/{id}', [AdminContributeController::class, 'edit'])->name('edit');
        // Edit
        Route::post('/update/{id}', [AdminContributeController::class, 'update'])->name('update');

    // ---------------- Service Category Here 
    Route::group(['as' => 'category.', 'prefix' => 'category' , 'namespace' => 'category'],function(){
        Route::get('/', [AdminContributeCategoryController::class, 'index'])->name('index');
        Route::get('/create', [AdminContributeCategoryController::class, 'create'])->name('create');
        // ------ Store Category ----
        Route::post('/store', [AdminContributeCategoryController::class, 'store'])->name('store');
        // ------ Edit Category ----
        Route::get('/edit/{id}', [AdminContributeCategoryController::class, 'edit'])->name('edit');
        // ------ Edit Category ----
        Route::post('/update/{id}', [AdminContributeCategoryController::class, 'update'])->name('update');
        // ------ Active Category ----
        Route::get('/active/{id}', [AdminContributeCategoryController::class, 'active'])->name('active');
        // ------ Deactive Category ----
        Route::get('/disable/{id}', [AdminContributeCategoryController::class, 'disable'])->name('disable');
    });
    // ---------------- Service Category Here End  
});

// ----------------- AdminOrganisationTypeController -------------------

Route::group(['as' => 'orgtype.', 'prefix' => 'orgtype' , 'namespace' => 'orgtype'],function(){

        Route::get('/index', [AdminOrganisationTypeController::class, 'index'])->name('index');
        // store
        Route::post('/store', [AdminOrganisationTypeController::class, 'store'])->name('store');
        Route::post('/update/{id}', [AdminOrganisationTypeController::class, 'update'])->name('update');

    // ---------------- Service Category Here End  
});

Route::group(['as' => 'focus.', 'prefix' => 'focus' , 'namespace' => 'focus'],function(){

        Route::get('/index', [AdminFocusController::class, 'index'])->name('index');
        // store
        Route::post('/store', [AdminFocusController::class, 'store'])->name('store');
        Route::post('/update/{id}', [AdminFocusController::class, 'update'])->name('update');

    // ---------------- Service Category Here End  
});



Route::group(['as' => 'provide.', 'prefix' => 'provide' , 'namespace' => 'provide'],function(){
        Route::get('/index', [AdminProvideController::class, 'index'])->name('index');
        // store
        Route::post('/store', [AdminProvideController::class, 'store'])->name('store');
        Route::post('/update/{id}', [AdminProvideController::class, 'update'])->name('update');
    // ---------------- Service Category Here End  
});


 // Key Word For User added by Admin

Route::group(['as' => 'keyskill.', 'prefix' => 'keyskill' , 'namespace' => 'keyskill'],function(){
        Route::get('/index', [AdminKeySkillsController::class, 'index'])->name('index');
        // store
        Route::post('/store', [AdminKeySkillsController::class, 'store'])->name('store');
        Route::post('/update/{id}', [AdminKeySkillsController::class, 'update'])->name('update');
    // ---------------- Service Category Here End  
});

 // Key interests For User added by Admin

Route::group(['as' => 'interests.', 'prefix' => 'interests' , 'namespace' => 'interests'],function(){
        Route::get('/index', [AdminInterestsController::class, 'index'])->name('index');
        // store
        Route::post('/store', [AdminInterestsController::class, 'store'])->name('store');
        Route::post('/update/{id}', [AdminInterestsController::class, 'update'])->name('update');
    // ---------------- Service Category Here End  
});

// -------------------------------------- 
        // AdminContributeController  Here End
// --------------------------------------


});






//  -------------------------------------------------------------------------------
                                // Editor Route Group
//  -------------------------------------------------------------------------------
Route::group(['as'=> 'editor.' , 'prefix' => 'editor' , 'namespace' => 'editor' , 'middleware' =>['auth','editor']], function(){

    // ------ Dashboard Editor
    Route::get('/dashboard', [EditorDashboardController::class, 'index'])->name('index');

});




//  -------------------------------------------------------------------------------
                                // Organisation Admin Route Group
//  -------------------------------------------------------------------------------
Route::group(['as'=> 'orgadmin.' , 'prefix' => 'orgadmin' , 'namespace' => 'orgadmin' , 'middleware' =>['auth','orgadmin']], function(){

    // ------ Dashboard Editor
    Route::get('/dashboard', [OrgadminDashboardController::class, 'index'])->name('index');

// Organisation List Start ---------------------------------------------------------------
    Route::get('/create', [OrganisationController::class, 'create'])->name('create');
    // ----- Create organisation
    Route::get('/list', [OrganisationController::class, 'list'])->name('list');
    // ----- view organisation
    Route::get('/view/{id}', [OrganisationController::class, 'view'])->name('view');
    // ----- store organisation
    Route::post('/store', [OrganisationController::class, 'store'])->name('store');

// Organisation List End-------------------------------------------------------------------



 


// Route::group(['as' => 'organisation.', 'prefix' => 'organisation' , 'namespace' => 'organisation'],function(){

//     Route::get('index/{id}', [OrganisationController::class, 'index'])->name('index');
//     // ----- store organisation
//     Route::post('/store', [OrganisationController::class, 'store'])->name('store');

// });


   // ------- Organisation Action --------
        Route::group(['as' => 'organisation.', 'prefix' => 'organisation/{id}' , 'namespace' => 'organisation'],function(){

            Route::get('index/', [OrganisationController::class, 'index'])->name('index');





    // ------- Organisation Action --------
        Route::group(['as' => 'project.', 'prefix' => 'projects' , 'namespace' => 'project'],function(){

            Route::get('index/', [OrgadminProjectController::class, 'index'])->name('index');
            Route::get('create/', [OrgadminProjectController::class, 'create'])->name('create');
            // store
            Route::post('store/', [OrgadminProjectController::class, 'store'])->name('store');
            
            Route::get('view/', [OrgadminProjectController::class, 'view'])->name('view');
            // Project Application
            Route::get('application/', [OrgadminProjectController::class, 'application'])->name('application');
            // Project Application
            Route::get('edit/{projectslug}', [OrgadminProjectController::class, 'edit'])->name('edit');
            // update Project
            Route::post('update/{projectid}', [OrgadminProjectController::class, 'update'])->name('update');
            // Project Application
            Route::get('{projectid}/remove-cat/{catid}/', [OrgadminProjectController::class, 'remove_cat'])->name('remove.cat');
            // Project  Application || Under a Project Application
            Route::get('application-project/{projectslug}', [OrgadminProjectController::class, 'project_application'])->name('application.u.project');

            // Project Application || Global Project
            Route::get('application/{applicationid}', [OrgadminProjectController::class, 'single_application'])->name('single.application');
            // Project Application Change Status
            Route::post('application-status/{applicationid}', [OrgadminProjectController::class, 'application_status'])->name('status.application');

        });

    // ------- Organisation Team --------
        Route::group(['as' => 'team.', 'prefix' => 'team' , 'namespace' => 'team'],function(){

            Route::get('index/', [OrgadminTeamController::class, 'index'])->name('index');
            // create
            Route::get('create/', [OrgadminTeamController::class, 'create'])->name('create');


        });
    // ------- Organisation Feedback --------
        Route::group(['as' => 'operation.', 'prefix' => 'operation' , 'namespace' => 'operation'],function(){

            Route::get('index/', [OrgadminOperationController::class, 'index'])->name('index');
            // create
            Route::get('create/', [OrgadminOperationController::class, 'create'])->name('create');
            // create
            Route::post('update/', [OrgadminOperationController::class, 'update'])->name('update');
            // create
            Route::post('keyword-update/', [OrgadminOperationController::class, 'keyword_update'])->name('keyword.update');
            // update looking for
            Route::post('looking-for-update/', [OrgadminOperationController::class, 'lookingfor_update'])->name('lookingfor.update');

            // All the Remove Aria For Diffrent Categorys
            // create
            Route::get('org-type/{orgtypeid}', [OrgadminOperationController::class, 'orgtype_cat'])->name('orgtype.cat');
            // focus
            Route::get('focus-remove/{focuscatid}', [OrgadminOperationController::class, 'focus_cat_remove'])->name('focus.cat.remove');
            // Provider
            Route::get('provide-remove/{providecatid}', [OrgadminOperationController::class, 'provide_cat_remove'])->name('provide.cat.remove');
            // Provider
            Route::get('keyword-remove/{keywordid}', [OrgadminOperationController::class, 'keyword_remove'])->name('keyword.remove');
            // Provider
            Route::get('looking-for-remove/{lookingforid}', [OrgadminOperationController::class, 'lookingfor_remove'])->name('lookingfor.remove');

        });

    // ------- Organisation Feedback --------
        Route::group(['as' => 'feedback.', 'prefix' => 'feedback' , 'namespace' => 'feedback'],function(){

            Route::get('index/', [OrgadminFeedbackController::class, 'index'])->name('index');
            // create
            Route::get('create/', [OrgadminFeedbackController::class, 'create'])->name('create');
            // create


        });
        // ------- Organisation Post --------
        Route::group(['as' => 'post.', 'prefix' => 'post' , 'namespace' => 'post'],function(){

            Route::get('index/', [OrgadminPostController::class, 'index'])->name('index');
            // create
            Route::get('create/', [OrgadminPostController::class, 'create'])->name('create');
            // Store
            Route::post('store/', [OrgadminPostController::class, 'store'])->name('store');
            // update
            Route::post('update/{slug}', [OrgadminPostController::class, 'update'])->name('update');
            // delete
            Route::get('delete/{slug}', [OrgadminPostController::class, 'delete'])->name('delete');
            // edit
            Route::get('edit/{slug}', [OrgadminPostController::class, 'edit'])->name('edit');
            // edit
            Route::get('cat-remove/{catid}', [OrgadminPostController::class, 'cat_remove'])->name('cat.remove');

            
        });
        // ------- Organisation event --------
        Route::group(['as' => 'event.', 'prefix' => 'event' , 'namespace' => 'event'],function(){

            Route::get('index/', [OrgadminEventController::class, 'index'])->name('index');
            // create
            Route::get('create/', [OrgadminEventController::class, 'create'])->name('create');
            // create
            Route::get('edit/{eventid}', [OrgadminEventController::class, 'edit'])->name('edit');
            // store 
            Route::post('store/', [OrgadminEventController::class, 'store'])->name('store');
            // Event Application
            Route::get('{eventid}/remove-cat/{catid}/', [OrgadminEventController::class, 'remove_cat'])->name('remove.cat');
            // update Event
            Route::post('update/{eventid}', [OrgadminEventController::class, 'update'])->name('update');
            // Project  Application || Under a Project Application
            Route::get('application-event/{eventslug}', [OrgadminEventController::class, 'event_application'])->name('application.u.event');
            // Event Application
            Route::get('application/', [OrgadminEventController::class, 'application'])->name('application');
  
            // Event Single Application
            Route::get('application/{applicationid}', [OrgadminEventController::class, 'single_application'])->name('single.application');
            
            // Event Application Change Status
            Route::post('application-status/{applicationid}', [OrgadminEventController::class, 'application_status'])->name('status.application');
        });

        // ------- Organisation product --------
        Route::group(['as' => 'product.', 'prefix' => 'product' , 'namespace' => 'product'],function(){

            Route::get('index/', [OrgadminProductController::class, 'index'])->name('index');
            // create
            Route::get('create/', [OrgadminProductController::class, 'create'])->name('create');
            // Store
            Route::post('store/', [OrgadminProductController::class, 'store'])->name('store');
            // update product
            Route::get('edit/{productid}', [OrgadminProductController::class, 'edit'])->name('edit');
            // product Application
            Route::get('{productid}/remove-cat/{catid}/', [OrgadminProductController::class, 'remove_cat'])->name('remove.cat');
            // update product
            Route::post('update/{productid}', [OrgadminProductController::class, 'update'])->name('update');
            // Project Application
            Route::get('orders/', [OrgadminProductController::class, 'orders'])->name('orders');

            // Product  Application || Under a Product Application
            Route::get('application-product/{productslug}', [OrgadminProductController::class, 'product_application'])->name('application.u.product');

            // product Single Order
            Route::get('order/{orderid}', [OrgadminProductController::class, 'single_order'])->name('single.order');
            // product Application Change Status
            Route::post('order-status/{orderid}', [OrgadminProductController::class, 'order_status'])->name('status.order');




        });

        // ------- Organisation Service --------
        Route::group(['as' => 'service.', 'prefix' => 'service' , 'namespace' => 'service'],function(){

            Route::get('index/', [OrgadminServiceController::class, 'index'])->name('index');
            // create
            Route::get('create/', [OrgadminServiceController::class, 'create'])->name('create');
            // create
            Route::post('store/', [OrgadminServiceController::class, 'store'])->name('store');
            // update Service
            Route::get('edit/{serviceid}', [OrgadminServiceController::class, 'edit'])->name('edit');
            // Service Category Remove
            Route::get('{serviceid}/remove-cat/{catid}/', [OrgadminServiceController::class, 'remove_cat'])->name('remove.cat');
            // update Service
            Route::post('update/{serviceid}', [OrgadminServiceController::class, 'update'])->name('update');
            // Product  Application || Under a Product Application
            Route::get('application-service/{serviceslug}', [OrgadminServiceController::class, 'service_application'])->name('application.u.service');



            // Service
            Route::get('orders/', [OrgadminServiceController::class, 'orders'])->name('orders');
            // Service Single Order
            Route::get('order/{orderid}', [OrgadminServiceController::class, 'single_order'])->name('single.order');
            // Service Application Change Status
            Route::post('order-status/{orderid}', [OrgadminServiceController::class, 'order_status'])->name('status.order');

        });

        // ------- Organisation Service --------
        Route::group(['as' => 'recruit.', 'prefix' => 'recruit' , 'namespace' => 'recruit'],function(){

            Route::get('index/', [OrgadminRecruitController::class, 'index'])->name('index');
            // create
            Route::get('create/', [OrgadminRecruitController::class, 'create'])->name('create');
            // store 
            Route::post('store/', [OrgadminRecruitController::class, 'store'])->name('store');
            // update Jobs
            Route::post('update/{recruitid}', [OrgadminRecruitController::class, 'update'])->name('update');
            // Edit Jobs
            Route::get('edit/{recruitid}', [OrgadminRecruitController::class, 'edit'])->name('edit');
            // Service Category Remove
            Route::get('{recruitid}/remove-cat/{catid}/', [OrgadminRecruitController::class, 'remove_cat'])->name('remove.cat');
            // Jobs Application
            Route::get('application/', [OrgadminRecruitController::class, 'application'])->name('application');

            
            // recruit  Application || Under a Project Application
            Route::get('application-recruit/{recruitslug}', [OrgadminRecruitController::class, 'recruit_application'])->name('application.u.recruit');




            // Event Single Application
            Route::get('application/{applicationid}', [OrgadminRecruitController::class, 'single_application'])->name('single.application');
            // Event Application Change Status
            Route::post('application-status/{applicationid}', [OrgadminRecruitController::class, 'application_status'])->name('status.application');

            
        });


        // ------- Organisation Search -profiles --------
        Route::group(['as' => 's_profile.', 'prefix' => 'search-profiles' , 'namespace' => 's_profile'],function(){

            Route::get('index/', [OrgadminSearchProfileController::class, 'index'])->name('index');
            // create
            Route::get('create/', [OrgadminSearchProfileController::class, 'create'])->name('create');
            // create
            Route::get('search-result/', [OrgadminSearchProfileController::class, 'search_result'])->name('search.result');
            // create
            Route::get('individual-profile/{userid}', [OrgadminSearchProfileController::class, 'individual_profile'])->name('individual.profile');
        });
        // ------- Organisation Search Resources --------
        Route::group(['as' => 's_resource.', 'prefix' => 'search-resources' , 'namespace' => 's_resource'],function(){

            Route::get('index/', [OrgadminSearchResourcesController::class, 'index'])->name('index');
            // create
            Route::get('create/', [OrgadminSearchResourcesController::class, 'create'])->name('create');
            // search Result
            Route::get('search/', [OrgadminSearchResourcesController::class, 'search'])->name('search');
            // search single resources
            Route::get('single-resources/{resourcid}', [OrgadminSearchResourcesController::class, 'single_resources'])->name('single.resources');
        });

        // ------- Organisation contribute --------
        Route::group(['as' => 'contribute.', 'prefix' => 'contribute' , 'namespace' => 'contribute'],function(){

            Route::get('index/', [OrgadminContributeController::class, 'index'])->name('index');
            // create
            Route::get('create/', [OrgadminContributeController::class, 'create'])->name('create');
            // store
            Route::post('store/', [OrgadminContributeController::class, 'store'])->name('store');
            // store
            Route::get('edit/{contributeid}', [OrgadminContributeController::class, 'edit'])->name('edit');
        });


        // ------- Organisation Sponsor --------
        Route::group(['as' => 'sponsor.', 'prefix' => 'sponsor' , 'namespace' => 'sponsor'],function(){

            Route::get('index/', [OrgadminSponsorController::class, 'index'])->name('index');
            // Create Sponsor
            Route::get('create/', [OrgadminSponsorController::class, 'create'])->name('create');
            // Create Sponsor
            Route::post('store/', [OrgadminSponsorController::class, 'store'])->name('store');
            // Create Sponsor
            Route::get('view/{sponsorid}', [OrgadminSponsorController::class, 'view'])->name('view');
            // Create Sponsor
            Route::get('edit/{sponsorid}', [OrgadminSponsorController::class, 'edit'])->name('edit');
            // Create Sponsor
            Route::post('update/{sponsorid}', [OrgadminSponsorController::class, 'update'])->name('update');
            // Create Sponsor
            Route::get('destroy/{sponsorid}', [OrgadminSponsorController::class, 'destroy'])->name('destroy');

        });


        // ------- Organisation payment --------
        Route::group(['as' => 'payment.', 'prefix' => 'payment' , 'namespace' => 'payment'],function(){

            Route::get('index/', [OrgadminPaymentController::class, 'index'])->name('index');
            Route::get('payment-request/', [OrgadminPaymentController::class, 'payment_req'])->name('req');
            // payment Store
            Route::post('store/', [OrgadminPaymentController::class, 'store'])->name('store');

        });

        // ------- Organisation payment --------
        Route::group(['as' => 'bank.', 'prefix' => 'bank' , 'namespace' => 'bank'],function(){

            Route::get('index/', [OrgadminBankManageController::class, 'index'])->name('index');
            // Store Bank
            Route::post('store/', [OrgadminBankManageController::class, 'store'])->name('store');
            // Store Bank
            Route::post('destroy/', [OrgadminBankManageController::class, 'destroy'])->name('destroy');




        });






        });







});



//  -------------------------------------------------------------------------------
                                // Organisation editor Route Group
//  -------------------------------------------------------------------------------
Route::group(['as'=> 'orgeditor.' , 'prefix' => 'orgeditor' , 'namespace' => 'orgeditor' , 'middleware' =>['auth','orgeditor']], function(){

    // ------ Dashboard Editor
    Route::get('/dashboard', [OrgeditorDashboardController::class, 'index'])->name('index');

});


//  -------------------------------------------------------------------------------
                                // Organisation Member Route Group
//  -------------------------------------------------------------------------------
Route::group(['as'=> 'orgmember.' , 'prefix' => 'orgmember' , 'namespace' => 'orgmember' , 'middleware' =>['auth','orgmember']], function(){

    // ------ Dashboard Editor
    Route::get('/dashboard', [OrgmemberDashboardController::class, 'index'])->name('index');

});





//  -------------------------------------------------------------------------------
                                // Organisation User Route Group
//  -------------------------------------------------------------------------------
Route::group(['as'=> 'user.' , 'prefix' => 'user' , 'namespace' => 'user' , 'middleware' =>['auth','user']], function(){

    // ------ Dashboard Editor
    Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('index');
    // --------- Profile -------
    Route::get('/profile', [UserDashboardController::class, 'profile'])->name('profile');
    // --------- Profile -------
    Route::get('/setting', [UserDashboardController::class, 'setting'])->name('setting');

// --- Pforile Controller for user
    Route::post('/profile-update/{id}', [UserManageProfileController::class, 'profile_update'])->name('profile.update');
    Route::post('/password-update/{id}', [UserManageProfileController::class, 'password_update'])->name('password.update');





// ------- Organisation contribute --------
    Route::group(['as' => 'product.', 'prefix' => 'product' , 'namespace' => 'product'],function(){
        // User Profile register Section on seeting page
        Route::get('/single-product/{id}', [UserProductController::class, 'single_product'])->name('single.product');
    });
// ------- Organisation contribute --------
    Route::group(['as' => 'recruit.', 'prefix' => 'recruit' , 'namespace' => 'recruit'],function(){
        // User Profile register Section on seeting page
        Route::get('/single-recruit/{id}', [UserRecruitController::class, 'single_recruit'])->name('single.recruit');
    });



    // ------- Organisation contribute --------
        Route::group(['as' => 'service.', 'prefix' => 'service' , 'namespace' => 'service'],function(){
            // User Profile register Section on seeting page
            Route::get('/single-service/{id}', [UserServiceController::class, 'single_service'])->name('single.service');
        });



            // ------- Organisation contribute --------
        Route::group(['as' => 'contribute.', 'prefix' => 'contribute' , 'namespace' => 'contribute'],function(){
            // User Profile Contribute  Section on seeting page
            Route::post('/store', [UserContributeController::class, 'store'])->name('store');
        });





    
// ------- Organisation contribute --------
    Route::group(['as' => 'event.', 'prefix' => 'event' , 'namespace' => 'event'],function(){
        // User Profile register Section on seeting page
        Route::get('/single-event/{id}', [UserEventController::class, 'single_event'])->name('single.event');
    });

// ------- Organisation contribute --------
    Route::group(['as' => 'project.', 'prefix' => 'project' , 'namespace' => 'project'],function(){
        // User Profile register Section on seeting page
        Route::get('/single-project/{id}', [UserProjectController::class, 'single_project'])->name('single.project');
    });

// ------- Organisation contribute --------
    Route::group(['as' => 'register.', 'prefix' => 'register' , 'namespace' => 'register'],function(){
        // User Profile register Section on seeting page
        Route::post('/store', [IndividualinfoController::class, 'store'])->name('store');
        // update Profile
        Route::post('/update/{id}', [IndividualinfoController::class, 'update'])->name('update');
    });

// ------- Organisation contribute --------
    Route::group(['as' => 'join.', 'prefix' => 'join' , 'namespace' => 'join'],function(){
        // User Profile register Section on seeting page
        Route::post('/store', [UserJoinOrgController::class, 'store'])->name('store');
        // update Profile
        Route::post('/update/{id}', [UserJoinOrgController::class, 'update'])->name('update');
    });
// ------- Organisation contribute --------
    Route::group(['as' => 'befound.', 'prefix' => 'befound' , 'namespace' => 'befound'],function(){
        // User Profile register Section on seeting page
        Route::post('/store', [BeFoundController::class, 'store'])->name('store');
        // update Profile
        Route::post('/update/{id}', [BeFoundController::class, 'update'])->name('update');
        // remove keyskill
        Route::get('/remove-keyskill/{id}', [BeFoundController::class, 'remove_keyskill'])->name('remove.keyskill');
        // remove interest
        Route::get('/remove-interest/{id}', [BeFoundController::class, 'remove_interest'])->name('remove.interest');
    });

});





// All Frontend Controller -------------------------- Start


Route::get('/', [FrontendController::class, 'index'])->name('index');



// ----- filter -----
    Route::group(['as' => 'filter.', 'prefix' => 'filter' ],function(){
        // index 
        Route::get('/', [FrontendFilterController::class, 'index'])->name('index');
        // Project Filtter 
        Route::get('/org-filtter', [FrontendFilterController::class, 'org_filtter'])->name('org.filtter');
        // Project Filtter 
        Route::get('/project-filtter', [FrontendFilterController::class, 'project_filtter'])->name('project.filtter');
        // Project Filtter 
        Route::get('/event-filtter', [FrontendFilterController::class, 'event_filtter'])->name('event.filtter');
    });
// ----- Org Project End-----

    
// Org Controller

Route::group(['as' => 'org.', 'prefix' => '{slug}' , 'namespace' => 'org'],function(){
// Org Main page 
Route::get('', [FrontendOrg::class, 'index'])->name('index');





// ----- Org Post -----
    Route::group(['as' => 'post.', 'prefix' => 'post' ],function(){

        Route::get('/', [FrontendPostController::class, 'index'])->name('index');
        // single Post
        Route::get('/{postslug}', [FrontendPostController::class, 'single'])->name('single');
    });

// ----- Org Post End-----
// ----- Org Project -----
    Route::group(['as' => 'project.', 'prefix' => 'project' ],function(){
        // index 
        Route::get('/', [FrontendProjectController::class, 'index'])->name('index');
        // single Project
        Route::get('/{projectslug}', [FrontendProjectController::class, 'single'])->name('single');
        // Project Apply
        Route::post('project-apply/{projectslug}', [FrontendProjectController::class, 'project_apply'])->name('apply');
    });
// ----- Org Project End-----
// ----- Org Project -----
    Route::group(['as' => 'recruit.', 'prefix' => 'recruit' ],function(){
        // index 
        Route::get('/', [FrontendRecruitController::class, 'index'])->name('index');
        // store Jobs 
        Route::post('/store/{jobslug}', [FrontendRecruitController::class, 'store'])->name('store');
    });
// ----- Org Project End-----
// ----- Org Project -----
    Route::group(['as' => 'service.', 'prefix' => 'service' ],function(){
        // index 
        Route::get('/', [FrontendServiceController::class, 'index'])->name('index');
        // single Project
        Route::get('/{serviceslug}', [FrontendServiceController::class, 'single'])->name('single');
        // single Project
        Route::post('apply/{serviceslug}', [FrontendServiceController::class, 'apply_service'])->name('apply');
        // Buy Product
        Route::get('service-wallet/{serviceslug}/{serviceapplyid}', [FrontendServiceController::class, 'service_wallet'])->name('wallet');
    });
// ----- Org Project End-----
// ----- Org Project -----
    Route::group(['as' => 'event.', 'prefix' => 'event' ],function(){
        // index 
        Route::get('/', [FrontendEventController::class, 'index'])->name('index');
        // single Project
        Route::get('/{eventslug}', [FrontendEventController::class, 'single'])->name('single');
        // apply Event
        Route::post('apply/{eventslug}', [FrontendEventController::class, 'apply'])->name('apply');
        // Buy Product
        Route::get('event-wallet/{eventslug}/{eventapplyid}', [FrontendEventController::class, 'event_wallet'])->name('wallet');
    });
// ----- Org Project End-----
// ----- Org Product -----
    Route::group(['as' => 'product.', 'prefix' => 'product' ],function(){
        // index 
        Route::get('/', [FrontendProductController::class, 'index'])->name('index');
        // single Product
        Route::get('/{productslug}', [FrontendProductController::class, 'single'])->name('single');
        // Buy Product
        Route::Post('buy-now/{productslug}', [FrontendProductController::class, 'buy'])->name('buy');
        // Buy Product
        Route::get('product-wallet/{productslug}/{productbuyid}/', [FrontendProductController::class, 'product_wallet'])->name('product.wallet');
    });
// ----- Org Product End-----

});


