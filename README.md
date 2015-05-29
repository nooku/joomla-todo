# Joomla Todo component

[![Codacy Badge](https://www.codacy.com/project/badge/59e4bde131224ecca061404135c41f36)](https://www.codacy.com/app/timble/joomla-todo)

## What is Joomla Todo?

Joomla Todo is an example component for the [Nooku Framework](https://github.com/nooku/nooku-framework). It's a simple todo list solution with logging support.

It's a code 'kata' component and is used to demonstrate the power and magic of  [Nooku Framework](https://github.com/nooku/nooku-framework) by trying to do as much as possible with as few lines of code as possible as fast as possible.

> *A code kata is a simple exercise used to sharpen programming skills. You only actually practice problem solving the very first time you perform the kata. Then you repeat, and repeat again. And again. The objective of the exercise is to practice speed, technique and tools.*

## Requirements

- Nooku Framework 2 or newer.
- PHP 5.2 or newer.
- MySQL 5.

## Installation

Joomla Todo can and should be installed by using [Composer](https://getcomposer.org/). 

Go to the root directory of your Joomla installation in command line and execute this command:

```
composer require nooku/joomla-todo:1.*
```

## Contributing

We appreciate any contribution to Nooku Activities, whether it is related to bugs, grammar, or simply a suggestion or
improvement. We ask that any contribution follows a few simple guidelines in order to be properly received.

We follow the [GitFlow][gitflow-model] branching model, from development to release. If you are not familiar with it,
there are several guides and tutorials online to learn about it.

There are a few things you must know before submitting a pull request:

- All changes need to be made against the `develop` branch. However, it is very well appreciated and highly suggested to start a new feature branch from `develop` and make your changes in this new branch. This way we can just checkout your feature branch for testing before merging it into `develop`.
- We will not consider pull requests made directly to the `master` branch.

## License 

Joomla Todo is open-source software licensed under the [GPLv3 license](https://github.com/nooku/nooku-framework/blob/master/LICENSE.txt).

[gitflow-model]: http://nvie.com/posts/a-successful-git-branching-model/
