<?php

namespace AntonShevchuk\YandexXml\Exceptions;

/**
 * Class YandexXmlException for work with YandexXml
 *
 * @author   Mihail Bubnov <bubnov.mihail@gmail.com>
 *
 * @package  YandexXml
 */
class YandexXmlException extends \Exception
{
    const EMPTY_USER_OR_KEY = 0;
    const EMPTY_QUERY = 2;

    /**
     * Errors
     *
     * @var array
     */
    static private $errors = array(
        self::EMPTY_USER_OR_KEY => 'Не указан user и/или key',
        1 => 'Синтаксическая ошибка — ошибка в языке запросов',
        self::EMPTY_QUERY => 'Задан пустой поисковый запрос — элемент query не содержит данных',
        8 => 'Зона не проиндексирована — обратите внимание на корректность параметров зонно-атрибутивного поиска',
        9 => 'Атрибут не проиндексирован — обратите внимание на корректность параметров зонно-атрибутивного поиска',
        10 => 'Атрибут и элемент не совместимы — обратите внимание на корректность параметров зонно-атрибутивного поиска',
        12 => 'Результат предыдущего запроса уже удален — задайте запрос повторно, не ссылаясь на идентификатор предыдущего запроса',
        15 => 'Искомая комбинация слов нигде не встречается',
        18 => 'Ошибка в XML-запросе — проверьте валидность отправляемого XML и корректность параметров',
        19 => 'Заданы несовместимые параметры запроса — проверьте корректность группировочных атрибутов',
        20 => 'Неизвестная ошибка — при повторяемости ошибки обратитесь к разработчикам с описанием проблемы',
        31 => 'Пользователь не зарегистрирован на сервисе — проверьте, что запросы отправляются от лица правильного пользователя',
        32 => 'Лимит запросов исчерпан — увеличьте лимит запросов, став партнёром Рекламной Сети Яндекса',
        33 => 'Запрос пришёл с IP-адреса, не входящего в список разрешённых — настройте правильный IP-адрес',
        34 => 'Пользователь не зарегистрирован в Яндекс.Паспорте — проверьте, что запросы отправляются от лица правильного пользователя',
        37 => 'Неверное значение параметра запроса — проверьте полноту и корректность отправляемых вами параметров запроса',
        42 => 'Ключ неверен — проверьте, что вы используете правильный адрес для совершения запросов, выданный вам на странице настроек',
        43 => 'Версия ключа неверна — скопируйте со страницы настроек новый адрес для совершения запросов и используйте его',
        44 => 'Данный адрес для совершения запросов больше не поддерживается — используйте адрес, выданный вам на странице настроек',
        48 => 'Тип поиска, указанный при регистрации, не совпадает с типом поиска, используемым для запроса данных',
        100 => 'Существует высокая вероятность, что запрос отправлен роботом.',
    );

    /**
     *
     * @param integer $code
     * @param string $msg If code exists in errors, this message will be overwriten
     * @return mixed|string
     */
    static public function solveMessage($code, $msg = '')
    {
        return isset(self::$errors[$code]) ? self::$errors[$code] : $msg;
    }
}