<?php
function h($value)
{
  return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}
try {
  $name = h($_POST['lastName']) . ' ' . h($_POST['firstName']);
  $furigana = h($_POST['lastFurigana']) . ' ' . h($_POST['firstFurigana']);
  $postal = h($_POST['firstPostal']) . h($_POST['secondPostal']);
  $address = h($_POST['address']);
  $phone = h($_POST['firstPhone']) . h($_POST['secondPhone']) . h($_POST['thirdPhone']);
  $mail = h($_POST['mail']);
  $message = h($_POST['message']);
  require_once('./DBInfo.php');
  $pdo = new PDO(DBInfo::DSN, DBInfo::USER, DBInfo::PASSWORD);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $statement = $pdo->prepare('INSERT INTO contacts SET name=?, furigana=?, postal=?, address=?, phone=?,mail=?, message=?,create_at=NOW()');
  $statement->bindValue(1, empty($name) ? null : $name, PDO::PARAM_STR);
  $statement->bindValue(2, empty($furigana) ? null : $furigana, PDO::PARAM_STR);
  $statement->bindValue(3, empty($postal) ? null : $postal, PDO::PARAM_INT);
  $statement->bindValue(4, empty($address) ? null : $address, PDO::PARAM_STR);
  $statement->bindValue(5, empty($phone) ? null : $phone, PDO::PARAM_INT);
  $statement->bindValue(6, empty($mail) ? null : $mail, PDO::PARAM_STR);
  $statement->bindValue(7, empty($message) ? null : $message, PDO::PARAM_STR);
  $statement->execute();
} catch (PDOException $e) {
  $code = $e->getCode();
  $message = $e->getMessage();
  print("{$code}/{$message}<br/>");
}

$pdo = null;
