<?php

namespace Enigma972\OrangeSms;

use Symfony\Component\Notifier\Transport\Dsn;
use Symfony\Component\Notifier\Transport\TransportInterface;
use Symfony\Component\Notifier\Exception\IncompleteDsnException;
use Symfony\Component\Notifier\Transport\AbstractTransportFactory;
use Symfony\Component\Notifier\Exception\UnsupportedSchemeException;

final class OrangeSmsTransport extends AbstractTransportFactory
{
    /**
     * @return OrangeSmsTransport
     */
    public function create(Dsn $dsn): TransportInterface
    {
        $scheme = $dsn->getScheme();

        if ('orangesms' !== $scheme) {
            throw new UnsupportedSchemeException($dsn, 'orangesms', $this->getSupportedSchemes());
        }

        $user = $this->getUser($dsn);
        $password = $this->getPassword($dsn);
        $from = $dsn->getOption('from');
        $senderName = $dsn->getOption('senderName');
        
        if (!$from) {
            throw new IncompleteDsnException('Missing from.', $dsn->getOriginalDsn());
        }

        return new OrangeSmsTransport($user, $password, $from, $senderName, $this->client, $this->dispatcher);
    }

    protected function getSupportedSchemes(): array
    {
        return ['orangesms'];
    }
}
