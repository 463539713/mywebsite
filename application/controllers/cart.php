<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Cart extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->helper("url");
			$this->load->library('cart');
		}
		
		public function index(){
			$this->load->view("goods");
		}
		
		public function add_cart(){
			$id=$this->input->post("id");
			$qty=$this->input->post("qty");
			$price=$this->input->post("price");
			$name=$this->input->post("name");
			$size=$this->input->post("size");
			
			$data=array(
				'id'=>$id,
				//'id'=>2,
				'qty'=>$qty,
				//'qty'=>3,
				'price'=>$price,
				//'price'=>140,
				'name'=>$name,
				//'name'=>'aaa',
				'options'=>array('size'=>$size)
				//'options'=>array('size'=>'AL')
			);
			
			if($this->cart->insert($data)){
				redirect('cart/flow');
			}else{
				echo "error";
			}
		}
		
		public function flow(){
			$this->load->view("flow");
		}
		
		public function update_cart(){
			$data=array(
				'rowid'=>$this->input->post('rowid'),
				'qty'=>$this->input->post('qty')
			);
			
			$this->cart->update($data);
			redirect("cart/flow");
		}
		
		public function cart_destory(){
			$this->cart->destroy();
			redirect("cart/flow");
		}
		
		public function delete($rowid){
			$data['rowid']=$rowid;
			$data['qty']=0;
			$this->cart->update($data);
			redirect('cart/flow');
		}
	}

?>