<?php

/**
 * This class is generated using the package carono/codegen
 */

namespace carono\etxtru\response;

class GetWorksResponse extends \carono\etxtru\ResponseAbstract
{
	/**
	 * Массив ассоциативных пар значений [id_type => вид работы (1 - копирайтинг, 2 - рерайтинг, 3 - перевод, 4 - SEO
	 * копирайтинг), minprice => минимальная цена исполнителя (0 - цена не ограничена)]. Ключ элемента совпадает
	 * с id_type.
	 */
	public $works;


}
