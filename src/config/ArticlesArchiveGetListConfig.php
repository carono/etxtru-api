<?php

/**
 * This class is generated using the package carono/codegen
 */

namespace carono\etxtru\config;

class ArticlesArchiveGetListConfig extends \carono\etxtru\ConfigAbstract
{
	/**
	 * Число статей для выборке, не более 20 за запрос (по умолчанию)
	 *
	 * @var int
	 */
	public $count;

	/**
	 * Смещение от последней записи в выборке, по умолчанию 0
	 *
	 * @var int
	 */
	public $from;

	/**
	 * Идентификатор автора статьи для фильтрации списка
	 *
	 * @var int
	 */
	public $id_user;

	/**
	 * Идентификатор типа статьи для фильтрации списка (от 1 до 10)
	 *
	 * @var int
	 */
	public $id_subtype;

	/**
	 * Порядок сортировки, возможные значения: desc, asc (по умолчанию)
	 *
	 * @var string
	 */
	public $order;

	/**
	 * Идентификатор категории статьи для фильтрации списка
	 *
	 * @var int
	 */
	public $id_category;

	/**
	 * Опция поиска в подкатегориях (1 - искать в подкатегориях, 0 - нет, по умолчанию)
	 *
	 * @var int
	 */
	public $subcat;

	/**
	 * Строка для поиска по названию, описанию и ключевым словам
	 *
	 * @var string (40)
	 */
	public $text;


}
