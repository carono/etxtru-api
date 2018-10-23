<?php

/**
 * This class is generated using the package carono/codegen
 */

namespace carono\etxtru\request;

class TasksRequest extends \carono\etxtru\RequestAbstract
{
	/**
	 * Возвращает список заказов текущего пользователя, только для заказчика.
	 *
	 * @param \carono\etxtru\config\TasksListTasksConfig|array $config
	 * @return \carono\etxtru\response\ListTasksResponse|\stdClass
	 */
	public function listTasks($config)
	{
		$params = [];
		foreach ($config instanceof \carono\etxtru\ConfigAbstract ? $config->toArray() : $config as $key => $value) {
		    $params[$key] = $value;
		}
		return $this->getClient()->getContent('tasks.listTasks', $params, 'carono\etxtru\response\ListTasksResponse');
	}


	/**
	 * Функция возвращает список заявок и комментариев на указанный заказ (или список заказов) текущего
	 * пользователя, только для заказчика.
	 *
	 * @param int (array) $id Идентификатор заказа (-ов, но не более 100), обязательный параметр
	 * @return \carono\etxtru\response\ViewNotesResponse|\stdClass
	 */
	public function viewNotes($id)
	{
		$params = [
			'id' => $id
		];
		return $this->getClient()->getContent('tasks.viewNotes', $params, 'carono\etxtru\response\ViewNotesResponse');
	}


	/**
	 * Функция возвращает список всех поданных заявок на все заказы текущего заказчика.
	 *
	 * @return \carono\etxtru\response\ViewNotesAllResponse|\stdClass
	 */
	public function viewNotesAll()
	{
		$params = [];
		return $this->getClient()->getContent('tasks.viewNotesAll', $params, 'carono\etxtru\response\ViewNotesAllResponse');
	}


	/**
	 * Функция принятия указанной заявки на заказ, только для заказчика.
	 *
	 * @param int $id Идентификатор заявки (не комментария!), обязательный параметр
	 * @param string $comment Комментарий при принятии заявки, добавляется в конец описания заказа, не более 500 символов
	 * @return \carono\etxtru\response\SetNoteResponse|\stdClass
	 */
	public function setNote($id, $comment)
	{
		$params = [
			'id' => $id,
			'comment' => $comment
		];
		return $this->getClient()->getContent('tasks.setNote', $params, 'carono\etxtru\response\SetNoteResponse');
	}


	/**
	 * Функция отклонения указанной заявки на заказ, только для заказчика.
	 *
	 * @param int $id Идентификатор заявки (не комментария!), обязательный параметр
	 * @return \carono\etxtru\response\UnsetNoteResponse|\stdClass
	 */
	public function unsetNote($id)
	{
		$params = [
			'id' => $id
		];
		return $this->getClient()->getContent('tasks.unsetNote', $params, 'carono\etxtru\response\UnsetNoteResponse');
	}


	/**
	 * Функция принятия заказа на проверке, только для заказчика.
	 *
	 * @param array (int var1, int var2, ... ) $id Массив идентификаторов принимаемых заказов вида id[]=1&id[]=2, обязательный параметр
	 * @return \carono\etxtru\response\PaidTaskResponse|\stdClass
	 */
	public function paidTask($id)
	{
		$params = [
			'id' => $id
		];
		return $this->getClient()->getContent('tasks.paidTask', $params, 'carono\etxtru\response\PaidTaskResponse');
	}


	/**
	 * Функция отправки заказа на проверке на доработку, только для заказчика.
	 *
	 * @param array (int var1, int var2, ... ) $id Массив идентификаторов отклоняемых заказов вида id[]=1&id[]=2, обязательный параметр
	 * @param string $text Комментарий к отклонению, обязателен, если отклоняется 1 заказ, а не пакет заказов, иначе
	 * обнуляется
	 * @return \carono\etxtru\response\CancelTaskResponse|\stdClass
	 */
	public function cancelTask($id, $text)
	{
		$params = [
			'id' => $id,
			'text' => $text
		];
		return $this->getClient()->getContent('tasks.cancelTask', $params, 'carono\etxtru\response\CancelTaskResponse');
	}


	/**
	 * Функция получения результатов по заказам, только для заказчика.
	 *
	 * @param array (int var1, int var2, ...) $id Массив идентификаторов заказов, обязательный параметр
	 * @return \carono\etxtru\response\GetResultsResponse|\stdClass
	 */
	public function getResults($id)
	{
		$params = [
			'id' => $id
		];
		return $this->getClient()->getContent('tasks.getResults', $params, 'carono\etxtru\response\GetResultsResponse');
	}


	/**
	 * Функция удаления заказов в статусе ожидания исполнителя или из черновика, только для заказчика.
	 * Запрещено удалять заказы в течение недели после снятия исполнителя с заказа.
	 *
	 * @param array (int var1, int var2, ...) $id Массив идентификаторов заказов, обязательный параметр
	 * @return \carono\etxtru\response\DeleteTaskResponse|\stdClass
	 */
	public function deleteTask($id)
	{
		$params = [
			'id' => $id
		];
		return $this->getClient()->getContent('tasks.deleteTask', $params, 'carono\etxtru\response\DeleteTaskResponse');
	}


	/**
	 * Функция начисления доплаты по заданию.
	 *
	 * @param int $id Идентификатор задания
	 * @param int $count Сумма доплаты, не более стоимости заказа * 3
	 * @param int $note Посылать уведомление исполнителю, по умолчанию 1 (1 - да, 0 - нет)
	 * @param string $autopay Расчет доплаты автоматически, по числу превышения знаков у последнего результата (get - получить
	 * расчет доплаты, pay - произвести доплату), по умолчанию размер доплаты берется из параметра count
	 * @return \carono\etxtru\response\ExtraPaidResponse|\stdClass
	 */
	public function extraPaid($id, $count, $note, $autopay)
	{
		$params = [
			'id' => $id,
			'count' => $count,
			'note' => $note,
			'autopay' => $autopay
		];
		return $this->getClient()->getContent('tasks.extraPaid', $params, 'carono\etxtru\response\ExtraPaidResponse');
	}


	/**
	 * Функция добавления/редактирования заказа, только для заказчика.
	 *
	 * @param \carono\etxtru\config\TasksSaveTaskConfig|array $config
	 * @return \carono\etxtru\response\SaveTaskResponse|\stdClass
	 */
	public function saveTask($config)
	{
		$params = [];
		foreach ($config instanceof \carono\etxtru\ConfigAbstract ? $config->toArray() : $config as $key => $value) {
		    $params[$key] = $value;
		}
		return $this->getClient()->getContent('tasks.saveTask', $params, 'carono\etxtru\response\SaveTaskResponse');
	}


	/**
	 * Функция отмены просроченного заказа, только для заказчика. Отмененный заказ невозможно удалить,
	 * он будет существовать для истории 2 недели, после чего удалится автоматически.
	 *
	 * @param int $id Идентификатор просроченного заказа, обязательный параметр
	 * @param int $copy Флаг создания копии отменяемого заказа, если указано и значение 1, то создастся публикуемая копия
	 * заказа со сроком, задаваемым параметрами ниже
	 * @param string $deadline Новый срок сдачи в формате дд.мм.гггг, по умолчанию - текущее время плюс 5 суток для несрочного
	 * заказа или 5 часов для срочного
	 * @param string $timeline Новое время сдачи в формате чч:мм, 23:59 по умолчанию
	 * @return \carono\etxtru\response\FailTaskResponse|\stdClass
	 */
	public function failTask($id, $copy, $deadline, $timeline)
	{
		$params = [
			'id' => $id,
			'copy' => $copy,
			'deadline' => $deadline,
			'timeline' => $timeline
		];
		return $this->getClient()->getContent('tasks.failTask', $params, 'carono\etxtru\response\FailTaskResponse');
	}


	/**
	 * Функция копирования заказа, только для заказчика. Новый заказ будет публикуемым и доступный
	 * исполнителям, настройки автопринятия и мультизаказа не копируются.
	 *
	 * @param int $id Идентификатор копируемого заказа, обязательный параметр
	 * @param string $deadline Новый срок сдачи в формате дд.мм.гггг, не более 90 дней, по умолчанию или если некорректное - текущее
	 * время плюс 5 суток для несрочного заказа или 5 часов для срочного
	 * @param string $timeline Новое время сдачи в формате чч:мм, 23:59 по умолчанию
	 * @return \carono\etxtru\response\CopyTaskResponse|\stdClass
	 */
	public function copyTask($id, $deadline, $timeline)
	{
		$params = [
			'id' => $id,
			'deadline' => $deadline,
			'timeline' => $timeline
		];
		return $this->getClient()->getContent('tasks.copyTask', $params, 'carono\etxtru\response\CopyTaskResponse');
	}


	/**
	 * Функция увеличения срока сдачи заказа, только для заказчика. Если заказ просроченный, то он будет
	 * возвращен в работу, если в черновике, то возможна его публикации для ожидания подачи заявок.
	 *
	 * @param int $id Идентификатор заказа, обязательный параметр
	 * @param string $deadline Новый срок сдачи заказа в формате дд.мм.гггг (25.10.2013), должен быть не меньше текущего, но не более 90
	 * дней, обязательный параметр.
	 * @param string $timeline Новое время сдачи заказа в формате чч:мм (12:16), если не указано, то будет 23:59, необязательный
	 * параметр
	 * @param int $public Флаг публикации черновика, если 1, то заказ-черновик будет опубликован, иначе статус публикации не
	 * изменится
	 * @return \carono\etxtru\response\SetDeadlineResponse|\stdClass
	 */
	public function setDeadline($id, $deadline, $timeline, $public)
	{
		$params = [
			'id' => $id,
			'deadline' => $deadline,
			'timeline' => $timeline,
			'public' => $public
		];
		return $this->getClient()->getContent('tasks.setDeadline', $params, 'carono\etxtru\response\SetDeadlineResponse');
	}


	/**
	 * Функция добавления комментария в заказ, только для заказчика или назначенного исполнителя.
	 *
	 * @param int $id Идентификатор заказа, обязательный параметр
	 * @param string $text Текст комментария, максимум 2048 символов, обязательный параметр.
	 * @param int $hide Флаг скрытия текста комментария (1 - скрывать, 0 или отсутствует - не скрывать), необязательный
	 * параметр
	 * @return \carono\etxtru\response\SaveCommentResponse|\stdClass
	 */
	public function saveComment($id, $text, $hide)
	{
		$params = [
			'id' => $id,
			'text' => $text,
			'hide' => $hide
		];
		return $this->getClient()->getContent('tasks.saveComment', $params, 'carono\etxtru\response\SaveCommentResponse');
	}


	/**
	 * Функция создает заявку в обратную связь на снятие исполнителя с заказа.
	 *
	 * @param int $id Идентификатор заказа, с которого снимать исполнителя, заказ должен быть в статусе "На проверке" и
	 * текущий исполнитель должен иметь хоть один сданный результат.
	 * @param string $text Текст заявки на снятие, причины, недочеты.
	 * @return \carono\etxtru\response\SendNoteFailResponse|\stdClass
	 */
	public function sendNoteFail($id, $text)
	{
		$params = [
			'id' => $id,
			'text' => $text
		];
		return $this->getClient()->getContent('tasks.sendNoteFail', $params, 'carono\etxtru\response\SendNoteFailResponse');
	}
}
