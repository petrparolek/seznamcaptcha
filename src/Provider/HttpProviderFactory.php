<?php

namespace Minetro\SeznamCaptcha\Provider;

use CaptchaHTTP;

final class HttpProviderFactory implements ProviderFactory
{

	/**
	 * @return SeznamCaptcha
	 */
	public function create()
	{
		return new SeznamCaptcha(new CaptchaHTTP("captcha.seznam.cz", 80));
	}

}
