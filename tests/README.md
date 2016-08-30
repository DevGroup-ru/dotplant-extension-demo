This directory contains various tests for the extension.

Tests in `codeception` directory are developed with [Codeception PHP Testing Framework](http://codeception.com/).

Follow these steps to prepare for the tests:

1. Install development environment:
   ```
   composer install --dev

2. Create `database` database and update it by applying migrations (you may skip this step if you do not have created any migrations yet):

   ```
   bin/yii migrate
   ```

   The command needs to be run in the `tests` directory.
   The database configuration can be found at `tests/config/db.php`.

3. Build the test suites:

   ```
   vendor/bin/codecept build
   ```

4. In order to be able to run acceptance tests you need to start a webserver. The simplest way is to use PHP built in
webserver. In the `web` directory execute the following:

   ```
   bin/yii serve
   selenium-server-standalone // for tests with WebDriver
   ```

5. Now you can run the tests with the following commands:

   ```
   # run all available tests
   vendor/bin/codecept run
   # run acceptance tests
   vendor/bin/codecept run acceptance
   # run functional tests
   vendor/bin/codecept run functional
   # run unit tests
   vendor/bin/codecept run unit
   ```

Please refer to [Codeception tutorial](http://codeception.com/docs/01-Introduction) for
more details about writing and running acceptance, functional and unit tests.