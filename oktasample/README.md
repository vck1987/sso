# Build Simple Login in PHP

This example shows how to user authentication in PHP, using Okta OAuth 2.0 to handle user login/logout.


**Prerequisites:** PHP, Composer, [Okta developer account](https://developer.okta.com/)

> [Okta](https://developer.okta.com) has Authentication and User Management APIs that reduce development time with instant-on, scalable user infrastructure. Okta's intuitive API and expert support make it easy for developers to authenticate, manage, and secure users and roles in any application.

## Getting Started

Copy this project to '/var/www/html'(Localhost) directory:

```
cd sso/oktasample
```

### Configure the application

Install the project dependencies, Copy the `.env` file and fill in your Okta details:

```
composer install
```

### Run the application

From the project directory, run:

```
php -S 127.0.0.1:8080 -t public
```

Then open `http://localhost:8080` and you will see the application.

## License

Apache 2.0, see [LICENSE](LICENSE).
