<?php
	
	namespace App\Controllers;
	
	use App\Controllers\BaseController;
	
	class CondusefController extends BaseController {
		public function index () {
			if ( $this->validateSession () ) {
				$data = [ 'main' => view ( 'reune', [ 'session' => TRUE ] ) ];
				return view ( 'plantilla', $data );
			}
			return redirect ()->route ( 'signin' );
		}
		public function redeco () {
			if ( $this->validateSession () ) {
				$data = [ 'main' => view ( 'redeco', [ 'session' => TRUE ] ) ];
				return view ( 'plantilla', $data );
			}
			return redirect ()->route ( 'signin' );
		}
	}
