<?php

/**
 * This class is generated using the package carono/codegen
 */

namespace carono\etxtru\response;

class ListTasksResponse extends \carono\etxtru\ResponseAbstract
{
	/**
	 * Идентификатор заказа
	 */
	public $id;

	/**
	 * Идентификатор исполнителя, если не назначен, то значение 0
	 */
	public $id_user;

	/**
	 * Идентификатор папки
	 */
	public $id_folder;

	/**
	 * Идентификатор категории
	 */
	public $id_category;

	/**
	 * Дата создания/редактирования заказа, unixtime
	 */
	public $date;

	/**
	 * Название заказа
	 */
	public $title;

	/**
	 * Описание заказа
	 */
	public $description;

	/**
	 * Тип заказа (1 - копирайтинг, 2 - рерайтинг, 3 - перевод, 4 - SEO копирайтинг)
	 */
	public $id_type;

	/**
	 * Уровень сложности заказа (0 - без квалификации, 1 - начальный уровень, 2 - средний уровень, 3 - высокий
	 * уровень)
	 */
	public $id_level;

	/**
	 * Срок сдачи заказа, unixtime
	 */
	public $deadline;

	/**
	 * Цена заказа
	 */
	public $price;

	/**
	 * Тип цены заказа (1 - за 1000 символов, 2 - за весь заказ)
	 */
	public $price_type;

	/**
	 * Размер заказа в символах
	 */
	public $size;

	/**
	 * Флаг учета пробелов (0 - без пробелов, 1 - с пробелами)
	 */
	public $whitespaces;

	/**
	 * Текст заказа
	 */
	public $text;

	/**
	 * Дата окончания (принятия) заказа, unixtime
	 */
	public $end_date;

	/**
	 * Дата переноса заказа в архив, unixtime
	 */
	public $date_archive;

	/**
	 * Список ключевых слов при типе задания "СЕО-копирайтинг"
	 */
	public $keywords;

	/**
	 * Языки переводов при типе задания "Перевод"
	 */
	public $language_fromlanguage_to;


}
