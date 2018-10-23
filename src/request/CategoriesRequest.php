<?php

/**
 * This class is generated using the package carono/codegen
 */

namespace carono\etxtru\request;

class CategoriesRequest extends \carono\etxtru\RequestAbstract
{
	/**
	 * Возвращает список тематический категорий заказов/статей, отсортированный по названию категории.
	 *
	 * @return \carono\etxtru\response\ListCategoriesResponse|\stdClass
	 */
	public function listCategories()
	{
		$params = [];
		return $this->getClient()->getContent('categories.listCategories', $params, 'carono\etxtru\response\ListCategoriesResponse');
	}
}
