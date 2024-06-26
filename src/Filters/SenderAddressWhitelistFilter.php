<?php

namespace Notifiable\ReceiveEmail\Filters;

use Illuminate\Support\Facades\Config;
use Notifiable\ReceiveEmail\Contracts\EmailFilter;
use PhpMimeMailParser\Parser;

class SenderAddressWhitelistFilter implements EmailFilter
{
    public function filter(Parser $email): bool
    {
        $from = $email->getAddresses('from')[0]['address'];

        return ! in_array($from, Config::array('notifiable.sender-address-whitelist', []));
    }
}
