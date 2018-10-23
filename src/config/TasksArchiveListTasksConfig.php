<?php

/**
 * This class is generated using the package carono/codegen
 */

namespace carono\etxtru\config;

class TasksArchiveListTasksConfig extends \carono\etxtru\ConfigAbstract
{
	/**
	 * Число пользователей для выборке, не более 100 за запрос (по умолчанию)
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
	 * Порядок сортировки, возможные значения: desc, asc (по умолчанию)
	 *
	 * @var string
	 */
	public $order;

	/**
	 * Идентификатор конкретного заказа, будет возвращен только этот заказ
	 *
	 * @var int
	 */
	public $id;

	/**
	 * Идентификатор папки проекта (фильтрация по папке)
	 *
	 * @var int
	 */
	public $id_folder;

	/**
	 * Идентификатор исполнителя заказа, при указании этого параметра будет фильтрация заказов по
	 * данному полю
	 *
	 * @var int
	 */
	public $id_user;


}
