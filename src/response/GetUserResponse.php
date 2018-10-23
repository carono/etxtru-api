<?php

/**
 * This class is generated using the package carono/codegen
 */

namespace carono\etxtru\response;

class GetUserResponse extends \carono\etxtru\ResponseAbstract
{
	/**
	 * Идентификатор пользователя
	 */
	public $id_user;

	/**
	 * Логин пользователя
	 */
	public $login;

	/**
	 * ФИО пользователя
	 */
	public $fio;

	/**
	 * Дополнительная информация о пользователе
	 */
	public $description;

	/**
	 * Страна пользователя
	 */
	public $country;

	/**
	 * Город пользователя
	 */
	public $city;

	/**
	 * Онлайн-статус пользователя (1 - онлайн, 0 - оффлайн)
	 */
	public $online;

	/**
	 * Дата регистрации пользователя, unixtime
	 */
	public $regdate;

	/**
	 * Рейтинг пользователя
	 */
	public $rate;

	/**
	 * Путь до аватара пользователя
	 */
	public $photo;

	/**
	 * Название группы пользователя
	 */
	public $group;

	/**
	 * Виды указанных пользователем работ, только для исполнителя
	 */
	public $works;

	/**
	 * Категории, указанные пользователем, только для исполнителя
	 */
	public $categories;

	/**
	 * Языки, указанные пользователем, только для исполнителя
	 */
	public $langs;

	/**
	 * Число работ в портфолио, только для исполнителя
	 */
	public $portfolio;


}
