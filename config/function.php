<?php
// Versi
$versi = '5.9.8'; // dont change!

// Cache Assets
$cache = '598'; // ubah ke angka/huruf apapun untuk update assets gambar dan css

// Environment
$production = 1; // 1 = production, 2 = development (show error), 3 = development, 4 = maintenance

if ($production == '1') {
	error_reporting(0);
} elseif ($production == '2') {
	error_reporting(1);
} elseif ($production == '3') {
	error_reporting(E_ALL ^ E_DEPRECATED);
} elseif ($production == '4') {
	header("location: /maintenance-web");
} else {
	error_reporting(0);
}

// Hari
$jadwal['hari'] = array(
	'Minggu'	=> 0,
	'Senin' 	=> 1,
	'Selasa'	=> 2,
	'Rabu'		=> 3,
	'Kamis'		=> 4,
	'Jumat'		=> 5,
	'Sabtu'		=> 6,
	'Sunday'		=> 0,
	'Monday' 		=> 1,
	'Tuesday'		=> 2,
	'Wednesday'		=> 3,
	'Thursday'		=> 4,
	'Friday'		=> 5,
	'Saturday'		=> 6
);

// Valid PHP Version
$PHPVersion = 7.4;
if (phpversion() < $PHPVersion) {
	die("Versi PHP Server Harus {$PHPVersion}+. Versi Saat Ini " . phpversion());
}

function acak($length)
{
	$str = "";
	$karakter = array_merge(range('A', 'Z'), range('a', 'z'), range('0', '9'));
	$max_karakter = count($karakter) - 1;
	for ($i = 0; $i < $length; $i++) {
		$rand = mt_rand(0, $max_karakter);
		$str .= $karakter[$rand];
	}
	return $str;
}

function acakpin()
{
	$str = substr(str_shuffle(123456789), 0, 6);
	return $str;
}

function acaktext()
{
	$str = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'), 0, 3);
	return $str;
}

function acakstring()
{
	$str = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz1234567890'), 0, 4);
	return $str;
}

if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
	$url = "https://";
else
	$url = "http://";
// Append the host(domain name, ip) to the URL.
$url .= $_SERVER['HTTP_HOST'];
// Append the requested resource location to the URL
$url .= $_SERVER['REQUEST_URI'];

$updatelink = 'https://surgabet781.com';

// Class Whitelabel
class whitelabel
{
	public $agen    =   "#";
	public $token   =   "07cd0ffh367c8362afa7156466161d853";
	public $url     =   "https://api.goldslot-link.com/api/v2";

	public function create($username, $deposit_amount = 0)
	{
		$url = $this->url."/user_create";

		$action = array(
			'agent_code'    =>  $this->agen,
			'agent_token'   =>  $this->token,
			'user_code'     =>  $username
		);

		if($deposit_amount != 0) {
			$action['deposit_amount'] = $deposit_amount;
		}

		return $this->wl_connect($url, $action);
	}

	public function getbalance($username)
	{
		$url = $this->url."/info";

		$action = array(			
			'agent_code'    => $this->agen,
			'agent_token'   => $this->token,
			'user_code'     => $username
		);
		return $this->wl_connect($url, $action);
	}

	public function getbalanceAgent()
	{
		$url = $this->url."/info";

		$action = array(
			'agent_code'    => $this->agen,
			'agent_token'   => $this->token,
		);

		return $this->wl_connect($url, $action);
	}

	public function userWithdrawAll()
	{
		//use this function seriously!!!
		//All user's money will be withdraw
		$url = $this->url."/user_withdraw_all";

		$action = array(
			'agent_code'    =>  $this->agen,
			'agent_token'   =>  $this->token,
		);

		return $this->wl_connect($url, $action);
	}

	public function transaksi($username, $type, $amount)
	{
		//only use for deposit and withdraw request
		$url = $this->url."/".$type;

		$action = array(
			'agent_code'    =>  $this->agen,
			'agent_token'   =>  $this->token,
			'user_code'     =>  $username,
			'amount'        =>  $amount
		);
		return $this->wl_connect($url, $action);
	}

	public function gameList($provider, $lang='en')
	{
		$url = $this->url."/game_list";

		$action = array(
			'agent_code'    =>  $this->agen,
			'agent_token'   =>  $this->token,
			'provider_code' =>  $provider,
			'lang'			=>  $lang
		);

		return $this->wl_connect($url, $action);
	}

	public function providerList($game_type='slot')
	{
		$url = $this->url."/provider_list";

		$action = array(
			'agent_code'    =>  $this->agen,
			'agent_token'   =>  $this->token,
			'game_type' => $game_type
		);
		
		return $this->wl_connect($url, $action);
	}

	public function getHistory($username, $start_date, $end_date, $game_type = 'slot', $search="")
	{
		$url = $this->url."/get_date_log";

		$action = array(
			'agent_code'    =>  $this->agen,
			'agent_token'   =>  $this->token,
			'user_code'     =>  $username,
			'game_type'     =>  $game_type,
			'start'         =>  $start_date,
			'end'           =>  $end_date,
			'page'          =>  0,
			'length'       =>  1000,
			'search'		=>  $search
		);
		return $this->wl_connect($url, $action);
	}

	public function getHistoryById($username, $id, $game_type = 'slot')
	{
		$url = $this->url."/get_id_log";

		$action = array(
			'agent_code'    =>  $this->agen,
			'agent_token'   =>  $this->token,
			'user_code'     =>  $username,
			'game_type'     =>  $game_type,
			'last_history_id' =>  $id
		);
		return $this->wl_connect($url, $action);
	}

	public function getExchangeHistory($username, $start_date, $end_date)
	{
		$url = $this->url."/get_exchange_history";

		$action = array(
			'agent_code'    =>  $this->agen,
			'agent_token'   =>  $this->token,
			'user_code'     =>  $username,
			'start'     	=>  $start_date,
			'end'			=>  $end_date,
			'page'			=>  0,
			'length'		=>  1000
		);
		return $this->wl_connect($url, $action);
	}

	public function openGame($username, $provider, $game_code, $game_type = 'slot', $lang='en', $deposit_amount = 0)
	{
		$url = $this->url."/game_launch";

		$action = array(
			'agent_code'    =>  $this->agen,
			'agent_token'   =>  $this->token,
			'user_code'     =>  $username,
			'game_type'		=>  $game_type,
			'provider_code' =>  $provider,
			'game_code'     =>  $game_code,
			'lang'          =>  $lang,
			'deposit_amount'=>	$deposit_amount,
		);
		return $this->wl_connect($url, $action);
	}

	public function callPlayers()
	{
		$url = $this->url."/current_players";

		$action = array(
			'agent_code'    =>  $this->agen,
			'agent_token'   =>  $this->token
		);
		return $this->wl_connect($url, $action);
	}

	public function callList($username, $provider, $game_code, $call_type = 1)
	{
		$url = $this->url."/call_list";

		$action = array(			
			'agent_code'    =>  $this->agen,
			'agent_token'   =>  $this->token,
			'user_code'		=>	$username,
			'provider_code'	=>  $provider,
			'game_code'		=>  $game_code,
			'call_type'		=>  $call_type
		);

		return $this->wl_connect($url, $action);
	}

	public function callApply($username, $provider, $game_code, $call_rtp, $call_type = 1)
	{
		$url = $this->url."/call_apply";

		$action = array(
			'agent_code'    =>  $this->agen,
			'agent_token'   =>  $this->token,
			'provider_code' =>  $provider,
			'game_code'     =>  $game_code,
			'user_code'     =>  $username,
			'call_rtp'      =>  $call_rtp,
			'call_type'     =>  $call_type
		);

		return $this->wl_connect($url, $action);
	}

	public function getCallHistory($last_id = 1, $order_dir = 'DESC')
	{
		$url = $this->url."/call_history";

		$action = array(
			'agent_code'    =>  $this->agen,
			'agent_token'   =>  $this->token,
			'offset'        =>  0,
			'limit'         =>  100,
			'last_call_id'	=>  $last_id,
			'order_dir'		=>	$order_dir
		);

		return $this->wl_connect($url, $action);
	}

	public function callCancel($call_id)
	{
		$url = $this->url."/call_cancel";

		$action = array(
			'agent_code'    =>  $this->agen,
			'agent_token'   =>  $this->token,
			'call_id'       =>  $call_id
		);
		return $this->wl_connect($url, $action);
	}

	public function controlAgentRtp($rtp)
	{
		$url = $this->url."/agent_rtp";

		$action = array(
			'agent_code'    =>  $this->agen,
			'agent_token'   =>  $this->token,
			'agent_rtp'           =>  $rtp
		);

		return $this->wl_connect($url, $action);
	}

	public function controlUserRtp($username, $provider, $rtp)
	{
		$url = $this->url."/user_rtp";

		$action = array(
			'agent_code'    =>  $this->agen,
			'agent_token'   =>  $this->token,
			'provider_code' =>  $provider,
			'user_code'     =>  $username,
			'user_rtp'           =>  $rtp
		);

		return $this->wl_connect($url, $action);
	}

	private function wl_connect($url, $data)
	{
		$ch         =   curl_init($url);
		$payload    =   json_encode($data);

		curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		curl_setopt($ch,  CURLOPT_RETURNTRANSFER,  true);

		$res  =  curl_exec($ch);
		curl_close($ch);

		return $res;
	}
}

$WL = new whitelabel();
