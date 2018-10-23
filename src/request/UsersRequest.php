<?php

/**
 * This class is generated using the package carono/codegen
 */

namespace carono\etxtru\request;

class UsersRequest extends \carono\etxtru\RequestAbstract
{
	/**
	 * Возвращает список исполнителей без сортировки.
	 *
	 * @param \carono\etxtru\config\UsersGetListConfig|array $config
	 * @return \carono\etxtru\response\GetListResponse|\stdClass
	 */
	public function getList($config)
	{
		$params = [];
		foreach ($config instanceof \carono\etxtru\ConfigAbstract ? $config->toArray() : $config as $key => $value) {
		    $params[$key] = $value;
		}
		return $this->getClient()->getContent('users.getList', $params, 'carono\etxtru\response\GetListResponse');
	}


	/**
	 * Функция возвращает список пользователей, находящихся в черном и белом списке текущего
	 * пользователя.
	 *
	 * @param int $count Число пользователей для выборке, не более 100 за запрос (по умолчанию)
	 * @param int $from Смещение от последней записи в выборке, по умолчанию 0
	 * @param int $id_group Идентификатор группы БС/ЧС, если не определен, то выборка по параметру type
	 * @param string $type Тип списка (whiteList - белый список, blackList - черный), по умолчанию все вместе
	 * @return \carono\etxtru\response\GetBWResponse|\stdClass
	 */
	public function getBW($count, $from, $id_group, $type)
	{
		$params = [
			'count' => $count,
			'from' => $from,
			'id_group' => $id_group,
			'type' => $type
		];
		return $this->getClient()->getContent('users.getBW', $params, 'carono\etxtru\response\GetBWResponse');
	}


	/**
	 * Функция возвращает примечание к указанному пользователю.
	 *
	 * @param int $id Идентификатор пользователя, обязательный параметр
	 * @return \carono\etxtru\response\GetNoteResponse|\stdClass
	 */
	public function getNote($id)
	{
		$params = [
			'id' => $id
		];
		return $this->getClient()->getContent('users.getNote', $params, 'carono\etxtru\response\GetNoteResponse');
	}


	/**
	 * Функция возвращает подробную информацию об указанном пользователе.
	 *
	 * @param int $id Идентификатор пользователя, полуобязательный параметр, имеет приоритет над параметром login
	 * @param string $login Логин пользователя, полуобязательный параметр, может указываться при отсутствии параметра id
	 * @return \carono\etxtru\response\GetUserResponse|\stdClass
	 */
	public function getUser($id, $login)
	{
		$params = [
			'id' => $id,
			'login' => $login
		];
		return $this->getClient()->getContent('users.getUser', $params, 'carono\etxtru\response\GetUserResponse');
	}


	/**
	 * Функция возвращает виды работ и минимальные цены исполнителя по ним.
	 *
	 * @param int $id Идентификатор пользователя (исполнителя), обязательный параметр
	 * @return \carono\etxtru\response\GetWorksResponse|\stdClass
	 */
	public function getWorks($id)
	{
		$params = [
			'id' => $id
		];
		return $this->getClient()->getContent('users.getWorks', $params, 'carono\etxtru\response\GetWorksResponse');
	}


	/**
	 * Функция возвращает отзывы указанного незаблокированного пользователя. Отзывы разделены на два
	 * массива - negative (отрицательные отзывы) и positive (положительные) и сгруппированы по авторам.
	 *
	 * @param int $id Идентификатор пользователя, обязательный параметр
	 * @return \carono\etxtru\response\GetReportsResponse|\stdClass
	 */
	public function getReports($id)
	{
		$params = [
			'id' => $id
		];
		return $this->getClient()->getContent('users.getReports', $params, 'carono\etxtru\response\GetReportsResponse');
	}


	/**
	 * Функция добавляет/редактирует отзыв пользователю.
	 *
	 * @param \carono\etxtru\config\UsersSetReportConfig|array $config
	 * @return \carono\etxtru\response\SetReportResponse|\stdClass
	 */
	public function setReport($config)
	{
		$params = [];
		foreach ($config instanceof \carono\etxtru\ConfigAbstract ? $config->toArray() : $config as $key => $value) {
		    $params[$key] = $value;
		}
		return $this->getClient()->getContent('users.setReport', $params, 'carono\etxtru\response\SetReportResponse');
	}


	/**
	 * Функция возвращает количество белых и черных списков, в которых находится пользователь.
	 *
	 * @param int $id Идентификатор пользователя, обязательный параметр
	 * @return \carono\etxtru\response\GetUserBWResponse|\stdClass
	 */
	public function getUserBW($id)
	{
		$params = [
			'id' => $id
		];
		return $this->getClient()->getContent('users.getUserBW', $params, 'carono\etxtru\response\GetUserBWResponse');
	}


	/**
	 * Функция добавляет или удаляет пользователя в черный/белый список.
	 *
	 * @param int $id Идентификатор добавляемого/удаляемого пользователя, обязательный параметр
	 * @param int $id_group Идентификатор группы БС/ЧС, если не определен, то "без группы"
	 * @param string $type Тип действия: whiteList - в белый список, blackList - в черный, delete - удалить из списка
	 * @return \carono\etxtru\response\SetUserBWResponse|\stdClass
	 */
	public function setUserBW($id, $id_group, $type)
	{
		$params = [
			'id' => $id,
			'id_group' => $id_group,
			'type' => $type
		];
		return $this->getClient()->getContent('users.setUserBW', $params, 'carono\etxtru\response\SetUserBWResponse');
	}


	/**
	 * Функция возвращает состояние лицевого счета текущего пользователя.
	 *
	 * @return \carono\etxtru\response\GetBalanceResponse|\stdClass
	 */
	public function getBalance()
	{
		$params = [];
		return $this->getClient()->getContent('users.getBalance', $params, 'carono\etxtru\response\GetBalanceResponse');
	}
}
