<?php



use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $departments = DB::table('departments')->get();
        //dd($departments);
        return view('auth.register', ['department' => $departments]);
    }

    /**
     * Handle an incoming registration request.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request) 
    { 
      
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'departments' => ['required', 'int', 'max:255'],
            'interests' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email, 
            'departments' => $request->departments,
            'interests' => $request->interests,
            'password' => Hash::make($request->password),
        ]);

       
        return redirect(RouteServiceProvider::LOGIN);
    }

 
    public function GetJasonResponse(Request $request ,$id)
    {
     
       // dd($request);
        $interests = DB::table("interests")
                    ->where("department_id",$id)
                    ->get("name","id");
         return Response::json($interests);
        
    }
    public function Dashboard(Request $request)
    {
     
        $user = Auth::user();
        echo $user;
    }
}
