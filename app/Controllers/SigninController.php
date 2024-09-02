<?php
	
	namespace App\Controllers;
	
	use App\Models\apiDataModel;
	use CodeIgniter\HTTP\RedirectResponse;
	use CodeIgniter\HTTP\ResponseInterface;
	
	class SigninController extends BaseController {
		public function index (): string|RedirectResponse {
			if ( $this->validateSession () ) {
				return redirect ( '/' );
			}
			$data = [ 'main' => view ( 'signin' ), 'session' => FALSE ];
			return view ( 'plantilla', $data );
		}
		public function signIn (): ResponseInterface|bool {
			$this->input = $this->getRequestInput ( $this->request );
			if ( $this->verifyRules ( 'POST', $this->request, NULL ) ) {
				$this->logResponse ( 1 );
				return $this->getResponse ( $this->responseBody, $this->errCode );
			}
			$api = new apiDataModel();
			$this->input[ 'platform' ] = 5;
			$res = json_decode ( $api->validateAccess ( $this->input ), TRUE );
			$this->errCode = $res[ 'error' ];
			if ( $this->errCode != 0 ) {
				$this->responseBody = [
					'error'       => $res[ 'error' ],
					'description' => $res[ 'description' ],
					'reason'      => $res[ 'reason' ] ];
				return $this->getResponse ( $this->responseBody, $this->errCode );
			}
			$session = session ();
			$session->set ( 'logged_in', TRUE );
			$session->set ( 'user', $res[ 'user' ][ 'id' ] );
			$session->set ( 'permissions', $res[ 'user' ][ 'permissions' ] );
			$this->errCode = 200;
			$this->responseBody = [
				'error'       => 0,
				'description' => 'Datos de petición correcto',
				'reason'      => 'Inicio de sesión exitoso' ];
			return $this->getResponse ( $this->responseBody );
		}
	}
