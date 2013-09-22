<?php
class SendMail extends CI_Controller {

	function index()
	{
		// собираем данные в массив

		$data = array(
			'name' => $this->input->post('inputName'),
			'phone' => $this->input->post('inputPhone'),			
			'message' => $this->input->post('inputMessage')
			);

		// составляем письмо

		$email_subject = "Новая заявка! Имя: ".$data['name']."."; // тема письма

		$email_content = "Привет!\nНам пришла новая заявка.\n";
		$email_content .= "Имя: ".$data['name'];		
		$email_content .= "\nТелефон: ".$data['phone'];		
		$email_content .= "\nСообщение: \n".$data['message'];

		$this->load->library('email');

		$this->email->from('robot@stellunger.ru', 'Робот Штеллунгера');
		$this->email->to('avrora@stellunger.ru'); 		

		$this->email->subject($email_subject);
		$this->email->message($email_content);	

		$this->email->send();

		//echo $this->email->print_debugger();

		$data['page_title'] = "Спасибо за заявку! | Везем-груз.рф";

		$this->load->view('header',$data);
		$this->load->view('thanks');
		$this->load->view('footer');
	}	
}
?>