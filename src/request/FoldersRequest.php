<?php

/**
 * This class is generated using the package carono/codegen
 */

namespace carono\etxtru\request;

class FoldersRequest extends \carono\etxtru\RequestAbstract
{
	/**
	 * Возвращает отсортированный список папок текущего пользователя.
	 *
	 * @param string $sort date - сортировка по дате создания, name - по названию (по умолчанию)
	 * @return \carono\etxtru\response\ListFoldersResponse|\stdClass
	 */
	public function listFolders($sort)
	{
		$params = [
			'sort' => $sort
		];
		return $this->getClient()->getContent('folders.listFolders', $params, 'carono\etxtru\response\ListFoldersResponse');
	}


	/**
	 * Cоздает папку для текущего пользователя.
	 *
	 * @param string $name Название создаваемой папки (длинна от 1 до 128 знаков)
	 * @param int $id_parent Идентификатор родительской папки или 0 (по умолчанию) для корневой папки
	 * @return \carono\etxtru\response\AddFolderResponse|\stdClass
	 */
	public function addFolder($name, $id_parent)
	{
		$params = [
			'name' => $name,
			'id_parent' => $id_parent
		];
		return $this->getClient()->getContent('folders.addFolder', $params, 'carono\etxtru\response\AddFolderResponse');
	}


	/**
	 * Фукнция перемещает объекты в папку.
	 *
	 * @param string $id_folder Идентификатор папки
	 * @param string $type Тип перемещаемых объектов. Значения: task - заказ archive - архивный заказ article - статья article_archive -
	 * архивная статья correction - коррекция bhv_task - задания
	 * @param int (array) $ids Массив идентификаторов перемещаемых объектов
	 * @return \carono\etxtru\response\MoveToFolderResponse|\stdClass
	 */
	public function moveToFolder($id_folder, $type, $ids)
	{
		$params = [
			'id_folder' => $id_folder,
			'type' => $type,
			'ids' => $ids
		];
		return $this->getClient()->getContent('folders.moveToFolder', $params, 'carono\etxtru\response\MoveToFolderResponse');
	}
}
