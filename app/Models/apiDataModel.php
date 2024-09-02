<?php
	
	namespace App\Models;
	class apiDataModel extends BaseModel {
		public function validateAccess ( mixed $input ): bool|string|null {
			return $this->sendRequest ( 'toSignIn', $input, 'POST', 'JSON', [] );
		}
		public function logOut ( mixed $input ): bool|string|null {
			return $this->sendRequest ( 'toSignOut', $input, 'PUT', 'GET', [] );
		}
		private function sendRequest ( string $endpoint, array $data, ?string $method, ?string $dataType, ?array $headers ): bool|string {
			$env = getenv ( 'CI_ENVIRONMENT' );
			$url = $env === 'development' ? 'https://api-solve.local/' : 'https://apisandbox.solve.com.mx/public/';
			$method = !empty( $method ) ? strtoupper ( $method ) : 'POST';
			$dataType = !empty( $dataType ) ? strtoupper ( $dataType ) : 'JSON';
			if ( strtoupper ( $dataType ) === 'JSON' ) {
				$headers[] = 'Content-Type: application/json; charset=utf-8';
				$data = json_encode ( $data );
			}
			if ( ( $ch = curl_init () ) ) {
				curl_setopt ( $ch, CURLOPT_URL, $url.'/'.$endpoint );
				curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, TRUE );
				curl_setopt ( $ch, CURLOPT_ENCODING, '' );
				curl_setopt ( $ch, CURLOPT_MAXREDIRS, 10 );
				curl_setopt ( $ch, CURLOPT_TIMEOUT, 0 );
				curl_setopt ( $ch, CURLOPT_FOLLOWLOCATION, TRUE );
				curl_setopt ( $ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1 );
				if ( $method == 'POST' ) {
					curl_setopt ( $ch, CURLOPT_POST, TRUE );
				} else {
					curl_setopt ( $ch, CURLOPT_CUSTOMREQUEST, $method );
				}
				curl_setopt ( $ch, CURLOPT_POSTFIELDS, $data );
				curl_setopt ( $ch, CURLOPT_HTTPHEADER, $headers );
				$response = curl_exec ( $ch );
				curl_close ( $ch );
				return $response;
			}
			return FALSE;
		}
	}