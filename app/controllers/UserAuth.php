<?
class UserAuth extends Controller {
	public function addUser(){
		// dd(Input::get('name'));
		User::add(Input::get('name'),Input::get('id'),Input::get('email'));
		return "add SUccesss";
	}
	
	public function checkUser(){
		if(User::check(Input::get('id'))){
			return "login SUccesss";
		}else{
			return Redirect::to('/register/' . $id);
		}
		return var_dump($user);
	}
}
