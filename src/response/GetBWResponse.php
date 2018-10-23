<?php

/**
 * This class is generated using the package carono/codegen
 */

namespace carono\etxtru\response;

class GetBWResponse extends \carono\etxtru\ResponseAbstract
{
	/**
	 * Идентификатор пользователя
	 */
	public $id_user;

	/**
	 * Идентификатор группы списка
	 */
	public $id_group;

	/**
	 * Логин пользователя
	 */
	public $login;

	/**
	 * ФИО пользователя
	 */
	public $fio;

	/**
	 * Онлайн-статус пользователя (1 - онлайн, 0 - оффлайн)
	 */
	public $online;

	/**
	 * Тип списка (whiteList - белый список, blackList - черный)
	 */
	public $type;


}
