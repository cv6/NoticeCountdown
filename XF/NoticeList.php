<?php

namespace cv6\NoticeCountdown\XF;

use XF\Repository\IconRepository;

class NoticeList extends XFCP_NoticeList
{

	protected function getCountdownClass($item)
	{
		$possible_classes = [
			'default','plate','badge','custom','icon','bigplate'
		];
		$class = "cv6-countdown";
		if (in_array($item, $possible_classes))
		{
			$class .= " " . $class."--".$item;
		}
		return $class;
	}

	protected function getCountdownDays($date)
	{
		$end = new \DateTime($date. " 23:59");
		$today = new \DateTime("now");
		$interval = $today->diff($end);
		return $interval->format('%r%a');
	}

	public function addNotice($key, $type, $message, array $override = [])
	{
		parent::addNotice($key, $type, $message, $override);

		if (stristr($message,"{countdown}"))
		{
			$days = 0;
			foreach($this->notices[$type][$key]['page_criteria'] as $criteria)
			{
				if ($criteria['rule'] == 'before')
				{
					// found the needed criteria
					$days =  $this->getCountdownDays($criteria['data']['ymd']);
					continue;
				}
			}
			$newMessage = $this->notices[$type][$key]['message'];
			if (array_key_exists('cv6_countdown', $this->notices[$type][$key]))
			{
				$icon = '';
				if (array_key_exists('cv6_countdown_icon', $this->notices[$type][$key])) {
					$icon = $this->notices[$type][$key]['cv6_countdown_icon'];
					$iconRenderer = $this->app->iconRenderer();
					$icon = $iconRenderer->render($icon);
				}
				$tokens['{countdown}'] = '<span class="' . $this->getCountdownClass($this->notices[$type][$key]['cv6_countdown']) . '">'. ( $icon ?: '') . ' ' . $days . '</span>';
				$this->notices[$type][$key]['message'] = strtr($newMessage, $tokens);
			}
		}
	}

}