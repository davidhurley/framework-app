<?php
/**
 * @copyright  Copyright (C) 2012 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace App\View\Dashboard;

use Joomla\Factory;
use Joomla\Language\Text;

use App\View\DefaultHtmlView;

/**
 * Dashboard HTML view class for the application
 *
 * @since  1.0
 */
class DashboardHtmlView extends DefaultHtmlView
{
	/**
	 * Method to render the view.
	 *
	 * @return  string  The rendered view.
	 *
	 * @since   1.0
	 * @throws  \RuntimeException
	 */
	public function render()
	{
		$this->renderer->set('success', Factory::$application->input->get('success', FALSE));
		$this->renderer->set('logo', DEFAULT_THEME.'/images/logo.png');
		$this->renderer->set('base_url', BASE_URL);
		$this->renderer->set('config', Factory::getConfig());

		return parent::render();
	}
}
