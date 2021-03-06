
<?php
/**
 * Created by PhpStorm.
 * User: angel
 * Date: 20.06.17
 * Time: 14:56
 */
//   малко конзолно приложение,
//   което приема команди от стандартния вход (конзолата) за:
//     -регистрация на потребител в системата
//     -логин на потребители (Съществуващи )
//     -създаване на въпроси във форума от определени автори( от логнатияя потребител)
//     -създаване на отговори на въпроси (от автори .....)
//     -създаване на комантари ( от автори ..... )


/**
 * Потрбители:
 *  -пореден номер (тип инт)
 *  - име (тип стринг)
 *  -парола (тип стринг)
 *  -зададени въпроси(тип Въпрос масив въпрос[])
 *  -създадени оговори ( тип Отговори масив - отговор[])
 *  -Коментари на отговори ( тип Отговори масив отговор[])
 *
 *
 * Въпроси:
 *  -пореден номер (тип инт)
 *  -заглавие ( тип стринг)
 *  -съдържание (тип стринг)
 *  -автор ( от типа "Потребител")
 *  -Отговори ( тип Отговори масив отговор[])
 *
 *
 * Отговори:
 *  -пореден номер (тип инт)
 *  -съдържание (тип стринг)
 *  -наКойВъпрос е отговора (тип "Въпрос")
 *  -наКойОтговор е коментирано ( тип Отговор )
 *  -Коментари ( тип Отговори масив отговор[])
 *
 *
 * Действия:
 *
 * register {username } {password}
 * login {username} {pessword}
 * ask {title} {body}
 * answer {QuostionID} {body}
 * comment {answerId} {body}
 *
 *
 *
 *
 */


require_once 'Content/Answer.php';
require_once 'Content/Question.php';
require_once 'User/User.php';
require_once 'forum.php';
$forum = new Forum();

try{
    $forum ->start();
}catch (Exception $e){
    echo $e ->getMessage();
  }
