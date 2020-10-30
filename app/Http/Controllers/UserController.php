<?php

    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use App\Traits\ApiResponser;
    use App\User;
    use DB;
    Class UserController extends Controller {
        use ApiResponser;
        private $request;

        public function __construct(Request $request){
        $this->request = $request;
        }

        public function login_Page(){
            return views('LogIn');
        }

        public function validateUser(){
            
            $username = $_POST['username'];
            $password = $_POST['password'];

            $user = app('db')->select("SELECT * FROM user WHERE username='$username' and password='$password'");

            if(empty($user)){
                return 'No account registered or Invalid login credentials.';
            }else{
                return redirect()->route('web1');
            }
            
        }
        public function web1(){
            $id = app('db')->select("SELECT id FROM user");
            $username = app('db')->select("SELECT username FROM user");
            $password = app('db')->select("SELECT password FROM user");

            $data = [
                'id'=>$id,
                'username'=>$username,
                'password'=>$password
            ];
            return view('web1')->with($data);
        }
        public function createUser(Request $request){

            $this->validate($request, [
                'username' => 'required|max:50',
                'password' => 'required|max:50'
            ]);

            $users = app('db')->select("SELECT * FROM user");
            

            if(count($users)>0){
                $idcount = DB::table('user')->orderBy('id', 'DESC')->first();
                $idcount = $idcount->id;
                $user = new User;
                $user->user_id=($idcount+1);
                $user->password = $request->input('password');
                $user->username = $request->input('username');
                if ($user->save()) {
                    return redirect()->route('web1');
                } else {
                }
            }else{
                $user = new User;
                $user->id = (count($users)+ 1);
                $user->password = $request->input('password');
                $user->username = $request->input('username');
                if ($user->save()) {
                    return redirect()->route('web1');
                } else {
                }
            }
           
        }

        public function create_Page(){
            return view('create.php');
        }

        public function edit_Page(){
            $id = app('db')->select("SELECT id FROM user");
            $username = app('db')->select("SELECT username FROM user");
            $password = app('db')->select("SELECT password FROM user");

            $data = [
                'id' => $id,
                'username' => $username,
                'password' => $password
            ];
            return view('Edit')->with($data);
        }

        public function update(){
            $id = $_POST['idSearch'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            app('db')->table('user')->where('user_id', $id)->update(['username' => $username, 'password' => $password]);
            return redirect()->route('web1');
        }

        public function delete(){
            $id = $_POST['delete_id'];
            $user = User::find($id);
            $user->delete();
            return redirect()->route('web1');
        }

    }
?>