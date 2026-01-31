<?php

namespace cv6\NoticeCountdown\XF\Admin\Controller;

use XF\AddOn\DataType\Phrase;
use XF\Mvc\FormAction;

class NoticeController extends XFCP_NoticeController
{

	protected function noticeSaveProcess(\XF\Entity\Notice $notice)
	{
		$form = parent::noticeSaveProcess($notice);

		$input = $this->filter([
			'cv6_countdown' => 'str',
			'cv6_countdown_icon' => 'str',
			'page_criteria' => 'array'
		]);

		if (empty($input['cv6_countdown']))
		{
			$input['cv6_countdown'] = 'no';
		}

		if ($input['cv6_countdown'] != 'no')
		{
			$criteria = $input['page_criteria'];

			if ($input['cv6_countdown'] != 'no' && array_key_exists('before', $criteria) && array_key_exists('rule', $criteria['before']) && $criteria['before']['rule'] == 'before')
			{
				$form->basicEntitySave($notice, $input);
			}
			else
			{
				$form->logError(\XF::phrase('cv6_no_enddate_for_countdown'), 'cv6_countdown');
			}
		}
		else
		{
			$input['cv6_countdown_icon'] = '';
			$form->basicEntitySave($notice, $input);
		}

		return $form;
	}

}