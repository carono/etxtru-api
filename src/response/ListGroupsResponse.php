<?php

/**
 * This class is generated using the package carono/codegen
 */

namespace carono\etxtru\response;

class ListGroupsResponse extends \carono\etxtru\ResponseAbstract
{
	/**
	 * Идентификатор группы
	 */
	public $id_category;

	/**
	 * Идентификатор родительской группы
	 */
	public $id_parent;

	/**
	 * Название группы
	 */
	public $name;

	/**
	 * Глубина вложенности группы
	 */
	public $depth;

	/**
	 * Флаг, является ли группа последней по глубине вложенности
	 */
	public $last;


}
