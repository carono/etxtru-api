<?php

/**
 * This class is generated using the package carono/codegen
 */

namespace carono\etxtru\response;

class ViewNotesResponse extends \carono\etxtru\ResponseAbstract
{
	/**
	 * Идентификатор комментария
	 */
	public $id;

	/**
	 * Текст заявки
	 */
	public $text;

	/**
	 * Дата заявки, unixtime
	 */
	public $date;

	/**
	 * Идентификатор автора комментария/заявки
	 */
	public $id_user;

	/**
	 * Логин автора комментария/заявки
	 */
	public $login;

	/**
	 * Идентификатор заявки, если заявка отсутствует, то есть запись - просто комментарий, то значение
	 * поля 0
	 */
	public $id_note;

	/**
	 * Идентификатор заказа
	 */
	public $id_task;


}
