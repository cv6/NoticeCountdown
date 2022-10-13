<?php

namespace cv6\NoticeCountdown;

use XF\AddOn\AbstractSetup;
use XF\AddOn\StepRunnerInstallTrait;
use XF\AddOn\StepRunnerUninstallTrait;
use XF\AddOn\StepRunnerUpgradeTrait;
use XF\Db\Schema\Alter;


class Setup extends AbstractSetup
{
	use StepRunnerInstallTrait;
	use StepRunnerUpgradeTrait;
	use StepRunnerUninstallTrait;

	public function installStep1()
	{
		$this->schemaManager()->alterTable('xf_notice', function (Alter $table) {
			$table->addColumn('cv6_countdown', 'varchar',50)->setDefault(NULL)->nullable();
		});		
	}


	public function uninstallStep1()
	{
		$this->schemaManager()->alterTable('xf_notice', function (Alter $table) {
			$table->dropColumns('cv6_countdown');
		});
	}

}