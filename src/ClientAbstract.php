<?php

/**
 * This class is generated using the package carono/codegen
 */

namespace carono\etxtru;

abstract class ClientAbstract extends \carono\rest\Client
{
	/**
	 * Функция возвращает список тематических категорий заказов/статей
	 * @return \carono\etxtru\request\CategoriesRequest
	 */
	public function categories()
	{
		return (new \carono\etxtru\request\CategoriesRequest($this));
	}


	/**
	 * Функция возвращает список папок текущего пользователя
	 * @return \carono\etxtru\request\FoldersRequest
	 */
	public function folders()
	{
		return (new \carono\etxtru\request\FoldersRequest($this));
	}


	/**
	 * Функция возвращает список исполнителей
	 * @return \carono\etxtru\request\UsersRequest
	 */
	public function users()
	{
		return (new \carono\etxtru\request\UsersRequest($this));
	}


	/**
	 * Функция возвращает список заказов текущего пользователя, только для заказчика
	 * @return \carono\etxtru\request\TasksRequest
	 */
	public function tasks()
	{
		return (new \carono\etxtru\request\TasksRequest($this));
	}


	/**
	 * Функция получения списка заказов из архива заказов, только для заказчика
	 * @return \carono\etxtru\request\TasksArchiveRequest
	 */
	public function tasksArchive()
	{
		return (new \carono\etxtru\request\TasksArchiveRequest($this));
	}


	/**
	 * Функция получения списка языков, используемых в системе
	 * @return \carono\etxtru\request\OptionsRequest
	 */
	public function options()
	{
		return (new \carono\etxtru\request\OptionsRequest($this));
	}


	/**
	 * Функция получения списка готовых статей на продажу
	 * @return \carono\etxtru\request\ArticlesRequest
	 */
	public function articles()
	{
		return (new \carono\etxtru\request\ArticlesRequest($this));
	}


	/**
	 * Возвращает список купленных пользователм статей и перенесенных в архив статей
	 * @return \carono\etxtru\request\ArticlesArchiveRequest
	 */
	public function articlesArchive()
	{
		return (new \carono\etxtru\request\ArticlesArchiveRequest($this));
	}


	/**
	 * Функция возвращает список групп для БС/ЧС текущего пользователя
	 * @return \carono\etxtru\request\BwgroupsRequest
	 */
	public function bwgroups()
	{
		return (new \carono\etxtru\request\BwgroupsRequest($this));
	}


	/**
	 * Функция выводит непрочитанные системные сообщения пользователя
	 * @return \carono\etxtru\request\MessagesRequest
	 */
	public function messages()
	{
		return (new \carono\etxtru\request\MessagesRequest($this));
	}


	/**
	 * Функция выводит список отказов от заказов для заказчика
	 * @return \carono\etxtru\request\RatingRequest
	 */
	public function rating()
	{
		return (new \carono\etxtru\request\RatingRequest($this));
	}


	/**
	 * Функция показывает степень схожести двух текстов
	 * @return \carono\etxtru\request\DiffRequest
	 */
	public function diff()
	{
		return (new \carono\etxtru\request\DiffRequest($this));
	}


	/**
	 * Функция создает задание на коррекцию текста
	 * @return \carono\etxtru\request\CorrectionRequest
	 */
	public function correction()
	{
		return (new \carono\etxtru\request\CorrectionRequest($this));
	}
}
