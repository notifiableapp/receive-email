<?php

namespace Notifiable\Filters;

use Illuminate\Support\Facades\Config;
use Notifiable\Console\Contracts\EmailFilter;
use PhpMimeMailParser\Parser;

class SenderAddressBlacklistFilter implements EmailFilter
{
    public function filter(Parser $email): bool
    {
        $from = $email->getAddresses('from')[0]['address'];

        return in_array($from, Config::array('notifiable.sender-address-blacklist', []));
    }
}
