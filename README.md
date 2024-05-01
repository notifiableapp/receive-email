# Receive Email

Let your Laravel app receive emails.

## Installation
```bash
composer require notifiableapp/receive-email
```

## Forge Recipe
```bash
sudo apt-get update


# INSTALL POSTFIX
sudo debconf-set-selections <<< "postfix postfix/mailname string {{server_name}}" # Replace {{server_name}} with your actual domain.
sudo debconf-set-selections <<< "postfix postfix/main_mailer_type string 'Internet Site'"

sudo DEBIAN_FRONTEND=noninteractive apt-get install -y postfix


# INSTALL MAILPARSE
sudo DEBIAN_FRONTEND=noninteractive apt-get install -y php-cli php-mailparse
```

## Deployment
Run this on your server to configure Postfix.
```bash
sudo php artisan notifiable:configure-postfix your-domain.com
```

## Credits
The solutions in this package are inspired by the following projects:
- [Mailcare](https://gitlab.com/mailcare/mailcare)