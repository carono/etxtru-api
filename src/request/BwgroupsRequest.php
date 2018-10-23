<?php

/**
 * This class is generated using the package carono/codegen
 */

namespace carono\etxtru\request;

class BwgroupsRequest extends \carono\etxtru\RequestAbstract
{
	/**
	 * Функция возвращает список групп для БС/ЧС текущего пользователя.
	 *
	 * @return \carono\etxtru\response\ListGroupsResponse|\stdClass
	 */
	public function listGroups()
	{
		$params = [];
		return $this->getClient()->getContent('bwgroups.listGroups', $params, 'carono\etxtru\response\ListGroupsResponse');
	}


	/**
	 * Функция добавляет или изменяет группу для БС/ЧС текущего пользователя.
	 *
	 * @param string $name Название группы, до 40 символов
	 * @param int $id Идентификатор редактируемой группы, если не указан, будет создана новая
	 * @param int $id_parent Идентификатор родительской категории, по умолчанию 0 - корень
	 * @return \carono\etxtru\response\SaveGroupResponse|\stdClass
	 */
	public function saveGroup($name, $id, $id_parent)
	{
		$params = [
			'name' => $name,
			'id' => $id,
			'id_parent' => $id_parent
		];
		return $this->getClient()->getContent('bwgroups.saveGroup', $params, 'carono\etxtru\response\SaveGroupResponse');
	}


	/**
	 * Функция удаляет группу для БС/ЧС и все ее подгруппы текущего пользователя.
	 *
	 * @param int $id Идентификатор удаляемой группы
	 * @return \carono\etxtru\response\DeleteGroupResponse|\stdClass
	 */
	public function deleteGroup($id)
	{
		$params = [
			'id' => $id
		];
		return $this->getClient()->getContent('bwgroups.deleteGroup', $params, 'carono\etxtru\response\DeleteGroupResponse');
	}


	/**
	 * Функция перемещает пользователя, уже занесенного в БС/ЧС, в указанную группу текущего
	 * пользователя.
	 *
	 * @param int $id_user Идентификатор пользователя, уже внесенного в БС/ЧС, для переноса в другую группу
	 * @param int $id_group Идентификатор группы для переноса, если 0 или не указана, то считается как "без группы"
	 * @return \carono\etxtru\response\UpdateGroupResponse|\stdClass
	 */
	public function updateGroup($id_user, $id_group)
	{
		$params = [
			'id_user' => $id_user,
			'id_group' => $id_group
		];
		return $this->getClient()->getContent('bwgroups.updateGroup', $params, 'carono\etxtru\response\UpdateGroupResponse');
	}
}
