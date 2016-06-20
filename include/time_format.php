<?php

$data='amen';
function __hash($password, $obscured = NULL, $algorithm = "sha1")
{
  // whether to use user specified algorithm
  $mode = in_array($algorithm, hash_algos());
  // generate random salt
  $salt = uniqid(mt_rand(), true);
  // hash it
  $salt = $mode ? hash($algorithm, $salt) : sha1($salt);
  // get the length
  $slen = strlen($salt);
  // compute the actual length of salt we will use
  // 1/8 to 1/4 of the hash, with shorter passwords producing longer salts
  $slen = max($slen >> 3, ($slen >> 2) - strlen($password));
  // if we are checking password against a hash, harvest the actual salt from it, otherwise just cut the salt we already have to the proper size
  $salt = $obscured ? __harvest($obscured, $slen, $password) : substr($salt, 0, $slen);
  // hash the password - this is maybe unnecessary
  $hash = $mode ? hash($algorithm, $password) : sha1($password);
  // place the salt in it
  //$hash = __scramble($hash, $salt, $password);
  // and hash it again
  $hash = $mode ? hash($algorithm, $hash) : sha1($hash);
  // cut the result so we can add salt and maintain the same length
  $hash = substr($hash, $slen);
  // ... do that
  //$hash = __scramble($hash, $salt, $password);
  // and return the result
  return $obscured && $obscured !== $hash ? false : $hash;
}
echo __hash($data);
?>