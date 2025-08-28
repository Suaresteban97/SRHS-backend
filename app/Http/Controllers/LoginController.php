<?php

namespace App\Http\Controllers;

//Models
use App\Models\Profile;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request) {
        if ($request->session()->has("user")) {

            if (isset($request["a"]) && $request["a"] != "") {
                $token = base64_decode($request["a"]);
                $explode = explode("_", $token);

                if(isset(session()->get("user")["token"]) && $explode[2] == session()->get("user")["token"]){
                    return redirect("dashboard");
                } else {
                    session()->flush();

                    $token = $explode[2];
                    // Hacemos la petición al API para el login
                    $request["token"] = $token;
    
                    $user = $this->getUserData($request);
    
                    if ((isset($user->errors) && $user->errors != null) || (isset($user->exception) && $user->exception != null)) {
                        return abort(404);
                    }
    
                    $user = json_decode($user, true); 
    
                    session()->put("user", $user["data"]);
                    return redirect("dashboard");                    
                }
                
            } else {
                return redirect("dashboard"); 
            }
            
        } else if (isset($request["a"]) && $request["a"] != "") {

            // Si no existe, miramos si se está enviando el token  en la url
            $token = base64_decode($request["a"]);
            $explode = explode("_", $token);

            if (isset($explode[2]) && $explode[2] != null) {
                $token = $explode[2];

                // Hacemos la petición al API para el login
                $request["token"] = $token;

                $user = $this->getUserData($request);

                if ((isset($user->errors) && $user->errors != null) || (isset($user->exception) && $user->exception != null)) {
                    return abort(404);
                }

                $user = json_decode($user, true); 

                session()->put("user", $user["data"]);
                
                return redirect("dashboard");
            } else {
                return abort(404);
            }
        }

        return abort(404);
    }

    public function getUserData($request){

        $searchProfile = Profile::where("token", $request["token"])->first();
        $data = [];

        if (isset($searchProfile)) {
            $data = [
                "code" => 1,
                "data" => $searchProfile
            ];
        }  else {
            $data = [
                "code" => 0,
                "errors" => "No existe perfil"
            ];
        }

        return $data;
    }
}
