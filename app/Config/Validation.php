<?php

namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------

	public $login = [
		'username' => 'required',
		'password' => 'required'
	];

	public $registrasiPeserta = [
		'username' => 'required|alpha_numeric',
		'password' => '',
		'nama' => 'required|alpha_space',
		'nomor_hp' => 'required|numeric',
	];

	public $admin = [
		'username' => 'required|alpha_numeric',
		'nama' => 'required|alpha_space',
		'nomor_hp' => 'required|numeric',
	];

	public $peserta = [
		'username' => 'required|alpha_numeric',
		'nama' => 'required|alpha_space',
		'nomor_hp' => 'required|numeric',
		'tgl_lahir' => 'required|valid_date',
	];
}
