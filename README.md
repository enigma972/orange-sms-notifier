Orange Sms Notifier
================

Provides [Orange Sms](https://developer.orange.com/apis/sms) integration for Symfony Notifier.

DSN example
-----------

```
ORANGE_SMS_DSN=orangesms://CLIENT_ID:CLIENT_SECRET@default?from=FROM&sender_name=SENDER_NAME
```

where:

 - `CLIENT_ID` is your Orange APP client ID
 - `CLIENT_SECRET` is the Orange APP client secret
 - `FROM` is the sender phone number
 - `SENDER_NAME` is the sender name

example:

```
ORANGE_SMS_DSN=orangesms://RbttXve8o2y3IglAqJXlXTzZywyyjqKo:iNpfgVeHusPEKrrp@default?from=+243000000&sender_name=platformXYZ
```

See Orange Sms documentation at https://developer.orange.com/apis/sms-cd/api-reference
