<?php

/**
 * This class is generated using the package carono/codegen
 */

namespace carono\etxtru\request;

class RatingRequest extends \carono\etxtru\RequestAbstract
{
	/**
	 * Функция выводит список отказов от заказов для заказчика.
	 *
	 * @param int $id_task Идентификатор конкретного заказа
	 * @param int $id_user Идентификатор конкретного исполнителя
	 * @param int $back Флаг фильтрации по статусу возврата (1 - с возвратом рейтинга, 2 - без возврата, 0 - все, по умолчанию)
	 * @return \carono\etxtru\response\ListTasksFailsResponse|\stdClass
	 */
	public function listTasksFails($id_task, $id_user, $back)
	{
		$params = [
			'id_task' => $id_task,
			'id_user' => $id_user,
			'back' => $back
		];
		return $this->getClient()->getContent('rating.listTasksFails', $params, 'carono\etxtru\response\ListTasksFailsResponse');
	}


	/**
	 * Функция возвращает рейтинг исполнителю по определенному отказу.
	 *
	 * @param int $id_task Идентификатор конкретного заказа
	 * @param int $id_user Идентификатор конкретного исполнителя
	 * @return \carono\etxtru\response\RatingUserBackResponse|\stdClass
	 */
	public function ratingUserBack($id_task, $id_user)
	{
		$params = [
			'id_task' => $id_task,
			'id_user' => $id_user
		];
		return $this->getClient()->getContent('rating.ratingUserBack', $params, 'carono\etxtru\response\RatingUserBackResponse');
	}
}
