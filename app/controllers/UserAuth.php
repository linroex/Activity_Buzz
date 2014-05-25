<?
class UserAuth extends Controller {
	public function addUser(){
		
		$info = Input::get("userInfo");
		
		$user = new User;
		$user->name = $info["name"];
		$user->id = $info["id"];
		$user->id = $info["email"];
		$user->save();
		return "add SUccesss";
	}
	
	public function checkUser(){
		$info = Input::get("userInfo");
		
		$user = User::find($info["id"]);
		if($user){
			return "login SUccesss";
		}else{
			return Redirect::to('/register/' . $id);
		}
		return var_dump($user);
	}
}
