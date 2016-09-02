<?php

setcookie(substr(sha1('UNNETT'.'id'),10),21);

echo $_COOKIE[substr(sha1('UNNETT'.'id'),10)];
