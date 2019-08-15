<?php  

namespace Storelaravel;

use URL;
use Config;

use PayPal\Core\PayPalHttpClient;
use PayPal\v1\Payments\PaymentCreateRequest;
use PayPal\v1\Payments\PaymentExecuteRequest;
use PayPal\Core\SandboxEnvironment;


class PayPal{

	public $client, $environment;

	public function __construct(){

		$clientid = Config::get('services.paypal.clientid');
		$secret = Config::get('services.paypal.secretid');

		$this->environment = new SandboxEnvironment($clientid, $secret);

		$this->client = new PayPalHttpClient($this->environment);
	}

	//Solicitud de cobro
	public function buildPaymentRequest($amount){
		
		$request = new PaymentCreateRequest();

		$body = [
			"intent" => "sale",
			"transactions" => [
				[
					"amount" => ["total" => $amount, "currency" => "USD"]
				]
			],
			"payer" => [
				"payment_method" => "paypal"
			],
			"redirect_urls" => [
				"cancel_url" => URL::route('shopping_cart.show'),
				"return_url" => URL::route('shopping_cart.show'),
			]
		];

		$request->body = $body;

		return $request;
	}

	public function charge($amount){
		return $this->client->execute($this->buildPaymentRequest($amount));
 
	}

	public function execute($paymentId, $payerId){
		$paymentExecute  = new PaymentExecuteRequest($paymentId); 

		$paymentExecute->body = [
			"payer_id" => $payerId
		];

		return $this->client->execute($paymentExecute);
	}
}

/*
private $shopping_cart;
	private $_ClientId = 'AdOBzdTT5DABO5nBmcSFYRyGgWJOy_fnmZ02yDpqf2-Gf1VKpkBzeXi4pK5cm2NjdrYvjL6W7Hgrb9VI';
	private $_ClientSecret = 'EGn341Mx2dDtLQVI9yqSPWoeJE--hzGIsSNYQmnUfGfyVsTMuGV4TIEQTOEJVrREbj2IsxbNJZn-bcjI';

	
	public function __construct($shopping_cart){
		 
		$clientid = Config::get('services.paypal.clientid');
		$secret = Config::get('services.paypal.secretid');

		$this->environment = new SandboxEnvironment($clientid, $secret);

		$this->client = new PayPalHttpClient($this->environment);

		$this->shopping_cart = $shopping_cart;

	}

	public function generate()
	{
		$payment = \PaypalPayment::payment()->setIntent("sale")
						->setPayer($this->payer())
						->setTransactions($this->transaction())
						->setRedirectUrls($this->redirectURLs());

			try{
				$payment->create($this->api_Context);
			} catch(\Exception $ex){
				dd($ex);
				exit(1);
			}

			return $payment;
	}

	public function payer(){
		return \PaypalPayment::payer()->setPaymentMethod("paypal");
	}

	public function redirectURLs(){
		$baseURL = url('url');
		return \PaypalPayment::redirectUrls()->setRedirectUrl("$baseURL/payments/store")->setCancelUrl("$baseURL/carrito");
	}

	public function transaction(){
		return \PaypalPayment::trasaction()
				->setAmount($this->amount())
				->setItemList($this->items())
				->setDescription("Tu compra en productos STORE Jorge Peralta")
				->setInvoiceNumber(uniqid());	
	}

	public function items(){
		$items = [];
		$productos = $this->shopping_cart->productos()->get();

		foreach ($productos as $key => $producto) {
			array_push($items, $producto->paypalItem());			
		}
		return \PaypalPayment::itemList()->setItems($items);
	}

	public function amount(){
		return \PaypalPayment::amount()->setCurrency('USD')->setTotal($this->shopping_cart->total());
	}
*/
?>
 