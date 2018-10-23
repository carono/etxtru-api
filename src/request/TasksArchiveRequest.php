<?php

/**
 * This class is generated using the package carono/codegen
 */

namespace carono\etxtru\request;

class TasksArchiveRequest extends \carono\etxtru\RequestAbstract
{
	/**
	 * Возвращает список архивных заказов текущего пользователя, только для заказчика.
	 *
	 * @param \carono\etxtru\config\TasksArchiveListTasksConfig|array $config
	 * @return \carono\etxtru\response\ListTasksResponse|\stdClass
	 */
	public function listTasks($config)
	{
		$params = [];
		foreach ($config instanceof \carono\etxtru\ConfigAbstract ? $config->toArray() : $config as $key => $value) {
		    $params[$key] = $value;
		}
		return $this->getClient()->getContent('tasks_archive.listTasks', $params, 'carono\etxtru\response\ListTasksResponse');
	}


	/**
	 * Функция получения результатов по архивному заказу, только для заказчика.
	 *
	 * @param int $id Идентификатор заказа, обязательный параметр
	 * @return \carono\etxtru\response\GetResultsResponse|\stdClass
	 */
	public function getResults($id)
	{
		$params = [
			'id' => $id
		];
		return $this->getClient()->getContent('tasks_archive.getResults', $params, 'carono\etxtru\response\GetResultsResponse');
	}
}
