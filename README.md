![](https://heatbadger.now.sh/github/readme/contributte/demo-frankenphp/)

<p align=center>
  <a href="https://github.com/contributte/demo-frankenphp/actions"><img src="https://badgen.net/github/checks/contributte/demo-frankenphp/master"></a>
  <a href="https://coveralls.io/r/contributte/demo-frankenphp"><img src="https://badgen.net/coveralls/c/github/contributte/demo-frankenphp"></a>
  <a href="https://packagist.org/packages/contributte/demo-frankenphp"><img src="https://badgen.net/packagist/dm/contributte/demo-frankenphp"></a>
  <a href="https://packagist.org/packages/contributte/demo-frankenphp"><img src="https://badgen.net/packagist/v/contributte/demo-frankenphp"></a>
</p>
<p align=center>
  <a href="https://packagist.org/packages/contributte/demo-frankenphp"><img src="https://badgen.net/packagist/php/contributte/demo-frankenphp"></a>
  <a href="https://github.com/contributte/demo-frankenphp"><img src="https://badgen.net/github/license/contributte/demo-frankenphp"></a>
  <a href="https://bit.ly/ctteg"><img src="https://badgen.net/badge/support/gitter/cyan"></a>
  <a href="https://bit.ly/cttfo"><img src="https://badgen.net/badge/support/forum/yellow"></a>
  <a href="https://contributte.org/partners.html"><img src="https://badgen.net/badge/sponsor/donations/F96854"></a>
</p>

<p align=center>
Website 🚀 <a href="https://contributte.org">contributte.org</a> | Contact 👨🏻‍💻 <a href="https://f3l1x.io">f3l1x.io</a> | Twitter 🐦 <a href="https://twitter.com/contributte">@contributte</a>
</p>

-----

## Goal

Demo of [FrankenPHP](https://github.com/dunglas/frankenphp) with [Nette Framework](https://nette.org).

## Installation

You will need `PHP 8.2+` and [Composer](https://getcomposer.org/).

Create project using composer.

```bash
composer create-project -s dev contributte/demo-frankenphp acme
```

Now you have application installed. It's time to run it.

## Startup

Spin up Docker stack. FrankenPHP with Caddyserver.

```bash
docker compose up
```

Then visit [http://localhost:8080](http://localhost:8000) in your browser.

List of URL's:

- [http://localhost:8080/](http://localhost:8000)
- [http://localhost:8080/api](http://localhost:8000/api)
- [http://localhost:8080/api/phpinfo](http://localhost:8000/api/phpinfo)

## Benchmark

```
➜ hey -n 200 -c 100 http://localhost:8080/

Summary:
  Total:	0.0526 secs
  Slowest:	0.0512 secs
  Fastest:	0.0010 secs
  Average:	0.0228 secs
  Requests/sec:	3804.3427


Response time histogram:
  0.001 [1]	|■
  0.006 [69]	|■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
  0.011 [26]	|■■■■■■■■■■■■■■■
  0.016 [4]	|■■
  0.021 [0]	|
  0.026 [0]	|
  0.031 [0]	|
  0.036 [16]	|■■■■■■■■■
  0.041 [43]	|■■■■■■■■■■■■■■■■■■■■■■■■■
  0.046 [14]	|■■■■■■■■
  0.051 [27]	|■■■■■■■■■■■■■■■■


Latency distribution:
  10% in 0.0016 secs
  25% in 0.0030 secs
  50% in 0.0346 secs
  75% in 0.0386 secs
  90% in 0.0485 secs
  95% in 0.0493 secs
  99% in 0.0509 secs

Details (average, fastest, slowest):
  DNS+dialup:	0.0069 secs, 0.0010 secs, 0.0512 secs
  DNS-lookup:	0.0020 secs, 0.0000 secs, 0.0054 secs
  req write:	0.0001 secs, 0.0000 secs, 0.0033 secs
  resp wait:	0.0157 secs, 0.0009 secs, 0.0365 secs
  resp read:	0.0001 secs, 0.0000 secs, 0.0013 secs

Status code distribution:
  [500]	200 responses
```

## Development

See [how to contribute](https://contributte.org/contributing.html) to this package.

This package is currently maintaining by these authors.

<a href="https://github.com/f3l1x">
    <img width="80" height="80" src="https://avatars2.githubusercontent.com/u/538058?v=3&s=80">
</a>

-----

Consider to [support](https://contributte.org/partners.html) **contributte** development team. Also thank you for using this project.
