<?php

use Pusher\PusherException;

class Pusher {
	private $auth_key 	= 'bfdaeffc36c6d6b68c32';
	private $secret_id 	= '8e62542863fde7fcc4cc';
	private $app_id 	= '843897';

	/**
	 * Conversion constructor.
	 */
	public function __construct()
	{
		$this->CI =& get_instance();
	}

	public function initialize(){
		$options = array(
			'cluster'	=> 'ap1',
			'useTLS' 	=> false
		);
		try
		{
			$pusher = new Pusher\Pusher($this->auth_key,$this->secret_id,$this->app_id, $options);
		} catch (PusherException $e)
		{
			return json_encode($e);
		}

		$html = '
				<script type="text/javascript">
					$(document).ready(function() {
//							window.location.reload();
						swal("Berhasil","ini pesan dari tes pusher","success");
					});
				</script>';
		$data['html'] 		= $html;
		try
		{
			$pusher->trigger('my-channel', 'my-event', $data);
			$this->CI->conversion->send_telegram('Ini tes kirim pusher',Conversion::CHANNEL_DEVS);
		} catch (PusherException $e)
		{
			json_encode($e);
		}
		return true;
	}
}
