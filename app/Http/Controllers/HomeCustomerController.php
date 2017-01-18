<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Office;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

class HomeCustomerController extends Controller {

    public function registerCustomer() {
        if (isset($_POST['Register']) && ($_POST['password'] == $_POST['password_confirmation'])) {
            $newCustomer           = new Customer();
            $newCustomer->name     = $_POST['name'];
            $newCustomer->email    = $_POST['email'];
            $newCustomer->password = $_POST['password'];
            $newCustomer->save();
        }

        return view('auth.registerCustomer');
    }

    public function loginCustomer() {
        if (isset($_POST['Login'])) {
            $newCustomer                = new Customer();
            $loginCustomer              = $newCustomer->loginCustomer($_POST['email']);
            if (!empty($loginCustomer) && $loginCustomer[0]->password = $_POST['password']) {
                $response = new \Illuminate\Http\Response(redirect('/dashboard'));
                $response->withCookie(cookie('logged', '1', 450));
                return $response;
            }
        }

        return view('auth.loginCustomer');
    }

    public function dashboard(Request $request) {
        $logged = $request->cookie('logged');
        if ($logged == 0) {
            return redirect('/loginCustomer');
        } else {
            return view('customer.dashboard');
        }
    }

    public function addOffice(Request $request) {
        $logged = $request->cookie('logged');
        if ($logged == 0) {
            return redirect('/loginCustomer');
        } else {

            if (isset($_POST['Send'])) {
                $newOffice             = new Office();
                $newCustomer->name     = $_POST['name'];
                $newCustomer->save();
            }

            return view('customer.addOffice');
        }
    }

    public function office(Request $request) {
        $logged = $request->cookie('logged');
        if ($logged == 0) {
            return redirect('/loginCustomer');
        } else {
            return view('customer.office');
        }
    }

}
