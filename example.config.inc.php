<?php

// The currency you're going to pay with when buying new coins
// This can also be a crypto currency you have on Coinbase
// EUR or USD or even ETH or BTC
define('CURRENCY','EUR');

// The crypto currency the bot is going to trade.
// BTC or ETH only the moment
define('CRYPTO','BTC');

// Simulate or really commit buy/sells?
//if false, transactions are really paid, with true it's just a simulation
define('SIMULATE',true); 

// The local timezone of this machine
// must be a string according to http://php.net/manual/en/timezones.php
define('TIMEZONE','Europe/Paris'); 

//how long between price checks in the watchdog?
define('SLEEPTIME',9);

// chat system output (rocket.chat and Slack supported)
define('ROCKETCHAT_REPORTING',true); //enables/disables rocketchat reporting
define('ROCKETCHAT_WEBHOOK',''); // The URL of the webhook. Also works with a Slack webhook!

// Coinbase
define('COINBASE_KEY','eJx1MhpTppSzqJrb');
define('COINBASE_SECRET','3wGajt0qpXSUaTbcgnqqGw3er1Uo7uvi');

// REDIS for storing your data (bitcoin prices, orders, etc)
// if REDIS_SERVER is not set, will use a local JSON file
// if the JSON file is present AND REDIS_SERVER is set, will convert to redis and delete JSON
define('REDIS_SERVER', '');
define('REDIS_PORT', 6379);
define('REDIS_PASS','');
define('REDIS_DB',0);
