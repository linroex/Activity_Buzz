<?
class Notify extends Controller {
	public function mail($id){
		$payload = array(
			'message' => array(
			'subject' => '[TEST]Transactional email via Mandrill',
	    	  	'html' => 'It works!',
	        	'from_email' => 'linroex@coder.tw',
			'to' => array(array('email'=>'passion804222@gmail.com'))
		    	)	
		);

		$response = Mandrill::request('messages/send', $payload);	
		return $response;
	}	
}
