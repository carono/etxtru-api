<?php

/**
 * This class is generated using the package carono/codegen
 */

namespace carono\etxtru\response;

class GetUserBWResponse extends \carono\etxtru\ResponseAbstract
{
	/**
	 * Идентификатор пользователя, у которого считаем (повторяет входящий параметр)
	 */
	public $id_user;

	/**
	 * Число пользователей, у которых запрашиваемый пользователь в белом списке
	 */
	public $whiteList;

	/**
	 * Число пользователей, у которых запрашиваемый пользователь в черном списке
	 */
	public $blackList;


}
