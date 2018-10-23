<?php

/**
 * This class is generated using the package carono/codegen
 */

namespace carono\etxtru\response;

class SetNoteResponse extends \carono\etxtru\ResponseAbstract
{
	/**
	 * Идентификатор заказа, если заявка принадлежит мультизаказу, то индентификатор нового созданного
	 * заказа, иначе того, на который заявка принята
	 */
	public $id_task;

	/**
	 * Идентификатор пользователя, назначенного исполнителем по принятой заявке
	 */
	public $id_user;


}
