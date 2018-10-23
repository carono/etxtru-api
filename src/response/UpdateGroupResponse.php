<?php

/**
 * This class is generated using the package carono/codegen
 */

namespace carono\etxtru\response;

class UpdateGroupResponse extends \carono\etxtru\ResponseAbstract
{
	/**
	 * Идентификатор перенесенного пользователя
	 */
	public $id_user;

	/**
	 * Идентификатор группы, куда перенесен пользователь
	 */
	public $id_group;

	/**
	 * Название группы, куда перенесе пользователь, если пустая строка, значит пользователь удален из
	 * всех групп
	 */
	public $name;


}
