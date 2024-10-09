<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

################################################
//23. Write a code to search record by name from user table.

use App\Http\Controllers\SearchController;
Route::get('/search', [SearchController::class, 'showSearchForm']);
Route::post('/search', [SearchController::class, 'searchUser']);



################################################
//22. Write a code in Laravel for delete the record from user table.

use App\Http\Controllers\DeleteController;
Route::get('/usersDelete', [DeleteController::class, 'showUsers']);
Route::get('/user/delete/{uid}', [DeleteController::class, 'deleteUser']);


################################################
//21. Write a code in Laravel for update the record from user table.

use App\Http\Controllers\UpdateController;
Route::get('/user/edit/{uid}', [UpdateController::class, 'editUser']);
Route::post('/user/update/{uid}', [UpdateController::class, 'updateUser']);


################################################
//20. Write a code in Laravel for show all the records of user table.

use App\Http\Controllers\DisplayController;
Route::get('/users', [DisplayController::class, 'showAllUsers']);


################################################
//19. Create login form for the user and check the authentication of user.

use App\Http\Controllers\Authentication;
Route::get('/login2', [Authentication::class, 'showLoginForm']);
Route::post('/login2', [Authentication::class, 'login']);
Route::get('/success', function () {
    return "Welcome to your dashboard!";
});

################################################
//18. Create one database as Laravel in mysql. Create table as user with the fields as uid, uname, password, email, mobile and city. Write a code in Laravel to insert the record.

use App\Http\Controllers\UserController;
Route::get('/user/form', [UserController::class, 'showForm']);
Route::post('/user/insert', [UserController::class, 'insert']);



################################################
//17. Crete a master (layout) page using the template inheritance and inherit in every page of your web application.

Route::get('/Home', function () {
    return view('Seventeen.home');
});
Route::get('/About', function () {
    return view('Seventeen.about');
});
Route::get('/Contact', function () {
    return view('Seventeen.contact');
});



################################################
//16. Create components for the header and footer and include it in every page of web application. (x-header and x-footer)

Route::get('/app', function () {
    return view('Sixteen.home');
});
Route::get('/aboutUs', function () {
    return view('Sixteen.about');
});



################################################
//15. Write a program to post login credentials and check weather user is authenticated or not.

use App\Http\Controllers\AuthController;
Route::view("/login", "Fifteen.form");
Route::post('/login', [AuthController::class, 'login']);


################################################
//14. Write a program to post the data.

use App\Http\Controllers\PostDataController;
Route::get('/form', function () {
    return view('Fourteen.form');
});
Route::post('/postdata', [PostDataController::class,'postdata']);



################################################
/*
13. Overloading-Create a controller and create a function in as login within it. Take two parameters as id and password and perform the following operations. Use same url in all routes. 
1. Display a message as “Login is required” if no parameter pass
2. Display a message as “Password is required” if only one parameter is passed.
3. Display a message as “Wrong user or password”.
4. Display a message as “Welcome” otherwise.
*/
use App\Http\Controllers\CheckLogin;
Route::get("checklogin/{id?}/{password?}", [CheckLogin::class, 'login']);



################################################
//12. Overloading-Write a code for post login credentials in the controller. If user is authenticate (id and password as admin), redirect to welcome page. Redirect to login page otherwise. Use same url for all routes.

use App\Http\Controllers\LoginController;
Route::get('/login/{uname}/{pass}', [LoginController::class,'login']);


#################################################
//11. Single Action Controller - Write a single action controller for return the cube.

use App\Http\Controllers\CubeController;
Route::get('/cube/{num}', CubeController::class);

#################################################
//10. Single Action Controller - Write a single action controller for return the square.

use App\Http\Controllers\SquareController;
Route::get('/square/{num}', SquareController::class);



#################################################
//9. Basic Controller - Create a controller for 3 operation 1.Factorial 2.Sum of Odd numbers 3. Sum of even number. Create routes with one parameter and perform the above operations. 

use App\Http\Controllers\Operations;
Route::get('/factorial/{num}', [Operations::class,'factorial']);
Route::get('/sumOdd/{num}', [Operations::class,'sumOdd']);
Route::get('/sumEven/{num}', [Operations::class,'sumEven']);



#################################################
//8. Basic Controller - Write a Program to create a controller for different arithmetic operation. Create four functions within it named as add, sub, mul, and div. create routes for calling these functions with a parameter.

use App\Http\Controllers\ArithController;
Route::get('/add/{num1}/{num2}', [ArithController::class,'add']);
Route::get('/sub/{num1}/{num2}', [ArithController::class,'sub']);
Route::get('/mul/{num1}/{num2}', [ArithController::class,'mul']);
Route::get('/div/{num1}/{num2}', [ArithController::class,'div']);



#################################################
/*7. Create a new project as middleware_example
Create four blades as home, about, contact, dashboard and  write a proper message in these blades as “This is <______> Page, to access it login is Required” except “home” blade. Write a welcome message in home blade.
Create four routes for the same without perameter.
Note: it will show above message when you will
Create other three routes for about, contact, dashboard with parameter as uname and pass. Also give the name to these routes.
Set hyperlink of these three pages in home page using name of routes.
Create one middleware as LoginCheck 
Write a code to get the parameter passed in url.
Check if uname and pass both is “admin”, allow to access requested page. 
Otherwise redirect it to home page.
Apply this middleware in all three parameterized route.
*/
Route::get('/home', function () {
    return view('Seven.home');
});
Route::get('/about', function () {
    return "To access this page, login is required";
});
Route::get('/contact', function () {
    return "To access this page, login is required";
});
Route::get('/dashboard', function () {
    return "To access this page, login is required";
});

//Parameterized routes
use App\Http\Middleware\LoginCheck;
Route::get('/about/{uname}/{pass}', function () {
    return view('Seven.about');
})->name('about')->middleware(LoginCheck::class);
Route::get('/contact/{uname}/{pass}', function () {
    return view('Seven.contact');
})->name('contact')->middleware(LoginCheck::class);
Route::get('/dashboard/{uname}/{pass}', function () {
    return view('Seven.dashboard');
})->name('dashboard')->middleware(LoginCheck::class);





#################################################
//6. Create group middleware as authentication is required to traverse any page in group.

use App\Http\Middleware\AuthMiddleware;
Route::middleware([AuthMiddleware::class])->group(function () {
    Route::get('/home/{uname}/{pass}', function ($uname,$pass) {
        return "Welcome to the home!";
    });
    Route::get('/profile/{uname}/{pass}', function ($uname,$pass) {
        return "Welcome to the Profile!";
    });
    Route::get('/settings/{uname}/{pass}', function ($uname,$pass) {
        return "Welcome to the Settings!";
    });
});




##################################################
//5.Create middleware for login authentication.

use App\Http\Middleware\LoginAuth;
Route::get('/dashboard/{uname}/{pass}', function ($uname,$pass) {
    return "Welcome to the Dashboard!";
})->middleware(LoginAuth::class);
Route::get('/redirect', function () {
    return "Login please";
});




###################################################
//4.Create middleware for checking age. If age is grater then 18 it will redirect to requested page, redirect to login page otherwise.

use App\Http\Middleware\checkAge;
Route::get('/login/{age?}', function ($age = 0) {
    return view('welcome'); // Show welcome page if age is valid
})->middleware(CheckAge::class);

###################################################
//3.Create parameterized route which accept name as parameter and display that name.

Route::get('/user/{name}', function ($name) {
    return "Welcome $name";
});




################################################
//2.Create a route group for user with sub routes as view, insert, update and delete.

Route::prefix('user')->group(function () {
    Route::get('view', function () {
        return "User View Page";
    });
    Route::get('insert', function () {
        return "User Insert Page";
    });
    Route::get('update', function () {
        return "User Update Page";
    });
    Route::get('delete', function () {
        return "User Delete Page";
    });
});



################################################
//1.Create named route for ISTAR. Create 3 blades as a MCA, IT and GIS. Set ISTAR route in all 3 pages as href link. 

Route::get('/istar', function () {
    return view('One.istar');
})->name('istar');

Route::view('/mca', 'One.mca');
Route::view('/it', 'One.it');
Route::view('/gis', 'One.gis');


















