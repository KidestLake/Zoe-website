<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtistController extends Controller
{
    public function index()
    {

        return view('FrontEnd.home');
    }



    public function registerArtist()
    {

        $data['title'] = 'Artist | Register Artist';
        return view('admin/user/registerArtist', $data);
    }


    public function addArtist(Request $request)
    {

        $this->validate($request, [
            "first_name" => "required",
            "last_name" => "required",
            "phone" => "required",
            "bank_name" => "required",
            "account_number" => "required",
            "acount_name" => "required",
            "id_image" => "required"
        ]);

        $msg = '';
        $code = 201;
        $password = $this->getPassword();
        //$password = '1223';

        try {

            $user = new User();
            $user->email = $request->input('email');
            $user->phone = $request->input('phone');
            $user->password = Crypt::encrypt($password);
            $user->role = 'artist';
            $user->created_by = 1; // to be changed with session done

            $profile = new Profile();
            $profile->first_name = $request->input('first_name');
            $profile->last_name = $request->input('last_name');
            $profile->location = $request->input('location');
            $profile-> id_image = $request ->input(id_image)
            $bank = new BankAccount();
            $bank->bank_name = $request->input('bank_name');
            $bank->account_number = $request->input('account_number');
            $bank->artist_name = $request->input('first_name') . ' ' . $request->input('last_name');


            if ($user->save()) {
                $profile->user_id = $user->id;
                if ($profile->save()) {
                    $bank->user_id = $user->id;
                    if ($bank->save()) {
                        $msg = "Artist registered Successfully!Password for the artist is " . $password;
                        $code = 201;
                        $type = 'successRegistering';
                        Session::flash($type, $msg);
                        return redirect('User/activeArtists');
                    } else {

                        $profileDelete = User::where('user_id', $user->id)->delete();
                        $userDelete = User::where('user_id', $user->id)->delete();

                        $code = 500;
                        $msg = "An error occured while registering artist. Please try again.";
                        $type = 'error';
                        Session::flash($type, $msg);
                        return back();
                    }
                } else {

                    $userDelete = User::where('user_id', $user->id)->delete();
                    $code = 500;
                    $msg = "An error occured while registering artist. Please try again.";
                    $type = 'error';
                    Session::flash($type, $msg);
                    return back();
                }
            } else {
                $code = 500;
                $msg = "An error occured while registering artist. Please try again.";

                $type = 'error';
                Session::flash($type, $msg);
                return back();
            }
        } catch (Exception $ex) {
            $msg = $ex->getMessage();
            $code = 500;

            $type = 'error';
            Session::flash($type, $msg);
            return back();
        }
    }
}
