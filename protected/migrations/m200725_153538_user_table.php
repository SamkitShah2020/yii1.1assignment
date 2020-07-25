<?php

class m200725_153538_user_table extends CDbMigration
{
	public function up()
	{
	  $this->createTable('tbl_user', array(
 											'id' => 'pk',
 											'name' => 'string NOT NULL',
 											'create_time' => 'datetime DEFAULT NULL',
 											'update_time' => 'datetime DEFAULT NULL',
 										  ), 'ENGINE=InnoDB');
	}

	public function down()
	{
		$this->dropTable('tbl_user');
		//echo "m200725_153538_user_table does not support migration down.\n";
		//return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}