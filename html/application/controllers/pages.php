<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {
		
	public function index()
	{
		$data['page_title'] = "Автомобильные грузоперевозки | Везем-груз.рф";

		$this->load->view('header', $data);
		$this->load->view('main_page');
		$this->load->view('footer');
	}

	public function show_where($where_id, $city_id)
	{
		switch ($where_id)
		{
			case 'sever':				
				$data['page_title'] = 'Грузоперевозки на Север';
				break;

			case 'ural':				
				$data['page_title'] = 'Грузоперевозки по Уралу';
				break;

			case 'zapad':				
				$data['page_title'] = 'Грузоперевозки на Запад';
				break;

			case 'yug':				
				$data['page_title'] = 'Грузоперевозки на Юг';
				break;

			case 'kazahstan':				
				$data['page_title'] = 'Грузоперевозки в Казахстан';
				break;

			case 'sibir-dv':				
				$data['page_title'] = 'Грузоперевозки в Сибирь и на Дальний Восток';
				break;

			default:
				$data['page_title'] = '';
				break;
		}

		$data['page_title'] .= " | Везем-груз.рф";

		$data['contact_us'] = $this->load->view('contact_us','',true);
		$data['second_menu'] = $this->load->view($where_id.'_menu','',true);		

		$this->load->view('header', $data);
		$this->load->view($where_id.'_'.$city_id, $data);
		$this->load->view('footer');
	}

	public function show_service($service_id)
	{
		switch ($service_id)
		{
			case 'otdelnym-gruzom':				
				$data['page_title'] = 'Грузоперевозки отдельным грузом';
				break;

			case 'sbornym-gruzom':				
				$data['page_title'] = 'Грузоперевозки в составе сборного груза';
				break;

			case 'dopolnitelnye':				
				$data['page_title'] = 'Дополнительные услуги';
				break;

			default:
				$data['page_title'] = '';
				break;
		}

		$data['page_title'] .= " | Везем-груз.рф";

		$data['contact_us'] = $this->load->view('contact_us','',true);
		$data['second_menu'] = $this->load->view('services_menu','',true);		

		$this->load->view('header', $data);
		$this->load->view('services_'.$service_id, $data);
		$this->load->view('footer');
	}

	public function show_page($page_id)
	{
		switch ($page_id)
		{
			case 'zayavka':				
				$data['page_title'] = 'Оформить заявку';
				break;

			default:
				$data['page_title'] = '';
				break;
		}

		$data['page_title'] .= ' | Везем-груз.рф';

		$this->load->view('header', $data);
		$this->load->view($page_id);
		$this->load->view('footer');		
	}

}