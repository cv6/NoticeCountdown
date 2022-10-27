<?php

namespace cv6\NoticeCountdown\XF\Admin\Controller;

use XF\Mvc\FormAction;

class Notice extends XFCP_Notice
{

	protected function noticeSaveProcess(\XF\Entity\Notice $notice)
	{
		$form = parent::noticeSaveProcess($notice);

		$input = $this->filter([
			'cv6_countdown' => 'str',
			'page_criteria' => 'array'
		]);

		if (empty($input['cv6_countdown']))
		{
			$input['cv6_countdown'] = 'no';	
		}

		if ($input['cv6_countdown'] != 'no' && array_key_exists('before', $input['page_criteria']) && array_key_exists('rule', $input['page_criteria']['before']) && $input['page_criteria']['before']['rule'] == 'before')
		{
			$form->basicEntitySave($notice, $input);
		}
		else
		{
			$form->logError('No End Date for Countdown','cv6_countdown');
		}

		return $form;
	}

}