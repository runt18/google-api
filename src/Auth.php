<?php
/**
 * Part of the Joomla Framework Google Package
 *
 * @copyright  Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla\Google;

/**
 * Google authentication class abstract
 *
 * @since  1.0
 */
abstract class Auth
{
	/**
	 * Options for the Google authentication object.
	 *
	 * @var    array|\ArrayAccess
	 * @since  1.0
	 */
	protected $options;

	/**
	 * Abstract method to authenticate to Google
	 *
	 * @return  boolean  True on success.
	 *
	 * @since   1.0
	 */
	abstract public function authenticate();

	/**
	 * Verify if the client has been authenticated
	 *
	 * @return  boolean  Is authenticated
	 *
	 * @since   1.0
	 */
	abstract public function isAuthenticated();

	/**
	 * Abstract method to retrieve data from Google
	 *
	 * @param   string  $url      The URL for the request.
	 * @param   mixed   $data     The data to include in the request.
	 * @param   array   $headers  The headers to send with the request.
	 * @param   string  $method   The type of http request to send.
	 *
	 * @return  mixed  Data from Google.
	 *
	 * @since   1.0
	 */
	abstract public function query($url, $data = null, $headers = null, $method = 'get');

	/**
	 * Get an option from the Auth object.
	 *
	 * @param   string  $key  The name of the option to get.
	 *
	 * @return  mixed  The option value.
	 *
	 * @since   1.0
	 */
	public function getOption($key)
	{
		return isset($this->options[$key]) ? $this->options[$key] : null;
	}

	/**
	 * Set an option for the Auth object.
	 *
	 * @param   string  $key    The name of the option to set.
	 * @param   mixed   $value  The option value to set.
	 *
	 * @return  Auth  This object for method chaining.
	 *
	 * @since   1.0
	 */
	public function setOption($key, $value)
	{
		$this->options[$key] = $value;

		return $this;
	}
}
