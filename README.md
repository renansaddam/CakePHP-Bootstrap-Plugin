CakePHP + Twitter Bootstrap Plugin
==================================

This plugin contains two helpers that provides integration between **CakePHP** and [Twitter Bootstrap](http://twitter.github.com/bootstrap/):

* **TwitterBootstrap Helper** - Create some basic elements, like **Twitter Bootstrap** labels and badges
* **TwitterBootstrap Form Helper** - Create the form markup required by **Twitter Bootstrap**

Installation
------------

Clone the repository:

```shell
$ git clone https://github.com/TiuTalk/CakePHP-Bootstrap-Plugin.git Plugin/TwitterBootstrap
```

Or use it as a submodule:

```shell
$ git submodule add https://github.com/TiuTalk/CakePHP-Bootstrap-Plugin.git Plugin/TwitterBootstrap
```

Add the helpers to your Controller:

```php
<?php
public $helpers = array(
	'TwitterBootstrap.TwitterBootstrapForm',
	'TwitterBootstrap.TwitterBootstrap',
);
```

Alternatively, you can use the **TwitterBootstrapForm Helper** as your default **FormHelper**:

```php
<?php
public $helpers = array(
	'Form' => array(
		'className' => 'TwitterBootstrap.TwitterBootstrapForm'
	),
	'TwitterBootstrap.TwitterBootstrap',
);
```
This way you can still use ```$this->Form->input('name')``` and get the **TwitterBootstrap** form markup.

 
Twitter Bootstrap Helper
-----

With the **TwitterBootstrap Helper** you can create some generic **TwitterBootstrap** elements, like:

### Labels ####
```php
<?php
echo $this->TwitterBootstrap->label('Confirmed', 'success');

// <span class="label label-success">Confirmed</span>
```

### Badges ####
```php
<?php
echo $this->TwitterBootstrap->badge(2, 'important');

// <span class="badge badge-important">2</span>
```