<?php

/**
 * This class is generated using the package carono/codegen
 */

namespace carono\etxtru\response;

class ListFoldersResponse extends \carono\etxtru\ResponseAbstract
{
	/**
	 * Идентификатор папки
	 */
	public $id_category;

	/**
	 * Идентификатор родительской папки
	 */
	public $id_parent;

	/**
	 * Название папки
	 */
	public $name;

	/**
	 * Глубина вложенности папки
	 */
	public $depth;

	/**
	 * Флаг, является ли папка последней по глубине вложенности
	 */
	public $last;


}
