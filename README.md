tdd-phpunit-vs-bdd-behat-poc
============================

Just a POC to show differences between TDD (phpunit) and BDD (behat)

## Install
Assuming that you are in an unix environment and that you already have php 5.3+ installed, follow these steps:

###Install composer: 
####curl http://getcomposer.org/installer | php
####php composer.phar install

Clone the git repository:
git clone https://github.com/lucadv/tdd-phpunit-vs-bdd-behat-poc.git

Download dependencies:
composer install

##Run tests
bin/behat 
bin/phpunit
