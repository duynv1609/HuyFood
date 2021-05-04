<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiGoogleSheetController extends Controller
{
    public function index(Request $request)
	{
		$client = $this->getClient();
		// Get the API client and construct the service object.
		
		$service = new \Google_Service_Sheets($client);
		$spreadsheetId = '1dk3fA9_qN0qYkRcg6fdiL_TM1uERdwZWndg1m9pt8ys';  // id google sheets
		$range = 'Sheet1!A1:D5';

		$values = [
			["Item", "Cost", "Stocked", "Ship Date"],
	    	["Wheel", "$20.50", "4", "3/1/2016"],
	    	["Door", "$15", "2", "3/15/2016"],
	    	["Engine", "$100", "1", "30/20/2016"],
	    	["Totals", "$135.5", "7", "3/20/2016"]
		];

		$data = [];
		$data[] = new \Google_Service_Sheets_ValueRange([
		    'range' => $range,
		    'values' => $values
		]);
		// Additional ranges to update ...
		$body = new \Google_Service_Sheets_BatchUpdateValuesRequest([
		    // 'valueInputOption' => $valueInputOption,
		    'data' => $data
		]);
		$result = $service->spreadsheets_values->batchUpdate($spreadsheetId, $body);
		printf("%d cells updated.", $result->getTotalUpdatedCells());
	}
	
	protected function getClient()
	{
		$client = new \Google_Client();
	    $client->setApplicationName('Google Sheets API PHP Quickstart');
	    $client->setScopes(\Google_Service_Sheets::SPREADSHEETS_READONLY);
	    $client->setAuthConfig('credentials.json');
	    $client->setAccessType('offline');
	    $client->setPrompt('select_account consent');

	    // Load previously authorized token from a file, if it exists.
	    // The file token.json stores the user's access and refresh tokens, and is
	    // created automatically when the authorization flow completes for the first
	    // time.
	    $tokenPath = 'token.json';
	    if (file_exists($tokenPath)) {
	        $accessToken = json_decode(file_get_contents($tokenPath), true);
	        $client->setAccessToken($accessToken);
	    }

	    // If there is no previous token or it's expired.
	    if ($client->isAccessTokenExpired()) {
	        // Refresh the token if possible, else fetch a new one.
	        if ($client->getRefreshToken()) {
	            $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
	        } else {
	            // Request authorization from the user.
	            $authUrl = $client->createAuthUrl();
	            printf("Open the following link in your browser:\n%s\n", $authUrl);
	            print 'Enter verification code: ';

	            // dd($authUrl); // doan nay de xac thuc token lan dau uy quyen
	            define('STDIN',fopen("php://stdin","r"));
	            $authCode = '4/OQH_SF9pK2Wc-BFbmqDDr_2iCmhYpn6jxSg2wqsxh-KoPKym16wGz5U';
	            // dd($authCode);

	            // Exchange authorization code for an access token.
	            $accessToken = $client->fetchAccessTokenWithAuthCode($authCode);
	            // $accessToken = '4/OQFDhNkm9b4Ifs7Lk9_r9bv7QquDHgVYfLIh4R89jM3UaM7p0LTZDnk';
	            $client->setAccessToken($accessToken);

	            // Check to see if there was an error.
	            if (array_key_exists('error', $accessToken)) {
	                throw new Exception(join(', ', $accessToken));
	            }
	        }
	        // Save the token to a file.
	        if (!file_exists(dirname($tokenPath))) {
	            mkdir(dirname($tokenPath), 0700, true);
	        }
	        file_put_contents($tokenPath, json_encode($client->getAccessToken()));
	    }
	    return $client;
	}
}
