<?php

namespace cv6\NoticeCountdown\XF\Admin\Controller;

use XF\Mvc\FormAction;

class Notice extends XFCP_Notice
{

	protected function noticeSaveProcess(\XF\Entity\Notice $notice)
	{
		$form = parent::noticeSaveProcess($notice);

		$input = $this->filter([
			'cv6_countdown' => 'str'
		]);

		$form->basicEntitySave($notice, $input);

		return $form;
	}

	protected function noticeAddEdit(\XF\Entity\Notice $notice)
	{
		$reply = parent::noticeAddEdit($notice);

		if ($reply instanceof \XF\Mvc\Reply\View)
		{
			$reply->setParams([
				'cv6_countdown' => 'no'
			]);
		}

		return $reply;
    }    

}