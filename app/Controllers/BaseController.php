<?php

namespace App\Controllers;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 *
 * @package CodeIgniter
 */

use CodeIgniter\Controller;

class BaseController extends Controller
{

	/**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 *
	 * @var array
	 */
	protected $helpers = ['form', 'url'];

	/**
	 * Constructor.
	 */
	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		//--------------------------------------------------------------------
		// E.g.:
		$this->session = \Config\Services::session();
		$this->validasi = \Config\Services::validation();
		$sideMenu = [
			[
				'nama' => 'dashboard',
				'icon' => 'fa fa-home',
				'href' => 'admin/dashboard',
				'label' => 'Dashboard'
			],
			[
				'nama' => 'dataAdmin',
				'icon' => 'fa fa-user',
				'href' => 'admin/data_admin',
				'label' => 'Data Admin'
			],
			[
				'nama' => 'dataPeserta',
				'icon' => 'fa fa-users',
				'href' => 'admin/data_peserta',
				'label' => 'Data Peserta'
			],
		];

		$sidePeserta = [
			[
				'nama' => 'dashboard',
				'icon' => 'fa fa-home',
				'href' => 'peserta',
				'label' => 'Dashboard'
			],

		];
		//$this->session = session();
		$sess = $this->session->get('userGroup');
		switch ($sess) {
			case 'Peserta':
				if ($dtrow = $this->_set_data_peserta()) {
					$row = $dtrow[0];
					if ($row->foto == '') {
						$avatar = 'default.jpg';
					} else {
						$avatar = $row->foto;
					}
					$this->data = [
						'nama' => $row->nama,
						'program' => $row->nama_program,
						'avatar' => $avatar,
						'sideMenu' => $sidePeserta
					];
				}
				break;
			case 'Admin1':
				if ($dtrow = $this->_set_data_user()) {
					if ($dtrow->foto == '') {
						$avatar = 'default.jpg';
					} else {
						$avatar = $dtrow->foto;
					}
					$this->data = [
						'nama' => $dtrow->nama,
						'program' => $dtrow->jabatan,

						'avatar' => $avatar,
						'sideMenu' => $sideMenu
					];
				} else {
					return redirect()->to('registrasi');
				}
				break;
			case 'Admin2':

				break;

			default:
		}
	}
	protected function _set_data_user()
	{
		$id = session()->get('id');
		$tbadmin = new \App\Models\AdminModel();
		$row = $tbadmin->find($id);
		if ($row) {

			return $row;
		}
		return false;
	}

	protected function _set_data_peserta()
	{
		$id = session()->get('id');
		$tb = new \App\Models\PesertaModel();
		$row = $tb->join($id);
		if ($row) {
			return $row;
		}
		return false;
	}
}
