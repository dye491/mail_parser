<?php

use yii\db\Migration;

/**
 * Class m180116_101142_restore_db
 */
class m180116_101142_restore_db extends Migration
{
    public function up()
    {
        $sql = file_get_contents(dirname(__DIR__) . '/projects-production-18.11.2016.sql');
        $this->execute($sql);
    }

    public function down()
    {
        echo "m180116_101142_restore_db cannot be reverted.\n";

        return false;
    }

}
