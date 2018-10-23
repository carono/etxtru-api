<?php

/**
 * This class is generated using the package carono/codegen
 */

namespace carono\etxtru\config;

class TasksListTasksConfig extends \carono\etxtru\ConfigAbstract
{
	/**
	 * Число пользователей для выборки, не более 100 за запрос (по умолчанию)
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
	 * Идентификатор конкретного заказа, будет возвращен только этот заказ
	 *
	 * @var int
	 */
	public $id;

	/**
	 * Идентификатор исполнителя заказа, при указании этого параметра будет фильтрация заказов по
	 * данному полю
	 *
	 * @var int
	 */
	public $id_user;

	/**
	 * Идентификатор папки проекта (фильтрация по папке)
	 *
	 * @var int
	 */
	public $id_folder;

	/**
	 * Фильтрация по статусу заказа, по умолчанию все заказы. Если указан статус "1", то дополнительно
	 * накладывается выдача только публикуемых заказов (не черновиков!) Значения: 1 - ожидание выбора
	 * исполнителя 2 - принят к исполнению 3 - на проверке 4 - выполнен 5 - просрочен
	 *
	 * @var int
	 */
	public $status;

	/**
	 * Флаг общей фильтрации, по умолчанию все заказы. Исключает фильтрацию по статусу (если указан
	 * корректный параметр filter, то параметр status игнорируется) Значения: 10 - просроченные заказы в работе,
	 * по которым не принято решение
	 *
	 * @var int
	 */
	public $filter;

	/**
	 * Фильтрация по уровню доступа заказа для исполнителя Значения: 1 - Общий заказ 2 - Заказ для белого
	 * списка 3 - Индивидуальный заказ
	 *
	 * @var int
	 */
	public $target;

	/**
	 * Если флаг указан и имеет значение 1, то будут возвращены только id заказов, а не вся информация.
	 * Параметр необязательный.
	 *
	 * @var int
	 */
	public $only_id;


}