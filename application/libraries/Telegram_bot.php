<?php

class Telegram_bot {

//isikan token dan nama botmu yang di dapat dari bapak bot :
public $TOKEN      = "710184082:AAHnSUgubt6_b_fF0dlxOxRxJMVYU5rwEK4"; // ganti dengan token bot anda
public $usernamebot= "@vanpersietyo_bot"; // sesuaikan besar kecilnya, bermanfaat nanti jika bot dimasukkan grup.
// aktifkan ini jika perlu debugging
public $debug = false;

// fungsi untuk mengirim/meminta/memerintahkan sesuatu ke bot
function request_url($method)
{
	return "https://api.telegram.org/bot" . $this->TOKEN . "/". $method;
}

// fungsi untuk meminta pesan
// bagian ebook di sesi Meminta Pesan, polling: getUpdates
function get_updates($offset)
{
	$url 	= $this->request_url("getUpdates")."?offset=".$offset;
	$resp 	= file_get_contents($url);
	$result = json_decode($resp, true);
	if ($result["ok"]==1)
		return $result["result"];
	return array();
}
// fungsi untuk mebalas pesan,
// bagian ebook Mengirim Pesan menggunakan Metode sendMessage
function send_reply($chatid, $msgid, $text)
{
	global $debug;
	$keyboard = [
		'inline_keyboard' => [
			[
				['text' => 'Approve', 'callback_data' => 'someString'],
				['text' => 'Tolak', 'callback_data' => 'someString']
			]
		]
	];
	$encodedKeyboard = json_encode($keyboard);

	$data = array(
		'chat_id' 				=> $chatid,
		'text'  				=> $text,
		'reply_to_message_id' 	=> $msgid,   // <---- biar ada reply nya balasannya, opsional, bisa dihapus baris ini
        'reply_markup' 			=> $encodedKeyboard
	);
	// use key 'http' even if you send the request to https://...
	$options = array(
		'http' => array(
			'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
			'method'  => 'POST',
			'content' => http_build_query($data),
		),
	);
	$context  = stream_context_create($options);
	$result = file_get_contents($this->request_url('sendMessage'), false, $context);
	if ($debug)
		print_r($result);
}

// fungsi mengolahan pesan, menyiapkan pesan untuk dikirimkan
function create_response($text, $message)
{
	$usernamebot = $this->usernamebot;
	// inisiasi variable hasil yang mana merupakan hasil olahan pesan
	$hasil = '';
	$fromid = $message["from"]["id"]; // variable penampung id user
	$chatid = $message["chat"]["id"]; // variable penampung id chat
	$pesanid= $message['message_id']; // variable penampung id message
	// variable penampung username nya user
	isset($message["from"]["username"])
		? $chatuser = $message["from"]["username"]
		: $chatuser = '';

	// variable penampung nama user
	isset($message["from"]["last_name"])
		? $namakedua = $message["from"]["last_name"]
		: $namakedua = '';
	$namauser = $message["from"]["first_name"]. ' ' .$namakedua;
	// ini saya pergunakan untuk menghapus kelebihan pesan spasi yang dikirim ke bot.
	$textur = preg_replace('/\s\s+/', ' ', $text);
	// memecah pesan dalam 2 blok array, kita ambil yang array pertama saja
	$command = explode(' ',$textur,2); //
	// identifikasi perintah (yakni kata pertama, atau array pertamanya)
	switch ($command[0]) {
		// jika ada pesan /id, bot akan membalas dengan menyebutkan idnya user
		case '/id':
		case '/id'.$usernamebot : //dipakai jika di grup yang haru ditambahkan @usernamebot
			$hasil = "$namauser, ID kamu adalah $fromid";
			break;

		// jika ada permintaan waktu
		case '/time':
		case '/time'.$usernamebot :
			$hasil  = "$namauser, waktu lokal bot sekarang adalah :\n";
			$hasil .= "\xE2\x8C\x9A".date("d M Y")."\nPukul ".date("H:i:s");
			break;

		case '/start':

			$hasil  = "assalamualaikum saudara/i $namauser
                       berikut list command dari bot ini :
                       => /id   	--> untuk menampilkan id anda
                       => /approve  --> tes menyetujui
                       => /time 	--> untuk menampilkan waktu lokal anda";
			break;

		case '/approve':
			$hasil  = "$namauser Menyetujui Transaksi xxx";
			break;
		case 'bot bodo':
			$hasil  = "Kowe $namauser seng bodo";
			break;
		// balasan default jika pesan tidak di definisikan
		default:
			$hasil = 'Terimakasih, pesan telah kami terima.';
			break;
	}
	return $hasil;
}

// fungsi pesan yang sekaligus mengupdate offset
// biar tidak berulang-ulang pesan yang di dapat
function process_message($message)
{
	$updateid = $message["update_id"];
	$message_data = $message["message"];
	if (isset($message_data["text"])) {
		$chatid = $message_data["chat"]["id"];
		$message_id = $message_data["message_id"];
		$text = $message_data["text"];
		$response = $this->create_response($text, $message_data);
		if (!empty($response))
			$this->send_reply($chatid, $message_id, $response);
	}
	return $updateid;
}


// hanya untuk metode poll
// fungsi untuk meminta pesan
// baca di ebooknya, yakni ada pada proses 1
function process_one()
{
	$debug = $this->debug;
	$update_id  = 0;
	echo "-";

	if (file_exists("last_update_id"))
		$update_id = (int)file_get_contents("last_update_id");

	$updates = $this->get_updates($update_id);
	// jika debug=0 atau debug=false, pesan ini tidak akan dimunculkan
	if ((!empty($updates)) and ($debug) )  {
		echo "\r\n===== isi diterima \r\n";
		print_r($updates);
	}

	foreach ($updates as $message)
	{
		echo '+';
		$update_id = $this->process_message($message);
	}
	// update file id, biar pesan yang diterima tidak berulang
	file_put_contents("last_update_id", $update_id + 1);
}
// metode poll
// proses berulang-ulang
// sampai di break secara paksa
// tekan CTRL+C jika ingin berhenti

}

$telegram = new Telegram_bot();
while (true) {
	$telegram->process_one();
	sleep(1);
}
// metode webhook
// secara normal, hanya bisa digunakan secara bergantian dengan polling
// aktifkan ini jika menggunakan metode webhook
/*
$entityBody = file_get_contents('php://input');
$pesanditerima = json_decode($entityBody, true);
process_message($pesanditerima);
*/
/*
 *
 * php Telegram_bot.php di command line
*/
?>
